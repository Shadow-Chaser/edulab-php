-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 03:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edulab`
--
CREATE DATABASE IF NOT EXISTS `edulab` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `edulab`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `plan` varchar(50) NOT NULL,
  `expiryDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `plan`, `expiryDate`) VALUES
(23, 'Nissim Yang', 'qihuviri@mailinator.com', '+1 (257) 956-8144', 'Basic', '2022-08-10'),
(24, 'Conan Stephens', 'wyzod@mailinator.com', '+1 (617) 682-4373', 'Standard', '2023-11-23'),
(25, 'Serena Livingston', 'muxusofir@mailinator.com', '+1 (406) 307-2586', 'Premium', '2024-12-23'),
(26, 'Clare Green', 'rinipanyvi@mailinator.com', '+1 (984) 209-6727', 'Basic', '2023-02-02'),
(27, 'Grady Rowland', 'mydas@mailinator.com', '+1 (277) 278-1998', 'Standard', '2024-04-05'),
(28, 'Yuri Rogers', 'diqebolu@mailinator.com', '+1 (884) 397-9307', 'Basic', '2024-12-14'),
(29, 'Rhea Butler', 'xivi@mailinator.com', '+1 (471) 241-3896', 'Premium', '2022-10-19'),
(30, 'Ashab Hussan', 'ashabhtanim@gmail.com', '01779993712', 'Premium', '2022-11-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
