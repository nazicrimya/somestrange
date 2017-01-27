<?php 
	session_start();
	require_once '/models/User.php'; 
	
	if (!empty($_POST['sub'])) 
		User::userLogin($_POST['login'], $_POST['password']); 

	if (isset($_POST['exit'])) 
		User::exitUser();

	require_once '/views/layouts/header.php';
?>

	<div id="main_page">
		
	</div>

<?php
	require_once '/views/layouts/footer.php';
?>