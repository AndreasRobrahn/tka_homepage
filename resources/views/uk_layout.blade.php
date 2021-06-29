<!DOCTYPE html>
<html lang="de" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- <link href="bootstrap-social-gh-pages/bootstrap-social.css" rel="stylesheet"> -->
    <link rel="shortcut icon" type="image/ico" href="{{asset('images/favicon.ico')}}"/>

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
    <meta name="content" content="Die Unikat ist ein Unternehmen für Personaldienstleistungen und Vermittlung von Arbeitskräften, in den Bereichen der Lagerlogistik und Metallbranche, in Dortmund und Umgebung">
    <meta name="keywords" content="Unikat, Personaldienstleistungen, Arbeitsvermittlung, Vermittlung von Arbeitskräften, Metallbranche, Lagerlogistik, Dortmund">
    <meta name="author" content="John Gelotti">
    <title>Unikat, Datenschutzerklärung</title>
    <!-- Styles -->
    <style media="screen">

    body{
      font-family: 'Merienda One';
      font-size: 1.3em;
      width: 100%;
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

    .img-departments
    {
      height: 150px;
      border-radius: 15px;
      object-fit: cover;
    }
    .dropdownright
    {
      animation: fadeInTop 3s forwards;
      overflow: hidden;
    }
    .mobileHeading
    {
      display:none;
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
    @media only screen and (max-width: 601px){

      .mobileHeading
      {
        display:block ;
      }
    }

    @media only screen and (min-width: 601px){

      #stickynavmob{
        display:none;
        /* background: RGBA(221, 65, 36,0.2); */
      }

      .hoverdropdown
      {
        animation: fadeInTop2 3s forwards;
        overflow: hidden;
      }
    }
    </style>
    <body>

      <div class="container-fluid p-0 bg-light" style="width: 100%; overflow-x:hidden;">
        <div class="row m-0 ukColor1" id='stickynavmob'>
          <div class="col-6 d-flex justify-content-center align-items-center">
            <div class="navbar-wrapper">
              <input type="checkbox" id="hamburg" onclick="openSidemenu1()">
                  <label for="hamburg" class="hamburg">
                    <div class="h-100 w-100">
                      <span class="line"></span>
                      <span class="line"></span>
                      <span class="line"></span>
                    </div>
                  </label>
              </div>
          </div>
          <div class="col-6 p-1 d-flex justify-content-center align-items-center">
            <a href="{{route('unikat')}}"><img src="{{asset('images/unikat_logo_grey-removebg-preview.png')}}" alt="Teamlogo" class="unikat_logo" style=""></a>
          </div>
          <div class="col-12 " id="sidemenu1" style="">
            <hr>
            <div class="w-100 d-flex p-1 linkitem">
              <a href="{{route('unikataboutus')}}">
                <p class="hoveritem">Über uns</p>
              </a>
            </div>
            <hr>
            <div class="w-100 d-flex linkitem" >
              <div class="d-flex " >
                <div class="dropdownrightactivate">
                  <p class="hoveritem">Unsere Leistungen</p>
                </div>
                <div class="dropdownright" style=" display: none;position: absolute; margin-left: 9em;">
                  <p class="hoveritem">Unsere Fachkrafte</p>
                  <p class="hoveritem">Stellenangebote</p>
                  <a href="{{route('unikatSpeciality')}}"><p class="hoveritem">Kompetenzen</p></a>
                </div>
              </div>

            </div>
            <hr>
            <div class="w-100 d-flex linkitem">
              <p class="hoveritem">Zertifikate</p>
            </div>
            <hr>
            <div class="w-100 d-flex linkitem">
              <a href="#" onclick="toggleContactModal()">  <p class="hoveritem" >Kontakt</p></a>

            </div>
          </div>
        </div>

        <!-- <div class="row m-0 hiddenonmobile" style="height: 60vh; overflow: hidden;">
          <div class="imageoverlay p-0">
            <img src="{{asset('Naturbilder/DSC_0387.jpg')}}" alt="hintergrundbild" class="" style="height: 100%; width: 100%; object-fit: cover;">
            <div class="overlayelements">
              <div class="row m-0 textsizeu2 text-white text-shadow w-100 align-items-center">
                <div class="col-2 center_items linkitem">
                  <a href="{{route('unikataboutus')}}">
                    <p class="hoveritem">Über uns</p>
                  </a>
                </div>
                <div class="col-2 center_items linkitem ml-1" style="position: relative;">
                  <div class="" style="display: block; position: relative;">
                  <div class="dropdownactivate" id="dropdownactivate">
                    <p class="hoveritem">Unsere Leistungen</p>
                  </div>
                  <div class="hoverdropdown" id="" s>
                    <div class="dropdownitem linkitem">
                      <p class="hoveritem">Unsere Fachkräfte</p>
                    </div>
                    <hr>
                    <div class="dropdownitem linkitem">
                      <p class="hoveritem">Stellenangebote</p>
                    </div>
                    <hr>
                    <div class="dropdownitem linkitem">
                      <p class="hoveritem">Kompetenzen</p>
                    </div>
                    </div>
                  </div>
                </div>

                <div class="col-2 center_items linkitem">
                  <p class="hoveritem">Zertifikate</p>
                </div>
                <div class="col-1 center_items linkitem ml-1">
                  <p class="hoveritem" onclick="toggleContactModal()">Kontakt</p>
                </div>
                <div class="col-1 center_items offset-1">
                  <a href="{{route('unikat')}}">
                    <img src="{{asset('images/unikat_logo.jpg')}}" alt="firmenlogo_unikat" class="" style="height: 150px; width: 150px;">
                  </a>
                </div>
              </div>
            </div>
            <div class="motto" style="">
              <h1 class="textsize3 text-white text-shadow">Unikat</h1>
              <p class="textsize1 text-white text-shadow">dein Motto</p>
            </div>
          </div>
        </div> -->

        <div class="row m-0 ukColor1 text-white textsizeu2 hiddenonmobile align-items-center" style="min-height: 20vh;max-height: 45vh;">
                <div class="col-2 center_items linkitem">
                  <a href="{{route('unikataboutus')}}">
                    <p class="hoveritem">Über uns</p>
                  </a>
                </div>
                <div class="col-2 center_items linkitem" style="position: relative;">
                  <div class="" style="display: block; position: relative;">
                  <div class="dropdownactivate" id="dropdownactivate">
                    <p class="hoveritem">Unsere Leistungen</p>
                  </div>
                  <div class="hoverdropdown ukColor1" id="">
                    <div class="dropdownitem linkitem">
                      <p class="hoveritem">Unsere Fachkrafte</p>
                    </div>
                    <hr>
                    <div class="dropdownitem linkitem">
                      <p class="hoveritem">Stellenangebote</p>
                    </div>
                    <hr>

                    <div class="dropdownitem linkitem">
                      <a href="{{route('unikatSpeciality')}}"><p class="hoveritem">Kompetenzen</p></a>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-2 center_items linkitem">
                  <p class="hoveritem">Zertifikate</p>

                </div>
                <div class="col-1 center_items linkitem">
                  <p class="hoveritem" onclick="toggleContactModal()">Kontakt</p>

                </div>
                <div class="col-3 offset-2 center_items linkitem">
                  <a href="{{route('unikat')}}">
                    <img src="{{asset('images/unikat_logo_grey-removebg-preview.png')}}" alt="firmenlogo_unikat" class="unikat_logo">
                  </a>
                </div>
              </div>
      <div class="container-fluid w-100 m-0 p-0" style="min-height: 72vh;">
        @yield('content')
      </div>

      <div class="row m-0 ukColor1 text-white mt-2 justify-content-center">
        <div class="col-6 center_items p-0">
          <a href="#">Impressum</a>
        </div>
        <div class="col-6 center_items p-0">
          <a href="{{route('datasecurity')}}">Datenschutz</a>
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
                <button type="submit" name="button" class="btn btn-success btn-block btn-outline">Absenden</button>
              </div>
            </form>
          </div>
          </div>
        </div>
      </div>

@if(!Session::get('cookies'))

<div class="cookieDisclaimer ukColor1" id="cookiedisclaimer" style="position:fixed; bottom: 10px; height: 75px; width:100%; z-index:99; text-align:center; color: white; ">
  Diese Seite verwendet Cookies um das Nutzererlebnis zu steigern. <br>
  <button type="button" name="button" class="btn btn-outline btn-dark" onclick="setCookieSession()">Akzeptieren</button>
</div>
@endif

  </body>
    <script  src="{{asset('js/main.js')}}"></script>
    <script  src="{{asset('js/app.js')}}"></script>
  </html>
