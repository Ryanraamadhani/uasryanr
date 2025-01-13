-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2025 pada 08.04
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim_rs`
--
CREATE DATABASE IF NOT EXISTS `sim_rs` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sim_rs`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat`
--

CREATE TABLE `alat` (
  `id` int(11) NOT NULL,
  `nama_sparepart` varchar(100) NOT NULL,
  `tahun` int(11) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `stok barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `alat`
--

INSERT INTO `alat` (`id`, `nama_sparepart`, `tahun`, `merek`, `lokasi`, `stok barang`) VALUES
(2, 'kenalpot ninja', 2000, 'original', 'jepang', 6),
(3, 'lampu depan ninja', 2010, 'original', '', 12),
(4, 'TANGKI NINJA SS', 2015, 'original', '', 2),
(5, 'spion supra', 2019, 'original', '', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'ryanramadhani', '$2y$10$fqAeRJVLn5Sqbi5zLtLsTOypoZLyHfmtdOOGuQPxSAkUZ724SNsle', '2025-01-07 19:36:00'),
(2, 'ryanramadhani', '$2y$10$y2lpePdFFCHAPD8OtyexbuJqyfEWEQ2tdH/NsZFY3l10EkLJlPJZ2', '2025-01-07 20:26:58'),
(3, 'ryanramadhani', '$2y$10$Xk4iPjqdQe037i9.dmcgRuE1QbmY0pbfqrCR3yM7GTlgkdJ/0HoH6', '2025-01-07 20:27:38'),
(4, 'ryanramadhani', '$2y$10$mHuP/MvKJslabkNB6.Uo8OxNPHTMfH3RqzAN2numuYx8ywWOrLWCC', '2025-01-07 20:32:04'),
(5, 'ryanramadhani', '$2y$10$5PXTmzYzqEV2ZeGN/U8FPuAUw8/I0MA5mzAJFv14lRsBbkIT1q3na', '2025-01-07 20:56:25'),
(6, 'ryanramadhani', '$2y$10$ZMHFGhv4KhWVa4UTruvuRO9.R140rSfivU2WgKgRFdUEQEUwRInWK', '2025-01-07 20:58:47'),
(7, 'ryanramadhani', '$2y$10$6Or6zKAFOQvQHBMaifIn1eaI3O0CUAZx8tZUuU4f36wc/pjQ.ZH1u', '2025-01-07 22:26:33'),
(8, 'ryanramadhani', '$2y$10$WbYgajaW.NMBM22Rb0gBPui8mg184PP33tomoVz0L3XH9VszHwwvu', '2025-01-07 22:36:51'),
(9, 'ryanramadhani', '$2y$10$lYPMgB/NGY6hVFFOwei40.MYU20BXxFtGl0p6OkvcDUMGnYbVO9I2', '2025-01-09 02:54:05'),
(10, 'ryanramadhani', '$2y$10$EVWOtezONSUF/QyZPTZtN.A3t.IaQlroh7Y1mtQI6UDVPbAbnNzv2', '2025-01-10 15:54:09'),
(11, 'ryanramadhani', '$2y$10$cw1MAdop34NcW6CcsmK5KOKRc1xwCI6aAyWWeITbwHi5zDEeE5g6S', '2025-01-10 15:56:01'),
(12, 'ryanramadhani', '$2y$10$HACm3T3wQmk8U5MFjgnaCecVtUjzS5KgQo28nojFBlgpKD3fEyYWW', '2025-01-10 16:28:38'),
(13, 'ryanramadhani', '$2y$10$VYErRoVQ8qZWeDoOJLuhs.YcXKej6K5W2d0nj1th3cI/CPmFAcWUG', '2025-01-10 20:18:21'),
(14, 'ryanramadhani', '$2y$10$kHdHmKFT9V/iS7.vgVx5zukUdPUII/BLEVT5f3TeM4xvpD3SSJtVa', '2025-01-10 20:51:20'),
(15, 'ryanramadhani', '$2y$10$HpD2MedUbPOBtlv1XInF6elAu8qwGiOYRy4MItP4DW//A1D/c6fem', '2025-01-13 06:26:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alat`
--
ALTER TABLE `alat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
