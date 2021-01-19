@extends('layouts.app')

@section('content')

    <section class="parallax-container section scollspy z-depth-3 darken-4">
        <div class="row purple-text darken-4 center-align">
            <div class="col s12 m12">
                <p class="center-align">
                <h2 class="vitrine" style="display:none;">
                    Bienvenue sur <span class="deep-orange-text mate1">mon site vitrine</span>
                </h2>
                <a class="z-depth modal-trigger tooltipped"
                    data-position="bottom" data-delay="50" data-tooltip="A propos de moi" id="face" href="#modal1"> <img src="{{ asset('img/logo.jpg') }}" class="z-depth-5 circle responsive-img " alt="Contact Person"
                    id="logo3">
                      </a>
                <!--MODAL APROPOS-->
                </p>
            </div>
        </div>
        <div class="parallax" width="100">
            <video id="myvideo" playsinline="" autoplay="autoplay" muted="muted" loop="loop" class="materialboxed">
                <source src="{{ asset('img/pc.mp4') }}" type="video/mp4">
            </video>
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
            <div class="carousel ">
                @foreach ($projets as $projet)
                    <div class="carousel-item"><img src="{{ $projet->image }}"
                            class="pulse waves-effect waves-light responsive-img z-depth-5 darken-4 materialboxed carrusel "
                            id="img1" data-caption="{{ $projet->description }}" data-delay="50"><a target="_blank"
                            href="{{ $projet->lien }}"><i
                                class="small material-icons btn-floating pulse z-depth-5 darken-4 ">play_circle_outline</i></a>
                    </div>
                @endforeach

            </div>
    </section>
    <section class="parallax-container z-depth-5 darken-4">

        <div class="parallax">
            <img src="{{ asset('img/martin.jpg ') }}" alt="deux">
        </div>
    </section>
    <section class="competences z-depth-5 darken-4 scrollspy" id="portfolio">

        <div class="container">

            <h2 class="center-align dark-text port ">Portfolio</h2>
            <div class="row">
                <div class="col s12 m4">
                    <a class="left-align" id="competence"><i class="large g material-icons tooltipped" data-position="left"
                            data-delay="50" data-tooltip="Cliquez pour deployer">web</i>
                    </a>
                    <h5>COMPETENCES</h5>
                    <div class="" id="competences" style="display:none;">

                        @foreach ($competences as $competence)

                            <span class="compétences">{{ $competence->nom }}</span>
                            <div class="progress deep-orange-text ">
                                <div class="determinate deep-orange-text" style="width:{{ $competence->pourcentage }}%">
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
                <div class="col s12 m4 center-align">
                    <p class="center-align" id="exp"><i class="large g material-icons tooltipped" data-position="top"
                            data-delay="50" data-tooltip="Cliquez pour deployer">library_books</i></p>
                    <h5>EXPERIENCES</h5>
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
                </div>
                <div class="col s12 m4 right-align">
                    <p class="right-align" id="formation"><i class="large g material-icons tooltipped" data-position="right"
                            data-delay="50" data-tooltip="Cliquez pour deployer">school</i></a>
                    <h5>FORMATIONS</h5>
                    <div class="" id="formations" style="display:none;">

                        @foreach ($formations as $formation)

                            {{ $formation->nom }}<br>
                            {{ $formation->lieu }}<br>
                            {{ $formation->date }}<br>
                            <a href="{{ $formation->image }}">Voir le titre</a>
                            <hr>
                            </p>
                        @endforeach
                    </div>
                </div>
    </section>
    <!---SECTION---->
    <section class="formation z-depth-5 darken-4 scrollspy" id="titre">
        <div class="container">
            <h2 class="center-align titre">Titres</h2>
            <div class="row">
                @foreach ($titres as $titre)
                    <div class="col s12 m4">

                        <div class="card">

                            <div class="card-image materialboxed ">
                                <img src="{{ $titre->image }}">
                                <span class="card-title"></span>
                            </div>
                            <div class="center-align">
                                <img src="{{ $titre->logo }}" class="circle white" width="100" alt="Contact Person"></a>
                            </div>
                            <div class="card-content">
                                <p>
                                <blockquote>{{ $titre->description }}<br>{{ $titre->description2 }} <br>{{ $titre->date }}
                                    <br> <a href="{{ asset($titre->lien) }}">{{ $titre->name }}</a>
                                </blockquote>
                                </p>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="messages section scrollspy" id="messages">
        <div class="container">
            <div class="text-center">
            <div class="center-align marg">
                <img src="{{ asset('img/logo.jpg') }}" class="z-depth-5 circle responsive-img " alt="Contact Person"
                    id="logo1">
            </div>
            <h2 class="center-align">Vos messages</h2>
            <p class="center-align">Ici vous trouverez vos messages publiés
                </p>
            <div class="row">
                <div class="col s12 m4">
                    <div class="center-align">
                        <img src="{{ asset('img/moi.webp') }}"
                            class="z-depth-5 circle responsive-img momo pulse waves-effect waves-light tooltipped"
                            data-position="top" data-delay="50" data-tooltip="Voir le message" width="100"
                            alt="Contact Person" id="prof1">
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
                        <img src="{{ asset('img/avt1.jpg') }}"
                            class="z-depth-5 circle responsive-img momo pulse waves-effect waves-light tooltipped"
                            data-position="top" data-delay="50" data-tooltip="Voir le message" width="100"
                            alt="Contact Person" id="prof2">
                        <h4>Thierry</h4>
                        <p class="text-muted">Integrateur Web</p>
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
                        <img src="{{ asset('img/avt2.jpg') }}"
                            class="z-depth-5 circle responsive-img momo pulse waves-effect waves-light tooltipped"
                            data-position="top" data-delay="50" data-tooltip="Voir le message" width="100"
                            alt="Contact Person" id="prof3">
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
        <div id="infobulle"></div>
    </section>
    <!--section contact-->

    <section class="parallax-container z-depth-4 darken-4 ">

        <div class="parallax">
            <img src="{{ asset('img/lap1.jpg') }}" alt="deux">
        </div>
    </section>
