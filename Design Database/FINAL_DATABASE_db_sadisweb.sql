-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 10:25 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb_sadisweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `Judul` varchar(45) DEFAULT NULL,
  `Isi_Berita` longtext DEFAULT NULL,
  `Tanggal_Publikasi` date DEFAULT NULL,
  `Staff_id` int(11) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `Judul`, `Isi_Berita`, `Tanggal_Publikasi`, `Staff_id`, `photo`, `created_at`, `updated_at`) VALUES
(5, 'PPDB Tahun Ajaran 2023/2024', 'Lorem PPDB Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', '2023-05-25', 2, '1684979969.jpg', '2023-05-24 18:59:29', '2023-05-25 20:28:07'),
(6, 'Wisuda Kelulusan Siswa Angkatan 2020', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', '2023-05-25', 2, '1684980665.jpg', '2023-05-24 19:11:05', '2023-05-25 20:31:44'),
(8, 'Lomba Siswa Berprestasi Antar Kelas', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', '2023-05-25', 1, '1684980732.png', '2023-05-24 19:12:12', '2023-05-24 19:12:12'),
(9, 'Ujian Nasional Tahun 2023', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', '2023-05-25', 1, '1684980788.jpg', '2023-05-24 19:13:08', '2023-05-24 19:13:08'),
(10, 'Anniversary SADIS School ke-34', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', '2023-05-25', 1, '1684997123.png', '2023-05-24 23:45:23', '2023-05-24 23:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `id` int(11) NOT NULL,
  `Nama_Ekstrakulikuler` varchar(45) DEFAULT NULL,
  `Deskripsi` varchar(500) DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

--
-- Dumping data for table `ekstrakulikuler`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `Nama_Guru` varchar(45) DEFAULT NULL,
  `Mata_Pelajaran` varchar(45) DEFAULT NULL,
  `Jenis_Kelamin` varchar(45) DEFAULT NULL,
  `Alamat` varchar(45) DEFAULT NULL,
  `Nomor_Telepon` varchar(45) DEFAULT NULL,
  `Image` varchar(45) DEFAULT NULL,
  `Users_id` int(11) NOT NULL,
  `Kelas_id` int(11) NOT NULL,
  `Mata_Pelajaran_id` int(11) NOT NULL,
  `photo` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `Nama_Guru`, `Mata_Pelajaran`, `Jenis_Kelamin`, `Alamat`, `Nomor_Telepon`, `Image`, `Users_id`, `Kelas_id`, `Mata_Pelajaran_id`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Layla Mei', 'x', 'P', 'Jl. lorem ipsum in lorem ipsum', '083111222333', NULL, 2, 2, 3, '1685085329.png', '2023-05-26 00:02:23', '2023-05-26 00:15:29'),
(2, 'Abdul Dika', 'D', 'L', 'Jl. lorem ipsum in lorem ipsum', '083111222333', NULL, 1, 2, 1, '1685085278.png', '2023-05-26 00:07:06', '2023-05-26 00:19:06'),
(3, 'M. Rizki', 'a', 'L', 'Jl. lorem ipsum in lorem ipsum', '083111222333', NULL, 2, 6, 1, '1685085263.png', '2023-05-26 00:14:23', '2023-05-26 00:14:23'),
(4, 'Ikhsan Mulyadi', 'm', 'L', 'Jl. lorem ipsum in lorem ipsum', '083111222333', NULL, 1, 10, 7, '1685085425.png', '2023-05-26 00:17:05', '2023-05-26 00:17:05'),
(5, 'Fitri Putri', 'f', 'P', 'Jl. lorem ipsum in lorem ipsum', '083111222333', NULL, 1, 6, 6, '1685085522.png', '2023-05-26 00:18:42', '2023-05-26 00:18:42'),
(6, 'Adelia Dinda', 'D', 'P', 'Jl. lorem ipsum in lorem ipsum', '083111222333', NULL, 2, 10, 5, '1685085591.png', '2023-05-26 00:19:51', '2023-05-26 00:19:51'),
(7, 'Dodi Setiawan', 'd', 'L', 'Jl. lorem ipsum in lorem ipsum', '083111222333', NULL, 1, 5, 4, '1685086055.png', '2023-05-26 00:27:35', '2023-05-26 00:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `Nama_Kelas` varchar(45) DEFAULT NULL,
  `Tahun_Pelajaran` date DEFAULT NULL,
  `Wali_Kelas` varchar(45) DEFAULT NULL,
  `Array_Siswa` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `Nama_Kelas`, `Tahun_Pelajaran`, `Wali_Kelas`, `Array_Siswa`, `created_at`, `updated_at`) VALUES
(2, 'XII - A', '2023-05-25', 'aw', '10', '2023-05-25 00:02:25', '2023-05-25 07:53:49'),
(3, 'XII - B', '2023-05-25', 'ER', '10', '2023-05-25 00:24:11', '2023-05-25 07:53:41'),
(4, 'XII - C', '2023-05-25', 'WE', '10', '2023-05-25 07:53:32', '2023-05-25 07:53:32'),
(5, 'XI - A', '2023-05-25', 'QW', '10', '2023-05-25 07:54:13', '2023-05-25 07:54:13'),
(6, 'XI - B', '2023-05-25', 'UI', '10', '2023-05-25 07:54:30', '2023-05-25 07:54:30'),
(7, 'XI - C', '2023-05-25', 'KL', '10', '2023-05-25 07:54:51', '2023-05-25 07:54:51'),
(8, 'X - A', '2023-05-25', 'YU', '10', '2023-05-25 07:55:11', '2023-05-25 07:55:11'),
(9, 'X - B', '2023-05-25', 'BG', '10', '2023-05-25 07:55:56', '2023-05-25 07:55:56'),
(10, 'X - C', '2023-05-25', 'ZD', '10', '2023-05-25 07:56:17', '2023-05-25 07:56:17');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id` int(11) NOT NULL,
  `Nama_Mata_Pelajaran` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id`, `Nama_Mata_Pelajaran`, `created_at`, `updated_at`) VALUES
(1, 'Bahasa Indonesia', '2023-05-25 07:49:47', '2023-05-25 07:49:47'),
(2, 'Bahasa Jerman', '2023-05-25 07:50:04', '2023-05-25 07:50:04'),
(3, 'Bahasa Inggris', '2023-05-25 07:50:17', '2023-05-25 07:50:17'),
(4, 'Matematika Wajib', '2023-05-25 07:50:32', '2023-05-25 07:50:32'),
(5, 'Matematika Minat', '2023-05-25 07:50:42', '2023-05-25 07:50:42'),
(6, 'Biologi', '2023-05-25 07:51:21', '2023-05-25 07:51:21'),
(7, 'Kimia', '2023-05-25 07:51:31', '2023-05-25 07:51:31'),
(8, 'Fisika', '2023-05-25 07:51:39', '2023-05-25 07:51:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_24_095132_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `Nilai` varchar(45) DEFAULT NULL,
  `Siswa_id` int(11) NOT NULL,
  `Mata_Pelajaran_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

--
-- Dumping data for table `nilai`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'create', 'web', '2023-05-24 02:57:36', '2023-05-24 02:57:36'),
(3, 'read', 'web', '2023-05-24 02:57:57', '2023-05-24 02:57:57'),
(4, 'update', 'web', '2023-05-24 02:58:06', '2023-05-24 02:58:06'),
(5, 'delete', 'web', '2023-05-24 02:58:15', '2023-05-24 02:58:15'),
(6, 'write', 'web', '2023-05-24 02:59:02', '2023-05-24 02:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-05-24 02:59:17', '2023-05-24 02:59:17'),
(2, 'staff', 'web', '2023-05-24 02:59:30', '2023-05-24 02:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(3, 1),
(3, 2),
(4, 1),
(5, 1),
(6, 1),
(6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sarana`
--

CREATE TABLE `sarana` (
  `id` int(11) NOT NULL,
  `nama_Sarana` varchar(45) DEFAULT NULL,
  `Ketersediaan` varchar(45) DEFAULT NULL,
  `Lokasi` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

--
-- Dumping data for table `sarana`
--

INSERT INTO `sarana` (`id`, `nama_Sarana`, `Ketersediaan`, `Lokasi`, `created_at`, `updated_at`) VALUES
(1, 'Kantin', '4 Ruang', 'Bangunan paling timur dan paling barat', '2023-05-25 08:02:24', '2023-05-25 08:02:24'),
(2, 'Gazebo', '10 Bangunan', 'Setiap sudut sekolah', '2023-05-25 08:06:16', '2023-05-25 08:06:16'),
(3, 'Masjid', '1 Bangunan', 'Dekat pintu masuk sekolah', '2023-05-25 08:06:45', '2023-05-25 08:06:45'),
(4, 'Kelas', '40 Ruang Kelas', 'Seluruh sekolah', '2023-05-25 08:07:08', '2023-05-25 08:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `Nama_Siswa` varchar(45) DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Alamat` varchar(45) DEFAULT NULL,
  `Jenis_Kelamin` varchar(45) DEFAULT NULL,
  `Nomor_Telepon` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Tahun_Lulus` varchar(45) DEFAULT NULL,
  `Users_id` int(11) NOT NULL,
  `Kelas_id` int(11) NOT NULL,
  `Ekstrakulikuler_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `Nama_Siswa`, `Tanggal_Lahir`, `Alamat`, `Jenis_Kelamin`, `Nomor_Telepon`, `Email`, `Tahun_Lulus`, `Users_id`, `Kelas_id`, `Ekstrakulikuler_id`, `created_at`, `updated_at`) VALUES
(1, 'Rettousei', '2003-05-31', 'Jl. lorem ipsum in lorem ipsum', 'L', '0981231123', 'rettousei@gmail.com', '2023-05-26', 1, 2, 6, '2023-05-26 00:03:36', '2023-05-26 00:22:06'),
(2, 'Mimi wo Sumaseba', '2002-06-18', 'Jl. lorem ipsum in lorem ipsum', 'P', '09128311231123', 'mimi@gmail.com', '2023-05-26', 2, 10, 14, '2023-05-26 00:23:37', '2023-05-26 00:23:37'),
(3, 'Hikari no Asa', '2000-05-26', 'Jl. lorem ipsum in lorem ipsum', 'L', '0801041722', 'hikari@gmail.com', '2024-06-26', 1, 3, 12, '2023-05-26 00:25:47', '2023-05-26 00:25:47'),
(4, 'Sorezore no Michi', '2003-07-26', 'Jl. lorem ipsum in lorem ipsum', 'L', '433453453453', 'michi@gmail.com', '2023-05-26', 2, 2, 13, '2023-05-26 00:30:22', '2023-05-26 00:30:22'),
(5, 'Yume wo Erande', '2005-07-26', 'Jl. lorem ipsum in lorem ipsum', 'P', '093740972342', 'yume@gmail.com', '2025-08-26', 2, 5, 8, '2023-05-26 00:31:16', '2023-05-26 00:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `Staffcol` varchar(45) DEFAULT NULL,
  `Divisi` varchar(45) DEFAULT NULL,
  `Users_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_esperanto_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `Staffcol`, `Divisi`, `Users_id`, `updated_at`, `created_at`) VALUES
(1, 'Admin', 'Admin', 1, NULL, NULL),
(2, 'Momo', 'Event', 2, '2023-05-25 09:07:19', '2023-05-25 08:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Helfi Apriliyandi Firdaos', 'admin@gmail.com', NULL, '$2y$10$lqXOS.J3ttfJgqFtqRu18O7sVkFk/3a42A3Vm7Ze1MJgYQ7TzaZwm', NULL, '2023-05-23 03:14:35', '2023-05-23 03:14:35'),
(2, 'Abdul Wasi\' Al-Afif ', 'wasi@admin.com', NULL, '$2y$10$Tw54Ev6lR8ZiPylLOZDcNeV2XozT/KiabnTYn9er/8nlb1f032rv.', NULL, '2023-05-24 13:23:12', '2023-05-24 13:23:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Berita_Staff1_idx` (`Staff_id`);

--
-- Indexes for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Guru_Users1_idx` (`Users_id`),
  ADD KEY `fk_Guru_Kelas1_idx` (`Kelas_id`),
  ADD KEY `fk_Guru_Mata_Pelajaran1_idx` (`Mata_Pelajaran_id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Nilai_Siswa1_idx` (`Siswa_id`),
  ADD KEY `fk_Nilai_Mata_Pelajaran1_idx` (`Mata_Pelajaran_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sarana`
--
ALTER TABLE `sarana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Siswa_Users1_idx` (`Users_id`),
  ADD KEY `fk_Siswa_Kelas1_idx` (`Kelas_id`),
  ADD KEY `fk_Siswa_Ekstrakulikuler1_idx` (`Ekstrakulikuler_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Staff_Users1_idx` (`Users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sarana`
--
ALTER TABLE `sarana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `fk_Berita_Staff1` FOREIGN KEY (`Staff_id`) REFERENCES `staff` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `fk_Guru_Kelas1` FOREIGN KEY (`Kelas_id`) REFERENCES `kelas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Guru_Mata_Pelajaran1` FOREIGN KEY (`Mata_Pelajaran_id`) REFERENCES `mata_pelajaran` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Guru_Users1` FOREIGN KEY (`Users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `fk_Nilai_Mata_Pelajaran1` FOREIGN KEY (`Mata_Pelajaran_id`) REFERENCES `mata_pelajaran` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Nilai_Siswa1` FOREIGN KEY (`Siswa_id`) REFERENCES `siswa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_Siswa_Ekstrakulikuler1` FOREIGN KEY (`Ekstrakulikuler_id`) REFERENCES `ekstrakulikuler` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Siswa_Kelas1` FOREIGN KEY (`Kelas_id`) REFERENCES `kelas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Siswa_Users1` FOREIGN KEY (`Users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `fk_Staff_Users1` FOREIGN KEY (`Users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
