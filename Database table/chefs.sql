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
-- Table structure for table `chefs`
--

CREATE TABLE `chefs` (
  `id` int(11) NOT NULL,
  `name` varchar(110) NOT NULL,
  `about` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chefs`
--

INSERT INTO `chefs` (`id`, `name`, `about`, `image`) VALUES
(1, 'Solt bee', 'Matthew Accarrino is the nationally recognized chef of SPQR in San Francisco, CA. Born in the Midwest and raised on the east coast, he moved west to California in 2007. His unique culinary style draws inspiration from his Italian heritage, personal experiences, and classical training with some of America’s best chefs, coupled with his embrace of the bounty of opportunities that California ingredients present. With a strong belief in direct sourcing, Accarrino endeavors to play a role in the grow', 'image/recipe/0ksJINEvikkZ5.jpeg'),
(2, 'CZN Burak', 'A nationally recognized chef of SPQR in San Francisco, CA. Born in the Midwest and raised on the east coast, he moved west to California in 2007. His unique culinary style draws inspiration from his Italian heritage, personal experiences, and classical training with some of America’s best chefs, coupled with his embrace of the bounty of opportunities that California ingredients present. With a strong belief in direct sourcing, Accarrino endeavors to play a role in the growing and development of ', 'image/recipe/ElpL9NFXYAEJjBZ.jpg'),
(3, 'Solt bee', 'Solt bee a good chef in the word', 'image/recipe/0ksJINEvikkZ5.jpeg'),
(4, 'Midwest and raised', '<span style=\"color: rgb(15, 23, 42); font-family: Nunito, sans-serif; font-size: 16px; background-color: rgb(255, 255, 255);\">Midwest and raised on the east coast, he moved west to California in 2007. His unique culinary style draws inspiration from his Italian heritage, personal experiences, and classical training with some of America’s best chefs, coupled with his embrace of the bounty of opportunities that California ingredients present. With a strong belief in direct sourcing, Accarrino ende', 'image/recipe/https___foodsided.com_files_2021_06_20-HR-018_20200629_KitKat_LE_FruityCereal_IC_BowlShotWithPackageAndBars.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chefs`
--
ALTER TABLE `chefs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chefs`
--
ALTER TABLE `chefs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
