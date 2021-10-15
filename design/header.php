<?php
session_start();
include '../connection/server.php';   

if(!isset($_SESSION['user'])) 

    { echo '<script> window.location="/design/index.php"; </script>';} 

?>

<!-- 
* Copyright 2018 Luis De Tomas
-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Planeamiento y Control</title>
	<link rel="stylesheet" href="/lib/css/normalize.css">
	<link rel="stylesheet" href="/lib/css/sweetalert2.css">
	<link rel="stylesheet" href="/lib/css/material.min.css">
	<link rel="stylesheet" href="/lib/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="/lib/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="/lib/css/main.css">
	
	<script>window.jQuery || document.write('<script src="/lib/js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="/lib/js/material.min.js" ></script>
	<script src="/lib/js/sweetalert2.min.js" ></script>
	<script src="/lib/js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="/lib/js/main.js" ></script>

<link rel="icon" type="image/png" href="/tools/img/logo__.png" />

	<style>
		
		.slider-holder
        {
            width: 800px;
            height: 400px;
            background-color: yellow;
            margin-left: auto;
            margin-right: auto;
            margin-top: 0px;
            text-align: center;
            overflow: hidden;
        }
        
        .image-holder
        {
            width: 2400px;
            background-color: white;
            height: 400px;
            clear: both;
            position: relative;
            
            -webkit-transition: left 2s;
            -moz-transition: left 2s;
            -o-transition: left 2s;
            transition: left 2s;
        }
        
        .slider-image
        {
            float: left;
            margin: 0px;
            padding: 0px;
            position: relative;
        }
        
        #slider-image-1:target ~ .image-holder
        {
            left: 0px;
        }
        
        #slider-image-2:target ~ .image-holder
        {
            left: -800px;
        }
        
        #slider-image-3:target ~ .image-holder
        {
            left: -1600px;
        }
        
        .button-holder
        {
            position: relative;
            top: -20px;
        }
        
        .slider-change
        {
            display: inline-block;
            height: 10px;
            width: 10px;
            border-radius: 5px;
            background-color: #0074a4;
        }


        div.a {
			font-size: 22px;		        	
        }

         div.b {
			color: #111111;		        	
        }
            i.c {
			color: #111111;		        	
        }



	</style>

</head>
