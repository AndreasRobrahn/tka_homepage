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
    overflow-x: hidden !important ;
    overflow-y: scroll !important;
    /* height: auto;
    width: 100vw;
     */

  }
  td
  {
    text-align: left;
    vertical-align: middle;
  }
  .textOverPic1
  {
    color: white;
    background-color: rgba(0,0,0,0.35);
    /* display: flex; */
    /* align-self: baseline; */
  }
  .sliderimg
  {
    width: 100%;
    height: 275px;
    object-fit: cover;
  }
  .category
  {
    top:-5px;
    left:15px;
    width: 30%;
  }
  .rowSpace
  {
    margin-top: 3.7em;
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
  .gmap_canvas
  {
    height: 100%;
    width: 100%;
  }
  #gmap_canvas
  {
    height: 90%;
    width: 100%;
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
    .container2
    {
      width: 100%;
    }
    .category
    {
      width: 50%;
    }
  }
</style>

@endsection

@section('content')
<div class="body center_items">
  <div class="container m-4 ">
    <div class="row center_items">
      <div class="col-10 col-sm-4 col-md-8 col-xl-4 bgColor1 rounded boxshadowW">
        <img src="https://scontent.fham2-1.fna.fbcdn.net/v/t1.6435-9/89345588_3618211291586748_1463040923884584960_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=3GESaVK9StsAX8lVFIB&_nc_ht=scontent.fham2-1.fna&oh=00_AT9nEszImyZiV7TZpUboAS_rEo2Df--pbN9EhgVHD3LGMA&oe=62D80567" class="img-fluid p-2" alt="">
        <!-- <h1 class="txt-center text-white " style="font-size: 3em;">Bistro Mandana</h1> -->
      </div>

    </div>
    <div class="row center_items p-4 position-relative rowSpace">

      <div class="col-12 col-sm-10 container2 p-2 ">
        <div class="row center_items">
          <div class="col-12 col-sm-8 position-relative " style="height: 60vh;">
            <img src="https://scontent.fham2-1.fna.fbcdn.net/v/t1.18169-9/216833_151891431552102_2711117_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=cdbe9c&_nc_ohc=glEH7O2tgjoAX8St6eb&_nc_ht=scontent.fham2-1.fna&oh=00_AT9-0yOnQ7lBYYpEf5Zz4vx_MRJLEos25QpvvPnoFTKAHA&oe=62D82BDA"  class=" position-absolute h-100 w-100 borderW" alt="Bistro Manadan Außenansicht">
              <div class="h-100 w-100 center_items textOverPic1 position-absolute">
                <p class="p-2 position-absolute " style="bottom: 0px;">Wir sind das Bistro Mandana, dein Imbiss in Weiche. Hast du Hunger? Döner, Pizza oder ne klassiche Currywurst mit Pommes? Wir machen dir unsere leckeren Gerichte immer frisch und vor Ort. Unsere Gäste schwören auf die lockere Athmosphäre und das gute Essen. Komm vorbei und u2berzeug dich selbst. Oder lass dir dein Essen bequem liefern!</p>
              </div>
            </div>
            </div>
          </div>
      <div class="position-absolute bgColor1 rounded boxshadowW category" style="">
        <h2 class="text-white">
          Über uns
        </h2>
      </div>
    </div>

    <div class="row center_items p-4 position-relative rowSpace">
      <div class="position-absolute bgColor1 rounded boxshadowW category" style="">
        <h2 class="text-white">
          Pizza Spezialitaten
        </h2>
      </div>
      <div class="col-10 container2 p-2 ">
        <div class="table-responsive">
        <table class="table text-white">
          <tr>
            <td colspan="3"></td>
            <td>22cm</td>
            <td>28cm</td>
            <td>32cm</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Margherita</td>
            <td><small>mit Tomaten, Käse</small></td>
            <td>4,90 Euro</td>
            <td>6,10 Euro</td>
            <td>7,10 Euro</td>

          </tr>
          <tr>
            <td>2</td>
            <td>Salami</td>
            <td><small>mit Rindersalami <sup>a,c,g,1,4,6</sup> </small> </td>
            <td>5,90 Euro</td>
            <td>8,10 Euro</td>
            <td>9,10 Euro</td>

          </tr>
          <tr>
            <td>3</td>
            <td>Schinken</td>
            <td><small>mit Hinterkochschinken <sup>a,c,g,2,4,3</sup></small> </td>
            <td>5,90 Euro</td>
            <td>8,10 Euro</td>
            <td>9,10 Euro</td>

          </tr>
          <tr>
            <td>4</td>
            <td>Tonno</td>
            <td><small>mit Thunfisch, Zwiebeln <sup>a,c,g</sup></small> </td>
            <td>6,90 Euro</td>
            <td>8,50 Euro</td>
            <td>9,60 Euro</td>

          </tr>
          <tr>
            <td>5</td>
            <td>Funghi</td>
            <td><small>mit Salami, Zwiebeln, Champignon <sup>a,c,g</sup></small> </td>
            <td>6,90 Euro</td>
            <td>8,90 Euro</td>
            <td>10,90 Euro</td>

          </tr>
          <tr>
            <td>6</td>
            <td>Hähnchen</td>
            <td><small>mit Hähnchenbrust, Brokkoli, Sauce Hollandaise <sup>a,c,g</sup></small> </td>
            <td>6,90 Euro</td>
            <td>9,10 Euro</td>
            <td>11,10 Euro</td>

          </tr>
          <tr>
            <td>7</td>
            <td>Weiche</td>
            <td><small>mit Schinken, Brokkoli, Sauce Hollandaise <sup>a,c,g</sup></small> </td>
            <td>xxx Euro</td>
            <td>xxx Euro</td>
            <td>xxx Euro</td>

          </tr>
          <tr>
            <td>8</td>
            <td>Hawai</td>
            <td><small>mit Schinken, Ananas <sup>a,c,g,2,3,4,10</sup></small> </td>
            <td>6,50 Euro</td>
            <td>8,50 Euro</td>
            <td>9,60 Euro</td>

          </tr>
          <tr>
            <td>9</td>
            <td>Rom</td>
            <td><small>mit Schinken, Salami <sup>a,c,g,2,3,4,6</sup></small> </td>
            <td>6,90 Euro</td>
            <td>8,90 Euro</td>
            <td>10,90 Euro</td>

          </tr>
          <tr>
            <td>10</td>
            <td>Paris</td>
            <td><small>mit Salami, Champignon, Paprika <sup>a,c,g,1,4,6</sup></small> </td>
            <td>7,90 Euro</td>
            <td>9,90 Euro</td>
            <td>11,90 Euro</td>

          </tr>
          <tr>
            <td>11</td>
            <td>Vegetarisch</td>
            <td><small>mit Brokkoli, Champignon, Tomate <sup>a,c,g,7</sup></small> </td>
            <td>6,90 Euro</td>
            <td>8,90 Euro</td>
            <td>10,90 Euro</td>

          </tr>
          <tr>
            <td>12</td>
            <td>Diavolo</td>
            <td><small>mit DSchinken, Salami, Jalapenos <sup>a,c,g,1,2,3,4,6</sup></small> </td>
            <td>6,90 Euro</td>
            <td>8,90 Euro</td>
            <td>10,90 Euro</td>

          </tr>
          <tr>
            <td>13</td>
            <td>Chicken</td>
            <td><small>mit Chickenfleisch, Zwiebeln <sup>a,c,g</sup></small> </td>
            <td>6,90 Euro</td>
            <td>8,90 Euro</td>
            <td>10,90 Euro</td>

          </tr>
          <tr>
            <td>14</td>
            <td>Mandana</td>
            <td><small>Dönerfleisch, Zwiebeln, Sauce Hollandaise<sup>a,c,g,4</sup></small> </td>
            <td>7,50 Euro</td>
            <td>9,50 Euro</td>
            <td>11,90 Euro</td>

          </tr>
          <tr>
            <td>15</td>
            <td>Spezial</td>
            <td><small>mit Rucola, Cherrytomaten, Serrano Schinken <sup>a,c,g</sup></small> </td>
            <td>7,90 Euro </td>
            <td>9,90 Euro</td>
            <td>11,90 Euro</td>

          </tr>
          <tr>
            <td>16</td>
            <td>Art des Hauses</td>
            <td><small>mit Weißkäse, Pepperoni, Oliven, Zwiebeln <sup>a,c,g,7,9</sup></small> </td>
            <td>7,90 Euro</td>
            <td>9,90 Euro</td>
            <td>11,90 Euro</td>

          </tr>
          <tr>
            <td>17</td>
            <td>xxx</td>
            <td><small>mit Meeresfrüchte, Thunsfisch, Knoblauch <sup>a,c,d,g</sup></small> </td>
            <td>7,90 Euro</td>
            <td>9,90 Euro</td>
            <td>11,90 Euro</td>

          </tr>
          <tr>
            <td>18</td>
            <td>Mozarella</td>
            <td><small>mit Mozarella, Tomaten <sup>a,c,g</sup></small> </td>
            <td>6,50 Euro</td>
            <td>8,50 Euro</td>
            <td>9,60 Euro</td>

          </tr>
          <tr>
            <td>19</td>
            <td>Sucuk</td>
            <td><small>mit Knoblauchsalami, Zwiebeln, Pepperoni, Oliven <sup>a,c,g,9</sup></small> </td>
            <td>7,90 Euro</td>
            <td>9,90 Euro</td>
            <td>11,90 Euro</td>

          </tr>
          <tr>
            <td>20</td>
            <td>Chicken Nugget</td>
            <td><small>mit Brokkoli, Sauce Hollandaise <sup>a,c,g</sup></small> </td>
            <td>7,90 Euro</td>
            <td>9,90 Euro</td>
            <td>11,90 Euro</td>

          </tr>
          <tr>
            <td>21</td>
            <td>Popeye</td>
            <td><small>mit Spinat, Weißkäse, Sauce Hollandaise <sup>a,c,g</sup></small> </td>
            <td>6,90 Euro</td>
            <td>9,10 Euro</td>
            <td>11,10 Euro</td>

          </tr>
        </table>
      </div>
      </div>
    </div>


    <div class="row rowSpace nter_items p-4 position-relative">
      <div class="position-absolute bgColor1 rounded boxshadowW category" style="top: -55px;">
        <h2 class="text-white">
          Calzone Spezialitäten
        </h2>
        <small class="text-white">Alle Calzone mit Tomatensauce, Käse überbacken</small>
      </div>
      <div class="col-sm-10 container2 p-2 ">
        <div class="table-responsive">
        <table class="table text-white">
          <tr>
            <td></td>
          </tr>

          <tr>
            <td>22</td>
            <td>Calzone</td>
            <td><small>mit Schinken, Ananas und Käse <sup>a,c,g</sup></small> </td>
            <td >8,50 Euro</td>
          </tr>
          <tr>
            <td>23</td>
            <td>Calzone</td>
            <td><small>mit Schinken, Champignon, Zwiebeln und Käse <sup>a,c,g,2,3,4</sup></small> </td>
            <td >8,80 Euro</td>
          </tr>
          <tr>
            <td>24</td>
            <td>Calzone</td>
            <td><small>mit Dönerfleisch, Tomaten, Zwiebeln, Sauce Hollandaise und Käse <sup>a,c,g,3,7</sup></small> </td>
            <td >9,80 Euro</td>
          </tr>
          <tr>
            <td>25</td>
            <td>Calzone</td>
            <td><small>mit Brokkoli, Mais, Tomaten, Champignon, Sauce Hollandaise und Käse <sup>a,c,g</sup></small> </td>
            <td >9,80 Euro</td>
          </tr>
          <tr>
            <td>26</td>
            <td>Calzone</td>
            <td><small>mit Hähnchenfleisch, Feta, Tomaten, Zwiebeln, Sauce Hollandaise und Käse <sup>a,c,g</sup></small> </td>
            <td >9,80 Euro</td>
          </tr>
          <tr>
            <td>27</td>
            <td>Calzone</td>
            <td><small>mit Brokkoli, Schinken, Sauce Hollandaise und Käse <sup>a,c,g</sup></small> </td>
            <td >8,80 Euro</td>
          </tr>
          <tr>
            <td>28</td>
            <td>Calzone</td>
            <td><small>mit Dönerfleisch, Krautsalat, Zwiebeln, Tsatsiki und Käse <sup>a,c,g,3,7</sup></small> </td>
            <td >8,80 Euro</td>
          </tr>


        </table>
      </div>
      </div>
    </div>
    <div class="row rowSpace nter_items p-4 position-relative">
      <div class="position-absolute bgColor1 rounded boxshadowW category" style="">
        <h2 class="text-white">
          Döner Spezialitaten
        </h2>
      </div>
      <div class="col-sm-10 container2 p-2 ">
        <div class="table-responsive">
        <table class="table text-white">
          <tr>


          </tr>
          <tr>
            <td>1</td>
            <td> Margherita</td>
            <td>mit Tomaten, Käse</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>

          </tr>
          <tr>
            <td>1</td>
            <td>Margherita</td>
            <td>mit Tomaten, Käse</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>

          </tr>
          <tr>
            <td>1</td>
            <td>Margherita</td>
            <td>mit Tomaten, Käse</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>
            <td>4,90 Euro</td>

          </tr>
          <tr>
            <td>1</td>
            <td>Margherita</td>
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
      <div class="col-12 col-sm-10 rounded ">
        <div class="gallery">
          <img src="https://scontent.fham2-1.fna.fbcdn.net/v/t1.6435-9/35390773_2035144423226784_2439264317133029376_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=m11A4hpIfkYAX_v3Luf&_nc_ht=scontent.fham2-1.fna&oh=00_AT8QaZUZXgajj9uqR5JgfkKqo7mO8W5-PLfHWTlBX9-5-A&oe=62D9C551" class="p-2 sliderimg" alt="Foto Gericht1">
          <img src="https://scontent.fham2-1.fna.fbcdn.net/v/t31.18172-8/13329393_1074858025922100_2858690236525820721_o.jpg?_nc_cat=106&ccb=1-7&_nc_sid=19026a&_nc_ohc=za5j1lO8FCMAX9OOscg&_nc_ht=scontent.fham2-1.fna&oh=00_AT-qiOhjACA_2hR6uCjzqU9N5Qp4lQ_b0IzeHIpcoyjBXA&oe=62DA3F1B" class="p-2 sliderimg" alt="Foto Gericht2">
          <img src="https://scontent.fham2-1.fna.fbcdn.net/v/t1.18169-9/12373339_958293917578512_9044156700455215126_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=9267fe&_nc_ohc=2GN6mXh7ZW8AX8NLMe8&tn=I4ckrlSQnhHAjHB5&_nc_ht=scontent.fham2-1.fna&oh=00_AT-aFGyZnBPvEU0l1E0g6o1DPV2PE2e4LUFcO_xD47GWLQ&oe=62D851A9" class="p-2 sliderimg" alt="Foto Gericht3">
          <img src="https://scontent.fham2-1.fna.fbcdn.net/v/t1.6435-9/72559854_3238229232918291_8740556307636944896_n.jpg?stp=dst-jpg_p526x296&_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=W4uJmdChsI4AX9HA6Q6&tn=I4ckrlSQnhHAjHB5&_nc_ht=scontent.fham2-1.fna&oh=00_AT_qZujAR4fSEtJzcCv0m9BKb6joT6MQqD_IB724SPPU8Q&oe=62DA6033" class="p-2 sliderimg"alt="Foto Gericht4">
          <img src="https://scontent.fham2-1.fna.fbcdn.net/v/t1.18169-9/13925129_1135352439872658_6106974649648233343_n.jpg?stp=dst-jpg_p526x296&_nc_cat=104&ccb=1-7&_nc_sid=9267fe&_nc_ohc=wWgnLD_8uz4AX_obBt_&_nc_ht=scontent.fham2-1.fna&oh=00_AT84c9BjZH6vmqy3lP3aGqzJVpPcB6o0B6jdyG0txZkoOA&oe=62DACB1F" class="p-2 sliderimg" alt=" Foto Gericht5">
        </div>
      </div>
    </div>

    <div class="row rowSpace text-white center_items p-4 position-relative">
      <div class="position-absolute bgColor1 rounded boxshadowW category" style="">
        <h2 class="text-white">
          Zusätzliche Informationen
        </h2>
      </div>
      <div class="col-10 container2 p-2 boxshadowW">
        <div class="row center_items rowSpace">
      <div class="col-sm-5 m-2 p-1 order-sm-last order-md-first">
        <table class="table text-white" style="text-align: center;">
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
      <div class="col-sm-5 m-2 p-1 order-sm-first order-md-last center_items">
            <div class="w-100" style="height: 350px;">
              <div class="gmap_canvas">
                <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Ochsenweg%2013%20Flensburg%2024941&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <br><a href="https://www.embedgooglemap.net">google map website widget</a>
              </div>
            </div>
            <br>

          </div>
        </div>
      </div>
      </div>
      </div>
    </div>
    <div class="row rowSpace bgColor1 text-white rowSpace p-4">
      <!-- <div class="col center_items">
        <p>AGB</p>
      </div> -->
      <div class="col center_items">
        Datenschutzerklarung
      </div>
      <div class="col center_items">
        Impressum
      </div>
      <!-- <div class="col center_items">
        xxx
      </div> -->
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
