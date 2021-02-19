@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col s12 ">
                    <div class="center-align">
                    <p>
                    <img src="{{ asset('img/logo.jpg') }}" class="z-depth-5 circle responsive-img dashboard"
                        alt="Contact Person" id="logo1"loading="lazy">
                    </p>

                   <h5>
                    Bonjour <span class="userAuth flow-text"> {{ ucfirst(Auth::user()->name) }}</span></h5>
                   <p> Bienvenue dans sur votre tableau de bord<br></p>



                    @if (count($messages) >= 1)
                        Vous avez écrits &nbsp;<strong
                            class="text-primary">{{ count($messages) }}</strong>&nbsp;&nbsp;message{{ count($messages) > 1 ? 's' : '' }}&nbsp;<br>

                    @else

                          <p>  Nous sommes le:<span class="orange-text"> {{ $date }}</span></p>




                       <p> Vous n'avez aucuns messages.</p><br>
                        <a class="waves-effect waves-light btn" href="#modalSend"
                        ><i
                             class="material-icons left">edit</i>Ecrire un message</a>



                <br>
                    @endif
                </h5>
                        </div>
                    </div>
                </div>
                @if (count($messages) >= 1)
                    <div class="col s12 m4 ">
                        Nous sommes le: {{ $date }}<br>
                @endif
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
                                        <a class="waves-effect waves-light btn" href="#modalEdit{{ $message->id }}"
                                           ><i
                                                class="material-icons left">edit</i>Editer</a>
                                    </td>
                                    <td>
                                        {!! Form::open(['action' => ['IndexController@destroy', $message->id], 'method' =>
                                        'POST']) !!}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::button(
                                                '<i
                                            class="material-icons left">delete</i> Supprimer',
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
            </div>
        </div>
    @endsection
