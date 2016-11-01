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
                <form action="/dashboard/score-add-post.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Event Name</label>
                        <input type="text" class="form-control" name="event" id="exampleInputEmail1" placeholder="Enter event name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Targeryens</label>
                        <input type="number" class="form-control" name="red" id="exampleInputEmail1" placeholder="Enter score for red">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Starks</label>
                        <input type="number" class="form-control" name="blue" id="exampleInputEmail1" placeholder="Enter score for blue">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Lannisters</label>
                        <input type="number" class="form-control" name="green" id="exampleInputEmail1" placeholder="Enter score for green">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Barbarethons</label>
                        <input type="number" class="form-control" name="yellow" id="exampleInputEmail1" placeholder="Enter score for yellow">
                    </div>
                    <button type="submit" class="btn btn-default">Add event score</button>
                </form>
            </div>

        </div>

    </div>

    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    </body>
    </html>
<?php ob_end_flush(); ?>