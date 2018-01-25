-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Jan 2018 pada 16.46
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `badar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `noInduk` varchar(5) NOT NULL,
  `tglKeluar` datetime NOT NULL,
  `alasan` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `idDokumen` varchar(4) NOT NULL,
  `namaDokumen` text NOT NULL,
  `wktUpload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal`
--

CREATE TABLE `jurnal` (
  `idJurnal` varchar(5) NOT NULL,
  `idPelajaran` varchar(4) NOT NULL,
  `tanggal` datetime NOT NULL,
  `materi` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `idKelas` varchar(4) NOT NULL,
  `namaKelas` text NOT NULL,
  `lokasi` varchar(4) NOT NULL,
  `ketuaKelas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keminatan`
--

CREATE TABLE `keminatan` (
  `idKeminatan` varchar(5) NOT NULL,
  `namaKeminatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kitab`
--

CREATE TABLE `kitab` (
  `idKitab` varchar(5) NOT NULL,
  `namaKitab` varchar(30) NOT NULL,
  `idMapel` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `idMapel` varchar(4) NOT NULL,
  `namaMapel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajaran`
--

CREATE TABLE `pelajaran` (
  `idPelajaran` varchar(4) NOT NULL,
  `idKelas` varchar(4) NOT NULL,
  `idUstadz` varchar(4) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `idKitab` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `idJurnal` varchar(5) NOT NULL,
  `noInduk` varchar(5) NOT NULL,
  `keterangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `idRuang` varchar(4) NOT NULL,
  `namaRuangan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `santri`
--

CREATE TABLE `santri` (
  `noInduk` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tmpLahir` varchar(20) NOT NULL,
  `tglLahir` datetime NOT NULL,
  `jalan` text NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `dusun` varchar(20) NOT NULL,
  `desa` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `noTelp` varchar(20) NOT NULL,
  `asalSekolah` varchar(20) NOT NULL,
  `lembagaPendidikan` varchar(20) NOT NULL,
  `jenjang` varchar(20) NOT NULL,
  `namaAyah` varchar(30) NOT NULL,
  `thnLahirAyah` year(4) NOT NULL,
  `alamatAyah` text NOT NULL,
  `noTelpAyah` varchar(20) NOT NULL,
  `pekerjaanAyah` varchar(20) NOT NULL,
  `pendidikanAyah` varchar(20) NOT NULL,
  `namaIbu` varchar(30) NOT NULL,
  `thnLahirIbu` year(4) NOT NULL,
  `alamatIbu` text NOT NULL,
  `noTelpIbu` varchar(20) NOT NULL,
  `pekerjaanIbu` varchar(20) NOT NULL,
  `pendidikanIbu` varchar(20) NOT NULL,
  `tglMasuk` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `santri`
--

