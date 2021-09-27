@extends('teamyak_generalLayout')

      @section('title')
        <title>Team Yak, Neugikeiten, Termine etc.</title>
      @endsection

      @section('description')
        <meta name="description" content="Neugikeiten aus der Welt des BJJ. Wenn es was wichtiges über Team Yak zu berichten gibt findest du es hier als erstes">
      @endsection

      @section('keywords')
        <meta name="keywords" content="Brasilian Jiu Jitsu, Kampfsport, Flensburg, Trainer, Training"></meta>
      @endsection

    @section('unique_style')
    <!-- Styles -->
      <style media="screen">
      body{
        font-family: 'Nadeem' !important;
        font-size: 1.1em;
        overflow:initial !important;
      }
      #tov
      {
        /* width: 80%; */
        position: absolute;
        top: 20%;
        z-index: 150;
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

      .secondaryColor{

        background-color: #2d3436;
        background-image: linear-gradient(315deg, #2d3436 0%, #d3d3d3 74%);

      }
      .rel
      {
        position: relative;
      }
      .abs
      {
        position: absolute;
      }
      #stickynav
      {
        color: white;
        background: RGBA(221, 65, 36,0.2);
        width:100%;
        position: fixed;
        z-index:200;
      }

      .img-slide
      {
        height: 100%;
        width: 100%;
        object-fit: cover;
        /* width: 500px; */
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
@endsection

@section('content')
    <div class="container-fluid shadow" id="tov">
      <div class="row center_items">
        <div class="col-1 center_items">
            <button type="button" class="button" name="button" id="prev"><</button>
        </div>
        <div class="col-sm-10 col-lg-6 shadow">

          <div class="row m-1">
            <div class="gallery" style="height: 60vh;">
              <div class="h-100" >
                <div class="rel h-100 center_items ">
                  <img src="{{asset('generico_imagio/tyhc1.jpeg')}}" class="img-slide abs" alt="">
                  <div class="abs h-100 w-100 center_items readabiltyEnhancerWhite">
                    <p class="readabiltyEnhancerWhite textsize2">Kristoffer Madsen Headcoach</p>
                  </div>
                </div>

              </div>
              <div class="h-100" >
                <div class="rel h-100 center_items readabiltyEnhancerWhite">
                  <img src="{{asset('generico_imagio/tyhc2.jpeg')}}" class="img-slide abs h-100" alt="A. Madsen Headcoach">
                  <div class="abs h-100 w-100 center_items ">
                    <p class="readabiltyEnhancerWhite textsize2">Andreas Madsen Headcoach</p>

                  </div>
                </div>

              </div>
              <div class="h-100" >
                <div class="rel h-100 center_items readabiltyEnhancerWhite">
                  <img src="{{asset('generico_imagio/teamfoto.jpeg')}}" class="img-slide abs" alt="">
                  <div class="abs h-100 w-100 center_items ">
                  <p class="readabiltyEnhancerWhite textsize2">Das Team</p>
                  </div>
                </div>

              </div>

            </div>
          </div>
          </div>
          <div class="col-1 center_items">

              <button type="button" class="button" name="button" id="next">></button>

          </div>
        </div>
      </div>
    <div class="h-100 w-100" style="position:absolute; background-color: rgba(0,0,0,0.8);">

    </div>


@endsection

@section('additional_js')

<script  src="{{asset('js/slick-1.8.1/slick/slick.min.js')}}"></script>

<script type="text/javascript">
$(document).ready(function(){
  $('.gallery').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    // dots: true,
    arrows: true,
    nextArrow: $('#next'),
    prevArrow: $('#prev'),
        });
      })
</script>
@endsection
</html>
