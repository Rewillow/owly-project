-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              8.0.32 - MySQL Community Server - GPL
-- S.O. server:                  Win64
-- HeidiSQL Versione:            12.4.0.6665
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dump della struttura di tabella owly.courses
CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` json NOT NULL,
  `spots` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dump dei dati della tabella owly.courses: ~6 rows (circa)
INSERT INTO `courses` (`id`, `title`, `subject`, `spots`, `created_at`, `updated_at`) VALUES
	(1, 'Explorers', '["Science"]', 20, '2023-04-12 09:45:41', '2023-04-17 11:24:07'),
	(2, 'Eco-Heroes', '["Science", "Mathematics", "Art"]', 15, '2023-04-12 09:45:41', '2023-04-12 09:45:41'),
	(3, 'Creators-Lab', '["Art", "Science", "Geo"]', 12, '2023-04-12 09:45:41', '2023-04-15 12:45:28'),
	(4, 'Mathmagicians', '["Mathematics"]', 10, '2023-04-12 09:45:41', '2023-04-12 09:45:41'),
	(5, 'Code Wizards', '["Informatics", "Art", "Mathematics"]', 25, '2023-04-12 09:45:41', '2023-04-15 13:38:18'),
	(6, 'Time Travel', '["History", "Geography", "Art"]', 12, '2023-04-12 09:45:41', '2023-04-12 09:45:41');

-- Dump della struttura di tabella owly.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dump dei dati della tabella owly.failed_jobs: ~0 rows (circa)

-- Dump della struttura di tabella owly.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dump dei dati della tabella owly.migrations: ~7 rows (circa)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(16, '2023_03_31_154808_matter_table', 1),
	(57, '2023_04_04_143727_create_courses_table', 2),
	(68, '2014_10_12_000000_create_users_table', 3),
	(69, '2014_10_12_100000_create_password_reset_tokens_table', 3),
	(70, '2019_08_19_000000_create_failed_jobs_table', 3),
	(71, '2019_12_14_000001_create_personal_access_tokens_table', 3),
	(72, '2023_04_08_094125_courses_table', 3),
	(73, '2023_04_12_114214_courses__table', 4),
	(74, '2023_04_15_180038_subjects_table', 5);

-- Dump della struttura di tabella owly.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dump dei dati della tabella owly.password_reset_tokens: ~0 rows (circa)

-- Dump della struttura di tabella owly.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dump dei dati della tabella owly.personal_access_tokens: ~0 rows (circa)

-- Dump della struttura di tabella owly.subjects
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dump dei dati della tabella owly.subjects: ~14 rows (circa)
INSERT INTO `subjects` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(14, 'Geography', '2023-04-17 06:22:08', '2023-04-17 06:28:27'),
	(15, 'Politics', '2023-04-17 06:55:49', '2023-04-17 06:55:49'),
	(16, 'Physic', '2023-04-17 07:19:19', '2023-04-17 07:19:19'),
	(17, 'Math', '2023-04-17 11:03:06', '2023-04-17 11:03:07'),
	(18, 'Science', '2023-04-18 07:03:09', '2023-04-18 07:03:09'),
	(19, 'Art', '2023-04-18 07:04:22', '2023-04-18 07:04:22'),
	(20, 'Astrology', '2023-04-18 07:06:22', '2023-04-18 07:06:22'),
	(21, 'Biology', '2023-04-18 07:06:50', '2023-04-18 07:06:50'),
	(22, 'Physical education', '2023-04-18 07:07:23', '2023-04-18 07:07:23'),
	(23, 'Literature', '2023-04-18 07:07:50', '2023-04-18 07:07:50'),
	(24, 'English', '2023-04-18 07:09:24', '2023-04-18 07:09:24'),
	(25, 'French', '2023-04-18 07:10:07', '2023-04-18 07:10:07'),
	(26, 'Astronomy', '2023-04-18 07:10:46', '2023-04-18 07:10:46'),
	(27, 'Spanish', '2023-04-18 07:18:02', '2023-04-18 07:18:02');

-- Dump della struttura di tabella owly.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dump dei dati della tabella owly.users: ~8 rows (circa)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Lucile Erdman', 'tristin.schmidt@example.org', '2023-04-12 09:34:38', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Xi3JH1ybcQ', '2023-04-12 09:34:38', '2023-04-12 09:34:38'),
	(2, 'Kasey Conn', 'karine.franecki@example.org', '2023-04-12 09:34:38', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PyWwtWiJVp', '2023-04-12 09:34:38', '2023-04-12 09:34:38'),
	(3, 'Kyla Weber', 'darian.wiegand@example.net', '2023-04-12 09:38:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oaI8eWhRot', '2023-04-12 09:38:53', '2023-04-12 09:38:53'),
	(4, 'Ms. Myrtice Bayer', 'nigel.sipes@example.net', '2023-04-12 09:38:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'guGHXN62mj', '2023-04-12 09:38:53', '2023-04-12 09:38:53'),
	(5, 'Cletus Windler', 'melba.nienow@example.com', '2023-04-12 09:39:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'DXPcgslL43', '2023-04-12 09:39:51', '2023-04-12 09:39:51'),
	(6, 'Napoleon Stamm', 'kprice@example.com', '2023-04-12 09:39:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rw2Fk0eV60', '2023-04-12 09:39:51', '2023-04-12 09:39:51'),
	(7, 'Anabel Wyman', 'linnie30@example.net', '2023-04-12 09:43:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cP0F4R7v8X', '2023-04-12 09:43:57', '2023-04-12 09:43:57'),
	(8, 'Mrs. Cleora Lind Jr.', 'osborne.bechtelar@example.org', '2023-04-12 09:43:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'quBJeVkhbN', '2023-04-12 09:43:57', '2023-04-12 09:43:57'),
	(9, 'Edmund Kihn', 'bradley.grant@example.com', '2023-04-12 09:45:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RpJzKas7SO', '2023-04-12 09:45:41', '2023-04-12 09:45:41'),
	(10, 'Miss Zoie Predovic IV', 'nnitzsche@example.com', '2023-04-12 09:45:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pGPfhnkHss', '2023-04-12 09:45:41', '2023-04-12 09:45:41'),
	(11, 'Louisa Bradtke III', 'kerluke.tyrel@example.net', '2023-04-15 16:09:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xtXNKuj5Xg', '2023-04-15 16:09:32', '2023-04-15 16:09:32'),
	(12, 'Yasmin Monahan', 'margarett43@example.org', '2023-04-15 16:09:32', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ITfH2k1DIg', '2023-04-15 16:09:32', '2023-04-15 16:09:32');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
