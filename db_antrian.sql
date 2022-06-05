-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 10:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_antrian`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `gambar` varchar(255) NOT NULL DEFAULT 'default.png',
  `theme` varchar(20) NOT NULL DEFAULT 'sb_admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `nama`, `status`, `gambar`, `theme`) VALUES
(2, 'admin@admin.com', 'admin', 'admin', 1, 'default.png', 'sb_admin'),
(3, 'aldi18si@mahasiswa.pcr.ac.id', 'aldisaputra', 'Aldi Saputra', 1, 'default.png', 'sb_admin');

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id_antrian` int(4) NOT NULL,
  `tgl_antrian` date NOT NULL,
  `no_antrian` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id_antrian`, `tgl_antrian`, `no_antrian`) VALUES
(1, '2022-01-14', 1),
(2, '2022-01-04', 1),
(3, '2022-01-13', 1),
(4, '2022-01-13', 2),
(5, '2022-01-13', 3),
(6, '2022-01-13', 4),
(7, '2022-01-13', 5),
(8, '2022-01-13', 6),
(9, '2022-01-13', 7),
(10, '2022-01-13', 8);

-- --------------------------------------------------------

--
-- Table structure for table `antrian_layanan`
--

CREATE TABLE `antrian_layanan` (
  `id` bigint(20) NOT NULL,
  `id_antrian` int(4) NOT NULL,
  `id_pengguna` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_layanan` int(2) NOT NULL,
  `no_antrian_layanan` int(11) NOT NULL,
  `time` time DEFAULT NULL,
  `tgl_antrian_layanan` date NOT NULL,
  `updated_date` datetime DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `kehadiran` enum('hadir','belum') DEFAULT NULL,
  `nama_loket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antrian_layanan`
--

