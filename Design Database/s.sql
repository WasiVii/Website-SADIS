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


CREATE DATABASE IF NOT EXISTS `db_sadis` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_sadis`;

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Judul` varchar(45) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `Isi_Berita` longtext COLLATE utf8mb3_esperanto_ci,
  `Tanggal_Publikasi` date DEFAULT NULL,
  `Staff_id` int NOT NULL,
  `photo` varchar(50) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Berita_Staff1_idx` (`Staff_id`),
  CONSTRAINT `fk_Berita_Staff1` FOREIGN KEY (`Staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_esperanto_ci;

-- Dumping data for table db_sadis.berita: ~9 rows (approximately)
INSERT INTO `berita` (`id`, `Judul`, `Isi_Berita`, `Tanggal_Publikasi`, `Staff_id`, `photo`, `created_at`, `updated_at`) VALUES
	(5, 'PPDB Tahun Ajaran 2023/2024', 'Lorem PPDB Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', '2023-05-25', 2, '1684979969.jpg', '2023-05-24 18:59:29', '2023-05-25 20:28:07'),
	(6, 'Wisuda Kelulusan Siswa Angkatan 2020', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', '2023-05-25', 2, '1684980665.jpg', '2023-05-24 19:11:05', '2023-05-25 20:31:44'),
	(8, 'Lomba Siswa Berprestasi Antar Kelas', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', '2023-05-25', 1, '1684980732.png', '2023-05-24 19:12:12', '2023-05-24 19:12:12'),
	(9, 'Ujian Nasional Tahun 2023', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', '2023-05-25', 1, '1684980788.jpg', '2023-05-24 19:13:08', '2023-05-24 19:13:08'),
	(10, 'Anniversary SADIS School ke-34', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', '2023-05-25', 1, '1684997123.png', '2023-05-24 23:45:23', '2023-05-24 23:45:23');


CREATE TABLE IF NOT EXISTS `ekstrakulikuler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nama_Ekstrakulikuler` varchar(45) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `Deskripsi` varchar(500) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `photo` varchar(45) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_esperanto_ci;

INSERT INTO `ekstrakulikuler` (`id`, `Nama_Ekstrakulikuler`, `Deskripsi`, `photo`, `created_at`, `updated_at`) VALUES
	(6, 'Sepak Bola', 'ini adalah extrakulikuler sepakbola', '1684984407.png', '2023-05-24 20:13:27', '2023-05-24 20:13:27'),
	(7, 'Basket', 'ini adalah extrakulikuler basket', '1684984436.png', '2023-05-24 20:13:56', '2023-05-24 20:13:56'),
	(8, 'Badminton', 'ini adalah extrakulikuler badminton', '1684984469.png', '2023-05-24 20:14:29', '2023-05-24 20:14:29'),
	(9, 'Renang', 'ini adalah extrakulikuler renang', '1684984495.png', '2023-05-24 20:14:55', '2023-05-24 20:14:55'),
	(10, 'Sepeda', 'ini adalah extrakulikuler sepeda', '1684984582.png', '2023-05-24 20:16:22', '2023-05-24 20:16:22'),
	(11, 'Lari', 'ini adalah extrakulikuler lari', '1684984672.png', '2023-05-24 20:17:52', '2023-05-24 20:17:52'),
	(12, 'Panahan', 'ini adalah extrakulikuler panahan', '1684984786.png', '2023-05-24 20:18:20', '2023-05-24 20:19:46'),
	(13, 'Voli', 'ini adalah extrakulikuler voli', '1684984980.png', '2023-05-24 20:23:00', '2023-05-24 20:23:00'),
	(14, 'Bisbol', 'ini adalah extrakulikuler bisbol', '1684985025.png', '2023-05-24 20:23:45', '2023-05-24 20:23:45');

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

-- Dumping data for table db_sadis.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table db_sadis.guru
CREATE TABLE IF NOT EXISTS `guru` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nama_Guru` varchar(45) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `Jenis_Kelamin` varchar(45) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `Alamat` varchar(45) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `Nomor_Telepon` varchar(45) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `Users_id` int NOT NULL,
  `Kelas_id` int DEFAULT NULL,
  `Mata_Pelajaran_id` int DEFAULT NULL,
  `photo` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Guru_Users1_idx` (`Users_id`),
  KEY `fk_Guru_Kelas1_idx` (`Kelas_id`),
  KEY `fk_Guru_Mata_Pelajaran1_idx` (`Mata_Pelajaran_id`),
  CONSTRAINT `fk_Guru_Kelas1` FOREIGN KEY (`Kelas_id`) REFERENCES `kelas` (`id`),
  CONSTRAINT `fk_Guru_Mata_Pelajaran1` FOREIGN KEY (`Mata_Pelajaran_id`) REFERENCES `mata_pelajaran` (`id`),
  CONSTRAINT `fk_Guru_Users1` FOREIGN KEY (`Users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_esperanto_ci;

-- Dumping data for table db_sadis.guru: ~7 rows (approximately)
INSERT INTO `guru` (`id`, `Nama_Guru`, `Jenis_Kelamin`, `Alamat`, `Nomor_Telepon`, `Users_id`, `Kelas_id`, `Mata_Pelajaran_id`, `photo`, `created_at`, `updated_at`) VALUES
	(1, 'Layla Mei', 'P', 'Jl. lorem ipsum in lorem ipsum', '083111222333', 2, 2, 3, '1685085329.png', '2023-05-26 00:02:23', '2023-05-26 00:15:29'),
	(2, 'Abdul Dika', 'L', 'Jl. lorem ipsum in lorem ipsum', '083111222333', 1, 2, 1, '1685085278.png', '2023-05-26 00:07:06', '2023-05-26 00:19:06'),
	(3, 'M. Rizki', 'L', 'Jl. lorem ipsum in lorem ipsum', '083111222333', 2, 6, 1, '1685085263.png', '2023-05-26 00:14:23', '2023-05-26 00:14:23'),
	(4, 'Ikhsan Mulyadi', 'L', 'Jl. lorem ipsum in lorem ipsum', '083111222333', 1, 10, 7, '1685085425.png', '2023-05-26 00:17:05', '2023-05-26 00:17:05'),
	(5, 'Fitri Putri', 'P', 'Jl. lorem ipsum in lorem ipsum', '083111222333', 1, 6, 6, '1685085522.png', '2023-05-26 00:18:42', '2023-05-26 00:18:42'),
	(6, 'Adelia Dinda', '#', 'Jl. lorem ipsum in lorem ipsum', '083111222333', 2, 2, 7, '1685085591.png', '2023-05-26 00:19:51', '2023-06-01 01:05:36'),
	(7, 'Dodi Setiawan', 'L', 'Jl. lorem ipsum in lorem ipsum', '083111222333', 1, 5, 4, '1685086055.png', '2023-05-26 00:27:35', '2023-05-26 00:27:35');

-- Dumping structure for table db_sadis.kelas
CREATE TABLE IF NOT EXISTS `kelas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nama_Kelas` varchar(45) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `Tahun_Pelajaran` date DEFAULT NULL,
  `Wali_Kelas` varchar(45) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `Array_Siswa` varchar(200) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_esperanto_ci;

-- Dumping data for table db_sadis.kelas: ~10 rows (approximately)
INSERT INTO `kelas` (`id`, `Nama_Kelas`, `Tahun_Pelajaran`, `Wali_Kelas`, `Array_Siswa`, `created_at`, `updated_at`) VALUES
	(2, 'XII - A', '2023-05-25', '1\r\n', '2', '2023-05-25 00:02:25', '2023-06-19 19:42:09'),
	(3, 'XII - B', '2023-05-25', '2', '1', '2023-05-25 00:24:11', '2023-06-19 19:42:09'),
	(4, 'XII - C', '2023-05-25', '3', '0', '2023-05-25 07:53:32', '2023-06-19 19:42:09'),
	(5, 'XI - A', '2023-05-25', '2', '1', '2023-05-25 07:54:13', '2023-06-19 19:42:09'),
	(6, 'XI - B', '2023-05-25', '1', '0', '2023-05-25 07:54:30', '2023-06-19 19:42:09'),
	(7, 'XI - C', '2023-05-25', '3', '0', '2023-05-25 07:54:51', '2023-06-19 19:42:09'),
	(8, 'X - A', '2023-05-25', '2', '0', '2023-05-25 07:55:11', '2023-06-19 19:42:09'),
	(9, 'X - B', '2023-05-25', '3', '0', '2023-05-25 07:55:56', '2023-06-19 19:42:09'),
	(10, 'X - C', '2023-05-25', '1', '1', '2023-05-25 07:56:17', '2023-06-19 19:42:09');

-- Dumping structure for table db_sadis.mata_pelajaran
CREATE TABLE IF NOT EXISTS `mata_pelajaran` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nama_Mata_Pelajaran` varchar(45) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_esperanto_ci;

-- Dumping data for table db_sadis.mata_pelajaran: ~8 rows (approximately)
INSERT INTO `mata_pelajaran` (`id`, `Nama_Mata_Pelajaran`, `created_at`, `updated_at`) VALUES
	(1, 'Bahasa Indonesia', '2023-05-25 07:49:47', '2023-05-25 07:49:47'),
	(2, 'Bahasa Jerman', '2023-05-25 07:50:04', '2023-05-25 07:50:04'),
	(3, 'Bahasa Inggris', '2023-05-25 07:50:17', '2023-05-25 07:50:17'),
	(4, 'Matematika Wajib', '2023-05-25 07:50:32', '2023-05-25 07:50:32'),
	(5, 'Matematika Minat', '2023-05-25 07:50:42', '2023-05-25 07:50:42'),
	(6, 'Biologi', '2023-05-25 07:51:21', '2023-05-25 07:51:21'),
	(7, 'Kimia', '2023-05-25 07:51:31', '2023-05-25 07:51:31'),
	(8, 'Fisika', '2023-05-25 07:51:39', '2023-05-25 07:51:39');

-- Dumping structure for table db_sadis.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_sadis.migrations: ~5 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_05_24_095132_create_permission_tables', 2);

-- Dumping structure for table db_sadis.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_sadis.model_has_permissions: ~0 rows (approximately)

-- Dumping structure for table db_sadis.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_sadis.model_has_roles: ~9 rows (approximately)
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1),
	(1, 'App\\Models\\User', 2),
	(1, 'App\\Models\\User', 3),
	(2, 'App\\Models\\User', 4),
	(3, 'App\\Models\\User', 5),
	(4, 'App\\Models\\User', 6),
	(1, 'App\\Models\\User', 7),
	(1, 'App\\Models\\User', 8),
	(1, 'App\\Models\\User', 9),
	(4, 'App\\Models\\User', 10);

-- Dumping structure for table db_sadis.nilai
CREATE TABLE IF NOT EXISTS `nilai` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nilai` varchar(45) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `Siswa_id` int NOT NULL,
  `Mata_Pelajaran_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Nilai_Siswa1_idx` (`Siswa_id`),
  KEY `fk_Nilai_Mata_Pelajaran1_idx` (`Mata_Pelajaran_id`),
  CONSTRAINT `fk_Nilai_Mata_Pelajaran1` FOREIGN KEY (`Mata_Pelajaran_id`) REFERENCES `mata_pelajaran` (`id`),
  CONSTRAINT `fk_Nilai_Siswa1` FOREIGN KEY (`Siswa_id`) REFERENCES `siswa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_esperanto_ci;

-- Dumping data for table db_sadis.nilai: ~10 rows (approximately)
INSERT INTO `nilai` (`id`, `Nilai`, `Siswa_id`, `Mata_Pelajaran_id`, `created_at`, `updated_at`) VALUES
	(2, '90', 1, 1, '2023-05-26 00:31:40', '2023-05-26 00:31:40'),
	(3, '78', 1, 2, '2023-05-26 00:31:48', '2023-05-26 00:31:48'),
	(4, '98', 1, 3, '2023-05-26 00:32:07', '2023-05-26 00:32:07'),
	(5, '77', 1, 4, '2023-05-26 00:32:18', '2023-05-26 00:32:18'),
	(6, '80', 1, 5, '2023-05-26 00:32:33', '2023-05-26 00:32:33'),
	(7, '98', 2, 1, '2023-05-26 00:32:45', '2023-05-26 00:32:45'),
	(8, '87', 2, 2, '2023-05-26 00:33:10', '2023-05-26 00:33:10'),
	(9, '98', 2, 3, '2023-05-26 00:33:20', '2023-05-26 00:33:20'),
	(10, '81', 2, 4, '2023-05-26 00:33:34', '2023-05-26 00:33:34'),
	(12, '87', 2, 5, '2023-05-26 00:34:33', '2023-05-26 00:34:33');

-- Dumping structure for table db_sadis.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_sadis.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table db_sadis.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_sadis.permissions: ~4 rows (approximately)
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'create', 'web', '2023-05-24 02:57:36', '2023-05-24 02:57:36'),
	(3, 'read', 'web', '2023-05-24 02:57:57', '2023-05-24 02:57:57'),
	(4, 'update', 'web', '2023-05-24 02:58:06', '2023-05-24 02:58:06'),
	(5, 'delete', 'web', '2023-05-24 02:58:15', '2023-05-24 02:58:15');

-- Dumping structure for table db_sadis.personal_access_tokens
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

-- Dumping data for table db_sadis.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table db_sadis.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_sadis.roles: ~4 rows (approximately)
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'web', '2023-05-24 02:59:17', '2023-05-24 02:59:17'),
	(2, 'staff', 'web', '2023-05-24 02:59:30', '2023-05-24 02:59:30'),
	(3, 'guru', 'web', '2023-06-01 10:41:53', '2023-06-01 10:41:53'),
	(4, 'siswa', 'web', '2023-06-01 10:42:26', '2023-06-01 10:42:26');

-- Dumping structure for table db_sadis.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_sadis.role_has_permissions: ~3 rows (approximately)
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(1, 1),
	(1, 2);

-- Dumping structure for table db_sadis.sarana
CREATE TABLE IF NOT EXISTS `sarana` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_Sarana` varchar(45) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `Ketersediaan` varchar(45) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `Lokasi` varchar(100) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_esperanto_ci;

-- Dumping data for table db_sadis.sarana: ~4 rows (approximately)
INSERT INTO `sarana` (`id`, `nama_Sarana`, `Ketersediaan`, `Lokasi`, `created_at`, `updated_at`) VALUES
	(1, 'Kantin', '4 Ruang', 'Bangunan paling timur dan paling barat', '2023-05-25 08:02:24', '2023-05-25 08:02:24'),
	(2, 'Gazebo', '10 Bangunan', 'Setiap sudut sekolah', '2023-05-25 08:06:16', '2023-05-25 08:06:16'),
	(3, 'Masjid', '1 Bangunan', 'Dekat pintu masuk sekolah', '2023-05-25 08:06:45', '2023-05-25 08:06:45'),
	(4, 'Kelas', '40 Ruang Kelas', 'Seluruh sekolah', '2023-05-25 08:07:08', '2023-05-25 08:07:08');

-- Dumping structure for table db_sadis.siswa
CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nama_Siswa` varchar(45) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Alamat` varchar(45) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `Jenis_Kelamin` varchar(45) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `Nomor_Telepon` varchar(45) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `Email` varchar(45) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `Tahun_Lulus` varchar(45) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `Users_id` int NOT NULL,
  `Kelas_id` int DEFAULT NULL,
  `Ekstrakulikuler_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Siswa_Users1_idx` (`Users_id`),
  KEY `fk_Siswa_Kelas1_idx` (`Kelas_id`),
  KEY `fk_Siswa_Ekstrakulikuler1_idx` (`Ekstrakulikuler_id`),
  CONSTRAINT `fk_Siswa_Ekstrakulikuler1` FOREIGN KEY (`Ekstrakulikuler_id`) REFERENCES `ekstrakulikuler` (`id`),
  CONSTRAINT `fk_Siswa_Kelas1` FOREIGN KEY (`Kelas_id`) REFERENCES `kelas` (`id`),
  CONSTRAINT `fk_Siswa_Users` FOREIGN KEY (`Users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_esperanto_ci;

-- Dumping data for table db_sadis.siswa: ~5 rows (approximately)
INSERT INTO `siswa` (`id`, `Nama_Siswa`, `Tanggal_Lahir`, `Alamat`, `Jenis_Kelamin`, `Nomor_Telepon`, `Email`, `Tahun_Lulus`, `Users_id`, `Kelas_id`, `Ekstrakulikuler_id`, `created_at`, `updated_at`) VALUES
	(1, 'Rettousei', '2003-05-31', 'Jl. lorem ipsum in lorem ipsum', 'L', '0981231123', 'rettousei@gmail.com', '2023-05-26', 1, 2, 6, '2023-05-26 00:03:36', '2023-05-26 00:22:06'),
	(2, 'Mimi wo Sumaseba', '2002-06-18', 'Jl. lorem ipsum in lorem ipsum', 'P', '09128311231123', 'mimi@gmail.com', '2023-05-26', 2, 10, 14, '2023-05-26 00:23:37', '2023-05-26 00:23:37'),
	(3, 'Hikari no Asa', '2000-05-26', 'Jl. lorem ipsum in lorem ipsum', 'L', '0801041722', 'hikari@gmail.com', '2024-06-26', 1, 3, 12, '2023-05-26 00:25:47', '2023-05-26 00:25:47'),
	(4, 'Sorezore no Michi', '2003-07-26', 'Jl. lorem ipsum in lorem ipsum', 'L', '433453453453', 'michi@gmail.com', '2023-05-26', 2, 2, 13, '2023-05-26 00:30:22', '2023-05-26 00:30:22'),
	(5, 'Yume wo Erande', '2005-07-26', 'Jl. lorem ipsum in lorem ipsum', 'P', '093740972342', 'yume@gmail.com', '2025-08-26', 3, 5, 8, '2023-05-26 00:31:16', '2023-05-26 00:31:16'),
	(8, 'adit', NULL, NULL, NULL, NULL, 'adit1@gmail.com', NULL, 27, NULL, NULL, NULL, NULL);

-- Dumping structure for table db_sadis.staff
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Staffcol` varchar(45) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `Divisi` varchar(45) COLLATE utf8mb3_esperanto_ci DEFAULT NULL,
  `Users_id` int NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Staff_Users1_idx` (`Users_id`),
  CONSTRAINT `fk_Staff_Users1` FOREIGN KEY (`Users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_esperanto_ci;

-- Dumping data for table db_sadis.staff: ~2 rows (approximately)
INSERT INTO `staff` (`id`, `Staffcol`, `Divisi`, `Users_id`, `updated_at`, `created_at`) VALUES
	(1, 'Admin', 'Admin', 1, NULL, NULL),
	(2, 'Momo', 'Event', 2, '2023-05-25 09:07:19', '2023-05-25 08:49:31'),
	(4, 'Helfi Apriliyandi Firdaos', NULL, 24, NULL, NULL);

-- Dumping structure for table db_sadis.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int DEFAULT '4',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_sadis.users: ~8 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Helfi Apriliyandi Firdaos', 'admin@gmail.com', NULL, '$2y$10$lqXOS.J3ttfJgqFtqRu18O7sVkFk/3a42A3Vm7Ze1MJgYQ7TzaZwm', 1, NULL, '2023-05-23 03:14:35', '2023-05-23 03:14:35'),
	(2, 'Abdul Wasi\' Al-Afif', 'wasi@admin.com', NULL, '$2y$10$l/9gSFx/pMfxxNg9B36goe20LdOTmgLPjctrrRBnoirk5HSLI59sa', 1, NULL, '2023-05-24 13:23:12', '2023-06-01 08:54:34'),
	(3, 'admin', 'admin@sadisweb.com', NULL, '$2y$10$xXkxmgU1J3dYxae69h6xRe0bvwFSKnEYn1VrMb4cFVKVq3QKpBACS', 1, NULL, '2023-06-01 07:28:07', '2023-06-01 07:28:07'),
	(4, 'staff', 'staff@sadisweb.com', NULL, '$2y$10$EupZhm3/JLaeyWpPQzNQRuKKHW.J.vsZNM72MK9KTEFgTfIc.tDeu', 2, NULL, '2023-06-01 07:28:58', '2023-06-01 07:28:58'),
	(5, 'guru', 'guru@sadisweb.com', NULL, '$2y$10$UDdavC7tBgnTdlWe.MuQcexQ099rtR4YLE4tt.u5rW6Bh5s60VnEq', 3, NULL, '2023-06-01 07:29:27', '2023-06-01 07:29:27'),
	(6, 'siswa', 'siswa@sadisweb.com', NULL, '$2y$10$c1KsbZD4Qqz5rtdfXWI0weqOgDyu684YpxCdC/OvxxD2kHps5/8aq', 4, NULL, '2023-06-01 07:30:18', '2023-06-01 07:30:18'),
	(10, 'Rettousei', 'Rettousei@sadis.com', NULL, '$2y$10$Nsl0XU.3Y9vYSL8/Au9wr.492OtI6y/3sxXwoTFL9ZBVZ7SL0hKBy', 4, NULL, '2023-06-19 02:21:50', '2023-06-19 02:21:50'),
	(24, 'Helfi Apriliyandi Firdaos', 'helfi.apriliyandi_ti20@nusaputra.ac.id', NULL, '$2y$10$b.Q9FPWZ9rnIP/oqBGQMHeSDKl5RRYl2r0YLeJQJETV8WC.W5nBHK', 2, NULL, '2023-06-23 05:11:28', '2023-06-23 05:11:28'),
	(26, 'Adit', 'adit@gmail.com', NULL, '$2y$10$eWEiif.XOTCTkaZX8sMk8usr8nj/7B84tGXeBO9Yft5dIkxKJGDcO', 1, NULL, '2023-06-25 18:25:24', '2023-06-25 18:25:24'),
	(27, 'adit', 'adit1@gmail.com', NULL, '$2y$10$lhME53XYVr6DFycrDDPGUu9M9tjaWj6ZAsNer44sOZBdhp9TwyToO', 4, NULL, '2023-06-25 18:25:45', '2023-06-25 18:25:45');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
