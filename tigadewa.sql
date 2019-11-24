-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Nov 2019 pada 15.26
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
-- Database: `tigadewa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `adminName` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `adminName`) VALUES
(1, 'admin', 'admin', 'ADMIN KECE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `tripDate` varchar(100) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `picture`, `tripDate`, `year`) VALUES
(1, '', '08 - 12 OKTOBER', 2017),
(2, '', '19 - 22 DESEMBER', 2017),
(3, '', '23 - 27 JANUARI', 2018),
(4, '', '04 - 10 MARET', 2018),
(5, '', '12 - 15 AGUSTUS', 2019),
(6, '', '19 - 23 NOVEMBER', 2019);

-- --------------------------------------------------------

--
-- Struktur dari tabel `internationaltrip`
--

CREATE TABLE `internationaltrip` (
  `ItripName` varchar(150) NOT NULL,
  `overview` text NOT NULL,
  `preparation` text NOT NULL,
  `tripImages` varchar(200) NOT NULL,
  `id_internationaltrip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `internationaltrip`
--

INSERT INTO `internationaltrip` (`ItripName`, `overview`, `preparation`, `tripImages`, `id_internationaltrip`) VALUES
('Trip to Jamaica', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 1),
('Trip to Mexico', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 2),
('kosong', 'kosong', 'kosong', '', 11111);

-- --------------------------------------------------------

--
-- Struktur dari tabel `opentrip`
--

