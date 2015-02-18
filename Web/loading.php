<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mi Health</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" background="blurcity.jpg">
    <!-- Intro Header -->
    <header class="intro" background="blurcity.jpg">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="loading.gif" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ 
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>

<?php
session_start();
if(isset($_SESSION[$login])){
    header("Refresh: 5; location:notfound.html");
}
    echo file_get_contents("http://172.17.163.78:3000/");
    $isUserFound = file_get_contents("http://172.17.163.78:3000/");
    if ($isUserFound) {
        echo "go to users info page";
        echo "<script type='text/javascript'>window.location.href = 'http://localhost:8888/deltaHacks/infopage.php';</script>";
    } else {
        echo "go to error page";
        echo "<script type='text/javascript'>window.location.href = 'http://localhost:8888/deltaHacks/notfound.html';</script>";
    }
    ?>