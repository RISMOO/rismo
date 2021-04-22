@extends('layouts.app')

@section('content')

    <?php if (isset($_GET['accepte-cookie'])) {
    setcookie('accepte-cookie', 'true', time() + 365 * 24 * 3600);
    header('Location:./');
    } ?>

    <section class="parallax-container center-align  z-depth-3 darken-4 ">
        <div class="container">
            <div class="row">
                <div class="col s12 white-text">

                    <a class="z-depth modal-trigger tooltipped" data-position="bottom" data-delay="50"
                        data-tooltip="A propos de moi" href="#modalApropos"> <img src="{{ asset('img/Sale2.png') }}"
                            alt="Contact Person" id="logo3" >
                    </a>
                    <h5 class="pexels" id="pexels2" style="display: none"> Photo by <a href="https://www.pexels.com/@junior-teixeira-1064069?utm_content=attributionCopyText&utm_medium=referral&utm_source=pexels" class="jun" target="_blank"> Junior Teixeira</a> from <a href="https://www.pexels.com/fr-fr/" class="jun" target="_blank"> Pexels</a></h5>

                </div>
            </div>
        </div>
        <div class="parallax hide-on-small-only " id="martin2">
            <object data="{{ asset('img/wel.svg ') }}" width="900" height="500"> </object>
           
        </div>
    </section>
    @include('inc.errorsuccess')
    @if (session()->has('message'))
        <div class="card-content1 center-align" role="alert">

            {{ session()->get('message') }}
        </div>
    @endif
    <section class="white center-align darken-4 section scrollspy" id="projet">
        <div class="container">
            <h2 class="center-align">Projets</h2>
            <div class="diplome">
                <i class="fas fa-laptop-code fa-7x" id="diplome4"></i></a>
            </div>
            <!-- Modal Projets -->
              <div id="sectionProjets"style="display:none">
                    @foreach ($projets as $projet)
                        <div class="col s12 m7">
                            <div class="card">
                                <div class="card-image z-depth-5 ">
                                    <a href="{{ $projet->image }}" target="_blank" class="responsive-img"><img
                                            src="{{ $projet->image }}" class="z-depth-5 responsive-img"></a>
                                </div>
                                <div class="card-content">
                                    <p>{{ $projet->description }}</p>
                                    <a href="{{ $projet->lien }}">
                                        <button class="btn waves-effect waves-light">Voir le projet
                                        </button></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="modal-footer">
                        <a href="/#projet" class="modal-close waves-effect waves-green btn-flat">Remonter</a>
                    </div>
                  </div>
            </div>
    </section>
    <section class="parallax-container center valign-wrapper z-depth-5 darken-4 hide-on-small-only" id="martin">
        <div class="parallax">

            <object data="{{ asset('img/mart3.svg ') }}" width="900" height="500"> </object>
        </div>
    </section>

    <section class="white center-align darken-4 section scrollspy" id="portfolio">
        <div class="container">
            <h2 class="center-align">Portfolio</h2>
            <div class="diplome">
                <i class="fas fa-book-reader fa-7x" id="diplome3"></i></a>
            </div>
  <div id="sectionPortfolio"style="display:none">

                    <div class="card">
                        <div class="card-image z-depth-5 darken-4  " id="port">
                            <img src="{{ asset('img/exp.png') }}" id="competence" class="imag responsive-img">
                            <span class="card-title black-text for">COMPETENCES</span>
                        </div>
                        <div class="card-content">
                            <p>
                            <div class="" id="competences" style="display:none;">
                                @foreach ($competences as $competence)
                                    <span class="compétences">{{ $competence->nom }}</span>
                                    <div class="progress deep-orange-text ">
                                        <div class="determinate deep-orange-text"
                                            style="width:{{ $competence->pourcentage }}%">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image z-depth-5 darken-4  " id="port">
                            <img src="{{ asset('img/compe.png') }}" id="exp" class="imag responsive-img">
                            <span class="card-title black-text for">EXPERIENCES</span>
                        </div>
                        <div class="card-content">
                            <p>
                            <div class="" id="expe" style="display:none;">
                                @foreach ($experiences as $experience)
                                    {{ $experience->nom }}<br>
                                    {{ $experience->poste }}<br>
                                    {{ $experience->lieu }}<br>
                                    {{ $experience->date }}
                                    <hr>
                                    </p>
                                @endforeach
                            </div>
                            </p>

                        </div>
                        <div class="card">
                            <div class="card-image z-depth-5 darken-4  " id="port">
                                <img src="{{ asset('img/formations.png') }}" id="formation" class="imag responsive-img">
                                <span class="card-title black-text for">FORMATIONS</span>
                            </div>
                            <div class="card-content">
                                <p>
                                <div class="" id="formations" style="display:none;">
                                    @foreach ($titres as $titre)

                                        <div class="col s12 m7">

                                            <div class="card">
                                                <div class="card-image">
                                                    <a href="{{ $titre->image }}" target="_blank"
                                                        class="responsive-img"><img src="{{ $titre->image }}"
                                                            class="z-depth-5 responsive-img"></a>
                                                </div>
                                                <div class="card-content center-align">
                                                    <p>{{ $titre->description }}
                                                        {{ $titre->description2 }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="/#portfolio" class="modal-close waves-effect waves-green btn-flat">Remonter</a>
                    </div>
                </div>

    </section>


    <section class="parallax-container center valign-wrapper z-depth-5 darken-4 hide-on-small-only" id="martin1">
        <div class="parallax">
            <object data="{{ asset('img/html.svg ') }}" width="900" height="500"> </object>
        </div>
    </section>
    <section class="white center-align darken-4 section scrollspy" id="messages">
        <div class="container">
            <div class="text-center">

                <h2 class="center-align">Vos messages</h2>
                <div class="diplome">
                    <i class="fas fa-comment-dots fa-7x" id="diplome1"></i>
                </div>
               <div id="vosMessages" style="display: none">
                <div class="face2">
                    <div class="fb-like " data-href="https://rismo.fr" data-width="" data-layout="box_count"
                        data-action="like" data-size="small" data-share="true"></div>

                </div>

            <p class="center-align">Ici vous trouverez vos messages publiés
            </p>
            <div class="row">
                <div class="col s12 m4">
                    <div class="center-align">
                        <img src="{{ asset('img/avatar.webp') }}"
                            class="z-depth-5 circle responsive-img momo pulse waves-effect waves-light tooltipped"
                            data-position="top" data-delay="50" data-tooltip="Voir le message" width="100" height="100"
                            alt="Contact Person" id="prof1" loading="lazy" >
                        <h4>Rismo</h4>
                        <p class="text-muted">Developpeur Web Junior</p>
                        <hr class="second">
                        <p class="text-dark" id="ris" style="display:none;">Bonjour et bienvenue<br>Laissez moi un
                            message.<br><br>

                            @if (Auth::guest())
                                <a href="#modalRegister" class="waves-effect waves-light btn modal-trigger "><i
                                        class="material-icons left">edit</i>Laisser un
                                    message</a>
                            @elseif (Auth::user()->name)

                                <a href="#modalSend" class="waves-effect waves-light btn modal-trigger "><i
                                        class="material-icons left">edit</i>Rediger un
                                    message</a>
                            @endif
                        </p>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="center-align">
                        <img src="{{ asset('img/avat3.webp') }}"
                            class="z-depth-5 circle responsive-img momo pulse waves-effect waves-light tooltipped"
                            data-position="top" data-delay="50" data-tooltip="Voir le message" width="100" height="100"
                            alt="Contact Person" id="prof2" loading="lazy">
                        <h4>Elodie</h4>
                        <p class="text-muted">Intégratrice Web</p>
                        <hr class="second">
                        <p class="text-dark" id="th" style="display:none;">Felicitations pour ton site<br>Le travail
                            finit toujours par payer.<br><br>

                            @if (Auth::guest())
                                <a href="#modalRegister" class="waves-effect waves-light btn modal-trigger "><i
                                        class="material-icons left">edit</i>Laisser un
                                    message</a>
                            @elseif (Auth::user()->name)

                                <a href="#modalSend" class="waves-effect waves-light btn modal-trigger "><i
                                        class="material-icons left">edit</i>Rediger un
                                    message</a>
                            @endif
                        </p>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="center-align ">
                        <img src="{{ asset('img/avat2.webp') }}"
                            class="z-depth-5 circle responsive-img momo pulse waves-effect waves-light tooltipped"
                            data-position="top" data-delay="50" data-tooltip="Voir le message" width="100" height="100"
                            alt="Contact Person" id="prof3" loading="lazy">
                        <h4>Mickael</h4>
                        <p class="text-muted">Web Designer Junior</p>
                        <hr class="second">
                        <p class="text-dark" id="mic" style="display:none;">Bravo rismo.<br>Bonne continuation.<br><br>

                            @if (Auth::guest())
                                <a href="#modalRegister" class="waves-effect waves-light btn modal-trigger "><i
                                        class="material-icons left">edit</i>Laisser un
                                    message</a>
                            @elseif (Auth::user()->name)

                                <a href="#modalSend" class="waves-effect waves-light btn modal-trigger "><i
                                        class="material-icons left">edit</i>Rediger un
                                    message</a>
                            @endif

                        </p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div id="infobulle"></div>
    </section>

    <section class="contact section scrollspy z-depth-4 darken-4 " id="facebook">
        <div class="container">
            <div class="row">
                <div class="center-align marg">
                    <div class="col m8 offset-m2 s12">
                        <h2 class="center-align" id="reseausocial1">Reseau social </h2>
                        <h5 class="center-align" id="reseausocial2">Création, gestion et animation d'une page facebook</h5>

                        <div class="row">
                            <div class="col m10 offset-m1 s12">
                                <div class="" id="virage">
                                    <a href="https://www.facebook.com/virage360degres" target="_blank"><img
                                            src="{{ asset('img/vir.png') }}" width="250" alt="virage360"
                                            id="virage1"></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <section class="white center-align darken-4 section scrollspy" id="contact">
        <div class="container">
            <div class="row">
                <div class="col m10 offset-m1 s12">
                    <h2 class="center-align">Contact </h2>
                    <div class="diplome">
                        <i class="fas fa-id-card-alt fa-7x" id="diplome2"></i>
                    </div>
                   <div id="sectionContact" style="display: none">
                    <p class="right"><span class="red-text">*</span> champs obligatoires</p>
                    <div class="row">
                        <form class="col s12" action="/contact" method="POST">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">person</i>
                                    <input id="name" type="text"
                                        class="validate deep-orange-text darken-2  @error('name') is-invalid @enderror"
                                        name="name" data-position="bottom" data-delay="50"
                                        data-tooltip="Merci d'entrer votre nom" required autocomplete="nom"
                                        value="{{ old('name') }}">
                                    <label for="courriel">Entrez votre nom<span class="red-text">*</span></label>
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
                                        data-tooltip="Merci d'entrer votre email" required autocomplete="mail"
                                        value="{{ old('email') }}">
                                    <label for="courriel">Entrez votre email<span class="red-text">*</span></label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">edit</i>
                                    <textarea id="message" class="materialize-textarea"
                                        data-length="120  @error('message') is-invalid @enderror" name="message" required>{{ old('message') }}
                                                </textarea>
                                    @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('message') }}</strong>
                                        </span>
                                    @enderror
                                    <label for="message">Message<span class="red-text">*</span></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col m12 face">
                                    <p class="center-align linear-gradient">
                                        {!! Form::button(' Envoyer ', ['class' => 'waves-effect waves-light btn z-depth-4', 'value' => '', 'type' => 'submit']) !!}

                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
             </div>
            </div>
        </div>

    </section>


    <footer class="bg">
        <div class="container">
            <div class="row">
                <div class="col s12 footer-copyright center-align">
                    <?php if (!isset($_COOKIE['accepte-cookie'])) { ?>
                    <div class="banniere z-depth-4">
                        <div class="text-banniere mr-5">
                            <p>Mon site utilise des cookies pour une meilleure experience</p>
                        </div>
                        <div class="but">
                            <a href="?accepte-cookie"><button type="button" class="btn btn-dark" id="cookie">OK,
                                    J'accepte</button></a>

                        </div>
                    </div>
                    <?php } ?>
                    <div class="face2 ">
                        <p class="copy">
                            <a href="https://www.facebook.com/virage360degres"><i
                                    class="fab fa-facebook fa-2x linear-gradient"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a
                                href="https://www.linkedin.com/in/%F0%9F%8C%9E-r-91700619b/"><i
                                    class="fab fa-linkedin fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&copy; <script>
                                document.write(new Date().getFullYear())

                            </script>rismo.fr&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/RISMOO/RISMOO"><i
                                    class="fab fa-github fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a
                                href="mailto:rismodevops@gmail.com"><i class="far fa-envelope fa-2x"></i></a>
                        </p><a href="/#"><img src="{{ asset('img/Sale.png') }}" alt="Contact Person" id="logo1"
                                class="sale"></a>
                        <a href="{{ asset('img/cgu.pdf') }}" class="">

                            <h6 class="conditions">Conditions Générales d'Utilisation<h6>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </body>
    </html>


@endsection
