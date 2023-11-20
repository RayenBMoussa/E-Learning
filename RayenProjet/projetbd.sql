-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 03:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `enseignant`
--

CREATE TABLE `enseignant` (
  `id_ens` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `formation` varchar(30) NOT NULL,
  `Nombre_de_place` int(11) NOT NULL DEFAULT 20
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enseignant`
--

INSERT INTO `enseignant` (`id_ens`, `firstname`, `lastname`, `formation`, `Nombre_de_place`) VALUES
(4, 'Hochlef', 'Neila', 'Artificial Intelligence', 20),
(5, 'Hamouda', 'Ali', 'Marketing Digital', 14);

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `id_etud` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `formation` varchar(30) NOT NULL,
  `nomprof` varchar(30) NOT NULL,
  `prenomprof` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`id_etud`, `nom`, `prenom`, `formation`, `nomprof`, `prenomprof`) VALUES
(1, 'ahmed', 'ferjeni', 'Artificial Intelligence', 'Hochlef', 'Neila'),
(2, 'roua ', 'ben moussa', 'Artificial Intelligence', 'Hochlef', 'Neila'),
(3, 'ale', 'bm', 'Marketing Digital', 'Hamouda', 'Ali'),
(4, 'malek', 'guebsi', 'Marketing Digital', 'Hamouda', 'Ali'),
(5, 'rami', 'rami', 'Marketing Digital', 'Hamouda', 'Ali'),
(6, 'khaled', 'lakhdher', 'Artificial Intelligence', 'Hochlef', 'Neila'),
(7, 'khlifa', 'anas', 'DevOps', 'Ben Moussa', 'Rayen');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `role`) VALUES
(7, 'roua', 'ben moussa', 'roua@gmail.com', 'roua', 'etudiant'),
(8, 'ale', 'bm', 'ale@gmail.com', 'ale', 'etudiant'),
(9, 'Rayen', 'Ben Moussa', 'rayenbenmoussa@gmail.com', 'rayen', 'admin'),
(10, 'hamza', 'ghebriche', 'hamza@gmail.com', 'hamza', 'enseignant'),
(11, 'Abdennour', 'Boukhris', 'abdenour@gmail.com', 'azerty', 'etudiant'),
(12, 'khaled', 'lakhdher', 'khaled@gmail.com', 'khaled', 'etudiant'),
(13, 'khlifa', 'anas', 'anas@gmail.com', 'anas', 'etudiant'),
(14, 'Neila', 'Hochlef', 'neila@gmail.com', 'neila', 'enseignant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id_ens`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id_etud`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `id_ens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id_etud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
