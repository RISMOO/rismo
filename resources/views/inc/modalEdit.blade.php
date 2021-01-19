<!-- Modal sendMessage -->
@if (Auth::user())
@foreach($messages as $message)
<div id="modalEdit{{ $message->id }}" class="modal modal-fixed-footer">
    <div class="modal-content">
        <p>
        <div container>
            <div class="row">
                <div class="center-align">
                    <img src="{{ asset('img/logo.jpg') }}" class="z-depth-5 circle responsive-img" alt="Contact Person"
                        id="logo1">
                </div>
                <h5 class="center-align send">
                    Bonjour <span class="userAuth"> {{ucfirst(Auth::user()->name)}}</span></h5>
                <div class="col m8 offset-m2 s8 offset-s2">
                    {!! Form::open(['action' => ['IndexController@update',$message->id], 'method' => 'PATCH'
                ]) !!}


                    <div class="input-field col s12">
                        <i class="material-icons prefix">edit</i>

                        {{ Form::textarea('message', $message->message, ['class' => 'materialize-textarea','data-length'=>"120", 'id' => 'message', 'data-position' => 'left', 'data-delay' => '50', 'data-tooltip' => 'Merci de rediger votre message', 'required', 'rows' => '5']) }}</a>

                        <label for="message"></label>

                    </div>
                    <div class="input-field col s12">

                     <p> {{Form::checkbox('published',$message->published,1,['class'=>'font-weight-bold','border','type'=>'checkbox','id'=>'test'])}}
                        <label for="test">Cochez, si vous souhaitez afficher votre message sur le site</label>
                    </p>
                    </div>
                    <br>

                    <div class="input-field col s12 center-align"><br>

                        {!! Form::button("<i class='material-icons left'>send</i> Envoyer ",['class'=>'btn waves-effect waves z-depth-2 darken-1','value'=>'Envoyer','id'=>'sendMessageButton','type'=>'submit'])!!}
                    </div>

                    </div>
                    {!! Form::close()!!}


                </div>
            </div>


        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Quitter</a>
    </div>
</div>
@endforeach
@endif

