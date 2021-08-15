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
     perspective: 900px;
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
    /* height: 50px; */
    /* margin: 15px; */
    padding: 0px !important;
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
    background-image: url({{asset('Naturbilder/DSC_0877.jpg')}});
  }
  .gradient-border {
  --borderWidth: 3px;
  background: #1D1F20;
  position: relative;
  border-radius: var(--borderWidth);

  }
  .gradient-border:after {
  content: '';
  position: absolute;
  top: calc(-1 * var(--borderWidth));
  left: calc(-1 * var(--borderWidth));
  height: calc(100% + var(--borderWidth) * 2);
  width: calc(100% + var(--borderWidth) * 2);
  background: linear-gradient(60deg, #f79533, #f37055, #ef4e7b, #a166ab, #5073b8, #1098ad, #07b39b, #6fba82);
  border-radius: calc(2 * var(--borderWidth));
  z-index: -1;
  animation: movingColor 3s ease alternate infinite;
  background-size: 300% 300%;
  }

  @keyframes movingColor {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

</style>
<body>
  <div class="container-fluid">
    <h1>Bildergallerien verschiedenen Typs</h1>
    <div class="row bg-gallery1 center_items" style="min-height: 500px; margin-top:50px;">
      <div class="col-md crp mt1 " style="">
        <div class="rotated unit-translucent center_items h-100" style="">
          <img src="{{asset('Naturbilder/_DSC0685.jpg')}}" class="galleryimg2 gradient-border" alt="">
        </div>

      </div>
      <div class="col-md crp mt1  ">
        <div class="rotated unit-translucent center_items h-100" style="">
        <img src="{{asset('Naturbilder/_DSC0691.jpg')}}" class="galleryimg2" alt="">
      </div>
      </div>
      <div class="col-md crp mt1  ">
        <div class="rotated unit-translucent center_items h-100" style="">
          <img src="{{asset('Naturbilder/_DSC0786.jpg')}}" class="galleryimg2" alt="">
        </div>
      </div>
      <div class="col-md crp mt1  ">
        <div class="rotated unit-translucent center_items h-100" style="">
        <img src="{{asset('Naturbilder/_DSC3262.jpg')}}" class="galleryimg2 " alt="">
      </div>
      </div>
    </div>
    <div class="row center_items mt1 bg-gallery2" style="min-height: 250px;">
      <div class="col-md-12 mt1" style="position:relative;">
          <div class="row gallery">
            <div class="csh ">
              <div class="h-100" style="">
                  <img src="{{asset('Naturbilder/_DSC0786.jpg')}}" class="galleryimg3 " alt="Foto" >
              </div>
            </div>
            <div class="csh">
              <div class=" h-100">
                  <img src="{{asset('Naturbilder/_DSC3262.jpg')}}" class="galleryimg3 " alt="" style="">
                </div>
            </div>
            <div class="csh">
              <div class="h-100">
                  <img src="{{asset('Naturbilder/DSC_0877.jpg')}}" class="galleryimg3" alt="bild3" style="">
              </div>
            </div>
          </div>
          <div class="slick-slider-dots"></div>

        </div>
      </div>
    </div>
</body>

<script  src="{{asset('js/slick-1.8.1/slick/slick.min.js')}}"></script>

<script type="text/javascript">


$('.gallery').slick({
slidesToShow: 1,
slidesToScroll: 1,
// fade: true,

// autoplaySpeed: 5000,
arrows: false,
dots: true,
dotsClass: 'sl-dots',
appendDots: $('.slick-slider-dots'),

cssEase: 'linear',
// autoplay: true,
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
