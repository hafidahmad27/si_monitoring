-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 02:21 PM
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
(10, 2, 16, '2021-03-10', 'Izin', 'tidur'),
(11, 1, 10, '2021-01-18', 'Izin', 'Acara keluarga'),
(12, 1, 22, '2020-11-19', 'Alpa', '-'),
(13, 1, 4, '2020-10-05', 'Sakit', 'panas, rawat inap'),
(14, 1, 9, '2021-08-23', 'Sakit', 'Asma'),
(15, 2, 12, '2021-09-07', 'Sakit', 'fanas'),
(16, 3, 4, '2021-09-09', 'Izin', 'acara keluarga');

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
(1, 2, 10, 8, 2, '2021-07-29'),
(2, 2, 8, 5, 2, '2021-07-09'),
(3, 2, 1, 1, 1, '2021-07-04'),
(4, 2, 10, 3, 2, '2021-06-22'),
(5, 2, 14, 3, 3, '2021-06-05'),
(6, 2, 4, 3, 2, '2021-06-24'),
(7, 2, 7, 5, 1, '2021-05-10'),
(8, 2, 16, 2, 3, '2021-05-27'),
(9, 2, 4, 2, 1, '2021-05-03'),
(10, 2, 7, 1, 3, '2021-04-28'),
(11, 2, 9, 8, 1, '2021-04-09'),
(12, 2, 18, 5, 3, '2021-04-01'),
(13, 2, 4, 5, 1, '2021-03-31'),
(14, 2, 4, 4, 2, '2021-03-29'),
(15, 2, 1, 8, 2, '2021-03-04'),
(16, 1, 9, 8, 1, '2020-12-23'),
(17, 1, 4, 1, 1, '2020-10-07'),
(18, 1, 9, 2, 1, '2021-08-23'),
(19, 1, 12, 5, 1, '2021-09-07'),
(20, 2, 12, 7, 2, '2021-09-07');

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
  `id_pegawai` int(11) DEFAULT NULL,
  `nama_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `id_pegawai`, `nama_kelas`) VALUES
(1, 4, 'X BDP 1'),
(2, 5, 'X BDP 2'),
(3, 6, 'XI BDP 1'),
(4, 7, 'XI BDP 2'),
(5, 8, 'XII BDP 1'),
(6, 9, 'XII BDP 2'),
(7, 10, 'X MM 1'),
(8, 11, 'X MM 2'),
(9, 12, 'XI MM 1'),
(10, 13, 'XI MM 2'),
(11, 14, 'XII MM 1'),
(12, 15, 'XII MM 2'),
(13, 16, 'X TKKR 1'),
(14, 17, 'X TKKR 2'),
(15, 18, 'XI TKKR 1'),
(16, 19, 'XI TKKR 2'),
(17, 20, 'XII TKKR 1'),
(18, 21, 'XII TKKR 2');

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
(1, 'Admin', '08170483572'),
(2, 'Guru BK', '088822224456'),
(3, 'Staff TU', '087745465657'),
(4, 'wali kelas x bdp 1', '082134561234'),
(5, 'wali kelas x bdp 2', '08165373'),
(6, 'wali kelas xi bdp 1', '08125235'),
(7, 'wali kelas xi bdp 2', '08172425'),
(8, 'wali kelas xii bdp 1', '08127425'),
(9, 'wali kelas xii bdp 2', '087565732'),
(10, 'wali kelas x mm 1', '081241432'),
(11, 'wali kelas x mm 2', '087412582'),
(12, 'wali kelas xi mm 1', '08122152'),
(13, 'wali kelas xi mm 2', '081252159'),
(14, 'wali kelas xii mm 1', '08332852'),
(15, 'wali kelas xii mm 2', '08212583'),
(16, 'wali kelas x tkkr 1', '03109525'),
(17, 'wali kelas x tkkr 2', '03145678'),
(18, 'wali kelas xi tkkr 1', '087675353'),
(19, 'wali kelas xi tkkr 2', '03125329'),
(20, 'wali kelas xii tkkr 1', '0314284254'),
(21, 'wali kelas xii tkkr 2', '085632748');

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
(3, 2, 1439, 'Eva Anisawati', 'Perempuan', 'Surabaya', '1998-06-05', 'Jl. Jagir Sidomukti No. 22, Surabaya', '081234567890'),
(4, 11, 1419, 'Ahmad Hafid Holy Saputra', 'Laki-Laki', 'Pacitan', '1999-06-19', 'Jl. Sepanjang Aspal Raya No. 23, Surabaya', '087834581787'),
(6, 13, 1676, 'Dinda Rahmadani Putri', 'Perempuan', 'Surabaya', '1999-01-17', 'Medokan Semampir Tengah No 75, Surabaya', '087863668900'),
(7, 11, 1495, 'Laila Abidatul Amanah', 'Perempuan', 'Lamongan', '1999-05-05', 'Jl. Gunung Anyar Harapan VII No. 88, Surabaya', '081245675678'),
(8, 14, 1501, 'Wahyu Atta Masruroh', 'Perempuan', 'Jombang', '1998-09-30', 'Medokan Sawah No. 33, Surabaya', '087733455656'),
(9, 7, 1578, 'Raditya Pratama', 'Laki-Laki', 'Surabaya', '2000-01-01', 'Medayu Utara XXX, No. 69, Surabaya', '0881361851'),
(10, 7, 1503, 'Chandra Wardhana', 'Laki-Laki', 'Sidoarjo', '1999-04-24', 'Pondok Candra Wardana Indah No. 21, Sidoarjo', '08823456789'),
(11, 6, 1983, 'Muhammad Farezra', 'Laki-Laki', 'Sidoarjo', '1999-05-25', 'Jl. Sedati Agung 25, Sidoarjo', '087645452323'),
(12, 4, 1498, 'Rahma Firdausi', 'Perempuan', 'Surabaya', '1998-12-23', 'Jl. Menur Pumpungan No. 3, Surabaya', '081255674321'),
(13, 8, 1502, 'Dinivi Widyianti', 'Perempuan', 'Pacitan', '1998-11-02', 'Jl. Tanjung Sari No. 21, Pacitan', '085672131611'),
(14, 8, 1465, 'Jonathan Sutejo', 'Laki-Laki', 'Mojokerto', '2000-10-04', 'Medokan Sawah No. 23\r\nKel. Medokan Ayu, Kec. Rungkut\r\nSurabaya, Jawa Timur', '087765434321'),
(15, 3, 7765, 'Adit Saputra', 'Laki-Laki', 'Washington', '1998-08-08', 'Jemur Wonosari Gg. Lebar No. 1\r\nKel. Wonocolo, Kec. Jemursari\r\nSurabaya, Jawa Timur', '087123453452'),
(16, 1, 3432, 'Bowo Ardiansyah', 'Laki-Laki', 'Surabaya', '2021-04-28', 'Wiyuuuuuuuuuuuuuuuung', '087648483737'),
(18, 3, 1595, 'Muhammad Haris Setiawan Adhi Mifta', 'Laki-Laki', 'Mojokerto', '1999-08-25', 'Jl. Raya Mojosari Pacet Kutorejo, No. 50', '087734565678'),
(21, 13, 1999, 'Saputra Hafid Ahmad', 'Laki-Laki', 'Trenggalek', '1999-11-27', 'Jl. Kalijudan No. 1, Surabaya', '0314567890'),
(22, 12, 1324, 'Ikhza Ainun Fiima', 'Laki-Laki', 'Jember', '1999-01-14', 'Jl. Medokan Kampung No. 4, Surabaya', '085734234859');

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
(2, '2020/2021 Genap', 0),
(3, '2021/2022 Gasal', 1);

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
(2, 'Pernyataan tertulis'),
(3, 'SP 1');

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
  `biaya_pembayaran` int(9) NOT NULL,
  `keterangan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tunggakan_pembayaran`
--

INSERT INTO `tb_tunggakan_pembayaran` (`id_tunggakan_pembayaran`, `id_tahun_ajaran`, `id_siswa`, `id_jenis_pembayaran`, `bulan`, `tahun`, `biaya_pembayaran`, `keterangan`) VALUES
(1, 2, 1, 1, 1, 2021, 200000, 'Belum Lunas'),
(2, 2, 9, 1, 11, 2020, 200000, 'Belum Lunas'),
(3, 2, 1, 1, 5, 2021, 100000, 'Belum Lunas'),
(4, 2, 1, 2, 4, 2021, 50000, 'Belum Lunas'),
(5, 2, 1, 2, 7, 2021, 10000, 'Belum Lunas'),
(6, 2, 9, 2, 9, 2021, 50000, 'Belum Lunas'),
(7, 1, 9, 2, 10, 2021, 10000, 'Belum Lunas'),
(8, 2, 4, 2, 12, 2020, 30000, 'Belum Lunas'),
(9, 1, 4, 1, 3, 2021, 176000, 'Belum Lunas'),
(10, 1, 4, 2, 9, 2021, 30000, 'Belum Lunas'),
(11, 3, 4, 2, 1, 2021, 222, 'Lunas'),
(12, 2, 4, 1, 3, 2021, 8000, 'Belum Lunas'),
(13, 2, 9, 1, 2, 2021, 30000, 'Belum Lunas'),
(14, 1, 9, 2, 12, 2020, 15000, 'Belum Lunas'),
(15, 2, 13, 1, 1, 2020, 10000, 'Belum Lunas'),
(16, 2, 14, 2, 2, 2021, 30000, 'Belum Lunas'),
(17, 2, 3, 1, 10, 2021, 999999999, 'Belum Lunas'),
(18, 3, 22, 1, 11, 2021, 40000, 'Lunas'),
(19, 3, 22, 1, 11, 2021, 90000, 'Lunas'),
(20, 3, 22, 1, 7, 2021, 669696, 'Lunas'),
(21, 3, 22, 2, 12, 2021, 79000, 'Belum Lunas'),
(22, 2, 12, 1, 8, 2020, 200000, 'Lunas'),
(23, 2, 12, 2, 12, 2021, 50000, 'Lunas'),
(24, 2, 12, 1, 12, 2021, 100000, 'Lunas'),
(25, 2, 12, 2, 12, 2021, 50005, 'Lunas'),
(29, 1, 12, 1, 11, 2021, 140000, 'Lunas');

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
(2, 2, 'gurubk', 'gurubk', 'guru_bk'),
(3, 3, 'stafftu', 'stafftu', 'staff_tu'),
(4, 4, 'xbdp1', 'xbdp1', 'wali_kelas'),
(5, 5, 'xbdp2', 'xbdp2', 'wali_kelas'),
(6, 6, 'xibdp1', 'xibdp1', 'wali_kelas'),
(7, 7, 'xibdp2', 'xibdp2', 'wali_kelas'),
(8, 8, 'xiibdp1', 'xiibdp1', 'wali_kelas'),
(9, 9, 'xiibdp2', 'xiibdp2', 'wali_kelas'),
(10, 10, 'xmm1', 'xmm1', 'wali_kelas'),
(11, 11, 'xmm2', 'xmm2', 'wali_kelas'),
(12, 12, 'ximm1', 'ximm1', 'wali_kelas'),
(13, 13, 'ximm2', 'ximm2', 'wali_kelas'),
(14, 14, 'xiimm1', 'xiimm1', 'wali_kelas'),
(15, 15, 'xiimm2', 'xiimm2', 'wali_kelas'),
(16, 16, 'xtkkr1', 'xtkkr1', 'wali_kelas'),
(17, 17, 'xtkkr2', 'xtkkr2', 'wali_kelas'),
(18, 18, 'xitkkr1', 'xitkkr1', 'wali_kelas'),
(19, 19, 'xitkkr2', 'xitkkr2', 'wali_kelas'),
(20, 20, 'xiitkkr1', 'xiitkkr1', 'wali_kelas'),
(21, 21, 'xiitkkr2', 'xiitkkr2', 'wali_kelas');

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
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_catatan_pelanggaran`
--
ALTER TABLE `tb_catatan_pelanggaran`
  MODIFY `id_catatan_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_jenis_pembayaran`
--
ALTER TABLE `tb_jenis_pembayaran`
  MODIFY `id_jenis_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_pelanggaran_tatib`
--
ALTER TABLE `tb_pelanggaran_tatib`
  MODIFY `id_pelanggaran_tatib` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_tahun_ajaran`
--
ALTER TABLE `tb_tahun_ajaran`
  MODIFY `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_tindakan`
--
ALTER TABLE `tb_tindakan`
  MODIFY `id_tindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_tunggakan_pembayaran`
--
ALTER TABLE `tb_tunggakan_pembayaran`
  MODIFY `id_tunggakan_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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
