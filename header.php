<?php
$path =  "../";
?>

<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=$pagedesc?>">
    <meta name="author" content="Jason Carroll from Midtown Church in Austin, TX">
    <meta name="google-site-verification" content="4o1XtsxnOqdo8Tr5-bXpTw86-FzPBz9Zkfvx_vFwA0A" />

    <title><?=$pagetitle;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=$path?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=$path?>css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=$path?>font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans+Mono' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and App Icon -->
    <link rel="icon" href="<?=$path?>img/favicon.png" sizes="16x16 32x32 64x64 128x128 256x256">
    <link rel="apple-touch-icon-precomposed" href="<?=$path;?>img/appicon.png">

    <!-- Home Screen App Name -->
    <meta name="apple-mobile-web-app-title" content="Worship Files">

    <!-- Facebook Open Graph Tags -->
    <meta property="og:title" content="<?=$pagetitle;?>"/>
    <meta property="og:site_name" content="The Worship Files"/>
    <meta property="og:url" content="<?=curPageURL();?>"/>
    <meta property="og:description" content="<?=$pagedesc;?>"/>
    <meta property="og:image" content="http://www.theworshipfiles.com/img/appicon.png"/>

    <!-- jQuery Version 1.11.0 -->
	<!--<script src="js/jquery-1.11.0.js"></script>-->
	<script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.1.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=$path?>js/bootstrap.min.js"></script>

</head>

<body id="page-top" class="index">
    <!-- Navigation -->
    <nav class="navbar navbar-default <?=$navclass;?> navbar-fixed-top">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navmain">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="<?=$path;?>"><img src="<?=$path?><?=$logosrc;?>" class="img-responsive" alt="The Worship Files - Worship Chords and Lyrics"></a>
            </div>

            <div class="collapse navbar-collapse" id="navmain">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="<?=$path;?>song-list">Songs</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?=$path;?>#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?=$path;?>#resources">Resources</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?=$path;?>#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
