-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 04:49 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbpengguna`
--

CREATE TABLE `tbpengguna` (
  `No` int(25) NOT NULL,
  `Nama_Depan` varchar(255) NOT NULL,
  `Nama_Belakang` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Level` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpengguna`
--

INSERT INTO `tbpengguna` (`No`, `Nama_Depan`, `Nama_Belakang`, `Email`, `Username`, `Password`, `Level`, `Photo`) VALUES
(1, 'Emilana', 'Fitriani', 'emilanafit@gmail.com', 'emilafit', '1234', 'Administrator', 'IMG_3086.JPG'),
(3, 'hulaimi', 'bengko', 'hanyahulaimi@gmail.com', 'apeaneh', 'aaaaaa kepoo yee', 'boss', 'IMG_3087.JPG'),
(4, 'joana', 'dewi', 'joanadewi@gmail.com', 'jonadewi', '1234', 'staff', 'IMG_2957.JPG'),
(5, 'lalu', 'saiful', 'saiful@gmail.com', 'user1', '1234', 'staff', 'IMG_3096.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbpengguna`
--
ALTER TABLE `tbpengguna`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbpengguna`
--
ALTER TABLE `tbpengguna`
  MODIFY `No` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
