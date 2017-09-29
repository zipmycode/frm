-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 29, 2017 at 07:09 PM
-- Server version: 5.5.37-log
-- PHP Version: 5.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `text` varchar(2048) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `text`, `file`, `created`) VALUES
(1, 'Заголовок1', 'Текст1', 'Desert.jpg', '2017-09-29 15:02:54'),
(11, 'Рыбный текст', 'www', '9e9d7e8d2d70561.jpg', '2017-09-29 15:02:38'),
(12, 'a dwa aw', ' awd aw ', 'Penguins.jpg', '2017-09-29 15:03:03'),
(13, 'awdawdaw', 'dawdaw', 'Hydrangeas.jpg', '2017-09-29 15:03:13'),
(14, 'wadaw', 'd aw daw', '9e9d7e8d2d70561.jpg', '2017-09-29 15:02:09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
