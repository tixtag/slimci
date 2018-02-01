-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Feb 2018 pada 07.51
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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
-- Struktur dari tabel `booking_order`
--

CREATE TABLE `booking_order` (
  `id_order` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `owner_detail_id` int(11) NOT NULL,
  `stylist_detail_id` int(11) NOT NULL,
  `stylist_id` int(11) NOT NULL,
  `datetimeorder` datetime NOT NULL,
  `rescheduleorder` datetime NOT NULL,
  `servicebooked` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_descript` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `category_descript`) VALUES
(1, 'BarberShop');

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
  `customer_pic` varchar(128) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `fullname`, `email`, `phone`, `status`, `customer_pic`, `created_at`, `updated_at`) VALUES
(1, 'saka', '827ccb0eea8a706c4c34a16891f84e7b', 'fsachkan', 'fajar.sachkan@gmail.com', '6281280525231', 'A', '', '2017-12-15 16:28:00', '2017-12-20 05:34:17'),
(10, 'julh', '827ccb0eea8a706c4c34a16891f84e7b', 'julhardy', 'julh@gmail.com', '081280802521', 'P', '-', '2017-12-20 05:20:43', '2017-12-20 05:20:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `gallery_name` varchar(128) NOT NULL,
  `gallery_desc` varchar(128) NOT NULL,
  `gallery_pic` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `owner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `owners`
--

CREATE TABLE `owners` (
  `id_owner` int(11) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `owner_address` varchar(225) NOT NULL,
  `owner_email` varchar(50) NOT NULL,
  `owner_phone` varchar(16) NOT NULL,
  `owner_pass` varchar(100) NOT NULL,
  `owner_type` varchar(32) NOT NULL,
  `working_date` varchar(32) NOT NULL,
  `opening_hours` time DEFAULT NULL,
  `closing_hours` time DEFAULT NULL,
  `owner_logo` varchar(128) NOT NULL,
  `owner_status` enum('A','I','D','P') NOT NULL,
  `owner_branch` varchar(4) NOT NULL,
  `owner_location` varchar(225) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `owners`
--

INSERT INTO `owners` (`id_owner`, `owner_name`, `owner_address`, `owner_email`, `owner_phone`, `owner_pass`, `owner_type`, `working_date`, `opening_hours`, `closing_hours`, `owner_logo`, `owner_status`, `owner_branch`, `owner_location`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Patriot', 'Ruko Crystal Lnae, Serpong', 'patriot@gmail.com', '081280525231', '827ccb0eea8a706c4c34a16891f84e7b', 'Elite', '12', '09:00:00', '22:00:00', '', 'A', '', '', 1, '2017-12-20 05:20:43', '2017-12-20 05:20:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `owners_detail`
--

CREATE TABLE `owners_detail` (
  `id_owner_detail` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `services` varchar(128) NOT NULL,
  `price` decimal(17,2) NOT NULL,
  `promo` decimal(17,2) NOT NULL,
  `descript` text NOT NULL,
  `owner_detail_pic` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `owners_detail`
--

INSERT INTO `owners_detail` (`id_owner_detail`, `owner_id`, `services`, `price`, `promo`, `descript`, `owner_detail_pic`, `created_at`, `updated_at`) VALUES
(1, 1, 'Potong Pendek', '500000.00', '0.00', '', '', '2017-12-20 05:20:43', '2017-12-20 05:20:43'),
(2, 1, 'Potong Botak', '300000.00', '0.00', '', '', '2017-12-20 05:20:43', '2017-12-20 05:20:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `page`
--

CREATE TABLE `page` (
  `id_page` int(11) NOT NULL,
  `page_title` varchar(128) NOT NULL,
  `page_sub` varchar(128) NOT NULL,
  `page_descr` text NOT NULL,
  `page_pic` varchar(128) NOT NULL,
  `page_status` enum('A','I','D','P') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `page_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `page_user`
--

CREATE TABLE `page_user` (
  `id_page_user` int(11) NOT NULL,
  `page_username` varchar(32) NOT NULL,
  `page_password` varchar(50) NOT NULL,
  `page_fullname` varchar(32) NOT NULL,
  `page_email` varchar(32) NOT NULL,
  `page_status` enum('A','I','D','P') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ranked_calc`
--

CREATE TABLE `ranked_calc` (
  `id_ranked_calc` int(11) NOT NULL,
  `ranked_calc_sum` decimal(17,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ranked_hist`
--

CREATE TABLE `ranked_hist` (
  `id_ranked_hist` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `ranked_calc_id` int(11) NOT NULL,
  `ranked_hist_amount` decimal(17,2) NOT NULL,
  `ranked_hist_add_by` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stylist`
--

CREATE TABLE `stylist` (
  `id_stylist` int(11) NOT NULL,
  `stylist_name` varchar(50) NOT NULL,
  `stylist_phone` varchar(16) NOT NULL,
  `stylist_email` varchar(50) NOT NULL,
  `stylist_pass` varchar(100) NOT NULL,
  `stylist_pic` varchar(128) NOT NULL,
  `stylist_status` enum('A','I','D','P') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `owner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stylist_detail`
--

CREATE TABLE `stylist_detail` (
  `id_stylist_detail` int(11) NOT NULL,
  `stylist_detail_name` varchar(32) NOT NULL,
  `stylist_detail_day` varchar(32) NOT NULL,
  `stylist_detail_in` varchar(32) NOT NULL,
  `stylist_detail_out` varchar(32) NOT NULL,
  `stylist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_order`
--
ALTER TABLE `booking_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `descr_category` (`category_descript`);

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
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id_owner`),
  ADD KEY `id_barber` (`id_owner`);

--
-- Indexes for table `owners_detail`
--
ALTER TABLE `owners_detail`
  ADD PRIMARY KEY (`id_owner_detail`),
  ADD KEY `id_barber` (`owner_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id_page`),
  ADD KEY `id_usersct` (`page_user_id`);

--
-- Indexes for table `page_user`
--
ALTER TABLE `page_user`
  ADD PRIMARY KEY (`id_page_user`);

--
-- Indexes for table `ranked_calc`
--
ALTER TABLE `ranked_calc`
  ADD PRIMARY KEY (`id_ranked_calc`);

--
-- Indexes for table `ranked_hist`
--
ALTER TABLE `ranked_hist`
  ADD PRIMARY KEY (`id_ranked_hist`);

--
-- Indexes for table `stylist`
--
ALTER TABLE `stylist`
  ADD PRIMARY KEY (`id_stylist`),
  ADD KEY `id_stylist` (`id_stylist`);

--
-- Indexes for table `stylist_detail`
--
ALTER TABLE `stylist_detail`
  ADD PRIMARY KEY (`id_stylist_detail`),
  ADD KEY `id_stylist` (`stylist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_order`
--
ALTER TABLE `booking_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id_owner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `owners_detail`
--
ALTER TABLE `owners_detail`
  MODIFY `id_owner_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id_page` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_user`
--
ALTER TABLE `page_user`
  MODIFY `id_page_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ranked_calc`
--
ALTER TABLE `ranked_calc`
  MODIFY `id_ranked_calc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ranked_hist`
--
ALTER TABLE `ranked_hist`
  MODIFY `id_ranked_hist` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stylist`
--
ALTER TABLE `stylist`
  MODIFY `id_stylist` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stylist_detail`
--
ALTER TABLE `stylist_detail`
  MODIFY `id_stylist_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`id_gallery`) REFERENCES `owners` (`id_owner`);

--
-- Ketidakleluasaan untuk tabel `owners_detail`
--
ALTER TABLE `owners_detail`
  ADD CONSTRAINT `owners_detail_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id_owner`);

--
-- Ketidakleluasaan untuk tabel `page`
--
ALTER TABLE `page`
  ADD CONSTRAINT `page_ibfk_1` FOREIGN KEY (`page_user_id`) REFERENCES `page_user` (`id_page_user`);

--
-- Ketidakleluasaan untuk tabel `stylist_detail`
--
ALTER TABLE `stylist_detail`
  ADD CONSTRAINT `stylist_detail_ibfk_1` FOREIGN KEY (`stylist_id`) REFERENCES `stylist` (`id_stylist`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
