-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 09:54 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapgur`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `password_admin` text NOT NULL,
  `nama_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `password_admin`, `nama_admin`) VALUES
(1, '11', 'STEVEN SIMANTUL'),
(2, '22', 'MARIADI');

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftar_guru`
-- (See below for the actual view)
--
CREATE TABLE `daftar_guru` (
`nip` int(10)
,`nama_guru` varchar(50)
,`status_guru` varchar(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftar_kelas`
-- (See below for the actual view)
--
CREATE TABLE `daftar_kelas` (
`alias_kelas` varchar(50)
,`id_kelas` int(10)
,`nama_jurusan` varchar(50)
,`nama_wali` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftar_mapel`
-- (See below for the actual view)
--
CREATE TABLE `daftar_mapel` (
`id_mapel` int(10)
,`nama_mapel` varchar(50)
,`kd1` varchar(50)
,`kd2` varchar(50)
,`kd3` varchar(50)
,`kd4` varchar(50)
,`kd5` varchar(50)
,`jumlah_guru` bigint(21)
,`semester` varchar(10)
,`tahunajar` varchar(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftar_siswa`
-- (See below for the actual view)
--
CREATE TABLE `daftar_siswa` (
`id_siswa` varchar(10)
,`nama_siswa` varchar(50)
,`alias_kelas` varchar(50)
,`semester` varchar(10)
,`tahunajar` varchar(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `detil_kelas`
-- (See below for the actual view)
--
CREATE TABLE `detil_kelas` (
`id_kelas` int(10)
,`alias_kelas` varchar(50)
,`nama_jurusan` varchar(50)
,`jumlah_siswa` bigint(21)
,`nama_wali` varchar(50)
,`semester` varchar(10)
,`tahunajar` varchar(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(10) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `status_guru` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `status_guru`, `password`) VALUES
(1, 'BAGUS EDI PRAYOGO', 'AKTIF', '1'),
(2, 'WIYANTOKO SAPUTRO ', 'AKTIF', '2'),
(3, 'ADE FAUZI \r\n', 'AKTIF', '3'),
(4, 'ARUM AMBARYANI ', 'AKTIF', '4'),
(5, 'ELISTRI YUNAIDAH ', 'AKTIF', '5');

-- --------------------------------------------------------

--
-- Stand-in structure for view `hitung_nk`
-- (See below for the actual view)
--
CREATE TABLE `hitung_nk` (
`id_nk` int(3)
,`nk_portfolio1` int(3)
,`nk_portfolio2` int(3)
,`nk_portfolio3` int(3)
,`nk_portfolio4` int(3)
,`nk_portfolio5` int(3)
,`nk_praktikum1` int(3)
,`nk_praktikum2` int(3)
,`nk_praktikum3` int(3)
,`nk_praktikum4` int(3)
,`nk_praktikum5` int(3)
,`nk_proyek1` int(3)
,`nk_proyek2` int(3)
,`nk_proyek3` int(3)
,`nk_proyek4` int(3)
,`nk_proyek5` int(3)
,`id_kbm` int(10)
,`nk1` bigint(13)
,`nk2` bigint(13)
,`nk3` bigint(13)
,`nk4` bigint(13)
,`nk5` bigint(13)
,`nk` decimal(25,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `hitung_np_nu`
-- (See below for the actual view)
--
CREATE TABLE `hitung_np_nu` (
`id_kbm` int(10)
,`id_np` int(3)
,`id_nu` int(3)
,`np_ulangan1` int(3)
,`np_ulangan2` int(3)
,`np_ulangan3` int(3)
,`np_ulangan4` int(3)
,`np_ulangan5` int(3)
,`np_tugas1` int(3)
,`np_tugas2` int(3)
,`np_tugas3` int(3)
,`np_tugas4` int(3)
,`np_tugas5` int(3)
,`nu_uts` int(3)
,`nu_uas` int(3)
,`np1` bigint(12)
,`np2` bigint(12)
,`np3` bigint(12)
,`np4` bigint(12)
,`np5` bigint(12)
,`np_nu` decimal(22,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(10) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Administrasi Perkantoran'),
(2, 'Bisnis Daring dan Pemasaran'),
(4, 'Teknik Komputer dan Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `kb`
--

CREATE TABLE `kb` (
  `id_kb` int(10) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_periode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kb`
--

INSERT INTO `kb` (`id_kb`, `id_mapel`, `id_guru`, `id_kelas`, `id_periode`) VALUES
(1, 1, 1, 1, 1),
(2, 2, 2, 1, 1),
(3, 3, 3, 1, 1),
(4, 1, 1, 2, 1),
(5, 2, 5, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kbm`
--

CREATE TABLE `kbm` (
  `id_kbm` int(10) NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `id_kb` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kbm`
--

INSERT INTO `kbm` (`id_kbm`, `id_siswa`, `id_kb`) VALUES
(199, '12045', 1),
(200, '12046', 1),
(201, '12057', 1),
(202, '12073', 1),
(203, '12091', 1),
(204, '12095', 1),
(205, '12119', 1),
(206, '12123', 1),
(207, '12126', 1),
(208, '12127', 1),
(209, '12143', 1),
(210, '12184', 1),
(211, '12196', 1),
(212, '12207', 1),
(213, '12225', 1),
(214, '12231', 1),
(215, '12233', 1),
(216, '12254', 1),
(217, '12259', 1),
(218, '12263', 1),
(219, '12272', 1),
(220, '12274', 1),
(221, '12275', 1),
(222, '12280', 1),
(223, '12306', 1),
(224, '12308', 1),
(225, '12311', 1),
(226, '12320', 1),
(227, '12325', 1),
(228, '12333', 1),
(229, '12349', 1),
(230, '12360', 1),
(231, '12382', 1),
(232, '12383', 1),
(233, '12393', 1),
(234, '12403', 1),
(262, '12045', 2),
(263, '12046', 2),
(264, '12057', 2),
(265, '12073', 2),
(266, '12091', 2),
(267, '12095', 2),
(268, '12119', 2),
(269, '12123', 2),
(270, '12126', 2),
(271, '12127', 2),
(272, '12143', 2),
(273, '12184', 2),
(274, '12196', 2),
(275, '12207', 2),
(276, '12225', 2),
(277, '12231', 2),
(278, '12233', 2),
(279, '12254', 2),
(280, '12259', 2),
(281, '12263', 2),
(282, '12272', 2),
(283, '12274', 2),
(284, '12275', 2),
(285, '12280', 2),
(286, '12306', 2),
(287, '12308', 2),
(288, '12311', 2),
(289, '12320', 2),
(290, '12325', 2),
(291, '12333', 2),
(292, '12349', 2),
(293, '12360', 2),
(294, '12382', 2),
(295, '12383', 2),
(296, '12393', 2),
(297, '12403', 2),
(325, '12045', 3),
(326, '12046', 3),
(327, '12057', 3),
(328, '12073', 3),
(329, '12091', 3),
(330, '12095', 3),
(331, '12119', 3),
(332, '12123', 3),
(333, '12126', 3),
(334, '12127', 3),
(335, '12143', 3),
(336, '12184', 3),
(337, '12196', 3),
(338, '12207', 3),
(339, '12225', 3),
(340, '12231', 3),
(341, '12233', 3),
(342, '12254', 3),
(343, '12259', 3),
(344, '12263', 3),
(345, '12272', 3),
(346, '12274', 3),
(347, '12275', 3),
(348, '12280', 3),
(349, '12306', 3),
(350, '12308', 3),
(351, '12311', 3),
(352, '12320', 3),
(353, '12325', 3),
(354, '12333', 3),
(355, '12349', 3),
(356, '12360', 3),
(357, '12382', 3),
(358, '12383', 3),
(359, '12393', 3),
(360, '12403', 3),
(388, '11992', 4),
(389, '11996', 4),
(390, '12019', 4),
(391, '12030', 4),
(392, '12042', 4),
(393, '12050', 4),
(394, '12070', 4),
(395, '12080', 4),
(396, '12082', 4),
(397, '12098', 4),
(398, '12099', 4),
(399, '12116', 4),
(400, '12129', 4),
(401, '12133', 4),
(402, '12138', 4),
(403, '12148', 4),
(404, '12149', 4),
(405, '12169', 4),
(406, '12176', 4),
(407, '12187', 4),
(408, '12203', 4),
(409, '12227', 4),
(410, '12248', 4),
(411, '12265', 4),
(412, '12268', 4),
(413, '12281', 4),
(414, '12282', 4),
(415, '12312', 4),
(416, '12328', 4),
(417, '12332', 4),
(418, '12357', 4),
(419, '12361', 4),
(420, '12365', 4),
(421, '12384', 4),
(422, '12414', 4),
(423, '12415', 4),
(451, '11992', 5),
(452, '11996', 5),
(453, '12019', 5),
(454, '12030', 5),
(455, '12042', 5),
(456, '12050', 5),
(457, '12070', 5),
(458, '12080', 5),
(459, '12082', 5),
(460, '12098', 5),
(461, '12099', 5),
(462, '12116', 5),
(463, '12129', 5),
(464, '12133', 5),
(465, '12138', 5),
(466, '12148', 5),
(467, '12149', 5),
(468, '12169', 5),
(469, '12176', 5),
(470, '12187', 5),
(471, '12203', 5),
(472, '12227', 5),
(473, '12248', 5),
(474, '12265', 5),
(475, '12268', 5),
(476, '12281', 5),
(477, '12282', 5),
(478, '12312', 5),
(479, '12328', 5),
(480, '12332', 5),
(481, '12357', 5),
(482, '12361', 5),
(483, '12365', 5),
(484, '12384', 5),
(485, '12414', 5),
(486, '12415', 5);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(10) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `id_jurusan` int(10) NOT NULL,
  `alias_kelas` varchar(50) NOT NULL,
  `id_wali` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_jurusan`, `alias_kelas`, `id_wali`) VALUES
(1, 'X Administrasi Perkantoran 1', 1, 'X AP 1', 1),
(2, 'X Teknik Komputer dan Jaringan 2', 4, 'X TKJ 2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(10) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `kd1` varchar(50) NOT NULL,
  `kd2` varchar(50) NOT NULL,
  `kd3` varchar(50) NOT NULL,
  `kd4` varchar(50) NOT NULL,
  `kd5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `kd1`, `kd2`, `kd3`, `kd4`, `kd5`) VALUES
(1, 'Bahasa Jawa', 'Tembang Macapat ', 'Cerkak ', 'Pawarta ', 'Rumah Adat ', 'Aksara Jawa '),
(2, 'Matematika', 'Bilangan', 'Pengukuran dan geometri', 'Peluang dan statistika', 'Trigonometri', 'Aljabar'),
(3, 'Bahasa Inggris', 'Vocabulary', 'Listening', 'Reading', 'Grammar', 'Tenses'),
(4, 'Sejarah Indonesia', '', '', '', '', ''),
(5, 'Bahasa Indonesia', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `mapel_guru`
-- (See below for the actual view)
--
CREATE TABLE `mapel_guru` (
`id_kb` int(10)
,`id_guru` int(11)
,`nama_mapel` varchar(50)
,`nama_kelas` varchar(50)
,`id_kelas` int(10)
,`nama_guru` varchar(50)
,`semester` varchar(10)
,`tahunajar` varchar(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_keterampilan`
--

CREATE TABLE `nilai_keterampilan` (
  `id_nk` int(3) NOT NULL,
  `nk_portfolio1` int(3) NOT NULL DEFAULT '0',
  `nk_portfolio2` int(3) NOT NULL DEFAULT '0',
  `nk_portfolio3` int(3) NOT NULL DEFAULT '0',
  `nk_portfolio4` int(3) NOT NULL DEFAULT '0',
  `nk_portfolio5` int(3) NOT NULL DEFAULT '0',
  `nk_praktikum1` int(3) NOT NULL DEFAULT '0',
  `nk_praktikum2` int(3) NOT NULL DEFAULT '0',
  `nk_praktikum3` int(3) NOT NULL DEFAULT '0',
  `nk_praktikum4` int(3) NOT NULL DEFAULT '0',
  `nk_praktikum5` int(3) NOT NULL DEFAULT '0',
  `nk_proyek1` int(3) NOT NULL DEFAULT '0',
  `nk_proyek2` int(3) NOT NULL DEFAULT '0',
  `nk_proyek3` int(3) NOT NULL DEFAULT '0',
  `nk_proyek4` int(3) NOT NULL DEFAULT '0',
  `nk_proyek5` int(3) NOT NULL DEFAULT '0',
  `id_kbm` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_keterampilan`
--

INSERT INTO `nilai_keterampilan` (`id_nk`, `nk_portfolio1`, `nk_portfolio2`, `nk_portfolio3`, `nk_portfolio4`, `nk_portfolio5`, `nk_praktikum1`, `nk_praktikum2`, `nk_praktikum3`, `nk_praktikum4`, `nk_praktikum5`, `nk_proyek1`, `nk_proyek2`, `nk_proyek3`, `nk_proyek4`, `nk_proyek5`, `id_kbm`) VALUES
(1, 0, 84, 0, 84, 0, 90, 0, 70, 0, 0, 0, 0, 0, 0, 86, 199),
(2, 0, 86, 0, 84, 0, 85, 0, 85, 0, 0, 0, 0, 0, 0, 84, 200),
(3, 0, 84, 0, 86, 0, 90, 0, 85, 0, 0, 0, 0, 0, 0, 86, 201),
(4, 0, 86, 0, 86, 0, 95, 0, 85, 0, 0, 0, 0, 0, 0, 84, 202),
(5, 0, 84, 0, 86, 0, 80, 0, 85, 0, 0, 0, 0, 0, 0, 86, 203),
(6, 0, 86, 0, 84, 0, 90, 0, 80, 0, 0, 0, 0, 0, 0, 84, 204),
(7, 0, 84, 0, 86, 0, 80, 0, 85, 0, 0, 0, 0, 0, 0, 86, 205),
(8, 0, 86, 0, 86, 0, 85, 0, 85, 0, 0, 0, 0, 0, 0, 84, 206),
(9, 0, 84, 0, 86, 0, 80, 0, 80, 0, 0, 0, 0, 0, 0, 86, 207),
(10, 0, 86, 0, 86, 0, 85, 0, 85, 0, 0, 0, 0, 0, 0, 84, 208),
(11, 0, 84, 0, 86, 0, 80, 0, 80, 0, 0, 0, 0, 0, 0, 86, 209),
(12, 0, 86, 0, 86, 0, 85, 0, 95, 0, 0, 0, 0, 0, 0, 84, 210),
(13, 0, 84, 0, 86, 0, 95, 0, 90, 0, 0, 0, 0, 0, 0, 86, 211),
(14, 0, 86, 0, 86, 0, 85, 0, 85, 0, 0, 0, 0, 0, 0, 84, 212),
(15, 0, 84, 0, 84, 0, 80, 0, 85, 0, 0, 0, 0, 0, 0, 86, 213),
(16, 0, 86, 0, 86, 0, 80, 0, 85, 0, 0, 0, 0, 0, 0, 84, 214),
(17, 0, 84, 0, 86, 0, 80, 0, 90, 0, 0, 0, 0, 0, 0, 86, 215),
(18, 0, 86, 0, 86, 0, 85, 0, 80, 0, 0, 0, 0, 0, 0, 84, 216),
(19, 0, 84, 0, 86, 0, 90, 0, 90, 0, 0, 0, 0, 0, 0, 86, 217),
(20, 0, 86, 0, 86, 0, 80, 0, 90, 0, 0, 0, 0, 0, 0, 84, 218),
(21, 0, 84, 0, 86, 0, 80, 0, 80, 0, 0, 0, 0, 0, 0, 86, 219),
(22, 0, 86, 0, 86, 0, 75, 0, 75, 0, 0, 0, 0, 0, 0, 84, 220),
(23, 0, 84, 0, 86, 0, 80, 0, 80, 0, 0, 0, 0, 0, 0, 86, 221),
(24, 0, 86, 0, 86, 0, 80, 0, 85, 0, 0, 0, 0, 0, 0, 84, 222),
(25, 0, 84, 0, 86, 0, 80, 0, 80, 0, 0, 0, 0, 0, 0, 86, 223),
(26, 0, 86, 0, 86, 0, 80, 0, 85, 0, 0, 0, 0, 0, 0, 84, 224),
(27, 0, 84, 0, 86, 0, 80, 0, 80, 0, 0, 0, 0, 0, 0, 86, 225),
(28, 0, 86, 0, 86, 0, 80, 0, 90, 0, 0, 0, 0, 0, 0, 84, 226),
(29, 0, 84, 0, 86, 0, 80, 0, 85, 0, 0, 0, 0, 0, 0, 86, 227),
(30, 0, 86, 0, 86, 0, 95, 0, 85, 0, 0, 0, 0, 0, 0, 84, 228),
(31, 0, 84, 0, 86, 0, 80, 0, 80, 0, 0, 0, 0, 0, 0, 86, 229),
(32, 0, 86, 0, 86, 0, 80, 0, 85, 0, 0, 0, 0, 0, 0, 84, 230),
(33, 0, 84, 0, 86, 0, 80, 0, 70, 0, 0, 0, 0, 0, 0, 86, 231),
(34, 0, 86, 0, 84, 0, 85, 0, 80, 0, 0, 0, 0, 0, 0, 84, 232),
(35, 0, 84, 0, 86, 0, 95, 0, 95, 0, 0, 0, 0, 0, 0, 86, 233),
(36, 0, 86, 0, 86, 0, 85, 0, 85, 0, 0, 0, 0, 0, 0, 84, 234),
(37, 0, 0, 90, 84, 0, 0, 0, 0, 90, 86, 0, 0, 0, 86, 0, 262),
(38, 0, 0, 60, 86, 0, 0, 0, 0, 75, 86, 0, 0, 0, 84, 0, 263),
(39, 0, 0, 85, 84, 0, 0, 0, 0, 90, 86, 0, 0, 0, 86, 0, 264),
(40, 0, 0, 85, 86, 0, 0, 0, 0, 80, 86, 0, 0, 0, 84, 0, 265),
(41, 0, 0, 95, 84, 0, 0, 0, 0, 75, 86, 0, 0, 0, 86, 0, 266),
(42, 0, 0, 85, 86, 0, 0, 0, 0, 85, 86, 0, 0, 0, 84, 0, 267),
(43, 0, 0, 80, 84, 0, 0, 0, 0, 85, 86, 0, 0, 0, 86, 0, 268),
(44, 0, 0, 90, 86, 0, 0, 0, 0, 85, 86, 0, 0, 0, 84, 0, 269),
(45, 0, 0, 85, 84, 0, 0, 0, 0, 85, 86, 0, 0, 0, 86, 0, 270),
(46, 0, 0, 80, 86, 0, 0, 0, 0, 80, 86, 0, 0, 0, 84, 0, 271),
(47, 0, 0, 85, 84, 0, 0, 0, 0, 80, 86, 0, 0, 0, 86, 0, 272),
(48, 0, 0, 85, 86, 0, 0, 0, 0, 80, 86, 0, 0, 0, 84, 0, 273),
(49, 0, 0, 90, 84, 0, 0, 0, 0, 85, 86, 0, 0, 0, 86, 0, 274),
(50, 0, 0, 80, 86, 0, 0, 0, 0, 85, 86, 0, 0, 0, 84, 0, 275),
(51, 0, 0, 85, 84, 0, 0, 0, 0, 80, 86, 0, 0, 0, 86, 0, 276),
(52, 0, 0, 85, 86, 0, 0, 0, 0, 75, 86, 0, 0, 0, 84, 0, 277),
(53, 0, 0, 70, 84, 0, 0, 0, 0, 80, 86, 0, 0, 0, 86, 0, 278),
(54, 0, 0, 80, 86, 0, 0, 0, 0, 85, 86, 0, 0, 0, 84, 0, 279),
(55, 0, 0, 90, 84, 0, 0, 0, 0, 90, 86, 0, 0, 0, 86, 0, 280),
(56, 0, 0, 80, 86, 0, 0, 0, 0, 80, 86, 0, 0, 0, 84, 0, 281),
(57, 0, 0, 70, 84, 0, 0, 0, 0, 85, 86, 0, 0, 0, 86, 0, 282),
(58, 0, 0, 85, 86, 0, 0, 0, 0, 85, 86, 0, 0, 0, 84, 0, 283),
(59, 0, 0, 68, 84, 0, 0, 0, 0, 75, 86, 0, 0, 0, 86, 0, 284),
(60, 0, 0, 85, 86, 0, 0, 0, 0, 85, 86, 0, 0, 0, 84, 0, 285),
(61, 0, 0, 85, 84, 0, 0, 0, 0, 80, 86, 0, 0, 0, 86, 0, 286),
(62, 0, 0, 80, 86, 0, 0, 0, 0, 75, 86, 0, 0, 0, 84, 0, 287),
(63, 0, 0, 85, 84, 0, 0, 0, 0, 85, 86, 0, 0, 0, 86, 0, 288),
(64, 0, 0, 85, 86, 0, 0, 0, 0, 90, 86, 0, 0, 0, 84, 0, 289),
(65, 0, 0, 80, 84, 0, 0, 0, 0, 85, 86, 0, 0, 0, 86, 0, 290),
(66, 0, 0, 80, 86, 0, 0, 0, 0, 80, 86, 0, 0, 0, 84, 0, 291),
(67, 0, 0, 80, 84, 0, 0, 0, 0, 85, 86, 0, 0, 0, 86, 0, 292),
(68, 0, 0, 85, 86, 0, 0, 0, 0, 80, 86, 0, 0, 0, 84, 0, 293),
(69, 0, 0, 85, 84, 0, 0, 0, 0, 80, 86, 0, 0, 0, 86, 0, 294),
(70, 0, 0, 90, 86, 0, 0, 0, 0, 90, 86, 0, 0, 0, 84, 0, 295),
(71, 0, 0, 85, 84, 0, 0, 0, 0, 80, 86, 0, 0, 0, 86, 0, 296),
(72, 0, 0, 85, 86, 0, 0, 0, 0, 80, 86, 0, 0, 0, 84, 0, 297),
(73, 0, 95, 0, 84, 0, 85, 0, 86, 0, 0, 0, 0, 0, 0, 86, 388),
(74, 0, 90, 0, 86, 0, 85, 0, 86, 0, 0, 0, 0, 0, 0, 84, 389),
(75, 0, 80, 0, 84, 0, 85, 0, 70, 0, 0, 0, 0, 0, 0, 86, 390),
(76, 0, 75, 0, 86, 0, 75, 0, 86, 0, 0, 0, 0, 0, 0, 84, 391),
(77, 0, 85, 0, 84, 0, 90, 0, 86, 0, 0, 0, 0, 0, 0, 86, 392),
(78, 0, 80, 0, 86, 0, 75, 0, 70, 0, 0, 0, 0, 0, 0, 84, 393),
(79, 0, 95, 0, 84, 0, 85, 0, 70, 0, 0, 0, 0, 0, 0, 86, 394),
(80, 0, 80, 0, 86, 0, 80, 0, 70, 0, 0, 0, 0, 0, 0, 84, 395),
(81, 0, 75, 0, 84, 0, 80, 0, 70, 0, 0, 0, 0, 0, 0, 86, 396),
(82, 0, 90, 0, 86, 0, 80, 0, 70, 0, 0, 0, 0, 0, 0, 84, 397),
(83, 0, 80, 0, 84, 0, 80, 0, 70, 0, 0, 0, 0, 0, 0, 86, 398),
(84, 0, 85, 0, 86, 0, 90, 0, 86, 0, 0, 0, 0, 0, 0, 84, 399),
(85, 0, 80, 0, 84, 0, 85, 0, 70, 0, 0, 0, 0, 0, 0, 86, 400),
(86, 0, 90, 0, 86, 0, 95, 0, 70, 0, 0, 0, 0, 0, 0, 84, 401),
(87, 0, 75, 0, 84, 0, 75, 0, 70, 0, 0, 0, 0, 0, 0, 86, 402),
(88, 0, 80, 0, 86, 0, 85, 0, 70, 0, 0, 0, 0, 0, 0, 84, 403),
(89, 0, 90, 0, 84, 0, 95, 0, 70, 0, 0, 0, 0, 0, 0, 86, 404),
(90, 0, 90, 0, 86, 0, 85, 0, 70, 0, 0, 0, 0, 0, 0, 84, 405),
(91, 0, 90, 0, 84, 0, 80, 0, 86, 0, 0, 0, 0, 0, 0, 86, 406),
(92, 0, 80, 0, 86, 0, 80, 0, 86, 0, 0, 0, 0, 0, 0, 84, 407),
(93, 0, 80, 0, 84, 0, 75, 0, 70, 0, 0, 0, 0, 0, 0, 86, 408),
(94, 0, 80, 0, 86, 0, 80, 0, 86, 0, 0, 0, 0, 0, 0, 84, 409),
(95, 0, 85, 0, 84, 0, 80, 0, 86, 0, 0, 0, 0, 0, 0, 86, 410),
(96, 0, 85, 0, 86, 0, 80, 0, 86, 0, 0, 0, 0, 0, 0, 84, 411),
(97, 0, 80, 0, 84, 0, 85, 0, 70, 0, 0, 0, 0, 0, 0, 86, 412),
(98, 0, 80, 0, 86, 0, 80, 0, 70, 0, 0, 0, 0, 0, 0, 84, 413),
(99, 0, 85, 0, 84, 0, 85, 0, 70, 0, 0, 0, 0, 0, 0, 86, 414),
(100, 0, 80, 0, 86, 0, 75, 0, 70, 0, 0, 0, 0, 0, 0, 84, 415),
(101, 0, 75, 0, 84, 0, 80, 0, 86, 0, 0, 0, 0, 0, 0, 86, 416),
(102, 0, 85, 0, 86, 0, 95, 0, 86, 0, 0, 0, 0, 0, 0, 84, 417),
(103, 0, 90, 0, 84, 0, 80, 0, 70, 0, 0, 0, 0, 0, 0, 86, 418),
(104, 0, 75, 0, 86, 0, 85, 0, 70, 0, 0, 0, 0, 0, 0, 84, 419),
(105, 0, 80, 0, 84, 0, 80, 0, 86, 0, 0, 0, 0, 0, 0, 86, 420),
(106, 0, 75, 0, 86, 0, 75, 0, 86, 0, 0, 0, 0, 0, 0, 84, 421),
(107, 0, 80, 0, 84, 0, 75, 0, 86, 0, 0, 0, 0, 0, 0, 86, 422),
(108, 0, 90, 0, 86, 0, 85, 0, 86, 0, 0, 0, 0, 0, 0, 84, 423);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_pengetahuan`
--

CREATE TABLE `nilai_pengetahuan` (
  `id_np` int(3) NOT NULL,
  `np_ulangan1` int(3) NOT NULL DEFAULT '0',
  `np_ulangan2` int(3) NOT NULL DEFAULT '0',
  `np_ulangan3` int(3) NOT NULL DEFAULT '0',
  `np_ulangan4` int(3) NOT NULL DEFAULT '0',
  `np_ulangan5` int(3) NOT NULL DEFAULT '0',
  `np_tugas1` int(3) NOT NULL DEFAULT '0',
  `np_tugas2` int(3) NOT NULL DEFAULT '0',
  `np_tugas3` int(3) NOT NULL DEFAULT '0',
  `np_tugas4` int(3) NOT NULL DEFAULT '0',
  `np_tugas5` int(3) NOT NULL DEFAULT '0',
  `id_kbm` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `nilai_siswa`
-- (See below for the actual view)
--
CREATE TABLE `nilai_siswa` (
`id_siswa` varchar(10)
,`nama_siswa` varchar(50)
,`alias_kelas` varchar(50)
,`nama_mapel` varchar(50)
,`nk` decimal(25,0)
,`np_nu` decimal(22,0)
,`semester` varchar(10)
,`tahunajar` varchar(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_ujian`
--

CREATE TABLE `nilai_ujian` (
  `id_nu` int(3) NOT NULL,
  `id_kbm` int(10) NOT NULL,
  `nu_uts` int(3) NOT NULL DEFAULT '0',
  `nu_uas` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `id_periode` int(10) NOT NULL,
  `tahunajar` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`id_periode`, `tahunajar`, `semester`) VALUES
(1, '2018/2019', 'Ganjil'),
(2, '2018/2019', 'Genap'),
(3, '2019/2020', 'Ganjil'),
(4, '2019/2020', 'Genap');

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(3) NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `sakit` int(3) NOT NULL DEFAULT '0',
  `izin` int(3) NOT NULL DEFAULT '0',
  `alfa` int(3) NOT NULL DEFAULT '0',
  `id_periode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` varchar(10) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jk_siswa` varchar(10) NOT NULL,
  `id_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `jk_siswa`, `id_kelas`) VALUES
('11992', 'ADELLA VIDYA NANDA', 'PEREMPUAN', '2'),
('11996', 'AFDRI JIYARIS GAMARADIKA', 'PEREMPUAN', '2'),
('12019', 'ALIVIA LUTFIANA', 'PEREMPUAN', '2'),
('12030', 'ANANDA LOVELIA NESSA', 'PEREMPUAN', '2'),
('12042', 'ARIF ARGANI', 'LAKI-LAKI', '2'),
('12045', 'ARIZIHAN SAFITRI', 'PEREMPUAN', '1'),
('12046', 'ARIZKA WULANDARI', 'PEREMPUAN', '1'),
('12050', 'ASTI SAFITRI', 'PEREMPUAN', '2'),
('12057', 'A\'YUN NAFISAH', 'PEREMPUAN', '1'),
('12070', 'CINDY VANTIKA', 'PEREMPUAN', '2'),
('12073', 'CLARA NATASYA ANGELITA', 'PEREMPUAN', '1'),
('12080', 'DESHINTA BELLA', 'PEREMPUAN', '2'),
('12082', 'DEVA MARTHA LINA', 'PEREMPUAN', '2'),
('12091', 'DIAN DWI PRASETIYANI', 'PEREMPUAN', '1'),
('12095', 'DILLA FAZILA', 'PEREMPUAN', '1'),
('12098', 'DINA ARDIANI SAFITRI', 'PEREMPUAN', '2'),
('12099', 'DINA BUDI SAPUTRI', 'PEREMPUAN', '2'),
('12116', 'DWIANA SILVI RAHMADANI', 'PEREMPUAN', '2'),
('12119', 'ELFA YUWAIDA SIFAIYAH', 'PEREMPUAN', '1'),
('12123', 'ELSA DIAN PRATIWI', 'PEREMPUAN', '1'),
('12126', 'ERATRIANA', 'PEREMPUAN', '1'),
('12127', 'ERI DATUN FA\'IZAH', 'PEREMPUAN', '1'),
('12129', 'ERI SUSANTI', 'PEREMPUAN', '2'),
('12133', 'ERNI CATUR UMIYANAH', 'PEREMPUAN', '2'),
('12138', 'EVA JUMIYATI', 'PEREMPUAN', '2'),
('12143', 'FANI TRIANA DEVI', 'PEREMPUAN', '1'),
('12148', 'FATMA HANIFAH', 'PEREMPUAN', '2'),
('12149', 'FEDIYA NUR ALFIYAH', 'PEREMPUAN', '2'),
('12169', 'HIDAYATUL IMANIYAH', 'PEREMPUAN', '2'),
('12176', 'IHDA ULINNAFISA', 'PEREMPUAN', '2'),
('12184', 'INTAN NASHWA', 'PEREMPUAN', '1'),
('12187', 'ISTIYANAH FATMAWATI', 'PEREMPUAN', '2'),
('12196', 'KHOFFIFATUL MUNAWARROH', 'PEREMPUAN', '1'),
('12203', 'LAILATUL AZIZAH', 'PEREMPUAN', '2'),
('12207', 'LIDIYANA TRIWAHYUNINGSIH', 'PEREMPUAN', '1'),
('12225', 'MELINDA INTAN FARIZI', 'PEREMPUAN', '1'),
('12227', 'MICO YUMNA ARDHANA', 'LAKI-LAKI', '2'),
('12231', 'MUHAMMAD ALIF ARIO CAHYANTO', 'LAKI-LAKI', '1'),
('12233', 'MUHAMMAD BINTANG PRADANA', 'LAKI-LAKI', '1'),
('12248', 'NAIELA ROKHMAH', 'PEREMPUAN', '2'),
('12254', 'NELLY NAYLUVAR', 'PEREMPUAN', '1'),
('12259', 'NINING FITRIANI', 'PEREMPUAN', '1'),
('12263', 'NOFITA WINDISARI', 'PEREMPUAN', '1'),
('12265', 'NOVIKA ANGGRAENI', 'PEREMPUAN', '2'),
('12268', 'NUR AFIFAH', 'PEREMPUAN', '2'),
('12272', 'NURUL AZIZAH', 'PEREMPUAN', '1'),
('12274', 'NURUL KHASANAH', 'PEREMPUAN', '1'),
('12275', 'OKTANIA RISMAWATI', 'PEREMPUAN', '1'),
('12280', 'RAHAJENG GANDI PAWESTRI', 'PEREMPUAN', '1'),
('12281', 'RAHAYU FANIA SETIANINGSIH', 'PEREMPUAN', '2'),
('12282', 'RAHAYU WIDIYANINGSIH', 'PEREMPUAN', '2'),
('12306', 'RINDANG GITA CAHYA NINGTYAS', 'PEREMPUAN', '1'),
('12308', 'RINI SETYOWATI', 'PEREMPUAN', '1'),
('12311', 'RISKA AMARA', 'PEREMPUAN', '1'),
('12312', 'RISKA DWI PURWANTI', 'PEREMPUAN', '2'),
('12320', 'RIZKI NUR HIDAYAH', 'PEREMPUAN', '1'),
('12325', 'ROSYIDA IZZATI ROHMAH', 'PEREMPUAN', '1'),
('12328', 'SALSA BILLA NUR UTAMI', 'PEREMPUAN', '2'),
('12332', 'SAUSAN SALSABILA', 'PEREMPUAN', '2'),
('12333', 'SEFIA INDAH SARI', 'PEREMPUAN', '1'),
('12349', 'SHOLICHA DWI LESTARI', 'PEREMPUAN', '1'),
('12357', 'SITI MALIKHAH', 'PEREMPUAN', '2'),
('12360', 'SITI NUR MAYLA SARI', 'PEREMPUAN', '1'),
('12361', 'SITI PRASETYO HARYANI', 'PEREMPUAN', '2'),
('12365', 'SOVIYANA', 'PEREMPUAN', '2'),
('12382', 'USI SAIFIN', 'PEREMPUAN', '1'),
('12383', 'USWATUN CHASANAH', 'PEREMPUAN', '1'),
('12384', 'USWATUN KHASANAH', 'PEREMPUAN', '2'),
('12393', 'WALMA WANDANI', 'PEREMPUAN', '1'),
('12403', 'YENI ANISA', 'PEREMPUAN', '1'),
('12414', 'ZULFIA NUR AZIZAH', 'PEREMPUAN', '2'),
('12415', 'ZULIS NURRIANSYAH', 'PEREMPUAN', '2');

-- --------------------------------------------------------

--
-- Table structure for table `wali`
--

CREATE TABLE `wali` (
  `id_wali` int(10) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wali`
--

INSERT INTO `wali` (`id_wali`, `id_guru`, `id_kelas`) VALUES
(1, 2, 1),
(2, 5, 2);

-- --------------------------------------------------------

--
-- Structure for view `daftar_guru`
--
DROP TABLE IF EXISTS `daftar_guru`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftar_guru`  AS  select `guru`.`id_guru` AS `nip`,`guru`.`nama_guru` AS `nama_guru`,`guru`.`status_guru` AS `status_guru` from `guru` ;

-- --------------------------------------------------------

--
-- Structure for view `daftar_kelas`
--
DROP TABLE IF EXISTS `daftar_kelas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftar_kelas`  AS  select `kelas`.`alias_kelas` AS `alias_kelas`,`kelas`.`id_kelas` AS `id_kelas`,`jurusan`.`nama_jurusan` AS `nama_jurusan`,`guru`.`nama_guru` AS `nama_wali` from (((`kelas` join `wali` on((`wali`.`id_wali` = `kelas`.`id_wali`))) join `guru` on((`guru`.`id_guru` = `wali`.`id_guru`))) join `jurusan` on((`jurusan`.`id_jurusan` = `kelas`.`id_jurusan`))) ;

-- --------------------------------------------------------

--
-- Structure for view `daftar_mapel`
--
DROP TABLE IF EXISTS `daftar_mapel`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftar_mapel`  AS  select `mapel`.`id_mapel` AS `id_mapel`,`mapel`.`nama_mapel` AS `nama_mapel`,`mapel`.`kd1` AS `kd1`,`mapel`.`kd2` AS `kd2`,`mapel`.`kd3` AS `kd3`,`mapel`.`kd4` AS `kd4`,`mapel`.`kd5` AS `kd5`,count(`mapel`.`id_mapel`) AS `jumlah_guru`,`periode`.`semester` AS `semester`,`periode`.`tahunajar` AS `tahunajar` from (((`kb` join `mapel` on((`mapel`.`id_mapel` = `kb`.`id_mapel`))) join `guru` on((`guru`.`id_guru` = `kb`.`id_guru`))) join `periode` on((`periode`.`id_periode` = `kb`.`id_periode`))) group by `mapel`.`id_mapel` ;

-- --------------------------------------------------------

--
-- Structure for view `daftar_siswa`
--
DROP TABLE IF EXISTS `daftar_siswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftar_siswa`  AS  select `kbm`.`id_siswa` AS `id_siswa`,`siswa`.`nama_siswa` AS `nama_siswa`,`kelas`.`alias_kelas` AS `alias_kelas`,`periode`.`semester` AS `semester`,`periode`.`tahunajar` AS `tahunajar` from ((((`kbm` join `kb` on((`kb`.`id_kb` = `kbm`.`id_kb`))) join `kelas` on((`kelas`.`id_kelas` = `kb`.`id_kelas`))) join `siswa` on((`siswa`.`id_siswa` = `kbm`.`id_siswa`))) join `periode` on((`periode`.`id_periode` = `kb`.`id_periode`))) group by `kbm`.`id_siswa` ;

-- --------------------------------------------------------

--
-- Structure for view `detil_kelas`
--
DROP TABLE IF EXISTS `detil_kelas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detil_kelas`  AS  select `daftar_kelas`.`id_kelas` AS `id_kelas`,`daftar_kelas`.`alias_kelas` AS `alias_kelas`,`daftar_kelas`.`nama_jurusan` AS `nama_jurusan`,count(`daftar_kelas`.`alias_kelas`) AS `jumlah_siswa`,`daftar_kelas`.`nama_wali` AS `nama_wali`,`daftar_siswa`.`semester` AS `semester`,`daftar_siswa`.`tahunajar` AS `tahunajar` from (`daftar_siswa` join `daftar_kelas`) where (`daftar_kelas`.`alias_kelas` = `daftar_siswa`.`alias_kelas`) group by `daftar_kelas`.`alias_kelas` ;

-- --------------------------------------------------------

--
-- Structure for view `hitung_nk`
--
DROP TABLE IF EXISTS `hitung_nk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hitung_nk`  AS  select `nilai_keterampilan`.`id_nk` AS `id_nk`,`nilai_keterampilan`.`nk_portfolio1` AS `nk_portfolio1`,`nilai_keterampilan`.`nk_portfolio2` AS `nk_portfolio2`,`nilai_keterampilan`.`nk_portfolio3` AS `nk_portfolio3`,`nilai_keterampilan`.`nk_portfolio4` AS `nk_portfolio4`,`nilai_keterampilan`.`nk_portfolio5` AS `nk_portfolio5`,`nilai_keterampilan`.`nk_praktikum1` AS `nk_praktikum1`,`nilai_keterampilan`.`nk_praktikum2` AS `nk_praktikum2`,`nilai_keterampilan`.`nk_praktikum3` AS `nk_praktikum3`,`nilai_keterampilan`.`nk_praktikum4` AS `nk_praktikum4`,`nilai_keterampilan`.`nk_praktikum5` AS `nk_praktikum5`,`nilai_keterampilan`.`nk_proyek1` AS `nk_proyek1`,`nilai_keterampilan`.`nk_proyek2` AS `nk_proyek2`,`nilai_keterampilan`.`nk_proyek3` AS `nk_proyek3`,`nilai_keterampilan`.`nk_proyek4` AS `nk_proyek4`,`nilai_keterampilan`.`nk_proyek5` AS `nk_proyek5`,`nilai_keterampilan`.`id_kbm` AS `id_kbm`,((`nilai_keterampilan`.`nk_portfolio1` + `nilai_keterampilan`.`nk_praktikum1`) + `nilai_keterampilan`.`nk_proyek1`) AS `nk1`,((`nilai_keterampilan`.`nk_portfolio2` + `nilai_keterampilan`.`nk_praktikum2`) + `nilai_keterampilan`.`nk_proyek2`) AS `nk2`,((`nilai_keterampilan`.`nk_portfolio3` + `nilai_keterampilan`.`nk_praktikum3`) + `nilai_keterampilan`.`nk_proyek3`) AS `nk3`,((`nilai_keterampilan`.`nk_portfolio4` + `nilai_keterampilan`.`nk_praktikum4`) + `nilai_keterampilan`.`nk_proyek4`) AS `nk4`,((`nilai_keterampilan`.`nk_portfolio5` + `nilai_keterampilan`.`nk_praktikum5`) + `nilai_keterampilan`.`nk_proyek5`) AS `nk5`,round((((((((((((((((`nilai_keterampilan`.`nk_portfolio1` + `nilai_keterampilan`.`nk_praktikum1`) + `nilai_keterampilan`.`nk_proyek1`) + `nilai_keterampilan`.`nk_portfolio2`) + `nilai_keterampilan`.`nk_praktikum2`) + `nilai_keterampilan`.`nk_proyek2`) + `nilai_keterampilan`.`nk_portfolio3`) + `nilai_keterampilan`.`nk_praktikum3`) + `nilai_keterampilan`.`nk_proyek3`) + `nilai_keterampilan`.`nk_portfolio4`) + `nilai_keterampilan`.`nk_praktikum4`) + `nilai_keterampilan`.`nk_proyek4`) + `nilai_keterampilan`.`nk_portfolio5`) + `nilai_keterampilan`.`nk_praktikum5`) + `nilai_keterampilan`.`nk_proyek5`) / 5),0) AS `nk` from `nilai_keterampilan` ;

-- --------------------------------------------------------

--
-- Structure for view `hitung_np_nu`
--
DROP TABLE IF EXISTS `hitung_np_nu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hitung_np_nu`  AS  select `kbm`.`id_kbm` AS `id_kbm`,`nilai_pengetahuan`.`id_np` AS `id_np`,`nilai_ujian`.`id_nu` AS `id_nu`,`nilai_pengetahuan`.`np_ulangan1` AS `np_ulangan1`,`nilai_pengetahuan`.`np_ulangan2` AS `np_ulangan2`,`nilai_pengetahuan`.`np_ulangan3` AS `np_ulangan3`,`nilai_pengetahuan`.`np_ulangan4` AS `np_ulangan4`,`nilai_pengetahuan`.`np_ulangan5` AS `np_ulangan5`,`nilai_pengetahuan`.`np_tugas1` AS `np_tugas1`,`nilai_pengetahuan`.`np_tugas2` AS `np_tugas2`,`nilai_pengetahuan`.`np_tugas3` AS `np_tugas3`,`nilai_pengetahuan`.`np_tugas4` AS `np_tugas4`,`nilai_pengetahuan`.`np_tugas5` AS `np_tugas5`,`nilai_ujian`.`nu_uts` AS `nu_uts`,`nilai_ujian`.`nu_uas` AS `nu_uas`,(`nilai_pengetahuan`.`np_ulangan1` + `nilai_pengetahuan`.`np_tugas1`) AS `np1`,(`nilai_pengetahuan`.`np_ulangan2` + `nilai_pengetahuan`.`np_tugas2`) AS `np2`,(`nilai_pengetahuan`.`np_ulangan3` + `nilai_pengetahuan`.`np_tugas3`) AS `np3`,(`nilai_pengetahuan`.`np_ulangan4` + `nilai_pengetahuan`.`np_tugas4`) AS `np4`,(`nilai_pengetahuan`.`np_ulangan5` + `nilai_pengetahuan`.`np_tugas5`) AS `np5`,round(((((((((((((`nilai_pengetahuan`.`np_ulangan1` + `nilai_pengetahuan`.`np_tugas1`) + `nilai_pengetahuan`.`np_ulangan2`) + `nilai_pengetahuan`.`np_tugas2`) + `nilai_pengetahuan`.`np_ulangan3`) + `nilai_pengetahuan`.`np_tugas3`) + `nilai_pengetahuan`.`np_ulangan4`) + `nilai_pengetahuan`.`np_tugas4`) + `nilai_pengetahuan`.`np_ulangan5`) + `nilai_pengetahuan`.`np_tugas5`) + `nilai_ujian`.`nu_uts`) + `nilai_ujian`.`nu_uas`) / 7),0) AS `np_nu` from ((`kbm` join `nilai_pengetahuan` on((`nilai_pengetahuan`.`id_kbm` = `kbm`.`id_kbm`))) join `nilai_ujian` on((`nilai_ujian`.`id_kbm` = `kbm`.`id_kbm`))) ;

-- --------------------------------------------------------

--
-- Structure for view `mapel_guru`
--
DROP TABLE IF EXISTS `mapel_guru`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mapel_guru`  AS  select `kb`.`id_kb` AS `id_kb`,`kb`.`id_guru` AS `id_guru`,`mapel`.`nama_mapel` AS `nama_mapel`,`kelas`.`nama_kelas` AS `nama_kelas`,`kelas`.`id_kelas` AS `id_kelas`,`guru`.`nama_guru` AS `nama_guru`,`periode`.`semester` AS `semester`,`periode`.`tahunajar` AS `tahunajar` from ((((`kb` join `mapel` on((`kb`.`id_mapel` = `mapel`.`id_mapel`))) join `kelas` on((`kb`.`id_kelas` = `kelas`.`id_kelas`))) join `guru` on((`kb`.`id_guru` = `guru`.`id_guru`))) join `periode` on((`periode`.`id_periode` = `kb`.`id_periode`))) ;

-- --------------------------------------------------------

--
-- Structure for view `nilai_siswa`
--
DROP TABLE IF EXISTS `nilai_siswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nilai_siswa`  AS  select `siswa`.`id_siswa` AS `id_siswa`,`siswa`.`nama_siswa` AS `nama_siswa`,`kelas`.`alias_kelas` AS `alias_kelas`,`mapel`.`nama_mapel` AS `nama_mapel`,`hitung_nk`.`nk` AS `nk`,`hitung_np_nu`.`np_nu` AS `np_nu`,`periode`.`semester` AS `semester`,`periode`.`tahunajar` AS `tahunajar` from (((((((`kbm` join `siswa` on((`siswa`.`id_siswa` = `kbm`.`id_siswa`))) join `kb` on((`kb`.`id_kb` = `kbm`.`id_kb`))) join `mapel` on((`mapel`.`id_mapel` = `kb`.`id_mapel`))) join `kelas` on((`kelas`.`id_kelas` = `kb`.`id_kelas`))) join `periode` on((`periode`.`id_periode` = `kb`.`id_periode`))) join `hitung_nk` on((`hitung_nk`.`id_kbm` = `kbm`.`id_kbm`))) join `hitung_np_nu` on((`hitung_np_nu`.`id_kbm` = `kbm`.`id_kbm`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kb`
--
ALTER TABLE `kb`
  ADD PRIMARY KEY (`id_kb`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_periode` (`id_periode`);

--
-- Indexes for table `kbm`
--
ALTER TABLE `kbm`
  ADD PRIMARY KEY (`id_kbm`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_kb` (`id_kb`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `nilai_keterampilan`
--
ALTER TABLE `nilai_keterampilan`
  ADD PRIMARY KEY (`id_nk`),
  ADD KEY `id_kbm` (`id_kbm`);

--
-- Indexes for table `nilai_pengetahuan`
--
ALTER TABLE `nilai_pengetahuan`
  ADD PRIMARY KEY (`id_np`),
  ADD KEY `id_kbm` (`id_kbm`);

--
-- Indexes for table `nilai_ujian`
--
ALTER TABLE `nilai_ujian`
  ADD PRIMARY KEY (`id_nu`),
  ADD KEY `id_kbm` (`id_kbm`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_periode` (`id_periode`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `wali`
--
ALTER TABLE `wali`
  ADD PRIMARY KEY (`id_wali`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kb`
--
ALTER TABLE `kb`
  MODIFY `id_kb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kbm`
--
ALTER TABLE `kbm`
  MODIFY `id_kbm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=487;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nilai_keterampilan`
--
ALTER TABLE `nilai_keterampilan`
  MODIFY `id_nk` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `nilai_pengetahuan`
--
ALTER TABLE `nilai_pengetahuan`
  MODIFY `id_np` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_ujian`
--
ALTER TABLE `nilai_ujian`
  MODIFY `id_nu` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `id_periode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id_presensi` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wali`
--
ALTER TABLE `wali`
  MODIFY `id_wali` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kb`
--
ALTER TABLE `kb`
  ADD CONSTRAINT `kb_ibfk_1` FOREIGN KEY (`id_periode`) REFERENCES `periode` (`id_periode`),
  ADD CONSTRAINT `kb_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`),
  ADD CONSTRAINT `kb_ibfk_3` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`),
  ADD CONSTRAINT `kb_ibfk_4` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `kbm`
--
ALTER TABLE `kbm`
  ADD CONSTRAINT `kbm_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`),
  ADD CONSTRAINT `kbm_ibfk_2` FOREIGN KEY (`id_kb`) REFERENCES `kb` (`id_kb`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);

--
-- Constraints for table `nilai_keterampilan`
--
ALTER TABLE `nilai_keterampilan`
  ADD CONSTRAINT `nilai_keterampilan_ibfk_1` FOREIGN KEY (`id_kbm`) REFERENCES `kbm` (`id_kbm`);

--
-- Constraints for table `nilai_pengetahuan`
--
ALTER TABLE `nilai_pengetahuan`
  ADD CONSTRAINT `nilai_pengetahuan_ibfk_1` FOREIGN KEY (`id_kbm`) REFERENCES `kbm` (`id_kbm`);

--
-- Constraints for table `nilai_ujian`
--
ALTER TABLE `nilai_ujian`
  ADD CONSTRAINT `nilai_ujian_ibfk_1` FOREIGN KEY (`id_kbm`) REFERENCES `kbm` (`id_kbm`);

--
-- Constraints for table `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`),
  ADD CONSTRAINT `presensi_ibfk_2` FOREIGN KEY (`id_periode`) REFERENCES `periode` (`id_periode`);

--
-- Constraints for table `wali`
--
ALTER TABLE `wali`
  ADD CONSTRAINT `wali_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`),
  ADD CONSTRAINT `wali_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
