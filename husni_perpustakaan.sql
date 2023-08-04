-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 12:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `husni_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(12) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Husni', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `perpustakaan`
--

CREATE TABLE `perpustakaan` (
  `id` int(10) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `nama_pengarang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perpustakaan`
--

INSERT INTO `perpustakaan` (`id`, `nama_buku`, `nama_pengarang`) VALUES
(151, 'Laskar Pelangi', 'Andrea Hirata'),
(152, 'Bumi Manusia', 'Pramoedya Ananta Toer'),
(153, 'Pulang', 'Leila S. Chudori'),
(154, 'Cinta di Dalam Gelas', 'Andrea Hirata'),
(155, 'Perahu Kertas', 'Dee Lestari'),
(156, 'Ayat-Ayat Cinta', 'Habiburrahman El-Shirazy'),
(157, 'Ketika Cinta Bertasbih', 'Habiburrahman El-Shirazy'),
(158, 'Sang Pemimpi', 'Andrea Hirata'),
(159, 'Sepotong Senja untuk Pacarku', 'Seno Gumira Ajidarma'),
(160, 'Pramoedya: Bukan Pasar Malam', 'Maman S. Mahayana'),
(162, 'Dewi Lestari: Rindu Sang Pelangi', 'Mimi Rasyid'),
(163, 'Pulang', 'Tere Liye'),
(164, 'Laut Bercerita', 'Leila S. Chudori'),
(165, 'Edensor', 'Andrea Hirata'),
(166, 'Padang Bulan', 'Andrea Hirata'),
(167, 'Madre', 'Dewi Lestari'),
(168, 'Ronggeng Dukuh Paruk', 'Ahmad Tohari'),
(169, 'Manusia Setengah Salmon', 'Raditya Dika'),
(170, 'Dilan: Dia adalah Dilanku Tahun 1991', 'Pidi Baiq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
