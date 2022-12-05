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
-- Table structure for table `recipe_box`
--

CREATE TABLE `recipe_box` (
  `id` int(11) NOT NULL,
  `title` varchar(110) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image_1` varchar(560) NOT NULL,
  `image_2` varchar(555) NOT NULL,
  `image_3` varchar(555) NOT NULL,
  `image_4` varchar(555) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1',
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe_box`
--

INSERT INTO `recipe_box` (`id`, `title`, `description`, `image_1`, `image_2`, `image_3`, `image_4`, `status`, `date`) VALUES
(1, 'first recipe box', '<span style=\"color: rgb(255, 255, 255); font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap; background-color: rgb(24, 24, 24);\">you Russia and long live Russia and long live Putin 🇷🇺🇷🇺🇷🇺🇷🇺🇷🇺</span>', 'image/ad_post/0006_16x9_ChocHazelnutRoulade_520x500.webp', 'image/ad_post/60be5fd513b3a.webp', 'image/ad_post/WhatsApp Image 2022-03-26 at 1.00.31 PM.jpeg', 'image/ad_post/WhatsApp Image 2022-03-26 at 1.00.31 PM.jpeg', '1', 0),
(2, '2nd recipe box', 'This is my 2nd recipe box in this web site This is my 2nd recipe box in this web site<div>This is my 2nd recipe box in this web site&nbsp;<span style=\"font-size: 10pt;\">This is my 2nd recipe box in this web site</span></div><div>This is my 2nd recipe box in this web site</div>', 'image/0006_16x9_ChocHazelnutRoulade_520x500.webp', 'image/60be5fd513b3a.webp', 'image/286419876_5117862888332767_1608218412810311743_n.jpg', 'image/food1.png', '1', 0),
(3, '2nd title', '<span style=\"box-sizing: border-box; font-family: Nunito, sans-serif; font-size: 16px; color: rgb(51, 65, 85); background-color: rgb(248, 250, 252);\">A mayonnaise 2 teaspoons Dijon mustard</span><span style=\"box-sizing: border-box; font-family: Nunito, sans-serif; font-size: 16px; color: rgb(51, 65, 85); background-color: rgb(248, 250, 252);\">&nbsp;cup mayonnaise 2 teaspoons Dijon mustard&nbsp;</span><span style=\"box-sizing: border-box; font-family: Nunito, sans-serif; font-size: 16px; color: rg', 'image/a.webp', 'image/w.webp', 'image/food1.png', 'image/10_7a9b0e5e-aeaf-49c6-9d23-24e99753313f.webp', '1', 0),
(4, '3rd title', '<span style=\"color: rgb(35, 35, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 20px; background-color: rgb(255, 255, 255);\">Discover how you can elevate the way you work by combining webinar, chat, meetings, and phone solutions into one seamless platform.&nbsp;</span><span style=\"color: rgb(35, 35, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 20px; background-color: rgb(255, 255, 255);\">Discover how you can elevate', 'image/38_WinterBox_1x1_273e312c-cb7e-42c9-805c-1d9f3e0d2483_1400x.jpg', 'image/food1.png', 'image/A1.jpg', 'image/Crunchy-Peanut-Butter-Banana-French-Toast-by-Stacks-Pancake-House_1400x.jpg', '1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipe_box`
--
ALTER TABLE `recipe_box`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipe_box`
--
ALTER TABLE `recipe_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
