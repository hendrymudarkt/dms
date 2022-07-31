-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2019 at 01:57 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dms`
--

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` varchar(3) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alasan` text NOT NULL,
  `created_at` datetime NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `nik`, `nama`, `no_hp`, `jabatan`, `alasan`, `created_at`, `status`) VALUES
('001', '55555', 'Pengguna', '081361861111', 'IT Support', 'kkjkjkj', '2019-10-24 02:48:25', 'Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `file` text NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_dokumen` varchar(30) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `owner` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `judul`, `file`, `tanggal`, `jenis_dokumen`, `kategori`, `owner`) VALUES
(13, 'Ini adalah buku', 'DMS_Application_Sinergi.pdf', '2019-12-31', 'Manual dan Kebijakan', 'Dokumen Integrasi', 'Administrator'),
(14, 'Ini adalah buku', 'Panduan_DMS_(Karyawan).pdf', '2019-11-29', 'Prosedur', 'Dokumen Integrasi', 'Administrator'),
(15, 'Ini adalah buku', 'Panduan_DMS_(Manager).pdf', '2019-09-30', 'Instruksi Kerja', 'Dokumen Integrasi', 'Administrator'),
(16, 'Ini adalah buku', 'Panduan_DMS_(Administrator).pdf', '2019-10-29', 'Formulir', 'Dokumen Integrasi', 'Administrator'),
(17, 'Ini adalah buku', 'Playbook_For_Account_Executive_v1_4_Final.pdf', '2019-09-30', 'Regulasi', 'Dokumen Integrasi', 'Administrator'),
(18, 'Ini adalah buku', 'Ritase_-_IT_Policies_and_Procedures_Draft_(5).pdf', '2019-09-29', 'Dokumen Eksternal', 'Dokumen Integrasi', 'Administrator'),
(19, 'Labor MK', 'DTI-SOP-MR-002_Rencana_Perubahan_(1).pdf', '2019-11-30', 'Manual dan Kebijakan', 'Dokumen SMK3', 'Administrator'),
(20, 'SMK3', 'Ritase_-_IT_Policies_and_Procedures_Draft.pdf', '2019-12-06', 'Prosedur', 'Dokumen SMK3', 'Administrator'),
(21, 'SMK3 IK', 'ipi437592.pdf', '2019-12-31', 'Instruksi Kerja', 'Dokumen SMK3', 'Administrator'),
(22, 'SMK3', 'keuangan_256-639-2-PB.pdf', '2019-12-31', 'Formulir', 'Dokumen SMK3', 'Administrator'),
(23, 'SMK3 ', 'Keuangan_ipi440946_Heribertus_dkk.pdf', '2019-12-06', 'Dokumen Eksternal', 'Dokumen SMK3', 'Administrator'),
(24, 'SMK3', 'SI.pdf', '2019-12-31', 'Regulasi', 'Dokumen SMK3', 'Administrator'),
(25, 'Labor', 'SistemInformasiKeuangan.pdf', '2019-12-31', 'Manual dan Kebijakan', 'Dokumen Laboratorium', 'Administrator'),
(26, 'Labor', 'SNI_ISO-IEC_27001-2013_unlocked.pdf', '2019-12-06', 'Prosedur', 'Dokumen Laboratorium', 'Administrator'),
(27, 'Labor', 'AnnexIX1302.pdf', '2019-12-31', 'Instruksi Kerja', 'Dokumen Laboratorium', 'Administrator'),
(28, 'Labor FOr', 'DTI-SOP-MR-003_Komunikasi.pdf', '2019-12-31', 'Formulir', 'Dokumen Laboratorium', 'Administrator'),
(29, 'Labor Eks', 'DTI-SOP-MR-007_Tinjauan_manajemen.pdf', '2019-12-31', 'Regulasi', 'Dokumen Laboratorium', 'Administrator'),
(30, 'Labor Eks', 'DTI-SOP-MR-005_Pengendalian_masa_simpan_catatan-Dokumen.pdf', '2019-08-31', 'Dokumen Eksternal', 'Dokumen Laboratorium', 'Administrator'),
(31, 'Tes SMP', 'SOP-TECH-001-00-Disain_dan_Pengembangan.pdf', '2019-12-09', 'Manual dan Kebijakan', 'Dokumen SMP', 'Administrator'),
(32, 'Tes SMP Prosedur', 'SOP-TECH-002-00-Quality_Assurance.pdf', '2019-12-09', 'Prosedur', 'Dokumen SMP', 'Administrator'),
(33, 'Tes Prosedur IK', 'SOP-SE-001-00-Manajemen_Proyek.pdf', '2019-12-09', 'Instruksi Kerja', 'Dokumen SMP', 'Administrator'),
(34, 'Tes SMP Fr', '1.jpg', '2019-12-09', 'Formulir', 'Dokumen SMP', 'Administrator'),
(35, 'Tes SMP DE', '2.jpg', '2019-12-09', 'Dokumen Eksternal', 'Dokumen SMP', 'Administrator'),
(36, 'Tes SMP R', '3.jpg', '2019-12-09', 'Regulasi', 'Dokumen SMP', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `insiden_ketidaksesuaian`
--

CREATE TABLE `insiden_ketidaksesuaian` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `area` varchar(50) NOT NULL,
  `insiden` varchar(30) NOT NULL,
  `file` text NOT NULL,
  `penjelasan` varchar(30) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `dibuat` varchar(50) NOT NULL,
  `bagian` varchar(50) NOT NULL,
  `ditujukan` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `nama`) VALUES