<!--RESEAUX SOCIAUX-->

<section class="contact section scrollspy z-depth-4 darken-4 " id="facebook">

    <div class="container">
        <div class="row">
            <div class="center-align marg">
                <img src="{{ asset('img/logo.jpg') }}" class="z-depth-5 circle responsive-img " alt="Contact Person"
                    id="logo1">
            </div>
            <div class="col m10 offset-m1 s12">
                <h2 class="center-align">Quoi de neuf chez rismo ? </h2>


                <div class="row">
                    <div class="col s12 m6 left-align ">
                        <h4 class="">Fil d'actualité</h4>
                        <!--FACEBOOK-->
                        <div class="fb-page" data-href="https://www.facebook.com/rismo.fr" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/rismo.fr" class="fb-xfbml-parse-ignore"></blockquote></div>
                    </div>

                    <div class="col s12 m6 right-align ">
                        <h4 class="">Dernier post</h4>
                        <div class="fb-post" data-href="https://www.facebook.com/rismo.fr/posts/101702201920711" data-width="380" data-show-text="true"><blockquote cite="https://www.facebook.com/rismo.fr/posts/101702201920711" class="fb-xfbml-parse-ignore"><p>Bonjour a tous ,

                            Vous aussi vous vous êtes reconvertis dans le monde du web ?

                            Vous suivez ou avez suivi une formation...</p>Publiée par <a href="https://www.facebook.com/rismo.fr/">Quoi de neuf chez rismo ?</a> sur&nbsp;<a href="https://www.facebook.com/rismo.fr/posts/101702201920711">Lundi 18 janvier 2021</a></blockquote></div>
                            <!--FIN FACEBOOK-->
                    </div>
                </div>
                    <div class="col s8 offset-2 m12 center-align">
                        <!--FACEBOOK-->
                    <div
                    class="fb-like center-align"
                    data-share="true"
                    data-width="450"
                    data-show-faces="true">
                    </div>

                    <!--FIN FACEBOOK-->
                </div>
            </div>
