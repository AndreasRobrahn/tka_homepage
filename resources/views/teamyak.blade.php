@extends('teamyak_generalLayout')


    @section('title')
      <title>Team Yak, Brasilian Jiu Jitsu (BJJ) in Flensburg</title>
    @endsection

    @section('description')
      <meta name="description" content="TeamYak heisst dich willkommen! Suchst das nach einer Art Sport zu treiben, die aufregend ist und dich trotzdem an deine Grenzen bringt?"></meta>
    @endsection

    @section('keywords')
      <meta name="keywords" content="Brasilian Jiu Jitsu, Kampfsport, Flensburg, Trainer, Training"></meta>
      @endsection

    @section('unique_style')
    <!-- Styles -->
    <style media="screen">
      body{
        font-family: 'Nadeem' !important;
        font-size: 1.3em;
        overflow:initial !important;
      }
      video {
          object-fit: fill;
      }

      .button
      {
        background-color: transparent;
        font-size: 1.2em;
        font-weight: 300;
        border-radius: 25px;
        border: 2px solid RGB(221, 65, 36);
        width: 50%;
      }
      #frontpagevideo
      {
        position: absolute;
        width: 100%;
        /* z-index: 200; */

      }
      #tov
      {
        width: 50%;
        position: absolute;
        z-index: 150;
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
      .fa {
        padding: 5px;
        font-size: 30px;
        width: 50px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
        border-radius: 50%;
      }
      .fa-facebook {
        background: black;
        color: white;
      }
      .fa-instagram {
        background: black;
        color: white;
      }
      .mainColor
      {
        background: RGB(221, 65, 36);
      }
      .secondaryColor{

        background-color: #2d3436;
        background-image: linear-gradient(315deg, #2d3436 0%, #d3d3d3 74%);

      }
      #stickynav
      {
        display:none;
        color: white;
        background: RGBA(221, 65, 36,0.2);
        width:100%;
        position: fixed;
        z-index:200;
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
      div label {
        font-size: 1.1em;
        font-weight: 700;
        display: block;
        cursor: pointer;
      }
      tr{
        /* text-align: center; */
      }
      #stickynavmob{
        display:none;
        position: fixed;
        z-index: 200;
        width: 100%;
      }
      /* Extra small devices (phones, 600px and down) */
      @media only screen and (max-width: 600px) {

        #tov
        {
          width: 100%;


        }
        #frontpagevideo
        {
          object-fit: cover;
        }
        #stickynav{
          display:none;
        }
        #stickynavmob{
          display:none;
          background: RGBA(221, 65, 36,0.2);
        }
      }
      @media only screen and (max-height: 400px) {

        #stickynav{
          display:none;
        }
        #stickynavmob{
          display:none;
          background-color: rgba(221, 65, 36,0.5);
        }
      }
      </style>
@endsection

@section('content')
    <div class="container" id="tov" >
      <div class="row">
        <h1 class="text-center text-white textsize3"><img src="https://static.wixstatic.com/media/f48c3a_bd5d30ff99ab4ab29a8621d05c2e190c~mv2.jpg/v1/fill/w_110,h_110,al_c,q_80,usm_0.66_1.00_0.01/f48c3a_bd5d30ff99ab4ab29a8621d05c2e190c~mv2.webp" alt="" style="width:110px;height:110px;object-fit:cover;object-position:50% 50%; border-radius: 50%;"></h1>
      </div>
      <div class="row">
        <h1 class="text-center text-white textsize3">Team Yak</h1>
      </div>
      <div class="row mt-2">
        <h2 class="text-center text-white textsize3">Bjj in Flensburg</h2>
      </div>
      <div class="row center_items mt-4">
        <a class="w-100 center_items" href="{{route('teamyak.news')}}"> <button type="button" class="button"name="button btn-outline" style=""><span class="text-white">Seite Betreten</span></button></a>

      </div>
    </div>
    <video  class="w-100 h-100 p-0" src="{{asset('Videos/frontpagevideo.mp4')}}" id="frontpagevideo" playsinline webkit-playsinline autoplay muted loop>
    </video>
@endsection
