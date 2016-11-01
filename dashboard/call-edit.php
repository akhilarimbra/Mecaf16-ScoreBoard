<?php
ob_start();
session_start();
require_once 'dbconnect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user']) ) {
    header("Location: index.php");
    exit;
}
// select loggedin users detail
$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Welcome - <?php echo $userRow['userEmail']; ?></title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/dashboard/call-add.php">Call Add</a></li>
                    <li><a href="/dashboard/call-edit.php">Call Edit</a></li>
                    <li><a href="/dashboard/call-delete.php">Call Delete</a></li>
                    <li><a href="/dashboard/score-add.php">Add Score</a></li>
                    <li><a href="/dashboard/score-delete.php">Delete Score</a></li>
                    <li><a href="/dashboard/winner-add.php">Winner Add</a></li>
                    <li><a href="/dashboard/winner-delete.php">Winner Delete</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $userRow['userEmail']; ?>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div id="wrapper">

        <div class="container">

            <div class="page-header">
                <h3>Mecaf 6th Edition | Admin Panel</h3>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <p class="lead">MEA Engineering College Annual Arts Festival - 2016</p>
                    <hr>
                </div>
            </div>

            <div class="row">
                <form action="/dashboard/call-edit-post.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Event Name</label>
                        <select class="form-control" name="event" id="event">
                            <?php
                            include 'config.php';
                            $sql = "SELECT * FROM `event`";
                            $result = $connection->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) { ?>
                                    <option><?php echo $row['event']; ?></option>
                                <?php }
                            } else {
                                echo "0 results";
                            }
                            $connection->close();
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Call</label>
                        <select name="call" id="call" class="form-control">
                            <option>First Call</option>
                            <option>Second Call</option>
                            <option>Final Call</option>
                            <option>Closed</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Scheduled Time</label>
                        <input type="time" class="form-control" name="time" id="exampleInputEmail1" placeholder="Enter score for green">
                    </div>

                    <button type="submit" class="btn btn-default">Edit event call</button>
                </form>
            </div>

        </div>

    </div>

    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    </body>
    </html>
<?php ob_end_flush(); ?>