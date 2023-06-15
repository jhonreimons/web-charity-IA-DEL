-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 10:19 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charity_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(10) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(100) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `email`, `no_hp`, `alamat`, `foto`) VALUES
('Admin01', 'Admin', 'admin123', 'admin321', 'admin@gmail.com', '+62876834734', 'Laguboti', 'admin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donations_result`
--

CREATE TABLE `donations_result` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donations_result`
--

INSERT INTO `donations_result` (`id`, `tanggal`, `nama`, `deskripsi`) VALUES
(1, '2021-04-13', 'Beasiswa untuk pembayaran bursar mahasiswa', 'Beasiswa untuk mahasiswa yang telah lulus seleksi dan memenuhi syarat'),
(2, '2021-04-03', 'Pemberian Beasiswa terhadapa mahasiswa berperestasi', 'Mahasiswa yang Juara Perlombaan comptetive proraming'),
(3, '2021-03-15', 'Beasiswa Mahasiswa Kuarang Mampu', 'Pemberian Beasiswa kepada mahasiswa yang kurang mampu secara ekonomi dalam melengkapi kebutuhan perkuliahan.');

-- --------------------------------------------------------

--
-- Table structure for table `donations_upcoming`
--

CREATE TABLE `donations_upcoming` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `tanggal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donations_upcoming`
--

INSERT INTO `donations_upcoming` (`id`, `nama`, `deskripsi`, `tanggal`) VALUES
(1, 'Beasiswa untuk mahasiswa TPL', 'Pemberian beasiswa terhadap mahasiswa yang kurang mampu di daerah toba samosir', '2021-08-13'),
(2, 'Beasiswa Untuk tinggkat akhir', 'Pemberian Beassiwa untuk mahasiswa tingakt akhir yang kurang mampu dalam melakukan penelitina tugas akhir', '2021-06-030'),
(3, 'Beasiswa Untuk Mahasiswa Yatim Piatu', 'Pemberian Beasiswa terhadap mahasisa yang berstatus yatim Piatu', '2021-10-15');

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `id_anggota` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_ijazah` varchar(100) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `angkatan_tahun_ke` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `no_telepon` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`id_anggota`, `nama`, `no_ijazah`, `pekerjaan`, `angkatan_tahun_ke`, `username`, `password`, `foto`, `no_telepon`, `email`, `alamat`, `jenis_kelamin`) VALUES
('A01', 'Jhon Reimon Siagian', 'AFJD-4321-3214132LN', 'Deops Tokopeida', '2020', 'user123', 'user123', '60b857234e32c.png', '+62332423434', 'Jhonreimins@gmial.com', 'Tualang dusun XII', 'Laki-Laki'),
('A04', 'Jery  pangaribuan', 'KNFU943-432', 'UX designer', '', 'ce320032', 'ce320032', '', NULL, NULL, NULL, NULL),
('A05', 'Rianto sinaga', 'ADNDL-FSJKFJFN', 'PNS Kab.Labihan batu', '2018', 'ce320031', 'ce320031', '60b5b32d07532.png', '+6289875398454', 'ce320031@students.del.ac.id', 'Helvetia Medan', 'Laki-Laki'),
('A06', 'Glorian', 'WKFND-88324', 'Sfotware Engineer', '', 'ce320021', 'ce320021', '', NULL, NULL, NULL, NULL),
('A07', 'Johanes', 'KLFDF-4324', 'Progammer SHopiee', '', 'ce320011', 'ce320011', '60b7219d1e30c.jpg', NULL, NULL, NULL, NULL),
('A08', 'HANDIKA', 'JKDF-324923', 'Tester Amazon', '', 'hanika123', 'handika123', '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_anggota` varchar(20) NOT NULL,
  `tanggal` char(15) DEFAULT NULL,
  `jumlah_donasi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_anggota`, `tanggal`, `jumlah_donasi`) VALUES
