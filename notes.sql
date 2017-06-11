-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Cze 2017, 18:03
-- Wersja serwera: 10.1.21-MariaDB
-- Wersja PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `notes`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `plany`
--

CREATE TABLE `plany` (
  `id_planu` int(8) NOT NULL,
  `id_uzytk` int(8) NOT NULL,
  `nazwa` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `tresc` text COLLATE utf8_polish_ci NOT NULL,
  `data_planu` date NOT NULL,
  `data_utworzenia` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci ROW_FORMAT=COMPACT;

--
-- Zrzut danych tabeli `plany`
--

INSERT INTO `plany` (`id_planu`, `id_uzytk`, `nazwa`, `tresc`, `data_planu`, `data_utworzenia`) VALUES
(1, 1, 'Egzamin z PHP', 'Formularze, obsługa baz, sesje, itd.', '2017-06-19', '2017-05-30 20:10:03'),
(2, 1, 'Fryzjer', 'Godzina 12, Salon na Krakowskiej.', '2017-06-28', '2017-05-30 20:21:35'),
(3, 1, 'Kino', 'Kino z Bartkiem o 20. Pamiętaj, że tym razem on płaci.', '2017-07-01', '2017-05-30 20:22:55'),
(4, 1, 'Tort', 'Upiecz torcik kokosowo-malinowy dla Justynki.', '2017-07-05', '2017-05-30 20:24:10'),
(5, 1, 'Dentysta', 'Godzina 16, tam gdzie zawsze. Przygotuj 2 stówki.', '2017-06-06', '2017-05-30 20:25:58'),
(6, 1, 'Zakupy', 'Galeria Katowicka z Asią o 10.', '2017-06-30', '2017-05-30 20:28:40'),
(7, 2, 'Gokarty', 'Firmowe gokarty :)\r\nW Sosnowcu, eh :(', '2017-08-10', '2017-05-30 20:36:48'),
(8, 2, 'Kolacja', 'Z okazji rocznicy rodziców, kup im prezent!', '2017-06-30', '2017-05-30 20:38:00'),
(9, 2, 'Zakupy', 'Kupić jajka, mleko, cukier.', '2017-06-16', '2017-05-30 20:38:49'),
(10, 2, 'Urlop', 'O 20 pociąg do Kołobrzegu. Zrób kanapki.', '2017-07-12', '2017-05-30 20:39:55'),
(11, 2, 'Weterynarz', 'Zabierz Szoguna na szczepienie!', '2017-07-19', '2017-05-30 20:40:46'),
(12, 3, 'Zakupy', 'Kup mąkę na zakwas na żur.', '2017-07-06', '2017-05-30 20:49:40'),
(13, 3, 'Wesele', 'Wesele w Radomiu. Przygotuj się na dużo Martyniuka.', '2017-08-05', '2017-05-30 20:50:53'),
(14, 3, 'Deadline projekt', 'Ostateczny termin oddania projektu na programowanie!!!', '2017-07-20', '2017-05-30 20:51:50'),
(15, 4, 'Teatr', 'Kogut w rosole, Chorzów, 18. Nie siadaj zbyt blisko.', '2017-07-13', '2017-05-30 21:05:12'),
(16, 4, 'Spotkanie', 'Godzina 20, Fanaberia. Nie pomyl znów Oli z Alicją!!!', '2017-07-13', '2017-05-30 21:09:22'),
(17, 4, 'Elektryk', 'Wymiana instalacji, przyjdzie między 12 a 14.', '2017-07-28', '2017-05-30 21:10:58'),
(18, 5, 'Ortopeda', 'Nastawianie kręgosłupa o 12.', '2017-07-21', '2017-05-30 21:21:26'),
(19, 5, 'Okulista', 'Badanie wzroku o 18.', '2017-07-19', '2017-05-30 21:23:52'),
(20, 5, 'Gra o tron', 'Nowy odcinek!!!', '2017-07-16', '2017-05-30 21:25:28'),
(21, 1, 'Wycieczka', 'Wycieczka do Szczebrzeszyna, tam gdzie brzmi Chrząszcz, że niby tak światowo czy coś.', '2017-08-08', '2017-06-06 20:28:09');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `urodziny`
--

CREATE TABLE `urodziny` (
  `id_urodzin` int(8) NOT NULL,
  `id_uzytk` int(8) NOT NULL,
  `imie_sol` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko_sol` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `data_urodzenia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci ROW_FORMAT=COMPACT;

--
-- Zrzut danych tabeli `urodziny`
--

INSERT INTO `urodziny` (`id_urodzin`, `id_uzytk`, `imie_sol`, `nazwisko_sol`, `data_urodzenia`) VALUES
(1, 1, 'Anna', 'Kowalska', '1992-06-09'),
(2, 1, 'Tomasz', 'Gojny', '1995-10-06'),
(3, 1, 'Patryk', 'Chrobot', '1996-01-19'),
(4, 1, 'Klaudia', 'Czaplińska', '1996-05-17'),
(5, 1, 'Patryk', 'Gałązka', '1996-06-19'),
(6, 1, 'Robert', 'Furgoł', '1995-08-14'),
(7, 1, 'Marek', 'Borecki', '1992-01-15'),
(8, 2, 'Grzegorz', 'Brzęczyszczykiewicz', '1975-03-05'),
(9, 2, 'Marek', 'Widelec', '1985-06-09'),
(10, 2, 'Kacper', 'Muszka', '1984-05-30'),
(11, 2, 'Anita', 'Trąbka', '1990-06-09'),
(12, 2, 'Magdalena', 'Pszczółka', '1983-01-03'),
(13, 3, 'Klementyna', 'Rudawska', '1992-05-12'),
(14, 3, 'Adam', 'Kowol', '1982-02-21'),
(15, 3, 'Paweł', 'Duda', '1976-03-02'),
(16, 4, 'Katarzyna', 'Sokolska', '1977-03-31'),
(17, 4, 'Marek', 'Aureliusz', '1996-03-06'),
(18, 4, 'Antoni', 'Macierzewski', '1973-06-09'),
(19, 5, 'Andrzej', 'Wąs', '1975-03-04'),
(20, 5, 'Martyna', 'Wojciechowska', '1983-02-07'),
(21, 5, 'Wojciech', 'Zegarek', '1994-10-25'),
(22, 5, 'Franek', 'Mistrz', '1994-03-03'),
(23, 1, 'Patryk', 'Kogut', '1993-06-06');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_uzytk` int(11) NOT NULL,
  `login` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `data_rejestracji` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sel` tinyint(1) NOT NULL DEFAULT '1',
  `ins` tinyint(1) NOT NULL DEFAULT '1',
  `upd` tinyint(1) NOT NULL,
  `del` tinyint(1) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci ROW_FORMAT=COMPACT;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_uzytk`, `login`, `haslo`, `data_rejestracji`, `sel`, `ins`, `upd`, `del`, `admin`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2017-05-30 20:07:46', 1, 1, 1, 1, 1),
(2, 'anna', '2bc1ecb410e142bce83bce6f212b41e1781536dc', '2017-05-30 20:35:42', 1, 1, 0, 0, 0),
(3, 'laura', '94745df4bd94de756ea5436584fec066fc7898d5', '2017-05-30 20:46:47', 1, 1, 0, 0, 0),
(4, 'adam', '0e18f44c1fec03ec4083422cb58ba6a09ac4fb2a', '2017-05-30 21:03:37', 1, 1, 0, 0, 0),
(5, 'arek', 'b92f94d179fae96e46b2950d8ced1c17a099c0bd', '2017-05-30 21:20:52', 1, 1, 0, 0, 0),
(6, 'marek', 'e54ec4e8b56ff7382fb135e028860ad99be4caf9', '2017-05-30 21:50:10', 1, 1, 0, 0, 0),
(7, 'ola', '793f970c52ded1276b9264c742f19d1888cbaf73', '2017-05-30 21:50:33', 1, 1, 0, 0, 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `plany`
--
ALTER TABLE `plany`
  ADD PRIMARY KEY (`id_planu`);

--
-- Indexes for table `urodziny`
--
ALTER TABLE `urodziny`
  ADD PRIMARY KEY (`id_urodzin`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_uzytk`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `plany`
--
ALTER TABLE `plany`
  MODIFY `id_planu` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT dla tabeli `urodziny`
--
ALTER TABLE `urodziny`
  MODIFY `id_urodzin` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_uzytk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
