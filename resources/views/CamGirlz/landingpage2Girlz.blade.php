@extends('CamGirlz.__layout')

@section('refresh')
 <meta http-equiv="refresh" content="120">
@endsection

@section('title')
  <title>2 Girlz 1 Cam</title>
@endsection

@section('keywords')
<meta name="keywords" content="Cam, Girls, Sexy, Chat, Camchat">
@endsection

@section('description')
<meta name="description" content="Hi Süßer, schön dass du uns besuchst. Teile uns deine Fantasien mit und wir werden dich glücklich machen.">
@endsection

@section('additional_css')
<style media="screen">
  .videoAttention{
    object-fit: cover;
    border-radius: 15px;


  }
  .fontsize1
  {
    font-size: 1.5em;
  }
  .fontsize2
  {
    font-size: 2.1em;
  }
  .fontsize3
  {
    font-size: 3em;
  }
  .slick-track
  {
    /* overflow: auto !important; */
    overflow-y: visible !important;
    /* overflow-x: hidden !important; */
  }
   .slick-list
   {
     overflow: inherit !important;
     /* overflow-y: visible !important; */
     /* overflow-x: hidden !important;  */
     border-top: 2px solid white
     padding: 15px;
   }
  .contentbreak1{
    margin-top: 2em;
  }
  .contentbreak2{
    margin-top: 3.5em;
  }
  .grow
  {
    animation: grow 2s forwards;
  }
  .changingColors1{
    animation: colors 30s infinite;
  }
  @keyframes grow
  {
    from{
      transform: scale(1);
    }
    to
    {
      transform: scale(1.2);
    }
  }
  @keyframes colors {
      0%   {
        background: #67023d;
      }
      25%
      {
        background: #c60c31;
      }
      75%
      {
        background: #1b1b1b;

      }
      100%   {
        background: #67023d;
      }
    }
