-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 31 Sty 2018, 10:36
-- Wersja serwera: 10.1.19-MariaDB
-- Wersja PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ksiegarnia_internetowa2`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klient`
--

CREATE TABLE `klient` (
  `Id_klienta` int(11) NOT NULL,
  `Nazwisko` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `Imie` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `Kod_pocztowy` text COLLATE utf8_polish_ci NOT NULL,
  `Miejscowosc` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `Ulica` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `Nr_domu` text COLLATE utf8_polish_ci NOT NULL,
  `PESEL` int(11) NOT NULL,
  `Telefon` int(11) NOT NULL,
  `AdresEmail` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klient`
--

INSERT INTO `klient` (`Id_klienta`, `Nazwisko`, `Imie`, `Kod_pocztowy`, `Miejscowosc`, `Ulica`, `Nr_domu`, `PESEL`, `Telefon`, `AdresEmail`) VALUES
(1, 'Jorek', 'Ewa', '33-100', 'Tarnów', 'Kościuszki', '15/9', 0, 451421512, 'ewa@02.pl'),
(2, 'Kicior', 'Marek', '33-100', 'Tarnów', 'Lwowska', '12', 0, 215121215, 'marek@poczta.pl'),
(3, '', '', '', '', '', '', 0, 0, ''),
(4, '', '', '', '', '', '', 0, 0, ''),
(5, 'Nosalski', 'Egon', '25-124', 'Robaki', 'Kornika', '56', 0, 542121212, 'kornik1@nowy.com'),
(6, 'Żabka', 'Kacper', '78-512', 'Londonek', 'Korce', '325/12', 0, 741741741, 'Korce@dkdal.com');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`Id_klienta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `klient`
--
ALTER TABLE `klient`
  MODIFY `Id_klienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
