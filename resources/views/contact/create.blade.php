@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="center-align marg">
            <img src="{{ asset('img/logo.jpg') }}" class="z-depth-5 circle responsive-img " alt="Contact Person"
                id="logo1">
        </div>
        <div class="col m10 offset-m1 s12">
            <h2 class="center-align">Contact </h2>
            <div class="row">
                <form class="col m8 offset-m2 s12" action="/contact"method="POST">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12">

                            <i class="material-icons prefix">person</i>
                            <input id="name" type="text"
                                class="validate deep-orange-text darken-2  @error('name') is-invalid @enderror"
                                name="name" data-position="bottom" data-delay="50"
                                data-tooltip="Merci d'entrer votre nom" required
                                autocomplete="nom" value="{{old('name')}}">
                            <label for="courriel">Entrez votre nom</label>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mail</i>
                            <input id="email" type="email"
                                class="validate deep-orange-text darken-2  @error('email') is-invalid @enderror"
                                name="email" data-position="bottom" data-delay="50"
                                data-tooltip="Merci d'entrer votre email" required
                                autocomplete="mail" value="{{old('email')}}" >
                            <label for="courriel">Entrez votre email</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">edit</i>
                            <textarea id="message" class="materialize-textarea" data-length="120  @error('message') is-invalid @enderror"
                            name="message"
                           required
                           >{{old('message')}}

                            </textarea>
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('message') }}</strong>
                            </span>
                           @enderror

                            <label for="message">Message</label>
                        </div>
                    </div>

                    <div class="divider"></div>
                    <div class="row">
                        <div class="col m12">
                            <p class="center-align"><button class="btn btn-large waves-effect waves-light"
                                    type="submit" name="action">Envoyer mon message</button></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
<!---
php art
isan make:mail ContactMail --markdown=emails.contact

-->

<!--cette  commande genere un controller mail  qui retournera la vue email
