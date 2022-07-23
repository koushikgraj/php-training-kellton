-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 06:33 PM
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
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `Course` text NOT NULL,
  `University` text NOT NULL,
  `Academic_year` varchar(20) NOT NULL,
  `Year_of_passing` year(4) NOT NULL,
  `Percentage` float(3,2) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`Course`, `University`, `Academic_year`, `Year_of_passing`, `Percentage`, `id`) VALUES
('ssc', 'GNITC', '', 2000, 9.99, 6),
('Degree', 'GNI', '2333-09-02', 2022, 9.99, 7),
('B.tech', 'GNI', '2333-09-02', 2022, 9.99, 8),
('B.tech', 'GNITC', '', 2020, 9.99, 11),
('B.tech', 'GNI', '3212-03-22', 0000, 9.99, 12),
('B.tech', 'GNITC', '2020', 2022, 9.99, 15),
('B.tech', 'GNIT', '2020', 2021, 9.99, 21),
('B.tech', 'GNIT', '2020', 2021, 9.99, 22),
('B.tech', 'GNIT', '2020', 2021, 9.99, 23),
('B.tech', 'GNITC', '2020', 2022, 9.99, 29),
('B.tech', 'GNI', '2020', 0000, 9.99, 30),
('B.tech', 'GNITC', '2020', 2021, 9.99, 31),
('B.tech', 'GNITC', '2020', 2021, 9.99, 32),
('B.tech', 'GNI', '2020', 2089, 9.99, 33),
('B.tech', 'GNI', '2020', 2089, 9.99, 34),
('B.tech', 'GNITC', '2020', 2021, 9.99, 35),
('B.tech', 'GNU', '2020', 2021, 9.99, 40),
('B.tech', 'GNU', '2020', 2021, 9.99, 44),
('B.tech', 'JNTU', '', 2019, 9.99, 49),
('Inter', 'ZPs', '2020', 2022, 9.99, 52),
('Inter', 'ZPs', '2020', 2022, 9.99, 53),
('B.tech', 'GNU', '2018-2019', 2022, 9.99, 56);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
