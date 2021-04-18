-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 08:08 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maindatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `username` varchar(10) COLLATE utf8_lithuanian_ci NOT NULL,
  `email` varchar(15) COLLATE utf8_lithuanian_ci NOT NULL,
  `comment` varchar(500) COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`ID`, `username`, `email`, `comment`) VALUES
(10, 'Juozas', 'Some email', 'Taken from: taken from teatras.lt/lt/spektakliai/respublika/ \r\nKOKIE GERI TIE MŪSŲ AKTORIAI!!! Ir teatro, ir kino epizoduose. Bet kodėl tiek nedaug jų talento vertų spektaklių, filmų? Jie kuria čia fantastiškai įtaigius epizodus / etiudus, bet visuma [dramaturginė, režisūrinė] - chaosas. Ok, tarkim, toks sumanymas, bet kodėl tai taip nuobodu? - nerandu tinkamo žodžio apibūdinti šiam vyksmui. Paradoksalus, gal net beprasmiškas tikrovės ir išmonės derinys. Laiko žudymas? Kūrybinių galių žudymas.'),
(11, 'KitasJuoza', 'some@nidosiu.lt', 'Another comment about how much the music was too loud'),
(12, 'One moer', 'just@tas.asd', 'I really liked it, and this comment section works!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
