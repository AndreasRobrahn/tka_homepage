@extends('BistroMandana.BistroMandana')

@section('refresh')
 <meta http-equiv="refresh" content="120">
@endsection

@section('title')
  <title>Bistro Mandana, Imbiss in Flensbhurg Weiche</title>
@endsection

@section('keywords')
<meta name="keywords" content="Döner, Schnellimbiss Flensburg, Imbiss Flensburg">
@endsection

@section('description')
<meta name="description" content="Hallo und Willkommen im Mandana Bistro. Wir sind ein Imbiss in Flensburg Weiche. Döner, Pizza und vieles mehr. Komm uns besuchen!">
@endsection

@section('additional_css')
<style media="screen">
  body
  {
    background-image: url("{{asset('images/starz.gif')}}");
    font-family: 'Lato';
    overflow-x: scroll;
    overflow-y: hidden;
    /* height: auto;
    width: 100vw;
     */

  }
  .rowSpace
  {
    margin-top: 1.7em;
  }
  .bgColor1
  {
    background: #d62828;
  }
  .container2
  {
    background: rgba(221,211,209,0.5);
    border-radius: 15px;
    border:3px solid #d62828;
    width: 100%;
  }
  .borderW
  {
    border: 3px solid white;
  }
  .boxshadowW
  {
    box-shadow: 0px 0px 5px 5px rgba(255,255,255,0.9);
  }
  .grow
  {
    animation: grow 2s forwards;
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
  @media screen and (max-width: 415px) {
    .table
    {
      text-align: center;
      /* display: none; */
    }
  }
</style>

@endsection

@section('content')
<div class="body center_items">
  <div class="container m-4 ">
    <div class="row center_items">
      <div class="col-10 col-sm-4 bgColor1 rounded boxshadowW">
        <img src="https://cdn-icons-png.flaticon.com/512/1404/1404945.png" class="img-fluid" alt="">
        <h1 class="text-center text-white ">Bistro Mandana</h1>
      </div>

    </div>
    <div class="row center_items rowSpace p-4">
      <div class="col-12 col-sm-10 container2 p-2 ">
        <div class="row">
          <div class="col-12 col-sm-5 center_items">
            <img src="https://essenbestellen24.de/storage/spatie-media/images/163741/thumbnail.jpg"  class="img-fluid borderW" alt="">
          </div>
          <div class="col-7 ">
            <table class="table text-white">
              <tr>
                <td>Telefon</td>
                <td><a href="tel:0461707196100">0461 - 70719610</a></td>
              </tr>
              <tr>
                <td>Lieferservice täglich</td>
                <td>von 17:00 - 22:00 Uhr</td>
              </tr>
              <tr>
                <td>Óffnungszeiten Montag - Sonntag & Feiertag</td>
                <td>von 11:00 - 22:00 Uhr</td>
              </tr>
              <tr>
                <td>Adresse</td>
                <td>Ochsenweg 13 Flensburg-Weiche</td>
              </tr>
            </table>
          </div>
        </div>

      </div>

    </div>
    <div class="row rowSpace p-4">
      <div class="col-6 col-sm-4 bgColor1 rounded boxshadowW">
        <h2 class="text-white">
          Pizza Spezialitaten
        </h2>
      </div>

    </div>
    <div class="row center_items p-4">
      <div class="col-10 container2 p-2 ">
        <div class="table-responsive">


        <table class="table text-white">
          <tr>
            <td colspan="2"></td>
            <td>22cm</td>
            <td>28cm</td>
            <td>32cm</td>
          </tr>
          <tr>
            <td>1. Margherita</td>
            <td>mit Tomaten, Käse</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>

          </tr>
          <tr>
            <td>1. Margherita</td>
            <td>mit Tomaten, Käse</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>

          </tr>
          <tr>
            <td>1. Margherita</td>
            <td>mit Tomaten, Käse</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>

          </tr>
          <tr>
            <td>1. Margherita</td>
            <td>mit Tomaten, Käse</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>

          </tr>
        </table>
      </div>
      </div>
    </div>
    <div class="row rowSpace p-4">
      <div class="col-6 text-white col-sm-4 bgColor1 rounded boxshadowW">
        <h2>
          Döner Spezialitaten
        </h2>
      </div>
    </div>
    <div class="row center_items p-4">
      <div class="col-sm-10 container2 p-2 ">
        <div class="table-responsive">
        <table class="table text-white">
          <tr>
            <td colspan="2"></td>
            <td>22cm</td>
            <td>28cm</td>
            <td>32cm</td>
          </tr>
          <tr>
            <td>1. Margherita</td>
            <td>mit Tomaten, Käse</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>

          </tr>
          <tr>
            <td>1. Margherita</td>
            <td>mit Tomaten, Käse</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>

          </tr>
          <tr>
            <td>1. Margherita</td>
            <td>mit Tomaten, Käse</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>

          </tr>
          <tr>
            <td>1. Margherita</td>
            <td>mit Tomaten, Käse</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>

          </tr>
        </table>
      </div>
      </div>
    </div>
    <div class="row rowSpace p-4 center_items">
      <div class="col-12 col-sm-10  rounded ">
        <div class="gallery">
          <img src="https://img.freepik.com/free-photo/homemade-beef-burger-delicious-fastfood-closeup_151349-156.jpg?w=2000" class="p-2"alt="">
          <img src="https://img.freepik.com/free-photo/homemade-beef-burger-delicious-fastfood-closeup_151349-156.jpg?w=2000" class="p-2"alt="">
          <img src="https://img.freepik.com/free-photo/homemade-beef-burger-delicious-fastfood-closeup_151349-156.jpg?w=2000" class="p-2"alt="">
          <img src="https://img.freepik.com/free-photo/homemade-beef-burger-delicious-fastfood-closeup_151349-156.jpg?w=2000" class="p-2"alt="">
          <img src="https://img.freepik.com/free-photo/homemade-beef-burger-delicious-fastfood-closeup_151349-156.jpg?w=2000" class="p-2"alt="">
        </div>
      </div>
    </div>
    <div class="row rowSpace p-4">
      <div class="col-6 col-sm-4 bgColor1 rounded boxshadowW text-white">

          <h3 class="">Zusatzliche Informationen</h3>
      </div>
    </div>
    <div class="row text-white center_items p-4">
      <div class="col-10 container2 p-2 boxshadowW">
        <div class="row center_items">


      <div class="col-sm-5 m-2 p-1 order-sm-last order-md-first">
        <div class="row m-2 border-bottom" >

        </div>
        <div class="row m-2 justify-content-center ">
          <p>Adresse: XYZ Str. 8, XXXXX Dortmund</p>
        </div>
        <div class="row m-2 justify-content-center ">
          <p>Email: info@unikat-deutschland.de</p>
        </div>
        <div class="row m-2 justify-content-center ">
          <p>Social Media: <a class="fa fa-facebook" href="#"></a>  <a class="fa fa-instagram" href="#"></a></p>
        </div>
        <div class="row m-2  justify-content-center ">
          <div class="col">
            <button type="button" name="button" class="btn btn-block border-rounded border border-white ukColor1" onclick="showContactModal()">Kontaktformular aufrufen</button>
          </div>

        </div>
      </div>
      <div class="col-sm-5 p-0 order-sm-first order-md-last">
        <div class="mapouter" style="height: 350px; width: 100%;padding: 5px;">
          <div class="gmap_canvas p-0 center_items">
            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=24941%20Flensburg,%20Ochsenwef%201&t=&z=17&ie=UTF8&iwloc=&output=embed" style="width: 90%;height: 350px;"></iframe><br>
            <br>
            </style>
          </div>
        </div>
      </div>
      </div>
      </div>
    </div>
    <div class="row bgColor1 text-white rowSpace p-4">
      <div class="col">
        AGB
      </div>
      <div class="col">
        Datenschutzerklarung
      </div>
      <div class="col">
        Impressum
      </div>
      <div class="col">
        xxx
      </div>
    </div>
  </div>
</div>
@endsection

@section('additional_js')
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
