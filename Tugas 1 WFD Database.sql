-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table db_tugas1_wfd.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_tugas1_wfd.categories: ~10 rows (approximately)
INSERT INTO `categories` (`id`, `name`, `slug`, `color`, `created_at`, `updated_at`) VALUES
	(1, 'Manhwa', 'Manhwa', 'fuchsia', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(2, 'Manga', 'Manga', 'lime', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(3, 'Manhua', 'Manhua', 'red', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(4, 'Novel', 'Novel', 'violet', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(5, 'Light Novel', 'LN', 'sky', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(6, 'Anime', 'Anime', 'teal', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(7, 'Games', 'Games', 'orange', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(8, 'Programming', 'Programming', 'emerald', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(9, 'Food', 'Food', 'pink', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(10, 'Politics', 'Politics', 'slate', '2025-03-08 08:16:07', '2025-03-08 08:16:07');

-- Dumping structure for table db_tugas1_wfd.failed_jobs
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

-- Dumping data for table db_tugas1_wfd.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table db_tugas1_wfd.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_tugas1_wfd.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2025_01_19_132004_create_categories_table', 1),
	(6, '2025_01_20_131517_create_posts_table', 1);

-- Dumping structure for table db_tugas1_wfd.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_tugas1_wfd.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table db_tugas1_wfd.personal_access_tokens
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

-- Dumping data for table db_tugas1_wfd.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table db_tugas1_wfd.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` bigint unsigned NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`),
  KEY `post_author_id` (`author_id`),
  KEY `post_category_id` (`category_id`),
  CONSTRAINT `post_author_id` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`),
  CONSTRAINT `post_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_tugas1_wfd.posts: ~10 rows (approximately)
INSERT INTO `posts` (`id`, `title`, `slug`, `author_id`, `category_id`, `body`, `created_at`, `updated_at`) VALUES
	(1, 'Rojiura De Hirotta V1', 'Rojiura-De-Hirotta-V1', 1, 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nam commodi alias suscipit distinctio temporibus rem similique illum itaque, debitis repellat vel. Earum qui rerum sunt quaerat. Laborum, numquam eius?', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(2, 'Majo No Tabi Tabi V3', 'Majo-No-Tabi-Tabi-V3', 2, 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nam commodi alias suscipit distinctio temporibus rem similique illum itaque, debitis repellat vel. Earum qui rerum sunt quaerat. Laborum, numquam eius?', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(3, 'Kage No Jitsuryokusha V4', 'Kage-No-Jitsuryokusha-V4', 7, 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nam commodi alias suscipit distinctio temporibus rem similique illum itaque, debitis repellat vel. Earum qui rerum sunt quaerat. Laborum, numquam eius?', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(4, 'Heroine Survival V2', 'Heroine-Survival-V2', 3, 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nam commodi alias suscipit distinctio temporibus rem similique illum itaque, debitis repellat vel. Earum qui rerum sunt quaerat. Laborum, numquam eius?', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(5, 'Naze Ka S Kyuu V4', 'Naze-Ka-S-Kyuu-V4', 4, 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nam commodi alias suscipit distinctio temporibus rem similique illum itaque, debitis repellat vel. Earum qui rerum sunt quaerat. Laborum, numquam eius?', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(6, 'Hangyakusha Toshite V1', 'Hangyakusha-Toshite-V1', 9, 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nam commodi alias suscipit distinctio temporibus rem similique illum itaque, debitis repellat vel. Earum qui rerum sunt quaerat. Laborum, numquam eius?', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(7, 'Silent Witch V1', 'Silent-Witch-V1', 6, 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nam commodi alias suscipit distinctio temporibus rem similique illum itaque, debitis repellat vel. Earum qui rerum sunt quaerat. Laborum, numquam eius?', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(8, 'Classroom Elite Year 2 V11', 'Classroom-Elite-Year-2-V11', 8, 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nam commodi alias suscipit distinctio temporibus rem similique illum itaque, debitis repellat vel. Earum qui rerum sunt quaerat. Laborum, numquam eius?', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(9, 'Silent Witch V4 After', 'Silent-Witch-V4-After', 6, 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nam commodi alias suscipit distinctio temporibus rem similique illum itaque, debitis repellat vel. Earum qui rerum sunt quaerat. Laborum, numquam eius?', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(10, 'Danjou Yuujou V4', 'Danjou Yuujou V4', 5, 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nam commodi alias suscipit distinctio temporibus rem similique illum itaque, debitis repellat vel. Earum qui rerum sunt quaerat. Laborum, numquam eius?', '2025-03-08 08:16:07', '2025-03-08 08:16:07');

-- Dumping structure for table db_tugas1_wfd.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_tugas1_wfd.users: ~9 rows (approximately)
INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Kabochamasuku', 'Kabochamasuku', 'KMasuku@gmail.com', '2025-03-08 08:16:07', '$2y$10$uogsHhcyPYy2PHvoj8cVK.sgvIsvqbTLk6uUMeuXReqN6NKN5Sr3S', 'tNJup5Xuak', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(2, 'Jogi Shiraishi', 'Jogi Shiraishi', 'JShira@gmail.com', '2025-03-08 08:16:07', '$2y$10$cUXbJr6N42gEwRw0r2zmEe2yI4Rb5bbc49f.z6OsPRkAnMXBtIkqK', 'UaVCmPlmKx', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(3, 'Harunohi Biyori', 'Harunohi Biyori', 'HBiyori@gmail.com', '2025-03-08 08:16:07', '$2y$10$XtfBYFggegrQafLvs54ve.HVuHesRdryyZ8fLW099E.mfYyRFIJyC', 'f36UQoixhI', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(4, 'Konatsu Wakioka', 'Konatsu Wakioka', 'KWaki@gmail.com', '2025-03-08 08:16:07', '$2y$10$.2CCeGB0/mnuehGUWuZ9Lu9dYVW/sYYIkxBPR6eydn/WOg4d20J2.', 'pKiT35qJvJ', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(5, 'Nana Nanana', 'Nana Nanana', 'Nanana@gmail.com', '2025-03-08 08:16:07', '$2y$10$27XYzFo71mQctCnZwopt3O9oUFkb0ZFB6l5tihqkexXpr.aoyhfPa', '29kIxHXgQd', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(6, 'Matsuri Isora', 'Matsuri Isora', 'Matsora@gmail.com', '2025-03-08 08:16:07', '$2y$10$Swif5S2cSAdXC0FNl4Qs5eUDj73dSBmFWzSreAalUx5n1K1gKeK.G', 'Wow9TKaOz6', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(7, 'Daisuke Aizawa', 'Daisuke Aizawa', 'Daizawa@gmail.com', '2025-03-08 08:16:07', '$2y$10$yiYsx9jpu9ZjD1L3w7oBYOXhU4mPzBc86H9KdktD2JRUDt2pYXoXW', 'sI78ICJUER', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(8, 'Kinugasa Shougo', 'Kinugasa Shougo', 'Kinugasa@gmail.com', '2025-03-08 08:16:07', '$2y$10$hEyg9XbKTMSNX9u5nKuGgOuz4cw1/Q6S94nnget4rxH1M4yGClUQG', 'Eeg6GbPpQ6', '2025-03-08 08:16:07', '2025-03-08 08:16:07'),
	(9, 'Yuto Sagami', 'Yuto Sagami', 'YSagami@gmail.com', '2025-03-08 08:16:07', '$2y$10$687QdwLVJSWeBONFRW2ZBuO6v5Qjj.jx3RL6Ou9YqI8MuvzgGPSzi', 'vfSrF3TJ3m', '2025-03-08 08:16:07', '2025-03-08 08:16:07');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
