-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 Okt 2018 pada 16.34
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contactus`
--

INSERT INTO `contactus` (`id`, `nama`, `email`, `subject`, `message`, `created_date`) VALUES
(0, 'aplikasi', 'dono@gmail.com', 'joko', '2222', '2018-10-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `phone` int(12) DEFAULT NULL,
  `mobile` int(14) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `hobby` varchar(20) DEFAULT NULL,
  `alamat` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`id`, `nama_file`, `first_name`, `last_name`, `phone`, `mobile`, `email`, `location`, `hobby`, `alamat`) VALUES
(82, '43140785_281464575796402_6502317569720975360_n (1).jpg', 'robert', 'kwan', 2147483647, 2147483647, 'dono@gmail.com', 'www@gmail.com', 'main', 'JL Pukat 6 No. 25'),
(81, '10000.jpg', 'robert', 'kwan', 2147483647, 2147483647, 'dono@gmail.com', 'www@gmail.com', 'main', 'JL Pukat 6 No. 25'),
(78, '10000.jpg', 'dono', 'kwan', 2147483647, 2147483647, 'dono@gmail.com', 'www@gmail.com', 'main', 'JL Pukat 6 No. 25'),
(79, '10000.jpg', 'robert', 'kwan', 2147483647, 2147483647, 'dono@gmail.com', 'www@gmail.com', 'main', 'JL Pukat 6 No. 25'),
(80, '1.jpg', 'robert', 'kwan', 2147483647, 2147483647, 'dono@gmail.com', 'www@gmail.com', 'main', 'JL Pukat 6 No. 25'),
(77, '10000.jpg', 'joko', 'kwan', 2147483647, 2147483647, 'robetkwan@gmail.com', 'www@gmail.com', 'main', 'JL Pukat 6 No. 25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi` varchar(3000) NOT NULL,
  `waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `img` varchar(35) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `isi` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list`
--

INSERT INTO `list` (`id`, `img`, `nama`, `isi`) VALUES
(1, '1.png', 'Aplikasi Web', 'Aplikasi Ujian Online'),
(2, '2.png', 'Aplikasi Web', 'Aplikasi Rawat Jalan'),
(3, '3.jpg', 'Aplikasi Dekstop', 'Aplikasi Koperasi'),
(4, '4.jpg', 'Aplikasi Dekstop', 'Aplikasi Nilai Siswa'),
(5, '5.jpg', 'Aplikasi Web', 'Aplikasi Rental Mobil'),
(6, '6.png', 'Aplikasi Web', 'Aplikasi Kredit Motor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jlhpesanan` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `img`, `nama`, `jlhpesanan`, `harga`) VALUES
(1, '1.png', 'aplikasi', '3', '300000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reply`
--

CREATE TABLE `reply` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi` varchar(3000) NOT NULL,
  `waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'admin', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-09-23 11:20:12'),
(2, 'robet', 'robetkwan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-09-23 11:22:27'),
(3, 'joko', 'joko@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-09-23 11:34:44'),
(4, 'dono', 'dono@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-09-23 12:11:37'),
(5, 'sio', 'sio@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-10-02 14:43:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
