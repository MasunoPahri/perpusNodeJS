-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2014 at 09:15 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `hak_akses` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `hak_akses`) VALUES
(1, 'perpus', 'bismillah', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_anggota`
--

CREATE TABLE IF NOT EXISTS `data_anggota` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `no_induk` varchar(5) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `foto` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=164 ;

--
-- Dumping data for table `data_anggota`
--

INSERT INTO `data_anggota` (`id`, `no_induk`, `nama`, `jk`, `kelas`, `ttl`, `alamat`, `foto`) VALUES
(1, '1272', 'AGUNG SETYABUDI', 'L', '9a', 'Kulon Progo, 4 Agustus 1997', 'Samigaluh, Kulon Progo', ''),
(2, '1273', 'AHMAD BUDIAWAN', 'L', '9c', 'Kulon Progo, 27 Januari 1998', 'Kalibawang, Kulon Progo', ''),
(3, '1275', 'ANDRI SURAHMAN', 'L', '9b', 'Kulon Progo, 30 Januari 1997', 'Samigaluh, Kulon Progo', ''),
(4, '1276', 'ANI SARIYATI', 'P', '9b', 'Kulon Progo, 13 November 1998', 'Kalibawang, Kulon Progo', ''),
(5, '1278', 'ARIS BAHAGIAWAN', 'L', '9b', 'Kulon Progo, 5 November 1996', 'Samigaluh, Kulon Progo', ''),
(6, '1279', 'ATHIFAH INDRANINGRUM', 'P', '9c', 'Kulon Progo, 26 Mei 1998', 'Samigaluh, Kulon Progo', ''),
(7, '1280', 'CANDRIKA PURNIAJATI', 'P', '9a', 'Kulon Progo, 10 Juni 1996', 'Samigaluh, Kulon Progo', ''),
(8, '1281', 'CIPTA BANGUN PERSADA', 'L', '9a', 'Kulon Progo, 14 Desember 1996', 'Samigaluh, Kulon Progo', ''),
(9, '1282', 'DAMA AGUNG PRIAMBODO', 'L', '9b', 'Kotabumi, 28 Oktober 1997', 'Samigaluh, Kulon Progo', ''),
(10, '1283', 'DANANG KHOIRUDIN', 'L', '9b', 'Tangerang, 20 September 1997', ' Samigaluh, Kulon Progo', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE IF NOT EXISTS `data_buku` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(250) NOT NULL,
  `pengarang` varchar(250) NOT NULL,
  `th_terbit` varchar(4) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `kode_klas` varchar(20) NOT NULL,
  `jumlah_buku` int(2) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `jum_temp` int(4) NOT NULL,
  `tgl_input` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`id`, `judul`, `pengarang`, `th_terbit`, `penerbit`, `isbn`, `kategori`, `kode_klas`, `jumlah_buku`, `lokasi`, `asal`, `jum_temp`, `tgl_input`) VALUES
(2, 'Tips dan Trick PHP', 'Mr. X', '2009', 'Erlangga', '12345678', '1000', 'AA-Pegangan Guru', 1, 'Rak E5', 'Pembelian', 1, '2014-02-21 16:11:18'),
(3, '1000000 trik PHP termudah', 'Irsyad Maulana', '2011', 'Jaya Media', '9098998293', '1000000', 'BAR-Penunjang', 1, 'Rak E5', 'Pembelian', 1, '2014-02-21 16:12:07'),
(4, '1 Milyar Trick PHP Cewek', 'Agung Cintamurti ', '2009', 'Gila Media Persada', '8989787878', '1000', 'AA-Penunjang', 2, 'Rak E3', 'Pembelian', 2, '2014-02-21 16:12:54'),
(5, 'Penyebab Eror dan Solusi saat mem-PHP', 'Juniawan Ibrahimovic', '2009', 'Gila Media Persada', '7878787', '1200', 'AA-Penunjang', 9, 'Rak E3', 'Pembelian', 9, '2014-02-21 16:14:23');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE IF NOT EXISTS `pengunjung` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `kelas` varchar(17) NOT NULL,
  `perlu1` varchar(15) NOT NULL,
  `perlu2` varchar(15) NOT NULL,
  `perlu3` varchar(15) NOT NULL,
  `perlu4` varchar(15) NOT NULL,
  `cari` varchar(255) NOT NULL,
  `saran` varchar(255) NOT NULL,
  `tgl_kunjung` date NOT NULL,
  `jam_kunjung` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `trans_pinjam`
--

CREATE TABLE IF NOT EXISTS `trans_pinjam` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `judul_buku` varchar(250) NOT NULL,
  `id_peminjam` int(4) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `tgl_pinjam` varchar(15) NOT NULL,
  `tgl_kembali` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `ket` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
