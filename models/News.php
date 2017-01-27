<?php 
	include_once 'Db.php';
	class News {
		const LIMIT_OF_NEWS = 3;
		public static function getLatestNews() {
			$db = Db::getConnection();
			$res = $db->query("SELECT * FROM de_news ORDER BY ID DESC LIMIT " . self::LIMIT_OF_NEWS);

			if (!$res) return false;

			return $res->fetchAll(PDO::FETCH_ASSOC);
		}

		public static function newPost($title, $description, $author) {
			if (isset($title) && isset($description) && isset($author)) {

				$db = Db::getConnection();
				$res = $db->exec("INSERT INTO de_news (TITLE, DESCRIPTION, DATE, AUTHOR) 
					VALUES ('" . $title . "', '" . $description . "', NOW(), '" . $author . "')");

				if (!$res)
					return false;

				return true;

			} else { 
				return false; 
			}
		}

		public static function getCountNews() {
			$db = Db::getConnection();
			$res = $db->query("SELECT COUNT(*) FROM de_news");	
			$arr = $res->fetch(PDO::FETCH_NUM);
			return $arr[0];
		}
	}