('A01', '05/26/2021', 1000000),
('A01', '05/26/2021', 1000000),
('A01', '05/26/2021', 1000000),
('A01', '05/26/2021', 1000000),
('A01', '05/19/2021', 1000000),
('A01', '05/13/2021', 1000000),
('A01', '05/27/2021', 1000000),
('A01', '05/27/2021', 1000000),
('A01', '05/18/2021', 1000000),
('A01', '05/26/2021', 1000000),
('A01', '05/20/2021', 1000000),
('A01', '05/18/2021', 1000000),
('A01', '05/06/2021', 1000000),
('A01', '05/19/2021', 1000000),
('A01', '05/18/2021', 1000000),
('A01', '05/04/2021', 1000000),
('A01', '05/03/2021', 1000000),
('A01', '05/10/2021', 1000000),
('A01', '05/11/2021', 1000000),
('A01', '05/26/2021', 1000000),
('A01', '05/11/2021', 1000000),
('A01', '05/03/2021', 1000000),
('A05', '06/24/2021', 1000000),
('A05', '06/01/2021', 1000000),
('A05', '06/24/2021', 500000),
('A04', '06/25/2021', 500000),
('A01', '06/17/2021', 1000000),
('A01', '06/01/2021', 1000000),
('A01', '06/15/2021', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `penerima_beasiswa`
--

CREATE TABLE `penerima_beasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penerima_beasiswa`
--

INSERT INTO `penerima_beasiswa` (`id`, `nama`, `nim`, `prodi`) VALUES
(1, 'Jhones Pangaribuan', '13320020', 'D3 Teknologi Kommputer'),
(1, 'Hendrik Kusuma', '122S20001', 'S1 Informatika'),
(1, 'Sartika Hutahaian', '12300021', 'D3 Teknologi Informasi'),
(1, 'Rian Tantowi Nababan', '12300011', 'S1 Teknik Bioproses'),
(1, 'Sintia Sinaga1', '133200051', 'D4 Teknik Rekayasa Perangkat Lunak'),
(2, 'Luna Pangaribuan', '12S200021', 'S1 Informatika'),
(2, 'Andrian Anjasmara', '13320041', 'D3 Teknologi Komputer'),
(2, 'Anggita Hasibuan', '132300021', 'D4 Management Rekayasa'),
(2, 'Arya Sandika13', '12312001', 'D4 Management Rekayasa'),
(2, 'Jesika Manurung', '13320021', 'D3 Teknologi Komputer'),
(3, 'Jerry hasanado', '1230021', 'D3 Teknologi Informasi'),
(3, 'Sinta Bela Singa', '13320021', 'S1 Teknik Bioproses'),
(3, 'Lukan Rindu sinaga', '12321041', 'S1 Teknik Elektro'),
(3, 'Jhon Reimon Siagain', '13320041', 'D3 Teknologi Komputer'),
(3, 'Antonel Basa Manurng', '13320039', 'D3 Teknologi Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jabatan` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(100) DEFAULT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id`, `nama`, `jabatan`, `email`, `no_hp`, `foto`) VALUES
(1, 'Ronaldo', 'ketua', 'Ronaldo@gmail.com', '+62886484568', 'ketua.jpg'),
(2, 'Jordan Silaban', 'Wakil Ketua', 'jordan@gmail.com', '+6289584344', 'wakil.jpg'),
(3, 'Santi', 'skretaris', 'santi@gmail.com', '+6289584568', 'sekretaris.jpg'),
(4, 'Yanti', 'Bendahara', 'yanti@gmail.com', '+6289584568', 'bendahara.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donations_result`
--
ALTER TABLE `donations_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations_upcoming`
--
ALTER TABLE `donations_upcoming`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `penerima_beasiswa`
--
ALTER TABLE `penerima_beasiswa`
  ADD KEY `id` (`id`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donations_result`
--
ALTER TABLE `donations_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donations_upcoming`
--
ALTER TABLE `donations_upcoming`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `donatur` (`id_anggota`);

--
-- Constraints for table `penerima_beasiswa`
--
ALTER TABLE `penerima_beasiswa`
  ADD CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `donations_result` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
