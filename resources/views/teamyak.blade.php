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
video {
    object-fit: fill;
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
#frontpagevideo
{
  position: absolute;
  width: 100%;

}
#tov
{
  width: 50%;
  position: absolute;
  z-index: 150;
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
  width:100%;
  position: fixed;
  z-index:200;
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

<div class="container-fluid bg-light">

  <div class="row  mainColor" id='stickynavmob'>
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
  <div class="row mainColor" id='stickynav'>
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
  <div class="row center_items" style="height: 100vh; position:relative; ">
    <div class="container" id="tov" >
      <div class="row">
        <h1 class="text-center text-white textsize3">Team Yak</h1>
      </div>
      <div class="row mt-2">
        <h2 class="text-center text-white textsize3">Bjj in Flensburg</h2>
      </div>
      <div class="row center_items mt-4">
        <button type="button" name="button" style="width: 50%; border-radius: 25px; background-color: transparent ; border: 3px solid white;"><span class="text-white">Seite Betreten</span></button>

      </div>
    </div>
    <video  class="w-100 h-100 p-0" src="{{asset('Videos/frontpagevideo.mp4')}}" id="frontpagevideo" allowfullscreen controls autoplay muted>
    </video>
  </div>
  </div>

</body>

  <script  src="{{asset('js/main.js')}}"></script>
</html>
