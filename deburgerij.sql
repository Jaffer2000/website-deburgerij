-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 20 okt 2023 om 07:30
-- Serverversie: 8.0.31
-- PHP-versie: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deburgerij`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `actueel`
--

DROP TABLE IF EXISTS `actueel`;
CREATE TABLE IF NOT EXISTS `actueel` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `titel` varchar(255) NOT NULL,
  `tekst` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE IF NOT EXISTS `agenda` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `titel` varchar(255) NOT NULL,
  `tekst` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `titel` varchar(255) NOT NULL,
  `tekst` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `homepage`
--

DROP TABLE IF EXISTS `homepage`;
CREATE TABLE IF NOT EXISTS `homepage` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `titel` varchar(255) NOT NULL,
  `tekst1` varchar(255) NOT NULL,
  `tekst2` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `overons`
--

DROP TABLE IF EXISTS `overons`;
CREATE TABLE IF NOT EXISTS `overons` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `titel1` varchar(255) NOT NULL,
  `tekst1` varchar(255) NOT NULL,
  `titel2` varchar(255) NOT NULL,
  `tekst2` varchar(255) NOT NULL,
  `titel3` varchar(255) NOT NULL,
  `tekst3` varchar(255) NOT NULL,
  `foto1` varchar(255) NOT NULL,
  `foto2` varchar(255) NOT NULL,
  `foto3` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `verhuur`
--

DROP TABLE IF EXISTS `verhuur`;
CREATE TABLE IF NOT EXISTS `verhuur` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `titel1` varchar(255) NOT NULL,
  `tekst1` varchar(255) NOT NULL,
  `titel2` varchar(255) NOT NULL,
  `tekst2` varchar(255) NOT NULL,
  `titel3` varchar(255) NOT NULL,
  `tekst3` varchar(255) NOT NULL,
  `titel 4` varchar(255) NOT NULL,
  `tekst4` varchar(255) NOT NULL,
  `titel 5` varchar(255) NOT NULL,
  `tekst 5` varchar(255) NOT NULL,
  `titel 6` varchar(255) NOT NULL,
  `tekst 6` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vrijwilliger`
--

DROP TABLE IF EXISTS `vrijwilliger`;
CREATE TABLE IF NOT EXISTS `vrijwilliger` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `titel1` varchar(255) NOT NULL,
  `tekst1` varchar(255) NOT NULL,
  `tekst2` varchar(255) NOT NULL,
  `titel 2` varchar(255) NOT NULL,
  `tekst3` varchar(255) NOT NULL,
  `titel3` varchar(255) NOT NULL,
  `tekst4` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
