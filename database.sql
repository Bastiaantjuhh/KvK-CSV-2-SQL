-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 26 okt 2021 om 18:11
-- Serverversie: 5.7.32
-- PHP-versie: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `kvktest`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `kvk_data`
--

CREATE TABLE `kvk_data` (
  `id` int(11) NOT NULL,
  `woonplaats` varchar(255) DEFAULT NULL,
  `indicatie_hoofdvestiging` varchar(255) DEFAULT NULL,
  `rechtsvorm` varchar(255) DEFAULT NULL,
  `rechtsvorm_omschrijving` varchar(255) DEFAULT NULL,
  `sbi` varchar(255) DEFAULT NULL,
  `sbi_omschrijving` varchar(255) DEFAULT NULL,
  `sbi_na` varchar(255) DEFAULT NULL,
  `sbi_na_omschrijving` varchar(255) DEFAULT NULL,
  `sbi_na2` varchar(255) DEFAULT NULL,
  `sbi_na2_omschrijving` varchar(255) DEFAULT NULL,
  `import` varchar(255) DEFAULT NULL,
  `export` varchar(255) DEFAULT NULL,
  `datum_oprichting` varchar(255) DEFAULT NULL,
  `datum_akte_oprichting` varchar(255) DEFAULT NULL,
  `datum_inschrijving` varchar(255) DEFAULT NULL,
  `datum_vestiging` varchar(255) DEFAULT NULL,
  `datum_vestiging_huidig` varchar(255) DEFAULT NULL,
  `datum_opheffing` varchar(255) DEFAULT NULL,
  `datum_voortzetting` varchar(255) DEFAULT NULL,
  `indicator_surseance` varchar(255) DEFAULT NULL,
  `boekjaar` varchar(255) DEFAULT NULL,
  `deponering_jaarstuk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `kvk_data`
--
ALTER TABLE `kvk_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `kvk_data`
--
ALTER TABLE `kvk_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
