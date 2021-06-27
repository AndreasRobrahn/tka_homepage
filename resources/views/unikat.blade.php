@extends('uk_layout')

@section('content')

<div class="row m-0 justify-content-center contentbreak" style="">
  <div class="col-sm-9 p-1">
    <h1 class="textsizeu3 p-2 hiddenonmobile">Herzlich Willkommen bei Unikat Deutschland GmbH

      </h1>
      <h1 class="mobileHeading textsizeu3 mt-4">Herzlich Willkommen bei der Unikat Deutschland GmbH</h1>
      <h2 class="mobileHeading textsizeu1 mt-4">Arbeitsvermittlung & Personaldienstleistungen in Dortmund</h2>

      <h2 class="textsizeu1 p-2 "> </h2>
    <p class="textsizeu2 m-2">
      Wir haben uns auf die Arbeitnehmerüberlassung von Fachkräften aus der Metallbranche & Lagerlogistik spezialisiert.
      Von unserem Firmensitz in Dortmund aus, vermitteln wir Ihnen bundesweit genau das Personal, welches Ihr Unternehmen benötigt. Profitieren sie von unseren längjahrigen Erfahrungen und Kontakten im Bereich der Personaldienstleistungen.
    </p>
  </div>

</div>
<div class="row m-0 justify-content-center contentbreak">
  <div class="col-sm-9 p-1">
      <h2 class="p-2 textsizeu1">Social Media</h2>
    <p><a class="fa fa-facebook socmedbutton" href="#"></a>  <a class="fa fa-instagram socmedbutton" href="#"></a></p>
  </div>
</div>
  <div class="row m-0 justify-content-center text-white"  style="height: 60vh; overflow: hidden;">
    <div class="imageoverlay p-0">
      <img src="{{asset('images/backgroundimage2.jpg')}}" alt="hintergrundbild" class="" style="height: 100%; width: 100%; object-fit: cover;">
      <div class="h-100 w-100" style="position: absolute; top: 5px; left: 5px;">
        <h2 class="textsizeu3 text-white text-shadow hiddenonmobile"> Kontaktieren Sie unser kompetentes Team bei</h2>
          <h2 class="mobileHeading textsizeu1  mt-2">Kontaktieren Sie unser kompetentes Team bei</h2>

          <p class="picturetextmobile">
            * Auftragsspitzen <br>
            * Personalengpässen <br>
            * Terminaufträgen <br>
            * Stillstandsarbeiten <br>
            * Bedarf an Mitarbeitern mit speziellen Zulassungen <br>
          </p>
        <div class="" style="position: absolute; bottom: -5px;">
          <p class="textsize1 text-white text-shadow">Unser Ziel ist Ihre Zufriedenheit!</p>
        </div>
 
      </div>
    </div>
  </div>
  <div class="row m-0 justify-content-center contentbreakw100">
    <h2 class="text-center textsizeu3 contentbreak">Unsere Dienstleistungen</h2>
    <div class="row contentbreak">

    </div>
        <div class="col-sm-5 m-1">
          <a href="{{route('unikatSpeciality')}}">
            <div class="row center_items">
              <img src="{{asset('images/image_metallbranche.jpg')}}" alt="Arbeitsvermittlung, Jobs in der Metalbranche" class="img-fluid img-departments linkitem" style="">
            </div>
            <div class="row">
              <span class="text-dark textsizeu1 text-center">Metallbranche</span>
            </div>
          </a>
        </div>
      </a>
      <div class="col-sm-5 ">
        <a href="{{route('unikatSpeciality')}}">
          <div class="row">
            <img src="{{asset('images/image_lagerlogistik.jpg')}}" alt="Arbeitsvermittlung, Jobs Lagerlogistik" class="img-fluid img-departments linkitem">
          </div>
          <div class="row">
            <span class="text-dark textsizeu1 text-center">Lagerlogistik</span>
          </div>
        </a>
      </div>

  </div>
    <div class="row m-0 ukColor1 text-white contentbreakw100 center_items">
      <div class="col-sm-5 m-2 p-1 order-sm-last order-md-first">
        <div class="row m-2 border-bottom" >
          <h4 class="headline1">Zusatzliche Informationen</h4>
        </div>
        <div class="row m-2 justify-content-center ">
          <p>Adresse: XYZ Str. 8, XXXXX Dortmund</p>
        </div>
        <div class="row m-2 justify-content-center ">
          <p>Email: info@unikat-deutschland.de</p>
        </div>
        <div class="row m-2 justify-content-center ">
          <p>Social Media: <a class="fa fa-facebook" href="#"></a>  <a class="fa fa-instagram" href="#"></a></p>
        </div>
        <div class="row m-2  justify-content-center ">
          <div class="col">
            <button type="button" name="button" class="btn btn-block border-rounded border border-white ukColor1" onclick="showContactModal()">Kontaktformular aufrufen</button>
          </div>

        </div>
      </div>
      <div class="col-sm-5 p-0 order-sm-first order-md-last">
        <div class="mapouter" style="height: 350px; width: 100%;padding: 5px;">
          <div class="gmap_canvas p-0 center_items">
            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=44135%20Dortmund,%20Friedenspl.%201&t=&z=13&ie=UTF8&iwloc=&output=embed" style="width: 90%;height: 350px;"></iframe><br>
            <br>
            </style>
          </div>
        </div>
      </div>
    </div>

@endsection
