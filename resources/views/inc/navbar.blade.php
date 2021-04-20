<!--
 <div class="preloader">
    <div class="loader_34">
      <div class="ytp-spinner">
        <div class="ytp-spinner-container">
          <div class="ytp-spinner-rotator">
            <div class="ytp-spinner-left">
              <div class="ytp-spinner-circle"></div>
            </div>
            <div class="ytp-spinner-right">
              <div class="ytp-spinner-circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

-->
<header class="navbar-fixed ">
    <nav class="nav">
        <div class="nav-wrapper">


                <a href="/" class="brand-logo pulse waves-effect waves-light"> <img src="{{ asset('img/Sale.png') }}"
                        class="responsive-img image" alt="Contact Person" id="logo4" loading="lazy">
                </a>

            <a href="#" data-activates="mobile-menu" data-target="responsive-menu" class="button-collapse">
                <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">

                <li><a href="#modalApropos"class="pulse waves-effect waves-light"><i class="far fa-laugh k"></i>
                </i></a></li>

                <li><a href="/#projet" class="pulse waves-effect waves-light"><i class="fas fa-laptop-code k "></i>
                            </i></a></li>

                <li><a href="/#portfolio" class="pulse waves-effect waves-light"><i class="fas fa-book-reader k"></i></a></li>

                <li><a href="/#messages" class="pulse waves-effect waves-light"><i
                            class="large material-icons">message</a></i></li>

                @auth
                    <li><a href="#modalSend" class="pulse waves-effect waves-light"><i
                                class="large material-icons">edit</a></i></li>
                @endauth

                <li><a href="/#contact" class="pulse waves-effect waves-light"><i
                            class="large material-icons">contact_mail</a></i></li>

                <li><a href="/#facebook" class="pulse waves-effect waves-light"><i class="fab fa-facebook-f k"></i>
                            </a></li>

                @guest
                    @if (Route::current()->uri() == '/')

                        <li><a href="#modalLogin1" class="pulse waves-effect waves-light modal-trigger "><i
                                    class="large material-icons deep-orange-text">person</a></i></li>
                    @else
                        <li><a href="#modalRegister" class="pulse waves-effect waves-light modal-trigger "><i
                                    class="large material-icons log">person</a></i></li>
                    @endif

                    @if (Route::has('register'))
                        @if (Route::current()->uri() == '/')

                            <li><a href="#modalRegister" class="pulse waves-effect waves-light modal-trigger  "><i
                                        class="large material-icons deep-orange-text">input</i></a></li>
                        @else
                            <li><a href="#modalRegister" class="pulse waves-effect waves-light modal-trigger  "><i
                                        class="large material-icons log">input</i></a></li>
                        @endif
                    @endif

                @else

                    <a class='dropdown-button btn' data-beloworigin="true" data-activates='dropdown1'><span
                            class="bonjour">Bienvenue
                            {{ Auth::user()->name }}</span> </a>

                    <!-- Dropdown Structure -->
                    <ul id='dropdown1' class='dropdown-content'>

                        <li><a href="/home"><span class="dashboard">Dashboard</span><i
                                    class="material-icons dashboard ">local_library</i></a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i
                                    class="material-icons logout">exit_to_app</i><span class="logout">Logout</span></a></li>

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

            <a href="/" class="center-align "> <img src="{{ asset('img/Sale.png') }}" class="responsive-img"
                    alt="Contact Person" id="logo2"></p>


            <!-- Authentication Links MODALS-->
            @guest
                <li class="bold"><a href="#modalLogin1" class="waves-effect waves-light modal-trigger">
                          <span class="mobile">Login</span></a>
                    @if (Route::has('register'))
                        <!--MODAL LOGIN-->
                <li class="bold"><a href="#modalRegister" class="waves-effect waves-light modal-trigger">
                           <span class="mobile">Register</span></a><hr>
                    <!--MODAL REGISTER-->

                    @endif
                @else

                    <!-- Dropdown Trigger -->
                    <h5 class="center-align bonjour">Bonjour
                        {{ Auth::user()->name }}</h5>
                <li class="divider"></li>

                </li><!-- Dropdown Structure -->
                <ul>
                    <li><a href="/home"><span
                                class="mobile">Dashboard</span></a></li>
                    <li><a href="#modalSend"><span
                                class="mobile">Ecrire un Message</span></a></li><br><hr>

                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><span
                                class="mobile">Logout</span></a></li>
                    <li class="divider"></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </ul>

            @endguest
            <li><a href="/#modalApropos" class="waves-effect waves-light">
                <span
                class="mobile">A propos</span></a></li>

            <li><a href="/#projet" class="waves-effect waves-light">
                      <span
                        class="mobile">Projets</span></a></li>
            <li><a href="/#portfolio" class="waves-effect waves-light">
                        <span
                        class="mobile">Portfolio</span></a></li>

            <li><a href="/#messages" class="waves-effect waves-light">
                    <span
                        class="mobile">Messages</span></a></li>

            <li><a href="/#contact" class="waves-effect waves-light">
                        <span
                        class="mobile">Contacts</span></a></li>


        </ul>



</header>
