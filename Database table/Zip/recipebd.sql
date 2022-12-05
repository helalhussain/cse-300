-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 06:00 PM
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
-- Table structure for table `add_gift_card`
--

CREATE TABLE `add_gift_card` (
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_gift_card`
--

INSERT INTO `add_gift_card` (`id`, `price`) VALUES
(1, 625),
(2, 1250),
(3, 80),
(4, 555),
(5, 225),
(6, 80),
(7, 80);

-- --------------------------------------------------------

--
-- Table structure for table `apply_circular`
--

CREATE TABLE `apply_circular` (
  `id` int(100) NOT NULL,
  `circular_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `cv` varchar(400) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply_circular`
--

INSERT INTO `apply_circular` (`id`, `circular_id`, `name`, `email`, `address`, `phone`, `cv`, `date`) VALUES
(1, '10', 'Tomal Krishna das', 'tomalkrishnadas21@gmail.com', 'Sylhet', '01931606808', '2ortable.gif', '2022/08/05');

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

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `pdf` varchar(400) NOT NULL,
  `date` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `pdf`, `date`) VALUES
(7, 'HHHH', 'neub-cse-121-lec-2.pdf', '10/05/2022');

-- --------------------------------------------------------

--
-- Table structure for table `card_booking`
--

CREATE TABLE `card_booking` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_number` int(12) NOT NULL,
  `i_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card_booking`
--

INSERT INTO `card_booking` (`id`, `c_id`, `u_name`, `u_number`, `i_name`, `price`, `address`) VALUES
(24, 2, 'Redhwan Ahmed', 1738140058, 'Organic Extra Virgin Olive Oil', 300, 'Mitali Raynogor'),
(25, 1, 'Wazedehsan', 2147483647, 'Avocado Oil - Cooking Spray', 200, '0x1e6d2FAd0c59d9Aa270685dDE25434657F369246'),
(26, 4, 'Wazedehsan', 2147483647, 'French Roasted Almond Butter', 450, '0x1e6d2FAd0c59d9Aa270685dDE25434657F369246'),
(27, 1, 'tannvir', 2147483647, 'Avocado Oil - Cooking Spray', 200, '0x1e6d2FAd0c59d9Aa270685dDE25434657F369246'),
(28, 1, 'Redhwan Ahmed', 2147483647, 'Avocado Oil - Cooking Spray', 100, 'Mitali Raynogor'),
(29, 6, 'Wazedehsan', 2147483647, 'Organic Sweet Dijon Dressing', 150, '0x1e6d2FAd0c59d9Aa270685dDE25434657F369246');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(20) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(3, 'Breakfast'),
(4, 'Dinner'),
(5, 'Lunch'),
(6, 'Appetizer'),
(7, 'Drinks'),
(8, 'Vegetarian'),
(9, 'Dessert'),
(12, 'Snacks');

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

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `id` int(11) NOT NULL,
  `user_id` varchar(110) NOT NULL,
  `recipe_id` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`id`, `user_id`, `recipe_id`) VALUES
(2, 'rr@gmail.com', '23'),
(6, 'admin@gmail.com', '20'),
(7, 'admin@gmail.com', '24'),
(8, 'admin@gmail.com', '21'),
(9, 'admin@gmail.com', '20'),
(10, 'tomal2020@gmail.com', '20');

-- --------------------------------------------------------

--
-- Table structure for table `gift_card`
--

CREATE TABLE `gift_card` (
  `id` int(100) NOT NULL,
  `user_id` varchar(110) NOT NULL,
  `gift` int(11) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(110) NOT NULL DEFAULT '1',
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gift_card`
--

INSERT INTO `gift_card` (`id`, `user_id`, `gift`, `message`, `status`, `view`) VALUES
(6, 'admin@gmail.com', 70, '', '1', 1),
(7, 'admin@gmail.com', 100, '', '1', 1),
(8, 'admin@gmail.com', 60, '', '0', 0),
(9, 'admin@gmail.com', 60, '', '0', 0),
(10, 'admin@gmail.com', 60, '', '0', 0),
(11, 'admin@gmail.com', 100, '', '1', 1),
(12, 'admin@gmail.com', 100, '', '1', 1),
(13, 'tomal2020@gmail.com', 100, '', '1', 1),
(14, 'tomal2020@gmail.com', 7, '', '1', 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(350) NOT NULL,
  `image` varchar(400) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` int(50) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `title`, `description`, `image`, `date`, `status`) VALUES
