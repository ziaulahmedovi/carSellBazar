-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2017 at 04:40 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carsellsbazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertises`
--

CREATE TABLE `advertises` (
  `id` int(10) NOT NULL,
  `companyName` text NOT NULL,
  `costPerDay` int(5) NOT NULL,
  `publish` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `brand` varchar(10) NOT NULL,
  `moderYear` int(4) NOT NULL,
  `condition` varchar(10) NOT NULL,
  `transmission` varchar(15) NOT NULL,
  `modelName` text NOT NULL,
  `bodyType` varchar(20) NOT NULL,
  `fuelType` varchar(20) NOT NULL,
  `mileage` float(8,4) NOT NULL,
  `engineCapacity` int(8) NOT NULL,
  `imagePath` text NOT NULL,
  `price` int(10) NOT NULL,
  `longDescription` text NOT NULL,
  `sold` tinyint(1) NOT NULL,
  `userId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand`, `moderYear`, `condition`, `transmission`, `modelName`, `bodyType`, `fuelType`, `mileage`, `engineCapacity`, `imagePath`, `price`, `longDescription`, `sold`, `userId`) VALUES
(1, 'Lorem', 2012, 'Lorem', 'lorem', 'Lorem ipsum dolor', 'lorem', 'lorem', 10000.0000, 1500, 'assets/uploads/productsImage/images.jpg', 2000000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt rem culpa in magnam sit minima, perspiciatis enim dolorem magni ipsum sunt. Eaque alias voluptatem quos eveniet amet recusandae ratione sed placeat consequuntur. Corporis molestias ipsum officia eum, culpa dolorum quas incidunt voluptate consectetur, laborum beatae nihil hic, veritatis adipisci commodi.\r\n                       ', 0, 2),
(2, 'Lorem', 2012, 'Lorem', 'lorem', 'Lorem ipsum dolor', 'lorem', 'lorem', 10000.0000, 1500, 'assets/uploads/productsImage/images_014.jpg', 2000000, '                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt rem culpa in magnam sit minima, perspiciatis enim dolorem magni ipsum sunt. Eaque alias voluptatem quos eveniet amet recusandae ratione sed placeat consequuntur. Corporis molestias ipsum officia eum, culpa dolorum quas incidunt voluptate consectetur, laborum beatae nihil hic, veritatis adipisci commodi.\r\n                       ', 0, 2),
(4, 'Lorem', 2012, 'Lorem', 'lorem', 'Lorem ipsum dolor', 'lorem', 'lorem', 10000.0000, 1500, 'assets/uploads/productsImage/images_024.jpg', 2000000, '                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt rem culpa in magnam sit minima, perspiciatis enim dolorem magni ipsum sunt. Eaque alias voluptatem quos eveniet amet recusandae ratione sed placeat consequuntur. Corporis molestias ipsum officia eum, culpa dolorum quas incidunt voluptate consectetur, laborum beatae nihil hic, veritatis adipisci commodi.\r\n                       ', 0, 2),
(5, 'Lorem', 2012, 'Lorem', 'lorem', 'Lorem ipsum dolor', 'lorem', 'lorem', 10000.0000, 1500, 'assets/uploads/productsImage/images_021.jpg', 2000000, '                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt rem culpa in magnam sit minima, perspiciatis enim dolorem magni ipsum sunt. Eaque alias voluptatem quos eveniet amet recusandae ratione sed placeat consequuntur. Corporis molestias ipsum officia eum, culpa dolorum quas incidunt voluptate consectetur, laborum beatae nihil hic, veritatis adipisci commodi.\r\n                       ', 0, 1),
(6, 'Lorem', 2012, 'Lorem', 'lorem', 'Lorem ipsum dolor', 'lorem', 'lorem', 10000.0000, 1500, 'assets/uploads/productsImage/images_022.jpg', 2000000, '                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt rem culpa in magnam sit minima, perspiciatis enim dolorem magni ipsum sunt. Eaque alias voluptatem quos eveniet amet recusandae ratione sed placeat consequuntur. Corporis molestias ipsum officia eum, culpa dolorum quas incidunt voluptate consectetur, laborum beatae nihil hic, veritatis adipisci commodi.\r\n                       ', 0, 1),
(7, 'Lorem', 2012, 'Lorem', 'lorem', 'Lorem ipsum dolor', 'lorem', 'lorem', 10000.0000, 1500, 'assets/uploads/productsImage/images_028.jpg', 2000000, '                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt rem culpa in magnam sit minima, perspiciatis enim dolorem magni ipsum sunt. Eaque alias voluptatem quos eveniet amet recusandae ratione sed placeat consequuntur. Corporis molestias ipsum officia eum, culpa dolorum quas incidunt voluptate consectetur, laborum beatae nihil hic, veritatis adipisci commodi.\r\n                       ', 0, 3),
(8, 'Lorem', 2012, 'Lorem', 'lorem', 'Lorem ipsum dolor', 'lorem', 'lorem', 10000.0000, 1500, 'assets/uploads/productsImage/images_031.jpg', 2000000, '                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt rem culpa in magnam sit minima, perspiciatis enim dolorem magni ipsum sunt. Eaque alias voluptatem quos eveniet amet recusandae ratione sed placeat consequuntur. Corporis molestias ipsum officia eum, culpa dolorum quas incidunt voluptate consectetur, laborum beatae nihil hic, veritatis adipisci commodi.\r\n                       ', 0, 3),
(9, 'Lorem', 2012, 'Lorem', 'lorem', 'Lorem ipsum dolor', 'lorem', 'lorem', 10000.0000, 1500, 'assets/uploads/productsImage/images_003.jpg', 2000000, '                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt rem culpa in magnam sit minima, perspiciatis enim dolorem magni ipsum sunt. Eaque alias voluptatem quos eveniet amet recusandae ratione sed placeat consequuntur. Corporis molestias ipsum officia eum, culpa dolorum quas incidunt voluptate consectetur, laborum beatae nihil hic, veritatis adipisci commodi.\r\n                       ', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `mobileNumber` varchar(11) NOT NULL,
  `imagePath` text NOT NULL,
  `type` varchar(10) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `passWord` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `mobileNumber`, `imagePath`, `type`, `userName`, `passWord`) VALUES
(1, 'ZIAUL AHMED ', 'OVI ', 'ziaulahmedovi01@gmail.com', '01515297807', 'assets/uploads/usersImage/images_064.jpg', 'admin', 'ziaulahmed.ovi ', '12345678'),
(2, 'AZBI MOHAMMAD', 'AZBI', 'azbi@gmail.com', '01811673467', 'assets/uploads/usersImage/images_003.jpg', 'seller', 'azbi', '12345678'),
(3, 'Raju', 'Ifran', 'raju@gmail.com', '12345678900', 'assets/uploads/usersImage/images_005.jpg', 'admin', 'raju', '12345678'),
(4, 'Uthso', 'Ahmed', 'uthso@gmail.com', '12345678900', 'assets/uploads/usersImage/images.jpg', 'seller', 'uthso', '12345678'),
(5, 'Mim', 'Ahmed', 'mim@gmail.com', '12345678900', 'assets/uploads/usersImage/images_054.jpg', 'seller', 'mim', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertises`
--
ALTER TABLE `advertises`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `advertises`
--
ALTER TABLE `advertises`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
