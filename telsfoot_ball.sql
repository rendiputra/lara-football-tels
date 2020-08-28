-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 15 Mar 2020 pada 13.18
-- Versi server: 5.7.28
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telsfoot_ball`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gambar` int(11) NOT NULL,
  `foto` text NOT NULL,
  `caption` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_pertandingan`
--

CREATE TABLE `hasil_pertandingan` (
  `id_hp` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `score1` text NOT NULL,
  `kk1` text NOT NULL,
  `km1` text NOT NULL,
  `score2` text NOT NULL,
  `kk2` text NOT NULL,
  `km2` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_pertandingan`
--

INSERT INTO `hasil_pertandingan` (`id_hp`, `id_jadwal`, `score1`, `kk1`, `km1`, `score2`, `kk2`, `km2`) VALUES
(1, 29, 'null', 'null', 'null', '[\"536\",\"536\",\"535\"]', '[\"540\"]', 'null'),
(2, 33, 'null', '[\"604\"]', 'null', '[\"545\",\"548\"]', 'null', 'null'),
(3, 24, '[\"526\",\"524\"]', 'null', 'null', 'null', 'null', 'null'),
(4, 36, '[\"538\"]', 'null', 'null', 'null', 'null', 'null'),
(5, 26, 'null', 'null', 'null', '[\"589\",\"590\",\"590\",\"590\",\"591\",\"585\"]', 'null', 'null'),
(6, 14, 'null', 'null', 'null', '[\"553\",\"553\",\"553\",\"553\",\"553\",\"553\"]', 'null', 'null'),
(7, 18, 'null', 'null', 'null', '[\"606\",\"615\",\"607\"]', 'null', 'null'),
(8, 22, '[\"591\",\"591\"]', 'null', 'null', '[\"555\"]', 'null', 'null'),
(9, 16, 'null', 'null', 'null', '[\"543\",\"543\",\"543\",\"543\",\"540\",\"540\",\"539\"]', '[\"540\"]', 'null'),
(10, 28, 'null', 'null', 'null', '[\"600\",\"600\",\"601\",\"603\",\"596\",\"596\",\"596\"]', 'null', 'null'),
(11, 13, 'null', 'null', 'null', '[\"611\"]', 'null', 'null'),
(12, 23, '[\"543\",\"538\",\"541\"]', 'null', 'null', 'null', 'null', 'null'),
(13, 21, 'null', 'null', 'null', '[\"564\",\"569\",\"569\",\"569\",\"569\",\"569\",\"568\",\"565\",\"570\",\"562\"]', 'null', 'null'),
(14, 30, 'null', '[\"555\"]', 'null', '[\"569\"]', 'null', 'null'),
(15, 17, '[\"569\",\"569\"]', 'null', 'null', '[\"590\",\"591\"]', 'null', 'null'),
(16, 27, 'null', 'null', 'null', '[\"614\",\"614\"]', 'null', 'null'),
(17, 42, 'null', 'null', 'null', '[\"651\",\"651\"]', 'null', 'null'),
(18, 38, '[\"610\",\"614\",\"620\",\"620\",\"626\"]', 'null', 'null', '[\"665\",\"669\"]', 'null', 'null'),
(19, 37, '[\"819\",\"820\"]', 'null', 'null', 'null', 'null', 'null'),
(20, 12, 'null', 'null', 'null', '[\"819\",\"820\"]', 'null', 'null'),
(21, 41, '[\"820\"]', 'null', 'null', '[\"614\"]', 'null', 'null'),
(22, 51, '[\"717\"]', '[\"715\"]', 'null', '[\"790\",\"795\",\"795\"]', 'null', 'null'),
(23, 47, '[\"722\",\"717\"]', '[\"705\"]', 'null', '[\"628\",\"630\",\"634\"]', 'null', 'null'),
(24, 48, '[\"696\",\"676\",\"676\",\"676\",\"674\"]', 'null', 'null', 'null', 'null', 'null'),
(25, 55, '[\"663\",\"663\"]', 'null', 'null', 'null', 'null', 'null'),
(26, 52, 'null', 'null', 'null', '[\"674\",\"674\",\"691\",\"691\",\"675\"]', 'null', 'null'),
(27, 54, '[\"805\"]', 'null', 'null', '[\"776\",\"776\",\"779\",\"780\",\"784\",\"782\"]', 'null', 'null'),
(28, 58, '[\"656\",\"658\",\"658\",\"657\",\"660\",\"660\"]', 'null', 'null', 'null', 'null', 'null'),
(29, 56, '[\"732\",\"733\",\"729\",\"729\",\"729\",\"735\"]', 'null', 'null', 'null', 'null', 'null'),
(30, 46, 'null', 'null', 'null', '[\"778\",\"778\",\"782\"]', 'null', 'null'),
(31, 44, 'null', 'null', 'null', '[\"659\",\"659\",\"661\",\"663\",\"660\",\"655\"]', 'null', 'null'),
(32, 50, '[\"776\"]', 'null', 'null', '[\"661\",\"663\",\"660\",\"660\"]', 'null', 'null'),
(33, 49, 'null', 'null', 'null', '[\"788\",\"788\",\"795\",\"794\",\"794\"]', 'null', 'null'),
(34, 57, '[\"779\"]', 'null', 'null', '[\"676\"]', 'null', 'null'),
(35, 20, '[\"827\",\"827\",\"824\"]', 'null', 'null', 'null', 'null', 'null'),
(36, 32, 'null', 'null', 'null', '[\"528\"]', 'null', 'null'),
(37, 45, 'null', 'null', 'null', 'null', 'null', 'null'),
(38, 34, '[\"540\",\"543\",\"543\",\"543\",\"543\"]', 'null', 'null', '[\"826\"]', 'null', 'null'),
(39, 25, '[\"615\",\"611\"]', 'null', 'null', '[\"569\",\"569\"]', 'null', 'null'),
(40, 31, '[\"615\",\"606\",\"606\",\"611\",\"611\",\"611\",\"611\"]', 'null', 'null', 'null', 'null', 'null'),
(41, 40, 'null', 'null', 'null', '[\"544\",\"544\",\"835\",\"545\",\"545\"]', 'null', 'null'),
(42, 43, '[\"700\",\"689\"]', '[\"689\"]', 'null', '[\"705\",\"722\",\"712\",\"712\"]', 'null', 'null'),
(43, 53, '[\"700\"]', '[\"689\"]', 'null', '[\"628\",\"628\",\"634\",\"630\",\"635\",\"635\",\"635\"]', 'null', 'null'),
(44, 19, '[\"604\",\"605\",\"601\"]', 'null', 'null', '[\"529\",\"529\",\"529\",\"528\",\"528\"]', 'null', 'null'),
(45, 35, '[\"527\",\"526\",\"524\",\"529\",\"529\",\"529\",\"525\",\"525\",\"531\",\"531\"]', 'null', 'null', 'null', 'null', 'null'),
(46, 39, '[\"604\",\"597\"]', 'null', 'null', 'null', 'null', 'null'),
(47, 15, '[\"551\",\"548\",\"550\"]', 'null', 'null', 'null', 'null', 'null'),
(48, 59, 'null', '[\"851\"]', 'null', '[\"755\"]', 'null', 'null'),
(67, 79, '[\"755\",\"756\",\"764\",\"759\",\"761\"]', '[\"754\",\"755\"]', 'null', '[\"869\",\"869\"]', '[\"766\"]', 'null'),
(50, 61, 'null', 'null', 'null', '[\"713\"]', 'null', 'null'),
(51, 62, 'null', 'null', 'null', '[\"771\"]', 'null', 'null'),
(53, 64, '[\"710\",\"713\"]', 'null', 'null', 'null', 'null', 'null'),
(54, 65, '[\"767\"]', 'null', 'null', '[\"745\"]', '[\"838\"]', 'null'),
(66, 77, '[\"794\",\"795\",\"788\",\"791\"]', 'null', 'null', '[\"661\",\"661\"]', 'null', 'null'),
(56, 68, '[\"756\"]', 'null', 'null', 'null', 'null', 'null'),
(57, 70, '[\"771\"]', 'null', 'null', '[\"873\"]', 'null', 'null'),
(58, 71, 'null', 'null', 'null', '[\"847\"]', 'null', 'null'),
(59, 72, '[\"868\"]', 'null', 'null', 'null', 'null', 'null'),
(65, 78, 'null', 'null', 'null', '[\"543\",\"538\"]', 'null', 'null'),
(62, 74, '[\"755\",\"764\"]', '[\"752\"]', 'null', 'null', 'null', 'null'),
(63, 75, 'null', 'null', 'null', '[\"791\",\"790\",\"788\"]', 'null', 'null'),
(64, 76, '[\"635\"]', 'null', 'null', '[\"656\",\"655\",\"663\",\"657\"]', 'null', 'null');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(35) NOT NULL,
  `kategori` varchar(35) NOT NULL,
  `grup` varchar(35) NOT NULL,
  `u` varchar(35) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tim1` varchar(50) NOT NULL,
  `tim2` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `tanggal`, `jam`, `kategori`, `grup`, `u`, `tempat`, `tim1`, `tim2`, `created_at`, `updated_at`) VALUES
(12, '2019-10-05', '14.00', 'League', 'A', 'U11', 'Lapangan 1', '22', '23', '2019-10-04 02:59:01', '2019-10-04 02:59:01'),
(13, '2019-10-05', '07.00', 'League', 'A', 'U9', 'Lapangan 1', '12', '13', '2019-10-04 05:37:27', '2019-10-04 05:37:27'),
(14, '2019-10-05', '07.00', 'League', 'A', 'U9', 'Lapangan 2', '14', '15', '2019-10-04 05:42:05', '2019-10-04 05:42:05'),
(15, '2019-10-05', '07.25', 'League', 'B', 'U9', 'Lapangan 1', '17', '18', '2019-10-04 05:46:06', '2019-10-04 05:46:06'),
(16, '2019-10-05', '07.25', 'League', 'B', 'U9', 'Lapangan 2', '20', '19', '2019-10-04 05:56:18', '2019-10-04 05:56:18'),
(17, '2019-10-05', '07.50', 'League', 'A', 'U9', 'Lapangan 1', '16', '12', '2019-10-04 05:57:37', '2019-10-04 05:57:37'),
(18, '2019-10-05', '07.50', 'League', 'A', 'U9', 'Lapangan 2', '15', '13', '2019-10-04 05:59:55', '2019-10-04 05:59:55'),
(19, '2019-10-05', '08.15', 'League', 'B', 'U9', 'Lapangan 1', '42', '21', '2019-10-04 06:03:39', '2019-10-04 06:03:39'),
(20, '2019-10-05', '08.15', 'League', 'B', 'U9', 'Lapangan 2', '18', '20', '2019-10-04 06:04:45', '2019-10-04 06:04:45'),
(21, '2019-10-05', '08.40', 'League', 'A', 'U9', 'Lapangan 1', '14', '16', '2019-10-04 06:10:36', '2019-10-04 06:10:36'),
(22, '2019-10-05', '08.40', 'League', 'A', 'U9', 'Lapangan 2', '12', '15', '2019-10-04 06:11:18', '2019-10-04 06:11:18'),
(23, '2019-10-05', '09.05', 'League', 'B', 'U9', 'Lapangan 1', '19', '42', '2019-10-04 06:27:17', '2019-10-04 06:27:17'),
(24, '2019-10-05', '09.05', 'League', 'B', 'U9', 'Lapangan 2', '21', '17', '2019-10-04 06:34:02', '2019-10-04 06:34:02'),
(25, '2019-10-05', '09.30', 'League', 'A', 'U9', 'Lapangan 1', '13', '16', '2019-10-04 06:36:06', '2019-10-04 06:36:06'),
(26, '2019-10-05', '09.30', 'League', 'A', 'U9', 'Lapangan 2', '14', '12', '2019-10-04 06:43:20', '2019-10-04 06:43:20'),
(27, '2019-10-05', '14.30', 'League', 'A', 'U11', 'Lapangan 1', '24', '25', '2019-10-04 06:44:21', '2019-10-04 06:44:21'),
(28, '2019-10-05', '09.55', 'League', 'B', 'U9', 'Lapangan 1', '20', '42', '2019-10-04 06:45:04', '2019-10-04 06:45:04'),
(29, '2019-10-05', '09.55', 'League', 'B', 'U9', 'Lapangan 2', '17', '19', '2019-10-04 07:01:34', '2019-10-04 07:01:34'),
(30, '2019-10-05', '10.20', 'League', 'A', 'U9', 'Lapangan 1', '15', '16', '2019-10-04 07:03:04', '2019-10-04 07:03:04'),
(31, '2019-10-05', '10.20', 'League', 'A', 'U9', 'Lapangan 2', '13', '14', '2019-10-04 07:10:02', '2019-10-04 07:10:02'),
(32, '2019-10-05', '10.45', 'League', 'B', 'U9', 'Lapangan 1', '18', '21', '2019-10-04 07:11:25', '2019-10-04 07:11:25'),
(33, '2019-10-05', '10.45', 'League', 'B', 'U9', 'Lapangan 2', '42', '17', '2019-10-04 07:12:37', '2019-10-04 07:12:37'),
(34, '2019-10-05', '12.30', 'League', 'B', 'U9', 'Lapangan 1', '19', '18', '2019-10-04 07:15:15', '2019-10-04 07:15:15'),
(35, '2019-10-05', '12.30', 'League', 'B', 'U9', 'Lapangan 2', '21', '20', '2019-10-04 07:18:54', '2019-10-04 07:18:54'),
(36, '2019-10-05', '13.20', 'League', 'B', 'U9', 'Lapangan 1', '19', '21', '2019-10-04 07:20:35', '2019-10-04 07:20:35'),
(37, '2019-10-05', '15.10', 'League', 'A', 'U11', 'Lapangan 1', '23', '24', '2019-10-04 07:20:35', '2019-10-04 07:20:35'),
(38, '2019-10-05', '15.40', 'League', 'A', 'U11', 'Lapangan 1', '25', '22', '2019-10-04 07:21:30', '2019-10-04 07:21:30'),
(39, '2019-10-05', '13.20', 'League', 'B', 'U9', 'Lapangan 2', '42', '18', '2019-10-04 07:21:54', '2019-10-04 07:21:54'),
(40, '2019-10-05', '13.25', 'League', 'B', 'U9', 'Lapangan 1', '20', '17', '2019-10-04 07:24:54', '2019-10-04 07:24:54'),
(41, '2019-10-05', '16.20', 'League', 'A', 'U11', 'Lapangan 1', '23', '25', '2019-10-04 07:31:38', '2019-10-04 07:31:38'),
(42, '2019-10-05', '16.50', 'League', 'A', 'U11', 'Lapangan 1', '22', '24', '2019-10-04 07:32:22', '2019-10-04 07:32:22'),
(43, '2019-10-06', '07.00', 'League', 'B', 'U11', 'Lap. 1', '26', '28', '2019-10-05 07:12:07', '2019-10-05 07:12:07'),
(44, '2019-10-06', '07.25', 'League', 'C', 'U11', 'Lap. 1', '31', '32', '2019-10-05 07:14:45', '2019-10-05 07:14:45'),
(45, '2019-10-06', '07.50', 'League', 'B', 'U11', 'Lap. 1', '29', '30', '2019-10-05 07:17:25', '2019-10-05 07:17:25'),
(46, '2019-10-06', '08.15', 'League', 'C', 'U11', 'Lap. 1', '33', '34', '2019-10-05 07:18:41', '2019-10-05 07:18:41'),
(47, '2019-10-06', '08.40', 'League', 'B', 'U11', 'Lap. 1', '28', '29', '2019-10-05 07:20:59', '2019-10-05 07:20:59'),
(48, '2019-10-06', '09.05', 'League', 'C', 'U11', 'Lap. 1', '35', '31', '2019-10-05 07:22:12', '2019-10-05 07:22:12'),
(49, '2019-10-06', '09.30', 'League', 'B', 'U11', 'Lap. 1', '26', '30', '2019-10-05 07:25:44', '2019-10-05 07:25:44'),
(50, '2019-10-06', '09.55', 'League', 'C', 'U11', 'Lap. 1', '34', '32', '2019-10-05 07:27:43', '2019-10-05 07:27:43'),
(51, '2019-10-06', '10.20', 'League', 'B', 'U11', 'Lap. 1', '28', '30', '2019-10-05 07:28:34', '2019-10-05 07:28:34'),
(52, '2019-10-06', '10.45', 'League', 'C', 'U11', 'Lap. 1', '33', '35', '2019-10-05 07:29:23', '2019-10-05 07:29:23'),
(53, '2019-10-06', '11.10', 'League', 'B', 'U11', 'Lap. 1', '26', '29', '2019-10-05 07:30:41', '2019-10-05 07:30:41'),
(54, '2019-10-06', '12.30', 'League', 'C', 'U11', 'Lap. 1', '31', '34', '2019-10-05 07:31:50', '2019-10-05 07:31:50'),
(55, '2019-10-06', '12.55', 'League', 'C', 'U11', 'Lap. 1', '32', '35', '2019-10-05 07:32:44', '2019-10-05 07:32:44'),
(56, '2019-10-06', '13.20', 'League', 'C', 'U11', 'Lap. 1', '33', '31', '2019-10-05 07:34:13', '2019-10-05 07:34:13'),
(57, '2019-10-06', '13.45', 'League', 'C', 'U11', 'Lap. 1', '34', '35', '2019-10-05 07:34:53', '2019-10-05 07:34:53'),
(58, '2019-10-06', '14.10', 'League', 'C', 'U11', 'Lap. 1', '32', '33', '2019-10-05 07:35:55', '2019-10-05 07:35:55'),
(59, '2019-10-13', '07.00', 'League', 'A', 'U13', 'Lapangan 1', '55', '56', '2019-10-08 08:37:27', '2019-10-08 08:37:27'),
(60, '2019-10-13', '07.25', 'League', 'Z', 'Z', 'Lapangan 1', '72', '73', '2019-10-08 08:38:07', '2019-10-08 08:38:07'),
(61, '2019-10-13', '07.50', 'League', 'A', 'U13', 'Lapangan 1', '74', '71', '2019-10-08 08:38:41', '2019-10-08 08:38:41'),
(62, '2019-10-13', '08.15', 'League', 'A', 'U13', 'Lapangan 1', '55', '73', '2019-10-08 08:39:12', '2019-10-08 08:39:12'),
(63, '2019-10-13', '08.40', 'League', 'Z', 'Z', 'Lapangan 1', '56', '72', '2019-10-08 08:39:51', '2019-10-08 08:39:51'),
(64, '2019-10-13', '09.05', 'League', 'A', 'U13', 'Lapangan 1', '71', '55', '2019-10-08 08:40:25', '2019-10-08 08:40:25'),
(65, '2019-10-13', '09.30', 'League', 'A', 'U13', 'Lapangan 1', '73', '74', '2019-10-08 08:40:59', '2019-10-08 08:40:59'),
(66, '2019-10-13', '09.55', 'League', 'Z', 'Z', 'Lapangan 1', '71', '72', '2019-10-08 08:41:44', '2019-10-08 08:41:44'),
(68, '2019-10-13', '10.20', 'League', 'A', 'U13', 'Lapangan 1', '56', '74', '2019-10-08 08:43:06', '2019-10-08 08:43:06'),
(69, '2019-10-13', '10.45', 'League', 'Z', 'Z', 'Lapangan 1', '55', '72', '2019-10-08 08:44:34', '2019-10-08 08:44:34'),
(70, '2019-10-13', '11.10', 'League', 'A', 'U13', 'Lapangan 1', '73', '71', '2019-10-08 08:45:06', '2019-10-08 08:45:06'),
(71, '2019-10-13', '12.30', 'League', 'A', 'U13', 'Lapangan 1', '74', '55', '2019-10-08 08:46:16', '2019-10-08 08:46:16'),
(72, '2019-10-13', '12.55', 'League', 'A', 'U13', 'Lapangan 1', '73', '56', '2019-10-08 08:46:48', '2019-10-08 08:46:48'),
(73, '2019-10-13', '13.20', 'League', 'Z', 'Z', 'Lapangan 1', '72', '74', '2019-10-08 08:47:29', '2019-10-08 08:47:29'),
(74, '2019-10-13', '13.45', 'League', 'A', 'U13', 'Lapangan 1', '56', '71', '2019-10-08 08:48:03', '2019-10-08 08:48:03'),
(75, '2019-10-19', '7.30', 'Cup', 'Semi', 'U11', 'Lapangan Utama', '25', '30', '2019-10-18 04:24:46', '2019-10-18 04:24:46'),
(76, '2019-10-20', '7.30', 'Cup', 'Semi', 'U11', 'Lapangan Utama', '29', '32', '2019-10-18 04:28:05', '2019-10-18 04:28:05'),
(77, '2019-10-26', '08.15-08.55', 'Cup', 'Final', 'U11', 'Lap. 1', '30', '32', '2019-10-21 07:25:53', '2019-10-21 07:25:53'),
(78, '2019-10-26', '07.30-08.10', 'League', 'Final', 'U9', 'Lap. 1', '13', '19', '2019-10-21 07:32:45', '2019-10-21 07:32:45'),
(79, '2019-10-26', '09.00-09.40', 'League', 'Final', 'U13', 'Lap. 1', '56', '73', '2019-10-21 07:35:15', '2019-10-21 07:35:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `klasemen`
--

CREATE TABLE `klasemen` (
  `id_klasemen` int(11) NOT NULL,
  `id_teams` int(11) NOT NULL,
  `nama_teams` text NOT NULL,
  `u` varchar(5) NOT NULL,
  `grup` varchar(10) NOT NULL,
  `main` int(3) NOT NULL DEFAULT '0',
  `menang` int(3) NOT NULL DEFAULT '0',
  `seri` int(3) NOT NULL DEFAULT '0',
  `kalah` int(3) NOT NULL DEFAULT '0',
  `gm` int(3) NOT NULL DEFAULT '0',
  `gk` int(3) NOT NULL DEFAULT '0',
  `sg` int(3) NOT NULL DEFAULT '0',
  `poin` int(3) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `klasemen`
--

INSERT INTO `klasemen` (`id_klasemen`, `id_teams`, `nama_teams`, `u`, `grup`, `main`, `menang`, `seri`, `kalah`, `gm`, `gk`, `sg`, `poin`, `created_at`, `updated_at`) VALUES
(12, 109, 'SSB Aqua Haier B', 'U9', 'A', 4, 2, 1, 1, 4, 10, 6, 7, '2019-10-06 04:15:13', '2019-10-06 04:15:13'),
(13, 120, 'Al Azhar Kemang', 'U9', 'A', 4, 3, 1, 0, 2, 13, 11, 10, '2019-10-05 21:29:15', '2019-10-05 21:29:15'),
(14, 108, 'Al Azhar Summarecon Merah', 'U9', 'A', 4, 0, 0, 4, 29, 0, -29, 0, '2019-10-06 04:17:15', '2019-10-06 04:17:15'),
(15, 104, 'Bemo FC', 'U9', 'A', 4, 1, 0, 3, 6, 7, 1, 3, '2019-10-06 04:16:26', '2019-10-06 04:16:26'),
(16, 148, 'SSB Maestro FC', 'U9', 'A', 4, 2, 2, 0, 4, 15, 11, 8, '2019-10-06 04:14:04', '2019-10-06 04:14:04'),
(17, 103, 'SSB Aqua Haier A', 'U9', 'B', 5, 3, 0, 2, 8, 7, -1, 9, '2019-10-05 21:30:38', '2019-10-05 21:30:38'),
(18, 123, 'SSB Bahtera', 'U9', 'B', 5, 1, 0, 4, 11, 4, -7, 3, '2019-10-05 21:31:21', '2019-10-05 21:31:21'),
(19, 102, 'SSB Tunas Prima', 'U9', 'B', 5, 5, 0, 0, 1, 19, 18, 15, '2019-10-06 04:18:17', '2019-10-06 04:18:17'),
(20, 100, 'Al Azhar Summarecon Hijau', 'U9', 'B', 5, 1, 0, 4, 27, 5, -22, 3, '2019-10-05 21:31:35', '2019-10-05 21:31:35'),
(21, 101, 'Petrostream Soccer School', 'U9', 'B', 5, 4, 0, 1, 4, 18, 14, 12, '2019-10-06 04:19:20', '2019-10-06 04:19:20'),
(22, 149, 'SSB Maestro FC', 'U11', 'A', 3, 0, 0, 3, 9, 2, -7, 0, '2019-10-06 04:05:31', '2019-10-06 04:05:31'),
(23, 132, 'SSB Petrostream Putih', 'U11', 'A', 3, 2, 1, 0, 1, 5, 4, 7, '2019-10-05 21:39:59', '2019-10-05 21:39:59'),
(24, 130, 'SSB Asses', 'U11', 'A', 3, 1, 0, 2, 4, 2, -2, 3, '2019-10-05 21:40:31', '2019-10-05 21:40:31'),
(25, 126, 'Al Azhar Kemang', 'U11', 'A', 3, 2, 1, 0, 3, 8, 5, 7, '2019-10-06 04:05:31', '2019-10-06 04:05:31'),
(26, 129, 'SSB Bahtera', 'U11', 'B', 3, 0, 0, 0, 16, 3, -13, 0, '2019-10-06 04:09:53', '2019-10-06 04:09:53'),
(28, 119, 'SSB Tunas Prima A', 'U11', 'B', 3, 1, 1, 1, 8, 8, 0, 4, '2019-10-05 21:48:42', '2019-10-05 21:48:42'),
(29, 105, 'Indonesian Eagle', 'U11', 'B', 3, 2, 1, 0, 3, 10, 7, 7, '2019-10-05 21:38:30', '2019-10-05 21:38:30'),
(30, 116, 'SSB Petrostream Kuning', 'U11', 'B', 3, 2, 1, 0, 1, 8, 7, 7, '2019-10-05 21:43:09', '2019-10-05 21:43:09'),
(31, 131, 'SSB Bintang Pulo Sirih', 'U11', 'C', 4, 0, 0, 4, 23, 0, -23, 0, '2019-10-05 21:44:44', '2019-10-05 21:44:44'),
(32, 106, 'SSB Bintang RDH', 'U11', 'C', 4, 4, 0, 0, 1, 18, 17, 12, '2019-10-05 21:45:12', '2019-10-05 21:45:12'),
(33, 153, 'SSB Tunas Prima B', 'U11', 'C', 4, 1, 0, 3, 14, 6, -8, 3, '2019-10-05 21:44:13', '2019-10-05 21:44:13'),
(34, 127, 'FSA Private', 'U11', 'C', 4, 2, 1, 1, 6, 11, 5, 7, '2019-10-06 04:09:53', '2019-10-06 04:09:53'),
(35, 146, 'SSB PJSS', 'U11', 'C', 4, 2, 1, 1, 3, 11, 8, 7, '2019-10-06 04:09:53', '2019-10-06 04:09:53'),
(42, 115, 'SSB Brazilian Soccer Schools LFA', 'U9', 'B', 5, 1, 0, 4, 12, 10, 2, 3, '2019-10-05 21:32:35', '2019-10-05 21:32:35'),
(55, 152, 'SSB Litara FC', 'U13', 'A', 4, 1, 0, 3, 4, 1, -3, 3, '2019-10-05 21:34:04', '2019-10-13 00:58:41'),
(56, 136, 'SSB Aqua Haier', 'U13', 'A', 4, 3, 0, 1, 1, 4, 3, 9, '2019-10-05 21:36:26', '2019-10-13 01:38:03'),
(71, 151, 'SSB Putra Utama', 'U13', 'A', 4, 2, 1, 1, 3, 4, 1, 7, '2019-10-05 21:56:19', '2019-10-13 01:38:03'),
(72, 142, 'SSB Bahtera', 'U13', 'A', 0, 0, 0, 0, 0, 0, 0, 0, '2019-10-06 04:01:09', '2019-10-13 01:12:26'),
(73, 140, 'SSB Asses', 'U13', 'A', 4, 2, 2, 0, 2, 4, 2, 8, '2019-10-06 04:01:09', '2019-10-13 00:56:22'),
(74, 138, 'Indonesian Eagle', 'U13', 'A', 4, 0, 2, 2, 4, 1, -3, 2, '2019-10-06 04:02:26', '2019-10-13 01:12:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_payment`
--

