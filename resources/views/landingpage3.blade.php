@extends('templates.template_Page_with_SEO')

@section('refresh')
 <!-- <meta http-equiv="refresh" content="120"> -->
@endsection

@section('title')
  <title>TKA, Pgrogrammierung am Meer!</title>
@endsection

@section('keywords')
<meta name="keywords" content="Webprogrammierung, Webapps, Webdesign, RBA, Roboterprozessautomatisierung, Freelance">
@endsection

@section('description')
<meta name="description" content="Herzlich Willkommen beim Webauftritt der TKA. Wir sind dein Ansprechpartner für Anliegen im World Wide Web. P">
@endsection

@section('content')

	<style>
	*
	{
		word-break: break-word;
	}
	*::-webkit-scrollbar {
		width: 2px;
		height: 2px;
		}

  .mobile
  {
    display: none;
  }
	::-webkit-scrollbar-corner {
		  background: rgba(0,0,0,0.5);
	}
	    ::-webkit-scrollbar-track {
      background: #f1f1f1;
   }

  /* Handle */
   ::-webkit-scrollbar-thumb {
      background: #bec4c4;
   }

  /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
       background: #555;
   }
   .cursor-pointer
   {
     cursor: pointer;
   }
	.btn {
		width: auto;
		height: 40px;
		border: none;
		outline: none;
		background: #111;
		cursor: pointer;
		position: relative;
		z-index: 0;
		border-radius: 10px;
	}

	.btn:before {
		content: '';
		/* background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000); */
		position: absolute;
		top: -2px;
		left:-2px;
		background-size: 400%;
		z-index: -1;
		filter: blur(5px);
		width: calc(100% + 4px);
		height: calc(100% + 4px);
		animation: glowing 20s linear infinite;
		opacity: 0;
		transition: opacity .3s ease-in-out;
		border-radius: 10px;
	}

	.btn:active {

	}

	.btn:active:after {
		background: transparent;
	}

	.btn:hover:before {
		opacity: 1;
	}

	.btn:after {
		z-index: -1;
		content: '';
		position: absolute;
		width: 100%;
		height: 100%;
		background: #111;
		left: 0;
		top: 0;
		border-radius: 10px;
	}

	@keyframes glowing {
		0% { background-position: 0 0; }
		50% { background-position: 400% 0; }
		100% { background-position: 0 0; }
	}
	.btn {
		background: rgb(111,173,207);
		background: linear-gradient(0deg, rgba(111,173,207,0.9738270308123249) 18%, rgba(224,224,224,1) 67%, rgba(245,246,246,1) 90%);
	}



	/* This container is needed to position the front and back side */


	/* Do an horizontal flip when you move the mouse over the flip box container */


	/* Position the front and back side */


	/* Style the front side (fallback if image is missing) */


	/* Style the back side */



