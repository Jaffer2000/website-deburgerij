-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 13 nov 2023 om 09:17
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
  `tekst` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `foto` varchar(255) NOT NULL,
  `IMG` text NOT NULL,
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
  `tekst` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `foto` varchar(255) NOT NULL,
  `maand` text NOT NULL,
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
  `tekst` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `IMG` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `contact`
--

INSERT INTO `contact` (`ID`, `titel`, `tekst`, `IMG`) VALUES
(1, 'Openingstijden', 'Welkom bij onze openingstijden! We staan klaar om je te helpen en onze deuren geopend op de volgende tijden: [nog invullen]. Kom gerust langs op het moment dat jou het beste uitkomt, we kijken ernaar uit om jou te verwelkomen!', 'bannercontact.png');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `homepage`
--

DROP TABLE IF EXISTS `homepage`;
CREATE TABLE IF NOT EXISTS `homepage` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `titel` varchar(255) NOT NULL,
  `tekst1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tekst2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `IMG` text NOT NULL,
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
  `tekst1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `titel2` varchar(255) NOT NULL,
  `tekst2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `titel3` varchar(255) NOT NULL,
  `tekst3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `titel4` text NOT NULL,
  `tekst4` text NOT NULL,
  `foto1` varchar(255) NOT NULL,
  `foto2` varchar(255) NOT NULL,
  `foto3` varchar(255) NOT NULL,
  `foto4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `foto5` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `overons`
--

INSERT INTO `overons` (`ID`, `titel1`, `tekst1`, `titel2`, `tekst2`, `titel3`, `tekst3`, `titel4`, `tekst4`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`) VALUES
(1, 'Organisatie', '\"Hartelijk welkom bij Wijkcentrum de Burgerij, een centrum dat gewijd is aan het versterken van de lokale gemeenschap en het bevorderen van welzijn. Wij zijn trots op onze rol als een bloeiende en inclusieve ontmoetingsplek, waarbij buurtbewoners samenkomen om te participeren in diverse activiteiten, evenementen en initiatieven. Onze missie is om een positieve en betekenisvolle impact te hebben op het leven van de menen in onze buurt en een brug te slaan tussen gemeenschappen. Ontdek wat Wijkcentrum de Burgerij te bieden heeft en hoe u deel kunt uitmaken van onze gemeenschap.\"', 'Samenwerking', 'In Paauwenburg is er een behoefte aan sociaal contact met de lokale gemeenschap, waarbij aandacht en persoonlijke groei belangrijk zijn. Om deze doelen te bereiken, worden voorzieningen gecreëerd met als kernwaarden: laagdrempeligheid, een thuisgevoel, ontmoeting en verbinden waarbij iedereen welkom is.', 'Missie', 'In Paauwenburg is er een behoefte aan sociaal contact met de lokale gemeenschap, waarbij aandacht en persoonlijke groei belangrijk zijn. Om deze doelen te bereiken, worden voorzieningen gecreëerd met als kernwaarden: laagdrempeligheid, een thuisgevoel, ontmoeting en verbinden waarbij iedereen welkom is.\nIn Paauwenburg is er een behoefte aan sociaal contact met de lokale gemeenschap, waarbij aandacht en persoonlijke groei belangrijk zijn. Om deze doelen te bereiken, worden voorzieningen gecreëerd met als kernwaarden: laagdrempeligheid, een thuisgevoel, ontmoeting en verbinden waarbij iedereen welkom is.In Paauwenburg is er een behoefte aan sociaal contact met de lokale gemeenschap, waarbij aandacht en persoonlijke groei belangrijk zijn. Om deze doelen te bereiken, worden voorzieningen gecreëerd met als kernwaarden: laagdrempeligheid, een thuisgevoel, ontmoeting en verbinden waarbij iedereen welkom is.\nIn Paauwenburg is er een behoefte aan sociaal contact met de lokale gemeenschap, waarbij aandacht en persoonlijke groei belangrijk zijn. Om deze doelen te bereiken, worden voorzieningen gecreëerd met als kernwaarden: laagdrempeligheid, een thuisgevoel, ontmoeting en verbinden waarbij iedereen welkom is.In Paauwenburg is er een behoefte aan sociaal contact met de lokale gemeenschap, waarbij aandacht en persoonlijke groei belangrijk zijn. Om deze doelen te bereiken, worden voorzieningen gecreëerd met als kernwaarden: laagdrempeligheid, een thuisgevoel, ontmoeting en verbinden waarbij iedereen welkom is.\nIn Paauwenburg is er een behoefte aan sociaal contact met de lokale gemeenschap, waarbij aandacht en persoonlijke groei belangrijk zijn. Om deze doelen te bereiken, worden voorzieningen gecreëerd met als kernwaarden: laagdrempeligheid, een thuisgevoel, ontmoeting en verbinden waarbij iedereen welkom is.In Paauwenburg is er een behoefte aan sociaal contact met de lokale gemeenschap, waarbij aandacht en persoonlijke groei belangrijk zijn. Om deze doelen te bereiken, worden voorzieningen gecreëerd met als kernwaarden: laagdrempeligheid, een thuisgevoel, ontmoeting en verbinden waarbij iedereen welkom is.\nIn Paauwenburg is er een behoefte aan sociaal contact met de lokale gemeenschap, waarbij aandacht en persoonlijke groei belangrijk zijn. Om deze doelen te bereiken, worden voorzieningen gecreëerd met als kernwaarden: laagdrempeligheid, een thuisgevoel, ontmoeting en verbinden waarbij iedereen welkom is.In Paauwenburg is er een behoefte aan sociaal contact met de lokale gemeenschap, waarbij aandacht en persoonlijke groei belangrijk zijn. Om deze doelen te bereiken, worden voorzieningen gecreëerd met als kernwaarden: laagdrempeligheid, een thuisgevoel, ontmoeting en verbinden waarbij iedereen welkom is.\nIn Paauwenburg is er een behoefte aan sociaal contact met de lokale gemeenschap, waarbij aandacht en persoonlijke groei belangrijk zijn. Om deze doelen te bereiken, worden voorzieningen gecreëerd met als kernwaarden: laagdrempeligheid, een thuisgevoel, ontmoeting en verbinden waarbij iedereen welkom is.In Paauwenburg is er een behoefte aan sociaal contact met de lokale gemeenschap, waarbij aandacht en persoonlijke groei belangrijk zijn. Om deze doelen te bereiken, worden voorzieningen gecreëerd met als kernwaarden: laagdrempeligheid, een thuisgevoel, ontmoeting en verbinden waarbij iedereen welkom is.\nIn Paauwenburg is er een behoefte aan sociaal contact met de lokale gemeenschap, waarbij aandacht en persoonlijke groei belangrijk zijn. Om deze doelen te bereiken, worden voorzieningen gecreëerd met als kernwaarden: laagdrempeligheid, een thuisgevoel, ontmoeting en verbinden waarbij iedereen welkom is.', 'Communicatie', 'In het bruisende Wijkcentrum De Burgerij zorgen we ervoor dat iedereen op de hoogte is van onze organisatie, spannende activiteiten en andere boeiende weetjes. We verspreiden deze informatie via onze website en persberichten', 'vrijwilliger2.png', '', 'puzzle.png', 'overonsdoel2.png', 'overonspraten');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `verhuur`
--

