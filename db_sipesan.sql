-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Mar 2024 pada 03.57
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipesan`
--
CREATE DATABASE IF NOT EXISTS `db_sipesan` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `db_sipesan`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_brosur`
--

CREATE TABLE `sipesan_brosur` (
  `brosur_id` varchar(10) NOT NULL,
  `brosur_keranjang_id` varchar(10) NOT NULL,
  `brosur_ukuran` enum('A4','A5') NOT NULL,
  `brosur_bahan` enum('hvs','konstruk') NOT NULL,
  `brosur_jumlah` int NOT NULL,
  `brosur_total` int NOT NULL,
  `brosur_estimasi` int NOT NULL,
  `brosur_foto` text NOT NULL,
  `brosur_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_desain`
--

CREATE TABLE `sipesan_desain` (
  `desain_id` int DEFAULT NULL,
  `desain_produk_id` int DEFAULT NULL,
  `desain_foto` int DEFAULT NULL,
  `desain_komentar` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_dtf`
--

CREATE TABLE `sipesan_dtf` (
  `dtf_id` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dtf_keranjang_id` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dtf_bahan` enum('Lebar 60 cm','Lebar 30 cm') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Lebar 60 cm',
  `dtf_panjang` int NOT NULL,
  `dtf_jumlah` int NOT NULL,
  `dtf_total` int NOT NULL,
  `dtf_estimasi` int NOT NULL,
  `dtf_foto` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dtf_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `sipesan_dtf`
--

INSERT INTO `sipesan_dtf` (`dtf_id`, `dtf_keranjang_id`, `dtf_bahan`, `dtf_panjang`, `dtf_jumlah`, `dtf_total`, `dtf_estimasi`, `dtf_foto`, `dtf_date_created`) VALUES
('Dtf-85885', 'DTF-85885', 'Lebar 60 cm', 100, 1, 76000, 10, '1236.png', '2024-03-19 01:18:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_faktur`
--

CREATE TABLE `sipesan_faktur` (
  `faktur_id` varchar(10) NOT NULL,
  `faktur_keranjang_id` varchar(10) NOT NULL,
  `faktur_bank` enum('bri','bni') NOT NULL,
  `faktur_status` enum('belum','sudah','tunggu') NOT NULL DEFAULT 'belum',
  `faktur_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sipesan_faktur`
--

INSERT INTO `sipesan_faktur` (`faktur_id`, `faktur_keranjang_id`, `faktur_bank`, `faktur_status`, `faktur_date_created`) VALUES
('INV-16331', 'TDTF-13892', 'bri', 'sudah', '2024-03-19 09:45:31'),
('INV-21212', 'NOT-21204', 'bni', 'sudah', '2024-03-14 13:00:12'),
('INV-22398', 'KLD-21875', 'bni', 'sudah', '2024-03-16 00:06:38'),
('INV-25202', 'NOT-25188', 'bni', 'sudah', '2024-03-13 17:20:02'),
('INV-44863', 'NOT-44820', 'bri', 'sudah', '2024-03-11 15:14:23'),
('INV-59574', 'NOT-59563', 'bni', 'sudah', '2024-03-11 19:19:34'),
('INV-59748', 'NOT-59741', 'bri', 'sudah', '2024-03-11 19:22:28'),
('INV-60528', 'CRT-60522', 'bri', 'sudah', '2024-03-11 19:35:28'),
('INV-73964', 'NOT-73847', 'bri', 'sudah', '2024-03-10 19:32:44'),
('INV-85925', 'DTF-85885', 'bni', 'sudah', '2024-03-19 01:18:46'),
('INV-86328', 'KLD-86319', 'bni', 'sudah', '2024-03-16 17:52:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_harga`
--

CREATE TABLE `sipesan_harga` (
  `harga_id` varchar(50) DEFAULT NULL,
  `harga_produk_id` varchar(50) DEFAULT NULL,
  `harga_ukuran` varchar(50) DEFAULT NULL,
  `harga_bahan` varchar(50) DEFAULT NULL,
  `harga_rangkap` varchar(50) DEFAULT NULL,
  `harga_laminasi` varchar(50) DEFAULT NULL,
  `harga_harga` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_kalender`
--

CREATE TABLE `sipesan_kalender` (
  `kalender_id` varchar(10) NOT NULL,
  `kalender_keranjang_id` varchar(10) NOT NULL,
  `kalender_bahan` enum('AC230','AC360','BCT','B/W','LINEN') NOT NULL,
  `kalender_isi` enum('7 Lembar','13 Lembar') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kalender_laminasi` enum('Tanpa Laminasi','Glossy','Doff') NOT NULL,
  `kalender_jumlah` int NOT NULL,
  `kalender_estimasi` int NOT NULL,
  `kalender_total` int NOT NULL,
  `kalender_foto` text NOT NULL,
  `kalender_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `sipesan_kalender`
--

INSERT INTO `sipesan_kalender` (`kalender_id`, `kalender_keranjang_id`, `kalender_bahan`, `kalender_isi`, `kalender_laminasi`, `kalender_jumlah`, `kalender_estimasi`, `kalender_total`, `kalender_foto`, `kalender_date_created`) VALUES
('KLD-22374', 'KLD-21875', 'BCT', '7 Lembar', 'Tanpa Laminasi', 1, 1, 11500, 'Bank_Sampah35.jpg', '2024-03-16 00:06:14'),
('KLD-86319', 'KLD-86319', 'LINEN', '13 Lembar', 'Doff', 10, 5, 651000, 'The_Gauntlet_(11).png', '2024-03-16 17:51:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_kartu`
--

CREATE TABLE `sipesan_kartu` (
  `kartu_id` varchar(10) NOT NULL,
  `kartu_keranjang_id` varchar(10) NOT NULL,
  `kartu_bahan` enum('biasa','bagus') NOT NULL,
  `kartu_jumlah` int NOT NULL,
  `kartu_estimasi` int NOT NULL,
  `kartu_total` int NOT NULL,
  `kartu_foto` text NOT NULL,
  `kartu_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_keranjang`
--

CREATE TABLE `sipesan_keranjang` (
  `keranjang_id` varchar(10) NOT NULL,
  `keranjang_pengguna_id` int NOT NULL,
  `keranjang_total` int NOT NULL,
  `keranjang_status` enum('belum','selesai','bayar_diterima','bayar_menunggu','bayar_verifikasi') NOT NULL DEFAULT 'belum',
  `keranjang_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sipesan_keranjang`
--

INSERT INTO `sipesan_keranjang` (`keranjang_id`, `keranjang_pengguna_id`, `keranjang_total`, `keranjang_status`, `keranjang_date_created`) VALUES
('DTF-85885', 4, 76000, 'bayar_menunggu', '2024-03-19 01:18:05'),
('TDTF-13892', 4, 100000, 'bayar_menunggu', '2024-03-19 09:04:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_konfirmasi`
--

CREATE TABLE `sipesan_konfirmasi` (
  `konfirmasi_id` varchar(10) NOT NULL,
  `konfirmasi_faktur_id` varchar(10) NOT NULL,
  `konfirmasi_rekening` varchar(30) NOT NULL,
  `konfirmasi_atas_nama` varchar(50) NOT NULL,
  `konfirmasi_nominal` int NOT NULL,
  `konfirmasi_struk` text NOT NULL,
  `konfirmasi_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sipesan_konfirmasi`
--

INSERT INTO `sipesan_konfirmasi` (`konfirmasi_id`, `konfirmasi_faktur_id`, `konfirmasi_rekening`, `konfirmasi_atas_nama`, `konfirmasi_nominal`, `konfirmasi_struk`, `konfirmasi_date_created`) VALUES
('CFM-16384', 'INV-16331', '2423424', 'asdfasdf', 100000, 'WhatsApp_Image_2024-01-04_at_7_01_47_PM.jpeg', '2024-03-19 09:46:24'),
('CFM-21237', 'INV-21212', '1234', 'zulian', 35000, 'Screen_Shot_2024-03-11_at_10_40_26_AM.png', '2024-03-14 13:00:37'),
('CFM-22420', 'INV-22398', '1234', 'zul', 11500, 'WhatsApp_Image_2024-01-28_at_15_09_11_240f63c4.jpg', '2024-03-16 00:07:00'),
('CFM-25232', 'INV-25202', '123456', 'Zulian', 35000, 'Bank_Sampah33.jpg', '2024-03-13 17:20:32'),
('CFM-44960', 'INV-44863', '1234', 'zul', 35000, 'Bank_Sampah.png', '2024-03-11 15:16:00'),
('CFM-59616', 'INV-59574', '312323', 'sdfasdfa', 35000, 'Bank_Sampah1.png', '2024-03-11 19:20:16'),
('CFM-59784', 'INV-59748', '34243', 'fsfasdf', 35000, 'Bank_Sampah2.png', '2024-03-11 19:23:04'),
('CFM-60567', 'INV-60528', '342342', 'fsadfasd', 75000, '123.png', '2024-03-11 19:36:07'),
('CFM-73987', 'INV-73964', '123', 'DFASDF', 35000, 'il_1140xN_738184927_dofo2.jpg', '2024-03-10 19:33:07'),
('CFM-85980', 'INV-85925', '12313', 'sdfasdfa', 76000, 'WhatsApp_Image_2023-12-12_at_5_19_03_PM.jpeg', '2024-03-19 01:19:40'),
('CFM-86360', 'INV-86328', '231231', 'adfasf', 651000, 'WhatsApp_Image_2023-12-12_at_8_48_52_PM.jpeg', '2024-03-16 17:52:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_nota`
--

CREATE TABLE `sipesan_nota` (
  `nota_id` varchar(10) NOT NULL,
  `nota_keranjang_id` varchar(10) NOT NULL,
  `nota_warna` enum('Full Warna','Hitam Putih') NOT NULL,
  `nota_ukuran` enum('A5','A6','1/3 F4','F4') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nota_rangkap` enum('Rangkap 2','Rangkap 3','Rangkap 4') NOT NULL,
  `nota_jumlah` int NOT NULL,
  `nota_total` int NOT NULL,
  `nota_estimasi` int NOT NULL,
  `nota_foto` text NOT NULL,
  `nota_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `sipesan_nota`
--

INSERT INTO `sipesan_nota` (`nota_id`, `nota_keranjang_id`, `nota_warna`, `nota_ukuran`, `nota_rangkap`, `nota_jumlah`, `nota_total`, `nota_estimasi`, `nota_foto`, `nota_date_created`) VALUES
('NOT-21204', 'NOT-21204', 'Hitam Putih', 'A5', 'Rangkap 3', 1, 35000, 2, 'pngfind_com-tommy-hilfiger-logo-png-2660044.png', '2024-03-14 13:00:04'),
('NOT-25187', 'NOT-25188', 'Hitam Putih', 'A5', 'Rangkap 2', 1, 35000, 2, 'STIKER_-_FIT.pdf', '2024-03-13 17:19:48'),
('NOT-59741', 'NOT-59741', 'Full Warna', 'A5', 'Rangkap 2', 1, 35000, 1, 'Bank_Sampah1.png', '2024-03-11 19:22:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_pengguna`
--

CREATE TABLE `sipesan_pengguna` (
  `pengguna_id` int NOT NULL,
  `pengguna_username` varchar(255) NOT NULL,
  `pengguna_password` varchar(255) NOT NULL,
  `pengguna_nama` varchar(255) DEFAULT NULL,
  `pengguna_nomor_hp` varchar(20) DEFAULT NULL,
  `pengguna_email` varchar(255) DEFAULT NULL,
  `pengguna_level` enum('administrator','pemesan') NOT NULL,
  `pengguna_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sipesan_pengguna`
--

INSERT INTO `sipesan_pengguna` (`pengguna_id`, `pengguna_username`, `pengguna_password`, `pengguna_nama`, `pengguna_nomor_hp`, `pengguna_email`, `pengguna_level`, `pengguna_date_created`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, NULL, 'administrator', '2019-07-18 16:35:32'),
(4, 'zulian', 'e10adc3949ba59abbe56e057f20f883e', 'Zulian', '085315813360', 'zulian.nz80@gmail.com', 'pemesan', '2024-03-04 21:05:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_spanduk`
--

CREATE TABLE `sipesan_spanduk` (
  `spanduk_id` varchar(10) NOT NULL,
  `spanduk_keranjang_id` varchar(10) DEFAULT NULL,
  `spanduk_panjang` double NOT NULL,
  `spanduk_lebar` double NOT NULL,
  `spanduk_bahan` enum('biasa','menengah','bagus') NOT NULL,
  `spanduk_jumlah` int NOT NULL,
  `spanduk_estimasi` int NOT NULL,
  `spanduk_total` int NOT NULL,
  `spanduk_foto` text NOT NULL,
  `spanduk_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_stiker`
--

CREATE TABLE `sipesan_stiker` (
  `stiker_id` varchar(10) NOT NULL,
  `stiker_keranjang_id` varchar(10) NOT NULL,
  `stiker_panjang` double NOT NULL,
  `stiker_lebar` double NOT NULL,
  `stiker_bahan` enum('biasa','bagus') NOT NULL,
  `stiker_jumlah` int NOT NULL,
  `stiker_estimasi` int NOT NULL,
  `stiker_total` int NOT NULL,
  `stiker_foto` text NOT NULL,
  `stiker_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sipesan_stiker`
--

INSERT INTO `sipesan_stiker` (`stiker_id`, `stiker_keranjang_id`, `stiker_panjang`, `stiker_lebar`, `stiker_bahan`, `stiker_jumlah`, `stiker_estimasi`, `stiker_total`, `stiker_foto`, `stiker_date_created`) VALUES
('SKR-60522', 'CRT-60522', 1, 1, 'biasa', 1, 2, 75000, '123.png', '2024-03-11 19:35:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_tdtf`
--

CREATE TABLE `sipesan_tdtf` (
  `tdtf_id` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tdtf_keranjang_id` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tdtf_bahan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Lebar 60 cm',
  `tdtf_size` enum('S','M','L','XL','XXL') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tdtf_jumlah` int NOT NULL,
  `tdtf_total` int NOT NULL,
  `tdtf_estimasi` int NOT NULL,
  `tdtf_foto` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tdtf_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `sipesan_tdtf`
--

INSERT INTO `sipesan_tdtf` (`tdtf_id`, `tdtf_keranjang_id`, `tdtf_bahan`, `tdtf_size`, `tdtf_jumlah`, `tdtf_total`, `tdtf_estimasi`, `tdtf_foto`, `tdtf_date_created`) VALUES
('TDTF-13892', 'TDTF-13892', 'Misty Dark Gray', 'XXL', 1, 100000, 1, 'Female_T-shirt_2.png', '2024-03-19 09:04:52');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sipesan_brosur`
--
ALTER TABLE `sipesan_brosur`
  ADD PRIMARY KEY (`brosur_id`),
  ADD KEY `brosur_keranjang_id` (`brosur_keranjang_id`);

--
-- Indeks untuk tabel `sipesan_dtf`
--
ALTER TABLE `sipesan_dtf`
  ADD PRIMARY KEY (`dtf_id`) USING BTREE,
  ADD KEY `dtf_keranjang_id` (`dtf_keranjang_id`);

--
-- Indeks untuk tabel `sipesan_faktur`
--
ALTER TABLE `sipesan_faktur`
  ADD PRIMARY KEY (`faktur_id`),
  ADD KEY `faktur_keranjang_id` (`faktur_keranjang_id`);

--
-- Indeks untuk tabel `sipesan_kalender`
--
ALTER TABLE `sipesan_kalender`
  ADD PRIMARY KEY (`kalender_id`) USING BTREE,
  ADD KEY `kalender_keranjang_id` (`kalender_keranjang_id`);

--
-- Indeks untuk tabel `sipesan_kartu`
--
ALTER TABLE `sipesan_kartu`
  ADD PRIMARY KEY (`kartu_id`),
  ADD KEY `kartu_keranjang_id` (`kartu_keranjang_id`);

--
-- Indeks untuk tabel `sipesan_keranjang`
--
ALTER TABLE `sipesan_keranjang`
  ADD PRIMARY KEY (`keranjang_id`),
  ADD KEY `keranjang_pengguna_id` (`keranjang_pengguna_id`);

--
-- Indeks untuk tabel `sipesan_konfirmasi`
--
ALTER TABLE `sipesan_konfirmasi`
  ADD PRIMARY KEY (`konfirmasi_id`),
  ADD KEY `konfirmasi_faktur_id` (`konfirmasi_faktur_id`);

--
-- Indeks untuk tabel `sipesan_nota`
--
ALTER TABLE `sipesan_nota`
  ADD PRIMARY KEY (`nota_id`) USING BTREE,
  ADD KEY `nota_keranjang_id` (`nota_keranjang_id`);

--
-- Indeks untuk tabel `sipesan_pengguna`
--
ALTER TABLE `sipesan_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indeks untuk tabel `sipesan_spanduk`
--
ALTER TABLE `sipesan_spanduk`
  ADD PRIMARY KEY (`spanduk_id`),
  ADD KEY `spanduk_keranjang_id` (`spanduk_keranjang_id`);

--
-- Indeks untuk tabel `sipesan_stiker`
--
ALTER TABLE `sipesan_stiker`
  ADD PRIMARY KEY (`stiker_id`),
  ADD KEY `stiker_keranjang_id` (`stiker_keranjang_id`);

--
-- Indeks untuk tabel `sipesan_tdtf`
--
ALTER TABLE `sipesan_tdtf`
  ADD PRIMARY KEY (`tdtf_id`) USING BTREE,
  ADD KEY `dtf_keranjang_id` (`tdtf_keranjang_id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sipesan_pengguna`
--
ALTER TABLE `sipesan_pengguna`
  MODIFY `pengguna_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Database: `digiprint`
--
CREATE DATABASE IF NOT EXISTS `digiprint` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `digiprint`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `messagein`
--

CREATE TABLE `messagein` (
  `Id` int NOT NULL,
  `SendTime` datetime DEFAULT NULL,
  `ReceiveTime` datetime DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `SMSC` varchar(80) DEFAULT NULL,
  `MessageText` text,
  `MessageType` varchar(80) DEFAULT NULL,
  `MessageParts` int DEFAULT NULL,
  `MessagePDU` text,
  `Gateway` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `messagelog`
--

CREATE TABLE `messagelog` (
  `Id` int NOT NULL,
  `SendTime` datetime DEFAULT NULL,
  `ReceiveTime` datetime DEFAULT NULL,
  `StatusCode` int DEFAULT NULL,
  `StatusText` varchar(80) DEFAULT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageText` text,
  `MessageType` varchar(80) DEFAULT NULL,
  `MessageId` varchar(80) DEFAULT NULL,
  `ErrorCode` varchar(80) DEFAULT NULL,
  `ErrorText` varchar(80) DEFAULT NULL,
  `Gateway` varchar(80) DEFAULT NULL,
  `MessageParts` int DEFAULT NULL,
  `MessagePDU` text,
  `Connector` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL,
  `UserInfo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `messageout`
--

CREATE TABLE `messageout` (
  `Id` int NOT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageText` text,
  `MessageType` varchar(80) DEFAULT NULL,
  `Gateway` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL,
  `UserInfo` text,
  `Priority` int DEFAULT NULL,
  `Scheduled` datetime DEFAULT NULL,
  `ValidityPeriod` int DEFAULT NULL,
  `IsSent` tinyint(1) NOT NULL DEFAULT '0',
  `IsRead` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblautonumber`
--

CREATE TABLE `tblautonumber` (
  `ID` int NOT NULL,
  `AUTOSTART` varchar(11) NOT NULL,
  `AUTOINC` int NOT NULL,
  `AUTOEND` int NOT NULL,
  `AUTOKEY` varchar(12) NOT NULL,
  `AUTONUM` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblautonumber`
--

INSERT INTO `tblautonumber` (`ID`, `AUTOSTART`, `AUTOINC`, `AUTOEND`, `AUTOKEY`, `AUTONUM`) VALUES
(1, '2', 1, 46, 'PROID', 10),
(2, '0', 1, 101, 'ordernumber', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblcategory`
--

CREATE TABLE `tblcategory` (
  `CATEGID` int NOT NULL,
  `CATEGORIES` varchar(255) NOT NULL,
  `USERID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblcategory`
--

INSERT INTO `tblcategory` (`CATEGID`, `CATEGORIES`, `USERID`) VALUES
(5, 'PRINT', 0),
(11, 'BANNER', 0),
(12, 'BROSUR', 0),
(13, 'KALENDER', 0),
(14, 'POSTER', 0),
(15, 'STIKER', 0),
(16, 'MAP', 0),
(17, 'CARTRIDGE', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblcustomer`
--

CREATE TABLE `tblcustomer` (
  `CUSTOMERID` int NOT NULL,
  `FNAME` varchar(30) NOT NULL,
  `LNAME` varchar(30) NOT NULL,
  `MNAME` varchar(30) NOT NULL,
  `CUSHOMENUM` varchar(90) NOT NULL,
  `STREETADD` text NOT NULL,
  `BRGYADD` text NOT NULL,
  `CITYADD` text NOT NULL,
  `PROVINCE` varchar(80) NOT NULL,
  `COUNTRY` varchar(30) NOT NULL,
  `DBIRTH` date NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `PHONE` varchar(20) NOT NULL,
  `EMAILADD` varchar(40) NOT NULL,
  `ZIPCODE` int NOT NULL,
  `CUSUNAME` varchar(20) NOT NULL,
  `CUSPASS` varchar(90) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `CUSPHOTO` varchar(255) NOT NULL,
  `TERMS` tinyint NOT NULL,
  `DATEJOIN` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblcustomer`
--

INSERT INTO `tblcustomer` (`CUSTOMERID`, `FNAME`, `LNAME`, `MNAME`, `CUSHOMENUM`, `STREETADD`, `BRGYADD`, `CITYADD`, `PROVINCE`, `COUNTRY`, `DBIRTH`, `GENDER`, `PHONE`, `EMAILADD`, `ZIPCODE`, `CUSUNAME`, `CUSPASS`, `CUSPHOTO`, `TERMS`, `DATEJOIN`) VALUES
(14, 'Test', 'Order', '', '', '', '', 'Jalan', '', '', '0000-00-00', 'Laki-laki', '0895324234234', '', 0, 'test', 'f988c245b3c789a608b34cd1b7c1b612542dbd09', '', 1, '2021-03-31'),
(15, 'aa', 'ab', '', '', '', '', 'asda', '', '', '0000-00-00', '', '0895324234234', '', 0, 'a', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'customer_image/index.jpg', 1, '2021-05-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblorder`
--

CREATE TABLE `tblorder` (
  `ORDERID` int NOT NULL,
  `PROID` int NOT NULL,
  `ORDEREDQTY` int NOT NULL,
  `ORDEREDPRICE` double NOT NULL,
  `ORDEREDNUM` int NOT NULL,
  `USERID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblorder`
--

INSERT INTO `tblorder` (`ORDERID`, `PROID`, `ORDEREDQTY`, `ORDEREDPRICE`, `ORDEREDNUM`, `USERID`) VALUES
(5, 201737, 1, 500, 96, 0),
(6, 201737, 1, 400, 98, 0),
(7, 201737, 1, 400, 99, 0),
(8, 201737, 1, 400, 100, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblproduct`
--

CREATE TABLE `tblproduct` (
  `PROID` int NOT NULL,
  `PRODESC` varchar(255) DEFAULT NULL,
  `INGREDIENTS` varchar(255) NOT NULL,
  `PROQTY` int DEFAULT NULL,
  `ORIGINALPRICE` double NOT NULL,
  `PROPRICE` double DEFAULT NULL,
  `CATEGID` int DEFAULT NULL,
  `IMAGES` varchar(255) DEFAULT NULL,
  `PROSTATS` varchar(30) DEFAULT NULL,
  `OWNERNAME` varchar(90) NOT NULL,
  `OWNERPHONE` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblproduct`
--

INSERT INTO `tblproduct` (`PROID`, `PRODESC`, `INGREDIENTS`, `PROQTY`, `ORIGINALPRICE`, `PROPRICE`, `CATEGID`, `IMAGES`, `PROSTATS`, `OWNERNAME`, `OWNERPHONE`) VALUES
(201737, 'Ukuran A5 (21 cm x 14,8 cm)\r\nCetak	: 2 sisi \r\nKertas	: Artpaper\r\nJumlah Kertas	: 1000 lembar\r\n', '', 996, 4, 400, 12, 'uploaded_photos/brosur A5.jpg', 'Available', 'DigiPrint', ''),
(201738, 'Ukuran A4 (29,7 cm x 21 cm)\r\nCetak	: 2 sisi\r\nKertas	: Artpaper\r\nJumlah Kertas	: 500 lembar\r\n', '', 1000, 150, 580, 12, 'uploaded_photos/brosur a4.jpg', 'Available', 'DigiPrint', ''),
(201739, 'Stiker Kromo Premium\r\nCetak : Fullcollor 1 sisi(4/0)\r\nFinishing : Tanpa Potong dan Laminasi\r\nUkuran Cetak : 31x47 cm\r\n', '', 1000, 250, 5.5, 18, 'uploaded_photos/stiker kromo.jpg', 'Available', 'DigiPrint', ''),
(201740, 'Stiker Label Kiss Cut, Stiker yang dipotong model bulat, cocok sekali ntuk label usahamu\r\nBahan : Stiker Kromo\r\nFinishing : Laminasi Matt/Doff\r\nDiameter : 3–4.9 cm', '', 1000, 100, 20, 18, 'uploaded_photos/Label Kiss cut.jpg', 'Available', 'DigiPrint', ''),
(201741, 'Stiker Label Offset, Stiker Label Offset cocok untuk label produk anda yang di produksi \r\nsecara massal\r\nBahan : Stiker Kromo\r\nUkuran : A6\r\nJumlah : 500 lembar \r\nBonus : 50 lembar\r\n', '', 1000, 50, 560, 18, 'uploaded_photos/Offset.jpg', 'Available', 'DigPrint', ''),
(201742, 'Rollup Banner\r\nRollup Banner biasa digunakan karena praktis dan tahan lama. Model ini juga elegan sehingga cocok dipasang dimana saja.\r\nBahan : Albatros Laminasi Ukuran : 60x160 cm\r\n', '', 1000, 250, 287, 14, 'uploaded_photos/Rollbanner.jpg', 'Available', 'Digi Print', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblpromopro`
--

CREATE TABLE `tblpromopro` (
  `PROMOID` int NOT NULL,
  `PROID` int NOT NULL,
  `PRODISCOUNT` double NOT NULL,
  `PRODISPRICE` char(20) DEFAULT NULL,
  `PROBANNER` tinyint NOT NULL,
  `PRONEW` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblpromopro`
--

INSERT INTO `tblpromopro` (`PROMOID`, `PROID`, `PRODISCOUNT`, `PRODISPRICE`, `PROBANNER`, `PRONEW`) VALUES
(1, 201737, 0, '400.000', 0, 0),
(2, 201738, 20, '580.000', 0, 0),
(3, 201739, 25, '5.250', 0, 0),
(4, 201740, 5, '15.000', 0, 0),
(5, 201741, 10, '550.000', 0, 0),
(6, 201742, 87, '200.000', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblsetting`
--

CREATE TABLE `tblsetting` (
  `SETTINGID` int NOT NULL,
  `PLACE` text NOT NULL,
  `BRGY` varchar(90) NOT NULL,
  `DELPRICE` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblstockin`
--

CREATE TABLE `tblstockin` (
  `STOCKINID` int NOT NULL,
  `STOCKDATE` datetime DEFAULT NULL,
  `PROID` int DEFAULT NULL,
  `STOCKQTY` int DEFAULT NULL,
  `STOCKPRICE` double DEFAULT NULL,
  `USERID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblsummary`
--

CREATE TABLE `tblsummary` (
  `SUMMARYID` int NOT NULL,
  `ORDEREDDATE` datetime NOT NULL,
  `CUSTOMERID` int NOT NULL,
  `ORDEREDNUM` int NOT NULL,
  `DELFEE` double NOT NULL,
  `PAYMENT` double NOT NULL,
  `PAYMENTMETHOD` varchar(30) NOT NULL,
  `ORDEREDSTATS` varchar(30) NOT NULL,
  `ORDEREDREMARKS` varchar(125) NOT NULL,
  `CLAIMEDADTE` datetime NOT NULL,
  `HVIEW` tinyint NOT NULL,
  `USERID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblsummary`
--

INSERT INTO `tblsummary` (`SUMMARYID`, `ORDEREDDATE`, `CUSTOMERID`, `ORDEREDNUM`, `DELFEE`, `PAYMENT`, `PAYMENTMETHOD`, `ORDEREDSTATS`, `ORDEREDREMARKS`, `CLAIMEDADTE`, `HVIEW`, `USERID`) VALUES
(4, '2021-03-29 06:16:58', 10, 95, 50, 249, 'Cash on Delivery', 'Pending', 'Your order is on process.', '0000-00-00 00:00:00', 0, 0),
(5, '2021-03-31 05:56:11', 14, 96, 0, 500, 'Cash on Delivery', 'Confirmed', 'Your order has been confirmed.', '2021-03-31 00:00:00', 0, 0),
(6, '2021-05-26 02:49:52', 15, 98, 0, 400, 'COD', 'Cancelled', 'Your order has been cancelled due to lack of communication and incomplete information.', '0000-00-00 00:00:00', 0, 0),
(7, '2021-05-26 03:02:38', 15, 99, 0, 400, 'COD', 'Tertunda', 'Pesananmu Dalam Proses', '0000-00-00 00:00:00', 0, 0),
(8, '2021-05-26 03:07:30', 15, 100, 0, 400, 'COD', 'Tertunda', 'Pesananmu Dalam Proses', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbluseraccount`
--

CREATE TABLE `tbluseraccount` (
  `USERID` int NOT NULL,
  `U_NAME` varchar(122) NOT NULL,
  `U_USERNAME` varchar(122) NOT NULL,
  `U_PASS` varchar(122) NOT NULL,
  `U_ROLE` varchar(30) NOT NULL,
  `USERIMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbluseraccount`
--

INSERT INTO `tbluseraccount` (`USERID`, `U_NAME`, `U_USERNAME`, `U_PASS`, `U_ROLE`, `USERIMAGE`) VALUES
(130, 'Admin DigiPrint', 'projek', 'Admin123!', 'Administrator', ''),
(131, 'Zulian', 'zulian', 'Admin123!', 'Administrator', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblwishlist`
--

CREATE TABLE `tblwishlist` (
  `id` int NOT NULL,
  `CUSID` int NOT NULL,
  `PROID` int NOT NULL,
  `WISHDATE` date NOT NULL,
  `WISHSTATS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblwishlist`
--

INSERT INTO `tblwishlist` (`id`, `CUSID`, `PROID`, `WISHDATE`, `WISHSTATS`) VALUES
(3, 11, 201737, '2021-03-30', '0'),
(4, 15, 201737, '2021-05-26', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `messagein`
--
ALTER TABLE `messagein`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `messagelog`
--
ALTER TABLE `messagelog`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDX_MessageId` (`MessageId`,`SendTime`);

--
-- Indeks untuk tabel `messageout`
--
ALTER TABLE `messageout`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDX_IsRead` (`IsRead`);

--
-- Indeks untuk tabel `tblautonumber`
--
ALTER TABLE `tblautonumber`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`CATEGID`);

--
-- Indeks untuk tabel `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD PRIMARY KEY (`CUSTOMERID`);

--
-- Indeks untuk tabel `tblorder`
--
ALTER TABLE `tblorder`
  ADD PRIMARY KEY (`ORDERID`),
  ADD KEY `USERID` (`USERID`),
  ADD KEY `PROID` (`PROID`),
  ADD KEY `ORDEREDNUM` (`ORDEREDNUM`);

--
-- Indeks untuk tabel `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`PROID`),
  ADD KEY `CATEGID` (`CATEGID`);

--
-- Indeks untuk tabel `tblpromopro`
--
ALTER TABLE `tblpromopro`
  ADD PRIMARY KEY (`PROMOID`),
  ADD UNIQUE KEY `PROID` (`PROID`);

--
-- Indeks untuk tabel `tblsetting`
--
ALTER TABLE `tblsetting`
  ADD PRIMARY KEY (`SETTINGID`);

--
-- Indeks untuk tabel `tblstockin`
--
ALTER TABLE `tblstockin`
  ADD PRIMARY KEY (`STOCKINID`),
  ADD KEY `PROID` (`PROID`,`USERID`),
  ADD KEY `USERID` (`USERID`);

--
-- Indeks untuk tabel `tblsummary`
--
ALTER TABLE `tblsummary`
  ADD PRIMARY KEY (`SUMMARYID`),
  ADD UNIQUE KEY `ORDEREDNUM` (`ORDEREDNUM`),
  ADD KEY `CUSTOMERID` (`CUSTOMERID`),
  ADD KEY `USERID` (`USERID`);

--
-- Indeks untuk tabel `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  ADD PRIMARY KEY (`USERID`);

--
-- Indeks untuk tabel `tblwishlist`
--
ALTER TABLE `tblwishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `messagein`
--
ALTER TABLE `messagein`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `messagelog`
--
ALTER TABLE `messagelog`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `messageout`
--
ALTER TABLE `messageout`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tblautonumber`
--
ALTER TABLE `tblautonumber`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `CATEGID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tblcustomer`
--
ALTER TABLE `tblcustomer`
  MODIFY `CUSTOMERID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tblorder`
--
ALTER TABLE `tblorder`
  MODIFY `ORDERID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tblpromopro`
--
ALTER TABLE `tblpromopro`
  MODIFY `PROMOID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tblsetting`
--
ALTER TABLE `tblsetting`
  MODIFY `SETTINGID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tblstockin`
--
ALTER TABLE `tblstockin`
  MODIFY `STOCKINID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tblsummary`
--
ALTER TABLE `tblsummary`
  MODIFY `SUMMARYID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  MODIFY `USERID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT untuk tabel `tblwishlist`
--
ALTER TABLE `tblwishlist`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Database: `nakula_sadewa`
--
CREATE DATABASE IF NOT EXISTS `nakula_sadewa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `nakula_sadewa`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_brosur`
--

CREATE TABLE `sipesan_brosur` (
  `brosur_id` varchar(10) NOT NULL,
  `brosur_keranjang_id` varchar(10) NOT NULL,
  `brosur_ukuran` enum('A4','A5') NOT NULL,
  `brosur_bahan` enum('hvs','konstruk') NOT NULL,
  `brosur_jumlah` int NOT NULL,
  `brosur_total` int NOT NULL,
  `brosur_estimasi` int NOT NULL,
  `brosur_foto` text NOT NULL,
  `brosur_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sipesan_brosur`
--

INSERT INTO `sipesan_brosur` (`brosur_id`, `brosur_keranjang_id`, `brosur_ukuran`, `brosur_bahan`, `brosur_jumlah`, `brosur_total`, `brosur_estimasi`, `brosur_foto`, `brosur_date_created`) VALUES
('BRC-29881', 'CRT-75430', 'A4', 'hvs', 1, 500000, 10, 'Screenshot_(2).png', '2019-08-11 20:24:41'),
('BRC-30100', 'CRT-75430', 'A5', 'konstruk', 1, 750000, 10, 'Screenshot_(92).png', '2019-08-11 20:28:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_faktur`
--

CREATE TABLE `sipesan_faktur` (
  `faktur_id` varchar(10) NOT NULL,
  `faktur_keranjang_id` varchar(10) NOT NULL,
  `faktur_bank` enum('bri','bni') NOT NULL,
  `faktur_status` enum('belum','sudah','tunggu') NOT NULL DEFAULT 'belum',
  `faktur_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sipesan_faktur`
--

INSERT INTO `sipesan_faktur` (`faktur_id`, `faktur_keranjang_id`, `faktur_bank`, `faktur_status`, `faktur_date_created`) VALUES
('INV-06780', 'CRT-06729', 'bri', 'belum', '2019-08-06 22:53:00'),
('INV-11376', 'CRT-69598', 'bri', 'sudah', '2019-08-02 09:02:56'),
('INV-30460', 'CRT-75430', 'bri', 'sudah', '2019-08-11 20:34:20'),
('INV-30764', 'CRT-30738', 'bri', 'belum', '2019-08-11 20:39:24'),
('INV-30879', 'CRT-30858', 'bri', 'belum', '2019-08-11 20:41:19'),
('INV-57920', 'CRT-10688', 'bni', 'belum', '2019-08-08 16:52:00'),
('INV-73209', 'CRT-73166', 'bri', 'sudah', '2019-08-08 21:06:49'),
('INV-81280', 'CRT-81166', 'bri', 'belum', '2019-08-12 10:41:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_kartu`
--

CREATE TABLE `sipesan_kartu` (
  `kartu_id` varchar(10) NOT NULL,
  `kartu_keranjang_id` varchar(10) NOT NULL,
  `kartu_bahan` enum('biasa','bagus') NOT NULL,
  `kartu_jumlah` int NOT NULL,
  `kartu_estimasi` int NOT NULL,
  `kartu_total` int NOT NULL,
  `kartu_foto` text NOT NULL,
  `kartu_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sipesan_kartu`
--

INSERT INTO `sipesan_kartu` (`kartu_id`, `kartu_keranjang_id`, `kartu_bahan`, `kartu_jumlah`, `kartu_estimasi`, `kartu_total`, `kartu_foto`, `kartu_date_created`) VALUES
('CRD-24383', 'CRT-75430', 'bagus', 2, 10, 90000, 'Screenshot_(5).png', '2019-08-11 18:53:03'),
('CRD-30738', 'CRT-30738', 'biasa', 1, 2, 35000, 'Screenshot_(6).png', '2019-08-11 20:38:58'),
('CRD-30751', 'CRT-30738', 'bagus', 1, 3, 45000, 'Screenshot_(11).png', '2019-08-11 20:39:11'),
('CRD-30858', 'CRT-30858', 'biasa', 2, 10, 70000, 'Screenshot_(7).png', '2019-08-11 20:40:58'),
('CRD-30868', 'CRT-30858', 'bagus', 1, 12, 45000, 'Screenshot_(7)1.png', '2019-08-11 20:41:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_keranjang`
--

CREATE TABLE `sipesan_keranjang` (
  `keranjang_id` varchar(10) NOT NULL,
  `keranjang_pengguna_id` int NOT NULL,
  `keranjang_total` int NOT NULL,
  `keranjang_status` enum('belum','selesai','bayar_diterima','bayar_menunggu','bayar_verifikasi') NOT NULL DEFAULT 'belum',
  `keranjang_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sipesan_keranjang`
--

INSERT INTO `sipesan_keranjang` (`keranjang_id`, `keranjang_pengguna_id`, `keranjang_total`, `keranjang_status`, `keranjang_date_created`) VALUES
('CRT-06729', 2, 370000, 'bayar_menunggu', '2019-08-06 22:52:09'),
('CRT-10688', 2, 180000, 'bayar_menunggu', '2019-08-06 23:58:08'),
('CRT-30738', 2, 80000, 'bayar_menunggu', '2019-08-11 20:38:58'),
('CRT-30858', 2, 115000, 'bayar_menunggu', '2019-08-11 20:40:58'),
('CRT-69598', 2, 1230000, 'bayar_menunggu', '2019-07-27 02:33:18'),
('CRT-73166', 2, 4500000, 'bayar_menunggu', '2019-08-08 21:06:06'),
('CRT-75430', 2, 4100000, 'bayar_menunggu', '2019-08-08 21:43:50'),
('CRT-81166', 2, 38000, 'bayar_menunggu', '2019-08-12 10:39:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_konfirmasi`
--

CREATE TABLE `sipesan_konfirmasi` (
  `konfirmasi_id` varchar(10) NOT NULL,
  `konfirmasi_faktur_id` varchar(10) NOT NULL,
  `konfirmasi_rekening` varchar(30) NOT NULL,
  `konfirmasi_atas_nama` varchar(50) NOT NULL,
  `konfirmasi_nominal` int NOT NULL,
  `konfirmasi_struk` text NOT NULL,
  `konfirmasi_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sipesan_konfirmasi`
--

INSERT INTO `sipesan_konfirmasi` (`konfirmasi_id`, `konfirmasi_faktur_id`, `konfirmasi_rekening`, `konfirmasi_atas_nama`, `konfirmasi_nominal`, `konfirmasi_struk`, `konfirmasi_date_created`) VALUES
('CFM-32462', 'INV-30460', '123415151', 'Jihad Benastey', 4100000, 'Screenshot_(3).png', '2019-08-11 21:07:42'),
('CFM-73287', 'INV-73209', '21312312', 'Randi', 4500000, 'imk_jadwal_test.png', '2019-08-08 21:08:07'),
('CFM-95038', 'INV-11376', '11551102648', 'Jihad Benastey', 1230000, '430scuderia.jpg', '2019-08-05 15:50:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_pengguna`
--

CREATE TABLE `sipesan_pengguna` (
  `pengguna_id` int NOT NULL,
  `pengguna_username` varchar(255) NOT NULL,
  `pengguna_password` varchar(255) NOT NULL,
  `pengguna_nama` varchar(255) DEFAULT NULL,
  `pengguna_nomor_hp` varchar(20) DEFAULT NULL,
  `pengguna_email` varchar(255) DEFAULT NULL,
  `pengguna_level` enum('administrator','pemesan') NOT NULL,
  `pengguna_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sipesan_pengguna`
--

INSERT INTO `sipesan_pengguna` (`pengguna_id`, `pengguna_username`, `pengguna_password`, `pengguna_nama`, `pengguna_nomor_hp`, `pengguna_email`, `pengguna_level`, `pengguna_date_created`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', NULL, NULL, NULL, 'administrator', '2019-07-18 16:35:32'),
(2, 'pemesan', 'd58910536eed6faa657ba7dbc012534c', 'Randi', '081234567890', 'pemesan@gmail.com', 'pemesan', '2019-07-24 11:05:24'),
(3, 'testing', '7f2ababa423061c509f4923dd04b6cf1', 'nama test', '1234567', 'testing@gmail.com', 'pemesan', '2019-08-11 23:10:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_spanduk`
--

CREATE TABLE `sipesan_spanduk` (
  `spanduk_id` varchar(10) NOT NULL,
  `spanduk_keranjang_id` varchar(10) DEFAULT NULL,
  `spanduk_panjang` double NOT NULL,
  `spanduk_lebar` double NOT NULL,
  `spanduk_bahan` enum('biasa','menengah','bagus') NOT NULL,
  `spanduk_jumlah` int NOT NULL,
  `spanduk_estimasi` int NOT NULL,
  `spanduk_total` int NOT NULL,
  `spanduk_foto` text NOT NULL,
  `spanduk_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sipesan_spanduk`
--

INSERT INTO `sipesan_spanduk` (`spanduk_id`, `spanduk_keranjang_id`, `spanduk_panjang`, `spanduk_lebar`, `spanduk_bahan`, `spanduk_jumlah`, `spanduk_estimasi`, `spanduk_total`, `spanduk_foto`, `spanduk_date_created`) VALUES
('SDK-06729', 'CRT-06729', 2, 2, 'biasa', 2, 10, 160000, 'imk_jadwal_test.png', '2019-08-06 22:52:09'),
('SDK-06767', 'CRT-06729', 3, 1, 'bagus', 2, 3, 210000, 'Screenshot_(6)1.png', '2019-08-06 22:52:47'),
('SDK-10688', 'CRT-10688', 3, 1, 'menengah', 2, 12, 180000, 'Screenshot_(6)2.png', '2019-08-06 23:58:08'),
('SDK-69598', 'CRT-69598', 2, 3, 'menengah', 1, 12, 180000, 'Screenshot_(6).png', '2019-07-27 02:33:18'),
('SDK-69692', 'CRT-69598', 5, 7, 'menengah', 1, 4, 1050000, 'Screenshot_(1)1.png', '2019-07-27 02:34:52'),
('SDK-73166', 'CRT-73166', 10, 5, 'menengah', 3, 10, 4500000, 'imk_jadwal_test1.png', '2019-08-08 21:06:06'),
('SDK-75430', 'CRT-75430', 10, 5, 'biasa', 2, 10, 2000000, 'Screenshot_(3).png', '2019-08-08 21:43:50'),
('SDK-81225', 'CRT-81166', 1, 0.4, 'biasa', 1, 10, 8000, 'Screenshot_(1)2.png', '2019-08-12 10:40:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipesan_stiker`
--

CREATE TABLE `sipesan_stiker` (
  `stiker_id` varchar(10) NOT NULL,
  `stiker_keranjang_id` varchar(10) NOT NULL,
  `stiker_panjang` double NOT NULL,
  `stiker_lebar` double NOT NULL,
  `stiker_bahan` enum('biasa','bagus') NOT NULL,
  `stiker_jumlah` int NOT NULL,
  `stiker_estimasi` int NOT NULL,
  `stiker_total` int NOT NULL,
  `stiker_foto` text NOT NULL,
  `stiker_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sipesan_stiker`
--

INSERT INTO `sipesan_stiker` (`stiker_id`, `stiker_keranjang_id`, `stiker_panjang`, `stiker_lebar`, `stiker_bahan`, `stiker_jumlah`, `stiker_estimasi`, `stiker_total`, `stiker_foto`, `stiker_date_created`) VALUES
('SKR-22758', 'CRT-75430', 2, 2, 'bagus', 2, 10, 760000, 'Screenshot_(3).png', '2019-08-11 18:25:58'),
('SKR-81166', 'CRT-81166', 1, 0.4, 'biasa', 1, 10, 30000, 'Screenshot_(2)1.png', '2019-08-12 10:39:26');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sipesan_brosur`
--
ALTER TABLE `sipesan_brosur`
  ADD PRIMARY KEY (`brosur_id`),
  ADD KEY `brosur_keranjang_id` (`brosur_keranjang_id`);

--
-- Indeks untuk tabel `sipesan_faktur`
--
ALTER TABLE `sipesan_faktur`
  ADD PRIMARY KEY (`faktur_id`),
  ADD KEY `faktur_keranjang_id` (`faktur_keranjang_id`);

--
-- Indeks untuk tabel `sipesan_kartu`
--
ALTER TABLE `sipesan_kartu`
  ADD PRIMARY KEY (`kartu_id`),
  ADD KEY `kartu_keranjang_id` (`kartu_keranjang_id`);

--
-- Indeks untuk tabel `sipesan_keranjang`
--
ALTER TABLE `sipesan_keranjang`
  ADD PRIMARY KEY (`keranjang_id`),
  ADD KEY `keranjang_pengguna_id` (`keranjang_pengguna_id`);

--
-- Indeks untuk tabel `sipesan_konfirmasi`
--
ALTER TABLE `sipesan_konfirmasi`
  ADD PRIMARY KEY (`konfirmasi_id`),
  ADD KEY `konfirmasi_faktur_id` (`konfirmasi_faktur_id`);

--
-- Indeks untuk tabel `sipesan_pengguna`
--
ALTER TABLE `sipesan_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indeks untuk tabel `sipesan_spanduk`
--
ALTER TABLE `sipesan_spanduk`
  ADD PRIMARY KEY (`spanduk_id`),
  ADD KEY `spanduk_keranjang_id` (`spanduk_keranjang_id`);

--
-- Indeks untuk tabel `sipesan_stiker`
--
ALTER TABLE `sipesan_stiker`
  ADD PRIMARY KEY (`stiker_id`),
  ADD KEY `stiker_keranjang_id` (`stiker_keranjang_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sipesan_pengguna`
--
ALTER TABLE `sipesan_pengguna`
  MODIFY `pengguna_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
