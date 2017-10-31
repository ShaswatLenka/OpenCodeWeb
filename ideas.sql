-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2017 at 01:28 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opencodedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE `ideas` (
  `message_id` int(10) NOT NULL,
  `messageTitle` text NOT NULL,
  `message` text NOT NULL,
  `category` varchar(30) NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`message_id`, `messageTitle`, `message`, `category`, `user_id`, `status`, `created`) VALUES
(1, 'Web app for my club', 'Web app for my clubWeb app for my clubWeb app for my clubWeb app for my club\r\nWeb app for my clubWeb app for my club\r\nWeb app for my club', '0', 4, '1', '2017-10-28 14:35:26'),
(2, 'Web app for my club', 'Web app for my clubWeb app for my clubWeb app for my clubWeb app for my club\r\nWeb app for my clubWeb app for my club\r\nWeb app for my club', '3', 4, '1', '2017-10-28 14:42:59'),
(3, 'Andriod app for my club', 'Andriod app for my club\r\nAndriod app for my clubAndriod app for my club Andriod app for my club', '1', 4, '1', '2017-10-28 14:45:37'),
(4, 'Robotics ros based opencv and image processing  ', 'Robotics ros based opencv and image processing  Robotics ros based opencv and image processing  \r\nRobotics ros based opencv and image processing  ', 'Robotics', 4, 'Pending', '2017-10-29 09:59:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`message_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ideas`
--
ALTER TABLE `ideas`
  MODIFY `message_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
