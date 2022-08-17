-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 07, 2021 at 03:20 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookroom`
--

DROP TABLE IF EXISTS `bookroom`;
CREATE TABLE IF NOT EXISTS `bookroom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `arrival` date NOT NULL,
  `nights` int(11) NOT NULL,
  `departure` date NOT NULL,
  `room` varchar(50) NOT NULL,
  `adult` varchar(50) NOT NULL,
  `children` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bookroom`
--

INSERT INTO `bookroom` (`id`, `arrival`, `nights`, `departure`, `room`, `adult`, `children`) VALUES
(1, '2021-02-20', 1, '2021-02-21', '2room', '2adult', '0children'),
(2, '2021-02-20', 0, '2021-02-21', '2room', '1adult', '0children'),
(3, '2021-02-20', 1, '2021-02-21', '3room', '1adult', '0children'),
(4, '2021-02-20', 1, '2021-02-21', '3room', '1adult', '0children'),
(5, '2021-02-12', 1, '2021-02-03', '1room', '1adult', '0children'),
(6, '2021-02-20', 1, '2021-02-21', '2room', '1adult', '0children'),
(7, '2021-02-21', 0, '2021-02-22', '1room', '1adult', '0children'),
(8, '2021-02-21', 1, '2021-02-22', '1room', '1adult', '0children'),
(9, '2021-02-21', 1, '2021-02-22', '1room', '1adult', '0children'),
(10, '2021-02-21', 1, '2021-02-22', '1room', '1adult', '0children'),
(11, '2021-02-21', 1, '2021-02-22', '1room', '1adult', '0children'),
(12, '2021-02-21', 1, '2021-02-22', '1room', '1adult', '0children'),
(13, '2021-02-21', 0, '2021-02-21', '1room', '1adult', '0children'),
(14, '2021-02-21', 0, '2021-02-22', '1room', '1adult', '0children'),
(15, '2021-02-21', 0, '2021-02-22', '1room', '1adult', '0children'),
(16, '2021-02-21', 0, '2021-02-22', '1room', '1adult', '0children'),
(17, '2021-02-21', 0, '2021-02-22', '1room', '1adult', '0children'),
(18, '2021-03-01', 0, '2021-03-02', '1room', '1adult', '0children'),
(19, '2021-03-01', 0, '2021-03-02', '1room', '1adult', '0children'),
(20, '2021-03-01', 0, '2021-03-02', '1room', '1adult', '0children'),
(21, '2021-03-01', 0, '2021-03-02', '1room', '1adult', '0children'),
(22, '2021-03-01', 0, '2021-03-02', '1room', '1adult', '0children'),
(23, '2021-03-01', 0, '2021-03-02', '1room', '1adult', '0children'),
(24, '2021-03-01', 0, '2021-03-02', '1room', '1adult', '0children'),
(25, '2021-03-01', 0, '2021-03-02', '1room', '1adult', '0children'),
(26, '2021-03-02', 0, '2021-03-03', '1room', '1adult', '0children'),
(27, '2021-03-02', 0, '2021-03-03', '1room', '1adult', '0children'),
(28, '2021-03-02', 1, '2021-03-03', '1room', '1adult', '0children'),
(29, '2021-03-02', 1, '2021-03-03', '1room', '1adult', '0children'),
(30, '2021-03-02', 0, '2021-03-03', '1room', '1adult', '0children'),
(31, '2021-03-02', 0, '2021-03-03', '1room', '1adult', '0children'),
(32, '2021-03-02', 0, '2021-03-03', '1room', '1adult', '0children'),
(33, '2021-03-02', 0, '2021-03-03', '1room', '1adult', '0children'),
(34, '2021-03-03', 1, '2021-03-04', '1room', '2adult', '1children'),
(35, '2021-03-03', 1, '2021-03-04', '1room', '2adult', '1children'),
(36, '2021-03-03', 1, '2021-03-04', '1room', '1adult', '0children'),
(37, '2021-03-03', 1, '2021-03-04', '1room', '1adult', '0children'),
(38, '2021-03-03', 1, '2021-03-04', '1room', '1adult', '1children'),
(39, '2021-03-03', 1, '2021-03-04', '1room', '1adult', '1children'),
(40, '2021-03-03', 1, '2021-03-04', '1room', '1adult', '0children'),
(41, '2021-03-03', 1, '2021-03-04', '1room', '1adult', '0children'),
(42, '2021-03-06', 0, '2021-03-06', '1room', '1adult', '0children'),
(43, '2021-03-06', 0, '2021-03-06', '1room', '1adult', '0children'),
(44, '2021-03-07', 0, '2021-03-07', '1room', '1adult', '0children'),
(45, '2021-03-07', 0, '2021-03-07', '1room', '1adult', '0children'),
(46, '2021-03-07', 0, '2021-03-07', '1room', '1adult', '0children'),
(47, '2021-03-07', 0, '2021-03-07', '1room', '1adult', '0children'),
(48, '2021-03-07', 1, '2021-03-08', '1room', '2adult', '1children'),
(49, '2021-03-07', 1, '2021-03-08', '1room', '2adult', '1children');

-- --------------------------------------------------------

--
-- Table structure for table `guestinfo`
--

DROP TABLE IF EXISTS `guestinfo`;
CREATE TABLE IF NOT EXISTS `guestinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `contactnumber` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `guestinfo`
--

