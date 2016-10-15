-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 15. Okt 2016 um 14:43
-- Server-Version: 10.1.16-MariaDB
-- PHP-Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `poplar`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `frage`
--

CREATE TABLE `frage` (
  `FID` int(11) NOT NULL,
  `Frage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `frage`
--

INSERT INTO `frage` (`FID`, `Frage`) VALUES
(1, 'Magst du Bratwurst?'),
(2, 'Was ist dein Lieblingsessen?'),
(3, 'Was ist dein Lieblingsbuch?'),
(4, 'Magst du Bratwurst?'),
(5, 'Wann und wie oft duschst du?'),
(6, 'Wie hell ist es im deinem Zimmer während du schläfst?'),
(7, 'Hast du dein Fenster offen, wenn du schläfst?'),
(8, 'Warum ist die Banane krumm?'),
(9, 'Magst du Brokkoli?'),
(10, 'Magst du Tiere?'),
(11, 'Hunde oder Katzen?'),
(12, 'Was sind die weißen Streifen hinter Flugzeugen?'),
(13, 'Android oder IOS?'),
(14, 'Wie lange schläfst du morgens?'),
(15, 'Was ist dein Lieblingswitz?'),
(16, 'Warmes oder kaltes Abendessen?'),
(17, 'Lieblingsjahreszeit?'),
(18, 'Was trinkst du am liebsten?'),
(19, 'Isst du viel?'),
(20, 'Würdest du nächste Woche gerne auf einen Baum klettern?'),
(21, 'Was ist deine Superkraft?'),
(22, 'Was war dein erster Berufswunsch?'),
(23, 'Was ist wichtiger, Familie oder Freunde?'),
(24, 'Naturwissenschaften oder Sprachen?'),
(25, 'Wieso existierst du?'),
(26, 'Was ist das wichtigste in deinem Leben?'),
(27, 'Wie willst du sterben?'),
(28, 'Wie alt willst du werden?'),
(29, 'Was siehst du, wenn du in den Spiegel schaust?'),
(30, 'Was ist dein Traumurlaubsziel?'),
(31, 'Wie stellst du dir die Welt in 30 Jahren vor?'),
(32, 'Glaubst du an Schicksal?'),
(33, 'Was denkst du, wenn du Nachrichten schaust?'),
(34, 'Wie wichtig ist dir Geld?'),
(35, 'Was sind Freunde für dich?'),
(36, 'Was macht die Menschen zu Menschen?'),
(37, 'Was ist Glück?'),
(38, 'Arbeitest du gerne in einem Team?'),
(39, 'Ist dir Umweltschutzwichtig?'),
(40, 'Die Welt ist...'),
(41, 'Welche zwei Dinge magst du an dir?'),
(42, 'Wie findest du dich in einer fremden Stadt zurecht?');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `frage`
--
ALTER TABLE `frage`
  ADD PRIMARY KEY (`FID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `frage`
--
ALTER TABLE `frage`
  MODIFY `FID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
