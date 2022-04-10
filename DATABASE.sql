-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 07:21 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookpod.`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `storeid` int(11) NOT NULL,
  `bookid` int(200) NOT NULL,
  `bookname` text NOT NULL,
  `author` text NOT NULL,
  `edition` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`storeid`, `bookid`, `bookname`, `author`, `edition`) VALUES
(7, 8, 'database', 'akash', 2019),
(6, 9, 'c++', 'piyush', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `bookstores`
--

CREATE TABLE `bookstores` (
  `storeid` int(200) NOT NULL,
  `storename` text NOT NULL,
  `address` text NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookstores`
--

INSERT INTO `bookstores` (`storeid`, `storename`, `address`, `phone`) VALUES
(6, 'shortcut', 'dhampur', 9058544497),
(7, 'library', 'moradabad', 9058544497);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` text NOT NULL,
  `phone` bigint(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'Harsh Chauhan', 'harshchauhan327@gmail.com', 2147483647, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `bookstores`
--
ALTER TABLE `bookstores`
  ADD PRIMARY KEY (`storeid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bookstores`
--
ALTER TABLE `bookstores`
  MODIFY `storeid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
