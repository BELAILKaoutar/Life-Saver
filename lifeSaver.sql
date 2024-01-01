-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 01 jan. 2024 à 01:27
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lifesaver`
--

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `medecin_id` int(11) NOT NULL,
  `CIN` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(10) CHARACTER SET armscii8 NOT NULL,
  `specialite` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`medecin_id`, `CIN`, `name`, `address`, `phone`, `specialite`, `email`) VALUES
(1, 'KK1234', 'medecin1', 'MAROC', '0678902989', 'Cardiologie', 'med1@gmail.com'),
(3, 'HH678', 'medecin2', 'Maroc', '0678987651', 'CHIRURGIE', 'medecin2@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

CREATE TABLE `medicament` (
  `id_med` int(11) NOT NULL,
  `nom` text NOT NULL,
  `dosage` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medicament`
--

INSERT INTO `medicament` (`id_med`, `nom`, `dosage`, `code`) VALUES
(1, 'Amoxicillin', '25mg', '88'),
(2, 'Ibuprofen', '200mg', '91'),
(3, 'Lisinopril', '10mg', '45'),
(4, 'Atorvastatin', '20mg', '23');

-- --------------------------------------------------------

--
-- Structure de la table `ordonnance`
--

CREATE TABLE `ordonnance` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `id_med` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ordonnance`
--

INSERT INTO `ordonnance` (`id`, `patient_id`, `id_med`) VALUES
(1, 2, '1,2\r\n'),
(3, 2, '1,2,3'),
(4, 4, '1,2,3,4'),
(5, 3, '1,2,3,4'),
(6, 2, '1,3,4');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `cin` text NOT NULL,
  `name` text NOT NULL,
  `Dateenter` date NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(10) CHARACTER SET armscii8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`patient_id`, `cin`, `name`, `Dateenter`, `address`, `email`, `phone`) VALUES
(2, 'HH123', 'kaoutar belail', '2023-01-01', 'Maroc', 'Kaoutar@gmail.com', '0678987652'),
(3, 'GGHH610', 'AMINE', '2023-11-30', 'Maroc', 'amine@gmail.com', '0678987651'),
(4, 'HH1234', 'Khaoula', '2023-11-27', 'Maroc', 'khaoula@gmail.com', '0678987651');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `cin` varchar(255) NOT NULL,
  `tél` varchar(10) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `date_naissance` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `username`, `cin`, `tél`, `sexe`, `date_naissance`, `email`, `password`, `created_at`) VALUES
(2, 'kaoutar', 'gghh610', '0000000000', 'femme', '11-12-2003', 'Kaoutar12@gmail.com', '0aa64a28301313559be09a547ade000c', '2023-11-19 15:07:18'),
(7, 'Kaoutar Belail', 'HH1234', '0607705854', 'Femme', '11-12-2003', 'Kaoutar@gmail.com', '0aa64a28301313559be09a547ade000c', '2023-12-31 23:10:37');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`medecin_id`);

--
-- Index pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD PRIMARY KEY (`id_med`);

--
-- Index pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `medecin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `medicament`
--
ALTER TABLE `medicament`
  MODIFY `id_med` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  ADD CONSTRAINT `ordonnance_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