CREATE TABLE `konfirmasi_payment` (
  `id_payment` int(11) NOT NULL,
  `id_teams` int(11) NOT NULL,
  `pengirim` text NOT NULL,
  `bukti` text NOT NULL,
  `status` enum('valid','invalid','uncheck','') NOT NULL DEFAULT 'uncheck',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_09_01_072747_create_teams_table', 1),
(16, '2019_09_01_073558_create_players_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `players`
--

CREATE TABLE `players` (
  `id_players` bigint(20) UNSIGNED NOT NULL,
  `id_teams` int(11) NOT NULL,
  `foto_players` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_players` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_punggung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ibu` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `players`
--

INSERT INTO `players` (`id_players`, `id_teams`, `foto_players`, `nama_players`, `no_punggung`, `tanggal_lahir`, `posisi`, `nisn`, `ibu`, `created_at`, `updated_at`) VALUES
(510, 127, 'Bondan Setyo Priambodo.jpg', 'Bondan Setyo Priambodo', '1', '2008-03-24', 'GK', '0081126353', '-', '2019-10-05 23:01:47', '2019-10-05 23:01:47'),
(511, 100, 'Firman Indrawarman.jpg', 'Firman Indrawarman', '0', '2010-12-24', 'GK', '0109203050', '-', '2019-10-06 05:48:57', '2019-10-06 05:48:57'),
(512, 100, 'Ryuga Elfajr Kirana.jpg', 'Ryuga Elfajr Kirana', '0', '2011-04-24', 'GK', '0116100678', '-', '2019-10-06 05:49:49', '2019-10-06 05:49:49'),
(513, 100, 'Naufal Faizie Kusnadi.jpg', 'Naufal Faizie Kusnadi', '0', '2011-01-18', 'GK', '0115728159', '-', '2019-10-06 05:50:15', '2019-10-06 05:50:15'),
(514, 100, 'Naufal Zavier Syafriza.jpg', 'Naufal Zavier Syafriza', '0', '2011-06-30', 'GK', '0118425961', '-', '2019-10-06 05:50:52', '2019-10-06 05:50:52'),
(515, 100, 'Reisya Fatih Muttaqin.jpg', 'Reisya Fatih Muttaqin', '0', '2011-11-05', 'GK', '0114340864', '-', '2019-10-06 05:51:57', '2019-10-06 05:51:57'),
(516, 100, 'Ryhan Arkha Faeyza.jpg', 'Ryhan Arkha Faeyza', '0', '2011-05-09', 'GK', '0114091694', '-', '2019-10-06 05:52:51', '2019-10-06 05:52:51'),
(517, 100, 'Adelio Dasha Hendrian.jpg', 'Adelio Dasha Hendrian', '0', '2011-01-19', 'GK', '0114047728', '-', '2019-10-06 05:53:47', '2019-10-06 05:53:47'),
(518, 100, 'Fico Adhiwidya Kurniawan.jpg', 'Fico Adhiwidya Kurniawan', '0', '2011-03-04', 'GK', '0111436195', '-', '2019-10-06 05:54:30', '2019-10-06 05:54:30'),
(519, 100, 'Arya Adhibrata.png', 'Arya Adhibrata', '15', '2010-12-19', 'GK', '0107063814', '-', '2019-10-06 05:54:56', '2019-10-06 05:54:56'),
(520, 100, 'Rizky Akhtar Danendra.png', 'Rizky Akhtar Danendra', '10', '2010-10-25', 'GK', '0105310248', '-', '2019-10-06 05:55:20', '2019-10-06 05:55:20'),
(521, 100, 'Ibrahim Akmal Yudhistira.png', 'Ibrahim Akmal Yudhistira', '21', '2011-02-21', 'GK', '0115085191', '-', '2019-10-06 05:55:45', '2019-10-06 05:55:45'),
(522, 101, 'Muhammad Darren Atsaqif.jpg', 'Muhammad Darren Atsaqif', '26', '2010-11-15', 'GK', '0108770210', '-', '2019-10-06 05:56:30', '2019-10-06 05:56:30'),
(523, 101, 'Agus Dzaky Delandra.jpg', 'Agus Dzaky Delandra', '20', '2010-02-13', 'GK', '0105906310', '-', '2019-10-06 05:56:52', '2019-10-06 05:56:52'),
(524, 101, 'Zaky Faizar Rahman.jpg', 'Zaky Faizar Rahman', '7', '2010-04-20', 'GK', '0108636123', '-', '2019-10-06 05:57:15', '2019-10-06 05:57:15'),
(525, 101, 'Aurellio Rafka Radhitya Kalangi.jpg', 'Aurellio Rafka Radhitya Kalangi', '7', '2010-05-14', 'GK', '0104323451', '-', '2019-10-06 05:57:39', '2019-10-06 05:57:39'),
(526, 101, 'Azzam Mashul \'aqor Ahmadi.jpg', 'Azzam Mashul \'aqor Ahmadi', '13', '2010-06-04', 'GK', '0104763949', '-', '2019-10-06 05:58:13', '2019-10-06 05:58:13'),
(527, 101, 'MUHAMAD HUSSYAERI ALFARIJI.jpg', 'MUHAMAD HUSSYAERI ALFARIJI', '25', '2010-12-05', 'GK', '0107026927', '-', '2019-10-06 05:58:29', '2019-10-06 05:58:29'),
(528, 101, 'Edsel Henrian Fatih.jpg', 'Edsel Henrian Fatih', '23', '2010-12-01', 'GK', '0101998401', '-', '2019-10-06 05:58:48', '2019-10-06 05:58:48'),
(529, 101, 'Muhammad Bintang Susanto.jpg', 'Muhammad Bintang Susanto', '21', '2010-01-27', 'GK', '0103039549', '-', '2019-10-06 05:59:31', '2019-10-06 05:59:31'),
(530, 101, 'Keanu Akhmad Al Ayubi.jpg', 'Keanu Akhmad Al Ayubi', '87', '2011-05-22', 'GK', '0116008499', '-', '2019-10-06 05:59:51', '2019-10-06 05:59:51'),
(531, 101, 'Hikari Yusuf Hakim Aprianto.jpg', 'Hikari Yusuf Hakim Aprianto', '18', '2010-02-24', 'GK', '0105959111', '-', '2019-10-06 06:00:27', '2019-10-06 06:00:27'),
(532, 101, 'Muhammad Rizky.jpg', 'Muhammad Rizky', '25', '2010-01-30', 'GK', '0101607191', '-', '2019-10-06 06:00:44', '2019-10-06 06:00:44'),
(533, 101, 'Hikari Yusuf Hakim Aprianto.jpg', 'Hikari Yusuf Hakim Aprianto', '10', '2010-02-24', 'GK', '0105959111', '-', '2019-10-06 06:01:06', '2019-10-06 06:01:06'),
(534, 102, 'Fairuz Nailil Hadi.jpg', 'Fairuz Nailil Hadi', '1', '2010-05-28', 'GK', '0107896225', '-', '2019-10-06 06:01:44', '2019-10-06 06:01:44'),
(535, 102, 'Fairuz Tsaqif.jpg', 'Fairuz Tsaqif', '20', '2010-07-19', 'GK', '0104328471', '-', '2019-10-06 06:02:07', '2019-10-06 06:02:07'),
(536, 102, 'Gomgom Valerian Benedict Simarmata.jpg', 'Gomgom Valerian Benedict Simarmata', '7', '2010-02-02', 'GK', '0102620434', '-', '2019-10-06 06:02:25', '2019-10-06 06:02:25'),
(537, 102, 'Ahmad Nizam Widianto.jpg', 'Ahmad Nizam Widianto', '30', '2010-03-01', 'GK', '0101752389', '-', '2019-10-06 06:02:48', '2019-10-06 06:02:48'),
(538, 102, 'Muhammad Fikri Islami.jpg', 'Muhammad Fikri Islami', '18', '2010-05-10', 'GK', '0109998665', '-', '2019-10-06 06:03:06', '2019-10-06 06:03:06'),
(539, 102, 'Alaric Farzan Gusrindra.jpg', 'Alaric Farzan Gusrindra', '24', '2010-12-30', 'GK', '0101503304', '-', '2019-10-06 06:03:26', '2019-10-06 06:03:26'),
(540, 102, 'Muhamad Fikri Zaidan Malawat.jpg', 'Muhamad Fikri Zaidan Malawat', '0', '2010-09-09', 'GK', '0107784412', '-', '2019-10-06 06:04:38', '2019-10-06 06:04:38'),
(541, 102, 'Raka Aimansyah.jpg', 'Raka Aimansyah', '5', '2010-01-29', 'GK', '0102406493', '-', '2019-10-06 06:05:01', '2019-10-06 06:05:01'),
(542, 102, 'Rakha Abdi Ziad.jpg', 'Rakha Abdi Ziad', '1', '2010-01-23', 'GK', '0104257342', '-', '2019-10-06 06:05:54', '2019-10-06 06:05:54'),
(543, 102, 'Safaraz Dafa Azalia Ramadhan.jpg', 'Safaraz Dafa Azalia Ramadhan', '0', '2010-09-08', 'GK', '0101297808', '-', '2019-10-06 06:06:17', '2019-10-06 06:06:17'),
(544, 103, 'Muhammad Kenzie Alindra.jpeg', 'Muhammad Kenzie Alindra', '68', '2010-02-11', 'GK', '0105124066', '-', '2019-10-06 06:07:30', '2019-10-06 06:07:30'),
(545, 103, 'Fadhel Alfathan Hakim.JPG', 'Fadhel Alfathan Hakim', '21', '2010-02-21', 'GK', '0103553503', '-', '2019-10-06 06:08:10', '2019-10-06 06:08:10'),
(546, 103, 'Gilang Albar Adzani.jpg', 'Gilang Albar Adzani', '31', '2010-04-17', 'GK', '0103115028', '-', '2019-10-06 06:08:27', '2019-10-06 06:08:27'),
(547, 103, 'Mochamad Naufal Maulana.JPG', 'Mochamad Naufal Maulana', '1', '2010-02-16', 'GK', '0105411060', '-', '2019-10-06 06:08:51', '2019-10-06 06:08:51'),
(548, 103, 'Haidar Athallah Safrudin.jpg', 'Haidar Athallah Safrudin', '10', '2010-06-03', 'GK', '0102209102', '-', '2019-10-06 06:09:51', '2019-10-06 06:09:51'),
(549, 103, 'Dzaky Almer Jamail.jpg', 'Dzaky Almer Jamail', '18', '2010-06-13', 'GK', '0094106481', '-', '2019-10-06 06:10:13', '2019-10-06 06:10:13'),
(550, 103, 'Ziyan Anjabi.jpeg', 'Ziyan Anjabi', '39', '2012-02-21', 'GK', '0121049006', '-', '2019-10-06 06:10:34', '2019-10-06 06:10:34'),
(551, 103, 'Kenshin Oinuma.jpeg', 'Kenshin Oinuma', '22', '2010-01-01', 'GK', '-', '-', '2019-10-06 06:11:16', '2019-10-06 06:11:16'),
(552, 103, 'Satrio Aji Pratama.jpeg', 'Satrio Aji Pratama', '6', '2010-01-01', 'GK', '-', '-', '2019-10-06 06:11:49', '2019-10-06 06:11:49'),
(553, 104, 'Firza Arifin Pratama.jpeg', 'Firza Arifin Pratama', '7', '2010-05-29', 'GK', '0104090861', '-', '2019-10-06 06:12:31', '2019-10-06 06:12:31'),
(554, 104, 'Boni Raja Mulia Simatupang.jpeg', 'Boni Raja Mulia Simatupang', '28', '2011-08-02', 'GK', '0113096488', '-', '2019-10-06 06:12:53', '2019-10-06 06:12:53'),
(555, 104, 'Mikha Benaya Tambunan.jpeg', 'Mikha Benaya Tambunan', '15', '2010-06-15', 'GK', '0102269733', '-', '2019-10-06 06:13:29', '2019-10-06 06:13:29'),
(556, 104, 'Kelvino Bagus Adriansyah.jpeg', 'Kelvino Bagus Adriansyah', '17', '2011-03-07', 'GK', '0113755760', '-', '2019-10-06 06:13:52', '2019-10-06 06:13:52'),
(557, 104, 'Bhekti Febriyanto.jpeg', 'Bhekti Febriyanto', '16', '2010-02-08', 'GK', '0103002445', '-', '2019-10-06 06:14:12', '2019-10-06 06:14:12'),
(558, 104, 'Jesen Aleffander Palentin Samosir.jpeg', 'Jesen Aleffander Palentin Samosir', '88', '2010-02-14', 'GK', '0106086192', '-', '2019-10-06 06:14:31', '2019-10-06 06:14:31'),
(560, 104, 'Toga Lois Meka.jpeg', 'Toga Lois Meka', '99', '2010-09-16', 'GK', '0109062287', '-', '2019-10-06 06:16:26', '2019-10-06 06:16:26'),
(561, 148, 'Rizky Adil Prananda.jpg', 'Rizky Adil Prananda', '1', '2010-04-25', 'GK', '0109657455', '-', '2019-10-06 06:20:04', '2019-10-06 06:20:04'),
(562, 148, 'M. Syahal Attusturi Hidayat.jpg', 'M. Syahal Attusturi Hidayat', '14', '2010-04-14', 'GK', '0109433319', '-', '2019-10-06 06:20:23', '2019-10-06 06:20:23'),
(563, 148, 'Muhammad Imam Qurthubi.jpg', 'Muhammad Imam Qurthubi', '10', '2010-05-09', 'GK', '0105995661', '-', '2019-10-06 06:20:42', '2019-10-06 06:20:42'),
(564, 148, 'Musa Dzaki Zaidan.jpg', 'Musa Dzaki Zaidan', '6', '2010-07-10', 'GK', '0105786711', '-', '2019-10-06 06:21:15', '2019-10-06 06:21:15'),
(565, 148, 'Fadhil Alpha Nugraha.JPG', 'Fadhil Alpha Nugraha', '10', '2010-12-11', 'GK', '0107163532', '-', '2019-10-06 06:21:35', '2019-10-06 06:21:35'),
(567, 148, 'Fadhil Alpha Nugraha.JPG', 'Fadhil Alpha Nugraha', '10', '2010-12-11', 'GK', '0107163532', '-', '2019-10-06 06:22:12', '2019-10-06 06:22:12'),
(568, 148, 'Sheva Baldwin Pamungkas.JPG', 'Sheva Baldwin Pamungkas', '25', '2011-02-25', 'GK', '0111590920', '-', '2019-10-06 06:22:34', '2019-10-06 06:22:34'),
(569, 148, 'Muhammad Rizky.jpg', 'Muhammad Rizky', '2', '2010-10-21', 'GK', '0103682325', '-', '2019-10-06 06:23:05', '2019-10-06 06:23:05'),
(570, 148, 'Rendi Adlan.jpg', 'Rendi Adlan', '17', '2010-09-04', 'GK', '0101855034', '-', '2019-10-06 06:23:27', '2019-10-06 06:23:27'),
(571, 108, 'Rafeel Athaya Prananto.jpg', 'Rafeel Athaya Prananto', '0', '2011-05-27', 'GK', '0118847606', '-', '2019-10-06 06:24:54', '2019-10-06 06:24:54'),
(572, 108, 'Muhammad Fachrul Baihaqi.jpg', 'Muhammad Fachrul Baihaqi', '0', '2010-06-11', 'GK', '0106341742', '-', '2019-10-06 06:25:44', '2019-10-06 06:25:44'),
(573, 108, 'Rajendra Egaputra Mahardika.jpg', 'Rajendra Egaputra Mahardika', '0', '2010-11-21', 'GK', '0106954320', '-', '2019-10-06 06:26:28', '2019-10-06 06:26:28'),
(574, 108, 'Shidqii Kusnadi.jpg', 'Shidqii Kusnadi', '0', '2011-03-28', 'GK', '0119541948', '-', '2019-10-06 06:27:11', '2019-10-06 06:27:11'),
(575, 108, 'Caesar Akbar Nurfattah Wicaksana.jpg', 'Caesar Akbar Nurfattah Wicaksana', '0', '2012-02-01', 'GK', '0124492100', '-', '2019-10-06 06:27:59', '2019-10-06 06:27:59'),
(576, 108, 'Muhammad Tangguh Arya Pradana.jpg', 'Muhammad Tangguh Arya Pradana', '0', '2011-03-18', 'GK', '0114602058', '-', '2019-10-06 06:28:55', '2019-10-06 06:28:55'),
(577, 108, 'Adrian Al Fathian Akbar Pribadi.jpg', 'Adrian Al Fathian Akbar Pribadi', '0', '2010-02-09', 'GK', '0102371286', '-', '2019-10-06 06:30:17', '2019-10-06 06:30:17'),
(578, 108, 'Hadziq Shabhan Athaillah.png', 'Hadziq Shabhan Athaillah', '25', '2011-06-02', 'GK', '0115094559', '-', '2019-10-06 06:30:47', '2019-10-06 06:30:47'),
(579, 108, 'Muazzam Rafka Aulia.png', 'Muazzam Rafka Aulia', '21', '2010-02-21', 'GK', '0108739172', '-', '2019-10-06 06:31:08', '2019-10-06 06:31:08'),
(580, 108, 'Mohammad Javas Mangir.png', 'Mohammad Javas Mangir', '6', '2010-03-24', 'GK', '0103100156', '-', '2019-10-06 06:31:34', '2019-10-06 06:31:34'),
(581, 108, 'LINGGA SAKHA SAVERIO.png', 'LINGGA SAKHA SAVERIO', '9', '2010-05-09', 'GK', '0102234314', '-', '2019-10-06 06:31:57', '2019-10-06 06:31:57'),
(582, 109, 'MUHAMMAD SENDY CARLO SAPUTRA.jpg', 'MUHAMMAD SENDY CARLO SAPUTRA', '11', '2011-12-27', 'GK', '0116483556', '-', '2019-10-06 06:32:55', '2019-10-06 06:32:55'),
(583, 109, 'Rio Sudrajat.jpg', 'Rio Sudrajat', '7', '2010-07-05', 'GK', '0107078162', '-', '2019-10-06 06:33:17', '2019-10-06 06:33:17'),
(584, 109, 'Maraiman Zidan Ibrahim Pulungan.jpg', 'Maraiman Zidan Ibrahim Pulungan', '09', '2010-03-08', 'GK', '0102466396', '-', '2019-10-06 06:33:37', '2019-10-06 06:33:37'),
(585, 109, 'Muhammad Ahri Syahputra.jpg', 'Muhammad Ahri Syahputra', '9', '2010-12-28', 'GK', '0102461356', '-', '2019-10-06 06:33:57', '2019-10-06 06:33:57'),
(586, 109, 'Bintang Syarif Waliuddin.jpg', 'Bintang Syarif Waliuddin', '20', '2010-05-23', 'GK', '0103207080', '-', '2019-10-06 06:34:21', '2019-10-06 06:34:21'),
(587, 109, 'Dias Rafif Pambudi.jpg', 'Dias Rafif Pambudi', '4', '2010-04-30', 'GK', '0108897115', '-', '2019-10-06 06:34:47', '2019-10-06 06:34:47'),
(588, 109, 'M.try Arya Febryansyah.jpg', 'M.try Arya Febryansyah', '11', '2010-02-15', 'GK', '0106411845', '-', '2019-10-06 06:35:05', '2019-10-06 06:35:05'),
(589, 109, 'Kurnia Fauzan.jpg', 'Kurnia Fauzan', '13', '2011-09-04', 'GK', '0113725619', '-', '2019-10-06 06:35:22', '2019-10-06 06:35:22'),
(590, 109, 'Putra Dwi Adryan.jpg', 'Putra Dwi Adryan', '25', '2011-01-22', 'GK', '0113499412', '-', '2019-10-06 06:35:45', '2019-10-06 06:35:45'),
(591, 109, 'Faris Ramadhan Gunawan.jpg', 'Faris Ramadhan Gunawan', '26', '2010-08-26', 'GK', '0104631353', '-', '2019-10-06 06:36:03', '2019-10-06 06:36:03'),
(592, 109, 'Habibie Firman Asido.jpeg', 'Habibie Firman Asido', '3', '2011-02-08', 'GK', '0114385955', '-', '2019-10-06 06:36:20', '2019-10-06 06:36:20'),
(593, 109, 'M. Daffa Fairullah.jpeg', 'M. Daffa Fairullah', '12', '2010-01-01', 'GK', '-', '-', '2019-10-06 06:36:48', '2019-10-06 06:36:48'),
(594, 115, 'Danendra Rafif Putra Wibowo.png', 'Danendra Rafif Putra Wibowo', '2', '2010-02-20', 'GK', '0109571715', '-', '2019-10-06 06:39:34', '2019-10-06 06:39:34'),
(595, 115, 'Muhammad Syafiq Arfa Cortika.jpeg', 'Muhammad Syafiq Arfa Cortika', '1', '2011-02-07', 'GK', '0111130883', '-', '2019-10-06 06:39:50', '2019-10-06 06:39:50'),
(596, 115, 'Kenzo Tuma Jojo Cameron.png', 'Kenzo Tuma Jojo Cameron', '3', '2011-07-11', 'GK', '0111950956', '-', '2019-10-06 06:40:24', '2019-10-06 06:40:24'),
(597, 115, 'Muhammad Rizqi Nur Fitrullah.JPG', 'Muhammad Rizqi Nur Fitrullah', '4', '2011-06-22', 'GK', '0118234636', '-', '2019-10-06 06:41:45', '2019-10-06 06:41:45'),
(598, 115, 'Muhammad Fakhri Tsaqif.jpeg', 'Muhammad Fakhri Tsaqif', '5', '2010-03-10', 'GK', '0107603283', '-', '2019-10-06 06:42:14', '2019-10-06 06:42:14'),
(599, 115, 'Maulana Ali Wafi Vadisi.jpg', 'Maulana Ali Wafi Vadisi', '6', '2010-03-05', 'GK', '0102895840', '-', '2019-10-06 06:42:39', '2019-10-06 06:42:39'),
(600, 115, 'Muhammad Irfan Ilyas.jpg', 'Muhammad Irfan Ilyas', '7', '2010-09-22', 'GK', '0103054387', '-', '2019-10-06 06:42:56', '2019-10-06 06:42:56'),
(601, 115, 'Owen Januar Al-fathin.jpg', 'Owen Januar Al-fathin', '8', '2010-01-13', 'GK', '0108566610', '-', '2019-10-06 06:43:16', '2019-10-06 06:43:16'),
(602, 115, 'Muhammad Rafa Yazid.jpeg', 'Muhammad Rafa Yazid', '9', '2010-09-12', 'GK', '0109298258', '-', '2019-10-06 06:43:40', '2019-10-06 06:43:40'),
(603, 115, 'Raja Carlo Ulani Al Hakim Hariandja.jpeg', 'Raja Carlo Ulani Al Hakim Hariandja', '10', '2010-04-04', 'GK', '0101734177', '-', '2019-10-06 06:44:15', '2019-10-06 06:44:15'),
(604, 115, 'Razan Attaya Rachman.jpeg', 'Razan Attaya Rachman', '11', '2010-09-01', 'GK', '0103253321', '-', '2019-10-06 06:44:48', '2019-10-06 06:44:48'),
(605, 115, 'Sulthan Fattan Fatkhurrohman.jpeg', 'Sulthan Fattan Fatkhurrohman', '12', '2010-05-07', 'GK', '0108310596', '-', '2019-10-06 06:45:10', '2019-10-06 06:45:10'),
(606, 120, 'Bintang Muhammad Fahran.JPG', 'Bintang Muhammad Fahran', '10', '2012-04-08', 'GK', '0126573204', '-', '2019-10-06 06:47:28', '2019-10-06 06:47:28'),
(607, 120, 'Fabian Anindy Nichola.JPG', 'Fabian Anindy Nichola', '11', '2012-04-03', 'GK', '0127474566', '-', '2019-10-06 06:47:54', '2019-10-06 06:47:54'),
(608, 120, 'Muhammad Affan Rifki.jpg', 'Muhammad Affan Rifki', '2', '2011-02-15', 'GK', '0115873971', '-', '2019-10-06 06:48:14', '2019-10-06 06:48:14'),
(609, 120, 'Dzaki Altaf Alwi.jpg', 'Dzaki Altaf Alwi', '23', '2010-06-30', 'GK', '0109679960', '-', '2019-10-06 06:48:33', '2019-10-06 06:48:33'),
(610, 126, 'Sultan Ambiya.JPG', 'Sultan Ambiya', '2', '2008-08-18', 'GK', '0084671816', '-', '2019-10-06 06:48:37', '2019-10-06 06:48:37'),
(611, 120, 'Muhammad Adhyaksa Arrayyanperdana.jpg', 'Muhammad Adhyaksa Arrayyanperdana', '23', '2010-04-03', 'GK', '0108733837', '-', '2019-10-06 06:48:48', '2019-10-06 06:48:48'),
(612, 120, 'Muhammad Al Faatih Faizal Badar.jpg', 'Muhammad Al Faatih Faizal Badar', '9', '2010-03-29', 'GK', '0103932800', '-', '2019-10-06 06:49:16', '2019-10-06 06:49:16'),
(613, 120, 'Muhammad Kennu Aryarazka.jpg', 'Muhammad Kennu Aryarazka', '18', '2010-01-22', 'GK', '0103496227', '-', '2019-10-06 06:49:35', '2019-10-06 06:49:35'),
(614, 126, 'M. Ihsan Kamil.JPG', 'M. Ihsan Kamil', '10', '2008-03-05', 'GK', '0088621416', '-', '2019-10-06 06:49:41', '2019-10-06 06:49:41'),
(615, 120, 'Ahmad Kemal Nurizzazurrahman.png', 'Ahmad Kemal Nurizzazurrahman', '13', '2010-07-20', 'GK', '0102297197', '-', '2019-10-06 06:49:49', '2019-10-06 06:49:49'),
(616, 120, 'Auffar Adelio Alendra Wiryo Alvaro.jpg', 'Auffar Adelio Alendra Wiryo Alvaro', '1', '2011-07-07', 'GK', '0111477400', '-', '2019-10-06 06:50:06', '2019-10-06 06:50:06'),
(617, 120, 'Afiqi Ramadhanandra Pahlefi.jpg', 'Afiqi Ramadhanandra Pahlefi', '28', '2010-08-24', 'GK', '0103512787', '-', '2019-10-06 06:50:37', '2019-10-06 06:50:37'),
(618, 126, 'Deyhan Keanu Arhessa Wiryo Aditiya.jpg', 'Deyhan Keanu Arhessa Wiryo Aditiya', '10', '2009-10-29', 'GK', '0094539051', '-', '2019-10-06 06:51:00', '2019-10-06 06:51:00'),
(619, 126, 'Ode Muhamad Faiz.JPG', 'Ode Muhamad Faiz', '11', '2009-05-17', 'GK', '0095030830', '-', '2019-10-06 06:54:06', '2019-10-06 06:54:06'),
(620, 126, 'Rayhan Khairul Anam.JPG', 'Rayhan Khairul Anam', '23', '2009-10-09', 'GK', '0097139472', '-', '2019-10-06 06:55:13', '2019-10-06 06:55:13'),
(621, 126, 'Fathan Darrell Alfarisi.JPG', 'Fathan Darrell Alfarisi', '18', '2009-10-28', 'GK', '0098595726', '-', '2019-10-06 07:01:45', '2019-10-06 07:01:45'),
(622, 126, 'M. Farabi Abdullah Basyaib.JPG', 'M. Farabi Abdullah Basyaib', '9', '2008-10-15', 'GK', '0089316064', '-', '2019-10-06 07:04:54', '2019-10-06 07:04:54'),
(623, 126, 'Firsto Algiven Zerinov.JPG', 'Firsto Algiven Zerinov', '1', '2008-11-07', 'GK', '0084066149', '-', '2019-10-06 07:06:58', '2019-10-06 07:06:58'),
(624, 126, 'Feldelino Muchtar Azhari.JPG', 'Feldelino Muchtar Azhari', '1', '2009-04-28', 'GK', '0097453974', '-', '2019-10-06 07:08:48', '2019-10-06 07:08:48'),
(625, 126, 'Fahri Iqbar Zayed.JPG', 'Fahri Iqbar Zayed', '6', '2008-11-28', 'GK', '0086368296', '-', '2019-10-06 07:09:31', '2019-10-06 07:09:31'),
(626, 126, 'Naufal Rizyandra Pajlefi.jpg', 'Naufal Rizyandra Pajlefi', '28', '2008-10-03', 'GK', '0081405255', '-', '2019-10-06 07:12:34', '2019-10-06 07:12:34'),
(627, 105, 'Meiden Rizqy Fatah.jpg', 'Meiden Rizqy Fatah', '11', '2008-05-31', 'GK', '0088570110', '-', '2019-10-06 07:17:04', '2019-10-06 07:17:04'),
(628, 105, 'Ryan Indra Pratama.jpg', 'Ryan Indra Pratama', '18', '2008-01-30', 'GK', '0084522374', '-', '2019-10-06 07:17:49', '2019-10-06 07:17:49'),
(629, 105, 'Syaamil Nizam Saugiputra.jpg', 'Syaamil Nizam Saugiputra', '23', '2008-05-09', 'GK', '0081606778', '-', '2019-10-06 07:18:42', '2019-10-06 07:18:42'),
(630, 105, 'Ahza Labib Pasha.jpg', 'Ahza Labib Pasha', '27', '2008-03-15', 'GK', '0085939806', '-', '2019-10-06 07:19:33', '2019-10-06 07:19:33'),
(631, 105, 'Alif Syahbana.jpg', 'Alif Syahbana', '17', '2008-10-07', 'GK', '0087793904', '-', '2019-10-06 07:20:49', '2019-10-06 07:20:49'),
(632, 105, 'Mohammad Januarsyah Bahri.jpg', 'Mohammad Januarsyah Bahri', '30', '2008-01-23', 'GK', '0085237952', '-', '2019-10-06 07:22:01', '2019-10-06 07:22:01'),
(633, 105, 'Rifqy Aidan Rahman.jpg', 'Rifqy Aidan Rahman', '1', '2008-05-03', 'GK', '0081642749', '-', '2019-10-06 07:23:43', '2019-10-06 07:23:43'),
(634, 105, 'Zaki Muhamad Iqbal.jpg', 'Zaki Muhamad Iqbal', '25', '2008-04-29', 'GK', '0085038167', '-', '2019-10-06 07:24:22', '2019-10-06 07:24:22'),
(635, 105, 'Tristan Camora Dion Manafe.jpg', 'Tristan Camora Dion Manafe', '9', '2009-05-31', 'GK', '0095460155', '-', '2019-10-06 07:24:55', '2019-10-06 07:24:55'),
(636, 105, 'Muhammad Bintang Adinata.jpg', 'Muhammad Bintang Adinata', '29', '2009-09-23', 'GK', '0099763673', '-', '2019-10-06 07:26:37', '2019-10-06 07:26:37'),
(637, 105, 'Dimitar Abinaya Alfidiano Suherman.jpg', 'Dimitar Abinaya Alfidiano Suherman', '6', '2009-09-13', 'GK', '0097023899', '-', '2019-10-06 07:27:23', '2019-10-06 07:27:23'),
(638, 105, 'Muhammad Azzamars Adzkira.jpg', 'Muhammad Azzamars Adzkira', '31', '2009-06-06', 'GK', '0095894794', '-', '2019-10-06 07:28:08', '2019-10-06 07:28:08'),
(639, 105, 'Edric Halim.jpg', 'Edric Halim', '15', '2009-01-06', 'GK', '0096295236', '-', '2019-10-06 07:28:49', '2019-10-06 07:28:49'),
(640, 105, 'Jason Christian Riman.jpg', 'Jason Christian Riman', '90', '2008-12-25', 'GK', '0083125983', '-', '2019-10-06 07:30:04', '2019-10-06 07:30:04'),
(641, 130, 'Raddyaqsa Dimitri Yusuf Jr Gojali.jpg', 'Raddyaqsa Dimitri Yusuf Jr Gojali', '0', '2009-04-02', 'GK', '0095429888', '-', '2019-10-06 07:32:39', '2019-10-06 07:32:39'),
(642, 130, 'Gullung Nirwana Gandhy.jpg', 'Gullung Nirwana Gandhy', '0', '2008-11-22', 'GK', '0087140948', '-', '2019-10-06 07:33:32', '2019-10-06 07:33:32'),
(643, 130, 'Dicky Aprian.jpg', 'Dicky Aprian', '0', '2010-04-17', 'GK', '0109876759', '-', '2019-10-06 07:34:17', '2019-10-06 07:34:17'),
(644, 130, 'Rifqi Ghani Al Mubdi.jpg', 'Rifqi Ghani Al Mubdi', '0', '2010-01-08', 'GK', '0105523412', '-', '2019-10-06 07:35:33', '2019-10-06 07:35:33'),
(645, 130, 'Anas Prihandoko_1570369453.jpg', 'Anas Prihandoko', '0', '2009-04-21', 'GK', '0096570530', '-', '2019-10-06 07:37:39', '2019-10-06 07:37:39'),
(646, 130, 'Lintang Pamungkas_1570369509.jpg', 'Lintang Pamungkas', '0', '2008-08-27', 'GK', '0085176847', '-', '2019-10-06 07:38:33', '2019-10-06 07:38:33'),
(647, 130, 'Sopian Rizky Agung Prayogo_1570369549.jpg', 'Sopian Rizky Agung Prayogo', '0', '2008-11-29', 'GK', '0088491775', '-', '2019-10-06 07:39:24', '2019-10-06 07:39:24'),
(648, 130, 'Fadilla Rusdiyanto.jpg', 'Fadilla Rusdiyanto', '0', '2010-01-13', 'GK', '0108258117', '-', '2019-10-06 07:40:09', '2019-10-06 07:40:09'),
(649, 130, 'Rajendra Ibadurahman_1570369570.jpg', 'Rajendra Ibadurahman', '0', '2008-10-14', 'GK', '0082668259', '-', '2019-10-06 07:40:53', '2019-10-06 07:40:53'),
(650, 130, 'Irfan Ardiansyah.png', 'Irfan Ardiansyah', '0', '2010-09-17', 'GK', '0107928943', '-', '2019-10-06 07:41:59', '2019-10-06 07:41:59'),
(651, 130, 'Fauzan Adhima_1570369655.jpg', 'Fauzan Adhima', '0', '2008-01-06', 'GK', '0083357237', '-', '2019-10-06 07:42:32', '2019-10-06 07:42:32'),
(652, 130, 'Rahmat Fuad Fairuz.jpg', 'Rahmat Fuad Fairuz', '0', '2010-03-23', 'GK', '0108679417', '-', '2019-10-06 07:43:35', '2019-10-06 07:43:35'),
(653, 130, 'Muhammad Fachri.jpg', 'Muhammad Fachri', '0', '2009-07-20', 'GK', '0092308259', '-', '2019-10-06 07:48:47', '2019-10-06 07:48:47'),
(654, 106, 'Gilank Andrean.jpeg', 'Gilank Andrean', '0', '2009-04-03', 'GK', '0096394972', '-', '2019-10-06 07:50:19', '2019-10-06 07:50:19'),
(655, 106, 'Naraya Aufa Sandi.jpeg', 'Naraya Aufa Sandi', '0', '2008-08-23', 'GK', '0084234020', '-', '2019-10-06 07:51:01', '2019-10-06 07:51:01'),
(656, 106, 'Ibni Rafi.jpeg', 'Ibni Rafi', '0', '2008-10-16', 'GK', '0087241186', '-', '2019-10-06 07:51:35', '2019-10-06 07:51:35'),
(657, 106, 'Muhammad Yasir Sah\'bana.jpeg', 'Muhammad Yasir Sah\'bana', '0', '2008-08-02', 'GK', '0083898750', '-', '2019-10-06 07:52:21', '2019-10-06 07:52:21'),
(658, 106, 'Muhamad Dzaky Shabir.jpeg', 'Muhamad Dzaky Shabir', '0', '2008-04-27', 'GK', '0089084907', '-', '2019-10-06 07:53:03', '2019-10-06 07:53:03'),
(659, 106, 'Satria Bagaskara.jpeg', 'Satria Bagaskara', '0', '2008-06-12', 'GK', '0088078150', '-', '2019-10-06 07:53:43', '2019-10-06 07:53:43'),
(660, 106, 'Bayu Aji Ardiyansyah.jpeg', 'Bayu Aji Ardiyansyah', '0', '2008-12-22', 'GK', '0087310079', '-', '2019-10-06 07:54:08', '2019-10-06 07:54:08'),
(661, 106, 'M. Robih Maylano Baskara.jpeg', 'M. Robih Maylano Baskara', '0', '2008-05-13', 'GK', '0085086049', '-', '2019-10-06 07:54:56', '2019-10-06 07:54:56'),
(662, 106, 'Putra Riansyah Mustofa.jpeg', 'Putra Riansyah Mustofa', '0', '2008-03-13', 'GK', '0086096743', '-', '2019-10-06 07:56:20', '2019-10-06 07:56:20'),
(663, 106, 'Navis Arie Wibowo.jpeg', 'Navis Arie Wibowo', '0', '2008-11-03', 'GK', '0085722606', '-', '2019-10-06 07:57:48', '2019-10-06 07:57:48'),
(664, 149, 'Yosua Tarung Surbakti.jpg', 'Yosua Tarung Surbakti', '8', '2008-09-05', 'GK', '0088030074', '-', '2019-10-06 07:59:16', '2019-10-06 07:59:16'),
(665, 149, 'Andreas Jason Namora Tuamelly.jpg', 'Andreas Jason Namora Tuamelly', '10', '2008-01-31', 'GK', '0089196937', '-', '2019-10-06 07:59:46', '2019-10-06 07:59:46'),
(666, 149, 'Aldiva Yusuf Oktriyana.jpg', 'Aldiva Yusuf Oktriyana', '11', '2008-10-15', 'GK', '0086238224', '-', '2019-10-06 08:00:20', '2019-10-06 08:00:20'),
(667, 149, 'Muhammad Ghaly Ataya.jpg', 'Muhammad Ghaly Ataya', '7', '2008-09-22', 'GK', '0089470241', '-', '2019-10-06 08:00:58', '2019-10-06 08:00:58'),
(668, 149, 'Musa Dzaki Zaidan.jpg', 'Musa Dzaki Zaidan', '6', '2010-07-10', 'GK', '0105786711', '-', '2019-10-06 08:01:51', '2019-10-06 08:01:51'),
(669, 149, 'Muhammad Raihan.jpg', 'Muhammad Raihan', '24', '2009-04-09', 'GK', '0094511814', '-', '2019-10-06 08:02:34', '2019-10-06 08:02:34'),
(670, 149, 'Muhamad Fahri Al Farizi.jpg', 'Muhamad Fahri Al Farizi', '18', '2008-08-11', 'GK', '0086823358', '-', '2019-10-06 08:04:11', '2019-10-06 08:04:11'),
(671, 149, 'Rizky Atha Hibatullah.jpg', 'Rizky Atha Hibatullah', '9', '2008-11-23', 'GK', '0082949544', '-', '2019-10-06 08:05:00', '2019-10-06 08:05:00'),
(672, 149, 'Roysul Umam Sutrisna.jpg', 'Roysul Umam Sutrisna', '20', '2009-06-17', 'GK', '0097907774', '-', '2019-10-06 08:06:49', '2019-10-06 08:06:49'),
(673, 149, 'Deckha Ramadhan Lesmana.jpg', 'Deckha Ramadhan Lesmana', '15', '2008-09-29', 'GK', '0089430947', '-', '2019-10-06 08:09:10', '2019-10-06 08:09:10'),
(674, 146, 'Rafan Kaysan Mulyansyah.png', 'Rafan Kaysan Mulyansyah', '8', '2008-02-22', 'GK', '0081828497', '-', '2019-10-06 08:12:08', '2019-10-06 08:12:08'),
(675, 146, 'Ade Riviansah.png', 'Ade Riviansah', '15', '2008-02-15', 'GK', '0082170003', '-', '2019-10-06 08:12:39', '2019-10-06 08:12:39'),
(676, 146, 'Hafiz Rafadyandra.jpg', 'Hafiz Rafadyandra', '10', '2008-04-23', 'GK', '0086480775', '-', '2019-10-06 08:13:56', '2019-10-06 08:13:56'),
(677, 146, 'Satria Aji Saputra.jpg', 'Satria Aji Saputra', '20', '2008-12-07', 'GK', '0087838992', '-', '2019-10-06 08:14:40', '2019-10-06 08:14:40'),
(678, 129, 'ARIJA FSDILATUROHMAN.PNG', 'ARIJA FSDILATUROHMAN', '1', '2009-01-11', 'GK', '-', '-', '2019-10-06 08:18:56', '2019-10-06 08:18:56'),
(679, 146, 'Muhamad Nur Dika.jpg', 'Muhamad Nur Dika', '1', '2008-03-24', 'GK', '0083640821', '-', '2019-10-06 08:19:05', '2019-10-06 08:19:05'),
(680, 129, 'M. ZAKY RAIHAN.PNG', 'M. ZAKY RAIHAN', '0', '2009-02-25', 'CB', '-', '-', '2019-10-06 08:19:34', '2019-10-06 08:19:34'),
(681, 146, 'Akhdan Bagaskara.jpg', 'Akhdan Bagaskara', '4', '2008-12-28', 'GK', '0085693495', '-', '2019-10-06 08:19:54', '2019-10-06 08:19:54'),
(682, 129, 'MOH.NABIL RAMADHAN.PNG', 'MOH.NABIL RAMADHAN', '0', '2009-07-28', 'LB', '-', '-', '2019-10-06 08:20:07', '2019-10-06 08:20:07'),
(683, 129, 'IJLAL MUJAHID.PNG', 'IJLAL MUJAHID', '0', '2008-07-11', 'RB', '-', '-', '2019-10-06 08:20:43', '2019-10-06 08:20:43'),
(684, 129, 'BEN AKBAR RAMADHAN.PNG', 'BEN AKBAR RAMADHAN', '0', '2009-07-21', 'RB', '-', '-', '2019-10-06 08:21:19', '2019-10-06 08:21:19'),
(685, 146, 'Hafizh Faslansyah.jpg', 'Hafizh Faslansyah', '7', '2008-09-28', 'GK', '0081825789', '-', '2019-10-06 08:21:35', '2019-10-06 08:21:35'),
(686, 146, 'Petrus Leonardo Denier Sitaniapessy.jpg', 'Petrus Leonardo Denier Sitaniapessy', '6', '2008-02-03', 'GK', '0081108904', '-', '2019-10-06 08:22:03', '2019-10-06 08:22:03'),
(687, 129, 'MOH.DHAFA ARAFI.PNG', 'MOH.DHAFA ARAFI', '0', '2008-01-12', 'LB', '-', '-', '2019-10-06 08:22:03', '2019-10-06 08:22:03'),
(688, 146, 'Ade Yusuf Nurhidayat.jpg', 'Ade Yusuf Nurhidayat', '16', '2008-01-20', 'GK', '0087562712', '-', '2019-10-06 08:22:32', '2019-10-06 08:22:32'),
(689, 129, 'A. FAIRUS SAPUTRA.PNG', 'A. FAIRUS SAPUTRA', '0', '2008-08-07', 'GK', '-', '-', '2019-10-06 08:23:00', '2019-10-06 08:23:00'),
(690, 129, 'FEBIAN SYAHID ALAMSYAH.PNG', 'FEBIAN SYAHID ALAMSYAH', '0', '2008-02-15', 'CB', '-', '-', '2019-10-06 08:23:27', '2019-10-06 08:23:27'),
(691, 146, 'YESHUA MATTHEW WILLIAM RADJAGUKGUK.jpg', 'YESHUA MATTHEW WILLIAM RADJAGUKGUK', '9', '2009-07-31', 'GK', '0094374137', '-', '2019-10-06 08:23:35', '2019-10-06 08:23:35'),
(692, 129, 'RAYHAN FATIN SANTOSO.PNG', 'RAYHAN FATIN SANTOSO', '0', '2009-04-12', 'GK', '-', '-', '2019-10-06 08:23:59', '2019-10-06 08:23:59'),
(693, 146, 'Muhammad Akmal Al- Fahri.jpg', 'Muhammad Akmal Al- Fahri', '11', '2009-03-01', 'GK', '0092384786', '-', '2019-10-06 08:24:19', '2019-10-06 08:24:19'),
(694, 129, 'MOH.FARDAN.PNG', 'MOH.FARDAN', '0', '2008-01-13', 'LB', '-', '-', '2019-10-06 08:24:46', '2019-10-06 08:24:46'),
(695, 146, 'Hilmi Mubarok.jpg', 'Hilmi Mubarok', '13', '2009-07-16', 'GK', '0098479005', '-', '2019-10-06 08:24:55', '2019-10-06 08:24:55'),
(696, 146, 'Nabil Hardiansyah.jpg', 'Nabil Hardiansyah', '19', '2009-10-19', 'GK', '0099795890', '-', '2019-10-06 08:25:21', '2019-10-06 08:25:21'),
(697, 146, 'Rai Nazario Milano Nainggolan.jpg', 'Rai Nazario Milano Nainggolan', '3', '2009-04-29', 'GK', '0097187602', '-', '2019-10-06 08:25:49', '2019-10-06 08:25:49'),
(698, 129, 'BAHRUL.PNG', 'BAHRUL', '0', '2008-01-01', 'DMF', '-', '-', '2019-10-06 08:26:16', '2019-10-06 08:26:16'),
(699, 129, 'ANDIKA MUSTOPA KAMAL.PNG', 'ANDIKA MUSTOPA KAMAL', '0', '2009-02-01', 'DMF', '-', '-', '2019-10-06 08:26:48', '2019-10-06 08:26:48'),
(700, 129, 'MUHADZDZIB DAFFA NAUFAL.PNG', 'MUHADZDZIB DAFFA NAUFAL', '0', '2008-11-07', 'GK', '-', '-', '2019-10-06 08:27:31', '2019-10-06 08:27:31'),
(701, 129, 'ALFAIREL PUTRA IMANI.PNG', 'ALFAIREL PUTRA IMANI', '0', '2008-11-29', 'CB', '-', '-', '2019-10-06 08:28:01', '2019-10-06 08:28:01'),
(702, 129, 'NASPI.PNG', 'NASPI', '0', '2008-01-01', 'CB', '-', '-', '2019-10-06 08:28:30', '2019-10-06 08:28:30'),
(703, 151, 'Muhammad Qulaevy Ikhwany.jpg', 'Muhammad Qulaevy Ikhwany', '0', '2006-03-12', 'GK', '0067617755', '-', '2019-10-06 08:30:47', '2019-10-06 08:30:47'),
(704, 151, 'Oktavian Ramadhan Nurwijaya.jpg', 'Oktavian Ramadhan Nurwijaya', '0', '2006-10-17', 'CB', '0064135617', '-', '2019-10-06 08:31:20', '2019-10-06 08:31:20'),
(705, 119, 'Nadhif Naufal Sabhri.jpg', 'Nadhif Naufal Sabhri', '3', '2008-05-08', 'GK', '0084479355', '-', '2019-10-06 08:31:29', '2019-10-06 08:31:29'),
(706, 119, 'Langgeng Rian Fadhillah.jpg', 'Langgeng Rian Fadhillah', '4', '2008-06-28', 'GK', '0088351762', '-', '2019-10-06 08:32:05', '2019-10-06 08:32:05'),
(707, 151, 'Anggara Hariansyah.jpg', 'Anggara Hariansyah', '0', '2006-04-18', 'CB', '0065051789', '-', '2019-10-06 08:32:05', '2019-10-06 08:32:05'),
(708, 151, 'Ahmad Tegar Iman Raharjo.jpg', 'Ahmad Tegar Iman Raharjo', '0', '2006-09-05', 'GK', '0063125368', '-', '2019-10-06 08:32:31', '2019-10-06 08:32:31'),
(709, 119, 'Gamal Tauriq Fachreza.jpg', 'Gamal Tauriq Fachreza', '5', '2009-04-20', 'GK', '0092119776', '-', '2019-10-06 08:32:31', '2019-10-06 08:32:31'),
(710, 151, 'Daffa Ammar.jpg', 'Daffa Ammar', '0', '2006-12-21', 'LB', '0062493605', '-', '2019-10-06 08:32:59', '2019-10-06 08:32:59'),
(711, 151, 'Achmad Daril.jpg', 'Achmad Daril', '0', '2006-11-27', 'GK', '0034888127', '-', '2019-10-06 08:33:30', '2019-10-06 08:33:30'),
(712, 119, 'Muhammad Fathir Rasanjani.jpg', 'Muhammad Fathir Rasanjani', '6', '2008-06-25', 'GK', '0083951292', '-', '2019-10-06 08:34:02', '2019-10-06 08:34:02'),
(713, 151, 'Ikhsan Fatoni.jpg', 'Ikhsan Fatoni', '0', '2006-05-27', 'GK', '0068149480', '-', '2019-10-06 08:34:03', '2019-10-06 08:34:03'),
(714, 151, 'Muhammad Rafi Pratama.jpg', 'Muhammad Rafi Pratama', '0', '2006-04-10', 'CB', '0069925625', '-', '2019-10-06 08:34:29', '2019-10-06 08:34:29'),
(715, 119, 'Bimo Aqil Satrio.jpg', 'Bimo Aqil Satrio', '7', '2008-11-21', 'GK', '0082786059', '-', '2019-10-06 08:34:44', '2019-10-06 08:34:44'),
(716, 151, 'FEBRIAN ATHA NUR ARIF.jpg', 'FEBRIAN ATHA NUR ARIF', '0', '2007-02-05', 'CB', '0076892508', '-', '2019-10-06 08:35:08', '2019-10-06 08:35:08'),
(717, 119, 'Dava Hardi Setiawan.jpg', 'Dava Hardi Setiawan', '8', '2008-02-16', 'GK', '0087444802', '-', '2019-10-06 08:35:10', '2019-10-06 08:35:10'),
(718, 151, 'Muhammad Naufal Fathin Siregar.jpg', 'Muhammad Naufal Fathin Siregar', '0', '2006-08-03', 'GK', '0064553446', '-', '2019-10-06 08:35:36', '2019-10-06 08:35:36'),
(719, 119, 'Banyu Hafidz Fahrizki.jpg', 'Banyu Hafidz Fahrizki', '9', '2008-07-15', 'GK', '0085836742', '-', '2019-10-06 08:35:51', '2019-10-06 08:35:51'),
(720, 151, 'Nashir Khoirul Huda.jpg', 'Nashir Khoirul Huda', '0', '2006-06-04', 'CB', '0069813919', '-', '2019-10-06 08:36:06', '2019-10-06 08:36:06'),
(721, 151, 'Bregas Azka Habibulloh.png', 'Bregas Azka Habibulloh', '0', '2006-04-14', 'GK', '0067193117', '-', '2019-10-06 08:36:26', '2019-10-06 08:36:26'),
(722, 119, 'Marcell Christian Samallo.jpg', 'Marcell Christian Samallo', '10', '2008-11-26', 'GK', '0086285338', '-', '2019-10-06 08:36:37', '2019-10-06 08:36:37'),
(723, 119, 'Mohammed Omar Aghneja.jpg', 'Mohammed Omar Aghneja', '11', '2008-07-11', 'GK', '0089531915', '-', '2019-10-06 08:37:16', '2019-10-06 08:37:16'),
(724, 119, 'Muh Aufa Lathief.jpg', 'Muh Aufa Lathief', '12', '2008-11-13', 'GK', '0087743889', '-', '2019-10-06 08:38:02', '2019-10-06 08:38:02'),
(725, 119, 'Mochammad Fachry Irzant Ramadhan.jpg', 'Mochammad Fachry Irzant Ramadhan', '1', '2008-09-09', 'GK', '0082920839', '-', '2019-10-06 08:38:38', '2019-10-06 08:38:38'),
(726, 119, 'Muhammad Adli Al Rafi S..jpg', 'Muhammad Adli Al Rafi S.', '2', '2008-07-19', 'GK', '0083092702', '-', '2019-10-06 08:39:13', '2019-10-06 08:39:13'),
(727, 153, 'M Ghifari Agha Faraz.jpg', 'M Ghifari Agha Faraz', '13', '2008-12-24', 'GK', '0087640404', '-', '2019-10-06 08:40:52', '2019-10-06 08:40:52'),
(728, 153, 'Muhammad Yanuar Fathan.jpg', 'Muhammad Yanuar Fathan', '15', '2008-01-26', 'GK', '0088085905', '-', '2019-10-06 08:41:26', '2019-10-06 08:41:26'),
(729, 153, 'Defran Azam Algifari.jpg', 'Defran Azam Algifari', '16', '2008-05-06', 'GK', '0084301480', '-', '2019-10-06 08:41:57', '2019-10-06 08:41:57'),
(730, 153, 'MUHAMMAD GARUDA AL-GIFAHRI KUSUMA.jpg', 'MUHAMMAD GARUDA AL-GIFAHRI KUSUMA', '17', '2008-10-10', 'GK', '0085304262', '-', '2019-10-06 08:42:30', '2019-10-06 08:42:30'),
(731, 153, 'M. Sya`ban.jpg', 'M. Sya`ban', '18', '2008-08-16', 'GK', '0083298756', '-', '2019-10-06 08:43:07', '2019-10-06 08:43:07'),
(732, 153, 'M. Teguh Wibowo.jpg', 'M. Teguh Wibowo', '19', '2008-08-23', 'GK', '0083827373', '-', '2019-10-06 08:43:31', '2019-10-06 08:43:31'),
(733, 153, 'IBRAHIM HAFIZ UMAR.jpg', 'IBRAHIM HAFIZ UMAR', '20', '2008-12-08', 'GK', '0083383755', '-', '2019-10-06 08:43:58', '2019-10-06 08:43:58'),
(734, 153, 'Naufal Arga Saputra.jpg', 'Naufal Arga Saputra', '21', '2008-05-03', 'GK', '0084687971', '-', '2019-10-06 08:44:26', '2019-10-06 08:44:26'),
(735, 153, 'ACHMAD QASHMAL MUSYAFFA\'.jpg', 'ACHMAD QASHMAL MUSYAFFA\'', '22', '2008-06-03', 'GK', '0083469972', '-', '2019-10-06 08:44:58', '2019-10-06 08:44:58'),
(736, 153, 'Fahri Alghifari.jpg', 'Fahri Alghifari', '23', '2008-11-03', 'GK', '0085500740', '-', '2019-10-06 08:45:28', '2019-10-06 08:45:28'),
(737, 153, 'Fatilah Khadafi.jpg', 'Fatilah Khadafi', '24', '2008-10-29', 'GK', '0089520440', '-', '2019-10-06 08:45:54', '2019-10-06 08:45:54'),
(738, 138, 'Zacky Devana_1570928374.png', 'Zacky Devana', '5', '2006-08-03', 'DMF', '0061102370', '-', '2019-10-06 19:46:42', '2019-10-06 19:46:42'),
(739, 138, 'Muhammad Dzaki.jpg', 'Muhammad Dzaki', '20', '2006-08-19', 'GK', '0061235115', '-', '2019-10-06 19:46:59', '2019-10-06 19:46:59'),
(740, 138, 'Hong Sung Jung Reyoshi.jpg', 'Hong Sung Jung Reyoshi', '37', '2006-04-07', 'LB', '0065391875', '-', '2019-10-06 19:47:18', '2019-10-06 19:47:18'),
(741, 138, 'Hans Marcellino.jpg', 'Hans Marcellino', '88', '2006-09-26', 'AMF', '0066295760', '-', '2019-10-06 19:47:42', '2019-10-06 19:47:42'),
(742, 138, 'Jason Halim_1570928451.png', 'Jason Halim', '19', '2007-02-10', 'CMF', '0076146374', '-', '2019-10-06 19:48:37', '2019-10-06 19:48:37'),
(743, 138, 'Muhamad Pasya.jpg', 'Muhamad Pasya', '26', '2006-07-17', 'AMF', '0066311929', '-', '2019-10-06 19:48:54', '2019-10-06 19:48:54'),
(744, 138, 'Rakan Azhim.jpg', 'Rakan Azhim', '14', '2006-05-13', 'CF', '0067317955', '-', '2019-10-06 19:49:13', '2019-10-06 19:49:13'),
(745, 138, 'Alexander David Maharia.jpg', 'Alexander David Maharia', '16', '2006-01-15', 'LB', '0068840545', '-', '2019-10-06 19:49:29', '2019-10-06 19:49:29'),
(746, 138, 'Fachriz Akbar Pratama.jpg', 'Fachriz Akbar Pratama', '33', '2006-07-18', 'LB', '0061256438', '-', '2019-10-06 19:49:43', '2019-10-06 19:49:43'),
(748, 138, 'David Nur Alfa Rizky.jpg', 'David Nur Alfa Rizky', '2', '2007-02-25', 'CB', '0073993684', '-', '2019-10-06 19:50:26', '2019-10-06 19:50:26'),
(749, 138, 'Muhammad Beryl Edriza.jpg', 'Muhammad Beryl Edriza', '12', '2007-08-15', 'LB', '0075395463', '-', '2019-10-06 19:53:07', '2019-10-06 19:53:07'),
(750, 138, 'MUHAMMAD IHSAN.jpg', 'MUHAMMAD IHSAN', '13', '2007-01-06', 'CB', '0075756427', '-', '2019-10-06 19:53:27', '2019-10-06 19:53:27'),
(751, 138, 'Abdul Akbar Rizky.jpg', 'Abdul Akbar Rizky', '22', '2007-02-14', 'DMF', '0074184060', '-', '2019-10-06 19:53:46', '2019-10-06 19:53:46'),
(752, 136, 'Aji Setya Nugroho_1570535427.jpg', 'Aji Setya Nugroho', '4', '2006-01-15', 'RB', '0069302508', '-', '2019-10-06 20:01:43', '2019-10-06 20:01:43'),
(753, 136, 'Ragil Rauf Prayoga.jpg', 'Ragil Rauf Prayoga', '40', '2006-01-22', 'CB', '0065648263', '-', '2019-10-06 20:01:57', '2019-10-06 20:01:57'),
(754, 136, 'Wiguno Rachmany Akhbar Hidayat.jpg', 'Wiguno Rachmany Akhbar Hidayat', '9', '2006-08-08', 'LB', '0065795168', '-', '2019-10-06 20:02:16', '2019-10-06 20:02:16'),
(755, 136, 'Jalasena Putra Permana.jpg', 'Jalasena Putra Permana', '72', '2006-01-09', 'RB', '0064088394', '-', '2019-10-06 20:02:37', '2019-10-06 20:02:37'),
(756, 136, 'Rizky Fadly Hidayat.jpg', 'Rizky Fadly Hidayat', '89', '2006-09-11', 'AMF', '0066027266', '-', '2019-10-06 20:02:52', '2019-10-06 20:02:52'),
(757, 136, 'Nabil Danendra Kaniwijaya_1570535896.jpg', 'Fajerul Oktan', '11', '2006-10-13', 'GK', '0061515611', '-', '2019-10-06 20:03:09', '2019-10-06 20:03:09'),
(758, 136, 'Sugeng Walyatalatof Waluyo Jat_1570413878.jpg', 'Sugeng Walyatalatof Waluyo Jat', '11', '2006-08-29', 'DMF', '0067449539', '-', '2019-10-06 20:04:19', '2019-10-06 20:04:19'),
(759, 136, 'NAUFAL BINTANG PASOPATI_1570413924.jpg', 'NAUFAL BINTANG PASOPATI', '5', '2006-02-03', 'AMF', '0068367920', '-', '2019-10-06 20:05:02', '2019-10-06 20:05:02'),
(760, 136, 'Dafa Al Gasemi Setiawarman.jpg', 'Dafa Al Gasemi Setiawarman', '1', '2008-02-12', 'GK', '0084105322', '-', '2019-10-06 20:05:38', '2019-10-06 20:05:38'),
(761, 136, 'MUHAMAD RIDWAN_1570535544.jpg', 'MUHAMAD RIDWAN', '43', '2006-01-23', 'RB', '0068078850', '-', '2019-10-06 20:05:57', '2019-10-06 20:05:57'),
(762, 136, 'Nabil Zora Ramadhan.jpg', 'Nabil Zora Ramadhan', '6', '2006-10-05', 'LB', '0061901733', '-', '2019-10-06 20:06:14', '2019-10-06 20:06:14'),
(763, 136, 'Samuel Timothy Putra Sianturi.jpg', 'Samuel Timothy Putra Sianturi', '45', '2006-09-27', 'AMF', '0064962706', '-', '2019-10-06 20:06:31', '2019-10-06 20:06:31'),
(764, 136, 'Muhamad Rakha A.jpg', 'Muhamad Rakha A', '27', '2006-08-25', 'LB', '0069833693', '-', '2019-10-06 20:06:46', '2019-10-06 20:06:46'),
(765, 140, 'Chandra Tirta Wijaya.jpg', 'Chandra Tirta Wijaya', '0', '2007-04-09', 'GK', '0076665807', '-', '2019-10-06 20:09:02', '2019-10-06 20:09:02'),
(766, 140, 'Khoirul Rizal.jpg', 'Khoirul Rizal', '0', '2006-01-07', 'LB', '0061863404', '-', '2019-10-06 20:09:37', '2019-10-06 20:09:37'),
(767, 140, 'Husnan Todo Damanik.jpg', 'Husnan Todo Damanik', '0', '2006-04-24', 'CB', '0065023666', '-', '2019-10-06 20:10:38', '2019-10-06 20:10:38'),
(768, 140, 'Muhamad Rannu Herdiansyah.jpg', 'Muhamad Rannu Herdiansyah', '0', '2007-05-06', 'GK', '0072643250', '-', '2019-10-06 20:11:04', '2019-10-06 20:11:04'),
(769, 140, 'Husaini Aido Damanik.jpg', 'Husaini Aido Damanik', '0', '2006-04-24', 'CB', '0065202208', '-', '2019-10-06 20:11:35', '2019-10-06 20:11:35'),
(770, 140, 'Dimas Fadly Saputra.jpg', 'Dimas Fadly Saputra', '0', '2006-05-17', 'GK', '0066819567', '-', '2019-10-06 20:12:04', '2019-10-06 20:12:04'),
(771, 140, 'MUHAMMAD BASITH FAWWAZ.jpg', 'MUHAMMAD BASITH FAWWAZ', '0', '2006-01-03', 'GK', '0061770984', '-', '2019-10-06 20:12:27', '2019-10-06 20:12:27'),
(772, 140, 'Muhammad Mahib Naufal.jpg', 'Muhammad Mahib Naufal', '0', '2007-05-19', 'GK', '0072279028', '-', '2019-10-06 20:12:49', '2019-10-06 20:12:49'),
(773, 140, 'Muhammad Azril Achdi.jpg', 'Muhammad Azril Achdi', '0', '2007-01-06', 'GK', '0072679110', '-', '2019-10-06 20:13:03', '2019-10-06 20:13:03'),
(774, 127, 'Fadhli.jpg', 'Fadhli', '0', '2009-01-15', 'GK', '0099816468', '-', '2019-10-06 20:18:22', '2019-10-06 20:18:22'),
(775, 127, 'Deny Restu Prasetyo.jpg', 'Deny Restu Prasetyo', '0', '2008-03-11', 'LB', '0081989314', '-', '2019-10-06 20:19:03', '2019-10-06 20:19:03'),
(776, 127, 'Muhammad Taufik Wijaya.jpg', 'Muhammad Taufik Wijaya', '0', '2008-04-22', 'CB', '0085303743', '-', '2019-10-06 20:19:30', '2019-10-06 20:19:30'),
(777, 127, 'Ahmad Abdul Rahman.jpg', 'Ahmad Abdul Rahman', '0', '2008-01-01', 'GK', '-', '-', '2019-10-06 20:20:17', '2019-10-06 20:20:17'),
(778, 127, 'M. Ridwan Prakoso.jpg', 'M. Ridwan Prakoso', '0', '2008-01-01', 'GK', '-', '-', '2019-10-06 20:21:06', '2019-10-06 20:21:06'),
(779, 127, 'Fathir ahmad dinazeb.jpg', 'Fathir ahmad dinazeb', '0', '2008-01-01', 'LB', '-', '-', '2019-10-06 20:21:50', '2019-10-06 20:21:50'),
(780, 127, 'FAREL INDRA GUNAWAN.jpg', 'FAREL INDRA GUNAWAN', '0', '2008-01-01', 'GK', '-', '-', '2019-10-06 20:22:27', '2019-10-06 20:22:27'),
(781, 127, 'AGUNG ADITIANIN.jpg', 'AGUNG ADITIANIN', '0', '2008-01-01', 'GK', '-', '-', '2019-10-06 20:23:03', '2019-10-06 20:23:03'),
(782, 127, 'AZRIEL SYAFA\'AT IBRAHIM.jpg', 'AZRIEL SYAFA\'AT IBRAHIM', '0', '2008-01-01', 'CB', '-', '-', '2019-10-06 20:23:37', '2019-10-06 20:23:37'),
(783, 127, 'Muhamad Faezal Nuril.jpg', 'Muhamad Faezal Nuril', '1', '2008-01-01', 'GK', '-', '-', '2019-10-06 20:24:23', '2019-10-06 20:24:23'),
(784, 127, 'Ardiansyah Wiranata.jpg', 'Ardiansyah Wiranata', '0', '2008-01-01', 'DMF', '-', '-', '2019-10-06 20:25:13', '2019-10-06 20:25:13'),
(785, 116, 'Divonda Alden Firjatullah.jpg', 'Divonda Alden Firjatullah', '99', '2008-06-28', 'CB', '0089870530', '-', '2019-10-06 20:27:38', '2019-10-06 20:27:38'),
(786, 116, 'Sholih.jpg', 'Sholih', '1', '2008-06-12', 'GK', '0081761945', '-', '2019-10-06 20:27:53', '2019-10-06 20:27:53'),
(787, 116, 'Nawfal Nadhir Razan.jpg', 'Nawfal Nadhir Razan', '20', '2008-06-24', 'LB', '0086474880', '-', '2019-10-06 20:28:11', '2019-10-06 20:28:11'),
(788, 116, 'GILANG ANDIKA.jpg', 'GILANG ANDIKA', '23', '2008-03-08', 'LB', '0083728215', '-', '2019-10-06 20:28:28', '2019-10-06 20:28:28'),
(789, 116, 'Badar Fadlan Fathurrahman.jpg', 'Badar Fadlan Fathurrahman', '2', '2008-12-14', 'LB', '0084583835', '-', '2019-10-06 20:28:42', '2019-10-06 20:28:42'),
(790, 116, 'MUHAMMAD RAIHAN FADILLAH.jpg', 'MUHAMMAD RAIHAN FADILLAH', '11', '2008-10-17', 'LB', '0086861949', '-', '2019-10-06 20:28:55', '2019-10-06 20:28:55'),
(791, 116, 'SATRIA AQIL FAIRUZ.jpg', 'SATRIA AQIL FAIRUZ', '6', '2008-04-23', 'LB', '0084438238', '-', '2019-10-06 20:29:58', '2019-10-06 20:29:58'),
(792, 116, 'Achmad Lanang Widiyono.jpg', 'Achmad Lanang Widiyono', '39', '2008-01-16', 'LB', '0082024538', '-', '2019-10-06 20:30:17', '2019-10-06 20:30:17'),
(793, 116, 'Bagas Raditya Al-ghani.jpg', 'Bagas Raditya Al-ghani', '15', '2008-01-16', 'LB', '0083505893', '-', '2019-10-06 20:30:38', '2019-10-06 20:30:38'),
(794, 116, 'Raka Praditya.jpg', 'Raka Praditya', '10', '2008-03-08', 'LB', '0081119591', '-', '2019-10-06 20:31:02', '2019-10-06 20:31:02'),
(795, 116, 'Muhammad Aziz Firdaus.jpg', 'Muhammad Aziz Firdaus', '60', '2008-01-01', 'CB', '0063497537', '-', '2019-10-06 20:32:04', '2019-10-06 20:32:04'),
(796, 131, 'Abdul Faridz Ramadhan.jpg', 'Abdul Faridz Ramadhan', '0', '2008-01-01', 'GK', '-', '-', '2019-10-07 00:19:18', '2019-10-07 00:19:18'),
(797, 131, 'Rafa Haikal.jpg', 'Rafa Haikal', '0', '2008-01-01', 'GK', '-', '-', '2019-10-07 00:21:15', '2019-10-07 00:21:15'),
(798, 131, 'Ubaidillah Hamdan.jpg', 'Ubaidillah Hamdan', '0', '2008-01-01', 'GK', '-', '-', '2019-10-07 00:23:35', '2019-10-07 00:23:35'),
(799, 131, 'Muhammad Zaelani Putra.jpg', 'Muhammad Zaelani Putra', '0', '2008-01-01', 'GK', '-', '-', '2019-10-07 00:25:19', '2019-10-07 00:25:19'),
(800, 131, 'Radita Heriansyah.jpg', 'Radita Heriansyah', '0', '2008-01-01', 'GK', '-', '-', '2019-10-07 00:26:50', '2019-10-07 00:26:50'),
(801, 131, 'Mahmud Suhendar Arropi.jpg', 'Mahmud Suhendar Arropi', '0', '2008-01-01', 'GK', '-', '-', '2019-10-07 00:28:03', '2019-10-07 00:28:03'),
(802, 131, 'Sultan Kamil.jpg', 'Sultan Kamil', '0', '2008-01-01', 'GK', '-', '-', '2019-10-07 00:30:04', '2019-10-07 00:30:04'),
(803, 131, 'M.Fikri Al Furqon.jpg', 'M.Fikri Al Furqon', '0', '2008-01-01', 'GK', '-', '-', '2019-10-07 00:31:34', '2019-10-07 00:31:34'),
(804, 131, 'Fathurrahman.jpg', 'Fathurrahman', '0', '2008-01-01', 'GK', '-', '-', '2019-10-07 00:32:45', '2019-10-07 00:32:45'),
(805, 131, 'Syaiful Anwar.jpg', 'Syaiful Anwar', '0', '2008-01-01', 'GK', '-', '-', '2019-10-07 00:33:59', '2019-10-07 00:33:59'),
(806, 131, 'Ahmad Febrian.jpg', 'Ahmad Febrian', '0', '2008-01-01', 'GK', '-', '-', '2019-10-07 00:36:01', '2019-10-07 00:36:01'),
(807, 131, 'Bintang Azka Al Fairuz.jpg', 'Bintang Azka Al Fairuz', '0', '2008-01-01', 'GK', '-', '-', '2019-10-07 00:37:53', '2019-10-07 00:37:53'),
(808, 131, 'Aditia.jpg', 'Aditia', '0', '2008-01-01', 'GK', '-', '-', '2019-10-07 00:39:08', '2019-10-07 00:39:08'),
(809, 131, 'Rayana Dwi Nurcahyanto.jpg', 'Rayana Dwi Nurcahyanto', '0', '2008-01-01', 'GK', '-', '-', '2019-10-07 00:40:12', '2019-10-07 00:40:12'),
(810, 131, 'Muhammad Al Fachri.jpg', 'Muhammad Al Fachri', '0', '2008-01-10', 'GK', '-', '-', '2019-10-07 00:41:42', '2019-10-07 00:41:42'),
(811, 132, 'Adly Kurniawan.jpg', 'Adly Kurniawan', '20', '2008-09-19', 'GK', '0089585151', '-', '2019-10-07 03:44:18', '2019-10-07 03:44:18'),
(812, 132, 'Owen Onana Christian.jpg', 'Owen Onana Christian', '99', '2009-06-17', 'GK', '0094064563', '-', '2019-10-07 03:44:59', '2019-10-07 03:44:59'),
(813, 132, 'Mohammad Fachry Racka Muafiy.jpg', 'Mohammad Fachry Racka Muafiy', '2', '2008-04-12', 'GK', '0083026782', '-', '2019-10-07 03:45:37', '2019-10-07 03:45:37'),
(814, 132, 'Daffa Arif Fikri Aurel.jpg', 'Daffa Arif Fikri Aurel', '11', '2008-05-05', 'GK', '0081619398', '-', '2019-10-07 03:46:23', '2019-10-07 03:46:23'),
(815, 132, 'Pradipta Bawono As.png', 'Pradipta Bawono As', '23', '2008-11-20', 'GK', '0084292156', '-', '2019-10-07 03:47:31', '2019-10-07 03:47:31'),
(816, 132, 'Rafi Aryaputra Gustian.jpg', 'Rafi Aryaputra Gustian', '6', '2008-04-07', 'GK', '0086524203', '-', '2019-10-07 03:48:06', '2019-10-07 03:48:06'),
(817, 132, 'Bisyafaqi Abiyyutsany.jpg', 'Bisyafaqi Abiyyutsany', '50', '2008-05-10', 'GK', '0081938891', '-', '2019-10-07 03:48:42', '2019-10-07 03:48:42'),
(818, 132, 'Nahampun Arif Rahman.jpg', 'Nahampun Arif Rahman', '10', '2009-04-05', 'GK', '0092350296', '-', '2019-10-07 03:49:17', '2019-10-07 03:49:17'),
(819, 132, 'Muhammad Sigit Febrian.jpg', 'Muhammad Sigit Febrian', '25', '2009-02-17', 'GK', '0093176821', '-', '2019-10-07 03:49:58', '2019-10-07 03:49:58'),
(820, 132, 'Haikal Al Fahri.jpg', 'Haikal Al Fahri', '7', '2008-11-05', 'GK', '0083506610', '-', '2019-10-07 03:50:29', '2019-10-07 03:50:29'),
(821, 132, 'Muhammad Al Fajri.jpg', 'Muhammad Al Fajri', '23', '2008-02-09', 'GK', '0087904391', '-', '2019-10-07 03:51:05', '2019-10-07 03:51:05'),
(822, 132, 'Muhammad Fadhil Rizky.jpg', 'Muhammad Fadhil Rizky', '12', '2008-07-10', 'GK', '0084260662', '-', '2019-10-07 03:51:44', '2019-10-07 03:51:44'),
(823, 123, 'MOH. NOVAL HBIBI.png', 'MOH. NOVAL HBIBI', '1', '2010-10-03', 'GK', '-', '-', '2019-10-07 04:09:41', '2019-10-07 04:09:41'),
(824, 123, 'IHSAN MAULANA.png', 'IHSAN MAULANA', '0', '2010-06-02', 'CF', '-', '-', '2019-10-07 04:10:26', '2019-10-07 04:10:26'),
(825, 123, 'ARKAN.png', 'ARKAN', '0', '2011-12-10', 'CMF', '-', '-', '2019-10-07 04:12:20', '2019-10-07 04:12:20'),
(826, 123, 'M.SYAHID.png', 'M.SYAHID', '0', '2010-11-21', 'CMF', '-', '-', '2019-10-07 04:15:54', '2019-10-07 04:15:54'),
(827, 123, 'M. FATTIH.png', 'M. FATTIH', '0', '2011-04-21', 'CMF', '-', '-', '2019-10-07 04:17:16', '2019-10-07 04:17:16'),
(828, 123, 'ALFIAN SAPUTRA.png', 'ALFIAN SAPUTRA', '0', '2011-10-24', 'WF', '-', '-', '2019-10-07 04:18:20', '2019-10-07 04:18:20'),
(829, 123, 'RIZKY DIFA HERDIANSYAH.png', 'RIZKY DIFA HERDIANSYAH', '0', '2012-04-18', 'WF', '-', '-', '2019-10-07 04:19:59', '2019-10-07 04:19:59'),
(830, 123, 'SUGI.png', 'SUGI', '0', '2011-06-25', 'CB', '-', '-', '2019-10-07 04:20:50', '2019-10-07 04:20:50'),
(831, 123, 'JUMA ARDIANSYYAH.png', 'JUMA ARDIANSYYAH', '0', '2011-03-05', 'CB', '-', '-', '2019-10-07 04:21:59', '2019-10-07 04:21:59'),
(832, 123, 'MUHAMAD FAZAR.png', 'MUHAMAD FAZAR', '0', '2010-10-11', 'CF', '-', '-', '2019-10-07 04:22:56', '2019-10-07 04:22:56'),
(833, 136, 'M dzakhwan H K.jpg', 'M dzakhwan H K', '25', '2006-06-06', 'DMF', '0065277382', '-', '2019-10-08 06:23:17', '2019-10-08 06:23:17'),
(834, 136, 'Muhammad Syauqi Rizkullah_1570538616.jpg', 'Muhammad Syauqi Rizkullah', '29', '2006-02-07', 'WF', '0061648649', '-', '2019-10-08 06:42:45', '2019-10-08 06:42:45'),
(835, 103, 'Dimas Akbar.jpg', 'Dimas Akbar', '0', '2010-03-31', 'GK', '0102073996', '-', '2019-10-08 07:04:06', '2019-10-08 07:04:06'),
(836, 138, 'Manafe, Raul Dymo Leon.jpg', 'Manafe, Raul Dymo Leon', '7', '2007-08-19', 'CMF', '0071971064', '-', '2019-10-10 16:51:11', '2019-10-10 16:51:11'),
(837, 138, 'ARIASATYA TYAGA RAISSA SUHERMAN.jpg', 'ARIASATYA TYAGA RAISSA SUHERMAN', '8', '2007-12-27', 'WF', '0077355045', '-', '2019-10-10 17:43:00', '2019-10-10 17:43:00'),
(838, 138, 'Naufal Fauzan Ariva Noor.jpg', 'Naufal Fauzan Ariva Noor', '14', '2007-10-14', 'GK', '0071405077', '-', '2019-10-10 17:45:35', '2019-10-10 17:45:35'),
(839, 152, 'Hardi Tri Cendana.jpg', 'Hardi Tri Cendana', '20', '2007-01-23', 'GK', '0076504959', '-', '2019-10-10 21:34:22', '2019-10-10 21:34:22'),
(840, 152, 'Danu Rahmat Ramdani.jpg', 'Danu Rahmat Ramdani', '1', '2006-01-12', 'GK', '0069446651', '-', '2019-10-10 21:49:16', '2019-10-10 21:49:16');
INSERT INTO `players` (`id_players`, `id_teams`, `foto_players`, `nama_players`, `no_punggung`, `tanggal_lahir`, `posisi`, `nisn`, `ibu`, `created_at`, `updated_at`) VALUES
(841, 152, 'Apriansyah Isnandra.jpg', 'Apriansyah Isnandra', '5', '2006-08-22', 'CB', '0078779415', '-', '2019-10-10 21:51:13', '2019-10-10 21:51:13'),
(842, 152, 'Ardian Pratama Iskandar.jpg', 'Ardian Pratama Iskandar', '4', '2006-07-23', 'CB', '0061311928', '-', '2019-10-10 21:52:23', '2019-10-10 21:52:23'),
(843, 152, 'Ello Rayhan Syahputra.png', 'Ello Rayhan Syahputra', '2', '2006-11-18', 'CB', '0062768529', '-', '2019-10-10 21:54:41', '2019-10-10 21:54:41'),
(844, 152, 'Daffa Tsabitah Akbar.jpg', 'Daffa Tsabitah Akbar', '7', '2007-07-22', 'LB', '0077164787', '-', '2019-10-10 21:55:51', '2019-10-10 21:55:51'),
(845, 152, 'Rachel Herlambang.png', 'Rachel Herlambang', '10', '2006-06-02', 'WF', '0066885511', '-', '2019-10-10 21:56:46', '2019-10-10 21:56:46'),
(846, 152, 'Ridho Prabowo.png', 'Ridho Prabowo', '3', '2006-05-05', 'CMF', '0067839568', '-', '2019-10-10 21:58:19', '2019-10-10 21:58:19'),
(847, 152, 'FEBRIAN FALENTINO LAPAI KARI.jpg', 'FEBRIAN FALENTINO LAPAI KARI', '6', '2006-02-08', 'CF', '0062070186', '-', '2019-10-10 21:59:21', '2019-10-10 21:59:21'),
(848, 152, 'Putra Satria Ramadhan.jpg', 'Putra Satria Ramadhan', '10', '2006-11-05', 'CF', '0067645791', '-', '2019-10-10 22:00:29', '2019-10-10 22:00:29'),
(849, 152, 'Muhammad Gio Haryanto.jpg', 'Muhammad Gio Haryanto', '16', '2007-05-10', 'CF', '0076889932', '-', '2019-10-10 22:01:03', '2019-10-10 22:01:03'),
(850, 152, 'Ahmad Fauzi.jpg', 'Ahmad Fauzi', '12', '2006-11-05', 'CF', '0065914906', '-', '2019-10-10 22:02:24', '2019-10-10 22:02:24'),
(851, 152, 'Fajarudin.png', 'Fajarudin', '11', '2006-04-26', 'CF', '0064732850', '-', '2019-10-10 22:03:10', '2019-10-10 22:03:10'),
(852, 152, 'Habil Anwar.jpg', 'Habil Anwar', '8', '2006-08-26', 'CF', '0064746958', '-', '2019-10-10 22:03:49', '2019-10-10 22:03:49'),
(853, 136, 'Yohanes Paulus Nera Ntala.jpg', 'Yohanes Paulus Nera Ntala', '79', '2006-06-22', 'CF', '0066073531', '-', '2019-10-11 23:51:33', '2019-10-11 23:51:33'),
(854, 142, 'ISMAIL SUDRAZAT_1570949914.jpg', 'ISMAIL SUDRAZAT', '4', '2006-12-23', 'GK', '-', '-', '2019-10-12 02:05:40', '2019-10-12 02:05:40'),
(855, 142, 'FAJAR ALDI PRASETIYA_1570950298.jpg', 'FAJAR ALDI PRASETIYA', '11', '2006-05-09', 'GK', '-', '-', '2019-10-12 02:06:41', '2019-10-12 02:06:41'),
(856, 142, 'EGANATA KUSUMA_1570950240.jpg', 'EGANATA KUSUMA', '0', '2006-10-25', 'GK', '-', '-', '2019-10-12 02:07:48', '2019-10-12 02:07:48'),
(857, 142, 'MUALIF BAHTIAR KHUSAINI_1570950098.jpg', 'MUALIF BAHTIAR KHUSAINI', '22', '2006-05-25', 'GK', '-', '-', '2019-10-12 02:09:00', '2019-10-12 02:09:00'),
(858, 142, 'HABIBI ABRAR PUTRA RAHMAT_1570949961.jpg', 'HABIBI ABRAR PUTRA RAHMAT', '15', '2006-02-25', 'GK', '-', '-', '2019-10-12 02:10:35', '2019-10-12 02:10:35'),
(859, 142, 'AZRIEL PEBRINO_1570950145.jpg', 'AZRIEL PEBRINO', '13', '2006-02-06', 'GK', '-', '-', '2019-10-12 02:11:34', '2019-10-12 02:11:34'),
(860, 142, 'MUHAMMAD SYAIFUL RAYHAN_1570950488.jpg', 'MUHAMMAD SYAIFUL RAYHAN', '0', '2006-02-02', 'GK', '-', '-', '2019-10-12 02:12:42', '2019-10-12 02:12:42'),
(861, 142, 'MUHAMMAD FADIL_1570949993.jpg', 'MUHAMMAD FADIL', '9', '2006-07-26', 'GK', '-', '-', '2019-10-12 02:13:42', '2019-10-12 02:13:42'),
(862, 142, 'SATRIA HENDRI WIJAYA_1570950042.jpg', 'SATRIA HENDRI WIJAYA', '27', '2006-02-17', 'GK', '-', '-', '2019-10-12 02:14:34', '2019-10-12 02:14:34'),
(863, 142, 'FERDI HIDAYAT_1570950341.jpg', 'FERDI HIDAYAT', '11', '2006-02-22', 'GK', '-', '-', '2019-10-12 02:15:36', '2019-10-12 02:15:36'),
(864, 142, 'Ahmad ridha fahrizal_1570950568.jpg', 'Ahmad ridha fahrizal', '1', '2006-12-29', 'GK', '-', '-', '2019-10-12 02:16:54', '2019-10-12 02:16:54'),
(865, 142, 'NAUFAL BUDI HAJIANSYAH_1570950526.jpg', 'NAUFAL BUDI HAJIANSYAH', '5', '2006-01-28', 'GK', '-', '-', '2019-10-12 02:17:54', '2019-10-12 02:17:54'),
(866, 142, 'BIMA NATA KUSUMA_1570950414.jpg', 'BIMA NATA KUSUMA', '19', '2006-10-25', 'GK', '-', '-', '2019-10-12 02:18:59', '2019-10-12 02:18:59'),
(867, 142, 'MOHAMMAD FAHMI ALI_1570949825.jpg', 'MOHAMMAD FAHMI ALI', '7', '2006-11-16', 'GK', '-', '-', '2019-10-12 02:19:52', '2019-10-12 02:19:52'),
(868, 140, 'FADLY FA\'JERY NURFIANTO.png', 'FADLY FA\'JERY NURFIANTO', '0', '2006-11-20', 'GK', '-', '-', '2019-10-12 18:45:38', '2019-10-12 18:45:38'),
(869, 140, 'MUHAMMAD FAIZ RAMADHAN.png', 'MUHAMMAD FAIZ RAMADHAN', '0', '2007-09-24', 'GK', '-', '-', '2019-10-12 18:47:22', '2019-10-12 18:47:22'),
(870, 142, 'M. NABIL NURDIANSYAH_1570950201.jpg', 'M. NABIL NURDIANSYAH', '6', '2006-03-12', 'GK', '-', '-', '2019-10-12 18:54:20', '2019-10-12 18:54:20'),
(871, 142, 'ABDUL AZIS MAULANA YUSUF_1570949761.jpg', 'ABDUL AZIS MAULANA YUSUF', '8', '2006-05-03', 'GK', '-', '-', '2019-10-12 18:57:36', '2019-10-12 18:57:36'),
(872, 140, 'M. RAKAI BAJA WIRABHUMI.png', 'M. RAKAI BAJA WIRABHUMI', '0', '2007-10-06', 'GK', '-', '-', '2019-10-12 20:32:44', '2019-10-12 20:32:44'),
(873, 151, 'Ilham Maulana Rojali.png', 'Ilham Maulana Rojali', '0', '2006-03-02', 'GK', '-', '-', '2019-10-13 00:03:46', '2019-10-13 00:03:46'),
(874, 105, 'FASYA ADRYAN PRATAMA.jpg', 'FASYA ADRYAN PRATAMA', '0', '2008-06-16', 'GK', '-', '-', '2019-10-19 20:03:10', '2019-10-19 20:03:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teams`
--

CREATE TABLE `teams` (
  `id_teams` bigint(20) UNSIGNED NOT NULL,
  `id_users` int(11) NOT NULL,
  `kode_unik` int(3) NOT NULL,
  `kode_daftarulang` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_teams` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_teams` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_pelatih` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pelatih` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_asisten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_asisten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kadaluarsa` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kadaluarsa` tinyint(1) NOT NULL DEFAULT '0',
  `pembayaran` tinyint(1) NOT NULL DEFAULT '0',
  `biaya_pendaftar` int(20) NOT NULL DEFAULT '800000',
  `daftar_ulang` tinyint(1) NOT NULL DEFAULT '0',
  `foto_official` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_official` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `teams`
--

INSERT INTO `teams` (`id_teams`, `id_users`, `kode_unik`, `kode_daftarulang`, `u`, `foto_teams`, `nama_teams`, `no_hp`, `foto_pelatih`, `nama_pelatih`, `foto_asisten`, `nama_asisten`, `tgl_kadaluarsa`, `kadaluarsa`, `pembayaran`, `biaya_pendaftar`, `daftar_ulang`, `foto_official`, `nama_official`, `created_at`, `updated_at`) VALUES
(100, 71, 90, 'P0E6Z342Y7', 'U9', 'Al Azhar Summarecon A_1569726408.png', 'Al Azhar Summarecon Hijau', '0', '', '-', '', '-', '2019-10-04 10:35:13', 0, 1, 800000, 0, '', '-', '2019-09-25 04:26:16', '2019-09-25 04:26:16'),
(101, 72, 396, 'J3NVWHKFYC', 'U9', 'Petrostream Soccer School_1570185661.jpeg', 'Petrostream Soccer School', '085282273702', '', 'Abdullah', '', 'Dedi', '2019-10-04 10:41:01', 0, 1, 800000, 0, '', '-', '2019-09-25 04:27:01', '2019-09-25 04:27:01'),
(102, 73, 755, 'B5HB9OO0LE', 'U9', 'SSB Tunas Prima_1569726674.jpg', 'SSB Tunas Prima', '082210947567', 'RIKI DARMAWAN_1570104517.jpg', 'RIKI DARMAWAN', '', 'MUHAMMAD', '2019-10-03 12:08:37', 0, 1, 800000, 0, '', '-', '2019-09-25 04:28:12', '2019-09-25 04:28:12'),
(103, 74, 232, 'HO8WTED0O9', 'U9', 'SSB Aqua Haier A_1569726527.jpg', 'SSB Aqua Haier A', '082213089497', 'HENDAR FAUZI_1570097441.jpeg', 'HENDAR FAUZI', '', '-', '2019-10-03 10:10:41', 0, 1, 800000, 0, 'Dwi Raharja_1570097441.jpeg', 'Dwi Raharja', '2019-09-25 04:29:20', '2019-09-25 04:29:20'),
(104, 75, 509, 'U28DKL9L9W', 'U9', 'Bemo FC_1569726845.jpg', 'Bemo FC', '08569845745', '', 'jekson', '', 'zosua', '2019-10-01 03:41:40', 0, 1, 800000, 0, '', '-', '2019-09-25 04:30:23', '2019-09-25 04:30:23'),
(105, 76, 123, 'UNZ7U4ZA6V', 'U11', 'Indonesian Eagle_1569504984.jpg', 'Indonesian Eagle', '081315691975', 'Zakaria_1569504984.jpg', 'Zakaria', '', '-', '2019-09-26 13:36:24', 0, 1, 800000, 0, 'Jochny Rusdin_1569504984.jpg', 'Jochny Rusdin', '2019-09-25 04:31:40', '2019-09-25 04:31:40'),
(106, 77, 672, 'VJTRSX4J75', 'U11', 'SSB Bintang RDH_1569726871.jpg', 'SSB Bintang RDH', '081210902834', '', '-Heriyanto', '', '-', '2019-10-02 04:57:28', 0, 1, 800000, 0, '', '-', '2019-09-25 04:35:38', '2019-09-25 04:35:38'),
(108, 71, 53, '9GLNZE3T1A', 'U9', 'Al Azhar Summarecon B_1569726428.png', 'Al Azhar Summarecon Merah', '0', '', '-', '', '-', '2019-10-04 10:34:47', 0, 1, 800000, 0, '', '-', '2019-09-25 07:19:23', '2019-09-25 07:19:23'),
(109, 74, 650, 'WMAOHYDPUN', 'U9', 'SSB Aqua Haier B_1569726535.jpg', 'SSB Aqua Haier B', '082213089497', '', 'HENDAR FAUZI', '', '-', '2019-10-03 00:46:28', 0, 1, 800000, 0, '', '-', '2019-09-25 07:19:57', '2019-09-25 07:19:57'),
(115, 81, 174, '6VEEZWL9FI', 'U9', 'SSB Brazilian Soccer Schools LFA_1569559970.jpeg', 'SSB Brazilian Soccer Schools LFA', '08118860048', 'ANDRIYANI A PAMBUDI_1569559970.jpeg', 'ANDRIYANI A PAMBUDI', 'RIDWAN WIDYAGAMA_1569559970.jpeg', 'RIDWAN WIDYAGAMA', '2019-09-27 04:52:50', 0, 1, 800000, 0, 'RARA NOVIYANTI_1569559970.jpeg', 'RARA NOVIYANTI', '2019-09-26 22:18:22', '2019-09-26 22:18:22'),
(116, 99, 77, 'J59F4ZIFOK', 'U11', 'SSB Petrostream Kuning_1570225807.jpeg', 'SSB Petrostream Kuning', '085282273702', '', 'Agus Darmo', '', 'Dedi', '2019-10-04 21:50:07', 0, 1, 800000, 0, '', '-', '2019-09-26 23:01:25', '2019-09-26 23:01:25'),
(119, 86, 640, 'TG7W3X5Z9G', 'U11', 'SSB Tunas Prima_1569726675.jpg', 'SSB Tunas Prima A', '082210947567', 'Alul_1570173308.jpg', 'Alul', 'Riki_1570173308.jpg', 'Riki', '2019-10-04 07:15:08', 0, 1, 800000, 0, '', '-', '2019-09-27 07:28:04', '2019-09-27 07:28:04'),
(120, 87, 397, '0LUARW8ZGX', 'U9', 'Al Azhar Kemang_1569726695.jpg', 'Al Azhar Kemang', '081318873052', '', '-BUDI', '', '-', '2019-10-03 11:25:48', 0, 1, 800000, 0, '', '-', '2019-09-27 07:30:02', '2019-09-27 07:30:02'),
(123, 90, 8, 'G3NSNYHN2W', 'U9', '', 'SSB Bahtera', '0', '', '-', '', '-', '2019-09-30 07:40:32', 0, 1, 800000, 0, '', '-', '2019-09-27 07:40:32', '2019-09-27 07:40:32'),
(126, 93, 678, 'HU7EJX0TRS', 'U11', 'Al Azhar Kemang_1569726713.jpg', 'Al Azhar Kemang', '0', '-BUDI_1570104035.jpg', '-BUDI', '', '-', '2019-10-03 12:00:35', 0, 1, 800000, 0, '', '-', '2019-09-27 07:44:39', '2019-09-27 07:44:39'),
(127, 94, 647, 'TT5FQCZS1E', 'U11', '', 'FSA Private', '0', '', '-', '', '-', '2019-09-30 07:46:23', 0, 1, 800000, 0, '', '-', '2019-09-27 07:46:23', '2019-09-27 07:46:23'),
(129, 96, 514, 'AIZ4P1KUVD', 'U11', '', 'SSB Bahtera', '0', '', '-', '', '-', '2019-09-30 07:49:51', 0, 1, 800000, 0, '', '-', '2019-09-27 07:49:51', '2019-09-27 07:49:51'),
(130, 97, 632, 'QQOX3URHYM', 'U11', '', 'SSB Asses', '0', '', '-', '', '-', '2019-09-30 07:50:52', 0, 1, 800000, 0, '', '-', '2019-09-27 07:50:52', '2019-09-27 07:50:52'),
(131, 98, 47, 'RNWH59WEAI', 'U11', '', 'SSB Bintang Pulo Sirih', '0', '', '-', '', '-', '2019-09-30 07:52:02', 0, 1, 800000, 0, '', '-', '2019-09-27 07:52:02', '2019-09-27 07:52:02'),
(132, 99, 266, 'NM0DCVGIZ4', 'U11', 'SSB Petrostream Putih_1570200467.jpeg', 'SSB Petrostream Putih', '085282273702', '', 'Dedi', '', 'Abdullah', '2019-10-04 14:47:47', 0, 1, 800000, 0, '', '-', '2019-09-27 08:02:41', '2019-09-27 08:02:41'),
(136, 103, 863, 'SE8WV6THML', 'U13', 'SSB Aqua Haier A_1569726502.jpg', 'SSB Aqua Haier', '082213444758', 'Andrey_1570106764.jpg', 'Andrey', 'Ricki FM_1570106764.jpg', 'Ricki FM', '2019-10-03 12:46:04', 0, 1, 800000, 0, 'Kayuniman_1570106764.jpg', 'Kayuniman', '2019-09-27 08:09:33', '2019-09-27 08:09:33'),
(138, 104, 912, 'ADXR94PLHQ', 'U13', 'Indonesian Eagle_1569765425.jpg', 'Indonesian Eagle', '081315691975', 'Fahrul Hidayat_1570751049.jpg', 'Fahrul Hidayat', 'Ronaldi_1569765425.jpg', 'Ronaldi', '2019-10-10 23:44:09', 0, 1, 800000, 0, 'Jochny Rusdin_1569765425.jpg', 'Jochny Rusdin', '2019-09-27 08:13:14', '2019-09-27 08:13:14'),
(140, 106, 717, 'RFI1T3UHD4', 'U13', '', 'SSB Asses', '0', '', '-', '', '-', '2019-09-30 08:17:19', 0, 1, 800000, 0, '', '-', '2019-09-27 08:17:19', '2019-09-27 08:17:19'),
(142, 108, 918, '3N793D5OM2', 'Z', '', 'SSB Bahtera', '0', '', '-', '', '-', '2019-10-20 11:34:43', 0, 1, 800000, 0, '', '-', '2019-09-27 08:20:49', '2019-09-27 08:20:49'),
(146, 113, 784, 'CZ5NNBM5FK', 'U11', 'SSB PJSS_1570076915.png', 'SSB PJSS', '0856898958', 'Sudarto_1570025079.png', 'Sudarto', 'Masin_1570025079.png', 'Masin', '2019-10-03 04:28:36', 0, 1, 800000, 0, 'Fransiska_1570025079.jpg', 'Fransiska', '2019-09-28 22:44:24', '2019-09-28 22:44:24'),
(148, 115, 626, '8QPZ9UXLFN', 'U9', 'SSB Maestro FC_1569911345.jpg', 'SSB Maestro FC', '081293768890', 'DEDI LESMANA_1570031390.jpg', 'DEDI LESMANA', 'ADITHYA_1569944963.jpg', 'ADITHYA', '2019-10-02 15:49:50', 0, 1, 800000, 0, '', 'ASEP YAYA SUHENDRA', '2019-09-30 18:22:54', '2019-09-30 18:22:54'),
(149, 116, 407, '8A50WU8ZZ0', 'U11', 'SSB Maestro_1569911695.jpg', 'SSB Maestro FC', '081293768890', 'DEDI LESMANA_1570032124.jpg', 'DEDI LESMANA', 'ADITHYA_1569945673.jpg', 'ADITHYA', '2019-10-02 16:02:04', 0, 1, 800000, 0, '', 'ASEP YAYA SUHENDRA', '2019-09-30 18:23:52', '2019-09-30 18:23:52'),
(151, 118, 205, '5N2G4SC5S7', 'U13', '', 'SSB Putra Utama', '0', '', '-', '', '-', '2019-10-05 19:04:52', 0, 1, 800000, 0, '', '-', '2019-10-02 19:04:52', '2019-10-02 19:04:52'),
(152, 120, 217, '9T83Q9YF2O', 'U13', 'SSB Litara FC_1570764389.jpeg', 'SSB Litara FC', '082113560600', 'SSB Litara FC_1570764389.jpeg', 'Asan Nuryadin, S.Pd', '', 'Yarpan, S.Pd', '2019-10-11 03:26:29', 0, 1, 800000, 0, '', 'Ramdana Saputra, M.Pd', '2019-10-02 21:37:30', '2019-10-02 21:37:30'),
(153, 86, 908, '0SMKL65JFS', 'U11', '', 'SSB Tunas Prima B', '082210647567', 'Alul_1570174558.jpg', 'Alul', 'Riki_1570174558.jpg', 'Riki', '2019-10-04 07:35:58', 0, 1, 800000, 0, '', '-', '2019-10-03 04:31:53', '2019-10-03 04:31:53'),
(154, 124, 10, 'EVYWNYGXAP', 'U9', '', 'Chart Team', '0123123123', '', '-', '', '-', '2019-12-12 19:51:29', 0, 1, 800000, 0, '', '-', '2019-12-09 19:51:29', '2019-12-09 19:51:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `email`, `email_verified_at`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(65, 'loremadmon1', NULL, '$2y$10$MvZSmsKrWp9mq29c9FuYPOo3NcgHVSUSIQCuCJxYezR6A19YWls3K', 1, 'ei2mtAQMqqa3w29VUWnaKqP7rfsaGEVobDOUTLqNF2RNvaScaPzuRaW4Hz0e', '2019-09-25 02:09:51', '2019-09-25 02:09:51'),
(71, 'alazharsumarecon', NULL, '$2y$10$UfAMi/MxbfOg6AbYkeTO1.9Qc7OYKOKVwv/0n0Ek3286JX3lfllei', 0, NULL, '2019-09-25 04:22:35', '2019-09-25 04:22:35'),
(72, 'ssbprotestem', NULL, '$2y$10$GaLF7UNaZSJjFWqv5B4qTORw3wr7Xw0cKbpFEEa6BK.9QqE.3XpUO', 0, NULL, '2019-09-25 04:26:44', '2019-09-25 04:26:44'),
(73, 'tunasprima', NULL, '$2y$10$5yQi67hqK4ScCQzD0ViXQ.ErXmw99FgvgXUKmiYWPg/f2BcsgXieG', 0, 'lro5l1do9zNv24XV4062jgqmkmmB3ww9WlKNw27e2cFLYkxr2LQbdUp54Emr', '2019-09-25 04:27:51', '2019-09-25 04:27:51'),
(74, 'ssbaquahaier', NULL, '$2y$10$ti.eLhWTh.VKjB60XeurielQqeEMtfEZsnRu3Tfy5GDmR5jCZxMqW', 0, 'Xagd9i6kgEYmCQgFw5IiJ5QygpC2ul5QkHNwlCaYS31ivp28QEEx72qEjtln', '2019-09-25 04:28:53', '2019-09-25 04:28:53'),
(75, 'bemofc', NULL, '$2y$10$NJzk8IX6FXdTVnfQLZIQZ.NWg8bLwRtUreQAoimjySyy6uTrZ5ldi', 0, '26sGMmXr1vWZTGTN1NOKmvArvNUBuZGO7LLXrwP3QlAKEj2CdQSXFBmo8ae0', '2019-09-25 04:29:48', '2019-09-25 04:29:48'),
(76, 'indonesianeagle', NULL, '$2y$10$iyzm9j6d8/mG5/ATAZspPet7EMhIxocvmq37Em5kbpYTz70MPS15S', 0, NULL, '2019-09-25 04:31:05', '2019-09-25 04:31:05'),
(77, 'ssbbintangrdh', NULL, '$2y$10$BoEoSlywrICsyev0fCEli.KRZgae9F05jNQ1fHZlrBVNUfQfTfAcm', 0, NULL, '2019-09-25 04:35:17', '2019-09-25 04:35:17'),
(81, 'SSB Brazilia', NULL, '$2y$10$FV17dN8MwTxTtzCAkrQrYeb4jwWxusqlcEw1H1v7uqChImJwrt5fa', 0, 'MeTUgrCe5njHDrovXMbZ2tAdc0KeseA6MtcPYoOZqFpYNzkC8X9tWkW3z1Wy', '2019-09-26 22:17:49', '2019-09-26 22:17:49'),
(86, 'tunasprima2', NULL, '$2y$10$qpu5x0E92HmZsAMyn5OKD.Cz.7OliNMzdf.CYiYvaeaTjWHk4LtCW', 0, 'WrNxZPwqZstcBEf9TJbMB9IU4BFk7OSFxcg2KkJlVbwVJgVsiE1FBlyNOOfO', '2019-09-27 07:27:52', '2019-09-27 07:27:52'),
(87, 'alazharkemang1', NULL, '$2y$10$G9IKplAQvYsgiSCbs8jV0eNEnRJFG32HD0P2FMs3Bqo5QPIhFUzKy', 0, NULL, '2019-09-27 07:29:49', '2019-09-27 07:29:49'),
(90, 'ssbbahtera', NULL, '$2y$10$Zi4tAgb4uKHlCmMptNTPnOMWydDHxZ5PMc5emVFWzB5aOme4Hms4y', 0, 'nwVQAZZEAUJq8ZeAKygNPtFFwxHgk0asZoeB1WAzQgA9msgPYtyZl8W5OVNb', '2019-09-27 07:40:06', '2019-09-27 07:40:06'),
(91, 'indonesianeagle1', NULL, '$2y$10$MN.tEffElPC/GvkNOpYYO.iPg30bNeP7grMYJapnmDlEt/mLOqsWy', 0, NULL, '2019-09-27 07:42:14', '2019-09-27 07:42:14'),
(93, 'alazharkemang2', NULL, '$2y$10$1D1zUSjorgdgv6E3mpHz4.d0KT9OmGZ806nI2rqVtt8fdOCqAJc1.', 0, NULL, '2019-09-27 07:44:18', '2019-09-27 07:44:18'),
(94, 'fsaprivate', NULL, '$2y$10$ZfByOKFNfmvhKZP.gXulseLWWiJMgSwVSLCWAAr43RT4MXBmIU2du', 0, NULL, '2019-09-27 07:46:10', '2019-09-27 07:46:10'),
(96, 'ssbbahtera2', NULL, '$2y$10$pv4EDeeHDvafRr8wPSQWOuP0CzrofBIk7wlffv4ZXFbPWgYN.iR82', 0, NULL, '2019-09-27 07:49:32', '2019-09-27 07:49:32'),
(97, 'ssbasses2', NULL, '$2y$10$cQUXotGFkzUPiZf9mqsi9eqkCA4rMgjBmueZsNTCSugb05YY5d.bq', 0, NULL, '2019-09-27 07:50:35', '2019-09-27 07:50:35'),
(98, 'ssbbintangpulosirih', NULL, '$2y$10$v.aOSct22qSZ69XgthhD0./5CXOgKNF0C8KIkDoAGShezms8IvmCK', 0, NULL, '2019-09-27 07:51:27', '2019-09-27 07:51:27'),
(99, 'ssbprotestem2', NULL, '$2y$10$MGBuL5UCiFkVuJDu9vyx5uObLeJAGBPuLVLEay9bOLa0TSH49Yskq', 0, NULL, '2019-09-27 07:58:59', '2019-09-27 07:58:59'),
(103, 'ssbaquahaier3', NULL, '$2y$10$cU8/efiyZOhWyLH3SukbYe6IzxhjXkClwNQQErl9zcsE7/rnZFJyq', 0, 'YKgHGUc7ibkuqCj7dWHdJdki2xSQH1JicfMlUCQTI1405FjBcyahzcEE8V3X', '2019-09-27 08:08:58', '2019-09-27 08:08:58'),
(104, 'indonesianeagle3', NULL, '$2y$10$V.QNXZCVRcZdgcerzEUoG.aYmAE8rQOe6cgbBfBDteNViAf6wiTEi', 0, NULL, '2019-09-27 08:12:39', '2019-09-27 08:12:39'),
(106, 'ssbasses3', NULL, '$2y$10$NbpW9olWB3bvJN7jNO3dGO6V5GxAeH2Us0SniGHQ2KjWG5sEfHHWO', 0, NULL, '2019-09-27 08:17:07', '2019-09-27 08:17:07'),
(108, 'ssbbahtera3', NULL, '$2y$10$X6E9RjYXj/QY4DS8.g6IF.oV7v38oMb0UhoJ0SAN192Ccvth18Sfm', 0, NULL, '2019-09-27 08:20:36', '2019-09-27 08:20:36'),
(113, 'ssbpjss', NULL, '$2y$10$VaQLaF57N4DN8ZszxKA9buDNZdwbv5c1qouDY.Ejg55gNTiIklvBe', 0, NULL, '2019-09-28 22:43:59', '2019-09-28 22:43:59'),
(114, 'entol', NULL, '$2y$10$.Hg1bR8B/9bi5hDyJcAif.AYJCB4wiLuMOl3Zm.m4PGPcEmMRdU8e', 0, NULL, '2019-09-30 02:19:06', '2019-09-30 02:19:06'),
(115, 'maestro1', NULL, '$2y$10$Wwqz5hWO.UC0nIhxS7rHg.l.UxwuudaKMhNlSJ1QppKRZpk8F0Z1q', 0, NULL, '2019-09-30 18:22:08', '2019-09-30 18:22:08'),
(116, 'maestro2', NULL, '$2y$10$yXXWL8WOi7kf3E5bu8ti7eEZh/s/NZBFTsOcYJfGseZjqbZof96DC', 0, NULL, '2019-09-30 18:23:24', '2019-09-30 18:23:24'),
(117, 'SSBBahtera1', NULL, '$2y$10$.nu5syGQv/oRHljkk8wQN.D7qkUkwHf7bWmKZ0.VqkTKwxqNXX8.6', 0, NULL, '2019-10-02 18:53:11', '2019-10-02 18:53:11'),
(118, 'ssbputrautama', NULL, '$2y$10$kXW1yXgwonFTzw2f/iAZmu1SFBn7tRDDfDiE3XLtiWVNgUguAzaOK', 0, 'koXun2OC2BTAp4CthnDRWiNHZlRhXgnX0jmvs2I8OgtcPK2PLX1XjJfsKmWt', '2019-10-02 19:04:14', '2019-10-02 19:04:14'),
(119, 'litarafc', NULL, '$2y$10$3.vHerq1i.FY6.rp9eXDkuLX3bopI55PVtyBDP7yrBwnh0I7RiZfO', 0, NULL, '2019-10-02 21:17:17', '2019-10-02 21:17:17'),
(120, 'ssblitarafc', NULL, '$2y$10$FQKBv8H2OPq6UA37pbXRr.eqdr0Shs91a9NrP47ZlqqgnDR.SiFam', 0, 'L3YLUFs50GgTle9U2XIjkmZ7QV1c4bLhOYZXnFejPD8bOiOls3JasHkRXsar', '2019-10-02 21:30:05', '2019-10-02 21:30:05'),
(121, 'meeerrrm', NULL, '$2y$10$tHsKawYrMhB5STWD3cBi5uShoX8xvmQI8don2d3RtiC65kXwYn9P2', 1, NULL, '2019-10-07 08:22:09', '2019-10-07 08:22:09'),
(122, 'cantika', NULL, '$2y$10$EO4aD9itnfZQYAWx3IDdIOaYkTd06SlLuyU90pcOqzd/dzW69xj0q', 1, NULL, '2019-10-08 05:25:05', '2019-10-08 05:25:05'),
(123, 'screningdata', NULL, '$2y$10$ILQQ1P.Kuqk/z5n4VGO7ZOnKZjefgPub.VM5XWcPLBNmp6Fh7HcuK', 1, NULL, '2019-10-12 16:54:34', '2019-10-12 16:54:34'),
(124, 'chartgans', NULL, '$2y$10$0iFF2S.Bdn8ynZ7TusTwaO8yPBsykGVQ4mV2hSZpd.5na6x0MToBq', 0, NULL, '2019-12-09 19:51:05', '2019-12-09 19:51:05'),
(125, 'entol_admin', NULL, '$2y$10$p1tUPNSdSAfqTehRy.jxA.DoJ0jWCdVOQRHLA6TeNcNs/tm2rsudu', 1, NULL, '2020-01-29 07:38:47', '2020-01-29 07:38:47');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `hasil_pertandingan`
--
ALTER TABLE `hasil_pertandingan`
  ADD PRIMARY KEY (`id_hp`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `klasemen`
--
ALTER TABLE `klasemen`
  ADD PRIMARY KEY (`id_klasemen`);

--
-- Indeks untuk tabel `konfirmasi_payment`
--
ALTER TABLE `konfirmasi_payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indeks untuk tabel `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id_players`);

--
-- Indeks untuk tabel `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id_teams`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `hasil_pertandingan`
--
ALTER TABLE `hasil_pertandingan`
  MODIFY `id_hp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT untuk tabel `klasemen`
--
ALTER TABLE `klasemen`
  MODIFY `id_klasemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi_payment`
--
ALTER TABLE `konfirmasi_payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `players`
--
ALTER TABLE `players`
  MODIFY `id_players` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=875;

--
-- AUTO_INCREMENT untuk tabel `teams`
--
ALTER TABLE `teams`
  MODIFY `id_teams` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
