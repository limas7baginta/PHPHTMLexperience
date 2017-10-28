<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="author" content="Darien Jonathan"/>
<meta name="copyright" content="Darien Jonathan Copyright (c) 2015"/>
<link rel="stylesheet" href="assets/css/foundation.css"/>
<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
<!--Font-->
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'><!--Lato-->
<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'><!--Merriweather-->

<link rel="stylesheet" type="text/css" href="assets/css/dataTables.foundation.css"><!--DataTables-->
<script src="assets/js/vendor/modernizr.js"></script>
</head>
<style>

body{
	font-family:'Lato',serif;
}
h4{
	font-family:'Lato',serif;
	margin:20px;
}
.row {
	max-width:3000px;
}
#failed{
	color: red;
	display: none;
}
.icon{
	width:25px;
	height:25px;
	display: block;
	margin: 0 auto;
}
.table{
	margin-top:30px;
}
#notification{
	display:none;
	text-align:right;
	color:red;
}
.forms{
	text-align:center;
	margin-top:20px;
}
input {
	width:125px !important;
	display:inline !important;
	margin-left:5px !important;
	margin-right:25px !important;
}
.button {
	width:100px;
	border: none;
	background: none;
	font-family:'Lato',serif;
	font-size:17.5px !important;
	text-decoration:underline;
	color:blue;
}
	.button:hover{
		border: none;
		background: none;	
		color:black;	
	}
h5{
	font-family: 'Lato',serif;
}
#newsearch{
	text-align:center;
}
.header{
	float:right;
	margin-right:25px;
	margin-top:15px;
}
.session{
	background-color: rgba(0,0,255,0.25);
	padding:2px 10px 2px 10px;
}
</style>

<body>
	<header>
		<div style="margin:15px">
			<img src="assets/img/logo.jpg" height="150px">
			<span class='header'>PRAKTIKUM MODUL 9.1<br>PHP &amp; DATABASE (MYSQL) INTERACTIONS (1)
			<?php
			session_start();
			echo "<div class='session'>";
				/**
					todo:
					Implementasikan variabel Session di sini.
					Buka session dengan session_start();.
					Jika !isset($_SESSION['..']) (Tidak ada variabel session), berarti belum login,
					jika sebaliknya berarti telah login. Berikan link untuk logout (Link: <a href="program php logout.php">Link</a>)
					Gunakan if-else.
				*/
			echo "</div>";
			?>
			</span>
		</div>
	</header>
	<div style="background: rgba(0,0,0,0); border-top:1px black solid; height:100%">