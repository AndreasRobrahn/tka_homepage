<!DOCTYPE html>
<html lang="de" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="die TKA Software Systems UG hat sich die Programmierung und das Design von Webapplikationen, Firmenauftritten oder sonstigen ausgefallenen Ideen auf die Fahnen geschrieben. Dabei wird eine gesamtheitliche Betreuung (Webseiten, Social Media) angestrebt um das Marketingpotenzial gezielt zu steigern. Ebenfalls helfen wir Ihnen auch bei Ihren laufenden Projekten weiter.">
    <meta name="keywords" content="Webdesign, Webseite, Webapplikation, Flensburg Webseite, Flensburg, Webprogrammierung">
    <meta name="refresh" content="">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- <link href="bootstrap-social-gh-pages/bootstrap-social.css" rel="stylesheet"> -->
    <link href="{{asset('bootstrap-5.0.1-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="icon" type="asset('/images/favicon_io-2/favicon.ico')" href="{{route('landingpage')}}">
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
    <title>TKA Software Systems Webprogrammierung, Webdesign und Social Media aus Flensburg</title>
    <!-- Styles -->
    <style media="screen">
    a {
      text-decoration: none;
      background-color: none;
    }
    ul
    {
      list-style-type: none;
      padding: 0px !important;
    }

    .spin-border
    {
      animation: spin 10s linear infinite
    }

    @keyframes spin {
      100% {
        transform: rotateZ(360deg);
      }
    }

    .logo
    {
      height: 100%;
      width: 100%;
      object-fit: cover;
      border-radius: 25px;
      border: 5px solid white;
      /* box-shadow: 10px 10px 5px rgba(); */
      filter: drop-shadow(0px 0px 20px rgba(201, 68, 68, 0.835));
    }
    .galleryitem
    {
      height: 100%;
      width: 100%;
      padding: 15px;

    }
    .img-gall1
    {
      height: 15vh;
      width: 100%;
      object-fit: cover;
    }
    #gmap_canvas
    {
      border-radius: 25px;
    }
    </style>

