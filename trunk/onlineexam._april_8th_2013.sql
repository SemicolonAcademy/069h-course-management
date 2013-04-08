-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2013 at 04:38 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlineexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `marksobtained` int(11) NOT NULL,
  `answer` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `answers`
--


-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`) VALUES
(40, 'PHP Advance Course', 'PHP '),
(42, 'Java', '6 fmnths course on java');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `full_marks` int(11) NOT NULL,
  `pass_marks` int(11) NOT NULL,
  `start_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL,
  `date` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `name`, `description`, `full_marks`, `pass_marks`, `start_time`, `end_time`, `date`, `created_at`, `course_id`) VALUES
(7, 'java1', 'java on java2', 10034, 344, 2, 5, 22, 13620466, 3),
(11, 'dfsadjk', 'dfkdsljf', 0, 0, 0, 0, 0, NULL, 0),
(5, 'php', 'fhasdjfh', 100, 20, 12, 3, 12, NULL, 35),
(12, 'sample', 'sample', 100, 32, 1, 3, 32, NULL, 42),
(13, 'dfsdaf', 'dfgd', 3414, 23, 1, 2, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_id` int(11) NOT NULL,
  `questiontype_id` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `remark` varchar(200) DEFAULT NULL,
  `marks` int(11) NOT NULL,
  `answer` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `exam_id`, `questiontype_id`, `question`, `remark`, `marks`, `answer`) VALUES
(1, 5, 1, 'what is php?', 'fsdfs', 0, NULL),
(2, 6, 1, 'safasf', 'fasdfasd', 0, NULL),
(3, 0, 1, 'amv,nsdf', 'dsafas', 234, NULL),
(7, 0, 1, 'jfajsdf', 'sdfas', 0, NULL),
(8, 6, 2, 'what is java [latform?/', 'adsfsdf', 10, NULL),
(9, 6, 2, 'what is java [latform?/', 'adsfsdf', 10, NULL),
(10, 6, 2, 'ffsdaf', 'ewrwe', 213, NULL),
(11, 6, 0, 'what is java [?/', 'adsfsdf', 10, NULL),
(12, 6, 0, 'what is javaaaa', 'adsfsdf', 10, NULL),
(13, 6, 0, 'what is java [latform?/', 'adsfsdf', 10, NULL),
(14, 6, 0, '', '', 0, NULL),
(15, 6, 0, '', '', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `question_type`
--

CREATE TABLE IF NOT EXISTS `question_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `slug` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `question_type`
--

INSERT INTO `question_type` (`id`, `name`, `slug`) VALUES
(1, 'Objective', NULL),
(2, 'subjective', NULL),
(3, 'dasfsdf', ''),
(4, 'fsdaf', ''),
(5, 'vasdvasd', ''),
(6, 'dfasf', 'sdafsdf'),
(7, 'vasdvasd', ''),
(8, 'fdsafasd', ''),
(9, 'dfsafasd', ''),
(10, 'BOB', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `mid_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `website` varchar(45) DEFAULT NULL,
  `picture` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `first_name`, `mid_name`, `last_name`, `phone`, `address`, `website`, `picture`, `created_at`, `user_type`) VALUES
(53, 'sample123', '5e8ff9bf55ba3508199d22e984129be6', 'sample@gmail.com', 'sample', 'sample', 'sample', 'w34234235', 'sample', 'sample.asmple.com', '1364468345_Desert.jpg', 1365329708, 3),
(54, 'john', 'john', 'john@gmail.com', 'john', '', 'doe', '9841', 'jwagal', 'sample.com', '', 1364558584, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `slug` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_type`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
