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
-- Table structure for table `ingredints`
--

CREATE TABLE `ingredints` (
  `id` int(100) NOT NULL,
  `title` varchar(110) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `image` varchar(560) NOT NULL,
  `date` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ingredints`
--

INSERT INTO `ingredints` (`id`, `title`, `description`, `image`, `date`, `price`, `quantity`) VALUES
(1, 'Avocado Oil - Cooking Spray', 'Non-Aerosol Spray · Made from 100% Pure Avocado Oil', 'image/recipe/dgd.webp', '2022/08/11', 200, '5'),
(2, 'Organic Extra Virgin Olive Oil', 'La Tourangelle Extra Virgin Olive Oil is cold pressed from olives that are harvested early in the season in Andalucía, Spain. Processing shortly after harvest preserves the naturally high antioxidant levels and yields a well-balanced, extra fresh oil, that is bright, peppery, and ideal for daily cooking.', 'image/recipe/a.webp', '2022/08/22', 300, ''),
(3, 'White Truffle Oil Twin Pack', 'Our White Truffle Infused Oil features complex notes of woods, earth, and fruit that are characteristic of the Italian White Alba Truffle. Earthy and distinctive, our White Truffle Infused Oil is a perfect finishing drizzle atop your culinary creations.', 'image/recipe/g.webp', '2022/11/03', 750, '1'),
(4, 'French Roasted Almond Butter', 'Our French Roast Almond Butter is unique: each batch of locally sourced almonds is hand-roasted in French-made cast iron kettles in our solar powered California mill. Our almond butter is made of 2 ingredients, just almonds and almond oil with no palm oil and no added sugars. This true artisan almond butter features a delicious nutty taste that pairs well with bread, crackers, fruit preserves, and so much more!', 'image/recipe/w.webp', '2022/11/03', 450, '1'),
(5, 'Avocado Oil', 'If you\'re looking for a rich, natural, luscious ingredient to add to your dishes or rejuvenate your health, La Tourangelle\'s avocado oil is the perfect choice for your kitchen and your home. Not only is it packed with nutrients and healthy to consume, but it can rejuvenate your appearance when applied topically.', 'image/recipe/Avococo_PDP_1_900x.PNG', '2022/11/03', 1000, '1'),
(6, 'Organic Sweet Dijon Dressing', 'At La Tourangelle, we know that distinctive vinaigrettes start with high-quality oils. We proudly handcraft this artisan style dressing using our time-honored French oil making traditions. Delicately whipped with herbs and spices, our Organic Sweet Dijon Dressing brings a tangy and sweet flavor to your salads, dips, and marinades. Certified organic, gluten-free, vegan, low sugar, and low sodium. Packaging is BPA free.', 'image/recipe/aa.webp', '2022/11/06', 150, '12'),
(11, 'hello tomal ', '   this is demo hiiwowo', 'image/recipe/cmkr31-front-72dpi.jpg', '2022/11/17', 680, '12'),
(12, 'DEMO', 'AAAA AAAA AAAA AAAA AAAAAvjfjbgdhfgdgfydgfygdygfygfefrteftfrfryewfryefyegfyegfyegygeyrgyegregryegryeggyeggeygygegy', 'image/recipe/413GuicUT2L.jpg', '2022/11/17', 2000, '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingredints`
--
ALTER TABLE `ingredints`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ingredints`
--
ALTER TABLE `ingredints`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
