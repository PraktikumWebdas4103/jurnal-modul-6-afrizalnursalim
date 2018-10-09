-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Okt 2018 pada 11.59
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ta5`
--

CREATE TABLE `ta5` (
  `nama` varchar(35) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kelas` varchar(35) NOT NULL,
  `jeniskelamin` varchar(35) NOT NULL,
  `fakultas` varchar(35) NOT NULL,
  `hobi` varchar(35) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ta5`
--

INSERT INTO `ta5` (`nama`, `nim`, `kelas`, `jeniskelamin`, `fakultas`, `hobi`, `alamat`) VALUES
('acil', '6701174076', '41-01', 'laki-laki', 'Fakultas Teknik Elektro', 'Berenang', 'permata'),
('Afrizal', '6701174087', 'D3MI41-01', 'laki-laki', 'Ilmu Terapan', 'Bersepeda', 'permata buah batu h27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ta5`
--
ALTER TABLE `ta5`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
