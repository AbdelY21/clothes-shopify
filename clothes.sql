-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 15. Aug 2020 um 11:15
-- Server-Version: 10.1.40-MariaDB
-- PHP-Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `clothes`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `clothes`
--

CREATE TABLE `clothes` (
  `clothes_id` int(11) NOT NULL,
  `clothes_bild` text COLLATE latin1_german1_ci NOT NULL,
  `clothes_sex` varchar(30) COLLATE latin1_german1_ci NOT NULL,
  `clothes_marke` varchar(30) COLLATE latin1_german1_ci NOT NULL,
  `clothes_collection` varchar(30) COLLATE latin1_german1_ci DEFAULT NULL,
  `clothes_groesse` varchar(3) COLLATE latin1_german1_ci NOT NULL,
  `clothes_farbe` varchar(30) COLLATE latin1_german1_ci DEFAULT NULL,
  `clothes_preis` decimal (5,2) NOT NULL,
  `clothes_user` varchar(100) COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Daten für Tabelle `clothes`
--

INSERT INTO `clothes` (`clothes_id`, `clothes_bild`, `clothes_sex`, `clothes_marke`, `clothes_collection`, `clothes_groesse`, `clothes_farbe`, `clothes_preis`, `clothes_user`) VALUES
(1, 'Nike_T_men.jpg', 'Men', 'Nike', 'T-Shirts', 'M', 'Weiss', '29.99', 'Max'),
(2, 'Nike_T_women.jpg', 'Women', 'Nike', 'T-Shirts', 'S', 'Weiss', '29.99', ''),
(3, 'Nike_P_men.jpg', 'Men', 'Nike', 'Pullover', 'L', 'Weiss', '59.99', ''),
(4, 'Nike_P_women.jpg', 'women', 'Nike', 'Pullover', 'L', 'Grau', '59.99', ''),
(5, 'Nike_J_men.jpg', 'Men','Nike' , 'Jacke', 'M', 'Schwarz', '129.99', ''),
(6, 'Nike_J_women.jpg', 'Women','Nike', 'Jacke', 'M', 'Schwarz', '129.99', ''),
(7, 'Nike_H_men.jpg', 'Men','Nike', 'Hoodies - Sweatshirts', 'XL', 'Weiss', '119.99', 'Max'),
(8, 'Nike_H_women.jpg', 'Women', 'Nike', 'Hoodies - Sweatshirts', 'S', 'Grau', '119.99', ''),

(9, 'Adidas_T_men.jpg', 'Men', 'Adidas', 'T-Shirts', 'S', 'Schwarz', '24.99', ''),
(10, 'Adidas_T_women.jpg', 'Women', 'Adidas', 'T-Shirts', 'M', 'Schwarz', '24.99', 'Max'),
(11, 'Adidas_P_men.jpg', 'Men', 'Adidas' , 'Pullover', 'L', 'Schwarz', '49.99', ''),
(12, 'Adidas_P_women.jpg', 'Women', 'Adidas' , 'Pullover', 'S', 'Weiss', '49.99', ''),
(13, 'Adidas_J_men.jpg', 'Men', 'Adidas', 'Jacke', 'XL', 'Schwarz', '99.99', ''),
(14, 'Adidas_T_women.jpg', 'Women', 'Adidas', 'Jacke', 'L', 'Schwarz', '99.99', ''),
(15, 'Adidas_H_men.jpg', 'Men', 'Adidas', 'Hoodies - Sweatshirts', 'L', 'Grau', '79.99', ''),
(16, 'Adidas_H_women.jpg', 'Women', 'Adidas', 'Hoodies - Sweatshirts', 'M', 'Schwarz', '79.99', ''),

(17, 'Reebok_T_men.jpg', 'Men', 'Reebok', 'T-Shirts', 'M','Weiss', '21.99', ''),
(18, 'Reebok_T_women.jpg', 'Women', 'Reebok', 'T-Shirts', 'S','Schwarz', '21.99', ''),
(19, 'Reebok_P_men.jpg', 'Men', 'Reebok', 'Pullover',  'XL', 'Weiss', '44.99', ''),
(20, 'Reebok_P_women.jpg', 'Women', 'Reebok' , 'Pullover', 'M', 'Blau', '44.99', ''),
(21, 'Reebok_J_men.jpg', 'Men', 'Reebok', 'Jacke', 'XL','Weiss', '79.99', ''),
(22, 'Reebok_J_women.jpg', 'Women', 'Reebok', 'Jacke', 'M', 'Schwarz', '79.99', ''),
(23, 'Reebok_H_men.jpg', 'Men', 'Reebok' , 'Hoodies - Sweatshirts', 'L', 'Weiss', '79.99', ''),
(24, 'Reebok_H_women.jpg', 'Women','Reebok', 'Hoodies - Sweatshirts', 'S', 'Grau', '79.99', ''),

(25, 'Puma_T_men.jpg', 'Men', 'Puma', 'T-Shirts', 'S', 'Weiss', '20.99', ''),
(26, 'Puma_T_women.jpg', 'Women', 'Puma' , 'T-Shirts', 'M', 'Blau', '21.99', ''),
(27, 'Puma_P_men.jpg', 'Men', 'Puma' , 'Pullover', 'XL', 'Schwarz', '49.99', ''),
(28, 'Puma_P_women.jpg', 'Women', 'Puma' , 'Pullover', 'M', 'Schwarz', '49.99', ''),
(29, 'Puma_J_men.jpg', 'Men', 'Puma' , 'Jacke', 'L', 'Schwarz', '79.99', ''),
(30, 'Puma_J_women.jpg', 'Women','Puma' , 'Jacke', 'M', 'Schwarz', '79.99', ''),
(31, 'Puma_H_men.jpg', 'Men', 'Puma', 'Hoodies - Sweatshirts', 'S' , 'Schwarz', '69.99', ''),
(32, 'Puma_H_women.jpg', 'Women', 'Puma', 'Hoodies - Sweatshirts', 'XL', 'Schwarz', '69.99', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_vn` varchar(30) COLLATE latin1_german1_ci NOT NULL,
  `user_nn` varchar(30) COLLATE latin1_german1_ci NOT NULL,
  `user_str` varchar(30) COLLATE latin1_german1_ci NOT NULL,
  `user_plz` int(10) NOT NULL,
  `use_std` varchar(30) COLLATE latin1_german1_ci NOT NULL,
  `user_bnt` varchar(30) COLLATE latin1_german1_ci NOT NULL,
  `user_email` varchar(50) COLLATE latin1_german1_ci NOT NULL,
  `user_pw` varchar(250) COLLATE latin1_german1_ci DEFAULT NULL,
  `user_img` text COLLATE latin1_german1_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`user_id`, `user_vn`, `user_nn`, `user_str`, `user_plz`, `use_std`, `user_bnt`, `user_email`, `user_pw`, `user_img`) VALUES
(33, 'Max', 'Mustermann', 'Musterstrasse 12', 12345, 'Musterstadt', 'Max', 'max@email.de', '$2y$10$.h32w1OjAOiBT90AF82z3usPtbKYhDcnWPkjI7hQCH.1zq4t2kJ72', 'user_logo.jpg');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`clothes_id`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `clothes`
--
ALTER TABLE `clothes`
  MODIFY `clothes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
