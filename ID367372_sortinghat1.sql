-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: com-linweb631.srv.combell-ops.net:3306
-- Gegenereerd op: 28 dec 2021 om 22:14
-- Serverversie: 5.7.34-37-log
-- PHP-versie: 7.1.25-1+0~20181207224605.11+jessie~1.gbpf65b84

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ID367372_sortinghat1`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `houses`
--

CREATE TABLE `houses` (
  `houseId` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `houses`
--

INSERT INTO `houses` (`houseId`, `name`) VALUES
(1, 'Slytherin'),
(2, 'Hufflepuff'),
(3, 'Ravenclaw'),
(4, 'Gryffondor');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ratings`
--

CREATE TABLE `ratings` (
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Firstname` varchar(80) DEFAULT NULL,
  `Gender` varchar(40) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `City` varchar(40) DEFAULT NULL,
  `Description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`UserID`, `Firstname`, `Gender`, `Age`, `City`, `Description`) VALUES
(1, 'Ines', 'Female', 19, 'Brussels', 'I love food'),
(2, 'Jan', 'Male', 21, 'Mechelen', 'I love football'),
(3, 'Sofie', 'Female', 18, 'Antwerpen', 'I love programming'),
(8, 'Sara', 'Female', 22, 'Brussels', 'I am a great dancer'),
(10, 'Bilal', 'Male', 23, 'Brugge', 'I love writing');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `houses`
--
ALTER TABLE `houses`
  ADD UNIQUE KEY `houseId` (`houseId`);

--
-- Indexen voor tabel `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `houses`
--
ALTER TABLE `houses`
  MODIFY `houseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
