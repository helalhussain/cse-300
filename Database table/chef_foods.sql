-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 04:58 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `chef_foods`
--

CREATE TABLE `chef_foods` (
  `id` int(11) NOT NULL,
  `chef_id` varchar(255) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(760) NOT NULL,
  `image` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chef_foods`
--

INSERT INTO `chef_foods` (`id`, `chef_id`, `title`, `description`, `image`) VALUES
(1, '2', 'New chef add', 'New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor', 'image/recipe/food1.png'),
(2, '2', 'new chef', '<span style=\"color: rgb(15, 23, 42); font-family: Nunito, sans-serif; font-size: 16px; background-color: rgb(248, 250, 252);\">New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor&nbsp;</span><div><span style=\"color: rgb(15, 23, 42); font-family: Nunito, sans-serif; font-size: 16px; background-color: rgb(248, 250, 252);\">New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor New chef n', 'image/recipe/food1.png'),
(3, '4', 'Chef food ads', '<span style=\"color: rgb(15, 23, 42); font-family: Nunito, sans-serif; font-size: 16px; background-color: rgb(248, 250, 252);\">Lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor New chef new item. lorem text editor</span>', 'image/recipe/0006_16x9_ChocHazelnutRoulade_520x500.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chef_foods`
--
ALTER TABLE `chef_foods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chef_foods`
--
ALTER TABLE `chef_foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