INSERT INTO `antrian_layanan` (`id`, `id_antrian`, `id_pengguna`, `nama`, `id_layanan`, `no_antrian_layanan`, `time`, `tgl_antrian_layanan`, `updated_date`, `status`, `kehadiran`, `nama_loket`) VALUES
(1, 0, 16, 'Aldi Saputra', 7, 1, NULL, '2022-01-14', NULL, '0', 'belum', 0),
(2, 0, 16, 'Aldi Saputra', 5, 1, NULL, '2022-01-04', NULL, '0', 'belum', 0),
(3, 0, 16, 'Aldi Saputra', 1, 1, '09:41:40', '2022-01-13', NULL, '0', 'belum', 0),
(4, 0, 16, 'Aldi Saputra', 1, 2, '09:41:49', '2022-01-13', NULL, '0', 'belum', 0),
(5, 0, 16, 'Aldi Saputra', 7, 3, '09:41:56', '2022-01-13', NULL, '0', 'belum', 0),
(6, 0, 16, 'Aldi Saputra', 1, 4, '09:43:00', '2022-01-13', NULL, '0', 'belum', 0),
(7, 0, 1, 'DPMPTSP', 2, 5, '09:43:11', '2022-01-13', NULL, '0', 'hadir', 0),
(8, 0, 1, 'DPMPTSP', 2, 6, '09:43:19', '2022-01-13', NULL, '0', 'hadir', 0),
(9, 0, 1, 'DPMPTSP', 17, 7, '10:01:12', '2022-01-13', NULL, '0', 'hadir', 0),
(10, 0, 1, 'DPMPTSP', 22, 8, '10:01:48', '2022-01-13', NULL, '0', 'hadir', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_layanan`
--

CREATE TABLE `kategori_layanan` (
  `id_layanan` int(2) NOT NULL,
  `kode_layanan` varchar(5) NOT NULL,
  `nama_layanan` varchar(100) NOT NULL,
  `jumlah_maksimal` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_layanan`
--

INSERT INTO `kategori_layanan` (`id_layanan`, `kode_layanan`, `nama_layanan`, `jumlah_maksimal`) VALUES
(1, 'BPDK', 'Bidang Perdagangan dan Koperasi', '30'),
(2, 'BPHG', 'Bidang Perhubungan', '30'),
(3, 'BSCL', 'Bidang Social', '30'),
(4, 'BTKJ', 'Bidang Tenaga Kerja', '30'),
(5, 'LHDK', 'Lingkungan Hidup dan Kehutanan', '30'),
(6, 'BKST', 'Bidang Kesehatan', '30'),
(7, 'BPRN', 'Bidang Perindustrian', '30'),
(8, 'BPNK', 'Bidang Peternakan', '30'),
(9, 'BPWT', 'Bidang Pariwisata', '30'),
(10, 'BSDM', 'Bidang Sumber Daya Mineral', '30'),
(11, 'BPPR', 'Bidang Pekerjaan Umum dan Penataan Ruang', '30'),
(12, 'BKDY', 'Bidang Kebudayaan', '30'),
(13, 'BKDP', 'Bidang Kelautan dan Perikanan', '30'),
(14, 'BPUN', 'Bidang Perkebunan', '30'),
(15, 'BTPH', 'Bidang Tanaman Pangan dan Holtikultura', '30'),
(16, 'BPDD', 'Bidang Pendidikan', '30'),
(17, 'NKBP', 'Non - Bidang Kesatuan Bangsa dan Politik', '30'),
(18, 'NBPK', 'Non - Bidang Perdagangan dan Koperasi', '30'),
(19, 'NBPH', 'Non - Bidang  Perhubungan', '30'),
(20, 'NBSC', 'Non - Bidang Sosial', '30'),
(21, 'NBTK', 'Non - Bidang Tenaga Kerja', '30'),
(22, 'NLHK', 'Non - Lingkungan Hidup dan Kehutanan', '30'),
(23, 'NBKT', 'Non - Bidang Kesehatan', '30'),
(24, 'NBPN', 'Non - Bidang Perindustrian', '30'),
(25, 'NBPT', 'Non - Bidang Peternakan', '30'),
(26, 'NBPW', 'Non - Bidang Pariwisata', '30'),
(27, 'NSDM', 'Non - Bidang Sumber Daya Mineral', '30'),
(28, 'NPPR', 'Non - Bidang Pekerjaan Umum dan Penataan Ruang', '30'),
(29, 'NBKY', 'Non - Bidang Kebudayaan', '30'),
(30, 'NBKP', 'Non - Bidang Kelautan dan Perikanan', '30'),
(31, 'NBPU', 'Non - Bidang Perkebunan', '30'),
(32, 'NTPH', 'Non - Bidang Tanaman Pangan dan Holtikultura', '30'),
(33, 'NBPD', 'Non - Bidang Pendidikan', '30'),
(34, 'PIRK', 'Pengambilan Izin atau Rekomendasi', '30');

-- --------------------------------------------------------

--
-- Table structure for table `loket`
--

CREATE TABLE `loket` (
  `id` int(11) NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 NOT NULL,
  `password` varchar(40) CHARACTER SET utf8 NOT NULL,
  `nama` varchar(40) CHARACTER SET utf8 NOT NULL,
  `loket` varchar(40) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `gambar` varchar(40) CHARACTER SET utf8 NOT NULL DEFAULT 'default.png',
  `theme` varchar(40) CHARACTER SET utf8 NOT NULL DEFAULT 'sb_loket'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loket`
--

INSERT INTO `loket` (`id`, `email`, `password`, `nama`, `loket`, `status`, `gambar`, `theme`) VALUES
(1, 'aldisaputra2205@gmail.com', '12345', 'Loket 1', '', 1, 'default.png', 'sb_loket');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(4) NOT NULL,
  `no_identitas` varchar(25) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(225) NOT NULL,
  `npwp` varchar(225) NOT NULL,
  `nama_perusahaan` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `no_identitas`, `nama`, `email`, `npwp`, `nama_perusahaan`, `alamat`, `no_telp`, `username`, `password`) VALUES
(1, '123456789', 'evi', 'Perempuan', '20190716', '', '<p>\n	pomad</p>\n', '082199252530', '', ''),
(3, 'wq', 'qwqw', 'Perempuan', '20190717', '', '<p>\n	sadas</p>\n', 'q', 'q', '7694f4a66316e53c8cdd9d9954bd611d'),
(4, '34567891234567', 'rafly', 'Laki-Laki', '19980403', '', 'Jl. Merdeka', '08587654323', 'raff', '123'),
(5, '988553322771', 'dwi', 'Laki-Laki', '19990322', '', 'Jl Bunga', '09584433221', 'dwi22', '12345'),
(6, '3479272653563', 'Aisyah', 'Perempuan', '20010611', '', 'Jl. Manis', '0838222445', 'ais', '2000'),
(7, '345678564567', 'Simon', 'Laki-Laki', '19970206', '', 'Jl. Mawar', '081319898213', 'sim', 'dia'),
(8, '998877665544', 'Putri', 'Perempuan', '20000827', '', 'Jl. Merpati', '081994321522', 'putput', '2000'),
(9, '4523467867845', 'Vio', 'Perempuan', '20030902', '', 'Jl Kuningan', '08225488006', 'vio', 'a591024321c5e2bdbd23ed35f0574dde'),
(10, '3425261782753', 'Josua', 'Laki-Laki', '19951102', '', 'Jl. Setia', '081316552245', 'jo', '3f088ebeda03513be71d34d214291986'),
(11, '12536383920282', 'silva', 'Perempuan', '19980104', '', 'Jl. Anggur', '0943527252461', 'silva98', '202cb962ac59075b964b07152d234b70'),
(12, '1224564324', 'vi', 'Laki-Laki', '19980305', '', 'Jl.merdeka', '082199252530', 'vi98', '202cb962ac59075b964b07152d234b70'),
(13, '34567891234567', 'rafly', '', '20190712', '', '', '', 'raff', 'ed474ee8e3b2f7c00e406d57c76c9638'),
(14, '34567891234567', 'meli', 'Perempuan', '19970804', '', 'jl.merpati', '09584433221', 'meli', '202cb962ac59075b964b07152d234b70'),
(15, '1471122205000001', 'Aldi Saputra', 'Laki-Laki', '20000522', '', 'Yos Sudarso', '087812279095', 'aldi', '5cf15fc7e77e85f5d525727358c0ffc9'),
(16, '1471122205000001', 'Aldi Saputra', 'Laki-Laki', '22220222', '', '22222', '22222', 'aldi2', '7e707ba0aa59c6b0ec17793712ae8307'),
(17, '1471122205000001', 'Aldi Saputra', 'aldisaputra2205@gmail.com', '22220212', '', 'Yos Sudarso. No.17', '', 'aldi1', '5cf15fc7e77e85f5d525727358c0ffc9'),
(18, '1471122205000001', 'Aldi Saputra', 'aldisaputra2205@gmail.com', '1132312', 'sxczxcz', 'Yos Sudarso. No.17', '22222', 'aldi3', '84aec127233317716b0ce5b3bb1bf685'),
(19, '1471122205000001', 'Alisa', 'alisa@gmail.com', '1132312', 'sxczxcz', 'Yos Sudarso. No.17', '087812279095', 'alisa', '0e84db373d02b6beaa5b05510fb7a9a1'),
(20, '1471122205000001', 'Aldi Saputra', 'aldisaputra2205@gmail.com', '1132312', 'sxczxcz', 'Yos Sudarso. No.17', '087812279095', 'aldisaputra', '447fac5f8bdb0f03374f2ae17ed9d66b'),
(21, '1471122205000001', 'Aldi Saputra', 'aldisaputra2205@gmail.com', '1132312', 'sxczxcz', 'Yos Sudarso. No.17', '087812279095', 'aldisaputra', '447fac5f8bdb0f03374f2ae17ed9d66b'),
(22, '1471122205000001', 'Aldi Saputra', 'aldisaputra2205@gmail.com', '1132312', 'sxczxcz', 'Yos Sudarso. No.17', '087812279095', 'aldi3', '84aec127233317716b0ce5b3bb1bf685');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_antrian`
--

CREATE TABLE `tbl_antrian` (
  `id` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` smallint(6) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_antrian`
--

INSERT INTO `tbl_antrian` (`id`, `tanggal`, `no_antrian`, `status`, `updated_date`) VALUES
(1, '2021-11-04', 1, '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tjm_menu`
--

CREATE TABLE `tjm_menu` (
  `id` int(11) NOT NULL,
  `parent_menu` int(11) NOT NULL DEFAULT 1,
  `nama_menu` varchar(50) NOT NULL,
  `url_menu` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `urutan` tinyint(3) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `type` enum('Admin') NOT NULL DEFAULT 'Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tjm_menu`
--

INSERT INTO `tjm_menu` (`id`, `parent_menu`, `nama_menu`, `url_menu`, `icon`, `urutan`, `status`, `type`) VALUES
(1, 1, 'root', '/', '', 0, 0, 'Admin'),
(2, 1, 'dashboard', 'admin/dashboard', 'fa fa-fw fa-dashboard', 1, 1, 'Admin'),
(3, 1, 'User Admin', 'admin/useradmin', 'fa fa-users', 99, 1, 'Admin'),
(4, 1, 'Menu', 'admin/menu', 'fa fa-gear', 100, 1, 'Admin'),
(31, 1, 'Data Pengguna', 'admin/pengguna', 'glyphicon glyphicon-user', 2, 1, 'Admin'),
(32, 1, 'Data Layanan', 'admin/layanan', 'glyphicon glyphicon-list-alt', 3, 1, 'Admin'),
(33, 1, 'Antrian OSS dan NON-OSS', 'admin/antrian_layanan', 'glyphicon glyphicon-list', 4, 1, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indexes for table `antrian_layanan`
--
ALTER TABLE `antrian_layanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `antrian_poli_ibfk_1` (`id_layanan`);

--
-- Indexes for table `kategori_layanan`
--
ALTER TABLE `kategori_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `loket`
--
ALTER TABLE `loket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tjm_menu`
--
ALTER TABLE `tjm_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id_antrian` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `antrian_layanan`
--
ALTER TABLE `antrian_layanan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori_layanan`
--
ALTER TABLE `kategori_layanan`
  MODIFY `id_layanan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=378;

--
-- AUTO_INCREMENT for table `loket`
--
ALTER TABLE `loket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_antrian`
--
ALTER TABLE `tbl_antrian`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tjm_menu`
--
ALTER TABLE `tjm_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `antrian_layanan`
--
ALTER TABLE `antrian_layanan`
  ADD CONSTRAINT `antrian_layanan_ibfk_1` FOREIGN KEY (`id_layanan`) REFERENCES `kategori_layanan` (`id_layanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
