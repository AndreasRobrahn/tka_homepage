@extends('uk_layout')

@section('content')

<div class="row m-0 justify-content-center contentbreak" style="">
  <div class="col-sm-9 p-1">
    <h1 class="textsizeu3 p-2">Unikat <br>Arbeitsvermittlung, <br> Personaldienstleistungen <br> in Dortmund
      </h1>
    <p class="textsizeu2 m-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet dui enim. Donec placerat dignissim eros, id varius magna posuere nec. Vestibulum ut urna fringilla, posuere sem ac, vehicula elit. Quisque lacus mi, molestie non auctor sed, commodo vel nisi. Integer turpis nulla, sollicitudin non ex at, pharetra aliquet eros. Mauris viverra mi dictum, molestie quam consectetur, hendrerit magna. Phasellus tincidunt ligula erat, non vehicula leo lobortis ac. Quisque sit amet nulla non mi ultrices euismod. Vivamus sit amet dignissim magna. Nulla ac risus leo. Integer cursus, enim vitae elementum volutpat, mi lectus venenatis ante, in euismod nulla felis eget massa. Nulla dui diam, dictum non iaculis ut, semper eu massa. Maecenas sit amet dui lacus. In dignissim sed velit non facilisis. Integer egestas enim id ipsum finibus, sit amet bibendum nisl euismod. Nulla vel arcu nec lectus malesuada aliquet.</p>
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
        <p class="textsize1 text-white text-shadow">Arbeitsvermittlung mit Verlässlichkeit und Kompetenz</p>
      </div>
    </div>
  </div>
  <div class="row justify-content-center contentbreakw100">
    <h2 class="text-center">Unsere Dienstleistungen</h2>

    <div class="col-5 col-sm-4 col-md-3 m-2">
      <div class="row">
        <img src="{{asset('Naturbilder/_DSC0691.jpg')}}" alt="Arbeitsvermittlung Maschinenbau" class="img-fluid img-departments" style="">
      </div>
      <div class="row justify-content-center">
        Maschinenbau
      </div>
    </div>
    <div class="col-5 col-sm-4 col-md-3 m-2">
      <div class="row">
        <img src="{{asset('Naturbilder/_DSC0691.jpg')}}" alt="Arbeitsvermittlung Maschinenbau" class="img-fluid img-departments">
      </div>
      <div class="row justify-content-center">
        Maschinenbau
      </div>
    </div>
    <div class="col-5 col-sm-4 col-md-3 m-2">
      <div class="row">
        <img src="{{asset('Naturbilder/_DSC0691.jpg')}}" alt="Arbeitsvermittlung Maschinenbau" class="img-fluid img-departments">
      </div>
      <div class="row justify-content-center">
        Maschinenbau
      </div>
    </div>
    <div class="col-5 col-sm-4 col-md-3 m-2">
      <div class="row">
        <img src="{{asset('Naturbilder/_DSC0691.jpg')}}" alt="Arbeitsvermittlung Maschinenbau" class="img-fluid img-departments">
      </div>
      <div class="row justify-content-center">
        Maschinenbau
      </div>
    </div>
    <div class="col-5 col-sm-4 col-md-3 m-2">
      <div class="row">
        <img src="{{asset('Naturbilder/_DSC0691.jpg')}}" alt="Arbeitsvermittlung Maschinenbau" class="img-fluid img-departments">
      </div>
      <div class="row justify-content-center">
        Maschinenbau
      </div>
    </div>
    <div class="col-5 col-sm-4 col-md-3 m-2">
      <div class="row">
        <img src="{{asset('Naturbilder/_DSC0691.jpg')}}" alt="Arbeitsvermittlung Maschinenbau" class="img-fluid img-departments">
      </div>
      <div class="row justify-content-center">
        Maschinenbau
      </div>
    </div>
  </div>
      <div class="row ukColor1 text-white contentbreakw100 center_items">
        <div class="col-sm-5 m-2 p-1 order-sm-last">
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
          <div class="row m-1  justify-content-center ">
            <div class="col">
              <button type="button" name="button" class="btn btn-block border-rounded border border-white ukColor1" onclick="showContactModal()">Kontaktformular aufrufen</button>
            </div>

          </div>
        </div>
        <div class="col-sm-5 p-0 order-sm-first">
          <div class="mapouter" style="height: 350px; width: 100%;padding: 5px;">
            <div class="gmap_canvas p-0 center_items">
              <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=44135%20Dortmund,%20Friedenspl.%201&t=&z=13&ie=UTF8&iwloc=&output=embed" style="width: 90%;height: 350px;"></iframe><br>
              <br>
              </style>
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
@endsection
