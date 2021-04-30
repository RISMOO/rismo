
 <div id="modalLogin1" class="modalDialog text-center shadow">
    <div class="center-align">

            <p class="center-align white-text">
              <img src="{{ asset('img/Sale.webp') }}"width="100"
              alt="logo3">

              <h4 class="white-text">LOGIN</h4>

              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-field col s12">
                   <!-- <i class="material-icons prefix b">mail</i>-->
                    <input id="email" type="email"
                        class="validate deep-orange-text darken-2  @error('email') is-invalid @enderror"
                        name="email" data-position="bottom" data-delay="50"
                        data-tooltip="" required autocomplete="current-password">
                    <label for="courriel">Entrez votre email</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-field col s12">
                  <!--  <i class="material-icons prefix b">person</i>-->
                    <input id="password" type="password"
                        class="deep-orange-text darken-2 validate  @error('password') is-invalid @enderror"
                        name="password" data-position="bottom" data-delay="50" data-tooltip="" required
                        autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="Mot de passe">Entrez votre mot de passe</label>
                </div>

                <div class="input-field col s12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>


                    </div><br>
                </div>
                <div class="input-field col s12">
                    <a class="link" href="{{('#modalRegister') }}"id="hide">
                      <span class="verte">{{ __('S\'enregistrer') }}</span>
                    </a>
                </div>

        <div class="form-group row mb-0 center-align">
            <div class="col-md-8 offset-md-4">

                @if (Route::has('password.request'))
                    <a class="link" href="{{('#modalPassword')}}"id="psw">
                        <span class="verte">{{ __('Mot de passe oublié ?') }}</span>
                    </a><br><br>
                @endif
                <hr>
                <button type="submit" class="btn modal-trigger btn-primary login">
                    {{ __('Login') }}
                </button>

                <a href="#close" class="btn btn-danger shadow login">ANNULER</a>
            </div>

        </div>
    </div>

    </form>
            </p>

 </div>




