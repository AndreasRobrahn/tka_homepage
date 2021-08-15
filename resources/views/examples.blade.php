<!DOCTYPE html>
<html lang="de" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Bilder sind ein essentieller Bestandteil professioneller Webseiten. Die einfache Darstellung reicht heutzutage nicht mehr oder sollte nicht Ihr Anspruch sein!">
  <meta name="keywords" content="Webdesign, Webseite, Webapplikation, Bilder">

  <meta name="csrf-token" content="{{csrf_token()}}">
  <link href="{{asset('bootstrap-5.0.1-dist/css/bootstrap.min.css')}}" rel="stylesheet">

  <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="{{asset('css/main.css')}}"/>
  <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="{{asset('js/slick-1.8.1/slick/slick.css')}}"/>

  <script  src="{{asset('js/jquery.js')}}"></script>
  <script  src="{{asset('bootstrap-5.0.1-dist/js/bootstrap.min.js')}}"></script>
</head>
<style>
</style>
<body>
<div class="container-fluid p-0 shadow-lg bg-light " style="position: relative; margin-top: 50px; height: 100vh;">
  <div class="row m-0">
    <div class="col-1 p-1 d-flex align-items-center justify-content-center prevArrow" >
      <div class="triangle-left">
      </div>
      <i class='fas fa-angle-left' style=""></i>
    </div>
  <div class="col-10">
    <div class="row m-0">
      <h2 class="text-center w-100 textsize3" id="possibilities">Beliebte Services</h2>
    </div>
    <div class="row m-0 gallery" style="height: 70vh;">
      <div class="csh2">
        <div class="row m-0">
          <div class="d-flex" style="position: relative; height: 10vh;">
            <img src="{{asset('/Naturbilder/_DSC0972.jpg')}}" alt="wiese" class="img-fluid" style="height: 100%; width: 100%; object-fit: cover;">
            <div class="" style="position:absolute; right: 25px; top: 10px;">
              <img src="{{asset('Firmenlogo/Firmenlogo.jpeg')}}" alt="" style="" class="logoRes">
            </div>
          </div>
        </div>
        <div class="row m-2" style="background-color: #34568B; color: white;">
          <div class="col d-flex justify-content-center align-items-center text-white bwr hoverclass1">
            Nachrichtenbox <span class=" p-1 badge bg-danger">2</span>
          </div>
          <div class="col d-flex justify-content-center align-items-center text-white bwr hoverclass1">
            Suche
          </div>
          <div class="col d-flex justify-content-center align-items-center text-white bwr hoverclass1">
            Einstellungen
          </div>
          <div class="col d-flex justify-content-center align-items-center text-white hoverclass1">
            Meine Favoriten
          </div>
        </div>

          <div class="row m-2 justify-content-center align-items-start" style="background-color: #34568B; color: white;height: 100%; overflow: scroll;">
            <div class="col-sm-3 p-0">
              <div class="row ">
                  <h2> Blogeinträge</h2>
              </div>
              <div class="row m-0">
                <div class="d-block">
                  <div class="row hoverclass1">
                    <h5>Es war ein Bild</h5>
                    <p><span class="d-inline-block text-truncate" style="max-width: 150px;">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet dui enim. Donec placerat dignissim eros, id varius magna posuere nec. Vestibulum ut urna fringilla, posuere sem ac, vehicula elit. Quisque lacus mi, molestie non auctor sed, commodo vel nisi. Integer turpis nulla, sollicitudin non ex at, pharetra aliquet eros. Mauris viverra mi dictum, molestie quam consectetur, hendrerit magna. Phasellus tincidunt ligula erat, non vehicula leo lobortis ac. Quisque sit amet nulla non mi ultrices euismod. Vivamus sit amet dignissim magna. Nulla ac risus leo. Integer cursus, enim vitae elementum volutpat, mi lectus venenatis ante, in euismod nulla felis eget massa. Nulla dui diam, dictum non iaculis ut, semper eu massa. Maecenas sit amet dui lacus. In dignissim sed velit non facilisis. Integer egestas enim id ipsum finibus, sit amet bibendum nisl euismod. Nulla vel arcu nec lectus malesuada aliquet.
                    </span></p>
                    <small>19.03.2021</small>
                  </div>
                  <hr>
                  <div class="row hoverclass1">
                    <h5>Ich bin schockiert...</h5>
                    <p><span class="d-inline-block text-truncate" style="max-width: 100%;">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet dui enim. Donec placerat dignissim eros, id varius magna posuere nec. Vestibulum ut urna fringilla, posuere sem ac, vehicula elit. Quisque lacus mi, molestie non auctor sed, commodo vel nisi. Integer turpis nulla, sollicitudin non ex at, pharetra aliquet eros. Mauris viverra mi dictum, molestie quam consectetur, hendrerit magna. Phasellus tincidunt ligula erat, non vehicula leo lobortis ac. Quisque sit amet nulla non mi ultrices euismod. Vivamus sit amet dignissim magna. Nulla ac risus leo. Integer cursus, enim vitae elementum volutpat, mi lectus venenatis ante, in euismod nulla felis eget massa. Nulla dui diam, dictum non iaculis ut, semper eu massa. Maecenas sit amet dui lacus. In dignissim sed velit non facilisis. Integer egestas enim id ipsum finibus, sit amet bibendum nisl euismod. Nulla vel arcu nec lectus malesuada aliquet.
                    </span></p>
                    <small>12.05.2016</small>

                    </div>
                  <hr>
                  <div class="row hoverclass1">
                    <h5>mal was lustiges</h5>
                    <p><span class="d-inline-block text-truncate" style="max-width: 100%;">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet dui enim. Donec placerat dignissim eros, id varius magna posuere nec. Vestibulum ut urna fringilla, posuere sem ac, vehicula elit. Quisque lacus mi, molestie non auctor sed, commodo vel nisi. Integer turpis nulla, sollicitudin non ex at, pharetra aliquet eros. Mauris viverra mi dictum, molestie quam consectetur, hendrerit magna. Phasellus tincidunt ligula erat, non vehicula leo lobortis ac. Quisque sit amet nulla non mi ultrices euismod. Vivamus sit amet dignissim magna. Nulla ac risus leo. Integer cursus, enim vitae elementum volutpat, mi lectus venenatis ante, in euismod nulla felis eget massa. Nulla dui diam, dictum non iaculis ut, semper eu massa. Maecenas sit amet dui lacus. In dignissim sed velit non facilisis. Integer egestas enim id ipsum finibus, sit amet bibendum nisl euismod. Nulla vel arcu nec lectus malesuada aliquet.
                    </span></p>
                    <small>19.09.2018</small>
                  </div>
              </div>
            </div>
          </div>

            <div class="col-sm-7 p-0">
              <div class="row m-0 p-0">
                <h2> Inhalt</h2>
              <div class="d-block">
                <div class="row m-0">
                  Titel
                </div>
                <div class="row m-0">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet dui enim. Donec placerat dignissim eros, id varius magna posuere nec. Vestibulum ut urna fringilla, posuere sem ac, vehicula elit. Quisque lacus mi, molestie non auctor sed, commodo vel nisi. Integer turpis nulla, sollicitudin non ex at, pharetra aliquet eros. Mauris viverra mi dictum, molestie quam consectetur, hendrerit magna. Phasellus tincidunt ligula erat, non vehicula leo lobortis ac. Quisque sit amet nulla non mi ultrices euismod. Vivamus sit amet dignissim magna. Nulla ac risus leo. Integer cursus, enim vitae elementum volutpat, mi lectus venenatis ante, in euismod nulla felis eget massa. Nulla dui diam, dictum non iaculis ut, semper eu massa. Maecenas sit amet dui lacus. In dignissim sed velit non facilisis. Integer egestas enim id ipsum finibus, sit amet bibendum nisl euismod. Nulla vel arcu nec lectus malesuada aliquet.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 csh2" style="overflow: scroll;">
        <div class="row p-0">
          <div class="col-sm-2 p-0" style="background: rgb(241,254,241);background: linear-gradient(180deg, rgba(241,254,241,1) 30%, rgba(174,255,174,1) 75%, rgba(166,250,166,1) 90%);">
            <div class="row m-0 justify-content-center align-items-center">
              <img src="{{asset('Firmenlogo/Firmenlogo.jpeg')}}" alt="" class="img-fluid p-2" style="max-height: 250px; width: 150px;">
            </div>
            <div style="display:block; font-size: 1.5em; margin: 1em;">
              <div class="list-collapse" style="">
                Reporte
              </div>
              <div class="list-collapse mt-2">
                Analysen
              </div>
              <div class="list-collapse mt-2">
                Trends
              </div>
              <div class="list-collapse mt-2">
                KPI's
              </div>
            </div>
          </div>
          <div class="col-sm-10"
          style="
          background: rgb(52,86,139);
          background: linear-gradient(180deg, rgba(52,86,139,1) 19%, rgba(61,102,166,1) 77%, rgba(100,143,210,1) 95%);
          color: white;
          height: 100%;
          ">
            <div class="row">
              <div class="d-flex justify-content-end align-items-center" >
                <div class="">
                  <label for="search">Suche:</label>
                  <input type="text" name="form-control" value="" id="search" style="border-radius: 15px; height: 25px; padding: 15px; width: 150px;background-color: grey; margin-left: 15px;">
                </div>
                <div class="p-2">
                  <span class="material-icons">
                  settings
                  </span>
                </div>
              </div>
            </div>
            <div class="row h-100 justify-content-center" >
              <div class="d-flex justify-content-center align-items-center " >
                <h2>übersichtliche Analysetools, automatisierte Prozesse</h2>

              </div>
              <div class="text-dark  mb-2" style="height: 50%;">
                <div class="row m-0 justify-content-center">
                  <div class="col-sm-3 m-1 bg-light p-2">
                    <h5>Max Mustermann</h5>
                    <canvas id="testchart1" width="200" height="200"></canvas>
                  </div>
                  <div class="col-sm-3 m-1 bg-light p-2">
                    <h5>Bernd Mustermann</h5>
                    <canvas id="testchart3" width="200" height="200"></canvas>
                  </div>
                  <div class="col-sm-3 m-1 bg-light p-2">
                    <h5>Maria Mustermann</h5>
                    <canvas id="testchart2" width="200" height="200"></canvas>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 csh2">
          <nav>
            <div class="row m-0 justify-content-center align-items-center text-center" style="
            background: rgb(62,3,12);
            background: radial-gradient(circle, rgba(62,3,12,1) 62%, rgba(134,9,12,1) 88%, rgba(162,7,33,1) 98%);
            color: rgb(255,235,205);

            ">
              <div class="col">
                <input type="checkbox" id="hamburg" onclick="showSidebar()">
                <label for="hamburg" class="hamburg">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </label>
              </div>
              <div class="col ">
                Suche
              </div>
              <div class="col">
                Nachrichten
              </div>
              <div class="col p-2">
                <img src="{{asset('Firmenlogo/Firmenlogo.jpeg')}}" alt="" class="img-fluid " style="border: 2px solid white;">
              </div>
              <div class="col">
                Favoriten
              </div>
              <div class="col">
                Profilbesucher
              </div>
              <div class="col d-flex justify-content-end">
                <input type="checkbox" id="hamburg" onclick="showSidebar()">
                <label for="hamburg" class="hamburg">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </label>
              </div>
            </div>
          </nav>
            <div class="d-flex" style="position: absolute;">
              <div id="mySidebar" class="sidebartest">
                <a href="">Startseite</a>
                <a href="">Mein Profil</a>
                <a href="">Einstellungen</a>
                <a href="">Person 3</a>
                <a href="">Person 4</a>
                <a href="">Person 5</a>
                <a href="">Person 6</a>
            </div>
          </div>

          <div class="container-fluid h-100"
          style="
          background-image:url('https://cdn.prod.www.spiegel.de/images/3f57c70a-0001-0004-0000-000000355905_w996_r1.77_fpx46.48_fpy50.jpg');
          background-size: 100% 100%;
          background-position: center top;
          background-attachment: fixed;
          background-repeat: no-repeat;">

          <div class="row m-0 mt-2 text-dark text-center">
            <h2>ästhetische Profildesigns</h2>
          </div>
          <hr>
            <div class="row justify-content-center mt-3">
            @for($i=0; $i <= 8; $i++ )
                  <div class="col-designed m-3" style="">
                    @if($i % 2)
                    <div class="d-flex" style="background-image: url('{{asset('Naturbilder/DSC_9797.jpg')}}');background-size: contain;position:absolute; height: 100%; width: 100%; font-size: 3em; display: flex; align-items: center; justify-content: center;">
                    </div>
                    @else
                    <div class="d-flex" style="background-image: url('{{asset('Naturbilder/_DSC0691.jpg')}}');background-size: contain;position:absolute; height: 100%; width: 100%; font-size: 3em; display: flex; align-items: center; justify-content: center;">
                    </div>
                    @endif
                    <div class="flip-card">
                      <div class="flip-card-inner" style="">
                        <div class="flip-card-front">
                          <div class="row h-100 m-0 align-items-center">
                            <div class="col-5">
                              <img src="http://www.stylez4anacondas.org/images/WhatsApp%20Image%202020-05-08%20at%2023.31.36.jpeg" class="img-fluid shadow-lg" alt="" style="border: 5px solid white;">
                            </div>
                            <div class="col-7">
                              <span>Andreas Robrahn</span>
                              <span>Flensburg</span><br>
                              <span><small>scroll auf die Karte für mehr Infos</small></span>
                            </div>
                          </div>
                        </div>
                        <div class="flip-card-back">
                          <div class="row m-0">
                            <p> Motto: Carpediem</p>
                          </div>
                          <div class="row m-0" style="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endfor
                </div>
              </div>
            </div>
          </div>
        </div>
      <div class="col-1  d-flex align-items-center justify-content-center nextArrow">
        <div class="triangle-right hoverclass1">

        </div>
        <i class='fas fa-angle-right'style=""></i>
      </div>
    </div>
  </div>