(3, '0'),
(4, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(4, 'NEXTAR'),
(5, 'Administrator'),
(6, 'NEXTAR');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pengguna` varchar(255) NOT NULL,
  `tipe` int(1) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `waktu`, `pengguna`, `tipe`, `keterangan`) VALUES
(1, '2019-12-06 07:11:30', 'admin', 2, 'Administrator menambahkan insiden'),
(2, '2019-12-06 07:15:51', 'admin', 2, 'Administrator menambahkan insiden'),
(3, '2019-12-06 07:16:57', 'admin', 4, 'Administrator menghapus insiden'),
(4, '2019-12-06 07:17:35', 'admin', 4, 'Administrator menghapus insiden'),
(5, '2019-12-06 07:20:22', 'admin', 2, 'Administrator menambahkan dokumen Ini adalah buku'),
(6, '2019-12-06 07:25:59', 'admin', 2, 'Administrator menambahkan dokumen Ini adalah buku'),
(7, '2019-12-06 07:26:21', 'admin', 2, 'Administrator menambahkan dokumen Ini adalah buku'),
(8, '2019-12-06 07:26:48', 'admin', 2, 'Administrator menambahkan dokumen Ini adalah buku'),
(9, '2019-12-06 07:27:26', 'admin', 2, 'Administrator menambahkan dokumen Ini adalah buku'),
(10, '2019-12-06 07:27:52', 'admin', 2, 'Administrator menambahkan dokumen Ini adalah buku'),
(11, '2019-12-06 07:33:19', 'admin', 2, 'Administrator menambahkan dokumen Labor MK'),
(12, '2019-12-06 07:37:07', 'admin', 2, 'Administrator menambahkan dokumen SMK3'),
(13, '2019-12-06 07:38:38', 'admin', 2, 'Administrator menambahkan dokumen SMK3 IK'),
(14, '2019-12-06 07:39:02', 'admin', 2, 'Administrator menambahkan dokumen SMK3'),
(15, '2019-12-06 07:39:54', 'admin', 2, 'Administrator menambahkan dokumen SMK3 '),
(16, '2019-12-06 07:40:13', 'admin', 2, 'Administrator menambahkan dokumen SMK3'),
(17, '2019-12-06 07:42:15', 'admin', 2, 'Administrator menambahkan dokumen Labor'),
(18, '2019-12-06 07:44:06', 'admin', 2, 'Administrator menambahkan dokumen Labor'),
(19, '2019-12-06 07:44:31', 'admin', 2, 'Administrator menambahkan dokumen Labor'),
(20, '2019-12-06 07:45:16', 'admin', 2, 'Administrator menambahkan dokumen Labor FOr'),
(21, '2019-12-06 07:45:36', 'admin', 2, 'Administrator menambahkan dokumen Labor Eks'),
(22, '2019-12-06 07:46:19', 'admin', 2, 'Administrator menambahkan dokumen Labor Eks'),
(23, '2019-12-06 07:47:44', 'admin', 2, 'Administrator menambahkan insiden'),
(24, '2019-12-08 06:35:09', 'admin', 3, 'Administrator konfirmasi status insiden'),
(25, '2019-12-08 06:43:51', 'admin', 3, 'Administrator konfirmasi status insiden'),
(26, '2019-12-08 06:51:46', 'admin', 2, 'Administrator menambahkan insiden'),
(27, '2019-12-08 06:52:02', 'admin', 3, 'Administrator konfirmasi status insiden'),
(28, '2019-12-09 01:53:51', 'admin', 2, 'Administrator menambahkan dokumen Tes SMP'),
(29, '2019-12-09 01:55:37', 'admin', 2, 'Administrator menambahkan dokumen Tes SMP Prosedur'),
(30, '2019-12-09 01:55:58', 'admin', 2, 'Administrator menambahkan dokumen Tes Prosedur IK'),
(31, '2019-12-09 01:56:38', 'admin', 2, 'Administrator menambahkan dokumen Tes SMP Fr'),
(32, '2019-12-09 01:56:56', 'admin', 2, 'Administrator menambahkan dokumen Tes SMP DE'),
(33, '2019-12-09 01:57:20', 'admin', 2, 'Administrator menambahkan dokumen Tes SMP R');

-- --------------------------------------------------------

--
-- Table structure for table `stat_insiden`
--

CREATE TABLE `stat_insiden` (
  `id_stat` int(10) NOT NULL,
  `akar_masalah` varchar(255) NOT NULL,
  `koreksi` varchar(255) NOT NULL,
  `perbaikan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `file` text NOT NULL,
  `id_insiden` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stat_insiden`
--

INSERT INTO `stat_insiden` (`id_stat`, `akar_masalah`, `koreksi`, `perbaikan`, `tanggal`, `file`, `id_insiden`) VALUES
(3, 'AE', 'RT', 'DF', '2019-12-10', 'Microsoft_WindowsInsiderProgram_Wallpaper.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat_keluar` int(10) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `pertalian_nomor` varchar(20) NOT NULL,
  `catatan` varchar(50) NOT NULL,
  `lampiran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surat_keluar`, `nama_pengirim`, `tanggal`, `alamat`, `isi`, `pertalian_nomor`, `catatan`, `lampiran`) VALUES
