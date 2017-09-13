-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2017 at 04:38 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `barang_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`barang_id`, `kategori_id`, `nama_barang`, `harga`) VALUES
(49, 26, 'Setrika Express (5 Jam)', 12000),
(50, 27, 'Karpet Rumah/M2', 15000),
(48, 26, 'Setrika Kilat(1 Hari)', 9000),
(47, 26, 'Setrika Regular(2 Hari)', 6000),
(46, 26, 'Cuci Kering Express (5 Jam)', 15000),
(45, 26, 'Cuci Kering Kilat (1 Hari)', 9000),
(38, 26, 'Cuci Komplit 5 Jam - Laundry Express 5 Jam Selesai', 20000),
(42, 26, 'Cuci Komplit Kilat - Laundry 1 Hari Selesai', 15000),
(43, 26, 'Cuci Komplit Regular (2 Hari)', 8000),
(44, 26, 'Cuci Kering Regular (2 Hari)', 6000),
(52, 27, 'Kasur Palembang', 40000),
(53, 27, 'Gorden Tebal/M2', 10000),
(54, 27, 'Gorden Tipis/M2', 7500),
(55, 27, 'Vitrage/M2', 5000),
(56, 28, 'Sofa Standar (per Dudukan )', 45000),
(57, 28, 'Sofa Bed (per Dudukan )', 150000),
(58, 28, 'Sofa Jumbo (per Dudukan )', 200000),
(59, 28, 'Kursi Kantor/Tamu (per Dudukan)', 45000),
(60, 28, 'Kursi Direktur (per Dudukan)', 150000),
(61, 28, 'Kursi Makan (per Dudukan)', 50000),
(62, 28, 'Kursi & Sofa Kulit (per Seat)', 100000),
(63, 28, 'Jok Mobil(per Seat)', 50000),
(64, 28, 'Spring Bed ukuran 200x200 (per Kasur)', 350000),
(65, 28, 'Spring Bed ukuran 180x200 (per Kasur)', 300000),
(66, 28, 'Spring Bed ukuran 160x200 (per Kasur)', 250000),
(67, 28, 'Spring Bed ukuran 120x200 (per Kasur)', 200000),
(68, 28, 'Spring Bed ukuran 90x200 (per Kasur)', 150000),
(69, 28, 'Kasur Latex (per Kasur)', 200000),
(70, 29, 'Alas Bouncer', 35000),
(71, 29, 'Bouncer', 80000),
(72, 29, 'Baby Chair', 35000),
(73, 29, 'Car Seat', 75000),
(74, 29, 'Box Bayi', 150000),
(75, 29, 'Boneka Kecil <20 cm', 20000),
(76, 29, 'Boneka Besar(21-30 cm)', 30000),
(77, 29, 'Boneka Super Besar (>50 cm)', 50000),
(78, 29, 'Gendongan Bayi', 50000),
(79, 29, 'Koper', 75000),
(80, 29, 'Stroller Mini', 150000),
(81, 29, 'Stroller', 175000),
(82, 29, 'Stroller Twins', 250000),
(83, 30, 'Helm Modular 3/4', 18000),
(84, 30, 'Helm Full Face', 23000),
(85, 31, 'Sepatu Snekers', 25000),
(86, 31, 'Sepatu Kanvas', 25000),
(87, 31, 'Sepatu Wanita Kitten Hell', 25000),
(88, 31, 'Sepatu Suede', 30000),
(89, 31, 'Sepatu Leather', 35000),
(93, 31, 'Cuci Komplit Regular (2 Hari)', 0);

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) UNSIGNED NOT NULL,
  `captcha_time` int(10) UNSIGNED NOT NULL,
  `word` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `word`) VALUES
(585, 1495669164, 'gPztLz3X');

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `no_nota` varchar(10) NOT NULL,
  `berat` float NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `total_bayar` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `nama_kategori`) VALUES
(24, 'Batam'),
(26, 'Bandung'),
(28, 'TG.Pinang');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_barang`
--

INSERT INTO `kategori_barang` (`kategori_id`, `nama_kategori`) VALUES
(31, 'Laundry Sepatu'),
(30, 'Laundry Helm'),
(29, 'Laundry Perlengkapan Bayi'),
(28, 'Laundry Furniture'),
(27, 'Laundry Cuci Karpet'),
(26, 'Laundry Kiloan'),
(32, 'Laundry Satuan');

-- --------------------------------------------------------

--
-- Table structure for table `keluhaan_pelanggan`
--

CREATE TABLE `keluhaan_pelanggan` (
  `keluhaan_id` int(11) NOT NULL,
  `no_keluhan` varchar(10) NOT NULL,
  `no_pelanggan` varchar(10) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `nama_keluhaan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) DEFAULT NULL,
  `komentar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama`, `email`, `website`, `komentar`) VALUES
(1, 'Lingga Adi', 'linggaadi@gmail.com', 'http://linggaadi.net', 'Keren websitenya gan!');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `lokasi_id` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text,
  `telp` varchar(20) NOT NULL,
  `latittude` text,
  `longitude` text,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`lokasi_id`, `kategori`, `nama`, `alamat`, `telp`, `latittude`, `longitude`, `gambar`) VALUES
(16, 25, 'Outlet#1', 'Jalan Raja Ali Haji,Batam,Kepri', '+6247321867', '', '', ''),
(17, 24, 'Outlet#2', 'Jalan Beruntung,Batam,Kepri', '+62353538', '', '', ''),
(11, 28, 'Outlet#3', 'Jalan Ahmad dani,TG.Pinang,Kepri', '(0471) 326438', '', '', ''),
(15, 25, 'Outlet#4', 'Jalan Singgigaraja,Jakarta', '+6265432', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `p_detail_id` int(11) NOT NULL,
  `no_pesanan` varchar(10) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `telp` varchar(12) DEFAULT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggal_pesanan` date DEFAULT NULL,
  `antar_jemput` enum('ya','tidak') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`p_detail_id`, `no_pesanan`, `nama`, `telp`, `alamat`, `tanggal_pesanan`, `antar_jemput`) VALUES