(2, 'Hello everyone', 'Google Translate is a multilingual neural machine translation service developed by Google to translate text, documents and websites from one language into another. It offers a website interface, a mobile app for Android and iOS, and an API that helps developers', 'image/recipe/Diode-Symbol.jpg', '2022/07/16', 1),
(6, 'dfd', 'dsfds', 'image/recipe/Diode-Symbol.jpg', '2022/07/16', 1),
(10, 'Storekeeper', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', 'image/recipe/m-hlsh010207-highlander-original-imafgqhgj6ycpzmb.jpeg', '2022/08/05', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(400) NOT NULL,
  `date` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `email`, `message`, `date`, `status`) VALUES
(1, 'wasedah@gmail.com', 'gfrg  dfs', '06:06:pm 06-06-2022', '1'),
(2, 'wasedah@gmail.com', 'gfrg  dfs', '06:06:pm 06-06-2022', '1'),
(3, 'wasedah@gmail.com', 'rrrrr', '10:06:am 12-06-2022', '1');

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

-- --------------------------------------------------------

--
-- Table structure for table `peymant`
--

CREATE TABLE `peymant` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `i_name` varchar(50) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_number` int(11) NOT NULL,
  `tk` int(11) NOT NULL,
  `tran_id` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peymant`
--

INSERT INTO `peymant` (`id`, `order_id`, `user_id`, `i_name`, `u_name`, `u_number`, `tk`, `tran_id`, `address`, `status`) VALUES
(4, 23, 19, 'Avocado Oil', 'asd', 1616490568, 1000, 'SSLCZ_TEST_6367779eec1fe', 'Dhaka', 1),
(5, 0, 0, 'Avocado Oil', 'Wazed', 170000000, 1000, 'SSLCZ_TEST_63679124db9c2', 'Amborkhana, Shylet', 1),
(10, 0, 19, 'new ingredient', 'Tomal Krishna das', 1931606808, 450, 'SSLCZ_TEST_6368a63fd8565', 'Sylhet', 1),
(11, 0, 19, 'New ingredient', 'Tomal', 1931606808, 500, 'SSLCZ_TEST_6368a93493612', 'Sylhet', 1),
(12, 0, 0, 'new ingredient', 'Tanvir', 1931606808, 450, 'SSLCZ_TEST_6368a9c81f4eb', 'Sylhet', 1),
(13, 23, 0, 'Organic Extra Virgin Olive Oil', 'Tomal Krishna', 1931606808, 300, 'SSLCZ_TEST_6369241007b49', 'Sylhet', 1),
(16, 0, 0, 'White Truffle Oil Twin Pack', 'Wazed', 1931606808, 750, 'SSLCZ_TEST_63696c542097e', 'Sylhet', 1),
(19, 0, 0, '', '', 0, 100, 'SSLCZ_TEST_6385b08567317', '', 0),
(20, 0, 0, '', '', 0, 100, 'SSLCZ_TEST_6385b1f8de643', '', 0),
(21, 0, 0, '', '', 0, 100, 'SSLCZ_TEST_6385b1f8de643', '', 0),
(22, 0, 0, '', '', 0, 100, 'SSLCZ_TEST_6385b1f8de643', '', 0),
(23, 0, 0, '', '', 0, 7, 'SSLCZ_TEST_6385d0d1914b2', '', 0),
(24, 0, 0, '', '', 0, 7, 'SSLCZ_TEST_6385d0d1914b2', '', 0),
(25, 0, 0, '', '', 0, 7, 'SSLCZ_TEST_6385d0d1914b2', '', 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `recipenews`
--

CREATE TABLE `recipenews` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(8000) NOT NULL,
  `image_1` varchar(250) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipenews`
--

INSERT INTO `recipenews` (`id`, `title`, `description`, `image_1`, `status`) VALUES
(16, 'Snickers To Launch New Snickers Almond Brownie In August', '<p>Looking for a new decadent snack? Well, Snickers is cooking up an all-new innovation in its brownie line-up. That will undoubtedly satisfy any sweet tooth at any time of the day! Snickers Almond Brownie will be launching in August!</p>\r\n<p>This edition features a mouthwatering chewy brownie filling. Mixed with chopped almond chunks, topped with a layer of the sweet Snickers caramel, and encased in rich dark chocolate. The description alone just sounds like a lovely mashup of textures done right.</p>\r\n<p>Snickers Almond Brownie joins the previously released Snickers Peanut Brownie and the Snickers Peanut Brownie Ice Cream. Both of which are available on shelves and freezers nationwide. Snickers Peanut Brownie combines a chewy-peanut brownie filling, caramel, and the classic Snickers chocolate coating.</p>\r\n<p>The ice cream version is brownie-flavored ice cream with chewy brownie bits. A thin layer of caramel, and peanuts coated in milk chocolate. If you haven’t tasted this lineup yet. I’d suggest you get your hands on one to get a hint of what’s in store when Snickers Almond Brownie is released in a few months. In the meantime, I’ll be enjoying my Snickers and envisioning what my first bite of the Almond Brownie will be like!</p>', 'image/food/snicker-1_909f82fc-b4b8-4193-851a-cf7c752a5429_1512x.jpg', 1),
(17, 'PEEPS Make A Splash In 7-Eleven Coffee', '<p>Days are slowly getting warmer. Trees are beginning to blossom. And Peeps are lining the candy aisles- spring is here! No candy embodies spring and Easter more than Peeps Marshmallow Chicks and Bunnies. The Peeps brand is partnering with 7-Eleven to produce a marshmallow-flavored latte. That will put a spring in your step at any time of the day! </p>\r\n<p>The 7-Eleven partnership is just another delightful collab from Peeps. In addition to the Pepsi x Peeps collab that was announced earlier this week. Craving a Peeps and coffee fix? Hop on over to a 7-Eleven near you because these lattes are only available for a limited time. </p>\r\n<p>The treats don’t stop there, 7-Eleven will also be offering limited-time flavors of goodies under their private label called ‘7-Select.’   The treats include frosted shortbread cookies in the shapes of cute bumblebees and orange butterflies. “Fly with Me” butterfly-shaped and “Blossom”flower-shaped mini-gummy candies. Pretzels covered in a yummy strawberry coating with a yogurt swirl and sandwich crème cookies.  </p>\r\n<p>Spring flavors of the sandwich crème cookies include carrot cake, pineapple upside down. And banana cream pie flavored cookies. Very reminiscent of an Easter dessert table!   In conclusion, Here’s me raising my imaginary cup to you peeps! Grab a latte and savor spring in every sip!</p>', 'image/food/peeps711-1_69c901ab-131e-4f80-87cb-ae022e1ea00e_1512x.webp', 1),
(18, 'Pepsi Gets Tropical With All New Pepsi Mango Flavor', '<p>There is no need to wait for mango season because Pepsi is giving us a taste of mango season year-round.   Yes, you read that right. PepsiCo is giving us the taste of the tropics with its all-new Pepsi Mango flavor.   You’re probably thinking how mango could taste good with Pepsi? Let me tell you these beverage companies have a way of making even the most outrageous flavors taste delightful.   Pepsi Mango will be available nationwide on March 22. It will join the Pepsi lineup which currently includes: Wildcherry, Lime, Berry, and Vanilla flavors.</p>\r\n<p>This is the only tropical variety in the bunch.   Fans can grab this beverage in 12-packs of 12-ounce cans and 20-ounce bottles. It will be available in regular and Zero sugar varieties.   “Mango is one of the most popular fruits in the world. And it serves as the perfect complement to Pepsi. Creating an irresistible combination that our fans can enjoy everywhere throughout the year,” said Todd Kaplan. Vice president of marketing at Pepsi, in a statement.   To promote the fruity beverage. Pepsi announced a social media matchmaking series in April to help singles find a partner.   So if you’re single and ready to mingle over a can of yummy Pepsi Mango. And you can check out the single people in the series. They will feature personality introductions and contact information to facilitate some sparks.   I’m truly excited about this flavor. Anything with mango has my name written all over it.   I wonder what’s next for PepsiCo. Pepsi Banana, Pepsi Peach, or Pepsi Grape anyone?   Will you be trying this flavor? Let us know! Enjoy!</p>', 'image/food/pepsi-mango-1_c1c52b93-4cbc-4c5e-adc2-abc9c2c15637_1512x.webp', 1),
(19, 'Wienerschnitzel Shakes Up Its Menu With Limited Time Oreo Shakes', 'Famous hot dog chain Wienerschnitzel is shaking up their candy shakes menu! The chain has partnered with Oreo once again to create new Oreo Cookie shake flavors.   The berry delicious Oreo Cookie Strawberry Shake and refreshingly creamy Oreo Cookie Mint Shake will be joining the Oreo Cookie Chocolate Shake.   These Oreo candy shakes feature the brand’s Tastee Freez soft serve mixed with your choice of chocolate, strawberry, or mint syrup and bits of Oreo cookies.   “Our Oreo Cookie Shakes are delicious,” said Doug Koegeboehn, Chief Marketing Officer for Wienerschnitzel, in a press release. “It’s awesome getting these new flavors of Oreo Cookie as a soft-serve shake.”   If these delicious flavors entice you. I would get to a Wienerschnitzel ASAP. These flavors will only be available for a limited time through spring 2021.   Maybe I’ll stop in for some chili fries and top it off with one of these creamy Oreo shakes!', 'image/food/wiener-1_68f5b0af-8d66-4a7a-b7f3-d22c22eb7622_1512x.jpg', 1),
(20, 'Taco Bell’s Quesalupa Is Back After 5 Years and Cheesier Than Ever', '<p>Do you remember Taco Bell’s Quesalupa from 2016? Well, now the chain is bringing it back after a five-year hiatus. It’s back and cheesier than ever! Fifty-percent cheesier to be exact.   When the Quesalupa dropped in 2016, it stunned cheese lovers everywhere. Additionally, It was the brand’s biggest limited-time offer in history and the first time a quesadilla and chalupa have come together.   The Quesalupa features a crispy double-layered shell stuffed with a blend of melted pepper jack. And mozzarella cheeses from edge to edge. Inside you’ll find the typical Taco Bell fixings. Such as seasoned ground beef, lettuce, shredded cheddar cheese, diced tomatoes, and reduced-fat sour cream.</p>\r\n<p>Customers who want a vegetarian option can swap the seasoned ground beef for black beans.   “Our customers raved about the cheese-filled Chalupa shell in its first debut, so when the Quesalupa began its return journey back to our nationwide menu, we knew we needed to perfect that cheesy experience - one that will be consistent for every guest and every bite,” said Liz Matthews, Taco Bell’s Global Chief Food Innovation Officer, in a press release.   Taco Bell is bringing the item back with a campaign titled “Overhyped.”. There tends to be a lot of ‘overhype’ about everything these days. The chain is letting customers know the Quesalupa is back with one message, “We think you’ll like it.”   I think anything crispy with more cheese deserves all the hype.   Taco Bell Rewards Beta members are eligible for early access to try the Quesalupa beginning today March 10. The nationwide debut is tomorrow March 11. The company is offering the item for a very affordable price. A la carte is $2.99 and a combo is $6.99. The combo includes the Quesalupa, two crunchy tacos, and a large fountain drink.   In conclusion, Quesalupa Early Access is only available today and redeemable only through the Taco Bell mobile app for in-store. And drive-thru pickup orders at participating U.S. Taco Bell locations, while supplies last. And however, Guests must be a registered user in the Taco Bell app to gain early access. </p>', 'image/food/quesalupa-1_6005ec31-9ae3-4041-8459-fca61abf6043_1512x.webp', 1),
(21, 'Airheads Candy Unveils New Fried Chicken Sandwich', 'It’s National Fried Chicken Day! The candy brand Airheads has officially entered the fried chicken wars with a new fried chicken sandwich. That has a bun made entirely out of Airheads candy!\r\n\r\nThe appropriately named Airheads Chicken Sandy contains the usual fixings such as fried chicken, coleslaw, spicy mayo, and pickles. Entire stuffings are sandwiches in two buns of Airheads Xtremes. The striped candy belts make the sandwich look like something straight out of the “Patty Hype” episode of Spongebob Squarepants. In where Spongebob creates Pretty Patties.\r\n\r\nAirheads Candy Chicken Sandy will be available to taste test at the Chicago restaurant Frances’ Deli & Brunchery during lunch hour for dine-in only, while supplies last. Frances’ Deli & Brunchery is located in Chicago, IL. Taste-testing will be available from 12:00 p.m. to 3:00 p.m., local time. We can’t help but wonder what this sandwich tastes like.\r\n\r\nThere are so many flavors and textures going on in one sandwich. Let’s just hope that this sandwich remains extremely limited.', 'image/food/A1.jpg', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `recipe_circular`
--

CREATE TABLE `recipe_circular` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe_circular`
--

INSERT INTO `recipe_circular` (`id`, `title`, `description`, `date`) VALUES
(1, 'New circular title', 'A one-to-one relationship is a very basic type of database relationship. For example, a User model might be associated with one', '07:11:pm 26-11-2022'),
(2, '2nd recipe circular title', 'Relationship is a very basic type of database relationship. For example, a User model might be associated with one', '07:11:pm 26-11-2022');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `ReportID` int(11) NOT NULL,
  `Report_by` int(11) DEFAULT NULL,
  `Report_to` int(11) DEFAULT NULL,
  `report` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`ReportID`, `Report_by`, `Report_to`, `report`, `image`) VALUES
