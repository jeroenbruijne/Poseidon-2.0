-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 27 mrt 2018 om 07:07
-- Serverversie: 5.6.37
-- PHP-versie: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poseidon`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `temperatures`
--

CREATE TABLE IF NOT EXISTS `temperatures` (
  `id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `temperature` decimal(6,1) NOT NULL,
  `name_sensor` varchar(250) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `temperatures`
--

INSERT INTO `temperatures` (`id`, `datetime`, `temperature`, `name_sensor`) VALUES
(1, '2018-01-05 14:52:16', '19.6', 'Tuin'),
(2, '2017-08-16 10:18:14', '21.6', 'Buiten'),
(3, '2018-02-13 16:29:44', '15.3', 'Binnen\r\n');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_age`, `user_mobile`) VALUES
(0, 'Jeroen', 'Jeroen.bruijne@hotmail.com', '49a501f4471ef38aa1cf1cec62754d81', 18, 636340807),
(0, 'Joost', 'Joostvherwaarden@hotmail.com', '31d674be46e1ba6b54388a671c09accb', 19, 684392010),
(0, 'leon', 'leonniesthoven@hotmail.com', '5c443b2003676fa5e8966030ce3a86ea', 20, 323545454),
(0, 'anne', 'annemuilebyrg@hotmail.com', '31d674be46e1ba6b54388a671c09accb', 232, 2147483647),
(0, 'Dab', 'dabber@dab.tk', '2c3810bd4d84af1f345ebdccaa02c7ca', 18, 2147483647);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `temperatures`
--
ALTER TABLE `temperatures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `temperatures`
--
ALTER TABLE `temperatures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
