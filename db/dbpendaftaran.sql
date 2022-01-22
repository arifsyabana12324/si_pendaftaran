-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2022 pada 10.18
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_agama`
--

CREATE TABLE `tb_agama` (
  `id_agama` int(11) NOT NULL,
  `agama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_agama`
--

INSERT INTO `tb_agama` (`id_agama`, `agama`) VALUES
(1, 'ISLAM'),
(2, 'KRISTEN PROTESTAN'),
(3, 'KRISTEN KATHOLIK'),
(4, 'HINDU'),
(5, 'BUDHA'),
(6, 'KONGHUCU');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftar`
--

CREATE TABLE `tb_daftar` (
  `no_daftar` int(11) NOT NULL,
  `nama_maba` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `nim_sekolah` varchar(20) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_daftar`
--

INSERT INTO `tb_daftar` (`no_daftar`, `nama_maba`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `asal_sekolah`, `nim_sekolah`, `jurusan`, `agama`, `no_hp`, `email`) VALUES
(1, 'RUDI ADHA', 'LAKI-LAKI', 'KISARAN', '', 'LK II, SIUMBUT BARU', 'SMA NEGERI 1 KISARAN', '88,0', 'Sistem Informasi', 'Islam', '082245321100', 'adharudi08@gmail.com'),
(2, 'BUDI PERMADI', 'LAKI-LAKI', 'simpang empat', '2000-01-04', 'HESSA AIR GENTING ', 'SMK NEGERI 1 KISARAN', '90,0', 'Sistem Informasi', 'Islam', '081231675322', 'permadi3788@gmail.com'),
(3, 'ARIS HERMANSA', 'Perempuan', 'PULAU BANDRING ', '2000-01-04', 'PULAU BANDRING', 'YAPIM', '88.0', 'Sistem Komputer', 'Islam', '08123322119', 'HARIS@gmail.com'),
(4, 'Akmal huda tanjung', 'Laki - Laki', 'tanjung balai', '2000-01-12', 'deli serdang', 'mas almadiy', '85,5', 'Sistem Informasi', 'Islam', '0812334553', 'huda12@gmail.com'),
(5, 'Dimas apindo', 'Laki - Laki', 'hessa air genting', '1999-10-21', 'kisaran barat', 'nurul waton', '80,5', 'Sistem Informasi', 'Islam', '08124455332', 'apindo12@gmail.com'),
(6, 'Fitri Rahama', 'Perempuan', 'pulau bandring', '--', 'simpang kawat', 'al-asry', '80,8', 'Sistem Komputer', 'Islam', '08123439812', 'fitrirahma12@gmail.com'),
(7, 'Alex sandra', 'Laki - Laki', 'meksiko', '--', 'simpang empat', 'SMK 1 KISARAN', '78,9', 'Sistem Komputer', 'Kristen Protestan', '08123456837', 'alex123@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `jurusan`) VALUES
(1, 'SISTEM INFORMASI'),
(2, 'SISTEM KOMPUTER'),
(3, 'MANAJEMEN INFORMASI'),
(4, 'MANAJEMEN KOMPUTER');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'stmik@royal.ac.id', 'Kelompok 1', 1, 'Mahasiswa Semester 7 Source 5');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_agama`
--
ALTER TABLE `tb_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indeks untuk tabel `tb_daftar`
--
ALTER TABLE `tb_daftar`
  ADD PRIMARY KEY (`no_daftar`),
  ADD KEY `id_jurusan` (`jurusan`),
  ADD KEY `id_agama` (`agama`);

--
-- Indeks untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_agama`
--
ALTER TABLE `tb_agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_daftar`
--
ALTER TABLE `tb_daftar`
  MODIFY `no_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
