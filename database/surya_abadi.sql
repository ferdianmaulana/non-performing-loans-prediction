-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 09:26 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surya_abadi`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataset`
--

CREATE TABLE `dataset` (
  `id_data` int(11) NOT NULL,
  `status_pernikahan` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `usia` varchar(20) NOT NULL,
  `pendapatan` varchar(20) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL,
  `jumlah_pinjaman` varchar(20) NOT NULL,
  `waktu_angsuran` varchar(20) NOT NULL,
  `status_kredit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataset`
--

INSERT INTO `dataset` (`id_data`, `status_pernikahan`, `jenis_kelamin`, `usia`, `pendapatan`, `pekerjaan`, `jumlah_pinjaman`, `waktu_angsuran`, `status_kredit`) VALUES
(1, 'Menikah', 'Perempuan', 'Tua', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(2, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(3, 'Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(4, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(5, 'Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(6, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Buruh', 'Sangat Rendah', '10 bulan', 'Lancar '),
(7, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Petani', 'Sangat Rendah', '10 bulan', 'Lancar '),
(8, 'Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Buruh', 'Sangat Rendah', '10 bulan', 'Lancar '),
(9, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Wirausaha', 'Rendah', '10 bulan', 'Macet '),
(10, 'Menikah', 'Laki-Laki', 'Tua', 'Sedang', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(11, 'Menikah', 'Perempuan', 'Dewasa', 'Tinggi', 'PNS', 'Tinggi', '24 bulan', 'Lancar '),
(12, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(13, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(14, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(15, 'Menikah', 'Laki-Laki', 'Tua', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(16, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(17, 'Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Buruh', 'Sangat Rendah', '10 bulan', 'Lancar '),
(18, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(19, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(20, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Buruh', 'Sangat Rendah', '10 bulan', 'Lancar '),
(21, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Rendah', '10 bulan', 'Lancar '),
(22, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(23, 'Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(24, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(25, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(26, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(27, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(28, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Petani', 'Sangat Rendah', '10 bulan', 'Macet '),
(29, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(30, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(31, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Wirausaha', 'Rendah', '10 bulan', 'Lancar '),
(32, 'Menikah', 'Perempuan', 'Tua', 'Rendah', 'Buruh', 'Sangat Rendah', '10 bulan', 'Macet '),
(33, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Wirausaha', 'Tinggi', '24 bulan', 'Lancar '),
(34, 'Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Buruh', 'Sedang', '24 bulan', 'Lancar '),
(35, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Buruh', 'Sangat Rendah', '10 bulan', 'Lancar '),
(36, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Rendah', '10 bulan', 'Lancar '),
(37, 'Menikah', 'Perempuan', 'Tua', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(38, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(39, 'Menikah', 'Laki-Laki', 'Tua', 'Sedang', 'Wirausaha', 'Sangat Tinggi', '36 bulan', 'Lancar '),
(40, 'Menikah', 'Perempuan', 'Tua', 'Rendah', 'Wirausaha', 'Rendah', '10 bulan', 'Macet '),
(41, 'Menikah', 'Laki-Laki', 'Tua', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(42, 'Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Buruh', 'Sedang', '10 bulan', 'Lancar '),
(43, 'Menikah', 'Laki-Laki', 'Tua', 'Sedang', 'PNS', 'Sedang', '10 bulan', 'Lancar '),
(44, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(45, 'Menikah', 'Laki-Laki', 'Dewasa', 'Tinggi', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(46, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(47, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(48, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(49, 'Menikah', 'Perempuan', 'Tua', 'Rendah', 'Pensiunan', 'Sangat Rendah', '10 bulan', 'Macet '),
(50, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'PNS', 'Sedang', '10 bulan', 'Macet '),
(51, 'Belum Menikah', 'Perempuan', 'Muda', 'Rendah', 'Buruh', 'Sangat Rendah', '10 bulan', 'Lancar '),
(52, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(53, 'Menikah', 'Perempuan', 'Tua', 'Tinggi', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(54, 'Menikah', 'Laki-Laki', 'Tua', 'Sedang', 'Pensiunan', 'Sangat Rendah', '10 bulan', 'Lancar '),
(55, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(56, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(57, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Buruh', 'Sangat Rendah', '10 bulan', 'Lancar '),
(58, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'PNS', 'Rendah', '10 bulan', 'Lancar '),
(59, 'Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(60, 'Belum Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(61, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(62, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Buruh', 'Sangat Rendah', '10 bulan', 'Lancar '),
(63, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(64, 'Menikah', 'Laki-Laki', 'Tua', 'Sedang', 'PNS', 'Rendah', '10 bulan', 'Lancar '),
(65, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Buruh', 'Sedang', '24 bulan', 'Lancar '),
(66, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(67, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Wirausaha', 'Sedang', '24 bulan', 'Lancar '),
(68, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Wirausaha', 'Sangat Tinggi', '36 bulan', 'Lancar '),
(69, 'Menikah', 'Laki-Laki', 'Tua', 'Sedang', 'PNS', 'Rendah', '10 bulan', 'Lancar '),
(70, 'Menikah', 'Perempuan', 'Dewasa', 'Tinggi', 'Wirausaha', 'Sedang', '10 bulan', 'Macet '),
(71, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Pensiunan', 'Sangat Tinggi', '10 bulan', 'Lancar '),
(72, 'Menikah', 'Laki-Laki', 'Tua', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(73, 'Belum Menikah', 'Laki-Laki', 'Muda', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(74, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(75, 'Menikah', 'Laki-Laki', 'Tua', 'Sedang', 'Karyawan Swasta', 'Rendah', '10 bulan', 'Macet '),
(76, 'Menikah', 'Laki-Laki', 'Tua', 'Rendah', 'Buruh', 'Sangat Rendah', '10 bulan', 'Lancar '),
(77, 'Menikah', 'Perempuan', 'Tua', 'Tinggi', 'PNS', 'Rendah', '10 bulan', 'Lancar '),
(78, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Sedang', '24 bulan', 'Lancar '),
(79, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(80, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Wirausaha', 'Sedang', '24 bulan', 'Lancar '),
(81, 'Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Buruh', 'Sedang', '24 bulan', 'Lancar '),
(82, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(83, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(84, 'Menikah', 'Perempuan', 'Tua', 'Tinggi', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(85, 'Menikah', 'Laki-Laki', 'Tua', 'Sedang', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(86, 'Belum Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(87, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Wirausaha', 'Rendah', '10 bulan', 'Lancar '),
(88, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Buruh', 'Sangat Rendah', '10 bulan', 'Lancar '),
(89, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'PNS', 'Sedang', '10 bulan', 'Macet '),
(90, 'Menikah', 'Perempuan', 'Tua', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(91, 'Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Buruh', 'Sangat Rendah', '10 bulan', 'Macet '),
(92, 'Menikah', 'Laki-Laki', 'Tua', 'Sedang', 'Pensiunan', 'Sangat Rendah', '10 bulan', 'Lancar '),
(93, 'Menikah', 'Laki-Laki', 'Tua', 'Rendah', 'Wirausaha', 'Sedang', '24 bulan', 'Lancar '),
(94, 'Menikah', 'Perempuan', 'Muda', 'Sedang', 'Karyawan Swasta', 'Rendah', '10 bulan', 'Lancar '),
(95, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(96, 'Menikah', 'Laki-Laki', 'Tua', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(97, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Pensiunan', 'Sangat Rendah', '10 bulan', 'Lancar '),
(98, 'Menikah', 'Laki-Laki', 'Tua', 'Sedang', 'Wirausaha', 'Sangat Tinggi', '24 bulan', 'Lancar '),
(99, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(100, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(101, 'Menikah', 'Perempuan', 'Dewasa', 'Tinggi', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(102, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'PNS', 'Rendah', '10 bulan', 'Lancar '),
(103, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(104, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(105, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Buruh', 'Tinggi', '24 bulan', 'Macet '),
(106, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(107, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(108, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Buruh', 'Sangat Rendah', '10 bulan', 'Lancar '),
(109, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(110, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Buruh', 'Rendah', '10 bulan', 'Macet '),
(111, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Karyawan Swasta', 'Sangat Tinggi', '36 bulan', 'Lancar '),
(112, 'Menikah', 'Laki-Laki', 'Tua', 'Sedang', 'Karyawan Swasta', 'Sedang', '24 bulan', 'Lancar '),
(113, 'Menikah', 'Laki-Laki', 'Dewasa', 'Tinggi', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(114, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'PNS', 'Sedang', '10 bulan', 'Macet '),
(115, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(116, 'Menikah', 'Perempuan', 'Dewasa', 'Tinggi', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(117, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Wirausaha', 'Rendah', '10 bulan', 'Lancar '),
(118, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(119, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(120, 'Menikah', 'Perempuan', 'Tua', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(121, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'PNS', 'Sedang', '10 bulan', 'Macet '),
(122, 'Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Buruh', 'Sangat Rendah', '10 bulan', 'Lancar '),
(123, 'Menikah', 'Laki-Laki', 'Tua', 'Rendah', 'Wirausaha', 'Sedang', '10 bulan', 'Lancar '),
(124, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(125, 'Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(126, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(127, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'PNS', 'Rendah', '10 bulan', 'Lancar '),
(128, 'Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(129, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Pensiunan', 'Sangat Rendah', '10 bulan', 'Lancar '),
(130, 'Menikah', 'Laki-Laki', 'Tua', 'Rendah', 'Wirausaha', 'Rendah', '10 bulan', 'Lancar '),
(131, 'Menikah', 'Laki-Laki', 'Muda', 'Rendah', 'Karyawan Swasta', 'Sedang', '10 bulan', 'Macet '),
(132, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'PNS', 'Rendah', '24 bulan', 'Macet '),
(133, 'Menikah', 'Perempuan', 'Tua', 'Tinggi', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(134, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(135, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Wirausaha', 'Rendah', '10 bulan', 'Lancar '),
(136, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Wirausaha', 'Rendah', '10 bulan', 'Lancar '),
(137, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(138, 'Belum Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(139, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Buruh', 'Sangat Rendah', '10 bulan', 'Lancar '),
(140, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(141, 'Menikah', 'Perempuan', 'Dewasa', 'Tinggi', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(142, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Petani', 'Sangat Rendah', '10 bulan', 'Macet '),
(143, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(144, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(145, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'PNS', 'Sedang', '24 bulan', 'Lancar '),
(146, 'Menikah', 'Laki-Laki', 'Dewasa', 'Tinggi', 'Wirausaha', 'Rendah', '10 bulan', 'Lancar '),
(147, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'PNS', 'Rendah', '10 bulan', 'Lancar '),
(148, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Rendah', '10 bulan', 'Macet '),
(149, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Karyawan Swasta', 'Sedang', '10 bulan', 'Macet '),
(150, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(151, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(152, 'Menikah', 'Perempuan', 'Tua', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(153, 'Belum Menikah', 'Laki-Laki', 'Muda', 'Rendah', 'Buruh', 'Sangat Rendah', '10 bulan', 'Lancar '),
(154, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Sedang', '10 bulan', 'Lancar '),
(155, 'Menikah', 'Perempuan', 'Tua', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(156, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(157, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(158, 'Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(159, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(160, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(161, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'PNS', 'Sedang', '10 bulan', 'Macet '),
(162, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(163, 'Menikah', 'Perempuan', 'Dewasa', 'Tinggi', 'PNS', 'Rendah', '10 bulan', 'Lancar '),
(164, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(165, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(166, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(167, 'Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(168, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(169, 'Menikah', 'Perempuan', 'Dewasa', 'Tinggi', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(170, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(171, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(172, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(173, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(174, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(175, 'Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Buruh', 'Sangat Rendah', '10 bulan', 'Macet '),
(176, 'Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(177, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Wirausaha', 'Rendah', '10 bulan', 'Macet '),
(178, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(179, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(180, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(181, 'Menikah', 'Perempuan', 'Tua', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(182, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(183, 'Menikah', 'Perempuan', 'Tua', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(184, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(185, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(186, 'Menikah', 'Laki-Laki', 'Dewasa', 'Tinggi', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(187, 'Menikah', 'Laki-Laki', 'Tua', 'Sedang', 'Karyawan Swasta', 'Sedang', '10 bulan', 'Macet '),
(188, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(189, 'Menikah', 'Laki-Laki', 'Tua', 'Sedang', 'Pensiunan', 'Rendah', '10 bulan', 'Lancar '),
(190, 'Menikah', 'Perempuan', 'Tua', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(191, 'Menikah', 'Perempuan', 'Muda', 'Sedang', 'Wirausaha', 'Sedang', '10 bulan', 'Macet '),
(192, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Buruh', 'Rendah', '10 bulan', 'Macet '),
(193, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(194, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Pensiunan', 'Sedang', '10 bulan', 'Lancar '),
(195, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Wirausaha', 'Rendah', '10 bulan', 'Lancar '),
(196, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Wirausaha', 'Rendah', '10 bulan', 'Lancar '),
(197, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(198, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Rendah', '10 bulan', 'Macet '),
(199, 'Menikah', 'Laki-Laki', 'Dewasa', 'Tinggi', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(200, 'Belum Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Lancar '),
(201, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(202, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'PNS', 'Sangat Rendah', '10 bulan', 'Lancar '),
(203, 'Menikah', 'Perempuan', 'Tua', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Lancar '),
(204, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Karyawan Swasta', 'Rendah', '10 bulan', 'Macet '),
(205, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Pensiunan', 'Rendah', '10 bulan', 'Macet '),
(206, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Rendah', '10 bulan', 'Macet '),
(207, 'Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(208, 'Menikah', 'Perempuan', 'Tua', 'Rendah', 'Petani', 'Sangat Rendah', '10 bulan', 'Macet '),
(209, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Buruh', 'Sangat Rendah', '10 bulan', 'Macet '),
(210, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(211, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(212, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Karyawan Swasta', 'Rendah', '10 bulan', 'Macet '),
(213, 'Menikah', 'Laki-Laki', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(214, 'Menikah', 'Perempuan', 'Tua', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(215, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Rendah', '10 bulan', 'Macet '),
(216, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(217, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Rendah', '10 bulan', 'Macet '),
(218, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(219, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Buruh', 'Sangat Rendah', '10 bulan', 'Macet '),
(220, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(221, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Wirausaha', 'Rendah', '10 bulan', 'Macet '),
(222, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(223, 'Menikah', 'Perempuan', 'Tua', 'Sedang', 'Pensiunan', 'Sangat Rendah', '10 bulan', 'Macet '),
(224, 'Menikah', 'Laki-Laki', 'Tua', 'Tinggi', 'Wirausaha', 'Sedang', '10 bulan', 'Macet '),
(225, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(226, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Karyawan Swasta', 'Rendah', '10 bulan', 'Macet '),
(227, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(228, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Wirausaha', 'Rendah', '10 bulan', 'Macet '),
(229, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Rendah', '10 bulan', 'Macet '),
(230, 'Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Buruh', 'Sangat Rendah', '10 bulan', 'Macet '),
(231, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(232, 'Menikah', 'Perempuan', 'Tua', 'Rendah', 'Karyawan Swasta', 'Rendah', '10 bulan', 'Macet '),
(233, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Wirausaha', 'Rendah', '10 bulan', 'Macet '),
(234, 'Menikah', 'Perempuan', 'Tua', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(235, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(236, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(237, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'Karyawan Swasta', 'Rendah', '10 bulan', 'Macet '),
(238, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(239, 'Menikah', 'Perempuan', 'Tua', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(240, 'Menikah', 'Laki-Laki', 'Tua', 'Tinggi', 'Wirausaha', 'Sedang', '24 bulan', 'Macet '),
(241, 'Menikah', 'Laki-Laki', 'Tua', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(242, 'Menikah', 'Perempuan', 'Dewasa', 'Sedang', 'PNS', 'Rendah', '10 bulan', 'Macet '),
(243, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(244, 'Menikah', 'Perempuan', 'Tua', 'Tinggi', 'Wirausaha', 'Sedang', '24 bulan', 'Macet '),
(245, 'Menikah', 'Laki-Laki', 'Tua', 'Sedang', 'Pensiunan', 'Sangat Rendah', '10 bulan', 'Macet '),
(246, 'Menikah', 'Perempuan', 'Dewasa', 'Rendah', 'Wirausaha', 'Sangat Rendah', '10 bulan', 'Macet '),
(247, 'Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Buruh', 'Sangat Rendah', '10 bulan', 'Macet '),
(248, 'Belum Menikah', 'Laki-Laki', 'Dewasa', 'Rendah', 'Karyawan Swasta', 'Sangat Rendah', '10 bulan', 'Macet '),
(249, 'Menikah', 'Laki-Laki', 'Tua', 'Rendah', 'Petani', 'Sangat Rendah', '10 bulan', 'Macet '),
(250, 'Menikah', 'Perempuan', 'Dewasa', 'Tinggi', 'Wirausaha', 'Sedang', '24 bulan', 'Macet ');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(11) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `pekerjaan`) VALUES
(1, 'Wirausaha'),
(2, 'PNS'),
(3, 'Karyawan Swasta'),
(4, 'Buruh'),
(5, 'Petani'),
(6, 'Pensiunan');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_pinjaman`
--

CREATE TABLE `pengajuan_pinjaman` (
  `id_pengajuan` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `status_nikah` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(20) DEFAULT NULL,
  `pendapatan` int(11) DEFAULT NULL,
  `pinjaman` int(11) DEFAULT NULL,
  `waktu_pengembalian` varchar(20) DEFAULT NULL,
  `hasil_prediksi` varchar(20) DEFAULT NULL,
  `keputusan` varchar(20) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `waktu_pengajuan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan_pinjaman`
--

INSERT INTO `pengajuan_pinjaman` (`id_pengajuan`, `nama`, `jenis_kelamin`, `tgl_lahir`, `status_nikah`, `pekerjaan`, `pendapatan`, `pinjaman`, `waktu_pengembalian`, `hasil_prediksi`, `keputusan`, `id_user`, `waktu_pengajuan`) VALUES
(43, 'adit', 'Laki-Laki', '1970-12-31', 'Belum Menikah', 'Wiraswasta', 5000000, 2000000, '10 Bulan', 'Lancar', 'Diterima', 4, '2020-04-22'),
(44, 'fidel', 'Laki-Laki', '1978-06-05', 'Belum Menikah', 'PNS', 10000000, 1000000, '10 Bulan', 'Lancar', 'Diterima', 5, '2020-04-22'),
(45, 'wewe', 'Laki-Laki', '1960-12-31', 'Menikah', 'Petani', 1500000, 1000000, '10 Bulan', 'Macet', 'Ditolak', 4, '2020-04-22'),
(46, 'samian', 'Perempuan', '1960-12-31', 'Menikah', 'PNS', 8000000, 1000000, '10 Bulan', 'Lancar', 'Diterima', 2, '2020-05-05'),
(47, 'bag', 'Laki-Laki', '1978-12-31', 'Belum Menikah', 'Buruh', 1500000, 1000000, '10 Bulan', 'Macet', 'Ditolak', 2, '2020-05-05'),
(51, 'hmm', 'Laki-Laki', '1960-12-31', 'Belum Menikah', 'Wiraswasta', 9000000, 1000000, '10 Bulan', 'Lancar', 'Diterima', 1, '2020-05-05'),
(55, 'hasim', 'Laki-Laki', '1978-04-18', 'Belum Menikah', 'PNS', 5000000, 2500000, '10 Bulan', 'Macet', 'Ditolak', 5, '2020-03-11'),
(56, 'hasim', 'Laki-Laki', '1978-04-18', 'Belum Menikah', 'PNS', 5000000, 2500000, '10 Bulan', 'Macet', 'Ditolak', 1, '2020-03-11'),
(58, 'hasim', 'Laki-Laki', '1978-04-18', 'Belum Menikah', 'PNS', 5000000, 2500000, '10 Bulan', 'Macet', 'Ditolak', 2, '2020-02-11'),
(59, 'hasim', 'Laki-Laki', '1978-04-18', 'Belum Menikah', 'PNS', 5000000, 2500000, '10 Bulan', 'Macet', 'Diterima', 2, '2020-02-11'),
(60, 'hasim', 'Laki-Laki', '1978-04-18', 'Belum Menikah', 'PNS', 5000000, 2500000, '10 Bulan', 'Lancar', 'Diterima', 4, '2020-01-11'),
(61, 'hasim', 'Laki-Laki', '1978-04-18', 'Belum Menikah', 'PNS', 5000000, 2500000, '10 Bulan', 'Lancar', 'Ditolak', 4, '2020-01-11'),
(62, 'hasim', 'Laki-Laki', '1978-04-18', 'Belum Menikah', 'PNS', 5000000, 2500000, '10 Bulan', 'Macet', 'Ditolak', 5, '2019-12-11'),
(63, 'hasim', 'Laki-Laki', '1978-04-18', 'Belum Menikah', 'PNS', 5000000, 2500000, '10 Bulan', 'Macet', 'Diterima', 5, '2019-12-11'),
(64, 'hasim', 'Laki-Laki', '1978-04-18', 'Belum Menikah', 'PNS', 5000000, 2500000, '10 Bulan', 'Macet', 'Ditolak', 1, '2019-11-11'),
(66, 'hasim', 'Laki-Laki', '1978-04-18', 'Belum Menikah', 'PNS', 5000000, 2500000, '10 Bulan', 'Macet', 'Ditolak', 1, '2019-10-11'),
(67, 'hasim', 'Laki-Laki', '1978-04-18', 'Belum Menikah', 'PNS', 5000000, 2500000, '10 Bulan', 'Macet', 'Diterima', 1, '2019-10-11'),
(68, 'hasim', 'Laki-Laki', '1978-04-18', 'Belum Menikah', 'PNS', 5000000, 2500000, '10 Bulan', 'Macet', 'Ditolak', 1, '2019-09-11'),
(69, 'hasim', 'Laki-Laki', '1978-04-18', 'Belum Menikah', 'PNS', 5000000, 2500000, '10 Bulan', 'Lancar', 'Diterima', 5, '2019-09-11'),
(70, 'hasim', 'Laki-Laki', '1978-04-18', 'Belum Menikah', 'PNS', 5000000, 2500000, '10 Bulan', 'Macet', 'Ditolak', 1, '2019-08-11'),
(71, 'hasim', 'Laki-Laki', '1978-04-18', 'Belum Menikah', 'PNS', 5000000, 2500000, '10 Bulan', 'Lancar', 'Diterima', 1, '2019-08-11'),
(72, 'hasim', 'Laki-Laki', '1978-04-18', 'Belum Menikah', 'PNS', 5000000, 2500000, '10 Bulan', 'Macet', 'Ditolak', 1, '2019-07-11'),
(73, 'hasim', 'Laki-Laki', '1978-04-18', 'Belum Menikah', 'PNS', 5000000, 2500000, '10 Bulan', 'Macet', 'Diterima', 1, '2019-07-11'),
(74, 'hasim', 'Laki-Laki', '1978-04-18', 'Belum Menikah', 'PNS', 5000000, 2500000, '10 Bulan', 'Macet', 'Ditolak', 1, '2019-06-11'),
(75, 'hasim', 'Laki-Laki', '1978-04-18', 'Belum Menikah', 'PNS', 5000000, 2500000, '10 Bulan', 'Macet', 'Diterima', 1, '2019-06-11'),
(76, 'hasim', 'Laki-Laki', '1978-04-18', 'Belum Menikah', 'PNS', 5000000, 2500000, '10 Bulan', 'Macet', 'Ditolak', 1, '2019-05-11'),
(77, 'hasim', 'Laki-Laki', '1978-04-18', 'Belum Menikah', 'PNS', 5000000, 2500000, '10 Bulan', 'Macet', 'Diterima', 1, '2019-05-11'),
(78, 'Alam', 'Laki-Laki', '1980-12-31', 'Menikah', 'Karyawan Swasta', 2500000, 1000000, '10 Bulan', 'Macet', 'Diterima', 1, '2020-05-06'),
(79, 'Ahmad', 'Laki-Laki', '1960-12-31', 'Menikah', 'Pensiunan', 4000000, 1000000, '10 Bulan', 'Lancar', 'Diterima', 1, '2020-05-12'),
(80, 'Andi Rahman', 'Laki-Laki', '1993-12-31', 'Belum Menikah', 'Wiraswasta', 5000000, 4000000, '10 Bulan', 'Lancar', 'Ditolak', 1, '2020-05-12'),
(81, 'Fizi', 'Laki-Laki', '1960-12-31', 'Belum Menikah', 'PNS', 4500000, 2000000, '10 Bulan', 'Lancar', 'Diterima', 4, '2020-05-27'),
(82, 'agung', 'Laki-Laki', '1980-01-01', 'Belum Menikah', 'Wiraswasta', 5000000, 1000000, '10 Bulan', 'Lancar', 'Diterima', 1, '2020-05-27'),
(84, 'faisal', 'Laki-Laki', '1968-02-19', 'Menikah', 'PNS', 5000000, 1500000, '10 Bulan', 'Lancar', 'Diterima', 1, '2020-06-02'),
(85, 'Doni', 'Laki-Laki', '1970-12-31', 'Belum Menikah', 'PNS', 5000000, 4000000, '10 Bulan', 'Lancar', 'Diterima', 4, '2020-06-10'),
(86, 'ww', 'Laki-Laki', '1968-12-31', 'Menikah', 'Buruh', 2000000, 1500000, '10 Bulan', 'Lancar', 'Ditolak', 4, '2020-06-10'),
(87, 'yy', 'Laki-Laki', '1978-03-19', 'Menikah', 'Buruh', 1500000, 1000000, '10 Bulan', 'Macet', 'Ditolak', 4, '2020-06-10'),
(88, 'asdas', 'Laki-Laki', '1879-02-02', 'Menikah', 'Buruh', 2000000, 1500000, '10 Bulan', 'Macet', 'Ditolak', 4, '2020-06-10'),
(89, 'Fadho', 'Laki-Laki', '1998-02-12', 'Belum Menikah', 'PNS', 10000000, 3000000, '10 Bulan', 'Macet', 'Ditolak', 4, '2020-06-10'),
(90, 'Fadho', 'Laki-Laki', '1999-12-31', 'Belum Menikah', 'PNS', 10000000, 1000000, '10 Bulan', 'Lancar', 'Diterima', 4, '2020-06-10'),
(91, 'Arkan', 'Laki-Laki', '1997-12-31', 'Belum Menikah', 'PNS', 10000000, 3000000, '10 Bulan', 'Macet', 'Diterima', 4, '2020-06-10'),
(92, 'hernan', 'Laki-Laki', '1978-12-31', 'Belum Menikah', 'PNS', 10000000, 5000000, '10 Bulan', 'Lancar', 'Diterima', 4, '2020-06-10'),
(94, 'Azam', 'Laki-Laki', '1970-01-01', 'Belum Menikah', 'PNS', 1200000, 1200000, '10 bulan', 'Macet', 'Ditolak', 4, '2020-06-10'),
(95, 'Farid', 'Laki-Laki', '1976-12-31', 'Menikah', 'Wirausaha', 8000000, 4000000, '24 bulan', 'Macet', 'Diterima', 4, '2020-06-10'),
(97, 'Yogi', 'Laki-Laki', '1970-01-01', 'Belum Menikah', 'Karyawan Swasta', 5000000, 2000000, '10 bulan', 'Lancar', 'Diterima', 4, '2020-06-10'),
(98, 'ferdian', 'Laki-Laki', '1999-04-03', 'Belum Menikah', 'PNS', 10000000, 1000000, '10 bulan', 'Lancar', 'Diterima', 1, '2020-06-11'),
(100, 'yyy', 'Perempuan', '1989-04-03', 'Menikah', 'Petani', 2500000, 4000000, '24 bulan', 'Lancar', 'Ditolak', 1, '2020-06-11'),
(101, 'asdasd', 'Laki-Laki', '1958-12-31', 'Menikah', 'Wirausaha', 4000000, 7000000, '36 bulan', 'Lancar', 'Ditolak', 1, '2020-06-11'),
(102, 'safi', 'Laki-Laki', '1978-09-12', 'Menikah', 'Karyawan Swasta', 4000000, 5000000, '10 bulan', 'Lancar', 'Diterima', 1, '2020-06-11'),
(104, 'huhu', 'Perempuan', '1995-12-31', 'Menikah', 'Karyawan Swasta', 2500000, 1500000, '10 bulan', 'Macet ', 'Ditolak', 1, '2020-06-11'),
(106, 'ian', 'Laki-Laki', '1970-12-31', 'Belum Menikah', 'Wirausaha', 4000000, 1500000, '10 bulan', 'Lancar ', 'Diterima', 1, '2020-06-16'),
(107, 'zizi', 'Perempuan', '1956-12-31', 'Menikah', 'Karyawan Swasta', 2500000, 1000000, '10 bulan', 'Macet ', 'Ditolak', 1, '2020-06-16'),
(108, 'Halim', 'Laki-Laki', '1974-07-18', 'Menikah', 'Wirausaha', 3000000, 2000000, '10 bulan', 'Lancar ', 'Diterima', 1, '2020-06-16'),
(109, 'Anwar', 'Laki-Laki', '1978-12-31', 'Belum Menikah', 'Buruh', 2500000, 1000000, '10 bulan', 'Lancar ', 'Diterima', 4, '2020-06-18'),
(110, 'Alif', 'Perempuan', '1967-12-31', 'Belum Menikah', 'Petani', 2000000, 2000000, '10 bulan', 'Macet ', 'Ditolak', 4, '2020-06-18'),
(112, 'Siti Maimun', 'Perempuan', '1978-12-29', 'Belum Menikah', 'Buruh', 2500000, 6000000, '10 bulan', 'Macet ', 'Ditolak', 4, '2020-07-14'),
(113, 'Adani Mahdi', 'Laki-Laki', '1985-12-31', 'Belum Menikah', 'PNS', 6000000, 2000000, '10 bulan', 'Lancar ', 'Diterima', 4, '2020-07-14'),
(114, 'Ahmad Jainudin', 'Laki-Laki', '1978-12-31', 'Menikah', 'PNS', 5000000, 2500000, '10 bulan', 'Lancar ', 'Diterima', 1, '2020-07-14'),
(115, 'Agung S.', 'Laki-Laki', '1978-12-31', 'Menikah', 'Wirausaha', 3000000, 2000000, '10 bulan', 'Lancar', 'Diterima', 1, '2020-07-14'),
(116, 'Putri Nur Rahma', 'Perempuan', '1978-12-31', 'Belum Menikah', 'Karyawan Swasta', 3000000, 2500000, '10 bulan', 'Macet ', 'Ditolak', 1, '2020-07-14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tgl_dibuat` datetime NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `tgl_dibuat`, `role`) VALUES
(1, 'Alex Solichin', 'pimpinan', '90973652b88fe07d05a4304f0a945de8', '2018-03-02 14:51:38', 'pimpinan'),
(2, 'Syaiful Anwar', 'agen2', '81dc9bdb52d04dc20036dbd8313ed055', '2020-05-11 06:19:10', 'agen'),
(3, 'Abdul Holili', 'admin', '21232f297a57a5a743894a0e4a801fc3', '0000-00-00 00:00:00', 'admin'),
(4, 'Reni Windiyawati', 'agen', '941730a7089d81c58c743a7577a51640', '0000-00-00 00:00:00', 'agen'),
(5, 'Rendi Arifin', 'agen3', '81dc9bdb52d04dc20036dbd8313ed055', '2020-05-11 06:19:10', 'agen'),
(18, 'Fahmi Aji', 'agen10', '81dc9bdb52d04dc20036dbd8313ed055', '2020-05-12 04:56:14', 'agen'),
(23, 'Ani Halima', 'agen4', 'e10adc3949ba59abbe56e057f20f883e', '2020-07-14 06:29:11', 'agen');

-- --------------------------------------------------------

--
-- Table structure for table `waktu_angsuran`
--

CREATE TABLE `waktu_angsuran` (
  `id` int(11) NOT NULL,
  `waktu_angsuran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu_angsuran`
--

INSERT INTO `waktu_angsuran` (`id`, `waktu_angsuran`) VALUES
(1, '10 bulan'),
(2, '24 bulan'),
(3, '36 bulan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataset`
--
ALTER TABLE `dataset`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `pengajuan_pinjaman`
--
ALTER TABLE `pengajuan_pinjaman`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `waktu_angsuran`
--
ALTER TABLE `waktu_angsuran`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataset`
--
ALTER TABLE `dataset`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengajuan_pinjaman`
--
ALTER TABLE `pengajuan_pinjaman`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `waktu_angsuran`
--
ALTER TABLE `waktu_angsuran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengajuan_pinjaman`
--
ALTER TABLE `pengajuan_pinjaman`
  ADD CONSTRAINT `pengajuan_pinjaman_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
