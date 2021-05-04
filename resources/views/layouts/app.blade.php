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
    <meta name="description" content="Concepteur de projets digitaux" />
    <meta name="author" content="RISMO DEVOPS" />
    <meta property="og:url" content="https://rismo.fr" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="RISMO DEVOPS" />
    <meta property="og:description"
        content="Bienvenue sur mon site, vous y trouverez mon portfolio, mes projets réalisés, mes formations et pas que.. " />
    <meta property="og:image" content="https://rismo.fr/img/ris6.webp" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/Sale.webp') }}" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="icon" sizes="32x32" href="{{asset('favicons/favicon-32.png')}}" type="image/png">
    <link rel="icon" sizes="64x64" href="{{asset('favicons/favicon-64.png')}}" type="image/png">
    <link rel="icon" sizes="96x96" href="{{asset('favicons/favicon-96.png')}}" type="image/png">
    <link rel="icon" sizes="196x196" href="{{asset('favicons/favicon-196.png')}}" type="image/png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicons/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicons/apple-touch-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicons/apple-touch-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicons/apple-touch-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicons/apple-touch-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicons/apple-touch-icon-144x144.png')}}">
    <meta name="msapplication-TileImage" content="{{asset('favicons/favicon-144.png')}}">
    <meta name="msapplication-TileColor" content="#FFFFFF">


    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">





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
            <img src="{{asset('img/Sale.webp')}}" alt="portfolio" width="90" height="90" class="mt-2 mb-2 text-center" /></a>
            <hr />
            <h2 class="center-align white-text tit">
              BIENVENUE CHEZ RISMO<br>
              CONCEPTEUR DE PROJETS DIGITAUX

            </h2>
            <hr />


            <button id="closeModal" class="btn btn-danger shadow">DECOUVRIR</button>

          </div>
        </div>


        <!--FACEBOOK LIKE-->

        <div id="fb-root"></div>


        <script>
          window.fbAsyncInit = function() {
            FB.init({
              xfbml            : true,
              version          : 'v10.0'
            });
          };

          (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/fr_FR/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));
        </script>


        <div class="fb-customerchat"
          attribution="biz_inbox"
          page_id="105343918379198">
        </div>

   



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
