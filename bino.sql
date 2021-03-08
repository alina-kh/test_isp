-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.7.29-0ubuntu0.18.04.1 - (Ubuntu)
-- Операционная система:         Linux
-- HeidiSQL Версия:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных bino
CREATE DATABASE IF NOT EXISTS `bino` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `bino`;

-- Дамп структуры для таблица bino.form
CREATE TABLE IF NOT EXISTS `form` (
  `id_qw` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` mediumtext NOT NULL,
  `message` longtext NOT NULL,
  PRIMARY KEY (`id_qw`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы bino.form: ~7 rows (приблизительно)
/*!40000 ALTER TABLE `form` DISABLE KEYS */;
INSERT INTO `form` (`id_qw`, `name`, `email`, `subject`, `message`) VALUES
	(1, 'admin', 'admin@admin.ru', 'тест', 'asdfghjkl;\';\r\n"'),
	(2, 'user', 'user@user.ru', 'тест', 'lkjgfvdcxz'),
	(4, 'user', 'user@user.ru', '123456', 'dfdfdfdfdfd'),
	(5, 'admin', 'admin@admin.ru', '33333', 'jmhnbvcx'),
	(6, 'admin', 'admin@admin.ru', 'тест', 'dfghjkl;lkjhgf'),
	(7, 'admin', 'admin@admin.ru', 'тест', '1111111111'),
	(8, 'a', 'a@a.ru', 'qqqq', 'xcvbnm,kl;\'');
/*!40000 ALTER TABLE `form` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
