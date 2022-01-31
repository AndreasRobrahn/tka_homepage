<!DOCTYPE html>
<html lang="de" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="die TKA Software Systems UG hat sich die Programmierung von Webapplikationen und Firmenseiten auf die Fahnen geschrieben. Besonderen Wert legen wir auf eine gute Kommunikation um gemeinsame Projekte mit unseren Kunden erfolreich zu verwirklichen.">
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
    <title>TKA Software Systems, Webprogrammierung, Webdesign und Social Media</title>
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
    </style>

</head>
  <body class="">

    <div style="display:block;" id="top">

      <div class=""
        style="
        position: relative;
        height: 100%;
        width: 100%;
        ">

        <div id="bgimage"class="border-dark p-1" style="

        ">

          <!-- <div class="" id="sidemenuwrapper" >
            <div class="row  d-flex align-items-center justify-content-start m-0" >
                <div class="sidemenu text-white">
                  <i class="material-icons" onclick="showContactModal()">
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
                  <div class="sidemenu">
                      <i class="material-icons" onmouseover="">
                          dialpad
                        </i>
                    <div class="popupleft" >
                      <span>Melde dich direkt telefonisch</span>
                  </div>
                </div>

              </div>
                </a>
              <div class="row d-flex align-items-center justify-content-start m-0" >
                <div class="sidemenu">
                  <i class="material-icons" onclick="toTheId('aboutus')">
                    info
                  </i>
                  <div class="popupleft">
                    <span>Uber uns</span>
                  </div>
                </div>
            </div>
              <div class="row d-flex align-items-center justify-content-start m-0" >
                <div class="sidemenu">
                  <i class="material-icons" onclick="toTheId('possibilities')">
                    account_tree
                  </i>
                  <div class="popupleft">
                    <span>Beispiele</span>
                  </div>
                </div>
            </div>
              <div class="row d-flex align-items-center justify-content-start m-0" >
                <div class="sidemenu">
                  <i class="material-icons" onclick="toTheId('top')">
                    arrow_upward
                  </i>
                  <div class="popupleft">
                    <span>Zum Anfang</span>
                  </div>
                </div>
            </div>

            <a href="{{route('impressum')}}" class="p-0" style="text-decoration: none; color: white;">
              <div class="row d-flex align-items-center justify-content-start m-0" >
                <div class="sidemenu">
                  <span class="material-icons">
                    contact_support
                  </span>
                    <div class="popupleft">
                      <span>Zum Impressum</span>
                    </div>
                  </div>
              </div>
            </a>
          </div> -->
          <div class="" id="sidemenuwrapper">
            <div class="sidemenubutton">
              <i class="material-icons" onclick="openSidemenu()" id="openbutton">
                settings
              </i>
              <i class="material-icons" onclick="openSidemenu()" id="closebutton">
                cancel
              </i>
            </div>
          <div class="" id="sidemenu" >
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
              <div class="row d-flex align-items-center justify-content-start m-0" onclick="toTheId('aboutus')">
                <div class="sidemenuitem">
                  <i class="material-icons" >
                    info
                  </i>
                  <div class="popupleft">
                    <span>Über uns</span>
                  </div>
                </div>
            </div>
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
        <div class="d-flex p-2" style="position: relative; height: 100vh;">
          <img src="{{asset('/Naturbilder/_DSC0972.jpg')}}" alt="" id="bgimage1">
        </div>
        <div class="row bgimagebottomrow center_items w-100  disSMNone softerCchars font-test1">
          <div class="col-md-3 center_items">
            <a href="{{route('examples')}}"><p>Beliebte Services</p></a>

          </div>
          <div class="col-md-3 center_items">
            <a href="{{route('gallerys')}}"><p>Bildergallerien</p></a>
          </div>
          <div class="col-md-3 center_items">
            <a href="{{route('impressum')}}"><p>Impressum</p></a>
          </div>
        </div>
      </div>
      <div class="logocontainer" style="">
      <div class="h-100 w-100">
        <img src="{{asset('Firmenlogo/Firmenlogo.jpeg')}}" alt="" class="logoRes"style="
        border-radius: 25px ;
        /* position: absolute; */
        ">
      </div>
    </div>
  </div>
