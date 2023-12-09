-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Apr 2022 pada 14.12
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaansklh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `Kode_buku` int(4) NOT NULL,
  `Nama_buku` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`Kode_buku`, `Nama_buku`) VALUES
(1001, 'Hakekat Karya Ilmiah'),
(1002, 'Ayah'),
(1003, 'Ensiklopedia-Edisi Khusus'),
(1004, 'Aku Akan Menggeser Gunung-Rahmi Khalida'),
(1005, 'Praja Muda Karana'),
(2001, 'Dunia Sophie'),
(2002, 'Filsafat Untuk Pemula'),
(2003, 'Alam Pikiran Yunani'),
(2004, 'Phenomenology of Spirit'),
(2005, 'Madilog'),
(2006, 'Buku Ajar Filsafat Ilmu'),
(2007, 'Studi Dasar Filsafat'),
(2008, 'Filsafat Pendidikan Islam'),
(2009, 'Filsafat Hukum'),
(2010, 'Loving The Wounded Soul'),
(2011, 'Filosofi Teras'),
(2012, 'Filsafat Ilmu: Perspektif Barat & Islam'),
(3001, 'Ilmu Sosial Budaya Dasar'),
(3002, 'Kebudayaan dan Perubahan Sosial Etnis Tori Bunggu '),
(3003, 'Mobilitias Sosial Budaya Islam pada Masa Khulafa A'),
(3004, 'Budaya Toraja Tallulolona Bahan Ajar Muatan Lokal '),
(3005, 'Multikultural dan Keberagaman Sosial'),
(3006, 'Berbudaya Melalui Bahasa sebuah Bunga Rampai'),
(3007, 'Sosiologi Agama'),
(3008, 'Demokrasi di Era Post Truth'),
(3009, 'Dasar-Dasar Ilmu Sosial'),
(3010, 'Kesehatan Masyarakat'),
(4001, 'Pedoman Umum Ejaan yang Disempurnakan dan Pedoman '),
(4002, 'Pragmatik'),
(4003, 'Estetika Sastra dan Budaya'),
(4004, 'Teori Apresiasi Sastra'),
(4005, 'Pararaton'),
(4006, 'Tata Bahasa Acuan Bahasa Indonesia untuk Penutur A'),
(4007, 'Bahasa Indonesia Kreatif'),
(4008, 'Linguistik Umum'),
(4009, 'Bunyi Bahasa'),
(4010, 'Ragam Bahasa Ilmiah'),
(4011, 'Metode Penelitian Sastra'),
(5001, 'Teknik Membaca Peta dan Kompas'),
(5002, 'Pedoman Penulisan Karya Ilmiah'),
(5003, 'Fisika Modern'),
(5004, 'Pengetahuan Dasar Peta'),
(5005, 'Menuju Olimpiade Fisika untuk SMA/SMK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `Nama` varchar(50) NOT NULL,
  `NIS` int(4) DEFAULT NULL,
  `Kode_buku` int(4) DEFAULT NULL,
  `Kode_petugas` int(4) DEFAULT NULL,
  `Tanggal_pinjam` date DEFAULT NULL,
  `Tanggal_kembali` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`Nama`, `NIS`, `Kode_buku`, `Kode_petugas`, `Tanggal_pinjam`, `Tanggal_kembali`) VALUES
('Hertaslim', 1633, 3006, 2, '2022-01-31', '2022-02-03'),
('Nur Aiman Atika', 1645, 5005, 9, '2022-02-01', '2022-02-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `NIS` int(4) DEFAULT NULL,
  `Kode_buku` int(4) DEFAULT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Kode_petugas` int(4) DEFAULT NULL,
  `Tanggal_pinjam` date DEFAULT NULL,
  `Tanggal_kembali` date DEFAULT NULL,
  `Keterlambatan` date DEFAULT NULL,
  `Denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`NIS`, `Kode_buku`, `Nama`, `Kode_petugas`, `Tanggal_pinjam`, `Tanggal_kembali`, `Keterlambatan`, `Denda`) VALUES
