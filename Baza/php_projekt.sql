-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2016 at 08:00 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php_projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanci`
--

CREATE TABLE IF NOT EXISTS `clanci` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `TEKST` text COLLATE utf8_croatian_ci NOT NULL,
  `SLIKA` varchar(200) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE IF NOT EXISTS `komentari` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `ID_clanak` int(10) NOT NULL,
  `ID_korisnik` int(10) NOT NULL,
  `TEKST` text COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID_clanak` (`ID_clanak`,`ID_korisnik`),
  UNIQUE KEY `ID_korisnik` (`ID_korisnik`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `PASSWORD` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `E-MAIL` varchar(200) COLLATE utf8_croatian_ci NOT NULL,
  `USER_TYPE` tinyint(1) NOT NULL DEFAULT '0',
  `NAME` varchar(50) COLLATE utf8_croatian_ci DEFAULT NULL,
  `SURNAME` varchar(50) COLLATE utf8_croatian_ci DEFAULT NULL,
  `ADDRESS` varchar(200) COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `USERNAME` (`USERNAME`,`E-MAIL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci AUTO_INCREMENT=35 ;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`ID`, `USERNAME`, `PASSWORD`, `E-MAIL`, `USER_TYPE`, `NAME`, `SURNAME`, `ADDRESS`) VALUES
(3, 'administrator', 'pass', 'admin@mev.hr', 1, NULL, NULL, NULL),
(31, 'antoan', '123', 'ivanka@gmail.com', 0, NULL, NULL, NULL),
(32, 'ivanka', '123', 'andjelka@gmail.com', 0, NULL, NULL, NULL),
(33, 'user', '123', 'gmail@gmail.com', 0, NULL, NULL, NULL),
(34, 'isusac', '1234', 'matho199@hotmail.com', 0, NULL, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentari`
--
ALTER TABLE `komentari`
  ADD CONSTRAINT `komentari_ibfk_1` FOREIGN KEY (`ID_clanak`) REFERENCES `clanci` (`ID`),
  ADD CONSTRAINT `komentari_ibfk_2` FOREIGN KEY (`ID_korisnik`) REFERENCES `korisnici` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
