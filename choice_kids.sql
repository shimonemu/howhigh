-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 04, 2018 at 01:36 AM
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
-- Database: `question`
--

-- --------------------------------------------------------

--
-- Table structure for table `choice_kids`
--

DROP TABLE IF EXISTS `choice_kids`;
CREATE TABLE IF NOT EXISTS `choice_kids` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `q_number` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choice_kids`
--

INSERT INTO `choice_kids` (`id`, `q_number`, `is_correct`, `text`) VALUES
(1, 1, 1, 'yuval shem tov'),
(2, 1, 0, 'shimon'),
(3, 1, 0, 'michal haktana'),
(4, 1, 0, 'avi bitter'),
(5, 2, 0, 'sheshtus'),
(6, 2, 1, 'hapestigal'),
(7, 2, 0, 'ad Lo yada'),
(8, 2, 0, 'fauda');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
