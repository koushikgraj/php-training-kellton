-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 06:31 PM
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
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `Programming_language` varchar(100) NOT NULL,
  `Proficiency_level` enum('beginner','learner','expert','advancedexpert') NOT NULL,
  `Certification` varchar(100) NOT NULL,
  `Work_experience` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `Programming_language`, `Proficiency_level`, `Certification`, `Work_experience`) VALUES
(87, '', '', '', ''),
(88, 'c', '', '4', '6'),
(89, 'c', '', '4', '6'),
(90, '', 'beginner', '', ''),
(91, 'c', '', '4', '6'),
(92, '', 'beginner', '', ''),
(93, 'java', 'beginner', '4', '6'),
(94, 'java', '', '4', '6'),
(95, 'c', '', '4', '6'),
(96, '', 'beginner', '', ''),
(97, 'c', '', '4', '6'),
(98, '', 'beginner', '', ''),
(99, 'java', 'learner', '4', '6'),
(100, '', 'beginner', '', ''),
(101, '', 'beginner', '', ''),
(102, '', 'beginner', '', ''),
(103, '', 'beginner', '', ''),
(104, '', 'beginner', '', ''),
(105, '', 'beginner', '', ''),
(106, '', 'beginner', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
