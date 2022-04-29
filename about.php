<DOCTYPE HTML>
    <html>

    <head>
        <?php require_once 'headers.php'; ?>

    </head>


    <body
        style="background-image: url('res/images/png/library_transparent2.png'); background-position: center ;background-repeat: no-repeat; background-size: cover;">
        <?php require_once 'nav-bar.php'; ?>

        <div class="page-content">
            <div id="about-text">

            </div>

            <script>
                var i = 0,
                    text;
                text = 'About.'

                function typing() {
                    if (i < text.length) {
                        document.getElementById("about-text").innerHTML += text.charAt(i);
                        i++;
                        setTimeout(typing, 300);

                    }
                }
                typing();
            </script>
            <!--<h1 class="boring-header"> About. </h1> -->

            <p class="blink-line" style="margin-left:23%"> | </p>
            <h2 class="boring-subheader"> Who is Unifriend? </h2>
            <!--<img src="assets/face-behind-books.jpg" class="books"> -->
            <div style="margin-bottom:10%" class="text" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800"
                data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false"
                data-aos-anchor-placement="top-center">
                Unifriend is a digital creation meant to assist students through the struggles of everyday life.
                <br>
                In the home page, the user has the option of choosing how they want to use the website based on their
                current mood. This offers flexibility and provides a more personal and tailored experience to each user.
                Unifriend can be either a fun assistant or a simple daily planner for events, tasks, lists.
                <br> It is your choice 🙂
            </div>
        </div>

        </div>
        <?php require_once 'aos-init.php';?>
        <footer> Ⓒ Unifriend 2022 </footer> 
    </body>

    </html>