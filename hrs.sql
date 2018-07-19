-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 05, 2013 at 09:57 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE IF NOT EXISTS `tbl_accounts` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `userid` int(15) NOT NULL,
  `amount` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`id`, `userid`, `amount`) VALUES
(1, 39, 200000),
(2, 40, 200000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payments`
--

CREATE TABLE IF NOT EXISTS `tbl_payments` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `userid` int(15) NOT NULL,
  `refno` varchar(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `transactionfees` int(10) NOT NULL,
  `senddeposit` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `dateposted` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_payments`
--

INSERT INTO `tbl_payments` (`id`, `userid`, `refno`, `amount`, `transactionfees`, `senddeposit`, `status`, `dateposted`) VALUES
(3, 39, 'HCB495005', 205000, 5000, 1, 1, 1373828828),
(4, 40, 'HCB110765', 205000, 5000, 0, 0, 1373909664);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roomfeatures`
--

CREATE TABLE IF NOT EXISTS `tbl_roomfeatures` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `roomid` int(15) NOT NULL,
  `featureid` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tbl_roomfeatures`
--

INSERT INTO `tbl_roomfeatures` (`id`, `roomid`, `featureid`) VALUES
(29, 4, 1),
(30, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rooms`
--

CREATE TABLE IF NOT EXISTS `tbl_rooms` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `roomtypeid` int(15) NOT NULL,
  `roomnumber` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_rooms`
--

INSERT INTO `tbl_rooms` (`id`, `roomtypeid`, `roomnumber`) VALUES
(4, 3, 'A001'),
(5, 3, 'A002'),
(6, 3, 'A003'),
(7, 3, 'A004'),
(8, 4, 'B004'),
(9, 4, 'B003'),
(10, 4, 'B002'),
(11, 4, 'B001'),
(12, 5, 'C001'),
(13, 5, 'C002'),
(14, 5, 'C003'),
(15, 5, 'C004'),
(16, 5, 'C005'),
(17, 6, 'D005'),
(18, 6, 'D004'),
(19, 6, 'D003'),
(20, 6, 'D002'),
(21, 6, 'D001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roomsetup`
--

CREATE TABLE IF NOT EXISTS `tbl_roomsetup` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `names` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_roomsetup`
--

INSERT INTO `tbl_roomsetup` (`id`, `names`) VALUES
(1, 'LED Television'),
(2, 'Mini Bar'),
(3, 'Balcony View'),
(4, 'Jacuzzi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roomtypes`
--

CREATE TABLE IF NOT EXISTS `tbl_roomtypes` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `names` varchar(100) NOT NULL,
  `roomrate` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_roomtypes`
--

INSERT INTO `tbl_roomtypes` (`id`, `names`, `roomrate`) VALUES
(3, 'Single Room', 15000),
(4, 'Double Room', 30000),
(5, 'VIP Room', 100000),
(6, 'Presidential Suite', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slideshow`
--

CREATE TABLE IF NOT EXISTS `tbl_slideshow` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `featured` int(1) NOT NULL,
  `title` varchar(200) NOT NULL,
  `picture` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_slideshow`
--

INSERT INTO `tbl_slideshow` (`id`, `featured`, `title`, `picture`) VALUES
(12, 1, 'Main Living Room', '1372039744.jpg'),
(10, 1, 'Bed Room - King Size Bed', '1372039022.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `usern` varchar(50) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `rights` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `usern`, `passwd`, `rights`) VALUES
(30, 'hrsadmin', '2a2757b6612fef58748f9195026cb15d094c6a60', 8),
(32, 'anthony', '6e1a438cfe5a6c9e2165665f8c2258849ccc43f0', 6),
(33, 'angella', 'a09b14e56c65696d8d0474fae5d88f048d8199b9', 4),
(39, '0712543805', 'b7c8e1e9efa28fbce5563bc20c51ddf45b0f294e', 2),
(40, '0782151413', '09da5f7e7ac844fd2498c7f2b79cc4fa93aae311', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_details`
--

CREATE TABLE IF NOT EXISTS `tbl_users_details` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `userid` int(15) NOT NULL,
  `names` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `date_added` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_users_details`
--

INSERT INTO `tbl_users_details` (`id`, `userid`, `names`, `title`, `phoneno`, `email`, `date_added`) VALUES
(2, 32, 'Anthony Odong', '', '0782445500', 'anthony@hotel-catherine.com', 1372042028),
(3, 33, 'Angella Twine', '', '0771424442', 'angella@hotel-catherine.com', 1373794656);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_guests`
--

CREATE TABLE IF NOT EXISTS `tbl_users_guests` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `userid` int(15) NOT NULL,
  `names` varchar(200) NOT NULL,
  `date_added` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_users_guests`
--

INSERT INTO `tbl_users_guests` (`id`, `userid`, `names`, `date_added`) VALUES
(6, 39, 'Ronald Assimwe', 1373801455),
(7, 40, 'Ronald Odong', 1373909501);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_website`
--

CREATE TABLE IF NOT EXISTS `tbl_website` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `location` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `date_entered` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tbl_website`
--

INSERT INTO `tbl_website` (`id`, `location`, `section`, `title`, `content`, `date_entered`) VALUES
(1, 'homepage', '', '', 'xxa', ''),
(2, 'about_us', '', '', 'xaboutus', ''),
(3, 'contact_us', '', '', 'www.hotel-catherine.com<br />\ninfo@hote-catherine.com<br />\nPlot 56A, K''la Road', ''),
(28, 'onlinebooking', '', '', 'Online Booking<br />\n<br />\nhttp://www.hotel-catherine.com', ''),
(12, 'services', '', '', 'Services', ''),
(17, 'where_we_work', '', '', 'Where we work', ''),
(18, 'get_involved', '', '', 'Get involved', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
