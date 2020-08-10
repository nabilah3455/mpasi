-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 10:59 AM
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
(1, 'nabilah123', '$2y$10$0d'),
(2, 'nabilah123', '$2y$10$sQ'),
(3, 'nabilah123', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bahan_mpasi`
--

CREATE TABLE `bahan_mpasi` (
  `id_bahan` int(5) NOT NULL,
  `nama_bahan` varchar(50) NOT NULL,
  `kandungan_bahan` varchar(500) NOT NULL,
  `manfaat_bahan` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan_mpasi`
--

INSERT INTO `bahan_mpasi` (`id_bahan`, `nama_bahan`, `kandungan_bahan`, `manfaat_bahan`) VALUES
(1, 'Beras', '1\r\n2\r\n3', '1\r\n2\r\n3\r\n4\r\n5\r\n6');

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
-- Table structure for table `mpasi`
--

CREATE TABLE `mpasi` (
  `id_menu` int(5) NOT NULL,
  `judul_menu` text NOT NULL,
  `bahan_menu` varchar(50) NOT NULL,
  `resep_menu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mpasi`
--

INSERT INTO `mpasi` (`id_menu`, `judul_menu`, `bahan_menu`, `resep_menu`) VALUES
(1, 'Bubur', 'beras\r\nayam\r\nkecap\r\nseledri\r\nkecap asin', 'dikukus\r\ndi');

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
(12, 'aa', 'dsdsdd'),
(1000, 'Berita MPASi', 'ini dfsfs\r\n\r\nadalah\r\n\r\nsebuah\r\n\r\nberita\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama_user` text NOT NULL,
  `pass_user` varchar(9) NOT NULL
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
-- Indexes for table `bahan_mpasi`
--
ALTER TABLE `bahan_mpasi`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `kalkulator_gizi`
--
ALTER TABLE `kalkulator_gizi`
  ADD PRIMARY KEY (`id_hitung`);

--
-- Indexes for table `mpasi`
--
ALTER TABLE `mpasi`
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
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kalkulator_gizi`
--
ALTER TABLE `kalkulator_gizi`
  MODIFY `id_hitung` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mpasi`
--
ALTER TABLE `mpasi`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mpasi_news`
--
ALTER TABLE `mpasi_news`
  MODIFY `id_news` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
