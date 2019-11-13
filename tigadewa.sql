-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13 Nov 2019 pada 10.36
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `internationaltrip`
--

CREATE TABLE `internationaltrip` (
  `tripName` varchar(150) NOT NULL,
  `overview` text NOT NULL,
  `preparation` text NOT NULL,
  `tripImages` varchar(200) NOT NULL,
  `id_internationaltrip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `opentrip`
--

CREATE TABLE `opentrip` (
  `id_opentrip` int(11) NOT NULL,
  `tripName` varchar(150) NOT NULL,
  `overview` text NOT NULL,
  `preparation` text NOT NULL,
  `tripImages` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `opentrip`
--

INSERT INTO `opentrip` (`id_opentrip`, `tripName`, `overview`, `preparation`, `tripImages`) VALUES
(1, 'Trip to Bromo', 'Taman nasional Bromo Tengger Semeru mencakup 2 Gunung yang sangat popular di Indonesia maupun di dunia yakni, Gunung Semeru (tertinggi di Pulau Jawa pada ketinggian 3,676 M dan Gunung Bromo (yang paling populer). <br> <br>\r\n\r\nGunung Semeru juga terkenal dengan sebutan Mahameru (Puncak Gunung Semeru). Merupakan salah satu gunung berapi paling aktif di Indonesia. Apa yang paling menonjol tentang gunung ini adalah fakta bahwa gunung ini meletus secara berkala setiap 20 menit atau lebih, gunung berapi ini mengeluarkan awan besar uap dan asap, kadang-kadang diselingi dengan abu dan batu. Pendakian Gunung Semeru dapat dikategorikan level mudah dan menengah.<br> <br>\r\n\r\nSelain Gunung Semeru, kami dapat menawarkan Anda kunjungan ke Gunung Bromo sebagai tambahan. Gunung Bromo (2.329 m) mudah dikenali karena seluruh puncaknya telah hancur dan kawah di dalamnya terus-menerus menyemburkan asap belerang putih.', 'Pada saat summit attack perjalanan akan sangat melelahkan dan trek sudah mulai sulit dan di dominasi oleh tanjakan, bebatuan , pasir. Di harapkan sebelum mendaki untuk persiapan olahraga dua hingga tiga kali seminggu selama 45 menit sampai satu jam per sesi. Berlari pada rute yang memiliki ketinggian akan jauh lebih baik, atau menggunakan treadmill jika tidak ada medan seperti itu di kota asal Anda. Anda dapat mengubah salah satu sesi lari Anda dalam seminggu dengan bersepeda atau berenang dan terutama yang perlu Anda lakukan juga memanjat tangga. Selain itu, latihan otot sangat disarankan. Perkuat otot tubuh bagian atas dan bawah Anda, juga otot inti. Anda dapat melakukannya di gym atau melakukan push-up, sit-up, pull-up, papan, dll. Anda perlu berlatih 3 bulan sebelum mendaki. Ini akan meningkatkan tingkat keberhasilan dan Keselamatan.', ''),
(2, 'Trip to Japan', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', ''),
(3, 'Trip to Buthak', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', ''),
(4, 'Trip to Jember', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pricing`
--

CREATE TABLE `pricing` (
  `id_pricing` int(11) NOT NULL,
  `id_opentrip` int(11) DEFAULT NULL,
  `id_internationaltrip` int(11) DEFAULT NULL,
  `id_privatetrip` int(11) DEFAULT NULL,
  `meetingPoint` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pricing`
--

INSERT INTO `pricing` (`id_pricing`, `id_opentrip`, `id_internationaltrip`, `id_privatetrip`, `meetingPoint`, `price`) VALUES
(3, 1, NULL, NULL, 'Stasiun Malang', '699.000'),
(4, 1, NULL, NULL, 'Stasiun Semarang', '799.000'),
(5, 1, NULL, NULL, 'Stasiun Bandung', '899.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `privatetrip`
--

CREATE TABLE `privatetrip` (
  `id_privatetrip` int(11) NOT NULL,
  `tripName` varchar(150) NOT NULL,
  `overview` text NOT NULL,
  `preparation` text NOT NULL,
  `tripImages` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `bookingCode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`id_register`, `name`, `identityNumber`, `gender`, `region`, `province`, `city`, `fullAddress`, `email`, `teesSize`, `phoneNumber`, `emergencyContact`, `id_schedule`, `id_pricing`, `bookingCode`) VALUES
(1, 'kandos', '0139103929', 'men', 'indonesia', 'banten', 'tangerang', 'kelapa dua', 'rafflitok@gmail.com', 's', '082301832038', '029834928', 7, 3, ''),
(11, 'Raffli Kandos', '108302', 'men', 'indonesia', 'banten', 'tangerang', 'kelapa dua', 'rafflitok@gmail.com', 'm', '082301832038', '01239823', 7, 3, ''),
(41, 'mas roni', 'aksdnakj', 'men', 'International', 'prancis', 'paris', 'mt haryono', 'rr@gm.com', 's', '210381', '120381', 7, 3, 'A4VKBCWE37'),
(42, 'mas tayo', '12389', 'women', 'International', 'ina', 'beijing', 'kelapa dua', 'w@g.com', 's', '012389018', '1238913189', 7, 3, '0YSIUF836T'),
(43, 'akmj', '2y1y38', 'women', 'Indonesia', '0', '', 'kelapa dua', 'w@g.com', 's', '21938', '12830138', 7, 3, 'CY824DR7LJ'),
(44, 'asdn', 'sadnkaj', 'men', 'International', 'anskjdnaj', 'ajsndkjan', 'haitayo', 'w@g.com', 's', '12038', '01831', 7, 3, 'GLKNQYB9W3'),
(45, 'mas jon', '1038', 'women', 'Indonesia', '0', '', 'kelapa dua', 'w@g.com', 's', '121212', '1212', 7, 3, '8GZ1K6B79Q'),
(46, 'asdnkj', 'akjsndkj', 'women', 'International', 'jepang', 'tokyo', 'kelapa dua', 'w@g.com', 's', '29301', '0123819', 7, 3, '7FVE2R0SWL'),
(47, 'klkkl', '131', 'women', 'Indonesia', '0', '', 'kelapa dua', 'w@g.com', 's', '12', '2121', 7, 3, 'C0F9KHEGAV'),
(48, 'haiiii', '02310', 'women', 'Indonesia', '', '', 'asjkadh', 'rr@gm.com', 's', '1313231', '21313', 7, 3, 'KPST594NFM'),
(49, 'asdla', 'asdak', 'women', 'Indonesia', 'Banten', 'Kab. Tangerang', 'kelapa dua', 'w@g.com', 's', '1203198', '102318', 7, 3, '9DZPE3I5FR'),
(50, 'kandos', '210831', 'women', 'International', 'jepang', 'naruto', 'kakashi', 'w@g.com', 's', '9103989', '10923818', 7, 3, 'BASF5N7ZYR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedule`
--

CREATE TABLE `schedule` (
  `id_schedule` int(11) NOT NULL,
  `scheduleDate` varchar(50) NOT NULL,
  `id_opentrip` int(11) DEFAULT NULL,
  `id_privatetrip` int(11) DEFAULT NULL,
  `id_internationaltrip` int(11) DEFAULT NULL,
  `slot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `schedule`
--

INSERT INTO `schedule` (`id_schedule`, `scheduleDate`, `id_opentrip`, `id_privatetrip`, `id_internationaltrip`, `slot`) VALUES
(7, '10 - 13 Okt 2019', 1, NULL, NULL, 100),
(8, '17 - 20 Okt 2019', 1, NULL, NULL, 100),
(9, '24 - 27 Okt 2019', 1, NULL, NULL, 100),
(10, '26 - 29 Okt 2019', 1, NULL, NULL, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

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
  ADD KEY `id_opentrip` (`id_opentrip`,`id_internationaltrip`,`id_privatetrip`),
  ADD KEY `id_internationaltrip` (`id_internationaltrip`),
  ADD KEY `id_privatetrip` (`id_privatetrip`);

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
  ADD KEY `id_pricing` (`id_pricing`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id_schedule`),
  ADD KEY `id_opentrip` (`id_opentrip`),
  ADD KEY `id_privatetrip` (`id_privatetrip`),
  ADD KEY `id_internationaltrip` (`id_internationaltrip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `internationaltrip`
--
ALTER TABLE `internationaltrip`
  MODIFY `id_internationaltrip` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `opentrip`
--
ALTER TABLE `opentrip`
  MODIFY `id_opentrip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id_pricing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `privatetrip`
--
ALTER TABLE `privatetrip`
  MODIFY `id_privatetrip` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id_register` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pricing`
--
ALTER TABLE `pricing`
  ADD CONSTRAINT `pricing_ibfk_1` FOREIGN KEY (`id_internationaltrip`) REFERENCES `internationaltrip` (`id_internationaltrip`),
  ADD CONSTRAINT `pricing_ibfk_2` FOREIGN KEY (`id_opentrip`) REFERENCES `opentrip` (`id_opentrip`),
  ADD CONSTRAINT `pricing_ibfk_3` FOREIGN KEY (`id_privatetrip`) REFERENCES `privatetrip` (`id_privatetrip`);

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
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`id_opentrip`) REFERENCES `opentrip` (`id_opentrip`),
  ADD CONSTRAINT `schedule_ibfk_3` FOREIGN KEY (`id_privatetrip`) REFERENCES `privatetrip` (`id_privatetrip`),
  ADD CONSTRAINT `schedule_ibfk_4` FOREIGN KEY (`id_internationaltrip`) REFERENCES `internationaltrip` (`id_internationaltrip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