<script  src="{{asset('js/slick-1.8.1/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.1/chart.min.js"></script>

<script type="text/javascript">
$('.gallery').slick({
slidesToShow: 1,
slidesToScroll: 1,
autoplay: false,
autoplaySpeed: 2000,
arrows: true,
prevArrow: $('.prevArrow')[0],
nextArrow: $('.nextArrow')[0],
responsive: [
  {
    breakpoint: 800,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,

    }
  }]
  });

  var ctx = document.getElementById('testchart1').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni'],
          datasets: [{
              label: 'Verkäufe',
              data: [17, 26, 9, 8, 15, 35],
              backgroundColor: 'rgba(255, 99, 132, 0.2)',
              borderColor:     'rgba(255, 159, 64, 1)',
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
      });
  var ctx1 = document.getElementById('testchart2').getContext('2d');
  var myChart = new Chart(ctx1, {
      type: 'line',
      data: {
          labels: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni'],
          datasets: [{
              label: 'Verkäufe',
              data: [7, 14, 15, 12, 11, 17],
              backgroundColor: 'rgba(255, 99, 132, 0.2)',
              borderColor:     'rgba(255, 159, 64, 1)',
              borderWidth: 1
          },
          {
              label: 'durschn.',
              data: [12, 12, 12, 12, 12, 12],
              backgroundColor: 'rgba(99, 99, 243, 0.2)',
              borderColor:     'rgba(22, 17, 243, 1)',
              borderWidth: 1
          }],
      },
      options: {
          tension: 0.4,
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
      });
  var ctx2 = document.getElementById('testchart3').getContext('2d');
  var myChart = new Chart(ctx2, {
      type: 'pie',
      data: {
          labels: ['Beschwerden', 'Rechnungsfragen', 'Versicherung', 'sonstiges'],
          datasets: [{
              label: 'Anliegen',
              data: [7, 14, 15, 12],
            backgroundColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(50, 50, 250, 1)',
              'rgba(50, 250, 50, 1)',
              'rgba(125, 125, 125,1)',
            ],
              borderColor:     'rgba(0, 0, 0, 1)',
              borderWidth: 1
            }],
      }
      });
</script>
</body>
