-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2016 at 02:35 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `finalweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `data_mahasiswa` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(25) NOT NULL,
  `NIM` varchar(9) NOT NULL,
  `Jenis_Kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `Propinsi_Tempat_Lahir` varchar(20) NOT NULL,
  `Kota_Tempat_Lahir` varchar(20) NOT NULL,
  `Tempat_Lahir` varchar(15) NOT NULL,
  `Tanggal_Lahir` varchar(11) NOT NULL,
  `Golongan_Darah` enum('O','A','B','AB') NOT NULL,
  `Prodi` varchar(20) NOT NULL,
  `Angkatan` year(4) NOT NULL,
  `Periode_Masuk` varchar(20) NOT NULL,
  `No_Tes` int(10) NOT NULL,
  `Jalur_Masuk` enum('SNMPTN','SBMPTN','JALUR MANDIRI') NOT NULL,
  `Tanggal_Daftar` varchar(11) NOT NULL,
  `Gelombang_Pendaftaran` varchar(20) NOT NULL,
  `Status_Masuk` varchar(20) NOT NULL,
  `Agama` enum('ISLAM','KATHOLIK','PROTESTAN','HINDU','BUDHA','LAIN-LAIN') NOT NULL,
  `Status_Nikah` enum('Belum Kawin','Sudah Kawin','Duda / Janda','Suami / Istri Meninggal') NOT NULL,
  `Kewarganegaraan` enum('WNI','WNA','TIDAK PUNYA WN') NOT NULL,
  `Status_Rumah` enum('Rumah Orang Tua','Rumah Saudara','Asrama','Pondokan','Rumah Sendiri','Lain-Lain') NOT NULL,
  `Propinsi_Tempat_Tinggal` varchar(30) NOT NULL,
  `Kota_Tempat_Tinggal` varchar(30) NOT NULL,
  `Alamat` text NOT NULL,
  `Kelurahan` varchar(30) NOT NULL,
  `Kecamatan` varchar(30) NOT NULL,
  `Kode_Pos` varchar(10) NOT NULL,
  `Negara` varchar(30) NOT NULL,
  `Nomor_Telepon` varchar(15) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Hubungan_Biaya` enum('Orang Tua Kandung','Orang Tua Angkat','Orang Tua Asuh','Saudara Kandung','Saudara Bukan Kandung','Calon Mertua','Lain-Lain') NOT NULL,
  `Sumber_Dana` enum('Orang Tua / Wali','Orang Tua Asuh','Beasiswa','ID','TB','Sendiri','Lain-Lain') NOT NULL,
  `Sumber_Dana_Beasiswa` varchar(30) NOT NULL,
  `Jumlah_Saudara` varchar(30) NOT NULL,
  `Status_Bekerja` enum('Ya','Tidak') NOT NULL,
  `No_Asuransi` varchar(20) NOT NULL,
  `Mengenal_Kampus` enum('Brosur','Mahasiswa','Dosen / Guru','Alumni','Internet','Iklan','Lain-Lain') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `NIM` (`NIM`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id`, `Nama`, `NIM`, `Jenis_Kelamin`, `Propinsi_Tempat_Lahir`, `Kota_Tempat_Lahir`, `Tempat_Lahir`, `Tanggal_Lahir`, `Golongan_Darah`, `Prodi`, `Angkatan`, `Periode_Masuk`, `No_Tes`, `Jalur_Masuk`, `Tanggal_Daftar`, `Gelombang_Pendaftaran`, `Status_Masuk`, `Agama`, `Status_Nikah`, `Kewarganegaraan`, `Status_Rumah`, `Propinsi_Tempat_Tinggal`, `Kota_Tempat_Tinggal`, `Alamat`, `Kelurahan`, `Kecamatan`, `Kode_Pos`, `Negara`, `Nomor_Telepon`, `Email`, `Hubungan_Biaya`, `Sumber_Dana`, `Sumber_Dana_Beasiswa`, `Jumlah_Saudara`, `Status_Bekerja`, `No_Asuransi`, `Mengenal_Kampus`) VALUES
(36, 'Nomad', 'D42113333', 'Laki-Laki', '', '', 'Palu', '2016-05-11', 'O', 'Sipil', 2000, '', 0, 'SNMPTN', '', '', '', 'ISLAM', 'Belum Kawin', 'WNI', 'Rumah Orang Tua', '', '', 'Makassar', '', '', '0', '', '0', '', 'Orang Tua Kandung', 'Orang Tua / Wali', '', '', 'Ya', '', 'Brosur'),
(37, 'asasdqsad', '123456789', 'Laki-Laki', '', '', 'Palu', '05/28/1995', 'B', 'Arsitektur', 1970, '', 0, 'SNMPTN', '', '', '', 'ISLAM', 'Belum Kawin', 'WNI', 'Rumah Orang Tua', '', '', '', '', '', '', '', '', '', 'Orang Tua Kandung', 'Orang Tua / Wali', '', '', 'Ya', '', 'Brosur'),
(38, 'wreewrwer', '123123123', 'Perempuan', '', '', '3erewre', '05/04/2016', 'O', 'Elektro', 2016, '', 0, 'SNMPTN', '', '', '', 'ISLAM', 'Belum Kawin', 'WNI', 'Rumah Orang Tua', '', '', '', '', '', '', '', '', '', 'Orang Tua Kandung', 'Orang Tua / Wali', '', '', 'Ya', '', 'Brosur');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
