-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 03:23 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manager_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adhar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permant_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` enum('unmarried','married') COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `manager_id`, `user_id`, `name`, `email`, `dob`, `adhar`, `city`, `state`, `country`, `mobile`, `address`, `permant_address`, `marital_status`, `gender`, `education`, `year`, `created_at`, `updated_at`) VALUES
(2, 0, 1, 'Suhas', 'Suhas1432@abc.com', '2022-02-23', '7657674643', 'Solapur', 'andhra pradesh', 'india', '652875687687', '@aladi', '@punjab', 'unmarried', 'male', 'Mechanical Engineering', '2022-07-06', '2022-07-05 00:37:23', '2022-07-05 00:37:23'),
(3, 2, 0, 'Mona', 'mona@gmail.com', '2011-02-20', '89765754646', 'Hariyana', 'telangana', 'india', '9890363502', '@UP', '@uttar Pradesh', 'unmarried', 'female', 'Electronics and Communication Engineering', '2022-06-30', '2022-07-05 00:39:09', '2022-07-05 00:39:09'),
(4, 0, 0, 'Sai', 'sai@gmail.com', '2022-02-12', '78646726573', 'Dhuliya', 'telangana', 'india', '98867687845', '@Indi', '@Aladi', 'unmarried', 'male', 'Mechanical Engineering', '2022-06-29', '2022-07-05 03:14:37', '2022-07-05 03:14:37'),
(5, 0, 2, 'Koushik', 'koushik@koushik.com', '10', '123', '123', '123', '123', '123', '123', '123', 'married', 'male', '123', '2022-07-20', NULL, NULL),
(6, 0, 0, 'Ajay', 'ajay@ajay.com', '2022-01-01', '1234', 'Bengaluru', 'karnataka', 'india', '12345678', 'Kumarswamy Layout', '123', 'unmarried', 'male', 'Computerscience Engineering', '2022-07-15', '2022-07-08 00:44:27', '2022-07-08 00:44:27'),
(7, 0, 0, 'Ram', 'ram@ram.com', '2022-01-01', '323333', '55466', 'karnataka', 'australia', '123456', '455', '456', 'married', 'male', 'Civil Engineering', '2028-02-03', '2022-07-08 01:05:43', '2022-07-08 01:05:43'),
(8, 2, 0, 'Ram', 'ram@ram.com', '2022-01-01', '323333', '55466', 'karnataka', 'australia', '123456', '455', '456', 'married', 'male', 'Civil Engineering', '2028-02-03', '2022-07-08 01:06:16', '2022-07-08 01:06:16'),
(9, 0, 0, 'Ram', 'ram@ram.com', '2022-01-01', '323333', '55466', 'karnataka', 'australia', '123456', '455', '456', 'married', 'male', 'Civil Engineering', '2028-02-03', '2022-07-08 01:07:30', '2022-07-08 01:07:30'),
(10, 0, 10, 'raj', 'raj@raj.com', '2022-01-01', '1132322', 'Bengaluru', 'karnataka', 'india', '1212112', 'Kumarswamy Layout', '45645', 'married', 'male', 'Civil Engineering', '2022-01-01', '2022-07-08 01:13:45', '2022-07-08 01:13:45');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `id` int(10) UNSIGNED NOT NULL,
  `no` int(11) DEFAULT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `day_of_the_week` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holiday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `holiday_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`id`, `no`, `month`, `date`, `day_of_the_week`, `holiday`, `holiday_type`, `created_at`, `updated_at`) VALUES
