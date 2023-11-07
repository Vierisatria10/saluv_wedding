-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2023 pada 09.28
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wedding`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_amplop`
--

CREATE TABLE `tbl_amplop` (
  `id_amplop` int(11) NOT NULL,
  `no_hp_rek` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_amplop`
--

INSERT INTO `tbl_amplop` (`id_amplop`, `no_hp_rek`, `nama`, `foto`) VALUES
(1, '0895336769180', 'Vieri Satria Ardiansyah', 'dana.png'),
(3, '085711067008', 'Renita Dwika Sari', 'dana1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cerita`
--

CREATE TABLE `tbl_cerita` (
  `id_cerita` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(11) NOT NULL,
  `foto` text NOT NULL,
  `created_update` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `foto`, `created_update`) VALUES
(1, 'foto1.jpg', '2023-10-26 14:00:40'),
(2, 'foto11.jpg', '2023-10-26 14:00:40'),
(3, 'foto12.jpg', '2023-10-26 14:00:40'),
(4, 'foto13.jpg', '2023-10-26 14:00:40'),
(5, 'foto14.jpg', '2023-10-26 14:00:40'),
(6, 'foto15.jpg', '2023-10-26 14:00:40'),
(7, 'foto16.jpg', '2023-10-26 14:00:40'),
(8, 'foto17.jpg', '2023-10-26 14:00:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `link_maps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `judul`, `alamat`, `hari`, `tanggal`, `jam`, `link_maps`) VALUES
(1, 'Akad', 'Gedung Olahraga - Pasar Kemis Tangerang', 'Sabtu', '2024-04-28', '11:09:00', ''),
(2, 'Resepsi', 'Ps. Kemis, Kec. Ps. Kemis, Kabupaten Tangerang, Banten 15560', 'Sabtu', '2024-04-28', '13:00:00', 'https://maps.app.goo.gl/uAgLYemb4YfQVKyo9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mempelai`
--

CREATE TABLE `tbl_mempelai` (
  `id_mempelai` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `ket` text NOT NULL,
  `ayah` varchar(30) NOT NULL,
  `ibu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_mempelai`
--

INSERT INTO `tbl_mempelai` (`id_mempelai`, `nama`, `image`, `ket`, `ayah`, `ibu`) VALUES
(1, 'Vieri Satria Ardiansyah S.Kom', 'logo_support_21.jpg', 'Putra Pertama dari ', 'Bpk. Hardi Suhardiman', 'Ibu Sunarti'),
(2, 'Renita Dwika Sari S.E', 'Logo_IT1.png', 'Putri Pertama dari', 'Bpk. Udin S', 'Ibu ErlindaWati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ucapan`
--

CREATE TABLE `tbl_ucapan` (
  `id_ucapan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` enum('Hadir','Belum Pasti','Tidak Hadir') NOT NULL,
  `ucapan_doa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_ucapan`
--

INSERT INTO `tbl_ucapan` (`id_ucapan`, `nama`, `status`, `ucapan_doa`) VALUES
(1, 'Gahry Rafi', 'Hadir', 'elamat menempuh kehidupan yang baru. Semoga kakak dan pasanganmu selalu menjadi pasangan yang saling mengasihi satu sama lain dalam ikatan utuh hingga ke surga-Nya. Doaku senantiasa menyertai kalian.'),
(3, 'Maya Asriyanti', 'Belum Pasti', 'Selamat yaa rere dan vieri semoga sakinah mawaddah dan warahmah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `email`, `username`, `password`, `level`, `foto`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'admin', '0b7f047be4b6d88e65a1c8081ccd2428', '1', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_amplop`
--
ALTER TABLE `tbl_amplop`
  ADD PRIMARY KEY (`id_amplop`);

--
-- Indeks untuk tabel `tbl_cerita`
--
ALTER TABLE `tbl_cerita`
  ADD PRIMARY KEY (`id_cerita`);

--
-- Indeks untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `tbl_mempelai`
--
ALTER TABLE `tbl_mempelai`
  ADD PRIMARY KEY (`id_mempelai`);

--
-- Indeks untuk tabel `tbl_ucapan`
--
ALTER TABLE `tbl_ucapan`
  ADD PRIMARY KEY (`id_ucapan`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_amplop`
--
ALTER TABLE `tbl_amplop`
  MODIFY `id_amplop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_cerita`
--
ALTER TABLE `tbl_cerita`
  MODIFY `id_cerita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_mempelai`
--
ALTER TABLE `tbl_mempelai`
  MODIFY `id_mempelai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_ucapan`
--
ALTER TABLE `tbl_ucapan`
  MODIFY `id_ucapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