#menu__toggle {
  opacity: 0;
}
#menu__toggle:checked + .menu__btn > span {
  transform: rotate(45deg);
}
#menu__toggle:checked + .menu__btn > span::before {
  top: 0;
  transform: rotate(0deg);
}
#menu__toggle:checked + .menu__btn > span::after {
  top: 0;
  transform: rotate(90deg);
}
#menu__toggle:checked ~ .menu__box {
  right: 0 !important;
}
.menu__btn {
  position: relative;
  /* top: 20px; */
  /* left: 20px; */
  width: 96px;
  height: 55px;
  cursor: pointer;
  z-index: 6;
}
.menu__btn > span,
.menu__btn > span::before,
.menu__btn > span::after {
  display: block;
  position: absolute;
  width: 100%;
  height: 5px;
  background-color: #616161;
  transition-duration: .25s;
  /* top: 20px; */
  /* margin-top: 18px; */
}
.menu__btn > span::before {
  content: '';
  /* margin-top: 15px; */
  top: 25px;
}
.menu__btn > span::after {
  content: '';
  top: 50px;
}
.menu__box {
  display: block;
  position: fixed;
  top: 0;
  right: -100%;
  width: 300px;
  height: 100%;
  margin: 0;
  padding: 80px 0;
  list-style: none;
  background-color: #ECEFF1;
  box-shadow: 2px 2px 6px rgba(0, 0, 0, .4);
  transition-duration: .25s;
  z-index: 5;
}
.menu__item {
  display: block;
  padding: 12px 24px;
  color: #333;
  /* font-family: 'Roboto', sans-serif; */
  font-size: 20px;
  font-weight: 600;
  text-decoration: none;
  transition-duration: .25s;
}
.menu__item:hover {
  background-color: #CFD8DC;
}
  .background-body
  {
    position: absolute;
    height: 100vh;
    width: 100vw;
    background-image: url(https://cache.teia.rocks/ipfs/QmVacftCGVBnPJ5PzZR1b9aBJVAqi93bcGadxKP37CLVv1);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 100% 100%;
    z-index: -1;
  }
	.logo
	{
		height: 120px;
		/* width: 90%; */
		margin-top: 5px;
		object-fit: cover;
		border-radius: 25px;
		border: 5px solid white;
		/* box-shadow: 10px 10px 5px rgba(); */
		filter: drop-shadow(0px 0px 20px rgba(201, 68, 68, 0.835));
	}
	.center_items{

		display: flex;
		justify-content: center;
		align-items: center;

	}
	.img{
		width: 50%;
	}
	#toprow{
		height: 2vh;
		/* background: rgb(111,111,207); */
		/* background: linear-gradient(180deg, rgba(111,173,207,0.9738270308123249) 18%, rgba(224,224,224,1) 67%, rgba(245,246,246,1) 96%); */
	}
	#secondrow{

		height: 90vh;
		/* background: rgb(111,173,207); */
		/* background: linear-gradient(0deg, rgba(111,173,207,0.9738270308123249) 18%, rgba(224,224,224,1) 67%, rgba(245,246,246,1) 90%); */
	}
	#thirdrow
	{
		/* background-image: url(https://media4.giphy.com/media/VapauFsEHWCt2/giphy.gif?cid=ecf05e47j7ae6w6z8mrop1kjzg4n7e1ac1a47mq9zxaka9bl&ep=v1_gifs_search&rid=giphy.gif&ct=g); */
		background-repeat: no-repeat;
		background-position: center center;
		background-size: 100% 100%;
		height: 5vh;
		text-shadow: 5px 5px 5px black;;
	}


  #contentMobile{
    display: none;
  }
	.wcshadow
	{
		box-shadow: 0px 0px 15px black;
	}
	.shiningeffect
	  {
	    animation: shine 10s ease-in-out infinite;
	    /* animation-delay: 10s; */
	    animation-fill-mode: none;
	    animation-fill-mode: forwards;
	    content: "";
	    position: absolute;
	    margin-top: 30%;
	    margin-left: -45%;
	    width: 100%;
	    height: 20%;
	    opacity: 0;
	    -webkit-transform: rotate(-40deg);
	    -moz-transform: rotate(-40deg);
	    -ms-transform: rotate(-40deg);
	    -o-transform: rotate(-40deg);
	    transform: rotate(-40deg);
	    z-index: 200;
	}
	@-webkit-keyframes shine {
	0% {

	    opacity: 0.4;
	    top: -50%;
	    left: -50%;
	    transition-property: left, top, opacity;
	    transition-duration: 0.7s, 0.7s, 0.15s;
	    transition-timing-function: ease;
	  }

	20%,100% {
		opacity: 0.0;
		top: 80%;
		left: 80%;
		transition-property: left, top, opacity;
		}
	}
	@media screen and (max-width: 416px) {
		body{
			height: 100vh;
			width: 100vw;
			overflow: hidden;
      display: block !important;
      position: relative;
			/* overflow-X: scroll; */
		}
    .buttonMo{
      height:40px;
      width: 85px;
      border-radius: 5px;
      line-height: 90%;
      background: linear-gradient(to top, #09203f 0%, #537895 100%);
    }
    .desktop
    {
      display: none;
    }
    .mobile
    {
      display: block;
      height: 100%;`
    }
    .background-mobile
    {
      height: 100%;
      background-image: url(https://img.freepik.com/free-vector/blue-futuristic-networking-technology_53876-97395.jpg?w=1800&t=st=1697149705~exp=1697150305~hmac=d4198397a4ba96c97308bf712342953235ace5dd75b174e12395655b26c979bf);
      /* background-image: url(https://cache.teia.rocks/ipfs/QmVacftCGVBnPJ5PzZR1b9aBJVAqi93bcGadxKP37CLVv1); */
      background-repeat: no-repeat;
      background-position: center center;
      background-size: 100% 100%;
    }
		#firstrow{
			height: 20%;

		}
		#secondrow{

			height: 70%;

		}
		#thirdrow
		{

			height: 7%;
      /* margin-top: 20px; */

			text-shadow: 5px 5px 5px black;;
		}
    #thirdrow h3
    {
      font-size: 1.03em;
    }


		#content{
			/* position: relative; */
			height: auto;
			border-radius: 15px;

		}
    #contentMobile{
      display: block;
    }

		.flip-card-inner
		{
			margin-left: 0px;
			margin-top: 0px;
		}
	}
	</style>
	<body class="center_items">
    <!-- the backgorund giff -->
    <div class="desktop h-100 w-100 position-relative">
      <div class="background-body">
        <h1 class="" style="visibility: hidden;">Programmierung, Webseiten, IT Dienstleistungen</h1>
      </div>
      <!-- end -->
      <!-- 3 rows but only the first is filled with a logo, the third is on the bottom -->
  			<div class="container-fluid h-100">
          <!-- logo -->
  				<div class="row" id="toprow">

  					<div class="col-12 center_items  " style="">
              <div class="d-flex position-relative overflow-hidden">
                <div class="shiningeffect" style="position: absolute; background-color: rgba(255,255,255,0.3); width: 150%;">
  						   </div>
  						   <img src="{{asset('/Firmenlogo/Firmenlogo.jpeg')}}" class="logo" alt="Logo TKA Systems">
  					    </div>
              </div>
  				</div>
  				<div class="row" id="secondrow">
            <div class="container" id="content" style="">
              <div class="row h-100 mt-2 p-2" >
                <div class="col-sm-4 center_items p-2">
                  <div class="flip-card">
                  <div class="flip-card-inner wcshadow">
                  <div class="flip-card-front">
                   <div class="h-100 w-100 center_items">
                    <div class="row h-100">
                      <div class="col-12 h-75 center_items">
                        <h2> Über uns </h2>
                      </div>
                      <div  class="col-12 h-25 center_items">
                        <button onclick="rotator(this)" id="clickor" class="btn text-white">
                          weitere infos
                        </button>
                      </div>
                    </div>
                    </div>
                  </div>

                  <div class="flip-card-back overflow-scroll p-2">
                    <p>gegründet im Jahre 2021 haben wir uns vorgenommen alle Bereiche im Bereich des WorldWideWeb abzudecken. Wir sind eine Gruppe aus Experten aus dem Bereich IT, Social Media und Webmedien. </p>
                  </div>
                  </div>
                </div>
                </div>
                <div class="col-sm-4 center_items p-2 ">
                <div class="flip-card">
                    <div class="flip-card-inner wcshadow">
                    <div class="flip-card-front">
                     <div class="h-100 w-100 center_items">
                      <div class="row h-100">
                        <div class="col-12 h-75 center_items">
                          <h2 class=""> Programmierung </h2>
                        </div>
                        <div  class="col-12 h-25 center_items">
                          <button onclick="rotator(this)" id="clickor" class="btn text-white">
                            weitere infos
                          </button>
                        </div>
                      </div>
                      </div>
                    </div>
                    <div class="flip-card-back overflow-scroll">

                      <p>Benötigen Sie eine einfache Anwendung mit einer Datenbank. Kein Problem. Wir haben Erfahrungen mit Chats, Analyse- und Reporttools, Apps für ein verbesseters Monitoring und schneller Aktualisierung. Wenn Sie die Idee haben setzen wir sie um! </p>
                      <p></p>

                    </div>
                    </div>
                  </div>

                </div>
                <div class="col-sm-4 center_items p-2">
                <div class="flip-card">
                    <div class="flip-card-inner wcshadow">
                    <div class="flip-card-front">
                     <div class="h-100 w-100 border white center_items">
                      <div class="row h-100">
                        <div class="col-12 h-75 center_items">
                          <h2> Social Media </h2>
                        </div>
                        <div  class="col-12 h-25 center_items">
                          <button onclick="rotator(this)" id="clickor" class="btn text-white">
                            weitere infos
                          </button>
                        </div>
                      </div>
                      </div>
                    </div>

                    <div class="flip-card-back overflow-scroll p-2">
                      <p>Die sozialen Medien verbessern Ihre Reichweite enorm. Warum nicht gekoppelt mit einer Webseite oder einem Webshop? Wir helfen Ihnen Ihren Auftritt zu verbessern und mehr Reichweite zu generieren</p>
                    </div>
                    </div>
                  </div>

                </div>
                  <div class="col-sm-4 center_items p-2">
                    <div class="flip-card">
                    <div class="flip-card-inner wcshadow">
                    <div class="flip-card-front">
                     <div class="h-100 w-100 border white center_items">
                      <div class="row h-100">
                        <div class="col-12 h-75 center_items">
                          <h2> Wordpress </h2>
                        </div>
                        <div  class="col-12 h-25 center_items">
                          <button onclick="rotator(this)" id="clickor" class="btn text-white">
                            weitere infos
                          </button>
                        </div>
                      </div>
                      </div>
                    </div>
                    <div class="flip-card-back overflow-scroll p-2">
                      <p>Selbsterklärend. Wollen sie das bekannteste aller Frameworks für Webauftritte nutzen? Wir richten die Seite ein und sie können die einzelnen Beiträge verfassen. </p>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 center_items p-2">
                  <div class="flip-card">
                    <div class="flip-card-inner wcshadow">
                    <div class="flip-card-front">
                     <div class="h-100 w-100 border white center_items">
                      <div class="row h-100">
                        <div class="col-12 h-75 center_items">
                          <h2>Beispiele</h2>
                        </div>
                        <div  class="col-12 h-25 center_items">
                          <button onclick="rotator(this)" id="clickor" class="btn text-white">
                            weitere infos
                          </button>
                        </div>
                      </div>
                      </div>
                    </div>

                    <div class="flip-card-back overflow-scroll p-2">
                      <div class="d-block">
                        <p><a href=""> ein Chatsystem </a></p>
                        <p><a href=""> The Wheel of Fortune </a></p>
                        <p><a href=""> Galgenmann </a></p>
                      </div>
                     </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 center_items p-2">
                    <div class="flip-card">
                    <div class="flip-card-inner wcshadow">
                    <div class="flip-card-front">
                     <div class="h-100 w-100 border white center_items">
                      <div class="row h-100">
                        <div class="col-12 h-75 center_items">
                          <h2> SEO </h2>
                        </div>
                        <div  class="col-12 h-25 center_items">
                          <button onclick="rotator(this)" id="clickor" class="btn text-white">
                            weitere infos
                          </button>
                        </div>
                      </div>
                      </div>
                    </div>

                    <div class="flip-card-back p-2">
                      <p>Suchmaschinenoptimierung ist eines der wichtigsten Marketingwerkzeuge das es gibt heutzutage. Die technischen und inhaltlichen Sachverhalte können manipuliert werden um für Sie eine erheblich größere Reichweite zu erzeugen</p>

                    </div>
                    </div>
                  </div>
                  </div>
                <div class="col-sm-4 center_items p-2">
                    <div class="flip-card">
                    <div class="flip-card-inner wcshadow">
                    <div class="flip-card-front">
                     <div class="h-100 w-100 center_items">
                      <div class="row h-100">
                        <div class="col-12 h-75 center_items">
                          <h2> Roboter Prozessautomatisierung </h2>
                        </div>
                        <div  class="col-12 h-25 center_items">
                          <button onclick="rotator(this)" id="clickor" class="btn text-white">
                            weitere infos
                          </button>
                        </div>
                      </div>
                      </div>
                    </div>

                    <div class="flip-card-back overflow-scroll p-2">
                      <p>Industrie 4.0 steht vor der Türe. Es gibt mittlerweile viefältige Möglichkeiten um sich wiederholende, lästige Tätigkeiten zu automatisieren. </p>
                    </div>
                    </div>
                  </div>
                  </div>
                <div class="col-sm-4 center_items p-2">
                    <div class="flip-card">
                    <div class="flip-card-inner wcshadow">
                    <div class="flip-card-front">
                     <div class="h-100 w-100 center_items">
                      <div class="row h-100">
                        <div class="col-12 h-75 center_items">
                          <h2> Projektarbeit / Freelance </h2>
                        </div>
                        <div  class="col-12 h-25 center_items">
                          <button onclick="rotator(this)" id="clickor" class="btn text-white">
                            weitere infos
                          </button>
                        </div>
                      </div>
                      </div>
                    </div>

                    <div class="flip-card-back overflow-scroll p-2">
                      <p>benötigen Sie Hilfe bei einem Projekt? Fehlen Ihnen Personalressourcen? Melden sie sich über den Kontakt Button</p>
                    </div>
                    </div>
                  </div>
                  </div>

                  <div class="col-sm-4 center_items p-2">
                    <div class="flip-card">
                    <div class="flip-card-inner wcshadow">
                    <div class="flip-card-front">
                     <div class="h-100 w-100  center_items">
                      <div class="row h-100">
                        <div class="col-12 h-75 center_items">
                          <h2> weitere IT-Diensleistungen </h2>
                        </div>
                        <div  class="col-12 h-25 center_items">
                          <button onclick="rotator(this)" id="clickor" class="btn text-white">
                            weitere infos
                          </button>
                        </div>
                      </div>
                      </div>
                    </div>

                    <div class="flip-card-back overflow-scroll p-2">
                      <p>Jahrelange Erfahrung im Support von Desktop- und Webapplikationen wie Office365, Outlook, MS Word, Excel etc. Installationen, Einrichtungen von Geräten und vieles mehr. Wir vereinbaren im Vorfeld einen Preis und sollten wir das Anliegen nicht lösen können, mûssen sie auch nichts zahlen</p>
                    </div>
                    </div>
                  </div>
                  </div>
              </div>
            </div>
  				</div>
  				<div class="row " id="thirdrow">
  					<div class="col-4 center_items h-100" id="">
  						<h3 class="text-white cursor-pointer">
                <a href="{{route('impressum')}}">Impressum</a> </h3>
  						</div>
  						<div class="col-4 center_items" id="">
  						<h3 class="text-white cursor-pointer">
                <a href="{{route('dataprivacy')}}">Datenschutz</a> </h3>
  						</div>
  						<div class="col-4 center_items" id="">
  						<h3 class="text-white cursor-pointer" onclick="showContactModal()">

                Kontakt </h3>
  						</div>
  				</div>
  			</div>
        <!-- the container with the cards centered in the middle -->

    </div>
    <div class="mobile">
      <div class="background-mobile">
        <div class="container h-100">
          <div class="row m-0" id="firstrow">
            <div class="col-6 center_items">
              <!-- the logo -->
              <div class="d-flex position-relative overflow-hidden">
                <div class="shiningeffect" style="position: absolute; background-color: rgba(255,255,255,0.3); width: 150%;">
  						   </div>
  						   <img src="{{asset('/Firmenlogo/Firmenlogo.jpeg')}}" class="logo" alt="Logo TKA Systems">
  					    </div>
            </div>
            <div class="col-6 center_items">
              <div class="hamburger-menu">
                <input id="menu__toggle" type="checkbox" />
                <label class="menu__btn" for="menu__toggle">
                  <span></span>
                </label>

                <ul class="menu__box">
                  <li><a class="menu__item" href="#">Home</a></li>
                  <li><a class="menu__item" href="#">Kontakt</a></li>
                  <li><a class="menu__item" href="#">Datenschutz</a></li>
                  <li><a class="menu__item" href="#">Impressum</a></li>
                  <li><a class="menu__item" href="#">Instagram</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- where the cards are -->
          <div class="row m-0" id="secondrow">
            <div class="col-6 center_items p-2">
              <div class="flip-card">
                <div class="flip-card-inner wcshadow">
                  <div class="flip-card-front">
                    <div class="h-100 w-100  center_items">
                      <div class="row h-100">
                        <div class="col-12 h-50 center_items">
                          <h2 class="mt-1"> Programmierung  </h2>
                        </div>
                        <div  class="col-12 h-50 center_items">
                          <button onclick="rotator2(this)" id="clickor" class="buttonMo text-white">
                            weitere infos
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="flip-card-back p-2 center_items">
                    <div class="">
                      <ul class="list-unstyled">
                        <li>Anwendungen mit Datenbanken</li>
                        <li>Analysetools für ein besseres Monitoring</li>
                        <li>Umfragen, Kontaktformulare, Chats etc.</li>
                        <li>Blogs, Webauftritte</li>
                      </ul>
                      <button onclick="deRotate(this)" id="clickor2" class="buttonMo text-white">
                        zurück
                      </button>
                    </div>

                  </div>
                </div>
              </div>
              </div>
            <div class="col-6 center_items p-2">
              <div class="flip-card">
                <div class="flip-card-inner wcshadow">
                  <div class="flip-card-front">
                    <div class="h-100 w-100  center_items">
                      <div class="row h-100">
                        <div class="col-12 h-50 center_items">
                          <h2 class="mt-1"> Social Media </h2>
                        </div>
                        <div  class="col-12 h-50 center_items">
                          <button onclick="rotator2(this)" id="clickor" class="buttonMo text-white">
                            weitere infos
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="flip-card-back p-2 center_items">
                    <div class="">
                      <p>Die sozialen Medien verbessern Ihre Reichweite enorm. Warum nicht gekoppelt mit einer Webseite oder einem Webshop? Wir helfen Ihnen Ihren Auftritt zu verbessern und mehr Reichweite zu generieren</p>
                      <button onclick="deRotate(this)" id="clickor2" class="buttonMo text-white">
                        zurück
                      </button>
                    </div>

                  </div>
                </div>
              </div>
              </div>
            <div class="col-6 center_items p-2">
              <div class="flip-card">
                <div class="flip-card-inner wcshadow">
                  <div class="flip-card-front">
                    <div class="h-100 w-100  center_items">
                      <div class="row h-100">
                        <div class="col-12 h-50 center_items">
                          <h2 class="mt-1"> Wordpress </h2>
                        </div>
                        <div  class="col-12 h-50 center_items">
                          <button onclick="rotator2(this)" id="clickor" class="buttonMo text-white">
                            weitere infos
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="flip-card-back p-2 center_items">
                    <div class="">
                      <p>Selbsterklärend. Wollen sie das bekannteste aller Frameworks für Webauftritte nutzen? Wir richten die Seite ein und sie können die einzelnen Beiträge verfassen.</p>
                      <button onclick="deRotate(this)" id="clickor2" class="buttonMo text-white">
                        zurück
                      </button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 center_items p-2">
              <div class="flip-card">
                <div class="flip-card-inner wcshadow">
                  <div class="flip-card-front">
                    <div class="h-100 w-100  center_items">
                      <div class="row h-100">
                        <div class="col-12 h-50 center_items">
                          <h2 class="mt-1"> Beispiele </h2>
                        </div>
                        <div  class="col-12 h-50 center_items">
                          <button onclick="rotator2(this)" id="clickor" class="buttonMo text-white">
                            weitere infos
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="flip-card-back p-2 center_items">
                    <div class="">

                        <p><a href=""> Ein Chatsystem </a></p>
                        <p><a href=""> The Wheel of Fortune </a></p>
                        <p><a href=""> Galgenmann </a></p>

                      <button onclick="deRotate(this)" id="clickor2" class="buttonMo text-white">
                        zurück
                      </button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 center_items p-2">
              <div class="flip-card">
                <div class="flip-card-inner wcshadow">
                  <div class="flip-card-front">
                    <div class="h-100 w-100  center_items">
                      <div class="row h-100">
                        <div class="col-12 h-50 center_items">
                          <h2 class="mt-1"> SEO </h2>
                        </div>
                        <div  class="col-12 h-50 center_items">
                          <button onclick="rotator2(this)" id="clickor" class="buttonMo text-white">
                            weitere infos
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="flip-card-back p-2 center_items">
                    <div class="">
                      <p>Suchmaschinenoptimierung ist eines der wichtigsten Marketingwerkzeuge das es gibt heutzutage. Die technischen und inhaltlichen Sachverhalte können manipuliert werden um für Sie eine erheblich größere Reichweite zu erzeugen</p>
                      <button onclick="deRotate(this)" id="clickor2" class="buttonMo text-white">
                        zurück
                      </button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 center_items p-2">
              <div class="flip-card">
                <div class="flip-card-inner wcshadow">
                  <div class="flip-card-front">
                    <div class="h-100 w-100  center_items">
                      <div class="row h-100">
                        <div class="col-12 h-50 center_items">
                          <h2 class="mt-1">Projektarbeit / Freelance</h2>
                        </div>
                        <div  class="col-12 h-50 center_items">
                          <button onclick="rotator2(this)" id="clickor" class="buttonMo text-white">
                            weitere infos
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="flip-card-back p-2 center_items">
                    <div class="">
                      <p>benötigen Sie Hilfe bei einem Projekt? Fehlen Ihnen Personalressourcen? Melden sie sich über den Kontakt Button</p>
                      <button onclick="deRotate(this)" id="clickor2" class="buttonMo text-white">
                        zurück
                      </button>
                    </div>

                  </div>
                </div>
              </div>
              </div>
            <div class="col-6 center_items p-2">
              <div class="flip-card">
                <div class="flip-card-inner wcshadow">
                  <div class="flip-card-front">
                    <div class="h-100 w-100  center_items">
                      <div class="row h-100">
                        <div class="col-12 h-50 center_items">
                          <h2 class="mt-1"> Über uns </h2>
                        </div>
                        <div  class="col-12 h-50 center_items">
                          <button onclick="rotator2(this)" id="clickor" class="buttonMo text-white">
                            weitere infos
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="flip-card-back p-2 center_items">
                    <div class="">
                      <p>gegründet im Jahre 2021 haben wir uns vorgenommen alle Bereiche im Bereich des WorldWideWeb abzudecken. Wir sind eine Gruppe aus Experten aus dem Bereich IT, Social Media und Webmedien. </p>
                      <button onclick="deRotate(this)" id="clickor2" class="buttonMo text-white">
                        zurück
                      </button>
                    </div>

                  </div>
                </div>
              </div>
              </div>
            <div class="col-6 center_items p-2">
              <div class="flip-card">
                <div class="flip-card-inner wcshadow">
                  <div class="flip-card-front">
                    <div class="h-100 w-100  center_items">
                      <div class="row h-100">
                        <div class="col-12 h-50 center_items">
                          <h2 class="mt-1"> weitere IT-Diensleistungen </h2>
                        </div>
                        <div  class="col-12 h-50 center_items">
                          <button onclick="rotator2(this)" id="clickor" class="buttonMo text-white">
                            weitere infos
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="flip-card-back p-2 center_items">
                    <div class="">
                      <p>Jahrelange Erfahrung im Support von Desktop- und Webapplikationen wie Office365, Outlook, MS Word, Excel etc. Installationen, Einrichtungen von Geräten und vieles mehr. Wir vereinbaren im Vorfeld einen Preis und sollten wir das Anliegen nicht lösen können, mûssen sie auch nichts zahlen</p>
                      <button onclick="deRotate(this)" id="clickor2" class="buttonMo text-white">
                        zurück
                      </button>
                    </div>

                  </div>
                </div>
              </div>
              </div>
          </div>
          <div class="row footer bg-dark text-white fs-small" id="thirdrow">
            <div class="col-6 p-0 ">
               <p class="text-center align-self-center m-0">TKA Software System UG</p>
            </div>
            <div class="col-6 p-0 ">
               <p class="text-center align-self-center m-0">Norderstr. 33</p>
            </div>
            <div class="col-6 p-0">
               <p class="text-center m-0 ">info@tka-software-systems.com</p>
            </div>
            <div class="col-6 p-0 ">
               <p class="text-center m-0">01629722979</p>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- contactform -->
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
                    <input type="text" class="form-control input1 " name="surname" value="" required id="surname">
                  </div>
                </div>
                <div class="col-sm">
                  <div class="form-group">
                    <label for="lastname">Nachname</label>
                    <input type="text" class="form-control input1" name="lastname" value="" required id="lastname">
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
                <button type="submit" name="button" class="btn btn-success btn-block bg-test2 text-white">Absenden</button>
              </div>
            </form>
          </div>
          </div>
        </div>
      </div>
      <script  src="{{asset('js/main.js')}}"></script>
			<script>


				function rotator(button)
				{
					let cards = document.getElementsByClassName("flip-card-inner")
					for (card of cards) {
						card.style.transform ="rotateY(0deg)"
					}
					const clickor = button;
					var flipper = clickor.parentElement.parentElement.parentElement.parentElement.parentElement
					flipper.style.transform ="rotateY(180deg)"



				}
        // for mobile
				function rotator2(button)
				{
					let cards = document.getElementsByClassName("flip-card-inner")
					for (card of cards) {
						card.style.transform ="rotateY(0deg)"
					}
					const clickor = button;
					var flipper = clickor.parentElement.parentElement.parentElement.parentElement.parentElement
					var flipcard = clickor.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement
					flipper.style.transform ="rotateY(180deg)"
					flipcard.style.position ="absolute"
					flipcard.style.height ="60vh"
					flipcard.style.top ="15%"
					flipcard.style.left ="5%"
					flipcard.style.width ="90%"



				}
        function deRotate(button)
        {
          var clickor = button
          var flipper = clickor.parentElement.parentElement.parentElement
          var flipcard = clickor.parentElement.parentElement.parentElement.parentElement
          console.log(flipcard)
					flipper.style.transform ="rotateY(-0deg)"
					flipcard.style.position ="relative"
					flipcard.style.height ="105px"
					flipcard.style.width ="100%"
					flipcard.style.top ="0%"
					flipcard.style.left ="0%"
					flipcard.style.fontSize ="0.7em"
        }
				function myFunction(item) {
				 item.style.transform ="rotateY(0deg)"
				}
			</script>

	</body>
</html>
@endsection
