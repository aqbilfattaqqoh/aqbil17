-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2019 at 01:54 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aqbiluts`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `image`) VALUES
(8, 'Arsenal Home J', 'efef', 2006, 'upload/4.jpg'),
(11, 'Jersey Home', 'efef', 123456, 'upload/2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(13) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usia` int(30) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `biografi` varchar(30) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `website` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `usia`, `nim`, `jurusan`, `biografi`, `gender`, `email`, `website`, `level`) VALUES
(21, 'gusto', '12345', 18, '09031281823033', 'Sistem Informasi', 'dwd', 'Male', 'www.google.com', 'thomasalkadafi@gmail.com', 'admin'),
(22, 'aqbil', '12345', 18, '09031281823033', 'Sistem Informasi', 'ewewrwer', 'Male', 'www.google.com', 'thomasalkadafi@gmail.com', 'admin'),
(23, 'aqbill', 'qwerty', 18, '09031281823033', 'Sistem Informasi', 'ewewrwer', 'Male', 'www.google.com', 'thomasalkadafi@gmail.com', 'admin'),
(26, 'aqbillll', '12345', 21, '12233', 'Teknik Informatika', 'rwr', 'Female', 'www.google.com', 'aqbil@gmail.com', 'manager');

--
-- Indexes for dumped tables
--

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
