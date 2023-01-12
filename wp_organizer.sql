-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2021 pada 18.25
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wp_organizer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_pkt` int(6) NOT NULL,
  `nama_pkt` varchar(20) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_pkt`, `nama_pkt`, `tipe`, `harga`) VALUES
(1, 'Birthday Party', 'Bronze', 15000000),
(2, 'Birthday Party', 'Silver', 25000000),
(3, 'Birthday Party', 'Gold', 30000000),
(4, 'Wedding Organizer', 'Bronze', 65500000),
(5, 'Wedding Organizer', 'Silver', 69900000),
(6, 'Wedding Organizer', 'Gold', 82900000),
(7, 'Outbound Play', 'Bronze', 1000000),
(8, 'Outbound Play', 'Silver', 15000000),
(9, 'Outbound Play', 'Gold', 22000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(6) NOT NULL,
  `id` int(11) NOT NULL,
  `id_pkt` int(6) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(126) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id`, `id_pkt`, `tanggal`, `status`) VALUES
(6, 4, 2, '2021-06-15', 'Kehabisan Slot, Dana Segera Direfund'),
(7, 4, 6, '2021-06-17', 'Pembayaran Sukses'),
(8, 4, 2, '2021-06-15', 'Dibatalkan, Dana Segera Direfund'),
(9, 4, 1, '2021-06-15', 'Pembayaran Sukses'),
(10, 4, 2, '2021-06-20', 'Pembayaran Sukses'),
(11, 4, 2, '0000-00-00', 'Pembayaran Sukses'),
(12, 4, 9, '2021-06-22', 'Dana Telah Direfund'),
(13, 7, 2, '2021-06-22', 'Dibatalkan, Menuggu Refund'),
(14, 7, 6, '2021-06-25', 'Pembayaran Sukses'),
(15, 8, 1, '2021-06-04', 'Dibatalkan, Menuggu Refund'),
(16, 8, 1, '2021-06-04', 'Dibatalkan, Menuggu Refund'),
(17, 8, 2, '2021-06-23', 'Dibatalkan, Menuggu Refund');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admministrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(26) NOT NULL,
  `nama` varchar(26) NOT NULL,
  `password` varchar(26) NOT NULL,
  `role` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `nama`, `password`, `role`) VALUES
(4, 'tris@gmail.com', 'Tris', '123', 'Member'),
(5, 'Tris@gc.io', 'Dimas Tris', '123', 'Admin'),
(6, 'eki@gc.io', 'eki', '123', 'Member'),
(7, 'juki@gc.id', 'juki', '123', 'Member'),
(8, 'agliadwitama09@gmail.com', 'aglia21', '123456789', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_pkt`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_pkt` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
