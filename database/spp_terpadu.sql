-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 28, 2023 at 01:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spp_terpadu`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_akun_admin`
--

CREATE TABLE `t_akun_admin` (
  `IDAkunAdmin` int(12) NOT NULL,
  `NamaLengkap` varchar(35) NOT NULL,
  `NamaPengguna` varchar(20) NOT NULL,
  `KataSandi` text NOT NULL,
  `Status` varchar(40) NOT NULL,
  `Aktivasi` varchar(2) NOT NULL,
  `Foto` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_akun_admin`
--

INSERT INTO `t_akun_admin` (`IDAkunAdmin`, `NamaLengkap`, `NamaPengguna`, `KataSandi`, `Status`, `Aktivasi`, `Foto`, `created_at`, `updated_at`) VALUES
(0, 'Qori Chairawan', 'qori', 'd0538dbd2f87e857f54860382a64c97d', 'Superadmin', 'Y', 'user.jpg', '2023-01-25 14:34:39', '2023-01-25 14:34:39');

-- --------------------------------------------------------

--
-- Table structure for table `t_akun_siswa`
--

CREATE TABLE `t_akun_siswa` (
  `IDAkun` int(12) NOT NULL,
  `NISN` int(20) NOT NULL,
  `NamaPengguna` varchar(20) NOT NULL,
  `KataSandi` text NOT NULL,
  `Aktivasi` varchar(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_denda`
--

CREATE TABLE `t_denda` (
  `IDDenda` int(12) NOT NULL,
  `KodePembayaran` int(20) NOT NULL,
  `TanggalTempo` varchar(20) NOT NULL,
  `Denda` int(12) NOT NULL,
  `Keterangan` text NOT NULL,
  `IDAkunAdmin` int(12) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_jurusan`
--

CREATE TABLE `t_jurusan` (
  `IDJurusan` varchar(12) NOT NULL,
  `Jurusan` varchar(40) NOT NULL,
  `IDAkunAdmin` int(12) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_jurusan`
--

INSERT INTO `t_jurusan` (`IDJurusan`, `Jurusan`, `IDAkunAdmin`, `created_at`, `updated_at`) VALUES
('J1002036837', 'Rekayasa Perangkat Lunak', 0, '2023-03-06 20:36:28', '2023-03-06 20:36:28'),
('J1086363300', 'Tata Boga', 0, '2023-03-06 20:41:21', '2023-03-06 20:41:21'),
('J1856856198', 'Tata Kecantikan', 0, '2023-03-06 20:41:33', '2023-03-06 20:41:33'),
('J472900260', 'Tata Busana', 0, '2023-03-06 20:41:11', '2023-03-06 20:41:11'),
('J578857808', 'Akomodasi Perhotelan', 0, '2023-03-06 20:41:01', '2023-03-06 20:41:01'),
('J682378929', 'Teknik Komputer &amp; Jaringan', 0, '2023-03-06 20:40:44', '2023-03-06 20:40:44');

-- --------------------------------------------------------

--
-- Table structure for table `t_kelas`
--

CREATE TABLE `t_kelas` (
  `IDKelas` varchar(12) NOT NULL,
  `Kelas` varchar(30) NOT NULL,
  `IDAkunAdmin` int(12) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_kelas`
--

INSERT INTO `t_kelas` (`IDKelas`, `Kelas`, `IDAkunAdmin`, `created_at`, `updated_at`) VALUES
('1124852121', 'XII', 0, '2023-01-28 23:29:31', '2023-03-06 18:58:40'),
('1239018499', 'X', 0, '2023-01-28 22:54:58', '2023-01-28 22:54:58'),
('2005864239', 'XI', 0, '2023-01-28 23:27:53', '2023-01-28 23:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `t_kode_pembayaran`
--

CREATE TABLE `t_kode_pembayaran` (
  `IDKodeBayar` int(12) NOT NULL,
  `KodePembayaran` int(20) NOT NULL,
  `Judul` varchar(300) NOT NULL,
  `Jumlah` int(12) NOT NULL,
  `Keterangan` varchar(300) NOT NULL,
  `IDAkunAdmin` int(12) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_logs_admin`
--

CREATE TABLE `t_logs_admin` (
  `IDLogs` int(12) NOT NULL,
  `IDAkunAdmin` int(12) NOT NULL,
  `Waktu` datetime NOT NULL,
  `Aktivitas` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_logs_admin`
--

INSERT INTO `t_logs_admin` (`IDLogs`, `IDAkunAdmin`, `Waktu`, `Aktivitas`, `created_at`, `updated_at`) VALUES
(11, 0, '2023-01-28 23:29:31', '[Info] : Qori ChairawanTelah menambahkan kelas baru pada tanggal 28-January-2023 23:29:31 parameters = {\"IDKelas\":\"1124852121\",\"Kelas\":\"XII\",\"IDAkunAdmin\":\"0\"}', '2023-01-28 23:29:31', '2023-01-28 23:29:31'),
(12, 0, '2023-03-06 18:25:10', '[Info] : Qori ChairawanTelah login aplikasi pada tanggal 06-March-2023 18:25:10', '2023-03-06 18:25:10', '2023-03-06 18:25:10'),
(13, 0, '2023-03-06 18:38:28', '[Info] : Qori ChairawanTelah menambahkan kelas baru pada tanggal 06-March-2023 18:38:28 parameters = {\"IDKelas\":\"253993401\",\"Kelas\":\"XIII\",\"IDAkunAdmin\":\"0\"}', '2023-03-06 18:38:28', '2023-03-06 18:38:28'),
(14, 0, '2023-03-06 18:58:33', '[Info] : Qori ChairawanTelah memperbarui kelas baru pada tanggal 06-March-2023 18:58:33 parameters = {\"IDKelas\":\"1124852121\",\"Kelas\":\"XII1\",\"IDAkunAdmin\":\"0\"}', '2023-03-06 18:58:33', '2023-03-06 18:58:33'),
(15, 0, '2023-03-06 18:58:41', '[Info] : Qori ChairawanTelah memperbarui kelas baru pada tanggal 06-March-2023 18:58:41 parameters = {\"IDKelas\":\"1124852121\",\"Kelas\":\"XII\",\"IDAkunAdmin\":\"0\"}', '2023-03-06 18:58:41', '2023-03-06 18:58:41'),
(16, 0, '2023-03-06 18:58:46', '[Info] : Qori ChairawanMenghapus sebuah kelas pada tanggal 06-March-2023 18:58:46 parameters = {\"IDKelas\":\"XIII\"}', '2023-03-06 18:58:46', '2023-03-06 18:58:46'),
(17, 0, '2023-03-06 19:01:02', '[Info] : Qori ChairawanMenghapus sebuah kelas pada tanggal 06-March-2023 19:01:02 parameters = {\"IDKelas\":\"253993401\"}', '2023-03-06 19:01:02', '2023-03-06 19:01:02'),
(18, 0, '2023-03-06 19:01:35', '[Info] : Qori ChairawanTelah menambahkan kelas baru pada tanggal 06-March-2023 19:01:35 parameters = {\"IDKelas\":\"1710587297\",\"Kelas\":\"XIII\",\"IDAkunAdmin\":\"0\"}', '2023-03-06 19:01:35', '2023-03-06 19:01:35'),
(19, 0, '2023-03-06 19:02:27', '[Info] : Qori ChairawanMenghapus sebuah kelas pada tanggal 06-March-2023 19:02:27 parameters = {\"IDKelas\":\"1710587297\"}', '2023-03-06 19:02:27', '2023-03-06 19:02:27'),
(20, 0, '2023-03-06 20:36:28', '[Info] : Qori ChairawanTelah menambahkan kelas baru pada tanggal 06-March-2023 20:36:28 parameters = {\"IDJurusan\":\"J1002036837\",\"Jurusan\":\"Rekayasa Perangkat Lunak\",\"IDAkunAdmin\":\"0\"}', '2023-03-06 20:36:28', '2023-03-06 20:36:28'),
(21, 0, '2023-03-06 20:40:44', '[Info] : Qori ChairawanTelah menambahkan kelas baru pada tanggal 06-March-2023 20:40:44 parameters = {\"IDJurusan\":\"J682378929\",\"Jurusan\":\"Teknik Komputer &amp; Jaringan\",\"IDAkunAdmin\":\"0\"}', '2023-03-06 20:40:44', '2023-03-06 20:40:44'),
(22, 0, '2023-03-06 20:41:01', '[Info] : Qori ChairawanTelah menambahkan kelas baru pada tanggal 06-March-2023 20:41:01 parameters = {\"IDJurusan\":\"J578857808\",\"Jurusan\":\"Akomodasi Perhotelan\",\"IDAkunAdmin\":\"0\"}', '2023-03-06 20:41:01', '2023-03-06 20:41:01'),
(23, 0, '2023-03-06 20:41:11', '[Info] : Qori ChairawanTelah menambahkan kelas baru pada tanggal 06-March-2023 20:41:11 parameters = {\"IDJurusan\":\"J472900260\",\"Jurusan\":\"Tata Busana\",\"IDAkunAdmin\":\"0\"}', '2023-03-06 20:41:11', '2023-03-06 20:41:11'),
(24, 0, '2023-03-06 20:41:21', '[Info] : Qori ChairawanTelah menambahkan kelas baru pada tanggal 06-March-2023 20:41:21 parameters = {\"IDJurusan\":\"J1086363300\",\"Jurusan\":\"Tata Boga\",\"IDAkunAdmin\":\"0\"}', '2023-03-06 20:41:21', '2023-03-06 20:41:21'),
(25, 0, '2023-03-06 20:41:33', '[Info] : Qori ChairawanTelah menambahkan kelas baru pada tanggal 06-March-2023 20:41:33 parameters = {\"IDJurusan\":\"J1856856198\",\"Jurusan\":\"Tata Kecantikan\",\"IDAkunAdmin\":\"0\"}', '2023-03-06 20:41:33', '2023-03-06 20:41:33'),
(26, 0, '2023-03-07 18:29:46', '[Info] : Qori ChairawanTelah login aplikasi pada tanggal 07-March-2023 18:29:46', '2023-03-07 18:29:46', '2023-03-07 18:29:46'),
(27, 0, '2023-03-07 18:53:38', '[Info] : Qori ChairawanTelah login aplikasi pada tanggal 07-March-2023 18:53:38', '2023-03-07 18:53:38', '2023-03-07 18:53:38'),
(28, 0, '2023-03-07 19:03:06', '[Info] : Qori ChairawanTelah login aplikasi pada tanggal 07-March-2023 19:03:06', '2023-03-07 19:03:06', '2023-03-07 19:03:06'),
(29, 0, '2023-03-07 20:51:21', '[Info] : Qori ChairawanTelah menambahkan tahun ajaran baru pada tanggal 07-March-2023 20:51:21 parameters = {\"IDTahunAjaran\":\"TA1468111851\",\"TahunAjaran\":\"2022\\/2023\",\"IDAkunAdmin\":\"0\"}', '2023-03-07 20:51:21', '2023-03-07 20:51:21'),
(30, 0, '2023-03-07 21:12:12', '[Info] : Qori ChairawanTelah menambahkan tahun ajaran baru pada tanggal 07-March-2023 21:12:12 parameters = {\"IDTahunAjaran\":\"TA465137120\",\"TahunAjaran\":\"2023\\/2024\",\"IDAkunAdmin\":\"0\"}', '2023-03-07 21:12:12', '2023-03-07 21:12:12'),
(31, 0, '2023-03-22 12:31:44', '[Info] : Qori ChairawanTelah login aplikasi pada tanggal 22-March-2023 12:31:44', '2023-03-22 12:31:44', '2023-03-22 12:31:44'),
(32, 0, '2023-03-22 12:33:34', '[Info] : Qori ChairawanTelah login aplikasi pada tanggal 22-March-2023 12:33:34', '2023-03-22 12:33:34', '2023-03-22 12:33:34'),
(33, 0, '2023-03-22 16:32:29', '[Info] : Qori Chairawan Telah login aplikasi pada tanggal 22-March-2023 16:32:29', '2023-03-22 16:32:29', '2023-03-22 16:32:29');

-- --------------------------------------------------------

--
-- Table structure for table `t_logs_siswa`
--

CREATE TABLE `t_logs_siswa` (
  `IDLogs` int(12) NOT NULL,
  `IDAkun` int(12) NOT NULL,
  `Waktu` datetime NOT NULL,
  `Aktivitas` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_pembayaran`
--

CREATE TABLE `t_pembayaran` (
  `IDPembayaran` varchar(20) NOT NULL,
  `KodePembayaran` int(20) NOT NULL,
  `TanggalBayar` datetime NOT NULL,
  `NISN` int(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_pembayaran_spp`
--

CREATE TABLE `t_pembayaran_spp` (
  `IDPembayaran` varchar(20) NOT NULL,
  `KodePembayaran` int(20) NOT NULL,
  `TanggalBayar` datetime NOT NULL,
  `NISN` int(20) NOT NULL,
  `Bulan` int(12) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_sekolah`
--

CREATE TABLE `t_sekolah` (
  `NPSN` int(15) NOT NULL,
  `Nama` int(40) NOT NULL,
  `Alamat` varchar(300) NOT NULL,
  `KodePos` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Website` varchar(40) NOT NULL,
  `Logo` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_siswa`
--

CREATE TABLE `t_siswa` (
  `NISN` int(20) NOT NULL,
  `Nama` varchar(35) NOT NULL,
  `TempatLahir` varchar(100) NOT NULL,
  `TanggalLahir` date NOT NULL,
  `JenisKelamin` varchar(20) NOT NULL,
  `Agama` varchar(20) NOT NULL,
  `Alamat` text NOT NULL,
  `IDKelas` varchar(12) NOT NULL,
  `IDJurusan` varchar(12) NOT NULL,
  `IDTahunAjaran` varchar(12) NOT NULL,
  `IDAkunAdmin` int(12) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_tahun_ajaran`
--

CREATE TABLE `t_tahun_ajaran` (
  `IDTahunAjaran` varchar(12) NOT NULL,
  `TahunAjaran` varchar(30) NOT NULL,
  `IDAkunAdmin` int(12) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_tahun_ajaran`
--

INSERT INTO `t_tahun_ajaran` (`IDTahunAjaran`, `TahunAjaran`, `IDAkunAdmin`, `created_at`, `updated_at`) VALUES
('TA1468111851', '2022/2023', 0, '2023-03-07 20:51:21', '2023-03-07 20:51:21'),
('TA465137120', '2023/2024', 0, '2023-03-07 21:12:12', '2023-03-07 21:12:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_akun_admin`
--
ALTER TABLE `t_akun_admin`
  ADD PRIMARY KEY (`IDAkunAdmin`);

--
-- Indexes for table `t_akun_siswa`
--
ALTER TABLE `t_akun_siswa`
  ADD PRIMARY KEY (`IDAkun`),
  ADD KEY `NISN` (`NISN`);

--
-- Indexes for table `t_denda`
--
ALTER TABLE `t_denda`
  ADD PRIMARY KEY (`IDDenda`),
  ADD KEY `IDAkunAdmin` (`IDAkunAdmin`);

--
-- Indexes for table `t_jurusan`
--
ALTER TABLE `t_jurusan`
  ADD PRIMARY KEY (`IDJurusan`),
  ADD KEY `IDAkun` (`IDAkunAdmin`),
  ADD KEY `IDAkunAdmin` (`IDAkunAdmin`);

--
-- Indexes for table `t_kelas`
--
ALTER TABLE `t_kelas`
  ADD PRIMARY KEY (`IDKelas`),
  ADD KEY `IDAkunAdmin` (`IDAkunAdmin`);

--
-- Indexes for table `t_kode_pembayaran`
--
ALTER TABLE `t_kode_pembayaran`
  ADD PRIMARY KEY (`IDKodeBayar`),
  ADD KEY `IDAkunAdmin` (`IDAkunAdmin`);

--
-- Indexes for table `t_logs_admin`
--
ALTER TABLE `t_logs_admin`
  ADD PRIMARY KEY (`IDLogs`),
  ADD KEY `IDAkunAdmin` (`IDAkunAdmin`);

--
-- Indexes for table `t_logs_siswa`
--
ALTER TABLE `t_logs_siswa`
  ADD PRIMARY KEY (`IDLogs`),
  ADD KEY `IDAkunAdmin` (`IDAkun`),
  ADD KEY `IDAkun` (`IDAkun`);

--
-- Indexes for table `t_pembayaran`
--
ALTER TABLE `t_pembayaran`
  ADD PRIMARY KEY (`IDPembayaran`),
  ADD KEY `NISN` (`NISN`);

--
-- Indexes for table `t_pembayaran_spp`
--
ALTER TABLE `t_pembayaran_spp`
  ADD PRIMARY KEY (`IDPembayaran`),
  ADD KEY `NISN` (`NISN`);

--
-- Indexes for table `t_sekolah`
--
ALTER TABLE `t_sekolah`
  ADD PRIMARY KEY (`NPSN`);

--
-- Indexes for table `t_siswa`
--
ALTER TABLE `t_siswa`
  ADD PRIMARY KEY (`NISN`),
  ADD KEY `IDKelas` (`IDKelas`),
  ADD KEY `IDJurusan` (`IDJurusan`),
  ADD KEY `IDTahunAjaran` (`IDTahunAjaran`),
  ADD KEY `IDAkunAdmin` (`IDAkunAdmin`);

--
-- Indexes for table `t_tahun_ajaran`
--
ALTER TABLE `t_tahun_ajaran`
  ADD PRIMARY KEY (`IDTahunAjaran`),
  ADD KEY `IDAkunAdmin` (`IDAkunAdmin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_kode_pembayaran`
--
ALTER TABLE `t_kode_pembayaran`
  MODIFY `IDKodeBayar` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_logs_admin`
--
ALTER TABLE `t_logs_admin`
  MODIFY `IDLogs` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `t_logs_siswa`
--
ALTER TABLE `t_logs_siswa`
  MODIFY `IDLogs` int(12) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_akun_siswa`
--
ALTER TABLE `t_akun_siswa`
  ADD CONSTRAINT `t_akun_siswa_ibfk_1` FOREIGN KEY (`NISN`) REFERENCES `t_siswa` (`NISN`);

--
-- Constraints for table `t_denda`
--
ALTER TABLE `t_denda`
  ADD CONSTRAINT `t_denda_ibfk_1` FOREIGN KEY (`IDAkunAdmin`) REFERENCES `t_akun_admin` (`IDAkunAdmin`);

--
-- Constraints for table `t_jurusan`
--
ALTER TABLE `t_jurusan`
  ADD CONSTRAINT `t_jurusan_ibfk_1` FOREIGN KEY (`IDAkunAdmin`) REFERENCES `t_akun_admin` (`IDAkunAdmin`);

--
-- Constraints for table `t_kelas`
--
ALTER TABLE `t_kelas`
  ADD CONSTRAINT `t_kelas_ibfk_1` FOREIGN KEY (`IDAkunAdmin`) REFERENCES `t_akun_admin` (`IDAkunAdmin`);

--
-- Constraints for table `t_kode_pembayaran`
--
ALTER TABLE `t_kode_pembayaran`
  ADD CONSTRAINT `t_kode_pembayaran_ibfk_1` FOREIGN KEY (`IDAkunAdmin`) REFERENCES `t_akun_admin` (`IDAkunAdmin`);

--
-- Constraints for table `t_logs_admin`
--
ALTER TABLE `t_logs_admin`
  ADD CONSTRAINT `t_logs_admin_ibfk_1` FOREIGN KEY (`IDAkunAdmin`) REFERENCES `t_akun_admin` (`IDAkunAdmin`);

--
-- Constraints for table `t_logs_siswa`
--
ALTER TABLE `t_logs_siswa`
  ADD CONSTRAINT `t_logs_siswa_ibfk_1` FOREIGN KEY (`IDAkun`) REFERENCES `t_akun_siswa` (`IDAkun`);

--
-- Constraints for table `t_pembayaran`
--
ALTER TABLE `t_pembayaran`
  ADD CONSTRAINT `t_pembayaran_ibfk_1` FOREIGN KEY (`NISN`) REFERENCES `t_akun_siswa` (`NISN`);

--
-- Constraints for table `t_pembayaran_spp`
--
ALTER TABLE `t_pembayaran_spp`
  ADD CONSTRAINT `t_pembayaran_spp_ibfk_1` FOREIGN KEY (`NISN`) REFERENCES `t_akun_siswa` (`NISN`);

--
-- Constraints for table `t_siswa`
--
ALTER TABLE `t_siswa`
  ADD CONSTRAINT `t_siswa_ibfk_1` FOREIGN KEY (`IDAkunAdmin`) REFERENCES `t_akun_admin` (`IDAkunAdmin`);

--
-- Constraints for table `t_tahun_ajaran`
--
ALTER TABLE `t_tahun_ajaran`
  ADD CONSTRAINT `t_tahun_ajaran_ibfk_1` FOREIGN KEY (`IDAkunAdmin`) REFERENCES `t_akun_admin` (`IDAkunAdmin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
