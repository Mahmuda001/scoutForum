-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2018 at 08:01 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scout`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(225) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `position` varchar(50) NOT NULL,
  `contact` text NOT NULL,
  `adress` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `position`, `contact`, `adress`, `password`) VALUES
(1, 'Jahidul Hasan Zahid', 'jahidulhasanzahid@outlook.com', 'Normal Member', '123456765789', 'Dhaka, Bangladesh', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Nobita', 'nobita@gmail.com', 'Normal Member', '32456789', 'Japan', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'mohona', 'mohona@gmail.com', 'normal', '234567', 'dhaka', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'nipaa', 'nipa@a', 'Major', '123456765789', 'dhaka', 'f39d177d315a0533f2bb99893d20d275');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(225) NOT NULL,
  `post` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `post`, `date`, `post_by`) VALUES
(1, 'hello..', '2018-04-09 17:38:27', ''),
(2, 'hello..2', '2018-04-09 17:40:31', ''),
(3, 'hello3', '2018-04-09 17:42:08', ''),
(4, 'hello...4', '2018-04-09 17:45:04', ''),
(5, 'fine', '2018-04-09 17:46:26', ''),
(6, 'fine', '2018-04-09 17:46:31', ''),
(7, 'hey', '2018-04-09 17:46:57', 'nobita@gmail.com'),
(8, 'hello jahid', '2018-04-09 17:58:30', 'nobita@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