INSERT INTO `santri` (`noInduk`, `nama`, `jk`, `tmpLahir`, `tglLahir`, `jalan`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `kota`, `noTelp`, `asalSekolah`, `lembagaPendidikan`, `jenjang`, `namaAyah`, `thnLahirAyah`, `alamatAyah`, `noTelpAyah`, `pekerjaanAyah`, `pendidikanAyah`, `namaIbu`, `thnLahirIbu`, `alamatIbu`, `noTelpIbu`, `pekerjaanIbu`, `pendidikanIbu`, `tglMasuk`) VALUES
('12001', 'Akhmad Muzanni Safii', 'l', 'Malang', '1998-06-15 00:00:00', 'Jalan Suropati I A No 18', '13', '4', 'Bululawang', 'Bululawang', 'Bululawang', 'Kab. Malang', '087859420404', 'MAN 1 Kota Malang', 'Universitas Brawijay', 'Kuliah', 'Nur Achmadi', 1962, 'sda', '8813303356', 'Swasta', 'SMA/MA sederajat', 'Ida Sunarwati', 1970, 'sda', '85755480404', 'Ibu Rumah Tangga', 'S1', '2012-06-01 00:00:00'),
('12002', 'Muhammad Umar Fahmi', 'l', 'Tuban', '1998-06-16 00:00:00', 'Jalan Suropati I A No 19', '13', '4', 'Bululawang', 'Bululawang', 'Bululawang', 'Kab. Malang', '087859420404', 'MAN 1 Kota Malang', 'Universitas Brawijay', 'Kuliah', 'Nur Achmadi', 1963, 'sda', '8813303357', 'Swasta', 'SMA/MA sederajat', 'Ida Sunarwati', 1971, 'sda', '85755480405', 'Ibu Rumah Tangga', 'S2', '2012-06-02 00:00:00'),
('12003', 'Ari Ishlahuddin', 'l', 'Malang', '1998-06-17 00:00:00', 'Jalan Suropati I A No 20', '13', '4', 'Bululawang', 'Bululawang', 'Bululawang', 'Kab. Malang', '087859420404', 'MAN 1 Kota Malang', 'Universitas Brawijay', 'Kuliah', 'Nur Achmadi', 1964, 'sda', '8813303358', 'Swasta', 'SMA/MA sederajat', 'Ida Sunarwati', 1972, 'sda', '85755480406', 'Ibu Rumah Tangga', 'S3', '2012-06-03 00:00:00'),
('12004', 'Ardhi Kusuma Mahendra', 'l', 'Surabaya', '1998-06-18 00:00:00', 'Jalan Suropati I A No 21', '13', '4', 'Bululawang', 'Bululawang', 'Bululawang', 'Kab. Malang', '087859420404', 'MAN 1 Kota Malang', 'Universitas Brawijay', 'Kuliah', 'Nur Achmadi', 1965, 'sda', '8813303359', 'Swasta', 'SMA/MA sederajat', 'Ida Sunarwati', 1973, 'sda', '85755480407', 'Ibu Rumah Tangga', 'S4', '2012-06-04 00:00:00'),
('12005', 'Ahmad Amirul Faizin', 'l', 'Malang', '1998-06-19 00:00:00', 'Jalan Suropati I A No 22', '13', '4', 'Bululawang', 'Bululawang', 'Bululawang', 'Kab. Malang', '087859420404', 'MAN 1 Kota Malang', 'Universitas Brawijay', 'Kuliah', 'Nur Achmadi', 1966, 'sda', '8813303360', 'Swasta', 'SMA/MA sederajat', 'Ida Sunarwati', 1974, 'sda', '85755480408', 'Ibu Rumah Tangga', 'S5', '2012-06-05 00:00:00'),
('12006', 'Ahmad Syauqi', 'l', 'Malang', '1998-06-20 00:00:00', 'Jalan Suropati I A No 23', '13', '4', 'Bululawang', 'Bululawang', 'Bululawang', 'Kab. Malang', '087859420404', 'MAN 1 Kota Malang', 'Universitas Brawijay', 'Kuliah', 'Nur Achmadi', 1967, 'sda', '8813303361', 'Swasta', 'SMA/MA sederajat', 'Ida Sunarwati', 1975, 'sda', '85755480409', 'Ibu Rumah Tangga', 'S6', '2012-06-06 00:00:00'),
('12007', 'Adib Syahdan Zaki', 'l', 'Malang', '1998-06-21 00:00:00', 'Jalan Suropati I A No 24', '13', '4', 'Bululawang', 'Bululawang', 'Bululawang', 'Kab. Malang', '087859420404', 'MAN 1 Kota Malang', 'MAN 1 Kota Malang', 'SMA sederajat', 'Nur Achmadi', 1968, 'sda', '8813303362', 'Swasta', 'SMA/MA sederajat', 'Ida Sunarwati', 1976, 'sda', '85755480410', 'Ibu Rumah Tangga', 'S7', '2012-06-07 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `santri_aktif`
--

CREATE TABLE `santri_aktif` (
  `noInduk` varchar(5) NOT NULL,
  `kelasDiniyah` varchar(4) NOT NULL,
  `keminatan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ustadz`
--

CREATE TABLE `ustadz` (
  `idUstadz` varchar(4) NOT NULL,
  `namaUstadz` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD KEY `noInduk` (`noInduk`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`idDokumen`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`idJurnal`),
  ADD KEY `idPelajaran` (`idPelajaran`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idKelas`),
  ADD KEY `lokasi` (`lokasi`),
  ADD KEY `ketuaKelas` (`ketuaKelas`);

--
-- Indexes for table `keminatan`
--
ALTER TABLE `keminatan`
  ADD PRIMARY KEY (`idKeminatan`);

--
-- Indexes for table `kitab`
--
ALTER TABLE `kitab`
  ADD PRIMARY KEY (`idKitab`),
  ADD KEY `idMapel` (`idMapel`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`idMapel`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`idPelajaran`),
  ADD KEY `idKelas` (`idKelas`),
  ADD KEY `idKitab` (`idKitab`),
  ADD KEY `idUstadz` (`idUstadz`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD KEY `idJurnal` (`idJurnal`),
  ADD KEY `noInduk` (`noInduk`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`idRuang`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`noInduk`);

--
-- Indexes for table `santri_aktif`
--
ALTER TABLE `santri_aktif`
  ADD KEY `noInduk` (`noInduk`),
  ADD KEY `kelasDiniyah` (`kelasDiniyah`),
  ADD KEY `keminatan` (`keminatan`);

--
-- Indexes for table `ustadz`
--
ALTER TABLE `ustadz`
  ADD PRIMARY KEY (`idUstadz`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`noInduk`) REFERENCES `santri` (`noInduk`);

--
-- Ketidakleluasaan untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  ADD CONSTRAINT `jurnal_ibfk_1` FOREIGN KEY (`idPelajaran`) REFERENCES `pelajaran` (`idPelajaran`);

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`lokasi`) REFERENCES `ruangan` (`idRuang`),
  ADD CONSTRAINT `kelas_ibfk_2` FOREIGN KEY (`ketuaKelas`) REFERENCES `santri` (`noInduk`);

--
-- Ketidakleluasaan untuk tabel `kitab`
--
ALTER TABLE `kitab`
  ADD CONSTRAINT `kitab_ibfk_1` FOREIGN KEY (`idMapel`) REFERENCES `mapel` (`idMapel`);

--
-- Ketidakleluasaan untuk tabel `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD CONSTRAINT `pelajaran_ibfk_1` FOREIGN KEY (`idKelas`) REFERENCES `kelas` (`idKelas`),
  ADD CONSTRAINT `pelajaran_ibfk_2` FOREIGN KEY (`idKitab`) REFERENCES `kitab` (`idKitab`),
  ADD CONSTRAINT `pelajaran_ibfk_3` FOREIGN KEY (`idUstadz`) REFERENCES `ustadz` (`idUstadz`);

--
-- Ketidakleluasaan untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`idJurnal`) REFERENCES `jurnal` (`idJurnal`),
  ADD CONSTRAINT `presensi_ibfk_2` FOREIGN KEY (`noInduk`) REFERENCES `santri` (`noInduk`);

--
-- Ketidakleluasaan untuk tabel `santri_aktif`
--
ALTER TABLE `santri_aktif`
  ADD CONSTRAINT `santri_aktif_ibfk_1` FOREIGN KEY (`noInduk`) REFERENCES `santri` (`noInduk`),
  ADD CONSTRAINT `santri_aktif_ibfk_2` FOREIGN KEY (`kelasDiniyah`) REFERENCES `kelas` (`idKelas`),
  ADD CONSTRAINT `santri_aktif_ibfk_3` FOREIGN KEY (`keminatan`) REFERENCES `keminatan` (`idKeminatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
