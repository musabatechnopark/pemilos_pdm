-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 24, 2023 at 01:01 PM
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
(1, 'adminpdm', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(2, 'hhhh', '8dfaa6c552d284856553488c5b817535747dc20c');

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
(1, '918183', '1', 'Piyungan', 'Abdul Haris, SIP, MEK', NULL),
(2, '857208', '2', 'Imogiri', 'Agung Budiantoro', NULL),
(3, '', '3', 'Pandak', 'Agus Amarullah, Drs. H., MA', NULL),
(4, '913370', '4', 'Bambanglipuro', 'Agus Budiantoro, S.IP, S.AP', NULL),
(5, '625552', '5', 'Kasihan', 'Agus Mulyono', NULL),
(6, '799681', '6', 'Pandak', 'Akhmad Azhar, S.Pd', NULL),
(7, '664548', '7', 'Bantul', 'An Nursina Karti, SH,MH', NULL),
(8, '833256', '8', 'Kasihan', 'Ananto Isworo, S.Ag', NULL),
(9, '1136209', '9', 'Piyungan', 'Andy Putra Wijaya, S.E.I., M.S.I', NULL),
(10, '777087', '10', 'Imogiri', 'Anwar Wiyadi, S.Pd.', NULL),
(11, '664544', '11', 'Sanden', 'Arba Riksawan Qomaru, S.E', NULL),
(12, '652531', '12', 'Imogiri', 'Arbangi', NULL),
(13, '975963', '13', 'Imogiri', 'Ardi Kiswanto', NULL),
(14, '918460', '14', 'Imogiri', 'Arief Rachman Anzaruddin, S.Pd.', NULL),
(15, '787395', '15', 'Bantul', 'Aris Samsugito, S.Ag', NULL),
(16, '753010', '16', 'Pajangan', 'Arwan. A.Mp.PerKes', NULL),
(17, '1285369', '17', 'Kasihan', 'Ary Kurniawan, M.Pd', NULL),
(18, '1010932', '18', 'Dlingo', 'Awali', NULL),
(19, '640931', '19', 'Srandakan', 'Bambang Cahyadi Kurniyanto', NULL),
(20, '', '20', 'Sewon', 'Bambang Inanta, Drs. H', NULL),
(21, '648442', '21', 'Bantul', 'Barmawi, Drs', NULL),
(22, '656429', '22', 'Pleret', 'Basrodin, M.Pd', NULL),
(23, '1018067', '23', 'Pandak', 'Chusnul Azhar, S.Pd.I., M.Pd.I', NULL),
(24, '802278', '24', 'Sedayu', 'Darnawi', NULL),
(25, '918185', '25', 'Piyungan', 'Dedi Heri Sutendi', NULL),
(26, '627757', '26', 'Banguntapan', 'Dedi Pramono, Dr., M.Hum', NULL),
(27, '935327', '27', 'Banguntapan', 'Dul Khalim, S.Pd', NULL),
(28, '551523', '28', 'Sewon', 'Dwi Suranto, Drs. M.Pd', NULL),
(29, '798255', '29', 'Imogiri', 'Eka Budi Siswanta', NULL),
(30, '547370', '30', 'Srandakan', 'Eka Wuryanta, S.Pd', NULL),
(31, '718582', '31', 'Sedayu', 'Eko Budi Suprihatin, SPKP', NULL),
(32, '569346', '32', 'Kasihan', 'Ekram Prawiroputro', NULL),
(33, '630959', '33', 'Pandak', 'Encep Komarudin, M.S.I', NULL),
(34, '1020942', '34', 'Jetis', 'Endro Suwarno SE', NULL),
(35, '827447', '35', 'Bantul', 'Fachruddin, S.Ag', NULL),
(36, '672905', '36', 'Kasihan', 'Giman, SST, MT', NULL),
(37, '907783', '37', 'Sewon', 'Harimawan, S.Pd.T', NULL),
(38, '663369', '38', 'Sanden', 'Hendarto, Drs. MA', NULL),
(39, '1120038', '39', 'Pandak', 'Herwanta, SE', NULL),
(40, '736518', '40', 'Pandak', 'Hidayatu Rohman, H. M.Pd', NULL),
(41, '609445', '41', 'Bambanglipuro', 'Imam Nooryanto, Drs., M.Pd', NULL),
(42, '884564', '42', 'Imogiri', 'Insan Gunarjo, S.Pd.I, M.S.I.', NULL),
(43, '758358', '43', 'Bantul', 'Is\'adi Fatah Wijaya, Drs. MSI', NULL),
(44, '1054829', '44', 'Kasihan', 'Januri, S.Pd', NULL),
(45, '793193', '45', 'Bantul', 'Jiriban, H, SH., CN', NULL),
(46, '549325', '46', 'Srandakan', 'Kun Purwanto, Drs', NULL),
(47, '376262', '47', 'Sewon', 'M. Syahro Hadiputro, Drs', NULL),
(48, '1054338', '48', 'Pundong', 'Ma\'ruf Yuniarno, MA', NULL),
(49, '988448', '49', 'Piyungan', 'Martono, Drs. M.Pd', NULL),
(50, '661368', '50', 'Bambanglipuro', 'Mugiyanto, Drs. MSI', NULL),
(51, '992334', '51', 'Bantul', 'Muhammad Farid Hadiyanto, SE', NULL),
(52, '917843', '52', 'Imogiri', 'Muhammad Husni Tri Cahyana, S.Psi', NULL),
(53, '933155', '53', 'Kasihan', 'Muhammad Nur Amin Shalashani,H., S.H.I', NULL),
(54, '790168', '54', 'Imogiri', 'Muhammad Yusuf Dwi Prabawa', NULL),
(55, '717448', '55', 'Pundong', 'Mujiman', NULL),
(56, '1037767', '56', 'Imogiri', 'Mujiyana', NULL),
(57, '503661', '57', 'Imogiri', 'Mukijan, S.Pd', NULL),
(58, '1285312', '58', 'Kasihan', 'Munbazigh, S.Ag., M.H.I', NULL),
(59, '1463431', '59', 'Piyungan', 'Mustari, DR., M.Hum', NULL),
(60, '1099072', '60', 'Sedayu', 'Nanang Joko Purwanto, S.S., M.Pd.I', NULL),
(61, '934530', '61', 'Pandak', 'Narwoto, M.Pd', NULL),
(62, '895162', '62', 'Pundong', 'Nashirudin, H. S.Ag, M.S.I', NULL),
(63, '524171', '63', 'Piyungan', 'Nur Idy, Drs. S.Ag', NULL),
(64, '620504', '64', 'Bantul', 'Nur Wahyuntoro, Drs. H. ', NULL),
(65, '1151905', '65', 'Dlingo', 'Nurwanto, M.Pd', NULL),
(66, '559556', '66', 'Pandak', 'Parjiman, Drs. H., M.Ag', NULL),
(67, '1156384', '67', 'Banguntapan', 'Pradopo, Drs, H', NULL),
(68, '556904', '68', 'Kasihan', 'Purwana, MA', NULL),
(69, '835964', '69', 'Pundong', 'Purwanto, S.Pd, M.Si', NULL),
(70, '763733', '70', 'Pundong', 'R. Agus Purnama, M.Pd', NULL),
(71, '609444', '71', 'Kasihan', 'Rahmad,S.I.Kom', NULL),
(72, '864232', '72', 'Pandak', 'Rahmat Budiyanto, S.Pd', NULL),
(73, '530209', '73', 'Kretek', 'Rahmunanta', NULL),
(74, '1463644', '74', 'Imogiri', 'Riyadi, S.Sos.I, MAP', NULL),
(75, '919925', '75', 'Sanden', 'Rudy Suharta, S.IP., MM', NULL),
(76, '595896', '76', 'Sewon', 'Rusman Hadi, Drs', NULL),
(77, '506282', '77', 'Bantul', 'Saebani, Drs. H., MA. M.Pd', NULL),
(78, '', '78', 'Bantul', 'Sahari, Drs. H', NULL),
(79, '1119453', '79', 'Imogiri', 'Sardianto', NULL),
(80, '1048469', '80', 'Bambanglipuro', 'Sena, S.Pd.I', NULL),
(81, '725813', '81', 'Banguntapan', 'Slamet Abdullah, Drs. H. MA', NULL),
(82, '559462', '82', 'Srandakan', 'Slamet Purwo, Drs', NULL),
(83, '679299', '83', 'Imogiri', 'Sriyadi, Dr., Ir., MP', NULL),
(84, '671037', '84', 'Srandakan', 'Subadi, H. S.Pd', NULL),
(85, '630737', '85', 'Kretek', 'Sugeng Prihatin, SH', NULL),
(86, '713030', '86', 'Pandak', 'Sugiyanto, S.Pd. M.A', NULL),
(87, '873886', '87', 'Sanden', 'Suhadi, S.Pd. M.Pd', NULL),
(88, '487169', '88', 'Kretek', 'Suhardi, M.Pd', NULL),
(89, '', '89', 'Bantul', 'Suhartadi Prasojo, H., S.E', NULL),
(90, '737426', '90', 'Srandakan', 'Suhartono, S.Pd. MA', NULL),
(91, '1048431', '91', 'Kasihan', 'Sujono, Ir', NULL),
(92, '554415', '92', 'Kasihan', 'Sukardi, Dr., H., M.M', NULL),
(93, '886917', '93', 'Bambanglipuro', 'Sukarmin, S.Ag', NULL),
(94, '649778', '94', 'Kasihan', 'Sukirman, H., SH', NULL),
(95, '758548', '95', 'Sewon', 'Sumarna, M.Pd', NULL),
(96, '778593', '96', 'Kasihan', 'Sumaryono', NULL),
(97, '480218', '97', 'Sewon', 'Sunarto, Drs. H', NULL),
(98, '821048', '98', 'Bantul', 'Supardal, M.Pd', NULL),
(99, '790217', '99', 'Kasihan', 'Supriyadi, Drs. MM', NULL),
(100, '956768', '100', 'Srandakan', 'Susamta, S.Pd.,M.Pd.', NULL),
(101, '', '101', 'Bambanglipuro', 'Suwandi Danu Subroto', NULL),
(102, '646641', '102', 'Pandak', 'Suwardiman Anwar Huda, S.Ag., M.S.I', NULL),
(103, '', '103', 'Bantul', 'Suwarjono', NULL),
(104, '844677', '104', 'Kasihan', 'Syahril Sidiq,S.Pd.I., M.A', NULL),
(105, '1045932', '105', 'Pandak', 'Taswanto, S,Kom', NULL),
(106, '568460', '106', 'Pandak', 'Thoyib Hidayat, Drs. H. MSI', NULL),
(107, '600379', '107', 'Kasihan', 'Toto Budi Santosa', NULL),
(108, '620100', '108', 'Jetis', 'Totok Eka Suharto, Dr.rer.nat., M.S', NULL),
(109, '611749', '109', 'Dlingo', 'Totok Sudarto, Drs., M.Pd', NULL),
(110, '1069915', '110', 'Imogiri', 'Tri Putra Suprihatin', NULL),
(111, '965414', '111', 'Srandakan', 'Tri Sutikna, S.Pd', NULL),
(112, '972505', '112', 'Jetis', 'Triyanto, S.Pd', NULL),
(113, '857209', '113', 'Imogiri', 'Triyatna, S.IP', NULL),
(114, '755273', '114', 'Kasihan', 'Widada, S.Pd., M.Pd.', NULL),
(115, '1070156', '115', 'Piyungan', 'Yahya Hanafi, M.Sc', NULL),
(116, '811582', '116', 'Sewon', 'Yudha Kurniawan, M.Acc, K.Ka', NULL),
(117, '825216', '117', 'Sewon', 'Yuniar Wardani, Ph. D.', NULL),
(118, '912416', '118', 'Bantul', 'Yuwanto', NULL);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_calon`
--
ALTER TABLE `tb_calon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

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
