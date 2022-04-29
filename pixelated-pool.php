<DOCTYPE HTML>
  <html>

  <head>
    <?php require_once 'headers.php';?>
    <script src="alarm.js"> </script>

  </head>


  <body
    style="background-image: url();background-position: center;background-repeat: no-repeat; background-size: cover;">
    <?php require_once 'nav-bar.php';?>

    <br> <br>
    <div class="game-instructions">
      <button class="btn btn-outline-success"> <a href="fun-page.php"> Go back to previous page </a></button> <br> <br>

      <p> Instructions: <br>
        "Aim by holding the left mouse button and charge power with the right mouse button."
         - <a href="https://play.idevgames.co.uk/game/pixel-pool" target="alt"> Source </a> </p>
    </div>

    <!-- Play.iDevGames.co.uk Responsive Embed Code for Pixel Pool -->
    <script>
      window.onload = function () {
        var thegamelink = "https://play.idevgames.co.uk/embed/pixel-pool";
        var ref = document.referrer;
        var theurl = document.referrer;
        ref = ref.substring(ref.indexOf("://") + 3);
        ref = ref.split("/")[0];
        if (ref == "my-ga.me") {
          theurl = "true"
        } else {
          theurl = "false"
        }
        document.getElementById("embededGame").src = thegamelink + "/" + theurl + "?url=" + window.location.href;
      }
    </script>
    <div style="position: relative;height: 0;overflow: hidden;padding-bottom: 56.25%;">
      <iframe id="embededGame" src="https://play.idevgames.co.uk/embed/pixel-pool" scrolling="no" seamless="seamless"
        frameBorder="0" style="position: absolute;top:0;left: 0;width: 100%;height: 100%;">Browser not
        compatible.</iframe>
    </div>
    <!-- End Embed Code -->