-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 11:53 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kmipn`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pengirim` bigint(20) UNSIGNED NOT NULL,
  `id_penerima` bigint(20) UNSIGNED NOT NULL,
  `pesan` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cocok`
--

CREATE TABLE `cocok` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_ketemu` bigint(20) UNSIGNED NOT NULL,
  `id_kehilangan` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cocok`
--

INSERT INTO `cocok` (`id`, `id_ketemu`, `id_kehilangan`, `status`) VALUES
(3, 2, 1, 'paired'),
(5, 5, 3, 'paired'),
(6, 5, 3, 'paired');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jenis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`id`, `nama_jenis`) VALUES
(1, 'Dompet'),
(2, 'Barang Elektronik'),
(3, 'Dokumen Penting');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jenis` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pelapor` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_hilang` date DEFAULT NULL,
  `tanggal_laporan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `id_jenis`, `nama`, `deskripsi`, `foto`, `lokasi`, `id_pelapor`, `status`, `tanggal_hilang`, `tanggal_laporan`) VALUES
(1, 1, 'Dompet LA', 'Warna Cokelat Dll', 'hilang/QsdRYm5dXxNgP5jUdj01onc62iBBZpfgxNysKXVa.png', 'Sekitar Kampus POLINEMA', 1, 'ditemukan', '2021-06-15', '2021-06-16'),
(2, 1, 'Dompet', 'Warna cokelat', 'hilang/4UV0wqy20MooRzWVcmQAOU5J7D0vveIHgOnuotsd.png', 'Kampus Biru', 1, 'dicocokkan', '2021-06-17', '2021-06-16'),
(3, 3, 'mie', 'nadksdnksndkksaknkalsndksnadklnd', 'hilang/PpoCLQJVzml8J2zitcxOrnEdj3E92iPNwcLngqrU.jpg', 'toko', 4, 'ditemukan', '2021-06-18', '2021-06-16'),
(4, 2, 'setan', 'adjhkhawudhuwhduwad', 'hilang/q2umITUDWmk1ed2FhpJYqGgRF4y6mwEtNse1XWPd.jpg', 'neraka', 4, 'hilang', '2021-06-25', '2021-06-16'),
(5, 3, 'Mie', 'Enak bet pokoknya', 'hilang/Om2m3FDBUvymBWhWuuELk9Cjol9aYb8pw8izVAZc.jpg', 'Ruang bootcamp', 3, 'dicocokkan', '2021-06-16', '2021-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(20) NOT NULL,
  `nama_level` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `nama_level`) VALUES
(1, 'admin'),
(2, 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_15_060701_level', 2),
(5, '2021_06_15_060713_laporan', 2),
(6, '2021_06_15_060722_chat', 2),
(7, '2021_06_15_060729_cocok', 2),
(8, '2021_06_15_060735_jenis_barang', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NIK` int(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` int(20) NOT NULL,
  `foto` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identitas` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_level` int(20) NOT NULL DEFAULT 2,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unverified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `NIK`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `alamat`, `no_hp`, `foto`, `identitas`, `id_level`, `status`) VALUES
(1, 123456543, 'admin', 'admin@admin.com', NULL, '$2y$10$7KP3oGREJTYgU1s2Xi9Z.OEuxeDfc/OoC9sUcyUMbrXUOKX5xuuGu', NULL, '2021-06-13 01:22:44', '2021-06-15 21:29:23', 'Jln.asdasdasd', 0, 'foto/HA13xpWOzm5D6xZJObihdONaFyxftTPCBVXeFtE8.png', 'img/NnTm6UZNyKtvd2Gt9BEwQJgKHfsqXnjcHlbyKzWB.jpg', 1, 'filled'),
(2, NULL, 'ahmad', 'ahmad@ahmad.com', NULL, '$2y$10$xD1Yom8u9D9M8J.cX.lWkub0e91fLh1Uf90jzC1ZUCYOpSuNPwcpW', NULL, '2021-06-15 01:59:49', '2021-06-15 01:59:49', NULL, 1234567, NULL, NULL, 2, 'unverified'),
(3, 7581, 'alwi', 'alwi@alwi.com', NULL, '$2y$10$dHkKBhvi/BuBBL/uJ3eJy.CfP2JBgmvNDUZxBXmujw/wcuJ0nPddC', NULL, '2021-06-16 01:19:35', '2021-06-16 01:33:11', 'Akajdha', 245, 'foto/NjT1CtIN6o866ztDlI87tMwRp8Dh0ren7oVW6rSw.jpg', 'img/ttqYHSytbA9nLls8Xbg7csb2oQWsXwzHkX32gVD4.jpg', 2, 'filled'),
(4, 12345, 'Abdul', 'abdul@abdul.com', NULL, '$2y$10$g6ksioK29yhx1h6Ppefkx.PmUh7w9sWVQVGISSbXh3mDxk1kzMJdq', NULL, '2021-06-16 01:21:12', '2021-06-16 01:33:46', 'haskhakshakhsa', 123, 'foto/GqpZyIhSL2sqENzCjnrPXhqFZGTCklOq5mstTsXT.jpg', 'img/tf8J8YKq5hwvvukfcOc3uvscTKQRK3lHp678QaJm.png', 2, 'filled');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penerima` (`id_penerima`),
  ADD KEY `id_pengirim` (`id_pengirim`);

--
-- Indexes for table `cocok`
--
ALTER TABLE `cocok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kehilangan` (`id_kehilangan`),
  ADD KEY `id_ketemu` (`id_ketemu`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_pelapor` (`id_pelapor`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `NIK` (`NIK`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cocok`
--
ALTER TABLE `cocok`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`id_penerima`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`id_pengirim`) REFERENCES `users` (`id`);

--
-- Constraints for table `cocok`
--
ALTER TABLE `cocok`
  ADD CONSTRAINT `cocok_ibfk_1` FOREIGN KEY (`id_kehilangan`) REFERENCES `laporan` (`id`),
  ADD CONSTRAINT `cocok_ibfk_2` FOREIGN KEY (`id_ketemu`) REFERENCES `laporan` (`id`);

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_barang` (`id`),
  ADD CONSTRAINT `laporan_ibfk_2` FOREIGN KEY (`id_pelapor`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
