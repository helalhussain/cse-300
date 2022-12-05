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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_booking`
--
ALTER TABLE `card_booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card_booking`
--
ALTER TABLE `card_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
