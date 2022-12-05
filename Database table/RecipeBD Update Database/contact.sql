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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(300) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` int(50) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `message`, `date`, `status`) VALUES
(1, 'wasedah@gmail.com', 'fg fg', '05:06:pm 06-06-2022', 1),
(2, 'manik', 'Hi', '10:06:am 12-06-2022', 1),
(3, 'admin@gmail.com', 'hi', '10:06:am 12-06-2022', 1),
(4, 'admin@gmail.com', 'hhh', '10:06:am 12-06-2022', 1),
(5, 'admin@gmail.com', 'hhh', '10:06:am 12-06-2022', 1),
(6, 'admin@gmail.com', 'hi', '09:06:am 15-06-2022', 1),
(7, 'tomal2020@gmail.com', 'Hi', '09:06:am 15-06-2022', 1),
(8, 'tomal2020@gmail.com', 'Hello Admin', '07:06:am 16-06-2022', 1),
(9, 'tomal2020@gmail.com', 'I need help', '07:06:am 16-06-2022', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
