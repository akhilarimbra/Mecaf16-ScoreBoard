<?php include '/dashboard/config.php';?>
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
    <div class="container-fluid">
        <div class="se-pre-con"></div>
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
                        <?php
                        include 'dashboard/config.php';
                        $sql = "SELECT * FROM `score` LIMIT 14";
                        $result = $connection->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <th class="black"><?php echo $row['event']; ?></th>
                                    <th class="red"><?php echo $row['red']; ?></th>
                                    <th class="blue"><?php echo $row['blue']; ?></th>
                                    <th class="green"><?php echo $row['green']; ?></th>
                                    <th class="orange"><?php echo $row['yellow']; ?></th>
                                </tr>
                            <?php }
                        } else {
                            echo "0 results";
                        }

                        $sql = "SELECT * FROM `score`";
                        $result = $connection->query($sql);

                        $scorered = 0;
                        $scoreblue = 0;
                        $scoregreen = 0;
                        $scoreyellow = 0;

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $scorered += $row['red'];
                                $scoreblue += $row['blue'];
                                $scoregreen += $row['green'];
                                $scoreyellow += $row['yellow'];
                            }
                        } else {
                            echo "0 results";
                        }
                        $connection->close();
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col s1">
                <a class="btn-floating btn-large waves-effect waves-light equal-width red"><?php echo $scorered ?></a>
                <a class="btn-floating btn-large waves-effect waves-light equal-width blue"><?php echo $scoreblue ?></a>
                <a class="btn-floating btn-large waves-effect waves-light equal-width green"><?php echo $scoregreen ?></a>
                <a class="btn-floating btn-large waves-effect waves-light equal-width yellow"><?php echo $scoreyellow ?></a>
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