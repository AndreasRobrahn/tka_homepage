@extends('eros.general_layout') @section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">ABOUT ME - SNOWWHITE</li>
        </ol>
    </nav>
    <div class="row ">
        <div class="col-md-5">
          <div id="carousel-thumb" class="carousel profile-carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">

              <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                      <img src="{{asset('img/swi_2.jpg')}}" class="d-block carousel-profile-img">
                  </div>
              </div>

              <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                  <span data-feather="chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Zurück</span>
              </a>
              <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                  <span data-feather="chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Weiter</span>
              </a>

              <ol class="carousel-indicators">
                  <li data-target="#carousel-thumb" data-slide-to="1" class="active"></li>
              </ol>
          </div>

            <div class="text-center">
              <br>
            <a href="route('gallery.index')" class="mt-3 btn btn-outline-pclub btn-block"><span class="mb-1" data-feather="film"></span>  Sieh dir ALLE meine <b>Fotos</b> an</b></a>
          </div>
          <br>

          </div>

        <div class="col-md-7 about-model">
            <div class="row">
                <div class="col text-center">
                  <span class="align-middle m-2">
                    <blockquote class="blockquote">&bdquo;Aktuell im P-Club bei Flensburg besuchbar!&ldquo;</blockquote>
                    <b class="text-pclub">SO WEIT IST ES <i class="fas fa-map-marker-alt fa-2x ml-2"></i></b>
                  </span>

                </div>
                <div class="col">

                </div>
            </div>

            <table class="mt-5 mb-5 table table-sm ">
              <tr>
                  <td class="font-weight-bold">Alter:</td>
                  <td>29</td>
              </tr>
                <tr>
                    <td class="font-weight-bold">Größe:</td>
                    <td>1,75m</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Konfektion:</td>
                    <td>36</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Körbchengröße:</td>
                    <td>C</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Hauttyp:</td>
                    <td>Asiatisch</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Haarfarbe:</td>
                    <td>Schwarz wie Schneewittchen</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Haarlänge:</td>
                    <td>lang</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Intim:</td>
                    <td>verbrannte Erde</td>
                </tr>
                <tr>
                    <td class="font-weight-bold">Piercings:</td>
                    <td>ja</td>
                </tr>
            </table>
            </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 text-center">
                <h4 class="heading-pclub font-weight-bold">Sexuelle Vorlieben</h4>
                <p ><span class="badge badge-danger status-badge">AV: nein</span> <span class="badge badge-success status-badge">Französisch: ja</span> <span class="badge badge-success status-badge">SM: ja</span> <span class="badge badge-danger status-badge">Sekt: nein</span> <span class="badge badge-danger status-badge">Kaviar: nein</span> <span class="badge badge-success status-badge">Escort: ja</span> <span class="badge badge-success status-badge">Cumshot: ja</span></p>
                </div>
                <div class="col-sm-6 text-center">
                    <h4 class="heading-pclub font-weight-bold">Meine Links</h4>
                    <b><i class="fab fa-instagram text-pclub mr-2 fa-2x"></i> Instagram</b>
                </div>
            </div>
            <hr>
            <div class="row text-center">
                    <div class="col-6 col-md-2">
                        <div class="card p-2 text-uppercase border-0 card-hover">
                        <i class="fas fa-circle-notch fa-5x"></i>
                            <br>
                            <p class="heading-pclub">Orientierung</p>
                            <p class="font-weight-bold">Hetero</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="card p-2 text-uppercase border-0 card-hover">
                        <i class="fas fa-globe-europe fa-5x"></i>
                            <br>
                            <p class="heading-pclub">Land</p>
                            <p class="font-weight-bold">DE/CH</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="card p-2 text-uppercase border-0 card-hover">
                        <i class="fas fa-map-marker-alt fa-5x"></i>
                            <br>
                            <p class="heading-pclub">Stadt</p>
                            <p class="font-weight-bold">Flensburg</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="card p-2 text-uppercase border-0 card-hover">
                        <i class="fas fa-language fa-5x"></i>
                            <br>
                            <p class="heading-pclub">Sprachen</p>
                            <p class="font-weight-bold">DE/CH/CZ</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="card p-2 text-uppercase border-0 card-hover">
                        <i class="fas fa-heartbeat fa-5x"></i>
                            <br>
                            <p class="heading-pclub">Alter</p>
                            <p class="font-weight-bold">23</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="card p-2 text-uppercase border-0 card-hover">
                        <i class="fas fa-balance-scale fa-5x"></i>
                            <br>
                            <p class="heading-pclub">Gewicht</p>
                            <p class="font-weight-bold">63kg</p>
                        </div>
                    </div>
            </div>


          <hr>
          <h4 class="heading-pclub font-weight-bold text-center">Über mich 🔥💦</h4>
          <p class="bg-secondary rounded p-3"></p><br>
</div>


@endsection
