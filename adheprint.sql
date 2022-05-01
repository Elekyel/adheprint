-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 08, 2022 at 08:29 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adheprint`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `grand-prix` float DEFAULT '0',
  `petit-prix` float NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `grand-prix`, `petit-prix`, `image`) VALUES
(3, 'Kit Cabine 3', 42, 27, 'assets\\images\\KIT2.jpg'),
(4, 'Kit Cabine 2', 42, 27, 'assets\\images\\KIT2.jpg'),
(5, 'Kit Cabine ARDOISE', 42, 27, 'assets\\images\\KIT2.jpg'),
(6, 'Kit Cabine ARDOISE 4', 42, 27, 'assets\\images\\KIT2.jpg'),
(7, 'Kit Cabine ARDOISE 5', 42, 27, 'assets\\images\\KIT2.jpg'),
(8, 'Kit Cabine ARDOISE 6', 42, 27, 'assets\\images\\KIT2.jpg'),
(9, 'Kit Cabine 8', 42, 27, 'assets\\images\\KIT2.jpg'),
(10, 'Kit Cabine ARDOISE 9', 42, 27, 'assets\\images\\KIT2.jpg'),
(11, 'Kit Cabine ARDOISE 10', 42, 27, 'assets\\images\\KIT2.jpg'),
(12, 'Kit Cabine ARDOISE 11', 42, 27, 'assets\\images\\KIT2.jpg'),
(13, 'Kit Cabine ARDOISE 12', 42, 27, 'assets\\images\\KIT2.jpg'),
(14, 'Kit Cabine ARDOISE', 42, 27, 'assets\\images\\KIT2.jpg'),
(15, 'Kit Cabine ARDOISE', 42, 27, 'assets\\images\\KIT2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(7, 'admin', '$2y$10$smVtOMW0s9tHlGLNh5scquhDHVp/Da7f7HsIQzXrJwummrGA3HX3a'),
(8, 'paprec', '$2y$10$9fbCUKh0BsnJvaUPR2zPLenXTGi/7Mbd5Yr8j7WYBGOwOxE.gl0yW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
