@extends('layouts.app')
@section('content')

    <section class="parallax-container center-align darken-4 ">
        <div class="container">
            <div class="row">
                <div class="col s12 white-text">
                    @include('inc.errorsuccess')

                    <a class="z-depth modal-trigger tooltipped" data-position="bottom" data-delay="50"
                        data-tooltip="A propos de moi" href="#modalApropos"> <img src="{{ asset('img/Sale.webp') }}"
                            alt="Contact Person" id="logo3" width="200" >
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="center-align" id="portfolio">
        <div class="container">
           <div class="row">
              <h4 class="center-align">  <img src="{{ asset('img/portfolio.webp') }}" class="imag responsive-img" width="100" id="pen"></h4>
               <article class="col m4 s12" id="article1" >
                   <img src="{{ asset('img/competences.webp') }}" class="responsive-img" id="diplome3">

                   <div id="sectionPortfolio"style="display:none">

                      <div class="col s12 m12">
                         <div class="card">

                             <div class="card-content"><p>
                                <div class="black-text">
                               @foreach ($competences as $competence)
                                   <span class="compétences black-text">{{ $competence->nom }}</span>
                                   <div class="">

                                  <img src="{{ $competence->image }}"
                                       class="z-depth-5 responsive-img" width="350" >
                                       </div>
                               @endforeach
                              </div>
                              </p>
                              <a href="#portfolio" class=" btn-floating right waves-effect waves-light login" id="portfolio2"><i class="far fa-times-circle"></i></a>
                         </div>
                      </div>
                   </div>
                </div>
             </article>
             <article class="col m4 s12"id="article2">
                <img src="{{ asset('img/experiences.webp') }}" class="imag responsive-img" id="experiences" >
                <div id="sectionExperience"style="display:none">
                   <div class="col s12 m12">
                      <div class="card">
                        <div class="card-content">
                            <p>
                            <div class="black-text">
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
               </div>
             </div>
             </article>
            <article class="col m4 s12"id="article3">
             <img src="{{ asset('img/formations.webp') }}"class="imag responsive-img" id="formation" >
             <div id="sectionFormation"style="display:none">
               <div class="col s12 m12">
                  <div class="card">
                    <div class="card-content">
                        <p>
                            <div class="black-text">
                                 @foreach ($titres as $titre)
                                        <div class="card-image">
                                            <a href="{{ $titre->image }}" target="_blank"
                                                class="responsive-img"><img src="{{ $titre->image }}"
                                                    class="z-depth-5 responsive-img" loading="lazy" width="350"></a>
                                        </div>
                                        <div class="card-content center-align">
                                            <p class="black-text">{{ $titre->description }}
                                                {{ $titre->description2 }}
                                            </p>
                                        </div>
                                   @endforeach
                           </div>
                         </p>
                      </div>
                   </div>
                  </div>
            </div>
      </article>

      <article class="col m4 s12 offset-m2 " id="article4">
        <img src="{{ asset('img/softskills.webp') }}" class="imag responsive-img" id="softskills" >
        <div id="sectionSoftskills"style="display:none">
           <div class="col s12 m12">
              <div class="card">
                <div class="card-content">
                    <p>
                    <div class="black-text">
                        @foreach ($softskills as $softskill)
                          <h5 class="black-text">  {{ $softskill->nom }} </h5><br>
                            </p>
                        @endforeach
                      </div>
                </div>
           </div>
       </div>
  </article>
  <article class="col m4 s12" id="article5">
     <img src="{{ asset('img/hobbies.webp') }}"class=" responsive-img" id="hobbies" >
      <div id="sectionHobbies"style="display:none">
       <div class="col s12 m12">
          <div class="card">
            <div class="card-content">
                <p>
                <div class="black-text">
                    @foreach ($hobbies as $hobbie)
                      <h5 class="black-text">  {{ $hobbie->nom }} </h5><br>
                        </p>
                    @endforeach
                </div>
               </div>
              </div>
          </div>
     </article>
 </section>

<section class="white center-align z-depth-3" id="sectionProjets1">
    <div class="container">
       <div class="row padding-perso">
        <h4 class="center-align">  <img src="{{ asset('img/projets.webp') }}" class=" responsive-img" width="100" id="diplome4" ></h4>
           <article class="col s12 m6 offset-m3" id="article1" >
               <img src="{{ asset('img/liste-Projets.webp') }}" class="imag responsive-img z-depth-1" id="projets">
               <div class="fb-like" data-href="https://rismo.fr" data-width="" data-layout="box_count" data-action="like" data-size="small" data-share="true"></div>

               <div id="sectionProjets" class="center-align" style="display:none">
                  <div class="col s12 m12">
                     <div class="card center-align">

                         <div class="card-content center-align"><p>
                            <div class="black-text center-align">
                                @foreach ($projets as $projet)

                                <div class="card-image z-depth-5 ">
                                    <a href="{{ $projet->image }}" target="_blank" class="responsive-img"><img
                                            src="{{ $projet->image }}" class="z-depth-5 responsive-img" loading="lazy"></a>
                                </div>
                                <div class="card-content center-align">
                                    <p class="black-text">{{ $projet->description }}</p>
                                    <a href="{{ $projet->lien }}">
                                        <button class="btn waves-effect waves-light" id="marginBottomButton">Voir le projet
                                        </button></a>
                                </div>
                        @endforeach
                          </div>
                          </p>
                          <a href="#portfolio" class=" btn-floating right waves-effect waves-light login" id="portfolio2"><i class="far fa-times-circle"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </article>
          </div>
      </div>
 </article>
