<div id="modalLogin" class="modal modal-fixed-footer">
    <div class="modal-content">
        <div class="container">
            <div class="row">
                <div class="center-align">
                    <img src="{{ asset('img/logo.jpg') }}" class="z-depth-5 circle responsive-img ac"
                        alt="Contact Person" id="logo1">
                </div>
                <h4 class="center-align">
                    S'identifier</h4>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mail</i>
                        <input id="email" type="email"
                            class="validate deep-orange-text darken-2  @error('email') is-invalid @enderror"
                            name="email" data-position="bottom" data-delay="50"
                            data-tooltip="Merci d'entrer votre email" required autocomplete="current-password">
                        <label for="courriel">Entrez votre email</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">person</i>
                        <input id="password" type="password"
                            class="deep-orange-text darken-2 validate  @error('password') is-invalid @enderror"
                            name="password" data-position="bottom" data-delay="50" data-tooltip="Mot de passe" required
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


            </diV>
            <div class="form-group row mb-0 center-align">
                <div class="col-md-8 offset-md-4">

                    @if (Route::has('password.request'))
                        <a class="link" href="{{('#modalPassword')}}"id="psw">
                            <span class="verte">{{ __('Mot de passe oublié ?') }}</span>
                        </a><br><br>
                    @endif
                    <button type="submit" class="btn btn-primary" href="#modalLogin"> <i class="material-icons prefix right">done</i>
                        {{ __('Login') }}
                    </button>


                </div>
            </div>
        </div>

</form>


</div>
<div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves btn-flat">Quitter</a>
</div>





























