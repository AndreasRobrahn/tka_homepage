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
</head>
<style media="screen">
  .rotated
  {
    -webkit-transform: rotateY(25deg);
     -moz-transform: rotateY(25deg);
     transform: rotateY(25deg);
     -webkit-transform-origin:center;
     -moz-transform-origin:center;
     transform-origin:center;
  }
</style>
<body>
  <div class="container-fluid">
    <h1>Bildergallerien verschiedenen Typs</h1>
    <div class="row bg-gallery1 center_items" style="min-height: 500px;">
      <div class="col-md h-75 ">
        <div class="crp center_items" style="">
          <img src="{{asset('Naturbilder/_DSC0685.jpg')}}" class="galleryimg2 rotated" alt="">
        </div>

      </div>
      <div class="col-md h-75">
        <div class="crp center_items" style="">
        <img src="{{asset('Naturbilder/_DSC0691.jpg')}}" class="galleryimg2 rotated" alt="">
      </div>
      </div>

      <div class="col-md h-75">
        <div class=" crp center_items p-2" style="">
          <img src="{{asset('Naturbilder/_DSC0786.jpg')}}" class="galleryimg2 rotated" alt="">
        </div>
      </div>
      <div class="col-md h-75">
        <div class=" crp center_items p-2" style="">
        <img src="{{asset('Naturbilder/_DSC3262.jpg')}}" class="galleryimg2 rotated" alt="">
      </div>
      </div>
    </div>
  </div>
</body>
