-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 19, 2016 at 06:25 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `sex` enum('Male','Female') NOT NULL,
  `marital_status` enum('Married','Single','Engaged') NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `member` enum('Yes','No') NOT NULL,
  `join` varchar(50) NOT NULL,
  `submitted` enum('Yes','No') NOT NULL,
  `who_submit` varchar(50) NOT NULL,
  `submit` enum('Yes','No') NOT NULL,
  `submit_to` varchar(50) NOT NULL,
  `leader` enum('Yes','No') NOT NULL,
  `department` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `ministry` enum('Yes','No') NOT NULL,
  `sector` varchar(50) NOT NULL,
  `passion` varchar(50) NOT NULL,
  `future` varchar(50) NOT NULL,
  `prog_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `disciples`
--

INSERT INTO `disciples` (`id`, `name`, `sex`, `marital_status`, `occupation`, `email`, `address`, `member`, `join`, `submitted`, `who_submit`, `submit`, `submit_to`, `leader`, `department`, `role`, `ministry`, `sector`, `passion`, `future`, `prog_id`) VALUES
(1, 'Patrick Luboobi', 'Male', 'Married', 'Software Engineer', 'patricklu2010@gmail.com', 'Kansanga', 'Yes', '2 years ago', 'Yes', 'Apostle Grace', '', '1', 'Yes', 'Operation Discharge', 'Healing', '', '', '', '', 1),
(14, 'Evelyn', 'Female', 'Married', 'blabla', 'blabla', 'Munyonyo', 'Yes', 'blabla', 'Yes', 'Apostle Grace', '', 'blabla', 'Yes', 'Choir', 'Singer', '', 'blabla', 'blabla', 'blabla', 2),
(16, 'Steve', 'Male', 'Engaged', 'blabla', 'blabla', 'Buziga', 'No', 'blabla', 'No', '', 'Yes', 'Bishop', '', 'blabla', 'blabla', 'Yes', 'choir', 'blabla', 'blabla', 2);

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE IF NOT EXISTS `programs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `status` enum('on-going','finished','to-start') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `number`, `start_date`, `status`) VALUES
(1, 1, '2016-07-20', 'to-start'),
(2, 2, '2016-07-20', 'on-going'),
(3, 3, '2016-07-27', 'finished');

-- --------------------------------------------------------

--
-- Table structure for table `roll_call`
--

CREATE TABLE IF NOT EXISTS `roll_call` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` enum('Present','Absent') NOT NULL DEFAULT 'Absent',
  `date` date NOT NULL,
  `disc_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
