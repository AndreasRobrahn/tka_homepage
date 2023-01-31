@extends('teamyak_generalLayout')

    @section('title')
      <title>Team Yak, Neugikeiten, Termine etc.</title>
      @endsection
      @section('description')
        <meta name="description" content="Neugikeiten aus der Welt des BJJ. Wenn es was wichtiges über Team Yak zu berichten gibt findest du es hier als erstes">
        @endsection
      @section('keywords')
        <meta name="keywords" content="Brasilian Jiu Jitsu, Kampfsport, Flensburg, Trainer, Training">Team Yak, Brasilian Jiu Jitsu (BJJ) in Flensburg</title>
        @endsection

    @section('unique_style')
    <!-- Styles -->
      <style media="screen">
      body{
        font-family: 'Nadeem' !important;
        font-size: 1.3em;
        overflow:initial !important;
      }

      #frontpagevideo
      {
        position: absolute;
        width: 100%;

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
          display:flex;
          background: RGBA(221, 65, 36,0.2);
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

@section('content')
    <div class="container " id="tov">
      <div class="row center_items h-100">
        <div class="col-sm-8 center_items unit-translucent text-white">
          <div class="text-white row m-2">
            <div class="col-sm">
              <h1 class="textsize2">Trainingszeiten</h1>
              <div class="table-responsive shadow-lg">
      <table class="table table-striped " id="training">
        <thead class="headline" style="background-color: #ffcc5c; opacity: 0.5;">
          <tr>
            <th class="">#</th>
            <th style="font-weight: 700px;">Uhrzeit</th>
            <th>Trainingsinhalt</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Montag</td>
            <td>20.00 Uhr - 21.30 Uhr</td>
            <td>Grappling Fundamentals</td>
          </tr>
          <tr>
            <td>Dienstag</td>
            <td>16.15 Uhr - 17.45 Uhr</td>
            <td>BJJ Technik</td>
          </tr>
          <tr>
            <td>Donnerstag</td>
            <td>16.15 Uhr - 17.45 Uhr</td>
            <td>BJJ Technik</td>
          </tr>
          <tr>
            <td>Freitag</td>
            <td>18.00 Uhr - 19.30 Uhr</td>
            <td>Competition Class</td>
          </tr>
        </tbody>
      </table>
    </div>
            </div>
            <div class="col-sm center_items">
              <div class="">
              <p><a class="fa fa-facebook socmedbutton facebookcolor" href=""></a>  <a class="fa fa-instagram socmedbutton instacolor" href="https://www.instagram.com/tkasosy/"></a></p>
            </div>
            </div>

          </div>

        </div>

        </div>
      </div>
    </div>

    </video>

@endsection

</body>

</html>
