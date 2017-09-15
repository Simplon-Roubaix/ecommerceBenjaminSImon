-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 15 Septembre 2017 à 15:08
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecommerceBS`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `img_id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `descriptiondetail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id_article`, `img_id`, `titre`, `description`, `descriptiondetail`) VALUES
(1, 1, 'Omnislash [ PC Gamer ]', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet lacus ornare, mollis nunc eu, malesuada est. Phasellus at leo id eros gravida commodo. Phasellus eget condimentum metus, vitae pretium nulla. Cras iaculis, nibh nec auctor laoreet, turpis sapien varius neque, ac fringilla quam sem vel ex. Sed tempus eleifend urna, at malesuada velit faucibus sed. Nulla tempus bibendum leo, eu porttitor libero commodo ac. In sapien massa, convallis eu lectus sit amet, feugiat tempus sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur mattis id dolor vel ornare. Etiam blandit tortor eget mattis tincidunt. Maecenas egestas ligula massa, ut ullamcorper mi vehicula vitae'),
(2, 2, 'Trident 3 7RB-074EU', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet lacus ornare, mollis nunc eu, malesuada est. Phasellus at leo id eros gravida commodo. Phasellus eget condimentum metus, vitae pretium nulla. Cras iaculis, nibh nec auctor laoreet, turpis sapien varius neque, ac fringilla quam sem vel ex. Sed tempus eleifend urna, at malesuada velit faucibus sed. Nulla tempus bibendum leo, eu porttitor libero commodo ac. In sapien massa, convallis eu lectus sit amet, feugiat tempus sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur mattis id dolor vel ornare. Etiam blandit tortor eget mattis tincidunt. Maecenas egestas ligula massa, ut ullamcorper mi vehicula vitae'),
(3, 3, 'Level One IX', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet lacus ornare, mollis nunc eu, malesuada est. Phasellus at leo id eros gravida commodo. Phasellus eget condimentum metus, vitae pretium nulla. Cras iaculis, nibh nec auctor laoreet, turpis sapien varius neque, ac fringilla quam sem vel ex. Sed tempus eleifend urna, at malesuada velit faucibus sed. Nulla tempus bibendum leo, eu porttitor libero commodo ac. In sapien massa, convallis eu lectus sit amet, feugiat tempus sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur mattis id dolor vel ornare. Etiam blandit tortor eget mattis tincidunt. Maecenas egestas ligula massa, ut ullamcorper mi vehicula vitae'),
(4, 4, 'Phantom [ PC Gamer ]', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet lacus ornare, mollis nunc eu, malesuada est. Phasellus at leo id eros gravida commodo. Phasellus eget condimentum metus, vitae pretium nulla. Cras iaculis, nibh nec auctor laoreet, turpis sapien varius neque, ac fringilla quam sem vel ex. Sed tempus eleifend urna, at malesuada velit faucibus sed. Nulla tempus bibendum leo, eu porttitor libero commodo ac. In sapien massa, convallis eu lectus sit amet, feugiat tempus sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur mattis id dolor vel ornare. Etiam blandit tortor eget mattis tincidunt. Maecenas egestas ligula massa, ut ullamcorper mi vehicula vitae'),
(5, 5, 'Revolt [ PC Gamer ] ', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet lacus ornare, mollis nunc eu, malesuada est. Phasellus at leo id eros gravida commodo. Phasellus eget condimentum metus, vitae pretium nulla. Cras iaculis, nibh nec auctor laoreet, turpis sapien varius neque, ac fringilla quam sem vel ex. Sed tempus eleifend urna, at malesuada velit faucibus sed. Nulla tempus bibendum leo, eu porttitor libero commodo ac. In sapien massa, convallis eu lectus sit amet, feugiat tempus sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur mattis id dolor vel ornare. Etiam blandit tortor eget mattis tincidunt. Maecenas egestas ligula massa, ut ullamcorper mi vehicula vitae'),
(6, 6, 'Banshee', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet lacus ornare, mollis nunc eu, malesuada est. Phasellus at leo id eros gravida commodo. Phasellus eget condimentum metus, vitae pretium nulla. Cras iaculis, nibh nec auctor laoreet, turpis sapien varius neque, ac fringilla quam sem vel ex. Sed tempus eleifend urna, at malesuada velit faucibus sed. Nulla tempus bibendum leo, eu porttitor libero commodo ac. In sapien massa, convallis eu lectus sit amet, feugiat tempus sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur mattis id dolor vel ornare. Etiam blandit tortor eget mattis tincidunt. Maecenas egestas ligula massa, ut ullamcorper mi vehicula vitae');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id_image` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `poids` int(11) NOT NULL,
  `alt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id_image`, `nom`, `type`, `poids`, `alt`) VALUES
(1, '6.jpg', 'jpg', 14368, 'PC gamer'),
(2, '5.jpg', 'jpg', 13835, 'PC gamer'),
(3, '4.jpg', 'jpg', 21548, 'PC gamer'),
(4, '3.jpg', 'jpg', 16602, 'PC gamer'),
(5, '2.jpg', 'jpg', 10631, 'PC gamer'),
(6, '1.png', 'png', 72247, 'PC gamer');

-- --------------------------------------------------------

--
-- Structure de la table `info`
--

CREATE TABLE `info` (
  `titre` varchar(255) NOT NULL,
  `site_description` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `info`
--

INSERT INTO `info` (`titre`, `site_description`, `copyright`, `year`) VALUES
('Bienvenue sur notre site E-Commerce', 'Site de vente pc gamer', '©Benjamin & Simon', 2017);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`pseudo`, `mdp`, `nom`, `prenom`) VALUES
('admin1', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'GROOT', 'Ben'),
('admin2', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'KLAUS', 'Simon');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `img_id` (`img_id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`pseudo`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
