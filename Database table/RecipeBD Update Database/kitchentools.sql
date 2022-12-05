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
-- Table structure for table `kitchentools`
--

CREATE TABLE `kitchentools` (
  `id` int(100) NOT NULL,
  `title` varchar(110) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `image` varchar(560) NOT NULL,
  `date` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kitchentools`
--

INSERT INTO `kitchentools` (`id`, `title`, `description`, `image`, `date`, `price`, `quantity`) VALUES
(1, 'Hello demo', '  this is demo', 'image/recipe/download.png', '2022-11-08 10:11:28', 450, '12'),
(2, 'Five Two Ultimate Baking Tool Set', '<p style=\"box-sizing: border-box; margin: 0px 0px 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: &quot;Gotham SSm A&quot;, sans-serif; vertical-align: baseline; color: rgb(68, 68, 68);\">We consulted bakers with heaps of experience and members of our faithful community to design this does-it-all baking set. With a large and small offset spatula, a pastry brush, and a bench scraper, you’ll be butter-brushing and swooping frosting like a pro. They’ll even go above and beyond baking tasks—the spatulas flip and turn while you’re sautéing, and the bench scraper sticks around to clean up your prep area. We added handy measurement guides to the bench scraper in both inches and centimeters, so you can cut with precision (hello, perfect brownie squares). And since 63% of you said your go-to piece is the offset spatula, we gave you two sizes, to fit every task</p>', 'image/recipe/tt.jpg', '2022-11-08 10:15:06', 450, '12'),
(3, 'Miyabi Birchwood Damascus Knife Collection', '<h1 class=\"pdp__name\" style=\"box-sizing: border-box; margin: 0px 0px 6px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 300; font-stretch: inherit; font-size: 21px; line-height: 1.45; font-family: &quot;Gotham SSm A&quot;, sans-serif; vertical-align: baseline; overflow-wrap: break-word; max-width: 365px; color: rgb(68, 68, 68);\"><p style=\"box-sizing: border-box; margin: 0px 0px 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; vertical-align: baseline;\">A favorite of&nbsp;<a href=\"https://food52.com/blog/15455-the-essential-tools-that-changed-the-way-ivan-orkin-cooks\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; text-decoration-line: none; color: rgb(161, 143, 122);\">ramen chef and restaurateur Ivan Orkin</a>, Miyabi Birchwood knives are as lovely to look at as they are powerful to use. They’re crafted in Japan, where the blade’s edge is hand-honed and undergoes a 4-step hardening process—ensuring they stay super-sharp through all of your slicing, mincing, and chopping. We’re mesmerized by the blade’s stunning, textured pattern and the easy-to-grip birchwood handles feel smooth and sure in our hands.</p></h1>', 'image/recipe/d79bab17-d1ce-4b2b-aeed-1a6d1d04e3d9--2020-0313_zwilling_miyabi-birchwood-damascus-knife-collection_family_silo_ty-mecham.jpg', '2022-11-08 10:17:11', 450, '12'),
(4, 'Kitchen', ' GOOD&nbsp; things', 'image/recipe/A1.jpg', '2022-11-17 11:57:14', 2000, '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kitchentools`
--
ALTER TABLE `kitchentools`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kitchentools`
--
ALTER TABLE `kitchentools`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
