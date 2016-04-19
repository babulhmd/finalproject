-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2016 at 04:49 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE IF NOT EXISTS `userprofile` (
  `id` tinyint(10) NOT NULL,
  `userid` tinyint(4) NOT NULL,
  `name` varchar(300) NOT NULL,
  `profession` varchar(250) NOT NULL,
  `introduction` text NOT NULL,
  `facebook` varchar(300) NOT NULL,
  `twitter` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`id`, `userid`, `name`, `profession`, `introduction`, `facebook`, `twitter`) VALUES
(1, 0, 'Babu', 'PHP', 'Web', 'dd', 'dd'),
(2, 0, 'Babu', 'PHP', 'Web', 'dd', 'dd'),
(3, 0, 'Babu', 'PHP', 'Web', 'dd', 'dd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(10) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Kamrul Islam', 'kamrul@gmail.com', ''),
(2, 'Abu Huraira Bin Amam', 'aa@dd.com', ''),
(3, 'Kamrul Islam', 'kamrul@gmail.com', ''),
(4, 'Abu Huraira Bin Amam', 'aa@dd.com', ''),
(5, 'Babul', 'bb@a.com', ''),
(6, 'karim', 'kamrul@aa.com', ''),
(7, 'Rahim', 'arif_spi@yahoo.com', '202cb962ac59075b964b07152d234b70'),
(8, 'Rahim', 'arif_spi@yahoo.com', '202cb962ac59075b964b07152d234b70'),
(9, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(10, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(11, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(12, 'monir', 'n@m.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
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
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `id` tinyint(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` tinyint(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
