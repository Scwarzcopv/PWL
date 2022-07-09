-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2022 pada 16.21
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unisopv_store`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `username` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `password` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`username`, `status`, `password`, `images`) VALUES
('aaaaaaaaaaaaa', 2, 'as', '1656383013.png'),
('admin', 1, 'admin', '1657003255.png'),
('guest', 2, 'guest', '1657173708.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `id_produk` int(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `harga_total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id_cart`, `username`, `id_produk`, `harga`, `jumlah`, `harga_total`) VALUES
(272, 'admin', 2, 0, 0, 0),
(273, 'admin', 1, 0, 0, 0),
(274, 'admin', 4, 0, 0, 0),
(275, 'admin', 3, 0, 0, 0),
(276, 'admin', 6, 0, 0, 0),
(277, 'admin', 5, 0, 0, 0),
(278, 'admin', 7, 0, 0, 0),
(279, 'admin', 8, 0, 0, 0),
(280, 'admin', 9, 0, 0, 0),
(379, 'guest', 6, 745000, 0, 0),
(380, 'guest', 7, 365000, 0, 0),
(381, 'guest', 8, 700000, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(255) NOT NULL,
  `grade_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga_produk` int(255) NOT NULL,
  `img_produk` varchar(255) NOT NULL,
  `img_produk-hover` varchar(255) NOT NULL,
  `ket_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `grade_produk`, `nama_produk`, `harga_produk`, `img_produk`, `img_produk-hover`, `ket_produk`) VALUES
(1, '[HG] HIGH GRADE', '[HG] RX-78-02 Gundam - Cucuruz Doan\'s Island (PBandai)', 200000, 'HG_RX-78-02_Gundam.jpg', 'HG_RX-78-02_Gundam.jpg', ''),
(2, '[HG] HIGH GRADE', '[HG] IO Frame Shiden Custom - Ryuseigo (PBandai)\r\n', 200000, 'HG_IO_Frame_Shiden_Custom-Ryuseigo.jpg', 'HG_IO_Frame_Shiden_Custom-Ryuseigo.jpg', ''),
(3, '[HG] HIGH GRADE', '[HG] RX-78GP01Fb Gundam GP01Fb Full Burnern', 250000, 'HG_RX-78GP01Fb.jpg', 'HG_RX-78GP01Fb.jpg', ''),
(4, '[HG] HIGH GRADE', '[HG] MS-06F Zaku - Cucuruz Doan\'s Island (PBandai)', 200000, 'HG_MS-06F_Zaku.jpg', 'HG_MS-06F_Zaku.jpg', ''),
(5, '[HG] HIGH GRADE', '[HG] NZ-666 Kshatriya', 745000, '[HG] NZ-666 Kshatriya.jpg', '[HG] NZ-666 Kshatriya.jpg', ''),
(6, '[MG] MASTER GRADE', '[MG] Force Impulse Gundam', 745000, '[MG] Force Impulse Gundam.jpeg', '[MG] Force Impulse Gundam.jpeg', ''),
(7, '[HG] HIGH GRADE', '[HG] Lightning Z Gundam', 365000, '[HG] Lightning Z Gundam.jpeg', '[HG] Lightning Z Gundam.jpeg', ''),
(8, '[MG] MASTER GRADE', '[MG] Strike Gundam IWSP', 700000, '[MG] Strike Gundam IWSP.jpeg', '[MG] Strike Gundam IWSP.jpeg', ''),
(9, '[HG] HIGH GRADE', '[HG] RX-78GP01 Gundam GP01 Zephyranthes', 200000, '[HG] RX-78GP01 Gundam GP01 Zephyranthes.jpeg', '[HG] RX-78GP01 Gundam GP01 Zephyranthes.jpeg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wishlist`
--

CREATE TABLE `wishlist` (
  `id_wishlist` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `id_produk` int(255) NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wishlist`
--

INSERT INTO `wishlist` (`id_wishlist`, `username`, `id_produk`, `harga`) VALUES
(547, 'admin', 2, 0),
(548, 'admin', 1, 0),
(549, 'admin', 4, 0),
(550, 'admin', 3, 0),
(551, 'admin', 6, 0),
(552, 'admin', 5, 0),
(553, 'admin', 7, 0),
(554, 'admin', 8, 0),
(555, 'admin', 9, 0),
(638, 'guest', 6, 745000),
(639, 'guest', 7, 365000),
(640, 'guest', 8, 700000),
(641, 'guest', 2, 200000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `FK_Cart_1` (`username`),
  ADD KEY `FK_Cart_2` (`id_produk`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id_wishlist`),
  ADD KEY `FK_Wishlist_1` (`username`),
  ADD KEY `FK_Wishlist_2` (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=388;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id_wishlist` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=642;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_Cart_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`),
  ADD CONSTRAINT `FK_Cart_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Ketidakleluasaan untuk tabel `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `FK_Wishlist_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`),
  ADD CONSTRAINT `FK_Wishlist_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
