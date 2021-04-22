<!-- Modal sendMessage -->
@if (Auth::user())

<div id="modalSendMessage" class="modalDialog text-center shadow">
    <div class="center-align">

        <div class="card -grey darken-1">
            <div class="card-content white-text">
              <span class="card-title black-text">MESSAGE</span>
              <p>
                {!! Form::open(['action' => 'IndexController@store', 'method' => 'PATCH', 'enctype' =>
                'multipart/form-data']) !!}
                 {{ Form::textarea('message', '', ['class' => 'materialize-textarea black-text','data-length'=>"120", 'id' => 'textarea2', 'data-position' => 'left', 'data-delay' => '50', 'data-tooltip' => 'Merci de rediger votre message', 'required', 'rows' => '5']) }}</a>

                 <label for="textarea" class="dark-text" for="message">Ecrivez Votre message</label>


             <div class="input-field col s12">

              <p> {{Form::checkbox('published','1',false,['class'=>'font-weight-bold','border','type'=>'checkbox','id'=>'test'])}}
                 <label class="black-text testcheck" for="test">Cochez, si vous souhaitez afficher votre message</label>
             </p>
             </div>
             <br>

             <div class="input-field col s12 center-align"><br>

                 {!! Form::button(" Envoyer ",['class'=>'btn waves-effect waves z-depth-2 darken-1','value'=>'Envoyer','id'=>'sendMessageButton','type'=>'submit'])!!}
             </div>
            </div>

             {!! Form::close()!!}

              </p>


          </div>
          <a href="#close" class="btn btn-danger login">ANNULER</a>
    </div>
</div>
</div>



@endif

