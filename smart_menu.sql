-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2021 at 05:20 AM
-- Server version: 8.0.25-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `Meja`
--

CREATE TABLE `Meja` (
  `id` int NOT NULL,
  `no_meja` int NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Meja`
--

INSERT INTO `Meja` (`id`, `no_meja`, `username`) VALUES
(1, 1, 'Asyraf'),
(2, 2, 'Meja 2'),
(3, 3, 'Meja 3'),
(4, 4, 'Meja 4'),
(5, 5, 'Meja 5'),
(6, 6, 'yeah');

-- --------------------------------------------------------

--
-- Table structure for table `Menu`
--

CREATE TABLE `Menu` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `harga` int NOT NULL,
  `stok` int NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Menu`
--

INSERT INTO `Menu` (`id`, `nama`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Ayam Geprek', 'AYAM PEDESS', 'Makanan', 20000, 8, 'geprek.jpg'),
(2, 'Es Buah', 'Es buah dengan soda sprite', 'Minuman', 12000, 1, 'cola.jpg'),
(5, 'Es Kopyor', 'Kelapa, Sirup, dan Es segarrr', 'Minuman', 18000, 6, '1619969139_2e3bdb81a87543498ef1.jpg'),
(11, 'Paket Nasi Goreng', 'Nasi Goreng + Telur + Es Teh', 'Makanan', 15000, 4, '1619973948_1c9ab573925507606dfd.png'),
(14, 'Nasi', 'Nasi 1 porsi', 'makanan', 5000, 15, '1621654016_c1400de65ec25faf10ef.jpeg'),
(17, 'Kentang Goreng', '-', 'Snack', 7000, 25, 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `Pesanan`
--

CREATE TABLE `Pesanan` (
  `id` int NOT NULL,
  `id_meja` int NOT NULL,
  `id_menu` int NOT NULL,
  `quantity` int NOT NULL,
  `harga` int NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Pesanan`
--

INSERT INTO `Pesanan` (`id`, `id_meja`, `id_menu`, `quantity`, `harga`, `status`) VALUES
(37, 6, 5, 4, 72000, 'wait'),
(38, 6, 11, 1, 15000, 'wait'),
(39, 6, 14, 1, 5000, 'wait'),
(40, 1, 1, 2, 40000, 'wait'),
(41, 1, 2, 1, 12000, 'wait');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Meja`
--
ALTER TABLE `Meja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Menu`
--
ALTER TABLE `Menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Pesanan`
--
ALTER TABLE `Pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_meja` (`id_meja`,`id_menu`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Meja`
--
ALTER TABLE `Meja`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Menu`
--
ALTER TABLE `Menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `Pesanan`
--
ALTER TABLE `Pesanan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
