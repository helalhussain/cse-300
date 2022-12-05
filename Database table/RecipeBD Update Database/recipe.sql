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
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(360) NOT NULL,
  `Prep Time` int(11) NOT NULL,
  `Cooking Time` int(11) NOT NULL,
  `Serving` int(11) NOT NULL,
  `Instructions` varchar(2000) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `category` varchar(200) NOT NULL,
  `ingredient` varchar(2000) NOT NULL,
  `image` varchar(500) NOT NULL,
  `calories` varchar(100) DEFAULT NULL,
  `cholesterol` varchar(110) DEFAULT NULL,
  `sodium` varchar(110) DEFAULT NULL,
  `protein` varchar(100) DEFAULT NULL,
  `fat` varchar(100) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `title`, `description`, `Prep Time`, `Cooking Time`, `Serving`, `Instructions`, `tag`, `category`, `ingredient`, `image`, `calories`, `cholesterol`, `sodium`, `protein`, `fat`, `status`) VALUES
(19, 'CLASSIC EGG SALAD', '', 30, 25, 6, 'To make the classic egg salad, make sure the eggs are boil over high heat. These classic egg salads ', 'Breakfast', 'Dinner\r\n', ' 6 large eggs\r\nÂ¼ cup mayonnaise\r\n2 teaspoons Dijon mustard\r\n                               \r\n                                   ', 'image/recipe/Classic-Egg-Salad_1400x.webp', NULL, NULL, NULL, NULL, NULL, '1'),
(20, 'Chocolate Hazelnut Roulade', '', 12, 1, 6, ' 1.Preheat oven to 350Â°F (177Â°C). \r\n2.Spray a 12x17 inch baking pan with nonstick spray or grease ', 'Dessert', 'Dessert', '4 large eggs, separated\n1 Tablespoon (15ml) strong brewed coffee *or* 1 teaspoon espresso powder\n1/4 cup (60g) unsalted butter, melted\n1 teaspoon Torani Puremade Hazelnut syrup\n1/2 cup (63g) all-purpose flour (spoon & leveled)\n3 Tablespoons natural unsweetened cocoa powder, plus 2 Tablespoons (', 'image/recipe/0006_16x9_ChocHazelnutRoulade_520x500.webp', NULL, NULL, NULL, NULL, NULL, '1'),
(21, 'Chocolate Hazelnut Roulade', '', 12, 1, 6, ' 1. Preheat oven to 350Â°F (177Â°C). <br>\r\n2. Spray a 12x17 inch baking pan with nonstick spray or g', 'Dessert', 'Dessert', '1. 4 large eggs, separated<br>\r\n2. 1 tablespoon strong brewed coffee *or* 1 teaspoon espresso powder <br>\r\n3. 1/4 cup unsalted butter, melted<br>\r\n4. 1 teaspoon Torani Puremade Hazelnut syrup<br>\r\n5. 1/2 cup (63g) all-purpose flour (spoon & leveled)<br>\r\n6. 3 tablespoons natural unsweetened cocoa po', 'image/recipe/0006_16x9_ChocHazelnutRoulade_520x500.webp', NULL, NULL, NULL, NULL, NULL, '1'),
(23, 'demo100', 'this is demo', 30, 25, 2, ' demonstration', 'Breakfast', 'Breakfast', 'a be e', 'image/recipe/60be5fd513b3a.webp', NULL, NULL, NULL, NULL, NULL, '1'),
(24, 'Update title of Recipe', '<span style=\"color: rgb(51, 65, 85); font-family: Nunito, sans-serif; font-size: 16px; background-color: rgb(248, 250, 252);\">A mayonnaise 2 teaspoons Dijon mustard</span><span style=\"color: rgb(51, 65, 85); font-family: Nunito, sans-serif; font-size: 16px; background-color: rgb(248, 250, 252);\">&nbsp;cup mayonnaise 2 teaspoons Dijon mustard</span><span styl', 0, 0, 0, '<span style=\"color: rgb(51, 65, 85); font-family: Nunito, sans-serif; font-size: 16px; background-color: rgb(248, 250, 252);\">C cup mayonnaise 2 teaspoons Dijon mustard</span>', 'Dinner', 'Breakfast', '<span style=\"color: rgb(51, 65, 85); font-family: Nunito, sans-serif; font-size: 16px; background-color: rgb(248, 250, 252);\">5more large eggs Â¼ cup mayonnaise 2 teaspoons Dijon mustard</span>', 'image/recipe/com11.jpg', '30', '10', '20', '20', '10', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
