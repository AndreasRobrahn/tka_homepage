<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- <link href="bootstrap-social-gh-pages/bootstrap-social.css" rel="stylesheet"> -->
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
    <title>Team Yak Landingpage</title>
    <!-- Styles -->
<style media="screen">
body{
  font-family: 'Merienda One';
  font-size: 1.3em;
  overflow:initial !important;
}
.button
{
  background-color: white;
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
}
/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {

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
<body>
  <div class="" style="position: fixed; z-index: 200; top: 40%; margin-left: 0px; color:white;">
    <div class="" id="sidemenuwrapper" >
      <div class="row  d-flex align-items-center justify-content-start m-0" >
          <div class="sidemenu text-white">
            <i class="material-icons" onclick="toTheId('contact')">
              email
            </i>
            <div class="popupleft ml-2">
              <span>Schreibe uns</span>
            </div>
          </div>
        </a>
        </div>
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
            <i class="material-icons" onclick="toTheId('aboutus')">
              account_tree
            </i>
            <div class="popupleft">
              <span>Beispiele</span>
            </div>
          </div>
      </div>
        <div class="row d-flex align-items-center justify-content-start m-0" >
          <div class="sidemenu">
            <i class="material-icons" onclick="toTheId('current')">
              arrow_upward
            </i>
            <div class="popupleft">
              <span>Zum Anfang</span>
            </div>
          </div>
      </div>
    </div>

  </div>
<div class="container-fluid bg-light">

  <div class="row sticky-top mainColor" id='stickynavmob'>
    <div class="col d-flex justify-content-center align-items-center">
      <div class="navbar-wrapper">
        <input type="checkbox" id="hamburg" onclick="showSidebar()">
          <label for="hamburg" class="hamburg">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
          </label>
        </div>
    </div>

    <div class="col p-1 d-flex justify-content-end align-items-center">
      <a href="#"><img src="https://static.wixstatic.com/media/f48c3a_bd5d30ff99ab4ab29a8621d05c2e190c~mv2.jpg/v1/fill/w_110,h_110,al_c,q_80,usm_0.66_1.00_0.01/f48c3a_bd5d30ff99ab4ab29a8621d05c2e190c~mv2.webp" alt="Teamlogo" style="width:110px;height:110px;object-fit:cover;object-position:50% 50%; border-radius: 50%;"></a>
    </div>
  </div>
  <div class="row sticky-top mainColor" id='stickynav'>
    <div class="col d-flex justify-content-center align-items-center">
      <a href="#aboutus "> <span class="headline1">Über uns</span></a>

    </div>
    <div class="col d-flex justify-content-center align-items-center headline1">
      <a href="#training">Training</a>

    </div>
    <div class="col d-flex justify-content-center align-items-center headline1">
      <img src="https://static.wixstatic.com/media/f48c3a_bd5d30ff99ab4ab29a8621d05c2e190c~mv2.jpg/v1/fill/w_110,h_110,al_c,q_80,usm_0.66_1.00_0.01/f48c3a_bd5d30ff99ab4ab29a8621d05c2e190c~mv2.webp" alt="" style="width:110px;height:110px;object-fit:cover;object-position:50% 50%; border-radius: 50%;">
    </div>
    <div class="col d-flex justify-content-center align-items-center headline">
      <a href="#sport ">Sport</a>
    </div>
    <div class="col d-flex justify-content-center align-items-center headline">
      <a href="#contact ">Kontakt </a>
    </div>
  </div>
  <div class="row justify-content-center mt-3">
    <div class="col-sm-11 col-md-8 p-0 " id="current">
      <div class="row">
        <p class="text-center headline">🥋🤼 Team Yak 🤼🥋 <br> Brasilian Jiu Jitsu in Flensburg !</p>
      </div>
      <div class="row justify-content-center mt-2 mainColor" >
          <div class="col w-100 m-2">
              <marquee behavior="scroll" direction="left" style="width: 100%; margin-top: 25px;">
                <div class="" style="font-size: 1.5em; font-weight: 750; color: white;">
                  <p>Breaking News</p>
                </div>
               </marquee>
            </div>
          </div>
            <div class="row mt-2">
              <p class="" style="">

                Seit dem 31.05.21 ist das Training in Gruppen wieder möglich. Bis auf weiteres setzten wir ein negatives Coronatestergbnis, das nicht älter als 48 Stunden ist, zur Teilnahme am Training voraus.
                Wir bitten um euer Verständnis!
              </p>
            </div>
            <div class="row mt-2 mainColor" >
              <div class="w-100 m-2 ">
                <marquee behavior="scroll" direction="right" style="width: 100%; margin-top: 25px;">
                  <div class="" style="font-size: 1.5em; font-weight: 750; color: white;">
                    <p>Breaking News</p>
                  </div>
                 </marquee>
              </div>
            </div>
    </div>
  </div>
  <div class="row secondaryColor text-white justify-content-center mt-3">
    <div class="col-sm-11 col-md-8 p-0 " id="aboutus">
      <div class="row">
        <h1><p class="text-center">Das ist Team Yak </p></h1>
      </div>
      <div class="row">
        <p class="" style="margin-top: 55px;">
          Wir sind das erste BJJ Team Flensburgs. Gegründet wurde das Team Yak 2015 vom Braungurt Eitan Bronschtein. Derzeit Unterrichtet er BJJ im Ninja Sportclub e.V. in Hamburg. Das Training in Flensburg wird von den Brüdern Andreas & Kristoffer Madsen geleitet. Beide tragen einen lila Gurt der ihnen von Eitan Bronschtain 2020 und 2019 übergeben wurde und bringen zusammen mehr als 10 Jahre Erfahrung auf die Matte. Das Team steht für ein offenes Klima, das jede an dem Sport Interessierte Person herzlich aufnimmt und ein Teil des Teams werden lässt.
        </p>
      </div>

      <div class="row mt-3">
          <p class="headline1 text-center">Die Coaches</p>
      </div>

      <div class="row">

        <div class="col-sm m-1">
          <p class="headline">Christoffer Madsen</p>
          <p>“Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.”</p>

        </div>
        <div class="col-sm m-1">
          <img src="https://thumbs.dreamstime.com/z/default-placeholder-fitness-trainer-t-shirt-default-placeholder-fitness-trainer-t-shirt-half-length-portrait-photo-113622062.jpg" class="img-fluid coachimg" alt="toffa">
        </div>
      </div>
      <hr>
      <div class="row mt-3">
        <div class="col-sm">
          <img src="https://thumbs.dreamstime.com/z/default-placeholder-fitness-trainer-t-shirt-default-placeholder-fitness-trainer-t-shirt-half-length-portrait-photo-113622062.jpg" class="img-fluid coachimg" alt="andreas2.0">
        </div>
        <div class="col-sm">
          <p class="headline1">Andreas Madsen</p>
          <p>“Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.”</p>
        </div>
      </div>
      <div class="row">
          <p class="headline1 text-center">Das Team</p>
      </div>
      <div class="row m-1">
        <div class="col d-flex justify-content-center">
          <img src="https://www.seekpng.com/png/full/991-9910177_team-placeholder-team.png" class="img-fluid bg-white"    alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="row m-1 bg-white justify-content-center mt-3">
    <div class="col-sm-12 col-md-8 p-0 ">
      <p><h3 class="text-center headline1">Unsere Trainingszeiten</h3> </p>
      <hr>
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
</div>
<div class="row m-1 mt-4 justify-content-center m-0 w-100" >
    <div class="d-flex" style="position:relative; height: 1000px; width: 100vw" id='img_training' >
     <!-- <img src="https://static.wixstatic.com/media/f48c3a_a73aa71819424fc182341062016b3e95~mv2.jpg/v1/fill/w_670,h_497,al_c,q_80/f48c3a_a73aa71819424fc182341062016b3e95~mv2.webp" alt="hintergrund.jpg" style="width: 1426px; height: 1058px; object-fit: cover; object-position: 50% 50%;"> -->
      <div class="container" style="position: absolute; top: 25%; left: 50%; transform: translate(-50%,-50%);">
        <div class="row justify-content-center">
          <div class="col-sm-5 m-2 p-2 d-flex justify-content-center bg-white shadow-lg" style="border-radius: 50px;">
            <div class="">
              <h4 class="text-center">Personal Training</h4>
              <p>Nimm für dein privates Training einfach Kontakt zu uns auf</p>
              <p class="text-center"><button type="button" name="button" class="button">Buchen!</button> </p>
            </div>
          </div>
          <div class="col-sm-5 m-2 p-2 d-flex justify-content-center shadow-lg" style="border-radius: 50px;background-color: #fdf5e6 !important; color:black;">
            <div class="">
              <h4 class="text-center">Group Training</h4>
              <p>Die Teilnahme am Gruppentraining setzt ein <b>negatives Coronatestergebis</b> voraus, dass nicht älter als 48 Stunden ist.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center secondaryColor text-white mt-3">
    <div class="col-sm-11 col-md-8" id="sport">
      <p class="headline">Brazilian Jiu Jitsu / Grappling</p>
      <p>Brasilianisches Jiu-Jitsu (BJJ) ist eine weiter entwickelte Form des japanischen Jujitsu. Das japanische Jujitsu, auch Nihon Jitsu genannt, konzentriert sich in seiner Anwendung hauptsächlich auf Selbstverteidigungsmechanismen im Stand. BJJ greift den Kampf im Stand mit auf und erweitert ihn mit Techniken am Boden. Der Bodenkampf ist das charakteristische Merkmal dieses Sports. Ein weiteres Unterscheidungsmerkmal dieser Kampfsportarten besteht in der Form des Unterrichts. BJJ vermittelt die Anwendung verschiedenster Techniken, in einen strategischen Kontext, der den Trainierenden offenlegt wie man sich gegen z.B. größere Kontrahenten durchsetzt. Die Simulation einer kämpferischen Auseinandersetzung wird wie in anderen Kampfsportarten als Sparring oder typischer für BJJ als "Rollen" bezeichnet und stellt einen festen Bestandteil des Trainings dar. </p>
    </div>

  </div>

  <div class="row justify-content-center text-white">
      <div class="col-3 m-2 p-2 ">
        <img src="https://static.wixstatic.com/media/f48c3a_02bd9c31fee746fc829bb492f4ddabc3~mv2.jpg/v1/fill/w_692,h_519,al_c,q_80,usm_0.66_1.00_0.01/72754548_2191665604459662_39557093110526.webp" alt=""  class="img-fluid">
      </div>
      <div class="col-3 m-2 p-2 ">
        <img src="https://static.wixstatic.com/media/f48c3a_02bd9c31fee746fc829bb492f4ddabc3~mv2.jpg/v1/fill/w_692,h_519,al_c,q_80,usm_0.66_1.00_0.01/72754548_2191665604459662_39557093110526.webp" alt="" class="img-fluid">
      </div>
      <div class="col-3 m-2 p-2 ">
        <img src="https://static.wixstatic.com/media/f48c3a_02bd9c31fee746fc829bb492f4ddabc3~mv2.jpg/v1/fill/w_692,h_519,al_c,q_80,usm_0.66_1.00_0.01/72754548_2191665604459662_39557093110526.webp" alt="" class="img-fluid">
      </div>
  </div>
  <div class="container-fluid m-0 p-0 mt-3 secondaryColor responsiveCon">
  <div class="row justify-content-center text-white">
      <div class="col p-2">
         <h4 id='contact' class="text-center headline">Kontakt</h4>
      </div>
  </div>
  <div class="row justify-content-center text-white">
      <div class="col-sm-12 col-md-6 p-2 d-flex justify-content-center align-items-center">
        <div class="w-100" style="display:block;">
          <label for="name">Name</label>
          <input type="text" name="" value="" class="customdg-input" id='name' placeholder='Max Mustermann'>
        </div>
      </div>
  </div>
  <div class="row justify-content-center text-white">
      <div class="col-sm-12 col-md-6 p-2 d-flex justify-content-center align-items-center">
        <div class="w-100" style="display:block;">
          <label for="name">Email</label>
          <input type="email" name="email" value="" class="customdg-input" id='email' placeholder='max.mustermann@web.de' required>
        </div>
      </div>
  </div>
  <div class="row justify-content-center text-white">
      <div class="col-sm-12 col-md-6 p-2 d-flex justify-content-center align-items-center">
        <div class="w-100" style="display:block;">
          <label for="subject">Betreff</label>
          <input type="text" name="" value="" class="customdg-input" id='subject' placeholder='Training am...'>
        </div>
      </div>
  </div>
  <div class="row justify-content-center text-white">
      <div class="col-sm-12 col-md-6 p-2 d-flex justify-content-center align-items-center">
        <div class="w-100" style="display:block;">
            <label for="message">Deine Nachricht</label>
             <textarea class="customdg-input" name="message" id='message'placeholer="Nachricht.."> </textarea>
        </div>
      </div>
  </div>
  <div class="row justify-content-center text-white">
    <button class="button" type="button" name="button">Senden</button>
  </div>
  </div>

  <div class="row mt-3" style="height: 400px;">
    <div class="mapouter">
      <div class="gmap_canvas">
        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=24939%20Flensburg,%20Husumer%20Str.%208&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="height: 100%; width: 100%;"></iframe>
        <br>
        </style>
        <a href="https://www.embedgooglemap.net">
          google map website
        </a>
      </div>
    </div>
  </div>


    <div class="container-fluid p-0  text-white">
      <div class="row border-bottom justify-content-start align-items-center mainColor" >
        <h4 class="headline1">Kontakt</h4>
      </div>
      <div class="row justify-content-center mainColor">
        <p>Adresse: Husumer Str. 8, 24941 Flensburg</p>
      </div>
      <div class="row justify-content-center mainColor">
        <p>Email: info@teamyak.de</p>
      </div>
      <div class="row justify-content-center mainColor">
        <p>Social Media: <a class="fa fa-facebook" href="#"></a>  <a class="fa fa-instagram" href="#"></a></p>
      </div>
      <div class="row justify-content-center mainColor">
        <a href="#">Zum Impressum</a>
      </div>
  </div>
</div>

</body>

  <script  src="{{asset('js/main.js')}}"></script>
</html>
