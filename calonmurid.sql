-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2024 pada 04.07
-- Versi server: 10.4.28-MariaDB-log
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calonmurid`
--
CREATE DATABASE IF NOT EXISTS `calonmurid` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `calonmurid`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `calonsiswa`
--

CREATE TABLE IF NOT EXISTS `calonsiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `nilai` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `calonsiswa`
--

INSERT INTO `calonsiswa` (`id`, `nama`, `nilai`) VALUES
(1, 'Muhammad Sumbul', 85.50),
(2, 'Elkann Baggot', 92.75),
(3, 'Khalid Kashmiri', 78.00),
(4, 'Bukayo Saka', 88.25),
(5, 'Alfado Daffa', 82.00),
(6, 'Michael Jackson', 91.50),
(7, 'Fadhul Mubin', 79.25),
(8, 'Ananda Kusuma', 85.75),
(9, 'Olivia Putri', 88.00),
(10, 'Septian Aldiansyah', 76.50),
(11, 'Aditya Fattur', 90.25),
(12, 'Bagus Satrio', 83.75),
(13, 'Kartika Nurul', 87.00),
(14, 'Jude Bellingham', 81.50),
(15, 'Harry Maguire', 89.75),
(16, 'Nabila Putri', 84.25),
(17, 'Rafi Rayhan', 77.00),
(18, 'Joseph Joestar', 92.00),
(19, 'Mia Moore', 86.50),
(20, 'Salsabila', 80.75),
(21, 'Dio Brando', 93.25),
(22, 'Andrew King', 78.50),
(23, 'Ella Scott', 95.00);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
