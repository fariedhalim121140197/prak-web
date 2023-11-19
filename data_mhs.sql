-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2023 pada 07.33
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
-- Database: `data_mhs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `nim` int(9) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `prodi` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`nim`, `nama`, `prodi`) VALUES
(119170025, 'Sari Nuraini', 'MS'),
(119250170, 'Legawa Gunawan', 'TL'),
(119260033, 'Tari Mardhiyah', 'FA'),
(119300029, 'Enteng Hardiansyah', 'KL'),
(119300148, 'Argono Thamrin', 'KL'),
(119370139, 'Lalita Nurdiyanti', 'TA'),
(119370188, 'Bambang Saputra', 'TA'),
(120140165, 'Makara Putra', 'IF'),
(120160028, 'Lasmanto Haryanto', 'MA'),
(120210151, 'Halim Hakim', 'SI'),
(120210163, 'Ozy Maheswara', 'SI'),
(120280125, 'Latif Narpati', 'TK'),
(120350015, 'Galang Marpaung', 'PG'),
(120350081, 'Humaira Nasyidah', 'PG'),
(121130089, 'Uda Maulana', 'EL'),
(121190191, 'Melinda Uyainah', 'TI'),
(121240051, 'Pranata Wibowo', 'AR'),
(121240061, 'Ilsa Sudiati', 'AR'),
(121320159, 'Ulva Yulianti', 'TF'),
(121360124, 'Paulin Yuniar', 'MT');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
