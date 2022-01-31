<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    @yield('title')
    @yield('description')
    @yield('keywords')
    <!-- <link href="bootstrap-social-gh-pages/bootstrap-social.css" rel="stylesheet"> -->
    <link href="{{asset('bootstrap-5.0.1-dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="{{asset('js/slick-1.8.1/slick/slick.css')}}"/>
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">/ -->
    <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="{{asset('css/main.css')}}"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://kit.fontawesome.com/c869b225f8.js" crossorigin="anonymous"></script>
    <!-- jquery-->
    <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="{{asset('css/main.css')}}"/>
    <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="{{asset('js/slick-1.8.1/slick/slick.css')}}"/>

    <script  src="{{asset('js/jquery.js')}}"></script>
    <script  src="{{asset('bootstrap-5.0.1-dist/js/bootstrap.min.js')}}"></script>

  </head>
  @yield('unique_style')
<body>

<div class="container-fluid bg-light">
    <div class="row  mainColor" id='stickynavmob'>
      <div class="col d-flex justify-content-center align-items-center">
        <div class="navbar-wrapper">
          <input type="checkbox" id="hamburg" onclick="showSidebar()">
            <label for="hamburg" class="hamburg">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </label>
          </div>

      </div>

      <div class="col p-1 d-flex justify-content-end align-items-center">
        <a href="{{route('teamyak.landingpage')}}"><img src="{{asset('images/teamlogo2.jpg')}}" alt="Teamlogo" style="transform:rotate(-90deg); width:110px;height:110px;object-fit:cover;object-position:50% 50%; border-radius: 50%;"></a>
      </div>
    </div>
    <div class="row mainColor" id='stickynav'>
      <div class="col d-flex justify-content-center align-items-center headline">
        <a href="{{route('teamyak.abouts')}}"> Team Yak</a>

      </div>
      <div class="col d-flex justify-content-center align-items-center headline">
        <a href="{{route('training')}}">Training</a>

      </div>
      <div class="col d-flex justify-content-center align-items-center headline1">
        <a href="{{route('teamyak.landingpage')}}">
        <img src="{{asset('images/teamlogo2.jpg')}}" alt="" style="width:110px;height:110px;object-fit:cover;object-position:50% 50%; border-radius: 50%; transform:rotate(-90deg);">
        </a>
      </div>
      <div class="col d-flex justify-content-center align-items-center headline">
        <a href="#sport ">Brasilian Jiu Jitsu</a>
      </div>
      <div class="col d-flex justify-content-center align-items-center headline">
        <a href="#contact ">Kontakt </a>
      </div>
    </div>
    <div class="row center_items" style="height: 100vh; position:relative; ">
      @yield('content')
    <img  class="w-100 p-0 h-100 bgimage shadow border-rounded" src="{{asset('Videos/bgfoto2.jpeg')}}" style="position:absolute;top:0%;">
    @yield('layer')
    </div>
  </div>

</body>

  <script  src="{{asset('js/main.js')}}"></script>

  @yield('additional_js')
</html>
