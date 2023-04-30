-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 01:11 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task2`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id_p` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` int(5) NOT NULL,
  `cc` int(16) NOT NULL,
  `month_exp` int(2) NOT NULL,
  `year_exp` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id_p`, `id_u`, `name`, `email`, `address`, `city`, `state`, `zip`, `cc`, `month_exp`, `year_exp`) VALUES
(2, 2, 'Rakhel', 'rakhel@mail.com', 'marina', 'Batam', 'Kepri', 12345, 2147483647, 12, 2321),
(3, 6, 'andika', 'mail@andikarekatias.com', 'marina', 'Batam', 'Kepri', 12345, 1231231231, 12, 2333);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_c` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `id_i` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_c`, `id_u`, `id_i`, `quantity`) VALUES
(7, 2, 1, 1),
(8, 2, 1, 5),
(9, 2, 1, 2),
(10, 2, 5, 2),
(11, 2, 5, 6),
(12, 2, 3, 1),
(13, 2, 7, 1),
(14, 6, 5, 4),
(15, 6, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id_i` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `i_name` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id_i`, `id_u`, `i_name`, `type`, `image`, `price`) VALUES
(1, 1, 'Tas Tote Bag Wanita', 'Kulit Sintetis', '300x200.png', '300000.00'),
(2, 1, 'Sepatu High Heels', 'Wedges', '300x200.png', '400000.00'),
(3, 1, 'Dress Midi Wanita', 'Floral', '300x200.png', '350000.00'),
(4, 1, 'Celana Panjang Wanita', 'Jogger Pants', '300x200.png', '200000.00'),
(5, 1, 'Sandal Flat Wanita', 'Slip-On', '300x200.png', '150000.00'),
(6, 1, 'Kaos Oblong Wanita', 'Oversized', '300x200.png', '100000.00'),
(7, 1, 'Blazer Wanita', 'Casual', '300x200.png', '450000.00'),
(8, 1, 'Tas Selempang Wanita', 'Canvas', '300x200.png', '250000.00'),
(9, 1, 'Baju Blus Wanita', 'Long Sleeves', '300x200.png', '250000.00'),
(10, 1, 'Sweater Wanita', 'Crop', '300x200.png', '300000.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','pembeli') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin'),
(2, 'rakhel', '5f4dcc3b5aa765d61d8327deb882cf99', 'pembeli'),
(6, 'andika', '5f4dcc3b5aa765d61d8327deb882cf99', 'pembeli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `id_u` (`id_u`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_c`),
  ADD KEY `id_u` (`id_u`),
  ADD KEY `id_i` (`id_i`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_i`),
  ADD KEY `id_u` (`id_u`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id_i` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
