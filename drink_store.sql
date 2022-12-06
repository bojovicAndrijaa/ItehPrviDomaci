-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 07:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drink_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `pice`
--

CREATE TABLE `pice` (
  `piceId` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `godinaProizvodnje` int(4) NOT NULL,
  `cena` double NOT NULL,
  `proizvodjacId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pice`
--

INSERT INTO `pice` (`piceId`, `naziv`, `godinaProizvodnje`, `cena`, `proizvodjacId`) VALUES
(1, 'Vinjak 5', 2017, 1750, 1),
(2, 'Coca Cola', 2022, 120, 2),
(3, 'Sprite', 2022, 123, 2),
(4, 'Pepsi', 2022, 100, 3),
(5, 'Mirinda', 2022, 110, 3);

-- --------------------------------------------------------

--
-- Table structure for table `proizvodjac`
--

CREATE TABLE `proizvodjac` (
  `proizvodjacId` int(10) UNSIGNED NOT NULL,
  `Naziv` varchar(50) NOT NULL,
  `Drzava` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `proizvodjac`
--

INSERT INTO `proizvodjac` (`proizvodjacId`, `Naziv`, `Drzava`) VALUES
(1, 'Rubin', 'Srbija'),
(2, 'Coca Cola', 'USA'),
(3, 'Pepsi', 'USA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pice`
--
ALTER TABLE `pice`
  ADD PRIMARY KEY (`piceId`),
  ADD KEY `proizvodjacId_fk` (`proizvodjacId`);

--
-- Indexes for table `proizvodjac`
--
ALTER TABLE `proizvodjac`
  ADD PRIMARY KEY (`proizvodjacId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pice`
--
ALTER TABLE `pice`
  MODIFY `piceId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `proizvodjac`
--
ALTER TABLE `proizvodjac`
  MODIFY `proizvodjacId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pice`
--
ALTER TABLE `pice`
  ADD CONSTRAINT `proizvodjacId_fk` FOREIGN KEY (`proizvodjacId`) REFERENCES `proizvodjac` (`proizvodjacId`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
