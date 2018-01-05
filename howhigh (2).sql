-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 05, 2018 at 12:24 PM
-- Server version: 5.7.19
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
-- Database: `howhigh`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `first_name` varchar(1000) NOT NULL,
  `last_name` varchar(1000) NOT NULL,
  `id` int(11) NOT NULL,
  `city` varchar(1000) NOT NULL,
  `age` int(4) NOT NULL,
  `grade` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`first_name`, `last_name`, `id`, `city`, `age`, `grade`) VALUES
('eran', 'grady', 123456789, 'dimona', 26, 9),
('asher', 'swisa', 112233445, 'jerusalem', 41, 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `first_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `id` int(9) NOT NULL,
  `city` varchar(30) NOT NULL,
  `age` int(4) NOT NULL,
  `grade` int(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`first_name`, `last_name`, `id`, `city`, `age`, `grade`) VALUES
('eran', 'grady', 123456789, 'dimona', 26, 9),
('shimon', 'emuna', 123456788, 'beer sheva', 25, 500),
('or', 'shalit', 123456777, 'lehavim', 25, 3),
('david', 'halfon', 123456666, 'ofakim', 19, 8),
('asher', 'swisa', 112233445, 'jerusalem', 41, 1),
('avraham', 'ifraimov', 11223344, 'ashdod', 29, 9),
('shalev', 'levi', 123123123, 'dimona', 12, 2),
('meni', 'moni', 234234, 'beer sheva', 23, 3),
('meni', 'moni', 2342344, 'beer sheva', 23, NULL),
('meni', 'moni', 7467, 'beer sheva', 23, NULL),
('dh', 'dfgh', 6554, 'dgh', 34, NULL),
('dsfg', 'sdfg', 4545, 'wrrt', 24, NULL),
('dsfg', 'sdfg', 45456, 'wrrt', 24, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
