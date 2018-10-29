-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 06:24 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` tinyint(2) NOT NULL,
  `Name` text NOT NULL,
  `Specialty` text NOT NULL,
  `Available` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `Name`, `Specialty`, `Available`) VALUES
(1, 'Abdullahi Abdulkabir', 'Medical Doctor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` smallint(2) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Post` varchar(300) CHARACTER SET utf8 NOT NULL,
  `Timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `Title`, `Post`, `Timestamp`) VALUES
(2, 'changed', 'Hello my name is abdulklahaihaidjkdasd', '2018-08-05 13:16:01'),
(3, '', 'ajkdashdsuidahw', '2018-06-09 02:14:32'),
(5, 'Sad Salami', 'He is an AI Enthusiast, a fast learner, a friend of life ', '2018-06-22 08:39:45'),
(11, 'adsjkdakj', 'sdkjasdjk', '2018-06-24 19:56:22'),
(12, 'create', 'sdfsdkmflsd', '2018-07-16 20:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` tinyint(50) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `User_level` smallint(5) NOT NULL,
  `Date_Created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `password`, `User_level`, `Date_Created`) VALUES
(1, 'Abdullahi', '12345678', 1, '2018-05-06 03:52:22'),
(2, 'Admin', 'admin', 2, '2018-05-06 03:48:09'),
(3, 'abdullahia', '1234567890', 2, '2018-05-06 03:50:11'),
(7, 'Salami', '1234', 3, '2018-06-06 18:08:09'),
(8, 'Hash', '123', 1, '2018-06-09 04:01:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Post` (`Post`(255));

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` smallint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` tinyint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
