-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2012 at 09:58 AM
-- Server version: 5.1.58
-- PHP Version: 5.3.6-13ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata_siswa`
--

CREATE TABLE IF NOT EXISTS `biodata_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_reg` varchar(20) NOT NULL,
  `kunci` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jkel` varchar(10) NOT NULL,
  `tem_lahir` varchar(25) NOT NULL,
  `tgl` int(11) NOT NULL,
  `bln` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gol_drh` varchar(10) NOT NULL,
  `k_pos` varchar(7) NOT NULL,
  `tinggi` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `asal_sek` varchar(100) NOT NULL,
  `alamat_sek` varchar(100) NOT NULL,
  `thn_lls` int(11) NOT NULL,
  `no_ijazah` varchar(25) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `jurusan1` varchar(10) NOT NULL,
  `jurusan2` varchar(10) NOT NULL,
  `bin` float NOT NULL,
  `big` float NOT NULL,
  `ipa` float NOT NULL,
  `mtk` float NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `wali` varchar(50) NOT NULL,
  `alamat_wali` varchar(50) NOT NULL,
  `hp_wali` varchar(15) NOT NULL,
  `kerja_wali` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `no_reg` (`no_reg`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `biodata_siswa`
--

INSERT INTO `biodata_siswa` (`id`, `no_reg`, `kunci`, `nama`, `jkel`, `tem_lahir`, `tgl`, `bln`, `tahun`, `alamat`, `gol_drh`, `k_pos`, `tinggi`, `berat`, `agama`, `asal_sek`, `alamat_sek`, `thn_lls`, `no_ijazah`, `hp`, `email`, `jurusan1`, `jurusan2`, `bin`, `big`, `ipa`, `mtk`, `ayah`, `ibu`, `wali`, `alamat_wali`, `hp_wali`, `kerja_wali`) VALUES
(9, 'SMK0500007', 'Sb30ph', 'adf', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', '(Kosong)', '(Kosong)', 9, 9, 9, 9, '', '', '', '', '', ''),
(10, 'SMK0500008', 'JEq2Hy', 'adsf', 'LAKI-LAKI', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', 'AP', 'TEI', 9, 99, 9, 9, '', '', '', '', '', ''),
(11, 'SMK0500009', 'N2QQxl', 'adfdf', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', 'AK', 'AK', 9, 9, 9, 9, '', '', '', '', '', ''),
(12, 'SMK0600010', '10J4Q@', 'SHOWCHEAP', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', 'AK', 'PM', 9, 9, 9, 9, '', '', '', '', '', ''),
(7, 'SMK0300005', 'Uv8uXB', 'SUCIPTO', 'LAKI-LAKI', 'NGAWI', 17, 11, 1991, 'NGAWI DONGKKK', 'A', '63211', 165, 55, 'ISLAM', 'SKANSA', 'NGW', 2001, 'DN.9EUIJDFK', '09839047', 'show.cheap@gmail.com', 'AK', 'AP', 8, 7.5, 7.9, 9.9, 'AYAH', 'IBU', '-', 'NGAWI', '098098', 'TANI'),
(8, 'SMK0300006', 'sNnHMz', 'SUCIPTO', 'LAKI-LAKI', 'NGAWI', 18, 10, 1995, 'adsf', 'B', '63211', 98, 55, 'HINDU', 'SKANSA', 'NGW', 2002, 'DN.9EUIJDFK', '09839047', 'show.cheap@gmail.com', 'TKJ', 'AK', 9, 99, 9, 9, 'AYAH', 'IBU', '-', 'asdf', '098098', 'TANI'),
(13, 'SMK0600011', 'vsks3E', 'SHOWCHEAP', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', 'AK', 'PM', 9, 9, 9, 9, '', '', '', '', '', ''),
(14, 'SMK0600012', 'kp35UL', 'reboot', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', 'TKJ', 'PM', 9, 9, 9, 9, '', '', '', '', '', ''),
(15, 'SMK0600013', 'uq4y4f', 'reboot', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', 'TKJ', 'PM', 9, 9, 9, 9, '', '', '', '', '', ''),
(16, 'SMK0600014', 'eQRfLU', 'SAYA', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', 'AK', 'PM', 8, 8, 8, 8, '', '', '', '', '', ''),
(17, 'SMK0600015', 'MaWbGv', 'adf', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', '(Kosong)', '(Kosong)', 9, 9, 9, 9, '', '', '', '', '', ''),
(18, 'SMK0600016', 'dQSQvi', 'asdf', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', '(Kosong)', '(Kosong)', 9, 9, 9, 9, '', '', '', '', '', ''),
(19, 'SMK0600017', 'hsMgl6', 'aaaaaaaaaaaaaaa', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', '(Kosong)', '(Kosong)', 9, 9, 9, 9, '', '', '', '', '', ''),
(20, 'SMK0600018', '9FcUQz', 'asdfsdfs', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', '(Kosong)', '(Kosong)', 9, 99, 9, 9, '', '', '', '', '', ''),
(21, 'SMK0600019', 'q@44oa', 'admin', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', '(Kosong)', '(Kosong)', 9, 9, 9, 9, '', '', '', '', '', ''),
(22, 'SMK0800020', 'aVqauJ', 'admin', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', 'AP', 'PM', 9, 9, 9, 9, '', '', '', '', '', ''),
(23, 'SMK0800021', 'I2ixNx', '&lt;h1&gt;woyooo&lt;/h1&gt;&lt;iframe&gt;&lt;/iframe&gt;&lt;script type=&#039;text/javascript&#039;&', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', '(Kosong)', '(Kosong)', 9, 9, 9, 9, '', '', '', '', '', ''),
(37, 'SMK1400035', 'x9me1U', 'asdf', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', '(Kosong)', '(Kosong)', 9, 99, 9, 9, '', '', '', '', '', ''),
(25, 'SMK0800023', 've@7Xr', 'sadfjdfh&amp;#039;juah', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', '(Kosong)', '(Kosong)', 9, 9, 9, 9, '', '', '', '', '', ''),
(26, 'SMK0800024', 'nG6gHy', 'sdf&amp;#039;a', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', '(Kosong)', '(Kosong)', 9, 9, 9, 9, '9', '', '', '', '', ''),
(27, 'SMK0800025', 'LNErVu', 'asdf&amp;#039;adsf', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', 'AP', 'AK', 9, 9, 9, 9, '', '', '', '', '', ''),
(28, 'SMK0800026', '40Yj8R', 'admin', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', '(Kosong)', '(Kosong)', 9, 9, 9, 9, '', '', '', '', '', ''),
(29, 'SMK0800027', 'cztLjx', 'Jum''atiah', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', '(Kosong)', '(Kosong)', 9, 9, 9, 9, '', '', '', '', '', ''),
(30, 'SMK0800028', '7j3REk', '&lt;h1&gt;askdfjlsfjsldkf&lt;/h1&gt; Halo''aaaaa', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', '(Kosong)', '(Kosong)', 9, 9, 9, 9, '', '', '', '', '', ''),
(31, 'SMK0800029', 'UEoQRU', 'a''an', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', '(Kosong)', '(Kosong)', 9, 9, 9, 9, '', '', '', '', '', ''),
(32, 'SMK0800030', 'F6ozTi', 'a''an', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', '(Kosong)', '(Kosong)', 7, 7, 7, 7, '', '', '', '', '', ''),
(33, 'SMK0800031', 'm3sZ0g', '&lt;h1&gt;wa''tu&lt;/h1&gt;', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', '(Kosong)', '(Kosong)', 9, 9, 9, 9, '', '', '', '', '', ''),
(34, 'SMK0900032', 'RGTY', 'a', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', '(Kosong)', '(Kosong)', 9, 9, 9, 9, '', '', '', '', '', ''),
(35, 'SMK0900033', 'OgN17H', 'AGUS SUPARDI', 'LAKI-LAKI', 'NGAWI', 16, 10, 1995, 'BOJONE NEGORO', 'B', '63211', 160, 50, 'BUDHA', 'SMKN 1 NGW', 'TEUKU UMAR 10', 2002, 'DN.I04859048594', '116', 'AGOES_IMOETS@YAHOO.COM', 'AK', 'PM', 7, 8, 9, 6, 'SURONO', 'SURENE', '-', 'BOJONE NEGORO', '9000', 'TANI'),
(36, 'SMK1900034', 'hT9Gp8', 'admin', '', '', 0, 0, 0, '', '', '', 0, 0, '(Kosong)', '', '', 0, '', '', '', '(Kosong)', '(Kosong)', 9, 9, 9, 9, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE IF NOT EXISTS `panitia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `kunci` varchar(50) NOT NULL,
  `login` int(11) NOT NULL DEFAULT '0',
  `sedang_login` varchar(6) NOT NULL DEFAULT 'tidak',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `panitia`
