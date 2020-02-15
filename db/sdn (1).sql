-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2020 at 06:36 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdn`
--

-- --------------------------------------------------------

--
-- Table structure for table `akhlak`
--

CREATE TABLE `akhlak` (
  `akhlak_id` int(50) NOT NULL,
  `akhlak_nama` varchar(50) DEFAULT NULL,
  `akhlak_value` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akhlak`
--

INSERT INTO `akhlak` (`akhlak_id`, `akhlak_nama`, `akhlak_value`) VALUES
(1, 'Disiplin', 10),
(2, 'Kerapian', 10),
(3, 'Kesopanan', 10);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `guru_kode` int(50) NOT NULL,
  `guru_nama` varchar(50) DEFAULT NULL,
  `guru_username` varchar(50) DEFAULT NULL,
  `guru_password` varchar(50) DEFAULT NULL,
  `guru_agama` varchar(50) DEFAULT NULL,
  `guru_gender` varchar(11) DEFAULT NULL,
  `guru_tgllhr` date DEFAULT NULL,
  `guru_tlp` varchar(20) DEFAULT NULL,
  `guru_alamat` varchar(50) DEFAULT NULL,
  `guru_role_id` int(50) DEFAULT NULL,
  `guru_kelas_id` int(50) DEFAULT NULL,
  `guru_mapel_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`guru_kode`, `guru_nama`, `guru_username`, `guru_password`, `guru_agama`, `guru_gender`, `guru_tgllhr`, `guru_tlp`, `guru_alamat`, `guru_role_id`, `guru_kelas_id`, `guru_mapel_id`) VALUES
(123456, 'Krisna', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'islam', 'Laki', '1992-11-01', '08312367152', 'diatas bumiku', 1, 1, 1),
(2131112, 'test', 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'islam', 'Laki', '2016-12-01', '0812345677834', 'Yogya', 1, 1, 1),
(32122111, 'Guru A', 'guru', 'ee602ea7fc0e687d10fb0487784c9d03e9e3dd9c', 'islam', 'Laki', '2016-12-01', '0812345677834', 'Yogya', 2, 101, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE `kehadiran` (
  `kehadiran_id` int(50) NOT NULL,
  `kehadiran_nama` varchar(50) DEFAULT NULL,
  `kehadiran_value` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kehadiran`
--

INSERT INTO `kehadiran` (`kehadiran_id`, `kehadiran_nama`, `kehadiran_value`) VALUES
(1, 'Masuk', 1),
(2, 'Izin', 1),
(3, 'Sakit', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kelas_id` int(50) NOT NULL,
  `kelas_nama` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kelas_id`, `kelas_nama`) VALUES
