-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 05 Juillet 2015 à 01:58
-- Version du serveur :  5.6.24
-- Version de PHP :  5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `caftani_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `last_name` varchar(70) DEFAULT NULL,
  `first_name` varchar(70) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `description` text,
  `price` double DEFAULT NULL,
  `views` int(30) NOT NULL,
  `status` int(11) DEFAULT '1',
  `Store_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Sub_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `article_color`
--

CREATE TABLE IF NOT EXISTS `article_color` (
  `id_Article_Color` int(11) NOT NULL,
  `Article_id` int(11) NOT NULL,
  `Color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `article_premium`
--

CREATE TABLE IF NOT EXISTS `article_premium` (
  `id_Article_Premium` int(11) NOT NULL,
  `date_debut` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL,
  `Article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `article_tissu`
--

CREATE TABLE IF NOT EXISTS `article_tissu` (
  `id_Article_Tissu` int(11) NOT NULL,
  `Tissu_id` int(11) NOT NULL,
  `Article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id_Category` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id_city` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `Country_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `city`
--

INSERT INTO `city` (`id_city`, `name`, `Country_id`) VALUES
(1, 'Casablanca', 1),
(2, 'rabat', 1);

-- --------------------------------------------------------

--
-- Structure de la table `color`
--

CREATE TABLE IF NOT EXISTS `color` (
  `id_Color` int(11) NOT NULL,
  `hex` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `command`
--

CREATE TABLE IF NOT EXISTS `command` (
  `id_Command` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `Size_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id_Country` int(11) NOT NULL,
  `name` varchar(70) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `country`
--

INSERT INTO `country` (`id_Country`, `name`) VALUES
(1, 'Maroc');

-- --------------------------------------------------------

--
-- Structure de la table `favori`
--

CREATE TABLE IF NOT EXISTS `favori` (
  `id_favori` int(11) NOT NULL,
  `Article_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `object`
--

CREATE TABLE IF NOT EXISTS `object` (
  `id_object` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `Article_id` int(11) NOT NULL,
  `Profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pack`
--

CREATE TABLE IF NOT EXISTS `pack` (
  `id_pack` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `nbr_products` int(11) DEFAULT NULL,
  `update` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pack`
--

INSERT INTO `pack` (`id_pack`, `name`, `nbr_products`, `update`) VALUES
(1, 'start', 5, 0),
(2, 'pack 2', 10, 1),
(3, 'pack 3', 15, 1),
(4, 'pack 4', 20, 1);

-- --------------------------------------------------------

--
-- Structure de la table `pack_store`
--

CREATE TABLE IF NOT EXISTS `pack_store` (
  `id_pack_store` int(11) NOT NULL,
  `nbr_product` int(11) DEFAULT NULL,
  `update_action` tinyint(1) DEFAULT NULL,
  `Store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pack_store`
--

INSERT INTO `pack_store` (`id_pack_store`, `nbr_product`, `update_action`, `Store_id`) VALUES
(0, 5, 0, 2),
(0, 5, 0, 3),
(0, 5, 0, 4),
(0, 5, 0, 5);

-- --------------------------------------------------------

--
-- Structure de la table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id_profile` int(11) NOT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `adresse` longtext,
  `telephone` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `adresse_ip` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `profile`
--

INSERT INTO `profile` (`id_profile`, `last_name`, `first_name`, `adresse`, `telephone`, `gender`, `adresse_ip`, `type`, `user_id`, `city_id`) VALUES
(4, 'maagoul', 'amine', NULL, '06 5254 78568', NULL, NULL, NULL, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `size`
--

CREATE TABLE IF NOT EXISTS `size` (
  `id_size` int(11) NOT NULL,
  `size` varchar(70) DEFAULT NULL,
  `chest_size` varchar(70) DEFAULT NULL,
  `waist_size` varchar(70) DEFAULT NULL,
  `hip_size` varchar(70) DEFAULT NULL,
  `stature_without_shoese` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `social_media`
--

CREATE TABLE IF NOT EXISTS `social_media` (
  `id_Social_Media` int(11) NOT NULL,
  `site` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `Store_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `id` int(11) NOT NULL,
  `storeid` varchar(50) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `emailpro` varchar(60) DEFAULT NULL,
  `telephonepro` varchar(20) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Pack_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `store`
--

INSERT INTO `store` (`id`, `storeid`, `name`, `description`, `date`, `emailpro`, `telephonepro`, `User_id`, `Pack_id`) VALUES
(1, '', 'amine store', 'amine store amine store amine store amine sto', '2015-07-05 01:33:00', 'amine@amine.pro', '+212 56214 586', 1, 1),
(2, 'amine.store2', 'amine store', 'amine store amine store amine store amine sto', '2015-07-05 01:36:00', 'amine@amine.pro', '+212 56214 586', 1, 1),
(3, 'amine.store2', 'amine store', 'amine store amine store amine store amine sto', '2015-07-05 01:37:00', 'amine@amine.pro', '+212 56214 586', 1, 1),
(4, 'amine.store23', 'amine store', 'amine store amine store amine store amine sto', '2015-07-05 01:45:00', 'amine@amine.pro', '+212 56214 586', 1, 1),
(5, 'aaaaaa', 'aaaaaa', 'ssssssssssssss', '2015-07-05 01:46:00', 'aaa@wwww.fr', '123456', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `id_Sub_category` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `Category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tissu`
--

CREATE TABLE IF NOT EXISTS `tissu` (
  `id_Tissu` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` longtext,
  `object_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tissu`
--

INSERT INTO `tissu` (`id_Tissu`, `name`, `description`, `object_id`) VALUES
(3, 'aaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(70) DEFAULT NULL,
  `password` varchar(70) DEFAULT NULL,
  `adresse_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `adresse_email`) VALUES
(1, 'amine', '2fb1ff7b8f58336a0e22cfca59a10e6e1ebaa978', 'amine@magoplus.com');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`,`Store_id`,`User_id`,`Sub_category_id`), ADD KEY `fk_Article_Store1_idx` (`Store_id`), ADD KEY `fk_Article_User1_idx` (`User_id`), ADD KEY `fk_Article_Sub_category1_idx` (`Sub_category_id`);

--
-- Index pour la table `article_color`
--
ALTER TABLE `article_color`
  ADD PRIMARY KEY (`id_Article_Color`,`Article_id`,`Color_id`), ADD KEY `fk_Article_Color_Article1_idx` (`Article_id`), ADD KEY `fk_Article_Color_Color1_idx` (`Color_id`);

--
-- Index pour la table `article_premium`
--
ALTER TABLE `article_premium`
  ADD PRIMARY KEY (`id_Article_Premium`,`Article_id`), ADD KEY `fk_Article_Premium_Article1_idx` (`Article_id`);

--
-- Index pour la table `article_tissu`
--
ALTER TABLE `article_tissu`
  ADD PRIMARY KEY (`id_Article_Tissu`,`Tissu_id`,`Article_id`), ADD KEY `fk_Article_Tissu_Tissu1_idx` (`Tissu_id`), ADD KEY `fk_Article_Tissu_Article1_idx` (`Article_id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_Category`);

--
-- Index pour la table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id_city`,`Country_id`), ADD KEY `fk_City_Country1_idx` (`Country_id`);

--
-- Index pour la table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id_Color`);

--
-- Index pour la table `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`id_Command`,`User_id`,`Article_id`), ADD KEY `fk_Command_Size1_idx` (`Size_id`), ADD KEY `fk_Command_User1_idx` (`User_id`), ADD KEY `fk_Command_Article1_idx` (`Article_id`);

--
-- Index pour la table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id_Country`);

--
-- Index pour la table `favori`
--
ALTER TABLE `favori`
  ADD PRIMARY KEY (`id_favori`,`Article_id`,`User_id`), ADD KEY `fk_Favori_Article1_idx` (`Article_id`), ADD KEY `fk_Favori_User1_idx` (`User_id`);

--
-- Index pour la table `object`
--
ALTER TABLE `object`
  ADD PRIMARY KEY (`id_object`), ADD KEY `fk_object_Article1_idx` (`Article_id`), ADD KEY `fk_object_Profile1_idx` (`Profile_id`);

--
-- Index pour la table `pack`
--
ALTER TABLE `pack`
  ADD PRIMARY KEY (`id_pack`);

--
-- Index pour la table `pack_store`
--
ALTER TABLE `pack_store`
  ADD PRIMARY KEY (`id_pack_store`,`Store_id`), ADD KEY `fk_pack_store_Store1_idx` (`Store_id`);

--
-- Index pour la table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`,`user_id`), ADD KEY `fk_Profile_User_idx` (`user_id`), ADD KEY `fk_Profile_City1_idx` (`city_id`);

--
-- Index pour la table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id_size`);

--
-- Index pour la table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id_Social_Media`,`Store_id`), ADD KEY `fk_Social_Media_Store1_idx` (`Store_id`);

--
-- Index pour la table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`,`storeid`,`User_id`,`Pack_id`), ADD KEY `fk_Store_User1_idx` (`User_id`), ADD KEY `fk_Store_Pack1_idx` (`Pack_id`);

--
-- Index pour la table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id_Sub_category`,`Category`), ADD KEY `fk_Sub_category_Category1_idx` (`Category`);

--
-- Index pour la table `tissu`
--
ALTER TABLE `tissu`
  ADD PRIMARY KEY (`id_Tissu`), ADD KEY `fk_Tissu_object1_idx` (`object_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `article_color`
--
ALTER TABLE `article_color`
  MODIFY `id_Article_Color` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `article_premium`
--
ALTER TABLE `article_premium`
  MODIFY `id_Article_Premium` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `article_tissu`
--
ALTER TABLE `article_tissu`
  MODIFY `id_Article_Tissu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id_Category` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `city`
--
ALTER TABLE `city`
  MODIFY `id_city` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `color`
--
ALTER TABLE `color`
  MODIFY `id_Color` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `command`
--
ALTER TABLE `command`
  MODIFY `id_Command` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `country`
--
ALTER TABLE `country`
  MODIFY `id_Country` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `favori`
--
ALTER TABLE `favori`
  MODIFY `id_favori` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `object`
--
ALTER TABLE `object`
  MODIFY `id_object` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pack`
--
ALTER TABLE `pack`
  MODIFY `id_pack` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `size`
--
ALTER TABLE `size`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id_Social_Media` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id_Sub_category` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tissu`
--
ALTER TABLE `tissu`
  MODIFY `id_Tissu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
ADD CONSTRAINT `fk_Article_Store1` FOREIGN KEY (`Store_id`) REFERENCES `store` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Article_Sub_category1` FOREIGN KEY (`Sub_category_id`) REFERENCES `sub_category` (`id_Sub_category`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Article_User1` FOREIGN KEY (`User_id`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `article_color`
--
ALTER TABLE `article_color`
ADD CONSTRAINT `fk_Article_Color_Article1` FOREIGN KEY (`Article_id`) REFERENCES `article` (`id_article`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Article_Color_Color1` FOREIGN KEY (`Color_id`) REFERENCES `color` (`id_Color`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `article_premium`
--
ALTER TABLE `article_premium`
ADD CONSTRAINT `fk_Article_Premium_Article1` FOREIGN KEY (`Article_id`) REFERENCES `article` (`id_article`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `article_tissu`
--
ALTER TABLE `article_tissu`
ADD CONSTRAINT `fk_Article_Tissu_Article1` FOREIGN KEY (`Article_id`) REFERENCES `article` (`id_article`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Article_Tissu_Tissu1` FOREIGN KEY (`Tissu_id`) REFERENCES `tissu` (`id_Tissu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `city`
--
ALTER TABLE `city`
ADD CONSTRAINT `fk_City_Country1` FOREIGN KEY (`Country_id`) REFERENCES `country` (`id_Country`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `command`
--
ALTER TABLE `command`
ADD CONSTRAINT `fk_Command_Article1` FOREIGN KEY (`Article_id`) REFERENCES `article` (`id_article`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Command_Size1` FOREIGN KEY (`Size_id`) REFERENCES `size` (`id_size`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Command_User1` FOREIGN KEY (`User_id`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `favori`
--
ALTER TABLE `favori`
ADD CONSTRAINT `fk_Favori_Article1` FOREIGN KEY (`Article_id`) REFERENCES `article` (`id_article`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Favori_User1` FOREIGN KEY (`User_id`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `object`
--
ALTER TABLE `object`
ADD CONSTRAINT `fk_object_Article1` FOREIGN KEY (`Article_id`) REFERENCES `article` (`id_article`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_object_Profile1` FOREIGN KEY (`Profile_id`) REFERENCES `profile` (`id_profile`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `pack_store`
--
ALTER TABLE `pack_store`
ADD CONSTRAINT `fk_pack_store_Store1` FOREIGN KEY (`Store_id`) REFERENCES `store` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `social_media`
--
ALTER TABLE `social_media`
ADD CONSTRAINT `fk_Social_Media_Store1` FOREIGN KEY (`Store_id`) REFERENCES `store` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `store`
--
ALTER TABLE `store`
ADD CONSTRAINT `fk_Store_Pack1` FOREIGN KEY (`Pack_id`) REFERENCES `pack` (`id_pack`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Store_User1` FOREIGN KEY (`User_id`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sub_category`
--
ALTER TABLE `sub_category`
ADD CONSTRAINT `fk_Sub_category_Category1` FOREIGN KEY (`Category`) REFERENCES `category` (`id_Category`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
