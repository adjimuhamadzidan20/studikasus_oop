-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2026 at 05:39 PM
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
-- Database: `my_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama_admin`, `username`, `password`) VALUES
(1, 'Admin123', 'admin123', '$2y$10$TdOy6uwbu1H4CPlhHkHbDO/3EKZLPoHF3pMEKJy3tStIZ8VVGnYsu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama`, `kelas`, `jurusan`, `alamat`) VALUES
(1, 'Abdul', '10', 'Teknik Informatika', 'Kota Bekasi'),
(3, 'Putri Anisah', '10', 'Teknik Informatika', 'Jakarta Selatan'),
(9, 'Rian Andi', '10', 'Rekayasa Perangkat Lunak', 'Jakarta Barat'),
(11, 'Nurul ', '10', 'Rekayasa Perangkat Lunak', 'Jakarta Timur'),
(14, 'Salsabila Mandasari', '12', 'Rekayasa Perangkat Lunak', 'Parepare'),
(15, 'Balamantri Wadi Gunawan', '12', 'Rekayasa Perangkat Lunak', 'Pekanbaru'),
(16, 'Zaenab Hartati', '10', 'Rekayasa Perangkat Lunak', 'Palangka Raya'),
(17, 'Mutia Rahmawati', '11', 'Rekayasa Perangkat Lunak', 'Subulussalam'),
(18, 'Unjani Lestari', '11', 'Rekayasa Perangkat Lunak', 'Jakarta Selatan'),
(19, 'Cindy Kani Palastri', '12', 'Rekayasa Perangkat Lunak', 'Pekalongan'),
(20, 'Siti Nasyidah', '12', 'Rekayasa Perangkat Lunak', 'Palopo'),
(21, 'Radit Tamba S.Sos', '11', 'Rekayasa Perangkat Lunak', 'Solok'),
(22, 'Kezia Aisyah Haryanti S.Ked', '10', 'Rekayasa Perangkat Lunak', 'Probolinggo'),
(23, 'Uda Galang Nugroho', '12', 'Rekayasa Perangkat Lunak', 'Mojokerto'),
(24, 'Lalita Suartini', '10', 'Rekayasa Perangkat Lunak', 'Administrasi Jakarta Pusat'),
(25, 'Anastasia Hesti Mayasari S.T.', '12', 'Rekayasa Perangkat Lunak', 'Pontianak'),
(26, 'Bakijan Hutasoit', '10', 'Rekayasa Perangkat Lunak', 'Administrasi Jakarta Utara'),
(27, 'Martana Wacana', '12', 'Rekayasa Perangkat Lunak', 'Binjai'),
(28, 'Kamila Winda Melani', '11', 'Rekayasa Perangkat Lunak', 'Lhokseumawe'),
(29, 'Eka Maryati S.Pt', '10', 'Rekayasa Perangkat Lunak', 'Kotamobagu'),
(31, 'Jaga Lazuardi', '10', 'Rekayasa Perangkat Lunak', 'Surakarta'),
(32, 'Karimah Hariyah', '10', 'Rekayasa Perangkat Lunak', 'Gorontalo'),
(33, 'Cengkal Latupono', '11', 'Rekayasa Perangkat Lunak', 'Probolinggo'),
(34, 'Harjaya Irawan', '10', 'Rekayasa Perangkat Lunak', 'Padangsidempuan'),
(35, 'Radit Prabawa Waskita', '12', 'Rekayasa Perangkat Lunak', 'Bandar Lampung'),
(36, 'Ellis Haryanti', '12', 'Rekayasa Perangkat Lunak', 'Tidore Kepulauan'),
(37, 'Gabriella Mala Pratiwi', '11', 'Rekayasa Perangkat Lunak', 'Palangka Raya'),
(38, 'Usman Hidayanto', '11', 'Rekayasa Perangkat Lunak', 'Singkawang'),
(39, 'Malika Lailasari', '10', 'Rekayasa Perangkat Lunak', 'Sukabumi'),
(40, 'Salsabila Ciaobella Rahimah', '12', 'Rekayasa Perangkat Lunak', 'Solok'),
(41, 'Rudi Habibi S.Gz', '11', 'Rekayasa Perangkat Lunak', 'Medan'),
(42, 'Rini Sudiati', '10', 'Rekayasa Perangkat Lunak', 'Padangsidempuan'),
(43, 'Himawan Gaiman Nainggolan', '12', 'Rekayasa Perangkat Lunak', 'Palembang'),
(44, 'Ophelia Zulfa Palastri', '11', 'Rekayasa Perangkat Lunak', 'Magelang'),
(45, 'Ani Wahyuni S.T.', '11', 'Rekayasa Perangkat Lunak', 'Mojokerto'),
(46, 'Cinta Widiastuti S.H.', '12', 'Rekayasa Perangkat Lunak', 'Cilegon'),
(47, 'Jaya Cahyanto Kuswoyo S.Psi', '10', 'Rekayasa Perangkat Lunak', 'Malang'),
(48, 'Darmana Cager Wahyudin', '11', 'Rekayasa Perangkat Lunak', 'Depok'),
(49, 'Ida Nasyidah', '12', 'Rekayasa Perangkat Lunak', 'Kendari'),
(50, 'Julia Uyainah', '10', 'Rekayasa Perangkat Lunak', 'Tanjung Pinang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
