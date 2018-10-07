-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Okt 2018 pada 10.32
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_modul5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jurnal1`
--

CREATE TABLE `t_jurnal1` (
  `NIM` int(10) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Tgl_Lahir` date NOT NULL,
  `Jenis_Kelamin` varchar(20) NOT NULL,
  `Jurusan` varchar(25) NOT NULL,
  `Fakultas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_jurnal1`
--

INSERT INTO `t_jurnal1` (`NIM`, `Nama`, `Email`, `Tgl_Lahir`, `Jenis_Kelamin`, `Jurusan`, `Fakultas`) VALUES
(1234567890, 'lintang', 'ltg@gmail.com', '2018-10-22', 'Laki-Laki', 'Manajemen informatika', 'FIT'),
(1234512345, 'lintsng', 'ltggg@gmail.com', '2018-11-05', 'Laki-Laki', 'Manajemen informatika', 'FIT'),
(1234512345, 'lintsng', 'ltggg@gmail.com', '2018-11-05', 'Laki-Laki', 'Manajemen informatika', 'FIT'),
(1010101010, 'rismaayu', 'rsm@gmail.com', '2018-12-06', 'Perempuan', 'Manajemen informatika', 'FIT'),
(1212121212, 'ibnu', 'ibnu@gmail.com', '2018-12-22', 'Laki-Laki', 'Manajemen informatika', 'FIT'),
(2020202020, 'firda amalia azzahra', 'zahra@gmail.com', '2018-11-08', 'Perempuan', 'Manajemen informatika', 'FIT');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
