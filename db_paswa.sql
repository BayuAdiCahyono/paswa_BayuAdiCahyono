-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2022 pada 13.42
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_paswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_kegiatan`
--

CREATE TABLE `tab_kegiatan` (
  `id` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `narasumber` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tab_kegiatan`
--

INSERT INTO `tab_kegiatan` (`id`, `tanggal`, `jam_mulai`, `jam_selesai`, `nama_kegiatan`, `narasumber`, `pic`) VALUES
(2, '2022-11-01', '01:01:00', '11:11:00', 'BIASA AJA', 'APASIH', 'OKE'),
(3, '2022-11-15', '12:12:00', '13:13:00', 'BIASALAH', 'GUA', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_kelompok`
--

CREATE TABLE `tab_kelompok` (
  `id` int(5) NOT NULL,
  `nama_kelompok` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tab_kelompok`
--

INSERT INTO `tab_kelompok` (`id`, `nama_kelompok`) VALUES
(10, 'BIASA'),
(15, 'OK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_panitia`
--

CREATE TABLE `tab_panitia` (
  `nim` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tab_panitia`
--

INSERT INTO `tab_panitia` (`nim`, `nama`, `kelas`, `semester`, `email`, `no_hp`, `jabatan`) VALUES
(2147483647, 'Bayu Adi Cahyono', 'Malam', '3', 'bayucahyo777@gmail.com', '085602449425', 'Ketua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_perlengkapan`
--

CREATE TABLE `tab_perlengkapan` (
  `id` int(5) NOT NULL,
  `perlengkapan` text NOT NULL,
  `kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tab_perlengkapan`
--

INSERT INTO `tab_perlengkapan` (`id`, `perlengkapan`, `kategori`) VALUES
(2, 'KAYU', 'BAHAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_peserta`
--

CREATE TABLE `tab_peserta` (
  `nim` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `prodi` varchar(20) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `jenis_kelamin` int(11) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tab_peserta`
--

INSERT INTO `tab_peserta` (`nim`, `nama`, `prodi`, `semester`, `kelas`, `no_hp`, `email`, `alamat`, `jenis_kelamin`, `foto`, `agama`, `tempat_lahir`, `tanggal_lahir`) VALUES
(1, 'a', 'TI', 1, 'Pagi', '1', '1@gmail.com', '1', 1, 'a.jpg', 'Islam', '1', '2022-11-01'),
(2, 'b', 'TI', 2, 'Pagi', '2', '2@gmail.com', 'b', 2, '', 'Budha', '2', '2022-11-02'),
(2147483647, 'Bayu Adi Cahyono', 'TI', 5, 'Minggu', '0856933', 'cahyiono@gmail.com', 'biasa aja', 2, '', 'Budha', 'Blora', '2022-11-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_peserta_kelompok`
--

CREATE TABLE `tab_peserta_kelompok` (
  `id` int(2) NOT NULL,
  `nim` int(15) NOT NULL,
  `id_kelompok` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tab_peserta_kelompok`
--

INSERT INTO `tab_peserta_kelompok` (`id`, `nim`, `id_kelompok`) VALUES
(1, 1, 0),
(2, 2, 0),
(3, 4, 0),
(4, 3, 0),
(5, 5, 0),
(6, 256, 0),
(7, 2147483647, 0),
(8, 545454, 0),
(9, 7, 0),
(10, 987654321, 0),
(11, 1111111111, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_tamu`
--

CREATE TABLE `tab_tamu` (
  `id` int(5) NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tab_tamu`
--

INSERT INTO `tab_tamu` (`id`, `nama_tamu`, `jabatan`) VALUES
(1, 'BAYU', 'BIASA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_tata_tertib`
--

CREATE TABLE `tab_tata_tertib` (
  `id` int(5) NOT NULL,
  `tata_tertib` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tab_tata_tertib`
--

INSERT INTO `tab_tata_tertib` (`id`, `tata_tertib`) VALUES
(1, 'BIASA AJA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_user`
--

CREATE TABLE `tab_user` (
  `id` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `lastlogin` datetime DEFAULT NULL,
  `created_by` varchar(15) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_by` varchar(15) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tab_user`
--

INSERT INTO `tab_user` (`id`, `username`, `password`, `lastlogin`, `created_by`, `created_at`, `update_by`, `update_at`) VALUES
(1, 'bayu', 'a430e06de5ce438d499c2e4063d60fd6', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tab_kegiatan`
--
ALTER TABLE `tab_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tab_kelompok`
--
ALTER TABLE `tab_kelompok`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tab_panitia`
--
ALTER TABLE `tab_panitia`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `tab_perlengkapan`
--
ALTER TABLE `tab_perlengkapan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tab_peserta`
--
ALTER TABLE `tab_peserta`
  ADD PRIMARY KEY (`nim`) USING BTREE;

--
-- Indeks untuk tabel `tab_peserta_kelompok`
--
ALTER TABLE `tab_peserta_kelompok`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tab_tamu`
--
ALTER TABLE `tab_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tab_tata_tertib`
--
ALTER TABLE `tab_tata_tertib`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tab_user`
--
ALTER TABLE `tab_user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tab_kegiatan`
--
ALTER TABLE `tab_kegiatan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tab_kelompok`
--
ALTER TABLE `tab_kelompok`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tab_perlengkapan`
--
ALTER TABLE `tab_perlengkapan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tab_peserta`
--
ALTER TABLE `tab_peserta`
  MODIFY `nim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT untuk tabel `tab_peserta_kelompok`
--
ALTER TABLE `tab_peserta_kelompok`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tab_tamu`
--
ALTER TABLE `tab_tamu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tab_tata_tertib`
--
ALTER TABLE `tab_tata_tertib`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tab_user`
--
ALTER TABLE `tab_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
