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
  .rotated
  {
    -webkit-transform: rotateY(25deg);
     -moz-transform: rotateY(25deg);
     transform: rotateY(25deg);
     -webkit-transform-origin:center;
     -moz-transform-origin:center;
     transform-origin:center;
  }
  .slick-slider-dots{
    position: absolute;
    display: flex;
    /* bottom: 0px; */
    left: 50%;
    bottom: 0%;
    transform: translateX(-50%);
    display: flex;
  }
  .sl-dots
  {
    list-style-type: none;
    height: 50px;
    /* margin: 15px; */

    display: flex !important;
  }

  .bwbgi1,.bwbgi2,.bwbgi3
  {
    background-repeat: no-repeat;
    background-size: cover;
  }
  .bwbgi1:hover,.bwbgi2:hover,.bwbgi3:hover
  {
    opacity: 0.7;
  }
  .bwbgi1
  {
    background-image: url({{asset('Naturbilder/_DSC0786.jpg')}});
  }
  .bwbgi2
  {
    background-image: url({{asset('Naturbilder/_DSC3262.jpg')}});
  }
  .bwbgi3
  {
    background-image: url({{asset('Naturbilder/_DSC0691.jpg')}});
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
    <div class="row center_items mt-4 bg-gallery2" style="min-height: 500px;">
      <div class="col-md-10  h-75" style="position:relative;">
          <div class="row center_items gallery">
            <div class="csh">
              <div class="center_items" style="">
                  <img src="{{asset('Naturbilder/_DSC0786.jpg')}}" class="galleryimg3 " alt="Foto" >
              </div>
            </div>
            <div class="csh">
              <div class=" center_items">
                  <img src="{{asset('Naturbilder/_DSC3262.jpg')}}" class="galleryimg3 " alt="" style="">
                </div>
            </div>
            <div class="csh">
              <div class="center_items">
                  <img src="{{asset('Naturbilder/_DSC0691.jpg')}}" class="galleryimg3" alt="" style="">
              </div>
            </div>
          </div>
          <div class="slick-slider-dots"></div>

        </div>
      </div>
    </div>
  </div>
</body>

<script  src="{{asset('js/slick-1.8.1/slick/slick.min.js')}}"></script>
<script type="text/javascript">


$('.gallery').slick({
slidesToShow: 1,
slidesToScroll: 1,
autoplay: true,
autoplaySpeed: 5000,
arrows: false,
dots: true,
dotsClass: 'sl-dots',
appendDots: $('.slick-slider-dots'),
// prevArrow: $('.prevArrow')[0],
// nextArrow: $('.nextArrow')[0],
  });
// let bgimage1 =  {!! json_encode(asset('Naturbilder/_DSC0786.jpg')) !!};
// let bgimage2 =  {!! json_encode(asset('Naturbilder/_DSC3262.jpg')) !!};
// let bgimage3 =  {!! json_encode(asset('Naturbilder/_DSC0691.jpg')) !!};
// $('#slick-slide-control00').css('background-image','url('+ bgimage1+'');
// $('#slick-slide-control01').css('backgroundImage','url('+ bgimage2+'');
// $('#slick-slide-control02').css('backgroundImage','url('+ bgimage3+'');

$('#slick-slide-control00').addClass('bwbgi1')
$('#slick-slide-control01').addClass('bwbgi2')
$('#slick-slide-control02').addClass('bwbgi3')
</script>
