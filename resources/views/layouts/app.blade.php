<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Mon Site Laravel" />
    <meta name="author" content="rismo" />

   <meta property="og:url" content="https://rismo.fr" />
  <meta property="og:type"  content="website" />
  <meta property="og:title"  content="Mon site vitrine" />
  <meta property="og:description"  content="Mon site vitrine" />
  <meta property="og:image"  content="https://rismo.fr/img/laravel.png" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/moi.webp') }}" />
    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!--Import materialize.css-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

<!--facebook-->
    <div id="fb-root"></div>

    <script>
        window.fbAsyncInit = function() {
          FB.init({
            appId      : '232393018493826',
            xfbml      : true,
            version    : 'v9.0'
          });
          FB.AppEvents.logPageView();
        };

        (function(d, s, id){
           var js, fjs = d.getElementsByTagName(s)[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement(s); js.id = id;
           js.src = "https://connect.facebook.net/en_US/sdk.js";
           fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
      </script>


<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v9.0&appId=232393018493826&autoLogAppEvents=1" nonce="uxXBpeiv"></script>

  <!--FACEBOOK  -->

<!-- Load Facebook SDK for JavaScript -->


<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="101082678649330"
theme_color="#20cef5"
logged_in_greeting="Bonjour, Quoi de neuf aujourd'hui?"
logged_out_greeting="Bonjour, Quoi de neuf aujourd'hui?">
</div>




    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--Let browser know website is optimized for mobile-->
    <title>{{ config('app.name', 'rismo') }}</title>
</head>

<body>
    <div id="app">


        @include('inc.navbar')
        <main>
            <div id="fb-root"></div>

            @yield('content')
            @include('inc.errorsuccess')
            @include('inc.modalSendMessage')
            @include('inc.modalEdit')

            <!---scripts-->
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
