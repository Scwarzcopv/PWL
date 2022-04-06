create database lat1_sewa_mobil;
set sql_mode = "NO_AUTO_VALUE_ON_ZERO";
start transaction;
set time_zone = "+00:00";

CREATE TABLE `kendaraan` (
	`no_plat` int(11) NOT NULL,
	`tahun` year(4) NOT NULL,
	`tarif` int(11) NOT NULL,
	`status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `pelanggan` (
	`no_ktp` int(16) NOT NULL,
	`nama` text NOT NULL,
	`alamat` text NOT NULL,
	`telepon` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `sopir` (
	`id_sopir` int(11) NOT NULL,
	`nama` text NOT NULL,
	`alamat` text NOT NULL,
	`telepon` decimal(10,0) NOT NULL,
	`sim` int(16) NOT NULL,
	`tarif` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `tipe_kendaraan` (
	`id_type` int(11) NOT NULL,
	`type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `transaksi` (
	`no_transaksi` int(11) NOT NULL,
	`tanggal_pesan` date NOT NULL,
	`tanggal_pinjam` date NOT NULL,
	`tanggal_kembali_rencana` date NOT NULL,
	`jam_kembali_realisasi` time NOT NULL,
	`denda` int(11) NOT NULL,
	`kilometer_pinjam` int(11) NOT NULL,
	`kilometer_kembali` int(11) NOT NULL,
	`bbm_pinjam` int(11) NOT NULL,
	`bbm_kembali` int(11) NOT NULL,
	`kondisi_mobil_pinjam` text NOT NULL,
	`kondisi_mobil_kembali` text NOT NULL,
	`kerusakan` text NOT NULL,
	`biaya_kerusakan` int(11) NOT NULL,
	`biaya_bbm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `kendaraan`
	ADD PRIMARY KEY (`no_plat`),
	ADD KEY `no_plat` (`no_plat`);

ALTER TABLE `pelanggan`
	ADD PRIMARY KEY (`no_ktp`),
	ADD KEY `no_ktp` (`no_ktp`);

ALTER TABLE `sopir`
	ADD PRIMARY KEY (`id_sopir`),
	ADD KEY `id_sopir` (`id_sopir`);

ALTER TABLE `tipe_kendaraan`
	ADD PRIMARY KEY (`id_type`),
	ADD KEY `id_type` (`id_type`);

ALTER TABLE `transaksi`
	ADD PRIMARY KEY (`no_transaksi`),
	ADD KEY `no_transaksi` (`no_transaksi`);

ALTER TABLE `kendaraan`
	ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`no_plat`) REFERENCES `transaksi` (`no_transaksi`);

ALTER TABLE `sopir`
	ADD CONSTRAINT `sopir_ibfk_1` FOREIGN KEY (`id_sopir`) REFERENCES `transaksi` (`no_transaksi`);

ALTER TABLE `tipe_kendaraan`
	ADD CONSTRAINT `tipe_kendaraan_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `kendaraan` (`no_plat`);

ALTER TABLE `transaksi`
	ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`no_transaksi`) REFERENCES `pelanggan` (`no_ktp`);

COMMIT;