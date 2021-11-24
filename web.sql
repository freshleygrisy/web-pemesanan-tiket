-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 07:50 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `kata_kunci` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `deskripsi`, `url`, `kata_kunci`) VALUES
(1, 'Aceh', 'Wisata di Aceh', 'https://tempatwisataseru.com/tempat-wisata-di-aceh/', 'wisata sumatera aceh'),
(2, 'Bali', 'Wisata di Bali', 'https://www.water-sport-bali.com/20-tempat-wisata-untuk-dikunjungi-bali/', 'wisata bali pulau terindah'),
(3, 'Medan', 'Wisata di Medan', 'https://www.andalastourism.com/tempat-wisata-medan/', 'wisata sumatera utara medan'),
(4, 'Padang', 'Wisata di Padang', 'https://www.andalastourism.com/tempat-wisata-padang/', 'wisata sumatera barat padang'),
(5, 'Batam', 'Wisata di Batam', 'https://www.andalastourism.com/tempat-wisata-batam/', 'wisata riau batam'),
(6, 'Jakarta', 'Wisata di Jakarta', 'https://www.javatravel.net/tempat-wisata-jakarta/', 'wisata jawa jakarta'),
(7, 'Bogor', 'Wisata di Bogor', 'https://www.wisataidn.com/tempat-wisata-di-bogor/', 'wisata jawa barat bogor'),
(8, 'DI Yogyakarta', 'Wisata di Yogyakarta', 'https://www.wisataidn.com/tempat-wisata-di-jogja/', 'wisata jawa tengah jogja yogya yogyakarta'),
(9, 'Surabaya', 'Wisata di Surabaya', 'https://wisatalengkap.com/tempat-wisata-di-surabaya-terbaru/', 'wisata jawa timur surabaya'),
(10, 'Semarang', 'Wisata di Semarang', 'https://www.klook.com/id/blog/rekomendasi-tempat-wisata-di-semarang/', 'wisata jawa tengah semarang'),
(11, 'Madura', 'Wisata di Madura', 'https://www.itrip.id/tempat-wisata-madura', 'wisata jawa timur madura'),
(12, 'Malang', 'Wisata di Malang', 'https://dolanyok.com/wisata-malang/', 'wisata jawa timur malang'),
(13, 'Makassar', 'Wisata di Makassar', 'https://www.celebes.co/tempat-wisata-makassar', 'wisata sulawesi selatan makassar'),
(14, 'Makassar', 'Wisata di Makassar', 'https://www.celebes.co/tempat-wisata-makassar', 'wisata sulawesi selatan makassar'),
(15, 'Nusa Tenggara Timur', 'Wisata di Nusa Tenggara Timur', 'https://tempatwisataseru.com/tempat-wisata-di-ntt-paling-populer-yang-wajib-dikunjungi/', 'wisata nusa tenggara timur ntt'),
(16, 'Papua', 'Wisata di Papua', 'https://www.tripzilla.id/wisata-alam-di-papua/20284', 'wisata papua'),
(17, 'Pontianak', 'Wisata di Pontianak', 'https://www.celebes.co/borneo/tempat-wisata-pontianak', 'wisata kalimantan barat pontianak'),
(18, 'Bandung', 'Wisata di Bandung', 'https://www.wisataidn.com/tempat-wisata-di-bandung/', 'wisata jawa barat bandung');

-- --------------------------------------------------------

--
-- Table structure for table `datadiri`
--

CREATE TABLE `datadiri` (
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` int(50) NOT NULL,
  `penerbangan` varchar(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `destinasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datadiri`
--

INSERT INTO `datadiri` (`nama_depan`, `nama_belakang`, `email`, `nohp`, `penerbangan`, `hari`, `destinasi`) VALUES
('Raja', 'Panjaitan', 'rajapranatapanjaitan@gmail.com', 2147483647, 'Air asia', 'senin', 'medan'),
('Raja', 'Panjaitan', 'rajapranatapanjaitan@gmail.com', 2147483647, 'Lion', 'selasa', 'jogja');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `kata_kunci` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
