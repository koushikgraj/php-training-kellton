-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 02:19 PM
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
-- Database: `kellton`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `user_name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `gender` enum('male','female','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`user_name`, `password`, `email`, `date`, `gender`) VALUES
('Virendra Rajput', 'viren123', 'virendrarajput041@gmail.com', '1994-06-21', 'male'),
('Virendra Rajput', 'viren123', 'virendrarajput041@gmail.com', '1994-06-21', 'male'),
('shikha', 'shikha123', 'shikha95@gmail.com', '2022-06-03', 'female'),
('neha', 'neha', 'neha12@gmail.com', '2003-02-06', 'female'),
('rahul', 'rahulshamr123', 'rahulmewada85@gmail.com', '1995-06-27', 'male'),
('koushik sir', '#Koushik123', 'koushik85@gmail.com', '1992-01-16', 'male'),
('narendra ', 'naren#856', 'nareshashwal123@gmail.com', '2003-06-21', 'male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
