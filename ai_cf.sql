-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2020 pada 12.08
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ai_cf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aturans`
--

CREATE TABLE `aturans` (
  `id` int(10) UNSIGNED NOT NULL,
  `kerusakan_kd` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `gejala_kd` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `solusi_kd` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `mb` decimal(3,2) NOT NULL,
  `md` decimal(3,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `aturans`
--

INSERT INTO `aturans` (`id`, `kerusakan_kd`, `gejala_kd`, `solusi_kd`, `mb`, `md`, `created_at`, `updated_at`) VALUES
(1, 'K01', 'G01', 'S01', '0.95', '0.20', '2018-06-27 14:51:40', '2018-06-27 14:51:40'),
(2, 'K01', 'G2', 'S01', '0.23', '0.67', '2018-06-27 14:54:10', '2018-06-27 14:54:10'),
(3, 'K01', 'G3', 'S01', '0.48', '0.01', '2018-06-27 14:55:49', '2018-06-27 14:55:49'),
(4, 'K01', 'G4', 'S01', '0.89', '0.68', '2018-06-27 14:57:04', '2018-06-27 14:57:04'),
(5, 'K01', 'G5', 'S01', '0.82', '0.70', '2018-06-27 14:57:42', '2018-06-27 14:57:42'),
(6, 'K01', 'G6', 'S01', '0.01', '0.50', '2018-06-27 14:58:32', '2018-06-27 14:58:32'),
(7, 'K01', 'G7', 'S01', '0.92', '0.19', '2018-06-27 14:58:59', '2018-06-27 14:58:59'),
(8, 'K01', 'G8', 'S01', '0.40', '0.54', '2018-06-27 14:59:24', '2018-06-27 14:59:24'),
(9, 'K01', 'G9', 'S01', '0.91', '0.69', '2018-06-27 14:59:47', '2018-06-27 14:59:47'),
(10, 'K01', 'G10', 'S01', '0.44', '0.72', '2018-06-27 15:00:10', '2018-06-27 15:00:10'),
(11, 'K2', 'G01', 'S2', '0.15', '0.93', '2018-06-27 15:06:09', '2018-06-27 15:06:09'),
(12, 'K2', 'G2', 'S2', '0.19', '0.33', '2018-06-27 15:06:42', '2018-06-27 15:06:42'),
(13, 'K2', 'G3', 'S2', '0.85', '0.39', '2018-06-27 15:07:16', '2018-06-27 15:07:16'),
(14, 'K2', 'G4', 'S2', '0.49', '0.62', '2018-06-27 15:07:55', '2018-06-27 15:07:55'),
(15, 'K2', 'G5', 'S2', '0.45', '0.65', '2018-06-27 15:15:10', '2018-06-27 15:15:10'),
(16, 'K2', 'G6', 'S2', '0.45', '0.41', '2018-06-27 15:23:02', '2018-06-27 15:23:02'),
(17, 'K2', 'G7', 'S2', '0.29', '0.59', '2018-06-27 15:26:53', '2018-06-27 15:26:53'),
(18, 'K2', 'G8', 'S2', '0.65', '0.51', '2018-06-27 15:27:25', '2018-06-27 15:27:25'),
(19, 'K2', 'G9', 'S2', '0.55', '0.48', '2018-06-27 15:29:04', '2018-06-27 15:29:04'),
(20, 'K2', 'G10', 'S2', '0.19', '0.96', '2018-06-27 15:29:59', '2018-06-27 15:29:59'),
(21, 'K3', 'G01', 'S3', '0.04', '0.27', '2018-06-27 15:31:50', '2018-06-27 15:31:50'),
(22, 'K3', 'G2', 'S3', '0.57', '0.62', '2018-06-27 15:35:17', '2018-06-27 15:35:17'),
(23, 'K3', 'G3', 'S3', '0.75', '0.08', '2018-06-27 15:35:51', '2018-06-27 15:35:51'),
(24, 'K3', 'G4', 'S3', '0.75', '0.08', '2018-06-27 15:36:34', '2018-06-27 15:36:34'),
(25, 'K3', 'G5', 'S3', '0.80', '0.90', '2018-06-27 15:38:35', '2018-06-27 15:38:35'),
(26, 'K3', 'G6', 'S3', '0.63', '0.47', '2018-06-27 15:39:14', '2018-06-27 15:39:14'),
(27, 'K3', 'G7', 'S3', '0.60', '0.59', '2018-06-27 15:41:35', '2018-06-27 15:41:35'),
(28, 'K3', 'G8', 'S3', '0.51', '0.95', '2018-06-27 15:42:41', '2018-06-27 15:42:41'),
(29, 'K3', 'G9', 'S3', '0.42', '0.02', '2018-06-27 15:43:04', '2018-06-27 15:43:04'),
(30, 'K3', 'G10', 'S3', '0.89', '0.44', '2018-06-27 15:43:50', '2018-06-27 15:43:50'),
(31, 'K4', 'G01', 'S4', '0.26', '0.16', '2018-06-27 15:49:01', '2018-06-27 15:49:01'),
(32, 'K5', 'G01', 'S5', '0.72', '0.22', '2018-06-27 15:49:29', '2018-06-27 15:49:29'),
(33, 'K4', 'G2', 'S4', '0.53', '0.03', '2018-06-27 15:49:57', '2018-06-27 15:49:57'),
(34, 'K5', 'G2', 'S5', '0.84', '0.32', '2018-06-27 15:57:41', '2018-06-27 15:57:41'),
(35, 'K4', 'G3', 'S4', '0.21', '0.97', '2018-06-27 16:00:41', '2018-06-27 16:00:41'),
(36, 'K5', 'G3', 'S5', '0.95', '0.31', '2018-06-27 16:01:06', '2018-06-27 16:01:06'),
(37, 'K4', 'G4', 'S4', '0.21', '0.95', '2018-06-27 16:01:37', '2018-06-27 16:01:37'),
(38, 'K5', 'G4', 'S5', '0.65', '0.25', '2018-06-27 16:02:12', '2018-06-27 16:02:12'),
(39, 'K4', 'G5', 'S4', '0.66', '0.05', '2018-06-27 16:05:43', '2018-06-27 16:05:43'),
(40, 'K5', 'G5', 'S5', '0.34', '0.50', '2018-06-27 16:06:20', '2018-06-27 16:06:20'),
(41, 'K4', 'G6', 'S4', '0.31', '0.59', '2018-06-27 16:07:24', '2018-06-27 16:07:24'),
(42, 'K5', 'G6', 'S5', '0.88', '0.18', '2018-06-27 16:08:10', '2018-06-27 16:08:10'),
(43, 'K4', 'G7', 'S4', '0.95', '0.18', '2018-06-27 16:08:53', '2018-06-27 16:08:53'),
(44, 'K5', 'G7', 'S5', '0.15', '0.88', '2018-06-27 16:09:21', '2018-06-27 16:09:21'),
(45, 'K4', 'G8', 'S4', '0.12', '0.78', '2018-06-27 16:10:30', '2018-06-27 16:10:30'),
(46, 'K5', 'G8', 'S5', '0.44', '0.45', '2018-06-27 16:10:55', '2018-06-27 16:10:55'),
(47, 'K4', 'G9', 'S4', '0.91', '0.87', '2018-06-27 16:11:42', '2018-06-27 16:11:42'),
(48, 'K5', 'G9', 'S5', '0.39', '0.13', '2018-06-27 16:12:06', '2018-06-27 16:12:06'),
(49, 'K4', 'G10', 'S4', '0.72', '0.31', '2018-06-27 16:12:38', '2018-06-27 16:12:38'),
(50, 'K5', 'G10', 'S5', '0.78', '0.85', '2018-06-27 16:13:48', '2018-06-27 16:13:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejalas`
--

