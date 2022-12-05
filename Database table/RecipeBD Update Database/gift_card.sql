-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 05:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipebd`
--

-- --------------------------------------------------------

--
-- Table structure for table `gift_card`
--

CREATE TABLE `gift_card` (
  `id` int(100) NOT NULL,
  `user_id` varchar(110) NOT NULL,
  `gift` int(11) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(110) NOT NULL DEFAULT '1',
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gift_card`
--

INSERT INTO `gift_card` (`id`, `user_id`, `gift`, `message`, `status`, `view`) VALUES
(6, 'admin@gmail.com', 70, '', '1', 1),
(7, 'admin@gmail.com', 100, '', '1', 1),
(8, 'admin@gmail.com', 60, '', '0', 0),
(9, 'admin@gmail.com', 60, '', '0', 0),
(10, 'admin@gmail.com', 60, '', '0', 0),
(11, 'admin@gmail.com', 100, '', '1', 1),
(12, 'admin@gmail.com', 100, '', '1', 1),
(13, 'tomal2020@gmail.com', 100, '', '1', 1),
(14, 'tomal2020@gmail.com', 7, '', '1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gift_card`
--
ALTER TABLE `gift_card`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gift_card`
--
ALTER TABLE `gift_card`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
