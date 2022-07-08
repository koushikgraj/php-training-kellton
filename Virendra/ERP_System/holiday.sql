-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 09:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `id` int(10) UNSIGNED NOT NULL,
  `no` int(11) NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `day_of_the_week` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `holiday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `holiday_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`id`, `no`, `month`, `date`, `day_of_the_week`, `holiday`, `holiday_type`, `created_at`, `updated_at`) VALUES
(16, 1, 'January', '2022-01-13', 'Thursday', 'Lohri', 'Mandatory Holiday', '2022-07-07 12:27:06', '2022-07-07 12:27:06'),
(18, 2, 'January', '2022-01-26', 'Wednesday', 'Republic Day', 'Mandatory Holiday', '2022-07-07 12:35:57', '2022-07-07 12:35:57'),
(19, 3, 'March', '2022-03-12', 'Friday', 'Good Friday', 'Mandatory Holiday', '2022-07-07 12:37:32', '2022-07-07 12:37:32'),
(20, 4, 'April', '2022-04-15', 'Friday', 'Good Friday', 'Mandatory Holiday', '2022-07-07 12:41:57', '2022-07-07 12:41:57'),
(21, 5, 'Augest', '2022-05-03', 'Tuesday', 'Eid-Ul-Fitr', 'Mandatory Holiday', '2022-07-07 12:43:39', '2022-07-07 12:43:39'),
(22, 6, 'Augest', '2022-08-15', 'Munday', 'Independence Day', 'Mandatory Holiday', '2022-07-07 12:46:26', '2022-07-07 12:46:26'),
(23, 7, 'Augest', '2022-08-19', 'Friday', 'Janmashtmi', 'Mandatory Holiday', '2022-07-07 12:48:16', '2022-07-07 12:48:16'),
(26, 8, 'october', '2022-10-05', 'Wednesday', 'Dussehra', 'Mandatory Holiday', '2022-07-07 12:54:56', '2022-07-07 12:54:56'),
(27, 9, 'october', '2022-10-24', 'Munday', 'Diwali', 'Mandatory Holiday', '2022-07-07 12:55:43', '2022-07-07 12:55:43'),
(28, 10, 'November', '2022-11-08', 'Tuesday', 'Guru Nanak Jayanti', 'Mandatory Holiday', '2022-07-07 12:57:10', '2022-07-07 12:57:10'),
(29, 15, 'January', '2022-05-05', 'xx', 'xyz', 'fdfd', '2022-07-07 14:08:37', '2022-07-07 14:08:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
