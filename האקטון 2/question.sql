-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Dec 31, 2017 at 11:30 AM
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
-- Table structure for table `choice`
--

DROP TABLE IF EXISTS `choice`;
CREATE TABLE IF NOT EXISTS `choice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `q_number` int(11) NOT NULL,
  `is_correct` tinyint(4) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choice`
--

INSERT INTO `choice` (`id`, `q_number`, `is_correct`, `text`) VALUES
(46, 3, 1, '1948'),
(45, 3, 0, '4324'),
(44, 2, 0, 'grady'),
(43, 2, 0, 'emuna'),
(42, 2, 0, 'shalit'),
(41, 2, 1, 'chasidim'),
(40, 1, 0, '1988'),
(39, 1, 0, '1908'),
(38, 1, 0, '1948'),
(37, 1, 1, '1886'),
(47, 3, 0, '1967'),
(48, 3, 0, '1973'),
(55, 4, 0, 'wall'),
(54, 4, 0, 'mouse'),
(53, 4, 0, 'computer'),
(56, 4, 1, 'kiwi'),
(57, 5, 1, 'see her way and become smart'),
(58, 5, 0, 'and take a selfie'),
(59, 5, 0, 'ask her how shes doing'),
(60, 5, 0, 'eat all of her food'),
(61, 6, 0, 'nemo'),
(62, 6, 0, 'simba'),
(63, 6, 1, 'Zoboomafoo'),
(64, 6, 0, 'avocado'),
(65, 7, 1, 'nahmani'),
(66, 7, 0, 'moti'),
(67, 7, 0, 'yoram'),
(68, 7, 0, 'shmulik');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `q_number` int(11) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`q_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_number`, `text`) VALUES
(2, 'what the last name of hadas?'),
(1, 'in what year the statue of liberty was built?'),
(3, 'in what year israel was declared?'),
(4, 'which of the following is  a fruit?'),
(5, 'complete the sentence:\"go to the ant lazy...\"'),
(6, 'which of the follwing is not an animal?'),
(7, 'kfirs last name');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
