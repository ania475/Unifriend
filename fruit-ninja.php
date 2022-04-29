<DOCTYPE HTML>
    <html>

    <head>
        <?php require_once 'headers.php';?>
        <script src="seconds.js"> </script>
    </head>


    <body
        style="background-image: url();background-position: center;background-repeat: no-repeat; background-size: cover;">
        <?php require_once 'nav-bar.php';?>

        <br> <br>
        <div class="game-instructions">
            <button class="btn btn-outline-info"> <a href="fun-page.php"> Go back to previous page </a></button> <br>
            <br>

            <p> Instructions: <br>
                "Cut those fruits before they drop down to the screen and be careful not to run your knife through the
                bomb which will create explosion" - <a href="https://play.idevgames.co.uk/game/fruit-ninja" target="alt"> Source </a> </p>
        </div>
        <!-- Play.iDevGames.co.uk Responsive Embed Code for Fruit Ninja -->

        <script>
            window.onload = function () {
                var thegamelink = "https://play.idevgames.co.uk/embed/fruit-ninja";
                var ref = document.referrer;
                var theurl = document.referrer;
                ref = ref.substring(ref.indexOf("://") + 3);
                ref = ref.split("/")[0];
                if (ref == "my-ga.me") {
                    theurl = "true"
                } else {
                    theurl = "false"
                }
                document.getElementById("embededGame").src = thegamelink + "/" + theurl + "?url=" + window.location
                    .href;
            }
        </script>
        <div style="position: relative;height: 0;overflow: hidden;padding-bottom: 56.25%;">
            <iframe id="embededGame" src="https://play.idevgames.co.uk/embed/fruit-ninja" scrolling="no"
                seamless="seamless" frameBorder="0"
                style="position: absolute;top:0;left: 0;width: 100%;height: 100%;">Browser not compatible.</iframe>
        </div>
        <!-- End Embed Code -->

        Seconds spent on page:&nbsp; <input id="seconds-spent" size="6" readonly="" /><br />
        Minutes spent on page:&nbsp; <input id="minutes-spent" size="6" readonly="" /><br />