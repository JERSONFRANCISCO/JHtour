<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>NOMBRE</title>
	
	<?php
	require_once("global.php");
    //<!-- Bootstrap core CSS -->
    echo "<link href='".__APP_DSG."vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>";
    //<!-- Custom fonts for this template -->
    echo "<link href='".__APP_DSG."vendor/fontawesome-free/css/all.min.css' rel='stylesheet' type='text/css'>";
    echo "<link href='".__google_fonts."?family=Montserrat:400,700' rel='stylesheet' type='text/css'>";
    echo "<link href='".__google_fonts."?family=Kaushan+Script' rel='stylesheet' type='text/css'>";
    echo "<link href='".__google_fonts."?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>";
    echo "<link href='".__google_fonts."?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>";
    //<!-- Custom styles for this template -->
   	echo "<link href='".__CSS_PATH."agency.css' rel='stylesheet'>";
	?>
</head>
	<?php
		include_once(__VWS_PATH."inicio.php");
	// <!-- Bootstrap core JavaScript -->
    echo "<script src='".__APP_DSG."vendor/jquery/jquery.min.js'></script>";
    echo "<script src='".__APP_DSG."vendor/bootstrap/js/bootstrap.bundle.min.js'></script>";
    //<!-- Plugin JavaScript -->
    echo "<script src='".__APP_DSG."vendor/jquery-easing/jquery.easing.min.js'></script>";
    //<!-- Contact form JavaScript -->
    echo "<script src='".__JS_PATH."jqBootstrapValidation.js'></script>";
    echo "<script src='".__JS_PATH."contact_me.js'></script>";
    //<!-- Custom scripts for this template -->
    echo "<script src='".__JS_PATH."agency.js'></script>";
	?>
  </body>
</html>