(1, ''),
(101, 'I-A'),
(102, 'I-B'),
(103, 'I-C'),
(104, 'I-D'),
(105, 'I-E'),
(106, 'I-F'),
(107, 'I-G'),
(201, 'II-A'),
(202, 'II-B'),
(203, 'II-C'),
(204, 'II-D'),
(205, 'II-E'),
(206, 'II-F'),
(207, 'II-G'),
(301, 'III-A'),
(302, 'III-B'),
(303, 'III-C'),
(304, 'III-D'),
(305, 'III-E'),
(306, 'III-F'),
(307, 'III-G'),
(401, 'IV-A'),
(402, 'IV-B'),
(403, 'IV-C'),
(404, 'IV-D'),
(405, 'IV-E'),
(406, 'IV-F'),
(407, 'IV-G'),
(501, 'V-A'),
(502, 'V-B'),
(503, 'V-C'),
(504, 'V-D'),
(505, 'V-E'),
(506, 'V-F'),
(507, 'V-G'),
(601, 'VI-A'),
(602, 'VI-B'),
(603, 'VI-C'),
(604, 'VI-D'),
(605, 'VI-E'),
(606, 'VI-F'),
(607, 'VI-G');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `mapel_id` int(50) NOT NULL,
  `mapel_nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`mapel_id`, `mapel_nama`) VALUES
(1, ''),
(2, 'Agama'),
(3, 'Bahasa Indonesia'),
(4, 'Bahasa Inggris'),
(5, 'Mulok'),
(6, 'IPA'),
(7, 'IPS'),
(8, 'Matematika'),
(9, 'Penjaskes'),
(10, 'PKN'),
(11, 'Seni Budaya'),
(12, 'TIK');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(50) NOT NULL,
  `role_nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_nama`) VALUES
(1, 'Admin'),
(2, 'Guru'),
(3, 'Siswa');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `siswa_kode` int(50) NOT NULL,
  `siswa_nama` varchar(50) DEFAULT NULL,
  `siswa_username` varchar(50) DEFAULT NULL,
  `siswa_password` varchar(50) DEFAULT NULL,
  `siswa_agama` varchar(50) DEFAULT NULL,
  `siswa_gender` varchar(11) DEFAULT NULL,
  `siswa_tgllhr` date DEFAULT NULL,
  `siswa_tlp` varchar(20) DEFAULT NULL,
  `siswa_wali` varchar(50) DEFAULT NULL,
  `siswa_alamat` varchar(50) DEFAULT NULL,
  `siswa_role_id` int(50) DEFAULT NULL,
  `siswa_kelas_id` int(50) DEFAULT NULL,
  `siswa_mapel_id` int(50) DEFAULT NULL,
  `nilai_agama1` float DEFAULT '0',
  `nilai_agama2` float DEFAULT '0',
  `nilai_agama3` float DEFAULT '0',
  `nilai_agama4` float DEFAULT '0',
  `nilai_agama5` float DEFAULT '0',
  `nilai_agama6` float DEFAULT '0',
  `nilai_b_indonesia1` float DEFAULT '0',
  `nilai_b_indonesia2` float DEFAULT '0',
  `nilai_b_indonesia3` float DEFAULT '0',
  `nilai_b_indonesia4` float DEFAULT '0',
  `nilai_b_indonesia5` float DEFAULT '0',
  `nilai_b_indonesia6` float DEFAULT '0',
  `nilai_b_inggris1` float DEFAULT '0',
  `nilai_b_inggris2` float DEFAULT '0',
  `nilai_b_inggris3` float DEFAULT '0',
  `nilai_b_inggris4` float DEFAULT '0',
  `nilai_b_inggris5` float DEFAULT '0',
  `nilai_b_inggris6` float DEFAULT '0',
  `nilai_b_jawa1` float DEFAULT '0',
  `nilai_b_jawa2` float DEFAULT '0',
  `nilai_b_jawa3` float DEFAULT '0',
  `nilai_b_jawa4` float DEFAULT '0',
  `nilai_b_jawa5` float DEFAULT '0',
  `nilai_b_jawa6` float DEFAULT '0',
  `nilai_IPA1` float DEFAULT '0',
  `nilai_IPA2` float DEFAULT '0',
  `nilai_IPA3` float DEFAULT '0',
  `nilai_IPA4` float DEFAULT '0',
  `nilai_IPA5` float DEFAULT '0',
  `nilai_IPA6` float DEFAULT '0',
  `nilai_IPS1` float DEFAULT '0',
  `nilai_IPS2` float DEFAULT '0',
  `nilai_IPS3` float DEFAULT '0',
  `nilai_IPS4` float DEFAULT '0',
  `nilai_IPS5` float DEFAULT '0',
  `nilai_IPS6` float DEFAULT '0',
  `nilai_matematika1` float DEFAULT '0',
  `nilai_matematika2` float DEFAULT '0',
  `nilai_matematika3` float DEFAULT '0',
  `nilai_matematika4` float DEFAULT '0',
  `nilai_matematika5` float DEFAULT '0',
  `nilai_matematika6` float DEFAULT '0',
  `nilai_penjaskes1` float DEFAULT '0',
  `nilai_penjaskes2` float DEFAULT '0',
  `nilai_penjaskes3` float DEFAULT '0',
  `nilai_penjaskes4` float DEFAULT '0',
  `nilai_penjaskes5` float DEFAULT '0',
  `nilai_penjaskes6` float DEFAULT '0',
  `nilai_PKN1` float DEFAULT '0',
  `nilai_PKN2` float DEFAULT '0',
  `nilai_PKN3` float DEFAULT '0',
  `nilai_PKN4` float DEFAULT '0',
  `nilai_PKN5` float DEFAULT '0',
  `nilai_PKN6` float DEFAULT '0',
  `nilai_seni_budaya1` float DEFAULT '0',
  `nilai_seni_budaya2` float DEFAULT '0',
  `nilai_seni_budaya3` float DEFAULT '0',
  `nilai_seni_budaya4` float DEFAULT '0',
  `nilai_seni_budaya5` float DEFAULT '0',
  `nilai_seni_budaya6` float DEFAULT '0',
  `nilai_TIK1` float DEFAULT '0',
  `nilai_TIK2` float DEFAULT '0',
  `nilai_TIK3` float DEFAULT '0',
  `nilai_TIK4` float DEFAULT '0',
  `nilai_TIK5` float DEFAULT '0',
  `nilai_TIK6` float DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`siswa_kode`, `siswa_nama`, `siswa_username`, `siswa_password`, `siswa_agama`, `siswa_gender`, `siswa_tgllhr`, `siswa_tlp`, `siswa_wali`, `siswa_alamat`, `siswa_role_id`, `siswa_kelas_id`, `siswa_mapel_id`, `nilai_agama1`, `nilai_agama2`, `nilai_agama3`, `nilai_agama4`, `nilai_agama5`, `nilai_agama6`, `nilai_b_indonesia1`, `nilai_b_indonesia2`, `nilai_b_indonesia3`, `nilai_b_indonesia4`, `nilai_b_indonesia5`, `nilai_b_indonesia6`, `nilai_b_inggris1`, `nilai_b_inggris2`, `nilai_b_inggris3`, `nilai_b_inggris4`, `nilai_b_inggris5`, `nilai_b_inggris6`, `nilai_b_jawa1`, `nilai_b_jawa2`, `nilai_b_jawa3`, `nilai_b_jawa4`, `nilai_b_jawa5`, `nilai_b_jawa6`, `nilai_IPA1`, `nilai_IPA2`, `nilai_IPA3`, `nilai_IPA4`, `nilai_IPA5`, `nilai_IPA6`, `nilai_IPS1`, `nilai_IPS2`, `nilai_IPS3`, `nilai_IPS4`, `nilai_IPS5`, `nilai_IPS6`, `nilai_matematika1`, `nilai_matematika2`, `nilai_matematika3`, `nilai_matematika4`, `nilai_matematika5`, `nilai_matematika6`, `nilai_penjaskes1`, `nilai_penjaskes2`, `nilai_penjaskes3`, `nilai_penjaskes4`, `nilai_penjaskes5`, `nilai_penjaskes6`, `nilai_PKN1`, `nilai_PKN2`, `nilai_PKN3`, `nilai_PKN4`, `nilai_PKN5`, `nilai_PKN6`, `nilai_seni_budaya1`, `nilai_seni_budaya2`, `nilai_seni_budaya3`, `nilai_seni_budaya4`, `nilai_seni_budaya5`, `nilai_seni_budaya6`, `nilai_TIK1`, `nilai_TIK2`, `nilai_TIK3`, `nilai_TIK4`, `nilai_TIK5`, `nilai_TIK6`) VALUES
(123123, 'Siswa A', 'siswa', '7a24156a1971d85acf2ae64d9dbdf5322566636f', 'islam', 'Laki', '2016-12-01', '0812345677834', 'Orang Tua Siswa', 'Yogyakarta', 3, 101, 1, 83, 0, 0, 0, 0, 0, 84, 0, 0, 0, 0, 0, 92, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 88, 0, 0, 0, 0, 0, 85, 0, 0, 0, 0, 0, 80, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 95, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 90, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_bagikelas`
-- (See below for the actual view)
--
CREATE TABLE `v_bagikelas` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_role_id` int(50)
,`role_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`kelas_nama` varchar(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kelas`
-- (See below for the actual view)
--
CREATE TABLE `v_kelas` (
`kelas_id` int(50)
,`kelas_nama` varchar(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kelas1`
-- (See below for the actual view)
--
CREATE TABLE `v_kelas1` (
`kelas_id` int(50)
,`kelas_nama` varchar(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kelas2`
-- (See below for the actual view)
--
CREATE TABLE `v_kelas2` (
`kelas_id` int(50)
,`kelas_nama` varchar(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kelas3`
-- (See below for the actual view)
--
CREATE TABLE `v_kelas3` (
`kelas_id` int(50)
,`kelas_nama` varchar(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kelas4`
-- (See below for the actual view)
--
CREATE TABLE `v_kelas4` (
`kelas_id` int(50)
,`kelas_nama` varchar(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kelas5`
-- (See below for the actual view)
--
CREATE TABLE `v_kelas5` (
`kelas_id` int(50)
,`kelas_nama` varchar(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kelas6`
-- (See below for the actual view)
--
CREATE TABLE `v_kelas6` (
`kelas_id` int(50)
,`kelas_nama` varchar(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_mapel`
-- (See below for the actual view)
--
CREATE TABLE `v_mapel` (
`mapel_id` int(50)
,`mapel_nama` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pengajar`
-- (See below for the actual view)
--
CREATE TABLE `v_pengajar` (
`guru_kode` int(50)
,`guru_nama` varchar(50)
,`guru_role_id` int(50)
,`role_nama` varchar(50)
,`guru_mapel_id` int(50)
,`mapel_nama` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking1a`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking1a` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking1b`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking1b` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking1c`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking1c` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking1d`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking1d` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking1e`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking1e` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking1f`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking1f` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking1g`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking1g` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking2a`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking2a` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking2b`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking2b` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking2c`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking2c` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking2d`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking2d` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking2e`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking2e` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking2f`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking2f` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking2g`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking2g` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking3a`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking3a` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking3b`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking3b` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking3c`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking3c` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking3d`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking3d` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking3e`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking3e` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking3f`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking3f` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking3g`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking3g` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking4a`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking4a` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking4b`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking4b` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking4c`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking4c` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking4d`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking4d` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking4e`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking4e` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking4f`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking4f` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking4g`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking4g` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking5a`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking5a` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking5b`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking5b` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking5c`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking5c` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking5d`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking5d` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking5e`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking5e` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking5f`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking5f` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking5g`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking5g` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking6a`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking6a` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking6b`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking6b` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking6c`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking6c` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking6d`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking6d` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking6e`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking6e` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking6f`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking6f` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking6g`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking6g` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa1a`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa1a` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama1` float
,`nilai_b_indonesia1` float
,`nilai_b_inggris1` float
,`nilai_b_jawa1` float
,`nilai_IPA1` float
,`nilai_IPS1` float
,`nilai_matematika1` float
,`nilai_penjaskes1` float
,`nilai_PKN1` float
,`nilai_seni_budaya1` float
,`nilai_TIK1` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa1b`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa1b` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama1` float
,`nilai_b_indonesia1` float
,`nilai_b_inggris1` float
,`nilai_b_jawa1` float
,`nilai_IPA1` float
,`nilai_IPS1` float
,`nilai_matematika1` float
,`nilai_penjaskes1` float
,`nilai_PKN1` float
,`nilai_seni_budaya1` float
,`nilai_TIK1` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa1c`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa1c` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama1` float
,`nilai_b_indonesia1` float
,`nilai_b_inggris1` float
,`nilai_b_jawa1` float
,`nilai_IPA1` float
,`nilai_IPS1` float
,`nilai_matematika1` float
,`nilai_penjaskes1` float
,`nilai_PKN1` float
,`nilai_seni_budaya1` float
,`nilai_TIK1` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa1d`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa1d` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama1` float
,`nilai_b_indonesia1` float
,`nilai_b_inggris1` float
,`nilai_b_jawa1` float
,`nilai_IPA1` float
,`nilai_IPS1` float
,`nilai_matematika1` float
,`nilai_penjaskes1` float
,`nilai_PKN1` float
,`nilai_seni_budaya1` float
,`nilai_TIK1` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa1e`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa1e` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama1` float
,`nilai_b_indonesia1` float
,`nilai_b_inggris1` float
,`nilai_b_jawa1` float
,`nilai_IPA1` float
,`nilai_IPS1` float
,`nilai_matematika1` float
,`nilai_penjaskes1` float
,`nilai_PKN1` float
,`nilai_seni_budaya1` float
,`nilai_TIK1` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa1f`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa1f` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama1` float
,`nilai_b_indonesia1` float
,`nilai_b_inggris1` float
,`nilai_b_jawa1` float
,`nilai_IPA1` float
,`nilai_IPS1` float
,`nilai_matematika1` float
,`nilai_penjaskes1` float
,`nilai_PKN1` float
,`nilai_seni_budaya1` float
,`nilai_TIK1` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa1g`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa1g` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama1` float
,`nilai_b_indonesia1` float
,`nilai_b_inggris1` float
,`nilai_b_jawa1` float
,`nilai_IPA1` float
,`nilai_IPS1` float
,`nilai_matematika1` float
,`nilai_penjaskes1` float
,`nilai_PKN1` float
,`nilai_seni_budaya1` float
,`nilai_TIK1` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa2a`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa2a` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama2` float
,`nilai_b_indonesia2` float
,`nilai_b_inggris2` float
,`nilai_b_jawa2` float
,`nilai_IPA2` float
,`nilai_IPS2` float
,`nilai_matematika2` float
,`nilai_penjaskes2` float
,`nilai_PKN2` float
,`nilai_seni_budaya2` float
,`nilai_TIK2` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa2b`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa2b` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama2` float
,`nilai_b_indonesia2` float
,`nilai_b_inggris2` float
,`nilai_b_jawa2` float
,`nilai_IPA2` float
,`nilai_IPS2` float
,`nilai_matematika2` float
,`nilai_penjaskes2` float
,`nilai_PKN2` float
,`nilai_seni_budaya2` float
,`nilai_TIK2` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa2c`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa2c` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama2` float
,`nilai_b_indonesia2` float
,`nilai_b_inggris2` float
,`nilai_b_jawa2` float
,`nilai_IPA2` float
,`nilai_IPS2` float
,`nilai_matematika2` float
,`nilai_penjaskes2` float
,`nilai_PKN2` float
,`nilai_seni_budaya2` float
,`nilai_TIK2` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa2d`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa2d` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama2` float
,`nilai_b_indonesia2` float
,`nilai_b_inggris2` float
,`nilai_b_jawa2` float
,`nilai_IPA2` float
,`nilai_IPS2` float
,`nilai_matematika2` float
,`nilai_penjaskes2` float
,`nilai_PKN2` float
,`nilai_seni_budaya2` float
,`nilai_TIK2` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa2e`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa2e` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama2` float
,`nilai_b_indonesia2` float
,`nilai_b_inggris2` float
,`nilai_b_jawa2` float
,`nilai_IPA2` float
,`nilai_IPS2` float
,`nilai_matematika2` float
,`nilai_penjaskes2` float
,`nilai_PKN2` float
,`nilai_seni_budaya2` float
,`nilai_TIK2` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa2f`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa2f` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama2` float
,`nilai_b_indonesia2` float
,`nilai_b_inggris2` float
,`nilai_b_jawa2` float
,`nilai_IPA2` float
,`nilai_IPS2` float
,`nilai_matematika2` float
,`nilai_penjaskes2` float
,`nilai_PKN2` float
,`nilai_seni_budaya2` float
,`nilai_TIK2` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa2g`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa2g` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama2` float
,`nilai_b_indonesia2` float
,`nilai_b_inggris2` float
,`nilai_b_jawa2` float
,`nilai_IPA2` float
,`nilai_IPS2` float
,`nilai_matematika2` float
,`nilai_penjaskes2` float
,`nilai_PKN2` float
,`nilai_seni_budaya2` float
,`nilai_TIK2` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa3a`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa3a` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama3` float
,`nilai_b_indonesia3` float
,`nilai_b_inggris3` float
,`nilai_b_jawa3` float
,`nilai_IPA3` float
,`nilai_IPS3` float
,`nilai_matematika3` float
,`nilai_penjaskes3` float
,`nilai_PKN3` float
,`nilai_seni_budaya3` float
,`nilai_TIK3` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa3b`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa3b` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama3` float
,`nilai_b_indonesia3` float
,`nilai_b_inggris3` float
,`nilai_b_jawa3` float
,`nilai_IPA3` float
,`nilai_IPS3` float
,`nilai_matematika3` float
,`nilai_penjaskes3` float
,`nilai_PKN3` float
,`nilai_seni_budaya3` float
,`nilai_TIK3` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa3c`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa3c` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama3` float
,`nilai_b_indonesia3` float
,`nilai_b_inggris3` float
,`nilai_b_jawa3` float
,`nilai_IPA3` float
,`nilai_IPS3` float
,`nilai_matematika3` float
,`nilai_penjaskes3` float
,`nilai_PKN3` float
,`nilai_seni_budaya3` float
,`nilai_TIK3` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa3d`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa3d` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama3` float
,`nilai_b_indonesia3` float
,`nilai_b_inggris3` float
,`nilai_b_jawa3` float
,`nilai_IPA3` float
,`nilai_IPS3` float
,`nilai_matematika3` float
,`nilai_penjaskes3` float
,`nilai_PKN3` float
,`nilai_seni_budaya3` float
,`nilai_TIK3` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa3e`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa3e` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama3` float
,`nilai_b_indonesia3` float
,`nilai_b_inggris3` float
,`nilai_b_jawa3` float
,`nilai_IPA3` float
,`nilai_IPS3` float
,`nilai_matematika3` float
,`nilai_penjaskes3` float
,`nilai_PKN3` float
,`nilai_seni_budaya3` float
,`nilai_TIK3` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa3f`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa3f` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama3` float
,`nilai_b_indonesia3` float
,`nilai_b_inggris3` float
,`nilai_b_jawa3` float
,`nilai_IPA3` float
,`nilai_IPS3` float
,`nilai_matematika3` float
,`nilai_penjaskes3` float
,`nilai_PKN3` float
,`nilai_seni_budaya3` float
,`nilai_TIK3` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa3g`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa3g` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama3` float
,`nilai_b_indonesia3` float
,`nilai_b_inggris3` float
,`nilai_b_jawa3` float
,`nilai_IPA3` float
,`nilai_IPS3` float
,`nilai_matematika3` float
,`nilai_penjaskes3` float
,`nilai_PKN3` float
,`nilai_seni_budaya3` float
,`nilai_TIK3` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa4a`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa4a` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama4` float
,`nilai_b_indonesia4` float
,`nilai_b_inggris4` float
,`nilai_b_jawa4` float
,`nilai_IPA4` float
,`nilai_IPS4` float
,`nilai_matematika4` float
,`nilai_penjaskes4` float
,`nilai_PKN4` float
,`nilai_seni_budaya4` float
,`nilai_TIK4` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa4b`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa4b` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama4` float
,`nilai_b_indonesia4` float
,`nilai_b_inggris4` float
,`nilai_b_jawa4` float
,`nilai_IPA4` float
,`nilai_IPS4` float
,`nilai_matematika4` float
,`nilai_penjaskes4` float
,`nilai_PKN4` float
,`nilai_seni_budaya4` float
,`nilai_TIK4` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa4c`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa4c` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama4` float
,`nilai_b_indonesia4` float
,`nilai_b_inggris4` float
,`nilai_b_jawa4` float
,`nilai_IPA4` float
,`nilai_IPS4` float
,`nilai_matematika4` float
,`nilai_penjaskes4` float
,`nilai_PKN4` float
,`nilai_seni_budaya4` float
,`nilai_TIK4` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa4d`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa4d` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama4` float
,`nilai_b_indonesia4` float
,`nilai_b_inggris4` float
,`nilai_b_jawa4` float
,`nilai_IPA4` float
,`nilai_IPS4` float
,`nilai_matematika4` float
,`nilai_penjaskes4` float
,`nilai_PKN4` float
,`nilai_seni_budaya4` float
,`nilai_TIK4` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa4e`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa4e` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama4` float
,`nilai_b_indonesia4` float
,`nilai_b_inggris4` float
,`nilai_b_jawa4` float
,`nilai_IPA4` float
,`nilai_IPS4` float
,`nilai_matematika4` float
,`nilai_penjaskes4` float
,`nilai_PKN4` float
,`nilai_seni_budaya4` float
,`nilai_TIK4` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa4f`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa4f` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama4` float
,`nilai_b_indonesia4` float
,`nilai_b_inggris4` float
,`nilai_b_jawa4` float
,`nilai_IPA4` float
,`nilai_IPS4` float
,`nilai_matematika4` float
,`nilai_penjaskes4` float
,`nilai_PKN4` float
,`nilai_seni_budaya4` float
,`nilai_TIK4` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa4g`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa4g` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama4` float
,`nilai_b_indonesia4` float
,`nilai_b_inggris4` float
,`nilai_b_jawa4` float
,`nilai_IPA4` float
,`nilai_IPS4` float
,`nilai_matematika4` float
,`nilai_penjaskes4` float
,`nilai_PKN4` float
,`nilai_seni_budaya4` float
,`nilai_TIK4` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa5a`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa5a` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama5` float
,`nilai_b_indonesia5` float
,`nilai_b_inggris5` float
,`nilai_b_jawa5` float
,`nilai_IPA5` float
,`nilai_IPS5` float
,`nilai_matematika5` float
,`nilai_penjaskes5` float
,`nilai_PKN5` float
,`nilai_seni_budaya5` float
,`nilai_TIK5` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa5b`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa5b` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama5` float
,`nilai_b_indonesia5` float
,`nilai_b_inggris5` float
,`nilai_b_jawa5` float
,`nilai_IPA5` float
,`nilai_IPS5` float
,`nilai_matematika5` float
,`nilai_penjaskes5` float
,`nilai_PKN5` float
,`nilai_seni_budaya5` float
,`nilai_TIK5` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa5c`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa5c` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama5` float
,`nilai_b_indonesia5` float
,`nilai_b_inggris5` float
,`nilai_b_jawa5` float
,`nilai_IPA5` float
,`nilai_IPS5` float
,`nilai_matematika5` float
,`nilai_penjaskes5` float
,`nilai_PKN5` float
,`nilai_seni_budaya5` float
,`nilai_TIK5` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa5d`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa5d` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama5` float
,`nilai_b_indonesia5` float
,`nilai_b_inggris5` float
,`nilai_b_jawa5` float
,`nilai_IPA5` float
,`nilai_IPS5` float
,`nilai_matematika5` float
,`nilai_penjaskes5` float
,`nilai_PKN5` float
,`nilai_seni_budaya5` float
,`nilai_TIK5` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa5e`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa5e` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama5` float
,`nilai_b_indonesia5` float
,`nilai_b_inggris5` float
,`nilai_b_jawa5` float
,`nilai_IPA5` float
,`nilai_IPS5` float
,`nilai_matematika5` float
,`nilai_penjaskes5` float
,`nilai_PKN5` float
,`nilai_seni_budaya5` float
,`nilai_TIK5` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa5f`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa5f` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama5` float
,`nilai_b_indonesia5` float
,`nilai_b_inggris5` float
,`nilai_b_jawa5` float
,`nilai_IPA5` float
,`nilai_IPS5` float
,`nilai_matematika5` float
,`nilai_penjaskes5` float
,`nilai_PKN5` float
,`nilai_seni_budaya5` float
,`nilai_TIK5` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa5g`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa5g` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama5` float
,`nilai_b_indonesia5` float
,`nilai_b_inggris5` float
,`nilai_b_jawa5` float
,`nilai_IPA5` float
,`nilai_IPS5` float
,`nilai_matematika5` float
,`nilai_penjaskes5` float
,`nilai_PKN5` float
,`nilai_seni_budaya5` float
,`nilai_TIK5` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa6a`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa6a` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama6` float
,`nilai_b_indonesia6` float
,`nilai_b_inggris6` float
,`nilai_b_jawa6` float
,`nilai_IPA6` float
,`nilai_IPS6` float
,`nilai_matematika6` float
,`nilai_penjaskes6` float
,`nilai_PKN6` float
,`nilai_seni_budaya6` float
,`nilai_TIK6` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa6b`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa6b` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama6` float
,`nilai_b_indonesia6` float
,`nilai_b_inggris6` float
,`nilai_b_jawa6` float
,`nilai_IPA6` float
,`nilai_IPS6` float
,`nilai_matematika6` float
,`nilai_penjaskes6` float
,`nilai_PKN6` float
,`nilai_seni_budaya6` float
,`nilai_TIK6` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa6c`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa6c` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama6` float
,`nilai_b_indonesia6` float
,`nilai_b_inggris6` float
,`nilai_b_jawa6` float
,`nilai_IPA6` float
,`nilai_IPS6` float
,`nilai_matematika6` float
,`nilai_penjaskes6` float
,`nilai_PKN6` float
,`nilai_seni_budaya6` float
,`nilai_TIK6` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa6d`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa6d` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama6` float
,`nilai_b_indonesia6` float
,`nilai_b_inggris6` float
,`nilai_b_jawa6` float
,`nilai_IPA6` float
,`nilai_IPS6` float
,`nilai_matematika6` float
,`nilai_penjaskes6` float
,`nilai_PKN6` float
,`nilai_seni_budaya6` float
,`nilai_TIK6` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa6e`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa6e` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama6` float
,`nilai_b_indonesia6` float
,`nilai_b_inggris6` float
,`nilai_b_jawa6` float
,`nilai_IPA6` float
,`nilai_IPS6` float
,`nilai_matematika6` float
,`nilai_penjaskes6` float
,`nilai_PKN6` float
,`nilai_seni_budaya6` float
,`nilai_TIK6` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa6f`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa6f` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama6` float
,`nilai_b_indonesia6` float
,`nilai_b_inggris6` float
,`nilai_b_jawa6` float
,`nilai_IPA6` float
,`nilai_IPS6` float
,`nilai_matematika6` float
,`nilai_penjaskes6` float
,`nilai_PKN6` float
,`nilai_seni_budaya6` float
,`nilai_TIK6` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa6g`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa6g` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama6` float
,`nilai_b_indonesia6` float
,`nilai_b_inggris6` float
,`nilai_b_jawa6` float
,`nilai_IPA6` float
,`nilai_IPS6` float
,`nilai_matematika6` float
,`nilai_penjaskes6` float
,`nilai_PKN6` float
,`nilai_seni_budaya6` float
,`nilai_TIK6` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_user`
-- (See below for the actual view)
--
CREATE TABLE `v_user` (
`user_kode` int(50)
,`user_nama` varchar(50)
,`user_username` varchar(50)
,`user_password` varchar(50)
,`user_agama` varchar(50)
,`user_gender` varchar(11)
,`user_tgllhr` date
,`user_tlp` varchar(20)
,`user_alamat` varchar(50)
,`user_kelas_id` int(50)
,`kelas_nama` varchar(11)
,`user_role_id` int(50)
,`role_nama` varchar(50)
,`user_mapel_id` int(50)
,`mapel_nama` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_userguru`
-- (See below for the actual view)
--
CREATE TABLE `v_userguru` (
`user_kode` int(50)
,`user_nama` varchar(50)
,`user_username` varchar(50)
,`user_password` varchar(50)
,`user_agama` varchar(50)
,`user_gender` varchar(11)
,`user_tgllhr` date
,`user_tlp` varchar(20)
,`user_alamat` varchar(50)
,`user_kelas_id` int(50)
,`kelas_nama` varchar(11)
,`user_role_id` int(50)
,`role_nama` varchar(50)
,`user_mapel_id` int(50)
,`mapel_nama` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_usersiswa`
-- (See below for the actual view)
--
CREATE TABLE `v_usersiswa` (
`user_kode` int(50)
,`user_nama` varchar(50)
,`user_username` varchar(50)
,`user_password` varchar(50)
,`user_agama` varchar(50)
,`user_gender` varchar(11)
,`user_tgllhr` date
,`user_tlp` varchar(20)
,`user_alamat` varchar(50)
,`user_kelas_id` int(50)
,`kelas_nama` varchar(11)
,`user_role_id` int(50)
,`role_nama` varchar(50)
,`user_mapel_id` int(50)
,`mapel_nama` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_walikelas`
-- (See below for the actual view)
--
CREATE TABLE `v_walikelas` (
`guru_kode` int(50)
,`guru_nama` varchar(50)
,`guru_role_id` int(50)
,`role_nama` varchar(50)
,`guru_kelas_id` int(50)
,`kelas_nama` varchar(11)
);

-- --------------------------------------------------------

--
-- Structure for view `v_bagikelas`
--
DROP TABLE IF EXISTS `v_bagikelas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_bagikelas`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_role_id` AS `siswa_role_id`,`tlu`.`role_nama` AS `role_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tku`.`kelas_nama` AS `kelas_nama` from ((`siswa` `tu` join `role` `tlu`) join `kelas` `tku`) where ((`tu`.`siswa_role_id` = `tlu`.`role_id`) and (`tu`.`siswa_kelas_id` = `tku`.`kelas_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_kelas`
--
DROP TABLE IF EXISTS `v_kelas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kelas`  AS  select `kelas`.`kelas_id` AS `kelas_id`,`kelas`.`kelas_nama` AS `kelas_nama` from `kelas` where (`kelas`.`kelas_id` <> 1) ;

-- --------------------------------------------------------

--
-- Structure for view `v_kelas1`
--
DROP TABLE IF EXISTS `v_kelas1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kelas1`  AS  select `kelas`.`kelas_id` AS `kelas_id`,`kelas`.`kelas_nama` AS `kelas_nama` from `kelas` where ((`kelas`.`kelas_id` <> 1) and (`kelas`.`kelas_id` < 201)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_kelas2`
--
DROP TABLE IF EXISTS `v_kelas2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kelas2`  AS  select `kelas`.`kelas_id` AS `kelas_id`,`kelas`.`kelas_nama` AS `kelas_nama` from `kelas` where ((`kelas`.`kelas_id` <> 1) and (`kelas`.`kelas_id` < 301) and (`kelas`.`kelas_id` > 200)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_kelas3`
--
DROP TABLE IF EXISTS `v_kelas3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kelas3`  AS  select `kelas`.`kelas_id` AS `kelas_id`,`kelas`.`kelas_nama` AS `kelas_nama` from `kelas` where ((`kelas`.`kelas_id` <> 1) and (`kelas`.`kelas_id` < 401) and (`kelas`.`kelas_id` > 300)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_kelas4`
--
DROP TABLE IF EXISTS `v_kelas4`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kelas4`  AS  select `kelas`.`kelas_id` AS `kelas_id`,`kelas`.`kelas_nama` AS `kelas_nama` from `kelas` where ((`kelas`.`kelas_id` <> 1) and (`kelas`.`kelas_id` < 501) and (`kelas`.`kelas_id` > 400)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_kelas5`
--
DROP TABLE IF EXISTS `v_kelas5`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kelas5`  AS  select `kelas`.`kelas_id` AS `kelas_id`,`kelas`.`kelas_nama` AS `kelas_nama` from `kelas` where ((`kelas`.`kelas_id` <> 1) and (`kelas`.`kelas_id` < 601) and (`kelas`.`kelas_id` > 500)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_kelas6`
--
DROP TABLE IF EXISTS `v_kelas6`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kelas6`  AS  select `kelas`.`kelas_id` AS `kelas_id`,`kelas`.`kelas_nama` AS `kelas_nama` from `kelas` where ((`kelas`.`kelas_id` <> 1) and (`kelas`.`kelas_id` < 701) and (`kelas`.`kelas_id` > 600)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_mapel`
--
DROP TABLE IF EXISTS `v_mapel`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_mapel`  AS  select `mapel`.`mapel_id` AS `mapel_id`,`mapel`.`mapel_nama` AS `mapel_nama` from `mapel` where (`mapel`.`mapel_id` <> 1) ;

-- --------------------------------------------------------

--
-- Structure for view `v_pengajar`
--
DROP TABLE IF EXISTS `v_pengajar`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pengajar`  AS  select `tu`.`guru_kode` AS `guru_kode`,`tu`.`guru_nama` AS `guru_nama`,`tu`.`guru_role_id` AS `guru_role_id`,`tlu`.`role_nama` AS `role_nama`,`tu`.`guru_mapel_id` AS `guru_mapel_id`,`tku`.`mapel_nama` AS `mapel_nama` from ((`guru` `tu` join `role` `tlu`) join `mapel` `tku`) where ((`tu`.`guru_role_id` = `tlu`.`role_id`) and (`tu`.`guru_mapel_id` = `tku`.`mapel_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking1a`
--
DROP TABLE IF EXISTS `v_ranking1a`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking1a`  AS  select `v_siswa1a`.`siswa_kode` AS `siswa_kode`,`v_siswa1a`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa1a`.`nilai_agama1` + `v_siswa1a`.`nilai_b_indonesia1`) + `v_siswa1a`.`nilai_b_inggris1`) + `v_siswa1a`.`nilai_IPA1`) + `v_siswa1a`.`nilai_IPS1`) + `v_siswa1a`.`nilai_matematika1`) + `v_siswa1a`.`nilai_PKN1`) + `v_siswa1a`.`nilai_TIK1`)) AS `total_nilai` from `v_siswa1a` group by `v_siswa1a`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking1b`
--
DROP TABLE IF EXISTS `v_ranking1b`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking1b`  AS  select `v_siswa1b`.`siswa_kode` AS `siswa_kode`,`v_siswa1b`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa1b`.`nilai_agama1` + `v_siswa1b`.`nilai_b_indonesia1`) + `v_siswa1b`.`nilai_b_inggris1`) + `v_siswa1b`.`nilai_IPA1`) + `v_siswa1b`.`nilai_IPS1`) + `v_siswa1b`.`nilai_matematika1`) + `v_siswa1b`.`nilai_PKN1`) + `v_siswa1b`.`nilai_TIK1`)) AS `total_nilai` from `v_siswa1b` group by `v_siswa1b`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking1c`
--
DROP TABLE IF EXISTS `v_ranking1c`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking1c`  AS  select `v_siswa1c`.`siswa_kode` AS `siswa_kode`,`v_siswa1c`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa1c`.`nilai_agama1` + `v_siswa1c`.`nilai_b_indonesia1`) + `v_siswa1c`.`nilai_b_inggris1`) + `v_siswa1c`.`nilai_IPA1`) + `v_siswa1c`.`nilai_IPS1`) + `v_siswa1c`.`nilai_matematika1`) + `v_siswa1c`.`nilai_PKN1`) + `v_siswa1c`.`nilai_TIK1`)) AS `total_nilai` from `v_siswa1c` group by `v_siswa1c`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking1d`
--
DROP TABLE IF EXISTS `v_ranking1d`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking1d`  AS  select `v_siswa1d`.`siswa_kode` AS `siswa_kode`,`v_siswa1d`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa1d`.`nilai_agama1` + `v_siswa1d`.`nilai_b_indonesia1`) + `v_siswa1d`.`nilai_b_inggris1`) + `v_siswa1d`.`nilai_IPA1`) + `v_siswa1d`.`nilai_IPS1`) + `v_siswa1d`.`nilai_matematika1`) + `v_siswa1d`.`nilai_PKN1`) + `v_siswa1d`.`nilai_TIK1`)) AS `total_nilai` from `v_siswa1d` group by `v_siswa1d`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking1e`
--
DROP TABLE IF EXISTS `v_ranking1e`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking1e`  AS  select `v_siswa1e`.`siswa_kode` AS `siswa_kode`,`v_siswa1e`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa1e`.`nilai_agama1` + `v_siswa1e`.`nilai_b_indonesia1`) + `v_siswa1e`.`nilai_b_inggris1`) + `v_siswa1e`.`nilai_IPA1`) + `v_siswa1e`.`nilai_IPS1`) + `v_siswa1e`.`nilai_matematika1`) + `v_siswa1e`.`nilai_PKN1`) + `v_siswa1e`.`nilai_TIK1`)) AS `total_nilai` from `v_siswa1e` group by `v_siswa1e`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking1f`
--
DROP TABLE IF EXISTS `v_ranking1f`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking1f`  AS  select `v_siswa1f`.`siswa_kode` AS `siswa_kode`,`v_siswa1f`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa1f`.`nilai_agama1` + `v_siswa1f`.`nilai_b_indonesia1`) + `v_siswa1f`.`nilai_b_inggris1`) + `v_siswa1f`.`nilai_IPA1`) + `v_siswa1f`.`nilai_IPS1`) + `v_siswa1f`.`nilai_matematika1`) + `v_siswa1f`.`nilai_PKN1`) + `v_siswa1f`.`nilai_TIK1`)) AS `total_nilai` from `v_siswa1f` group by `v_siswa1f`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking1g`
--
DROP TABLE IF EXISTS `v_ranking1g`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking1g`  AS  select `v_siswa1g`.`siswa_kode` AS `siswa_kode`,`v_siswa1g`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa1g`.`nilai_agama1` + `v_siswa1g`.`nilai_b_indonesia1`) + `v_siswa1g`.`nilai_b_inggris1`) + `v_siswa1g`.`nilai_IPA1`) + `v_siswa1g`.`nilai_IPS1`) + `v_siswa1g`.`nilai_matematika1`) + `v_siswa1g`.`nilai_PKN1`) + `v_siswa1g`.`nilai_TIK1`)) AS `total_nilai` from `v_siswa1g` group by `v_siswa1g`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking2a`
--
DROP TABLE IF EXISTS `v_ranking2a`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking2a`  AS  select `v_siswa2a`.`siswa_kode` AS `siswa_kode`,`v_siswa2a`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa2a`.`nilai_agama2` + `v_siswa2a`.`nilai_b_indonesia2`) + `v_siswa2a`.`nilai_b_inggris2`) + `v_siswa2a`.`nilai_IPA2`) + `v_siswa2a`.`nilai_IPS2`) + `v_siswa2a`.`nilai_matematika2`) + `v_siswa2a`.`nilai_PKN2`) + `v_siswa2a`.`nilai_TIK2`)) AS `total_nilai` from `v_siswa2a` group by `v_siswa2a`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking2b`
--
DROP TABLE IF EXISTS `v_ranking2b`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking2b`  AS  select `v_siswa2b`.`siswa_kode` AS `siswa_kode`,`v_siswa2b`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa2b`.`nilai_agama2` + `v_siswa2b`.`nilai_b_indonesia2`) + `v_siswa2b`.`nilai_b_inggris2`) + `v_siswa2b`.`nilai_IPA2`) + `v_siswa2b`.`nilai_IPS2`) + `v_siswa2b`.`nilai_matematika2`) + `v_siswa2b`.`nilai_PKN2`) + `v_siswa2b`.`nilai_TIK2`)) AS `total_nilai` from `v_siswa2b` group by `v_siswa2b`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking2c`
--
DROP TABLE IF EXISTS `v_ranking2c`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking2c`  AS  select `v_siswa2c`.`siswa_kode` AS `siswa_kode`,`v_siswa2c`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa2c`.`nilai_agama2` + `v_siswa2c`.`nilai_b_indonesia2`) + `v_siswa2c`.`nilai_b_inggris2`) + `v_siswa2c`.`nilai_IPA2`) + `v_siswa2c`.`nilai_IPS2`) + `v_siswa2c`.`nilai_matematika2`) + `v_siswa2c`.`nilai_PKN2`) + `v_siswa2c`.`nilai_TIK2`)) AS `total_nilai` from `v_siswa2c` group by `v_siswa2c`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking2d`
--
DROP TABLE IF EXISTS `v_ranking2d`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking2d`  AS  select `v_siswa2d`.`siswa_kode` AS `siswa_kode`,`v_siswa2d`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa2d`.`nilai_agama2` + `v_siswa2d`.`nilai_b_indonesia2`) + `v_siswa2d`.`nilai_b_inggris2`) + `v_siswa2d`.`nilai_IPA2`) + `v_siswa2d`.`nilai_IPS2`) + `v_siswa2d`.`nilai_matematika2`) + `v_siswa2d`.`nilai_PKN2`) + `v_siswa2d`.`nilai_TIK2`)) AS `total_nilai` from `v_siswa2d` group by `v_siswa2d`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking2e`
--
DROP TABLE IF EXISTS `v_ranking2e`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking2e`  AS  select `v_siswa2e`.`siswa_kode` AS `siswa_kode`,`v_siswa2e`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa2e`.`nilai_agama2` + `v_siswa2e`.`nilai_b_indonesia2`) + `v_siswa2e`.`nilai_b_inggris2`) + `v_siswa2e`.`nilai_IPA2`) + `v_siswa2e`.`nilai_IPS2`) + `v_siswa2e`.`nilai_matematika2`) + `v_siswa2e`.`nilai_PKN2`) + `v_siswa2e`.`nilai_TIK2`)) AS `total_nilai` from `v_siswa2e` group by `v_siswa2e`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking2f`
--
DROP TABLE IF EXISTS `v_ranking2f`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking2f`  AS  select `v_siswa2f`.`siswa_kode` AS `siswa_kode`,`v_siswa2f`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa2f`.`nilai_agama2` + `v_siswa2f`.`nilai_b_indonesia2`) + `v_siswa2f`.`nilai_b_inggris2`) + `v_siswa2f`.`nilai_IPA2`) + `v_siswa2f`.`nilai_IPS2`) + `v_siswa2f`.`nilai_matematika2`) + `v_siswa2f`.`nilai_PKN2`) + `v_siswa2f`.`nilai_TIK2`)) AS `total_nilai` from `v_siswa2f` group by `v_siswa2f`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking2g`
--
DROP TABLE IF EXISTS `v_ranking2g`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking2g`  AS  select `v_siswa2g`.`siswa_kode` AS `siswa_kode`,`v_siswa2g`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa2g`.`nilai_agama2` + `v_siswa2g`.`nilai_b_indonesia2`) + `v_siswa2g`.`nilai_b_inggris2`) + `v_siswa2g`.`nilai_IPA2`) + `v_siswa2g`.`nilai_IPS2`) + `v_siswa2g`.`nilai_matematika2`) + `v_siswa2g`.`nilai_PKN2`) + `v_siswa2g`.`nilai_TIK2`)) AS `total_nilai` from `v_siswa2g` group by `v_siswa2g`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking3a`
--
DROP TABLE IF EXISTS `v_ranking3a`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking3a`  AS  select `v_siswa3a`.`siswa_kode` AS `siswa_kode`,`v_siswa3a`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa3a`.`nilai_agama3` + `v_siswa3a`.`nilai_b_indonesia3`) + `v_siswa3a`.`nilai_b_inggris3`) + `v_siswa3a`.`nilai_IPA3`) + `v_siswa3a`.`nilai_IPS3`) + `v_siswa3a`.`nilai_matematika3`) + `v_siswa3a`.`nilai_PKN3`) + `v_siswa3a`.`nilai_TIK3`)) AS `total_nilai` from `v_siswa3a` group by `v_siswa3a`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking3b`
--
DROP TABLE IF EXISTS `v_ranking3b`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking3b`  AS  select `v_siswa3b`.`siswa_kode` AS `siswa_kode`,`v_siswa3b`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa3b`.`nilai_agama3` + `v_siswa3b`.`nilai_b_indonesia3`) + `v_siswa3b`.`nilai_b_inggris3`) + `v_siswa3b`.`nilai_IPA3`) + `v_siswa3b`.`nilai_IPS3`) + `v_siswa3b`.`nilai_matematika3`) + `v_siswa3b`.`nilai_PKN3`) + `v_siswa3b`.`nilai_TIK3`)) AS `total_nilai` from `v_siswa3b` group by `v_siswa3b`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking3c`
--
DROP TABLE IF EXISTS `v_ranking3c`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking3c`  AS  select `v_siswa3c`.`siswa_kode` AS `siswa_kode`,`v_siswa3c`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa3c`.`nilai_agama3` + `v_siswa3c`.`nilai_b_indonesia3`) + `v_siswa3c`.`nilai_b_inggris3`) + `v_siswa3c`.`nilai_IPA3`) + `v_siswa3c`.`nilai_IPS3`) + `v_siswa3c`.`nilai_matematika3`) + `v_siswa3c`.`nilai_PKN3`) + `v_siswa3c`.`nilai_TIK3`)) AS `total_nilai` from `v_siswa3c` group by `v_siswa3c`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking3d`
--
DROP TABLE IF EXISTS `v_ranking3d`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking3d`  AS  select `v_siswa3d`.`siswa_kode` AS `siswa_kode`,`v_siswa3d`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa3d`.`nilai_agama3` + `v_siswa3d`.`nilai_b_indonesia3`) + `v_siswa3d`.`nilai_b_inggris3`) + `v_siswa3d`.`nilai_IPA3`) + `v_siswa3d`.`nilai_IPS3`) + `v_siswa3d`.`nilai_matematika3`) + `v_siswa3d`.`nilai_PKN3`) + `v_siswa3d`.`nilai_TIK3`)) AS `total_nilai` from `v_siswa3d` group by `v_siswa3d`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking3e`
--
DROP TABLE IF EXISTS `v_ranking3e`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking3e`  AS  select `v_siswa3e`.`siswa_kode` AS `siswa_kode`,`v_siswa3e`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa3e`.`nilai_agama3` + `v_siswa3e`.`nilai_b_indonesia3`) + `v_siswa3e`.`nilai_b_inggris3`) + `v_siswa3e`.`nilai_IPA3`) + `v_siswa3e`.`nilai_IPS3`) + `v_siswa3e`.`nilai_matematika3`) + `v_siswa3e`.`nilai_PKN3`) + `v_siswa3e`.`nilai_TIK3`)) AS `total_nilai` from `v_siswa3e` group by `v_siswa3e`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking3f`
--
DROP TABLE IF EXISTS `v_ranking3f`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking3f`  AS  select `v_siswa3f`.`siswa_kode` AS `siswa_kode`,`v_siswa3f`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa3f`.`nilai_agama3` + `v_siswa3f`.`nilai_b_indonesia3`) + `v_siswa3f`.`nilai_b_inggris3`) + `v_siswa3f`.`nilai_IPA3`) + `v_siswa3f`.`nilai_IPS3`) + `v_siswa3f`.`nilai_matematika3`) + `v_siswa3f`.`nilai_PKN3`) + `v_siswa3f`.`nilai_TIK3`)) AS `total_nilai` from `v_siswa3f` group by `v_siswa3f`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking3g`
--
DROP TABLE IF EXISTS `v_ranking3g`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking3g`  AS  select `v_siswa3g`.`siswa_kode` AS `siswa_kode`,`v_siswa3g`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa3g`.`nilai_agama3` + `v_siswa3g`.`nilai_b_indonesia3`) + `v_siswa3g`.`nilai_b_inggris3`) + `v_siswa3g`.`nilai_IPA3`) + `v_siswa3g`.`nilai_IPS3`) + `v_siswa3g`.`nilai_matematika3`) + `v_siswa3g`.`nilai_PKN3`) + `v_siswa3g`.`nilai_TIK3`)) AS `total_nilai` from `v_siswa3g` group by `v_siswa3g`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking4a`
--
DROP TABLE IF EXISTS `v_ranking4a`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking4a`  AS  select `v_siswa4a`.`siswa_kode` AS `siswa_kode`,`v_siswa4a`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa4a`.`nilai_agama4` + `v_siswa4a`.`nilai_b_indonesia4`) + `v_siswa4a`.`nilai_b_inggris4`) + `v_siswa4a`.`nilai_IPA4`) + `v_siswa4a`.`nilai_IPS4`) + `v_siswa4a`.`nilai_matematika4`) + `v_siswa4a`.`nilai_PKN4`) + `v_siswa4a`.`nilai_TIK4`)) AS `total_nilai` from `v_siswa4a` group by `v_siswa4a`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking4b`
--
DROP TABLE IF EXISTS `v_ranking4b`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking4b`  AS  select `v_siswa4b`.`siswa_kode` AS `siswa_kode`,`v_siswa4b`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa4b`.`nilai_agama4` + `v_siswa4b`.`nilai_b_indonesia4`) + `v_siswa4b`.`nilai_b_inggris4`) + `v_siswa4b`.`nilai_IPA4`) + `v_siswa4b`.`nilai_IPS4`) + `v_siswa4b`.`nilai_matematika4`) + `v_siswa4b`.`nilai_PKN4`) + `v_siswa4b`.`nilai_TIK4`)) AS `total_nilai` from `v_siswa4b` group by `v_siswa4b`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking4c`
--
DROP TABLE IF EXISTS `v_ranking4c`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking4c`  AS  select `v_siswa4c`.`siswa_kode` AS `siswa_kode`,`v_siswa4c`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa4c`.`nilai_agama4` + `v_siswa4c`.`nilai_b_indonesia4`) + `v_siswa4c`.`nilai_b_inggris4`) + `v_siswa4c`.`nilai_IPA4`) + `v_siswa4c`.`nilai_IPS4`) + `v_siswa4c`.`nilai_matematika4`) + `v_siswa4c`.`nilai_PKN4`) + `v_siswa4c`.`nilai_TIK4`)) AS `total_nilai` from `v_siswa4c` group by `v_siswa4c`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking4d`
--
DROP TABLE IF EXISTS `v_ranking4d`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking4d`  AS  select `v_siswa4d`.`siswa_kode` AS `siswa_kode`,`v_siswa4d`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa4d`.`nilai_agama4` + `v_siswa4d`.`nilai_b_indonesia4`) + `v_siswa4d`.`nilai_b_inggris4`) + `v_siswa4d`.`nilai_IPA4`) + `v_siswa4d`.`nilai_IPS4`) + `v_siswa4d`.`nilai_matematika4`) + `v_siswa4d`.`nilai_PKN4`) + `v_siswa4d`.`nilai_TIK4`)) AS `total_nilai` from `v_siswa4d` group by `v_siswa4d`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking4e`
--
DROP TABLE IF EXISTS `v_ranking4e`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking4e`  AS  select `v_siswa4e`.`siswa_kode` AS `siswa_kode`,`v_siswa4e`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa4e`.`nilai_agama4` + `v_siswa4e`.`nilai_b_indonesia4`) + `v_siswa4e`.`nilai_b_inggris4`) + `v_siswa4e`.`nilai_IPA4`) + `v_siswa4e`.`nilai_IPS4`) + `v_siswa4e`.`nilai_matematika4`) + `v_siswa4e`.`nilai_PKN4`) + `v_siswa4e`.`nilai_TIK4`)) AS `total_nilai` from `v_siswa4e` group by `v_siswa4e`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking4f`
--
DROP TABLE IF EXISTS `v_ranking4f`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking4f`  AS  select `v_siswa4f`.`siswa_kode` AS `siswa_kode`,`v_siswa4f`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa4f`.`nilai_agama4` + `v_siswa4f`.`nilai_b_indonesia4`) + `v_siswa4f`.`nilai_b_inggris4`) + `v_siswa4f`.`nilai_IPA4`) + `v_siswa4f`.`nilai_IPS4`) + `v_siswa4f`.`nilai_matematika4`) + `v_siswa4f`.`nilai_PKN4`) + `v_siswa4f`.`nilai_TIK4`)) AS `total_nilai` from `v_siswa4f` group by `v_siswa4f`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking4g`
--
DROP TABLE IF EXISTS `v_ranking4g`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking4g`  AS  select `v_siswa4g`.`siswa_kode` AS `siswa_kode`,`v_siswa4g`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa4g`.`nilai_agama4` + `v_siswa4g`.`nilai_b_indonesia4`) + `v_siswa4g`.`nilai_b_inggris4`) + `v_siswa4g`.`nilai_IPA4`) + `v_siswa4g`.`nilai_IPS4`) + `v_siswa4g`.`nilai_matematika4`) + `v_siswa4g`.`nilai_PKN4`) + `v_siswa4g`.`nilai_TIK4`)) AS `total_nilai` from `v_siswa4g` group by `v_siswa4g`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking5a`
--
DROP TABLE IF EXISTS `v_ranking5a`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking5a`  AS  select `v_siswa5a`.`siswa_kode` AS `siswa_kode`,`v_siswa5a`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa5a`.`nilai_agama5` + `v_siswa5a`.`nilai_b_indonesia5`) + `v_siswa5a`.`nilai_b_inggris5`) + `v_siswa5a`.`nilai_IPA5`) + `v_siswa5a`.`nilai_IPS5`) + `v_siswa5a`.`nilai_matematika5`) + `v_siswa5a`.`nilai_PKN5`) + `v_siswa5a`.`nilai_TIK5`)) AS `total_nilai` from `v_siswa5a` group by `v_siswa5a`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking5b`
--
DROP TABLE IF EXISTS `v_ranking5b`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking5b`  AS  select `v_siswa5b`.`siswa_kode` AS `siswa_kode`,`v_siswa5b`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa5b`.`nilai_agama5` + `v_siswa5b`.`nilai_b_indonesia5`) + `v_siswa5b`.`nilai_b_inggris5`) + `v_siswa5b`.`nilai_IPA5`) + `v_siswa5b`.`nilai_IPS5`) + `v_siswa5b`.`nilai_matematika5`) + `v_siswa5b`.`nilai_PKN5`) + `v_siswa5b`.`nilai_TIK5`)) AS `total_nilai` from `v_siswa5b` group by `v_siswa5b`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking5c`
--
DROP TABLE IF EXISTS `v_ranking5c`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking5c`  AS  select `v_siswa5c`.`siswa_kode` AS `siswa_kode`,`v_siswa5c`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa5c`.`nilai_agama5` + `v_siswa5c`.`nilai_b_indonesia5`) + `v_siswa5c`.`nilai_b_inggris5`) + `v_siswa5c`.`nilai_IPA5`) + `v_siswa5c`.`nilai_IPS5`) + `v_siswa5c`.`nilai_matematika5`) + `v_siswa5c`.`nilai_PKN5`) + `v_siswa5c`.`nilai_TIK5`)) AS `total_nilai` from `v_siswa5c` group by `v_siswa5c`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking5d`
--
DROP TABLE IF EXISTS `v_ranking5d`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking5d`  AS  select `v_siswa5d`.`siswa_kode` AS `siswa_kode`,`v_siswa5d`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa5d`.`nilai_agama5` + `v_siswa5d`.`nilai_b_indonesia5`) + `v_siswa5d`.`nilai_b_inggris5`) + `v_siswa5d`.`nilai_IPA5`) + `v_siswa5d`.`nilai_IPS5`) + `v_siswa5d`.`nilai_matematika5`) + `v_siswa5d`.`nilai_PKN5`) + `v_siswa5d`.`nilai_TIK5`)) AS `total_nilai` from `v_siswa5d` group by `v_siswa5d`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking5e`
--
DROP TABLE IF EXISTS `v_ranking5e`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking5e`  AS  select `v_siswa5e`.`siswa_kode` AS `siswa_kode`,`v_siswa5e`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa5e`.`nilai_agama5` + `v_siswa5e`.`nilai_b_indonesia5`) + `v_siswa5e`.`nilai_b_inggris5`) + `v_siswa5e`.`nilai_IPA5`) + `v_siswa5e`.`nilai_IPS5`) + `v_siswa5e`.`nilai_matematika5`) + `v_siswa5e`.`nilai_PKN5`) + `v_siswa5e`.`nilai_TIK5`)) AS `total_nilai` from `v_siswa5e` group by `v_siswa5e`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking5f`
--
DROP TABLE IF EXISTS `v_ranking5f`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking5f`  AS  select `v_siswa5f`.`siswa_kode` AS `siswa_kode`,`v_siswa5f`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa5f`.`nilai_agama5` + `v_siswa5f`.`nilai_b_indonesia5`) + `v_siswa5f`.`nilai_b_inggris5`) + `v_siswa5f`.`nilai_IPA5`) + `v_siswa5f`.`nilai_IPS5`) + `v_siswa5f`.`nilai_matematika5`) + `v_siswa5f`.`nilai_PKN5`) + `v_siswa5f`.`nilai_TIK5`)) AS `total_nilai` from `v_siswa5f` group by `v_siswa5f`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking5g`
--
DROP TABLE IF EXISTS `v_ranking5g`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking5g`  AS  select `v_siswa5g`.`siswa_kode` AS `siswa_kode`,`v_siswa5g`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa5g`.`nilai_agama5` + `v_siswa5g`.`nilai_b_indonesia5`) + `v_siswa5g`.`nilai_b_inggris5`) + `v_siswa5g`.`nilai_IPA5`) + `v_siswa5g`.`nilai_IPS5`) + `v_siswa5g`.`nilai_matematika5`) + `v_siswa5g`.`nilai_PKN5`) + `v_siswa5g`.`nilai_TIK5`)) AS `total_nilai` from `v_siswa5g` group by `v_siswa5g`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking6a`
--
DROP TABLE IF EXISTS `v_ranking6a`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking6a`  AS  select `v_siswa6a`.`siswa_kode` AS `siswa_kode`,`v_siswa6a`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa6a`.`nilai_agama6` + `v_siswa6a`.`nilai_b_indonesia6`) + `v_siswa6a`.`nilai_b_inggris6`) + `v_siswa6a`.`nilai_IPA6`) + `v_siswa6a`.`nilai_IPS6`) + `v_siswa6a`.`nilai_matematika6`) + `v_siswa6a`.`nilai_PKN6`) + `v_siswa6a`.`nilai_TIK6`)) AS `total_nilai` from `v_siswa6a` group by `v_siswa6a`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking6b`
--
DROP TABLE IF EXISTS `v_ranking6b`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking6b`  AS  select `v_siswa6b`.`siswa_kode` AS `siswa_kode`,`v_siswa6b`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa6b`.`nilai_agama6` + `v_siswa6b`.`nilai_b_indonesia6`) + `v_siswa6b`.`nilai_b_inggris6`) + `v_siswa6b`.`nilai_IPA6`) + `v_siswa6b`.`nilai_IPS6`) + `v_siswa6b`.`nilai_matematika6`) + `v_siswa6b`.`nilai_PKN6`) + `v_siswa6b`.`nilai_TIK6`)) AS `total_nilai` from `v_siswa6b` group by `v_siswa6b`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking6c`
--
DROP TABLE IF EXISTS `v_ranking6c`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking6c`  AS  select `v_siswa6c`.`siswa_kode` AS `siswa_kode`,`v_siswa6c`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa6c`.`nilai_agama6` + `v_siswa6c`.`nilai_b_indonesia6`) + `v_siswa6c`.`nilai_b_inggris6`) + `v_siswa6c`.`nilai_IPA6`) + `v_siswa6c`.`nilai_IPS6`) + `v_siswa6c`.`nilai_matematika6`) + `v_siswa6c`.`nilai_PKN6`) + `v_siswa6c`.`nilai_TIK6`)) AS `total_nilai` from `v_siswa6c` group by `v_siswa6c`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking6d`
--
DROP TABLE IF EXISTS `v_ranking6d`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking6d`  AS  select `v_siswa6d`.`siswa_kode` AS `siswa_kode`,`v_siswa6d`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa6d`.`nilai_agama6` + `v_siswa6d`.`nilai_b_indonesia6`) + `v_siswa6d`.`nilai_b_inggris6`) + `v_siswa6d`.`nilai_IPA6`) + `v_siswa6d`.`nilai_IPS6`) + `v_siswa6d`.`nilai_matematika6`) + `v_siswa6d`.`nilai_PKN6`) + `v_siswa6d`.`nilai_TIK6`)) AS `total_nilai` from `v_siswa6d` group by `v_siswa6d`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking6e`
--
DROP TABLE IF EXISTS `v_ranking6e`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking6e`  AS  select `v_siswa6e`.`siswa_kode` AS `siswa_kode`,`v_siswa6e`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa6e`.`nilai_agama6` + `v_siswa6e`.`nilai_b_indonesia6`) + `v_siswa6e`.`nilai_b_inggris6`) + `v_siswa6e`.`nilai_IPA6`) + `v_siswa6e`.`nilai_IPS6`) + `v_siswa6e`.`nilai_matematika6`) + `v_siswa6e`.`nilai_PKN6`) + `v_siswa6e`.`nilai_TIK6`)) AS `total_nilai` from `v_siswa6e` group by `v_siswa6e`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking6f`
--
DROP TABLE IF EXISTS `v_ranking6f`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking6f`  AS  select `v_siswa6f`.`siswa_kode` AS `siswa_kode`,`v_siswa6f`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa6f`.`nilai_agama6` + `v_siswa6f`.`nilai_b_indonesia6`) + `v_siswa6f`.`nilai_b_inggris6`) + `v_siswa6f`.`nilai_IPA6`) + `v_siswa6f`.`nilai_IPS6`) + `v_siswa6f`.`nilai_matematika6`) + `v_siswa6f`.`nilai_PKN6`) + `v_siswa6f`.`nilai_TIK6`)) AS `total_nilai` from `v_siswa6f` group by `v_siswa6f`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking6g`
--
DROP TABLE IF EXISTS `v_ranking6g`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking6g`  AS  select `v_siswa6g`.`siswa_kode` AS `siswa_kode`,`v_siswa6g`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa6g`.`nilai_agama6` + `v_siswa6g`.`nilai_b_indonesia6`) + `v_siswa6g`.`nilai_b_inggris6`) + `v_siswa6g`.`nilai_IPA6`) + `v_siswa6g`.`nilai_IPS6`) + `v_siswa6g`.`nilai_matematika6`) + `v_siswa6g`.`nilai_PKN6`) + `v_siswa6g`.`nilai_TIK6`)) AS `total_nilai` from `v_siswa6g` group by `v_siswa6g`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa1a`
--
DROP TABLE IF EXISTS `v_siswa1a`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa1a`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama1` AS `nilai_agama1`,`tu`.`nilai_b_indonesia1` AS `nilai_b_indonesia1`,`tu`.`nilai_b_inggris1` AS `nilai_b_inggris1`,`tu`.`nilai_b_jawa1` AS `nilai_b_jawa1`,`tu`.`nilai_IPA1` AS `nilai_IPA1`,`tu`.`nilai_IPS1` AS `nilai_IPS1`,`tu`.`nilai_matematika1` AS `nilai_matematika1`,`tu`.`nilai_penjaskes1` AS `nilai_penjaskes1`,`tu`.`nilai_PKN1` AS `nilai_PKN1`,`tu`.`nilai_seni_budaya1` AS `nilai_seni_budaya1`,`tu`.`nilai_TIK1` AS `nilai_TIK1` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 101) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa1b`
--
DROP TABLE IF EXISTS `v_siswa1b`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa1b`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama1` AS `nilai_agama1`,`tu`.`nilai_b_indonesia1` AS `nilai_b_indonesia1`,`tu`.`nilai_b_inggris1` AS `nilai_b_inggris1`,`tu`.`nilai_b_jawa1` AS `nilai_b_jawa1`,`tu`.`nilai_IPA1` AS `nilai_IPA1`,`tu`.`nilai_IPS1` AS `nilai_IPS1`,`tu`.`nilai_matematika1` AS `nilai_matematika1`,`tu`.`nilai_penjaskes1` AS `nilai_penjaskes1`,`tu`.`nilai_PKN1` AS `nilai_PKN1`,`tu`.`nilai_seni_budaya1` AS `nilai_seni_budaya1`,`tu`.`nilai_TIK1` AS `nilai_TIK1` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 102) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa1c`
--
DROP TABLE IF EXISTS `v_siswa1c`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa1c`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama1` AS `nilai_agama1`,`tu`.`nilai_b_indonesia1` AS `nilai_b_indonesia1`,`tu`.`nilai_b_inggris1` AS `nilai_b_inggris1`,`tu`.`nilai_b_jawa1` AS `nilai_b_jawa1`,`tu`.`nilai_IPA1` AS `nilai_IPA1`,`tu`.`nilai_IPS1` AS `nilai_IPS1`,`tu`.`nilai_matematika1` AS `nilai_matematika1`,`tu`.`nilai_penjaskes1` AS `nilai_penjaskes1`,`tu`.`nilai_PKN1` AS `nilai_PKN1`,`tu`.`nilai_seni_budaya1` AS `nilai_seni_budaya1`,`tu`.`nilai_TIK1` AS `nilai_TIK1` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 103) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa1d`
--
DROP TABLE IF EXISTS `v_siswa1d`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa1d`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama1` AS `nilai_agama1`,`tu`.`nilai_b_indonesia1` AS `nilai_b_indonesia1`,`tu`.`nilai_b_inggris1` AS `nilai_b_inggris1`,`tu`.`nilai_b_jawa1` AS `nilai_b_jawa1`,`tu`.`nilai_IPA1` AS `nilai_IPA1`,`tu`.`nilai_IPS1` AS `nilai_IPS1`,`tu`.`nilai_matematika1` AS `nilai_matematika1`,`tu`.`nilai_penjaskes1` AS `nilai_penjaskes1`,`tu`.`nilai_PKN1` AS `nilai_PKN1`,`tu`.`nilai_seni_budaya1` AS `nilai_seni_budaya1`,`tu`.`nilai_TIK1` AS `nilai_TIK1` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 104) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa1e`
--
DROP TABLE IF EXISTS `v_siswa1e`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa1e`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama1` AS `nilai_agama1`,`tu`.`nilai_b_indonesia1` AS `nilai_b_indonesia1`,`tu`.`nilai_b_inggris1` AS `nilai_b_inggris1`,`tu`.`nilai_b_jawa1` AS `nilai_b_jawa1`,`tu`.`nilai_IPA1` AS `nilai_IPA1`,`tu`.`nilai_IPS1` AS `nilai_IPS1`,`tu`.`nilai_matematika1` AS `nilai_matematika1`,`tu`.`nilai_penjaskes1` AS `nilai_penjaskes1`,`tu`.`nilai_PKN1` AS `nilai_PKN1`,`tu`.`nilai_seni_budaya1` AS `nilai_seni_budaya1`,`tu`.`nilai_TIK1` AS `nilai_TIK1` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 105) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa1f`
--
DROP TABLE IF EXISTS `v_siswa1f`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa1f`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama1` AS `nilai_agama1`,`tu`.`nilai_b_indonesia1` AS `nilai_b_indonesia1`,`tu`.`nilai_b_inggris1` AS `nilai_b_inggris1`,`tu`.`nilai_b_jawa1` AS `nilai_b_jawa1`,`tu`.`nilai_IPA1` AS `nilai_IPA1`,`tu`.`nilai_IPS1` AS `nilai_IPS1`,`tu`.`nilai_matematika1` AS `nilai_matematika1`,`tu`.`nilai_penjaskes1` AS `nilai_penjaskes1`,`tu`.`nilai_PKN1` AS `nilai_PKN1`,`tu`.`nilai_seni_budaya1` AS `nilai_seni_budaya1`,`tu`.`nilai_TIK1` AS `nilai_TIK1` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 106) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa1g`
--
DROP TABLE IF EXISTS `v_siswa1g`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa1g`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama1` AS `nilai_agama1`,`tu`.`nilai_b_indonesia1` AS `nilai_b_indonesia1`,`tu`.`nilai_b_inggris1` AS `nilai_b_inggris1`,`tu`.`nilai_b_jawa1` AS `nilai_b_jawa1`,`tu`.`nilai_IPA1` AS `nilai_IPA1`,`tu`.`nilai_IPS1` AS `nilai_IPS1`,`tu`.`nilai_matematika1` AS `nilai_matematika1`,`tu`.`nilai_penjaskes1` AS `nilai_penjaskes1`,`tu`.`nilai_PKN1` AS `nilai_PKN1`,`tu`.`nilai_seni_budaya1` AS `nilai_seni_budaya1`,`tu`.`nilai_TIK1` AS `nilai_TIK1` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 107) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa2a`
--
DROP TABLE IF EXISTS `v_siswa2a`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa2a`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama2` AS `nilai_agama2`,`tu`.`nilai_b_indonesia2` AS `nilai_b_indonesia2`,`tu`.`nilai_b_inggris2` AS `nilai_b_inggris2`,`tu`.`nilai_b_jawa2` AS `nilai_b_jawa2`,`tu`.`nilai_IPA2` AS `nilai_IPA2`,`tu`.`nilai_IPS2` AS `nilai_IPS2`,`tu`.`nilai_matematika2` AS `nilai_matematika2`,`tu`.`nilai_penjaskes2` AS `nilai_penjaskes2`,`tu`.`nilai_PKN2` AS `nilai_PKN2`,`tu`.`nilai_seni_budaya2` AS `nilai_seni_budaya2`,`tu`.`nilai_TIK2` AS `nilai_TIK2` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 201) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa2b`
--
DROP TABLE IF EXISTS `v_siswa2b`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa2b`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama2` AS `nilai_agama2`,`tu`.`nilai_b_indonesia2` AS `nilai_b_indonesia2`,`tu`.`nilai_b_inggris2` AS `nilai_b_inggris2`,`tu`.`nilai_b_jawa2` AS `nilai_b_jawa2`,`tu`.`nilai_IPA2` AS `nilai_IPA2`,`tu`.`nilai_IPS2` AS `nilai_IPS2`,`tu`.`nilai_matematika2` AS `nilai_matematika2`,`tu`.`nilai_penjaskes2` AS `nilai_penjaskes2`,`tu`.`nilai_PKN2` AS `nilai_PKN2`,`tu`.`nilai_seni_budaya2` AS `nilai_seni_budaya2`,`tu`.`nilai_TIK2` AS `nilai_TIK2` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 202) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa2c`
--
DROP TABLE IF EXISTS `v_siswa2c`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa2c`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama2` AS `nilai_agama2`,`tu`.`nilai_b_indonesia2` AS `nilai_b_indonesia2`,`tu`.`nilai_b_inggris2` AS `nilai_b_inggris2`,`tu`.`nilai_b_jawa2` AS `nilai_b_jawa2`,`tu`.`nilai_IPA2` AS `nilai_IPA2`,`tu`.`nilai_IPS2` AS `nilai_IPS2`,`tu`.`nilai_matematika2` AS `nilai_matematika2`,`tu`.`nilai_penjaskes2` AS `nilai_penjaskes2`,`tu`.`nilai_PKN2` AS `nilai_PKN2`,`tu`.`nilai_seni_budaya2` AS `nilai_seni_budaya2`,`tu`.`nilai_TIK2` AS `nilai_TIK2` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 203) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa2d`
--
DROP TABLE IF EXISTS `v_siswa2d`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa2d`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama2` AS `nilai_agama2`,`tu`.`nilai_b_indonesia2` AS `nilai_b_indonesia2`,`tu`.`nilai_b_inggris2` AS `nilai_b_inggris2`,`tu`.`nilai_b_jawa2` AS `nilai_b_jawa2`,`tu`.`nilai_IPA2` AS `nilai_IPA2`,`tu`.`nilai_IPS2` AS `nilai_IPS2`,`tu`.`nilai_matematika2` AS `nilai_matematika2`,`tu`.`nilai_penjaskes2` AS `nilai_penjaskes2`,`tu`.`nilai_PKN2` AS `nilai_PKN2`,`tu`.`nilai_seni_budaya2` AS `nilai_seni_budaya2`,`tu`.`nilai_TIK2` AS `nilai_TIK2` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 204) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa2e`
--
DROP TABLE IF EXISTS `v_siswa2e`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa2e`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama2` AS `nilai_agama2`,`tu`.`nilai_b_indonesia2` AS `nilai_b_indonesia2`,`tu`.`nilai_b_inggris2` AS `nilai_b_inggris2`,`tu`.`nilai_b_jawa2` AS `nilai_b_jawa2`,`tu`.`nilai_IPA2` AS `nilai_IPA2`,`tu`.`nilai_IPS2` AS `nilai_IPS2`,`tu`.`nilai_matematika2` AS `nilai_matematika2`,`tu`.`nilai_penjaskes2` AS `nilai_penjaskes2`,`tu`.`nilai_PKN2` AS `nilai_PKN2`,`tu`.`nilai_seni_budaya2` AS `nilai_seni_budaya2`,`tu`.`nilai_TIK2` AS `nilai_TIK2` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 205) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa2f`
--
DROP TABLE IF EXISTS `v_siswa2f`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa2f`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama2` AS `nilai_agama2`,`tu`.`nilai_b_indonesia2` AS `nilai_b_indonesia2`,`tu`.`nilai_b_inggris2` AS `nilai_b_inggris2`,`tu`.`nilai_b_jawa2` AS `nilai_b_jawa2`,`tu`.`nilai_IPA2` AS `nilai_IPA2`,`tu`.`nilai_IPS2` AS `nilai_IPS2`,`tu`.`nilai_matematika2` AS `nilai_matematika2`,`tu`.`nilai_penjaskes2` AS `nilai_penjaskes2`,`tu`.`nilai_PKN2` AS `nilai_PKN2`,`tu`.`nilai_seni_budaya2` AS `nilai_seni_budaya2`,`tu`.`nilai_TIK2` AS `nilai_TIK2` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 206) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa2g`
--
DROP TABLE IF EXISTS `v_siswa2g`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa2g`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama2` AS `nilai_agama2`,`tu`.`nilai_b_indonesia2` AS `nilai_b_indonesia2`,`tu`.`nilai_b_inggris2` AS `nilai_b_inggris2`,`tu`.`nilai_b_jawa2` AS `nilai_b_jawa2`,`tu`.`nilai_IPA2` AS `nilai_IPA2`,`tu`.`nilai_IPS2` AS `nilai_IPS2`,`tu`.`nilai_matematika2` AS `nilai_matematika2`,`tu`.`nilai_penjaskes2` AS `nilai_penjaskes2`,`tu`.`nilai_PKN2` AS `nilai_PKN2`,`tu`.`nilai_seni_budaya2` AS `nilai_seni_budaya2`,`tu`.`nilai_TIK2` AS `nilai_TIK2` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 207) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa3a`
--
DROP TABLE IF EXISTS `v_siswa3a`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa3a`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama3` AS `nilai_agama3`,`tu`.`nilai_b_indonesia3` AS `nilai_b_indonesia3`,`tu`.`nilai_b_inggris3` AS `nilai_b_inggris3`,`tu`.`nilai_b_jawa3` AS `nilai_b_jawa3`,`tu`.`nilai_IPA3` AS `nilai_IPA3`,`tu`.`nilai_IPS3` AS `nilai_IPS3`,`tu`.`nilai_matematika3` AS `nilai_matematika3`,`tu`.`nilai_penjaskes3` AS `nilai_penjaskes3`,`tu`.`nilai_PKN3` AS `nilai_PKN3`,`tu`.`nilai_seni_budaya3` AS `nilai_seni_budaya3`,`tu`.`nilai_TIK3` AS `nilai_TIK3` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 301) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa3b`
--
DROP TABLE IF EXISTS `v_siswa3b`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa3b`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama3` AS `nilai_agama3`,`tu`.`nilai_b_indonesia3` AS `nilai_b_indonesia3`,`tu`.`nilai_b_inggris3` AS `nilai_b_inggris3`,`tu`.`nilai_b_jawa3` AS `nilai_b_jawa3`,`tu`.`nilai_IPA3` AS `nilai_IPA3`,`tu`.`nilai_IPS3` AS `nilai_IPS3`,`tu`.`nilai_matematika3` AS `nilai_matematika3`,`tu`.`nilai_penjaskes3` AS `nilai_penjaskes3`,`tu`.`nilai_PKN3` AS `nilai_PKN3`,`tu`.`nilai_seni_budaya3` AS `nilai_seni_budaya3`,`tu`.`nilai_TIK3` AS `nilai_TIK3` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 302) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa3c`
--
DROP TABLE IF EXISTS `v_siswa3c`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa3c`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama3` AS `nilai_agama3`,`tu`.`nilai_b_indonesia3` AS `nilai_b_indonesia3`,`tu`.`nilai_b_inggris3` AS `nilai_b_inggris3`,`tu`.`nilai_b_jawa3` AS `nilai_b_jawa3`,`tu`.`nilai_IPA3` AS `nilai_IPA3`,`tu`.`nilai_IPS3` AS `nilai_IPS3`,`tu`.`nilai_matematika3` AS `nilai_matematika3`,`tu`.`nilai_penjaskes3` AS `nilai_penjaskes3`,`tu`.`nilai_PKN3` AS `nilai_PKN3`,`tu`.`nilai_seni_budaya3` AS `nilai_seni_budaya3`,`tu`.`nilai_TIK3` AS `nilai_TIK3` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 303) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa3d`
--
DROP TABLE IF EXISTS `v_siswa3d`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa3d`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama3` AS `nilai_agama3`,`tu`.`nilai_b_indonesia3` AS `nilai_b_indonesia3`,`tu`.`nilai_b_inggris3` AS `nilai_b_inggris3`,`tu`.`nilai_b_jawa3` AS `nilai_b_jawa3`,`tu`.`nilai_IPA3` AS `nilai_IPA3`,`tu`.`nilai_IPS3` AS `nilai_IPS3`,`tu`.`nilai_matematika3` AS `nilai_matematika3`,`tu`.`nilai_penjaskes3` AS `nilai_penjaskes3`,`tu`.`nilai_PKN3` AS `nilai_PKN3`,`tu`.`nilai_seni_budaya3` AS `nilai_seni_budaya3`,`tu`.`nilai_TIK3` AS `nilai_TIK3` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 304) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa3e`
--
DROP TABLE IF EXISTS `v_siswa3e`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa3e`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama3` AS `nilai_agama3`,`tu`.`nilai_b_indonesia3` AS `nilai_b_indonesia3`,`tu`.`nilai_b_inggris3` AS `nilai_b_inggris3`,`tu`.`nilai_b_jawa3` AS `nilai_b_jawa3`,`tu`.`nilai_IPA3` AS `nilai_IPA3`,`tu`.`nilai_IPS3` AS `nilai_IPS3`,`tu`.`nilai_matematika3` AS `nilai_matematika3`,`tu`.`nilai_penjaskes3` AS `nilai_penjaskes3`,`tu`.`nilai_PKN3` AS `nilai_PKN3`,`tu`.`nilai_seni_budaya3` AS `nilai_seni_budaya3`,`tu`.`nilai_TIK3` AS `nilai_TIK3` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 305) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa3f`
--
DROP TABLE IF EXISTS `v_siswa3f`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa3f`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama3` AS `nilai_agama3`,`tu`.`nilai_b_indonesia3` AS `nilai_b_indonesia3`,`tu`.`nilai_b_inggris3` AS `nilai_b_inggris3`,`tu`.`nilai_b_jawa3` AS `nilai_b_jawa3`,`tu`.`nilai_IPA3` AS `nilai_IPA3`,`tu`.`nilai_IPS3` AS `nilai_IPS3`,`tu`.`nilai_matematika3` AS `nilai_matematika3`,`tu`.`nilai_penjaskes3` AS `nilai_penjaskes3`,`tu`.`nilai_PKN3` AS `nilai_PKN3`,`tu`.`nilai_seni_budaya3` AS `nilai_seni_budaya3`,`tu`.`nilai_TIK3` AS `nilai_TIK3` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 306) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa3g`
--
DROP TABLE IF EXISTS `v_siswa3g`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa3g`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama3` AS `nilai_agama3`,`tu`.`nilai_b_indonesia3` AS `nilai_b_indonesia3`,`tu`.`nilai_b_inggris3` AS `nilai_b_inggris3`,`tu`.`nilai_b_jawa3` AS `nilai_b_jawa3`,`tu`.`nilai_IPA3` AS `nilai_IPA3`,`tu`.`nilai_IPS3` AS `nilai_IPS3`,`tu`.`nilai_matematika3` AS `nilai_matematika3`,`tu`.`nilai_penjaskes3` AS `nilai_penjaskes3`,`tu`.`nilai_PKN3` AS `nilai_PKN3`,`tu`.`nilai_seni_budaya3` AS `nilai_seni_budaya3`,`tu`.`nilai_TIK3` AS `nilai_TIK3` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 307) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa4a`
--
DROP TABLE IF EXISTS `v_siswa4a`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa4a`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama4` AS `nilai_agama4`,`tu`.`nilai_b_indonesia4` AS `nilai_b_indonesia4`,`tu`.`nilai_b_inggris4` AS `nilai_b_inggris4`,`tu`.`nilai_b_jawa4` AS `nilai_b_jawa4`,`tu`.`nilai_IPA4` AS `nilai_IPA4`,`tu`.`nilai_IPS4` AS `nilai_IPS4`,`tu`.`nilai_matematika4` AS `nilai_matematika4`,`tu`.`nilai_penjaskes4` AS `nilai_penjaskes4`,`tu`.`nilai_PKN4` AS `nilai_PKN4`,`tu`.`nilai_seni_budaya4` AS `nilai_seni_budaya4`,`tu`.`nilai_TIK4` AS `nilai_TIK4` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 401) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa4b`
--
DROP TABLE IF EXISTS `v_siswa4b`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa4b`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama4` AS `nilai_agama4`,`tu`.`nilai_b_indonesia4` AS `nilai_b_indonesia4`,`tu`.`nilai_b_inggris4` AS `nilai_b_inggris4`,`tu`.`nilai_b_jawa4` AS `nilai_b_jawa4`,`tu`.`nilai_IPA4` AS `nilai_IPA4`,`tu`.`nilai_IPS4` AS `nilai_IPS4`,`tu`.`nilai_matematika4` AS `nilai_matematika4`,`tu`.`nilai_penjaskes4` AS `nilai_penjaskes4`,`tu`.`nilai_PKN4` AS `nilai_PKN4`,`tu`.`nilai_seni_budaya4` AS `nilai_seni_budaya4`,`tu`.`nilai_TIK4` AS `nilai_TIK4` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 402) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa4c`
--
DROP TABLE IF EXISTS `v_siswa4c`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa4c`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama4` AS `nilai_agama4`,`tu`.`nilai_b_indonesia4` AS `nilai_b_indonesia4`,`tu`.`nilai_b_inggris4` AS `nilai_b_inggris4`,`tu`.`nilai_b_jawa4` AS `nilai_b_jawa4`,`tu`.`nilai_IPA4` AS `nilai_IPA4`,`tu`.`nilai_IPS4` AS `nilai_IPS4`,`tu`.`nilai_matematika4` AS `nilai_matematika4`,`tu`.`nilai_penjaskes4` AS `nilai_penjaskes4`,`tu`.`nilai_PKN4` AS `nilai_PKN4`,`tu`.`nilai_seni_budaya4` AS `nilai_seni_budaya4`,`tu`.`nilai_TIK4` AS `nilai_TIK4` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 403) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa4d`
--
DROP TABLE IF EXISTS `v_siswa4d`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa4d`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama4` AS `nilai_agama4`,`tu`.`nilai_b_indonesia4` AS `nilai_b_indonesia4`,`tu`.`nilai_b_inggris4` AS `nilai_b_inggris4`,`tu`.`nilai_b_jawa4` AS `nilai_b_jawa4`,`tu`.`nilai_IPA4` AS `nilai_IPA4`,`tu`.`nilai_IPS4` AS `nilai_IPS4`,`tu`.`nilai_matematika4` AS `nilai_matematika4`,`tu`.`nilai_penjaskes4` AS `nilai_penjaskes4`,`tu`.`nilai_PKN4` AS `nilai_PKN4`,`tu`.`nilai_seni_budaya4` AS `nilai_seni_budaya4`,`tu`.`nilai_TIK4` AS `nilai_TIK4` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 404) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa4e`
--
DROP TABLE IF EXISTS `v_siswa4e`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa4e`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama4` AS `nilai_agama4`,`tu`.`nilai_b_indonesia4` AS `nilai_b_indonesia4`,`tu`.`nilai_b_inggris4` AS `nilai_b_inggris4`,`tu`.`nilai_b_jawa4` AS `nilai_b_jawa4`,`tu`.`nilai_IPA4` AS `nilai_IPA4`,`tu`.`nilai_IPS4` AS `nilai_IPS4`,`tu`.`nilai_matematika4` AS `nilai_matematika4`,`tu`.`nilai_penjaskes4` AS `nilai_penjaskes4`,`tu`.`nilai_PKN4` AS `nilai_PKN4`,`tu`.`nilai_seni_budaya4` AS `nilai_seni_budaya4`,`tu`.`nilai_TIK4` AS `nilai_TIK4` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 405) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa4f`
--
DROP TABLE IF EXISTS `v_siswa4f`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa4f`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama4` AS `nilai_agama4`,`tu`.`nilai_b_indonesia4` AS `nilai_b_indonesia4`,`tu`.`nilai_b_inggris4` AS `nilai_b_inggris4`,`tu`.`nilai_b_jawa4` AS `nilai_b_jawa4`,`tu`.`nilai_IPA4` AS `nilai_IPA4`,`tu`.`nilai_IPS4` AS `nilai_IPS4`,`tu`.`nilai_matematika4` AS `nilai_matematika4`,`tu`.`nilai_penjaskes4` AS `nilai_penjaskes4`,`tu`.`nilai_PKN4` AS `nilai_PKN4`,`tu`.`nilai_seni_budaya4` AS `nilai_seni_budaya4`,`tu`.`nilai_TIK4` AS `nilai_TIK4` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 406) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa4g`
--
DROP TABLE IF EXISTS `v_siswa4g`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa4g`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama4` AS `nilai_agama4`,`tu`.`nilai_b_indonesia4` AS `nilai_b_indonesia4`,`tu`.`nilai_b_inggris4` AS `nilai_b_inggris4`,`tu`.`nilai_b_jawa4` AS `nilai_b_jawa4`,`tu`.`nilai_IPA4` AS `nilai_IPA4`,`tu`.`nilai_IPS4` AS `nilai_IPS4`,`tu`.`nilai_matematika4` AS `nilai_matematika4`,`tu`.`nilai_penjaskes4` AS `nilai_penjaskes4`,`tu`.`nilai_PKN4` AS `nilai_PKN4`,`tu`.`nilai_seni_budaya4` AS `nilai_seni_budaya4`,`tu`.`nilai_TIK4` AS `nilai_TIK4` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 407) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa5a`
--
DROP TABLE IF EXISTS `v_siswa5a`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa5a`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama5` AS `nilai_agama5`,`tu`.`nilai_b_indonesia5` AS `nilai_b_indonesia5`,`tu`.`nilai_b_inggris5` AS `nilai_b_inggris5`,`tu`.`nilai_b_jawa5` AS `nilai_b_jawa5`,`tu`.`nilai_IPA5` AS `nilai_IPA5`,`tu`.`nilai_IPS5` AS `nilai_IPS5`,`tu`.`nilai_matematika5` AS `nilai_matematika5`,`tu`.`nilai_penjaskes5` AS `nilai_penjaskes5`,`tu`.`nilai_PKN5` AS `nilai_PKN5`,`tu`.`nilai_seni_budaya5` AS `nilai_seni_budaya5`,`tu`.`nilai_TIK5` AS `nilai_TIK5` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 501) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa5b`
--
DROP TABLE IF EXISTS `v_siswa5b`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa5b`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama5` AS `nilai_agama5`,`tu`.`nilai_b_indonesia5` AS `nilai_b_indonesia5`,`tu`.`nilai_b_inggris5` AS `nilai_b_inggris5`,`tu`.`nilai_b_jawa5` AS `nilai_b_jawa5`,`tu`.`nilai_IPA5` AS `nilai_IPA5`,`tu`.`nilai_IPS5` AS `nilai_IPS5`,`tu`.`nilai_matematika5` AS `nilai_matematika5`,`tu`.`nilai_penjaskes5` AS `nilai_penjaskes5`,`tu`.`nilai_PKN5` AS `nilai_PKN5`,`tu`.`nilai_seni_budaya5` AS `nilai_seni_budaya5`,`tu`.`nilai_TIK5` AS `nilai_TIK5` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 502) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa5c`
--
DROP TABLE IF EXISTS `v_siswa5c`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa5c`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama5` AS `nilai_agama5`,`tu`.`nilai_b_indonesia5` AS `nilai_b_indonesia5`,`tu`.`nilai_b_inggris5` AS `nilai_b_inggris5`,`tu`.`nilai_b_jawa5` AS `nilai_b_jawa5`,`tu`.`nilai_IPA5` AS `nilai_IPA5`,`tu`.`nilai_IPS5` AS `nilai_IPS5`,`tu`.`nilai_matematika5` AS `nilai_matematika5`,`tu`.`nilai_penjaskes5` AS `nilai_penjaskes5`,`tu`.`nilai_PKN5` AS `nilai_PKN5`,`tu`.`nilai_seni_budaya5` AS `nilai_seni_budaya5`,`tu`.`nilai_TIK5` AS `nilai_TIK5` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 503) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa5d`
--
DROP TABLE IF EXISTS `v_siswa5d`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa5d`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama5` AS `nilai_agama5`,`tu`.`nilai_b_indonesia5` AS `nilai_b_indonesia5`,`tu`.`nilai_b_inggris5` AS `nilai_b_inggris5`,`tu`.`nilai_b_jawa5` AS `nilai_b_jawa5`,`tu`.`nilai_IPA5` AS `nilai_IPA5`,`tu`.`nilai_IPS5` AS `nilai_IPS5`,`tu`.`nilai_matematika5` AS `nilai_matematika5`,`tu`.`nilai_penjaskes5` AS `nilai_penjaskes5`,`tu`.`nilai_PKN5` AS `nilai_PKN5`,`tu`.`nilai_seni_budaya5` AS `nilai_seni_budaya5`,`tu`.`nilai_TIK5` AS `nilai_TIK5` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 504) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa5e`
--
DROP TABLE IF EXISTS `v_siswa5e`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa5e`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama5` AS `nilai_agama5`,`tu`.`nilai_b_indonesia5` AS `nilai_b_indonesia5`,`tu`.`nilai_b_inggris5` AS `nilai_b_inggris5`,`tu`.`nilai_b_jawa5` AS `nilai_b_jawa5`,`tu`.`nilai_IPA5` AS `nilai_IPA5`,`tu`.`nilai_IPS5` AS `nilai_IPS5`,`tu`.`nilai_matematika5` AS `nilai_matematika5`,`tu`.`nilai_penjaskes5` AS `nilai_penjaskes5`,`tu`.`nilai_PKN5` AS `nilai_PKN5`,`tu`.`nilai_seni_budaya5` AS `nilai_seni_budaya5`,`tu`.`nilai_TIK5` AS `nilai_TIK5` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 505) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa5f`
--
DROP TABLE IF EXISTS `v_siswa5f`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa5f`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama5` AS `nilai_agama5`,`tu`.`nilai_b_indonesia5` AS `nilai_b_indonesia5`,`tu`.`nilai_b_inggris5` AS `nilai_b_inggris5`,`tu`.`nilai_b_jawa5` AS `nilai_b_jawa5`,`tu`.`nilai_IPA5` AS `nilai_IPA5`,`tu`.`nilai_IPS5` AS `nilai_IPS5`,`tu`.`nilai_matematika5` AS `nilai_matematika5`,`tu`.`nilai_penjaskes5` AS `nilai_penjaskes5`,`tu`.`nilai_PKN5` AS `nilai_PKN5`,`tu`.`nilai_seni_budaya5` AS `nilai_seni_budaya5`,`tu`.`nilai_TIK5` AS `nilai_TIK5` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 506) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa5g`
--
DROP TABLE IF EXISTS `v_siswa5g`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa5g`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama5` AS `nilai_agama5`,`tu`.`nilai_b_indonesia5` AS `nilai_b_indonesia5`,`tu`.`nilai_b_inggris5` AS `nilai_b_inggris5`,`tu`.`nilai_b_jawa5` AS `nilai_b_jawa5`,`tu`.`nilai_IPA5` AS `nilai_IPA5`,`tu`.`nilai_IPS5` AS `nilai_IPS5`,`tu`.`nilai_matematika5` AS `nilai_matematika5`,`tu`.`nilai_penjaskes5` AS `nilai_penjaskes5`,`tu`.`nilai_PKN5` AS `nilai_PKN5`,`tu`.`nilai_seni_budaya5` AS `nilai_seni_budaya5`,`tu`.`nilai_TIK5` AS `nilai_TIK5` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 507) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa6a`
--
DROP TABLE IF EXISTS `v_siswa6a`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa6a`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama6` AS `nilai_agama6`,`tu`.`nilai_b_indonesia6` AS `nilai_b_indonesia6`,`tu`.`nilai_b_inggris6` AS `nilai_b_inggris6`,`tu`.`nilai_b_jawa6` AS `nilai_b_jawa6`,`tu`.`nilai_IPA6` AS `nilai_IPA6`,`tu`.`nilai_IPS6` AS `nilai_IPS6`,`tu`.`nilai_matematika6` AS `nilai_matematika6`,`tu`.`nilai_penjaskes6` AS `nilai_penjaskes6`,`tu`.`nilai_PKN6` AS `nilai_PKN6`,`tu`.`nilai_seni_budaya6` AS `nilai_seni_budaya6`,`tu`.`nilai_TIK6` AS `nilai_TIK6` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 601) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa6b`
--
DROP TABLE IF EXISTS `v_siswa6b`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa6b`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama6` AS `nilai_agama6`,`tu`.`nilai_b_indonesia6` AS `nilai_b_indonesia6`,`tu`.`nilai_b_inggris6` AS `nilai_b_inggris6`,`tu`.`nilai_b_jawa6` AS `nilai_b_jawa6`,`tu`.`nilai_IPA6` AS `nilai_IPA6`,`tu`.`nilai_IPS6` AS `nilai_IPS6`,`tu`.`nilai_matematika6` AS `nilai_matematika6`,`tu`.`nilai_penjaskes6` AS `nilai_penjaskes6`,`tu`.`nilai_PKN6` AS `nilai_PKN6`,`tu`.`nilai_seni_budaya6` AS `nilai_seni_budaya6`,`tu`.`nilai_TIK6` AS `nilai_TIK6` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 602) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa6c`
--
DROP TABLE IF EXISTS `v_siswa6c`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa6c`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama6` AS `nilai_agama6`,`tu`.`nilai_b_indonesia6` AS `nilai_b_indonesia6`,`tu`.`nilai_b_inggris6` AS `nilai_b_inggris6`,`tu`.`nilai_b_jawa6` AS `nilai_b_jawa6`,`tu`.`nilai_IPA6` AS `nilai_IPA6`,`tu`.`nilai_IPS6` AS `nilai_IPS6`,`tu`.`nilai_matematika6` AS `nilai_matematika6`,`tu`.`nilai_penjaskes6` AS `nilai_penjaskes6`,`tu`.`nilai_PKN6` AS `nilai_PKN6`,`tu`.`nilai_seni_budaya6` AS `nilai_seni_budaya6`,`tu`.`nilai_TIK6` AS `nilai_TIK6` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 603) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa6d`
--
DROP TABLE IF EXISTS `v_siswa6d`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa6d`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama6` AS `nilai_agama6`,`tu`.`nilai_b_indonesia6` AS `nilai_b_indonesia6`,`tu`.`nilai_b_inggris6` AS `nilai_b_inggris6`,`tu`.`nilai_b_jawa6` AS `nilai_b_jawa6`,`tu`.`nilai_IPA6` AS `nilai_IPA6`,`tu`.`nilai_IPS6` AS `nilai_IPS6`,`tu`.`nilai_matematika6` AS `nilai_matematika6`,`tu`.`nilai_penjaskes6` AS `nilai_penjaskes6`,`tu`.`nilai_PKN6` AS `nilai_PKN6`,`tu`.`nilai_seni_budaya6` AS `nilai_seni_budaya6`,`tu`.`nilai_TIK6` AS `nilai_TIK6` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 604) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa6e`
--
DROP TABLE IF EXISTS `v_siswa6e`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa6e`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama6` AS `nilai_agama6`,`tu`.`nilai_b_indonesia6` AS `nilai_b_indonesia6`,`tu`.`nilai_b_inggris6` AS `nilai_b_inggris6`,`tu`.`nilai_b_jawa6` AS `nilai_b_jawa6`,`tu`.`nilai_IPA6` AS `nilai_IPA6`,`tu`.`nilai_IPS6` AS `nilai_IPS6`,`tu`.`nilai_matematika6` AS `nilai_matematika6`,`tu`.`nilai_penjaskes6` AS `nilai_penjaskes6`,`tu`.`nilai_PKN6` AS `nilai_PKN6`,`tu`.`nilai_seni_budaya6` AS `nilai_seni_budaya6`,`tu`.`nilai_TIK6` AS `nilai_TIK6` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 605) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa6f`
--
DROP TABLE IF EXISTS `v_siswa6f`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa6f`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama6` AS `nilai_agama6`,`tu`.`nilai_b_indonesia6` AS `nilai_b_indonesia6`,`tu`.`nilai_b_inggris6` AS `nilai_b_inggris6`,`tu`.`nilai_b_jawa6` AS `nilai_b_jawa6`,`tu`.`nilai_IPA6` AS `nilai_IPA6`,`tu`.`nilai_IPS6` AS `nilai_IPS6`,`tu`.`nilai_matematika6` AS `nilai_matematika6`,`tu`.`nilai_penjaskes6` AS `nilai_penjaskes6`,`tu`.`nilai_PKN6` AS `nilai_PKN6`,`tu`.`nilai_seni_budaya6` AS `nilai_seni_budaya6`,`tu`.`nilai_TIK6` AS `nilai_TIK6` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 606) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa6g`
--
DROP TABLE IF EXISTS `v_siswa6g`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa6g`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama6` AS `nilai_agama6`,`tu`.`nilai_b_indonesia6` AS `nilai_b_indonesia6`,`tu`.`nilai_b_inggris6` AS `nilai_b_inggris6`,`tu`.`nilai_b_jawa6` AS `nilai_b_jawa6`,`tu`.`nilai_IPA6` AS `nilai_IPA6`,`tu`.`nilai_IPS6` AS `nilai_IPS6`,`tu`.`nilai_matematika6` AS `nilai_matematika6`,`tu`.`nilai_penjaskes6` AS `nilai_penjaskes6`,`tu`.`nilai_PKN6` AS `nilai_PKN6`,`tu`.`nilai_seni_budaya6` AS `nilai_seni_budaya6`,`tu`.`nilai_TIK6` AS `nilai_TIK6` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 607) ;

