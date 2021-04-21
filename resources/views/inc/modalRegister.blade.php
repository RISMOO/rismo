<!-- Modal Structure -->
<div id="modalRegister" class="modalDialog text-center shadow">
    <div class="center-align">
      <p class="center-align white-text">
        <img src="{{ asset('img/Sale.png') }}" width="100"
        alt="logo3">
        <h4 class="white-text">REGISTER</h4>
        <form method="POST" action="{{ route('register') }}" class="col s12">
            @csrf

                    <div class="input-field col s12">

                        <input id="name" type="text" class="form-control white-text @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <label for="name">Entrez votre Nom <span class="red-text">*</span></label>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field col s12">

                        <input id="fonction" type="text" class="form-control white-text @error('fonction') is-invalid @enderror" name="fonction" value="{{ old('fonction') }}"autocomplete="fonction" autofocus>
                        <label for="fonction">Entrez votre fonction</label>
                        @error('fonction')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-field col s12">

                        <input id="email" type="email"
                            class="form-control validate white-text  @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <label for="email">Entrez votre email <span class="red-text">*</span></label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field col s12">

                        <input id="password" type="password"
                            class="form-control white-text validate @error('password') is-invalid @enderror" name="password"
                            required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="password"> Entrez votre mot de passe <span class="red-text">*</span></label>
                    </div>
                    <div class="input-field col s12">

                        <input id="password-confirm" type="password" class="form-control white-text" name="password_confirmation" required autocomplete="new-password">
                        <label for="password">Confirmer le mot de passe<span class="red-text">*</span> </label>
                    </div>


                <div class="form-group row mb-0 center-align">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary login">
                            {{ __('S\'enregistrer') }}
                        </button><br>
                    </div>
                </div>

        </form>
    </p>
      <hr />
      <a href="#close" class="btn btn-danger login">ANNULER</a>
    </div>
  </div>
