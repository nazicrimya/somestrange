-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 27 2017 г., 07:40
-- Версия сервера: 5.5.45
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `db_something`
--

-- --------------------------------------------------------

--
-- Структура таблицы `de_user`
--

CREATE TABLE IF NOT EXISTS `de_user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `LOGIN` varchar(255) COLLATE utf8_bin NOT NULL,
  `PASSWORD` varchar(255) COLLATE utf8_bin NOT NULL,
  `DATE` date NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `LOGIN` (`LOGIN`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=40 ;

--
-- Дамп данных таблицы `de_user`
--

INSERT INTO `de_user` (`ID`, `LOGIN`, `PASSWORD`, `DATE`) VALUES
(1, 'admin', 'admin', '2017-01-27'),
(2, 'asdas', 'ldasladslsdl', '2017-01-27'),
(3, ':login', ':password', '2017-01-27'),
(24, 'asdads', 'asdasd', '2017-01-27'),
(32, 'asddasadsasd', 'adsadssd', '2017-01-27'),
(34, 'asdasdasd', 'adsasdd', '2017-01-27'),
(36, 'asddasasdasdvasf', 'asddasasd', '2017-01-27'),
(38, 'asdasd', 'asdasdasdasdasd', '2017-01-27'),
(39, 'admkadsmkdas', 'asdasknasdnklasd', '2017-01-27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
