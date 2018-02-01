-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Jan 2018 pada 13.31
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gayarambutdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barberdetail`
--

CREATE TABLE `barberdetail` (
  `id` int(11) NOT NULL,
  `id_barber` int(11) NOT NULL,
  `services` varchar(128) NOT NULL,
  `price` decimal(17,2) NOT NULL,
  `promo` decimal(17,2) NOT NULL,
  `descript` text NOT NULL,
  `barberdetailpic` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barberdetail`
--

INSERT INTO `barberdetail` (`id`, `id_barber`, `services`, `price`, `promo`, `descript`, `barberdetailpic`, `created_at`, `updated_at`) VALUES
(1, 1, 'Potong Pendek', '500000.00', '0.00', '', '', '2017-12-20 05:20:43', '2017-12-20 05:20:43'),
(2, 1, 'Potong Botak', '300000.00', '0.00', '', '', '2017-12-20 05:20:43', '2017-12-20 05:20:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barbers`
--

CREATE TABLE `barbers` (
  `id_barber` int(11) NOT NULL,
  `barbername` varchar(50) NOT NULL,
  `barberaddress` varchar(225) NOT NULL,
  `barberemail` varchar(50) NOT NULL,
  `barberphone` varchar(16) NOT NULL,
  `barberpass` varchar(100) NOT NULL,
  `barbertype` varchar(32) NOT NULL,
  `workingdate` varchar(32) NOT NULL,
  `openinghours` time DEFAULT NULL,
  `closinghours` time DEFAULT NULL,
  `barberslogo` varchar(128) NOT NULL,
  `barberstatus` enum('A','I','D','P') NOT NULL,
  `barberbranch` varchar(4) NOT NULL,
  `barberlocation` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barbers`
--

INSERT INTO `barbers` (`id_barber`, `barbername`, `barberaddress`, `barberemail`, `barberphone`, `barberpass`, `barbertype`, `workingdate`, `openinghours`, `closinghours`, `barberslogo`, `barberstatus`, `barberbranch`, `barberlocation`, `created_at`, `updated_at`) VALUES
(1, 'Patriot', 'Ruko Crystal Lnae, Serpong', 'patriot@gmail.com', '081280525231', '827ccb0eea8a706c4c34a16891f84e7b', 'Elite', '12', '09:00:00', '22:00:00', '', 'A', '', '', '2017-12-20 05:20:43', '2017-12-20 05:20:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookingorder`
--

CREATE TABLE `bookingorder` (
  `id_order` int(11) NOT NULL,
  `customers` int(11) NOT NULL,
  `id_barberdetail` int(11) NOT NULL,
  `stylists` int(11) NOT NULL,
  `id_stylist` int(11) NOT NULL,
  `datetimeorder` datetime NOT NULL,
  `rescheduleorder` datetime NOT NULL,
  `servicebooked` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(32) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `status` enum('A','I','D','P') NOT NULL,
  `customerpic` varchar(128) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `fullname`, `email`, `phone`, `status`, `customerpic`, `created_at`, `updated_at`) VALUES
(1, 'saka', '827ccb0eea8a706c4c34a16891f84e7b', 'fsachkan', 'fajar.sachkan@gmail.com', '6281280525231', 'A', '', '2017-12-15 16:28:00', '2017-12-20 05:34:17'),
(10, 'julh', '827ccb0eea8a706c4c34a16891f84e7b', 'julhardy', 'julh@gmail.com', '081280802521', 'P', '-', '2017-12-20 05:20:43', '2017-12-20 05:20:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `galleryname` varchar(128) NOT NULL,
  `gallerydesc` varchar(128) NOT NULL,
  `gallerypic` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `id_barber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pagect`
--

CREATE TABLE `pagect` (
  `id_pagect` int(11) NOT NULL,
  `pagetitle` varchar(128) NOT NULL,
  `pagesub` varchar(128) NOT NULL,
  `pagedescr` text NOT NULL,
  `pagepic` varchar(128) NOT NULL,
  `pagestatus` enum('A','I','D','P') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `id_usersct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ranked_calc`
--

CREATE TABLE `ranked_calc` (
  `id_rankcalc` int(11) NOT NULL,
  `rankcalc_sum` decimal(17,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ranked_hist`
--

CREATE TABLE `ranked_hist` (
  `id_rankhist` int(11) NOT NULL,
  `id_barber` int(11) NOT NULL,
  `id_rankcalc` int(11) NOT NULL,
  `rankhist_amount` decimal(17,2) NOT NULL,
  `rankhist_add_by` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stylist`
--

CREATE TABLE `stylist` (
  `id_stylist` int(11) NOT NULL,
  `stylistname` varchar(50) NOT NULL,
  `stylistphone` varchar(16) NOT NULL,
  `stylistemail` varchar(50) NOT NULL,
  `stylistpass` varchar(100) NOT NULL,
  `stylistpic` varchar(128) NOT NULL,
  `styliststatus` enum('A','I','D','P') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `id_barber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stylistdetail`
--

CREATE TABLE `stylistdetail` (
  `stylists` int(11) NOT NULL,
  `stylistsname` varchar(32) NOT NULL,
  `stylistsday` varchar(32) NOT NULL,
  `stylistsin` varchar(32) NOT NULL,
  `stylistsout` varchar(32) NOT NULL,
  `id_stylist` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `usersct`
--

CREATE TABLE `usersct` (
  `id_usersct` int(11) NOT NULL,
  `usernamect` varchar(32) NOT NULL,
  `passwordct` varchar(50) NOT NULL,
  `fullnamect` varchar(32) NOT NULL,
  `emailct` varchar(32) NOT NULL,
  `statusct` enum('A','I','D','P') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barberdetail`
--
ALTER TABLE `barberdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barber` (`id_barber`);

--
-- Indexes for table `barbers`
--
ALTER TABLE `barbers`
  ADD PRIMARY KEY (`id_barber`),
  ADD KEY `id_barber` (`id_barber`);

--
-- Indexes for table `bookingorder`
--
ALTER TABLE `bookingorder`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `pagect`
--
ALTER TABLE `pagect`
  ADD PRIMARY KEY (`id_pagect`),
  ADD KEY `id_usersct` (`id_usersct`);

--
-- Indexes for table `ranked_calc`
--
ALTER TABLE `ranked_calc`
  ADD PRIMARY KEY (`id_rankcalc`);

--
-- Indexes for table `ranked_hist`
--
ALTER TABLE `ranked_hist`
  ADD PRIMARY KEY (`id_rankhist`);

--
-- Indexes for table `stylist`
--
ALTER TABLE `stylist`
  ADD PRIMARY KEY (`id_stylist`),
  ADD KEY `id_stylist` (`id_stylist`);

--
-- Indexes for table `stylistdetail`
--
ALTER TABLE `stylistdetail`
  ADD PRIMARY KEY (`stylists`),
  ADD KEY `id_stylist` (`id_stylist`);

--
-- Indexes for table `usersct`
--
ALTER TABLE `usersct`
  ADD PRIMARY KEY (`id_usersct`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barberdetail`
--
ALTER TABLE `barberdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `barbers`
--
ALTER TABLE `barbers`
  MODIFY `id_barber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookingorder`
--
ALTER TABLE `bookingorder`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pagect`
--
ALTER TABLE `pagect`
  MODIFY `id_pagect` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ranked_calc`
--
ALTER TABLE `ranked_calc`
  MODIFY `id_rankcalc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ranked_hist`
--
ALTER TABLE `ranked_hist`
  MODIFY `id_rankhist` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stylist`
--
ALTER TABLE `stylist`
  MODIFY `id_stylist` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stylistdetail`
--
ALTER TABLE `stylistdetail`
  MODIFY `stylists` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usersct`
--
ALTER TABLE `usersct`
  MODIFY `id_usersct` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barberdetail`
--
ALTER TABLE `barberdetail`
  ADD CONSTRAINT `barberdetail_ibfk_1` FOREIGN KEY (`id_barber`) REFERENCES `barbers` (`id_barber`);

--
-- Ketidakleluasaan untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`id_gallery`) REFERENCES `barbers` (`id_barber`);

--
-- Ketidakleluasaan untuk tabel `pagect`
--
ALTER TABLE `pagect`
  ADD CONSTRAINT `pagect_ibfk_1` FOREIGN KEY (`id_usersct`) REFERENCES `usersct` (`id_usersct`);

--
-- Ketidakleluasaan untuk tabel `stylistdetail`
--
ALTER TABLE `stylistdetail`
  ADD CONSTRAINT `stylistdetail_ibfk_1` FOREIGN KEY (`id_stylist`) REFERENCES `stylist` (`id_stylist`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
