-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 05, 2021 at 10:54 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database alcatraz`
--

-- --------------------------------------------------------

--
-- Table structure for table `objets`
--

CREATE TABLE `objets` (
  `id` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Lien_Image` text NOT NULL,
  `coord_x` double NOT NULL,
  `coord_y` double NOT NULL,
  `Nb_scroll` int(11) NOT NULL,
  `Temps_police` double NOT NULL,
  `ID_proprio` int(11) NOT NULL,
  `Message` text NOT NULL,
  `Visibility` int(11) NOT NULL,
  `size_x` int(11) NOT NULL,
  `size_y` int(11) NOT NULL,
  `ID_perso_to_deblock` varchar(11) NOT NULL,
  `Prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `objets`
--

INSERT INTO `objets` (`id`, `Nom`, `Lien_Image`, `coord_x`, `coord_y`, `Nb_scroll`, `Temps_police`, `ID_proprio`, `Message`, `Visibility`, `size_x`, `size_y`, `ID_perso_to_deblock`, `Prix`) VALUES
(1, 'Cuillere', 'icones/objet/cuillere.png', 37.826856, -122.423202, 1, 0, 1, 'La cuillère vous permet de dézoomer', 1, 15, 42, '02', 0),
(2, 'Gilet de sauvetage', 'icones/objet/gilet.png', 37.828258014251524, -122.42547293679048, 4, 60, 1, 'Le gilet de sauvetage vous permet de dézoomer', 0, 31, 53, '0203', 0),
(3, 'tram', 'icones/objet/tram.png', 37.8009, -122.430548, 2, 30, 3, 'Le tram vous permet de dézoomer ', 0, 140, 102, '0405', 4),
(4, 'Voiture', 'icones/objet/voiture.png', 37.812, -122.37, 2, 90, 2, 'La voiture vous permet de dézoomer', 0, 110, 80, '0405', 20000),
(5, 'bateau', 'icones/objet/bateau.png', 37.76750338767106, -122.27983810645662, 1, 120, 4, 'Le bateau vous permet de dézoomer', 0, 180, 107, '07', 35000),
(6, 'limousine', 'icones/objet/limousine.png', 37.736343, -122.446747, 2, 60, 5, 'La limousine vous permet de dézoomer', 0, 122, 90, '06', 5000),
(7, 'Avion', 'icones/objet/avion.png', 37.55043, -122.698059, 3, 75, 6, 'L\'avion vous permet de dézoomer', 0, 252, 100, '08', 8000),
(8, 'Jet prive', 'icones/objet/jet.png', 37.68782, -122.132263, 3, 75, 7, 'Le jet privé vous permet de dézoomer', 0, 180, 174, '08', 8000),
(9, 'tresor', 'icones/objet/argent.png', 34.03160294542114, -117.79378391843584, -3, 75, 8, 'Si vous me cliquez dessus vous gagnez votre butin', 0, 103, 86, '0910', 0),
(10, 'Contrat', 'icones/objet/contrat.png', 33.96963, -117.375349, 0, 30, 9, 'Si vous me cliquez dessus vous serez protégé par votre avocat', 0, 95, 92, '', 10000),
(11, 'Taxi', 'icones/objet/taxi.png', 34.075057, -118.157122, 0, 30, 10, 'Vous pouvez atteindre l\'aéroport de LA en 30s de moins que la police!', 0, 93, 67, '11', 420),
(12, 'Avion de ligne', 'icones/objet/avion2.png', 33.709918, -118.817139, 2, 60, 11, 'Vous pouvez gagner 60 secondes sur la police et dézoomer', 0, 450, 150, '12', 15000),
(13, 'Banque', 'icones/objet/banque.png', 46.329521, 6.030174, -7, 0, 12, 'Déposer l\'argent à la banque ', 0, 112, 89, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `personnages`
--

CREATE TABLE `personnages` (
  `id` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `Dette` int(11) NOT NULL,
  `Lien_Image` text NOT NULL,
  `coord_x` double NOT NULL,
  `coord_y` double NOT NULL,
  `Objet` text NOT NULL,
  `id_objet` varchar(11) NOT NULL,
  `Visibility` int(11) NOT NULL,
  `size_x` int(11) NOT NULL,
  `size_y` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personnages`
--

