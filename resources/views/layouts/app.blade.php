<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Mon Site Laravel" />
    <meta name="author" content="rismo.fr" />

   <meta property="og:url" content="https://rismo.fr" />
  <meta property="og:type"  content="website" />
  <meta property="og:title"  content="Mon" />
  <meta property="og:description"  content="Mon site en Laravel" />
  <meta property="og:image"  content="https://rismo.fr/images/monSite.png" />
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
            <!---scripts-->
            @include('inc.scripts')
            @yield('javascripts')
            @include('inc.modalApropos')

            @include('inc.modalPassword')
            @include('inc.modalRegister')
            @include('inc.modalLogin')
            @include('inc.modalEdit')

            @include('inc.modalSendMessage')


        </main>

    </div>
</body>

</html>