(16, 1, 'January', '2022-01-13', 'Thursday', 'Lohri', 'Festival Holiday', '2022-07-07 06:57:06', '2022-07-08 04:03:55'),
(18, 2, 'January', '2023-01-26', 'Wednesday', 'Republic Day 1', 'National Holiday', '2022-07-07 07:05:57', '2022-07-08 04:07:06'),
(19, 3, 'March', '2022-03-12', 'Friday', 'Good Friday', 'Mandatory Holiday', '2022-07-07 07:07:32', '2022-07-07 07:07:32'),
(20, 4, 'April', '2022-04-15', 'Friday', 'Good Friday', 'Mandatory Holiday', '2022-07-07 07:11:57', '2022-07-07 07:11:57'),
(21, 5, 'Augest', '2022-05-03', 'Tuesday', 'Eid-Ul-Fitr', 'Mandatory Holiday', '2022-07-07 07:13:39', '2022-07-07 07:13:39'),
(22, 6, 'Augest', '2022-08-15', 'Munday', 'Independence Day', 'Mandatory Holiday', '2022-07-07 07:16:26', '2022-07-07 07:16:26'),
(23, 7, 'Augest', '2022-08-19', 'Friday', 'Janmashtmi', 'Mandatory Holiday', '2022-07-07 07:18:16', '2022-07-07 07:18:16'),
(26, 8, 'october', '2022-10-05', 'Wednesday', 'Dussehra', 'Mandatory Holiday', '2022-07-07 07:24:56', '2022-07-07 07:24:56'),
(27, 9, 'october', '2022-10-24', 'Munday', 'Diwali', 'Mandatory Holiday', '2022-07-07 07:25:43', '2022-07-07 07:25:43'),
(28, 10, 'November', '2022-11-08', 'Tuesday', 'Guru Nanak Jayanti', 'Mandatory Holiday', '2022-07-07 07:27:10', '2022-07-07 07:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `user_name` varchar(244) NOT NULL,
  `user` int(20) NOT NULL,
  `ltype` enum('earn leave','casual leave','lwp leave','lop leave','marraige leave','bereavement leave') NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `reason` varchar(255) NOT NULL,
  `action` enum('approved','rejected','on hold','') NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `manager_id`, `user_name`, `user`, `ltype`, `sdate`, `edate`, `reason`, `action`, `created_at`, `updated_at`) VALUES
