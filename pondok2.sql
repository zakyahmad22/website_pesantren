-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 03:01 AM
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
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Zaky', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Ahmad', '07811dc6c422334ce36a09ff5cd6fe71');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` text DEFAULT NULL,
  `Email` varchar(100) NOT NULL,
  `Telepon` varchar(20) DEFAULT NULL,
  `Tanggal_lahir` date DEFAULT NULL,
  `Jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `Mata_pelajaran` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`Id`, `Nama`, `Alamat`, `Email`, `Telepon`, `Tanggal_lahir`, `Jenis_kelamin`, `Mata_pelajaran`, `created_at`, `updated_at`) VALUES
(1, 'Furqon', 'Jakarta', 'furqon@gmail.com', '082121989812', '1999-05-21', 'Laki-laki', 'Bahasa Arab', '2024-12-06 03:14:04', '2024-12-06 07:35:03'),
(6, 'Andika', 'Babakan', 'andika@gmail.com', '081818181818', '2002-12-04', 'Laki-laki', 'Bahasa Inggris', '2024-12-06 05:59:58', '2024-12-06 05:59:58'),
(7, 'Naufal Muzaki', 'keboledan', 'naufal@gmail.com', '082323232323', '2002-08-22', 'Laki-laki', 'Fiqih', '2024-12-06 06:34:22', '2024-12-06 06:34:22'),
(8, 'Zaky Mubarok', 'Brebes', 'zaky@gmail.com', '080808080808', '2002-10-02', 'Laki-laki', 'Muthalaah', '2024-12-06 06:41:18', '2024-12-06 08:03:55'),
(13, 'Hidayat', 'Bandung', 'hidayat@gmail.com', '081234567890', '0000-00-00', 'Laki-laki', 'Akidah Akhlak', '2024-12-06 07:04:35', '2024-12-06 07:04:35'),
(14, 'Zami', 'Wijhan', 'zami@gmail.com', '082424242424', '2003-05-02', 'Laki-laki', 'Ushul Fiqh', '2024-12-06 07:31:20', '2024-12-06 07:31:20'),
(15, 'Doni wkwkw', 'Semarang', 'doni@gmail.com', '083434343434', '2000-03-23', 'Laki-laki', 'Matematika', '2024-12-06 08:40:24', '2024-12-06 09:30:29'),
(16, 'Farhan', 'Brebes', 'farhan@gmail.com', '089000002121', '2003-01-20', 'Laki-laki', 'Ilmu Pengetahuan Sosial', '2024-12-06 09:02:36', '2024-12-06 09:02:36'),
(17, 'Irfan', 'CIrebon', 'irfan@gmail.com', '083211233212', '2003-11-25', 'Laki-laki', 'Balagho', '2024-12-06 09:22:43', '2024-12-06 09:22:43'),
(18, 'Haqi', 'Bulakamba', 'haqi@gmail.com', '082132435476', '2003-09-12', 'Laki-laki', 'Pendidikan Kewarganegaraan', '2024-12-06 09:24:59', '2024-12-06 09:24:59'),
(19, 'Saya', 'Semarang', 'saya@gmail.com', '085656565656', '2002-03-21', 'Laki-laki', 'Sejarah Islam', '2024-12-06 16:59:11', '2024-12-06 16:59:11');

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
(202400, 'Siapa', 'Semarang', 'siapa@gmail.com'),
(202421, 'Dono 1', 'Kebumen', 'dono@gmail.com'),
(2024001, 'Zaky Mubarok', 'Brebes', 'zaky@gmail.com'),
(2024002, 'Asep Surasep', 'Bogor', 'asep@gmail.com'),
(2024003, 'Slamet Riyadi', 'Wanasari', 'slamet@gmail.com'),
(2024007, 'Mawardi', 'Cirebon', 'mawar@gmail.com'),
(2024008, 'Amy Akyy', 'Solo', 'amy@gmail.com'),
(2024009, 'Dadang Sumargo', 'Keboledan', 'dadang@gmail.com'),
(2024010, 'Reza Arap Oktaviani', 'Jaktim', 'reza@gmail.com'),
(2024012, 'Joko Dodo', 'Solo', 'joko@gmail.com'),
(2024020, 'Makmur Sleketep', 'Cibodas', 'makmur@gmail.com'),
(2024021, 'Bambang', 'Cimahi', 'bambang@gmail.com'),
(2024022, 'Wulan', 'Cirebon', 'wulan@gmail.com'),
(2024023, 'Yono Bakri', 'Bandung', 'yono@gmail.com'),
(2024024, 'Jaelani', 'Malang', 'jaelani@gmail.com'),
(2024025, 'Miftah', 'Semarang', 'miftah@gmail.com'),
(2024026, 'Wulandari', 'Lembang', 'wulandari@gmail.com'),
(2024027, 'Jajang Nurjaman', 'Bandung', 'jajang@gmail.com'),
(2024030, 'Febriyanti', 'Cileunyi', 'febri@gmail.com'),
(2024033, 'Rahmat', 'Aceh', 'rahmat@gmail.com'),
(2024035, 'Naufal Muzaki', 'Wanasari', 'naufal@gmail.com'),
(2024045, 'Kartika', 'Jatimakmur', 'kartika@gmail.com'),
(2024050, 'Sule Prikitiwww', 'Cirebon', 'sule@gmail.com'),
(2024060, 'Ujang', 'Lembang', 'ujang@gmail.com'),
(2024070, 'Aji Putra', 'Bekasi', 'aji@gmail.com'),
(2024080, 'Ajis Saputra', 'Wanasari', 'ajis@gmail.com'),
(20240027, 'Syahrukhan', 'Depok', 'syahru@gmail.com'),
(20240028, 'Dodi', 'Depok', 'dodi@gmail.com'),
(20240029, 'Salsabila', 'Garut', 'salsa@gmail.com'),
(20240030, 'Apa', 'Jakarta', 'apa@gmail.com'),
(20240031, 'Saeful', 'Garut', 'saeful@gmail.com'),
(20240034, 'Akmal', 'Aceh', 'akmal@gmail.com'),
(20240035, 'Adi', 'Setradago', 'adi@gmail.com'),
(20240036, 'Hidayat', 'Curug Dago', 'hidayat@gmail.com'),
(20240037, 'Syahrini', 'Siandong', 'syahrini@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
