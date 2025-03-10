-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2025 at 11:33 PM
-- Server version: 5.7.12-log
-- PHP Version: 5.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codeigniter`
--
CREATE DATABASE IF NOT EXISTS `codeigniter` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `codeigniter`;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
CREATE TABLE IF NOT EXISTS `statuses` (
  `statusid` int(11) NOT NULL AUTO_INCREMENT,
  `statustext` varchar(1023) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`statusid`),
  UNIQUE KEY `statustext` (`statustext`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Truncate table before insert `statuses`
--

TRUNCATE TABLE `statuses`;
--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`statusid`, `statustext`) VALUES
(14, 'active'),
(9, 'at home'),
(1, 'available'),
(5, 'away'),
(6, 'brb'),
(13, 'deleted'),
(17, 'disabled'),
(16, 'enabled'),
(31, 'gone fishing'),
(8, 'in office'),
(15, 'inactive'),
(7, 'invisible'),
(12, 'maternity leave'),
(2, 'offline'),
(11, 'on business trip'),
(10, 'out of office'),
(4, 'sick leave'),
(3, 'vacation');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(127) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(127) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(127) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(31) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(31) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middlename` varchar(31) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(31) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(127) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(127) COLLATE utf8_unicode_ci DEFAULT NULL,
  `statusid` int(11) DEFAULT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=63 ;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `password`, `phone`, `firstname`, `middlename`, `lastname`, `city`, `country`, `statusid`) VALUES
(1, 'ungvac', 'csongor@codeigniter.com', 'csongor', NULL, 'Csongor', 'István', 'Ungvári', 'Targu Mures', 'Romania', NULL),
(2, 'boross', 'szabolcs@codeigniter.com', 'szabolcs', NULL, 'Szabolcs', NULL, 'Boros', 'Targu Mures', 'Romania', 31),
(3, 'denesl', 'laszlo@codeigniter.com', 'laszlo', '', 'Laszlo', '', 'Denes', 'Sfantu Gheorghe', 'Romania', NULL),
(4, 'vajdae', 'emoke@codeigniter.com', 'emoke', '', 'Emoke', 'Judit', 'Vajda', 'Targu Mures', 'Romania', NULL),
(10, 'nyulaa', 'attila@codeigniter.com', 'attila', NULL, 'Attila', NULL, 'Nyulas', 'Targu Mures', 'Romania', NULL),
(12, 'savele', 'erika@codeigniter.com', 'erika', NULL, 'Erika', NULL, 'Savel', 'Targu Mures', 'Romania', NULL),
(15, 'madarl', 'laszlo.mad@codeigniter.com', 'laszlo', NULL, 'Laszlo', NULL, 'Madaras', 'Targu Mures', 'Romania', NULL),
(16, 'szabol', 'lehel@codeigniter.com', 'lehel', NULL, 'Lehel', NULL, 'Szabo', 'Targu Mures', 'Romania', NULL),
(20, 'lokode', 'emoke.lok@codeigniter.com', 'emoke', NULL, 'Emoke', NULL, 'Lokodi', 'Targu Mures', 'Romania', NULL),
(21, 'doczib', 'botond@codeigniter.com', 'botond', NULL, 'Botond', NULL, 'Doczi', 'Targu Mures', 'Romania', NULL),
(22, 'zsidok', 'kata@codeigniter.com', 'kata', NULL, 'Kata', NULL, 'Zsido', 'Targu Mures', 'Romania', NULL),
(37, 'array', 'tizedik@eleme', 'tizedik', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'adatbazisquery', 'osszesentiz@elem', 'osszesentiz', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'zz', 'zz@zz.zz', 'zz', NULL, NULL, NULL, NULL, NULL, NULL, 6),
(62, 'yy', 'yy@yy.yy', 'yy', NULL, NULL, NULL, NULL, NULL, NULL, 12);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
