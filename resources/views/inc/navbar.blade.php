<header class="navbar-fixed scrollspy">

    <nav class="nav">
        <!--le nav responsive fonctionnera avec jquery-->
        <div class="nav-wrapper">
            @if(Route::current()->uri()== '/')
            <a href="/" class="brand-logo pulse waves-effect waves-light"> <img src="{{ asset('img/logo.jpg') }}"
                    class="z-depth-2 circle responsive-img image" alt="Contact Person" id="logo2" loading="lazy">
            </a>
            @else
            @if(Route::current()->uri()== 'blog')

            <a href="/blog" class="brand-logo pulse waves-effect waves-light"> <img src="{{ asset('img/virage.png') }}"
                class=" circle responsive-img image" alt="Contact Person" id="logo5"loading="lazy">
        </a>
        @endif
        @endif


            <a href="#" data-activates="mobile-menu" data-target="responsive-menu" class="button-collapse">
                <!--le data doit corresponde a lid  du side-nav-->
                <i class="material-icons">menu</i>
            </a>

            <ul class="right hide-on-med-and-down">

                <!--navigation a droite et on la cache pour les petits ecrans-->

                <li><a href="/blog" class="pulse waves-effect waves-light"><i
                    class="large material-icons">language</a></i></li>





                    <li><a href="/#projet" class="pulse waves-effect waves-light"><i
                        class="large material-icons">phonelink</a></i></li>


                <li><a href="/#portfolio" class="pulse waves-effect waves-light"><i
                    class="large material-icons">school</a></i></li>


                    <li><a href="/#titre" class="pulse waves-effect waves-light"><i
                        class="large material-icons">style</a></i></li>



           <!--CONTACT-->
                <li><a href="/#messages" class="pulse waves-effect waves-light"><i
                            class="large material-icons">message</a></i></li>

                @auth
                    <li><a href="#modalSend" class="pulse waves-effect waves-light"><i
                                class="large material-icons">edit</a></i></li>
                @endauth


                   <!--CONTACT-->

                   <li><a href="/#contact" class="pulse waves-effect waves-light"><i
                    class="large material-icons">contact_mail</a></i></li>

                    <li><a href="/#facebook" class="pulse waves-effect waves-light"><i
                        class="large material-icons">forum</a></i></li>
                <!-- Authentication Links -->



                @guest
                @if(Route::current()->uri()== '/')

                    <li><a href="#modalLogin" class="pulse waves-effect waves-light modal-trigger "><i
                                class="large material-icons deep-orange-text">person</a></i></li>
                                @else
                                <li><a href="#modalLogin" class="pulse waves-effect waves-light modal-trigger "><i
                                    class="large material-icons log">person</a></i></li>
                                    @endif

                    @if (Route::has('register'))
                    @if(Route::current()->uri()== '/')

                        <li><a href="#modalRegister" class="pulse waves-effect waves-light modal-trigger  "><i
                                    class="large material-icons deep-orange-text">input</i></a></li>
                                    @else
                                    <li><a href="#modalRegister" class="pulse waves-effect waves-light modal-trigger  "><i
                                        class="large material-icons log">input</i></a></li>
@endif
                    @endif

                @else


                <a class='dropdown-button btn' data-beloworigin="true" data-activates='dropdown1'><span class="bonjour">Bienvenue
                 {{ Auth::user()->name }}</span> </a>

                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content'>

                  <li><a href="/home"><span class="dashboard">Dashboard</span><i class="material-icons dashboard ">local_library</i></a></li>
                  <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="material-icons logout">exit_to_app</i><span
                                      class="logout">Logout</span></a></li>

                </ul>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                @endguest

        </div>

    <ul class="side-nav z-depth-5 darken-4  " id="mobile-menu">
        <!--navigation a droite et on la ccxhe pour les petit s ecrans-->
        <!--MENU NAV POUR MOBILE-->

        <li class="center-align"> <img src="{{ asset('img/logo.jpg') }}" class="z-depth-5 circle responsive-img"
                alt="Contact Person" id="logo2"></li>


        <!-- Authentication Links MODALS-->
        @guest
            <li><a href="#modalLogin" class="waves-effect waves-light modal-trigger "><i
                        class="large material-icons teal-text">person</i><span class="white-text">Login</span></a>
                @if (Route::has('register'))
                    <!--MODAL LOGIN-->
            <li><a href="#modalRegister" class="waves-effect waves-light modal-trigger"><i
                        class="large material-icons teal-text">input</i><span class="white-text">Register</span></a>
                <!--MODAL REGISTER-->

                @endif
            @else

                <!-- Dropdown Trigger -->
<h5 class="center-align bonjour">Bonjour
   {{ Auth::user()->name }}</h5>
    <li class="divider"></li>




            </li>
            <!-- Dropdown Structure -->
            <ul>
                <li><a href="/home"><i class="material-icons pulse white-text ">laptop</i><span
                            class="white-text">Dashboard</span></a></li>
                <li><a href="#modalSend"><i class="material-icons pulse white-text">edit</i><span
                            class="white-text">Ecrire un Message</span></a></li>

                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();"><i class="material-icons red-text ">exit_to_app</i><span
                            class="white-text">Logout</span></a></li>
                <li class="divider"></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </ul>

        @endguest

        <li><a href="/#projet" class="waves-effect waves-light"><i
                    class="large material-icons deep-orange-text">phonelink</i><span
                    class="white-text">Projets</span></a></li>
        <li><a href="/#portfolio" class="waves-effect waves-light"><i
                    class="large material-icons deep-orange-text">school</i><span
                    class="white-text">Portfolio</span></a></li>
        <li><a href="/#titre" class="waves-effect waves-light"><i
                    class="large material-icons deep-orange-text">style</i><span class="white-text">Titres</span></a>
        </li>
        <li><a href="/#messages" class="waves-effect waves-light"><i
                    class="large material-icons deep-orange-text">message</i><span
                    class="white-text">Messages</span></a></li>

        <li><a href="/#contact" class="waves-effect waves-light"><i
                    class="large material-icons deep-orange-text">contact_mail</i><span
                    class="white-text">Contacts</span></a></li>
                    <li><a href="/#facebook" class="waves-effect waves-light"><i
                        class="large material-icons deep-orange-text">forum</i><span class="white-text">Reseau social</span></a></li>
               <!--CONTACT-->

       </ul>


</header>
