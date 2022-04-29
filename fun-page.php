<DOCTYPE HTML>
  <html>

  <head>
    <?php require_once 'headers.php'; ?>
    <script src="bubbleBurst.js"> </script>
    <script src="sound-off.js"> </script>
    <!--<script src="snowflakes.js"> </script>  -->
    <!--<script src="clock.js"> </script>  -->
  </head>

  <body class="fun-bcg">
    
    <?php require_once 'nav-bar.php'; ?>

    <!-- BUBBLES ANIMATION -->




    <div class="black-bubble" id="black-bubble" onClick='bubbleBurst()'>
      <img src="res/images/png/black-bubble.png">
    </div>

    <!-- <div class="blue-bubble"> 
        <img src="res/images/png/blue-bubble.png"> 
      </div> -->



    <img src="res/images/png/sound-off.png" class="sound-off" onClick="soundOff()" id="sound-off">

    <div class="page-content">

      <div id="unifriend-text-style">

      </div>

      <script>
        var i = 0,
          text;
        text = 'Nice.'

        function typing() {
          if (i < text.length) {
            document.getElementById("unifriend-text-style").innerHTML += text.charAt(i);
            i++;
            setTimeout(typing, 200);
            var loop = True

          }
        }
        typing();
      </script>

      <!-- <h1 style="margin-top: 10%"> Nice.</h1> -->
      <p class="blink-line" style="margin-left:15%"> |</p>
      <h2 class="boring-subheader" style="margin-bottom:-12%"> You are in the right place</h2>
      <img src="res/images/png/unifriend-logo.png" style="width: 10%; height: 25%" class="logo">
      
      <!--<script src="grid.js"> </script> -->
      <!-- <p class="fun-paragraph" data-aos="fade-in" data-aos-duration="2000" data-aos-easing="ease-out"
        data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center"> <i> What can I do here?
        </i> <br> Unifriend knows the importance of study breaks and has
        therefore picked a selection of games for you to
        play.
        They are great for keeping your mind active while also helping bring down your stress levels so you can better
        concentrate once you resume your study session. </p> -->

        <h2 class="h2-animated" style="color:#5b6574" data-aos="fade-up" data-aos-duration="2000" data-aos-easing="ease-in-out"
        data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center"> What can you do here? </h2> <!-- left here to animate --> 
        <div class="shadow p-3 mb-5 bg-body rounded bg-white" style="width: 60%; margin-left: 20%" data-aos="fade-up" data-aos-duration="2000" data-aos-easing="ease-in-out"
        data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center"> Unifriend knows the importance of study breaks and has
        therefore picked a selection of things for you to do. <br> 
        Play one of the games below <br>
        Feel like having a laugh? Click on the chat icon on the right to hear some jokes from Unifriend <br>
       Feel like talking? Click on the link below to chat to Unifriend</div>



      <h2 style="color: #5b6574" data-aos="fade-up" data-aos-duration="2000" data-aos-easing="ease-in-out"
        data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center"> Feeling like you want to
        chat for a bit? <br> <a href="chat-page.php" style="color: #5b6574; font-size:30px" class="chat-link"> Click me. </a> </h2>



      <!-- JOKES MESSANGER CHAT BOT -->
      <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
      <df-messenger intent="WELCOME" chat-title="Jokes" agent-id="486d3d86-386b-444c-8ba9-30d7f565a42f"
        language-code="en"></df-messenger>
      <h2 style="margin-bottom:-5%; font-weight: 800; color: #5b6574" data-aos="fade-up" data-aos-duration="2000"
        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
        data-aos-anchor-placement="top-center"> TAKING A BREAK FROM STUDYING? <br> Choose one of
        the games below to unwind. </h2>


      <div class="align">
        <div class="card-container" data-aos="zoom-in-right" data-aos-duration="1000" data-aos-easing="ease-in-out"
          data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center">
          <div class="card-vertical">
            <div class="card-front">
              <article class="card-front-content">
                <h1 style="color: white"> Pixel Pool </h1>
                <img src="res/images/png/pixelpool-icon.png">
                <article>
            </div>
            <div class="card-back">
              <article class="card-back-content">
                <h1 style="color: white">A great game to unwind</h1>
                <button class="flip-card-button"> <a href="pixelated-pool.php"> Play</a></button>

                <article>
            </div>
          </div>
        </div>
        <div class="card-container" data-aos="zoom-in-right" data-aos-delay="100" data-aos-duration="1000"
          data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
          data-aos-anchor-placement="top-center">
          <div class="card-horizontal">
            <div class="card-front">
              <article class="card-front-content">
                <h1 style="color: white">Fruit Ninja</h1>
                <img src="res/images/png/fruitninja-icon.png">
                <article>
            </div>
            <div class="card-back card-back-hr">
              <article class="card-back-content">
                <h1 style="color: white">Play this game to destress</h1>

                <button class="flip-card-button"> <a href="fruit-ninja.php"> Play</a></button>

                <article>
            </div>
          </div>
        </div>


        <div class="card-container" data-aos="zoom-in-right" data-aos-delay="200" data-aos-duration="1000"
          data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
          data-aos-anchor-placement="top-center">
          <div class="card-vertical">
            <div class="card-front">
              <article class="card-front-content">
                <h1 style="color: white">Quash Board </h1>
                <img src="res/images/png/quashboard-icon.png">
                <article>
            </div>
            <div class="card-back">
              <article class="card-back-content">
                <h1 style="color: white">A game to keep your mind challenged while on break</h1>

                <button class="flip-card-button"> <a href="quash-board.php"> Play</a></button>
                <article>
            </div>
          </div>
        </div>
        <div class="card-container" data-aos="zoom-in-right" data-aos-delay="300" data-aos-duration="1000"
          data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
          data-aos-anchor-placement="top-center">
          <div class="card-horizontal">
            <div class="card-front">
              <article class="card-front-content">
                <h1 style="color: white">Pong</h1>
                <img src="res/images/png/pong-icon.png">
                <article>
            </div>
            <div class="card-back card-back-hr">
              <article class="card-back-content">
                <h1 style="color: white">The perfect game to play with your study buddies while on break</h1>
                <button class="flip-card-button"> <a href="pong.php"> Play</a> </button>
                <article>
            </div>
          </div>
        </div>

      </div>



      <audio src="res/sounds/fun-music.mp3" type="audio/mpeg" id="sound" loop="loop" autoplay="autoplay">
      </audio>
      <script>
        var audio = document.getElementById("sound");
        audio.volume = 0.2;
        
      </script>
      <?php require_once 'aos-init.php';?>
      <footer> Ⓒ Unifriend 2022 </footer>
  </body>

  </html>