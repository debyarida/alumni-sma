-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2016 at 10:02 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `input_alumni`
--

CREATE TABLE IF NOT EXISTS `input_alumni` (
  `no_induk` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `thn_masuk` int(10) NOT NULL,
  `jurusan` varchar(10) NOT NULL,
  `thn_lulus` int(10) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  PRIMARY KEY (`no_induk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_alumni`
--

INSERT INTO `input_alumni` (`no_induk`, `nama`, `alamat`, `thn_masuk`, `jurusan`, `thn_lulus`, `no_hp`) VALUES
('12223133', 'deby', 'arjuna III', 2009, 'ips', 2011, '3232333134'),
('14100705', 'Yasinta Pramudia', 'jl.Pucangpermai 2 no:6,Semarang', 2010, 'IPA', 2013, '85728367890'),
('14100706', 'Lala Karina Dewi', 'jl.Citarum 3 no:24B,Semarang', 2010, 'IPA', 2013, '85754675843'),
('14100707', 'Dimas Prasetya', 'jl.Tlogosari Raya no:56,Semarang', 2010, 'IPA', 2013, '81567890987'),
('14100708', 'Yoga Andi Pratama', 'jl.Mangga 4 no:76,Semarang', 2010, 'IPS', 2013, '87765476781'),
('14100709', 'Elsa Eka Santi', 'Graha Bukit Wahid 5 no:24B,Semarang', 2010, 'IPS', 2013, '899765890'),
('14100710', 'Dewi Amalia Santi', 'jl.Sawah Besar 4 no:2,Semarang', 2010, 'IPA', 2013, '87912345678'),
('14100711', 'Rizky Adi Sujewo', 'jl.Ciliwung 8 no:90,Semarang', 2010, 'IPS', 2013, '85643879900'),
('14100712', 'Lilis Pramesti', 'jl.Pucang Adi 2 no:12,Semarang', 2010, 'IPS', 2013, '81345679012'),
('14100713', 'Akbar Catur Setya', 'jl.Durian 1 no:19,Semarang', 2010, 'IPS', 2013, '85769094930'),
('14100714', 'Allysa Ismiati Puri', 'jl.Ngresep Timur 4 no:2,Semarang', 2010, 'IPS', 2013, '89765478901'),
('14100715', 'Caca Amalia Dewi Purwanti', 'jl.Telogo Mulya 3 no:19B,Semarang', 2010, 'IPA', 2013, '81765489023'),
('14100716', 'Muhammad Ali Seno', 'jl.Citandui 2 no:3,Semarang', 2010, 'IPA', 2013, '81543276890'),
('14100717', 'Muhammad Bagus Pratama', 'jl.Bugangan 8 no:23,Semarang', 2010, 'IPA', 2013, '85649879032'),
('14100718', 'Citra Suci Dewanti', 'jl.Pesanggrahan 9 no:7,Semarang', 2010, 'IPA', 2013, '81234768934'),
('14100719', 'Dinda Kriana', 'jl.Werkudoro 10 no:123, Semarang', 2010, 'IPA', 2013, '81923457682'),
('14100720', 'Aryanto Dewangga', 'jl.Pringgading no:19, Demak', 2010, 'IPS', 2013, '89856748234'),
('14100721', 'Pamela Andersa Janet', 'jl.Ratu Asih 4 no:45, Semarang', 2010, 'IPA', 2013, '89754368710'),
('14100722', 'Gilang Samudra', 'jl.Cimandiri Raya 3 no:8, Semarang', 2010, 'IPA', 2013, '85723908765'),
('14100723', 'Boy Samanta', 'jl.Bedugul 4 no:7, Pati', 2015, 'IPS', 2017, '81523890765'),
('2324342423', 'nadia', 'bima II', 2009, 'ipa', 2011, '909093090'),
('676778683', 'linda', 'kauman II', 2009, 'IPS', 2011, '7897866766');

-- --------------------------------------------------------

--
-- Table structure for table `input_event`
--

CREATE TABLE IF NOT EXISTS `input_event` (
  `id` varchar(30) NOT NULL,
  `kegiatan` varchar(50) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(5) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_event`
--

INSERT INTO `input_event` (`id`, `kegiatan`, `hari`, `tanggal`, `jam`, `tempat`, `file`) VALUES
('', '', '', '0000-00-00', '00:00', '', ''),
('event_000002', 'jfkjgak', 'Selasa', '0000-00-00', '12:00', 'kampunglaut', '1455332844_Khimar Ainuha By Syahida merah.jpg'),
('event_000003', 'makan nasi', 'Selasa', '0000-00-00', '12:00', 'leker 88', '10-01-36-poster1.png'),
('event_000004', 'buber', 'Selasa', '0000-00-00', '12:00', 'smg', ''),
('event_000005', 'buber', 'Rabu', '0000-00-00', '12:00', 'smg', ''),
('event_000006', 'dkjJKJ', 'Sabtu', '0000-00-00', '12:00', 'K', '1455332844_Khimar Ainuha By Syahida merah.jpg'),
('event_000007', 'coba', 'Rabu', '0000-00-00', '11:05', 'kgkk', '934911.jpg'),
('event_000008', 'jkagk', 'Senin', '0000-00-00', '12:00', 'bandung', '993659.jpg'),
('event_000009', 'reuni', 'Jumat', '0000-00-00', '04:00', 'jakarta', '853205.jpg'),
('event_000011', 'lcnla', 'Selasa', '0000-00-00', '12:05', 'semarang', '594888.jpg'),
('event_000012', 'h', '', '0000-00-00', '15:05', 'k', '800523.'),
('event_000013', 'fkj', 'Senin', '0000-00-00', '18:05', 'fjkab', '33560.'),
('event_000014', 'klnsgna', 'Senin', '0000-00-00', '10:00', '.ngs', '341754.'),
('event_000015', 'foa', 'Selasa', '0000-00-00', '11:00', 'gw', '375198.'),
('event_000016', 'fa', 'Rabu', '0000-00-00', '18:30', 'gaa', '495988.'),
('event_000017', 'gs', 'Senin', '0000-00-00', '18:45', 'sh', '197733.'),
('event_000018', 'kjs', 'Minggu', '0000-00-00', '14:40', 'f ', '981861.'),
('event_000019', 'bismilah', 'Selasa', '0000-00-00', '14:05', 'bdg', '349833.'),
('event_000020', 'fkja', 'Rabu', '0000-00-00', '19:00', 'fa', '65724.'),
('event_000021', 'jk', 'Kamis', '2016-06-03', '17:59', 'kj', '454678.'),
('event_000022', 'mga', 'Rabu', '2016-06-29', '20:33', 'jh', '731836.');

-- --------------------------------------------------------

--
-- Table structure for table `trlsm`
--

CREATE TABLE IF NOT EXISTS `trlsm` (
  `NIMHSTRLSM` char(20) DEFAULT NULL,
  `NMMHSTRLSM` char(50) DEFAULT NULL,
  `TPLHRTRLSM` char(40) DEFAULT NULL,
  `TGLHRTRLSM` date DEFAULT NULL,
  `KDJEKTRLSM` int(11) DEFAULT NULL,
  `TGMSKTRLSM` date DEFAULT NULL,
  `TGLLSTRLSM` date DEFAULT NULL,
  `LLSKETRLSM` int(11) DEFAULT NULL,
  `NLIPKTRLSM` decimal(4,2) DEFAULT NULL,
  `THSTDTRLSM` int(11) DEFAULT NULL,
  `BLSTDTRLSM` int(11) DEFAULT NULL,
  `HRSTDTRLSM` int(11) DEFAULT NULL,
  `NMORTTRLSM` char(50) DEFAULT NULL,
  `ALAMTRLSM` char(80) DEFAULT NULL,
  `KDKOTTRLSM` char(3) DEFAULT NULL,
  `KDPROTRLSM` char(2) DEFAULT NULL,
  `NOTELTRLSM` char(15) DEFAULT NULL,
  `NOHPETRLSM` char(15) DEFAULT NULL,
  `SKRIPTRLSM` char(254) DEFAULT NULL,
  `PEMB1TRLSM` char(50) DEFAULT NULL,
  `PEMB2TRLSM` char(50) DEFAULT NULL,
  `PHOTOTRLSM` char(40) DEFAULT NULL,
  `WSDKETRLSM` char(3) DEFAULT NULL,
  `WSDTHTRLSM` char(4) DEFAULT NULL,
  `PREDITRLSM` int(11) DEFAULT NULL,
  `SKRETTRLSM` char(20) DEFAULT NULL,
  `TGRETTRLSM` datetime DEFAULT NULL,
  `NOIJFTRLSM` char(30) DEFAULT NULL,
  `NOIJUTRLSM` char(30) DEFAULT NULL,
  `TOEFLTRLSM` int(11) DEFAULT NULL,
  `KURSITRLSM` char(4) DEFAULT NULL,
  `KDPSTTRLSM` char(3) DEFAULT NULL,
  `KDJENTRLSM` char(1) DEFAULT NULL,
  `JCUTITRLSM` int(11) DEFAULT NULL,
  `STWSDTRLSM` char(1) DEFAULT NULL,
  `THP1` char(1) DEFAULT NULL,
  `THP2` char(1) DEFAULT NULL,
  `THP3` char(2) DEFAULT NULL,
  `THP4` char(3) DEFAULT NULL,
  `KESANTRLSM` char(250) DEFAULT NULL,
  `TAHUNMSMHS` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trlsm`
--

INSERT INTO `trlsm` (`NIMHSTRLSM`, `NMMHSTRLSM`, `TPLHRTRLSM`, `TGLHRTRLSM`, `KDJEKTRLSM`, `TGMSKTRLSM`, `TGLLSTRLSM`, `LLSKETRLSM`, `NLIPKTRLSM`, `THSTDTRLSM`, `BLSTDTRLSM`, `HRSTDTRLSM`, `NMORTTRLSM`, `ALAMTRLSM`, `KDKOTTRLSM`, `KDPROTRLSM`, `NOTELTRLSM`, `NOHPETRLSM`, `SKRIPTRLSM`, `PEMB1TRLSM`, `PEMB2TRLSM`, `PHOTOTRLSM`, `WSDKETRLSM`, `WSDTHTRLSM`, `PREDITRLSM`, `SKRETTRLSM`, `TGRETTRLSM`, `NOIJFTRLSM`, `NOIJUTRLSM`, `TOEFLTRLSM`, `KURSITRLSM`, `KDPSTTRLSM`, `KDJENTRLSM`, `JCUTITRLSM`, `STWSDTRLSM`, `THP1`, `THP2`, `THP3`, `THP4`, `KESANTRLSM`, `TAHUNMSMHS`) VALUES
('nadia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, 'nadia', NULL, NULL, NULL, NULL, NULL, 2009, NULL, NULL, NULL, NULL, NULL, 'jl. kauman timur II/113', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'deby', '12345'),
(2, 'nadia', '12345'),
(3, 'linda', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'tes', 'e10adc3949ba59abbe56e057f20f883e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
