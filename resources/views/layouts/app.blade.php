<?php



if (isset($_GET['accepte-cookie'])) {
setcookie('accepte-cookie', 'true', time() + 365 * 24 * 3600);
header('Location:./');
} ?>

<!DOCTYPE html>
<html lang="fr">

<head >
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Mon Portfolio" />
    <meta name="author" content="RISMO DEVOPS" />
    <meta property="og:url" content="https://rismo.fr" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Mon Portfolio" />
    <meta property="og:description"
        content="Bienvenue sur mon portfolio, mes projets, mes formations et pas que.. " />
    <meta property="og:image" content="https://rismo.fr/img/reu.png" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/Sale.webp') }}" />

    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!--Import materialize.css-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">




    <div id="fb-root"></div>

    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: '232393018493826',
                xfbml: true,
                version: 'v9.0'
            });
            FB.AppEvents.logPageView();
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>

    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v9.0&appId=232393018493826&autoLogAppEvents=1"
        nonce="uxXBpeiv"></script>


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--Let browser know website is optimized for mobile-->
    <title>{{ config('app.name', 'rismo') }}</title>
</head>

<!--
<body onload="window.location.href = '#openModal';">
    <div id="openModal" class="modalDialog text-center shadow">
      <div class="center-align">
<a href="/">
        <img src="{{asset('img/Sale.webp')}}" alt="restaurants coqinn" width="90" height="90" class="mt-2 mb-2 text-center" /></a>
        <hr />
        <h2 class="center-align white-text tit">
          BIENVENUE SUR MON PORTFOLIO
        </h2>
        <hr />
        <button id="closeModal" class="btn btn-danger shadow">DECOUVRIR</button>
      </div>
    </div>
-->

    <body id="open">
        <div id="openModal" class="modalDialog text-center shadow">
          <div class="center-align">
         <a href="/">
            <img src="{{asset('img/Sale.png')}}" alt="portfolio" width="90" height="90" class="mt-2 mb-2 text-center" /></a>
            <hr />
            <h2 class="center-align white-text tit">
              BIENVENUE SUR MON PORTFOLIO<br>
            
            </h2>
            <hr />


            <button id="closeModal" class="btn btn-danger shadow">DECOUVRIR</button>

          </div>
        </div>


    <div id="app">



        @include('inc.navbar')
        <main>


            @yield('content')
            @include('inc.errorsuccess')
            @include('inc.modalSendMessage')
            @include('inc.modalEdit')
            @include('inc.scripts')
            @include('inc.modalApropos')
            @include('inc.modalPassword')
            @include('inc.modalRegister')
            @include('inc.modalLogin')
            @yield('javascripts')


        </main>

       </div>

      </body>
    </html>
