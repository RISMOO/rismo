<!-- Modal sendMessage -->
@auth
    @foreach ($messages as $message)

    <div id="modalEdit{{ $message->id }}" class="modalDialog text-center shadow">
        <div class="center-align">

            <div class="card -grey darken-1">
                <div class="card-content white-text">
                  <span class="card-title black-text">EDITER</span>
                  <p>
                    {!! Form::open(['action' => ['IndexController@update', $message->id], 'method' => 'PATCH']) !!}


                    <div class="input-field col s12">


                        {{ Form::textarea('message', $message->message, ['class' => 'materialize-textarea black-text', 'data-length' => '120', 'id' => 'message', 'data-position' => 'left', 'data-delay' => '50', 'data-tooltip' => 'Merci de rediger votre message', 'required', 'rows' => '5']) }}</a>

                        <label for="message"></label>

                    </div>

=
                    <div class="input-field col s12 center-align"><br>

                        {!! Form::button(" Editer ", ['class' => 'btn waves-effect waves z-depth-2 darken-1', 'value' => 'Envoyer', 'id' => 'sendMessageButton', 'type' => 'submit']) !!}
                    </div>
                </div>
                {!! Form::close() !!}

                  </p>

            </div>
                    <a href="#close" class="btn btn-danger login">ANNULER</a>

                </div>
              </div>
        </div>
    </div>


    @endforeach
@endauth
