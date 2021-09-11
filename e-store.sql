-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 11, 2021 at 04:52 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Samsung Galaxy S21 Ultra 5G', 105999),
(2, 'Samsung Galaxy Z Fold2 5G', 179999),
(3, 'Samsung Galaxy Note 20 Ultra 5G', 115000),
(4, 'Samsung Galaxy Z Flip', 121999),
(5, 'Apple iPhone 12 Pro Max', 132200),
(6, 'Apple iPhone 11 Pro Max', 110999),
(7, 'Apple iPhone XS Pro Max', 115000),
(8, 'Apple iPhone SE Pro Max', 96999),
(9, 'OnePlus 9 Pro 5G', 69999),
(10, 'OnePlus 8T 5G', 45999),
(11, 'OnePlus 8 Pro', 48999),
(12, 'OnePlus Nord 5G', 28999);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Shivang', 'shivang2122@xyz.com', '09b671d7b82606e56e72534fd135f38c', '9694442255', 'Kanpur', 'Arya Nagar');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to Cart','Confirmed') NOT NULL,
  `order_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`, `order_id`) VALUES
(1, 1, 1, 'Confirmed', '60eb36566f5d4'),
(2, 1, 2, 'Confirmed', '60eb36566f5d4'),
(3, 1, 3, 'Confirmed', '60eb36566f5d4'),
(4, 1, 4, 'Confirmed', '60eb36566f5d4'),
(5, 1, 4, 'Confirmed', '60eb36cf7d226'),
(6, 1, 5, 'Confirmed', '60eb36cf7d226'),
(7, 1, 9, 'Confirmed', '60eb36cf7d226');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items` ADD FULLTEXT KEY `order_id` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
