-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Nov 2018 pada 04.42
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sarirasa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `ID_ADMIN` varchar(10) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `ALAMAT` text NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`ID_ADMIN`, `EMAIL`, `ALAMAT`, `PASSWORD`) VALUES
('1', 'admin@gmail.com', 'JEMBER', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE IF NOT EXISTS `tbl_barang` (
  `ID_BARANG` int(11) NOT NULL,
  `ID_ADMIN` varchar(10) NOT NULL,
  `NAMA_BARANG` text NOT NULL,
  `BERAT` decimal(25,0) NOT NULL,
  `DESKRIPSI` text NOT NULL,
  `IMG` varchar(100) NOT NULL,
  `HARGA_BARANG` decimal(25,0) NOT NULL,
  `STOK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detailtransaksi`
--

CREATE TABLE IF NOT EXISTS `tbl_detailtransaksi` (
  `ID_DETAILTRANSAKSI` varchar(11) NOT NULL,
  `ID_KERANJANG` varchar(11) NOT NULL,
  `ID_PELANGGAN` varchar(11) NOT NULL,
  `TGL_TRANSAKSI` date NOT NULL,
  `JUMLAH` int(13) NOT NULL,
  `TOTAL` decimal(25,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_keranjang`
--

CREATE TABLE IF NOT EXISTS `tbl_keranjang` (
  `ID_KERANJANG` varchar(11) NOT NULL,
  `ID_TRANSAKSI` varchar(11) NOT NULL,
  `ID_PELANGGAN` varchar(11) NOT NULL,
  `QTY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE IF NOT EXISTS `tbl_pelanggan` (
  `ID_PELANGGAN` varchar(100) NOT NULL,
  `NAMA_PEL` varchar(100) NOT NULL,
  `ALAMAT_PEL` text NOT NULL,
  `NO_TELP` varchar(13) NOT NULL,
  `JK` tinyint(1) NOT NULL,
  `TGL_LAHIR` date NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE IF NOT EXISTS `tbl_transaksi` (
  `ID_TRANSAKSI` varchar(11) NOT NULL,
  `ID_BARANG` varchar(11) NOT NULL,
  `ID_PELANGGAN` varchar(11) NOT NULL,
  `HARGA` decimal(25,0) NOT NULL,
  `QTY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
 ADD PRIMARY KEY (`ID_BARANG`);

--
-- Indexes for table `tbl_detailtransaksi`
--
ALTER TABLE `tbl_detailtransaksi`
 ADD PRIMARY KEY (`ID_DETAILTRANSAKSI`);

--
-- Indexes for table `tbl_keranjang`
--
ALTER TABLE `tbl_keranjang`
 ADD PRIMARY KEY (`ID_KERANJANG`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
 ADD PRIMARY KEY (`ID_PELANGGAN`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
 ADD PRIMARY KEY (`ID_TRANSAKSI`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