(1, 0, '', 4, 'earn leave', '2022-06-06', '2022-08-08', 'disease', 'approved', NULL, NULL),
(2, 0, '', 4, 'earn leave', '2022-06-06', '2022-08-08', 'disease', 'approved', NULL, NULL),
(3, 2, '', 2, 'earn leave', '2022-07-07', '0223-06-06', 'disease', 'on hold', NULL, NULL),
(4, 0, '', 2, 'earn leave', '2022-07-07', '0223-06-06', 'disease', 'rejected', NULL, NULL),
(5, 0, '', 4, 'earn leave', '2022-08-08', '2022-09-09', 'fever', 'rejected', NULL, NULL),
(6, 0, '', 4, 'earn leave', '2022-08-08', '2022-09-09', 'fever', 'approved', NULL, NULL),
(7, 1, '', 6, 'lop leave', '2022-09-09', '2022-11-11', 'fever', 'approved', '2022-07-05 23:07:11', '2022-07-05 23:07:11'),
(8, 0, '', 6, 'lop leave', '2022-09-09', '2022-11-11', 'fever', 'on hold', '2022-07-05 23:07:11', '2022-07-05 23:07:11'),
(9, 0, '', 9, 'marraige leave', '2022-12-11', '2022-12-12', 'kcjsdzkh', 'approved', '2022-07-05 23:31:05', '2022-07-05 23:31:05'),
(10, 0, '', 9, 'marraige leave', '2022-12-11', '2022-12-12', 'kcjsdzkh', 'approved', '2022-07-05 23:31:05', '2022-07-05 23:31:05'),
(11, 0, '', 10, 'lwp leave', '2022-11-11', '2022-12-12', 'adksdj', 'on hold', '2022-07-05 23:36:12', '2022-07-05 23:36:12'),
(12, 0, '', 10, 'lwp leave', '2022-11-11', '2022-12-12', 'adksdj', 'approved', '2022-07-05 23:36:12', '2022-07-05 23:36:12'),
(13, 0, '', 56, 'casual leave', '2022-06-06', '2022-08-08', 'ndcjkas', 'approved', '2022-07-05 23:37:44', '2022-07-05 23:37:44'),
(14, 0, '', 56, 'casual leave', '2022-06-06', '2022-08-08', 'ndcjkas', 'rejected', '2022-07-05 23:37:45', '2022-07-05 23:37:45'),
(15, 0, '', 15, 'casual leave', '2022-09-09', '2022-10-10', 'bkjcs', 'approved', '2022-07-06 00:40:36', '2022-07-06 00:40:36'),
(16, 0, '', 15, 'casual leave', '2022-09-09', '2022-10-10', 'bkjcs', 'approved', '2022-07-06 00:40:36', '2022-07-06 00:40:36'),
(17, 0, '', 20, 'casual leave', '2024-12-12', '2025-12-12', 'fever', 'approved', '2022-07-07 03:50:57', '2022-07-07 03:50:57'),
(18, 0, '', 20, 'casual leave', '2024-12-12', '2025-12-12', 'fever', 'rejected', '2022-07-07 03:50:57', '2022-07-07 03:50:57'),
(19, 0, '', 6, 'casual leave', '2011-07-07', '2022-08-08', 'kcjsdzkh', 'approved', '2022-07-07 10:15:05', '2022-07-07 10:15:05'),
(20, 0, '', 6, 'casual leave', '2011-07-07', '2022-08-08', 'kcjsdzkh', 'approved', '2022-07-07 10:15:05', '2022-07-07 10:15:05'),
(21, 0, 'Aditi', 30, 'earn leave', '2002-08-08', '2332-03-04', 'bkjcs', 'on hold', '2022-07-07 11:47:41', '2022-07-07 11:47:41'),
(22, 2, 'Aditi', 30, 'earn leave', '2002-08-08', '2332-03-04', 'bkjcs', 'approved', '2022-07-07 11:47:41', '2022-07-07 11:47:41'),
(23, 0, 'Harsh', 50, 'casual leave', '2022-05-05', '2022-06-06', 'basic', 'approved', '2022-07-07 22:32:31', '2022-07-07 22:32:31'),
(24, 2, 'Harsh', 50, 'casual leave', '2022-05-05', '2022-06-06', 'basic', 'on hold', '2022-07-07 22:32:31', '2022-07-07 22:32:31'),
(25, 0, 'koushik', 2, 'earn leave', '2022-01-01', '2022-01-01', 'Personal work', 'approved', '2022-07-08 06:59:13', '2022-07-08 06:59:13'),
(26, 0, 'koushik', 2, 'earn leave', '2022-01-01', '2022-01-01', 'Personal work', 'approved', '2022-07-08 06:59:13', '2022-07-08 06:59:13'),
(27, 0, 'koushik', 2, 'earn leave', '2022-07-08', '2022-07-08', 'Travelling', 'approved', '2022-07-08 07:01:35', '2022-07-08 07:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Suhas', '01d859bc55a2a4bbb87ed0298b8c0b1c', '2022-07-06 06:01:12', '2022-07-06 06:01:12'),
(2, 'koushik', '1e9bc3587302f1704bb34c27b672e02d', NULL, NULL),
(10, 'raj', '65a1223dae83b8092c4edba0823a793c', NULL, NULL);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_04_052115_create_login_table', 1),
(6, '2022_07_04_052253_create_details_table', 2),
(8, '2022_07_04_064431_add_columns_to_details_table', 3),
(9, '2022_07_04_071835_add_columns_to_details_table', 4);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timesheets`
--

CREATE TABLE `timesheets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `date` date NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `regular` int(11) NOT NULL,
  `over` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timesheets`
--

INSERT INTO `timesheets` (`id`, `userid`, `date`, `start`, `end`, `regular`, `over`, `total`, `created_at`, `updated_at`) VALUES
(0, 2, '2022-07-15', '01:03:00', '04:03:00', 5, 5, 5, '2022-07-08 04:20:01', '2022-07-08 04:20:01'),
(0, 2, '2024-01-03', '09:00:00', '05:30:00', 5, 10, 10, '2022-07-08 04:22:37', '2022-07-08 04:22:37');

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
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