CREATE TABLE `gejalas` (
  `kd` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `gejalas`
--

INSERT INTO `gejalas` (`kd`, `nama`, `created_at`, `updated_at`) VALUES
('G01', 'Demam', '2018-06-12 23:10:54', '2018-06-12 23:10:54'),
('G10', 'Sakit Gigi', '2018-06-12 23:13:39', '2018-06-12 23:13:39'),
('G2', 'Sakit Kepala', '2018-06-12 23:11:03', '2018-06-12 23:11:03'),
('G3', 'Batuk', '2018-06-12 23:12:21', '2018-06-12 23:12:21'),
('G4', 'Hidung Tersumbat', '2018-06-12 23:12:37', '2018-06-12 23:12:37'),
('G5', 'Letih dan Lesu', '2018-06-12 23:12:49', '2018-06-12 23:12:55'),
('G6', 'Hidung Meler', '2018-06-12 23:13:04', '2018-06-12 23:13:04'),
('G7', 'Nyeri Leher', '2018-06-12 23:13:18', '2018-06-12 23:13:18'),
('G8', 'Suara Serak', '2018-06-12 23:13:25', '2018-06-12 23:13:25'),
('G9', 'Dahi Sakit', '2018-06-12 23:13:32', '2018-06-12 23:13:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerusakans`
--

CREATE TABLE `kerusakans` (
  `kd` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `kerusakans`
--

INSERT INTO `kerusakans` (`kd`, `nama`, `created_at`, `updated_at`) VALUES
('K01', 'Contract Ulcers', '2018-06-12 23:13:56', '2018-06-12 23:13:56'),
('K2', 'Barotitis Media', '2018-06-12 23:14:06', '2018-06-12 23:14:06'),
('K3', 'Deviasi Septum', '2018-06-12 23:14:17', '2018-06-12 23:14:17'),
('K4', 'Laringatis', '2018-06-12 23:14:32', '2018-06-12 23:14:32'),
('K5', 'Osteoklerosis', '2018-06-12 23:14:47', '2018-06-12 23:14:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_11_16_063320_add_column_kontak_on_users_table', 1),
(4, '2016_11_17_030021_create_gejalas_table', 1),
(5, '2016_11_17_030156_create_kerusakans_table', 1),
(6, '2016_11_17_030210_create_solusis_table', 1),
(7, '2016_11_17_084247_create_aturans_table', 1),
(8, '2016_11_19_061158_create_riwayats_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayats`
--

CREATE TABLE `riwayats` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kontak` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kerusakan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gejala` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `solusi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kepastian` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nilai` decimal(4,3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `riwayats`
--

INSERT INTO `riwayats` (`id`, `nama`, `email`, `kontak`, `kerusakan`, `gejala`, `solusi`, `kepastian`, `nilai`, `created_at`, `updated_at`) VALUES
(6, 'Khamim', NULL, NULL, 'Laringatis', 'Demam.<br>Nyeri Leher.<br>', 'solusi 4.<br>', 'KEMUNGKINAN BESAR', '0.652', '2018-06-27 16:14:16', '2018-06-27 16:15:25'),
(7, 'Pomade', NULL, NULL, 'Contract Ulcers', 'Batuk.<br>Demam.<br>Nyeri Leher.<br>', 'Penderita diharuskan istirahat berbicara atau berbicara seperlunya minimal selama 6 minggu.<br>', 'KEMUNGKINAN BESAR', '0.639', '2018-06-27 16:16:03', '2018-06-27 16:16:25'),
(8, 'Nanang', NULL, NULL, 'Deviasi Septum', 'Hidung Tersumbat.<br>Nyeri Leher.<br>', 'solusi 3.<br>', 'TIDAK TAHU', '0.277', '2018-06-27 16:24:35', '2018-06-27 16:25:59'),
(13, 'Nova Cahyani', NULL, NULL, 'Osteoklerosis', 'Dahi Sakit.<br>Demam.<br>', 'solusi 5.<br>', 'KEMUNGKINAN BESAR', '0.508', '2018-06-29 09:55:16', '2018-06-29 09:56:35'),
(14, 'Imron', NULL, NULL, 'Osteoklerosis', 'Hidung Meler.<br>Hidung Tersumbat.<br>', 'solusi 5.<br>', 'KEMUNGKINAN BESAR', '0.573', '2018-07-01 18:51:11', '2018-07-01 18:51:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `solusis`
--

CREATE TABLE `solusis` (
  `kd` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `solusis`
--

INSERT INTO `solusis` (`kd`, `nama`, `created_at`, `updated_at`) VALUES
('S01', 'Penderita diharuskan istirahat berbicara atau berbicara seperlunya minimal selama 6 minggu', '2018-06-27 14:51:00', '2018-06-27 14:51:00'),
('S2', 'solusi 2', '2018-06-27 15:02:37', '2018-06-27 15:02:37'),
('S3', 'solusi 3', '2018-06-27 15:02:51', '2018-06-27 15:02:51'),
('S4', 'solusi 4', '2018-06-27 15:03:25', '2018-06-27 15:03:25'),
('S5', 'solusi 5', '2018-06-27 15:03:44', '2018-06-27 15:03:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kontak` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `kontak`) VALUES
(2, 'admin', 'admin@admin.com', '$2y$10$Ce0O50YJ4/Xuaq/Z9THjSeOe55oKHVI4FPN15kEYibWRNEGJJj/Wm', 'exuxWe4KmY18ut43gb9WFoqsOwDi6lVtdZFiQjBBRh3i9gKofPI6XqYk9NJL', '2018-06-12 23:07:02', '2020-07-25 05:41:11', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aturans`
--
ALTER TABLE `aturans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aturans_kerusakan_kd_foreign` (`kerusakan_kd`),
  ADD KEY `aturans_gejala_kd_foreign` (`gejala_kd`),
  ADD KEY `aturans_solusi_kd_foreign` (`solusi_kd`);

--
-- Indeks untuk tabel `gejalas`
--
ALTER TABLE `gejalas`
  ADD PRIMARY KEY (`kd`);

--
-- Indeks untuk tabel `kerusakans`
--
ALTER TABLE `kerusakans`
  ADD PRIMARY KEY (`kd`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indeks untuk tabel `riwayats`
--
ALTER TABLE `riwayats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `solusis`
--
ALTER TABLE `solusis`
  ADD PRIMARY KEY (`kd`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aturans`
--
ALTER TABLE `aturans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `riwayats`
--
ALTER TABLE `riwayats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aturans`
--
ALTER TABLE `aturans`
  ADD CONSTRAINT `aturans_gejala_kd_foreign` FOREIGN KEY (`gejala_kd`) REFERENCES `gejalas` (`kd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aturans_kerusakan_kd_foreign` FOREIGN KEY (`kerusakan_kd`) REFERENCES `kerusakans` (`kd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aturans_solusi_kd_foreign` FOREIGN KEY (`solusi_kd`) REFERENCES `solusis` (`kd`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
