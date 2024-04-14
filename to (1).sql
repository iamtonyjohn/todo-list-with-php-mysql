-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2024 at 06:05 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `to`
--

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

DROP TABLE IF EXISTS `todos`;
CREATE TABLE IF NOT EXISTS `todos` (
  `tid` int NOT NULL AUTO_INCREMENT,
  `todo` varchar(255) NOT NULL,
  `status` tinyint NOT NULL,
  `uid` int NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`tid`, `todo`, `status`, `uid`, `date`, `time`) VALUES
(44, 'SDS', 0, 14, '0000-00-00', '00:00:00'),
(48, 'hello', 0, 15, '0000-00-00', '00:00:00'),
(51, 'hii', 1, 15, '0000-00-00', '00:00:00'),
(53, 'SRS', 0, 13, '2023-12-05', '00:00:00'),
(86, 'coding', 0, 17, '2023-12-10', '10:24:00'),
(89, 'hello', 0, 22, '2023-12-11', '09:50:00'),
(90, 'coding', 1, 13, '2023-12-11', '10:04:00'),
(91, 'persenttation', 0, 13, '2023-12-11', '10:04:00'),
(92, 'main record', 0, 13, '2023-12-18', '10:09:00'),
(93, 'assignment', 0, 13, '2023-12-11', '13:40:00'),
(94, 'buying ste', 0, 13, '2023-12-11', '13:48:00'),
(95, 'mini project presentation', 0, 23, '2023-12-11', '13:55:00'),
(96, 'report ', 0, 13, '2023-12-25', '13:59:00'),
(97, 'coding', 1, 24, '2023-12-11', '14:22:00'),
(98, 'presentation', 0, 24, '2023-12-25', '14:23:00'),
(99, 'hello', 0, 24, '2023-12-05', '14:24:00'),
(100, 'gas bill', 0, 13, '2023-12-15', '07:56:00'),
(101, 'movie', 0, 13, '2023-12-15', '07:56:00'),
(102, 'anime', 0, 13, '2023-12-15', '07:56:00'),
(107, 'hello', 0, 13, '2023-12-18', '20:29:00'),
(119, 'hi', 1, 27, '2023-12-18', '23:47:00'),
(120, 'hi', 0, 27, '2023-12-18', '23:47:00'),
(121, 'hi', 0, 27, '2023-12-18', '23:47:00'),
(125, 'hi', 0, 27, '2023-12-19', '08:18:00'),
(126, 'hello', 0, 27, '2023-12-19', '08:18:00'),
(149, 'coding', 0, 27, '2023-12-19', '08:27:00'),
(150, 'hello', 0, 27, '2023-12-19', '08:37:00'),
(151, 'hello', 0, 27, '2023-12-19', '08:37:00'),
(152, 'hello', 0, 27, '2023-12-19', '08:37:00'),
(153, 'presentation', 1, 31, '2023-12-19', '13:35:00'),
(154, 'movie', 0, 31, '2023-12-12', '13:35:00'),
(156, 'SRS', 1, 33, '2023-12-12', '13:51:00'),
(157, 'as', 0, 33, '2023-12-25', '13:52:00'),
(158, 'code', 0, 34, '2023-12-20', '08:16:00'),
(159, 'SRS', 0, 34, '2023-12-12', '08:20:00'),
(160, 'fair report', 0, 34, '2023-12-21', '08:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `user_name`, `password`, `name`) VALUES
(13, 'tony', '123', 'tony john'),
(14, 'vishnu', '111', 'sabu'),
(15, 'jos', 'qwe', 'joj jj'),
(16, 'vishnu', '123', 'SABU'),
(17, 'cr7', '123', 'vishnu'),
(18, 'tony', '1234', 'tony john'),
(21, 'don', 'asd', 'dhoni'),
(22, 'asd', 'asd', 'vishnu'),
(23, 'suttu123', 'suyyu', 'suttu'),
(24, 'ancy', '123', 'ancy'),
(25, 'abc', '123', 'tony'),
(26, 'raj', '123', 'Vishnu Raj'),
(27, 'jose', '123', 'jose'),
(31, 'safa', '123', 'safa'),
(32, 'zam', '12345', 'zaman'),
(33, 'abcc', '123', 'vishnu'),
(34, 'tony', '12345', 'tony john');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
