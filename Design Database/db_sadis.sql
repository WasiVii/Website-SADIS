-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 10:05 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sadis`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `idBerita` int(11) NOT NULL,
  `Judul` varchar(45) NOT NULL,
  `Isi_Berita` varchar(45) NOT NULL,
  `Tanggal_Publikasi` date NOT NULL,
  `Staff_idStaff` int(11) NOT NULL,
  `Staff_Users_idUsers` int(11) NOT NULL,
  `Staff_Users_Role_idRole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `idEkstrakulikuler` int(11) NOT NULL,
  `Nama_Ekstrakulikuler` varchar(45) NOT NULL,
  `Deskripsi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `idGuru` int(11) NOT NULL,
  `Nama_Guru` varchar(45) NOT NULL,
  `Mata_Pelajaran_Yang_Diajar` varchar(45) NOT NULL,
  `Jenis_Kelamin` varchar(45) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Nomor_Telepon` int(11) NOT NULL,
  `Image` varchar(45) NOT NULL,
  `Users_idUsers` int(11) NOT NULL,
  `Kelas_idKelas` int(11) NOT NULL,
  `Mata Pelajaran_idMata Pelajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `idKelas` int(11) NOT NULL,
  `Nama_Kelas` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mata pelajaran`
--

CREATE TABLE `mata pelajaran` (
  `idMata Pelajaran` int(11) NOT NULL,
  `Nama_Mata_Pelajaran` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `idNilai` int(11) NOT NULL,
  `Nilai` varchar(45) DEFAULT NULL,
  `Mata Pelajaran_idMata Pelajaran` int(11) NOT NULL,
  `Siswa_idSiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `idRole` int(11) NOT NULL,
  `Nama_Peran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sarana`
--

CREATE TABLE `sarana` (
  `idSarana` int(11) NOT NULL,
  `Nama_Sarana` varchar(45) NOT NULL,
  `Saranacol` varchar(45) NOT NULL,
  `Ketersediaan` varchar(45) NOT NULL,
  `Lokasi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `idSiswa` int(11) NOT NULL,
  `Nama_Siswa` varchar(45) NOT NULL,
  `Tanggal_Lahir` varchar(45) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Jenis_Kelamin` varchar(45) NOT NULL,
  `Nomor_Telepon` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Tahun_Lulus` varchar(45) NOT NULL,
  `Users_idUsers` int(11) NOT NULL,
  `Kelas_idKelas` int(11) NOT NULL,
  `Ekstrakulikuler_idEkstrakulikuler` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `idStaff` int(11) NOT NULL,
  `NIP` varchar(45) NOT NULL,
  `Divisi` varchar(45) NOT NULL,
  `Users_idUsers` int(11) NOT NULL,
  `Users_Role_idRole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `Nama_Pengguna` varchar(45) NOT NULL,
  `Kata_Sandi` varchar(45) NOT NULL,
  `Terakhir_Login` varchar(45) NOT NULL,
  `Role_idRole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idBerita`,`Staff_idStaff`,`Staff_Users_idUsers`,`Staff_Users_Role_idRole`),
  ADD KEY `fk_Berita_Staff1_idx` (`Staff_idStaff`,`Staff_Users_idUsers`,`Staff_Users_Role_idRole`);

--
-- Indexes for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`idEkstrakulikuler`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`idGuru`),
  ADD KEY `fk_Guru_Users1_idx` (`Users_idUsers`),
  ADD KEY `fk_Guru_Kelas1_idx` (`Kelas_idKelas`),
  ADD KEY `fk_Guru_Mata Pelajaran1_idx` (`Mata Pelajaran_idMata Pelajaran`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idKelas`);

--
-- Indexes for table `mata pelajaran`
--
ALTER TABLE `mata pelajaran`
  ADD PRIMARY KEY (`idMata Pelajaran`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`idNilai`),
  ADD KEY `fk_Nilai_Mata Pelajaran1_idx` (`Mata Pelajaran_idMata Pelajaran`),
  ADD KEY `fk_Nilai_Siswa1_idx` (`Siswa_idSiswa`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`);

--
-- Indexes for table `sarana`
--
ALTER TABLE `sarana`
  ADD PRIMARY KEY (`idSarana`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`idSiswa`),
  ADD KEY `fk_Siswa_Users1_idx` (`Users_idUsers`),
  ADD KEY `fk_Siswa_Kelas1_idx` (`Kelas_idKelas`),
  ADD KEY `fk_Siswa_Ekstrakulikuler1_idx` (`Ekstrakulikuler_idEkstrakulikuler`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`idStaff`,`Users_idUsers`,`Users_Role_idRole`),
  ADD KEY `fk_Staff_Users1_idx` (`Users_idUsers`,`Users_Role_idRole`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`,`Role_idRole`),
  ADD KEY `fk_Users_Role_idx` (`Role_idRole`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `fk_Berita_Staff1` FOREIGN KEY (`Staff_idStaff`,`Staff_Users_idUsers`,`Staff_Users_Role_idRole`) REFERENCES `staff` (`idStaff`, `Users_idUsers`, `Users_Role_idRole`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `fk_Guru_Kelas1` FOREIGN KEY (`Kelas_idKelas`) REFERENCES `kelas` (`idKelas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Guru_Mata Pelajaran1` FOREIGN KEY (`Mata Pelajaran_idMata Pelajaran`) REFERENCES `mata pelajaran` (`idMata Pelajaran`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Guru_Users1` FOREIGN KEY (`Users_idUsers`) REFERENCES `users` (`idUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `fk_Nilai_Mata Pelajaran1` FOREIGN KEY (`Mata Pelajaran_idMata Pelajaran`) REFERENCES `mata pelajaran` (`idMata Pelajaran`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Nilai_Siswa1` FOREIGN KEY (`Siswa_idSiswa`) REFERENCES `siswa` (`idSiswa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_Siswa_Ekstrakulikuler1` FOREIGN KEY (`Ekstrakulikuler_idEkstrakulikuler`) REFERENCES `ekstrakulikuler` (`idEkstrakulikuler`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Siswa_Kelas1` FOREIGN KEY (`Kelas_idKelas`) REFERENCES `kelas` (`idKelas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Siswa_Users1` FOREIGN KEY (`Users_idUsers`) REFERENCES `users` (`idUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `fk_Staff_Users1` FOREIGN KEY (`Users_idUsers`,`Users_Role_idRole`) REFERENCES `users` (`idUsers`, `Role_idRole`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_Users_Role` FOREIGN KEY (`Role_idRole`) REFERENCES `role` (`idRole`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
