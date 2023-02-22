-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 22, 2023 at 01:04 PM
-- Server version: 8.0.32-0ubuntu0.22.04.2
-- PHP Version: 8.1.2-1ubuntu2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemilos_pdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int NOT NULL,
  `start_pemilos` timestamp NOT NULL,
  `pemilos` int NOT NULL,
  `on_datetime` int NOT NULL,
  `max_pilih` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `start_pemilos`, `pemilos`, `on_datetime`, `max_pilih`) VALUES
(1, '2023-02-22 17:45:00', 1, 0, 13);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'adminpdm', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `tb_calon`
--

CREATE TABLE `tb_calon` (
  `id` int NOT NULL,
  `nbm` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `calon_no` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `data` json DEFAULT NULL
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

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `nbm`, `password`) VALUES
(5, '1111', '011c945f30ce2cbafc452f39840f025693339c42'),
(6, '1234', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(13, '12345', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(14, '123', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(15, '123456', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(16, '11223344', 'b986415c93241513d33d01fcf532a6c47ac4f3ee'),
(17, '1534', '0ff6f2c78c3f785fd15525e78e1fe9a223479ed1'),
(18, '6745', '9abc5ebd3d49af17936087e13bc210322dca63bc');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id` int NOT NULL,
  `nbm` char(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cabang` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pemilos` enum('Sudah','Belum') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id`, `nbm`, `nama`, `cabang`, `pemilos`) VALUES
(125, '1111', 'King Zuy', 'Kretek', 'Belum'),
(129, '1234', 'Zulkarnain', 'Budidaya', 'Sudah'),
(138, '12345', 'alip supriadi', 'kono kae', 'Belum'),
(139, '123', 'Yoga Yudi', 'sewon', 'Belum'),
(140, '123456', 'Alip Yudianto', 'imogiri', 'Sudah'),
(141, '11223344', 'siswa musaba', 'kretek', 'Sudah'),
(142, '1534', 'udin', 'purwodadi', 'Belum'),
(143, '6745', 'dzaki', 'gabusan', 'Belum');

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
-- Dumping data for table `tb_suara`
--

INSERT INTO `tb_suara` (`id`, `pengguna_id`, `calon_id`, `jumlah`) VALUES
(14, 129, 1, 1),
(15, 129, 6, 1),
(16, 129, 8, 1),
(17, 129, 9, 1),
(18, 129, 11, 1),
(19, 129, 14, 1),
(20, 129, 15, 1),
(21, 129, 16, 1),
(22, 129, 18, 1),
(23, 129, 19, 1),
(24, 129, 22, 1),
(25, 129, 23, 1),
(26, 129, 24, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nbm_2` (`nbm`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nbm` (`nbm`);

--
-- Indexes for table `tb_suara`
--
ALTER TABLE `tb_suara`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengguna_id` (`pengguna_id`),
  ADD KEY `calon_id` (`calon_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_calon`
--
ALTER TABLE `tb_calon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `tb_suara`
--
ALTER TABLE `tb_suara`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_suara`
--
ALTER TABLE `tb_suara`
  ADD CONSTRAINT `tb_suara_ibfk_1` FOREIGN KEY (`pengguna_id`) REFERENCES `tb_pengguna` (`id`),
  ADD CONSTRAINT `tb_suara_ibfk_2` FOREIGN KEY (`calon_id`) REFERENCES `tb_calon` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
