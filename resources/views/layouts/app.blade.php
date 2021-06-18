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
    <meta name="description" content="rismo devops - DÉVELOPPEUR WEB | CONCEPTEUR DE PROJETS DIGITAUX - Vous avez un souhait de projet digital ? site vitrine, site E-commerce, refonte de site, Logos personalisés etc. ?" />
    <meta name="author" content="RISMO DEVOPS" />
    <meta property="og:url" content="https://rismo.fr" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="DÉVELOPPEUR WEB FULL STACK | CONCEPTEUR DE PROJETS DIGITAUX" />
    <meta property="og:description"
        content="Bienvenue, Vous avez un souhait de projet digital ? site vitrine, site E-commerce, refonte de site, Logos personalisés etc. ? Découvrez sur ce site, mon portfolio, mes projets web réalisés, et mes formations digitals sur la plateforme UDEMY." />
    <meta property="og:image" content="https://rismo.fr/img/dev4.webp" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicons/logorismo.png') }}" />
    


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


    <meta name="facebook-domain-verification" content="fprkqsz82j761fcw3tz3jwplk8z1og" />
    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" ></script>

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <!--Let browser know website is optimized for mobile-->
    <title>{{ config('app.name', 'rismo') }}</title>
    @livewireStyles
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

    <body id="open" data-spy="scroll" data-offset="80">
        <div id="openModal" class="modalDialog text-center shadow">
          <div class="center-align">
         <a href="/">
            <img src="{{asset('img/Sale.webp')}}" alt="portfolio" width="100" height="100" class="mt-2 mb-2 text-center" /></a>

            <h2><span class="type center-align white-text tit" style="font-size: 3rem"></span>

            </h2>



            <button id="closeModal" class="btn btn-danger shadow">DECOUVRIR</button>

          </div>
        </div>
        <video playsinline autoplay muted loop id="bgvid" style="display: none">
            <source src="{{asset('img/fonts1.mp4')}}" type="video/mp4" id="vid">
          </video>
        <!--FACEBOOK LIKE-->

        <div id="fb-root"></div>




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
            @include('inc.modalNewsletter')
            @include('inc.modalPassword')
            @include('inc.modalRegister')
            @include('inc.modalLogin')
            @yield('javascripts')
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVMV4G8"
              height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        </main>

       </div>
@livewireScripts
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" ></script>
      </body>
    </html>
