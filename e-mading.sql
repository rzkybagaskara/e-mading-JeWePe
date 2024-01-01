-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 08:22 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-mading`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `admin_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `admin_name`) VALUES
(1, 'gaz', 'gaz123', 'Rizky Bagaskara');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(3) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` longtext NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `uploader` varchar(15) NOT NULL,
  `status_artikel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `gambar`, `uploader`, `status_artikel`) VALUES
(1, 'Lorem Ipsum', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. At perferendis commodi tenetur fugit molestias non aspernatur labore iure molestiae deleniti, earum a accusamus velit, eaque placeat modi repellendus aperiam nemo! Corporis doloremque sint, eveniet architecto incidunt tenetur harum, eaque expedita quis perspiciatis cumque reprehenderit rerum odit id et quia ratione.', '../../public/img/659047a2c40bb_kiryu-smile2.jpeg', 'Gaz', 'Publish'),
(2, 'Artikel tentang sesuatu', 'hahahahahahaha', '../../public/img/658fad7d08d25_engineer tf2.jpg', 'Gaz', 'Draft'),
(3, 'Lorem Warteg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta illum sed corrupti accusamus aut explicabo! Laborum excepturi exercitationem quos iure ut repellendus porro accusantium laboriosam sunt hic quas harum eum, ipsum consequatur quis reprehenderit architecto. Reiciendis voluptas ex praesentium, tenetur ipsa eveniet nobis rem perferendis magni, non sint in ut.', '../../public/img/659265c29241d_kiryu-laugh.jpeg', 'Bagas', 'Publish'),
(4, 'Lorem Nasi', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta illum sed corrupti accusamus aut explicabo! Laborum excepturi exercitationem quos iure ut repellendus porro accusantium laboriosam sunt hic quas harum eum, ipsum consequatur quis reprehenderit architecto. Reiciendis voluptas ex praesentium, tenetur ipsa eveniet nobis rem perferendis magni, non sint in ut.', '../../public/img/659265cd67393_kiryu-smile3.jpeg', 'Bagas', 'Publish');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