INSERT INTO `personnages` (`id`, `Nom`, `Message`, `Dette`, `Lien_Image`, `coord_x`, `coord_y`, `Objet`, `id_objet`, `Visibility`, `size_x`, `size_y`) VALUES
(1, 'Co-cellulaire', 'Prend ma cuillère elle te permettra de t\'évader d\'ici!', 0, 'icones/Personnage/prisonnier.png', 37.82666056138145, -122.42284023424432, 'Cuillere', '0102', 1, 52, 83),
(2, 'Lisa', 'Je peux te laisser ma voiture pour ', 20000, 'icones/Personnage/Lisa.png', 37.82276, -122.366409, 'Voiture', '04', 0, 30, 84),
(3, 'Chauffeur de tram', 'Le ticket est à ', 4, 'icones/Personnage/tram.png', 37.810635709406064, -122.42450023057795, 'Tram', '03', 1, 21, 84),
(4, 'Marin', 'Je viens d\'acheter ce bateau 25 000 je te le fais à ', 35000, 'icones/Personnage/pecheur.png', 37.77180110288829, -122.29226518159079, 'bateau', '05', 0, 42, 87),
(5, 'Chauffeur limo', 'Pour aller à l\'aéroport de San Francisco c\'est ', 5000, 'icones/Personnage/chauffeur.png', 37.753380564807635, -122.39168178266421, 'limousine', '06', 0, 28, 93),
(6, 'Vendeur ticket avion ', 'Le billet d\'avion est à ', 8000, 'icones/Personnage/hotesse.png', 37.63689628591173, -122.39810946256898, 'avion', '07', 0, 37, 95),
(7, 'Pilote d\'avion', 'Le billet d\'avion est à ', 8000, 'icones/Personnage/pilote.png', 37.7369040973099, -122.21947712426739, 'jet', '08', 0, 28, 92),
(8, 'Associé', 'Voici ta part du butin, bon boulot ! Si tu veux t\'en sortir il faut récupérer le trésor et rembourser tes dettes! Une fois que tu as ton argent va voir du coté de riverside à l\'Est de LA, tu trouvera tout ce qu\'il te faut pour que les flics ne tombent pas dessus.', 0, 'icones/Personnage/collegue.png', 34.01562670140391, -118.48772683025263, 'argent', '09', 0, 49, 86),
(9, 'Avocat', 'Si vous voulez être tranquille je peux devenir votre avocat pour un certain prix et vous fournir le meilleur contrat de protection. Preparez vous à écrire un chèque de ', 10000, 'icones/Personnage/avocat.png', 33.948246, -117.464876, 'Contrat', '10', 0, 46, 107),
(10, 'Chauffeur de Taxi', 'Pour aller à l\'aéroport de Los Angeles c\'est ', 420, 'icones/Personnage/chauffeur_taxi.png', 34.070102, -118.280772, 'Taxi', '11', 0, 55, 104),
(11, 'Stewart', 'Le vol pour Genève est dans 15 secondes au prix de ', 15000, 'icones/Personnage/stewart.png', 33.9487, -118.374102, 'Avion de ligne', '12', 0, 45, 96),
(12, 'Douanier', 'Contrôle d\'identité', 0, 'icones/Personnage/policewoman.png', 46.21561, 6.115319, 'Banque', '13', 0, 33, 101);

-- --------------------------------------------------------

--
-- Table structure for table `toolbox`
--

CREATE TABLE `toolbox` (
  `id` int(11) NOT NULL,
  `Objet` text NOT NULL,
  `Lien_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `score_butin` varchar(50) NOT NULL,
  `score_temps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `username`, `password`, `score_butin`, `score_temps`) VALUES
(21, 'Carlos', 'e10adc3949ba59abbe56e057f20f883e', '$<b>191576</b>', '<b>8</b> min et <b>11</b> sec d\'avance sur la police '),
(22, 'admin3', 'd8578edf8458ce06fbc5bb76a58c5ca4', '$<b>226576</b>', '<b>6</b> min et <b>15</b> sec d\'avance sur la police '),
(23, 'Antono', 'c3eddf7a6f989cef41d02869e1118a3f', '$<b>220576</b>', '<b>7</b> min et <b>37</b> sec d\'avance sur la police ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `objets`
--
ALTER TABLE `objets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personnages`
--
ALTER TABLE `personnages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toolbox`
--
ALTER TABLE `toolbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `objets`
--
ALTER TABLE `objets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personnages`
--
ALTER TABLE `personnages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `toolbox`
--
ALTER TABLE `toolbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
