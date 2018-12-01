-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 02:14 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kurniawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_jenis`
--

CREATE TABLE `daftar_jenis` (
  `id_jenis` int(5) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `ket_jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_jenis`
--

INSERT INTO `daftar_jenis` (`id_jenis`, `jenis`, `ket_jenis`) VALUES
(1, 'charger', ''),
(2, 'handphon', ''),
(3, 'komputer', ''),
(4, 'kabel', ''),
(5, 'matherboot', ''),
(7, 'lcd', ''),
(8, 'laptop', '');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_kondisi`
--

CREATE TABLE `daftar_kondisi` (
  `id_kondisi` int(5) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `ket_kondisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_kondisi`
--

INSERT INTO `daftar_kondisi` (`id_kondisi`, `kondisi`, `ket_kondisi`) VALUES
(1, 'rusak', ''),
(2, 'ringan', ''),
(3, 'sakit parah', '');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pengguna`
--

CREATE TABLE `daftar_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_pengguna`
--

INSERT INTO `daftar_pengguna` (`id_pengguna`, `nama_depan`, `nama_belakang`, `email`, `username`, `password`, `level`, `photo`) VALUES
(20, 'rama', 'wijaya', 'ramawijaya@gmail.com', 'ramawijaya', '67', 'Admin', 'awan.jpg'),
(21, 'hjk', 'jkll', 'kah@gmail.com', 'haskk', '6789', 'User', 'avatar2.png'),
(22, 'kaldahlm', 'asdamn m,', 'nalks@yahoo.com', 'amsm', 'adasd', 'User', 'avatar3.png'),
(23, 'sahfalkm', 'ahdsj', 'agdah@gmail.com', 'asbd', 'dhuwdhb', 'User', 'ganteng.jpg'),
(24, 'asndf', 'basbd', 'AHDAKL@YHAOO.COM', 'ASCNA', 'adcfa', 'User', 'web.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ruang`
--

CREATE TABLE `daftar_ruang` (
  `id_ruang` int(5) NOT NULL,
  `nama_ruang` varchar(50) NOT NULL,
  `fungsi_ruang` varchar(50) NOT NULL,
  `luas` varchar(10) NOT NULL,
  `gambar_ruang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_ruang`
--

INSERT INTO `daftar_ruang` (`id_ruang`, `nama_ruang`, `fungsi_ruang`, `luas`, `gambar_ruang`) VALUES
(1, 'kamr tdur', 'tempat tidur', '10', '2015720145853.jpg'),
(2, 'kamar mandi', 'tempat mandi', '50', 'photo1.png'),
(3, 'teras brn', 'tempa bermain', '20', 'mn.jpg'),
(4, 'ruang mkn', 'tempat makan', '20', 'sd.jpg'),
(6, 'LAB III', 'RUANG PRAKTIK KOMPUTER', '49', 'photo4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_satuan`
--

CREATE TABLE `daftar_satuan` (
  `id_satuan` int(5) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `ket_satuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_satuan`
--

INSERT INTO `daftar_satuan` (`id_satuan`, `satuan`, `ket_satuan`) VALUES
(1, 'Unit', ''),
(2, 'Buah', ''),
(3, 'Pasang', ''),
(4, 'Lembar', ''),
(5, 'satuan', '');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_sumber`
--

CREATE TABLE `daftar_sumber` (
  `id_sumber` int(5) NOT NULL,
  `sumber` varchar(20) NOT NULL,
  `ket_sumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_sumber`
--

INSERT INTO `daftar_sumber` (`id_sumber`, `sumber`, `ket_sumber`) VALUES
(1, 'anakyatim', ''),
(2, 'berkah', ''),
(3, 'sodakah', '');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_tahun`
--

CREATE TABLE `daftar_tahun` (
  `id_tahun` int(5) NOT NULL,
  `tahun` int(4) NOT NULL,
  `ket_tahun` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_tahun`
--

INSERT INTO `daftar_tahun` (`id_tahun`, `tahun`, `ket_tahun`) VALUES
(1, 2010, ''),
(2, 2011, ''),
(3, 2012, ''),
(4, 2013, ''),
(5, 2014, ''),
(6, 2015, ''),
(7, 2016, ''),
(8, 2017, ''),
(9, 2018, ''),
(10, 2019, ''),
(11, 2020, '');

-- --------------------------------------------------------

--
-- Table structure for table `data_iventaris`
--

CREATE TABLE `data_iventaris` (
  `id_ivn` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_ivn` varchar(15) NOT NULL,
  `id_ruangan` int(5) NOT NULL,
  `id_sumber` int(5) NOT NULL,
  `id_tahun` int(5) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `seri` varchar(50) NOT NULL,
  `id_jenis` int(5) NOT NULL,
  `nilai_wajar` int(10) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_jenis`
--
ALTER TABLE `daftar_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `daftar_kondisi`
--
ALTER TABLE `daftar_kondisi`
  ADD PRIMARY KEY (`id_kondisi`);

--
-- Indexes for table `daftar_pengguna`
--
ALTER TABLE `daftar_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `daftar_ruang`
--
ALTER TABLE `daftar_ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `daftar_satuan`
--
ALTER TABLE `daftar_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `daftar_sumber`
--
ALTER TABLE `daftar_sumber`
  ADD PRIMARY KEY (`id_sumber`);

--
-- Indexes for table `daftar_tahun`
--
ALTER TABLE `daftar_tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `data_iventaris`
--
ALTER TABLE `data_iventaris`
  ADD PRIMARY KEY (`id_ivn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_jenis`
--
ALTER TABLE `daftar_jenis`
  MODIFY `id_jenis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `daftar_kondisi`
--
ALTER TABLE `daftar_kondisi`
  MODIFY `id_kondisi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `daftar_pengguna`
--
ALTER TABLE `daftar_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `daftar_ruang`
--
ALTER TABLE `daftar_ruang`
  MODIFY `id_ruang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `daftar_satuan`
--
ALTER TABLE `daftar_satuan`
  MODIFY `id_satuan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `daftar_sumber`
--
ALTER TABLE `daftar_sumber`
  MODIFY `id_sumber` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `daftar_tahun`
--
ALTER TABLE `daftar_tahun`
  MODIFY `id_tahun` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `data_iventaris`
--
ALTER TABLE `data_iventaris`
  MODIFY `id_ivn` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
