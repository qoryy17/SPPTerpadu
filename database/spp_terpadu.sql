-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 03:26 PM
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
('1124852121', 'XII', 0, '2023-01-28 23:29:31', '2023-01-28 23:29:31'),
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
(11, 0, '2023-01-28 23:29:31', '[Info] : Qori ChairawanTelah menambahkan kelas baru pada tanggal 28-January-2023 23:29:31 parameters = {\"IDKelas\":\"1124852121\",\"Kelas\":\"XII\",\"IDAkunAdmin\":\"0\"}', '2023-01-28 23:29:31', '2023-01-28 23:29:31');

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
  MODIFY `IDLogs` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
