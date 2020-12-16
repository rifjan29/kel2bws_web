-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 06:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form-mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nama` varchar(50) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `birthday` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(12) NOT NULL,
  `uname` varchar(18) NOT NULL,
  `passw` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nama`, `nim`, `birthday`, `gender`, `email`, `phone`, `uname`, `passw`) VALUES
('', '', '', '', '', 0, '', ''),
('qwdafsdvsadvas', '1244221122', '18/11/2020', 'Laki laki', 'fjrtkj2@gmail.com', 1413423423, 'asdasda', 'qe3we3'),
('Fajar', 'e1q3414', '10/11/2020', 'Laki laki', 'fawqqiuwe@gmail.com', 1241351352, 'asdas', 'qwe2da'),
('asdas', 'e3463412', '03/11/2020', 'Laki laki', 'fajar098123@gmail.com', 1241351352, 'trdtrd', '6454e5d4'),
('12313awdaw', 'qe2e', '09/11/2020', 'Laki laki', 'fawqqiuwe@gmail.com', 1241351352, 'asda', '12e2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
