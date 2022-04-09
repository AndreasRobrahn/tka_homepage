<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-5.0.1-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/messages.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/album.css') }}">

    <style>
    a{
      text-decoration: none;
      color: white !important;
    }
      /* Style the Image Used to Trigger the Modal */
     .myImageTrigger {
       border-radius: 5px;
       cursor: pointer;
       transition: 0.3s;
     }

     .myImageTrigger:hover {opacity: 0.7;}

     /* The Modal (background) */
     .modal {
       display: none; /* Hidden by default */
       position: fixed; /* Stay in place */
       z-index: 10000; /* Sit on top */
       padding-top: 100px; /* Location of the box */
       left: 0;
       top: 0;
       width: 100%; /* Full width */
       height: 100%; /* Full height */
       overflow: auto; /* Enable scroll if needed */
       background-color: rgb(0,0,0); /* Fallback color */
       background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
     }

     /* Modal Content (Image) */
     .modal-content {
       margin: auto;
       display: block;
       width: 80%;
       max-width: 700px;
     }

     /* Caption of Modal Image (Image Text) - Same Width as the Image */
     .caption {
       margin: auto;
       display: block;
       width: 80%;
       max-width: 700px;
       text-align: center;
       color: #ccc;
       padding: 10px 0;
       height: 150px;
     }

     /* Add Animation - Zoom in the Modal */
     .modal-content, .caption {
       animation-name: zoom;
       animation-duration: 0.6s;
     }

     @keyframes zoom {
       from {transform:scale(0)}
       to {transform:scale(1)}
     }

     /* The Close Button */
     .close {
       position: absolute;
       top: 15px;
       right: 35px;
       color: #f1f1f1;
       font-size: 40px;
       font-weight: bold;
       transition: 0.3s;
     }

     .close:hover,
     .close:focus {
       color: #bbb;
       text-decoration: none;
       cursor: pointer;
     }

     /* 100% Image Width on Smaller Screens */
     @media only screen and (max-width: 700px){
       .modal-content {
         width: 100%;
       }
     }
    </style>
    @yield('additional_css')
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg shadow-sm  text-pclub">
            <div class="container">
                <a class="navbar-brand" href="#"></span> <img class="img-fluid" src="{{asset('Firmenlogo/Firmenlogo.jpeg')}}" style="height: 150px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars fa-2x text-white"></i>
                </button>
                <div class="collapse navbar-collapse text-white" id="navbarColor03">
                    <ul class="navbar-nav mr-auto text-white">
                      <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                          <a class="nav-link" href="{{route('home')}}">HOME</a>
                      </li>
                        <li class="nav-item {{ Request::is('about*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('aboutMe')}}">ABOUT ME</a>
                        </li>
                        <li class="nav-item {{ Request::is('blog*') ? 'active' : '' }}">
                            <a class="nav-link" href="route('blog.index')">BLOG</a>
                        </li>
                        <li class="nav-item dropdown" >
                            <a id="navbarDropdown" class="nav-link dropdown-toggle active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Medien <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" @guest data-toggle="modal" data-target="#loginModal" @endguest href="@auth {{route('videos.index')}} @else # @endauth" style="color: black;">VIDEOS</a>
                              <a class="dropdown-item" @guest data-toggle="modal" data-target="#loginModal" @endguest href="@auth {{route('snapchat.index')}} @else # @endauth" style="color: black;">SNAPCHAT</a>
                              <a class="dropdown-item" @guest data-toggle="modal" data-target="#loginModal" @endguest href="@auth {{route('gallery.index')}} @else # @endauth" style="color: black;">FOTOS</a>
                              <a class="dropdown-item" @guest data-toggle="modal" data-target="#loginModal" @endguest href="@auth {{route('audios.index')}} @else # @endauth" style="color: black;">SPRACHNACHRICHTEN</a>
                                <form id="logout-form" action=" route('logout') " method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @auth
                        <li class="nav-item {{ Request::is('chat*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{route('messages.index')}}">MEINE NACHRICHTEN</a>
                        </li>
                        @endauth
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto text-white">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <button type="button" class="btn btn-link text-pclub" data-toggle="modal" data-target="#loginModal" href="#">MEMBER LOGIN</button>
                            </li>
                        @else
                            <li class="nav-item dropdown" >
                                <a id="navbarDropdown" class="nav-link dropdown-toggle {{ Request::is('account*') ? 'active' : '' }}" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Account <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('payment.index') }}" style="color: black;">Coins kaufen</a>
                                  <a class="dropdown-item" href="{{route('account.index')}}" style="color: black;">Profil bearbeiten</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: black;">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item">
                              <i class="fas fa-coins text-warning fa-2x mt-1 ml-3"></i> <i class=" ml-1 font-weight-light lead" id="userCoins">{{Auth::user()->credit}}</i> <small>Coins</small>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main role="main" class="mt-0">
        <div class="album py-5 ">
          <div class="container" id="container">
              <div class="album">
                <div class="container-fluid">
                  @foreach ($errors->all() as $error_php)
                  <div class="alert alert-danger" role="alert">
                  {{ $error_php }}
                </div>
                @endforeach
                <div class="card">
                  <div class="card-body">
                    @yield('content')
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>

    <a id="back-to-top" href="#" class="btn btn-warning back-to-top mb-5" role="button" data-placement="left"><span data-feather="chevron-up"></span></a>

    <nav class=" bg-dark fixed-bottom text-center text-white">
       <span class="navbar-text text-center text-muted">
          <a class="mr-5" href="route('impressum.index')">Impressum</a>
          <a class="mr-5" href="{{route('agb')}}">AGB</a>
          <a class="mr-5" href="{{route('datenschutz')}}">Datenschutz</a>
        </span>
    </nav>

    <div class="modal fade bd-example-modal-lg" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-body">
            <h5 class="text-pclub">
              Ich habe einen Account
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
              <form action="route('customer.login.submit')" method="post">
                @csrf
                <div class="form-group">
                  <label for="email">Deine E-Mail</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Deine E-Mail">
                </div>
                <div class="form-group">
                  <label for="password">Dein Passwort</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Dein Passwort">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Anmelden</button>
                <hr>
                <h5 class="text-pclub">
                  Gleich registrieren? <br> Hier gehts lang!
                </h5>
                Melde dich an und erhalte sofort Zugang.
                <a href="route('customer.register.get')" class="btn btn-primary btn-block mt-4">Kostenlos registrieren</a>
              </form>
          </div>
          <div class="modal-footer">
            <div class="options text-center text-md-right mt-1">
                <p><a href="route('customer.password.reset', ['token'=> null])" class="blue-text">Passwort vergessen?</a></p>
              </div>
              <button type="button" class="btn btn-dark ml-auto" data-dismiss="modal">Zurück</button>
            </div>
        </div>
      </div>
    </div>
  </body>

    <!-- <script src="{{ asset('js/feather.min.js') }}"></script> -->
    <!-- <script src="{{ asset('js/scrollToTop.js') }}"></script> -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script>
        // feather.replace()
    </script>
    @yield('additional_js')
</body>

</html>
