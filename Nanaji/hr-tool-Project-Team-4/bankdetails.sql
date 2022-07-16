-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 06:30 PM
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
-- Database: `erp_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `bankdetails`
--

CREATE TABLE `bankdetails` (
  `id` bigint(200) UNSIGNED NOT NULL,
  `onbording_id` int(200) NOT NULL,
  `account_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ifsc_code` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bankdetails`
--

INSERT INTO `bankdetails` (`id`, `onbording_id`, `account_type`, `country`, `ifsc_code`, `contact`, `name`, `location`, `account_number`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(117, 0, 'Savings', 'India', '123442', '1234567890', 'State Bank Of India', 'hyderabad', '12121212121212', '', '', '2022-07-14 14:40:19', '2022-07-14 14:40:19'),
(128, 0, 'Current Account', 'India', '123442', '9948497807', 'Dhiraj Kumar Yadav', 'HYDERABAD', '2333426463563', '', '', '2022-07-15 10:41:21', '2022-07-15 10:41:21'),
(129, 0, 'Current Account', 'Nepal', '123442', '9948497807', 'State Bank Of India', 'hyderabad', '23452341234256', '', '', '2022-07-15 10:43:45', '2022-07-15 10:43:45'),
(130, 0, 'Regular', 'USA', '000000', '9948497807', 'AXIS', 'Siraha', '998877665544', '', '', '2022-07-15 10:44:34', '2022-07-15 10:44:34'),
(131, 0, 'Salary Account', 'Japan', '010203', '1234567890', 'HDFC', 'Delhi', '1029384756019283', '', '', '2022-07-15 10:45:37', '2022-07-15 10:45:37'),
(132, 0, 'Current Account', 'Nepal', '123456', '9948338832', 'Sbi', 'Patna', '1234512345123', '', '', '2022-07-15 10:47:52', '2022-07-15 10:47:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bankdetails`
--
ALTER TABLE `bankdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bankdetails`
--
ALTER TABLE `bankdetails`
  MODIFY `id` bigint(200) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