--

INSERT INTO `panitia` (`id`, `nama`, `kunci`, `login`, `sedang_login`) VALUES
(1, 'showcheap', '21232f297a57a5a743894a0e4a801fc3', 23, 'ya'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 71, 'tidak'),
(3, 'hacker', 'hacker', 0, 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dari` varchar(20) NOT NULL,
  `kepada` varchar(20) NOT NULL,
  `isi_pesan` varchar(1000) NOT NULL,
  `dibaca` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `dari`, `kepada`, `isi_pesan`, `dibaca`) VALUES
(54, 'admin', 'SMK0300006', 'yyooooooo', '0'),
(53, 'admin', 'SMK0200003', 'lapo we kirim kirim barang ra genahhh??', '0'),
(52, 'SMK0300006', 'admin', 'asdf', '1'),
(50, 'SMK0200003', 'showcheap', 'wooooyyyyyyyyyyyyyyyy', '0'),
(51, 'SMK0200003', 'admin', 'asdfsdfsdfs', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sistem`
--

CREATE TABLE IF NOT EXISTS `sistem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anoun` varchar(500) NOT NULL,
  `file_log` varchar(20) NOT NULL DEFAULT 'log.txt',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sistem`
--

INSERT INTO `sistem` (`id`, `anoun`, `file_log`) VALUES
(1, 'Bismilah.............................................................................................................', 'log-14-Apr-2012.txt');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_reg` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT 'img/default.jpg',
  `status` varchar(25) NOT NULL DEFAULT '1',
  `langkah` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `no_reg`, `foto`, `status`, `langkah`) VALUES
