-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2014 at 11:01 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ftfl`
--

-- --------------------------------------------------------

--
-- Table structure for table `combined`
--

CREATE TABLE IF NOT EXISTS `combined` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `combined`
--

INSERT INTO `combined` (`id`, `student_id`, `course_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 2, 2),
(5, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `coursed`
--

CREATE TABLE IF NOT EXISTS `coursed` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_title` varchar(23) NOT NULL,
  `code` int(11) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `coursed`
--

INSERT INTO `coursed` (`course_id`, `course_title`, `code`) VALUES
(1, 'laravel', 1),
(2, 'php', 2),
(3, 'sql', 3);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) NOT NULL,
  `course_title` varchar(23) NOT NULL,
  `code` int(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_title`, `code`) VALUES
(0, 'ss', 0),
(0, '', 111),
(0, '', 0),
(0, '', 0),
(0, 'css', 0),
(0, 'html', 0),
(0, 'laravel', 0);

-- --------------------------------------------------------

--
-- Table structure for table `studen1`
--

CREATE TABLE IF NOT EXISTS `studen1` (
  `id` int(23) NOT NULL,
  `name` varchar(23) NOT NULL,
  `course` varchar(23) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studen1`
--

INSERT INTO `studen1` (`id`, `name`, `course`) VALUES
(0, 'hello', 'ftfl-08');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ftfl_id` varchar(23) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(31) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `date1` int(11) NOT NULL,
  `day2` datetime NOT NULL,
  `day3` datetime NOT NULL,
  `day4` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Id`, `ftfl_id`, `name`, `email`, `phone`, `date1`, `day2`, `day3`, `day4`, `modified`, `created`) VALUES
(1, 'frfl295', 'sdfsdfs ffffffffff', 'ffffffffffff', '2323232', 2222, '2014-08-14 00:00:00', '2014-08-29 00:00:00', '2014-08-29 00:00:00', '2014-08-29 00:00:00', '0000-00-00 00:00:00'),
(2, '', 'sazia', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-08-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `students1`
--

CREATE TABLE IF NOT EXISTS `students1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(23) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `students1`
--

INSERT INTO `students1` (`id`, `name`, `created`) VALUES
(1, 'sazia', '2014-08-06 00:00:00'),
(2, 'tanjim', '2014-08-28 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(23) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`ID`, `Name`) VALUES
(1, 'MD ASHIQUL ISLAM'),
(2, 'MD ISLAM'),
(3, 'HASAN'),
(4, ''),
(5, 'dsfsfsdfdf'),
(6, 'moinum'),
(7, 'moin'),
(8, 'ruhi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
