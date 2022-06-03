-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 07:53 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `phpdata`
--

CREATE TABLE `phpdata` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Sur_Name` varchar(30) NOT NULL,
  `Mobile_Number` varchar(20) NOT NULL,
  `Create_Date` datetime NOT NULL,
  `Update_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phpdata`
--

INSERT INTO `phpdata` (`ID`, `Name`, `Sur_Name`, `Mobile_Number`, `Create_Date`, `Update_Date`) VALUES
(1011, 'Arshil', 'Aziz', '9643030859', '2022-06-03 11:21:16', '2022-06-03 11:21:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phpdata`
--
ALTER TABLE `phpdata`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