DROP TABLE IF EXISTS `verhuur`;
CREATE TABLE IF NOT EXISTS `verhuur` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `titel1` varchar(255) NOT NULL,
  `tekst1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `titel2` varchar(255) NOT NULL,
  `tekst2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `titel3` varchar(255) NOT NULL,
  `tekst3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `titel4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tekst4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `titel5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bullet1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Bullet2` text NOT NULL,
  `Bullet3` text NOT NULL,
  `titel6` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tekst6` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `verhuur`
--

INSERT INTO `verhuur` (`ID`, `titel1`, `tekst1`, `titel2`, `tekst2`, `titel3`, `tekst3`, `titel4`, `tekst4`, `titel5`, `bullet1`, `Bullet2`, `Bullet3`, `titel6`, `tekst6`, `img1`, `img2`, `img3`, `img4`) VALUES
(1, 'Een feestje plannen?', 'Dat kan in onze verhuur ruimtes. Er zijn 5 verschillende ruimtes om te kiezen naar u gewenst.', 'Onze ruimtes', 'In Wijkcentrum De Burgerij houden we iedereen op de hoogste via onze website, persberichten en jaarkalender. Ons bestuur ontmoet elkaar minstens 4 keer per jaar om belangrijke zaken te bespreken. We waarderen onze vrijwilligers en organiseren jaarlijks een bijeenkomt om terug te kijken op onze prestaties en het komende jaar te plannen.', 'Lekker borrelen ! Dat kan.', 'Er is aanwezig een hele menukaart met verschillende eten aanwezig', 'Onze bar', 'Bij ons kunt u een bar huren voor uw speciale gelegenheid. Wij bieden een uitgebreid selectie bars en drankopties om uw evenement compleet te maken. Laat ons uw feest nog memorabeler maken met onze professionele barverhuurdienst.', 'Info', ' De Burgerij verzorgt de drankjes. Alleen verhuur met beheer van twee vrijwillegers', 'Activiteiten deelnemers: € 10,- per maand. Kinderen € 5,-.', 'Bij vroegtijdig (minimaal 10 dagen) afzeggen zijn geen kosten verschuldigd.', 'Onze schoonmaak spullen', 'Dit bedrijf is toegewijd aan het leveren van hoogwaardige schoonmaakspullen om elke ruimte sprankelend schoon te maken. Van bezems tot reinigingsmiddelen, we hebben alles wat u nodig heeft voor een vlekkeloze schoonmaak. ', 'verhuurheader.png', 'verhuur1.png', 'verhuur2.png', 'verhuurcleaning1.png');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vrijwilliger`
--

DROP TABLE IF EXISTS `vrijwilliger`;
CREATE TABLE IF NOT EXISTS `vrijwilliger` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `titel1` varchar(255) NOT NULL,
  `tekst1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tekst2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `titel 2` varchar(255) NOT NULL,
  `tekst3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `titel3` varchar(255) NOT NULL,
  `tekst4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `IMG` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
