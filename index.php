<?php 
	session_start();
	require_once '/models/User.php'; 
	require_once '/models/News.php'; 
	
	if (!empty($_POST['sub'])) {
		User::userLogin($_POST['login'], $_POST['password']); 
		unset($_POST['login']);
		unset($_POST['password']);
		unset($_POST['sub']);
	}

	if (isset($_POST['exit'])) {
		User::exitUser();
		unset($_POST['exit']);
	}

	if (isset($_POST['post_news'])) {
		News::newPost($_POST['title'], $_POST['description'], $_SESSION['login']);
		unset($_POST['title']);
		unset($_POST['description']);
		unset($_POST['post_news']);
	}

	require_once '/views/layouts/header.php';
?>

	<div id="main_page">
		
	</div>

<?php
	require_once '/views/layouts/footer.php';
?>