-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jan 2024 pada 02.28
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `importexcel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `tgl_21` varchar(255) DEFAULT NULL,
  `tgl_22` varchar(255) DEFAULT NULL,
  `tgl_23` varchar(255) DEFAULT NULL,
  `tgl_24` varchar(255) DEFAULT NULL,
  `tgl_25` varchar(255) DEFAULT NULL,
  `tgl_26` varchar(255) DEFAULT NULL,
  `tgl_27` varchar(255) DEFAULT NULL,
  `tgl_28` varchar(255) DEFAULT NULL,
  `tgl_29` varchar(255) DEFAULT NULL,
  `tgl_30` varchar(255) DEFAULT NULL,
  `tgl_31` varchar(255) DEFAULT NULL,
  `tgl_1` varchar(255) DEFAULT NULL,
  `tgl_2` varchar(255) DEFAULT NULL,
  `tgl_3` varchar(255) DEFAULT NULL,
  `tgl_4` varchar(255) DEFAULT NULL,
  `tgl_5` varchar(255) DEFAULT NULL,
  `tgl_6` varchar(255) DEFAULT NULL,
  `tgl_7` varchar(255) DEFAULT NULL,
  `tgl_8` varchar(255) DEFAULT NULL,
  `tgl_9` varchar(255) DEFAULT NULL,
  `tgl_10` varchar(255) DEFAULT NULL,
  `tgl_11` varchar(255) DEFAULT NULL,
  `tgl_12` varchar(255) DEFAULT NULL,
  `tgl_13` varchar(255) DEFAULT NULL,
  `tgl_14` varchar(255) DEFAULT NULL,
  `tgl_15` varchar(255) DEFAULT NULL,
  `tgl_16` varchar(255) DEFAULT NULL,
  `tgl_17` varchar(255) DEFAULT NULL,
  `tgl_18` varchar(255) DEFAULT NULL,
  `tgl_19` varchar(255) DEFAULT NULL,
  `tgl_20` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `tgl_21`, `tgl_22`, `tgl_23`, `tgl_24`, `tgl_25`, `tgl_26`, `tgl_27`, `tgl_28`, `tgl_29`, `tgl_30`, `tgl_31`, `tgl_1`, `tgl_2`, `tgl_3`, `tgl_4`, `tgl_5`, `tgl_6`, `tgl_7`, `tgl_8`, `tgl_9`, `tgl_10`, `tgl_11`, `tgl_12`, `tgl_13`, `tgl_14`, `tgl_15`, `tgl_16`, `tgl_17`, `tgl_18`, `tgl_19`, `tgl_20`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tri Handoyo, Ak., M.B.A.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(2, 'Widyatmono, Ak.', 'H', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'FP', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'DL', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(3, 'Imam Yunarto, Ak., M.Acc.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'DL', 'DL', 'DL', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'DK', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(4, 'Bima Sujatmiko, S.H., M.H.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(5, 'Kapsari, Ak., M.A.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'DL', 'DL', 'DL', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'DL', 'DL', 'H', 'H', 'H', 'LS', 'LM', 'PC', 'DL', 'DTI', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(6, 'Ipung Heswara Yogawardhana, Ak.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(7, 'Eko Suwahyo, S.E.', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(8, 'Robertus Hanung Habsoro, Ak.', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'DTI', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(9, 'Taufik Maulana Hamzah Putra, Ak.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(10, 'Sudiyatmoko, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DT', 'DL', 'DL', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(11, 'Agus Salim, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'DL', 'DL', 'DL', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'DTI', 'H', 'H', 'H', 'H', 'LS', 'LM', 'DL', 'DL', 'DL', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(12, 'Bagus Putu Santika, S.E., M.Si.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(13, 'Djoko Moeljanto, S.E.', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(14, 'Ni Ketut Sri Arini, Ak., M.Si.', 'H', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(15, 'Johan Wahyudi, S.E.', 'H', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(16, 'Agihirawan, Ak.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'DT', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(17, 'Agung Priyadi, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'A', 'A', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(18, 'Agus Dwiprijarto, Ak.', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(19, 'Bambang Mulyanto, Ak.', 'H', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DL', 'DL', 'DL', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(20, 'Barata Febtriadji, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(21, 'Budi Priharyanto, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(22, 'Drs. Agung Nugroho', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'CT', 'CT', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(23, 'Franciscus Hary Pitrajuwanto, Ak.', 'H', 'DK', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'CT', 'LS', 'LM', 'LCB', 'CT', 'DL', 'DL', 'DL', 'LS', 'LM', 'DTI', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'DL', 'DL', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(24, 'Imam Aripin, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DT', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(25, 'J. Dwi Poetranto, Ak.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DT', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(26, 'Kahar, Ak.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(27, 'Sri Mujiati, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(28, 'Sukarno, S.E., M.E.', 'DLDK', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'DL', 'DL', 'DL', 'PC', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(29, 'Taufan Hidayat, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'DTI', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DT', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(30, 'Tukimin, S.E.', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'CT', 'LS', 'LM', 'CT', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(31, 'Agus Cahyono Putro, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'DTI', 'DTI', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(32, 'Edy Faozaeni, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'DL', 'DL', 'LS', 'LM', 'LCB', 'FP', 'FP', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DL', 'DL', 'DL', 'LS', 'LM', 'DL', 'DL', 'DTI', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(33, 'Erwan Ruhana, S.E.', 'H', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'FP', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(34, 'Khoirul Anwar, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(35, 'M. Saefudin Zuhri, Ak.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'A', 'A', 'A', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(36, 'Agung Budi Nugroho, Ak.', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DK', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DT', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(37, 'Ahmad Roziqin, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(38, 'Luchdita Priatama, Ak.', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'H', 'DTI', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(39, 'Luciana Marlyn Haryanti, S.E.', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'PCI', 'H', 'FP', 'LS', 'LM', 'DTI', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DT', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(40, 'Adriana Pradopowati, S.E.,Akt., M.Si.', 'DLDK', 'DLDK', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(41, 'Amelya M Bouato, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'PC', 'H', 'LS', 'LM', 'CT', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'CT', 'CT', 'CT', 'CT', 'CT', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(42, 'Arif Subakir, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'THI', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'THI', 'H', 'DL', 'LS', 'LM', 'FP', 'PC', 'DT', 'DL', 'DL', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(43, 'Asyharin, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'CT', 'DTI', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(44, 'Djati Handoko, S.E.', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(45, 'Dwi Ariyani, S.E., M.Si.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'DL', 'DL', 'DL', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DL', 'DL', 'DL', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(46, 'Erdiana Vicki, Ak., M.Si.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DT', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(47, 'Erni Kurniyati, S.E., M.Si.', 'H', 'PCI', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'CT', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DT', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(48, 'Fathul Huda Yusuf Ukhrowi, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'CT', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(49, 'Foedji Aman Kurnianto, S.E.', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(50, 'Helmy Magdalena, S.E.', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'DTI', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(51, 'Ida Handayani, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'PC', 'A', 'A', 'A', 'LS', 'LM', 'A', 'A', 'A', 'A', 'A', 'LS', 'LM', 'A', 'H', 'DT', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(52, 'Ike Damayanti, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'PCI', 'LS', 'LM', 'THI', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(53, 'Ima Siwi Nursanti, Ak.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(54, 'Indah Pratiwi, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'DTI', 'DTI', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DT', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(55, 'Itta Takwayana, S.E.', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'THI', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(56, 'Kartika Titus Andani, S.M.B', 'CS3', 'CS3', 'LS', 'LM', 'LCB', 'LCB', 'CS3', 'CS3', 'CS3', 'LS', 'LM', 'LCB', 'CS3', 'CS3', 'CS3', 'CS3', 'LS', 'LM', 'CS3', 'CS3', 'CS3', 'CS3', 'CS3', 'LS', 'LM', 'CS4', 'CS4', 'CS1', 'CS1', 'CS1', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(57, 'Moeryanti, S.E.', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(58, 'Muslimah Noorhayati, S.E.', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'CT', 'CT', 'CT', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(59, 'Nadia Roza, S.E.,Akt.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'DL', 'DL', 'DL', 'LS', 'LM', 'LCB', 'H', 'DL', 'DL', 'DL', 'LS', 'LM', 'DL', 'DL', 'DL', 'DL', 'DL', 'LS', 'LM', 'DL', 'DL', 'H', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(60, 'Natalia Budi Hapsari, S.E.,Akt.', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'PCI', 'H', 'H', 'H', 'LS', 'LM', 'DTI', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(61, 'Nirmala Hidajati, S.E.', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'PCI', 'CKS', 'CKS', 'LS', 'LM', 'CKS', 'CAP1', 'CAP1', 'CAP1', 'CAP1', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(62, 'Poedja Dwiatma, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(63, 'Purwani, S.E.', 'PC', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'H', 'H', 'PCI', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(64, 'R.R. Asri Moeljani, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(65, 'Retno Hernaniningrum, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(66, 'Rita Suryani, S.E., M.Si.', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(67, 'Sadiyana Puspa Dewi, S.E.', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'CT', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'PCI', 'H', 'DTI', 'CS1', 'CS1', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(68, 'Santhy Puspita Sari, Ak., M.M.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(69, 'Susanto, S.E.', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(70, 'Titiek Fujiyanti, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(71, 'Umi Hais, Ak.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'DTI', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(72, 'Wahyu Ekowati Setyorini, S.E., M.Ak.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'PCI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(73, 'Wahyunurhidayat Pariwirawan, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'DTI', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(74, 'Anindya Agustina, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'DTI', 'H', 'H', 'LS', 'LM', 'DTI', 'H', 'CT', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(75, 'Antonia Mayangkirana S', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'PCI', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(76, 'Arfira Puspitadewi, S.E., M.Ak.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CAP1', 'CAP1', 'CAP1', 'LS', 'LM', 'LCB', 'CAP1', 'CAP1', 'H', 'H', 'LS', 'LM', 'CAP1', 'CAP1', 'CAP1', 'CAP1', 'CAP1', 'LS', 'LM', 'CT', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(77, 'Ayub Sukresno, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'CT', 'CT', 'DT', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(78, 'Devi Arviandi Saputra, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'DL', 'DL', 'DL', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(79, 'Dini Ayu Novianingsih, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'CS1', 'CS1', 'LS', 'LM', 'H', 'H', 'H', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(80, 'Eka Permadi Reza Bachtiar, S.E.', 'CAP1', 'CAP1', 'LS', 'LM', 'LCB', 'LCB', 'CAP1', 'CAP1', 'CAP1', 'LS', 'LM', 'LCB', 'CAP1', 'CAP1', 'CAP1', 'CAP1', 'LS', 'LM', 'H', 'DTI', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(81, 'Endah Maharani, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(82, 'Fahmi Febriadi Herlambang, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'DL', 'DL', 'DL', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DL', 'DL', 'DL', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(83, 'Hendri Fajar Kurniawan, S.E.', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'CT', 'CT', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(84, 'Intan Kemala Muktiningtyas, S.E.', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(85, 'Irfan Annas Tomo, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'DTI', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'DT', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(86, 'Irma Ika Melati, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'PCI', 'PCI', 'CS1', 'CS1', 'LS', 'LM', 'CT', 'CT', 'A', 'CT', 'CT', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(87, 'Kholid Mawardi, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTIPC', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(88, 'Miftah Fauzia, S.S.T.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'DTI', 'H', 'LS', 'LM', 'DTI', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'PC', 'DT', 'DL', 'DL', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(89, 'Muhammad Kurniawan, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'DL', 'DL', 'DL', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'CT', 'CT', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(90, 'Nofilia Tri Indriyani, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'DTI', 'LS', 'LM', 'LCB', 'H', 'H', 'CS1', 'H', 'LS', 'LM', 'CS1', 'CS2', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(91, 'Nur Afni Iriani, S.E.', 'CM3', 'CM3', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(92, 'Ratna Puspita Sari, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'PCI', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(93, 'Reza Mahardian Yulandra, S.S.T.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'DL', 'DL', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(94, 'Rina Puspitasari, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(95, 'Rinda Purdiyah Kurniadi, M.H.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(96, 'Rofiq Tri Hartanto, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DT', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(97, 'Rudiawan Noor Aliamsyah, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'DL', 'DL', 'DL', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'CT', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'CT', 'CT', 'CT', 'CT', 'CT', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(98, 'Rudolf Diany Puspita Kencana, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(99, 'Sandra Aristiani Andriyanto, S.E.', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(100, 'Shinta Altia Widosari, S.E.', 'H', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'DTI', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'PCI', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(101, 'Sulistyo Dwi Haryanto, S.S.T.', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'FP', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(102, 'Tri Martini, S.Si.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(103, 'Trya Mustika Nurita Sari, S.Si.', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(104, 'Wibowo Saputro Nugroho, S.E.', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'PCI', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(105, 'Zulike Nurfarachin', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(106, 'Agustina Mustika Candra Dewi, S.E.', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:17', '2024-01-25 11:22:17'),
(107, 'Anggit Priangga', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(108, 'Arif Sofiyanto', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(109, 'Aulia Rahmawati, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(110, 'Baeti Nur Widya, S.E.', 'CM3', 'CM3', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'DT', 'DT', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DT', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(111, 'Bagunanto Dwi Wiworo, S.Akun.', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(112, 'Bagus Eko Priyanto', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(113, 'Dessi Arifianti, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'CT', 'CT', 'LS', 'LM', 'CT', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(114, 'Dini Rayhana Prasetyaningtyas, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(115, 'Dini Yuliatami, S.E.', 'H', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'DTI', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(116, 'Eko Budi Prayogo', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(117, 'Eko Wahyu Septiawan', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'THI', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'DTI', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'CT', 'CT', 'CT', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(118, 'Fawzy Madjid Abdullah, S.S.T.', 'CS3', 'CS3', 'LS', 'LM', 'LCB', 'LCB', 'CS3', 'CS3', 'CS3', 'LS', 'LM', 'LCB', 'CS3', 'CS3', 'CS3', 'CS3', 'LS', 'LM', 'CS3', 'CS3', 'CS3', 'CS3', 'CS3', 'LS', 'LM', 'DL', 'DL', 'A', 'CS1', 'CS1', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(119, 'Filipus Rio Tiktantyo', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'DL', 'DL', 'H', 'H', 'H', 'LS', 'LM', 'DL', 'DL', 'DL', 'DL', 'DL', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(120, 'Gede Vidi Wuragi', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'FP', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(121, 'Gigih Waskitho, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(122, 'Hadvie Ardya Rama, S.Ak', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'DL', 'DL', 'DL', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'FP', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(123, 'Harum Anggraini, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'THI', 'H', 'LS', 'LM', 'CT', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(124, 'Haryadi Budiman, S.E.', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(125, 'Ika Novitasari, S.Ak', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'CT', 'H', 'H', 'H', 'H', 'LS', 'LM', 'CT', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(126, 'Isna Yulianti Ridhouljannah, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'CT', 'LS', 'LM', 'LCB', 'DTI', 'H', 'H', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'PC', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(127, 'Lilian Margaretha Sihombing, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'DTI', 'DTI', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(128, 'Lukman Irwansyah', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(129, 'Muhammad Sutrisno, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'DL', 'DL', 'DL', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'DTI', 'DTI', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(130, 'Nico Sugiarto Putra', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'DL', 'DL', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(131, 'Nikmah Listyarini, S.E.', 'H', 'DK', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'DTI', 'DTI', 'H', 'LS', 'LM', 'H', 'PCI', 'H', 'H', 'PC', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(132, 'Nizmah Umi Najihah, S.E.', 'H', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'DT', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(133, 'Priyo Setiawan, S.E.', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'CT', 'CT', 'LS', 'LM', 'CT', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(134, 'Rezha Galih Wicaksono, S.E.', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(135, 'Rima Suryani, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'CT', 'CT', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(136, 'Rizka Wulandari, S.S.T.', 'H', 'PCI', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'PCI', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(137, 'Titik Ernawati, S.E.,Akt.', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(138, 'Ulfah Atika Pratiwi, S.E.', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'CM1', 'CM1', 'CM1', 'CM1', 'CM1', 'LS', 'LM', 'CM1', 'CM1', 'CM1', 'CM1', 'CM1', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(139, 'Wilis Sugiyarti, S.E.', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(140, 'Zulfa Nur Rohmah, S.E.', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'PCI', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(141, 'Abu Sofyan, S.H.', 'DLDK', 'DLDK', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'PC', 'PC', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(142, 'Agaton Winubhawa', 'H', 'PCI', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(143, 'Ani Nur Farida', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(144, 'Aris Supriati', 'H', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(145, 'Aris Susanto', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(146, 'Damiana Sri Cahyani', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(147, 'Didik Agus Susanto', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'DL', 'DL', 'DL', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'CT', 'CT', 'CT', 'LS', 'LM', 'A', 'H', 'PC', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(148, 'Heniyati', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'H', 'PCI', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'PCI', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DT', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(149, 'Hepi', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'DL', 'DL', 'DL', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'DL', 'DL', 'DL', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(150, 'I Gusti Ayu Mas Arijesni', 'DL', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(151, 'Ignatius Pindha Kalpika', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'DTI', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(152, 'Indah Tri Hastuti', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'DL', 'DL', 'DL', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(153, 'Mohamad Irfan', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(154, 'Muji Asyari', 'DL', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(155, 'Mujiatun', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'A', 'PCI', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(156, 'Ratna Wulandari', 'DL', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(157, 'Rima Nugraharini', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'DTI', 'H', 'LS', 'LM', 'H', 'H', 'DT', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(158, 'Sri Lestari', 'H', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(159, 'Sundari', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(160, 'Ahmad Faozi', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'CT', 'CT', 'LS', 'LM', 'CS1', 'CS1', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(161, 'Sri Januarti', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'DTI', 'DTI', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(162, 'Suratno', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'DL', 'DL', 'DL', 'DL', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(163, 'Farahdina Agustin', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'CT', 'LS', 'LM', 'CT', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(164, 'Romdonah', 'H', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(165, 'Paidi', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'CT', 'CT', 'CT', 'CT', 'CT', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(166, 'Afid Dwi Irfianto', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'DL', 'DL', 'DL', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DL', 'DL', 'DL', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(167, 'Ahmad Yulianto', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'DTI', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'FP', 'LS', 'LM', 'DL', 'DL', 'DL', 'DL', 'DL', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(168, 'Arum Diana Marta Ningtyas', 'H', 'THI', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'FP', 'LS', 'LM', 'H', 'H', 'H', 'H', 'PCI', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(169, 'Fajari Nurhayati', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(170, 'Mohamad Mabruri', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'DTI', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(171, 'Rogo Prakoso', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'DTI', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'DL', 'DL', 'H', 'H', 'H', 'LS', 'LM', 'DL', 'A', 'DL', 'DL', 'DL', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(172, 'Ari Wahyu Wibowo', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CAP1', 'CAP1', 'CAP1', 'LS', 'LM', 'LCB', 'CAP1', 'CAP1', 'CAP1', 'CAP1', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(173, 'Dhiyah Ismawati', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'H', 'H', 'LS', 'LM', 'DTI', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DT', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(174, 'Fauzi Wakhid Ilmiah', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(175, 'I Made Arya Cakraningrat', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'DL', 'DL', 'DL', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'DL', 'DL', 'DL', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(176, 'Lita Chandra', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'DTI', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(177, 'Mohamad Alfian', 'H', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'CT', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(178, 'Nur Aini Dyah Kusumastuti', 'CT', 'CT', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(179, 'Ratna Rachmawati', 'CM1', 'CM1', 'LS', 'LM', 'LCB', 'LCB', 'CM1', 'CM1', 'CM1', 'LS', 'LM', 'LCB', 'CM1', 'CM1', 'CM2', 'CM2', 'LS', 'LM', 'CM2', 'CM2', 'CM2', 'CM2', 'CM2', 'LS', 'LM', 'CM2', 'CM2', 'CM1', 'CM1', 'CM1', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(180, 'Alfita Iriandini Annisa', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(181, 'Fuji Gilang Grahandini', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'DT', 'LS', 'LM', 'H', 'H', 'DT', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(182, 'Ridwan', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(183, 'Muri Win Rizka', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(184, 'Adin Sukardi', 'H', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(185, 'R. Tommy Martin Susaryanto', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DT', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(186, 'Joko Prihanto', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(187, 'Rokhiban', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'DL', 'DL', 'DL', 'DL', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'CT', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(188, 'Tri Akhadiyati, S.E.', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'CT', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(189, 'Ari Sudarsono', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(190, 'Maulana Elen Yudha Shugara', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'CT', 'CT', 'CT', 'CT', 'H', 'LS', 'LM', 'H', 'H', 'DT', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(191, 'Yosia Papilaya', 'DL', 'DL', 'LS', 'LM', 'LCB', 'LCB', 'DL', 'CT', 'DL', 'LS', 'LM', 'LCB', 'CT', 'DL', 'DL', 'CT', 'LS', 'LM', 'DL', 'DL', 'DL', 'DL', 'DL', 'LS', 'LM', 'DL', 'DL', 'DTPC', 'H', 'PC', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18');
INSERT INTO `users` (`id`, `name`, `tgl_21`, `tgl_22`, `tgl_23`, `tgl_24`, `tgl_25`, `tgl_26`, `tgl_27`, `tgl_28`, `tgl_29`, `tgl_30`, `tgl_31`, `tgl_1`, `tgl_2`, `tgl_3`, `tgl_4`, `tgl_5`, `tgl_6`, `tgl_7`, `tgl_8`, `tgl_9`, `tgl_10`, `tgl_11`, `tgl_12`, `tgl_13`, `tgl_14`, `tgl_15`, `tgl_16`, `tgl_17`, `tgl_18`, `tgl_19`, `tgl_20`, `remember_token`, `created_at`, `updated_at`) VALUES
(192, 'Cahyarani Daulika Nugraha', 'CM1', 'CM1', 'LS', 'LM', 'LCB', 'LCB', 'CM2', 'CM2', 'CM2', 'LS', 'LM', 'LCB', 'CM2', 'CM2', 'CM2', 'CM2', 'LS', 'LM', 'CM2', 'CM2', 'CM2', 'CM2', 'CM2', 'LS', 'LM', 'CM2', 'CM2', 'CM1', 'CM1', 'CM1', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(193, 'Novian Ahmad', 'THI', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(194, 'Diana Permata Putri', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'PCI', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(195, 'Aristianti Okta Kurniawati', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'CT', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(196, 'Suhadi', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'CT', 'LS', 'LM', 'LCB', 'H', 'DTI', 'H', 'H', 'LS', 'LM', 'DTI', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(197, 'Pasi Firdaus', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'CT', 'CT', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(198, 'Ika Rahmawati', 'CB2', 'CB2', 'LS', 'LM', 'LCB', 'LCB', 'CB2', 'CB2', 'CB2', 'LS', 'LM', 'LCB', 'CB3', 'CB3', 'CB3', 'CB3', 'LS', 'LM', 'CB3', 'CB3', 'CB3', 'CB3', 'CB3', 'LS', 'LM', 'CB3', 'CB3', 'CB3', 'CB3', 'CB3', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(199, 'Sudadi', 'DL', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'CT', 'CT', 'CT', 'CT', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(200, 'Prihatno', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'FP', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(201, 'Slamet Widodo', 'H', 'DTI', 'LS', 'LM', 'LCB', 'LCB', 'CT', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'DTI', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DT', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18'),
(202, 'Supono', 'H', 'H', 'LS', 'LM', 'LCB', 'LCB', 'H', 'H', 'H', 'LS', 'LM', 'LCB', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'H', 'H', 'H', 'LS', 'LM', 'H', 'H', 'DTI', 'H', 'H', 'LS', NULL, '2024-01-25 11:22:18', '2024-01-25 11:22:18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