(3, 'Kepala Bidang ADPIN', '2019-06-06', 'KABAAG. Kab. Sinjunjung', '<p>Berita Acara</p>', '11086/PW-08/901', 'Tidak Ada', '73CD357D-D0D2-4F3A-B573-47DA3C8AB9C5.png'),
(4, 'Kepala Bidang ADPIN', '2019-06-06', 'DALDUK Kab. Pasaman Barat', '<p>Mohon Bantuan Tenaga Pelayanan Kampung KB</p>', '', 'Tidak Ada', 'akreditasi_prodi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(5) NOT NULL,
  `nomor_berikut` varchar(10) NOT NULL,
  `pengirim` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `isi` text NOT NULL,
  `pertalian_nomor` varchar(30) NOT NULL,
  `lampiran` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat_masuk`, `nomor_berikut`, `pengirim`, `tanggal`, `nomor`, `isi`, `pertalian_nomor`, `lampiran`, `email`, `status`) VALUES
(9, '001', 'BKKBN PUSAT', '2019-06-04', '359/PK.04/F4/2019', '<p>Laporan Poster UPPTS di Kampung KB</p>', 'Kepala Bidang KS/PK', '5AF2C4B0-36B6-42DA-9DCA-E57CC88C8BD6.png', 'hafid@gmail.com', 'f'),
(10, '002', 'DALDUK Kab. Solok Selatan', '2019-06-12', 'SRT/001/007/090', '<p>Umpan Balik Pembinaan UPPK</p>', 'Kepala Bidang DALDUK', 'Annotation_2019-06-14_112352.png', 'hendrymudarkt@gmail.com', 't'),
(11, '003', 'DALDUK Kab. Payakumbuh', '2019-06-05', 'SRT/001/007/565', '<p>Surat Permohonan Dana Masyarakat Kampung KB</p>', 'Kepala Bidang DALDUK', 'Annotation_2019-06-14_1123521.png', 'lokapermatasari55@gmail.com', 't');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `departemen` varchar(30) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nik`, `nama`, `username`, `password`, `departemen`, `level`) VALUES
(1, '1', 'Administrator', 'admin', '3c53f3f084b4f8a34c2cade7a1876f27daea5a4e7035601f2b6cdff191329b023b2ae2aa764040a35a3bfcb78e3a2f64fd0381634bd45cee820f7d14ffede3c2isSfdJygSsGYFQvbkhWDRPVPhCp90gIszbZdnkiNrCM=', 'Tech', 1),
(8, '55555', 'Pengguna', 'user', '63417039b19365c788b62fe9a836c1d8e0136592e2d36b6f1b8bfaa88bfac6f66ef6e3fb84c39444d9518136b19e2f0703dd0ba7fd338e762082ebfdf02fd86aDCE1oWp7eoFsUYpdW8twz80d1Q9dueMgT0S9G2yU8fw=', 'Tech', 3),
(9, '1234', 'Manager', 'manager', '01fcd5bb3e297a72caf8838876286035a2369c8e31c442ca85d301dcabd1757d4283fd1e0f1d0ca21c03efce332b7af39bcd69a3f9905a4a506569ad24f2aa62kpjLdKF/+G+1QTyy1d+BbAC40bYnceazsdyGKehPxmw=', 'Tech', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `insiden_ketidaksesuaian`
--
ALTER TABLE `insiden_ketidaksesuaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stat_insiden`
--
ALTER TABLE `stat_insiden`
  ADD PRIMARY KEY (`id_stat`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `insiden_ketidaksesuaian`
--
ALTER TABLE `insiden_ketidaksesuaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `stat_insiden`
--
ALTER TABLE `stat_insiden`
  MODIFY `id_stat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat_keluar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat_masuk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
