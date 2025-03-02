-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2025 at 06:02 PM
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
-- Table structure for table `users`
--

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
  PRIMARY KEY (`userid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `password`, `phone`, `firstname`, `middlename`, `lastname`, `city`, `country`) VALUES
(1, 'ungvac', 'csongor@codeigniter.com', 'csongor', NULL, 'Csongor', 'István', 'Ungvári', 'Targu Mures', 'Romania'),
(2, 'boross', 'szabolcs@codeigniter.com', 'szabolcs', NULL, 'Szabolcs', NULL, 'Boros', 'Targu Mures', 'Romania'),
(3, 'denesl', 'laszlo@codeigniter.com', 'laszlo', '', 'Laszlo', '', 'Denes', 'Sfantu Gheorghe', 'Romania'),
(4, 'vajdae', 'emoke@codeigniter.com', 'emoke', '', 'Emoke', 'Judit', 'Vajda', 'Targu Mures', 'Romania'),
(10, 'nyulaa', 'attila@codeigniter.com', 'attila', NULL, 'Attila', NULL, 'Nyulas', 'Targu Mures', 'Romania'),
(12, 'savele', 'erika@codeigniter.com', 'erika', NULL, 'Erika', NULL, 'Savel', 'Targu Mures', 'Romania'),
(15, 'madarl', 'laszlo.mad@codeigniter.com', 'laszlo', NULL, 'Laszlo', NULL, 'Madaras', 'Targu Mures', 'Romania'),
(16, 'szabol', 'lehel@codeigniter.com', 'lehel', NULL, 'Lehel', NULL, 'Szabo', 'Targu Mures', 'Romania'),
(20, 'lokode', 'emoke.lok@codeigniter.com', 'emoke', NULL, 'Emoke', NULL, 'Lokodi', 'Targu Mures', 'Romania'),
(21, 'doczib', 'botond@codeigniter.com', 'botond', NULL, 'Botond', NULL, 'Doczi', 'Targu Mures', 'Romania'),
(22, 'zsidok', 'kata@codeigniter.com', 'kata', NULL, 'Kata', NULL, 'Zsido', 'Targu Mures', 'Romania');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
