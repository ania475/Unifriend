<DOCTYPE HTML>
    <html>

    <head>
        <?php require_once 'headers.php';?>
    </head>


    <body
        style="background-image: url();background-position: center;background-repeat: no-repeat; background-size: cover;">
        <?php require_once 'nav-bar.php';?>

        <br> <br>

        <div class="game-instructions">
            <button class="btn btn-outline-dark"> <a href="fun-page.php"> Go back to previous page </a></button> <br>
            <br>

            <p> Instructions: <br>
                Player one uses the up and down arrows on the keyboard, while player two uses the W and S keys to move.
                - <a href="https://play.idevgames.co.uk/game/pong" target="alt"> Source </a>
            </p>

        </div>
        <!-- Play.iDevGames.co.uk Responsive Embed Code for PonG -->
        <script>
            window.onload = function () {
                var thegamelink = "https://play.idevgames.co.uk/embed/pong";
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
            <iframe id="embededGame" src="https://play.idevgames.co.uk/embed/pong" scrolling="no" seamless="seamless"
                frameBorder="0" style="position: absolute;top:0;left: 0;width: 100%;height: 100%;">Browser not
                compatible.</iframe>
        </div>
        <!-- End Embed Code -->