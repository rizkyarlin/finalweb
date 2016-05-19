-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2016 at 09:06 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codeigniter1`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `data_mahasiswa` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(25) NOT NULL,
  `NIM` varchar(9) NOT NULL,
  `Jenis_Kelamin` tinyint(1) NOT NULL,
  `Tempat_Lahir` varchar(15) NOT NULL,
  `Tanggal` datetime NOT NULL,
  `Golongan_Darah` varchar(2) NOT NULL,
  `Prodi` varchar(20) NOT NULL,
  `Angkatan` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `NIM` (`NIM`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id`, `Nama`, `NIM`, `Jenis_Kelamin`, `Tempat_Lahir`, `Tanggal`, `Golongan_Darah`, `Prodi`, `Angkatan`) VALUES
(6, 'Muhammad Idmaril Amri', 'D42113004', 1, 'Palu', '0000-00-00 00:00:00', 'O', 'Informatika', 2013),
(30, 'Kirito', 'D42113006', 1, 'Palu', '1995-07-11 00:00:00', 'O', 'Informatika', 2015);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
