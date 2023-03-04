-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 04, 2023 at 09:59 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sajt_vesti`
--

-- --------------------------------------------------------

--
-- Table structure for table `vesti`
--

CREATE TABLE `vesti` (
  `id` int NOT NULL,
  `naslov` varchar(255) NOT NULL,
  `tekst` mediumtext NOT NULL,
  `autor` varchar(255) NOT NULL,
  `kreirano` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`id`, `naslov`, `tekst`, `autor`, `kreirano`) VALUES
(38, 'Obradović: Zamor ostavlja veliki trag, hvala Splićanima na fenomenalnoj dobrodošlici', 'Obradović je čestitao košarkašima Splita na odlično odigranoj utakmici. \r\n\r\n\"Čestitam ekipi Splita jer mislim da su igrali izvanrednu utakmicu i da su dobili bilo bi zasluženo. Jedna lopta je odlučila, odigrali smo aut sa strane, na sreću dobro, ubacio je igrač tri poena i zahvaljujući tome smo pobedili\", rekao je Obradović na konferenciji za medije.\r\n\r\nTrener Partizana kaže da je bilo očigledno da crno-beli nisu u utakmici od prvog trenutka, kao i da zamor koji je prisutan zbog igara u Evroligi ostavlja veliki trag.\r\n\r\n\"Sama činjenica da smo u prvom poluvremenu imali samo jednu osvojenu loptu govori o tome kako smo igrali u odbrani i kako nam je zaista trebalo da se probudimo i da u nekim trenucima dođemo na četiri ili šest razlike. Prosto je neverovatno u situaciji kada smo imali šest razlike na kraju da u tri poslednja napada primimo dve trojke i posle toga koš i faul. Košarka je još jednom pokazala kakva igra može da bude\", istakao je Obradović.', 'Preneto: Rts', '2023-03-04 21:56:03'),
(39, 'Naneli utišao krcatu dvoranu na Gripama – Partizan posle drame savladao Split', 'ma Split rezultatom 96:95 u utakmici 20. kola regionalne ABA lige.\r\n\r\n\"Prava prvenstvena\" na Gripama, Partizan nanizao desetu pobedu\r\nRekao je trener košarkaša Partizana Željko Obradović pred put u Hrvatsku da ne očekuje laku utakmicu i ispostavilo se da nije bez razloga pozivao na oprez protiv tima koji nikada u istoriji nije pobedio crno-bele u regionalnoj ABA ligi.\r\n\r\nOzbiljno se namučio Partizan da tako i ostane i da u prepunoj dvorani na Gripama savlada motivisani Split i naniže desetu uzastopnu pobedu u ABA ligi.\r\n\r\nTvrdu, \"pravu prvenstvenu\" utakmicu, tokom koje nijedna od ekipa nije stekla dvocifrenu prednost, rešio je Džejms Naneli pogotkom za tri poena posle kojeg je Splićanima ostalo svega sekund i po da nakon tajm-auta trenera Subotića organizuju poslednji napad, ali Mavra nije bio ni blizu da pogodi iz teške pozicije preko dvojice košarkaša Partizana.', 'Preneto: Rts', '2023-03-04 21:57:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vesti`
--
ALTER TABLE `vesti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vesti`
--
ALTER TABLE `vesti`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