-- --------------------------------------------------------

--
-- Structure for view `v_user`
--
DROP TABLE IF EXISTS `v_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_user`  AS  select `v_userguru`.`user_kode` AS `user_kode`,`v_userguru`.`user_nama` AS `user_nama`,`v_userguru`.`user_username` AS `user_username`,`v_userguru`.`user_password` AS `user_password`,`v_userguru`.`user_agama` AS `user_agama`,`v_userguru`.`user_gender` AS `user_gender`,`v_userguru`.`user_tgllhr` AS `user_tgllhr`,`v_userguru`.`user_tlp` AS `user_tlp`,`v_userguru`.`user_alamat` AS `user_alamat`,`v_userguru`.`user_kelas_id` AS `user_kelas_id`,`v_userguru`.`kelas_nama` AS `kelas_nama`,`v_userguru`.`user_role_id` AS `user_role_id`,`v_userguru`.`role_nama` AS `role_nama`,`v_userguru`.`user_mapel_id` AS `user_mapel_id`,`v_userguru`.`mapel_nama` AS `mapel_nama` from `v_userguru` union select `v_usersiswa`.`user_kode` AS `user_kode`,`v_usersiswa`.`user_nama` AS `user_nama`,`v_usersiswa`.`user_username` AS `user_username`,`v_usersiswa`.`user_password` AS `user_password`,`v_usersiswa`.`user_agama` AS `user_agama`,`v_usersiswa`.`user_gender` AS `user_gender`,`v_usersiswa`.`user_tgllhr` AS `user_tgllhr`,`v_usersiswa`.`user_tlp` AS `user_tlp`,`v_usersiswa`.`user_alamat` AS `user_alamat`,`v_usersiswa`.`user_kelas_id` AS `user_kelas_id`,`v_usersiswa`.`kelas_nama` AS `kelas_nama`,`v_usersiswa`.`user_role_id` AS `user_role_id`,`v_usersiswa`.`role_nama` AS `role_nama`,`v_usersiswa`.`user_mapel_id` AS `user_mapel_id`,`v_usersiswa`.`mapel_nama` AS `mapel_nama` from `v_usersiswa` ;

