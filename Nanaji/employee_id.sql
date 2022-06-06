-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 03:30 PM
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
-- Database: `phpdatabasenanaji`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee id`
--

CREATE TABLE `employee id` (
  `Emp id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `mobile no` varchar(50) NOT NULL,
  `State` varchar(20) NOT NULL,
  `collagename` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee id`
--

INSERT INTO `employee id` (`Emp id`, `Name`, `mobile no`, `State`, `collagename`) VALUES
(496, 'Garide Nanaji', '9014407490', 'Telangana', 'GNI'),
(11224, 'Garide Nanaji', '9014407490', 'Telangana', 'GNI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee id`
--
ALTER TABLE `employee id`
  ADD PRIMARY KEY (`Emp id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee id`
--
ALTER TABLE `employee id`
  MODIFY `Emp id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11225;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
