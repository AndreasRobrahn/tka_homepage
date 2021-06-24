<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- <link href="bootstrap-social-gh-pages/bootstrap-social.css" rel="stylesheet"> -->
    <link href="{{asset('bootstrap-5.0.1-dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="{{asset('js/slick-1.8.1/slick/slick.css')}}"/>
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">/ -->
    <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="{{asset('css/main.css')}}"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://kit.fontawesome.com/c869b225f8.js" crossorigin="anonymous"></script>
    <!-- jquery-->
    <script  src="{{asset('js/jquery.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Bootstrap js -->
    <script  src="{{asset('bootstrap-5.0.1-dist/js/bootstrap.min.js')}}"></script>
    <title>Unikat Personaldienstleistungen</title>
    <!-- Styles -->
    <style media="screen">
    body{
      font-family: 'Merienda One';
      font-size: 1.3em;
      overflow:initial !important;
    }
    .button
    {
      background-color: white;
      font-size: 1.2em;
      font-weight: 300;
      border-radius: 25px;
      border: 2px solid RGB(221, 65, 36);
      width: 50%;
    }
    .button:hover
    {
      background-color: RGB(221, 65, 36);
      color:white;
    }
    .coachimg
    {
      border-radius: 25%;
      border-color: 2px solid black;
    }
    .headline
    {
      font-size: 1.4em;
      font-weight: 500;
    }
    .headline1
    {
      font-size: 1.7em;
      font-weight: 900;
    }
    .mapouter{
      position:relative;
      text-align:right;
      height:100%;
      width:100%;
    }
    .gmap_canvas {
      overflow:hidden;
      background:none!important;
      height:100%;
      width:100%;
      padding: 15px;
    }

    #stickynav
    {
      color: white;
      background: RGBA(221, 65, 36,0.2);
    }
    #img_training
    {
      background-image: url('https://static.wixstatic.com/media/f48c3a_a73aa71819424fc182341062016b3e95~mv2.jpg/v1/fill/w_670,h_497,al_c,q_80/f48c3a_a73aa71819424fc182341062016b3e95~mv2.webp');
      background-size: cover;
      background-position: 50% 50%;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
    .table-striped>tbody>tr:nth-child(even) {
        background-color: #ddf8e8;
    }

    .table-striped>tbody>tr:nth-child(odd) {
        background-color: #fefdfa;
    }
    .table-striped>tbody>tr:hover {
      opacity: 0.5;
    }

    .customdg-input
    {
      width: 100%;
      border-radius: 15px;
      padding: 5px;
    }
    .customdg-input:focus{
      border: 3px solid rgba(0,0,255, 0.5) ;
    }
    .customdg-input:hover{
      border: 2px solid rgba(0,0,255, 0.8) ;
    }
    #stickynavmob{
      display:none;
    }
    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {

      #stickynav{
        display:none;
      }
      #stickynavmob{
        display:flex;
        /* background: RGBA(221, 65, 36,0.2); */
      }
    }
    @media only screen and (max-height: 400px) {

      #stickynav{
        display:none;
      }
      #stickynavmob{
        display:flex;
        background-color: rgba(221, 65, 36,0.5);
      }
    }
    </style>
    <body>
    @yield('content')
    <div class="container-fluid p-0">
      <div class="row ukColor1  text-white m-0 mt-2 justify-content-center mainColor">
        <div class="col-6 center_items">
          <a href="#">Impressum</a>
        </div>
        <div class="col-6 center_items">
          <a href="#">Datenschutz</a>
        </div>
      </div>
    </div>
  </body>
    <script  src="{{asset('js/main.js')}}"></script>
  </html>