CREATE TABLE `opentrip` (
  `id_opentrip` int(11) NOT NULL,
  `OtripName` varchar(150) NOT NULL,
  `overview` text NOT NULL,
  `preparation` text NOT NULL,
  `tripImages` varchar(200) NOT NULL,
  `day1` text NOT NULL,
  `day2` text NOT NULL,
  `day3` text NOT NULL,
  `day4` text NOT NULL,
  `include` text NOT NULL,
  `exclude` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `opentrip`
--

INSERT INTO `opentrip` (`id_opentrip`, `OtripName`, `overview`, `preparation`, `tripImages`, `day1`, `day2`, `day3`, `day4`, `include`, `exclude`) VALUES
(1, 'Trip to Bromo', 'Taman nasional Bromo Tengger Semeru mencakup 2 Gunung yang sangat popular di Indonesia maupun di dunia yakni, Gunung Semeru (tertinggi di Pulau Jawa pada ketinggian 3,676 M dan Gunung Bromo (yang paling populer). <br> <br>\r\n\r\nGunung Semeru juga terkenal dengan sebutan Mahameru (Puncak Gunung Semeru). Merupakan salah satu gunung berapi paling aktif di Indonesia. Apa yang paling menonjol tentang gunung ini adalah fakta bahwa gunung ini meletus secara berkala setiap 20 menit atau lebih, gunung berapi ini mengeluarkan awan besar uap dan asap, kadang-kadang diselingi dengan abu dan batu. Pendakian Gunung Semeru dapat dikategorikan level mudah dan menengah.<br> <br>\r\n\r\nSelain Gunung Semeru, kami dapat menawarkan Anda kunjungan ke Gunung Bromo sebagai tambahan. Gunung Bromo (2.329 m) mudah dikenali karena seluruh puncaknya telah hancur dan kawah di dalamnya terus-menerus menyemburkan asap belerang putih.', 'Pada saat summit attack perjalanan akan sangat melelahkan dan trek sudah mulai sulit dan di dominasi oleh tanjakan, bebatuan , pasir. Di harapkan sebelum mendaki untuk persiapan olahraga dua hingga tiga kali seminggu selama 45 menit sampai satu jam per sesi. Berlari pada rute yang memiliki ketinggian akan jauh lebih baik, atau menggunakan treadmill jika tidak ada medan seperti itu di kota asal Anda. Anda dapat mengubah salah satu sesi lari Anda dalam seminggu dengan bersepeda atau berenang dan terutama yang perlu Anda lakukan juga memanjat tangga. Selain itu, latihan otot sangat disarankan. Perkuat otot tubuh bagian atas dan bawah Anda, juga otot inti. Anda dapat melakukannya di gym atau melakukan push-up, sit-up, pull-up, papan, dll. Anda perlu berlatih 3 bulan sebelum mendaki. Ini akan meningkatkan tingkat keberhasilan dan Keselamatan.', 'FBUQtTJeaMKYwXdV.jpg', 'gak kemana mana', '0', '0', '0', 'bantal, guling, perlengkapan mandi, sabun, deterjen', 'ayam goreng, sambal, lalapan, nasi uduk, nasi kuning, kertas minyak'),
(2, 'Trip to Japan', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'R4aVrLvoy5320glY.jpg', 'gak kemana mana', '0', '0', '0', 'bantal, guling, perlengkapan mandi, sabun, deterjen', 'ayam goreng, sambal, lalapan, nasi uduk, nasi kuning, kertas minyak'),
(3, 'Trip to Buthak', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'r2l6OTXLgh9CxovK.jpg', 'gak kemana mana', '0', '0', '0', 'bantal, guling, perlengkapan mandi, sabun, deterjen', 'ayam goreng, sambal, lalapan, nasi uduk, nasi kuning, kertas minyak'),
(4, 'Trip to Jember', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'ySiVqLj9AoPwMEpN.jpg', 'gak kemana mana', '0', '0', '0', 'bantal, guling, perlengkapan mandi, sabun, deterjen', 'ayam goreng, sambal, lalapan, nasi uduk, nasi kuning, kertas minyak'),
(11111, 'biarkan kosong', 'kosong', 'kosong', '', 'gak kemana mana', '0', '0', '0', '0', '0'),
(11112, 'sajkhk', 'sakdjahjk', 'sjahdjkah', '', 'sakjdhakjh', 'skjhdakj', 'sadhjkah', 'asjdhakjh', 'sakjdhakjh', 'asjhdjkah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pricing`
--

CREATE TABLE `pricing` (
  `id_pricing` int(11) NOT NULL,
  `id_ot` int(11) DEFAULT NULL,
  `id_it` int(11) DEFAULT NULL,
  `id_pt` int(11) DEFAULT NULL,
  `meetingPoint` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pricing`
--

INSERT INTO `pricing` (`id_pricing`, `id_ot`, `id_it`, `id_pt`, `meetingPoint`, `price`) VALUES
(3, 1, NULL, NULL, 'Stasiun Malang', '699.000'),
(4, 1, NULL, NULL, 'Stasiun Semarang', '799.000'),
(6, NULL, 1, NULL, 'Stasiun Malang', '999.000'),
(7, NULL, 2, NULL, 'Stasiun Jember', '1.099.000'),
(8, NULL, NULL, 1, 'Stasiun Jombang', '1.399.000'),
(9, NULL, NULL, 1, 'Stasiun Balikpapan', '1.899.000'),
(10, 1, NULL, NULL, 'Stasiun Tangerang', '20.000'),
(11, 3, NULL, NULL, 'Stasiun Bandung', '90000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `privatetrip`
--

CREATE TABLE `privatetrip` (
  `id_privatetrip` int(11) NOT NULL,
  `PtripName` varchar(150) NOT NULL,
  `overview` text NOT NULL,
  `preparation` text NOT NULL,
  `tripImages` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `privatetrip`
--

INSERT INTO `privatetrip` (`id_privatetrip`, `PtripName`, `overview`, `preparation`, `tripImages`) VALUES
(1, 'Trip to Panderman', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', ''),
(2, 'Trip to Papandayan', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', ''),
(11111, 'kosong', 'kosong', 'kosong', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `id_register` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `identityNumber` varchar(100) NOT NULL,
  `gender` enum('men','women') NOT NULL,
  `region` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `fullAddress` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `teesSize` enum('s','m','l','xl','xxl') NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `emergencyContact` varchar(50) NOT NULL,
  `id_schedule` int(11) NOT NULL,
  `id_pricing` int(11) NOT NULL,
  `bookingCode` varchar(20) NOT NULL,
  `status` enum('Belum Dibayar','Sudah Dibayar') NOT NULL,
  `id_opentrip` int(11) NOT NULL,
  `id_privatetrip` int(11) NOT NULL,
  `id_internationaltrip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`id_register`, `name`, `identityNumber`, `gender`, `region`, `province`, `city`, `fullAddress`, `email`, `teesSize`, `phoneNumber`, `emergencyContact`, `id_schedule`, `id_pricing`, `bookingCode`, `status`, `id_opentrip`, `id_privatetrip`, `id_internationaltrip`) VALUES
(41, 'mas roni', 'aksdnakj', 'men', 'International', 'prancis', 'paris', 'mt haryono', 'rr@gm.com', 's', '210381', '120381', 7, 3, 'A4VKBCWE37', 'Belum Dibayar', 1, 11111, 11111),
(61, 'mas anton', '109238', 'men', 'Indonesia', 'Dki Jakarta', 'Kota Jakarta Timur', 'jsaidaiuh', 'w@g.com', 'xxl', '1823918', '12391', 13, 9, 'O1U9VN0FC5', 'Sudah Dibayar', 11111, 1, 11111),
(63, 'man', '2103891', 'women', 'International', 'Jamaika', 'kelapadua', 'jsaidaiuh', 'w@g.com', 's', '1823918', '213131', 8, 10, 'O538LNDQVZ', 'Belum Dibayar', 1, 11111, 11111),
(64, 'man', '32131', 'men', 'International', 'Jamaika', 'kelapadua', 'jsaidaiuh', 'w@g.com', 's', '1823918', '31231', 13, 9, 'TOYKDB1CMN', 'Belum Dibayar', 11111, 1, 11111);

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedule`
--

CREATE TABLE `schedule` (
  `id_schedule` int(11) NOT NULL,
  `scheduleDate` varchar(50) NOT NULL,
  `ot_id` int(11) DEFAULT NULL,
  `pt_id` int(11) DEFAULT NULL,
  `it_id` int(11) DEFAULT NULL,
  `slot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `schedule`
--

INSERT INTO `schedule` (`id_schedule`, `scheduleDate`, `ot_id`, `pt_id`, `it_id`, `slot`) VALUES
(7, '10 - 13 Okt 2019', 1, NULL, NULL, 96),
(8, '17 - 20 Okt 2019', 1, NULL, NULL, 99),
(9, '24 - 27 Okt 2019', 1, NULL, NULL, 100),
(10, '26 - 29 Okt 2019', 1, NULL, NULL, 0),
(11, '10 - 13 Okt 2019', NULL, NULL, 2, 59),
(12, '26 - 29 Okt 2019', NULL, NULL, 2, 0),
(13, '10 - 13 Okt 2019', NULL, 1, NULL, 26),
(14, '26 - 29 Okt 2019', NULL, 1, NULL, 0),
(15, '12 - 15 Okt 2019', 2, NULL, NULL, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `internationaltrip`
--
ALTER TABLE `internationaltrip`
  ADD PRIMARY KEY (`id_internationaltrip`);

--
-- Indexes for table `opentrip`
--
ALTER TABLE `opentrip`
  ADD PRIMARY KEY (`id_opentrip`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id_pricing`),
  ADD KEY `id_opentrip` (`id_ot`,`id_it`,`id_pt`),
  ADD KEY `id_pt` (`id_pt`),
  ADD KEY `id_it` (`id_it`);

--
-- Indexes for table `privatetrip`
--
ALTER TABLE `privatetrip`
  ADD PRIMARY KEY (`id_privatetrip`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id_register`),
  ADD KEY `id_schedule` (`id_schedule`),
  ADD KEY `id_pricing` (`id_pricing`),
  ADD KEY `id_opentrip` (`id_opentrip`),
  ADD KEY `id_privatetrip` (`id_privatetrip`),
  ADD KEY `id_internationaltrip` (`id_internationaltrip`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id_schedule`),
  ADD KEY `id_opentrip` (`ot_id`),
  ADD KEY `id_privatetrip` (`pt_id`),
  ADD KEY `id_internationaltrip` (`it_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `internationaltrip`
--
ALTER TABLE `internationaltrip`
  MODIFY `id_internationaltrip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11112;

--
-- AUTO_INCREMENT for table `opentrip`
--
ALTER TABLE `opentrip`
  MODIFY `id_opentrip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11113;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id_pricing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `privatetrip`
--
ALTER TABLE `privatetrip`
  MODIFY `id_privatetrip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11112;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id_register` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pricing`
--
ALTER TABLE `pricing`
  ADD CONSTRAINT `pricing_ibfk_3` FOREIGN KEY (`id_pt`) REFERENCES `privatetrip` (`id_privatetrip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pricing_ibfk_4` FOREIGN KEY (`id_it`) REFERENCES `internationaltrip` (`id_internationaltrip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pricing_ibfk_5` FOREIGN KEY (`id_ot`) REFERENCES `opentrip` (`id_opentrip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_4` FOREIGN KEY (`id_schedule`) REFERENCES `schedule` (`id_schedule`),
  ADD CONSTRAINT `register_ibfk_5` FOREIGN KEY (`id_pricing`) REFERENCES `pricing` (`id_pricing`);

--
-- Ketidakleluasaan untuk tabel `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`it_id`) REFERENCES `internationaltrip` (`id_internationaltrip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`pt_id`) REFERENCES `privatetrip` (`id_privatetrip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_ibfk_3` FOREIGN KEY (`ot_id`) REFERENCES `opentrip` (`id_opentrip`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
