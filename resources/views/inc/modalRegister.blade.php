<!-- Modal Structure -->
<div id="modalRegister" class="modal modal-fixed-footer">
    <div class="modal-content">

        <div class="container">
            <div class="row">
                <div class="center-align">
                <img src="{{ asset('img/logo.jpg') }}"
                class="z-depth-5 circle responsive-img" alt="Contact Person"id="logo1">
                </div>
                <h5 class="center-align">
                    S'enregistrer</h5>
                    <p class="right"><span class="red-text">*</span> champs obligatoires</p>
                <form method="POST" action="{{ route('register') }}" class="col s12">
                    @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">person</i>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <label for="name">Entrez votre Nom <span class="red-text">*</span></label>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">tag_faces</i>
                                <input id="fonction" type="text" class="form-control @error('fonction') is-invalid @enderror" name="fonction" value="{{ old('fonction') }}"autocomplete="fonction" autofocus>
                                <label for="fonction">Entrez votre fonction</label>
                                @error('fonction')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-field col s12">
                                <i class="material-icons prefix">mail</i>
                                <input id="email" type="email"
                                    class="form-control validate  @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <label for="email">Entrez votre email <span class="red-text">*</span></label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input id="password" type="password"
                                    class="form-control validate @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="password"> Entrez votre mot de passe <span class="red-text">*</span></label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <label for="password">Confirmer le mot de passe<span class="red-text">*</span> </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="form-group row mb-0 center-align">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary login"><i class="material-icons prefix right">done</i>
                                    {{ __('S\'enregistrer') }}
                                </button><br>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves btn-flat">Quitter</a>
    </div>
</div>



























