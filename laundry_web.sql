-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Mar 2024 pada 17.16
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `qty` float NOT NULL,
  `subtotal` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `id_paket`, `qty`, `subtotal`, `id_transaksi`) VALUES
(2, 15, 2, 2400, 4),
(4, 14, 1, 12000, 4),
(5, 15, 3, 3600, 4),
(6, 15, 2, 2400, 5),
(7, 14, 2, 24000, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_paket`
--

CREATE TABLE `jenis_paket` (
  `id_jenis_paket` int(11) NOT NULL,
  `nama_jenis_paket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jenis_paket`
--

INSERT INTO `jenis_paket` (`id_jenis_paket`, `nama_jenis_paket`) VALUES
(1, 'Kiloan'),
(2, 'Satuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama`, `alamat`, `telepon`) VALUES
(1, 'UMUM', '', 0),
(2, 'RENDI', 'Jl.Pagaden Barat, Kec.Subang', 999888777),
(3, 'penni seftiani', 'jl. r.akartini no 156 rt 32 rw 12 kelurahan soklat kecamatan subang', 989788);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `harga_paket` int(11) NOT NULL,
  `id_jenis_paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `harga_paket`, `id_jenis_paket`) VALUES
(14, 'Baju', 12000, 1),
(15, 'Baju', 1200, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `uang_yang_dibayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_transaksi`, `total_harga`, `uang_yang_dibayar`, `kembalian`) VALUES
(1, 4, 18000, 0, 0),
(2, 5, 26400, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kode_invoice` int(11) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `total` int(11) NOT NULL,
  `tanggal_selesai` datetime NOT NULL,
  `status_cucian` enum('baru','sedang dicuci','sedang disetrika','selesai') NOT NULL,
  `status_bayar` enum('lunas','belum lunas') NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `kode_invoice`, `tgl_transaksi`, `total`, `tanggal_selesai`, `status_cucian`, `status_bayar`, `id_user`, `id_member`, `nama`, `alamat`, `telepon`) VALUES
(4, 29010, '2024-03-27 00:00:00', 0, '2024-03-29 00:00:00', 'baru', 'belum lunas', 1, 3, '', '', ''),
(5, 8999, '2024-03-28 00:00:00', 0, '2024-03-28 00:00:00', 'baru', 'belum lunas', 4, 2, 'RENDI', 'Jl.Pagaden Barat, Kec.Subang', '999888777');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `role` enum('admin','owner','kasir') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'Ridho ilahi', 'ridho12345', 'admin'),
(2, 'Munaroh', 'munaroh123', 'kasir'),
(3, 'Dinda Litina', 'litina456', 'owner'),
(4, 'admin', '123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indeks untuk tabel `jenis_paket`
--
ALTER TABLE `jenis_paket`
  ADD PRIMARY KEY (`id_jenis_paket`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `FK` (`id_jenis_paket`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD UNIQUE KEY `FK` (`id_transaksi`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `PK` (`id_user`),
  ADD UNIQUE KEY `foreign` (`id_member`),
  ADD UNIQUE KEY `kode_invoice` (`kode_invoice`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_member` (`id_member`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jenis_paket`
--
ALTER TABLE `jenis_paket`
  MODIFY `id_jenis_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
