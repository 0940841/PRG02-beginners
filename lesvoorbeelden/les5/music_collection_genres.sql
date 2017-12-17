-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 17 dec 2017 om 12:50
-- Serverversie: 10.1.19-MariaDB
-- PHP-versie: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_collection_3`
--
DROP DATABASE `music_collection_3`;
CREATE DATABASE IF NOT EXISTS `music_collection_3` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `music_collection_3`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `albums`
--

DROP TABLE IF EXISTS `albums`;
CREATE TABLE `albums` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `year` varchar(4) NOT NULL,
  `tracks` int(3) NOT NULL,
  `image` varchar(255) NOT NULL,
  `artist_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `albums`
--

INSERT INTO `albums` (`id`, `name`, `year`, `tracks`, `image`, `artist_id`) VALUES
(1, 'Live At Rome Olympic Stadium', '2013', 14, 'images/live_at_rome_olympic_stadium.jpg', 1),
(2, 'Systematic Chaos', '2007', 8, 'images/systematic_chaos.jpg', 4),
(3, 'United We Are', '2015', 14, 'images/united_we_are.jpg', 1),
(4, 'Greatest Hits', '2010', 57, 'images/greatest_hits.jpg', 5),
(5, 'Gold Cobra', '2011', 16, 'images/gold_cobra.jpg', 3),
(6, 'Mijn Ikken', '2005', 12, 'images/mijn_ikken.jpg', 11),
(7, 'Love Part 1', '2011', 11, 'images/love_part_1.jpg', 7),
(8, 'Unstoppable Momentum', '2013', 11, 'images/unstoppable_momentum.jpg', 6),
(9, 'Cut Your Teeth', '2014', 3, 'images/cut_your_teeth.jpg', 8),
(10, 'This Is War', '2009', 15, 'images/this_is_war.jpg', 9),
(11, 'Legend (Remastered)', '2002', 16, 'images/legend.jpg', 10),
(13, 'Piet', '2015', 21, 'images/1450167723_0000822555_500.jpg', 12),
(24, 'Love songs', '2003', 15, '', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artists`
--

DROP TABLE IF EXISTS `artists`;
CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `artists`
--

INSERT INTO `artists` (`id`, `name`) VALUES
(1, 'Muse'),
(2, 'Hardwell'),
(3, 'Limp Bizkit'),
(4, 'Dream Theater'),
(5, 'Robbie Williams'),
(6, 'Joe Satriani'),
(7, 'Angels & Airwaves'),
(8, 'Kygo'),
(9, '30 Seconds To Mars'),
(10, 'Bob Marley & The Wailers'),
(11, 'Harrie Jekkers'),
(12, 'Piet Veerman'),
(13, 'Michael Jackson');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Rock'),
(2, 'Pop'),
(3, 'Reggae'),
(4, 'Trance'),
(5, 'House'),
(6, 'Singer-Songwriter'),
(7, 'Jazz'),
(8, 'Hardstyle'),
(9, 'Nederpop'),
(10, 'Soul');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `genres_by_albums`
--

DROP TABLE IF EXISTS `genres_by_albums`;
CREATE TABLE `genres_by_albums` (
  `genre_id` int(11) NOT NULL,
  `album_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `genres_by_albums`
--

INSERT INTO `genres_by_albums` (`genre_id`, `album_id`) VALUES
(1, 1),
(1, 2),
(1, 5),
(1, 7),
(1, 8),
(1, 10),
(2, 4),
(3, 11),
(5, 3),
(6, 9),
(9, 6),
(10, 24);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexen voor tabel `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `genres_by_albums`
--
ALTER TABLE `genres_by_albums`
  ADD PRIMARY KEY (`genre_id`,`album_id`),
  ADD KEY `album_id` (`album_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT voor een tabel `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT voor een tabel `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `genres_by_albums`
--
ALTER TABLE `genres_by_albums`
  ADD CONSTRAINT `genres_by_albums_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `genres_by_albums_ibfk_2` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
