-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 03:43 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan_ignited2`
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
(1234, 'novan', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'islam', 'Laki', '1992-11-01', '08312367152', 'diatas bumiku', 1, 1, 1),
(12346788, 'evi', 'evi', 'c27ed7723eec707d1f81749334cd7d65f282c7c9', 'katolik', 'Perempuan', '2000-02-17', '081423123', 'cibubur', 2, 701, 2),
(432431123, 'novan', 'van', '439d02cd035d2dd198f0bf83d58e603b708e74f6', 'islam', 'Laki', '2009-02-04', '0812361212312', 'tes', 2, 801, 1);

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
(701, 'VII A'),
(702, 'VII B'),
(703, 'VII C'),
(704, 'VII D'),
(705, 'VII E'),
(706, 'VII F'),
(707, 'VII G'),
(708, 'VII H'),
(801, 'VIII A'),
(802, 'VIII B'),
(803, 'VIII C'),
(804, 'VIII D'),
(805, 'VIII E'),
(806, 'VIII F'),
(807, 'VIII G'),
(808, 'VIII H'),
(809, 'VIII I'),
(901, 'IX A'),
(902, 'IX B'),
(903, 'IX C'),
(904, 'IX D'),
(905, 'IX E'),
(906, 'IX F'),
(907, 'IX G'),
(908, 'IX H'),
(909, 'IX I');

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
(5, 'Bahasa Sasak'),
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
  `nilai_agama7` float DEFAULT '0',
  `nilai_agama8` float DEFAULT '0',
  `nilai_agama9` float DEFAULT '0',
  `nilai_b_indonesia7` float DEFAULT '0',
  `nilai_b_indonesia8` float DEFAULT '0',
  `nilai_b_indonesia9` float DEFAULT '0',
  `nilai_b_inggris7` float DEFAULT '0',
  `nilai_b_inggris8` float DEFAULT '0',
  `nilai_b_inggris9` float DEFAULT '0',
  `nilai_b_sasak7` float DEFAULT '0',
  `nilai_b_sasak8` float DEFAULT '0',
  `nilai_b_sasak9` float DEFAULT '0',
  `nilai_IPA7` float DEFAULT '0',
  `nilai_IPA8` float DEFAULT '0',
  `nilai_IPA9` float DEFAULT '0',
  `nilai_IPS7` float DEFAULT '0',
  `nilai_IPS8` float DEFAULT '0',
  `nilai_IPS9` float DEFAULT '0',
  `nilai_matematika7` float DEFAULT '0',
  `nilai_matematika8` float DEFAULT '0',
  `nilai_matematika9` float DEFAULT '0',
  `nilai_penjaskes7` float DEFAULT '0',
  `nilai_penjaskes8` float DEFAULT '0',
  `nilai_penjaskes9` float DEFAULT '0',
  `nilai_PKN7` float DEFAULT '0',
  `nilai_PKN8` float DEFAULT '0',
  `nilai_PKN9` float DEFAULT '0',
  `nilai_seni_budaya7` float DEFAULT '0',
  `nilai_seni_budaya8` float DEFAULT '0',
  `nilai_seni_budaya9` float DEFAULT '0',
  `nilai_TIK7` float DEFAULT '0',
  `nilai_TIK8` float DEFAULT '0',
  `nilai_TIK9` float DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`siswa_kode`, `siswa_nama`, `siswa_username`, `siswa_password`, `siswa_agama`, `siswa_gender`, `siswa_tgllhr`, `siswa_tlp`, `siswa_wali`, `siswa_alamat`, `siswa_role_id`, `siswa_kelas_id`, `siswa_mapel_id`, `nilai_agama7`, `nilai_agama8`, `nilai_agama9`, `nilai_b_indonesia7`, `nilai_b_indonesia8`, `nilai_b_indonesia9`, `nilai_b_inggris7`, `nilai_b_inggris8`, `nilai_b_inggris9`, `nilai_b_sasak7`, `nilai_b_sasak8`, `nilai_b_sasak9`, `nilai_IPA7`, `nilai_IPA8`, `nilai_IPA9`, `nilai_IPS7`, `nilai_IPS8`, `nilai_IPS9`, `nilai_matematika7`, `nilai_matematika8`, `nilai_matematika9`, `nilai_penjaskes7`, `nilai_penjaskes8`, `nilai_penjaskes9`, `nilai_PKN7`, `nilai_PKN8`, `nilai_PKN9`, `nilai_seni_budaya7`, `nilai_seni_budaya8`, `nilai_seni_budaya9`, `nilai_TIK7`, `nilai_TIK8`, `nilai_TIK9`) VALUES
(112314, 'rizal', 'rizal', '584ffd958df0120b7b1e2a122302c8099b6bdbe8', 'islam', 'Laki', '2000-02-09', '07223422342', 'ada', 'tes', 3, 701, 1, 80, 0, 0, 87, 0, 0, 76, 0, 0, 0, 0, 0, 67, 0, 0, 78, 0, 0, 78, 0, 0, 0, 0, 0, 67, 0, 0, 0, 0, 0, 67, 0, 0),
(776353, 'riza', 'riza', '5a007a892235e6766c21e8ff6ebf7d5f75837e8c', 'islam', 'Laki', '2003-05-09', '0876654123', 'ada', 'tes', 3, 701, 1, 80, 0, 0, 76, 0, 0, 78, 0, 0, 0, 0, 0, 78, 0, 0, 76, 0, 0, 75, 0, 0, 0, 0, 0, 67, 0, 0, 0, 0, 0, 65, 0, 0),
(3231245, 'vanila', 'vanila', '5db30681bd15a356289f9a8c1cd85a0e709e9587', 'islam', 'Perempuan', '2000-01-02', '0841236712', 'vanili', 'kebun', 3, 701, 1, 78, 0, 0, 89, 0, 0, 89, 0, 0, 0, 0, 0, 87, 0, 0, 78, 0, 0, 78, 0, 0, 0, 0, 0, 78, 0, 0, 0, 0, 0, 98, 0, 0),
(4234341, 'zul', 'zul', '85c2e06ed10a8bcfccf6586c9a9efa1c493c4c83', 'islam', 'Laki', '2000-02-02', '0842342342', 'ada', 'tes', 3, 701, 1, 90, 0, 0, 90, 0, 0, 80, 0, 0, 0, 0, 0, 75, 0, 0, 75, 0, 0, 70, 0, 0, 0, 0, 0, 90, 0, 0, 0, 0, 0, 80, 0, 0),
(5636273, 'vani', 'vani', 'ae6d2ea80680bb09f8bd42086f1f7466ee28c841', 'islam', 'Perempuan', '2005-11-16', '0871236123', 'ada', 'tes', 3, 701, 1, 90, 0, 0, 89, 0, 0, 89, 0, 0, 0, 0, 0, 87, 0, 0, 87, 0, 0, 90, 0, 0, 0, 0, 0, 89, 0, 0, 0, 0, 0, 87, 0, 0),
(7787628, 'alpin', 'alpin', '19a21ff6a04a7e2d539758e3b7214ef6d53e7db4', 'islam', 'Laki', '2003-05-14', '084263427342', 'ada', 'tes', 3, 701, 1, 70, 0, 0, 70, 0, 0, 75, 0, 0, 0, 0, 0, 89, 0, 0, 86, 0, 0, 65, 0, 0, 0, 0, 0, 78, 0, 0, 0, 0, 0, 89, 0, 0),
(8843532, 'fery', 'fery', '9fd5edd360b683fba77b8630f6e32a5a3bb8966a', 'islam', 'Laki', '2000-02-09', '0823646236542', 'ada', 'tes', 3, 701, 1, 90, 0, 0, 78, 0, 0, 67, 0, 0, 0, 0, 0, 78, 0, 0, 78, 0, 0, 89, 0, 0, 0, 0, 0, 87, 0, 0, 0, 0, 0, 78, 0, 0),
(8892346, 'reza', 'reza', 'b96dbf74436b3f73db2f27c2fb7c966eb1f47360', 'islam', 'Laki', '2003-01-07', '0856756437463', 'ada', 'tes', 3, 701, 1, 80, 0, 0, 89, 0, 0, 86, 0, 0, 0, 0, 0, 87, 0, 0, 75, 0, 0, 65, 0, 0, 0, 0, 0, 78, 0, 0, 0, 0, 0, 76, 0, 0),
(23145123, 'vanlex', 'vanlex', '4d681bfd4ea9be96d76a3ec9a5e3c7ebcc4100ef', 'islam', 'Laki', '1992-01-01', '089123167', 'lexi', 'yogya', 3, 701, 1, 90, 0, 0, 80, 0, 0, 80, 0, 0, 0, 0, 0, 75, 0, 0, 75, 0, 0, 80, 0, 0, 0, 0, 0, 90, 0, 0, 0, 0, 0, 75, 0, 0),
(345234234, 'iluth', 'iluth', '918b9f33309f59bd9c05a722fd6974506dfb941a', 'islam', 'Laki', '2000-01-05', '0823642354236', 'ada', 'tes', 3, 701, 1, 90, 0, 0, 80, 0, 0, 78, 0, 0, 0, 0, 0, 70, 0, 0, 75, 0, 0, 80, 0, 0, 0, 0, 0, 85, 0, 0, 0, 0, 0, 80, 0, 0),
(2147483647, 'novan lexiku', 'vanlex', 'c4cd9879eee70ac7784a9bd20776b4120b558124', 'islam', 'Laki', '2009-05-15', '08124123123', 'vanlexi', 'yogya', 3, 701, 1, 90, 0, 0, 89, 0, 0, 78, 0, 0, 0, 0, 0, 78, 0, 0, 90, 0, 0, 78, 0, 0, 0, 0, 0, 68, 0, 0, 0, 0, 0, 89, 0, 0);

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
-- Stand-in structure for view `v_kelas7`
-- (See below for the actual view)
--
CREATE TABLE `v_kelas7` (
`kelas_id` int(50)
,`kelas_nama` varchar(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kelas8`
-- (See below for the actual view)
--
CREATE TABLE `v_kelas8` (
`kelas_id` int(50)
,`kelas_nama` varchar(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kelas9`
-- (See below for the actual view)
--
CREATE TABLE `v_kelas9` (
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
-- Stand-in structure for view `v_ranking7a`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking7a` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking8a`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking8a` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ranking9a`
-- (See below for the actual view)
--
CREATE TABLE `v_ranking9a` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`total_nilai` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa7a`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa7a` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama7` float
,`nilai_b_indonesia7` float
,`nilai_b_inggris7` float
,`nilai_b_sasak7` float
,`nilai_IPA7` float
,`nilai_IPS7` float
,`nilai_matematika7` float
,`nilai_penjaskes7` float
,`nilai_PKN7` float
,`nilai_seni_budaya7` float
,`nilai_TIK7` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa8a`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa8a` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama8` float
,`nilai_b_indonesia8` float
,`nilai_b_inggris8` float
,`nilai_b_sasak8` float
,`nilai_IPA8` float
,`nilai_IPS8` float
,`nilai_matematika8` float
,`nilai_penjaskes8` float
,`nilai_PKN8` float
,`nilai_seni_budaya8` float
,`nilai_TIK8` float
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa9a`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa9a` (
`siswa_kode` int(50)
,`siswa_nama` varchar(50)
,`siswa_kelas_id` int(50)
,`nilai_agama9` float
,`nilai_b_indonesia9` float
,`nilai_b_inggris9` float
,`nilai_b_sasak9` float
,`nilai_IPA9` float
,`nilai_IPS9` float
,`nilai_matematika9` float
,`nilai_penjaskes9` float
,`nilai_PKN9` float
,`nilai_seni_budaya9` float
,`nilai_TIK9` float
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
-- Structure for view `v_kelas7`
--
DROP TABLE IF EXISTS `v_kelas7`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kelas7`  AS  select `kelas`.`kelas_id` AS `kelas_id`,`kelas`.`kelas_nama` AS `kelas_nama` from `kelas` where ((`kelas`.`kelas_id` <> 1) and (`kelas`.`kelas_id` < 801)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_kelas8`
--
DROP TABLE IF EXISTS `v_kelas8`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kelas8`  AS  select `kelas`.`kelas_id` AS `kelas_id`,`kelas`.`kelas_nama` AS `kelas_nama` from `kelas` where ((`kelas`.`kelas_id` <> 1) and (`kelas`.`kelas_id` < 901) and (`kelas`.`kelas_id` > 800)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_kelas9`
--
DROP TABLE IF EXISTS `v_kelas9`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kelas9`  AS  select `kelas`.`kelas_id` AS `kelas_id`,`kelas`.`kelas_nama` AS `kelas_nama` from `kelas` where ((`kelas`.`kelas_id` <> 1) and (`kelas`.`kelas_id` > 900)) ;

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
-- Structure for view `v_ranking7a`
--
DROP TABLE IF EXISTS `v_ranking7a`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking7a`  AS  select `v_siswa7a`.`siswa_kode` AS `siswa_kode`,`v_siswa7a`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa7a`.`nilai_agama7` + `v_siswa7a`.`nilai_b_indonesia7`) + `v_siswa7a`.`nilai_b_inggris7`) + `v_siswa7a`.`nilai_IPA7`) + `v_siswa7a`.`nilai_IPS7`) + `v_siswa7a`.`nilai_matematika7`) + `v_siswa7a`.`nilai_PKN7`) + `v_siswa7a`.`nilai_TIK7`)) AS `total_nilai` from `v_siswa7a` group by `v_siswa7a`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking8a`
--
DROP TABLE IF EXISTS `v_ranking8a`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking8a`  AS  select `v_siswa8a`.`siswa_kode` AS `siswa_kode`,`v_siswa8a`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa8a`.`nilai_agama8` + `v_siswa8a`.`nilai_b_indonesia8`) + `v_siswa8a`.`nilai_b_inggris8`) + `v_siswa8a`.`nilai_IPA8`) + `v_siswa8a`.`nilai_IPS8`) + `v_siswa8a`.`nilai_matematika8`) + `v_siswa8a`.`nilai_PKN8`) + `v_siswa8a`.`nilai_TIK8`)) AS `total_nilai` from `v_siswa8a` group by `v_siswa8a`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_ranking9a`
--
DROP TABLE IF EXISTS `v_ranking9a`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ranking9a`  AS  select `v_siswa9a`.`siswa_kode` AS `siswa_kode`,`v_siswa9a`.`siswa_nama` AS `siswa_nama`,sum((((((((`v_siswa9a`.`nilai_agama9` + `v_siswa9a`.`nilai_b_indonesia9`) + `v_siswa9a`.`nilai_b_inggris9`) + `v_siswa9a`.`nilai_IPA9`) + `v_siswa9a`.`nilai_IPS9`) + `v_siswa9a`.`nilai_matematika9`) + `v_siswa9a`.`nilai_PKN9`) + `v_siswa9a`.`nilai_TIK9`)) AS `total_nilai` from `v_siswa9a` group by `v_siswa9a`.`siswa_nama` ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa7a`
--
DROP TABLE IF EXISTS `v_siswa7a`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa7a`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama7` AS `nilai_agama7`,`tu`.`nilai_b_indonesia7` AS `nilai_b_indonesia7`,`tu`.`nilai_b_inggris7` AS `nilai_b_inggris7`,`tu`.`nilai_b_sasak7` AS `nilai_b_sasak7`,`tu`.`nilai_IPA7` AS `nilai_IPA7`,`tu`.`nilai_IPS7` AS `nilai_IPS7`,`tu`.`nilai_matematika7` AS `nilai_matematika7`,`tu`.`nilai_penjaskes7` AS `nilai_penjaskes7`,`tu`.`nilai_PKN7` AS `nilai_PKN7`,`tu`.`nilai_seni_budaya7` AS `nilai_seni_budaya7`,`tu`.`nilai_TIK7` AS `nilai_TIK7` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 701) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa8a`
--
DROP TABLE IF EXISTS `v_siswa8a`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa8a`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama8` AS `nilai_agama8`,`tu`.`nilai_b_indonesia8` AS `nilai_b_indonesia8`,`tu`.`nilai_b_inggris8` AS `nilai_b_inggris8`,`tu`.`nilai_b_sasak8` AS `nilai_b_sasak8`,`tu`.`nilai_IPA8` AS `nilai_IPA8`,`tu`.`nilai_IPS8` AS `nilai_IPS8`,`tu`.`nilai_matematika8` AS `nilai_matematika8`,`tu`.`nilai_penjaskes8` AS `nilai_penjaskes8`,`tu`.`nilai_PKN8` AS `nilai_PKN8`,`tu`.`nilai_seni_budaya8` AS `nilai_seni_budaya8`,`tu`.`nilai_TIK8` AS `nilai_TIK8` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 801) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa9a`
--
DROP TABLE IF EXISTS `v_siswa9a`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa9a`  AS  select `tu`.`siswa_kode` AS `siswa_kode`,`tu`.`siswa_nama` AS `siswa_nama`,`tu`.`siswa_kelas_id` AS `siswa_kelas_id`,`tu`.`nilai_agama9` AS `nilai_agama9`,`tu`.`nilai_b_indonesia9` AS `nilai_b_indonesia9`,`tu`.`nilai_b_inggris9` AS `nilai_b_inggris9`,`tu`.`nilai_b_sasak9` AS `nilai_b_sasak9`,`tu`.`nilai_IPA9` AS `nilai_IPA9`,`tu`.`nilai_IPS9` AS `nilai_IPS9`,`tu`.`nilai_matematika9` AS `nilai_matematika9`,`tu`.`nilai_penjaskes9` AS `nilai_penjaskes9`,`tu`.`nilai_PKN9` AS `nilai_PKN9`,`tu`.`nilai_seni_budaya9` AS `nilai_seni_budaya9`,`tu`.`nilai_TIK9` AS `nilai_TIK9` from `siswa` `tu` where (`tu`.`siswa_kelas_id` = 901) ;

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
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`siswa_kode`),
  ADD KEY `fk_siswa1` (`siswa_role_id`),
  ADD KEY `fk_siswa2` (`siswa_kelas_id`),
  ADD KEY `fk_siswa3` (`siswa_mapel_id`);

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

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_siswa1` FOREIGN KEY (`siswa_role_id`) REFERENCES `role` (`role_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_siswa2` FOREIGN KEY (`siswa_kelas_id`) REFERENCES `kelas` (`kelas_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_siswa3` FOREIGN KEY (`siswa_mapel_id`) REFERENCES `mapel` (`mapel_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