(45, 'P-004', 'Karyo', '07777242899', 'Batam Center', '2017-04-27', 'ya'),
(47, 'P-005', 'Bayu', '089010200', 'Batu Ampar', '2017-06-02', 'ya'),
(40, 'P-001', 'Lingga Adi', '081276114950', 'tg.buntung', '2017-05-02', 'ya'),
(41, 'P-002', 'Alif', '085675665', 'Batu Aji', '2017-05-18', 'tidak'),
(44, 'P-003', 'Akbar', '0812618414', 'Tiban', '2017-05-30', 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `pesanan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`pesanan_id`, `user_id`) VALUES
(9, 4),
(10, 4),
(11, 4),
(12, 4),
(13, 4),
(14, 4),
(15, 4),
(16, 4),
(17, 4),
(18, 4),
(19, 4),
(20, 4),
(21, 4),
(22, 4),
(23, 4),
(24, 4),
(25, 4),
(26, 4),
(0, 4),
(0, 17),
(0, 4),
(0, 4),
(0, 4),
(0, 17),
(0, 4),
(0, 4),
(0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_detail`
--

CREATE TABLE `pesanan_detail` (
  `p_detail_id` int(11) NOT NULL,
  `no_nota` varchar(10) NOT NULL,
  `nama_cabang` varchar(255) NOT NULL,
  `no_pelanggan` varchar(10) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `tanggal_bayar` date DEFAULT NULL,
  `bayar` int(11) NOT NULL,
  `antar_jemput` enum('ya','tidak') NOT NULL,
  `status_barang` enum('Sudah_diambil','belum_diambil') DEFAULT NULL,
  `status` enum('0','1') NOT NULL COMMENT '1= sudah diproses , 0 belum diproses'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan_detail`
--

INSERT INTO `pesanan_detail` (`p_detail_id`, `no_nota`, `nama_cabang`, `no_pelanggan`, `barang_id`, `jumlah`, `pesanan_id`, `harga`, `alamat`, `tanggal_masuk`, `tanggal_selesai`, `tanggal_bayar`, `bayar`, `antar_jemput`, `status_barang`, `status`) VALUES
(44, 'T-003', 'Transaksi Online', 'P-003', 50, 1, 26, 9000, 'Tiban', '2017-05-30', '2017-06-02', '2017-05-30', 100000, 'ya', 'Sudah_diambil', '1'),
(41, 'T-002', 'Outlet#3	', 'P-002', 43, 4, 26, 8000, 'Tiban', '2017-05-18', '2017-05-20', '2017-05-18', 100000, 'ya', 'Sudah_diambil', '1'),
(40, 'T-001', 'Outlet#2	', 'P-001', 49, 2, 26, 12000, 'tg.buntung', '2017-05-02', '2017-05-02', '2017-05-02', 50000, 'ya', 'Sudah_diambil', '1'),
(45, 'T-004', 'Outlet#3	', 'P-004', 43, 10, 26, 8000, 'Batam Center', '2017-04-27', '2017-05-28', '2017-05-25', 30000, 'ya', 'belum_diambil', '1'),
(47, 'T-005', 'Outlet#2	', 'P-005', 89, 2, 26, 35000, 'Batu Ampar', '2017-06-02', '2017-06-02', '2017-06-02', 100000, 'ya', 'belum_diambil', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `last_login` date NOT NULL,
  `level` enum('pegawai','pemilik','pelanggan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama_lengkap`, `username`, `email`, `password`, `last_login`, `level`) VALUES
(4, 'pemilik', 'pemilik', 'pemilik@laundry.com', '58399557dae3c60e23c78606771dfa3d', '2017-05-25', 'pemilik'),
(9, 'pegawai', 'pegawai', 'pegawai@laundry.com', '047aeeb234644b9e2d4138ed3bc7976a', '2017-05-16', 'pegawai'),
(17, 'pengguna', 'pengguna', 'users@laundry.com', '8b097b8a86f9d6a991357d40d3d58634', '2017-05-25', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`barang_id`);

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`),
  ADD KEY `word` (`word`);

--
-- Indexes for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD PRIMARY KEY (`no_nota`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`kategori_id`),
  ADD UNIQUE KEY `nama_kategori` (`nama_kategori`);

--
-- Indexes for table `keluhaan_pelanggan`
--
ALTER TABLE `keluhaan_pelanggan`
  ADD PRIMARY KEY (`keluhaan_id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`lokasi_id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`p_detail_id`);

--
-- Indexes for table `pesanan_detail`
--
ALTER TABLE `pesanan_detail`
  ADD PRIMARY KEY (`p_detail_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `barang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` bigint(13) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=586;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `keluhaan_pelanggan`
--
ALTER TABLE `keluhaan_pelanggan`
  MODIFY `keluhaan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `lokasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `p_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `pesanan_detail`
--
ALTER TABLE `pesanan_detail`
  MODIFY `p_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
