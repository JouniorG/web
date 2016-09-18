-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 25, 2016 at 05:28 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `readcode`
--

-- --------------------------------------------------------

--
-- Table structure for table `Post`
--

CREATE TABLE IF NOT EXISTS `Post` (
  `id_post` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_post` varchar(100) NOT NULL,
  `date_post` date NOT NULL,
  `text_post` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `image_post` varchar(50) NOT NULL,
  `category_post` varchar(100) NOT NULL,
  `id_usua` int(5) unsigned NOT NULL,
  PRIMARY KEY (`id_post`),
  KEY `id_usua` (`id_usua`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

-- --------------------------------------------------------

--
-- Table structure for table `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `id_usua` int(5) unsigned NOT NULL,
  `name_usua` varchar(50) NOT NULL,
  `ape_usua` varchar(50) NOT NULL,
  `nickname_usua` varchar(25) NOT NULL,
  `passwd_usua` varchar(25) NOT NULL,
  `fech_nac` date NOT NULL,
  PRIMARY KEY (`id_usua`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Usuario`
--

INSERT INTO `Usuario` (`id_usua`, `name_usua`, `ape_usua`, `nickname_usua`, `passwd_usua`, `fech_nac`) VALUES
(1, 'jounior', 'gerardo', 'c0d3', 'c0d3', '2016-08-02');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Post`
--
ALTER TABLE `Post`
  ADD CONSTRAINT `Post_ibfk_1` FOREIGN KEY (`id_usua`) REFERENCES `Usuario` (`id_usua`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
