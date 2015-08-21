-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2015 at 09:23 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nogoblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(2) NOT NULL,
  `admin_username` varchar(25) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_pass` varchar(8) NOT NULL,
  `users_id` varchar(6) NOT NULL,
  `class_id` varchar(6) NOT NULL,
  PRIMARY KEY (`admin_id`),
  KEY `admin_users_fk` (`users_id`),
  KEY `admin_class_fk` (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` varchar(6) NOT NULL,
  `class_level` varchar(3) NOT NULL,
  `users_id` varchar(6) NOT NULL,
  `subjects_id` varchar(6) NOT NULL,
  PRIMARY KEY (`class_id`),
  KEY `class_users_fk` (`users_id`),
  KEY `class_subjects_fk` (`subjects_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `question_id` varchar(6) NOT NULL,
  `questio_content` varchar(500) NOT NULL,
  `question_active` enum('0','1') DEFAULT NULL,
  `question_choice_id` varchar(6) NOT NULL,
  PRIMARY KEY (`question_id`),
  KEY `question_question_choice_fk` (`question_choice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_choice`
--

CREATE TABLE IF NOT EXISTS `question_choice` (
  `question_choice_id` varchar(6) NOT NULL,
  `question_choice_content` varchar(200) DEFAULT NULL,
  `question_choice_explain` text,
  `question_choice_right` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`question_choice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE IF NOT EXISTS `scores` (
  `scores_id` varchar(6) NOT NULL,
  `scores_total` int(3) NOT NULL,
  PRIMARY KEY (`scores_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subjects_id` varchar(6) NOT NULL,
  `subjects_name` varchar(30) NOT NULL,
  PRIMARY KEY (`subjects_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_id` varchar(6) NOT NULL,
  `users_username` varchar(25) NOT NULL,
  `users_email` varchar(30) NOT NULL,
  `users_pass` varchar(8) NOT NULL,
  `users_regtime` datetime NOT NULL,
  `users_premuim` enum('0','1') DEFAULT NULL,
  `users_answer_id` int(6) NOT NULL,
  `scores_id` varchar(6) NOT NULL,
  `subjects_id` varchar(6) NOT NULL,
  PRIMARY KEY (`users_id`),
  KEY `users_users_answer_fk` (`users_answer_id`),
  KEY `users_scores_fk` (`scores_id`),
  KEY `users_subjects_fk` (`subjects_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_answer`
--

CREATE TABLE IF NOT EXISTS `users_answer` (
  `users_answer_id` int(6) NOT NULL AUTO_INCREMENT,
  `users_answer_choice` varchar(5) NOT NULL,
  `question_id` varchar(6) NOT NULL,
  `quest_choice_id` varchar(6) NOT NULL,
  PRIMARY KEY (`users_answer_id`),
  KEY `question_choice_fk` (`question_id`),
  KEY `uas_question_choice_fk` (`quest_choice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_class_fk` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`),
  ADD CONSTRAINT `admin_users_fk` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`);

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_subjects_fk` FOREIGN KEY (`subjects_id`) REFERENCES `subjects` (`subjects_id`),
  ADD CONSTRAINT `class_users_fk` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_question_choice_fk` FOREIGN KEY (`question_choice_id`) REFERENCES `question_choice` (`question_choice_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_subjects_fk` FOREIGN KEY (`subjects_id`) REFERENCES `subjects` (`subjects_id`),
  ADD CONSTRAINT `users_scores_fk` FOREIGN KEY (`scores_id`) REFERENCES `scores` (`scores_id`),
  ADD CONSTRAINT `users_users_answer_fk` FOREIGN KEY (`users_answer_id`) REFERENCES `users_answer` (`users_answer_id`);

--
-- Constraints for table `users_answer`
--
ALTER TABLE `users_answer`
  ADD CONSTRAINT `question_choice_fk` FOREIGN KEY (`question_id`) REFERENCES `question` (`question_id`),
  ADD CONSTRAINT `uas_question_choice_fk` FOREIGN KEY (`quest_choice_id`) REFERENCES `question_choice` (`question_choice_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
