-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 03, 2023 at 01:14 PM
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
-- Database: `pemilos`
--

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
(1, 'adminpdm', 'e2715d9eb13f71ae4c93f374170eb1e62fc7845d');

-- --------------------------------------------------------

--
-- Table structure for table `tb_calon`
--

CREATE TABLE `tb_calon` (
  `id` int NOT NULL,
  `nbm` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `calon_no` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `data` json DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_calon`
--

INSERT INTO `tb_calon` (`id`, `nbm`, `calon_no`, `nama`, `data`) VALUES
(1, '646641', 'CALON 1', 'Suwardiman Anwar Huda, S.Ag., M.S.I', NULL),
(2, '630959', 'CALON 2', 'Encep Komarudin, M.S.I', NULL),
(3, '559556', 'CALON 3', 'Drs. H. Parjiman, M.Ag', NULL),
(4, '933155', 'CALON 4', 'H. Muhammad Nur Amin Shalashani, S.H.I', NULL),
(5, '649778', 'CALON 5', 'H. Sukirman, SH', NULL),
(6, '790217', 'CALON 6', 'Drs. Supriyadi, MM', NULL),
(7, '656429', 'CALON 7', 'Basrodin, M.Pd', NULL),
(8, '664544', 'CALON 8', 'Arba Riksawan Qomaru, S.E', NULL),
(9, '787395', 'CALON 9', 'Aris Samsugito, S.Ag', NULL),
(10, '506282', 'CALON 10', 'Drs. H. Saebani, MA, M.Pd', NULL),
(11, '625552', 'CALON 11', 'Agus Mulyono', NULL),
(12, '663369', 'CALON 12', 'Drs. Hendarto, MA', NULL),
(13, '793193', 'CALON 13', 'H. Jiriban, SH, CN', NULL),
(14, '992334', 'CALON 14', 'Muhammad Farid Hadiyanto, SE', NULL),
(15, '0', ' CALON15', 'Suwarjono', NULL),
(16, '975963', 'CALON 16', 'Ardi Kiswanto', NULL),
(17, '1070156', 'CALON 17', 'Yahya Hanafi, M.Sc', NULL),
(18, '630737', 'CALON 18', 'Sugeng Prihatin, SH', NULL),
(19, '0', 'CALON 19', 'H. Suhartadi Prasojo, S.E', NULL),
(20, '0', 'CALON 20', 'Suwandi Danu Subroto', NULL),
(21, '0', 'CALON 21', 'Drs. H. Agus Amarullah, MA', NULL),
(22, '0', 'CALON 22', 'Drs. H. Sahari', NULL),
(23, '0', 'CALON 23', 'Drs. H. Bambang inanta', NULL),
(24, '918183', 'CALON 24', 'Abdul Haris, SIP, MEK', NULL),
(25, '627757', 'CALON 25', 'Dr. Dedi Pramono, M.Hum.', NULL),
(26, '600379', 'CALON 26', 'Toto Budi Santosa', NULL),
(27, '549325', 'CALON 27', 'Drs. Kun Purwanto', NULL),
(28, '556904', 'CALON 28', 'Drs. Purwana, MA', NULL),
(29, '480218', 'CALON 29', 'Drs. H. Sunarto', NULL),
(30, '661368', 'CALON 30', 'Drs. Mugiyanto, MSI', NULL),
(31, '913370', 'CALON 31', 'Agus Budiantoro, S.IP, S.AP', NULL),
(32, '611749', 'CALON 32', 'Drs. Totok Sudarto, M.Pd', NULL),
(33, '376262', 'CALON 33', 'Drs. M. Syahro Hadiputro', NULL),
(34, '664547', 'CALON 34', 'Farida Ulfah Makrifah', NULL);

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
(5, '123412341234567', '7c222fb2927d828af22f592134e8932480637c0d'),
(6, '1234', '7c222fb2927d828af22f592134e8932480637c0d');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id` int NOT NULL,
  `nbm` char(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cabang` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pemilos` enum('sudah','belum') COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id`, `nbm`, `nama`, `cabang`, `pemilos`) VALUES
(125, '123412341234567', 'King Zuy', 'Kretek', 'belum'),
(126, '12312412312', 'Suka Bapa', 'Bambang', 'belum'),
(127, '1234', 'Sima Sukima', 'Purwodadi', 'belum');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nbm_2` (`nbm`),
  ADD KEY `nbm` (`nbm`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nbm` (`nbm`),
  ADD KEY `nbm_2` (`nbm`);

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
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_calon`
--
ALTER TABLE `tb_calon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `tb_suara`
--
ALTER TABLE `tb_suara`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD CONSTRAINT `tb_login_ibfk_1` FOREIGN KEY (`nbm`) REFERENCES `tb_pengguna` (`nbm`);

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
