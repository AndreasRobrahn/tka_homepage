@extends('uk_layout')

@section('content')


<div class="container-fluid p-0 bg-light">

  <div class="row ukColor1" id='stickynavmob'>
    <div class="col-6 d-flex justify-content-center align-items-center">
      <div class="navbar-wrapper">
        <input type="checkbox" id="hamburg" onclick="openSidemenu()">
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
        <p class="hoveritem">Über uns</p>
      </div>
      <hr>
      <div class="w-100 d-flex linkitem" >
        <div class="d-flex " >
          <div class="dropdownrightactivate">
            <p class="hoveritem" >Unsere Leistungen</p>
          </div>
          <div class="dropdownright " style=" display: none;position: absolute; margin-left: 35%;">
            <p class="hoveritem">Unsere Fachkrafte</p>
            <p class="hoveritem">Stellenangebote</p>
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
    </div>
  </div>

  <div class="row m-0 hiddenonmobile" style="height: 60vh; overflow: hidden;">
    <div class="imageoverlay p-0">
      <img src="{{asset('Naturbilder/DSC_0387.jpg')}}" alt="hintergrundbild" class="" style="height: 100%; width: 100%; object-fit: cover;">
      <div class="overlayelements">
        <div class="row m-0 textsizeu1 text-white text-shadow w-100 align-items-center">
          <div class="col-2 center_items">
            <p>Über uns</p>
          </div>
          <div class="col-2 center_items linkitem" style="position: relative;">
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
          <div class="col-2 center_items">
            <p>Kompetenzen</p>
          </div>
          <div class="col-2 center_items">
            <p>Zertifikate</p>
          </div>
          <div class="col-3 center_items offset-1">
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
  <!-- <div class="row m-0 ukColor1 text-white textsize1 hiddenonmobile" style="height: 30vh;">
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
          <div class="col-3 center_items offset-1 linkitem">
            <a href="{{route('unikat')}}">
              <img src="{{asset('images/unikat_logo.jpg')}}" alt="firmenlogo_unikat" class="" style="height: 150px; width: 150px;">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div> -->

<div class="row justify-content-center contentbreak" style="">
  <div class="col-sm-9 p-1">
    <h2 class="textsizeu3 p-2">Herzlich Willkommen sagt die Unikat Personaldienstleistungen AG</h2>
    <p class="textsizeu2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet dui enim. Donec placerat dignissim eros, id varius magna posuere nec. Vestibulum ut urna fringilla, posuere sem ac, vehicula elit. Quisque lacus mi, molestie non auctor sed, commodo vel nisi. Integer turpis nulla, sollicitudin non ex at, pharetra aliquet eros. Mauris viverra mi dictum, molestie quam consectetur, hendrerit magna. Phasellus tincidunt ligula erat, non vehicula leo lobortis ac. Quisque sit amet nulla non mi ultrices euismod. Vivamus sit amet dignissim magna. Nulla ac risus leo. Integer cursus, enim vitae elementum volutpat, mi lectus venenatis ante, in euismod nulla felis eget massa. Nulla dui diam, dictum non iaculis ut, semper eu massa. Maecenas sit amet dui lacus. In dignissim sed velit non facilisis. Integer egestas enim id ipsum finibus, sit amet bibendum nisl euismod. Nulla vel arcu nec lectus malesuada aliquet.</p>
  </div>
</div>
<div class="row justify-content-center contentbreak">
  <div class="col-sm-9 p-1">
      <h2 lass="textsize2">Social Media</h2>
    <p><a class="fa fa-facebook socmedbutton" href="#"></a>  <a class="fa fa-instagram socmedbutton" href="#"></a></p>
  </div>
</div>
  <div class="row justify-content-center text-white"  style="height: 60vh; overflow: hidden;">
    <div class="imageoverlay p-0">
      <img src="{{asset('Naturbilder/DSC_9797.jpg')}}" alt="hintergrundbild" class="" style="height: 100%; width: 100%; object-fit: cover;">
      <div class="" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);">
        <h1 class="textsize3 text-white text-shadow">Unikat</h1>
        <p class="textsize1 text-white text-shadow">wir überzeugen durch Verlässlichkeit und Kompetenz</p>
      </div>
    </div>
  </div>
  <div class="row justify-content-center contentbreakw100">
    <h2 class="text-center">Unsere Dienstleistungen</h2>

    <div class="col-5 col-sm-4 col-md-3 m-2">
      <div class="row">
        <img src="{{asset('Naturbilder/_DSC0691.jpg')}}" alt="dientleistung1" class="img-fluid">
      </div>
      <div class="row justify-content-center">
        Maschinenbau
      </div>
    </div>
    <div class="col-5 col-sm-4 col-md-3 m-2">
      <div class="row">
        <img src="{{asset('Naturbilder/_DSC0691.jpg')}}" alt="dientleistung1" class="img-fluid">
      </div>
      <div class="row justify-content-center">
        Maschinenbau
      </div>
    </div>
    <div class="col-5 col-sm-4 col-md-3 m-2">
      <div class="row">
        <img src="{{asset('Naturbilder/_DSC0691.jpg')}}" alt="dientleistung1" class="img-fluid">
      </div>
      <div class="row justify-content-center">
        Maschinenbau
      </div>
    </div>
    <div class="col-5 col-sm-4 col-md-3 m-2">
      <div class="row">
        <img src="{{asset('Naturbilder/_DSC0691.jpg')}}" alt="dientleistung1" class="img-fluid">
      </div>
      <div class="row justify-content-center">
        Maschinenbau
      </div>
    </div>
    <div class="col-5 col-sm-4 col-md-3 m-2">
      <div class="row">
        <img src="{{asset('Naturbilder/_DSC0691.jpg')}}" alt="dientleistung1" class="img-fluid">
      </div>
      <div class="row justify-content-center">
        Maschinenbau
      </div>
    </div>
    <div class="col-5 col-sm-4 col-md-3 m-2">
      <div class="row">
        <img src="{{asset('Naturbilder/_DSC0691.jpg')}}" alt="dientleistung1" class="img-fluid">
      </div>
      <div class="row justify-content-center">
        Maschinenbau
      </div>
    </div>



  </div>
      <div class="row ukColor1 text-white contentbreakw100 justify-content-start align-items-center">
        <div class="col-sm-6 m-2 order-1 order-sm-2 order-md-2">
          <div class="row m-1 border-bottom" >
            <h4 class="headline1">Zusatzliche Informationen</h4>
          </div>
          <div class="row m-1 justify-content-center ">
            <p>Adresse: XYZ Str. 8, XXXXX Dortmund</p>
          </div>
          <div class="row m-1 justify-content-center ">
            <p>Email: info@unikat-deutschland.de</p>
          </div>
          <div class="row m-1 justify-content-center ">
            <p>Social Media: <a class="fa fa-facebook" href="#"></a>  <a class="fa fa-instagram" href="#"></a></p>
          </div>

        </div>
        <div class="col-sm-5 p-0 order-2 order-sm-1 order-md-1">
          <div class="mapouter h-100 w-100">
            <div class="gmap_canvas">
              <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=24939%20Flensburg,%20Husumer%20Str.%208&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="height: 100%; width: 100%;"></iframe>
              <br>
              </style>
            </div>
          </div>
        </div>
      </div>

  </div>

@endsection
