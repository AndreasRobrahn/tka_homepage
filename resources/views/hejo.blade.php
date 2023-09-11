<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sql.js/1.8.0/sql-wasm.js">

        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sql.js/1.8.0/sql-wasm.wasm">

        </script> -->
        <style>
            body {
                font-family: 'Lato', sans-serif;
                display: flex;
            }
            .dFlex{
              display: flex;
            }
            .dBlock{
              display: block;
            }
            .btn{
              height: 30px;
              width: 130px;
              border-radius: 25px;
              box-sizing: 5px 5px black;
            }
            .inputfield
            {
              border-radius: 15px;
              border: 2px solid white;
              margin: 5px;
            }
            .column
            {
              width: 50vw;
              height: 100vh;
              background-color: #F9FAF9;
              display: flex;
              justify-content: center;
              align-items: center;
            }

            .graph {
              display: flex;
              position: relative;
              justify-content: center;
              align-items: center;
              margin: 50px 0;
              width: 150px;
              text-align: center;
            }

            .label {
              position: absolute;
              color: white;
              padding-top: 40%;
              padding-left: 5%;
              font-size: 1.5rem;
              z-index: 20;
              transform: rotate(-90deg);
              /* width: 60px; */
            }

            .pie {
              width: 350px;
              aspect-ratio: 1;
              position:absolute;
            }
            .pie:before,
            .pie:after {
              content:"";
              position:absolute;
              border-radius:50%;
            }
            .pie:before {
              inset:0;
              background: radial-gradient(farthest-side,var(--c) 98%,#0000) top/var(--b) var(--b) no-repeat,
                      conic-gradient(var(--c) calc(var(--p)*1%),#0000 0);
            }
            .no-round:before {
              background-size:0 0,auto;
            }
            .no-round:after {
              content:none;
            }
            .spin{

              animation-name: spin;
              animation-duration: 1000ms;
              animation-iteration-count: infinite;
              animation-timing-function: ease-in	;
              animation-direction: initial;
            }
            .spinner{
              transform: rotate(-90deg);
              z-index: 10;

            }
            .big{
              height: 150px;
              width: 150px;
            }
            @keyframes spin {
                from {
                    transform: rotate(-90deg);
                } to {
                    /* transform: rotate(290deg); */
                    transform: rotate(var(--deg));
                }
            }
        </style>
    </head>
    <body class="">

    <div class="column">
      <div class="dBlock">


      <div style="display: flex; justify-content: center; margin-top: 25px; height: 500px;">

        <div style="display: flex; justify-content: center">
          <div style="display: flex; flex-flow: wrap; justify-content: space-around; max-width: 400px; width: 100%">
                <div class="graph" id="graph" title="some title to display on hover">

                  <!-- <div class="pie no-round" style="--p:100;--c:#FC4819;--b:15px"><strong class="label">test1</strong></div> -->
                  <!-- <div class="pie no-round" style="--p:20;--c:#0089B0;--b:15px;rotate: 0.80turn"><strong class="label" style="rotate: -0.8turn">test2</strong></div>
                  <div class="pie no-round" style="--p:20;--c:#23B032;--b:15px;rotate: 0.6turn"><strong class="label" style="rotate: -0.6turn">test3</strong></div>
                  <div class="pie no-round" style="--p:20;--c:#23B0ff;--b:55px;rotate: 0.4turn"><strong class="label" style="rotate: -0.4turn">test4</strong></div>
                  <div class="pie no-round" style="--p:20;--c:#AAB0ff;--b:55px;rotate: 0.2turn"><strong class="label" style="rotate: -0.2turn">test5</strong></div> -->
                  <!-- <div class="pie no-round" style="--p:15;--c:#23EEff;--b:55px;rotate: 0.25turn"><strong class="label" style="rotate: -0.25turn">test4</strong></div> -->
                  <img class="spinner big" id="spinner" src="images/hejo2.png" alt="" style="position: absolute; height: 50px; width: 50px;">
                </div>
              </div>
            </div>
          </div>
          <div class="">
            gewahlt wurde <span id="winner"></span>
          </div>
          <button type="button" class="btn" onclick="spin()"name="button">spin</button>
        </div>
        </div>
        <div class="column">
          <div class="dBlock">
            <div class="">
              <input type="text" class="inputfield" id="playername" name="" value="">neuer spieler
            </div>
            <div class="">
              <input type="text" class="inputfield" name="" id="teamname" value="" onclick="">neues team
            </div>

            <button type="button" class="btn" onclick="newTeam()"name="button">spin</button>
          </div>

        </div>
    </body>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
    <script type="text/javascript">

    

    const randomBetween = (min, max) => min + Math.floor(Math.random() * (max - min + 1));
    let players = [0,'andi','test1','test2','test4'];
    let counter = 1;

    let quotient = 100/players.length;
    // console.log(players)

    players.forEach((element) =>{

      let r = randomBetween(0, 255);
      let g = randomBetween(0, 255);
      let b = randomBetween(0, 255);
      // let color = "rgb("+quotient * element+","+quotient * element+","+quotient * element+")";
      let color = `rgb(${r},${g},${b})`;
      // let div = document.createElement('div class="pie no-round" style="--p:'+quotient+';--c:'+color+';--b:15px"');
      let div = document.createElement('div');
      div.classList.add('pie');
      div.classList.add('no-round');
      div.classList.add('dFlex');
      let slice = 360/players.length
      if( players.indexOf(element) != 0){
        div.style.transform = 'rotate('+slice*counter+'deg)';
        counter ++;
      }


      div.style.setProperty('--p', quotient);
      div.style.setProperty('--c', color);
      div.style.setProperty('--b', '15px');
      div.style.setProperty('align-items', 'stretch');
      div.style.setProperty('justify-content', 'center');

      let label = document.createElement('strong');
      label.classList.add('label');
      label.innerHTML =''+element


      div.appendChild(label);
      document.getElementById("graph").appendChild(div);

      console.log({div});
    })
    // alert(5)xs
    function spin(){


        // let randomdegree = 1;
        // let randomdegree = Math.floor(Math.random() * 361)-70;

        let winner = Math.floor(Math.random() * players.length+1)
        let randomdegree = ((360/players.length) * winner)-135;
        // let randomdegree = 45;
        console.log(winner+"/"+randomdegree);
        // console.log(players.length);
        document.documentElement.style.setProperty('--deg', randomdegree+"deg");
        let spinner = document.getElementById("spinner");
        spinner.classList.add("spin");


        setTimeout(() => {
          spinner.style.transform=window.getComputedStyle(spinner).getPropertyValue("transform")||"initial";
          spinner.classList.remove("spin"); ; }, 1000);

        let finish = document.getElementById("winner")
        finish.innerHTML = ''+players[winner-1]
        // spinner.classList.remove("spin");

    }
    function newTeam(){


    }

    </script>
</html>
