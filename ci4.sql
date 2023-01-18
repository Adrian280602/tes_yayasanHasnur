-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2023 pada 18.27
-- Versi server: 10.4.19-MariaDB-log
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `semnas`
--

CREATE TABLE `semnas` (
  `id` int(11) NOT NULL,
  `project_name` varchar(30) NOT NULL,
  `client` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `insek` varchar(30) NOT NULL,
  `wa` varchar(15) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `semnas`
--

INSERT INTO `semnas` (`id`, `project_name`, `client`, `nama`, `insek`, `wa`, `start_date`, `end_date`) VALUES
(1, 'Pembuatan SI Keuangan', 'Bakeuda Prov. Kalsel', 'MUH. ADRIAN', 'UNSULBAR', '085340580767', '2022-01-14', '2022-08-14'),
(2, '', 'rifky@gmail.com', 'RIFKY', 'CAMPA', '09876554321', NULL, NULL),
(3, '', 'edguiewgkjew@gmail.com', 'dggjkegf', 'gefgewn', '9786756453', NULL, NULL),
(4, '', 'efgre@gmail.com', 'grttrg', 'tgt', '084968576', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `semnas`
--
ALTER TABLE `semnas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `semnas`
--
ALTER TABLE `semnas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
