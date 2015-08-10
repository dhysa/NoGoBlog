-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2014 at 09:55 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(255) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `company_address` longtext,
  `company_phone` varchar(100) DEFAULT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `company_cp1` varchar(255) DEFAULT NULL,
  `company_cpPhone1` varchar(15) DEFAULT NULL,
  `company_cpEmail1` varchar(255) DEFAULT NULL,
  `company_cp2` varchar(255) DEFAULT NULL,
  `company_cpPhone2` varchar(15) DEFAULT NULL,
  `company_cpEmail2` varchar(255) DEFAULT NULL,
  `company_cp3` varchar(255) DEFAULT NULL,
  `company_cpPhone3` varchar(15) DEFAULT NULL,
  `company_cpEmail3` varchar(255) DEFAULT NULL,
  `company_project` varchar(255) DEFAULT NULL,
  `company_status` varchar(255) DEFAULT NULL,
  `company_update` longtext,
  `company_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_address`, `company_phone`, `company_email`, `company_cp1`, `company_cpPhone1`, `company_cpEmail1`, `company_cp2`, `company_cpPhone2`, `company_cpEmail2`, `company_cp3`, `company_cpPhone3`, `company_cpEmail3`, `company_project`, `company_status`, `company_update`, `company_created`) VALUES
(1, 'Burgdorf Indonesia', 'Jl. H. Agus Salim no.122, Jak-Pus', '021-314765', '', 'Pak Hendry Ng', '081283247785', '', 'Pak Stefanus Hendri Putra', '', '', '', '', '', 'Payment Gateway Website', 'Open', '1. 7 jan 14 , belum sempat mengurus project ini, karena masih ada project lain yang urgent.', '2014-09-22 06:55:07'),
(2, 'Redpod Indonesia', 'Jl. Danau Sunter Selatan Blok F No.43-45, Komplek Ruko Royal Sunter', '', '', 'Pak Kris (owner)', '', '', 'Peicing', '', '', 'Zandy', '', '', 'Online Store', 'Open', '1. 7 jan 14, harga dibilang mahal. Dan kompetitor lain bisa kasi waktu 2 minggu untuk pengerjaan sistem nya.', '2014-09-22 06:55:18'),
(3, 'Toyota Auto2000 - Toyota Sales Operation', 'Jl. Gaya Motor III No.3 Sunter', '021-6512000', '', 'Errik Jaya Tirta', '08172308631', '', '', '', '', '', '', '', 'Pitching Design', 'Open at end of year', '1. 7 jan 14, Setiap akhir tahun diadakan pitching untuk agency design dan percetakan untuk kerjasama dalam setahun kedepan', '2014-09-22 06:55:29'),
(4, 'Krama Yudha Tiga Berlian - Mitsubishi', 'Jl. Jend. A. Yani, Proyek Pulo Mas', '021-4891608', '', 'Pak Advan', '', 'advan.adrianda@ktb.co.id', 'Bu Febby', '', '', '', '', '', 'Pitching Design', 'Open at end of year', '1. 15 jan 14, kirim compro', '2014-09-22 06:55:38'),
(5, 'Nissan Motor', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014-09-22 06:55:47'),
(6, 'Honda Prospect Motor (Honda Mobil)', 'Jl. Gaya Motor I Sunter II', '021-6510403', '', 'Pak Harry', '', 'harry_kurniawan@hpm.co.id', '', '', '', '', '', '', '', 'Open', '1. 8 jan 14, kirim compro', '2014-09-22 06:55:57'),
(7, 'Chevrolet', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014-09-22 06:56:06'),
(8, 'BMW Group Indonesia', 'The Plaza 21st fl.', '021-29923000', '', 'Bu Helena Abidin', '', 'maria.h.abidin@bmw.co.id', '', '', '', '', '', '', '', '', '1. 28 jan 14, kirim compro', '2014-09-22 06:56:15'),
(9, 'Ducati', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014-09-22 06:56:25'),
(10, 'Mercedes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014-09-22 06:56:53'),
(11, 'Suzuki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014-09-22 06:57:03'),
(12, 'Yamaha', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014-09-22 06:57:13'),
(13, 'Bajaj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014-09-22 06:57:24'),
(14, 'Kawasaki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014-09-22 06:57:33'),
(15, 'Mini Cooper', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014-09-22 06:57:41'),
(16, 'Hyundai indonesia', 'Jl. Sultan Iskandar Muda No. 81', '021-7293338-39', '', 'Ibu Molly Munir', '0811916300', '', '', '', '', '', '', '', '', 'Open', '1. 15 jan 14, schedule meeting untuk hari 23 jan 14.\r\n2. 22 jan 14, sedang meeting', '2014-09-22 06:57:50'),
(17, 'Unicharm', 'Jl HR Rasuna Said Kav X-2/4 Ged Palma One, Lt 6 Suite 601, Setiabudi', '021-5228852', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014-09-22 08:35:00'),
(18, 'Indoserako Sejahtera', 'Jl P Jayakarta 121 59-60, Mangga Dua Selatan, Sawah Besar', '021-6299006', 'iso297@dnet.net.id', '', '', '', '', '', '', '', '', '', '', 'Open', '1. 10 jan 14, kirim compro', '2014-09-22 06:58:07'),
(19, 'Data Aksara Matra', 'Wisma Staco, 6th Fl., Jl. Casablanca Kav. 18, Jakarta', '021-8316353 ; 021-8316316 ; 021-8316240', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014-09-22 06:58:16'),
(20, 'Fonterra Brands Indonesia (Anlene, Anmum)', 'Wisma Staco, 5th Fl., Jl. Casablanca Kav. 18, Jakarta ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014-09-22 06:58:24'),
(21, 'Wood Group Indonesia', 'Wisma Staco, 6th Fl., Jl. Casablanca Kav. 18, Jakarta', '021-83702455', '', 'Ibu Dominique', '', '', '', '', '', '', '', '', '', '', '', '2014-09-22 06:58:32'),
(22, 'GAC Indonesia', 'Wisma Staco, 2nd floor, Suite 201, Jl. Casablanca Kav. 18, Jakarta', '021-8311000', '', '', '', '', '', '', '', '', '', '', '', 'Close', '1. 10 jan 14, tidak ada bagian promotion', '2014-09-23 07:37:00'),
(23, 'Vizta Pratama', 'Ruko Sentra Bisnis, Jl. Artha Gading, blok A7D No 15, Kelapa Gading', '021-45857246, 021-45857247', '', 'Pak Andersen', '', 'andersen@vista.co.id', '', '', '', '', '', '', '', 'Open', '1. 13 jan 14, sedang meeting dan sudah kirim compro', '2014-09-22 06:58:50'),
(24, 'Ultrajaya', 'PT Ultrajaya Milk Industry Tbk, Jl. Raya Cimareme 131, Padalarang, Bandung', '022-86700700', '', 'Pak Kamal', '', 'ade.kamaludin@ultrajaya.co.id', '', '', '', '', '', '', '', 'Open', '1. 13 jan 14, kirim compro dan siapkan schedule meeting perkenalan', '2014-09-22 06:59:01'),
(25, 'Ingram Micro', 'Wisma Nugra Santana 9th Fl. Suite #909', '021-5711717', '', 'Pak Angga', '081380799010', '', 'Ibu Melanie', '', '', '', '', '', '', 'Open', '1. 13 jan 14, kirim compro dan siapkan schedule meeting perkenalan', '2014-09-22 06:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(32) NOT NULL,
  `user_pass` varchar(32) NOT NULL,
  `user_stat` enum('superAdmin','admin') NOT NULL,
  `user_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`, `user_stat`, `user_created`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'superAdmin', '2014-09-25 05:30:34'),
(2, 'admin2', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2014-08-28 15:26:32'),
(3, 'admin3', '21232f297a57a5a743894a0e4a801fc3', 'superAdmin', '2014-09-25 05:23:58'),
(4, 'admin4', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2014-09-25 05:24:24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
