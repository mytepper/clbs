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
-- Database: `teedin_db`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_user` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ad_pass` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ad_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ad_st` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `ad_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ad_img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- dump ตาราง `tb_admin`
--

INSERT INTO `tb_admin` (`ad_id`, `ad_user`, `ad_pass`, `ad_name`, `ad_st`, `ad_email`, `ad_img`) VALUES
(1, 'admin', 'c10be7fde1f253e72b07b35958376d30', 'Admin_admin', '1', 'admin@admin.com', ''),
(2, 'admin2', 'c10be7fde1f253e72b07b35958376d30', 'admin2', '1', 'admin2@admin.com', 'admin2'),
(3, 'admin3', 'xxxxxxxx', 'admin', '0', '', ''),
(4, 'admin3', 'xxxxxxxx', 'admin', '0', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
