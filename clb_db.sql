-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clb_db`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `passWord` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `status` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- dump ตาราง `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `userName`, `passWord`, `name`, `email`, `position`, `type`, `status`) VALUES
(1, 'admin', '82ea2dcada9f438f0139093de8313b2a', 'admin', 'admin@admin.com', 'admin', 0, 'true'),
(2, '', '', 'นายหนึ่ง นายหนึ่ง', 'test001@gmail.com', 'พนักงาน', 1, 'false'),
(3, 'ex001@ex001', 'd27f173c54c62169814a004d5c076c94', 'นายสอง นายหนึ่ง', 'ex001@ex001', 'พนักงาน', 1, 'true'),
(4, '3333', '6c991fe85d9fcaea917f71fbdc9e384e', 'member member', 'fsdf@sad.coasd', 'test', 1, 'true'),
(5, '0009', '6c991fe85d9fcaea917f71fbdc9e384e', 'test', 'test@test.com', 'test', 1, 'true');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tb_rate`
--

CREATE TABLE IF NOT EXISTS `tb_rate` (
  `rate_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `person_id` int(11) NOT NULL,
  `person_rate` int(11) NOT NULL,
  PRIMARY KEY (`rate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- dump ตาราง `tb_rate`
--

INSERT INTO `tb_rate` (`rate_id`, `comment`, `date`, `person_id`, `person_rate`) VALUES
(3, 'ดีมากๆๆ', '2015-06-22', 3, 1),
(4, 'good', '2015-06-23', 5, 3),
(5, 'oop', '2015-06-23', 1, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
