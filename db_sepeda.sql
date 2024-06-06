-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Agu 2020 pada 12.31
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sepeda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_riwayat`
--

CREATE TABLE `tb_riwayat` (
  `id_riwayat` varchar(15) NOT NULL,
  `id_sewa` varchar(15) NOT NULL,
  `id_sepeda` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_riwayat`
--

INSERT INTO `tb_riwayat` (`id_riwayat`, `id_sewa`, `id_sepeda`) VALUES
('RW0001', 'SW0001', 'SPD0001'),
('RW0002', 'SW0001', 'SPD0001'),
('RW0003', 'SW0002', 'SPD0003'),
('RW0004', 'SW0003', 'SPD0010'),
('RW0005', 'SW0004', 'SPD0001'),
('RW0006', 'SW0005', 'SPD0001'),
('RW0007', 'SW0004', 'SPD0004');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sepeda`
--

CREATE TABLE `tb_sepeda` (
  `id_sepeda` varchar(15) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `stok` int(100) NOT NULL,
  `f` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sepeda`
--

INSERT INTO `tb_sepeda` (`id_sepeda`, `merk`, `jenis`, `stok`, `f`) VALUES
('SPD0001', 'POLYGON SISKIU D7 ', 'SEPEDA GUNUNG', 5, 'SPD0001.jpg'),
('SPD0002', 'PACIFIC NORIS 2.3', 'SEPEDA LIPAT', 10, 'SPD0002.jpg'),
('SPD0003', 'ELEMENT FRC 38', 'SEPEDA BALAP', 12, 'SPD0003.jpg'),
('SPD0004', 'PACIFIC AVATAR (18″)', 'SEPEDA ANAK', 15, 'SPD0004.jpg'),
('SPD0005', 'UNITED BULLS (18″)', 'SEPEDA ANAK', 15, 'SPD0005.jpg'),
('SPD0006', 'POLYGON SIERRA OOSTEN', 'SEPEDA KERANJANG', 4, 'SPD0006.jpg'),
('SPD0007', 'PACIFIC RAVELLA', 'SEPEDA KERANJANG', 5, 'SPD0007.jpg'),
('SPD0008', 'POLYGON HEIST 2.0 (700C)', 'SEPEDA HYBRID', 7, 'SPD0008.jpg'),
('SPD0009', 'GENIO M-347', 'SEPEDA GUNUNG', 9, 'SPD0009.jpg'),
('SPD0010', 'EXOTIC EXPLORE 300 ', 'SEPEDA LIPAT', 8, 'SPD0010.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sewa`
--

CREATE TABLE `tb_sewa` (
  `id_sewa` varchar(15) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `id_sepeda` varchar(15) NOT NULL,
  `tgl_boking` date NOT NULL,
  `jml` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sewa`
--

INSERT INTO `tb_sewa` (`id_sewa`, `id_user`, `id_sepeda`, `tgl_boking`, `jml`) VALUES
('SW0001', 'USR0001', 'SPD0001', '2020-08-04', '1'),
('SW0002', 'USR0003', 'SPD0010', '2020-08-03', '2'),
('SW0003', 'USR0002', 'SPD0009', '2020-08-05', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nope` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `nope`, `email`, `alamat`) VALUES
('USR0001', 'Annisa Nurul', '082217765441', 'anp@gmail.com', 'Kadugede'),
('USR0002', 'Genta Nugraha', '089872134222', 'genta@gmail.com', 'Cirebon'),
('USR0003', 'Kinan Aisyahna', '081218166234', 'kinan@gmail.com', 'Kuningan'),
('USR0004', 'Handi Irawan', '082894343124', 'handi@yahoo.com', 'Ciawi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `upass` varchar(50) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `uemail` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`uid`, `uname`, `upass`, `fullname`, `uemail`) VALUES
(1, 'admin99', '12345', 'ADMIN UTAMA', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_sepeda`
--
ALTER TABLE `tb_sepeda`
  ADD PRIMARY KEY (`id_sepeda`);

--
-- Indeks untuk tabel `tb_sewa`
--
ALTER TABLE `tb_sewa`
  ADD PRIMARY KEY (`id_sewa`),
  ADD KEY `idspd` (`id_sepeda`),
  ADD KEY `kode_user` (`id_user`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_sewa`
--
ALTER TABLE `tb_sewa`
  ADD CONSTRAINT `idspd` FOREIGN KEY (`id_sepeda`) REFERENCES `tb_sepeda` (`id_sepeda`),
  ADD CONSTRAINT `kode_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
