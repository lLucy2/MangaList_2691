-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 07:18 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmanga_2691`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(5) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin'),
(4, 'ray', '2691');

-- --------------------------------------------------------

--
-- Table structure for table `tb_katalog`
--

CREATE TABLE `tb_katalog` (
  `manga_id` int(11) NOT NULL,
  `manga_judul` varchar(100) NOT NULL,
  `manga_penulis` varchar(50) NOT NULL,
  `manga_genre` varchar(100) NOT NULL,
  `manga_rilis` date NOT NULL,
  `manga_status` varchar(25) NOT NULL,
  `manga_cover` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_katalog`
--

INSERT INTO `tb_katalog` (`manga_id`, `manga_judul`, `manga_penulis`, `manga_genre`, `manga_rilis`, `manga_status`, `manga_cover`) VALUES
(1, 'Berserk', 'Miura Kentarou', 'Action, Adventure, Award Winning, Drama, Fantasy, Horror, Supernatural', '1989-08-25', 'On Going', 'berserk.jpg'),
(2, 'Vegabond', 'Eiji Yoshikawa', 'Action, Adventure, Award Winning', '1998-09-03', 'On Hiatus', 'vegabond.jpg'),
(3, 'One Piece', 'Eiichiro Oda', 'Action, Adventure, Fantasy', '0000-00-00', 'On Going', 'onepiece.jpg'),
(5, 'Slam Dunk', 'Takehio Inoue', 'Award Winning, Sports', '1990-09-18', 'Completed', 'slamdunk.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_katalog`
--
ALTER TABLE `tb_katalog`
  ADD PRIMARY KEY (`manga_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_katalog`
--
ALTER TABLE `tb_katalog`
  MODIFY `manga_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
