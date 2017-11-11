-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2017 at 12:48 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(1, 'Web app for my club', 'Web app for my clubWeb app for my clubWeb app for my clubWeb app for my club\r\nWeb app for my clubWeb app for my club\r\nWeb app for my club', '0', 1, '1', '2017-10-28 14:35:26'),
(2, 'Web app for my club', 'Web app for my clubWeb app for my clubWeb app for my clubWeb app for my club\r\nWeb app for my clubWeb app for my club\r\nWeb app for my club', '3', 1, '1', '2017-10-28 14:42:59'),
(3, 'Andriod app for my club', 'Andriod app for my club\r\nAndriod app for my clubAndriod app for my club Andriod app for my club', '1', 1, '1', '2017-10-28 14:45:37'),
(4, 'Robotics ros based opencv and image processing  ', 'Robotics ros based opencv and image processing  Robotics ros based opencv and image processing  \r\nRobotics ros based opencv and image processing  ', 'Robotics', 1, 'Pending', '2017-10-29 09:59:20'),
(5, 'This is dummy project', 'Hello this is only for checking purpose.\r\nthere is no idea for project at this time.', 'No category selected', 1, 'Pending', '2017-11-07 09:23:14'),
(6, 'This is dummy project', 'Hello this is only for checking purpose.\r\nthere is no idea for project at this time.', 'No category selected', 1, 'Pending', '2017-11-07 09:29:04'),
(7, 'Facilitating the facilitators of education: Faculty welfare as a priority', 'Facilitating the facilitators of education: Faculty welfare as a priority\r\nFacilitating the facilitators of education: Faculty welfare as a priority\r\nFacilitating the facilitators of education: Faculty welfare as a priority', 'Robotics', 1, 'Pending', '2017-11-11 12:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `created`) VALUES
(1, 'Malkhan Singh', 'malkhansinghrathaur@gmail.com', 'a6b2a8d71879a3dd0b8e0719fb4ec5bb', '2017-11-07 09:21:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ideas`
--
ALTER TABLE `ideas`
  MODIFY `message_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
