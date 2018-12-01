-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Des 2018 pada 06.09
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `putra`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(15) NOT NULL,
  `nm_depan` varchar(100) NOT NULL,
  `nm_belakang` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(4) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nm_depan`, `nm_belakang`, `email`, `username`, `password`, `level`, `photo`) VALUES
(27, 'sahar', 'man', 'man@gmail.com', 'man', '1234', 1, '20181014_114220.jpg'),
(28, 'joker', 'acok', 'jokeracokbelek@gmail.com', 'wert', '123', 1, '12552591_1672477709708444_3103168949625736735_n.jpg'),
(29, 'awan', 'okep', 'awanokep@gmail.com', 'wer', '123', 2, 'IMG_20180714_161718.jpg'),
(30, 'dita', 'putra', 'ditaputra@gmail.com', 'are', '1234', 1, '14055165_1767113383578209_7452399823500588284_n.jpg'),
(33, 'bagu', 'qomar', 'bagukomar@gmail.com', 'bagu', '24', 2, 'DSC_0057.JPG'),
(34, 'saya', 'aku', 'saya@gmail.com', 'saya', '1234', 3, 'IMG_20180714_161351.jpg'),
(35, 'ata', 'saldi', 'ata@gmail.com', 'ta', '12', 1, 'IMG_20180714_161930.jpg'),
(36, 'hapis', 'bahrain', 'hapis@gmail.com', 'hapis', '1', 3, 'IMG_20180714_160329.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
