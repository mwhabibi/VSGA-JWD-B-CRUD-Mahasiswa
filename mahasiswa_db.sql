-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2024 pada 17.39
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_mahasiswa`
--

CREATE TABLE `ms_mahasiswa` (
  `idMahasiswa` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `namaMahasiswa` varchar(60) NOT NULL,
  `jenisKelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Budha','Konghucu','Hindu') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `prodi` enum('Teknik Pembentukan Logam','Administrasi Bisnis','Teknologi Informasi','Teknik Listrik','Teknik Komputer Kontrol','Akuntansi','Bahasa Inggris','Akuntansi Sektor Publik','Akuntansi Perpajakan','Teknologi Rekayasa Otomotif','Teknologi Rekayasa Perangkat Lunak','Teknologi Rekayasa Elektronika','Pemasaran Digital','Perkeretaapian') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ms_mahasiswa`
--

INSERT INTO `ms_mahasiswa` (`idMahasiswa`, `nim`, `namaMahasiswa`, `jenisKelamin`, `agama`, `alamat`, `prodi`) VALUES
(11, 233307083, 'mwhabibi', 'Laki-laki', 'Islam', 'ponorogo', 'Pemasaran Digital'),
(12, 233307088, 'sukri', 'Laki-laki', 'Konghucu', 'madiun', 'Akuntansi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ms_mahasiswa`
--
ALTER TABLE `ms_mahasiswa`
  ADD PRIMARY KEY (`idMahasiswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ms_mahasiswa`
--
ALTER TABLE `ms_mahasiswa`
  MODIFY `idMahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
