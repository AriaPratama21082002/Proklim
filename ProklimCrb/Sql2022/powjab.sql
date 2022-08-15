-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2022 pada 15.37
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

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
-- Struktur dari tabel `dataumum`
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
-- Dumping data untuk tabel `dataumum`
--

INSERT INTO `dataumum` (`id`, `judul_kegiatan`, `tanggal`, `durasi`, `jenis_kegiatan`, `tujuan_umum`, `tujuan_khusus`, `aksi`, `sektor`, `skema`, `pelaku`, `keterkaitan_program`, `alih_tekhnologi`, `peningkatan_kapasitas`, `status_pendanaan`, `tenaga_ahli`) VALUES
(1, 'Dinas Lingkungan Hidup', '2023-07-19', '3 Tahun', 'Aksi', 'Mensejeterahkan', 'Mensejaterahkan', 'mitigasi', 'Energi', 'Mitigasi Energi', 'Pemerintah Daerah', 'Green Building', 'Membutuhkan dan sudah memiliki', 'Membutuhkan dan sudah memiliki', 'mitigasi', 'Membutuhkan dan sudah memiliki'),
(3, 'Kebersihan', '2022-06-28', '3 Tahun', 'Aksi', 'Biar Bersih', 'Sehat ', 'mitigasi', 'Pertanian', 'Mitigasi Pertanian', 'Dunia Usaha', 'Proper', 'Membutuhkan dan belum memiliki', 'Membutuhkan dan sudah memiliki', 'mitigasi', 'Membutuhkan dan sudah memiliki'),
(4, 'RW 01 capt adi', '2022-07-04', '3 tahun', 'Aksi', 'menjaga lingkungan', 'menjaga cap adi', 'adaptasi', 'ketahanan pangan', 'Program Kampung Iklim(PROKLIM)', 'Intitusi/Lembag/Insiatif Lainnya', 'Proper', 'Membutuhkan dan sudah memiliki', 'Membutuhkan dan sudah memiliki', 'adaptasi', 'Membutuhkan dan belum memiliki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumenpendukung`
--

CREATE TABLE `dokumenpendukung` (
  `id` int(11) NOT NULL,
  `judul` varchar(120) NOT NULL,
  `keterangan` varchar(120) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokumenpendukung`
--

INSERT INTO `dokumenpendukung` (`id`, `judul`, `keterangan`, `foto`) VALUES
(1, 'Proklim', 'Lingkungan Hidup', 'dlh.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
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
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `jabatan`, `jalan_nomor_rt_rw`, `desa_kelurahan`, `kecamatan`, `kota_kabupaten`, `provinsi`, `no_telpn`, `email`, `password`, `role_id`) VALUES
(1, 'Admin', '', '', '', '', '', '', '', 'admin@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1),
(2, 'User', '', '', '', '', '', '', '', 'user@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2),
(8, 'Aria Pratama', 'MANAGER', '02/05', 'Kecapi', 'Harjamukti', 'Kota Cirebon', 'Jawa Barat', '081280696486', 'ariapratama850@gmail.com', '$2y$10$PnUlg3QdZK.jKE1WmouqKObPw.zr7uRtT8d4wUHdBxpdQpCuLfbSm', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dataumum`
--
ALTER TABLE `dataumum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dokumenpendukung`
--
ALTER TABLE `dokumenpendukung`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_email_unique` (`email`),
  ADD KEY `login_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dataumum`
--
ALTER TABLE `dataumum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `dokumenpendukung`
--
ALTER TABLE `dokumenpendukung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `login_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
