-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 07:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leave_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `manger_id` int(11) NOT NULL,
  `user_name` varchar(244) NOT NULL,
  `user` int(20) NOT NULL,
  `ltype` enum('earn leave','casual leave','lwp leave','lop leave','marraige leave','bereavement leave') NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `reason` varchar(255) NOT NULL,
  `action` enum('approved','rejected','on hold','') NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `manger_id`, `user_name`, `user`, `ltype`, `sdate`, `edate`, `reason`, `action`, `created_at`, `updated_at`) VALUES
(1, 0, '', 4, 'earn leave', '2022-06-06', '2022-08-08', 'disease', 'approved', NULL, NULL),
(2, 0, '', 4, 'earn leave', '2022-06-06', '2022-08-08', 'disease', 'approved', NULL, NULL),
(3, 0, '', 2, 'earn leave', '2022-07-07', '0223-06-06', 'disease', 'on hold', NULL, NULL),
(4, 0, '', 2, 'earn leave', '2022-07-07', '0223-06-06', 'disease', 'rejected', NULL, NULL),
(5, 0, '', 4, 'earn leave', '2022-08-08', '2022-09-09', 'fever', 'rejected', NULL, NULL),
(6, 0, '', 4, 'earn leave', '2022-08-08', '2022-09-09', 'fever', 'approved', NULL, NULL),
(7, 1, '', 6, 'lop leave', '2022-09-09', '2022-11-11', 'fever', 'approved', '2022-07-06 04:37:11', '2022-07-06 04:37:11'),
(8, 0, '', 6, 'lop leave', '2022-09-09', '2022-11-11', 'fever', 'on hold', '2022-07-06 04:37:11', '2022-07-06 04:37:11'),
(9, 0, '', 9, 'marraige leave', '2022-12-11', '2022-12-12', 'kcjsdzkh', 'approved', '2022-07-06 05:01:05', '2022-07-06 05:01:05'),
(10, 0, '', 9, 'marraige leave', '2022-12-11', '2022-12-12', 'kcjsdzkh', 'approved', '2022-07-06 05:01:05', '2022-07-06 05:01:05'),
(11, 0, '', 10, 'lwp leave', '2022-11-11', '2022-12-12', 'adksdj', 'on hold', '2022-07-06 05:06:12', '2022-07-06 05:06:12'),
(12, 0, '', 10, 'lwp leave', '2022-11-11', '2022-12-12', 'adksdj', 'approved', '2022-07-06 05:06:12', '2022-07-06 05:06:12'),
(13, 0, '', 56, 'casual leave', '2022-06-06', '2022-08-08', 'ndcjkas', 'approved', '2022-07-06 05:07:44', '2022-07-06 05:07:44'),
(14, 0, '', 56, 'casual leave', '2022-06-06', '2022-08-08', 'ndcjkas', 'rejected', '2022-07-06 05:07:45', '2022-07-06 05:07:45'),
(15, 0, '', 15, 'casual leave', '2022-09-09', '2022-10-10', 'bkjcs', 'approved', '2022-07-06 06:10:36', '2022-07-06 06:10:36'),
(16, 0, '', 15, 'casual leave', '2022-09-09', '2022-10-10', 'bkjcs', 'approved', '2022-07-06 06:10:36', '2022-07-06 06:10:36'),
(17, 0, '', 20, 'casual leave', '2024-12-12', '2025-12-12', 'fever', 'approved', '2022-07-07 09:20:57', '2022-07-07 09:20:57'),
(18, 0, '', 20, 'casual leave', '2024-12-12', '2025-12-12', 'fever', 'rejected', '2022-07-07 09:20:57', '2022-07-07 09:20:57'),
(19, 0, '', 6, 'casual leave', '2011-07-07', '2022-08-08', 'kcjsdzkh', 'approved', '2022-07-07 15:45:05', '2022-07-07 15:45:05'),
(20, 0, '', 6, 'casual leave', '2011-07-07', '2022-08-08', 'kcjsdzkh', 'approved', '2022-07-07 15:45:05', '2022-07-07 15:45:05'),
(21, 0, 'Aditi', 30, 'earn leave', '2002-08-08', '2332-03-04', 'bkjcs', 'on hold', '2022-07-07 17:17:41', '2022-07-07 17:17:41'),
(22, 0, 'Aditi', 30, 'earn leave', '2002-08-08', '2332-03-04', 'bkjcs', 'approved', '2022-07-07 17:17:41', '2022-07-07 17:17:41'),
(23, 0, 'Harsh', 50, 'casual leave', '2022-05-05', '2022-06-06', 'basic', 'approved', '2022-07-08 04:02:31', '2022-07-08 04:02:31'),
(24, 0, 'Harsh', 50, 'casual leave', '2022-05-05', '2022-06-06', 'basic', 'on hold', '2022-07-08 04:02:31', '2022-07-08 04:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Aditi', 'aditi', '2022-07-06 06:16:37', '2022-07-06 06:16:37'),
(2, 'Harsh', 'harsh', '2022-07-07 16:14:25', '2022-07-07 16:14:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