(19, 'SMK2700008', 'img/default.jpg', '1', 2),
(18, 'SMK2700007', 'img/default.jpg', '1', 2),
(17, 'SMK2700006', 'img/default.jpg', '1', 2),
(16, 'SMK2600005', 'img/default.jpg', '1', 2),
(15, 'SMK2600004', 'img/default.jpg', '1', 2),
(14, 'SMK2600003', 'img/default.jpg', '1', 1),
(13, 'SMK2600002', 'upload/SMK2600002.gif', '1', 4),
(12, 'SMK2400001', 'upload/SMK2400001.jpg', '1', 3),
(11, 'SMK2300000', 'upload/SMK2300000.png', '1', 3),
(20, 'SMK2800009', 'img/default.jpg', '1', 2),
(21, 'SMK2800010', 'img/default.jpg', '1', 2),
(22, 'SMK2800011', 'img/default.jpg', '1', 2),
(23, 'SMK2800012', 'img/default.jpg', '1', 2),
(24, 'SMK2800013', 'img/default.jpg', '1', 2),
(25, 'SMK2800014', 'upload/SMK2800014.jpg', '1', 4),
(26, 'SMK2800015', 'upload/SMK2800015.jpg', '1', 4),
(27, 'SMK2800016', 'upload/SMK2800016.png', '1', 4),
(28, 'SMK3100017', 'img/default.jpg', '1', 2),
(29, 'SMK3100018', 'img/default.jpg', '1', 2),
(30, 'SMK0100019', 'img/default.jpg', '1', 2),
(31, 'SMK0100000', 'img/default.jpg', '1', 2),
(32, 'SMK0200012', 'upload/SMK0200012.jpg', '1', 3),
(33, 'SMK0200012', 'img/default.jpg', '1', 1),
(34, 'SMK0200012', 'img/default.jpg', '1', 1),
(35, 'SMK0200000', 'img/default.jpg', '1', 2),
(36, 'SMK0200001', 'upload/SMK0200001.jpg', '1', 4),
(37, 'SMK0200002', 'img/default.jpg', '1', 2),
(38, 'SMK0200003', 'upload/SMK0200003.png', '1', 4),
(39, 'SMK0200003', 'img/default.jpg', '1', 4),
(40, 'SMK0200004', 'upload/SMK0200004.jpg', '1', 3),
(41, 'SMK0300006', 'upload/SMK0300006.jpg', '1', 3),
(42, 'SMK0500007', 'img/default.jpg', '1', 2),
(43, '', 'img/default.jpg', '1', 2),
(44, 'SMK0500008', 'img/default.jpg', '1', 2),
(45, 'SMK0500009', 'upload/SMK0500009.png', '1', 3),
(46, '', 'img/default.jpg', '1', 2),
(47, '', 'img/default.jpg', '1', 2),
(48, 'SMK0600010', 'img/default.jpg', '1', 1),
(49, 'SMK0600011', 'img/default.jpg', '1', 1),
(50, 'SMK0600012', 'img/default.jpg', '1', 1),
(51, 'SMK0600013', 'img/default.jpg', '1', 1),
(52, 'SMK0600014', 'img/default.jpg', '1', 2),
(53, '', 'img/default.jpg', '1', 2),
(54, 'SMK0600015', 'upload/SMK0600015.jpg', '1', 3),
(55, 'SMK0600016', 'upload/SMK0600016.jpg', '1', 3),
(56, 'SMK0600017', 'upload/SMK0600017.php', '1', 3),
(57, 'SMK0600018', 'img/default.jpg', '1', 2),
(58, 'SMK0600019', 'upload/SMK0600019.php', '1', 3),
(59, 'SMK0800020', 'upload/SMK0800020.jpg', '1', 3),
(60, 'SMK0800021', 'img/default.jpg', '1', 2),
(61, 'SMK0800022', 'img/default.jpg', '1', 2),
(62, 'SMK0800023', 'img/default.jpg', '1', 2),
(63, 'SMK0800024', 'img/default.jpg', '1', 2),
(64, 'SMK0800025', 'img/default.jpg', '1', 2),
(65, 'SMK0800026', 'img/default.jpg', '1', 2),
(66, 'SMK0800026', 'img/default.jpg', '1', 2),
(67, 'SMK0800026', 'img/default.jpg', '1', 2),
(68, '', 'img/default.jpg', '1', 2),
(69, 'SMK0800027', 'img/default.jpg', '1', 2),
(70, 'SMK0800027', 'img/default.jpg', '1', 2),
(71, 'SMK0800028', 'img/default.jpg', '1', 2),
(72, 'SMK0800029', 'img/default.jpg', '1', 2),
(73, 'SMK0800030', 'img/default.jpg', '1', 2),
(74, 'SMK0800031', 'img/default.jpg', '1', 2),
(75, '', 'img/default.jpg', '1', 1),
(76, 'SMK0900032', 'upload/SMK0900032.png', '1', 3),
(77, 'SMK0900033', 'upload/SMK0900033.png', '1', 4),
(78, '', 'img/default.jpg', '1', 1),
(79, '', 'img/default.jpg', '1', 1),
(80, 'SMK1900034', 'img/default.jpg', '1', 4),
(81, 'SMK1400035', 'img/default.jpg', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tembok`
--

CREATE TABLE IF NOT EXISTS `tembok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oleh` varchar(25) NOT NULL,
  `pesan` longtext NOT NULL,
  `jawab` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
