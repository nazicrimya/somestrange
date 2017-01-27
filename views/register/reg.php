<?php 
	require_once '../../models/User.php'; 
	if (!empty($_POST['sub'])) { 
		User::userRegister($_POST['login'], $_POST['password']); 
		header("Location: /"); 
	} 
?>