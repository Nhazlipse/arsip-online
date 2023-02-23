-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 12:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disarsipus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dataarsip`
--

CREATE TABLE `tb_dataarsip` (
  `id_dataarsip` int(10) NOT NULL,
  `tanggal` tinyint(4) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `masalah` varchar(100) NOT NULL,
  `jalan` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `unit_pengolah` varchar(60) NOT NULL,
  `no_rak` varchar(10) NOT NULL,
  `no_box` varchar(10) NOT NULL,
  `kode_klas` varchar(100) NOT NULL,
  `no_urut` varchar(100) NOT NULL,
  `nipa` varchar(10) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_dataarsip`
--

INSERT INTO `tb_dataarsip` (`id_dataarsip`, `tanggal`, `nama`, `masalah`, `jalan`, `kelurahan`, `kecamatan`, `unit_pengolah`, `no_rak`, `no_box`, `kode_klas`, `no_urut`, `nipa`, `tahun`, `keterangan`) VALUES
(9, 0, 'Ewaido Salpage', 'Pinjam data arsip', 'Jl. Rambutan', 'Nginsir', 'Grogol', '', '1231', '21', '666', '1', 'Saya Ikan', '2023/2065', 'Numpang Nyimpan Data'),
(13, 0, 'asdasd', 'asd', 'asd', 'asd', 'asd', '', 'asda', 'asd', 'adad', 'asd', 'asdasd', '2023-02-14', 'asdasd'),
(14, 0, 'adasd', 'asd', 'asd', 'asd', 'asdasd', '', 'asd', 'asd', 'asd', 'asd', 'asdas', '2006', 'asd'),
(15, 0, 'Anas', 'IMB - Kegiatan Gereja', 'Kediri', 'Nganjuk', 'Pesantren', 'DISARSIPUS', '213', '2', '1', '1', '3', '1999', 'Saya'),
(16, 0, 'Ditya', 'IMB - Kegiatan Gereja', 'Rambutan', 'Mrican', 'Mojoroto', 'DISARSIPUS', '21', '66', 'SSAE', '1', 'SAER', '2006', 'Saya'),
(17, 0, 'Boheman', 'IMB - Kegiatan Gereja', 'Rambutan', 'Bandar Kidul', 'Pesantren', 'DISARSIPUS', '1235', '22', 'SSAE', '5', 'SAER', '2010', 'Saya'),
(18, 0, 'Anas', 'IMB - Kegiatan Gereja', 'Rambutan', 'Banjar Mlati', 'Mojoroto', 'DISARSIPUS', '21', '2', 'POESS', '23', 'SAER', '2005', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(100) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `peminjam` varchar(100) NOT NULL,
  `no_identitas` varchar(100) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `keterangan_pinjam` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tanggal_dikembalikan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `nama_pemilik`, `peminjam`, `no_identitas`, `tanggal_pinjam`, `jumlah`, `keterangan_pinjam`, `status`, `tanggal_dikembalikan`) VALUES
(12, 'sadasd', 'sadasd', '123123123123', '2023-02-07', '2', 'sadasd', 'Tersedia', '2023-02-23'),
(15, 'Dimas', 'Dimas', '12321312354123', '2023-02-22', '213', 'Dimas', 'Tersedia', '2023-02-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_dataarsip`
--
ALTER TABLE `tb_dataarsip`
  ADD PRIMARY KEY (`id_dataarsip`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_dataarsip`
--
ALTER TABLE `tb_dataarsip`
  MODIFY `id_dataarsip` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
