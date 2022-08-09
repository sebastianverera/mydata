-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 09, 2022 at 08:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_youtube`
--

CREATE TABLE `tb_youtube` (
  `id` int(11) NOT NULL,
  `post` text NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `link` text NOT NULL,
  `akun` varchar(255) NOT NULL,
  `followers` text NOT NULL,
  `comment` text NOT NULL,
  `like` text NOT NULL,
  `share` text NOT NULL,
  `view` text NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_youtube`
--

INSERT INTO `tb_youtube` (`id`, `post`, `jenis`, `keyword`, `tanggal`, `link`, `akun`, `followers`, `comment`, `like`, `share`, `view`, `kabupaten`, `provinsi`) VALUES
(1, 'Korlantas Polri Mulai Sosialisasi Aturan Sanksi Pajak Mati 2 Tahun STNK Diblokir!.  KOMPAS.TV - Korps Lalu Lintas Polri, mulai menyosialisasikan aturan sanksi penghapusan data kendaraan bagi pemilik yang tidak membayar pajak kendaraan selama 2 tahun.\r\n\r\nDen', 'Video', 'ETLE', '2022-08-09 04:38:19', 'https://www.youtube.com/watch?v=hRCcl6wZ4E4', 'KOMPASTV', '1200400', '30', '20', '0', '2656', 'DKI Jakarta', 'DKI Jakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_youtube`
--
ALTER TABLE `tb_youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_youtube`
--
ALTER TABLE `tb_youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
