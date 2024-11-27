-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2024 at 06:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pondok`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Nama`, `Password`) VALUES
(1, 'Zaky', '12345'),
(2, 'Naufal', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `Id` int(30) NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Alamat` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`Id`, `Nama`, `Alamat`, `Email`) VALUES
(2024001, 'Zaky', 'Brebes', 'zaky@gmail.com'),
(2024002, 'Asep', 'Bogor', 'asep@gmail.com'),
(2024003, 'Slamet', 'Wanasari', 'slamet@gmail.com'),
(2024004, 'Abdul', 'Cirebon', 'abdul@gmail.com'),
(2024007, 'Mawardi', 'Cirebon', 'mawar@gmail.com'),
(2024008, 'Amy', 'Solo', 'amy@gmail.com'),
(2024009, 'Dadang B', 'Keboledan', 'dadang@gmail.com'),
(2024010, 'Reza Arap Rahardian', 'Babakan', 'reza@gmail.com'),
(2024012, 'Joko Dodo', 'Solo', 'joko@gmail.com'),
(2024020, 'Makmur', 'Cibodas', 'makmur@gmail.com'),
(2024030, 'Febriyanti', 'Cileunyi', 'febri@gmail.com'),
(2024035, 'Naufal', 'Wanasari', 'naufal@gmail.com'),
(2024045, 'Kartika', 'Jatimakmur', 'kartika@gmail.com'),
(2024050, 'Sule', 'Cirebon', 'sule@gmail.com'),
(2024060, 'Ujang', 'Lembang', 'ujang@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
