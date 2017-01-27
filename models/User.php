<?php 
	include_once 'Db.php';
	class User {
		public static function userRegister($login, $pass) {
			$db = Db::getConnection();
			$res = $db->exec("INSERT INTO de_user (LOGIN, PASSWORD, DATE) VALUES ('" . $login . "', '" . $pass . "', NOW())");
			if (!$res)
				return false;

			return true;
		}

		public static function userLogin($login, $pass) {
			$db = Db::getConnection();
			$res = $db->query("SELECT * FROM de_user WHERE LOGIN = '" . $login . "' AND PASSWORD = '" . $pass . "'");
			$qe = $res->fetch(PDO::FETCH_ASSOC);
			
			if (empty($qe))
				return false;

			$_SESSION['auth'] = true;
			$_SESSION['id'] = $qe['ID'];
			$_SESSION['login'] = $qe['LOGIN'];
			return true;
		}

		public static function isLogged() {
			return isset($_SESSION['auth']);
		}

		public static function exitUser() {
			session_unset();
		}
	}