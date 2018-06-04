-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2018 at 12:28 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fahmihotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idcustomer` varchar(15) NOT NULL,
  `namacustomer` varchar(50) DEFAULT NULL,
  `cin` varchar(20) DEFAULT NULL,
  `jmlhari` int(11) DEFAULT NULL,
  `namakamar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inap`
--

CREATE TABLE `inap` (
  `idcustomer` varchar(15) DEFAULT NULL,
  `idkamar` varchar(15) DEFAULT NULL,
  `jmlhari` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `idkamar` varchar(15) NOT NULL,
  `idkategori` varchar(20) DEFAULT NULL,
  `namakamar` varchar(50) DEFAULT NULL,
  `lokasilantai` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategorikamar`
--

CREATE TABLE `kategorikamar` (
  `idkategori` varchar(20) DEFAULT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idcustomer`);

--
-- Indexes for table `inap`
--
ALTER TABLE `inap`
  ADD KEY `idcustomer` (`idcustomer`),
  ADD KEY `idkamar` (`idkamar`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`idkamar`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inap`
--
ALTER TABLE `inap`
  ADD CONSTRAINT `inap_ibfk_1` FOREIGN KEY (`idcustomer`) REFERENCES `customer` (`idcustomer`),
  ADD CONSTRAINT `inap_ibfk_2` FOREIGN KEY (`idkamar`) REFERENCES `kamar` (`idkamar`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
