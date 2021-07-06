-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 02:55 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

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
  `id_siswa` int(11) NOT NULL,
  `tanggal_absensi` varchar(10) NOT NULL,
  `alasan` varchar(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_absensi`
--

INSERT INTO `tb_absensi` (`id_absensi`, `id_siswa`, `tanggal_absensi`, `alasan`, `keterangan`) VALUES
(1, 10, '05/07/2021', 'Alpa', '-'),
(2, 1, '05/07/2021', 'Sakit', 'Demam, dirawat di RS'),
(3, 9, '04/07/2021', 'Izin', 'Acara Keluarga'),
(4, 11, '05/07/2021', 'Izin', 'Perpanjangan SIM'),
(5, 6, '05/07/2021', 'Sakit', 'cedera, dirawat di rumah'),
(6, 9, '05/07/2021', 'Sakit', 'Asma, dirawat di rumah'),
(7, 13, '06/07/2021', 'Sakit', 'Pusing');

-- --------------------------------------------------------

--
-- Table structure for table `tb_catatan_pelanggaran`
--

CREATE TABLE `tb_catatan_pelanggaran` (
  `id_catatan_pelanggaran` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_pelanggaran_tatib` int(11) NOT NULL,
  `id_tindakan` int(11) NOT NULL,
  `tanggal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_catatan_pelanggaran`
--

INSERT INTO `tb_catatan_pelanggaran` (`id_catatan_pelanggaran`, `id_siswa`, `id_pelanggaran_tatib`, `id_tindakan`, `tanggal`) VALUES
(1, 2, 1, 1, '2021-03-06'),
(3, 1, 4, 2, '2021-03-08'),
(4, 2, 2, 1, '2021-03-06'),
(5, 2, 7, 2, '2021-03-06'),
(9, 10, 8, 5, '04/07/2021'),
(10, 10, 6, 1, '04/07/2021'),
(12, 8, 5, 3, '04/07/2021'),
(13, 1, 1, 1, '04/07/2021'),
(15, 10, 3, 3, '04/07/2021'),
(16, 14, 3, 3, '04/07/2021'),
(17, 4, 2, 2, '04/07/2021'),
(18, 7, 5, 1, '04/07/2021'),
(19, 16, 2, 3, '04/07/2021'),
(20, 4, 1, 1, '05/07/2021'),
(21, 7, 1, 3, '05/07/2021'),
(22, 5, 8, 5, '06/07/2021'),
(23, 9, 8, 1, '06/07/2021');

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
(1, 'DOP (Dana Operasional Pembangunan)'),
(2, 'Daftar Ulang'),
(5, 'SPP');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'X BDP 1'),
(2, 'X BDP 2'),
(3, 'XI BDP 1'),
(4, 'XI BDP 2'),
(5, 'XII BDP 1'),
(6, 'XII BDP 2'),
(7, 'X PMSR 18'),
(8, 'X PMSR 2'),
(9, 'XI PMSR 1'),
(10, 'XI PMSR 2'),
(11, 'XII PMSR 1'),
(12, 'XII PMSR 2'),
(13, 'X MM 1'),
(14, 'X MM 2'),
(15, 'XI MM 1'),
(16, 'XI MM 2'),
(17, 'XII MM 1'),
(18, 'XII AM 2'),
(19, 'X1 TIK 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` enum('admin','guru_bk','staf_tu','wali_kelas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nama_pegawai`, `username`, `password`, `level`) VALUES
(1, 'Rachman Ariefq', 'rachariefq', 'ikipkerenw', 'admin'),
(2, 'Ibu TU', '45678', '45678', 'staf_tu'),
(3, 'Ibu BK', 'konseling', 'konseling', 'guru_bk'),
(4, 'Ibu Wali Kelas', 'wkkelas', 'walas123', 'wali_kelas');

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
(8, 'Merokok di area sekolah', 45);

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
(2, 14, 1405, 'Arifio Juliantara Sunaryo', 'Perempuan', 'Sidoarjo', '1998-07-15', 'Perumahan Tropodo Indah No. 16, Sidoarja', '082188776969'),
(3, 12, 1439, 'Eva Anisawati', 'Perempuan', 'Surabaya', '1998-06-05', 'Jl. Jagir Sidomukti No. 22, Surabaya', '081234567890'),
(4, 17, 1419, 'Ahmad Hafid Holy Saputra', 'Laki-Laki', 'Pacitan', '1999-01-27', 'Jl. Medayu Utara 1 Melati No. 3\r\nKel. Medokan Ayu, Kec. Rungkut\r\nSurabaya, Jawa Timur', '087834581787'),
(5, 16, 1580, 'Mustakim', 'Laki-Laki', 'Sidoarjo', '1998-11-04', 'Jl. Gunung Anyar Timur IV No 40, Surabaya', '08881234543'),
(6, 11, 1676, 'Dinda Rahmadani Putri', 'Perempuan', 'Surabaya', '1999-01-17', 'Medokan Semampir Tengah No 76, Surabaya', '087863668900'),
(7, 1, 1495, 'Laila Abidatul Amanah', 'Perempuan', 'Lamongan', '1999-05-05', 'Jl. Gunung Anyar Harapan VII No. 88, Surabaya', '081245675678'),
(8, 11, 1501, 'Wahyu Atta Masruroh', 'Perempuan', 'Jombang', '1998-09-30', 'Medokan Sawah No. 33, Surabaya', '087733455656'),
(9, 3, 1578, 'Raditya Pratama', 'Laki-Laki', 'Surabaya', '2000-01-01', 'Medayu Utara XXX, No. 69, Surabaya', '0881361851'),
(10, 4, 1503, 'Chandra Wardhana', 'Laki-Laki', 'Sidoarjo', '1999-04-24', 'Pondok Candra Wardana Indah No. 21, Sidoarjo', '08823456789'),
(11, 13, 1983, 'Muhammad Farezra', 'Laki-Laki', 'Sidoarjo', '1999-05-25', 'Jl. Garuda Sedati Agung 25, Sidoarjo', '087645452323'),
(12, 10, 1498, 'Firdausi Rahmadani', 'Perempuan', 'Surabaya', '1998-12-23', 'Jl. Menur Pumpungan No. 3, Surabaya', '081255674321'),
(13, 8, 1502, 'Dinivi Widyianti', 'Perempuan', 'Pacitan', '1998-11-02', 'Jl. Tanjung Sari No. 21, Pacitan', '085672131611'),
(14, 1, 1465, 'Jonathan Sutejo', 'Laki-Laki', 'Mojokerto', '2000-10-04', 'Medokan Sawah No. 23\r\nKel. Medokan Ayu, Kec. Rungkut\r\nSurabaya, Jawa Timur', '087765434321'),
(15, 1, 7765, 'Ander Herrera', 'Laki-Laki', 'Washington', '1998-08-08', 'Jemur Wonosari Gg. Lebar No. 1\r\nKel. Wonocolo, Kec. Jemursari\r\nSurabaya, Jawa Timur', '087123453452'),
(16, 2, 3432, 'Bowo', 'Laki-Laki', 'Surabaya', '2021-04-28', 'Wiyuuuuuuuuuuuuuuuung', '087648483737'),
(17, 18, 1555, 'Vino G. Bastoni', 'Laki-Laki', 'Surabaya', '2008-10-05', 'Medayu Utara 1 Melati No. 7\r\nKel. Medokan Ayu, Kec. Rungkut\r\nSurabaya, Jawa Timur', '088844447777');

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
(5, 'SP 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tunggakan_pembayaran`
--

CREATE TABLE `tb_tunggakan_pembayaran` (
  `id_tunggakan_pembayaran` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_jenis_pembayaran` int(11) NOT NULL,
  `bulan` int(2) NOT NULL,
  `tahun` int(4) NOT NULL,
  `biaya_pembayaran` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tunggakan_pembayaran`
--

INSERT INTO `tb_tunggakan_pembayaran` (`id_tunggakan_pembayaran`, `id_siswa`, `id_jenis_pembayaran`, `bulan`, `tahun`, `biaya_pembayaran`) VALUES
(1, 1, 1, 1, 2021, 200000),
(2, 10, 2, 2, 2020, 75000),
(3, 1, 2, 4, 2020, 80000),
(4, 9, 5, 5, 2020, 2000000),
(5, 9, 1, 11, 2020, 4000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_catatan_pelanggaran`
--
ALTER TABLE `tb_catatan_pelanggaran`
  ADD PRIMARY KEY (`id_catatan_pelanggaran`),
  ADD KEY `tb_catatan_pelanggaran_ibfk_1` (`id_siswa`),
  ADD KEY `id_pelanggaran_tatib` (`id_pelanggaran_tatib`),
  ADD KEY `id_tindakan` (`id_tindakan`);

--
-- Indexes for table `tb_jenis_pembayaran`
--
ALTER TABLE `tb_jenis_pembayaran`
  ADD PRIMARY KEY (`id_jenis_pembayaran`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

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
  ADD KEY `id_jenis_pembayaran` (`id_jenis_pembayaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_catatan_pelanggaran`
--
ALTER TABLE `tb_catatan_pelanggaran`
  MODIFY `id_catatan_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_jenis_pembayaran`
--
ALTER TABLE `tb_jenis_pembayaran`
  MODIFY `id_jenis_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pelanggaran_tatib`
--
ALTER TABLE `tb_pelanggaran_tatib`
  MODIFY `id_pelanggaran_tatib` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_tindakan`
--
ALTER TABLE `tb_tindakan`
  MODIFY `id_tindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_tunggakan_pembayaran`
--
ALTER TABLE `tb_tunggakan_pembayaran`
  MODIFY `id_tunggakan_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD CONSTRAINT `tb_absensi_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`);

--
-- Constraints for table `tb_catatan_pelanggaran`
--
ALTER TABLE `tb_catatan_pelanggaran`
  ADD CONSTRAINT `tb_catatan_pelanggaran_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`),
  ADD CONSTRAINT `tb_catatan_pelanggaran_ibfk_2` FOREIGN KEY (`id_pelanggaran_tatib`) REFERENCES `tb_pelanggaran_tatib` (`id_pelanggaran_tatib`),
  ADD CONSTRAINT `tb_catatan_pelanggaran_ibfk_3` FOREIGN KEY (`id_tindakan`) REFERENCES `tb_tindakan` (`id_tindakan`);

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
  ADD CONSTRAINT `tb_tunggakan_pembayaran_ibfk_2` FOREIGN KEY (`id_jenis_pembayaran`) REFERENCES `tb_jenis_pembayaran` (`id_jenis_pembayaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
