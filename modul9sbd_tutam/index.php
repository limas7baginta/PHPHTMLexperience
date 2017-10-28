
<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="author" content="Darien Jonathan"/>
<meta name="copyright" content="Darien Jonathan Copyright (c) 2015"/>
<link rel="shortcut icon" href="assets/img/favicon.ico" />
<link rel="stylesheet" href="assets/css/foundation.css"/>
<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
<!--Font-->
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'><!--Lato-->
<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'><!--Merriweather-->
<link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'><!--Raleway (JPCC)-->
</head>
<title>Login/Sign Up</title>
<style>
body {
	font-family:'Lato',serif;
}
#failed{
	color: red;
	display: none;
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
			<span class='header'>
				TUGAS TAMBAHAN PRAKTIKUM MODUL 9.1<br>PHP &amp; DATABASE (MYSQL) INTERACTIONS (1)<br>
				<?php
				/**
					todo:
					Implementasikan variabel Session di sini.
					Buka session dengan session_start();.
					Jika !isset($_SESSION['..']) berarti belum login, jika sebaliknya berarti telah login.
				*/
				?>
			</span>
		</div>
	</header>
	<div style="background: rgba(0,0,0,0); border-top:1px black solid; height:100%">
		<div class="row" id="loginform">
			<div class="large-6 large-centered columns">
				<form data-abide method="post" action="account/login.php">
				 	<fieldset>
				    	<legend id="formtitle">Login Form</legend>
					    <!--
					    	Todo: Implementasikan login form anda di sini. FORMAT BEBAS. JIKA INGIN, BISA MENGGUNAKAN TEMPLATE DIBAWAH INI:
					    	<label>Label TextField
					    		<input .....>
					    	</label>
					    -->
				    	<p id="failed"></p>
				    	<p id="registrationlink">Don't Have An Account?<a href="#"> Click Here to Signup</a></p>
				  	</fieldset>
				</form>
			</div>
		</div>

		<div class="row" id="registrationform">
			<div class="large-6 large-centered columns">
				<form data-abide method="post" action="account/signup.php">
				 	<fieldset>
				    	<legend id="formtitle">Signup Form</legend>
					    <!--
					    	Todo: Implementasikan signup form anda di sini. FORMAT BEBAS. JIKA INGIN, BISA MENGGUNAKAN TEMPLATE DIBAWAH INI:
					    	<label>Label TextField
					    		<input .....>
					    	</label>
					    -->
					    <p id="loginlink">Already Have An Account?<a href="#"> Click Here to Login</a></p>
				  	</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
<script src="assets/js/vendor/jquery.js"></script>
<script src="assets/js/foundation.min.js"></script>
<script>
	$(document).foundation({
		abide: {
            patterns: {
                password: /^(.){8,}$/
            },
            timeout : 500
        }
	});
	$(document).ready(function(){
		$('#registrationform').hide();
		$('#registrationlink').click(function(){
			$('#loginform').hide();
			$('#registrationform').show();
		})
		$('#loginlink').click(function(){
			$('#registrationform').hide();
			$('#loginform').show();
		})
	})
</script>
</html>