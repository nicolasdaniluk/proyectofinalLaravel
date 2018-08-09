<?php  ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="img/png" href="{{\Storage::url('img/ico.png')}}">
  <title>Woodsales </title>

  <!-- Bootstrap core CSS-->
  <link href="/css/dist/css/bootstrap.css" rel="stylesheet">

  <!-- web CSS-->
  <link href="/css/carousel.css" rel="stylesheet">
  <!--fontawesome -->
  <script type="text/javascript" src="/js/fontawesome/js/fontawesome-all.js"></script>
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"> -->

  <!-- FLICKETY-->
  <script type="text/javascript" src="/js/flickity.pkgd.js"></script>
  <link rel="stylesheet" href="/css/flickity-docs.css?4" media="screen">
  <!-- Component styles -->
  <link rel="stylesheet" href="<?php
  if(!isset($_COOKIE['css'])){
    echo '/css/styles.css';
  }else {echo $_COOKIE['css'];}?>" name="css">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
  <!-- Styles
  <link href="<?php
  if(!isset($_COOKIE['appcss'])){
    echo '/css/app.css';
  }else {echo $_COOKIE['appcss'];}?>" rel="stylesheet" name="appcss">
-->

</head>
  <body>
    @include('plantillas.header')
      @yield('contenido')
    @include('plantillas.footer')
    <script type="text/javascript" src="/js/cambiadorEstilos.js"></script>
  </body>
</html>
