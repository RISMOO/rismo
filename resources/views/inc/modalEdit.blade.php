<!-- Modal sendMessage -->
@auth
    @foreach ($messages as $message)



        <div id="modalEdit{{ $message->id }}" class="modal send1">
            <div class="modal-content">
                <p>
                <div container>
                    <div class="row">
                        <div class="center-align">
                            <img src="{{ asset('img/Sale.webp') }}"
                                alt="Contact Person" id="logo1" loading="lazy">
                        </div>

                        <div class="col m8 offset-m2 s8 offset-s2">
                            {!! Form::open(['action' => ['IndexController@update', $message->id], 'method' => 'PATCH']) !!}


                            <div class="input-field col s12">


                                {{ Form::textarea('message', $message->message, ['class' => 'materialize-textarea', 'data-length' => '120', 'id' => 'message', 'data-position' => 'left', 'data-delay' => '50', 'data-tooltip' => 'Merci de rediger votre message', 'required', 'rows' => '5']) }}</a>

                                <label for="message"></label>

                            </div>
                            <div class="input-field col s12">

                                <p> {{ Form::checkbox('published', $message->published, 1, ['class' => 'font-weight-bold', 'border', 'type' => 'checkbox', 'id' => 'test']) }}
                                    <label for="test">Cochez, si vous souhaitez afficher votre message sur le site</label>
                                </p>
                            </div>
                            <br>
                            <div class="input-field col s12 center-align"><br>

                                {!! Form::button("<i class='material-icons left'>send</i> Editer votre message ", ['class' => 'btn waves-effect waves z-depth-2 darken-1', 'value' => 'Envoyer', 'id' => 'sendMessageButton', 'type' => 'submit']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
                </p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Quitter</a>
            </div>
        </div>
    @endforeach
@endauth
