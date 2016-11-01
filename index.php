<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Scoreboard</title>
      <!-- Compiled and minified CSS -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
      <script>
          //paste this code under head tag or in a seperate js file.
          // Wait for window load
          $(window).load(function() {
              // Animate loader off screen
              $(".se-pre-con").fadeOut("slow");;
          });
          $(document).ready(function () {
              // Handler for .ready() called.
              window.setTimeout(function () {
                  location.href = "/call.php";
              }, 5000);
          });
      </script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <!-- Compiled and minified JavaScript -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="se-pre-con"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col s2">
                <img src="/img/red.png" alt="" class="img-responsive"> <br> <br>
                <img src="/img/blue.png" alt="" class="img-responsive"> <br>
                <img src="/img/green.png" alt="" class="img-responsive"> <br>
                <img src="/img/yellow.png" alt="" class="img-responsive">
            </div>
            <div class="col s9">
                <table class="responsive-table striped">
                    <thead>
                    <tr>
                        <th class="black">Latest Onstage Events Scoreboard</th>
                        <th class="red">Targaryens</th>
                        <th class="blue">Sttarrks</th>
                        <th class="green">Baratheons</th>
                        <th class="orange">Lannisters</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th class="black">Flock Dance</th>
                        <th class="red">5</th>
                        <th class="blue">3</th>
                        <th class="green">2</th>
                        <th class="orange">1</th>
                    </tr>
                    <tr>
                        <th class="black">Flock Dance</th>
                        <th class="red">5</th>
                        <th class="blue">3</th>
                        <th class="green">2</th>
                        <th class="orange">1</th>
                    </tr>
                    <tr>
                        <th class="black">Flock Dance</th>
                        <th class="red">5</th>
                        <th class="blue">3</th>
                        <th class="green">2</th>
                        <th class="orange">1</th>
                    </tr>
                    <tr>
                        <th class="black">Flock Dance</th>
                        <th class="red">5</th>
                        <th class="blue">3</th>
                        <th class="green">2</th>
                        <th class="orange">1</th>
                    </tr>
                    <tr>
                        <th class="black">Flock Dance</th>
                        <th class="red">5</th>
                        <th class="blue">3</th>
                        <th class="green">2</th>
                        <th class="orange">1</th>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col s1">
                <a class="btn-floating btn-large waves-effect waves-light equal-width red">234</a>
                <a class="btn-floating btn-large waves-effect waves-light equal-width blue">234</a>
                <a class="btn-floating btn-large waves-effect waves-light equal-width green">234</a>
                <a class="btn-floating btn-large waves-effect waves-light equal-width yellow">234</a>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <script>
        // Wait for window load
        $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
  </body>
</html>