</section>

    <section class="white center-align darken-4 section scrollspy" id="messages">
        <div class="container">
            <div class="text-center">
                <h4 class="center-align">  <img src="{{ asset('img/messages.webp') }}" class="imag responsive-img" width="100" id="pen"></h4>
                <div class="diplome">
                </div>
               <div id="vosMessages">
            <p class="center-align black-text">Ici vous trouverez vos messages publiés
            </p>
            <div class="row">
                <div class="col s12 m4">
                    <div class="center-align">
                        <img src="{{ asset('img/rismo.webp') }}"
                            class="circle responsive-img momo pulse waves-effect waves-light tooltipped"
                            data-position="top" data-delay="50" data-tooltip="Voir le message" width="100" height="100"
                            alt="avatar" id="prof1" loading="lazy" >
                        <h4>Rismo</h4>
                        <p class="black-text">Developpeur Web</p>
                        <hr class="second">
                        <p class="black-text" id="ris" style="display:none;">Bonjour et bienvenue<br>Laissez moi un
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
                        <img src="{{ asset('img/femme.webp') }}"
                            class="circle responsive-img momo pulse waves-effect waves-light tooltipped"
                            data-position="top" data-delay="50" data-tooltip="Voir le message" width="100" height="100"
                            alt="avatar" id="prof2" loading="lazy">
                        <h4>Elodie</h4>
                        <p class="black-text">Intégratrice Web</p>
                        <hr class="second">
                        <p class="black-text" id="th" style="display:none;">Felicitations pour ton site<br>Le travail
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
                        <img src="{{ asset('img/homme.webp') }}"
                            class="circle responsive-img momo pulse waves-effect waves-light tooltipped"
                            data-position="top" data-delay="50" data-tooltip="Voir le message" width="100" height="100"
                            alt="avatar" id="prof3" loading="lazy">
                        <h4>Mickael</h4>
                        <p class="black-text">Web Designer Junior</p>
                        <hr class="second">
                        <p class="black-text" id="mic" style="display:none;">Bravo rismo.<br>Bonne continuation.<br><br>

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

                        <h2 class="center-align white-text" id="reseausocial1">Reseau social </h2>


                        <h5 class="center-align white-text" id="reseausocial2">Création, gestion et animation d'une page facebook</h5>

                        <div class="row">
                            <div class="col m10 offset-m1 s12">
                                <div class="" id="virage">
                                    <a href="https://www.facebook.com/virage360degres" target="_blank"><img
                                            src="{{ asset('img/virage.webp') }}" width="250" alt="virage360"
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
                    <h4 class="center-align">  <img src="{{ asset('img/posts.webp') }}" class="imag responsive-img" id="contact" width="100" id="pen"></h4>
                   <div id="sectionContact">
                    <p class="right"><span class="red-text">*</span> champs obligatoires</p>
                    <div class="row">
                        <form class="col s12" action="/contact" method="POST">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">person</i>
                                    <input id="name" type="text"
                                        class="validate black-text  @error('name') is-invalid @enderror"
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
                                        class="validate black-text @error('email') is-invalid @enderror"
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
                                    <textarea id="message" class="materialize-textarea black-text"
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

                                    <p class="center-align linear-gradient">
                                        {!! Form::button(' Envoyer ', ['class' => 'waves-effect waves-light btn z-depth-4', 'value' => '', 'type' => 'submit']) !!}

                                    </p><br>


                                    <div class="">
                                        <h5 class="center-align black-text">Tenez-vous informé de l'actualité en vous inscrivant à la newsletter</h5><br>
                                        <a class="btn waves-effect waves-light z-depth-4 modal-trigger" href="#modalNewsletter" name="action" id="newsletter">
                                             S'incrire a la newsletter
                                        </a>
                                      </div>
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
                            <a href="https://www.facebook.com/rismodev"><i
                                    class="fab fa-facebook fa-2x linear-gradient"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a
                                href="https://www.linkedin.com/in/ris-%E2%93%9C-91700619b/" target="_blank"><i
                                    class="fab fa-linkedin fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp
                           <a href="https://github.com/RISMOO/RISMOO" target="_blank"><i
                                    class="fab fa-github fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a
                                href="mailto:rismodevops@gmail.com" target="_blank"><i class="far fa-envelope fa-2x"></i></a>
                        </p><a href="/#"><img src="{{ asset('img/Sale.webp') }}" alt="Contact Person" id="logo1"
                                class="sale"></a>
                                <a href="{{asset('img/cgu.pdf')}}" class="cgu" target="_blank">Condition générale d'utilisation</a>
                                <a href="{{asset('img/pol.pdf')}}" class="cgu" target="_blank">Politique de confidentialité</a>
                            <p class="white-text fond">

                                &copy; <script>
                                document.write(new Date().getFullYear())

                            </script> &nbsp;rismo.fr&nbsp;&nbsp;&nbsp;&nbsp;<br>

                            </p>

                    </div>
                </div>
            </div>
        </div>
    </footer>

  <!-- Messenger Plug-in Discussion Code -->

 </body>
 </html>


@endsection
