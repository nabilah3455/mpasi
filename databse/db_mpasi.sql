-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2020 at 05:18 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mpasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(3, 'nabilah123', '1234'),
(4, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `kalkulator_gizi`
--

CREATE TABLE `kalkulator_gizi` (
  `id_hitung` int(5) NOT NULL,
  `tb` int(5) NOT NULL,
  `bb` int(5) NOT NULL,
  `usia` int(5) NOT NULL,
  `tgl_cek` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kandungan_gizi_bahan_mpasi`
--

CREATE TABLE `kandungan_gizi_bahan_mpasi` (
  `id_bahan` int(5) NOT NULL,
  `nama_bahan` varchar(50) NOT NULL,
  `kandungan_bahan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kandungan_gizi_bahan_mpasi`
--

INSERT INTO `kandungan_gizi_bahan_mpasi` (`id_bahan`, `nama_bahan`, `kandungan_bahan`) VALUES
(4, 'Pepaya', 'energy = 3,9 kcal\r\nwater = -  g\r\nprotein (6%) = 0,1  g\r\nfat (2%) = 0,0  g\r\ncarbohydr. (92%) = 1,0  g\r\ndietary fiber = 0,2  g\r\nalcohol (0%) = -  g\r\nPUFA  =  0,0  g\r\ncholesterol =  0,0 mg\r\nVit. A = 13,5 µg\r\ncarotene = - mg\r\nVit. E (eq.) =  0,1 mg\r\nVit. B1  =  0,0 mg\r\nVit. B2  =   0,0 mg\r\nVit. B6 = 0,0 mg\r\ntot. fol.acid = 3,8 µg\r\nVit. C  =  6,2 mg\r\nsodium =  0,3 mg\r\npotassium = 25,7 mg\r\ncalcium	=  2,4 mg\r\nmagnesium	=  1,0 mg\r\nphosphorus	=  0,5 mg\r\niron	 =  0,0 mg\r\nzinc	 =  0,0 mg'),
(5, 'Tepung Beras', 'energy	 36,1 kcal\r\nwater	  -  g\r\nprotein (8%)	  0,7  g\r\nfat (1%)	0,1  g\r\ncarbohydr. (91%)	 7,9  g\r\ndietary fiber	 0,1  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,0  g\r\ncholesterol	0,0 mg\r\nVit. A	  0,0 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 0,6 µg\r\nVit. C	  0,0 mg\r\nsodium	  0,0 mg\r\npotassium	  8,1 mg\r\ncalcium	 0,8 mg\r\nmagnesium	  3,6 mg\r\nphosphorus	10,3 mg\r\niron	 0,1 mg\r\nzinc	 0,1 mg\r\n'),
(6, 'Labu Kuning', 'energy	  3,9 kcal\r\nwater	  -  g\r\nprotein (8%)	  0,1  g\r\nfat (12%)	  0,1  g\r\ncarbohydr. (80%)	 0,9  g\r\ndietary fiber	 0,3  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,0  g\r\ncholesterol	0,0 mg\r\nVit. A	 40,1 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 2,8 µg\r\nVit. C	  1,0 mg\r\nsodium	  0,1 mg\r\npotassium	 43,7 mg\r\ncalcium	 1,4 mg\r\nmagnesium	  0,8 mg\r\nphosphorus	 2,0 mg\r\niron	 0,0 mg\r\nzinc	 0,0 mg'),
(7, 'Kentang', 'energy	  9,3 kcal\r\nwater	  -  g\r\nprotein (8%)	  0,2  g\r\nfat (1%)	0,0  g\r\ncarbohydr. (91%)	 2,2  g\r\ndietary fiber	 0,2  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,0  g\r\ncholesterol	0,0 mg\r\nVit. A	  0,0 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 0,9 µg\r\nVit. C	  1,3 mg\r\nsodium	  0,5 mg\r\npotassium	 39,1 mg\r\ncalcium	 0,5 mg\r\nmagnesium	  2,5 mg\r\nphosphorus	 5,0 mg\r\niron	 0,0 mg\r\nzinc	 0,0 mg'),
(8, 'Nasi Tim Ayam', 'energy	 14,0 kcal\r\nwater	  -  g\r\nprotein (17%)	 0,6  g\r\nfat (19%)	  0,3  g\r\ncarbohydr. (64%)	 2,2  g\r\ndietary fiber	 0,0  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,1  g\r\ncholesterol	1,2 mg\r\nVit. A	  0,6 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 0,2 µg\r\nVit. C	  0,0 mg\r\nsodium	  1,1 mg\r\npotassium	  4,9 mg\r\ncalcium	 0,4 mg\r\nmagnesium	  1,3 mg\r\nphosphorus	 5,5 mg\r\niron	 0,0 mg\r\nzinc	 0,1 mg'),
(9, 'Bubur Pisang', 'energy	  8,3 kcal\r\nwater	  -  g\r\nprotein (14%)	 0,3  g\r\nfat (21%)	  0,2  g\r\ncarbohydr. (65%)	 1,3  g\r\ndietary fiber	 0,0  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,0  g\r\ncholesterol	0,3 mg\r\nVit. A	  4,2 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 0,5 µg\r\nVit. C	  0,4 mg\r\nsodium	  3,2 mg\r\npotassium	 10,5 mg\r\ncalcium	 7,8 mg\r\nmagnesium	  1,1 mg\r\nphosphorus	 7,0 mg\r\niron	 0,1 mg\r\nzinc	 0,1 mg'),
(10, 'Nasi Tim Wortel Kentang', 'energy	 10,5 kcal\r\nwater	  -  g\r\nprotein (8%)	  0,2  g\r\nfat (2%)	0,0  g\r\ncarbohydr. (91%)	 2,3  g\r\ndietary fiber	 0,1  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,0  g\r\ncholesterol	0,0 mg\r\nVit. A	 19,4 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 0,4 µg\r\nVit. C	  0,2 mg\r\nsodium	  0,7 mg\r\npotassium	  8,2 mg\r\ncalcium	 0,6 mg\r\nmagnesium	  1,3 mg\r\nphosphorus	 3,4 mg\r\niron	 0,0 mg\r\nzinc	 0,0 mg'),
(11, 'Alpukat', 'energy	 21,7 kcal\r\nwater	7,0  g\r\nprotein (4%)	  0,2  g\r\nfat (96%)	  2,3  g\r\ncarbohydr. (1%)	  0,0  g\r\ndietary fiber	 0,3  g\r\nalcohol (0%)	  0,0  g\r\nPUFA	 0,2  g\r\ncholesterol	0,0 mg\r\nVit. A	  1,2 µg\r\ncarotene	0,0 mg\r\nVit. E (eq.)	  0,1 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,1 mg\r\ntot. fol.acid	 3,0 µg\r\nVit. C	  1,3 mg\r\nsodium	  0,3 mg\r\npotassium	 50,3 mg\r\ncalcium	 1,0 mg\r\nmagnesium	  2,9 mg\r\nphosphorus	 3,8 mg\r\niron	 0,1 mg\r\nzinc	 0,0 mg'),
(12, 'Beras Merah', 'energy	 35,8 kcal\r\nwater	  -  g\r\nprotein (8%)	  0,7  g\r\nfat (6%)	0,3  g\r\ncarbohydr. (85%)	 7,5  g\r\ndietary fiber	 0,5  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,1  g\r\ncholesterol	0,0 mg\r\nVit. A	  0,0 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 1,3 µg\r\nVit. C	  0,0 mg\r\nsodium	  0,3 mg\r\npotassium	 25,3 mg\r\ncalcium	 3,2 mg\r\nmagnesium	 14,1 mg\r\nphosphorus	24,6 mg\r\niron	 0,2 mg\r\nzinc	 0,2 mg'),
(13, 'Tomat', 'energy	  2,1 kcal\r\nwater	  -  g\r\nprotein (15%)	 0,1  g\r\nfat (11%)	  0,0  g\r\ncarbohydr. (75%)	 0,5  g\r\ndietary fiber	 0,1  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,0  g\r\ncholesterol	0,0 mg\r\nVit. A	  8,7 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 1,5 µg\r\nVit. C	  1,9 mg\r\nsodium	  0,9 mg\r\npotassium	 22,2 mg\r\ncalcium	 0,5 mg\r\nmagnesium	  1,1 mg\r\nphosphorus	 2,4 mg\r\niron	 0,1 mg\r\nzinc	 0,0 mg'),
(14, 'Hati Ayam', 'energy	 15,7 kcal\r\nwater	  -  g\r\nprotein (65%)	 2,4  g\r\nfat (32%)	  0,6  g\r\ncarbohydr. (2%)	  0,1  g\r\ndietary fiber	 0,0  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,1  g\r\ncholesterol	  63,1 mg\r\nVit. A	  1132,5 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,3 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	59,0 µg\r\nVit. C	  2,3 mg\r\nsodium	  5,1 mg\r\npotassium	 14,0 mg\r\ncalcium	 1,4 mg\r\nmagnesium	  2,1 mg\r\nphosphorus	31,2 mg\r\niron	 0,9 mg\r\nzinc	 0,4 mg'),
(15, 'Ubi Merah', 'energy	 10,3 kcal\r\nwater	  -  g\r\nprotein (6%)	  0,2  g\r\nfat (1%)	0,0  g\r\ncarbohydr. (93%)	 2,4  g\r\ndietary fiber	 0,3  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,0  g\r\ncholesterol	0,0 mg\r\nVit. A	146,7 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,5 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 2,3 µg\r\nVit. C	  2,5 mg\r\nsodium	  1,0 mg\r\npotassium	 34,8 mg\r\ncalcium	 2,8 mg\r\nmagnesium	  2,0 mg\r\nphosphorus	 5,5 mg\r\niron	 0,1 mg\r\nzinc	 0,0 mg'),
(16, 'Bubur Kacang Hijau', 'energy	  8,3 kcal\r\nwater	  -  g\r\nprotein (14%)	 0,3  g\r\nfat (21%)	  0,2  g\r\ncarbohydr. (65%)	 1,3  g\r\ndietary fiber	 0,0  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,0  g\r\ncholesterol	0,3 mg\r\nVit. A	  4,2 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 0,5 µg\r\nVit. C	  0,4 mg\r\nsodium	  3,2 mg\r\npotassium	 10,5 mg\r\ncalcium	 7,8 mg\r\nmagnesium	  1,1 mg\r\nphosphorus	 7,0 mg\r\niron	 0,1 mg\r\nzinc	 0,1 mg'),
(17, 'Kurma', 'energy	 27,9 kcal\r\nwater	  -  g\r\nprotein (4%)	  0,3  g\r\nfat (1%)	0,1  g\r\ncarbohydr. (95%)	 7,4  g\r\ndietary fiber	 0,4  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,0  g\r\ncholesterol	0,0 mg\r\nVit. A	  0,1 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,1 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 0,3 µg\r\nVit. C	  0,3 mg\r\nsodium	  1,1 mg\r\npotassium	 69,8 mg\r\ncalcium	 4,6 mg\r\nmagnesium	  3,1 mg\r\nphosphorus	 9,0 mg\r\niron	 0,2 mg\r\nzinc	 0,0 mg'),
(18, 'Salmon', 'energy	 13,1 kcal\r\nwater	7,4  g\r\nprotein (57%)	 1,8  g\r\nfat (43%)	  0,6  g\r\ncarbohydr. (0%)	  0,0  g\r\ndietary fiber	 0,0  g\r\nalcohol (0%)	  0,0  g\r\nPUFA	 0,2  g\r\ncholesterol	3,5 mg\r\nVit. A	  4,1 µg\r\ncarotene	0,0 mg\r\nVit. E (eq.)	  0,2 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,1 mg\r\ntot. fol.acid	 2,6 µg\r\nVit. C	  0,0 mg\r\nsodium	  5,1 mg\r\npotassium	 37,1 mg\r\ncalcium	 1,3 mg\r\nmagnesium	  2,9 mg\r\nphosphorus	26,6 mg\r\niron	 0,1 mg\r\nzinc	 0,1 mg'),
(19, 'Kacang Merah', 'energy	 33,5 kcal\r\nwater	  -  g\r\nprotein (27%)	 2,3  g\r\nfat (3%)	0,1  g\r\ncarbohydr. (70%)	 6,0  g\r\ndietary fiber	 1,7  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,1  g\r\ncholesterol	0,0 mg\r\nVit. A	  0,0 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	34,3 µg\r\nVit. C	  0,3 mg\r\nsodium	  0,5 mg\r\npotassium	106,4 mg\r\ncalcium	 7,4 mg\r\nmagnesium	 11,9 mg\r\nphosphorus	37,5 mg\r\niron	 0,8 mg\r\nzinc	 0,3 mg'),
(20, 'Telur', 'energy	 15,5 kcal\r\nwater	  -  g\r\nprotein (34%)	 1,3  g\r\nfat (63%)	  1,1  g\r\ncarbohydr. (3%)	  0,1  g\r\ndietary fiber	 0,0  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,1  g\r\ncholesterol	  42,4 mg\r\nVit. A	 19,0 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,2 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,1 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 4,4 µg\r\nVit. C	  0,0 mg\r\nsodium	 12,4 mg\r\npotassium	 12,6 mg\r\ncalcium	 5,0 mg\r\nmagnesium	  1,0 mg\r\nphosphorus	17,2 mg\r\niron	 0,1 mg\r\nzinc	 0,1 mg'),
(21, 'Bayam Merah', 'energy	  3,7 kcal\r\nwater	  -  g\r\nprotein (32%)	 0,4  g\r\nfat (4%)	0,0  g\r\ncarbohydr. (64%)	 0,7  g\r\ndietary fiber	 0,1  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,0  g\r\ncholesterol	0,0 mg\r\nVit. A	 51,9 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,1 mg\r\ntot. fol.acid	10,4 µg\r\nVit. C	  3,3 mg\r\nsodium	  1,1 mg\r\npotassium	 55,0 mg\r\ncalcium	21,1 mg\r\nmagnesium	  6,2 mg\r\nphosphorus	 7,2 mg\r\niron	 0,3 mg\r\nzinc	 0,0 mg'),
(22, 'Makaroni', 'energy	 35,3 kcal\r\nwater	  -  g\r\nprotein (14%)	 1,2  g\r\nfat (5%)	0,2  g\r\ncarbohydr. (82%)	 7,1  g\r\ndietary fiber	 0,4  g\r\nalcohol (0%)	 -  g\r\nPUFA	 0,1  g\r\ncholesterol	0,0 mg\r\nVit. A	  0,0 µg\r\ncarotene	  - mg\r\nVit. E (eq.)	  0,0 mg\r\nVit. B1	 0,0 mg\r\nVit. B2	 0,0 mg\r\nVit. B6	 0,0 mg\r\ntot. fol.acid	 1,8 µg\r\nVit. C	  0,0 mg\r\nsodium	  0,3 mg\r\npotassium	  7,8 mg\r\ncalcium	 1,8 mg\r\nmagnesium	  4,5 mg\r\nphosphorus	13,5 mg\r\niron	 0,1 mg\r\nzinc	 0,1 mg');

-- --------------------------------------------------------

--
-- Table structure for table `mpasi_menu`
--

CREATE TABLE `mpasi_menu` (
  `id_menu` int(5) NOT NULL,
  `judul_menu` text NOT NULL,
  `bahan_menu` varchar(500) NOT NULL,
  `resep_menu` text NOT NULL,
  `foto` text NOT NULL,
  `usia` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mpasi_menu`
--

INSERT INTO `mpasi_menu` (`id_menu`, `judul_menu`, `bahan_menu`, `resep_menu`, `foto`, `usia`) VALUES
(7, 'Tepung Beras', 'Beras', '1. Cuci beras sampai bersih, lalu tiriskan. Jemur hingga kering. Beras dapat diganti kacang hijau kupas atau jagung pipil\r\n2. Haluskan beras dengan blender atau food processor\r\n3. Ayak beras halus. Jika ada yang masih kasar, kumpulkan, haluskan, dan ayak lagi.\r\n4. Sangria tepung beras di atas api kecil sampai benar-benar kering, tetapi jangan sampai berubah warna. Angkat dan biarkan dingin.\r\n5. Simpan dalam wadah bersih, kering dan kedap udara.', 'tepung_beras.jpg', '6-7'),
(8, 'Pure Pepaya', '1. 1 Potong Pepaya\r\n2. ASI', '1. Potong pepaya kecil-kecil. Cuci bersih\r\n2. Blender bersama ASI\r\n3. Sajikan dalam keadaan segar\r\n', 'pure_pepaya.jpg', '6-7'),
(9, 'Pure Pepaya dan Pir', '1. 30 gram pir. Kupas, ambil dagingnya saja\r\n2. 30 gram pepaya, kupas ambil dagingnya.\r\n3. ASI\r\n', '1. Kukus pir hingga lunak\r\n2. Blender semua bahan hingga halus\r\n3. Sajikan\r\n', 'pure_pepaya_dan_pir.png', '6-7'),
(10, 'Pure Oatmeal', '1. 1 sdm oatmeal\r\n2. Air (secukupnya)\r\n3. ASIP/Sufor (secukupnya)', '1. Campur oatmeal dengan air. Masak sampai mendidih. Angkat.\r\n2. Masukkan ASIP atau sufor kedalam oatmeal yang telah dimasak. Aduk rata. Sajikan.\r\n', 'pure_oatmeal.jpg', '6-7'),
(11, 'Bubur Jagung Dengan Pasta Tomat', '1. 2 sdm nasi tim\r\n2. ½ buah jagung manis, parut lembut\r\n3. ½ buah tomat', '1. Masaklah bubur hingga matang.\r\n2. Cuci jagung dan tomat hingga bersih.\r\n3. Setelah bubur setengah matang, parut jagung dan campur kedalam bubur. Aduk sampai matang. Angkat dan saring.\r\n4. Rebus tomat sampai matang, saring.\r\n5. Tuang pasta tomat yang telah jadi kedalam mangkuk. Tuangkan bubur jagung diatasnya. \r\n6. Sajikan.\r\n', '', '6-7'),
(12, 'Pure Labu Kuning', '1. 4 potong labu kuning (labu parang)\r\n2. 1-3 potong brokoli/wortel\r\n3. Asi secukupnya\r\n', '1. Cuci labu dan brokoli sampai bersih\r\n2. Rendam brokoli dengan air garam. Cuci kembali.\r\n3. Rebus labu. Jika sudah setengah matang, masukkan brokoli. Masak hingga matang.\r\n4. Blender labu dan brokoli. Saring. Campurkan ASIP. Sajikan.\r\n\r\nNote: brokoli/wortel bisa diganti dengan bahan makanan lain seperti ikan teri basah/salmon\r\n', '', '6-7'),
(13, 'Pure Kentang', '1. 1 buah kentang\r\n2. 2-3 potong brokoli / wortel\r\n3. Asip secukupnya\r\n', '1. Kupas kentang. Potong dadu. Rendam dalam air\r\n2. Cuci brokoli hingga bersih, rendam air garam sebentar lalu cuci lagi (jika menggunakan wortel, cukup dicuci saja).\r\n3. Rebus kentang. Jika sudah setengah matang, masukkan brokoli/wortel; masak sampai matang\r\n?4. Blender kentang, brokoli/wortel, saring. Tambahkan ASIP. Sajikan\r\n\r\nNote: brokoli/wortel bisa diganti dengan ikan teri basah/salmon\r\n', '', '6-7'),
(14, 'Nasi Tim Ayam', '1. Beras hitam dan beras merah (perbandingan 1:1)\r\n2. Santan\r\n3. Fillet dada ayam kampung\r\n4. 2-3 potong brokoli/wortel\r\n5. Sejumput kacang merah\r\n6. Asip secukupnya\r\n', '1. Bersihkan fillet dada ayam; tiriskan\r\n2. Cuci bersih brokoli, rendam air garam sebentar lalu cuci lagi.\r\n3. Cuci beras merah dan beras hitam; masak dengan api sedang\r\n4. Bila beras sudah setengah matang, tambahkan air santan\r\n5. Masukkan fillet dada ayam, brokoli/wortel, kacang merah; masak dengan api kecil\r\n6. Bila sudah masak, blender semua bahan2. Saring. Tambahkan ASIP. Sajikan.\r\n\r\nNote: bila masih ada airnya, jangan dibuang. Berikan kaldu saat anak disuapi nasi tim saring\r\n', '', '6-7'),
(15, 'Pure Wortel Havermut', '1. 2 sdm havermut\r\n2. 30 gram wortel\r\n3. 250 ml air matang\r\n4. 100 ml ASI/PASI (3 Sendok takar peres PASI dilarutkan dalam 100 ml air matang)\r\n', '1.	Campur havermut dengan air matang lalu aduk rata\r\n2.	Masak di atas api kecil sampai mendidih lalu haluskan dengan blender dan campur dengan 100 ml ASI/PASI\r\n3.	Didihkan air secukupnya lalu masukkan wortel dan tunggu sampai wortel agak lunak. Angkat.\r\n4.	Masukkan wortel bersama air rebusannya ke dalam blender lalu haluskan dan sisihkan. Hidangkan.\r\n', '', '6-7'),
(16, 'Pure Beras Merah dan Hati Ayam', '1. 2 sdm tepung beras merah\r\n2. 30 gram hati ayam rebus, potong kecil\r\n3. 250 ml air matang\r\n4. 100 ml ASI/PASI (3 sendok takar peres PASI dilarutkan dalam 100 ml air matang)\r\n', '1.	Larutkan tepung beras merah dengan air matang, aduk rata.\r\n2.	Masak larutkan tepung beras di atas api kecil sampai mendidih. Aduk-aduk terus agar tidak menggumpal. Sisihkan.\r\n3.	Masukkan potongan hati ayam ke dalam blender, haluskan dan sisihkan\r\n4.	Tuang tepung beras merah ke dalam mangkuk, campur ASI/PASI dan aduk rata. Hidangkan dengan pure hati ayam\r\n', '', '6-7'),
(17, 'Pure Labu Kuning Kentang', '1. 50 gram labu kuning, potong menjadi empat\r\n2. 50 gram kentang, potong menjadi empat\r\n3. 100 ml kaldu\r\n4. 100 ml ASI/PASI\r\n', '1.	Rebus kentang dan labu kuning dengan 100 ml kaldu sampai lunak\r\n2.	Campurkan kentang yang sudah lunak dengan 50 ml ASI/PASI lalu haluskan dengan blender atau alat penyaring khusus.\r\n3.	Campurkan pula labu kuning dengan 50 ml ASI/PASI lalu haluskan dengan blender atau alat penyaring khusus. Hidangkan.', '', '6-7'),
(18, 'Pure Ubi Merang Avokad', '1. 50 gram ubi merah (jingga), potong menjadi empat\r\n2. 50 gram avokad, daging buah yang sudah dikerok\r\n3. 100 ml kaldu\r\n4. 100 ml ASI/PASI\r\n', '1.	Rebus ubi merah (jingga) dengan 100 ml kaldu sampai lunak\r\n2.	Campurkan avokad dengan 50 ml ASI/PASI, lalu haluskan dengan blender atau alat penyaring khusus\r\n3.	Campurkan pula ubi merah (jingga) dengaan 50 ml ASI/PASI, lalu haluskan dengan blender atau alat penyaring khusus. Hidangkan\r\n', '', '6-7'),
(19, 'Pure Jagung Manis dan Hati Ayam', '1. 100 gr jagung manis pipil\r\n2. 1 buah hati ayam kampung, kukus dan potong dadu\r\n3. 100 air\r\n4. 1 buah bawang putih, cincang halus\r\n5. 1 sdm mentega tawar\r\n', '1.	Kukus jagung manis hingga sangat lunak.\r\n2.	Blender jagung hingga lembut.\r\n3.	Tumis hati ayam dengan mentega tawar dan bawang putih cincang sebentar hingga harum.\r\n4.	Campurkan tumisan hati ayam di atas pure jagung.\r\n5.	Pure jagung manis dan hati ayam siap dihidangkan.\r\n\r\nRasa manis dari jagung dan gurihnya hati ayam pasti akan sangat disukai oleh bayi, Bu. Selain itu, kandungan nutrisinya pun tak perlu diragukan lagi.', '', '8'),
(20, 'Bubur Beras Merah dengan Daging Ayam dan Sayuran', '1. 100 gr beras merah\r\n2. 1 buah bawang putih, cincang halus\r\n3. 1 sdm mentega tawar\r\n4. 100 gr daging ayam giling\r\n5. 1 buah wortel, kukus dan cincang lembut\r\n6. 1 buah brokoli ukuran kecil, kukus dan rajang lembut bagian atasnya saja\r\n', '1.	Masak beras merah dengan cara ditumbuk sampai menjadi tepung atau bisa dimasak seperti biasa menggunakan perbandingan 1:9 air untuk mendapatkan tekstur yang sangat lunak. Masak dengan api kecil.\r\n2.	Aduk-aduk bubur supaya tidak hangus.\r\n3.	Tumis ayam giling dengan minyak mentega tawar dan bawang putih cincang hingga matang.\r\n4.	Masukkan tumisan ayam, wortel dan brokoli kukus pada bubur yang sudah matang. Aduk-aduk rata.\r\n5.	Hidangkan dalam wadah dan tambahkan keju parut untuk menambahkan rasa gurih.\r\n\r\nMenu MPASI 8 bulan ini sudah tergolong menu 4 bintang ya, Bu. Jadi bayi sudah mendapatkan banyak nutrisi yang ia butuhkan untuk tumbuh kembangnya. Bubur ini juga bisa dimakan untuk siang dan malam hari. Ibu hanya perlu menghangatkannya saja dengan api kecil.\r\n', '', '8'),
(21, 'Bubur Pisang Susu', '1. 1 buah pisang raja\r\n2. 150-200 ml susu cair/ASIP\r\n', '1.	Lumat pisang hingga teksturnya lembut.\r\n2.	Tambahkan susu sedikit demi sedikit sambil diaduk rata.\r\n3.	Untuk usia 8 bulan, buat bubur dengan tekstur yang agak kental.\r\n4.	Bubur pisang susu siap dihidangkan.\r\n\r\nMenu ini cocok dihidangkan untuk sarapan yang memiliki waktu singkat untuk memasak. Tekstur yang lembut, rasa yang manis, dan kandungan nutrisi dari pisang membuat bubur ini bisa jadi menu andalan Ibu dan pastinya disukai oleh bayi.\r\n', '', '8'),
(22, 'Bubur Kacang Hijau Kurma', '1. 100 gr kacang hijau kupas, rendam dengan air semalaman\r\n2. 2 buah kurma, ambil dagingnya\r\n3. ASIP atau susu cair secukupnya\r\n', '1.	Rebus kacang hijau hingga empuk.\r\n2.	Blender daging kurma sampai lembut.\r\n3.	Saring kacang hijau lalu campurkan ke dalam blender dan tambahkan ASIP atau susu cair, haluskan.\r\n4.	Tuang ke dalam wadah, sajikan selagi hangat.\r\n\r\nKombinasi antara kacang hijau dan kurma akan memberikan berbagai nutrisi yang baik untuk bayi. Untuk penyimpanan bisa ditunggu hingga dingin lalu simpan dalam wadah dan masukkan ke dalam kulkas.\r\n', '', '8'),
(23, 'Bubur Kentang dan Salmon', '1. 100 gr kentang, kupas dan kukus\r\n2. 50 gr salmon\r\n3. 1 ikat bayam\r\n4. Keju parut secukupnya\r\n5. 1 sdm mentega tawar\r\n6. 100 ml susu cair/ASIP\r\n', '1.	Haluskan kentang kukus kemudian letakkan ke dalam panci.\r\n2.	Tuang susu cair/ASIP, masak dengan api kecil hingga mengental.\r\n3.	Panggang salmon dengan mentega tawar hingga matang, lalu suwir-suwir kecil.\r\n4.	Tuang kentang ke dalam wadah, taburkan suwiran salmon dan keju parut.\r\n5.	Bubur kentang salmon siap disantap.\r\n\r\nKentang sebagai sumber karbohidrat dan salmon yang kaya omega 3 memberikan manfaat untuk otak bayi. Karena memiliki rasa yang gurih dan lezat, dijamin bayi  akan sangat menyukai menu MPASI 8 bulan ini.\r\n', '', '8'),
(24, 'Nasi Tim Daging Cincang dan Sayuran', '1. 100 gram beras putih, cuci bersih\r\n2. 50 gram daging sapi cincang\r\n3. 1 ikat sawi sendok, cincang halus\r\n4. 1 buah bawang putih, cincang halus\r\n5. 1 sdm mentega tawar\r\n', '1.	Rebus beras putih dengan air hingga lembut dengan api kecil. Aduk-aduk agar tidak hangus.\r\n2.	Tumis daging sapi dengan mentega tawar, bawang cincang, dan sawi cincang.\r\n3.	Setelah beras mulai lembek, campurkan tumisan daging lalu aduk rata.\r\n4.	Tuang dalam wadah, sajikan selagi hangat.\r\n\r\nTekstur daging sapi yang cenderung kasar mungkin bagi beberapa bayi akan kesulitan untuk menelannya. Ibu bisa mencincangnya lebih halus lagi agar mudah dikunyah oleh bayi.\r\n', '', '8'),
(25, 'Bubur Tim Hati ayam dan Wortel', '1. 2 sdm beras\r\n2. 1/2 potong hati ayam\r\n3. 25 gr daging giling ayam\r\n4. 1/2 labu siam\r\n5. 3 buah baby carrots\r\n6. 1/2 daun bawang\r\n7. 1/2 siung bawang putih\r\n8. 300 ml kaldu ayam\r\n', '1.	Rendam beras selama empat jam, kemudian tumbuk tapi jangan sampai terlalu halus.\r\n2.	Kukus hati ayam dan daging giling ayam, lalu cincang.\r\n3.	Potong dadu kecil labu siam dan baby carrots.\r\n4.	Cincang halus bawang putih dan daun bawang, tumis.\r\n5.	Setelah harum, masukkan potongan labu siam, baby carrots, hati ayam, dan daging giling.\r\n6.	Masukkan beras, tuang kaldu ayam.\r\n7.	Masak hingga matang, sajikan ke si Kecil.', '', '9'),
(26, 'Tim Kacang Merah dan Daging', '1. 20 gr beras, cuci bersih\r\n2. 625 ml air\r\n3. 25 gr dagung giling\r\n4. 10 gr kacang merah\r\n5. 25 gr buncis\r\n6. 25 gr tomat\r\n7. 1 sdm kecap manis\r\n8. 1 sdm santan encer\r\n', '1.	Rendam kacang merah minimal lima jam sebelum memasaknya terlebih dahulu, kemudian dicincang.\r\n2.	Rebus beras dengan air, daging giling, dan kecang merah sambil terus diaduk hingga jadi bubur.\r\n3.	Masukkan buncis dan tomat, masak hingga sayuran matang.\r\n4.	Tambahkan kecap manis dan santan, aduk rata.\r\n5.	Angkat, sajikan ke si Kecil.', '', '9'),
(27, 'Nugget Ayam Wortel', '1. 150 gr daging ayam giling\r\n2. 1 wortel ukuran sedang\r\n3. 3 siung bawang putih\r\n4. 1 sdm bawang merah goreng\r\n5. 1 sdm terigu\r\n6. Tepung roti secukupnya\r\n7. 1 butir telur ayam\r\n', '1.	Haluskan daging ayam, wortel, bawang putih, bawang merah goreng.\r\n2.	Tambahkan terigu pada adonan yang sudah dihaluskan.\r\n3.	Kocok telur, siapkan tepung roti untuk melapisi nugget.\r\n4.	Olesi tangan dengan tepung atau mentega supaya adonan nugget tidak menempel. Ambil adonan secukupnya, bentuk-bentuk, masukkan dalam telur, tiriskan kemudian balurkan pada tepung roti.\r\n5.	Lakukan langkah di atas hingga adonan habis.\r\n6.	Goreng setengah matang dengan api sedang, dinginkan kemudian masukkan dalam freezer.\r\n7.	Jika ingin digunakan, tinggal goreng lagi dan hangatkan, sajikan ke si Kecil.', '', '9'),
(28, 'Bubur Oat Labu Brokoli', '1. 5 sdm oatmeal\r\n2. 200 gr labu kuning atau kabocha\r\n3. 2 kuntum brokoli\r\n4. UB (unsalted butter) secukupnya\r\n5. 200 ml air\r\n', '1.	Potong kecil-kecil labu dan brokoli sampai sesuai selera.\r\n2.	Masak air hingga mendidih, masukkan labu kuning. Masak hingga setengah matang.\r\n3.	Masukkan oatmeal dan brokoli, masak hingga matang.\r\n4.	Dinginkan, sajikan ke si Kecil.', '', '9'),
(29, 'Omelet Nasi', '1. 4 sdm nasi putih matang\r\n2. 2 lembar daun sawi hijau\r\n3. 1 sdm daging sapi cincang\r\n4. 1/4 potong tahu putih\r\n5. 2 butir telur ayam\r\n6. 2 siung bawang putih\r\n7. 2 sdm UB (unsalted butter)\r\n', '1.	Rajang halus daun sawi, dan hancurkan potongan tahu.\r\n2.	Cincang halus bawang putih.\r\n3.	Campurkan semua bahan jadi satu, kecuali UB.\r\n4.	Siapkan teflon panas yang sudah dilapisi UB, dadar campuran bahan sampai matang.\r\n5.	Sajikan ke si Kecil.', '', '9'),
(30, 'Tim Telur Brokoli', '1. 1 butir telur ayam kampung\r\n2. 2 kuntum brokoli\r\n3. 1/2 sdt minyak zaitun\r\n4. 4-6 sdm air panas\r\n', '1.	Cuci bersih brokoli dan kukus sampai matang. Potong kecil-kecil dan buang batangnya.\r\n2.	Pecahkan telur di wadah tahan panas, kocok sebentar dan campurkan minyak zaitun.\r\n3.	Campurkan potongan brokoli, kocok kembali.\r\n4.	Tambahkan 4-6sdm air panas (tergantung besar telur) sambil dikocok.\r\n5.	Kukus telur selama 5-10 menit. Jangan terlalu lama nanti telur jadi keras.', '', '9'),
(31, 'Nasi Telur Puyuh', '1. 4 sdm nasi putih matang\r\n2. 1/2 wortel\r\n3. 1/2 tempe\r\n4. 1 butir telur puyuh\r\n5. 1 sdm UB (unsalted butter)\r\n6. 1 siung bawang putih\r\n', '1.	Rajang halus bawang putih, iris kecil-kecil wortel dan tempe.\r\n2.	Tumis bawang putih dengan UB, kemudian masukkan irisan tempe dan wortel. Masak hingga matang.\r\n3.	Masukkan telur puyuh sambil langsung diorak-arik.\r\n4.	Angkat dan dinginkan, baru campurkan dengan nasi.\r\n5.	Bentuk bola-bola kecil sesuai keinginan, sajikan ke si Kecil.', '', '9'),
(32, 'Bubur Tuna Sayur', '1. 3 sdm nasi matang\r\n2. 2 potong dadu tuna beku (bisa diganti dengan ikan lainnya)\r\n3. 1/2 wortel\r\n4. 2 batang baby buncis\r\n5. 1 keju\r\n6. 1 siung bawang putih\r\n7. Jeruk nipis secukupnya\r\n8. 1 daun salam\r\n9. 1 sdm unsalted butter\r\n', '1.	Rajang tuna dengan jeruk nipis selama 10 menit.\r\n2.	Rebus nasi dengan daun salam sampai nasi lembek, masukkan keju.\r\n3.	Masukkan baby buncis dan wortel yang sudah dipotong kecil-kecil.\r\n4.	Cincang halus bawang putih, tumis dengan UB hingga harum.\r\n5.	Masukkan tuna, masak hingga matang.\r\n6.	Campurkan tumisan tuna ke bubur, aduk hingga mengental.\r\n7.	Sajikan selagi hangat ke si Kecil.', '', '9'),
(33, 'Brokoli, Kembang Kol, Keju', '1. 125 gram kembang kol, dipotong kecil-kecil sesuai ukuran yang aman untuk anak\r\n2. 125 gram brokoli, dipotong kecil-kecil sesuai ukuran yang aman untuk anak.\r\n3. 1 sendok makan mentega tanpa garam (unsalted butter)\r\n4. 1 sendok makan tepung terigu\r\n5. 125 ml susu atau lebih\r\n6. 60 gram keju cheddar putih untuk bayi\r\n', '•	Rebus sayuran hingga hingga lembut selama 3-5 menit.\r\n•	Panaskan oven hingga mencapai suhu 190°C.\r\n•	Siapkan mangkuk tahan panas dan olesi dengan mentega.\r\n•	Susun sayuran yang sudah direbus di mangkuk.\r\n•	Buat saus keju dengan memanaskan mentega dengan panci hingga mencair.\r\n•	Masukkan tepung terigu ke dalam panci sambil terus diaduk.\r\n•	Biarkan hingga sedikit mendidih dan masukkan susu sedikit demi sedikit.\r\n•	Masukkan parutan keju dan biarkan hingga meleleh.\r\n•	Tuang saus keju ke mangkuk tahan panas dan masukkan mangkuk ke oven\r\n•	Panggang selama 15 menit atau hingga berwarna kecokelatan.', '', '10'),
(34, 'Nasi, Kacang Polong, Wortel dan Telur', '1. 1 sendok teh minyak zaitun\r\n2. 2 sendok makan wortel yang sudah diparut\r\n3. 2 sendok makan kacang polong beku\r\n4. 74 gram nasi\r\n5. 1 butir telur yang sudah dikocok\r\n', '•	Panaskan minyak zaitun di panci di atas api sedang.\r\n•	Lalu tambahkan wortel dan dan masak hingga lunak, selama kurang lebih selama 3 menit.\r\n•	Tambahkan kacang polong dan 2 sendok makan air, tumis hingga lunak.\r\n•	Masukkan nasi lalu telur dan aduk hingga semua bahan menyatu dan telur matang sempurna.', '', '10'),
(35, 'Makaroni, Bayam dan Keju', '1. 60 gram makaroni\r\n2. 1 sendok teh minyak zaitun\r\n3. 30 gram bayam\r\n4. 75 gram keju khusus bayi\r\n5. 1 sendok teh parutan kulit jeruk\r\n', '•	Masak makaroni hingga matang.\r\n•	Setelah itu, siapkan wajan dan panaskan minyak zaitun di atas api sedang.\r\n•	Masukkan bayam, masak hingga layu dan lunak.\r\n•	Lalu, sisihkan bayam dan cincang halus.\r\n•	Masukkan pasta, potongan bayam, dan keju ke dalam mangkuk, aduk rata\r\n•	MPASI 10 bulan ini siap dihidangkan', '', '10'),
(36, 'Telur Orak Arik dengan Alpukat dan Telur', '1. 1 butir telur\r\n2. 1 sendok teh air\r\n3. 2 sendok makan tomat dicincang dadu\r\n4. 1 sendok teh minyak zaitun\r\n5. ¼ buah alpukat dicincang dadu\r\n', '•	Siapkan mangkuk kecil, masukkan semua bahan kecuali minyak zaitun dan alpukat.\r\n•	Panaskan minyak zaitun dengan api sedang.\r\n•	Tuang campuran telur, tomat, ke panci berisi minyak zaitun yang telah dipanaskan.\r\n•	Masak dengan api sedang.\r\n•	Lalu, setelah telur mulai matang, masukkan alpukat dan tumis sebentar. Sajikan saat sudah sedikit dingin.', '', '10'),
(37, 'Ayam Kecap', 'Bahan\r\n1. 80 g daging ayam\r\n\r\nBumbu\r\n1. Bawang bombay\r\n2. Bawang putih\r\n3. Bawang merah\r\n4. 1,5 sdm Minyak canola\r\n5. 1/4 sdt kecap\r\n', '•	rebus ayam sampai empuk\r\n•	cincang ayam\r\n•	tumis bawang bombay, bawang merah, bawang putih yang telah dicincang sampai harum\r\n•	masukkan ayam tumis sebentar\r\n•	tambahkan kaldu ayam/ air\r\n•	tambahkan kecap dan garam sedikit\r\n•	masak sampai mendidih\r\n•	sesuaikan tekstur lalu sajikan', '', '10'),
(38, 'Tim Telur Brokoli', '1. 1 butir telur ayam kampung\r\n2. 50 gram brokoli segar\r\n3. 3 mill minyak zaitun\r\n4. 25 mill air panas\r\n', '1.	Sebagai langkah pertamanya, silakan Anda ambil brokoli lalu cuci bersih\r\n2.	Setelah itu, kukus brokoli sampai matang.\r\n3.	Apabila brokolinya sudah matang, potong kecil-kecil dan buang bagian batangnya.\r\n4.	Pecahkan telur dan letakkan dalam wadah tahan panas.\r\n5.	Kocok telurnya sebentar saja, lalu campur dengan minyak zaitun.\r\n6.	Campurkan brokoli yang sudah dipotong kecil tadi, kemudian kocok kembali.\r\n7.	Tuangkan air panas sambil terus dikocok.\r\n8.	Kukus telur sampai matang. Waktu yang dibutuhkan untuk mengukus telur, yakni sekitar 5 - 10 menit.', '', '10'),
(39, 'Nasi Tomat Keju Ayam (Untuk 2 Posi)', '1. 3 sdm beras, cuci bersih\r\n2. 1 bh tomat merah, buang biji potong-potong\r\n3. 1 siung bawang putih, cincang\r\n4. 1 sdm bawang bombay cincang\r\n5. 1-2 sdm daging ayam cincang\r\n6. Keju parut secukupnya\r\n7. Air kaldu secukupnya\r\n8. Minyak utk menumis\r\n', '1. Panaskan minyak, tumis bawang putih dan bawang bombay sampai harum\r\n2. Masukkan daging ayam cincang, masak sampai berubah warna.\r\n3. Tambahkan tomat dan sedikit air kaldu. Masak sampai tomat hancur\r\n4. Masukkan beras dan air kaldu. Masak sampai menjadi nasi aron yg lembek\r\n5. Terakhir masukkan keju parut, aduk rata. Sisihkan kulit tomat.\r\n6. Taruh nasi aron di wadah tahan panas. Kukus selama selama 20 menit.\r\n', '', '10'),
(40, 'Paddas Porridge dengan Slow Cooker versi MPASI', 'Bahan:\r\n1.	4 sdm beras\r\n2.	2 sdm daging sapi cincang\r\n3.	800 ml air kaldu ayam (bisa menggunakan air biasa)\r\n4.	1 sdm wortel potong dadu kecil\r\n5.	1 sdm zucchini potong dadu kecil\r\n6.	1 batang daun bawang, rajang kasar\r\n\r\nBumbu: \r\n1.	1/2 sdm minyak untuk menumis\r\n2.	1 sdm bawang bombay cincang\r\n3.	1 siung bawang putih, cincang halus\r\n4.	1 lembar daun jeruk, sobek kasar bagian tulang tengahnya\r\n5.	1 batang serai, geprek\r\n6.	1 ruas jari jahe, gerek\r\n7.	garam, gula pasir, merica bubuk  secukupnya\r\n', '1.	cuci bersih, masukkan beras ke dalam panci slow cooker. Sisihkan.\r\n2.	panaskan minyak dan tumis bawang bombay hingga harum. Masukkan bawang putih, daun jeruk, jahe dan serai, aduk dan tumis hingga harum. \r\n3.	Masukkan potongan daging sapi, Masak sampai daging berubah warna. Matikan kompor.\r\n4.	Tuangkan tumisan ke dalam panci berisi beras. Masukkan kaldu dan aduk rata. \r\n5.	Tutup panci dan masak dengan posisi high selama 2 – 3 jam atau low selama 4 jam-an. \r\n6.	Jika bubur matang, masukkan semua sayuran, garam, gula pasir dan merica bubuk. Aduk rata dan lanjutkan memasak selama 1 jam hingga sayuran menjadi empuk.\r\n7.	Angkat jahe, serai, dan daun jeruk. Sajikan hangat\r\n\r\nNote:\r\n•	Untuk dibawah 1 tahun, garam, gula, dan merica di skip. Karena bubur sudah gurih dari tumisan daging dan kaldu\r\n•	Sayur bisa disesuaikan dengan selera masing-masing\r\n•	Sayur bisa diparut untuk anak dibawah 1 tahun\r\n•	Bisa dimasak pakai panci biasa\r\n', '', '10'),
(41, 'Makaroni Siram Brokoli', '1.	3 sdm makaroni, rebus sampai empuk. Potong-potong jika baby belum bisa makan 1 buah makaroni utuh\r\n2.	1 sdm bawang bombay cincang\r\n3.	1 sdm daging cincang\r\n4.	2 sdm brokoli\r\n5.	1 sdm tepung terigu\r\n6.	80 ml air\r\n7.	Garam dan merica secukupnya (<1y skip)\r\n8.	Keju parut untuk taburan\r\n9.	1 sdm minyak utk menumis', '1.	Rebus makaroni. Sisihkan\r\n2.	Tumis bawang bombay sampai harus, masukkan daging giling, masak sampai daging matang.\r\n3.	Tuang tepung terigu, aduk cepat. Tambahkan air\r\n4.	Masukkan brokoli, garam, dan merica. Masak sampai brokoli matang\r\n5.	Masukkan makaroni, aduk sebentar. Angkat\r\n6.	Taburi keju di atasnya', '', '10');

-- --------------------------------------------------------

--
-- Table structure for table `mpasi_news`
--

CREATE TABLE `mpasi_news` (
  `id_news` int(5) NOT NULL,
  `judul_news` text NOT NULL,
  `isi_news` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mpasi_news`
--

INSERT INTO `mpasi_news` (`id_news`, `judul_news`, `isi_news`) VALUES
(12, '1', 'dsdsdd'),
(1000, '2', 'ini dfsfs\r\n\r\nadalah\r\n\r\nsebuah\r\n\r\nberita\r\n\r\nsadasdsfsdfdsf dsfsfsf dsfsfsf fsdfsf sfsdf sfaoewkeqekn dsfdsfdfns fksfsf\r\n\r\nini dfsfs\r\n\r\nadalah\r\n\r\nsebuah\r\n\r\nberita\r\n\r\nsadasdsfsdfdsf dsfsfsf dsfsfsf fsdfsf sfsdf sfaoewkeqekn dsfdsfdfns fksfsf\r\n'),
(1002, '3', 'ini dfsfs\r\n\r\nadalah\r\n\r\nsebuah\r\n\r\nberita\r\n\r\n'),
(1003, '4', '5'),
(1004, '6', 'ini dfsfs\r\n\r\nadalah\r\n\r\nsebuah\r\n\r\nberita\r\n\r\n'),
(1005, '7', 'dsdsdd'),
(1006, '8', 'ini dfsfs\r\n\r\nadalah\r\n\r\nsebuah\r\n\r\nberita\r\n\r\nsadasdsfsdfdsf dsfsfsf dsfsfsf fsdfsf sfsdf sfaoewkeqekn dsfdsfdfns fksfsf\r\n\r\nini dfsfs\r\n\r\nadalah\r\n\r\nsebuah\r\n\r\nberita\r\n\r\nsadasdsfsdfdsf dsfsfsf dsfsfsf fsdfsf sfsdf sfaoewkeqekn dsfdsfdfns fksfsf\r\n'),
(1007, '9', 'ini dfsfs\r\n\r\nadalah\r\n\r\nsebuah\r\n\r\nberita\r\n\r\n'),
(1008, '10', 'dsdsdd'),
(1009, '11', 'ini dfsfs\r\n\r\nadalah\r\n\r\nsebuah\r\n\r\nberita\r\n\r\n'),
(1010, 'makan', 'makan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama_user` text NOT NULL,
  `pass_user` varchar(9) NOT NULL,
  `jenis_kelamin` varchar(3) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `berat_badan_kelahiran` varchar(5) NOT NULL,
  `tinggi_badan_kelahiran` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kalkulator_gizi`
--
ALTER TABLE `kalkulator_gizi`
  ADD PRIMARY KEY (`id_hitung`);

--
-- Indexes for table `kandungan_gizi_bahan_mpasi`
--
ALTER TABLE `kandungan_gizi_bahan_mpasi`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `mpasi_menu`
--
ALTER TABLE `mpasi_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `mpasi_news`
--
ALTER TABLE `mpasi_news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kalkulator_gizi`
--
ALTER TABLE `kalkulator_gizi`
  MODIFY `id_hitung` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kandungan_gizi_bahan_mpasi`
--
ALTER TABLE `kandungan_gizi_bahan_mpasi`
  MODIFY `id_bahan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mpasi_menu`
--
ALTER TABLE `mpasi_menu`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `mpasi_news`
--
ALTER TABLE `mpasi_news`
  MODIFY `id_news` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
