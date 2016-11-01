<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Announcements</title>
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
                location.href = "/result.php";
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
<div class="container">
    <div class="row">
        <div class="col s12">
            <h3 class="align-middle">EVENT DETAILS</h3>
            <table class="responsive-table striped">
                <thead>
                <tr>
                    <th class="blue">Event Name</th>
                    <th class="blue">Call</th>
                    <th class="blue">ETC</th>
                    <th class="blue">Scheduled Time</th>
                </tr>
                </thead>
                <tbody>
                <tr class="red blink_me">
                    <th>Mohiniaattam</th>                
                    <th>Final Call</th>
                    <th>59 Mins 24 Secs</th>
                    <th>---</th>
                </tr>

                <tr class="green">
                    <th>Mohiniaattam</th>
                    <th>First Call</th>
                    <th>59 Mins 24 Secs</th>
                    <th>---</th>
                </tr>


                <tr class="orange">
                    <th>Mohiniaattam</th>
                    <th>Second Call</th>
                    <th>59 Mins 24 Secs</th>
                    <th>---</th>
                </tr>


                <tr class="black">
                    <th>Mohiniaattam</th>
                    <th>Closed</th>
                    <th>---</th>
                    <th>12:20 A.M</th>
                </tr>
                </tbody>
            </table>
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