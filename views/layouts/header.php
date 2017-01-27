<?php 
	require_once './models/User.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/template/js/map.js"></script>
	<link rel="stylesheet" type="text/css" href="/template/css/main.css">
</head>
<body>

	<nav class="navbar navbar-default" id="nav">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="/" class="navbar-brand">Cock</a>
		</div>
		<div class="collapse navbar-collapse" id="main-menu" >
			<ul class="nav navbar-nav">
				<li><a href="#" id="main">Main</a></li>
				<li><a href="#" id="about">About</a></li>
				<li><a href="#" id="post">New post</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php if (!User::isLogged()): ?>
				<li><a href="#" id="login">Login</a></li>
				<li><a href="#" id="register">Register</a></li>
				<?php else: ?>
				<li><a href="#" id="exit">Exit</a></li>
				<?php endif; ?>
			</ul>
		</div>
	</nav>