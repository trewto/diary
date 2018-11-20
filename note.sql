-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2014 at 03:36 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'the id of the row data',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'time',
  `note` text CHARACTER SET utf8 NOT NULL COMMENT 'note , dairy text',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `note`
--

CREATE TABLE IF NOT EXISTS `notereview` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'the id of the row data',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'time',
  `note` text CHARACTER SET utf8 NOT NULL COMMENT 'note , dairy text',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `note`
--

