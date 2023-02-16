-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Feb 2023 pada 06.33
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

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
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dataarsip`
--

CREATE TABLE `tb_dataarsip` (
  `id_dataarsip` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `masalah` varchar(100) NOT NULL,
  `jalan` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `no_rak` varchar(10) NOT NULL,
  `no_box` varchar(10) NOT NULL,
  `kode_klas` varchar(100) NOT NULL,
  `no_urut` varchar(100) NOT NULL,
  `nipa` varchar(10) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_dataarsip`
--

INSERT INTO `tb_dataarsip` (`id_dataarsip`, `tanggal`, `nama`, `masalah`, `jalan`, `kelurahan`, `kecamatan`, `no_rak`, `no_box`, `kode_klas`, `no_urut`, `nipa`, `tahun`, `keterangan`) VALUES
(9, '0000-00-00', 'Ewaido Salpage', 'Pinjam data arsip', 'Jl. Rambutan', 'Nginsir', 'Grogol', '1231', '21', '666', '1', 'Saya Ikan', '2023/2065', 'Numpang Nyimpan Data'),
(10, '0000-00-00', 'Maylatif Tuyos Suparto', 'Bingung ganti background', 'Jl. Kemana', 'Geoegopol', 'Kujang', '231', '21', '666', '2', 'Ikan', '2023/2065', 'sedang pusing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
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
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `nama_pemilik`, `peminjam`, `no_identitas`, `tanggal_pinjam`, `jumlah`, `keterangan_pinjam`, `status`, `tanggal_dikembalikan`) VALUES
(12, 'sadasd', 'sadasd', '123123123123', '2023-02-07', '2', 'sadasd', 'tersedia', '2023-02-16'),
(13, 'wewew', 'wewew', '2312312', '2023-02-24', '23', 'wewew', 'Tersedia', '2023-02-16'),
(14, 'anas', 'anas', '21323413123', '2023-02-01', '6', 'anas', 'dipinjam', '2023-02-16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_dataarsip`
--
ALTER TABLE `tb_dataarsip`
  ADD PRIMARY KEY (`id_dataarsip`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_dataarsip`
--
ALTER TABLE `tb_dataarsip`
  MODIFY `id_dataarsip` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
