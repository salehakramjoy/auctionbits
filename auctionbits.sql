-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2022 at 03:15 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auctionbits`
--

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `current_bid` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`product_id`, `user_id`, `current_bid`, `date`) VALUES
(54, 6, 69, '2022-01-20'),
(54, 11, 420, '2022-01-20'),
(813, 12, 400, '2022-01-21'),
(813, 12, 600, '2022-01-21'),
(54, 12, 600, '2022-01-22'),
(777, 12, 110, '2022-01-23'),
(813, 12, 900, '2022-01-23'),
(61, 12, 50, '2022-01-23'),
(813, 12, 400, '2022-01-23'),
(777, 12, 200, '2022-01-23'),
(61, 12, 70, '2022-01-23'),
(777, 13, 200, '2022-01-23'),
(777, 13, 500, '2022-01-23'),
(813, 13, 1000, '2022-01-23'),
(3, 12, 500, '2022-01-23'),
(3, 12, 600, '2022-01-23'),
(3, 12, 700, '2022-01-23'),
(3, 12, 800, '2022-01-23'),
(3, 12, 900, '2022-01-23'),
(8, 7, 200, '2022-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `display`
--

CREATE TABLE `display` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `post` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `display`
--

INSERT INTO `display` (`user_id`, `product_id`, `post`) VALUES
(5, 54, 'good'),
(5, 54, 'bad'),
(5, 54, 'bad'),
(5, 813, 'bad cat mew'),
(12, 813, 'this cat is cute'),
(12, 813, 'this cat is cute'),
(10, 54, 'one of the best'),
(12, 54, 'this laptop is very fast'),
(12, 54, 'this product is unavailable'),
(7, 54, 'this laptop i '),
(7, 813, 'this product is unavailable'),
(7, 54, 'this laptop i '),
(7, 54, 'this laptop is very fast');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `price`, `name`, `category`, `description`) VALUES
(3, 800, 'meaw', 'nai', 'good'),
(8, 100, 'hellokitty', 'one', 'nice'),
(54, 600, 'laptop', 'on', 'onek cute'),
(61, 70, 'coffee mug', 'nai', 'good'),
(777, 500, 'pen', 'one', 'good'),
(813, 1000, 'cat', 'aa', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rating` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rating`, `comment`, `product_id`) VALUES
(4, 'rfrer', 54),
(5, 'onek valo', 54),
(5, 'onek valo', 54),
(4, 'sdfasdfasdfsadfsdf', 654),
(4, 'sdfasdfasdfsadfsdf', 654),
(54, ' avilable', 54),
(54, ' avilable', 54),
(5, 'cute', 77),
(4, 'avilable', 54),
(4, 'cute', 813),
(4, 'avilable', 54),
(2, 'this cat  looks expensive', 813),
(3, 'avilable', 54),
(1, 'not good', 777),
(2, 'this cat is not good', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mail`, `address`, `password`) VALUES
(1, '011191027', 'kiuhg@gmail.con', 'ku', 1234),
(3, '011191028', 'SGLA@gmail.com', 'dsf', 12356),
(4, '011191029', 'SGLA@gmail.com', 'dsf', 1238),
(5, 'azim', 'azim@gmail.com', 'notunbazar', 1234),
(6, 'sara', 'sara@gamail.com', 'asldf', 1234),
(7, 'nowshin', 'nowshinn@gmail.com', 'klj', 1234),
(8, 'ljkk', 'azim@gmail.com', '3564', 54),
(9, 'milu', 'milu@gmail.com', 's;lkjf', 1234),
(10, 'rahat', 'raha@gmail.com', 'l;k;lk', 1234),
(11, 'joyhello', 'joyhello@gmail.com', 'adfa', 1234),
(12, 'millat', 'millat@gmail.com', 'llkk', 1234),
(13, 'hello ', 'hello@gmail.com', 'hsdfl;j', 1234),
(14, 'kisu', 'kisu@gmail.com', 'lkj', 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD KEY `fk3` (`user_id`),
  ADD KEY `fk33` (`product_id`);

--
-- Indexes for table `display`
--
ALTER TABLE `display`
  ADD KEY `fk2` (`user_id`),
  ADD KEY `fk22` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bid`
--
ALTER TABLE `bid`
  ADD CONSTRAINT `fk33` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk69` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `display`
--
ALTER TABLE `display`
  ADD CONSTRAINT `dessdad` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk22` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
