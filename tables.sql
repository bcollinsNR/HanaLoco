-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2014 at 04:25 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `google_maps`
--

-- --------------------------------------------------------

--
-- Table structure for table `geocoding`
--

CREATE TABLE IF NOT EXISTS `geocoding` (
  `address` varchar(255) NOT NULL DEFAULT '',
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  PRIMARY KEY (`address`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `geocoding`
--

INSERT INTO `geocoding` (`address`, `latitude`, `longitude`) VALUES
('11', 33.1698, 41.3385),
('111 sw 5th', 44.6345, -121.13),
('1318 nw northrup street portland, or 97209', 45.5315, -122.685),
('1728 ne 40th ave portland, or 97212', 45.5357, -122.622),
('1810 se 10th ave portland, or 97214', 45.51, -122.656),
('2724 se ankeny portland, or, 97214', 45.5221, -122.638),
('4765 ne fremont st, portland, or 97213', 45.5485, -122.614),
('4929 sw scholls ferry rd. #52', 45.4846, -122.754),
('701 e. burnside portland, or 97214', 45.5233, -122.658),
('820 northeast dekum street portland, or 97211', 45.5715, -122.657),
('939 se belmont street portland, or 97214', 45.5167, -122.656),
('portland, or', 45.5235, -122.676);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `cords` text NOT NULL,
  `infobox` text NOT NULL,
  `url` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `product` varchar(255) NOT NULL,
  `made_in` varchar(255) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`, `cords`, `infobox`, `url`, `phone`, `product`, `made_in`, `verified`, `date_added`, `active`) VALUES
(1, 'Alameda Brewing', '4765 NE Fremont St, Portland, OR 97213', '0', 'http://alamedabrewing.com/', '503-460-9025', 'beer', 'pdx', 1, '2013-01-19 08:08:33', 1),
(2, 'Breakside Brewery', '820 Northeast Dekum Street Portland, OR 97211', '0', 'http://www.breakside.com/', '503-719-6475', 'beer', 'pdx', 1, '2013-02-01 08:14:15', 1),
(3, 'Bridgeport Brewing', '1318 NW Northrup Street Portland, OR 97209', '0', 'http://www.bridgeportbrew.com', '503-241-7179', 'beer', 'pdx', 1, '2013-02-01 08:06:01', 1),
(4, 'Burnside Brewing', '701 E. Burnside Portland, OR 97214', '0', 'http://www.burnsidebrewco.com', '503-946-8151', 'beer', 'pdx', 1, '2013-02-01 08:08:13', 1),
(5, 'Cascade Brewing', '939 SE Belmont Street Portland, OR 97214', '0', 'http://www.cascadebrewing.com/', '503-265-8603', 'beer', 'pdx', 1, '2013-02-01 08:10:06', 1),
(6, 'Coalition Brewing', '2724 SE Ankeny Portland, OR, 97214', '0', 'http://www.coalitionbrewing.com/', '503-894-8080', 'beer', 'pdx', 1, '2013-02-01 08:11:35', 1),
(7, 'The Commons Brewery', '1810 SE 10th Ave Portland, OR 97214', '0', 'http://www.commonsbrewery.com', '503-343-5501', 'beer', 'pdx', 1, '2013-02-01 08:19:18', 1),
(8, 'Columbia River Brewing', '1728 NE 40th Ave Portland, OR 97212', '0', 'http://www.columbiariverbrewpub.com', '503- 943-6157', 'beer', 'pdx', 1, '2013-02-01 08:21:30', 1),
(16, 'test', '4929 SW Scholls Ferry Rd. #52', '0', 'http://www.34983.com', '432-398-1092', 'beer', 'orwa', 1, '2013-10-15 00:59:14', 1),
(17, 'New Relic', '111 SW 5th', '0', 'http://www.newrelic.com', '5038675309', 'beer', 'pdx', 1, '2014-01-17 03:22:01', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
