@extends('layouts.app')

@section('content')
@include('inc.errorsuccess')
@if (session()->has('message'))
    <div class="card-content1 center-align" role="alert">

        {{ session()->get('message') }}
    </div>
@endif
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="card center-align cardHome">
                        <div class="card-content">
                      <h5 class="white-text">
                    Bonjour <span class="userAuth flow-text white-text"> {{ ucfirst(Auth::user()->name) }}</span></h5>
                   <p class="white-text"> Bienvenue dans sur votre tableau de bord<br></p>
                   @if (count($messages) >= 1)
                  <p class="white-text"> Vous avez écrits &nbsp;<strong
                       class="text-primary">{{ count($messages) }}</strong>&nbsp;&nbsp;message{{ count($messages) > 1 ? 's' : '' }}&nbsp;<br></p>
                       <a class="btn waves-effect waves-light btn-small" href="#modalSendMessage">
                        Ecrire un message</a>
               @else
                     <p class="white-text">  Nous sommes le:<span class=""> {{ $date }}</span></p>
                      <p  class="white-text"> Vous n'avez aucuns messages.</p><br>
                       <a class="btn waves-effect waves-light btn-small" href="#modalSendMessage">
                        Ecrire un message</a>

                       <br><br>
               @endif
                   <p class="white-text">Vous pouvez changer le theme ou la couleur de votre tableau de bord.</p>
                   <h6 class="couleur white-text">Couleurs</h6>
                   <a class="btn-floating  waves-effect waves-light bleu"onclick = "changeColor('#0694fe');"><i class="material-icons bleu">add</i></a>
                   <a class="btn-floating  waves-effect waves-light white"onclick = "changeColor('white');"><i class="material-icons white">add</i></a>
                   <a class="btn-floating  waves-effect waves-light green"onclick = "changeColor('green');"><i class="material-icons green">add</i></a>
                   <h6 class="couleur white-text">Themes</h6>
                   <!--
                   <a class="btn waves-effect waves-light btn-small" onclick = "changeImage();">Montagne</a>
                   <a class="btn waves-effect waves-light btn-small" onclick = "changeImage2();">Nature</a>
                   <a class="btn waves-effect waves-light btn-small" onclick = "changeImage3();">Ville</a>
                   -->
                     <div class="check">
                   <div class="switch">
                    <label>
                      <input type="checkbox"id="check1">
                      <span class="lever " id="lever"></span>
                    <span class="white-text">  MONTAGNE</span>
                    </label>
                  </div>
                  <div class="switch">
                    <label>

                      <input type="checkbox"id="check2">
                      <span class="lever"></span>
                      <span class="white-text"> NATURE</span>
                    </label>
                  </div>
                  <div class="switch">
                    <label>

                      <input type="checkbox"id="check3">
                      <span class="lever"></span>
                      <span class="white-text">VILLE</span>
                    </label>
                  </div>
                    </div>
                          </h5>
                        </div>
                    </div>
                </div>


                <div class="col s12">
                @if (!count($messages) == 0)

                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Messages</th>
                                <th>Editer</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                         <tbody>
                            <tr>
                                @foreach ($messages as $message)
                                    <td>{{ $message->message }}<br>
                                        Posté le :
                                        {{ Carbon\Carbon::parse($message->created_at)->format('d/m/Y à H:i') }}

                                    </td>
                                    <td>
                                        <a class="btn waves-effect waves-light btn-small" href="#modalEdit{{ $message->id }}"
                                           >EDITER
                                            </a>
                                    </td>
                                    <td>
                                        {!! Form::open(['action' => ['IndexController@destroy', $message->id], 'method' =>
                                        'POST']) !!}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::button(
                                               'Supprimer',
                                                ['class' => 'btn btn-danger', 'type' => 'submit']
                                            ) }}
                                        {!! Form::close() !!}
                                    </td>
                                 </tr>
                            @endforeach
                            @endif
                      </tbody>
                    </table>
                </div>

            </div>
        </div>


                           @endsection
