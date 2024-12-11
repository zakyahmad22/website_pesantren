-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 05:28 PM
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
  `password` varchar(100) NOT NULL,
  `roles` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `roles`) VALUES
(1, 'Zaky', '827ccb0eea8a706c4c34a16891f84e7b', 'Santri'),
(2, 'Ahmad', '07811dc6c422334ce36a09ff5cd6fe71', 'admin'),
(3, 'Ichsan', '827ccb0eea8a706c4c34a16891f84e7b', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `id` int(11) NOT NULL,
  `nama_ekstrakulikuler` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `jadwal_hari` varchar(50) DEFAULT NULL,
  `jadwal_waktu` time DEFAULT NULL,
  `pembimbing` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ekstrakulikuler`
--

INSERT INTO `ekstrakulikuler` (`id`, `nama_ekstrakulikuler`, `deskripsi`, `jadwal_hari`, `jadwal_waktu`, `pembimbing`, `created_at`, `updated_at`) VALUES
(3, 'Taekwondo', 'Seni bela diri asal Korea yang menggabungkan teknik menendang, memukul, dan menghindar dengan fokus pada kecepatan, ketangkasan, serta kekuatan.', 'Senin', '15:00:00', 'Pak Andi', '2024-12-09 23:25:15', '2024-12-11 05:19:15'),
(4, 'Hadroh', 'Hadroh adalah seni musik Islami yang menggunakan alat tabuh sebagai instrumen utama, biasanya berupa rebana, untuk mengiringi lantunan shalawat, pujian, atau doa kepada Nabi Muhammad SAW.', 'Sabtu', '10:00:00', 'Alfardi', '2024-12-09 23:25:15', '2024-12-11 05:21:09'),
(5, 'Pramuka', 'Pramuka (singkatan dari Praja Muda Karana) adalah gerakan kepanduan untuk generasi muda yang bertujuan membentuk kepribadian, keterampilan, dan tanggung jawab melalui pendidikan nonformal.', 'Rabu', '14:00:00', 'Riswandi Bahuwa, S.H', '2024-12-09 23:59:07', '2024-12-10 14:18:56'),
(6, 'Pidato', 'Pidato yaitu untuk melatih supaya bisa berbicara didepan orang banyak.', 'Kamis', '13:00:00', 'Hasyim', '2024-12-10 01:15:52', '2024-12-11 08:46:45'),
(7, 'Kursus Bahasa', 'Kursus bahasa yaitu seluruh santri wajib mengikutinya karena dapat menambah kosa kata bahasa inggris dan bahasa arab.', 'Senin', '16:00:00', 'Fitri Nurhelawati', '2024-12-10 14:17:16', '2024-12-10 14:50:38');

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
(1, 'Furqon Mq', 'Jakarta', 'furqon@gmail.com', '082121989812', '1999-05-21', 'Laki-laki', 'Bahasa Arab', '2024-12-06 03:14:04', '2024-12-11 16:16:57'),
(6, 'Andika 12', 'Babakan', 'andika@gmail.com', '081818181818', '2002-12-04', 'Laki-laki', 'Bahasa Inggris', '2024-12-06 05:59:58', '2024-12-09 16:08:54'),
(7, 'Naufal Muzaki', 'keboledan', 'naufal@gmail.com', '082323232323', '2002-08-22', 'Laki-laki', 'Fiqih', '2024-12-06 06:34:22', '2024-12-06 06:34:22'),
(8, 'Zaky Mubarok', 'Brebes', 'zaky@gmail.com', '080808080808', '2002-10-02', 'Laki-laki', 'Muthalaah', '2024-12-06 06:41:18', '2024-12-06 08:03:55'),
(13, 'Hidayat', 'Bandung', 'hidayat@gmail.com', '081234567890', '0000-00-00', 'Laki-laki', 'Akidah Akhlak', '2024-12-06 07:04:35', '2024-12-06 07:04:35'),
(14, 'Zami Amyy', 'Wijhan', 'zami@gmail.com', '082424242424', '2003-05-02', 'Laki-laki', 'Ushul Fiqh', '2024-12-06 07:31:20', '2024-12-10 15:05:57'),
(15, 'Doni wkwkw', 'Semarang', 'doni@gmail.com', '083434343434', '2000-03-23', 'Laki-laki', 'Matematika', '2024-12-06 08:40:24', '2024-12-06 09:30:29'),
(16, 'Farhan', 'Brebes', 'farhan@gmail.com', '089000002121', '2003-01-20', 'Laki-laki', 'Ilmu Pengetahuan Sosial', '2024-12-06 09:02:36', '2024-12-06 09:02:36'),
(17, 'Irfan', 'CIrebon', 'irfan@gmail.com', '083211233212', '2003-11-25', 'Laki-laki', 'Balagho', '2024-12-06 09:22:43', '2024-12-06 09:22:43'),
(18, 'Haqi', 'Bulakamba', 'haqi@gmail.com', '082132435476', '2003-09-12', 'Laki-laki', 'Pendidikan Kewarganegaraan', '2024-12-06 09:24:59', '2024-12-06 09:24:59'),
(19, 'Saya', 'Semarang', 'saya@gmail.com', '085656565656', '2002-03-21', 'Laki-laki', 'Sejarah Islam', '2024-12-06 16:59:11', '2024-12-06 16:59:11'),
(20, 'Dadang', 'Palembang', 'dadang@gmail.com', '081111111112', '2000-05-23', 'Laki-laki', 'Bahasa Indonesia', '2024-12-08 06:32:23', '2024-12-08 06:32:23'),
(22, 'Hidayat mzaky', 'Semarang', 'hida@gmail.com', '09999676767', '2000-06-12', 'Laki-laki', 'Fiqih 1', '2024-12-11 06:04:01', '2024-12-11 06:04:01');

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE `pelajaran` (
  `id` int(11) NOT NULL,
  `nama_pelajaran` varchar(100) NOT NULL,
  `kelas` int(11) NOT NULL,
  `kode_pelajaran` varchar(10) NOT NULL,
  `jam_pelajaran` int(11) NOT NULL,
  `tingkat_pendidikan` varchar(50) NOT NULL,
  `guru_pengajar` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`id`, `nama_pelajaran`, `kelas`, `kode_pelajaran`, `jam_pelajaran`, `tingkat_pendidikan`, `guru_pengajar`, `created_at`, `updated_at`) VALUES
(1, 'Matematika', 1, 'MAT101', 4, 'SMP', 'Budi Setiawan', '2024-12-09 07:36:45', '2024-12-09 17:04:00'),
(2, 'Tafsir', 5, 'TAF102', 1, 'MA', 'Nurcahya', '2024-12-09 07:36:45', '2024-12-11 08:50:53'),
(3, 'Mahfudzhat', 2, 'MAH103', 3, 'SMP', 'Widhiyanti', '2024-12-09 07:36:45', '2024-12-11 05:58:35'),
(8, 'Sorof', 2, 'SRF104', 1, 'SMP', 'Taufiq Hidayat', '2024-12-09 10:56:01', '2024-12-11 08:51:01'),
(9, 'Muthalaah', 3, 'MTH105', 5, 'SMP', 'Fahd Abdurahman', '2024-12-11 05:53:50', '2024-12-11 05:59:04'),
(16, 'Tajwid', 1, 'TJW107', 3, 'SMP', 'Khodijah', '2024-12-11 05:57:33', '2024-12-11 05:59:29'),
(17, 'Fiqih', 5, 'FQH108', 6, 'MA', 'Zaky Mubarok', '2024-12-11 06:00:11', '2024-12-11 06:00:11');

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
(12, 'Wa nawul', 'Wanasari', 'nawul@gmail.com'),
(45, 'Amad', 'Cilacap', 'amad@gmail.com'),
(202, 'Dika', 'Jakarta', 'dika@gmail.com'),
(1222, 'Gibran Raka', 'Solo', 'gibran@gmail.com'),
(2025, 'Ahmad', 'Brebes', 'ahmad@gmail.com'),
(3233, 'Mulyono', 'Semarang', 'mulyono@gmail.com'),
(20231, 'Gunawan', 'Solo', 'gunawan@gmail.com'),
(20245, 'Budi', 'Depok', 'budi@gmail.com'),
(23232, 'Rahmat', 'Depok', 'rahmat@gmail.com'),
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
-- Indexes for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_pelajaran` (`kode_pelajaran`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
