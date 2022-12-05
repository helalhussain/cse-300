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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peymant`
--
ALTER TABLE `peymant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peymant`
--
ALTER TABLE `peymant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
