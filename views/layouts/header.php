<?php 
	require_once './models/User.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="/template/js/map.js"></script>
	<link rel="stylesheet" type="text/css" href="/template/css/main.css">
</head>
<body>
	<div id="nav">
		<ul>
			<li><a href="#" id="main">Main</a></li>
			<li><a href="#" id="about">About</a></li>
			<?php if (!User::isLogged()): ?>
				<li><a href="#" id="login">Login</a></li>
				<li><a href="#" id="register">Register</a></li>
			<?php else: ?>
				<li><a href="#" id="exit">Exit</a></li>
			<?php endif; ?>
		</ul>
	</div>