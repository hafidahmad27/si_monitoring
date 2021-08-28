-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2021 at 08:10 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_monitoring_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tanggal_absensi` date NOT NULL,
  `alasan` varchar(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_absensi`
--

INSERT INTO `tb_absensi` (`id_absensi`, `id_tahun_ajaran`, `id_siswa`, `tanggal_absensi`, `alasan`, `keterangan`) VALUES
(1, 2, 10, '2021-07-12', 'Alpa', '-'),
(2, 2, 1, '2021-07-06', 'Sakit', 'Demam, dirawat di RS'),
(3, 2, 9, '2021-06-23', 'Izin', 'Acara Keluarga'),
(4, 2, 11, '2021-06-07', 'Izin', 'Perpanjangan SIM'),
(5, 2, 6, '2021-06-04', 'Sakit', 'cedera, dirawat di rumah'),
(6, 2, 9, '2021-05-31', 'Sakit', 'Asma, dirawat di rumah'),
(7, 2, 13, '2021-05-17', 'Sakit', 'Pusing'),
(8, 2, 18, '2021-05-07', 'Sakit', 'Panu'),
(9, 2, 4, '2021-04-14', 'Alpa', '-'),
(11, 2, 16, '2021-03-10', 'Izin', 'tidur'),
(12, 1, 4, '2021-01-18', 'Izin', 'Acara keluarga'),
(13, 1, 22, '2020-11-19', 'Alpa', '-'),
(14, 1, 4, '2020-10-05', 'Sakit', 'panas, rawat inap'),
(15, 3, 4, '2021-08-18', 'Alpa', 'ke warung'),
(16, 1, 9, '2021-08-23', 'Sakit', 'Asma');

-- --------------------------------------------------------

--
-- Table structure for table `tb_catatan_pelanggaran`
--

