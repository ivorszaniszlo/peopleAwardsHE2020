-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Dec 09. 09:58
-- Kiszolgáló verziója: 10.1.36-MariaDB
-- PHP verzió: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `peopleawards2020`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user`
--

CREATE TABLE `contacts` (
  `id` int(8) NOT NULL,
  `name` varchar(128) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `phone` varchar(128) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `gift` varchar(256) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `jumper_size` varchar(128) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `transfer` varchar(128) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `address` varchar(256) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `city` varchar(128) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `zip_code` int(4) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `contacts`
--

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2928;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
