-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 18 déc. 2024 à 11:07
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `spotifly_td`
--

-- --------------------------------------------------------

--
-- Structure de la table `album`
--

DROP TABLE IF EXISTS `album`;
CREATE TABLE IF NOT EXISTS `album` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `id_image` bigint NOT NULL,
  `release_date` year NOT NULL,
  `id_artiste` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `album_id_image_foreign` (`id_image`),
  KEY `album_id_artiste_foreign` (`id_artiste`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `album`
--

INSERT INTO `album` (`id`, `title`, `id_image`, `release_date`, `id_artiste`) VALUES
(1, 'Amon_Amarth-Twilight_of_the_Thunder_God', 11, '2008', 1),
(2, 'Bob_Marley-Exodus', 7, '1977', 2),
(3, 'Clara_Yse-Oceano_Nox', 6, '2003', 3),
(4, 'Idles_Tangk', 10, '2024', 4),
(5, 'Renaud-Boucan_Denfer', 5, '2002', 5),
(6, 'Renaud-Mistral_Gagnant', 8, '1985', 5),
(7, 'Renaud-Renaud', 9, '2016', 5);

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

DROP TABLE IF EXISTS `artiste`;
CREATE TABLE IF NOT EXISTS `artiste` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `id_image` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `artiste_id_image_foreign` (`id_image`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `artiste`
--

INSERT INTO `artiste` (`id`, `name`, `id_image`) VALUES
(1, 'Amon_Amarth', 1),
(2, 'Bob_Marley', 2),
(3, 'Clara_Yse', 3),
(4, 'Idles', 12),
(5, 'Renaud', 4);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `id_user` bigint NOT NULL,
  `id_album` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `comment_id_album_foreign` (`id_album`),
  KEY `comment_id_user_foreign` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `img_path` varchar(255) NOT NULL,
  `img_alt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `img_path`, `img_alt`) VALUES
(1, './assets/src/images/artists/Amon_Amarth.jpg', 'Image des quatre membres du groupe Amon Amarth'),
(2, './assets/src/images/artists/Bob_Marley.jpg', 'Image du musicien et chanteur Bob Marley'),
(3, './assets/src/images/artists/Clara_Yse.jpg', 'Image de la musicienne et chanteuse Clara Ysé'),
(4, './assets/src/images/artists/Renaud.jpg', 'Image du chanteur Renaud'),
(5, './assets/src/images/album/couverture-Boucan_Denfer-Renaud.jpg', 'Couverture de l\'album boucan d\'enfer du chanteur Renaud'),
(6, './assets/src/images/album/couverture-Clara_Yse-Oceano_Nox.jpg', 'Couverture de l\'album Oceano nox de la chanteuse Clara Ysé'),
(7, './assets/src/images/album/couverture-Exodus-Bob_Marley.jpeg', 'Couverture de l\'album Exodus du chanteur Bob Marley'),
(8, './assets/src/images/album/couverture-Mistral_Gagnant-Renaud.jpg', 'Couverture de l\'album Mistral Gagnant du chanteur Renaud'),
(9, './assets/src/images/album/couverture-Renaud-Renaud.jpg', 'Couverture de l\'album Renaud du chanteur Renaud'),
(10, './assets/src/images/album/couverture-Tangk-Idles.jpg', 'Couverture de l\'album Tangk du groupe Idles'),
(11, './assets/src/images/album/couverture-Twlight_Of_The_Thunder_God-Amon_Amarth.jpg', 'Couverture de l\'album Twilight og the Thunder God du groupe Amon Amarth'),
(12, './assets/src/images/artists/Idles.jpg', 'Image des cinq membres du groupe IDLES');

-- --------------------------------------------------------

--
-- Structure de la table `music`
--

DROP TABLE IF EXISTS `music`;
CREATE TABLE IF NOT EXISTS `music` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `music_path` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `duration` int NOT NULL,
  `id_artiste` bigint NOT NULL,
  `id_album` bigint NOT NULL,
  `id_categorie` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `music_id_album_foreign` (`id_album`),
  KEY `music_id_artiste_foreign` (`id_artiste`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `music`
--

INSERT INTO `music` (`id`, `music_path`, `title`, `duration`, `id_artiste`, `id_album`, `id_categorie`) VALUES
(1, './assets/src/audio/Amon_Amarth-Guardians_Of_Asgaard-Twlight_Of_The_Thunder_God.mp3', 'Guardian of Asgaard', 273, 1, 1, 0),
(2, './assets/src/audio/Bob_Marley-Exodus-Jamming.mp3', 'Jamming', 211, 2, 2, 0),
(3, './assets/src/audio/Bob_Marley-Exodus-Three_Little_Birds.mp3', 'Three little birds', 181, 2, 2, 0),
(4, './assets/src/audio/Bob_Marley-Exodus-Waiting_In_Vain.mp3', 'Waiting in vain', 256, 2, 2, 0),
(5, './assets/src/audio/Clara_Yse-Oceano_Nox-Douce.mp3', 'Douce', 190, 3, 3, 0),
(6, './assets/src/audio/IDLES-Dancer-Tangk.mp3', 'Dancer', 203, 4, 4, 0),
(7, './assets/src/audio/Renaud-Boucan_Denfer-Manhattan_Kaboul.mp3', 'Manhattan Kaboul', 222, 5, 5, 0),
(8, './assets/src/audio/Renaud-Mistral_Gagnant-Mistral_Gagnant.mp3', 'Mistral Gagnant', 166, 5, 6, 0),
(9, './assets/src/audio/Renaud-Renaud-Toujours_Debout.mp3', 'Toujours debout', 223, 5, 7, 0);

-- --------------------------------------------------------

--
-- Structure de la table `music_categorie`
--

DROP TABLE IF EXISTS `music_categorie`;
CREATE TABLE IF NOT EXISTS `music_categorie` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_music` bigint NOT NULL,
  `id_categorie` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `music_categorie_id_categorie_foreign` (`id_categorie`),
  KEY `music_categorie_id_music_foreign` (`id_music`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `playlist`
--

DROP TABLE IF EXISTS `playlist`;
CREATE TABLE IF NOT EXISTS `playlist` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `id_music` bigint NOT NULL,
  `id_user` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `playlist_id_user_foreign` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `playlist_music`
--

DROP TABLE IF EXISTS `playlist_music`;
CREATE TABLE IF NOT EXISTS `playlist_music` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_playlist` bigint NOT NULL,
  `id_music` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `playlist_music_id_playlist_foreign` (`id_playlist`),
  KEY `playlist_music_id_music_foreign` (`id_music`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(191) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(191) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_username_unique` (`username`),
  UNIQUE KEY `user_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