<div class="container-fluid m-0 w-100 mt-4 p-0 text-white" style="">
  <h1 class="text-center textsize3 contentbreak text-dark" id="aboutus">TKA Software Systems</h1>
  <div class="wrapper " style="position:relative; height: 150vh;">
    <div class="" style="position:absolute">
      <img src="{{asset('/Naturbilder/DSC_0171.jpg')}}" alt="Hintergrundbild" style="width: 100%; height: 150vh; object-fit: cover;">
    </div>
    <div class=" h-100 w-100 bg-test2" style="position:absolute;">
      <div class="description1 p-2" style="">
        <h2 class="text-left textsize2 contentbreak">Der Ansprechpartner für Webseiten</h2>
        <p class="textsize1 p-2">Die Geschichte der TKA Software Systems UG beginnt im Jahr 2021. Unser loses Netzwerk aus Fotografen, Webdesignern- und entwicklern hilft dir dein Projekt erfolgreich abzuschließen.</p>
      </div>
      <div class="description2 p-2" style="">
        <h2 class="text-left textsize2 contentbreak" style="overflow-wrap: break-word;">Vielfältige Einsatzmöglichkeiten</h2>
        <p class="textsize1 p-2">
          Brauchst du eine moderne zeitgemäße Webseite? Benötigt dein Unternehmen eine komplexe Webanwendung, inklusive Datenverarbeitung mit einer Datenbank? Oder willst du dein Social Media Profil aufhübschen? Alles kein Problem. </p>
      </div>
    </div>
  </div>
  <div class="wrapper bg-test2" style="position:relative; top: 25px;height: 125vh;">
    <div class="mt-4" >
      <h2 class="text-center textsize1 p-2" id="aboutus">Was können wir für dich tun?</h2>
        <p class="textsize1 m-2 font-test1">Einige Beispiele sind bereits im Bereich <a href="#possibilities" style="color:black; text-decoration:none; font-weight: bold;">Beliebte Services</a> aufgeführt. Deiner Fantasie sind keine Grenzen gesetzt.
    </div>
  <div class="w-100 contentbreak center_items">
    <div class="center_items w-100" style="">
      <div class="services" style="">
          <div class="randomform center_items" style="  top: 15%; left: 20%;   transform: rotate(-25deg);">
            <img src="{{asset('images/coding.jpg')}}" alt="Programmierung" class="image_generic">
            <div class="readabiltyEnhancerWhite">
              <p class="b4Pic">Programmierung</p>
            </div>
          </div>
          <div class="randomform center_items" style="  top: 70%; left: 20%;   transform: rotate(15deg);">
            <img src="{{asset('Firmenlogo/design.jpg')}}" alt="Bild Webdesign Skizze" class="image_generic">
            <div class="readabiltyEnhancerWhite">
              <p class="b4Pic">Design</p>
            </div>
          </div>
          <div class="randomform center_items" style="  top: 45%; left: 15%;   transform: rotate(35deg);">
            <img src="{{asset('Firmenlogo/projectrealisation.jpg')}}" alt="Programmierung" class="image_generic">
            <div class="readabiltyEnhancerWhite">
              <p class="b4Pic">Projektarbeit</p>
            </div>
          </div>
        <div class="randomform center_items" style=" top: 65%; left: 50%;   transform: rotate(-29deg);">
          <img src="{{asset('/Naturbilder/_DSC0972.jpg')}}" class="image_generic" alt="Ein Naturfoto" style="position:absolute;">
          <p>Fotos</p>
        </div>
        <div class="randomformvideo center_items" style="top: 10%; left: 45%;   transform: rotate(15deg);">
          <iframe  class="w-100 h-100" src="https://player.vimeo.com/video/554074757?title=0&portrait=0&byline=0&autoplay=1&loop=1&transparent=1" frameborder="0" allowfullscreen></iframe>
      </iframe>
        </div>
        <div class="randomform center_items" style="top: 36%; left: 55%;   transform: rotate(35deg);">
          <img src="{{asset('images/socmedpic.jpg')}}" class="image_generic" alt="Social Media">

          <div class="readabiltyEnhancerWhite">
            <p class="b4Pic">Likes Likes Likes</p>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>
  <div class="container-fluid p-2 t_stand" style="position: relative; margin-top: 7em;">
      <div class="row center_items">

      <div class="col-md-10">

        <div class="row text-center">
          <h2 class="textsize3">Deine Vorteile</h2>
        </div>
        <div class="row m-0 mt-4">
          <div class="col-md align-items-center">
            <h2 class="text-left textsize2 contentbreak"> bekannte Schwachstellen meiden </h2>
            <div class="contentbreak">
              <p>
              Softwareentwicklungsprozesse sind oft überplant, dauern lange und sind sehr teuer. Das Ergebnis ist oft nicht das was man sich vorstellt. </p>
              <p>
              Das Netzwerk der TKA vereinfacht die entscheidenden Entwicklungsprozesse. Der Fortschritt wird durchgehend visualisiert. Damit wird dir eine permanente Möglichkeit zur Anpassung gegeben.
              Alle Bestandteile einer hervorstechenden Webseite (Design, Programmierung, Einsatz von Medien) können bei Bedarf von Spezialisten implementiert werden.
              Durch eine fortlaufende Kommunikation verliert der Auftraggeber nie die Kontrolle über den Entwichklungsstand und vor allem über die Kosten.
              </p>
            </div>
          </div>
        </div>
        <hr>
      </div>
      </div>
      </div>
     <!-- <div class="container-fluid p-0 shadow-lg bg-light">
       <div class="row text-center text-dark">
         <span style="">Bildergallerien, featured by Frank Robrahn</span>
       </div>
       <div class="row m-0 justify-content-center align-items-center" id="paginatedGallery">
         <section>
            <div class="data-container"></div>
            <div id="pagination-demo1" class="mt-3" style="position: absolute; left: calc(50% - 140px); width: 50%;"></div>
        </section>

         <div class="col-sm-5 bg-dark m-1 d-flex justify-content-center align-items-center p-2"><img src="{{asset('/Naturbilder/_DSC0786.jpg')}}" alt="" class="galleryimg"> </div>
         <div class="col-sm-5 bg-dark m-1 d-flex justify-content-center align-items-center p-2"><img src="{{asset('/Naturbilder/_DSC0800.jpg')}}" alt="" class="galleryimg"> </div>
         <div class="col-sm-5 bg-dark m-1 d-flex justify-content-center align-items-center p-2"><img src="{{asset('/Naturbilder/_DSC0918.jpg')}}" alt="" class="galleryimg"> </div>
         <div class="col-sm-5 bg-dark m-1 d-flex justify-content-center align-items-center p-2"><img src="{{asset('/Naturbilder/_DSC1005.jpg')}}" alt="" class="galleryimg"> </div>
       </div>
     </div>
   </div> -->
   <div class="container-fluid p-0 shadow-lg bg-light" style="margin-top: 5em;">
     <div class="row justify-content-center align-items-center mb-2">
        <button type="button" class="btn-primary" name="button" onclick="showContactModal()" style="background-color: #34568B; color:white; font-weight: 500; border-radius: 25px; width: 350px;">Kontaktiere uns</button>

     </div>
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
      <div class="col-sm-3 m-1 d-flex justify-content-center align-items-center p-3" style="position:relative; background" id="pictureborder">
        <!-- <div class="borderrectangle" style=" left: 10px; top: 10px;"></div>
        <div class="borderrectangle" style="position: absolute; right: 10px; top: 10px;"></div>
        <div class="borderrectangle" style="position: absolute; left: 10px; bottom: 10px;"></div>
        <div class="borderrectangle" style="position: absolute; right: 10px; bottom: 10px;"></div> -->
        <img src="https://image.freepik.com/free-photo/vintage-golden-picture-frame-rust-cement-wall_34810-1330.jpg" alt="" style="position:absolute; height: 100%; width: 100%; object-fit:fill;">
        <div class="innerborder" style="position: absolute; height: 77%; width: 73%; border: 2px solid white; overflow: hidden;" id="innerBorder">
          <img src="" alt="" class="" style="height: 100%; width: 100%; object-fit: cover; " id="innerPicture">
        </div>
      </div>
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
  }, 3 * 1000);

  var tempArray = <?php echo json_encode($filenames); ?>;
  // console.log(tempArray)
  var container = $('#pagination-demo1');

  container.pagination({
    dataSource: tempArray,
    pageSize: 2,
    showPrevious: true,
    showNext: true,
    className: 'paginationjs-theme-blue',

    callback: function(data, pagination) {
        // template method of yourself
        // var html = template(data);

        let row  = $('<div class="row m-0 justify-content-center align-items-center"></div>');
        // let html  = '<div class="row m-0 justify-content-center align-items-center">';


        $.each(data, function (index, item) {
          // html += '<div class="col-sm-3 bg-dark m-1 d-flex justify-content-center align-items-center p-3" style="position:relative;"><div class="borderrectangle" style=" left: 10px; top: 10px;"></div><div class="borderrectangle" style="position: absolute; right: 10px; top: 10px;"></div><div class="borderrectangle" style="position: absolute; left: 10px; bottom: 10px;"></div><div class="borderrectangle" style="position: absolute; right: 10px; bottom: 10px;"></div><img src="Naturbilder/'+item+'.jpg" alt="" class="galleryimg"></div>';

          // let column = $('<div class="col-sm-3 bg-dark m-1 d-flex justify-content-center align-items-center p-3" style="position:relative;"></div>')
          //
          // column.load('/templates/images.html')

          let temp = document.getElementsByTagName("template")[0]
          pic = temp.content.querySelector("#innerPicture");
          pic.src = 'Naturbilder/'+item+'.jpg'

          // console.log(temp)

          row.append(temp.innerHTML)
        });

        // html += '</div>';

        container.prev().html(row);

        // console.log()
    }})

  });

  </script>
</html>
