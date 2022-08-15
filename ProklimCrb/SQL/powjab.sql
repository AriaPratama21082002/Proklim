-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 02:34 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `powjab`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataumum`
--

CREATE TABLE `dataumum` (
  `id` int(11) NOT NULL,
  `judul_kegiatan` varchar(120) NOT NULL,
  `tanggal` varchar(120) NOT NULL,
  `durasi` varchar(120) NOT NULL,
  `jenis_kegiatan` varchar(120) NOT NULL,
  `tujuan_umum` text NOT NULL,
  `tujuan_khusus` text NOT NULL,
  `aksi` varchar(250) NOT NULL,
  `sektor` varchar(120) NOT NULL,
  `skema` varchar(120) NOT NULL,
  `pelaku` varchar(120) NOT NULL,
  `keterkaitan_program` varchar(250) NOT NULL,
  `alih_tekhnologi` varchar(120) NOT NULL,
  `peningkatan_kapasitas` varchar(120) NOT NULL,
  `status_pendanaan` varchar(120) NOT NULL,
  `tenaga_ahli` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataumum`
--

INSERT INTO `dataumum` (`id`, `judul_kegiatan`, `tanggal`, `durasi`, `jenis_kegiatan`, `tujuan_umum`, `tujuan_khusus`, `aksi`, `sektor`, `skema`, `pelaku`, `keterkaitan_program`, `alih_tekhnologi`, `peningkatan_kapasitas`, `status_pendanaan`, `tenaga_ahli`) VALUES
(1, 'Dinas Lingkungan Hidup', '2023-07-19', '3 Tahun', 'Sumber Daya', 'Mensejeterahkan', 'Mensejaterahkan', 'mitigasi', 'Energi', 'Mitigasi Energi', 'Pemerintah Pusat', 'Proper', 'Membutuhkan dan sudah memiliki', 'Membutuhkan dan sudah memiliki', 'mitigasi', 'Membutuhkan dan sudah memiliki');

-- --------------------------------------------------------

--
-- Table structure for table `dokumenpendukung`
--

CREATE TABLE `dokumenpendukung` (
  `id` int(11) NOT NULL,
  `judul` varchar(120) NOT NULL,
  `keterangan` varchar(120) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumenpendukung`
--

INSERT INTO `dokumenpendukung` (`id`, `judul`, `keterangan`, `foto`) VALUES
(1, 'Proklim', 'Mantap', 'index2.jpg'),
(2, 'yuyu', 'MAntapppppppppppppppp', 'No_4.png');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `kota_kabupaten` varchar(120) NOT NULL,
  `kecamatan` varchar(120) NOT NULL,
  `provinsi` varchar(120) NOT NULL,
  `kelurahan_desa` varchar(120) NOT NULL,
  `dusun_rw` varchar(120) NOT NULL,
  `penanggung_jawab` varchar(120) NOT NULL,
  `no_hp` varchar(120) NOT NULL,
  `latitude` varchar(120) NOT NULL,
  `longtitude` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jalan_nomor_rt_rw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa_kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telpn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `jabatan`, `jalan_nomor_rt_rw`, `desa_kelurahan`, `kecamatan`, `kota_kabupaten`, `provinsi`, `no_telpn`, `email`, `password`, `role_id`) VALUES
(1, 'Admin', '', '', '', '', '', '', '', 'admin@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1),
(2, 'User', '', '', '', '', '', '', '', 'user@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2),
(4, 'ahmadfauzi', 'direktur', 'Kesunean', 'Kedawung', 'kesambi', 'Cirebon', 'Jabar', '07878', 'ahmadfauzi@gmail.com', '$2y$10$WW79.dXXCkva8Txcg.Lre.RAP4OCsD5mK/aJUpLDSlphkU5opldcS', 2),
(5, 'ahmad faiz', '', '', '', '', '', '', '', 'ahmadfaiz@gmail.com', '$2y$10$0gvq5Jqg3ArLwkJd2Jcyauy8m7OBvULNWsX2o.K7XPOok4NquHM8i', 2),
(6, 'ahmad faiz', '', '', '', '', '', '', '', 'ahmadfaisasu@gmail.com', '$2y$10$kRl4PKQ2QV8BZ0O/o6tOD.cBoXvvICzR..dfRXLWontDwnpBUj9LK', 2),
(7, 'n', 'j', 'rt', 'd', 'k', 'kab', 'prov', 'hp', 'ajen@gmail.com', '$2y$10$Kubn6y0VUo0H5Goq7DIT8OHLA6A7WGuCk2mBOpE0MeZAz610CnwDq', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataumum`
--
ALTER TABLE `dataumum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumenpendukung`
--
ALTER TABLE `dokumenpendukung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_email_unique` (`email`),
  ADD KEY `login_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataumum`
--
ALTER TABLE `dataumum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dokumenpendukung`
--
ALTER TABLE `dokumenpendukung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `login_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
