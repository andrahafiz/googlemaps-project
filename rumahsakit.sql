-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 05:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `username_admin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_admin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_admin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `layanans`
--

CREATE TABLE `layanans` (
  `id_layanan` bigint(20) UNSIGNED NOT NULL,
  `nama_layanan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layanans`
--

INSERT INTO `layanans` (`id_layanan`, `nama_layanan`, `created_at`, `updated_at`) VALUES
(1, 'Rawat Jalan', '2022-08-14 00:24:29', '2022-08-14 00:24:29'),
(2, 'ICU', '2022-08-14 03:16:31', '2022-08-14 03:16:31'),
(3, 'Rawat Inap', '2022-08-14 03:16:49', '2022-08-14 03:16:49'),
(4, 'Layanan Penunjang', '2022-08-15 07:26:13', '2022-08-15 07:26:13'),
(5, 'Layanan Unggulan', '2022-08-15 07:26:31', '2022-08-15 07:26:31'),
(6, 'Layanan Inovatif', '2022-08-15 07:26:46', '2022-08-15 07:26:46'),
(7, 'Layanan MCU Online', '2022-08-15 07:27:01', '2022-08-15 07:27:01'),
(8, 'Layanan 24 Jam', '2022-08-15 07:28:03', '2022-08-15 07:28:03'),
(9, 'Pelayanan Laboratorium', '2022-08-15 08:12:31', '2022-08-15 08:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `layanan_rumahsakit`
--

CREATE TABLE `layanan_rumahsakit` (
  `id` int(10) UNSIGNED NOT NULL,
  `layanan_id` int(10) UNSIGNED NOT NULL,
  `rumahsakit_id` int(10) UNSIGNED NOT NULL,
  `informasi_layanan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layanan_rumahsakit`
--

INSERT INTO `layanan_rumahsakit` (`id`, `layanan_id`, `rumahsakit_id`, `informasi_layanan`) VALUES
(18, 1, 2, 'ini coba edit'),
(19, 2, 2, 'icu icu i cu'),
(24, 1, 1, 'buka 24 jam'),
(25, 2, 1, 'ini test'),
(26, 1, 3, 'buka 24 jam'),
(27, 7, 3, 'ini ico'),
(28, 6, 3, 'ini layanan asd'),
(29, 3, 3, 'rawat jalan'),
(30, 3, 4, 'buka 24 jam'),
(31, 6, 4, 'ini test'),
(32, 8, 4, 'ini ico'),
(33, 1, 5, 'tesst lah'),
(34, 6, 5, 'rawat jalan'),
(35, 7, 5, 'buka 24 jam'),
(36, 4, 6, 'buka 24 jam'),
(37, 7, 6, 'buka 24 jam'),
(38, 8, 6, 'ini ico'),
(39, 3, 6, 'rawat jalan'),
(40, 9, 7, 'vaksin');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_29_171354_create_admins_table', 1),
(6, '2022_06_29_182611_create_layanans_table', 1),
(7, '2022_06_29_182828_create_rumah_sakits_table', 1),
(8, '2022_07_05_174225_create_layanan_rumahsakit_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rumahsakits`
--

CREATE TABLE `rumahsakits` (
  `id_rumahsakit` bigint(20) UNSIGNED NOT NULL,
  `nama_rumahsakit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_rumahsakit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_rumahsakit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no-image.jpg',
  `latitude_rumahsakit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude_rumahsakit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rumahsakits`
--

INSERT INTO `rumahsakits` (`id_rumahsakit`, `nama_rumahsakit`, `alamat_rumahsakit`, `foto_rumahsakit`, `latitude_rumahsakit`, `longitude_rumahsakit`, `created_at`, `updated_at`) VALUES
(1, 'Awal Bros', 'Jl.sudirman test', 'gambar_rumahsakit/cCc8B4mNkUxpOBUOikEOXtfhntveMe6wP4pXGdIm.jpg', '0.50755826387693', '101.48306658582', '2022-08-14 00:25:00', '2022-08-14 09:17:56'),
(2, 'Ibnu sina', 'jl. sd1', 'gambar_rumahsakit/09lX9nizgJUyYtY9lbS6wQte8A0luAHhJGeu3dKD.png', '0.50753665325963', '101.45060846814', '2022-08-14 03:17:54', '2022-08-14 04:22:46'),
(3, 'RSUD ARIFIN ACHMAD', 'Jl. Gajah mada', 'no-image.jpg', '0.5055100296549199', '101.46184412523773', '2022-08-15 07:30:45', '2022-08-15 07:30:45'),
(4, 'RSU SANTA MARIA', 'Jl. ahmad dahlan', 'gambar_rumahsakit/CiSHjPqlBK8wDHOuL7bPsFFhk6sEJpMwZomkN0c9.jpg', '0.5150372608967401', '101.44673347319782', '2022-08-15 07:32:56', '2022-08-15 07:32:56'),
(5, 'RS PRIMA', 'Jl. Bima/Tuanku Tambusai No.1', 'gambar_rumahsakit/YulLaCZK6bsu7sFU86eQFbuY4CRf15e7ISzIsTxC.png', '0.4942044275076062', '101.40014766518733', '2022-08-15 07:33:58', '2022-08-15 07:33:58'),
(6, 'RS AULIA', 'JL. HR. Soebrantas No. 63', 'gambar_rumahsakit/82yBcniBDoUGcrNYdcOFV1aeCXwGHKs3PUj9CBzl.jpg', '0.5243069527614357', '101.46672608143703', '2022-08-15 07:36:05', '2022-08-15 07:36:05'),
(7, 'RSU SYAFIRA', 'JL.JEND.SUDIRMAN NO.134', 'gambar_rumahsakit/PP0KzIn81J1LCxlwFb80L9GJrumvQT1OtcnXN8B2.jpg', '0.498447144157749', '101.45475816573023', '2022-08-15 08:13:26', '2022-08-15 08:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tes', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tes', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `layanans`
--
ALTER TABLE `layanans`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `layanan_rumahsakit`
--
ALTER TABLE `layanan_rumahsakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rumahsakits`
--
ALTER TABLE `rumahsakits`
  ADD PRIMARY KEY (`id_rumahsakit`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanans`
--
ALTER TABLE `layanans`
  MODIFY `id_layanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `layanan_rumahsakit`
--
ALTER TABLE `layanan_rumahsakit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rumahsakits`
--
ALTER TABLE `rumahsakits`
  MODIFY `id_rumahsakit` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
