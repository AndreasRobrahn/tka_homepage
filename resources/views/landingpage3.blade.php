@extends('templates.template_Page_with_SEO')

@section('refresh')
 <meta http-equiv="refresh" content="120">
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
	.flip-card-front, .flip-card-back {
	  position: absolute;
	  width: 100%;
	  height: 100%;
	  -webkit-backface-visibility: hidden; /* Safari */
	  backface-visibility: hidden;
	}

	/* Style the front side (fallback if image is missing) */
	.flip-card-front {

	  color: black;
	}

	/* Style the back side */
	.flip-card-back {

	  color: black;
    background-color: rgba(200, 200, 205, 0.8);
	  transform: rotateY(180deg);
	}
	body{
		height: 100vh;
		width: 100vw;
		overflow: hidden;
    font-size: 1.1em;


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
		height: 90px;
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

		height: 85vh;
		/* background: rgb(111,173,207); */
		/* background: linear-gradient(0deg, rgba(111,173,207,0.9738270308123249) 18%, rgba(224,224,224,1) 67%, rgba(245,246,246,1) 90%); */
	}
	#thirdrow
	{
		/* background-image: url(https://media4.giphy.com/media/VapauFsEHWCt2/giphy.gif?cid=ecf05e47j7ae6w6z8mrop1kjzg4n7e1ac1a47mq9zxaka9bl&ep=v1_gifs_search&rid=giphy.gif&ct=g); */
		background-repeat: no-repeat;
		background-position: center center;
		background-size: 100% 100%;
		height: 10vh;
		text-shadow: 5px 5px 5px black;;
	}

	#content{
		position: absolute;
		height: 70vh;
		border-radius: 15px;

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
			height: auto;
			width: 100vw;
			overflow-Y: scroll;
			overflow-X: scroll;
		}
		#toprow{
			height: 150px;

		}
		#secondrow{

			height: 850px;

		}
		#thirdrow
		{

			height: 10vh;
			text-shadow: 5px 5px 5px black;;
		}

		#content{
			position: absolute;
			height: 100%;
			border-radius: 15px;

		}
		.flip-card
		{
			height: 500px;
		}
		.flip-card-inner
		{
			margin-left: 0px;
			margin-top: 0px;
		}
	}
	</style>
	<body class="center_items">
    <div class="background-body">

    </div>
		<div class="container" id="content" style="">
			<div class="row h-100 p-2" >
				<div class="col-sm-4 center_items p-2 ">
				<div class="flip-card">
					  <div class="flip-card-inner wcshadow">
						<div class="flip-card-front">
						 <div class="h-100 w-100  center_items">
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

						<div class="flip-card-back overflow-scroll center_items">

						  <p>Benötigen Sie eine Webseite? Vielleicht eine komplexere Applikation mit Datenbankanbindung? Kein Problem! Melden Sie sich einfach </p>

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

						<div class="flip-card-back overflow-scroll">
						  <p>Ein Auftritt in den sozialen Medien ist notwendig für ein gezieltes Marketing Ihrer Zielgruppe </p>
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
									<h2> Webdesign </h2>
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
						  <h2>Webdesign</h2>
						  <p>Eine ansprechende, zielgruppenorientierte Webseite benötigt Konzepte, Erfahrung und </p>
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
						  <h2>Beispiele</h2>
						  <p><a href=""> ein Chatsystem </a></p>
						  <p><a href=""> the wheel of fortune </a></p>

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

						<div class="flip-card-back overflow-scroll p-2">
						  <p>Suchmaschinenoptimierung ist heute wohl eines der wichtigsten Werkzeuge für die um zB Leads zu erzeugen oder Mitarbeiter zu werben. </p>

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
						  <p>Industrie 4.0 steht vor der Türe. Wo wollen Sie sich positionieren. Es gibt mittlerweile viefältige Software um wiederholende Tätigkeiten zu automatisieren. </p>
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
						  <p>benötigen Sie Hilfe bei einem Projekt? Melden sie sich über den Kontakt Button</p>
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
					<div class="col-sm-4 center_items p-2">
						<div class="flip-card">
					  <div class="flip-card-inner wcshadow">
						<div class="flip-card-front">
						 <div class="h-100 w-100  center_items">
							<div class="row h-100">
								<div class="col-12 h-75 center_items">
									<h2> weitere IT Diensleistungen </h2>
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
						  <p>Jahrelange Erfahrung im Support von Desktop- und Webapplikationen wie Office365, Outlook, MS Word, Excel etc. Installationen, Einrichtungen von Geräten und vieles mehr. Wir vereinbaren im Vorfeld einen Preis und sollte ich das Anliegen nicht lösen können, mûssen sie auch nichts zahlen</p>

						</div>
					  </div>
					</div>
					</div>
			</div>
		</div>
			<div class="container-fluid h-100x">
				<div class="row" id="toprow">
					<div class="col center_items" id="">
						Investieren sie in die Zukunft
					</div>
					<div class="col center_items position-relative overflow-hidden" style="">
						<div class="shiningeffect" style="position: absolute; background-color: rgba(255,255,255,0.3); width: 100%;">
						</div>
						<img src="{{asset('/Firmenlogo/Firmenlogo.jpeg')}}" class="logo" alt="Logo TKA Systems">
					</div>
					<div class="col center_items" id="">
						<p><a href="tel:+491629722979">
              <i class="fa fa-mobile-phone" style="font-size:28px;color:black;"></i>
            </a></p>
					</div>
				</div>
				<div class="row" id="secondrow">

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
				</div><
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
				function myFunction(item) {
				 item.style.transform ="rotateY(0deg)"
				}
			</script>

	</body>
</html>
@endsection
