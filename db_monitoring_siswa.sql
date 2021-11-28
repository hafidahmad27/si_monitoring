-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 02:59 PM
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
(7, 2, 13, '2021-11-01', 'Alpa', 'tanpa keterangan'),
(8, 2, 18, '2021-05-07', 'Sakit', 'Panu'),
(9, 2, 4, '2021-04-14', 'Alpa', '-'),
(10, 2, 16, '2021-03-10', 'Izin', 'tidur'),
(11, 1, 10, '2021-01-18', 'Izin', 'Acara keluarga'),
(12, 1, 22, '2020-11-19', 'Alpa', '-'),
(13, 1, 4, '2020-10-05', 'Sakit', 'panas, rawat inap'),
(14, 1, 9, '2021-08-23', 'Sakit', 'Asma'),
(15, 2, 12, '2021-09-07', 'Sakit', 'fanas'),
(16, 3, 4, '2021-09-09', 'Izin', 'acara keluarga'),
(17, 2, 11, '2021-11-27', 'Izin', 'dsgfds'),
(18, 3, 18, '2021-11-11', 'Alpa', 'gk tau'),
(19, 3, 6, '2021-11-13', 'Izin', 'acara internasional'),
(20, 3, 15, '2021-11-17', 'Sakit', 'kecetit'),
(21, 3, 13, '2021-11-28', 'Alpa', '-'),
(22, 3, 13, '2021-11-28', 'Izin', 'keperluan keluarga');

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
(17, 1, 4, 1, 1, '2020-10-06'),
(18, 1, 9, 2, 1, '2021-08-18'),
(19, 1, 12, 5, 1, '2021-09-07'),
(20, 2, 12, 7, 2, '2021-09-07'),
(21, 3, 21, 7, 1, '2021-11-26'),
(22, 3, 22, 6, 1, '2021-10-28'),
(23, 3, 13, 5, 2, '2021-11-12'),
(24, 3, 13, 8, 3, '2021-11-28');

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
(7, 'X MM 1'),
(8, 'X MM 2'),
(9, 'XI MM 1'),
(10, 'XI MM 2'),
(11, 'XII MM 1'),
(12, 'XII MM 2'),
(13, 'X TKKR 1'),
(14, 'X TKKR 2'),
(15, 'XI TKKR 1'),
(16, 'XI TKKR 2'),
(17, 'XII TKKR 1'),
(18, 'XII TKKR 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggaran_tatib`
--

CREATE TABLE `tb_pelanggaran_tatib` (
  `id_pelanggaran_tatib` int(11) NOT NULL,
  `bentuk_pelanggaran` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelanggaran_tatib`
--

INSERT INTO `tb_pelanggaran_tatib` (`id_pelanggaran_tatib`, `bentuk_pelanggaran`) VALUES
(1, 'Terlambat masuk sekolah'),
(2, 'Membolos/tidak masuk tanpa keterangan 1 hari'),
(3, 'Tidak mengikuti pelajaran tanpa ijin'),
(4, 'Mencuri barang milik orang lain'),
(5, 'Pakaian seragam tidak sesuai ketentuan yang ditetapkan oleh sekolah'),
(6, 'Potongan rambut tidak sesuai dengan aturan sekolah'),
(7, 'Menjadi pelaku perkelahian/provokator'),
(8, 'Merokok di area sekolah');

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
(3, 2, 1439, 'Eva Purnamasari', 'Perempuan', 'Surabaya', '1998-06-05', 'Jl. Jagir Sidomukti No. 22, Surabaya', '081234567890'),
(4, 11, 1419, 'Ahmad Hafid', 'Laki-Laki', 'Sidoarjo', '1999-06-19', 'Jl. Sepanjang Aspal Raya No. 23, Surabaya', '087834581787'),
(6, 13, 1676, 'Dinda Putri Rahmadani', 'Perempuan', 'Surabaya', '1999-01-17', 'Medokan Semampir Tengah No 75, Surabaya', '087863668900'),
(7, 11, 1495, 'Layla Permatasari', 'Perempuan', 'Lamongan', '1999-05-05', 'Jl. Gunung Anyar Harapan VII No. 88, Surabaya', '081245675678'),
(8, 14, 1501, 'Devi Fadhillah', 'Perempuan', 'Jombang', '1998-09-30', 'Medokan Sawah No. 33, Surabaya', '087733455656'),
(9, 7, 1578, 'Raditya Pratama', 'Laki-Laki', 'Surabaya', '2000-01-01', 'Medayu Utara XXX, No. 69, Surabaya', '0881361851'),
(10, 7, 1503, 'Chandra Wardhana', 'Laki-Laki', 'Sidoarjo', '1999-04-24', 'Pondok Candra Wardana Indah No. 21, Sidoarjo', '08823456789'),
(11, 6, 1983, 'Muhammad Fachreza', 'Laki-Laki', 'Sidoarjo', '1999-05-25', 'Jl. Sedati Agung 25, Sidoarjo', '087645452323'),
(12, 4, 1498, 'Rahma Firdausi', 'Perempuan', 'Surabaya', '1998-12-23', 'Jl. Menur Pumpungan No. 3, Surabaya', '081255674321'),
(13, 8, 1502, 'Denny Angga', 'Perempuan', 'Jombang', '1998-11-02', 'Jl. Sidosermo 24, Surabaya', '085672131611'),
(14, 8, 1465, 'Johnny Araihan', 'Laki-Laki', 'Mojokerto', '2000-10-04', 'Medokan Sawah No. 23\r\nKel. Medokan Ayu, Kec. Rungkut\r\nSurabaya, Jawa Timur', '087765434321'),
(15, 3, 7765, 'Adit Saputra', 'Laki-Laki', 'Washington', '1998-08-08', 'Jemur Wonosari Gg. Lebar No. 1\r\nKel. Wonocolo, Kec. Jemursari\r\nSurabaya, Jawa Timur', '087123453452'),
(16, 1, 3432, 'Bowo Ardiansyah', 'Laki-Laki', 'Surabaya', '2021-04-28', 'Wiyuuuuuuuuuuuuuuuung', '087648483737'),
(18, 3, 1595, 'Haris Setiawan', 'Laki-Laki', 'Mojokerto', '1999-08-25', 'Jl. Raya Mojosari Pacet Kutorejo, No. 50', '087734565678'),
(21, 13, 1999, 'Ahmad Nur Riski', 'Laki-Laki', 'Trenggalek', '1999-11-27', 'Jl. Kalijudan No. 1, Surabaya', '0314567890'),
(22, 12, 1324, 'Yusril Ihza F', 'Laki-Laki', 'Jember', '1999-01-14', 'Jl. Medokan Kampung No. 4, Surabaya', '085734234859'),
(23, 7, 1256, 'Jonathan', 'Laki-Laki', 'Mojokerto', '2003-10-14', 'Jl. Jetis wetan no 23, Mojokerto.', '081723454321');

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
(7, 3, 9, 2, 10, 2021, 50000, 'Belum Lunas'),
(8, 2, 4, 2, 12, 2020, 30000, 'Belum Lunas'),
(9, 3, 4, 1, 3, 2021, 200000, 'Belum Lunas'),
(13, 2, 9, 1, 2, 2021, 30000, 'Belum Lunas'),
(14, 3, 9, 2, 12, 2020, 15000, 'Lunas'),
(16, 2, 14, 2, 2, 2021, 30000, 'Belum Lunas'),
(17, 3, 3, 1, 10, 2021, 15000, 'Belum Lunas'),
(18, 3, 22, 1, 11, 2021, 40000, 'Lunas'),
(19, 3, 22, 1, 11, 2021, 90000, 'Lunas'),
(21, 3, 22, 2, 12, 2021, 200000, 'Lunas'),
(22, 2, 12, 1, 8, 2020, 200000, 'Lunas'),
(23, 2, 12, 2, 12, 2021, 50000, 'Lunas'),
(24, 2, 12, 1, 12, 2021, 100000, 'Lunas'),
(25, 2, 12, 2, 12, 2021, 50005, 'Lunas'),
(30, 3, 16, 1, 8, 2021, 49000, 'Lunas'),
(31, 3, 4, 2, 7, 2021, 50000, 'Belum Lunas'),
(32, 3, 22, 1, 11, 2021, 50000, 'Belum Lunas'),
(33, 3, 18, 1, 12, 2000, 150000, 'Belum Lunas'),
(34, 3, 7, 1, 12, 2021, 100000, 'Belum Lunas'),
(35, 3, 23, 1, 10, 2021, 150000, 'Belum Lunas'),
(36, 3, 13, 2, 12, 2021, 50000, 'Belum Lunas'),
(37, 3, 13, 1, 12, 2021, 250000, 'Belum Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admin', 'admin', 'admin'),
(2, 'Guru BK', 'gurubk', 'gurubk', 'guru_bk'),
(3, 'Staff TU', 'stafftu', 'stafftu', 'staff_tu');

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
  ADD PRIMARY KEY (`id_kelas`);

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
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_catatan_pelanggaran`
--
ALTER TABLE `tb_catatan_pelanggaran`
  MODIFY `id_catatan_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
  MODIFY `id_tunggakan_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