INSERT INTO `guestinfo` (`id`, `name`, `contactnumber`, `email`, `message`) VALUES
(1, '', '', '', ''),
(2, 'Thakshila navodya watadenithanna', '0710424748', '', 'aaaaa'),
(3, 'Thakshila navodya watadenithanna', '0710424748', 'thakshilan98@gmail.com', 'aaaaa'),
(4, 'Thakshila navodya watadenithanna', '0710424748', 'thakshilan98@gmail.com', ''),
(5, 'Thakshila navodya watadenithanna', '0710424748', 'thakshilan98@gmail.com', 'thadadasdsa'),
(6, 'Thakshila navodya watadenithanna', '0710424748', 'thakshilan98@gmail.com', 'thadadasdsa'),
(7, 'Thakshila navodya watadenithanna', '0710424748', 'thakshilan98@gmail.com', 'thadadasdsa'),
(8, 'Thakshila navodya watadenithanna', '0710424748', 'thakshilan98@gmail.com', 'thadadasdsa'),
(9, 'Thakshila navodya watadenithanna', '0710424748', 'thakshilan98@gmail.com', ''),
(10, 'Thakshila navodya watadenithanna', '0710424748', 'thakshilan98@gmail.com', ''),
(11, 'testing', '0710424748', 'thakshilan98@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `inquire`
--

DROP TABLE IF EXISTS `inquire`;
CREATE TABLE IF NOT EXISTS `inquire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `ContactNumber` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `inquire`
--

INSERT INTO `inquire` (`id`, `Name`, `ContactNumber`, `Email`, `Subject`, `Message`) VALUES
(1, 'Thakshila navodya watadenithanna', '0710424748', 'thakshilan98@gmail.com', 'test', ''),
(2, 'Thakshila navodya watadenithanna', '0710424748', 'thakshilan98@gmail.com', 'last testing', ''),
(3, 'Thakshila navodya watadenithanna', '0710424748', 'thakshilan98@gmail.com', '', ''),
(4, 'Thakshila navodya watadenithanna', '0710424748', 'thakshilan98@gmail.com', 'test', 'testing'),
(5, 'Thakshila navodya watadenithanna', '0710424748', 'thakshilan98@gmail.com', 'testing', 'testsss'),
(6, 'Thakshila navodya watadenithanna', '0710424748', 'tesing@gmail.com', 'test', 'hello'),
(7, 'Thakshila navodya watadenithanna', '0710424748', 'tesing@gmail.com', 'test', 'hello'),
(8, 'Thakshila navodya watadenithanna', '0710424748', 'tesing@gmail.com', 'test', 'hello'),
(9, 'sssss', 'sssss', 'sandunishashiwijendra@gmail.com', 'w', ''),
(10, 'thakshila', '0710424748', 'thakshilan98@gmail.com', 'test', 'testing'),
(11, 'Thakshila navodya watadenithanna', '0710424748', 'thakshilan98@gmail.com', 'test', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `lastimage`
--

DROP TABLE IF EXISTS `lastimage`;
CREATE TABLE IF NOT EXISTS `lastimage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `image_text` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lastimage`
--

INSERT INTO `lastimage` (`id`, `image`, `image_text`) VALUES
(1, 'room_database.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `loginpage`
--

DROP TABLE IF EXISTS `loginpage`;
CREATE TABLE IF NOT EXISTS `loginpage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `national` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `loginpage`
--

INSERT INTO `loginpage` (`id`, `username`, `password`, `national`) VALUES
(1, '', '', ' '),
(2, 'Thakshila', '123', 'na1'),
(3, 'Navodya', '123', 'Ammerica'),
(4, 'Navodya', '123', 'Ammerica'),
(5, 'Thakshila1', '123', ' '),
(6, 'Thakshila1', '123', ' '),
(7, '123', '123', ' '),
(8, 'Thakshila', '1234', ' '),
(9, 'navodya', '1234', ' '),
(10, 'Thakshila', '12345', ' '),
(11, 'testiong', '1234', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

DROP TABLE IF EXISTS `price`;
CREATE TABLE IF NOT EXISTS `price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `price`) VALUES
(1, '123USD'),
(4, '150USD'),
(5, '143USD'),
(6, '!70USD');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guestinfo`
--
ALTER TABLE `guestinfo`
  ADD CONSTRAINT `guestinfo_ibfk_1` FOREIGN KEY (`id`) REFERENCES `loginpage` (`id`);

--
-- Constraints for table `loginpage`
--
ALTER TABLE `loginpage`
  ADD CONSTRAINT `loginpage_ibfk_1` FOREIGN KEY (`id`) REFERENCES `bookroom` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
