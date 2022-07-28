-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 11:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'viren@gmail.com', 'd8c95cbb06714936363ff22b213cfd0a', NULL, NULL),
(3, '', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 9, 5, '2022-07-25 13:28:42', '2022-07-25 13:28:42'),
(2, 9, 5, '2022-07-25 13:34:11', '2022-07-25 13:34:11'),
(3, 10, 5, '2022-07-25 13:58:07', '2022-07-25 13:58:07'),
(4, 10, 5, '2022-07-25 23:11:29', '2022-07-25 23:11:29'),
(5, 10, 5, '2022-07-25 23:36:09', '2022-07-25 23:36:09'),
(6, 10, 5, '2022-07-25 23:39:54', '2022-07-25 23:39:54'),
(7, 11, 9, '2022-07-26 14:32:38', '2022-07-26 14:32:38'),
(8, 14, 9, '2022-07-26 14:43:53', '2022-07-26 14:43:53'),
(9, 11, 9, '2022-07-26 14:47:43', '2022-07-26 14:47:43'),
(10, 11, 9, '2022-07-26 15:03:58', '2022-07-26 15:03:58'),
(11, 10, 6, '2022-07-26 15:15:11', '2022-07-26 15:15:11'),
(12, 11, 6, '2022-07-26 15:24:19', '2022-07-26 15:24:19'),
(13, 11, 6, '2022-07-26 15:47:07', '2022-07-26 15:47:07'),
(14, 10, 6, '2022-07-26 16:03:55', '2022-07-26 16:03:55'),
(15, 10, 6, '2022-07-26 16:13:35', '2022-07-26 16:13:35'),
(16, 10, 6, '2022-07-26 16:22:22', '2022-07-26 16:22:22'),
(17, 17, 6, '2022-07-26 16:34:21', '2022-07-26 16:34:21'),
(18, 17, 6, '2022-07-26 16:36:01', '2022-07-26 16:36:01'),
(19, 14, 6, '2022-07-26 16:45:03', '2022-07-26 16:45:03'),
(20, 11, 8, '2022-07-27 00:57:58', '2022-07-27 00:57:58'),
(21, 14, 6, '2022-07-27 14:56:52', '2022-07-27 14:56:52'),
(22, 11, 6, '2022-07-27 14:59:00', '2022-07-27 14:59:00'),
(23, 11, 6, '2022-07-27 15:00:45', '2022-07-27 15:00:45'),
(24, 23, 6, '2022-07-27 15:26:08', '2022-07-27 15:26:08'),
(25, 14, 6, '2022-07-27 16:17:55', '2022-07-27 16:17:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` bigint(20) NOT NULL,
  `image` blob NOT NULL,
  `product_descrip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `product_name`, `product_price`, `image`, `product_descrip`, `created_at`, `updated_at`) VALUES
(9, 'Cactus Plant', 180, 0x706c616e74312e706e67, 'Jasminum sambac, Mogra, Arabian Jasmine - Plant', '2022-07-23 15:47:31', '2022-07-27 01:01:21'),
(10, 'Bamboo Plant', 120, 0x706c616e74322e6a7067, 'Holy Basil, Ocimum tenuiflorum  - Plant', '2022-07-23 15:52:29', '2022-07-23 15:58:51'),
(11, 'Dragon Plant', 170, 0x706c616e74332e706e67, 'This plant has great architectural leaves, curving as it grows for a tropical lo🍹.', '2022-07-23 15:57:42', '2022-07-25 12:42:45'),
(12, 'Dracaena Plant', 125, 0x706c616e74342e6a7067, 'The dracaena corn plant is easy to maintailso made the list', '2022-07-23 15:59:48', '2022-07-25 12:43:13'),
(13, 'Rubber plant', 130, 0x706c616e74352e706e67, 'The rubber plant is the less finicky sister of the fiddle leaf , green leaves', '2022-07-23 16:01:05', '2022-07-25 12:47:27'),
(14, 'Heartleaf Plant', 140, 0x706c616e74362e706e67, 'This is a go-to gift for birthdays, weddings, and anniv', '2022-07-23 16:02:47', '2022-07-25 12:48:21'),
(15, 'Monstera Plant', 150, 0x706c616e74372e6a7067, 'Also known as the Swiss cheese plant for its holes, the Monster', '2022-07-23 16:03:34', '2022-07-25 12:47:57'),
(16, 'Polka dot plant', 160, 0x706c616e74382e706e67, 'Need some color to brighten up a drab room? The polka dot p for its pink spots.', '2022-07-23 16:06:34', '2022-07-25 12:48:29'),
(17, 'Rattlesnake plant', 125, 0x706c616e74392e706e67, 'As part of the Calathea family, the rattlesnake plant sho', '2022-07-23 16:11:33', '2022-07-25 12:48:05'),
(18, 'Gulmohar', 500, 0x506c616e7420352e6a7067, 'This tree is a flowering tree with bright orange flowers', '2022-07-25 13:19:01', '2022-07-25 13:20:12'),
(19, 'Neem', 1000, 0x706c61746e372e6a7067, 'This tree is famously popular for its medicinal values and healing properties.', '2022-07-25 13:21:23', '2022-07-25 13:21:23'),
(21, 'Peepal', 130, 0x706c616e742031302e6a7067, 'This is an evergreen tree and is also worshipped in many parts', '2022-07-25 13:24:02', '2022-07-25 13:24:02'),
(23, 'Tulip Plant', 450, 0x706c616e7432302e6a7067, 'Plant with beautiful flowers', '2022-07-27 15:24:27', '2022-07-27 15:24:27');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `fullname`, `email`, `address`, `city`, `state`, `zip`, `updated_at`, `created_at`) VALUES
(1, 'mona', 'suhas@gmail.com', 'abc', 'xzx', 'Madhya Pradesh', '1234', '2022-07-26 16:01:50', '2022-07-26 16:01:50'),
(2, 'kas', 'viren@gmail.com', 'abc', 'vtygtg', 'Uttar Pradesh', '123456', '2022-07-26 16:20:49', '2022-07-26 16:20:49'),
(3, 'kas', 'by@gmail.com', 'BJA', 'BAGYHHX', 'Uttar Pradesh', '123456', '2022-07-26 16:23:09', '2022-07-26 16:23:09'),
(4, 'kashj', 'viren@1234gmail.com', 'dxsx', 'xaxa', 'Madhya Pradesh', '123', '2022-07-26 16:36:58', '2022-07-26 16:36:58'),
(5, 'dsgs', 'xdsc@gamil.com', 'cszxszx', 'szxzx', 'Madhya Pradesh', '1234', '2022-07-27 00:59:45', '2022-07-27 00:59:45'),
(6, 'mona', 'viren@gmail.com', 'cszxszx', 'scsz', 'Madhya Pradesh', '12345', '2022-07-27 14:18:10', '2022-07-27 14:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'cesdc', 'byc@gmail.com', 'dxsdxs', 'dxwsdxs', '2022-07-26 16:33:52', '2022-07-26 16:33:52');

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
(47, '2022_07_20_131907_create_admin_table', 2),
(48, '2022_07_20_172015_create_category_table', 2),
(49, '2022_07_21_044107_create_product_table', 3),
(73, '2022_07_19_101933_create_register_table', 4),
(74, '2022_07_19_112635_create_login_table', 4),
(92, '2014_10_12_000000_create_users_table', 5),
(93, '2014_10_12_100000_create_password_resets_table', 5),
(94, '2019_08_19_000000_create_failed_jobs_table', 5),
(95, '2019_12_14_000001_create_personal_access_tokens_table', 5),
(96, '2022_07_20_065512_create_contact_us_table', 5),
(97, '2022_07_21_163255_create_admins_table', 5),
(98, '2022_07_21_170741_create_categories_table', 5),
(99, '2022_07_23_164140_create_cart_table', 6),
(100, '2022_07_26_045126_create_chekout_table', 7);

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
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mona', 'byc@gmail.com', '98765432123', '$2y$10$TxgOAAL0azbKBtAMG53L9uCEMtE3jDZk2eDc76gzn7z8VmYYWmhYy', NULL, '2022-07-23 00:34:34', '2022-07-23 00:34:34'),
(2, 'priya', 'xdsc@gamil.com', '1234567890', '$2y$10$AovqH5dnyjo9wLcW/ERku.slT9b6aHLPA9Q/wrdBdjPyFONz/mpbS', NULL, '2022-07-23 00:39:05', '2022-07-23 00:39:05'),
(3, 'Tisha Agrawal', 'by@gmail.com', '98765432123', '$2y$10$85NqXMwFWp9La/5sBEjtBuone7Cfmk/Ro7g7pQkOlhXqg32SLoj9u', NULL, '2022-07-23 00:49:51', '2022-07-23 00:49:51'),
(4, 'scxs', 'viren@1234', '12345678787', '$2y$10$phesPtH8ecKtUr/bSkgZkOAQfjOSSH7hfoErl8JBbc4MdEyynnoSC', NULL, '2022-07-23 00:52:57', '2022-07-23 00:52:57'),
(5, 'Virendra Rajput', 'veerurajput94@gmail.com', '9098581549', 'e10adc3949ba59abbe56e057f20f883e', NULL, '2022-07-25 13:28:12', '2022-07-25 13:28:12'),
(6, 'kashish', 'kashish@gmail.com', '9876543213', 'e10adc3949ba59abbe56e057f20f883e', NULL, '2022-07-26 15:14:26', '2022-07-26 15:14:26'),
(7, 'gopi', 'gopi@gmail.com', '97643566776', 'e10adc3949ba59abbe56e057f20f883e', NULL, '2022-07-26 16:53:08', '2022-07-26 16:53:08'),
(8, 'lavi', 'lavi@gmail.com', '97545677867878', 'e10adc3949ba59abbe56e057f20f883e', NULL, '2022-07-27 00:55:09', '2022-07-27 00:55:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