(0, 0, 0, 'sesffgdt', ''),
(0, 0, 0, 'wwww', ''),
(0, 0, 0, 'dfetge', ''),
(0, 0, 0, 'dfetge', '');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `recipe_id` varchar(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `review` varchar(300) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `user_id`, `recipe_id`, `rating`, `review`, `date`) VALUES
(16, '', '29', '4', 'Goods', '04:10:pm 30-10-2022'),
(17, '14', '31', '5', 'Goods', '04:10:pm 30-10-2022'),
(18, '14', '31', '5', 'Goods', '04:10:pm 30-10-2022'),
(19, '14', '20', '5', 'Goods', '12:10:pm 31-10-2022'),
(21, '14', '29', '5', 'Good', '12:10:pm 31-10-2022'),
(23, '19', '20', '4', 'Its good', '11:11:am 07-11-2022'),
(29, '19', '19', '2', 'Its good', '08:11:am 17-11-2022');

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `id` int(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(400) NOT NULL,
  `time` varchar(100) NOT NULL,
  `date_show` varchar(100) NOT NULL,
  `image` varchar(400) NOT NULL,
  `data` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `title`, `description`, `time`, `date_show`, `image`, `data`) VALUES
(2, 'New title', 'W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content.', '23:30', '2022/07/24', 'image/recipe/animal1.jpg', '2022/07/24');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(100) NOT NULL,
  `tagName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tagName`) VALUES
