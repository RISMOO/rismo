<!-- Modal sendMessage -->
@if (Auth::user())



<div id="modalSendMessage" class="modal send1">

    <div class="modal-content">
        <p>
        <div container>
            <div class="row">
                <div class="center-align">
                    <img src="{{ asset('img/Sale.webp') }}"alt="logo"
                        id="logo1">
                </div>
                <h5 class="center-align black-text">
                    Bonjour <span class="userAuth"> {{ucfirst(Auth::user()->name)}}</span></h5>
                <div class="col m8 offset-m2 s8 offset-s2">
                    {!! Form::open(['action' => 'IndexController@store', 'method' => 'PATCH', 'enctype' =>
                    'multipart/form-data']) !!}


                    <div class="input-field col s12">


                        {{ Form::textarea('message', '', ['class' => 'materialize-textarea','data-length'=>"120", 'id' => 'message', 'data-position' => 'left', 'data-delay' => '50', 'data-tooltip' => 'Merci de rediger votre message', 'required', 'rows' => '5']) }}</a>

                        <label class="dark-text" for="message">Ecrivez Votre message</label>

                    </div>
                    <div class="input-field col s12">

                     <p> {{Form::checkbox('published','1',false,['class'=>'font-weight-bold','border','type'=>'checkbox','id'=>'test'])}}
                        <label class="black-text" for="test">Cochez, si vous souhaitez afficher votre message sur le site</label>
                    </p>
                    </div>
                    <br>

                    <div class="input-field col s12 center-align"><br>

                        {!! Form::button(" Envoyer ",['class'=>'btn waves-effect waves z-depth-2 darken-1','value'=>'Envoyer','id'=>'sendMessageButton','type'=>'submit'])!!}
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
@endif

