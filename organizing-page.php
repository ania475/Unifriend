<DOCTYPE HTML>
    <html>

    <head>
        <?php require_once 'headers.php'; ?>
    </head>

    <body style="height: -80%">
        <?php require_once 'nav-bar.php'; ?>

        <div class="page-content">

        <div id="unifriend-text-style"> 

        </div>
        <script>
        var i=0,text;
        text= 'Welcome.'

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
            <!--<h1 class="boring-header"> Welcome. </h1> -->

            <p class="blink-line" style="margin-left:40%"> | </p>
            <h2 class="boring-subheader"> Let's start organizing!</h2>
            <!--<img src="assets/face-behind-books.jpg" class="books"> -->
            <div class="buttons" data-aos="fade-up" data-aos-offset="-200" data-aos-duration="1000"
        data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
        data-aos-anchor-placement="top-center">
                <a href="http://localhost/phplogin/register.html" class="btn btn-success btn-lg active" role="button"
                    aria-pressed="true" style="background-color:#08f700">Register</a>
                <a href="http://localhost/phplogin/login.html" class="btn btn-success btn-lg active" role="button"
                    aria-pressed="true" style="background-color:#08f700">Login</a>
            </div>

        </div>

    <?php require_once 'aos-init.php'; ?>

    <footer> Ⓒ Unifriend 2022 </footer> 
    </body>

    </html>