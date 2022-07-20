-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 06:28 PM
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
-- Table structure for table `profilepage`
--

CREATE TABLE `profilepage` (
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `date_of_joining` date NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `employee_type` varchar(100) NOT NULL,
  `id` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profilepage`
--

INSERT INTO `profilepage` (`name`, `contact`, `address`, `email`, `dob`, `employee_id`, `date_of_joining`, `company_name`, `location`, `employee_type`, `id`, `created_at`, `updated_at`) VALUES
('suman', '6301964832', '5-651,CHERKUR', 'sandeepeslavath883@gmail.com', '2022-07-20', '22321', '2022-07-13', 'kelltontech', 'Gurugram', 'Technical', 22, '2022-07-15 09:20:58', '2022-07-15 09:20:58'),
('suman', '6301964832', '5-651,CHERKUR', 'sandeepeslavath883@gmail.com', '2022-07-20', '22321', '2022-07-13', 'kelltontech', 'Gurugram', 'Technical', 25, '2022-07-15 09:46:44', '2022-07-15 09:46:44'),
('vijay', '6301964832', '5-651,CHERKUR', 'sandeepeslavath883@gmail.com', '2022-07-26', '11224', '2022-07-19', 'kelltontech', 'Hyderabad', 'Technical', 31, '2022-07-15 14:25:43', '2022-07-15 14:25:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profilepage`
--
ALTER TABLE `profilepage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profilepage`
--
ALTER TABLE `profilepage`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