(2, 'Breakfast'),
(3, 'Dessert'),
(6, 'Diet'),
(1, 'Dinner'),
(9, 'Drink'),
(7, 'Keto'),
(8, 'Low Calorie'),
(10, 'Lunch'),
(12, 'Snacks'),
(5, 'Vegetarian');

-- --------------------------------------------------------

--
-- Table structure for table `trick`
--

CREATE TABLE `trick` (
  `id` int(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(8000) NOT NULL,
  `image` varchar(400) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trick`
--

INSERT INTO `trick` (`id`, `title`, `description`, `image`, `date`) VALUES
(1, 'Edit', 'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English', 'image/recipe/v3.jpg', '2022/07/26'),
(2, 'Edit trick', 'Edit Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English', 'image/recipe/bus2.jpg', '2022/07/26'),
(3, 'New', 'dfdfd', 'image/recipe/bus2.jpg', '2022/07/26'),
(5, 'How To Brew The Best Coffee', 'How To Brew The Best Coffee\r\n', 'image/recipe/canva-photo-editor-132_12a133fe-f835-4ac7-8c9d-1d4e2102c766_1512x.webp', '2022/08/05'),
(6, 'test-1', '<ol>\r\n<li>ahsan</li>\r\n<li>wazad</li>\r\n<li>jashim</li>\r\n</ol>', 'image/recipe/canva-photo-editor-132_12a133fe-f835-4ac7-8c9d-1d4e2102c766_1512x.webp', '2022/08/05'),
(7, 'CARAMEL ESPRESSO MARTINI', 'For the best of both worlds, this Caramel Espresso Martini is a must! Serve this martini for a burst of seasonal flavor that will keep your guests warm and bubbly for the entire evening. Simple to make and delicious to drink, this martini uses the nutpods Almond + Coconut Creamer: Caramel for a strong caramel flavor to balance out the espresso. So guests will be sipping on this fall drink for the whole night!', 'image/recipe/A1.jpg', '2022/08/05'),
(8, 'SPIRAL FRIED PICKLES', 'We all love pickles, but what about deep-fried pickles coated in breadcrumbs?! Even better, HIPPEAS Sriracha Sunshine is the breading! The vinegar of the pickle with the spice of the sriracha creates a profile of flavors that will dance in your mouth! These Spiral Fried Pickles are served on a skewer for easy cooking and consumption for your next group gathering. And best of all requires little to no cleanup afterward! Win, win, win!', 'image/recipe/A2.jpg', '2022/08/05'),
(9, 'AMBROSIA SALAD', 'If what you are looking for is light and fruity salad, then look no more- Ambrosia salad is the right and perfect salad you should make for yourself. It is easy, colorful, and fun to make. This salad will be first to disappear from your plate when eating, trust me! Even though it is old-schooled, it is still classic. It has lots of hidden fruity bites, and it is a perfect holiday recipe for you and your family.\r\n\r\nYou have found the right recipe dessert to make for your kids at home. Very easy and straightforward to make- all you need is a bowl and a spoon, no need for any fancy or expensive equipment. It is the ideal recipe for your unicorn themed birthday party, if you prepare this ambrosia salad for everybody at your party, you will be surprised how happy they will be!\r\n\r\nEven in Greek, ambrosia salad translates to “food of the gods.” You need to know you won’t be disappointed by this salad. You can serve this light salad as a potluck, cookout, and a fun picnic side dish. It is a great recipe to balance out all the savory going on. It is also perfect for any holiday- either your Christmas, Easter, thanksgiving- it will work perfectly well for them. For your kid’s birthday party, you can also prepare it to add more fun to your party.\r\n\r\nThere is no way all the kiddos won’t love this unicorn salad! To prepare this special salad, you don’t need any fancy ingredients at all; all you need to get are- sour cream, mandarin oranges, whipped topping, pineapple tidbits, marshmallows, chopped nuts, and sweetened shredded coconut.\r\n\r\nStore your leftover ambrosia in a refrigerator for not more than 3 days (you will need to place it in an airtight container). If you like, you can vary your ingredients to add more fun to this dessert. Sliced kiwi, half grapes, and berries would also work correctly!\r\n\r\n1.Preparation of this fruity salad begins with a combination of the whipped topping and sour cream until they become smooth. Followed by folding the oranges, pineapples, cherries, marshmallows, nuts, and coconut until everything becomes well coated.\r\n2.Then cover it with plastic wrap and refrigerate it for about 1hour or more depending on your refrigerator. The last thing you need to do is to top your ambrosia salad with extra whipped topping and a cherry. Enjoy!\r\nNote: To get the best result of ambrosia salad, make use of your favorite fruits, just ensure they are chopped into smaller pieces, add your favorite fruit you have available, but mandarin oranges and cherries are no go area for ambrosia salad. Always serve it when chill. Your marshmallows are very important, you should not skip them as they give it the cloud-like texture!', 'image/recipe/Ambrosia-Salad-5_1400x.jpg', '2022/08/05'),
(10, 'HOLIDAY CHEESEBOARD', '1.Cut out a tree in the brie wheel with a tree-shaped cookie cutter and fill it with cherry jam. \r\n2.Arrange all ingredients on a wooden cheese board or a large platter. \r\n3.Garnish with marjoram, rosemary, or thyme leaves, if desired.', 'image/recipe/38_WinterBox_1x1_273e312c-cb7e-42c9-805c-1d9f3e0d2483_1400x.jpg', '2022/08/05'),
(11, 'HONEY SOY CHICKEN', 'Quick and easy meal prep for weekend lunch or dinner with a nice marinade of soy sauce, sake and honey. Chicken is a safe way to go when we are in a hurry and want to make a quick but delicious meal for our family and or friends. And this recipe proves once again why chicken is loved by so many.\r\n\r\nThis recipe is simple to make and gives you a savory chicken paired with easy to find ingredients, not much preparation for it. Great for 3 to 4 servings and it’s ready to go within one hour. The best way to assure your chicken absorbs the most out of the marinade is to let it rest overnight.\r\n\r\nThis recipe is super flexible. You can enjoy it as an appetizer with some extra dipping while you watch a game or a movie, or have it as a main dish on top of some white rice, or green salad. It’s that simple and delicious. Honey Soy Chicken is a fun way to prepare dinner over the weekend when we are looking for simple recipes as we are overwhelmed with the work of the week and all the cooking, this is a nice way to get around preparing dinner, fun, and simple.\r\n\r\nNothing beats that over-a-weekend meal. For those who made or are planning on making a big batch, you can remove the meat from the bones and store your leftovers which you can later use to make quick meals such as wraps, salads, bento lunch boxes, or get creative and enjoy it any other way.\r\n1.Prepare your marinade with honey, soy sauce, and sake. Whisk everything in a bowl and clean your drumettes with cold water and pat it dry.\r\n2.You could also mix the marinade ingredients in a ziplock or tap container, pinch some salt and pepper to your chicken before placing it inside the marinade ziplock or container. Rub the marinade all over the chicken or shake if you are using a container.\r\n3.If you are in a rush or making it for the same day, 30 minutes will do good, but if you are planning for the day after, let them rest overnight so your chicken comes more savory.\r\n4.Once your chicken is ready, turn on your oven at 425º Fahrenheit and place your chicken in a baking dish, pour remaining marinade on top of the chicken drumettes or chicken cut, and bake it for 30 minutes.\r\n5.Now you want to make sure your chicken is nicely cooked, check both sides as sometimes the top cooks too fast while the bottom hasn’t. Flip them or reduce the heat to broil in case you notice one side is cooking faster than the other. While making sure your chicken doesn’t burn. Once your chicken looks brown and cooked on both sides is time to take it out.', 'image/recipe/Honey-Soy-Sauce-Chicken-2631-I_1400x.jpg', '2022/08/05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `number` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `usertype`, `email`, `number`, `password`, `status`) VALUES
(11, 'Tomal', '0', 'tomal@gmail.com', '+8801738140058', 'wazed2018', '1'),
(13, 'tomal', 'general', 'tomal2020@gmail.com', '01738140058', 'wazed2018', '1'),
(14, 'admin', 'admin', 'admin@gmail.com', '', '12345', '1'),
(15, 'jashim khan1', 'general', 'jashim@gmail.com', '01745635287', 'jashim', '1'),
(16, 'jashim', 'general', 'ja123@gmail.com', '01278745632', 'jashim', '1'),
(19, 'Tomal Krishna', 'general', 'tomalkrishnadas21@gmail.com', '01931606808', '12345', '1'),
(23, 'Tomal', 'general', 'wasedah@gmail.com', '12345', '12345', '1');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(100) NOT NULL,
  `title` varchar(210) NOT NULL,
  `video` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `title`, `video`, `date`) VALUES
(1, 'New video uploaded', '', '2022/08/01'),
(2, 'New video 2 uploaded', '03 Laravel restapi development (Sequence Maintain).mp4', '2022/08/01'),
(3, 'Video-01', '49870286_767036070990044_8660302090601078683_n.mp4', '2022/08/02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_gift_card`
--
ALTER TABLE `add_gift_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_circular`
--
ALTER TABLE `apply_circular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approved_gift_card`
--
ALTER TABLE `approved_gift_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_booking`
--
ALTER TABLE `card_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gift_card`
--
ALTER TABLE `gift_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredints`
--
ALTER TABLE `ingredints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitchentools`
--
ALTER TABLE `kitchentools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mycard`
--
ALTER TABLE `mycard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peymant`
--
ALTER TABLE `peymant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `press`
--
ALTER TABLE `press`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipenews`
--
ALTER TABLE `recipenews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe_box`
--
ALTER TABLE `recipe_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe_circular`
--
ALTER TABLE `recipe_circular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tagName` (`tagName`);

--
-- Indexes for table `trick`
--
ALTER TABLE `trick`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_gift_card`
--
ALTER TABLE `add_gift_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `apply_circular`
--
ALTER TABLE `apply_circular`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `approved_gift_card`
--
ALTER TABLE `approved_gift_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `card_booking`
--
ALTER TABLE `card_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gift_card`
--
ALTER TABLE `gift_card`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ingredints`
--
ALTER TABLE `ingredints`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kitchentools`
--
ALTER TABLE `kitchentools`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mycard`
--
ALTER TABLE `mycard`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `peymant`
--
ALTER TABLE `peymant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `press`
--
ALTER TABLE `press`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `recipenews`
--
ALTER TABLE `recipenews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `recipe_box`
--
ALTER TABLE `recipe_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recipe_circular`
--
ALTER TABLE `recipe_circular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `trick`
--
ALTER TABLE `trick`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
