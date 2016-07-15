-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2016 at 06:51 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `discipleship`
--

-- --------------------------------------------------------

--
-- Table structure for table `disciples`
--

CREATE TABLE IF NOT EXISTS `disciples` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `sex` enum('m','f') NOT NULL,
  `marital_status` enum('m','s','e') NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `member` enum('y','n') NOT NULL,
  `join` varchar(50) NOT NULL,
  `submitted` enum('y','n') NOT NULL,
  `who_submit` varchar(50) NOT NULL,
  `submit` enum('y','n') NOT NULL,
  `submit_to` varchar(50) NOT NULL,
  `leader` enum('y','n') NOT NULL,
  `department` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `ministry` enum('y','n') NOT NULL,
  `sector` varchar(50) NOT NULL,
  `passion` varchar(50) NOT NULL,
  `future` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `disciples`
--

INSERT INTO `disciples` (`id`, `name`, `sex`, `marital_status`, `occupation`, `email`, `address`, `member`, `join`, `submitted`, `who_submit`, `submit`, `submit_to`, `leader`, `department`, `role`, `ministry`, `sector`, `passion`, `future`) VALUES
(1, 'pat', 'm', 'm', 'engineer', 'patricklu201', 'kansanga', 'y', '2 years ago', 'y', 'Apostle Grace', 'y', '1', 'y', 'Operation Discharge', 'Healing', 'y', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
