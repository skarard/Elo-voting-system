-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2015 at 09:31 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `poll`
--

-- --------------------------------------------------------

--
-- Table structure for table `parties`
--

CREATE TABLE IF NOT EXISTS `parties` (
  `id` int(24) NOT NULL AUTO_INCREMENT,
  `party` varchar(150) NOT NULL,
  `image` varchar(100) NOT NULL,
  `score` float(100,12) NOT NULL,
  `wins` int(100) NOT NULL,
  `leader` varchar(26) NOT NULL,
  `keypoints` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`,`score`,`wins`),
  KEY `title` (`party`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `parties`
--

INSERT INTO `parties` (`id`, `party`, `image`, `score`, `wins`, `leader`, `keypoints`) VALUES
(1, 'Labour', 'labour.jpg', 1000.000000000000, 0, 'Ed Milliband', 'Education'),
(2, 'SNP', 'snp.jpg', 1000.000000000000, 0, 'Nicola Sturgeon', 'Free Scotland'),
(3, 'Conservatives', 'conservatives.jpg', 1000.000000000000, 0, 'David Cameron', 'Privatise'),
(4, 'Lib Dems', 'libdem.jpg', 1000.000000000000, 0, 'Nick Clegg', 'Things'),
(5, 'Greens', 'green.jpg', 1000.000000000000, 0, 'Natalie Bennett', 'Ecology'),
(6, 'UKIP', 'ukip.jpg', 1000.000000000000, 0, 'Nigel Farage', 'Britain for British');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(25) NOT NULL AUTO_INCREMENT,
  `Username` varchar(65) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
