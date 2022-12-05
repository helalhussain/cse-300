-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 05:58 PM
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
-- Table structure for table `mycard`
--

CREATE TABLE `mycard` (
  `id` int(100) NOT NULL,
  `user_id` varchar(110) NOT NULL,
  `ingredient_id` int(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mycard`
--

INSERT INTO `mycard` (`id`, `user_id`, `ingredient_id`) VALUES
(13, 'admin@gmail.com', 2),
(15, 'admin@gmail.com', 0),
(16, 'admin@gmail.com', 0),
(17, 'admin@gmail.com', 0),
(18, 'admin@gmail.com', 0),
(19, 'admin@gmail.com', 0),
(21, 'admin@gmail.com', 0),
(22, 'admin@gmail.com', 0),
(23, 'admin@gmail.com', 0),
(24, 'admin@gmail.com', 0),
(25, 'admin@gmail.com', 0),
(26, 'admin@gmail.com', 0),
(27, 'admin@gmail.com', 0),
(28, 'admin@gmail.com', 0),
(30, 'tomalkrishnadas21@gmail.com', 0),
(31, 'tomalkrishnadas21@gmail.com', 0),
(32, 'tomalkrishnadas21@gmail.com', 0),
(33, 'tomalkrishnadas21@gmail.com', 0),
(35, 'admin@gmail.com', 0),
(36, 'admin@gmail.com', 0),
(39, 'tomalkrishnadas21@gmail.com', 4),
(41, 'admin@gmail.com', 6),
(56, 'tomalkrishnadas21@gmail.com', 1),
(57, 'tomalkrishnadas21@gmail.com', 1),
(58, 'tomalkrishnadas21@gmail.com', 1),
(59, 'tomalkrishnadas21@gmail.com', 3),
(60, 'admin@gmail.com', 1),
(61, 'tomalkrishnadas21@gmail.com', 1),
(62, 'tomalkrishnadas21@gmail.com', 1),
(63, 'tomalkrishnadas21@gmail.com', 12),
(64, 'tomalkrishnadas21@gmail.com', 1),
(65, 'admin@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mycard`
--
ALTER TABLE `mycard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mycard`
--
ALTER TABLE `mycard`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