(1645, 5005, 'Nur Aiman Atika', 9, '2022-02-01', '2022-02-04', '2022-02-04', 0),
(1633, 3005, 'Hertaslim', 2, '2022-02-03', '2022-02-03', '2022-02-04', 5000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE `pengunjung` (
  `NIS` int(4) NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Gender` enum('L','P') DEFAULT NULL,
  `Tujuan` varchar(50) DEFAULT NULL,
  `Kelas` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`NIS`, `Nama`, `Gender`, `Tujuan`, `Kelas`) VALUES
(1254, 'Hidayatullah M', 'L', 'Membaca Buku', 10),
(1257, 'Fahmi Yahya', 'L', 'Tugas Sekolah', 10),
(1258, 'Disa Alifka Nafulani', 'P', 'Tugas Sekolah', 10),
(1285, 'Adinda Oktavia', 'P', 'Membaca Buku', 10),
(1401, 'Alfian Darmawan', 'L', 'Membaca Buku', 11),
(1405, 'Resky Aulia', 'P', 'Tugas Sekolah', 11),
(1410, 'Muh Farhad', 'L', 'Tugas Sekolah', 11),
(1633, 'Hertaslim', 'L', 'Tugas Sekolah', 12),
(1645, 'Nur Aiman Afika', 'P', 'Tugas Sekolah', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perpustakaan`
--

CREATE TABLE `perpustakaan` (
  `Nama_sekolah` varchar(50) DEFAULT NULL,
  `Alamat_sekolah` varchar(50) DEFAULT NULL,
  `NPSN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perpustakaan`
--

INSERT INTO `perpustakaan` (`Nama_sekolah`, `Alamat_sekolah`, `NPSN`) VALUES
('SMA Bunga Bangsa', 'Jl Pendidikan', 9157);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `Kode_petugas` int(4) NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Gender` enum('L','P') DEFAULT NULL,
  `Posisi` varchar(50) DEFAULT NULL,
  `Jam_tugas` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`Kode_petugas`, `Nama`, `Gender`, `Posisi`, `Jam_tugas`) VALUES
(1, 'Anita Muslimin', 'P', 'Kepala Perpustakaan', 10),
(2, 'Reza Harliansyah', 'L', 'Layanan Sirkulasi', 10),
(3, 'Hesty Fajarwati Suryani', 'P', 'Layanan Teknis', 10),
(4, 'Sulis Fitriani', 'P', 'Layanan Teknis', 10),
(5, 'Muhammad Fahmi', 'L', 'Layanan Teknologi Informasi', 10),
(6, 'Rahmawati', 'P', 'Layanan Teknologi Informasi', 10),
(7, 'Riswan', 'L', 'Kebersihan', 5),
(8, 'Andi Mawaddah Sumardi', 'P', 'Kebersihan', 5),
(9, 'Ayu Andini Eka Putri', 'P', 'Layanan Sirkulasi', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rak`
--

CREATE TABLE `rak` (
  `Id_rak` int(4) NOT NULL,
  `Nama_rak` varchar(50) DEFAULT NULL,
  `Kode_buku` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rak`
--

INSERT INTO `rak` (`Id_rak`, `Nama_rak`, `Kode_buku`) VALUES
(1000, 'Karya Umum', 1001),
(1000, 'Karya Umum', 1002),
(1000, 'Karya Umum', 1003),
(1000, 'Karya Umum', 1004),
(1000, 'Karya Umum', 1005),
(2000, 'Filsafat', 2001),
(2000, 'Filsafat', 2002),
(2000, 'Filsafat', 2003),
(2000, 'Filsafat', 2004),
(2000, 'Filsafat', 2005),
(2000, 'Filsafat', 2006),
(2000, 'Filsafat', 2007),
(2000, 'Filsafat', 2008),
(2000, 'Filsafat', 2009),
(2000, 'Filsafat', 2010),
(2000, 'Filsafat', 2011),
(2000, 'Filsafat', 2012),
(3000, 'Ilmu Sosial', 3001),
(3000, 'Ilmu Sosial', 3002),
(3000, 'Ilmu Sosial', 3003),
(3000, 'Ilmu Sosial', 3004),
(3000, 'Ilmu Sosial', 3005),
(3000, 'Ilmu Sosial', 3006),
(3000, 'Ilmu Sosial', 3007),
(3000, 'Ilmu Sosial', 3008),
(3000, 'Ilmu Sosial', 3009),
(3000, 'Ilmu Sosial', 3010),
(4000, 'Bahasa', 4001),
(4000, 'Bahasa', 4002),
(4000, 'Bahasa', 4003),
(4000, 'Bahasa', 4004),
(4000, 'Bahasa', 4005),
(4000, 'Bahasa', 4006),
(4000, 'Bahasa', 4007),
(4000, 'Bahasa', 4008),
(4000, 'Bahasa', 4009),
(4000, 'Bahasa', 4010),
(4000, 'Bahasa', 4011),
(5000, 'Ilmu Murni', 5001),
(5000, 'Ilmu Murni', 5002),
(5000, 'Ilmu Murni', 5003),
(5000, 'Ilmu Murni', 5004),
(5000, 'Ilmu Murni', 5005);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`Kode_buku`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`Nama`),
  ADD KEY `NIS` (`NIS`),
  ADD KEY `Kode_buku` (`Kode_buku`),
  ADD KEY `Kode_petugas` (`Kode_petugas`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`Denda`),
  ADD KEY `NIS` (`NIS`),
  ADD KEY `Kode_buku` (`Kode_buku`),
  ADD KEY `Nama` (`Nama`),
  ADD KEY `Kode_petugas` (`Kode_petugas`);

--
-- Indeks untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`NIS`);

--
-- Indeks untuk tabel `perpustakaan`
--
ALTER TABLE `perpustakaan`
  ADD PRIMARY KEY (`NPSN`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`Kode_petugas`);

--
-- Indeks untuk tabel `rak`
--
ALTER TABLE `rak`
  ADD KEY `Kode_buku` (`Kode_buku`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`NIS`) REFERENCES `pengunjung` (`NIS`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`Kode_buku`) REFERENCES `buku` (`Kode_buku`),
  ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`Kode_petugas`) REFERENCES `petugas` (`Kode_petugas`);

--
-- Ketidakleluasaan untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`NIS`) REFERENCES `pengunjung` (`NIS`),
  ADD CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`Kode_buku`) REFERENCES `buku` (`Kode_buku`),
  ADD CONSTRAINT `pengembalian_ibfk_3` FOREIGN KEY (`Nama`) REFERENCES `peminjaman` (`Nama`),
  ADD CONSTRAINT `pengembalian_ibfk_4` FOREIGN KEY (`Kode_petugas`) REFERENCES `petugas` (`Kode_petugas`);

--
-- Ketidakleluasaan untuk tabel `rak`
--
ALTER TABLE `rak`
  ADD CONSTRAINT `rak_ibfk_1` FOREIGN KEY (`Kode_buku`) REFERENCES `buku` (`Kode_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
