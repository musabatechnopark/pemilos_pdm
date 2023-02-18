-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 18, 2023 at 06:07 PM
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
  `on_datetime` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `start_pemilos`, `pemilos`, `on_datetime`) VALUES
(1, '2023-02-17 06:02:00', 1, 0);

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

--
-- Dumping data for table `tb_calon`
--

INSERT INTO `tb_calon` (`id`, `nbm`, `calon_no`, `keterangan`, `nama`, `data`) VALUES
(1, '777087', 'CALON 1', 'Imogiri', 'Anwar Wiyadi, S.Pd.', NULL),
(2, '549325', 'CALON 2', 'Srandakan', 'Drs. Kun Purwanto', NULL),
(3, '559462', 'CALON 3', 'Srandakan', 'Drs. Slamet Purwo', NULL),
(4, '611749', 'CALON 4', 'Dlingo', 'Drs. Totok Sudarto, M.Pd', NULL),
(5, '547370', 'CALON 5', 'Srandakan', 'Eka Wuryanta, S.Pd', NULL),
(6, '630959', 'CALON 6', 'Pandak', 'Encep Komarudin, M.S.I', NULL),
(7, '827447', 'CALON 7', 'Bantul', 'Fachruddin, S.Ag', NULL),
(8, '907783', 'CALON 8', 'Sewon', 'Harimawan, S.Pd.T', NULL),
(9, '884564', 'CALON 9', 'Imogiri', 'Insan Gunarjo, S.Pd.I, M.S.I.', NULL),
(10, '1054338', 'CALON 10', 'Pundong', 'Ma\'ruf Yuniarno, MA', NULL),
(11, '934530', 'CALON 11', 'Pandak', 'Narwoto, M.Pd', NULL),
(12, '918183', 'CALON 12', 'Piyungan', 'Abdul Haris, SIP, MEK', NULL),
(13, '857208', 'CALON 13', 'Imogiri', 'Agung Budiantoro', NULL),
(14, '913370', 'CALON 14', 'Bambanglipuro', 'Agus Budiantoro, S.IP, S.AP', NULL),
(15, '625552', 'CALON 15', 'Kasihan', 'Agus Mulyono', NULL),
(16, '799681', 'CALON 16', 'Pandak', 'Akhmad Azhar, S.Pd', NULL),
(17, '664548', 'CALON 17', 'Bantul', 'An Nursina Karti, SH,MH', NULL),
(18, '833256', 'CALON 18', 'Kasihan', 'Ananto Isworo, S.Ag', NULL),
(19, '1136209', 'CALON 19', 'Piyungan', 'Andy Putra Wijaya, S.E.I., M.S.I', NULL),
(20, '664544', 'CALON 20', 'Sanden', 'Arba Riksawan Qomaru, S.E', NULL),
(21, '652531', 'CALON 21', 'Imogiri', 'Arbangi', NULL),
(22, '975963', 'CALON 22', 'Imogiri', 'Ardi Kiswanto', NULL),
(23, '918460', 'CALON 23', 'Imogiri', 'Arief Rachman Anzaruddin, S.Pd.', NULL),
(24, '787395', 'CALON 24', 'Bantul', 'Aris Samsugito, S.Ag', NULL),
(25, '753010', 'CALON 25', 'Pajangan', 'Arwan. A.Mp.PerKes', NULL),
(26, '1285369', 'CALON 26', 'Kasihan', 'Ary Kurniawan, M.Pd', NULL),
(27, '1010932', 'CALON 27', 'Dlingo', 'Awali', NULL),
(28, '640931', 'CALON 28', 'Srandakan', 'Bambang Cahyadi Kurniyanto', NULL),
(29, '656429', 'CALON 29', 'Pleret', 'Basrodin, M.Pd', NULL),
(30, '1018067', 'CALON 30', 'Pandak', 'Chusnul Azhar, S.Pd.I., M.Pd.I', NULL),
(31, '802278', 'CALON 31', 'Sedayu', 'Darnawi', NULL),
(32, '918185', 'CALON 32', 'Piyungan', 'Dedi Heri Sutendi', NULL),
(33, '627757', 'CALON 33', 'Banguntapan', 'Dr. Dedi Pramono, M.Hum.', NULL),
(34, '554415', 'CALON 34', 'Kasihan', 'Dr. H. Sukardi, M.M', NULL),
(35, '679299', 'CALON 35', 'Imogiri', 'Dr. Ir. Sriyadi, MP.', NULL),
(36, '1463431', 'CALON 36', 'Piyungan', 'DR. Mustari, M.Hum.', NULL),
(37, '620100', 'CALON 37', 'Jetis', 'Dr.rer.nat. Totok Eka Suharto, M.S.', NULL),
(38, '551523', 'CALON 38', 'Sewon', 'Drs. Dwi Suranto, M.Pd', NULL),
(39, '0', 'CALON 39', 'Pandak', 'Drs. H. Agus Amarullah, MA', NULL),
(40, '0', 'CALON 40', 'Sewon', 'Drs. H. Bambang inanta', NULL),
(41, '559556', 'CALON 41', 'Pandak', 'Drs. H. Parjiman, M.Ag', NULL),
(42, '1156384', 'CALON 42', 'Banguntapan', 'Drs. H. Pradopo', NULL),
(43, '506282', 'CALON 43', 'Bantul', 'Drs. H. Saebani, MA, M.Pd', NULL),
(44, '0', 'CALON 44', 'Bantul', 'Drs. H. Sahari', NULL),
(45, '480218', 'CALON 45', 'Sewon', 'Drs. H. Sunarto', NULL),
(46, '663369', 'CALON 46', 'Sanden', 'Drs. Hendarto, MA', NULL),
(47, '758358', 'CALON 47', 'Bantul', 'Drs. Is\'adi Fatah Wijaya, MSI', NULL),
(48, '376262', 'CALON 48', 'Sewon', 'Drs. M. Syahro Hadiputro', NULL),
(49, '988448', 'CALON 49', 'Piyungan', 'Drs. Martono, M.Pd.', NULL),
(50, '661368', 'CALON 50', 'Bambanglipuro', 'Drs. Mugiyanto, MSI', NULL),
(51, '524171', 'CALON 51', 'Piyungan', 'Drs. Nur Idy, S.Ag', NULL),
(52, '556904', 'CALON 52', 'Kasihan', 'Drs. Purwana, MA', NULL),
(53, '595896', 'CALON 53', 'Sewon', 'Drs. Rusman Hadi', NULL),
(54, '790217', 'CALON 54', 'Kasihan', 'Drs. Supriyadi, MM', NULL),
(55, '935327', 'CALON 55', 'Banguntapan', 'Dul Khalim, S.Pd', NULL),
(56, '798255', 'CALON 56', 'Imogiri', 'Eka Budi Siswanta', NULL),
(57, '718582', 'CALON 57', 'Sedayu', 'Eko Budi Suprihatin, SPKP', NULL),
(58, '569346', 'CALON 58', 'Kasihan', 'Ekram Prawiroputro', NULL),
(59, '1020942', 'CALON 59', 'Jetis', 'Endro Suwarno SE', NULL),
(60, '672905', 'CALON 60', 'Kasihan', 'Giman, SST, MT', NULL),
(61, '736518', 'CALON 61', 'Pandak', 'H. Hidayatu Rohman, M.Pd', NULL),
(62, '793193', 'CALON 62', 'Bantul', 'H. Jiriban, SH, CN', NULL),
(63, '933155', 'CALON 63', 'Kasihan', 'H. Muhammad Nur Amin Shalashani, S.H.I', NULL),
(64, '895162', 'CALON 64', 'Pundong', 'H. Nashirudin, S.Ag, M.S.I', NULL),
(65, '671037', 'CALON 65', 'Srandakan', 'H. Subadi, S.Pd', NULL),
(66, '0', 'CALON 66', 'Bantul', 'H. Suhartadi Prasojo, S.E', NULL),
(67, '649778', 'CALON 67', 'Kasihan', 'H. Sukirman, SH', NULL),
(68, '1120038', 'CALON 68', 'Pandak', 'Herwanta, SE', NULL),
(69, '1048431', 'CALON 69', 'Kasihan', 'Ir. Sujono', NULL),
(70, '1054829', 'CALON 70', 'Kasihan', 'Januri, S.Pd', NULL),
(71, '992334', 'CALON 71', 'Bantul', 'Muhammad Farid Hadiyanto, SE', NULL),
(72, '917843', 'CALON 72', 'Imogiri', 'Muhammad Husni Tri Cahyana, S.Psi', NULL),
(73, '790168', 'CALON 73', 'Imogiri', 'Muhammad Yusuf Dwi Prabawa', NULL),
(74, '717448', 'CALON 74', 'Pundong', 'Mujiman', NULL),
(75, '1037767', 'CALON 75', 'Imogiri', 'Mujiyana', NULL),
(76, '503661', 'CALON 76', 'Imogiri', 'Mukijan, S.Pd', NULL),
(77, '1285312', 'CALON 77', 'Kasihan', 'Munbazigh, S.Ag., M.H.I', NULL),
(78, '1099072', 'CALON 78', 'Sedayu', 'Nanang Joko Purwanto, S.S., M.Pd.I', NULL),
(79, '1151905', 'CALON 79', 'Dlingo', 'Nurwanto, M.Pd', NULL),
(80, '835964', 'CALON 80', 'Pundong', 'Purwanto, S.Pd, M.Si', NULL),
(81, '763733', 'CALON 81', 'Pundong', 'R. Agus Purnama, M.Pd', NULL),
(82, '609444', 'CALON 82', 'Kasihan', 'Rahmad,S.I.Kom', NULL),
(83, '864232', 'CALON 83', 'Pandak', 'Rahmat Budiyanto, S.Pd', NULL),
(84, '530209', 'CALON 84', 'Kretek', 'Rahmunanta', NULL),
(85, '1463644', 'CALON 85', 'Imogiri', 'Riyadi, S.Sos.I, MAP', NULL),
(86, '919925', 'CALON 86', 'Sanden', 'Rudy Suharta, S.IP., MM', NULL),
(87, '1119453', 'CALON 87', 'Imogiri', 'Sardianto', NULL),
(88, '1048469', 'CALON 88', 'Bambanglipuro', 'Sena, S.Pd.I', NULL),
(89, '630737', 'CALON 89', 'Kretek', 'Sugeng Prihatin, SH', NULL),
(90, '713030', 'CALON 90', 'Pandak', 'Sugiyanto, S.Pd. M.A', NULL),
(91, '487169', 'CALON 91', 'Kretek', 'Suhardi, M.Pd', NULL),
(92, '737426', 'CALON 92', 'Srandakan', 'Suhartono, S.Pd. MA', NULL),
(93, '886917', 'CALON 93', 'Bambanglipuro', 'Sukarmin, S.Ag', NULL),
(94, '758548', 'CALON 94', 'Sewon', 'Sumarna, M.Pd', NULL),
(95, '778593', 'CALON 95', 'Kasihan', 'Sumaryono', NULL),
(96, '821048', 'CALON 96', 'Bantul', 'Supardal, M.Pd', NULL),
(97, '956768', 'CALON 97', 'Srandakan', 'Susamta, S.Pd.,M.Pd.', NULL),
(98, '0', 'CALON 98', 'Bambanglipuro', 'Suwandi Danu Subroto', NULL),
(99, '646641', 'CALON 99', 'Pandak', 'Suwardiman Anwar Huda, S.Ag., M.S.I', NULL),
(100, '0', 'CALON 100', 'Bantul', 'Suwarjono', NULL),
(101, '844677', 'CALON 101', 'Kasihan', 'Syahril Sidiq,S.Pd.I., M.A', NULL),
(102, '1045932', 'CALON 102', 'Pandak', 'Taswanto, S,Kom', NULL),
(103, '600379', 'CALON 103', 'Kasihan', 'Toto Budi Santosa', NULL),
(104, '1069915', 'CALON 104', 'Imogiri', 'Tri Putra Suprihatin', NULL),
(105, '965414', 'CALON 105', 'Srandakan', 'Tri Sutikna, S.Pd', NULL),
(106, '972505', 'CALON 106', 'Jetis', 'Triyanto, S.Pd', NULL),
(107, '857209', 'CALON 107', 'Imogiri', 'Triyatna, S.IP', NULL),
(108, '1070156', 'CALON 108', 'Piyungan', 'Yahya Hanafi, M.Sc', NULL),
(109, '811582', 'CALON 109', 'Sewon', 'Yudha Kurniawan, M.Acc, K.Ka', NULL),
(110, '825216', 'CALON 110', 'Sewon', 'Yuniar Wardani, Ph. D.', NULL),
(111, '912416', 'CALON 111', 'Bantul', 'Yuwanto', NULL);

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
(6, '1234', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

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
(125, '123412341234567', 'King Zuy', 'Kretek', 'Belum'),
(129, '1234', 'Zulkarnain', 'Budidaya', 'Sudah');

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
(1, 129, 2, 1),
(2, 129, 3, 1),
(3, 129, 6, 1),
(4, 129, 7, 1),
(5, 129, 10, 1),
(6, 129, 11, 1),
(7, 129, 14, 1),
(8, 129, 15, 1),
(9, 129, 18, 1),
(10, 129, 19, 1),
(11, 129, 22, 1),
(12, 129, 23, 1),
(13, 129, 27, 1);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `tb_suara`
--
ALTER TABLE `tb_suara`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
