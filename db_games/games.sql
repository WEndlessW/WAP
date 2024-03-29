-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vytvořeno: Stř 05. dub 2023, 18:51
-- Verze serveru: 5.7.11
-- Verze PHP: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `mydb`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `realese` date NOT NULL,
  `score` enum('1','2','3','4','5','6','7','8','9','10') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `games`
--

INSERT INTO `games` (`id`, `name`, `realese`, `score`) VALUES
(1, 'Sekiro', '2023-03-02', '10'),
(2, 'Endless', '2023-07-07', '9'),
(4, 'lopucha', '2023-04-26', '8');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
