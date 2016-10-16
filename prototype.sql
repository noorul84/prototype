-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.5124
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for prototype
CREATE DATABASE IF NOT EXISTS `prototype` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `prototype`;

-- Dumping structure for table prototype.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table prototype.migrations: ~2 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_10_12_000000_create_users_table', 1),
	('2014_10_12_100000_create_password_resets_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table prototype.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table prototype.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table prototype.surveys
CREATE TABLE IF NOT EXISTS `surveys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date_apply` datetime DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `a1` double(3,2) DEFAULT NULL,
  `a2` double(3,2) DEFAULT NULL,
  `a3` double(3,2) DEFAULT NULL,
  `a4` double(3,2) DEFAULT NULL,
  `a5` double(3,2) DEFAULT NULL,
  `ax` double(3,2) DEFAULT NULL,
  `b1` double(3,2) DEFAULT NULL,
  `bx` double(3,2) DEFAULT NULL,
  `c1` double(3,2) DEFAULT NULL,
  `c2` double(3,2) DEFAULT NULL,
  `c3` double(3,2) DEFAULT NULL,
  `cx` double(3,2) DEFAULT NULL,
  `d1` double(3,2) DEFAULT NULL,
  `d2` double(3,2) DEFAULT NULL,
  `d3` double(3,2) DEFAULT NULL,
  `d4` double(3,2) DEFAULT NULL,
  `d5` double(3,2) DEFAULT NULL,
  `d6` double(3,2) DEFAULT NULL,
  `d7` double(3,2) DEFAULT NULL,
  `d8` double(3,2) DEFAULT NULL,
  `d9` double(3,2) DEFAULT NULL,
  `dx` double(3,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table prototype.surveys: ~2 rows (approximately)
/*!40000 ALTER TABLE `surveys` DISABLE KEYS */;
INSERT INTO `surveys` (`id`, `user_id`, `date_apply`, `name`, `a1`, `a2`, `a3`, `a4`, `a5`, `ax`, `b1`, `bx`, `c1`, `c2`, `c3`, `cx`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `d8`, `d9`, `dx`, `created_at`, `updated_at`) VALUES
	(1, 1, '2016-10-16 14:22:10', 'fgfdgfdg', 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, '2016-10-16 06:09:10', '2016-10-16 06:09:10'),
	(2, 1, '2016-10-16 14:22:13', '5fdg dsfdsfdsf', 3.50, 4.50, 3.50, 2.20, 3.00, 3.34, 3.80, 3.80, 3.43, 1.00, 1.00, 1.81, 2.50, 1.00, 1.00, 4.50, 3.50, 4.00, 3.00, 4.50, 4.50, 3.17, '2016-10-16 06:15:56', '2016-10-16 06:15:56'),
	(3, 3, '2016-10-16 06:27:32', 'testing 123', 1.75, 1.00, 1.50, 1.00, 1.00, 1.25, 2.00, 2.00, 1.14, 1.00, 1.00, 1.05, 3.00, 1.00, 1.33, 1.00, 1.00, 1.00, 2.50, 1.00, 1.00, 1.43, '2016-10-16 06:27:32', '2016-10-16 06:27:32'),
	(4, 1, '2016-10-16 07:02:40', 'asdsadd', 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.80, 1.80, 1.57, 1.00, 1.00, 1.19, 2.50, 1.33, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.20, '2016-10-16 07:02:40', '2016-10-16 07:02:40'),
	(5, 1, '2016-10-16 07:12:35', 'assdsad', 1.50, 1.00, 1.00, 1.00, 1.00, 1.10, 1.00, 1.00, 1.29, 1.00, 1.00, 1.10, 1.00, 1.33, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.04, '2016-10-16 07:12:35', '2016-10-16 07:12:35'),
	(6, 1, '2016-10-16 07:23:28', 'survey 1', 1.50, 1.00, 1.00, 1.00, 1.00, 1.10, 1.80, 1.80, 1.71, 1.00, 1.00, 1.24, 3.00, 1.33, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1.26, '2016-10-16 07:23:28', '2016-10-16 07:23:28');
/*!40000 ALTER TABLE `surveys` ENABLE KEYS */;

-- Dumping structure for table prototype.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table prototype.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', '$2y$10$WzTzXZrp0jxLBlc54Irdi.CuCqwzhjOi75hqsJ7Y5KV.19s7hbSC2', '5EAnRN2zAipaFoOb41eMkheUbsWhOd38vjBMrjhGk77aHMMRAiVNCxiqvev8', '2016-10-11 10:27:28', '2016-10-16 07:40:43'),
	(2, 'test', 'test@gmail.com', '$2y$10$5QtpTyGJkh3hVJZ0ifuf5.ZLB3NCzPFqnQA21PZd/8x6PBT2dK9sq', 'Sp1fQF2xG6GVyvr7MpH6kyVouXDrc7DEa15sZA8fz50YOXcm0D5p3CiV42SF', '2016-10-11 13:38:26', '2016-10-11 13:41:42'),
	(3, 'wedsfdsf11', 'dhg@sdsd.sadsa', '$2y$10$ptAX9R7dPMt5DPU/QVwuu.pW1QLSWu8PmQhYTDnhHQZIr68kpFHT2', 'JCQ6zYsmzxFGh7Cok3YZon1wEEGPQOyvIhnNcj0szyroFcariFDVJWHd5tk4', '2016-10-16 06:26:29', '2016-10-16 06:35:47');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