CREATE TABLE `tb_catatan_pelanggaran` (
  `id_catatan_pelanggaran` int(11) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_pelanggaran_tatib` int(11) NOT NULL,
  `id_tindakan` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_catatan_pelanggaran`
--

INSERT INTO `tb_catatan_pelanggaran` (`id_catatan_pelanggaran`, `id_tahun_ajaran`, `id_siswa`, `id_pelanggaran_tatib`, `id_tindakan`, `tanggal`) VALUES
(1, 2, 10, 8, 4, '2021-07-29'),
(2, 2, 8, 5, 3, '2021-07-09'),
(3, 2, 1, 1, 1, '2021-07-04'),
(4, 2, 10, 3, 3, '2021-06-22'),
(5, 2, 14, 3, 3, '2021-06-05'),
(6, 2, 4, 3, 4, '2021-06-24'),
(7, 2, 7, 5, 1, '2021-05-10'),
(8, 2, 16, 2, 4, '2021-05-27'),
(9, 2, 4, 1, 1, '2021-05-03'),
(10, 2, 7, 1, 3, '2021-04-28'),
(11, 2, 9, 8, 1, '2021-04-09'),
(12, 2, 18, 5, 3, '2021-04-01'),
(13, 2, 4, 5, 1, '2021-03-31'),
(14, 2, 4, 1, 1, '2021-03-29'),
(15, 2, 1, 8, 4, '2021-03-04'),
(16, 1, 4, 1, 2, '2021-01-11'),
(17, 1, 9, 8, 4, '2020-12-23'),
(18, 1, 4, 8, 3, '2020-11-25'),
(19, 1, 4, 2, 3, '2020-10-07'),
(20, 3, 4, 4, 4, '2021-08-18'),
(21, 2, 4, 2, 4, '2021-08-18'),
(22, 1, 9, 2, 1, '2021-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_pembayaran`
--

CREATE TABLE `tb_jenis_pembayaran` (
  `id_jenis_pembayaran` int(11) NOT NULL,
  `jenis_pembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenis_pembayaran`
--

INSERT INTO `tb_jenis_pembayaran` (`id_jenis_pembayaran`, `jenis_pembayaran`) VALUES
(1, 'DOP (Dana Operasional Pendidikan)'),
(2, 'Tabungan Wajib');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `id_pegawai`, `nama_kelas`) VALUES
(1, 5, 'X BDP 1'),
(2, 6, 'X BDP 2'),
(3, 7, 'XI BDP 1'),
(5, 8, 'XI BDP 2'),
(6, 9, 'XII BDP 1'),
(7, 10, 'XII BDP 2'),
(8, 11, 'X MM 1'),
(10, 12, 'X MM 2'),
(11, 13, 'XI MM 1'),
(12, 14, 'XI MM 2'),
(13, 15, 'XII MM 1'),
(14, 16, 'XII MM 2'),
(15, 17, 'X TKKR 1'),
(16, 18, 'X TKKR 2'),
(17, 19, 'XI TKKR 1'),
(18, 20, 'XI TKKR 2'),
(19, 21, 'XII TKKR 1'),
(20, 22, 'XII TKKR 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nama_pegawai`, `telepon`) VALUES
(1, 'Rachman Arief', '08170483572'),
(3, 'Pita Putri', '088822224456'),
(4, 'Indah Putri', '087745465657'),
(5, 'wali kelas x bdp 1', '082134561234'),
(6, 'wali kelas x bdp 2', '08165373'),
(7, 'wali kelas xi bdp 1', '08125235'),
(8, 'wali kelas xi bdp 2', '08172425'),
(9, 'wali kelas xii bdp 1', '08127425'),
(10, 'wali kelas xii bdp 2', '087565732'),
(11, 'wali kelas x mm 1', '081241432'),
(12, 'wali kelas x mm 2', '087412582'),
(13, 'wali kelas xi mm 1', '08122152'),
(14, 'wali kelas xi mm 2', '081252159'),
(15, 'wali kelas xii mm 1', '08332852'),
(16, 'wali kelas xii mm 2', '08212583'),
(17, 'wali kelas x tkkr 1', '03109525'),
(18, 'wali kelas x tkkr 2', '03145678'),
(19, 'wali kelas xi tkkr 1', '087675353'),
(20, 'wali kelas xi tkkr 2', '03125329'),
(21, 'wali kelas xii tkkr 1', '0314284254'),
(22, 'wali kelas xii tkkr 2', '085632748');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggaran_tatib`
--

CREATE TABLE `tb_pelanggaran_tatib` (
  `id_pelanggaran_tatib` int(11) NOT NULL,
  `bentuk_pelanggaran` varchar(150) NOT NULL,
  `poin` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelanggaran_tatib`
--

INSERT INTO `tb_pelanggaran_tatib` (`id_pelanggaran_tatib`, `bentuk_pelanggaran`, `poin`) VALUES
(1, 'Terlambat masuk sekolah', 10),
(2, 'Membolos/tidak masuk tanpa keterangan 1 hari', 20),
(3, 'Tidak mengikuti pelajaran tanpa ijin', 30),
(4, 'Mencuri barang milik orang lain', 50),
(5, 'Pakaian seragam tidak sesuai ketentuan yang ditetapkan oleh sekolah', 20),
(6, 'Potongan rambut tidak sesuai dengan aturan sekolah', 10),
(7, 'Menjadi pelaku perkelahian/provokator', 50),
(8, 'Merokok di area sekolah', 40);

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `no_induk` int(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `id_kelas`, `no_induk`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telp`) VALUES
(1, 1, 1401, 'Andhika Pratama', 'Laki-Laki', 'Surabaya', '2002-04-02', 'Jalan Pesapen Utara No. 112, Surabaya', '087712345678'),
(3, 12, 1439, 'Eva Anisawati', 'Perempuan', 'Surabaya', '1998-06-05', 'Jl. Jagir Sidomukti No. 22, Surabaya', '081234567890'),
(4, 13, 1419, 'Ahmad Hafid Holy Saputra', 'Laki-Laki', 'Pacitan', '1999-01-27', 'Jl. Kalijudan 1 No. 24\r\nKel. Kalijudan, Kec. Genteng\r\nSurabaya, Jawa Timur', '087834581787'),
(6, 11, 1676, 'Dinda Rahmadani Putri', 'Perempuan', 'Surabaya', '1999-01-17', 'Medokan Semampir Tengah No 75, Surabaya', '087863668900'),
(7, 1, 1495, 'Laila Abidatul Amanah', 'Perempuan', 'Lamongan', '1999-05-05', 'Jl. Gunung Anyar Harapan VII No. 88, Surabaya', '081245675678'),
(8, 11, 1501, 'Wahyu Atta Masruroh', 'Perempuan', 'Jombang', '1998-09-30', 'Medokan Sawah No. 33, Surabaya', '087733455656'),
(9, 3, 1578, 'Raditya Pratama', 'Laki-Laki', 'Surabaya', '2000-01-01', 'Medayu Utara XXX, No. 69, Surabaya', '0881361851'),
(10, 13, 1503, 'Chandra Wardhana', 'Laki-Laki', 'Sidoarjo', '1999-04-24', 'Pondok Candra Wardana Indah No. 21, Sidoarjo', '08823456789'),
(11, 13, 1983, 'Muhammad Farezra', 'Laki-Laki', 'Sidoarjo', '1999-05-25', 'Jl. Sedati Agung 25, Sidoarjo', '087645452323'),
(12, 10, 1498, 'Firdausi Rahmadani', 'Perempuan', 'Surabaya', '1998-12-23', 'Jl. Menur Pumpungan No. 3, Surabaya', '081255674321'),
(13, 8, 1502, 'Dinivi Widyianti', 'Perempuan', 'Pacitan', '1998-11-02', 'Jl. Tanjung Sari No. 21, Pacitan', '085672131611'),
(14, 1, 1465, 'Jonathan Sutejo', 'Laki-Laki', 'Mojokerto', '2000-10-04', 'Medokan Sawah No. 23\r\nKel. Medokan Ayu, Kec. Rungkut\r\nSurabaya, Jawa Timur', '087765434321'),
(15, 1, 7765, 'Adit Saputra', 'Laki-Laki', 'Washington', '1998-08-08', 'Jemur Wonosari Gg. Lebar No. 1\r\nKel. Wonocolo, Kec. Jemursari\r\nSurabaya, Jawa Timur', '087123453452'),
(16, 12, 3432, 'Bowo Ardiansyah', 'Laki-Laki', 'Surabaya', '2021-04-28', 'Wiyuuuuuuuuuuuuuuuung', '087648483737'),
(18, 12, 1595, 'Muhammad Haris Setiawan Adhi Mifta', 'Laki-Laki', 'Mojokerto', '1999-08-25', 'Jl. Raya Mojosari Pacet Kutorejo, No. 50', '087734565678'),
(21, 11, 1999, 'Saputra Hafid Ahmad', 'Laki-Laki', 'Trenggalek', '1999-11-27', 'Jl. Kalijudan No. 1, Surabaya', '0314567890'),
(22, 5, 1324, 'Ikhza Ainun Fiima', 'Laki-Laki', 'Jember', '1999-01-14', 'Jl. Medokan Kampung No. 4, Surabaya', '085734234859'),
(23, 13, 1122, 'Andre Setyanto', 'Laki-Laki', 'Semarang', '2002-02-10', 'Jl. Kapas Krampung No.4, Surabaya', '087822334545'),
(24, 20, 1997, 'Anandita', 'Perempuan', 'Bandung', '2003-10-15', 'Jl. Gunung Anyar Timur IV No 40, Surabaya', '0312215520');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tahun_ajaran`
--

CREATE TABLE `tb_tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL,
  `nama_tahun_ajaran` varchar(16) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tahun_ajaran`
--

INSERT INTO `tb_tahun_ajaran` (`id_tahun_ajaran`, `nama_tahun_ajaran`, `status`) VALUES
(1, '2020/2021 Gasal', 0),
(2, '2020/2021 Genap', 1),
(3, '2021/2022 Gasal', 0),
(4, '2021/2022 Genap', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tindakan`
--

CREATE TABLE `tb_tindakan` (
  `id_tindakan` int(11) NOT NULL,
  `nama_tindakan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tindakan`
--

INSERT INTO `tb_tindakan` (`id_tindakan`, `nama_tindakan`) VALUES
(1, 'Peringatan lisan oleh guru dan petugas ketertiban'),
(2, 'Pembinaan oleh guru, wali kelas dan BK'),
(3, 'Pernyataan tertulis'),
(4, 'SP 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tunggakan_pembayaran`
--

CREATE TABLE `tb_tunggakan_pembayaran` (
  `id_tunggakan_pembayaran` int(11) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_jenis_pembayaran` int(11) NOT NULL,
  `bulan` int(2) NOT NULL,
  `tahun` int(4) NOT NULL,
  `biaya_pembayaran` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tunggakan_pembayaran`
--

INSERT INTO `tb_tunggakan_pembayaran` (`id_tunggakan_pembayaran`, `id_tahun_ajaran`, `id_siswa`, `id_jenis_pembayaran`, `bulan`, `tahun`, `biaya_pembayaran`) VALUES
(1, 2, 1, 1, 1, 2021, 200000),
(2, 2, 9, 1, 11, 2020, 200000),
(3, 2, 1, 1, 5, 2021, 100000),
(4, 2, 1, 2, 4, 2021, 50000),
(5, 2, 1, 2, 7, 2021, 10000),
(6, 2, 9, 2, 9, 2021, 50000),
(7, 1, 9, 2, 10, 2021, 10000),
(8, 2, 4, 2, 12, 2020, 30000),
(9, 1, 4, 1, 3, 2021, 176000),
(10, 1, 4, 2, 9, 2021, 30000),
(14, 1, 4, 2, 1, 2021, 222),
(15, 2, 4, 1, 3, 2021, 8000),
(16, 2, 9, 1, 2, 2021, 30000),
(17, 1, 9, 2, 12, 2020, 15000),
(18, 2, 13, 1, 1, 2020, 10000),
(19, 2, 14, 2, 2, 2021, 30000),
(20, 2, 3, 1, 10, 2021, 999999999);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `id_pegawai`, `username`, `password`, `level`) VALUES
(1, 1, 'admin', 'admin', 'admin'),
(2, 3, 'pita', '123', 'guru_bk'),
(3, 4, 'indah', '456', 'staff_tu'),
(4, 5, 'xbdp1', 'xbdp1', 'wali_kelas'),
(5, 6, 'xbdp2', 'xbdp2', 'wali_kelas'),
(6, 7, 'xibdp1', 'xibdp1', 'wali_kelas'),
(7, 8, 'xibdp2', 'xibdp2', 'wali_kelas'),
(8, 9, 'xiibdp1', 'xiibdp1', 'wali_kelas'),
(9, 10, 'xiibdp2', 'xiibdp2', 'wali_kelas'),
(10, 11, 'xmm1', 'xmm1', 'wali_kelas'),
(11, 12, 'xmm2', 'xmm2', 'wali_kelas'),
(12, 13, 'ximm1', 'ximm1', 'wali_kelas'),
(13, 14, 'ximm2', 'ximm2', 'wali_kelas'),
(14, 15, 'xiimm1', 'xiimm1', 'wali_kelas'),
(15, 16, 'xiimm2', 'xiimm2', 'wali_kelas'),
(16, 17, 'xtkkr1', 'xtkkr1', 'wali_kelas'),
(17, 18, 'xtkkr2', 'xtkkr2', 'wali_kelas'),
(18, 19, 'xitkkr1', 'xitkkr1', 'wali_kelas'),
(19, 20, 'xitkkr2', 'xitkkr2', 'wali_kelas'),
(20, 21, 'xiitkkr1', 'xiitkkr1', 'wali_kelas'),
(21, 22, 'xiitkkr2', 'xiitkkr2', 'wali_kelas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Indexes for table `tb_catatan_pelanggaran`
--
ALTER TABLE `tb_catatan_pelanggaran`
  ADD PRIMARY KEY (`id_catatan_pelanggaran`),
  ADD KEY `tb_catatan_pelanggaran_ibfk_1` (`id_siswa`),
  ADD KEY `id_pelanggaran_tatib` (`id_pelanggaran_tatib`),
  ADD KEY `id_tindakan` (`id_tindakan`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Indexes for table `tb_jenis_pembayaran`
--
ALTER TABLE `tb_jenis_pembayaran`
  ADD PRIMARY KEY (`id_jenis_pembayaran`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_pelanggaran_tatib`
--
ALTER TABLE `tb_pelanggaran_tatib`
  ADD PRIMARY KEY (`id_pelanggaran_tatib`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `no_induk` (`no_induk`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `tb_tahun_ajaran`
--
ALTER TABLE `tb_tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun_ajaran`);

--
-- Indexes for table `tb_tindakan`
--
ALTER TABLE `tb_tindakan`
  ADD PRIMARY KEY (`id_tindakan`);

--
-- Indexes for table `tb_tunggakan_pembayaran`
--
ALTER TABLE `tb_tunggakan_pembayaran`
  ADD PRIMARY KEY (`id_tunggakan_pembayaran`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_jenis_pembayaran` (`id_jenis_pembayaran`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_catatan_pelanggaran`
--
ALTER TABLE `tb_catatan_pelanggaran`
  MODIFY `id_catatan_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_jenis_pembayaran`
--
ALTER TABLE `tb_jenis_pembayaran`
  MODIFY `id_jenis_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_pelanggaran_tatib`
--
ALTER TABLE `tb_pelanggaran_tatib`
  MODIFY `id_pelanggaran_tatib` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_tahun_ajaran`
--
ALTER TABLE `tb_tahun_ajaran`
  MODIFY `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_tindakan`
--
ALTER TABLE `tb_tindakan`
  MODIFY `id_tindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_tunggakan_pembayaran`
--
ALTER TABLE `tb_tunggakan_pembayaran`
  MODIFY `id_tunggakan_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD CONSTRAINT `tb_absensi_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`),
  ADD CONSTRAINT `tb_absensi_ibfk_2` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tb_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Constraints for table `tb_catatan_pelanggaran`
--
ALTER TABLE `tb_catatan_pelanggaran`
  ADD CONSTRAINT `tb_catatan_pelanggaran_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`),
  ADD CONSTRAINT `tb_catatan_pelanggaran_ibfk_2` FOREIGN KEY (`id_pelanggaran_tatib`) REFERENCES `tb_pelanggaran_tatib` (`id_pelanggaran_tatib`),
  ADD CONSTRAINT `tb_catatan_pelanggaran_ibfk_3` FOREIGN KEY (`id_tindakan`) REFERENCES `tb_tindakan` (`id_tindakan`),
  ADD CONSTRAINT `tb_catatan_pelanggaran_ibfk_4` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tb_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Constraints for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD CONSTRAINT `tb_kelas_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_pegawai` (`id_pegawai`);

--
-- Constraints for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`);

--
-- Constraints for table `tb_tunggakan_pembayaran`
--
ALTER TABLE `tb_tunggakan_pembayaran`
  ADD CONSTRAINT `tb_tunggakan_pembayaran_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`),
  ADD CONSTRAINT `tb_tunggakan_pembayaran_ibfk_2` FOREIGN KEY (`id_jenis_pembayaran`) REFERENCES `tb_jenis_pembayaran` (`id_jenis_pembayaran`),
  ADD CONSTRAINT `tb_tunggakan_pembayaran_ibfk_3` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tb_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_pegawai` (`id_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
