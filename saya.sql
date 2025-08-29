-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Agu 2025 pada 20.56
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `saya`
--

CREATE TABLE `saya` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `service` varchar(50) DEFAULT NULL,
  `merk` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `plat` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `terms` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `saya`
--

INSERT INTO `saya` (`id`, `firstName`, `service`, `merk`, `phone`, `plat`, `address`, `terms`) VALUES
(4, 'Anjing', 'service-ac', 'Avanza', '088841485481', 'b 1234 vv', 'anjing luu', 1),
(5, 'Anjing', 'service-ac', 'Avanza', '088841485481', 'b 1234 vv', 'anjing luu', 1),
(6, 'Anjing', 'service-ac', 'Avanza', '0862665435435', 'b 1234 vv', 'ds', 1),
(7, 'sadd', 'service-rutin', 'Avanza', '35252', 'Anjing', 'sdgwvDG', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `saya`
--
ALTER TABLE `saya`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `saya`
--
ALTER TABLE `saya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
