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
-- Table structure for table `press`
--

CREATE TABLE `press` (
  `id` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL,
  `siteLink` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `press`
--

INSERT INTO `press` (`id`, `title`, `description`, `date`, `siteLink`) VALUES
(10, 'Roasted Shrimp Enchiladas with Jalapeño Cream Sauce', 'Roasted Shrimp Enchiladas with Jalapeño Cream Sauce featured on HuffPost Taste Enchilada Recipes: 10 Ways with The Mexican Dish', '04:11:pm 07-11-2022', 'https://www.huffpost.com/entry/enchilada-recipes_n_1819133#slide=1408878'),
(11, 'Garlic Truffle Fries', 'Garlic Truffle Fries featured on HuffPost Taste French Fry Recipes: 13 Crispy Snacks', '04:11:pm 07-11-2022', 'http://www.huffingtonpost.com/2013/01/08/french-fry-recipes_n_2411651.html'),
(12, 'Steak Chili', 'Steak Chili featured on HuffPost Taste Chili Recipes: 16 Hearty Dishes', '04:11:pm 07-11-2022', 'http://www.huffingtonpost.com/2013/01/10/chili-recipes_n_2440677.html'),
(13, 'Nutella Donuts', 'Nutella Donuts featured on HuffPost Taste Recipes with Nutella: Cookies, Cakes and More', '05:11:pm 07-11-2022', 'http://www.huffingtonpost.com/2012/10/08/recipes-with-nutella_n_1942810.html'),
(14, 'Banana Bread Kit Kat Muffins', 'Banana Bread Kit Kat Muffins featured on HuffPost Taste Banana Bread Recipes: Donuts, French Toast and More', '05:11:pm 07-11-2022', 'http://www.huffingtonpost.com/2013/02/13/banana-bread-recipes_n_2670160.html'),
(15, 'Garlic Cheese Fries', 'Garlic Cheese Fries featured on HuffPost Taste Cheese Fries Recipe: You May Not Need One, But You Probably Want One', '05:11:pm 07-11-2022', 'http://www.huffingtonpost.com/2013/03/04/cheese-fries-recipe_n_2791344.html');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `press`
--
ALTER TABLE `press`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `press`
--
ALTER TABLE `press`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
