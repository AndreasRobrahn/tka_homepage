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
    <meta name="content" content="Die Unikat ist das Unternehmen für Personaldienstleistungen und Vermittlung von Arbeitskräften in Dortmund und Umgebung">
    <meta name="keywords" content="Unikat, Personaldienstleistungen, Arbeitsvermittlung, Vermittlung von Arbeitskräften, Dortmund">
    <title>Unikat Personaldienstleistungen, Arbeitsvermittlung in Dortmund</title>
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
    @media only screen and (min-width: 601px){

      .hoverdropdown
      {
        animation: fadeInTop2 3s forwards;
        overflow: hidden;
      }
    }
    </style>
    <body>

      <div class="container-fluid p-0 bg-light">
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
            <a href="#"><img src="{{asset('images/unikat_logo.jpg')}}" alt="Teamlogo" style="width:110px;height:110px;object-fit:cover;object-position:50% 50%; border-radius: 50%;"></a>
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
                  <p class="hoveritem" >Unsere Leistungen</p>
                </div>
                <div class="dropdownright" style=" display: none;position: absolute; margin-left: 9em;">
                  <p class="hoveritem">Unsere Fachkrafte</p>
                  <p class="hoveritem">Stellen angebote</p>
                  <p class="hoveritem">Kompetenzen</p>
                </div>
              </div>

            </div>
            <hr>
            <div class="w-100 d-flex linkitem">
              <p class="hoveritem">Kompetenzen</p>
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

        <div class="row m-0 hiddenonmobile" style="height: 60vh; overflow: hidden;">
          <div class="imageoverlay p-0">
            <img src="{{asset('Naturbilder/DSC_0387.jpg')}}" alt="hintergrundbild" class="" style="height: 100%; width: 100%; object-fit: cover;">
            <div class="overlayelements">
              <div class="row m-0 textsizeu2 text-white text-shadow w-100 align-items-center">
                <div class="col-1 center_items linkitem">
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
                      <p class="hoveritem">Unsere Fachkrafte</p>
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
                <div class="col-2 center_items linkitem ml-1">
                  <p class="hoveritem">Kompetenzen</p>
                </div>
                <div class="col-2 center_items linkitem">
                  <p class="hoveritem">Zertifikate</p>
                </div>
                <div class="col-1 center_items linkitem ml-1">
                  <p class="hoveritem" onclick="toggleContactModal()">Kontakt</p>
                </div>
                <div class="col-1 center_items offset-2">
                  <a href="{{route('unikat')}}">
                    <img src="{{asset('images/unikat_logo.jpg')}}" alt="firmenlogo_unikat" class="" style="height: 150px; width: 150px;">
                  </a>
                </div>
              </div>
            </div>
            <div class="" style="position: absolute; top: 65%; left: 50%; transform: translate(-50%,-65%);">
              <h1 class="textsize3 text-white text-shadow">Unikat</h1>
              <p class="textsize1 text-white text-shadow">dein Motto</p>
            </div>
          </div>
        </div>

        <div class="row m-0 ukColor1 text-white textsizeu2 hiddenonmobile" style="height: 30vh;">
                <div class="col-2 center_items linkitem">
                  <p class="hoveritem">Über uns</p>
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
                      <p class="hoveritem">Kompetenzen</p>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-2 center_items linkitem">
                  <p class="hoveritem">Kompetenzen</p>

                </div>
                <div class="col-2 center_items linkitem">
                  <p class="hoveritem">Zertifikate</p>

                </div>
                <div class="col-1 center_items linkitem">
                  <p class="hoveritem" onclick="toggleContactModal()">Kontakt</p>

                </div>
                <div class="col-3 center_items linkitem">
                  <a href="{{route('unikat')}}">
                    <img src="{{asset('images/unikat_logo.jpg')}}" alt="firmenlogo_unikat" class="" style="height: 150px; width: 150px;">
                  </a>
                </div>
              </div>

        @yield('content')


      <div class="row ukColor1 text-white mt-2 justify-content-center">
        <div class="col-6 center_items p-0">
          <a href="#">Impressum</a>
        </div>
        <div class="col-6 center_items p-0">
          <a href="#">Datenschutz</a>
        </div>
      </div>
      </div>

  </body>
    <script  src="{{asset('js/main.js')}}"></script>
  </html>
