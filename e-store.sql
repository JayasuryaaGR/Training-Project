-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2020 at 06:06 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `items` (
  `id` int(2) NOT NULL,
  `products` varchar(50) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `products`, `price`) VALUES
(1, 'Stylish Canvas', 500),
(2, 'Heavy Boots', 1000),
(3, 'Ruly Canvas', 300),
(4, 'Sports Shoes', 2500),
(5, 'Gentleman Shoes ', 1800),
(6, 'School Shoes', 700);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`, `query`) VALUES
(1, 'Ramesh', 'ram@gmail.com', 'Ram01@ph', 9999999999, 'Koyamputhoor', 'frubfyurfguyrguyerwfuysduyfgewuybfUFIUYAGRUSIYFGFRUYEBRYUFGBERGOYERABGUYEIRA', 'grtwgrtwgrtwgrwtgrwttg'),
(2, 'Suresh', 'sur@gmail.com', 'ghjkloiu89', 9998888888, 'dfgdsbg', 'sfjgdr', ''),
(3, 'Jayasuryaa G R', 'grjayasuryaa@gmail.com', '0d521225785d57b8d8c962554830c926', 9999999999, 'COIMBATORE', '16/94, Sri Krishna Illam', ''),
(4, 'Ganesh', 'gan@gmail.com', 'f376e9da62c3606217400be0e7d74ad5', 9878987898, 'Selvapuram', '16/3, Sivasamy Illam, Nanjappa Garden 2nd street, Ramamoorthy road, Selvapuram, Coimbatore-641026', ''),
(5, 'Jayasuryaa G R', '5168jgvkjg@yahoo.com', 'tyu', 9999999999, 'COIMBATORE', '16/94, Sri Krishna Illam', ''),
(6, 'Rajesh', 'raj@gmail.com', 'Raj01@ph', 9876549899, 'COIMBATORE', '16/94, Sri Krishna Illam', ''),
(7, 'Jayasuryaa G R', 'abcd@gmail.com', 'a0c6cba29d6266d85a44ece5d5b87c56', 9999999999, 'COIMBATORE', '16/94, Sri Krishna Illam', ''),
(8, 'Jayasuryaa G R', 'jhgjh65@gmail.com', 'ate', 9999999999, 'COIMBATORE', '16/94, Sri Krishna Illam', ''),
(9, 'Sibi', 'sibi@gmail.com', 'Sibi', 9999999999, 'Selvapuram', '16/3, Sivasamy Illam, Nanjappa Garden 2nd street, Ramamoorthy road, Selvapuram, Coimbatore-641026', ''),
(10, 'Jayasuryaa G R', 'fgfre24@gmail.com', '0f457685fcada1483aa78718c73eb1fa', 9788823390, 'COIMBATORE', '16/94, Sri Krishna Illam', ''),
(11, 'Jayasuryaa G R', 'pubjays@gmail.com', '72a83ae9a3715570d156d06cf1651c52', 6385313368, 'COIMBATORE', '16/94, Sri Krishna Illam', ''),
(12, 'Badhmasri R', 'badhmasri.r@gmail.com', '0d521225785d57b8d8c962554830c926', 8754727930, 'Selvapuram', '16/3, Sivasamy Illam, Nanjappa Garden 2nd street, Ramamoorthy road, Selvapuram, Coimbatore-641026', ''),
(13, 'Thenmozhi R', 'sthenmozhi917@gmail.com', '0d521225785d57b8d8c962554830c926', 9942023680, 'Selvapuram', '16/3, Sivasamy Illam, Nanjappa Garden 2nd street, Ramamoorthy road, Selvapuram, Coimbatore-641026', ''),
(14, 'badhmasri.r bds', 'badh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 8754727930, 'Selvapuram', '16/3, Sivasamy Illam, Nanjappa Garden 2nd street, Ramamoorthy road, Selvapuram, Coimbatore-641026', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(5) NOT NULL,
  `item_id` int(1) NOT NULL,
  `user_id` int(5) NOT NULL,
  `status` enum('Added to Cart','Ordered') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `item_id`, `user_id`, `status`) VALUES
(1, 2, 1, 'Added to Cart'),
(2, 4, 2, 'Added to Cart'),
(3, 2, 10, 'Added to Cart'),
(4, 2, 11, 'Added to Cart'),
(5, 1, 11, 'Added to Cart'),
(6, 1, 11, 'Added to Cart'),
(7, 2, 11, 'Added to Cart'),
(8, 5, 1, 'Added to Cart'),
(9, 1, 12, 'Added to Cart'),
(10, 1, 12, 'Added to Cart'),
(11, 1, 12, 'Added to Cart'),
(12, 1, 12, 'Added to Cart'),
(13, 1, 12, 'Added to Cart'),
(14, 1, 12, 'Added to Cart'),
(15, 1, 12, 'Added to Cart'),
(16, 1, 12, 'Added to Cart'),
(17, 2, 12, 'Added to Cart'),
(18, 5, 12, 'Added to Cart'),
(19, 1, 13, 'Added to Cart'),
(20, 5, 13, 'Added to Cart'),
(21, 6, 13, 'Added to Cart'),
(22, 3, 14, 'Added to Cart'),
(23, 5, 14, 'Added to Cart'),
(24, 5, 3, 'Added to Cart'),
(25, 1, 3, 'Added to Cart'),
(26, 2, 3, 'Added to Cart'),
(27, 3, 3, 'Added to Cart');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
