-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Apr 2021 pada 14.55
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_blue`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `backset`
--

CREATE TABLE `backset` (
  `url` varchar(100) NOT NULL,
  `sessiontime` varchar(4) DEFAULT NULL,
  `footer` varchar(50) DEFAULT NULL,
  `themesback` varchar(2) DEFAULT NULL,
  `responsive` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `backset`
--

INSERT INTO `backset` (`url`, `sessiontime`, `footer`, `themesback`, `responsive`) VALUES
('https://localhost/inventoryblue', '', '', '1', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kode` varchar(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `hargabeli` int(11) DEFAULT NULL,
  `hargajual` int(11) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `terjual` int(11) DEFAULT NULL,
  `terbeli` int(11) DEFAULT NULL,
  `sisa` int(11) DEFAULT NULL,
  `no` int(11) NOT NULL,
  `satuan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kode`, `nama`, `hargabeli`, `hargajual`, `keterangan`, `kategori`, `terjual`, `terbeli`, `sisa`, `no`, `satuan`) VALUES
('0001', 'Packet GlamShime Gold Series | Banyaknya 1', 0, 315000, 'Packet Gold Series Dengan Minimum Order 1 Packet', '0001', 0, 0, 0, 1, '0001'),
('0002', 'Packet GlamShime Gold Series | Banyaknya 3', 0, 295000, 'Packet Gold Series Dengan Minimum Order 3 Packet', '0001', 0, 0, 0, 2, '0001'),
('0003', 'Packet GlamShime Gold Series | Banyaknya 6', 0, 285000, 'Packet Gold Series Dengan Minimum Order 6 Packet', '0001', 0, 0, 0, 3, '0001'),
('0004', 'Packet GlamShime Gold Series | Banyaknya 12', 0, 275000, 'Packet Gold Series Dengan Minimum Order 12 Packet', '0001', 0, 0, 0, 4, '0001'),
('0005', 'Packet GlamShime Gold Series | Banyaknya 24', 0, 265000, 'Packet Gold Series Dengan Minimum Order 24 Packet', '0001', 0, 0, 0, 5, '0001'),
('0006', 'Packet GlamShime Gold Series | Banyaknya 50', 0, 255000, 'Packet Gold Series Dengan Minimum Order 50 Packet', '0001', 0, 0, 0, 6, '0001'),
('0007', 'Packet GlamShime Gold Series | Banyaknya 100', 0, 250000, 'Packet Gold Series Dengan Minimum Order 100 Packet', '0001', 0, 0, 0, 7, '0001'),
('0008', 'Packet GlamShime Gold Series | Banyaknya 200', 0, 245000, 'Packet Gold Series Dengan Minimum Order 200 Packet', '0001', 0, 0, 0, 8, '0001'),
('0009', 'Packet GlamShime Gold Series | Banyaknya 500', 0, 240000, 'Packet Gold Series Dengan Minimum Order 500 Packet', '0001', 0, 0, 0, 9, '0001'),
('0010', 'Packet GlamShime Gold Series | Banyaknya 1000', 0, 235000, 'Packet Gold Series Dengan Minimum Order 1000 Packet', '0001', 0, 0, 0, 10, '0001'),
('0011', 'Packet GlamShime Gold Series | Banyaknya 3000', 0, 225000, 'Packet Gold Series Dengan Minimum Order 3000 Packet', '0001', 0, 0, 0, 11, '0001'),
('0012', 'Gold Series Daily Day Cream With Hyluronic Acid | Banyaknya 1', 0, 95000, 'Gold Series Daily Day Cream With Hyluronic Acid | MO 1', '0001', 0, 0, 0, 12, '0002'),
('0013', 'Gold Series Daily Day Cream With Hyluronic Acid | Banyaknya 6', 0, 90000, 'Gold Series Daily Day Cream With Hyluronic Acid | MO 6', '0001', 0, 0, 0, 13, '0002'),
('0014', 'Gold Series Daily Day Cream With Hyluronic Acid | Banyaknya 12', 0, 85000, 'Gold Series Daily Day Cream With Hyluronic Acid | MO 12', '0001', 0, 0, 0, 14, '0002'),
('0015', 'Gold Series Daily Day Cream With Hyluronic Acid | Banyaknya 24', 0, 80000, 'Gold Series Daily Day Cream With Hyluronic Acid | MO 24', '0001', 0, 0, 0, 15, '0002'),
('0016', 'Gold Series Daily Day Cream With Hyluronic Acid | Banyaknya 50', 0, 75000, 'Gold Series Daily Day Cream With Hyluronic Acid | MO 50', '0001', 0, 0, 0, 16, '0002'),
('0017', 'Gold Series Night Cream | Banyaknya 1', 0, 120000, 'Gold Series Night Cream | MO 1', '0001', 0, 0, 0, 17, '0002'),
('0018', 'Gold Series Night Cream | Banyaknya 6', 0, 105000, 'Gold Series Night Cream | MO 6', '0001', 0, 0, 0, 18, '0002'),
('0019', 'Gold Series Night Cream | Banyaknya 12', 0, 100000, 'Gold Series Night Cream | MO 12', '0001', 0, 0, 0, 19, '0002'),
('0020', 'Gold Series Night Cream | Banyaknya 24', 0, 95000, 'Gold Series Night Cream | MO 24', '0001', 0, 0, 0, 20, '0002'),
('0021', 'Gold Series Night Cream | Banyaknya 50', 0, 90000, 'Gold Series Night Cream | MO 50', '0001', 0, 0, 0, 21, '0002'),
('0022', 'Gold Series Night Cream | Banyaknya 100', 0, 85000, 'Gold Series Night Cream | MO 100', '0001', 0, 0, 0, 22, '0002'),
('0023', 'Gold Series Night Cream | Banyaknya 250', 0, 82000, 'Gold Series Night Cream | MO 250', '0001', 0, 0, 0, 23, '0002'),
('0024', 'Gold Series Skin Toner Centella Asiatica | Banyaknya 1', 0, 100000, 'Gold Series Skin Toner Centella Asiatica | MO 1', '0001', 0, 0, 0, 24, '0002'),
('0025', 'Gold Series Skin Toner Centella Asiatica | Banyaknya 6', 0, 90000, 'Gold Series Skin Toner Centella Asiatica | MO 6', '0001', 0, 0, 0, 25, '0002'),
('0026', 'Gold Series Skin Toner Centella Asiatica | Banyaknya 12', 0, 85000, 'Gold Series Skin Toner Centella Asiatica | MO 12', '0001', 0, 0, 0, 26, '0002'),
('0027', 'Gold Series Skin Toner Centella Asiatica | Banyaknya 24', 0, 80000, 'Gold Series Skin Toner Centella Asiatica | MO 24', '0001', 0, 0, 0, 27, '0002'),
('0028', 'Gold Series Skin Toner Centella Asiatica | Banyaknya 50', 0, 75000, 'Gold Series Skin Toner Centella Asiatica | MO 50', '0001', 0, 0, 0, 28, '0002'),
('0029', 'Gold Series Skin Toner Centella Asiatica | Banyaknya 100', 0, 65000, 'Gold Series Skin Toner Centella Asiatica | MO 100', '0001', 0, 0, 0, 29, '0002'),
('0030', 'Gold Series Skin Toner Centella Asiatica | Banyaknya 250', 0, 62000, 'Gold Series Skin Toner Centella Asiatica | MO 250', '0001', 0, 0, 0, 30, '0002'),
('0031', 'Gold Series Brightening & Moisturizing Facial Wash | Banyaknya 1', 0, 95000, 'Gold Series Brightening & Moisturizing Facial Wash | MO 1', '0001', 0, 0, 0, 31, '0002'),
('0032', 'Gold Series Brightening & Moisturizing Facial Wash | Banyaknya 6', 0, 85000, 'Gold Series Brightening & Moisturizing Facial Wash | MO 6', '0001', 0, 0, 0, 32, '0002'),
('0033', 'Gold Series Brightening & Moisturizing Facial Wash | Banyaknya 12', 0, 80000, 'Gold Series Brightening & Moisturizing Facial Wash | MO 12', '0001', 0, 0, 0, 33, '0002'),
('0034', 'Gold Series Brightening & Moisturizing Facial Wash | Banyaknya 24', 0, 75000, 'Gold Series Brightening & Moisturizing Facial Wash | MO 24', '0001', 0, 0, 0, 34, '0002'),
('0035', 'Gold Series Brightening & Moisturizing Facial Wash | Banyaknya 50', 0, 70000, 'Gold Series Brightening & Moisturizing Facial Wash | MO 50', '0001', 0, 0, 0, 35, '0002'),
('0036', 'Glamshine Brightening Vit C | Banyaknya 1', 0, 135000, 'Glamshine Brightening Vit C | MO 1', '0002', 0, 0, 0, 36, '0002'),
('0037', 'Glamshine Brightening Vit C | Banyaknya 3', 0, 115000, 'Glamshine Brightening Vit C | MO 3', '0002', 0, 0, 0, 37, '0002'),
('0038', 'Glamshine Brightening Vit C | Banyaknya 6', 0, 110000, 'Glamshine Brightening Vit C | MO 6', '0002', 0, 0, 0, 38, '0002'),
('0039', 'Glamshine Brightening Vit C | Banyaknya 12', 0, 100000, 'Glamshine Brightening Vit C | MO 12', '0002', 0, 0, 0, 39, '0002'),
('0040', 'Glamshine Brightening Vit C | Banyaknya 24', 0, 95000, 'Glamshine Brightening Vit C | MO 24', '0002', 0, 0, 0, 40, '0002'),
('0041', 'Glamshine Brightening Vit C | Banyaknya 50', 0, 90000, 'Glamshine Brightening Vit C | MO 50', '0002', 0, 0, 0, 41, '0002'),
('0042', 'Glamshine Brightening Vit C | Banyaknya 100', 0, 80000, 'Glamshine Brightening Vit C | MO 100', '0002', 0, 0, 0, 42, '0002'),
('0043', 'Glamshine Brightening Vit C | Banyaknya 250', 0, 75000, 'Glamshine Brightening Vit C | MO 250', '0002', 0, 0, 0, 43, '0002'),
('0044', 'Glamshine Brightening Vit C | Banyaknya 500', 0, 70000, 'Glamshine Brightening Vit C | MO 500', '0002', 0, 0, 0, 44, '0002'),
('0045', 'Glamshine Brightening Vit C | Banyaknya 1000', 0, 68000, 'Glamshine Brightening Vit C | MO 1000', '0002', 0, 0, 0, 45, '0002'),
('0046', 'Glamshine Acne Serum | Banyaknya 1', 0, 130000, 'Glamshine Acne Serum | MO 1', '0002', 0, 0, 0, 46, '0002'),
('0047', 'Glamshine Acne Serum | Banyaknya 3', 0, 115000, 'Glamshine Acne Serum | MO 3', '0002', 0, 0, 0, 47, '0002'),
('0048', 'Glamshine Acne Serum | Banyaknya 6', 0, 110000, 'Glamshine Acne Serum | MO 6', '0002', 0, 0, 0, 48, '0002'),
('0049', 'Glamshine Acne Serum | Banyaknya 12', 0, 100000, 'Glamshine Acne Serum | MO 12', '0002', 0, 0, 0, 49, '0002'),
('0050', 'Glamshine Acne Serum | Banyaknya 24', 0, 95000, 'Glamshine Acne Serum | MO 24', '0002', 0, 0, 0, 50, '0002'),
('0051', 'Glamshine Acne Serum | Banyaknya 50', 0, 90000, 'Glamshine Acne Serum | MO 50', '0002', 0, 0, 0, 51, '0002'),
('0052', 'Glamshine Acne Serum | Banyaknya 100', 0, 80000, 'Glamshine Acne Serum | MO 100', '0002', 0, 0, 0, 52, '0002'),
('0053', 'Glamshine Acne Serum | Banyaknya 250', 0, 75000, 'Glamshine Acne Serum | MO 250', '0002', 0, 0, 0, 53, '0002'),
('0054', 'Glamshine Acne Serum | Banyaknya 500', 0, 70000, 'Glamshine Acne Serum | MO 500', '0002', 0, 0, 0, 54, '0002'),
('0055', 'Glamshine Acne Serum | Banyaknya 1000', 0, 68000, 'Glamshine Acne Serum | MO 1000', '0002', 0, 0, 0, 55, '0002'),
('0056', 'EE Lightening Cream | Banyaknya 1', 0, 125000, 'EE Lightening Cream | MO 1', '0002', 0, 0, 0, 56, '0002'),
('0057', 'EE Lightening Cream | Banyaknya 3', 0, 110000, 'EE Lightening Cream | MO 3', '0002', 0, 0, 0, 57, '0002'),
('0058', 'EE Lightening Cream | Banyaknya 6', 0, 105000, 'EE Lightening Cream | MO 6', '0002', 0, 0, 0, 58, '0002'),
('0059', 'EE Lightening Cream | Banyaknya 12', 0, 100000, 'EE Lightening Cream | MO 12', '0002', 0, 0, 0, 59, '0002'),
('0060', 'EE Lightening Cream | Banyaknya 60', 0, 95000, 'EE Lightening Cream | MO 60', '0002', 0, 0, 0, 60, '0002'),
('0061', 'EE Lightening Cream | Banyaknya 120', 0, 90000, 'EE Lightening Cream | MO 120', '0002', 0, 0, 0, 61, '0002'),
('0062', 'EE Lightening Cream | Banyaknya 250', 0, 85000, 'EE Lightening Cream | MO 250', '0002', 0, 0, 0, 62, '0002'),
('0063', 'EE Lightening Cream | Banyaknya 500', 0, 80000, 'EE Lightening Cream | MO 500', '0002', 0, 0, 0, 63, '0002'),
('0064', 'EE Lightening Cream | Banyaknya 1000', 0, 75000, 'EE Lightening Cream | MO 1000', '0002', 0, 0, 0, 64, '0002'),
('0065', 'Glamshine Brightening Flower Gel | Banyaknya 1', 0, 170000, 'Glamshine Brightening Flower Gel | MO 1', '0002', 0, 0, 0, 65, '0002'),
('0066', 'Glamshine Brightening Flower Gel | Banyaknya 3', 0, 145000, 'Glamshine Brightening Flower Gel | MO 3', '0002', 0, 0, 0, 66, '0002'),
('0067', 'Glamshine Brightening Flower Gel | Banyaknya 6', 0, 135000, 'Glamshine Brightening Flower Gel | MO 6', '0002', 0, 0, 0, 67, '0002'),
('0068', 'Glamshine Brightening Flower Gel | Banyaknya 12', 0, 120000, 'Glamshine Brightening Flower Gel | MO 12', '0002', 0, 0, 0, 68, '0002'),
('0069', 'Glamshine Brightening Flower Gel | Banyaknya 24', 0, 115000, 'Glamshine Brightening Flower Gel | MO 24', '0002', 0, 0, 0, 69, '0002'),
('0070', 'Glamshine Brightening Flower Gel | Banyaknya 50', 0, 110000, 'Glamshine Brightening Flower Gel | MO 50', '0002', 0, 0, 0, 70, '0002'),
('0071', 'Glamshine Brightening Flower Gel | Banyaknya 100', 0, 105000, 'Glamshine Brightening Flower Gel | MO 100', '0002', 0, 0, 0, 71, '0002'),
('0072', 'Glamshine Brightening Flower Gel | Banyaknya 250', 0, 100000, 'Glamshine Brightening Flower Gel | MO 250', '0002', 0, 0, 0, 72, '0002'),
('0073', 'Glamshine Brightening Flower Gel | Banyaknya 500', 0, 95000, 'Glamshine Brightening Flower Gel | MO 500', '0002', 0, 0, 0, 73, '0002'),
('0074', 'Glamshine Brightening Flower Gel | Banyaknya 1000', 0, 90000, 'Glamshine Brightening Flower Gel | MO 1000', '0002', 0, 0, 0, 74, '0002'),
('0075', 'Glamshine Premium Gold Essence | Banyaknya 1', 0, 175000, 'Glamshine Premium Gold Essence | MO 1', '0002', 0, 0, 0, 75, '0002'),
('0076', 'Glamshine Premium Gold Essence | Banyaknya 3', 0, 150000, 'Glamshine Premium Gold Essence | MO 3', '0002', 0, 0, 0, 76, '0002'),
('0077', 'Glamshine Premium Gold Essence | Banyaknya 6', 0, 145000, 'Glamshine Premium Gold Essence | MO 6', '0002', 0, 0, 0, 77, '0002'),
('0078', 'Glamshine Premium Gold Essence | Banyaknya 12', 0, 135000, 'Glamshine Premium Gold Essence | MO 12', '0002', 0, 0, 0, 78, '0002'),
('0079', 'Glamshine Premium Gold Essence | Banyaknya 24', 0, 130000, 'Glamshine Premium Gold Essence | MO 24', '0002', 0, 0, 0, 79, '0002'),
('0080', 'Glamshine Premium Gold Essence | Banyaknya 50', 0, 125000, 'Glamshine Premium Gold Essence | MO 50', '0002', 0, 0, 0, 80, '0002'),
('0081', 'Glamshine Premium Gold Essence | Banyaknya 100', 0, 115000, 'Glamshine Premium Gold Essence | MO 100', '0002', 0, 0, 0, 81, '0002'),
('0082', 'Glamshine Premium Gold Essence | Banyaknya 250', 0, 110000, 'Glamshine Premium Gold Essence | MO 250', '0002', 0, 0, 0, 82, '0002'),
('0083', 'Glamshine Premium Gold Essence | Banyaknya 500', 0, 105000, 'Glamshine Premium Gold Essence | MO 500', '0002', 0, 0, 0, 83, '0002'),
('0084', 'Glamshine Premium Gold Essence | Banyaknya 1000', 0, 100000, 'Glamshine Premium Gold Essence | MO 1000', '0002', 0, 0, 0, 84, '0002'),
('0085', 'Glamshine Brightening Feeling Gel | Banyaknya 1', 0, 150000, 'Glamshine Brightening Feeling Gel | MO 1', '0002', 0, 0, 0, 85, '0002'),
('0086', 'Glamshine Brightening Feeling Gel | Banyaknya 3', 0, 135000, 'Glamshine Brightening Feeling Gel | MO 3', '0002', 0, 0, 0, 86, '0002'),
('0087', 'Glamshine Brightening Feeling Gel | Banyaknya 6', 0, 130000, 'Glamshine Brightening Feeling Gel | MO 6', '0002', 0, 0, 0, 87, '0002'),
('0088', 'Glamshine Brightening Feeling Gel | Banyaknya 12', 0, 125000, 'Glamshine Brightening Feeling Gel | MO 12', '0002', 0, 0, 0, 88, '0002'),
('0089', 'Glamshine Brightening Feeling Gel | Banyaknya 24', 0, 115000, 'Glamshine Brightening Feeling Gel | MO 24', '0002', 0, 0, 0, 89, '0002'),
('0090', 'Glamshine Brightening Feeling Gel | Banyaknya 50', 0, 105000, 'Glamshine Brightening Feeling Gel | MO 50', '0002', 0, 0, 0, 90, '0002'),
('0091', 'Glamshine Brightening Feeling Gel | Banyaknya 100', 0, 95000, 'Glamshine Brightening Feeling Gel | MO 100', '0002', 0, 0, 0, 91, '0002'),
('0092', 'Glamshine Brightening Feeling Gel | Banyaknya 250', 0, 90000, 'Glamshine Brightening Feeling Gel | MO 250', '0002', 0, 0, 0, 92, '0002'),
('0093', 'Glamshine Brightening Feeling Gel | Banyaknya 500', 0, 85000, 'Glamshine Brightening Feeling Gel | MO 500', '0002', 0, 0, 0, 93, '0002'),
('0094', 'Glamshine Brightening Feeling Gel | Banyaknya 1000', 0, 80000, 'Glamshine Brightening Feeling Gel | MO 1000', '0002', 0, 0, 0, 94, '0002'),
('0095', 'Glamshine Brightening Body Lotion | Banyaknya 1', 0, 125000, 'Glamshine Brightening Body Lotion | MO 1', '0002', 0, 0, 0, 95, '0002'),
('0096', 'Glamshine Brightening Body Lotion | Banyaknya 6', 0, 105000, 'Glamshine Brightening Body Lotion | MO 6', '0002', 0, 0, 0, 96, '0002'),
('0097', 'Glamshine Brightening Body Lotion | Banyaknya 12', 0, 100000, 'Glamshine Brightening Body Lotion | MO 12', '0002', 0, 0, 0, 97, '0002'),
('0098', 'Glamshine Brightening Body Lotion | Banyaknya 24', 0, 95000, 'Glamshine Brightening Body Lotion | MO 24', '0002', 0, 0, 0, 98, '0002'),
('0099', 'Glamshine Brightening Body Lotion | Banyaknya 50', 0, 90000, 'Glamshine Brightening Body Lotion | MO 50', '0002', 0, 0, 0, 99, '0002'),
('0100', 'Glamshine Brightening Body Lotion | Banyaknya 100', 0, 80000, 'Glamshine Brightening Body Lotion | MO 100', '0002', 0, 0, 0, 100, '0002'),
('0101', 'Glamshine Brightening Body Lotion | Banyaknya 250', 0, 70000, 'Glamshine Brightening Body Lotion | MO 250', '0002', 0, 0, 0, 101, '0002'),
('0102', 'Glamshine Brightening Body Lotion | Banyaknya 500', 0, 65000, 'Glamshine Brightening Body Lotion | MO 500', '0002', 0, 0, 0, 102, '0002'),
('0103', 'Glamshine Mask Feel | Banyaknya 1', 0, 140000, 'Glamshine Mask Feel | MO 1', '0002', 0, 0, 0, 103, '0002'),
('0104', 'Glamshine Mask Feel | Banyaknya 3', 0, 125000, 'Glamshine Mask Feel | MO 3', '0002', 0, 0, 0, 104, '0002'),
('0105', 'Glamshine Mask Feel | Banyaknya 6', 0, 120000, 'Glamshine Mask Feel | MO 6', '0002', 0, 0, 0, 105, '0002'),
('0106', 'Glamshine Mask Feel | Banyaknya 12', 0, 115000, 'Glamshine Mask Feel | MO 12', '0002', 0, 0, 0, 106, '0002'),
('0107', 'Glamshine Mask Feel | Banyaknya 24', 0, 105000, 'Glamshine Mask Feel | MO 24', '0002', 0, 0, 0, 107, '0002'),
('0108', 'Glamshine Mask Feel | Banyaknya 50', 0, 95000, 'Glamshine Mask Feel | MO 50', '0002', 0, 0, 0, 108, '0002'),
('0109', 'Glamshine Mask Feel | Banyaknya 100', 0, 85000, 'Glamshine Mask Feel | MO 100', '0002', 0, 0, 0, 109, '0002'),
('0110', 'Glamshine Mask Feel | Banyaknya 250', 0, 80000, 'Glamshine Mask Feel | MO 250', '0002', 0, 0, 0, 110, '0002'),
('0111', 'Glamshine Mask Feel | Banyaknya 500', 0, 75000, 'Glamshine Mask Feel | MO 500', '0002', 0, 0, 0, 111, '0002'),
('0112', 'Glamshine Mask Feel | Banyaknya 1000', 0, 70000, 'Glamshine Mask Feel | MO 1000', '0002', 0, 0, 0, 112, '0002'),
('0113', 'Glamshine Primer Hydrating | Banyaknya 1', 0, 150000, 'Glamshine Primer Hydrating | MO 1', '0002', 0, 0, 0, 113, '0002'),
('0114', 'Glamshine Primer Hydrating | Banyaknya 3', 0, 135000, 'Glamshine Primer Hydrating | MO 3', '0002', 0, 0, 0, 114, '0002'),
('0115', 'Glamshine Primer Hydrating | Banyaknya 6', 0, 130000, 'Glamshine Primer Hydrating | MO 6', '0002', 0, 0, 0, 115, '0002'),
('0116', 'Glamshine Primer Hydrating | Banyaknya 12', 0, 125000, 'Glamshine Primer Hydrating | MO 12', '0002', 0, 0, 0, 116, '0002'),
('0117', 'Glamshine Primer Hydrating | Banyaknya 24', 0, 115000, 'Glamshine Primer Hydrating | MO 24', '0002', 0, 0, 0, 117, '0002'),
('0118', 'Glamshine Primer Hydrating | Banyaknya 50', 0, 105000, 'Glamshine Primer Hydrating | MO 50', '0002', 0, 0, 0, 118, '0002'),
('0119', 'Glamshine Primer Hydrating | Banyaknya 100', 0, 95000, 'Glamshine Primer Hydrating | MO 100', '0002', 0, 0, 0, 119, '0002'),
('0120', 'Glamshine Primer Hydrating | Banyaknya 500', 0, 85000, 'Glamshine Primer Hydrating | MO 500', '0002', 0, 0, 0, 120, '0002'),
('0121', 'Glamshine Primer Hydrating | Banyaknya 1000', 0, 82000, 'Glamshine Primer Hydrating | MO 1000', '0002', 0, 0, 0, 121, '0002'),
('0122', 'Glamshine Facial Spray | Banyaknya 1', 0, 85000, 'Glamshine Facial Spray | MO 1', '0002', 0, 0, 0, 122, '0002'),
('0123', 'Glamshine Facial Spray | Banyaknya 3', 0, 77000, 'Glamshine Facial Spray | MO 3', '0002', 0, 0, 0, 123, '0002'),
('0124', 'Glamshine Facial Spray | Banyaknya 6', 0, 74000, 'Glamshine Facial Spray | MO 6', '0002', 0, 0, 0, 124, '0002'),
('0125', 'Glamshine Facial Spray | Banyaknya 12', 0, 70000, 'Glamshine Facial Spray | MO 12', '0002', 0, 0, 0, 125, '0002'),
('0126', 'Glamshine Facial Spray | Banyaknya 50', 0, 65000, 'Glamshine Facial Spray | MO 50', '0002', 0, 0, 0, 126, '0002'),
('0127', 'Glamshine Facial Spray | Banyaknya 100', 0, 60000, 'Glamshine Facial Spray | MO 100', '0002', 0, 0, 0, 127, '0002'),
('0128', 'Glamshine Facial Spray | Banyaknya 250', 0, 55000, 'Glamshine Facial Spray | MO 250', '0002', 0, 0, 0, 128, '0002'),
('0129', 'Glamshine Kisses Glam Mate | Banyaknya 1', 0, 100000, 'Glamshine Kisses Glam Mate | MO 1', '0002', 0, 0, 0, 129, '0002'),
('0130', 'Glamshine Kisses Glam Mate | Banyaknya 6', 0, 85000, 'Glamshine Kisses Glam Mate | MO 6', '0002', 0, 0, 0, 130, '0002'),
('0131', 'Glamshine Kisses Glam Mate | Banyaknya 12', 0, 80000, 'Glamshine Kisses Glam Mate | MO 12', '0002', 0, 0, 0, 131, '0002'),
('0132', 'Glamshine Kisses Glam Mate | Banyaknya 24', 0, 75000, 'Glamshine Kisses Glam Mate | MO 24', '0002', 0, 0, 0, 132, '0002'),
('0133', 'Glamshine Kisses Glam Mate | Banyaknya 50', 0, 68000, 'Glamshine Kisses Glam Mate | MO 50', '0002', 0, 0, 0, 133, '0002'),
('0134', 'Glamshine Kisses Glam Mate | Banyaknya 100', 0, 63000, 'Glamshine Kisses Glam Mate | MO 100', '0002', 0, 0, 0, 134, '0002'),
('0135', 'Toner Exfloating | Banyaknya 1', 0, 140000, 'Toner Exfloating | MO 1', '0002', 0, 0, 0, 135, '0002'),
('0136', 'Toner Exfloating | Banyaknya 3', 0, 120000, 'Toner Exfloating | MO 3', '0002', 0, 0, 0, 136, '0002'),
('0137', 'Toner Exfloating | Banyaknya 6', 0, 115000, 'Toner Exfloating | MO 6', '0002', 0, 0, 0, 137, '0002'),
('0138', 'Toner Exfloating | Banyaknya 12', 0, 105000, 'Toner Exfloating | MO 12', '0002', 0, 0, 0, 138, '0002'),
('0139', 'Toner Exfloating | Banyaknya 24', 0, 100000, 'Toner Exfloating | MO 24', '0002', 0, 0, 0, 139, '0002'),
('0140', 'Toner Exfloating | Banyaknya 50', 0, 90000, 'Toner Exfloating | MO 50', '0002', 0, 0, 0, 140, '0002'),
('0141', 'Toner Exfloating | Banyaknya 250', 0, 85000, 'Toner Exfloating | MO 250', '0002', 0, 0, 0, 141, '0002'),
('0142', 'LC Day Cream | Banyaknya 1', 0, 100000, 'LC Day Cream | MO 1', '0003', 0, 0, 0, 142, '0002'),
('0143', 'LC Day Cream | Banyaknya 3', 0, 90000, 'LC Day Cream | MO 3', '0003', 0, 0, 0, 143, '0002'),
('0144', 'LC Day Cream | Banyaknya 6', 0, 85000, 'LC Day Cream | MO 6', '0003', 0, 0, 0, 144, '0002'),
('0145', 'LC Day Cream | Banyaknya 12', 0, 75000, 'LC Day Cream | MO 12', '0003', 0, 0, 0, 145, '0002'),
('0146', 'LC Night Cream | Banyaknya 1', 0, 90000, 'LC Night Cream | MO 1', '0003', 0, 0, 0, 146, '0002'),
('0147', 'LC Night Cream | Banyaknya 3', 0, 85000, 'LC Night Cream | MO 3', '0003', 0, 0, 0, 147, '0002'),
('0148', 'LC Night Cream | Banyaknya 6', 0, 80000, 'LC Night Cream | MO 6', '0003', 0, 0, 0, 148, '0002'),
('0149', 'LC Night Cream | Banyaknya 12', 0, 75000, 'LC Night Cream | MO 12', '0003', 0, 0, 0, 149, '0002'),
('0150', 'LC Facial Wash | Banyaknya 1', 0, 80000, 'LC Facial Wash | MO 1', '0003', 0, 0, 0, 150, '0002'),
('0151', 'LC Facial Wash | Banyaknya 3', 0, 70000, 'LC Facial Wash | MO 3', '0003', 0, 0, 0, 151, '0002'),
('0152', 'LC Facial Wash | Banyaknya 6', 0, 65000, 'LC Facial Wash | MO 6', '0003', 0, 0, 0, 152, '0002'),
('0153', 'LC Facial Wash | Banyaknya 12', 0, 55000, 'LC Facial Wash | MO 12', '0003', 0, 0, 0, 153, '0002'),
('0154', 'LC Toner | Banyaknya 1', 0, 90000, 'LC Toner | MO 1', '0003', 0, 0, 0, 154, '0002'),
('0155', 'LC Toner | Banyaknya 3', 0, 80000, 'LC Toner | MO 3', '0003', 0, 0, 0, 155, '0002'),
('0156', 'LC Toner | Banyaknya 6', 0, 75000, 'LC Toner | MO 6', '0003', 0, 0, 0, 156, '0002'),
('0157', 'LC Toner | Banyaknya 12', 0, 65000, 'LC Toner | MO 12', '0003', 0, 0, 0, 157, '0002'),
('0158', 'LC Serum Silky | Banyaknya 1', 0, 150000, 'LC Serum Silky | MO 1', '0004', 0, 0, 0, 158, '0002'),
('0159', 'LC Serum Silky | Banyaknya 3', 0, 125000, 'LC Serum Silky | MO 3', '0004', 0, 0, 0, 159, '0002'),
('0160', 'LC Serum Silky | Banyaknya 6', 0, 120000, 'LC Serum Silky | MO 6', '0004', 0, 0, 0, 160, '0002'),
('0161', 'LC Serum Silky | Banyaknya 12', 0, 115000, 'LC Serum Silky | MO 12', '0004', 0, 0, 0, 161, '0002'),
('0162', 'LC Serum Silky | Banyaknya 25', 0, 110000, 'LC Serum Silky | MO 25', '0004', 0, 0, 0, 162, '0002'),
('0163', 'LC Serum Silky | Banyaknya 50', 0, 105000, 'LC Serum Silky | MO 50', '0004', 0, 0, 0, 163, '0002'),
('0164', 'LC Serum Silky | Banyaknya 100', 0, 100000, 'LC Serum Silky | MO 100', '0004', 0, 0, 0, 164, '0002'),
('0165', 'LC Serum Silky | Banyaknya 200', 0, 95000, 'LC Serum Silky | MO 200', '0004', 0, 0, 0, 165, '0002'),
('0166', 'LC Dark Spot | Banyaknya 1', 0, 125000, 'LC Dark Spot | MO 1', '0004', 0, 0, 0, 166, '0002'),
('0167', 'LC Dark Spot | Banyaknya 3', 0, 105000, 'LC Dark Spot | MO 3', '0004', 0, 0, 0, 167, '0002'),
('0168', 'LC Dark Spot | Banyaknya 6', 0, 105000, 'LC Dark Spot | MO 6', '0004', 0, 0, 0, 168, '0002'),
('0169', 'LC Dark Spot | Banyaknya 12', 0, 100000, 'LC Dark Spot | MO 12', '0004', 0, 0, 0, 169, '0002'),
('0170', 'LC Dark Spot | Banyaknya 25', 0, 95000, 'LC Dark Spot | MO 25', '0004', 0, 0, 0, 170, '0002'),
('0171', 'LC Dark Spot | Banyaknya 50', 0, 90000, 'LC Dark Spot | MO 50', '0004', 0, 0, 0, 171, '0002'),
('0172', 'LC Dark Spot | Banyaknya 100', 0, 85000, 'LC Dark Spot | MO 100', '0004', 0, 0, 0, 172, '0002'),
('0173', 'LC KF Acne | Banyaknya 1', 0, 100000, 'LC KF Acne | MO 1', '0004', 0, 0, 0, 173, '0002'),
('0174', 'LC KF Acne | Banyaknya 3', 0, 85000, 'LC KF Acne | MO 3', '0004', 0, 0, 0, 174, '0002'),
('0175', 'LC KF Acne | Banyaknya 6', 0, 85000, 'LC KF Acne | MO 6', '0004', 0, 0, 0, 175, '0002'),
('0176', 'LC KF Acne | Banyaknya 12', 0, 80000, 'LC KF Acne | MO 12', '0004', 0, 0, 0, 176, '0002'),
('0177', 'LC KF Acne | Banyaknya 25', 0, 75000, 'LC KF Acne | MO 25', '0004', 0, 0, 0, 177, '0002'),
('0178', 'LC KF Acne | Banyaknya 50', 0, 70000, 'LC KF Acne | MO 50', '0004', 0, 0, 0, 178, '0002'),
('0179', 'LC KF Acne | Banyaknya 100', 0, 67000, 'LC KF Acne | MO 100', '0004', 0, 0, 0, 179, '0002'),
('0180', 'LC Vit C KF Derma Plus | Banyaknya 1', 0, 125000, 'LC Vit C KF Derma Plus | MO 1', '0004', 0, 0, 0, 180, '0002'),
('0181', 'LC Vit C KF Derma Plus | Banyaknya 3', 0, 100000, 'LC Vit C KF Derma Plus | MO 3', '0004', 0, 0, 0, 181, '0002'),
('0182', 'LC Vit C KF Derma Plus | Banyaknya 6', 0, 100000, 'LC Vit C KF Derma Plus | MO 6', '0004', 0, 0, 0, 182, '0002'),
('0183', 'LC Vit C KF Derma Plus | Banyaknya 12', 0, 95000, 'LC Vit C KF Derma Plus | MO 12', '0004', 0, 0, 0, 183, '0002'),
('0184', 'LC Vit C KF Derma Plus | Banyaknya 24', 0, 90000, 'LC Vit C KF Derma Plus | MO 24', '0004', 0, 0, 0, 184, '0002'),
('0185', 'LC Vit C KF Derma Plus | Banyaknya 60', 0, 85000, 'LC Vit C KF Derma Plus | MO 60', '0004', 0, 0, 0, 185, '0002'),
('0186', 'LC Vit C KF Derma Plus | Banyaknya 120', 0, 82000, 'LC Vit C KF Derma Plus | MO 120', '0004', 0, 0, 0, 186, '0002'),
('0187', 'LC WK Beauty | Banyaknya 1', 0, 140000, 'LC WK Beauty | MO 1', '0004', 0, 0, 0, 187, '0002'),
('0188', 'LC WK Beauty | Banyaknya 3', 0, 115000, 'LC WK Beauty | MO 3', '0004', 0, 0, 0, 188, '0002'),
('0189', 'LC WK Beauty | Banyaknya 6', 0, 110000, 'LC WK Beauty | MO 6', '0004', 0, 0, 0, 189, '0002'),
('0190', 'LC WK Beauty | Banyaknya 12', 0, 105000, 'LC WK Beauty | MO 12', '0004', 0, 0, 0, 190, '0002'),
('0191', 'LC WK Beauty | Banyaknya 25', 0, 100000, 'LC WK Beauty | MO 25', '0004', 0, 0, 0, 191, '0002'),
('0192', 'LC WK Beauty | Banyaknya 50', 0, 95000, 'LC WK Beauty | MO 50', '0004', 0, 0, 0, 192, '0002'),
('0193', 'LC WK Beauty | Banyaknya 100', 0, 90000, 'LC WK Beauty | MO 100', '0004', 0, 0, 0, 193, '0002'),
('0194', 'LC Pearl Skin | Banyaknya 1', 0, 125000, 'LC Pearl Skin | MO 1', '0004', 0, 0, 0, 194, '0002'),
('0195', 'LC Pearl Skin | Banyaknya 3', 0, 105000, 'LC Pearl Skin | MO 3', '0004', 0, 0, 0, 195, '0002'),
('0196', 'LC Pearl Skin | Banyaknya 6', 0, 105000, 'LC Pearl Skin | MO 6', '0004', 0, 0, 0, 196, '0002'),
('0197', 'LC Pearl Skin | Banyaknya 12', 0, 100000, 'LC Pearl Skin | MO 12', '0004', 0, 0, 0, 197, '0002'),
('0198', 'LC Pearl Skin | Banyaknya 25', 0, 95000, 'LC Pearl Skin | MO 25', '0004', 0, 0, 0, 198, '0002'),
('0199', 'LC Pearl Skin | Banyaknya 50', 0, 90000, 'LC Pearl Skin | MO 50', '0004', 0, 0, 0, 199, '0002'),
('0200', 'LC Pearl Skin | Banyaknya 100', 0, 85000, 'LC Pearl Skin | MO 100', '0004', 0, 0, 0, 200, '0002'),
('0201', 'LC Skin Bee | Banyaknya 1', 0, 150000, 'LC Skin Bee | MO 1', '0004', 0, 0, 0, 201, '0002'),
('0202', 'LC Skin Bee | Banyaknya 3', 0, 120000, 'LC Skin Bee | MO 3', '0004', 0, 0, 0, 202, '0002'),
('0203', 'LC Skin Bee | Banyaknya 6', 0, 120000, 'LC Skin Bee | MO 6', '0004', 0, 0, 0, 203, '0002'),
('0204', 'LC Skin Bee | Banyaknya 12', 0, 110000, 'LC Skin Bee | MO 12', '0004', 0, 0, 0, 204, '0002'),
('0205', 'LC Skin Bee | Banyaknya 25', 0, 105000, 'LC Skin Bee | MO 25', '0004', 0, 0, 0, 205, '0002'),
('0206', 'LC Skin Bee | Banyaknya 50', 0, 100000, 'LC Skin Bee | MO 50', '0004', 0, 0, 0, 206, '0002'),
('0207', 'LC Skin Bee | Banyaknya 100', 0, 95000, 'LC Skin Bee | MO 100', '0004', 0, 0, 0, 207, '0002'),
('0208', 'LC Acne | Banyaknya 1', 0, 88000, 'LC Acne | MO 1', '0004', 0, 0, 0, 208, '0002'),
('0209', 'LC Acne | Banyaknya 3', 0, 75000, 'LC Acne | MO 3', '0004', 0, 0, 0, 209, '0002'),
('0210', 'LC Acne | Banyaknya 6', 0, 73000, 'LC Acne | MO 6', '0004', 0, 0, 0, 210, '0002'),
('0211', 'LC Acne | Banyaknya 12', 0, 68000, 'LC Acne | MO 12', '0004', 0, 0, 0, 211, '0002'),
('0212', 'LC Acne | Banyaknya 24', 0, 63000, 'LC Acne | MO 24', '0004', 0, 0, 0, 212, '0002'),
('0213', 'LC Acne | Banyaknya 50', 0, 58000, 'LC Acne | MO 50', '0004', 0, 0, 0, 213, '0002'),
('0214', 'LC Ee Cream | Banyaknya 1', 0, 110000, 'LC Ee Cream | MO 1', '0004', 0, 0, 0, 214, '0002'),
('0215', 'LC Ee Cream | Banyaknya 3', 0, 95000, 'LC Ee Cream | MO 3', '0004', 0, 0, 0, 215, '0002'),
('0216', 'LC Ee Cream | Banyaknya 6', 0, 90000, 'LC Ee Cream | MO 6', '0004', 0, 0, 0, 216, '0002'),
('0217', 'LC Ee Cream | Banyaknya 12', 0, 85000, 'LC Ee Cream | MO 12', '0004', 0, 0, 0, 217, '0002'),
('0218', 'LC Ee Cream | Banyaknya 50', 0, 80000, 'LC Ee Cream | MO 50', '0004', 0, 0, 0, 218, '0002'),
('0219', 'LC Ee Cream | Banyaknya 100', 0, 77000, 'LC Ee Cream | MO 100', '0004', 0, 0, 0, 219, '0002'),
('0220', 'LC Glowing | Banyaknya 1', 0, 140000, 'LC Glowing | MO 1', '0004', 0, 0, 0, 220, '0002'),
('0221', 'LC Glowing | Banyaknya 3', 0, 125000, 'LC Glowing | MO 3', '0004', 0, 0, 0, 221, '0002'),
('0222', 'LC Glowing | Banyaknya 6', 0, 120000, 'LC Glowing | MO 6', '0004', 0, 0, 0, 222, '0002'),
('0223', 'LC Glowing | Banyaknya 12', 0, 110000, 'LC Glowing | MO 12', '0004', 0, 0, 0, 223, '0002'),
('0224', 'LC Glowing | Banyaknya 24', 0, 105000, 'LC Glowing | MO 24', '0004', 0, 0, 0, 224, '0002'),
('0225', 'LC Glowing | Banyaknya 50', 0, 100000, 'LC Glowing | MO 50', '0004', 0, 0, 0, 225, '0002'),
('0226', 'LC Glowing | Banyaknya 100', 0, 95000, 'LC Glowing | MO 100', '0004', 0, 0, 0, 226, '0002'),
('0227', 'LC Wet | Banyaknya 1', 0, 135000, 'LC Wet | MO 1', '0004', 0, 0, 0, 227, '0002'),
('0228', 'LC Wet | Banyaknya 3', 0, 120000, 'LC Wet | MO 3', '0004', 0, 0, 0, 228, '0002'),
('0229', 'LC Wet | Banyaknya 6', 0, 115000, 'LC Wet | MO 6', '0004', 0, 0, 0, 229, '0002'),
('0230', 'LC Wet | Banyaknya 24', 0, 110000, 'LC Wet | MO 24', '0004', 0, 0, 0, 230, '0002'),
('0231', 'LC Wet | Banyaknya 50', 0, 105000, 'LC Wet | MO 50', '0004', 0, 0, 0, 231, '0002'),
('0232', 'LC Wet | Banyaknya 100', 0, 100000, 'LC Wet | MO 100', '0004', 0, 0, 0, 232, '0002'),
('0233', 'LC HBLC | Banyaknya 1', 0, 210000, 'LC HBLC | MO 1', '0004', 0, 0, 0, 233, '0002'),
('0234', 'LC HBLC | Banyaknya 3', 0, 180000, 'LC HBLC | MO 3', '0004', 0, 0, 0, 234, '0002'),
('0235', 'LC HBLC | Banyaknya 6', 0, 175000, 'LC HBLC | MO 6', '0004', 0, 0, 0, 235, '0002'),
('0236', 'LC HBLC | Banyaknya 12', 0, 170000, 'LC HBLC | MO 12', '0004', 0, 0, 0, 236, '0002'),
('0237', 'LC HBLC | Banyaknya 24', 0, 165000, 'LC HBLC | MO 24', '0004', 0, 0, 0, 237, '0002'),
('0238', 'LC HBLC | Banyaknya 50', 0, 160000, 'LC HBLC | MO 50', '0004', 0, 0, 0, 238, '0002'),
('0239', 'LC HBLC | Banyaknya 100', 0, 160000, 'LC HBLC | MO 100', '0004', 0, 0, 0, 239, '0002'),
('0240', 'LC Glutaskin Yellow | Banyaknya 1', 0, 220000, 'LC Glutaskin Yellow | MO 1', '0004', 0, 0, 0, 240, '0002'),
('0241', 'LC Glutaskin Yellow | Banyaknya 3', 0, 200000, 'LC Glutaskin Yellow | MO 3', '0004', 0, 0, 0, 241, '0002'),
('0242', 'LC Glutaskin Yellow | Banyaknya 6', 0, 190000, 'LC Glutaskin Yellow | MO 6', '0004', 0, 0, 0, 242, '0002'),
('0243', 'LC Glutaskin Yellow | Banyaknya 12', 0, 180000, 'LC Glutaskin Yellow | MO 12', '0004', 0, 0, 0, 243, '0002'),
('0244', 'LC Glutaskin Yellow | Banyaknya 24', 0, 175000, 'LC Glutaskin Yellow | MO 24', '0004', 0, 0, 0, 244, '0002'),
('0245', 'LC Glutaskin Yellow | Banyaknya 50', 0, 170000, 'LC Glutaskin Yellow | MO 50', '0004', 0, 0, 0, 245, '0002'),
('0246', 'LC Glutaskin Yellow | Banyaknya 100', 0, 160000, 'LC Glutaskin Yellow | MO 100', '0004', 0, 0, 0, 246, '0002'),
('0247', 'LC Mask Oceana | Banyaknya 1', 0, 150000, 'LC Mask Oceana | MO 1', '0004', 0, 0, 0, 247, '0002'),
('0248', 'LC Mask Oceana | Banyaknya 3', 0, 130000, 'LC Mask Oceana | MO 3', '0004', 0, 0, 0, 248, '0002'),
('0249', 'LC Mask Oceana | Banyaknya 6', 0, 130000, 'LC Mask Oceana | MO 6', '0004', 0, 0, 0, 249, '0002'),
('0250', 'LC Mask Oceana | Banyaknya 12', 0, 110000, 'LC Mask Oceana | MO 12', '0004', 0, 0, 0, 250, '0002'),
('0251', 'LC Mask Oceana | Banyaknya 24', 0, 100000, 'LC Mask Oceana | MO 24', '0004', 0, 0, 0, 251, '0002'),
('0252', 'LC Berry White Drink | Banyaknya 1', 0, 100000, 'LC Berry White Drink | MO 1', '0004', 0, 0, 0, 252, '0002'),
('0253', 'LC Berry White Drink | Banyaknya 5', 0, 50000, 'LC Berry White Drink | MO 5', '0004', 0, 0, 0, 253, '0002'),
('0254', 'LC Berry White Drink | Banyaknya 10', 0, 50000, 'LC Berry White Drink | MO 10', '0004', 0, 0, 0, 254, '0002'),
('0255', 'LC Berry White Drink | Banyaknya 50', 0, 50000, 'LC Berry White Drink | MO 50', '0004', 0, 0, 0, 255, '0002'),
('0256', 'LC Body Serum | Banyaknya 1', 0, 110000, 'LC Body Serum | MO 1', '0004', 0, 0, 0, 256, '0002'),
('0257', 'LC Body Serum | Banyaknya 3', 0, 90000, 'LC Body Serum | MO 3', '0004', 0, 0, 0, 257, '0002'),
('0258', 'LC Body Serum | Banyaknya 12', 0, 85000, 'LC Body Serum | MO 12', '0004', 0, 0, 0, 258, '0002'),
('0259', 'LC Body Serum | Banyaknya 100', 0, 80000, 'LC Body Serum | MO 100', '0004', 0, 0, 0, 259, '0002'),
('0260', 'LC Spray | Banyaknya 1', 0, 70000, 'LC Spray | MO 1', '0004', 0, 0, 0, 260, '0002'),
('0261', 'LC Spray | Banyaknya 3', 0, 55000, 'LC Spray | MO 3', '0004', 0, 0, 0, 261, '0002'),
('0262', 'LC Spray | Banyaknya 12', 0, 50000, 'LC Spray | MO 12', '0004', 0, 0, 0, 262, '0002'),
('0263', 'LC Spray | Banyaknya 50', 0, 45000, 'LC Spray | MO 50', '0004', 0, 0, 0, 263, '0002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayar`
--

CREATE TABLE `bayar` (
  `nota` varchar(20) NOT NULL,
  `tglbayar` date DEFAULT NULL,
  `bayar` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `kembali` int(11) DEFAULT NULL,
  `keluar` int(11) DEFAULT NULL,
  `kasir` varchar(100) DEFAULT NULL,
  `no` int(11) NOT NULL,
  `kodecust` varchar(30) NOT NULL,
  `jenisbayar` varchar(200) NOT NULL,
  `noRek` varchar(50) DEFAULT NULL,
  `namaRek` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayarecer`
--

CREATE TABLE `bayarecer` (
  `nota` varchar(20) NOT NULL,
  `tglbayar` date DEFAULT NULL,
  `bayar` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `kembali` int(11) DEFAULT NULL,
  `keluar` int(11) DEFAULT NULL,
  `kasir` varchar(100) DEFAULT NULL,
  `no` int(11) NOT NULL,
  `kodecust` varchar(30) NOT NULL,
  `jenisbayar` varchar(200) NOT NULL,
  `noRek` varchar(50) DEFAULT NULL,
  `namaRek` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli`
--

CREATE TABLE `beli` (
  `nota` varchar(20) NOT NULL,
  `tglbeli` date DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `supplier` varchar(20) DEFAULT NULL,
  `kasir` varchar(100) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `chmenu`
--

CREATE TABLE `chmenu` (
  `userjabatan` varchar(20) NOT NULL,
  `menu1` varchar(1) DEFAULT '0',
  `menu2` varchar(1) DEFAULT '0',
  `menu3` varchar(1) DEFAULT '0',
  `menu4` varchar(1) DEFAULT '0',
  `menu5` varchar(1) DEFAULT '0',
  `menu6` varchar(1) DEFAULT '0',
  `menu7` varchar(1) DEFAULT '0',
  `menu8` varchar(1) DEFAULT '0',
  `menu9` varchar(1) DEFAULT '0',
  `menu10` varchar(1) DEFAULT '0',
  `menu11` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chmenu`
--

INSERT INTO `chmenu` (`userjabatan`, `menu1`, `menu2`, `menu3`, `menu4`, `menu5`, `menu6`, `menu7`, `menu8`, `menu9`, `menu10`, `menu11`) VALUES
('admin', '2', '4', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
('kasir', '0', '2', '3', '3', '0', '5', '2', '3', '2', '0', ''),
('marketing', '0', '2', '3', '3', '0', '5', '2', '3', '2', '0', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `kode` varchar(20) NOT NULL,
  `tgldaftar` date DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `alamat` varchar(70) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `nama` varchar(100) DEFAULT NULL,
  `tagline` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `notelp` varchar(20) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`nama`, `tagline`, `alamat`, `notelp`, `signature`, `no`) VALUES
('Bina Widya - Beauty and Care', 'Your Skin is Your Best Accessory, Take Good Care of It', 'Jl. Kavling 3 Ancaran Kuningan Jawa Barat', '+62 856 0310 5500', 'Barang yang sudah dibeli tidak dapat dikembalikan .\r\nTerima Kasih', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `info`
--

CREATE TABLE `info` (
  `nama` varchar(50) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `info`
--

INSERT INTO `info` (`nama`, `avatar`, `tanggal`, `isi`, `id`) VALUES
('Bina Widya', 'dist/upload/logo.jpeg', '2021-04-07', '<p><b><u></u></b><b><u>Tuliskan Informasi Baru Disini</u></b></p>', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `kode` varchar(20) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`kode`, `nama`, `no`) VALUES
('0001', 'admin', 28),
('0002', 'marketing', 32),
('0003', 'kasir', 33);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kode` varchar(20) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kode`, `nama`, `no`) VALUES
('0001', 'GlamShine Gold Series', 1),
('0002', 'GlamShine Pendamping', 2),
('0003', 'LC Beauty', 3),
('0004', 'LC Beauty Pendamping', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `operasional`
--

CREATE TABLE `operasional` (
  `kode` varchar(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `kasir` varchar(20) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `satuan`
--

CREATE TABLE `satuan` (
  `kode` varchar(20) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `satuan`
--

INSERT INTO `satuan` (`kode`, `nama`, `no`) VALUES
('0001', 'Packet', 1),
('0002', 'Pcs', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `kode` varchar(20) NOT NULL,
  `tgldaftar` date DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `alamat` varchar(70) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksibeli`
--

CREATE TABLE `transaksibeli` (
  `nota` varchar(20) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `hargaakhir` int(11) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksimasuk`
--

CREATE TABLE `transaksimasuk` (
  `nota` varchar(20) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `hargabeli` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `hargaakhir` int(11) DEFAULT NULL,
  `hargabeliakhir` int(11) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksimasukeceran`
--

CREATE TABLE `transaksimasukeceran` (
  `nota` varchar(20) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `hargabeli` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `hargaakhir` int(11) DEFAULT NULL,
  `hargabeliakhir` int(11) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `userna_me` varchar(20) NOT NULL,
  `pa_ssword` varchar(70) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `tglaktif` date DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`userna_me`, `pa_ssword`, `nama`, `alamat`, `nohp`, `tgllahir`, `tglaktif`, `jabatan`, `avatar`, `no`) VALUES
('admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 'Bina Widya', 'Jl. Kavling 3 Ancaran Kuningan Jawa Barat', '085603105500', '2020-01-01', '2021-03-09', 'admin', 'dist/upload/logo.jpeg', 1),
('salma', '86139d4c002d83e2705384df59523ad89fe71bf4', 'salma andina', 'perumnas ciporang', '081574244583', '2001-09-15', '2021-04-06', 'marketing', 'dist/upload/index.jpg', 21),
('siska', '10470c3b4b1fed12c3baac014be15fac67c6e815', 'siska oktavianti', 'desa cipedes, kec ciniru', '082321356348', '1997-10-25', '2021-04-06', 'kasir', 'dist/upload/index.jpg', 22);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `backset`
--
ALTER TABLE `backset`
  ADD PRIMARY KEY (`url`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `no` (`no`),
  ADD KEY `jenis` (`kategori`);

--
-- Indeks untuk tabel `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`nota`),
  ADD KEY `no` (`no`);

--
-- Indeks untuk tabel `bayarecer`
--
ALTER TABLE `bayarecer`
  ADD PRIMARY KEY (`nota`),
  ADD KEY `no` (`no`);

--
-- Indeks untuk tabel `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`nota`),
  ADD KEY `no` (`no`);

--
-- Indeks untuk tabel `chmenu`
--
ALTER TABLE `chmenu`
  ADD PRIMARY KEY (`userjabatan`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `no3` (`no`);

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `info`
--
ALTER TABLE `info`
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `no` (`no`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `no4` (`no`);

--
-- Indeks untuk tabel `operasional`
--
ALTER TABLE `operasional`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `no` (`no`);

--
-- Indeks untuk tabel `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `no4` (`no`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `no3` (`no`);

--
-- Indeks untuk tabel `transaksibeli`
--
ALTER TABLE `transaksibeli`
  ADD PRIMARY KEY (`nota`,`kode`),
  ADD KEY `no` (`no`),
  ADD KEY `username` (`kode`),
  ADD KEY `kdbarang` (`harga`);

--
-- Indeks untuk tabel `transaksimasuk`
--
ALTER TABLE `transaksimasuk`
  ADD PRIMARY KEY (`nota`,`kode`),
  ADD KEY `barang` (`nama`),
  ADD KEY `no5_2` (`no`);

--
-- Indeks untuk tabel `transaksimasukeceran`
--
ALTER TABLE `transaksimasukeceran`
  ADD PRIMARY KEY (`nota`,`kode`),
  ADD KEY `barang` (`nama`),
  ADD KEY `no5_2` (`no`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userna_me`),
  ADD KEY `no` (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT untuk tabel `bayar`
--
ALTER TABLE `bayar`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bayarecer`
--
ALTER TABLE `bayarecer`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `beli`
--
ALTER TABLE `beli`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `operasional`
--
ALTER TABLE `operasional`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `satuan`
--
ALTER TABLE `satuan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksibeli`
--
ALTER TABLE `transaksibeli`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksimasuk`
--
ALTER TABLE `transaksimasuk`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksimasukeceran`
--
ALTER TABLE `transaksimasukeceran`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
