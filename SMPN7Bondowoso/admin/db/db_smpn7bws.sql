-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 08:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smpn7bws`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name_admin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name_admin`, `username`, `password`, `picture_admin`) VALUES
(1, 'Rifjan Jundila', 'admin', '202cb962ac59075b964b07152d234b70', 'ui-sam.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `contact`, `email`) VALUES
(3, '089516325685', 'rjndla@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name_emp` varchar(255) NOT NULL,
  `category_emp` enum('guru','karyawan') NOT NULL,
  `position_emp` varchar(255) NOT NULL,
  `picture_emp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name_emp`, `category_emp`, `position_emp`, `picture_emp`) VALUES
(1, 'Rifjan Jundilaqwafafawet', 'karyawan', 'qwrqrq', 'ui-danro.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gallery_title` varchar(255) NOT NULL,
  `gallery_info` text NOT NULL,
  `galeri_kategori` enum('kegiatan','sapras') NOT NULL,
  `gallery_date` varchar(100) NOT NULL,
  `aid` int(11) NOT NULL,
  `gallery_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gallery_title`, `gallery_info`, `galeri_kategori`, `gallery_date`, `aid`, `gallery_picture`) VALUES
(60, 'Contoh Galeri Kegiatan', 'Test', 'kegiatan', '12-29-2020', 1, '493-ny.jpg'),
(61, 'afaqwfwqqwrfwqewqeqwras', 'fasfasfa', 'sapras', '12-02-2020', 1, '469-ui-divya.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `headmaster`
--

CREATE TABLE `headmaster` (
  `id` int(11) NOT NULL,
  `name_hm` varchar(255) NOT NULL,
  `date_hm` varchar(100) NOT NULL,
  `educate_hm` text NOT NULL,
  `experience` text NOT NULL,
  `picture_hm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `headmaster`
--

INSERT INTO `headmaster` (`id`, `name_hm`, `date_hm`, `educate_hm`, `experience`, `picture_hm`) VALUES
(5, 'Rifjan Jundila', '12-28-2020', 'SMA', 'Pekerja Luar', '393-ui-sherman.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `landing_page`
--

CREATE TABLE `landing_page` (
  `id_page` int(50) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_content` text NOT NULL,
  `page_slider` text NOT NULL,
  `page_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `landing_page`
--

INSERT INTO `landing_page` (`id_page`, `page_title`, `page_content`, `page_slider`, `page_url`) VALUES
(6, 'smpn 7 Bondowoso', 'Sekolah Adiwiyata', '759-profile-02.jpg', 'https://www.academia.edu/19158539/Teknik_Penulisan_Tugas_Akhir');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_tittle` varchar(255) NOT NULL,
  `news_content` text NOT NULL,
  `news_picture` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `news_category` enum('berita','prestasi') NOT NULL,
  `news_date` date NOT NULL,
  `aid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_tittle`, `news_content`, `news_picture`, `slug`, `news_category`, `news_date`, `aid`) VALUES
(58, 'Kejadian Penculikan Bayi Usia 20', '<p>qwrqtqwt</p>', '339-ui-divya.jpg', 'Kejadian-Penculikan-Bayi-Usia-20', 'berita', '2020-12-28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `profile_title` varchar(255) NOT NULL,
  `profile_history` text NOT NULL,
  `profile_visi` text NOT NULL,
  `profile_misi` text NOT NULL,
  `profile_logo` varchar(255) NOT NULL,
  `profile_location` varchar(255) NOT NULL,
  `profile_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `profile_title`, `profile_history`, `profile_visi`, `profile_misi`, `profile_logo`, `profile_location`, `profile_address`) VALUES
(7, 'wq', '<p>qwr</p>', 'qwr', '<p>qwrwqr</p>', '500.png', 'https://www.academia.edu/33281928/MENELUSURI_DAN_MENGANALISIS_MODEL_TEKS_AKADEMIK', 'Lumajangwqrqw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aid` (`aid`);

--
-- Indexes for table `headmaster`
--
ALTER TABLE `headmaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landing_page`
--
ALTER TABLE `landing_page`
  ADD PRIMARY KEY (`id_page`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aid` (`aid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `headmaster`
--
ALTER TABLE `headmaster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `landing_page`
--
ALTER TABLE `landing_page`
  MODIFY `id_page` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