</head>
  <body class="">
    <div class="container-1" id="bgimage">
      <div class="" id="sidemenuwrapper">
        <div class="sidemenubutton">
          <i class="material-icons" onclick="openSidemenu()" id="openbutton">
            settings
          </i>
          <i class="material-icons" onclick="openSidemenu()" id="closebutton">
            cancel
          </i>
        </div>
        <div class="" id="sidemenu">
          <div class="row  d-flex align-items-center justify-content-start m-0" onclick="showContactModal()">
              <div class="sidemenuitem text-white">
                <i class="material-icons" >
                  email
                </i>
                <div class="popupleft ml-2">
                  <span>Schreibe uns</span>
                </div>
              </div>
            </a>
            </div>
            <a href="tel:01629722979" class="p-0" style="text-decoration: none; color: white;">
              <div class="row d-flex align-items-center justify-content-start m-0" >
                  <div class="sidemenuitem">
                      <i class="material-icons" onmouseover="">
                          dialpad
                        </i>
                    <div class="popupleft" >
                      <span>Melde dich direkt telefonisch</span>
                  </div>
                </div>

              </div>
            </a>
          <div class="row d-flex align-items-center justify-content-start m-0" onclick="toTheId('possibilities')">
            <div class="sidemenuitem">
              <i class="material-icons" >
                account_tree
              </i>
              <div class="popupleft">
                <a href="{{route('examples')}}">  <span>Beispiele</span></a>

              </div>
            </div>
          </div>
          <div class="row d-flex align-items-center justify-content-start m-0" onclick="toTheId('top')">
            <div class="sidemenuitem">
              <i class="material-icons" >
                arrow_upward
              </i>
              <div class="popupleft">
                <span>Zum Anfang</span>
              </div>
            </div>
        </div>
        <a href="{{route('impressum')}}" class="p-0" style="text-decoration: none; color: white;">
          <div class="row d-flex align-items-center justify-content-start m-0" >
            <div class="sidemenuitem">
              <span class="material-icons">
                contact_support
              </span>
                <div class="popupleft">
                  <span>Zum Impressum</span>
                </div>
              </div>
          </div>
        </a>
      </div>
      </div>
        <img src="{{asset('/images/backgroumd_img.jpg')}}" alt="" id="bgimage1">
        <div class="unit-black-transparent bgbt1" >
          <div class="container-fluid mt-4  h-100" id="top">
            <div class="row align-items-end justify-content-center disSMNone" id="" style="height: 15%;width:90%;margin-left: 5%;" >
              <div class="col p-2 center_items fsize1">
                <a href="{{route('examples')}}">Services</a>

              </div>
              <div class="col p-2 center_items fsize1">
                <a href="{{route('gallerys')}}">Bildergallerie</a>

              </div>
              <div class="col p-2 center_items fsize1" onclick="showContactModal()">
                Kontakt
              </div>
              <div class="col p-2 center_items fsize1" style="margin-left: 35%;">
                <a href="#">Home</a>

              </div>
            </div>
            <div class="row align-items-center " style="height: 85%;width:90%;margin-left: 5%;">

              <div class="col-md-6 center_items mt-2 p-3" style="position:relative; overflow:hidden; ">
                <div class="shiningeffect" style="position: absolute; background-color: rgba(255,255,255,0.3); width: 150%;">

                </div>
                <img src="{{asset('/Firmenlogo/Firmenlogo.jpeg')}}" class="logo" alt="Logo TKA Systems">
              </div>
              <div class="col-md-6" id="thebusiness">
                <div class="wrapper">

                  <div class="row center_items p-2">
                    <h1 class="fsize1 ">Webapplikationen, Webdesign & Social Media im hohen Norden</h2>
                  </div>
                  <div class="row center_items mt-2 p-2">
                    <p class="textsize1">Dein Ansprechpartner für Webseiten.
                      Du hast eine Idee für eine Webseite? Wir erstellen sie.
                      Programmierung, Design oder Social Media - alles aus einer Hand.
                      Melde dich einfach auf einem unserer Kanäle und wir besprechen die Details.
                      </p>
                  </div>
                  <div class="row mt-2 p-2 justify-content-center gallery">
                    <div class="galleryitem ">
                      <img src="{{asset('/generico_imagio/design1.png')}}" class="img-gall1" alt="Design1">
                    </div>
                    <div class="galleryitem">
                      <img src="{{asset('/generico_imagio/design2.png')}}" class="img-gall1" alt="Design2">
                    </div>
                    <div class="galleryitem">
                      <img src="{{asset('/generico_imagio/design3.png')}}" class="img-gall1" alt="Design2">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="unit-black-transparent bgbt2">
          <div class="container-fluid mt-4 h-100" id="whatwedo">
            <div class="row center_items p-2" style="height: 15%;">

              <h2 class="fsize1 text-center">Was können wir für dich tun?</h2>
            </div>
            <div class="row align-items-center justify-content-center" style="height: 85%;width:90%;margin-left: 5%;">
              <div class="col-sm-5">
                <div class="wrapper">
                <div class="row center_items mt-2 p-2">
                  <p class="textsize1">Unsere Dienste sind sowohl für Unternehmen als
                    auch Privatpersonen interessant. Als loses Netzwerk
                    aus Programmieren, Designern und Social Media
                    Veteranen decken wir jeden Bereich modernen
                    Marketings ab.</p>
                </div>
                <div class="row p-1">
                  <h3>Social Media</h3>
                  <p><a class="fa fa-facebook socmedbutton facebookcolor" href=""></a>  <a class="fa fa-instagram socmedbutton instacolor" href="https://www.instagram.com/tkasosy/"></a></p>
                </div>
                </div>

              </div>
              <div class="col-sm-7">
                <div class="w-100 contentbreak center_items">
                  <div class="center_items w-100" style="">
                    <div class="services" style="">
                        <div class="randomform center_items" style="  top: 5%; left: 5%;   transform: rotate(-25deg);">
                          <img src="{{asset('images/coding.jpg')}}" alt="Programmierung" class="image_generic">
                          <div class="readabiltyEnhancerWhite">
                            <p class="b4Pic">Programmierung</p>
                          </div>
                        </div>
                        <div class="randomform center_items" style="  top: 57%; left: 6%;   transform: rotate(15deg);">
                          <img src="{{asset('Firmenlogo/design.jpg')}}" alt="Bild Webdesign Skizze" class="image_generic">
                          <div class="readabiltyEnhancerWhite">
                            <p class="b4Pic">Design</p>
                          </div>
                        </div>
                        <div class="randomform center_items" style="  top: 25%; left: 15%;   transform: rotate(-22deg);">
                          <img src="{{asset('Firmenlogo/projectrealisation.jpg')}}" alt="Programmierung" class="image_generic">
                          <div class="readabiltyEnhancerWhite">
                            <p class="b4Pic">Projektarbeit</p>
                          </div>
                        </div>
                      <div class="randomform center_items" style=" top: 45%; left: 29%;transform: rotate(-29deg);">
                        <img src="{{asset('/Naturbilder/_DSC0972.jpg')}}" class="image_generic" alt="Ein Naturfoto" style="position:absolute;">
                        <div class="readabiltyEnhancerWhite ">
                          <p class="b4Pic text-black">Fotos</p>
                        </div>
                      </div>
                      <div class="randomformvideo center_items" style="top: 10%; left: 36%;   transform: rotate(15deg);">
                        <iframe  class="w-100 h-100" src="https://player.vimeo.com/video/554074757?title=0&portrait=0&byline=0&autoplay=1&loop=1&transparent=1" frameborder="0" allowfullscreen></iframe>
                        </iframe>
                      </div>
                      <div class="randomform center_items" style="top: 36%; left: 37%; transform: rotate(35deg);">
                        <img src="{{asset('images/socmedpic.jpg')}}" class="image_generic" alt="Social Media">
                        <div class="readabiltyEnhancerWhite">
                          <p class="b4Pic">Likes Likes Likes</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="unit-black-transparent" style="height: auto;">
          <div class="container-fluid mt-4 fsize1 h-100">
            <div class="row center_items" style=" height: 15%;">
              <h3 class="text-center mt-2"><strong>Zusätzliche Informationen</strong></h3>
            </div>

            <div class="row mt-4 justify-content-center" style="height: 75%;">
              <div class="col-md-5 center_items">
                <div class="wrapper">
                  <div class="row">
                    <table class="table table-borderless text-white textsize1 w-100">
                      <tr>
                        <td>Mobil:</td>
                        <td>+49 (0)162/97227979</td>
                      </tr>
                      <tr>
                        <td>Adresse:</td>
                        <td>Norderstr. 33, 24939 Flensburg</td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td>info@tka-software-systems.de</td>
                      </tr>
                      <tr>
                        <td>Webseite:</td>
                        <td>www.tka-software-systems.de</td>
                      </tr>
                    </table>
                  </div>
                  <div class="row m-2 ">
                    <div class="col center_items">
                      <button type="button" name="button" class="btn btn-block border-rounded border border-white bg-test2 text-white" onclick="showContactModal()">Kontaktformular aufrufen</button>
                    </div>

                  </div>
                </div>

              </div>
              <div class="col-sm-5 p-0 order-sm-first order-md-last center_items" >
                <div class="mapouter" style="height: 350px; width: 100%;padding: 5px; border-radius: 25px;">
                  <div class="gmap_canvas p-0 center_items">
                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Norderstr.%2033,%2024939%Flensburg&t=&z=13&ie=UTF8&iwloc=&output=embed" style="width: 90%;height: 350px;"></iframe><br>
                    <br>
                    </style>
                  </div>
                </div>
              </div>
          </div>
          <div class="row mt-4">
            <div class="col center_items mb-2">
              <a href="{{route('impressum')}}">Impressum</a>

            </div>
            <div class="col center_items">
              <a href="{{route('dataprivacy')}}">Datenschutz</a>

            </div>
          </div>
          <!-- <div class="row m-2 justify-content-center ">
            <p>Adresse: Sonnenscheineck 16, 44278 Dortmund</p>
          </div>
          <div class="row m-2 justify-content-center ">
            <p>Email: info@unikat-deutschland.de</p>
          </div>
          <div class="row m-2 justify-content-center ">
            <p>Social Media: <a class="fa fa-facebook facebookcolor text-white" href="https://www.facebook.com/Unikat-110609097951924/"></a>  <a class="fa fa-instagram instacolor text-white" href="https://www.instagram.com/unikat_gmbh"></a></p>
          </div> -->

        </div>

      </div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deine Angaben</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="toggleContactModal()">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="" action="{{route('notification.customer')}}" method="post">
            @csrf
            <div class="row m-0 mt-2">
              <div class="col-sm">
                <div class="form-group">
                  <label for="surname">Vorname</label>
                  <input type="text" class="form-control input1 " name="surname" value="" id="surname">
                </div>
              </div>
              <div class="col-sm">
                <div class="form-group">
                  <label for="lastname">Nachname</label>
                  <input type="text" class="form-control input1" name="lastname" value="" id="lastname">
                </div>
              </div>
            </div>
            <div class="row m-0 mt-2">
              <div class="col">
                <div class="form-group">
                <label for="email">Emailadresse</label>
                  <input type="text" class="form-control input1" name="email" value="" required id="email">
              </div>
            </div>
            </div>
            <div class="row m-0 mt-2">
              <div class="col">
                <div class="form-group">
                  <label for="phone">Telefonnummer für eine Rückmeldung</label>
                  <input type="text" class="form-control input1" name="phone" value="" id="phone">
                </div>
              </div>
              </div>
            <div class="row m-0 mt-2">
              <div class="col">
                <div class="form-group">
                  <h5>Was stellst du dir vor?</h5>
                  <textarea name="message" class="form-control input1" rows="8" cols="80" style="width: 100%;"></textarea>
                </div>
              </div>
            </div>
            <div class="row m-2">
              <button type="submit" name="button" class="btn btn-success btn-block bg-test2 text-white">Absenden</button>
            </div>
          </form>
        </div>
        </div>
      </div>
    </div>

  <div class="modal" id="errormodal" tabindex="-1" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="row">
          <div class="col">
            <p id="errorcontent">@if($errors->any()) {{$errors->first()}} @endif</p>
          </div>
        </div>
      </div>
    </div>
  </div>
    <template id="">

    </template>
  </body>

  <script  src="{{asset('js/slick-1.8.1/slick/slick.min.js')}}"></script>
  <script  src="{{asset('js/pagination.js')}}"></script>
  <script  src="{{asset('js/main.js')}}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.1/chart.min.js"></script>


  <script type="text/javascript">
  $(document).ready(function(){

    @if($errors->any())

        showErrorsModal()

    @endif

    createBubble()

    setInterval(function() {
      createBubble()
  }, 5 * 1000);

  $('.gallery').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  // fade: true,

  autoplaySpeed: 5000,
  arrows: false,
  dots: false,
  cssEase: 'linear',
  autoplay: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        cssEase: 'linear',
        autoplay: true,
        // dots: true
      }
    }],
    });


  });

  </script>
</html>