</style>
@endsection
@section('content')
<div class="container-lg-fluid center_items text-white m-0 p-0">
    <div class="col-sm-12 col-md-8 overflow-hidden changingColors1 p-0">
      <div class="row">
        <div class="col-1 offset-2">
          <a href="{{route('videoChat')}}">
            <span class="material-icons fontsize3">
            videocam
            </span>
          </a>
        </div>
        <div class="col-1 offset-6 ">
          <a href="#">
            <span class="material-icons fontsize3">
            login
            </span>
          </a>
        </div>
      </div>
  <div class="row center_items">
      <div class="row contentbreak1">
        <h1 class="text-center">Sexy Girls, heiße Aktion komm zu uns!</h1>
      </div>
      <div class="row center_items contentbreak1">
        <div class="col-sm-5 mt-2 center_items">
          <video class="img-fluid videoAttention shadow"  controls autoplay muted>
            <source src="https://cms-public.cdn.artgrid.io/content/artgrid/footage-hls/song-436682_playlist_1648586312.m3u8" type="">
            Ihr Browser kann dieses Video nicht wiedergeben.<br/>
          </video>
        </div>
        <div class="col-sm-5 mt-2 center_items ">
        <video  class="img-fluid videoAttention shadow" src="https://cms-public.cdn.artgrid.io/content/artgrid/footage-hls/song-436682_playlist_1648586312.m3u8" controls autoplay muted>
          Ihr Browser kann dieses Video nicht wiedergeben.<br/>
        </video>
        </div>
      </div>
  <div class="row contentbreak1 center_items">
    <div class="col-md-8">
      <div class="row">
        <h2 class="text-center">Eine einzigartige Erfahrung</h2>
      </div>
      <div class="row contentbreak1">
        <p class="text-center">Willst du dem grauen Alltag entkommen und Einfach mal ne geile Zeit haben? Dann bist du hier richtig! Hab Spaß, lass dich gehen. Wir beide versüßen dir in aller Ruhe deinen Tag. Wir sind gut drauf und für fast jeden Spaß zu haben.</p>
      </div>
    </div>
    <div class="col-8">
      <div class="row gallery contentbreak1 center_items" style="">
        <div class="col-3 m-1" style="z-index:99;">
          <img class="img-fluid" src="http://testversmokingt33s.de/storage/thumbs/profiles/4072522f960a3103e770aecf527c9d4e.jpg" alt="Hier sollte ein sexy Bild sein">
        </div>
        <div class="col-3 m-1" style="z-index:99;">
          <img class="img-fluid" src="http://testversmokingt33s.de/storage/thumbs/profiles/08c9b8f2d6adb221ae3115a63cb28c25.jpg" alt="Hier sollte ein sexy Bild sein">
        </div>
        <div class="col-3 m-1" style="z-index:99;">
          <img class="img-fluid" src="http://testversmokingt33s.de/storage/thumbs/profiles/2ad8768ace96b496c35d522d99fefdd7.jpg" alt="Hier sollte ein sexy Bild sein">
        </div>
        <div class="col-3 m-1" style="z-index:99;">
          <img class="img-fluid" src="http://testversmokingt33s.de/storage/thumbs/profiles/c58530da767ea2977b0769769806eda0.jpg" alt="Hier sollte ein sexy Bild sein">
        </div>
        <div class="col-3 m-1" style="z-index:99;">
          <img class="img-fluid" src="http://testversmokingt33s.de/storage/thumbs/profiles/5647350c1e8e44063e2e1ebea9f2e727.jpg" alt="Hier sollte ein sexy Bild sein">
        </div>
        <div class="col-3 m-1">
          <img class="img-fluid" src="http://testversmokingt33s.de/storage/thumbs/profiles/4072522f960a3103e770aecf527c9d4e.jpg" alt="Hier sollte ein sexy Bild sein">
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="row contentbreak1">
        <p class="center_items"> <button type="button" class="btn btn-dark rounded shadow" name="button">Login</button> </p>
      </div>
      <div class="row contentbreak1">
        <h3 class="text-center">Die Girls</h3>
        <p class="text-center contentbreak1"> Wir sind zwei lebenslustige Mädels, die Spaß daran haben sich zu zeigen und vor der Kamera zu spielen. Hab keine Angst uns deine Wünsche mitzuteilen. Wir sind sehr neugierig. </p>
      </div>
      <div class="row contentbreak1">
        <h3 class="text-center">Besuche uns ebenfalls in den sozialen Netzwerken </h3>
      </div>
      <div class="row contentbreak1">
        <p class="center_items"> <a class="fa fa-facebook socmedbutton facebookcolor" href=""></a>  <a class="fa fa-instagram socmedbutton instacolor" href="https://www.instagram.com/tkasosy/"></a></p>
      </div>
      <div class="row contentbreak1 mx-auto mb-1 rounded shadow fixed-bottom p-2" style="background: rgba(0,0,0,0.7); width:66.6666666667%;">
        <p class="center_items"> <a class="m-1" href="">Impressum</a>  <a class="m-1" href="">AGB</a> <a class="m-1" href="#">Datenschutz</a> </p>
      </div>
      <div class="row contentbreak1  bg-dark m-0">
        <p class="center_items"> <a class="m-1" href="">Impressum</a>  <a class="m-1" href="">AGB</a> <a class="m-1" href="#">Datenschutz</a> </p>
      </div>
    </div>
  </div>
</div>
<script  src="{{asset('js/slick-1.8.1/slick/slick.min.js')}}"></script>

<script type="text/javascript">


$('.gallery').slick({
slidesToShow: 3,
slidesToScroll: 1,
// fade: true,
autoplaySpeed: 3500,
arrows: false,
dots: true,
dotsClass: 'sl-dots',
appendDots: $('.slick-slider-dots'),

// cssEase: 'linear',
autoplay: true,
responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });

  $('.gallery').on('afterChange', function(event, slick, direction){

      centralel = $('.slick-active')[1]

      if(centralel)
      {
        let formerel = $('.slick-active')[0]

        if(formerel)
        {
          formerel.classList.remove("grow")
          centralel.classList.add("grow")
        }


      }
      else
      {
        centralel = $('.slick-active')[0]

        centralel.classList.add("grow")
        setTimeout(() => {centralel.classList.remove("grow")}, 3500);

      }

      // console.log(centralel)
    });




</script>
@endsection
