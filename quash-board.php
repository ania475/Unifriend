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
            <button class="btn btn-outline-danger"> <a href="fun-page.php"> Go back to previous page </a></button> <br>
            <br>

            <p> Instructions: <br>
                "You need to remove all ball from the board except one to solve the puzzle.
                Drag the ball to next ball for knocking them off the board. <br>
                You cannot drag into neighboring ball. You cannot drag a ball directly off the board."
                - <a href="https://play.idevgames.co.uk/game/quash-board" target="alt"> Source </a> </p>
        </div>
        <!-- Play.iDevGames.co.uk Responsive Embed Code for Quash Board -->
        <script>
            window.onload = function () {
                var thegamelink = "https://play.idevgames.co.uk/embed/quash-board";
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
            <iframe id="embededGame" src="https://play.idevgames.co.uk/embed/quash-board" scrolling="no"
                seamless="seamless" frameBorder="0"
                style="position: absolute;top:0;left: 0;width: 100%;height: 100%;">Browser not compatible.</iframe>
        </div>
        <!-- End Embed Code -->