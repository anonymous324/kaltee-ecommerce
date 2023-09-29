-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 08:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaltee`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `Profile` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `Profile`, `Description`, `Create_at`) VALUES
(6, 'symbol', '65146eb27731c.jpg', 'symbol', '2023-09-27 23:34:34'),
(7, 'butterfly', '65148ff4ebbe9.png', 'beautiful', '2023-09-28 01:56:28'),
(8, 'billie', '651490126f59c.jpg', 'eillish', '2023-09-28 01:56:58'),
(9, 'weed', '65149049ccbc5.jpg', 'greens', '2023-09-28 01:57:53');

-- --------------------------------------------------------

--
-- Table structure for table `notificationupdated`
--

CREATE TABLE `notificationupdated` (
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notificationupdated`
--

INSERT INTO `notificationupdated` (`email`) VALUES
('vrai23333@gmail.com'),
('vrai32222@gmail.com'),
('neerajrevandkar@gmail.com'),
('hwello@gmail.com'),
('sdfsdafsd@gmail.com'),
('vrai3245@gmail.com'),
('vsdfsdf@gmail.com'),
('13854@fghf.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(255) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `artist` varchar(30) NOT NULL,
  `product_price` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_img`, `product_title`, `artist`, `product_price`) VALUES
(18, '65146b6bc19ee.jpg', 'Akash rai', 'KALTEE', 1234),
(19, '65146d5abea6b.jpg', 'xyz', 'KALTEE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwordHash` varchar(32) NOT NULL,
  `registeredAt` datetime NOT NULL,
  `lastLogin` datetime DEFAULT NULL,
  `dob` date NOT NULL,
  `profile` text DEFAULT NULL,
  `otp` int(6) DEFAULT NULL,
  `email_validated` text DEFAULT 'Not_Verified',
  `Phone_validated` text DEFAULT 'Not_Verified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullName`, `mobile`, `email`, `passwordHash`, `registeredAt`, `lastLogin`, `dob`, `profile`, `otp`, `email_validated`, `Phone_validated`) VALUES
(7, 'vishal rai', '8208601720', 'vrai3245@protonmail.com', '12345685866', '2023-09-21 14:51:18', NULL, '2001-03-31', NULL, 579631, 'Not_Verified', 'Not_Verified'),
(11, 'akashrai', '45456642236', 'akssah@gmail.com', '124354679', '2023-09-21 15:03:27', NULL, '2220-12-12', NULL, 432498, 'Not_Verified', 'Not_Verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_mobile` (`mobile`),
  ADD UNIQUE KEY `uq_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
