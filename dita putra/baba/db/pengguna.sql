-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Des 2018 pada 04.54
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
-- Database: `husnul`
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
(27, 'Emilana', 'Fitriani', 'emilanafit@gmail', 'Emilafit', '1234', 1, 'Lighthouse.jpg'),
(28, 'joker', 'acok', 'jokeracokbelek@gmail.com', 'wert', '123', 1, 'Tulips.jpg'),
(29, 'awan', 'okep', 'awanokep@gmail.com', 'wer', '123', 2, 'DSC_0057.JPG'),
(30, 'dita', 'putra', 'ditaputra@gmail.com', 'are', '1234', 1, 'Jellyfish.jpg'),
(33, 'bagu', 'qomar', 'bagukomar@gmail.com', 'bagu', '24', 2, 'DSC_0057.JPG');

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
  MODIFY `id_pengguna` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
