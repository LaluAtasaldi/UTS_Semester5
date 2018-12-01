-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Des 2018 pada 13.00
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(15) NOT NULL,
  `nama_belakang` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama_depan`, `nama_belakang`, `email`, `username`, `password`, `level`, `foto`) VALUES
(1, 'qomarul', 'bagu', 'qomarulhuda0029@gmail.com', 'beken', '123', '1', '2015-02-06 14.34.36.jpg'),
(7, 'adfad', '123', 'adfadf@gmail.com', 'parpoldaerah', '123', '1', '2015-01-26 22.06.57.jpg'),
(8, 'adfa', 'fadf', 'adfadf@gmail.com', 'beken', '231', '1', '2015-02-06 14.28.41.jpg'),
(9, 'ahdfgkajhflashf', 'fdafha;lkdfh;ak', 'asfhasjfh@gmail.com', 'aknflkdaj', 'afalkdjf', 'akdjflak', '2015-01-18 14.43.19.jpg'),
(10, 'safa', 'adas', 'qomarulhuda0029@gmail.com', 'dad', 'ada', '1', '2015-01-19 12.45.30.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
