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
                location.href = "/index.php";
            }, 5000);
        });
    </script>
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
<div class="container">
    <div class="se-pre-con"></div>
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
                <?php
                include 'dashboard/config.php';
                $sql = "SELECT * FROM `event` ORDER BY `order` DESC LIMIT 14";
                $result = $connection->query($sql);
                $currentTime = localtime(time(), true)['tm_hour'].":".localtime(time(), true)['tm_min'].":".
                    localtime(time(), true)['tm_sec'];

                if ($result->num_rows > 0) {
                    // output data of each row
                    $i = 1;
                    while($row = $result->fetch_assoc()) {

                        switch ($row['eventcall']) {
                            case 'First Call':
                                echo "<tr class='green'>";
                                break;
                            case 'Second Call':
                                echo "<tr class='orange'>";
                                break;
                            case 'Final Call':
                                echo "<tr class='red blink_me'>";
                                break;
                            case 'Closed':
                                echo "<tr class='black'>";
                                break;
                        } ?>
                            <th><?php echo $row['event'] ?></th>
                            <th><?php echo $row['eventcall'] ?></th>
                        <?php if ($row['eventcall'] != 'Closed') { ?>
                            <div id="hms"><?php echo $row['time'] ?></div>
                            <th id="countdown"></th>
                        <?php } else { ?>
                            <th>---</th>
                        <?php } ?>
                            <th><?php echo date("g:i a", strtotime($row['time'])) ?></th>
                        </tr>
                        <?php $i++; ?>
                    <?php }
                } else {
                    echo "0 results";
                }

                $connection->close();
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    var startTime = document.getElementById('hms').innerHTML;
    var pieces = startTime.split(":");
    var time = new Date();
    var currentTime = new Date();
    time.setHours(pieces[0] - currentTime.getHours());
    time.setMinutes(pieces[1] - currentTime.getMinutes());
    time.setSeconds(pieces[2] - currentTime.getSeconds());
    var timed = new Date(time.valueOf());
    var newtime2 = timed.toTimeString().split(" ")[0];
    document.getElementById('countdown').innerHTML=newtime2;
    function count() {
        var startTime = document.getElementById('countdown').innerHTML;
        var pieces = startTime.split(":");
        var time = new Date();
        time.setHours(pieces[0]);
        time.setMinutes(pieces[1]);
        time.setSeconds(pieces[2]);

        var timedif = new Date(time.valueOf() - 1000);
        var newtime = timedif.toTimeString().split(" ")[0];
        document.getElementById('countdown').innerHTML=newtime;
        setTimeout(count, 1000);

    }
    count();
</script>
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