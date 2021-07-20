-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 06:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul_thread` varchar(255) NOT NULL,
  `tanggal_komen` varchar(255) NOT NULL,
  `isi_komen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `gambar`, `judul_thread`, `tanggal_komen`, `isi_komen`) VALUES
(7, 'csd', '', 'iPhone SE (2020) Discussion', '28/04/2020', 'reply akan menambah reply'),
(8, 'csd', '', 'iPhone SE (2020) Discussion', '28/04/2020', 'Aku tidak suka iPhone'),
(9, 'ibepurba', '', 'iPhone SE (2020) Discussion', '28/04/2020', 'Hmm ijin nyimak gan.... :)'),
(10, 'ibepurba', '', 'iPhone SE (2020) Discussion', '28/04/2020', 'Menurut saya bagus juga ulasan ente.'),
(11, 'zefas', '', 'iPhone SE (2020) Discussion', '28/04/2020', 'Reviewnya bagus.'),
(12, 'ibepurba', '', 'Samsung Galaxy S20 Ultra', '28/04/2020', 'Mending beli Laptop baru gan -_-'),
(13, 'zefas', '', 'Laptop rekomendasi harga 10jt.', '28/04/2020', 'Coba cari di BEC sob'),
(14, 'ibepurba', '', 'Smartwatch yang bagus buat olahraga', '29/04/2020', 'Xiaomi miBand kalo mau yang murah gan.'),
(15, 'ibepurba', '', 'Smartwatch untuk berenang', '29/04/2020', 'ga tau om, mungkin bawah ane tahu'),
(16, 'ibepurba', '', 'Test', '29/04/2020', 'Test komentar.'),
(17, 'csd', '', 'Giveaway laptop gratis', '29/04/2020', 'anjir kena troll'),
(18, 'zefas', '', 'Perkenalan', '29/04/2020', 'Halo Chris, namaku Zefanya! Salam kenal kawan karibku!'),
(19, 'zefas', '', 'Laptop rekomendasi harga 10jt.', '30/04/2020', 'bec lantai 3 ya'),
(20, 'zefas', '', 'Samsung Galaxy S20 Ultra', '30/04/2020', 'bagus gak sih hapenya?'),
(21, 'csd', '', 'Laptop rekomendasi harga 10jt.', '01/05/2020', 'ASUS ROG boleh coba sih, spek gahar'),
(22, 'csd', '', 'Apakabar Advan Smartphone Indonesia', '01/05/2020', 'Advan udah ga laku gan');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `namaawal` char(30) DEFAULT NULL,
  `namaakhir` char(30) DEFAULT NULL,
  `phone` char(30) DEFAULT NULL,
  `email` char(30) DEFAULT NULL,
  `pesanmasalah` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `namaawal`, `namaakhir`, `phone`, `email`, `pesanmasalah`) VALUES
(1, 'Christian', 'Satya', '081573682750', 'christiansatyadharma.csd@gmail', 'saya lupa password tolong kirim verifikasi password ke email saya'),
(2, 'Christian', 'Satya', '081573682750', 'christiansatyadharma.csd@gmail', 'saya lupa password tolong kirim verifikasi password ke email saya'),
(43, 'Antonius', 'Baskoro', '082215189939', 'haleluya@gmail.com', 'Web nya masih ada bug di bagian tertentu gan, tolong dibenahi'),
(47, 'Geri', 'Sutanto', '028229928484', 'densel@gmail.com', 'Ini banyak masalah. tolong diperbaiki di bagian konten'),
(49, 'Zefanya', 'Sendri', '082215189939', 'zefanyawiloso@gmail.com', 'Website nya sudah bagus , boleh hubungi saya untuk kerjasam?');

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `topik` varchar(30) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_thread` varchar(255) NOT NULL,
  `tanggal_posting` varchar(255) NOT NULL,
  `reply` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`id`, `nama`, `gambar`, `topik`, `judul`, `isi_thread`, `tanggal_posting`, `reply`, `views`) VALUES
(6, 'csd', NULL, 'Smartphone', 'iPhone SE (2020) Discussion', 'Test', '28/04/2020', 6, 49),
(7, 'zefas', NULL, 'Smartphone', 'Samsung Galaxy S20 Ultra', 'Guys ane punya duit 20 juta. Kira2 worth it gak ganti hape ke Samsung Galaxy S20? Komen dong!', '28/04/2020', 3, 31),
(9, 'ibepurba', NULL, 'Laptop/PC', 'Laptop rekomendasi harga 10jt.', 'Gais aku butuh saran nih laptop bagus buat gaming/programming sekitaran 10 juta apa yang bagus ya?', '28/04/2020', 4, 51),
(10, 'zefas', NULL, 'Smartwatch', 'Smartwatch yang bagus buat olahraga', 'Ada yang punya rekomendasi bagus?', '28/04/2020', 2, 7),
(11, 'csd', NULL, 'Others', 'Perkenalan', 'Nama saya Christian Satya Dharma. Biasa dipanggil Chris, pertama kali join di forum ini. Salken ya.', '28/04/2020', 2, 12),
(12, 'csd', NULL, 'Smartwatch', 'Smartwatch untuk berenang', 'Gais ada yang punya rekomendasi jam tangan bagus yang waterproof(ip68) Biar bisa dipake buat renang? Komen ya!', '28/04/2020', 2, 11),
(13, 'ibepurba', NULL, 'Others', 'Test', 'Ini cuman buat testing membuat thread. Harap maklum.', '29/04/2020', 2, 3),
(14, 'ibepurba', NULL, 'Laptop/PC', 'Giveaway laptop gratis', 'Link giveaway.\r\nhttps://www.youtube.com/watch?v=dQw4w9WgXcQ', '29/04/2020', 2, 4),
(15, 'zefas', NULL, 'Smartphone', 'Apakabar Advan Smartphone Indonesia', '2020, Realme Xiaomi Oppo menguasain pasar Indonesia, bagaimana menurut kalian para netizen forum DOPE?', '30/04/2020', 2, 5),
(16, 'zefas', NULL, 'Laptop/PC', 'ACER Biru', 'Acer saya rusak', '30/04/2020', 1, 2),
(17, 'zefas', NULL, 'Smartphone', 'Mi 10 Pro 2020', 'Kira kira Xiaomi Mi 10 Pro bakal keluar di Indonesia gak yah..', '01/05/2020', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `username` varchar(18) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `post` int(11) DEFAULT NULL,
  `join_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `username`, `password`, `email`, `jk`, `post`, `join_date`) VALUES
(1, 'Zefanya Sendri', 'zefas', '$2y$10$aCWDItSPO1/ObviFylgKv.sVy/wP00X36LBdMWS3Tau5/mpYT30x2', 'zefanyawiloso@gmail.com', 'Laki', 10, '18/03/2020'),
(2, 'Zefanya Wiloso', 'zefan', '$2y$10$.4xfYEWi804D8fOAyG57NuUeYC2KrLyvr415gjOfyLSPkP0Bl1nEK', 'zefanyawiloso2@gmail.com', 'Laki', 0, '18/03/2020'),
(3, 'Hilbert Purba', 'ibepurba', '$2y$10$j6ok2PagczbYJluTYx.dBObuTCo0S8aC1mIj71sOSFLi4QLfGvMge', 'ibe@gmail.com', 'Laki', 10, '18/03/2020'),
(4, 'Christian Satya', 'csd', '$2y$10$o0qR1D1/uwy1emuf0AqjJOnlegiSpPQrTbPm8vxGNPtp8ZfptEejO', 'csd@gmail.com', 'Laki', 8, '18/03/2020');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
