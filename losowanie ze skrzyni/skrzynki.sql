-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Paź 2019, 18:35
-- Wersja serwera: 10.4.8-MariaDB
-- Wersja PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `skrzynki`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `skrzynka1`
--

CREATE TABLE `skrzynka1` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(20) DEFAULT NULL,
  `wartosc` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `skrzynka1`
--

INSERT INTO `skrzynka1` (`id`, `nazwa`, `wartosc`) VALUES
(1, 'klucz1', 1),
(2, 'klucz2', 2),
(3, 'klucz3', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `skrzynka2`
--

CREATE TABLE `skrzynka2` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(20) DEFAULT NULL,
  `wartosc` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `skrzynka2`
--

INSERT INTO `skrzynka2` (`id`, `nazwa`, `wartosc`) VALUES
(1, 'klucz1', 1),
(2, 'klucz2', 2),
(3, 'klucz3', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `skrzynka3`
--

CREATE TABLE `skrzynka3` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(20) DEFAULT NULL,
  `wartosc` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `skrzynka3`
--

INSERT INTO `skrzynka3` (`id`, `nazwa`, `wartosc`) VALUES
(1, 'klucz1', 1),
(2, 'klucz2', 2),
(3, 'klucz3', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `skrzynka4`
--

CREATE TABLE `skrzynka4` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(20) DEFAULT NULL,
  `wartosc` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `skrzynka4`
--

INSERT INTO `skrzynka4` (`id`, `nazwa`, `wartosc`) VALUES
(1, 'klucz1', 1),
(2, 'klucz2', 2),
(3, 'klucz3', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `skrzynka5`
--

CREATE TABLE `skrzynka5` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(20) DEFAULT NULL,
  `wartosc` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `skrzynka5`
--

INSERT INTO `skrzynka5` (`id`, `nazwa`, `wartosc`) VALUES
(1, 'klucz1', 1),
(2, 'klucz2', 2),
(3, 'klucz3', 3);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `skrzynka1`
--
ALTER TABLE `skrzynka1`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `skrzynka2`
--
ALTER TABLE `skrzynka2`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `skrzynka3`
--
ALTER TABLE `skrzynka3`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `skrzynka4`
--
ALTER TABLE `skrzynka4`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `skrzynka5`
--
ALTER TABLE `skrzynka5`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `skrzynka1`
--
ALTER TABLE `skrzynka1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `skrzynka2`
--
ALTER TABLE `skrzynka2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `skrzynka3`
--
ALTER TABLE `skrzynka3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `skrzynka4`
--
ALTER TABLE `skrzynka4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `skrzynka5`
--
ALTER TABLE `skrzynka5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
