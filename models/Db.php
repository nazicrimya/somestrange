<?php 
	class Db {
		const HOST = "somestrange";

		const DB_NAME = "db_something";

		const USER_NAME = "root";

		const USER_PASS = "";

		public static function getConnection() {
			return new PDO("mysql:host=" . self::HOST . ";dbname=" . self::DB_NAME, self::USER_NAME, self::USER_PASS);
		}
	}