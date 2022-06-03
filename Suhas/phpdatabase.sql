-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 07:37 AM
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
-- Database: `phpdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Surname` varchar(25) NOT NULL,
  `MobNo` int(20) NOT NULL,
  `Create_date` datetime NOT NULL,
  `Modify_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`Id`, `Name`, `Surname`, `MobNo`, `Create_date`, `Modify_Date`) VALUES
(1001, 'Suhas', 'Surwase', 98903635, '2022-06-03 07:35:37', '2022-06-03 07:35:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
