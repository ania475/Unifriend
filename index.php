<DOCTYPE HTML>
  <html>

  <head>
    <?php require_once 'headers.php'; ?>
  </head>

  <body style="background-color:#f8f9fb">
    <?php require_once 'nav-bar.php'; ?>


    <div class="page-content">

      <div class="header">
        <img src="res/images/jpg/wallpaper_2.jpg" alt="unifriend" class="wallpaper">
        <!--<img src="assets/student_struggling.jpg"  alt="student" style="margin-left: 40%; width:40%"> -->
        <!-- old image was called wallpaper.jpg-->
        <p class="top-text"> WELCOME TO YOUR <br> PERSONAL UNI ASSISTANT <br>
        </p>
        <p class="sub-text">
          <b> Organise your events. Make plans. Make lists. Want a study break? Play a game! </b> </p>
        <p class="bold-sub-text"> All in one place.
        </p>
      </div>


      <!-- <img src="res/images/png/line.png" style="width: 100%; height: 20%; margin-top: -7%"> -->

      <div id="unifriend-text-style"> 

      </div> 

      <script>
        var i=0,text;
        text= 'Unifriend.'

        function typing() {
          if(i<text.length) {
            document.getElementById("unifriend-text-style").innerHTML += text.charAt(i);
            i++;
            setTimeout(typing, 200);
            var loop=True
            
          }
        }
        typing();
        </script> 

      
        <!--<h1 style="margin-top: 20%"> Unifriend. </h1> -->
      

      <p class="blink-line" style="margin-left: 42%; margin-bottom: 20%"> | </p>



      <div class="main-text" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000"
        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
        data-aos-anchor-placement="top-center">
        <img src="res/images/jpg/student-books-2.jpg" class="student_bg">
        <h3 style="color: white; font-weight: 800; font-size: 27px"> GETTING YOU THROUGH DAILY LIFE AS A STUDENT </h3>
        <ul>
          <li> 🗨️ <b> Organise your schedule </b> </li>
          <li> 🗨️ <b> Make lists and planners </b> </li>
          <li> 🗨️ <b> Create events </b></li>
          <li> 👁️‍🗨️ <b> See things to do when you need a break from studying </b></li>
        </ul>
        <p style="font-size: 30px; margin-left: 2%; color: white; font-weight: 800"> Scroll below to start!</p>
        <br> <br>
      </div>

      <br> <br> <br>
      
    

      <div style="margin-top: -20%" data-aos="fade-up" data-aos-offset="400" data-aos-delay="50"
        data-aos-duration="2000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
        data-aos-anchor-placement="top-center">

        <h2> What would you like to do today? </h2>

        <!-- FLIP CARD-->

        <div class="row" id="skip">
          <div class="left">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <h1> LET'S PLAY</h1>
                  <img src="res/images/png/emoji-party.png">
                </div>
                <div class="flip-card-back">
                  <p style="font-size: 22px; float: center; color: white">I am taking a study break and want to do something interesting</p>
                  <button> <a href="fun-page.php"> Show me! </a></button>
                </div>
              </div>
            </div>
          </div>

          <div class="right">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <h1 style="color: white"> LET'S ORGANISE </h1>
                  <img src="res/images/png/books-icon.png" style="width:60%; height:60%; margin-top:1em">
                </div>
                <div class="flip-card-back">
                  <p style="font-size: 22px; float: center">I just want to plan my day and my tasks</p>
                  <button> <a href="organizing-page.php">Take me there </a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <footer> Ⓒ Unifriend 2022 </footer> 


      <br> <br>
    
      <?php require_once 'aos-init.php';?>

  </body>