</section>


    <section class="contact section scrollspy z-depth-4 darken-4 " id="contact">

        <div class="container">
            <div class="row">
                <div class="center-align marg">
                    <img src="{{ asset('img/logo.jpg') }}" class="z-depth-5 circle responsive-img " alt="Contact Person"
                        id="logo1">
                </div>
                <div class="col m10 offset-m1 s12">
                    <h2 class="center-align">Contact </h2>
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
                                        data-length="120  @error('message') is-invalid @enderror" name="message"
                                        required>{{ old('message') }}

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
                                <div class="col m12">
                                    <p class="center-align">
                                    {!! Form::button("<i class='material-icons left'>send</i> Envoyer ",['class'=>'btn waves-effect waves z-depth-2 darken-1','value'=>'Envoyer','type'=>'submit'])!!}
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!---
    php art
    isan make:mail ContactMail --markdown=emails.contact

    -->

        <!--cette  commande genere un controller mail  qui retournera la vue email-->

    </section>

    <!--footer-->
    <footer>
        <div class="container">
            <div class="row">

                <div class="col s12 footer-copyright center-align">
                    <a href="https://rismo.fr" class="orange-text center-align"><img src="{{ asset('img/logo.jpg') }}"
                            id="log" class="circle white" width="60" alt="Contact Person"></a><br>
                    &copy;2021 &nbsp;
                </div>
            </div>
        </div>
        <div class="fixed-action-btn">
            <a class="btn-floating pulse btn-large z-depth-5 darken-3 ">
                <i class="large material-icons">add_circle</i>
            </a>
            <ul>
                <li><a class="btn-floating" href="https://rismo.fr"><img src="{{ asset('img/moi.webp') }}"
                            class="responsive-img tooltipped" alt="Contact Person" data-position="left"
                            data-tooltip="rismo.fr, vous y etes déja "></a></li>
                <li><a class="btn-floating z-depth-3 darken-4 " href="https://github.com/RISMOO/RISMOO"><img
                            src="{{ asset('img/GitHub.png') }}" class="responsive-img tooltipped" alt="Contact Person"
                            data-position="left" data-tooltip="Découvrez mon git hub"></a></li>
                <li><a class="btn-floating z-depth-3 darken-4" href="img/cv_maurice.pdf"
                        download="{{ asset('img/cv_maurice.pdf') }}"><i class="material-icons tooltipped"
                            data-position="left" data-tooltip="Télécharger le cv">file_download</i></a></li>
                <li><a class="btn-floating z-depth-3 darken-4 " href="https://www.facebook.com/rismooo"><img
                            src="{{ asset('img/Facebook.png') }}" class="responsive-img tooltipped" alt="Contact Person"
                            data-position="left" data-tooltip="Suivez-moi sur facebook"></a></li>
                <li><a class="btn-floating z-depth-3 darken-4 " href="https://www.linkedin.com/in/m-s-91700619b"><img
                            src="{{ asset('img/Linkedin.png') }}" class="responsive-img tooltipped" alt="Contact Person"
                            data-position="left" data-tooltip="Suivez-moi sur linkedin"></a></li>

                <li><a class="btn-floating z-depth-3 darken-4 " href="mailto:maurice.sider29@gmail.com"><img
                            src="{{ asset('img/mail.webp') }}" class="responsive-img tooltipped" alt="Contact Person"
                            data-position="left" data-tooltip="Ecrivez-moi"></a></li>
            </ul>
        </div>
        </div>
    </footer>
    </body>

    </html>
@endsection