-- --------------------------------------------------------

--
-- Structure for view `v_userguru`
--
DROP TABLE IF EXISTS `v_userguru`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_userguru`  AS  select `tu`.`guru_kode` AS `user_kode`,`tu`.`guru_nama` AS `user_nama`,`tu`.`guru_username` AS `user_username`,`tu`.`guru_password` AS `user_password`,`tu`.`guru_agama` AS `user_agama`,`tu`.`guru_gender` AS `user_gender`,`tu`.`guru_tgllhr` AS `user_tgllhr`,`tu`.`guru_tlp` AS `user_tlp`,`tu`.`guru_alamat` AS `user_alamat`,`tu`.`guru_kelas_id` AS `user_kelas_id`,`tku`.`kelas_nama` AS `kelas_nama`,`tu`.`guru_role_id` AS `user_role_id`,`tlu`.`role_nama` AS `role_nama`,`tu`.`guru_mapel_id` AS `user_mapel_id`,`tpu`.`mapel_nama` AS `mapel_nama` from (((`guru` `tu` join `role` `tlu`) join `kelas` `tku`) join `mapel` `tpu`) where ((`tu`.`guru_role_id` = `tlu`.`role_id`) and (`tu`.`guru_kelas_id` = `tku`.`kelas_id`) and (`tu`.`guru_mapel_id` = `tpu`.`mapel_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_usersiswa`
--
DROP TABLE IF EXISTS `v_usersiswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_usersiswa`  AS  select `tu`.`siswa_kode` AS `user_kode`,`tu`.`siswa_nama` AS `user_nama`,`tu`.`siswa_username` AS `user_username`,`tu`.`siswa_password` AS `user_password`,`tu`.`siswa_agama` AS `user_agama`,`tu`.`siswa_gender` AS `user_gender`,`tu`.`siswa_tgllhr` AS `user_tgllhr`,`tu`.`siswa_tlp` AS `user_tlp`,`tu`.`siswa_alamat` AS `user_alamat`,`tu`.`siswa_kelas_id` AS `user_kelas_id`,`tku`.`kelas_nama` AS `kelas_nama`,`tu`.`siswa_role_id` AS `user_role_id`,`tlu`.`role_nama` AS `role_nama`,`tu`.`siswa_mapel_id` AS `user_mapel_id`,`tpu`.`mapel_nama` AS `mapel_nama` from (((`siswa` `tu` join `role` `tlu`) join `kelas` `tku`) join `mapel` `tpu`) where ((`tu`.`siswa_role_id` = `tlu`.`role_id`) and (`tu`.`siswa_kelas_id` = `tku`.`kelas_id`) and (`tu`.`siswa_mapel_id` = `tpu`.`mapel_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_walikelas`
--
DROP TABLE IF EXISTS `v_walikelas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_walikelas`  AS  select `tu`.`guru_kode` AS `guru_kode`,`tu`.`guru_nama` AS `guru_nama`,`tu`.`guru_role_id` AS `guru_role_id`,`tlu`.`role_nama` AS `role_nama`,`tu`.`guru_kelas_id` AS `guru_kelas_id`,`tku`.`kelas_nama` AS `kelas_nama` from ((`guru` `tu` join `role` `tlu`) join `kelas` `tku`) where ((`tu`.`guru_role_id` = `tlu`.`role_id`) and (`tu`.`guru_kelas_id` = `tku`.`kelas_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akhlak`
--
ALTER TABLE `akhlak`
  ADD PRIMARY KEY (`akhlak_id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`guru_kode`),
  ADD KEY `fk_guru1` (`guru_role_id`),
  ADD KEY `fk_guru2` (`guru_kelas_id`),
  ADD KEY `fk_guru3` (`guru_mapel_id`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`kehadiran_id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kelas_id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`mapel_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `fk_guru1` FOREIGN KEY (`guru_role_id`) REFERENCES `role` (`role_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_guru2` FOREIGN KEY (`guru_kelas_id`) REFERENCES `kelas` (`kelas_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_guru3` FOREIGN KEY (`guru_mapel_id`) REFERENCES `mapel` (`mapel_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
