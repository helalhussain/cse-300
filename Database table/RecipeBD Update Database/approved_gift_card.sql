-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 05:56 PM
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
-- Table structure for table `approved_gift_card`
--

CREATE TABLE `approved_gift_card` (
  `id` int(11) NOT NULL,
  `gift_id` int(11) NOT NULL,
  `gift_price` int(11) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `approved_gift_card`
--

INSERT INTO `approved_gift_card` (`id`, `gift_id`, `gift_price`, `token`) VALUES
(7, 11, 100, '49738827432'),
(8, 7, 100, '18237523054'),
(9, 12, 100, '61279233655'),
(10, 13, 100, '76976018453');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approved_gift_card`
--
ALTER TABLE `approved_gift_card`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approved_gift_card`
--
ALTER TABLE `approved_gift_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
