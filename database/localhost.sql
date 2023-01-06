-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 06, 2023 at 10:25 AM
-- Server version: 8.0.31-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absen_musaba`
--
CREATE DATABASE IF NOT EXISTS `absen_musaba` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `absen_musaba`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `id_absensi` int NOT NULL,
  `id_jadwal` int NOT NULL,
  `tanggal` date NOT NULL,
  `nis` varchar(10) NOT NULL,
  `ket` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_absensi`
--

INSERT INTO `tb_absensi` (`id_absensi`, `id_jadwal`, `tanggal`, `nis`, `ket`) VALUES
(36, 1, '2016-01-04', '15001', 'H'),
(37, 1, '2016-01-04', '15002', 'H'),
(38, 1, '2016-01-04', '15001', 'H'),
(39, 1, '2016-01-04', '15002', 'H'),
(40, 25, '2016-01-04', '13001', 'H'),
(41, 25, '2016-01-04', '13002', 'S'),
(42, 25, '2016-01-04', '13003', 'H'),
(43, 15, '2016-01-04', '14001', 'S'),
(44, 15, '2016-01-04', '14002', 'H'),
(45, 12, '2016-01-04', '14001', 'H'),
(46, 12, '2016-01-04', '14002', 'H'),
(47, 3, '2016-01-04', '15001', 'H'),
(48, 3, '2016-01-04', '15002', 'I'),
(49, 26, '2016-01-04', '13001', 'I'),
(50, 26, '2016-01-04', '13002', 'H'),
(51, 26, '2016-01-04', '13003', 'H'),
(52, 5, '2016-01-04', '15001', 'A'),
(53, 5, '2016-01-04', '15002', 'H'),
(54, 23, '2016-01-04', '13001', 'A'),
(55, 23, '2016-01-04', '13002', 'H'),
(56, 23, '2016-01-04', '13003', 'H'),
(57, 13, '2016-01-04', '14001', 'H'),
(58, 13, '2016-01-04', '14002', 'H'),
(59, 4, '2016-01-04', '15001', 'I'),
(60, 4, '2016-01-04', '15002', 'H'),
(61, 27, '2016-01-04', '13001', 'H'),
(62, 27, '2016-01-04', '13002', 'S'),
(63, 27, '2016-01-04', '13003', 'A'),
(64, 16, '2016-01-04', '14001', 'H'),
(65, 16, '2016-01-04', '14002', 'H'),
(66, 6, '2016-01-05', '15001', 'H'),
(67, 6, '2016-01-05', '15002', 'I'),
(68, 29, '2016-01-05', '13001', 'H'),
(69, 29, '2016-01-05', '13002', 'H'),
(70, 29, '2016-01-05', '13003', 'H'),
(71, 20, '2016-01-05', '14001', 'I'),
(72, 20, '2016-01-05', '14002', 'A'),
(73, 21, '2016-01-05', '14001', 'H'),
(74, 21, '2016-01-05', '14002', 'H'),
(75, 17, '2016-01-05', '14001', 'H'),
(76, 17, '2016-01-05', '14002', 'H'),
(77, 7, '2016-01-05', '15001', 'S'),
(78, 7, '2016-01-05', '15002', 'H'),
(79, 10, '2016-01-05', '15001', 'S'),
(80, 10, '2016-01-05', '15002', 'H'),
(81, 31, '2016-01-05', '13001', 'H'),
(82, 31, '2016-01-05', '13002', 'A'),
(83, 31, '2016-01-05', '13003', 'H'),
(86, 28, '2016-01-05', '13001', 'H'),
(87, 28, '2016-01-05', '13002', 'A'),
(88, 28, '2016-01-05', '13003', 'H'),
(89, 18, '2016-01-05', '14001', 'H'),
(90, 18, '2016-01-05', '14002', 'H'),
(91, 32, '2016-01-05', '13001', 'H'),
(92, 32, '2016-01-05', '13002', 'A'),
(93, 32, '2016-01-05', '13003', 'H'),
(94, 15, '2016-01-04', '14001', 'H'),
(95, 15, '2016-01-04', '14002', 'H'),
(96, 39, '2016-01-06', '14001', 'H'),
(97, 39, '2016-01-06', '14002', 'H'),
(98, 34, '2016-01-06', '15001', 'H'),
(99, 34, '2016-01-06', '15002', 'H'),
(100, 46, '2016-01-06', '13001', 'H'),
(101, 46, '2016-01-06', '13002', 'H'),
(102, 46, '2016-01-06', '13003', 'H'),
(103, 43, '2016-01-06', '14001', 'H'),
(104, 43, '2016-01-06', '14002', 'H'),
(105, 48, '2016-01-06', '13001', 'H'),
(106, 48, '2016-01-06', '13002', 'H'),
(107, 48, '2016-01-06', '13003', 'H'),
(108, 37, '2016-01-06', '15001', 'H'),
(109, 37, '2016-01-06', '15002', 'H'),
(110, 1, '2016-01-11', '15001', 'H'),
(111, 1, '2016-01-11', '15002', 'H'),
(112, 25, '2016-01-11', '13001', 'H'),
(113, 25, '2016-01-11', '13002', 'H'),
(114, 25, '2016-01-11', '13003', 'H'),
(115, 15, '2016-01-11', '14001', 'H'),
(116, 15, '2016-01-11', '14002', 'H'),
(117, 39, '2016-01-13', '14001', 'S'),
(118, 39, '2016-01-13', '14002', 'S'),
(119, 34, '2016-01-13', '15001', 'I'),
(120, 34, '2016-01-13', '15002', 'I'),
(121, 46, '2016-01-13', '13001', 'A'),
(122, 46, '2016-01-13', '13002', 'A'),
(123, 46, '2016-01-13', '13003', 'A'),
(124, 43, '2016-01-13', '14001', 'S'),
(125, 43, '2016-01-13', '14002', 'S'),
(126, 48, '2016-01-13', '13001', 'I'),
(127, 48, '2016-01-13', '13002', 'I'),
(128, 48, '2016-01-13', '13003', 'I'),
(129, 37, '2016-01-13', '15001', 'A'),
(130, 37, '2016-01-13', '15002', 'A'),
(131, 1, '2016-01-18', '15001', 'H'),
(132, 1, '2016-01-18', '15002', 'H'),
(133, 25, '2016-01-18', '13001', 'H'),
(134, 25, '2016-01-18', '13002', 'H'),
(135, 25, '2016-01-18', '13003', 'H'),
(136, 15, '2016-01-18', '14001', 'H'),
(137, 15, '2016-01-18', '14002', 'H'),
(138, 39, '2016-01-20', '14001', 'H'),
(139, 39, '2016-01-20', '14002', 'H'),
(140, 34, '2016-01-20', '15001', 'H'),
(141, 34, '2016-01-20', '15002', 'H'),
(142, 46, '2016-01-20', '13001', 'H'),
(143, 46, '2016-01-20', '13002', 'H'),
(144, 46, '2016-01-20', '13003', 'H'),
(145, 48, '2016-01-20', '13001', 'H'),
(146, 48, '2016-01-20', '13002', 'H'),
(147, 48, '2016-01-20', '13003', 'H'),
(148, 37, '2016-01-20', '15001', 'H'),
(149, 37, '2016-01-20', '15002', 'H'),
(150, 43, '2016-01-20', '14001', 'H'),
(151, 43, '2016-01-20', '14002', 'H'),
(152, 84, '2016-04-09', '13001', 'H'),
(153, 84, '2016-04-09', '13002', 'H'),
(154, 84, '2016-04-09', '13003', 'S'),
(155, 84, '2016-04-09', '13004', 'H'),
(156, 84, '2016-04-09', '13102001', 'I'),
(157, 1, '2016-04-04', '15001', 'H'),
(158, 1, '2016-04-04', '15002', 'S'),
(159, 25, '2016-04-04', '13001', 'H'),
(160, 25, '2016-04-04', '13002', 'H'),
(161, 25, '2016-04-04', '13003', 'S'),
(162, 25, '2016-04-04', '13004', 'I'),
(163, 25, '2016-04-04', '13102001', 'A'),
(164, 1, '2022-11-14', '15001', 'S'),
(165, 1, '2022-11-14', '15002', 'I'),
(166, 3, '2022-11-14', '15001', ''),
(167, 3, '2022-11-14', '15002', ''),
(168, 12, '2022-11-14', '14001', 'H'),
(169, 12, '2022-11-14', '14002', ''),
(170, 26, '2022-11-14', '13001', 'S'),
(171, 26, '2022-11-14', '13002', 'H'),
(172, 26, '2022-11-14', '13003', 'S'),
(173, 26, '2022-11-14', '13004', 'I'),
(174, 26, '2022-11-14', '13102001', 'S'),
(175, 5, '2022-11-14', '15001', 'H'),
(176, 5, '2022-11-14', '15002', 'H'),
(177, 89, '2022-11-18', '15001', 'H'),
(178, 89, '2022-11-18', '15002', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_absensih`
--

CREATE TABLE `tb_absensih` (
  `id_absensih` int NOT NULL,
  `tanggal` date NOT NULL,
  `nis` varchar(10) NOT NULL,
  `ket` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_absensih`
--

INSERT INTO `tb_absensih` (`id_absensih`, `tanggal`, `nis`, `ket`) VALUES
(6, '2016-03-19', '15002', 'S'),
(5, '2016-03-19', '15001', 'H'),
(7, '2016-04-09', '13001', 'H'),
(8, '2016-04-09', '13002', 'H'),
(9, '2016-04-09', '13003', 'S'),
(10, '2016-04-09', '13004', 'H'),
(11, '2016-04-09', '13102001', 'I'),
(12, '2016-04-04', '15001', 'H'),
(13, '2016-04-04', '15002', 'S'),
(14, '2016-04-04', '13001', 'H'),
(15, '2016-04-04', '13002', 'H'),
(16, '2016-04-04', '13003', 'S'),
(17, '2016-04-04', '13004', 'I'),
(18, '2016-04-04', '13102001', 'A'),
(19, '2022-11-14', '15001', 'S'),
(20, '2022-11-14', '15002', 'I'),
(21, '2022-11-14', '14001', 'H'),
(22, '2022-11-14', '14002', ''),
(23, '2022-11-14', '13001', 'S'),
(24, '2022-11-14', '13002', 'H'),
(25, '2022-11-14', '13003', 'S'),
(26, '2022-11-14', '13004', 'I'),
(27, '2022-11-14', '13102001', 'S'),
(28, '2022-11-18', '15001', 'H'),
(29, '2022-11-18', '15002', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nama_guru` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode_guru` varchar(5) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `agama` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama_guru`, `kode_guru`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `agama`) VALUES
(30, '12528', 'ASEP', 'ASPA', 'LAKI-LAKI', 'ACEH BESAR', '2005-03-31', 'KOTA ABRU', 'ISLAM'),
(9, '16102001', 'ASEP DUDI S.AG.,M.SI', 'A', 'LAKI-LAKI', 'CIBUBUR', '1963-07-03', 'TASIKMALAYAA', 'ISLAM'),
(10, '16102002', 'UJANG DANI MS, S.PD', 'B', 'LAKI-LAKI', 'GARUT', '1968-08-15', 'TASIKMALAYA', 'ISLAM'),
(11, '16102003', 'ASEP FUADJA, S.PD', 'C', 'LAKI-LAKI', 'GARUT', '1967-10-15', 'TASIKMALAYA', 'ISLAM'),
(12, '16102004', 'DRS.DEDI AFENDI', 'D', 'LAKI-LAKI', 'BOGOR', '1958-02-07', 'TASIKMALAYA', 'ISLAM'),
(13, '16102005', 'SUSILAWATI, S.PD', 'E', 'PEREMPUAN', 'JAKARTA', '1976-12-12', 'TASIKMALAYA', 'ISLAM'),
(14, '16102006', 'HANA KARINA, S.PD', 'F', 'PEREMPUAN', 'JAKARTA', '1990-11-02', 'TASIKMALAYA', 'ISLAM'),
(15, '16102007', 'SUSI SUMARNI, S.PDI', 'G', 'PEREMPUAN', 'SEMARANG', '1988-01-20', 'TASIKMALAYA', 'ISLAM'),
(17, '16102008', 'MARUF IRPAN HILMI', 'H', '', 'MAKASSAR', '1988-07-17', 'TASIKMALAYA', 'ISLAM'),
(18, '16102009', 'OPIK TAUFIK R, S.PDI.', 'I', '', 'BOGOR', '1978-12-12', 'TASIKMALAYA', 'ISLAM'),
(19, '16102010', 'DRA. NENI YOFIANI', 'J', 'PEREMPUAN', 'TASIKMALAYA', '1975-10-10', 'TASIKMALAYA', 'ISLAM'),
(20, '16102011', 'HJ. ETIN SUMIATIN, S.PD.', 'K', '', 'GARUT', '1985-04-22', 'TASIKMALAYA', 'ISLAM'),
(21, '16102012', 'ENCEP ERWIN DJEN SM, ST.', 'L', 'LAKI-LAKI', 'TASIKMALAYA', '1963-11-11', 'TASIKMALAYA', 'ISLAM'),
(22, '16102013', 'TENI SETIANI, S.PD.', 'M', 'PEREMPUAN', 'CIBUBUR', '1988-12-20', 'TASIKMALAYA', 'ISLAM'),
(23, '16102014', 'DRA. EEN NURSIAH', 'N', 'PEREMPUAN', 'BOGOR', '1969-07-18', 'TASIKMALAYA', 'ISLAM'),
(24, '16102015', 'EGA YOGASWARA, S.PD.', 'O', 'LAKI-LAKI', 'JAKARTA', '1989-07-15', 'TASIKMALAYA', 'ISLAM'),
(25, '16102016', 'GHEA NUR HIKMAH, S.PD.', 'P', 'PEREMPUAN', 'JAKARTA', '1990-12-11', 'TASIKMALAYA', 'ISLAM'),
(26, '16102017', 'AAM AMALIA, S.AG.', 'Q', 'PEREMPUAN', 'TASIKMALAYA', '1990-05-06', 'TASIKMALAYA', 'ISLAM'),
(27, '16102018', 'CEP GIAN RESNU', 'R', '', 'GARUT', '1986-08-13', 'TASIKMALAYA', 'ISLAM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int NOT NULL,
  `id_mengajar` int NOT NULL,
  `hari` varchar(7) NOT NULL,
  `jam_mulai` varchar(10) NOT NULL,
  `jam_berakhir` varchar(10) NOT NULL,
  `id_kelas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `id_mengajar`, `hari`, `jam_mulai`, `jam_berakhir`, `id_kelas`) VALUES
(1, 32, 'Kamis', '07:40', '09:00', 13),
(3, 26, 'Kamis', '10:10', '10:40', 14),
(4, 20, 'Senin', '10:40', '09:00', 12),
(5, 21, 'Senin', '12:20', '13:40', 12),
(6, 19, 'Selasa', '07:00', '08:20', 12),
(7, 20, 'Selasa', '08:20', '09:45', 12),
(10, 14, 'Selasa', '11:10', '13:40', 12),
(12, 19, 'Senin', '07:40', '09:00', 13),
(13, 20, 'Senin', '09:10', '10:40', 13),
(15, 18, 'Senin', '10:40', '12:00', 13),
(16, 22, 'Senin', '12:20', '13:40', 13),
(17, 20, 'Selasa', '07:00', '07:40', 13),
(18, 29, 'Selasa', '08:20', '09:45', 13),
(20, 19, 'Selasa', '10:05', '11:20', 13),
(21, 21, 'Selasa', '11:20', '13:00', 13),
(23, 20, 'Senin', '07:40', '09:00', 14),
(25, 18, 'Senin', '10:05', '10:40', 14),
(26, 19, 'Senin', '10:40', '12:00', 14),
(27, 14, 'Senin', '12:20', '13:40', 14),
(28, 29, 'Selasa', '07:00', '08:20', 14),
(29, 19, 'Selasa', '08:20', '09:45', 14),
(31, 20, 'Selasa', '10:05', '11:20', 14),
(32, 22, 'Selasa', '11:20', '13:00', 14),
(33, 16, 'Rabu', '07:00', '08:20', 12),
(34, 18, 'Rabu', '08:20', '09:45', 12),
(35, 26, 'Rabu', '09:45', '11:20', 12),
(36, 22, 'Rabu', '11:20', '01:00', 12),
(37, 38, 'Rabu', '13:00', '13:40', 12),
(38, 22, 'Rabu', '11:20', '13:00', 12),
(39, 18, 'Rabu', '07:00', '08:20', 13),
(40, 32, 'Rabu', '08:20', '09:45', 13),
(41, 17, 'Rabu', '10:05', '11:20', 13),
(42, 26, 'Rabu', '11:20', '13:00', 13),
(43, 38, 'Rabu', '13:00', '13:40', 13),
(44, 32, 'Rabu', '07:00', '08:20', 14),
(45, 21, 'Rabu', '08:20', '09:45', 14),
(46, 18, 'Rabu', '10:05', '11:20', 14),
(47, 17, 'Rabu', '11:20', '13:00', 14),
(48, 38, 'Rabu', '13:00', '13:40', 14),
(49, 23, 'Kamis', '07:00', '08:20', 12),
(50, 16, 'Kamis', '08:20', '09:45', 12),
(51, 24, 'Kamis', '10:05', '11:20', 12),
(52, 25, 'Kamis', '11:20', '13:00', 12),
(53, 28, 'Kamis', '13:00', '13:40', 12),
(54, 14, 'Kamis', '07:00', '20:20', 13),
(55, 25, 'Kamis', '08:20', '21:45', 13),
(56, 23, 'Kamis', '10:05', '11:20', 13),
(57, 24, 'Kamis', '11:20', '13:00', 13),
(58, 28, 'Kamis', '13:00', '13:40', 13),
(59, 26, 'Kamis', '07:00', '08:20', 14),
(60, 23, 'Kamis', '08:20', '09:45', 14),
(61, 25, 'Kamis', '10:05', '11:20', 14),
(62, 27, 'Kamis', '11:20', '13:00', 14),
(63, 28, 'Kamis', '13:00', '13:40', 14),
(64, 17, 'Jumat', '07:00', '08:20', 12),
(65, 30, 'Jumat', '08:20', '09:45', 12),
(66, 31, 'Jumat', '10:05', '11:20', 12),
(67, 30, 'Jumat', '07:00', '08:20', 13),
(68, 31, 'Jumat', '08:20', '09:45', 13),
(69, 32, 'Jumat', '10:05', '11:20', 13),
(70, 32, 'Jumat', '08:20', '09:45', 14),
(71, 30, 'Jumat', '10:05', '11:20', 14),
(73, 34, 'Sabtu', '08:20', '09:45', 12),
(74, 27, 'Sabtu', '10:05', '11:20', 12),
(75, 35, 'Sabtu', '11:20', '13:00', 12),
(76, 37, 'Sabtu', '13:00', '13:40', 12),
(77, 34, 'Sabtu', '07:00', '08:40', 13),
(78, 34, 'Sabtu', '07:00', '08:20', 13),
(79, 29, 'Sabtu', '08:20', '09:45', 13),
(80, 35, 'Sabtu', '10:05', '11:20', 13),
(81, 27, 'Sabtu', '11:20', '13:00', 13),
(82, 37, 'Sabtu', '13:00', '13:40', 13),
(83, 29, 'Sabtu', '07:00', '08:20', 14),
(84, 35, 'Sabtu', '08:20', '09:45', 14),
(85, 34, 'Sabtu', '10:05', '11:20', 14),
(86, 36, 'Sabtu', '11:20', '13:00', 14),
(87, 37, 'Sabtu', '13:00', '13:40', 14),
(89, 18, 'Jumat', '08:00', '09:00', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `kelas`) VALUES
(12, 'VII'),
(13, 'VIII'),
(14, 'IX'),
(17, 'XI RPL 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int NOT NULL,
  `kode_mapel` varchar(5) NOT NULL,
  `mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `kode_mapel`, `mapel`) VALUES
(8, '01', 'PENDIDIKAN AGAMA ISLAM'),
(9, '02', 'PENDIDIKAN KEWARGANERAAN'),
(10, '03', 'BAHASA INDONESIA'),
(11, '04', 'MATEMATIKA'),
(12, '05', 'ILMU PENGETAHUAN ALAM'),
(13, '06', 'ILMU PENGETAHUAN SOSIAL'),
(14, '07', 'BAHASA INGGRIS'),
(15, '08', 'SENI BUDAYA'),
(16, '09', 'PENDIDIKAN JASMANI DAN KESEHATAN (PENJASKES)'),
(17, '10', 'KETERAMPILAN'),
(18, '11', 'BAHASA SUNDA'),
(19, '12', 'TEKNOLOGI INFORMASI DAN KOMUNIKASI'),
(20, '13', 'BIMBINGAN DAN KONSELING'),
(21, '14', 'AQIDAH AKHLAK'),
(22, '15', 'AL-QURAN DAN HADIST'),
(23, '16', 'FIQIH'),
(24, '17', 'SARANA KEROHANIAN ISLAM'),
(25, '18', 'BAHASA ARAB'),
(26, '19', 'INSYA BAHASA INGGRIS'),
(27, '20', 'NAHWU SOROF'),
(28, '21', 'MAHFUDOH, INSYA BAHASA ARAB'),
(31, '22', 'BBB'),
(32, '01001', 'PENDIDIKAN AGAMA ISLAM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mengajar`
--

CREATE TABLE `tb_mengajar` (
  `id_mengajar` int NOT NULL,
  `kode_guru` varchar(10) NOT NULL,
  `kode_mapel` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mengajar`
--

INSERT INTO `tb_mengajar` (`id_mengajar`, `kode_guru`, `kode_mapel`) VALUES
(14, 'D', '02'),
(16, 'E', '05'),
(17, 'F', '14'),
(18, 'P', '07'),
(19, 'M', '03'),
(20, 'D', '06'),
(21, 'M', '08'),
(22, 'H', '11'),
(23, 'O', '09'),
(24, 'Q', '01'),
(25, 'I', '16'),
(26, 'I', '17'),
(27, 'H', '10'),
(28, 'I', '20'),
(29, 'K', '04'),
(30, 'L', '12'),
(31, 'I', '15'),
(32, 'F', '05'),
(33, 'L', '01'),
(34, 'R', '18'),
(35, 'O', '13'),
(36, 'B', '15'),
(37, 'R', '21'),
(38, 'P', '19'),
(39, 'C', '04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int NOT NULL,
  `username` varchar(10) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `username`, `pass`, `status`) VALUES
(4, '16102001', 'asep.guru', 'guru'),
(5, '16102002', 'ujang.guru', 'guru'),
(6, '16102003', 'fuad.guru', 'guru'),
(7, '16102004', 'dedi.guru', 'guru'),
(8, '16102005', 'susil.guru', 'guru'),
(9, '16102006', 'hana.guru', 'guru'),
(10, '16102007', 'susis.guru', 'guru'),
(11, '16102008', 'irpan.guru', 'guru'),
(12, '16102009', 'opik.guru', 'guru'),
(13, '16102010', 'neni.guru', 'guru'),
(14, '16102011', 'etin.guru', 'guru'),
(15, '16102012', 'erwin_djen.guru', 'guru'),
(16, '16102013', 'teni.guru', 'guru'),
(17, '16102014', 'een_nur.guru', 'guru'),
(18, '16102015', 'ega.guru', 'guru'),
(19, '16102016', 'Ghe.guru', 'guru'),
(20, '16102017', 'amel.guru', 'guru'),
(21, '16102018', 'resnu.guru', 'guru'),
(26, 'admin', 'admin', 'admin'),
(27, 'tatausaha', 'tatausaha', 'tatausaha'),
(37, '12528', 'zuy', 'guru'),
(38, 'zuy', 'a582766294aa2246f7272ff0dd193f5b', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nama_siswa` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `nama_ortu` varchar(40) NOT NULL,
  `no_ortu` varchar(15) NOT NULL,
  `id_kelas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nis`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `agama`, `nama_ortu`, `no_ortu`, `id_kelas`) VALUES
(16, '12528', 'ZULFI RAHMAD FATHONI', 'LAKI-LAKI', 'ACEH BESAR', '2005-03-31', 'KOTA ABRU', 'ISLAM', 'HASUT', '081339746771', 12),
(1, '13001', 'ANDI MUH RIFQI', 'LAKI-LAKI', 'MAKASSAR', '2003-12-04', 'TASIKMALAYA', 'ISLAM', 'MUSKAR', '08123456789', 14),
(3, '13002', 'DZULFAQQOR AMIN', 'LAKI-LAKI', 'JAKARTA', '2004-12-22', 'TASIKMALAYA', 'ISLAM', 'ARPEN', '08345678901', 14),
(4, '13003', 'MUH. AMMAR', 'LAKI-LAKI', 'MAKASSAR', '2004-10-16', 'TASIKMALAYA', 'ISLAM', 'RUSYDAH', '+628123456789', 12),
(11, '13004', 'RAVI SOFYAN', 'LAKI-LAKI', 'TASIKMALAYA', '2016-02-29', 'TASIKMALAYA', 'ISLAM', 'MR', '3653786428', 14),
(12, '13102001', 'ADITYA WIBOWO', 'PEREMPUAN', 'CILACAP', '2016-03-31', 'JALAN KENANGAN', 'ISLAM', 'MUCHLIS', '085434567281', 14),
(2, '14001', 'PRADIKA DESTARINI', 'PEREMPUAN', 'PURBALINGGA', '2004-12-11', 'TASIKMALAYA', 'ISLAM', 'RINI', '08234567890', 13),
(7, '14002', 'CALVIN SUTOYO', 'LAKI-LAKI', 'PADANG, SUMATERA BAR', '2005-01-05', 'TASIKMALAYA', 'ISLAM', 'SUTOYO HADININGRAT', '+6254447474', 13),
(5, '15001', 'HARUN AR-RASYID', 'LAKI-LAKI', 'MANILA', '2005-10-15', 'TASIKMALAYA', 'ISLAM', 'RASYID AL-HIKMAH', '+624545657778', 13),
(6, '15002', 'JUNETY', 'PEREMPUAN', 'JAKARTA', '2005-08-08', 'TASIKMALAYA', 'ISLAM', 'MOH.SAIPUDIN', '+6251514578', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indexes for table `tb_absensih`
--
ALTER TABLE `tb_absensih`
  ADD PRIMARY KEY (`id_absensih`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`nip`),
  ADD UNIQUE KEY `id_guru` (`id_guru`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD UNIQUE KEY `kode_guru_2` (`kode_guru`),
  ADD KEY `kode_guru` (`kode_guru`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_mengajar` (`id_mengajar`),
  ADD KEY `id_mengajar_2` (`id_mengajar`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD UNIQUE KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `tb_mengajar`
--
ALTER TABLE `tb_mengajar`
  ADD UNIQUE KEY `id_mengajar` (`id_mengajar`),
  ADD KEY `kode_mapel` (`kode_mapel`),
  ADD KEY `kode_guru` (`kode_guru`),
  ADD KEY `kode_guru_2` (`kode_guru`),
  ADD KEY `kode_mapel_2` (`kode_mapel`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `username_2` (`username`),
  ADD KEY `username_3` (`username`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_kelas_2` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  MODIFY `id_absensi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `tb_absensih`
--
ALTER TABLE `tb_absensih`
  MODIFY `id_absensih` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_mengajar`
--
ALTER TABLE `tb_mengajar`
  MODIFY `id_mengajar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD CONSTRAINT `tb_absensi_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `tb_jadwal` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD CONSTRAINT `tb_jadwal_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_jadwal_ibfk_2` FOREIGN KEY (`id_mengajar`) REFERENCES `tb_mengajar` (`id_mengajar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_mengajar`
--
ALTER TABLE `tb_mengajar`
  ADD CONSTRAINT `tb_mengajar_ibfk_1` FOREIGN KEY (`kode_mapel`) REFERENCES `tb_mapel` (`kode_mapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_mengajar_ibfk_2` FOREIGN KEY (`kode_guru`) REFERENCES `tb_guru` (`kode_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON UPDATE CASCADE;
--
-- Database: `latihan`
--
CREATE DATABASE IF NOT EXISTS `latihan` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `latihan`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'aku', 'aku', '365f59f9f786d161e1575fc1895cc0ef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Database: `pemilos`
--
CREATE DATABASE IF NOT EXISTS `pemilos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pemilos`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_calon`
--

CREATE TABLE `tb_calon` (
  `id` int NOT NULL,
  `nbm` char(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `data` int NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int NOT NULL,
  `nbm` char(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id` int NOT NULL,
  `nbm` char(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ranting` varchar(225) COLLATE utf8mb4_general_ci NOT NULL,
  `pemilos` enum('sudah','belum') COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_suara`
--

CREATE TABLE `tb_suara` (
  `id` int NOT NULL,
  `pengguna_id` int NOT NULL,
  `calon_id` int NOT NULL,
  `jumlah` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_calon`
--
ALTER TABLE `tb_calon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_suara`
--
ALTER TABLE `tb_suara`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_calon`
--
ALTER TABLE `tb_calon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `tb_suara`
--
ALTER TABLE `tb_suara`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
--
-- Database: `pemilos_contih`
--
CREATE DATABASE IF NOT EXISTS `pemilos_contih` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `pemilos_contih`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_ipm`
--

CREATE TABLE `admin_ipm` (
  `id_ipm` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_ipm`
--

INSERT INTO `admin_ipm` (`id_ipm`, `username`, `password`) VALUES
(1, 'ipm', '36df931ba9c9d7abb4302559c13c7ae8');

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id_admin` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'pak guru', '000c549c7395e3195bbbd1c7a0311a26'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `data_calon`
--

CREATE TABLE `data_calon` (
  `id_calon` int NOT NULL,
  `nama_calon` varchar(255) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `jumlah_vote` int NOT NULL,
  `gambar_calon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_calon`
--

INSERT INTO `data_calon` (`id_calon`, `nama_calon`, `visi`, `misi`, `jumlah_vote`, `gambar_calon`) VALUES
(9, 'Udin Saputra', '<ol><li>dfdfafafafasf</li><li>afsafa</li><li>af</li><li>af</li><li>f</li></ol>', '<ul><li>asffaafafafsfsafsaasfaf</li><li>asfasf</li><li>asf</li><li>af</li><li>af</li></ul>', 3, '6166d2c154313.jpg'),
(10, 'boboiboy', '<ol><li>dasdadaasdadsas</li></ol>', '<p>asdsadsad</p>', 2, '6166d2dd44933.jpg'),
(11, 'Calon Pertama', '<p>ini visi</p>', '<p>ini misi</p>', 0, '616799d2a9120.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_siswa` int NOT NULL,
  `no_induk_siswa` char(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `pemilos` enum('belum memilih','sudah memilih') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `no_induk_siswa`, `nama`, `kelas`, `pemilos`) VALUES
(1094, '12529', 'AHMAD SHOLEH', 'X TAV', 'sudah memilih'),
(1095, '12530', 'ALIVIA MARETYA PUTRI', 'X TAV', 'sudah memilih'),
(1096, '12531', 'CANDRA TRI ADITIYA', 'X TAV', 'belum memilih'),
(1097, '12532', 'DERICK AJI PRASETYA', 'X TAV', 'belum memilih'),
(1098, '12533', 'DHIMAS RICHARD APTA ALFREDA NURWANTO', 'X TAV', 'belum memilih'),
(1099, '21313', 'asdad', 'XII RPL 2', 'belum memilih');

-- --------------------------------------------------------

--
-- Table structure for table `tb_chart`
--

CREATE TABLE `tb_chart` (
  `id` int NOT NULL,
  `status` enum('disable','enable') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_chart`
--

INSERT INTO `tb_chart` (`id`, `status`) VALUES
(1, 'disable');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `kelas` enum('X','XI','XII') NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`, `kelas`, `jurusan`) VALUES
(1, 'X TAV ', 'X', 'TAV'),
(2, 'X TPM 1', 'X', 'TPM'),
(3, 'X TPM 2', 'X', 'TPM'),
(4, 'X TKRO 1', 'X', 'TKRO'),
(5, 'X TKRO 2', 'X', 'TKRO'),
(6, 'X TKRO 3', 'X', 'TKRO'),
(7, 'X TKRO 4', 'X', 'TKRO'),
(8, 'X TBSM 1', 'X', 'TBSM'),
(9, 'X TBSM 2', 'X', 'TBSM'),
(10, 'X TBSM 3', 'X', 'TBSM'),
(11, 'X TBSM 4', 'X', 'TBSM'),
(12, 'X RPL 1', 'X', 'RPL'),
(13, 'X RPL 2', 'X', 'RPL'),
(14, 'XI TAV ', 'XI', 'TAV'),
(15, 'XI TPM 1', 'XI', 'TPM'),
(16, 'XI TPM 2', 'XI', 'TPM'),
(17, 'XI TKRO 1', 'XI', 'TKRO'),
(18, 'XI TKRO 2', 'XI', 'TKRO'),
(19, 'XI TKRO 3', 'XI', 'TKRO'),
(20, 'XI TKRO 4', 'XI', 'TKRO'),
(21, 'XI TBSM 1', 'XI', 'TBSM'),
(22, 'XI TBSM 2', 'XI', 'TBSM'),
(23, 'XI TBSM 3', 'XI', 'TBSM'),
(24, 'XI RPL 1', 'XI', 'RPL'),
(25, 'XI RPL 2', 'XI', 'RPL'),
(26, 'XII TAV ', 'XII', 'TAV'),
(27, 'XII TPM 1', 'XII', 'TPM'),
(28, 'XII TPM 2', 'XII', 'TPM'),
(29, 'XII TKRO 1', 'XII', 'TKRO'),
(30, 'XII TKRO 2', 'XII', 'TKRO'),
(31, 'XII TKRO 3', 'XII', 'TKRO'),
(32, 'XII TKRO 4', 'XII', 'TKRO'),
(33, 'XII TKRO 5', 'XII', 'TKRO'),
(34, 'XII TBSM 1', 'XII', 'TBSM'),
(35, 'XII TBSM 2', 'XII', 'TBSM'),
(36, 'XII RPL 1', 'XII', 'RPL'),
(37, 'XII RPL 2', 'XII', 'RPL');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int NOT NULL,
  `no_induk_siswa` char(5) NOT NULL,
  `password` varchar(255) NOT NULL,
  `aktif` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `no_induk_siswa`, `password`, `aktif`) VALUES
(35, '12529', 'NMPmM', '1'),
(36, '12530', '4ztrU', '0'),
(37, '12531', 'B7wQw', '0'),
(38, '12532', '2Pu0T', '0'),
(39, '12533', 'ZFJIG', '1'),
(40, '21313', 'DNX78', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_vote`
--

CREATE TABLE `tb_vote` (
  `id` int NOT NULL,
  `class` varchar(3) NOT NULL,
  `status` enum('enable','disable') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_vote`
--

INSERT INTO `tb_vote` (`id`, `class`, `status`) VALUES
(3, 'X', 'disable'),
(4, 'XI', 'disable'),
(5, 'XII', 'disable');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_ipm`
--
ALTER TABLE `admin_ipm`
  ADD PRIMARY KEY (`id_ipm`);

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_calon`
--
ALTER TABLE `data_calon`
  ADD PRIMARY KEY (`id_calon`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_chart`
--
ALTER TABLE `tb_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_vote`
--
ALTER TABLE `tb_vote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_ipm`
--
ALTER TABLE `admin_ipm`
  MODIFY `id_ipm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_calon`
--
ALTER TABLE `data_calon`
  MODIFY `id_calon` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1100;

--
-- AUTO_INCREMENT for table `tb_chart`
--
ALTER TABLE `tb_chart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tb_vote`
--
ALTER TABLE `tb_vote`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `query` text COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `col_length` text COLLATE utf8mb3_bin,
  `col_collation` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8mb3_bin DEFAULT '',
  `col_default` text COLLATE utf8mb3_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8mb3_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `settings_data` text COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"direct\",\"snap_to_grid\":\"off\",\"relation_lines\":\"true\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8mb3_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `template_data` text COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'server', 'pemilos', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"absen_musaba\",\"latihan\",\"pemilos_contih\",\"phpmyadmin\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_simple_view_export\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `tables` text COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `page_nr` int UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `tables` text COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"pemilos\",\"table\":\"tb_suara\"},{\"db\":\"pemilos\",\"table\":\"tb_pengguna\"},{\"db\":\"pemilos\",\"table\":\"tb_login\"},{\"db\":\"pemilos\",\"table\":\"tb_calon\"},{\"db\":\"pemilos\",\"table\":\"tb_admin\"},{\"db\":\"pemilos\",\"table\":\"tb_pengawas\"},{\"db\":\"pemilos_contih\",\"table\":\"data_siswa\"},{\"db\":\"pemilos_contih\",\"table\":\"data_calon\"},{\"db\":\"pemilos_contih\",\"table\":\"data_admin\"},{\"db\":\"pemilos_contih\",\"table\":\"admin_ipm\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `pdf_page_number` int NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8mb3_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `prefs` text COLLATE utf8mb3_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'absen_musaba', 'tb_guru', '{\"sorted_col\":\"`tb_guru`.`tanggal_lahir`  DESC\"}', '2022-11-22 04:32:40'),
('root', 'absen_musaba', 'tb_pengguna', '{\"sorted_col\":\"`tb_pengguna`.`id_pengguna`  DESC\"}', '2022-11-23 01:21:22'),
('root', 'pemilos_contih', 'data_siswa', '{\"sorted_col\":\"`data_siswa`.`pemilos` ASC\"}', '2023-01-04 04:42:06'),
('root', 'pemilos_contih', 'tb_kelas', '{\"sorted_col\":\"`tb_kelas`.`kelas` ASC\"}', '2023-01-04 04:40:32');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `version` int UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8mb3_bin NOT NULL,
  `schema_sql` text COLLATE utf8mb3_bin,
  `data_sql` longtext COLLATE utf8mb3_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8mb3_bin DEFAULT NULL,
  `tracking_active` int UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2023-01-06 03:22:40', '{\"Console\\/Mode\":\"collapse\",\"ThemeDefault\":\"pmahomme\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8mb3_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8mb3_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8mb3_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
