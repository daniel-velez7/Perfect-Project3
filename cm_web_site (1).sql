-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 10:40 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cm_web_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `customer_id` int(11) NOT NULL,
  `formation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code_postal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstname`, `lastname`, `email`, `password`, `phone`, `address`, `address2`, `city`, `code_postal`, `role_id`, `created`, `modified`, `status`) VALUES
(17, 'user', 'user', 'user@mail.com', '$2y$10$fGS8BGvtfzMNPqtELLPO.uSVUXCChr5XVccOJ6SxJ0kqMKAbnKYVi', '2222222222', 'user', '', 'user', '22222', 2, '2021-11-29 10:08:27', '2021-11-29 10:08:27', '1'),
(18, 'customer', 'customer', 'customer@mail.com', '', '3333333333', 'customer', '', 'customer', '33333', 3, '2021-11-29 09:12:21', '2021-11-29 09:12:21', '1'),
(19, 'custr', 'custr', 'cust@mail.com', '', '3333333333', 'custr', '', 'custr', '33333', 3, '2021-11-29 09:42:13', '2021-11-29 09:42:13', '1'),
(20, 'daniel', 'velez', 'daniel@gmail.com', '$2y$10$sI52vBfmeM6j7CyKvRbA8OXAxS/3Nefsb89pnNgbIlT4jDy.WyNUW', '0622816128', '17 rue pelee', '57 rue de la colonie', 'paris', '75011', 2, '2021-12-07 15:54:08', '2021-12-07 15:54:08', '1');

-- --------------------------------------------------------

--
-- Table structure for table `formation`
--

CREATE TABLE `formation` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `grand_total` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `grand_total`, `created`, `modified`, `status`) VALUES
(3, 18, 23.40, '2021-11-29 09:12:21', '2021-11-29 09:12:21', '1'),
(4, 19, 70.20, '2021-11-29 09:42:13', '2021-11-29 09:42:13', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  `sub_total` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `sub_total`) VALUES
(3, 3, 6, 1, 23.40),
(4, 4, 6, 3, 70.20);

-- --------------------------------------------------------

--
-- Table structure for table `paypal_payments`
--

CREATE TABLE `paypal_payments` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `txn_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payer_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payer_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `tag` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `tag`, `image`, `name`, `description`, `price`, `created`, `modified`, `status`) VALUES
(1, 'livre', 'livre_la_foi.png', 'Livre la foi', 'Un livre qui parle de foi', 35.20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(2, 'livre', 'foi_puzzle.jpg', 'Un jour un plaisir', 'Se faire plaisir', 24.60, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(3, 'livre', 'foi_wifi.jpg', 'Ma foi cest toi', 'Qui peu etre le \"toi\"', 82.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(4, 'livre', 'livre_la_foi.png', 'La joie dans le coeur', 'Trouver le courage', 59.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(5, 'livre', 'foi_puzzle.jpg', 'Pas un mais deux', 'multiplier les pains', 10.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(6, 'goodie', 'livre_la_foi.png', 'Comment être heureux', 'La joie vous envahira', 23.40, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(7, 'livre', 'foi_wifi.jpg', 'Agir et réfléchir', 'Réfléchir avant dagir', 35.20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(8, 'goodie', 'foi_puzzle.jpg', 'Mais mais mais', 'quoi quoi quoi', 35.20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(9, 'livre', 'livre_la_foi.png', 'Quoique cest bien !', 'Vous allez adorer', 11.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(10, 'livre', 'foi_wifi.jpg', 'Jaime les pommes', 'Mais les poires cest bien aussi', 35.20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(11, 'goodie', 'livre_la_foi.png', 'Le stylo de la foi', 'Le stylo est magique', 35.20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(12, 'goodie', 'foi_puzzle.jpg', 'Un petit osti', 'De quoi manger sainement', 12.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(13, 'formation', 'livre_la_foi.png', 'Lor du monde', 'Vous rendra plus riche', 1.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(14, 'formation', 'foi_puzzle.jpg', 'flute de pan', 'Attire les insects', 35.20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(15, 'formation', 'foi_wifi.jpg', 'petit panda', 'Cest pas un vrai mais il est mignon', 22.00, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(16, 'formation', 'livre_la_foi.png', 'Livre la foi', 'Un livre qui parle de foi', 18.80, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`customer_id`,`formation_id`),
  ADD KEY `formation_id` (`formation_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `paypal_payments`
--
ALTER TABLE `paypal_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `formation`
--
ALTER TABLE `formation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `paypal_payments`
--
ALTER TABLE `paypal_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `access`
--
ALTER TABLE `access`
  ADD CONSTRAINT `access_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `access_ibfk_2` FOREIGN KEY (`formation_id`) REFERENCES `formation` (`id`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
