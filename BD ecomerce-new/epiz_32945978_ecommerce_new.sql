-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : sql308.byetcluster.com
-- Généré le :  Dim 06 août 2023 à 07:57
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP :  7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `epiz_32945978_ecommerce_new`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desconte` int(11) DEFAULT NULL,
  `statut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `popularite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `ref`, `desconte`, `statut`, `popularite`, `photo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(6, 'TENIS', 'Quality 100% garanty', NULL, '1', '1', '1667295754.jpg', '2022-11-01 08:44:53', '2022-11-01 08:42:34', '2022-11-01 08:44:53'),
(7, 'TENIS', 'Tenis Women', 15, '1', '1', '1667296882.jpg', '2022-11-01 10:14:18', '2022-11-01 09:01:22', '2022-11-01 10:14:18'),
(8, 'TENIS', 'ADIDAS YEEZY BOOST', 10, '1', '1', '1667301419.webp', NULL, '2022-11-01 10:16:59', '2022-11-01 10:16:59'),
(9, 'Tenis for women', 'ADIDAS YEEZY BOOST', 12, '1', '0', '1667301909.jpg', NULL, '2022-11-01 10:25:09', '2022-11-01 10:25:09'),
(10, 'Winter Wear', '100% Original Cotton', 5, '0', '1', '1667302196.jpg', NULL, '2022-11-01 10:29:56', '2022-11-01 10:29:56'),
(11, 'Women\'s jacket', 'Women\'s jacket', 18, '1', '1', '1667302306.jpg', NULL, '2022-11-01 10:31:46', '2022-11-01 10:31:46'),
(12, 'Boy\'s breeches', 'Boy\'s breeches', 6, '1', '1', '1667302497.jpg', NULL, '2022-11-01 10:34:57', '2022-11-01 10:34:57');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(10) UNSIGNED NOT NULL,
  `cod_commande` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress_commande` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_commande` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `id_user` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dist` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_apto` int(11) NOT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ddd` int(11) NOT NULL,
  `tel` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id`, `cod_commande`, `adress_commande`, `total_commande`, `statut`, `id_user`, `firstname`, `name`, `email`, `cpf`, `country`, `state`, `city`, `dist`, `street`, `n_apto`, `zipcode`, `ddd`, `tel`, `deleted_at`, `created_at`, `updated_at`) VALUES
(98, '1667841481EX3121', 'Antonia Araujo', '1470', '0', 7, 'Alceilena', 'Antonia', 'antonia@gmail.com', '71834413427', 'Brasil', 'SAO PAULO', 'Sao Paulo', 'SP', 'Travessa Raimundo Maciel Pereira, Nossa Senhora de Fátima', 19, '62900000', 11, 99928818, NULL, '2022-11-07 22:18:01', '2022-11-07 22:18:01'),
(99, '1667842950EX1373', NULL, '120', '0', 7, 'Alceilena', 'Antonia', 'antonia@gmail.com', '71834413427', 'Brasil', 'SAO PAULO', 'Sao Paulo', 'SP', 'Travessa Raimundo Maciel Pereira, Nossa Senhora de Fátima', 19, '62900000', 11, 99928818, NULL, '2022-11-07 22:42:30', '2022-11-07 22:42:30'),
(100, '1667851944EX1967', 'Manu', '1425', '0', 17, 'Mahouvi', 'manu', 'manu@gmail.com', '71834413427', 'Brasil', 'Ceará', 'Russas', 'CE', 'Rua travers sa raiumundo  perreira', 524, '62900000', 88, 999928818, NULL, '2022-11-08 01:12:24', '2022-11-08 01:12:24'),
(101, '1667866502EX1990', 'AVENIDA DEPUTADO MARCIO MARINHO', '760', '0', 18, 'AMBROISE', 'ZOUNMENOU', 'ambroisefzounmenou@gmail.com', '71834407451', 'Brésil', 'RIO GRANDE DO NORTE', 'PIRANGI DO NORTE', 'RN', 'AVENIDA DEPUTADO MARCIO MARINHO', 99, '59161250', 84, 998087249, NULL, '2022-11-08 05:15:02', '2022-11-08 05:15:02'),
(102, '1667867423EX3397', NULL, '1300', '0', 18, 'AMBROISE', 'ZOUNMENOU', 'ambroisefzounmenou@gmail.com', '71834407451', 'Brésil', 'RIO GRANDE DO NORTE', 'PIRANGI DO NORTE', 'RN', 'AVENIDA DEPUTADO MARCIO MARINHO', 99, '59161250', 84, 998087249, NULL, '2022-11-08 05:30:23', '2022-11-08 05:30:23'),
(103, '1668109130EX9361', NULL, '1140', '0', 7, 'Alceilena', 'Antonia', 'antonia@gmail.com', '71834413427', 'Brasil', 'SAO PAULO', 'Sao Paulo', 'SP', 'Travessa Raimundo Maciel Pereira, Nossa Senhora de Fátima', 19, '62900000', 11, 99928818, NULL, '2022-11-11 00:38:50', '2022-11-11 00:38:50'),
(104, '1668270535EX7691', NULL, '520', '0', 7, 'Alceilena', 'Antonia', 'antonia@gmail.com', '71834413427', 'Brasil', 'SAO PAULO', 'Sao Paulo', 'SP', 'Travessa Raimundo Maciel Pereira, Nossa Senhora de Fátima', 19, '62900000', 11, 99928818, NULL, '2022-11-12 21:28:55', '2022-11-12 21:28:55'),
(105, '1668271633EX2269', NULL, '640', '0', 7, 'Alceilena', 'Antonia', 'antonia@gmail.com', '71834413427', 'Brasil', 'SAO PAULO', 'Sao Paulo', 'SP', 'Travessa Raimundo Maciel Pereira, Nossa Senhora de Fátima', 19, '62900000', 11, 99928818, NULL, '2022-11-12 21:47:13', '2022-11-12 21:47:13'),
(106, '1668293610EX3295', NULL, '1300', '0', 17, 'Mahouvi', 'manu', 'manu@gmail.com', '71834413427', 'Brasil', 'Ceará', 'Russas', 'CE', 'Rua travers sa raiumundo  perreira', 524, '62900000', 88, 999928818, NULL, '2022-11-13 03:53:30', '2022-11-13 03:53:30'),
(107, '1668298076EX6636', NULL, '250', '0', 17, 'Mahouvi', 'manu', 'manu@gmail.com', '71834413427', 'Brasil', 'Ceará', 'Russas', 'CE', 'Rua travers sa raiumundo  perreira', 524, '62900000', 88, 999928818, NULL, '2022-11-13 05:07:56', '2022-11-13 05:07:56'),
(108, '1668421765EX5010', NULL, '870', '0', 20, 'araujo', 'nego', 'nego@gmail.com', '71834413724', 'Brasil', 'ceara', 'fortaleza', 'CE', 'rua arlindo braga negrelli', 454, '62900000', 85, 999928818, NULL, '2022-11-14 15:29:25', '2022-11-14 15:29:25'),
(109, '1669887786EX2231', NULL, '900', '0', 7, 'Alceilena', 'Antonia', 'antonia@gmail.com', '71834413427', 'Brasil', 'SAO PAULO', 'Sao Paulo', 'SP', 'Travessa Raimundo Maciel Pereira, Nossa Senhora de Fátima', 19, '62900000', 11, 99928818, NULL, '2022-12-01 14:43:06', '2022-12-01 14:43:06'),
(110, '1673277858EX6673', NULL, '690', '0', 7, 'Alceilena', 'Antonia', 'antonia@gmail.com', '71834413427', 'Brasil', 'SAO PAULO', 'Sao Paulo', 'SP', 'Travessa Raimundo Maciel Pereira, Nossa Senhora de Fátima', 19, '62900000', 11, 99928818, NULL, '2023-01-09 20:24:18', '2023-01-09 20:24:18'),
(111, '1673302130EX9409', NULL, '1580', '0', 7, 'Alceilena', 'Antonia', 'antonia@gmail.com', '71834413427', 'Brasil', 'SAO PAULO', 'Sao Paulo', 'SP', 'Travessa Raimundo Maciel Pereira, Nossa Senhora de Fátima', 19, '62900000', 11, 99928818, NULL, '2023-01-10 03:08:51', '2023-01-10 03:08:51'),
(112, '1673302619EX4617', NULL, '340', '0', 7, 'Alceilena', 'Antonia', 'antonia@gmail.com', '71834413427', 'Brasil', 'SAO PAULO', 'Sao Paulo', 'SP', 'Travessa Raimundo Maciel Pereira, Nossa Senhora de Fátima', 19, '62900000', 11, 99928818, NULL, '2023-01-10 03:16:59', '2023-01-10 03:16:59'),
(113, '1674584636EX6639', NULL, '930', '0', 7, 'Alceilena', 'Antonia', 'antonia@gmail.com', '71834413427', 'Brasil', 'SAO PAULO', 'Sao Paulo', 'SP', 'Travessa Raimundo Maciel Pereira, Nossa Senhora de Fátima', 19, '62900000', 11, 99928818, NULL, '2023-01-24 23:23:56', '2023-01-24 23:23:56'),
(114, '1677186066EX6497', NULL, '640', '0', 7, 'Alceilena', 'Antonia', 'antonia@gmail.com', '71834413427', 'Brasil', 'SAO PAULO', 'Sao Paulo', 'SP', 'Travessa Raimundo Maciel Pereira, Nossa Senhora de Fátima', 19, '62900000', 11, 99928818, NULL, '2023-02-24 02:01:06', '2023-02-24 02:01:06');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `image_produits`
--

CREATE TABLE `image_produits` (
  `id` int(10) UNSIGNED NOT NULL,
  `photos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_produit` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `image_produits`
--

INSERT INTO `image_produits` (`id`, `photos`, `id_produit`, `deleted_at`, `created_at`, `updated_at`) VALUES
(24, '1667303041.0jpg', 7, NULL, '2022-11-01 10:44:02', '2022-11-01 10:44:02'),
(25, '1667303042.1jpg', 7, NULL, '2022-11-01 10:44:02', '2022-11-01 10:44:02'),
(26, '1667303042.2jpg', 7, NULL, '2022-11-01 10:44:03', '2022-11-01 10:44:03'),
(27, '1667303043.3jpg', 7, NULL, '2022-11-01 10:44:03', '2022-11-01 10:44:03'),
(28, '1667303094.0jpg', 8, NULL, '2022-11-01 10:44:54', '2022-11-01 10:44:54'),
(29, '1667303094.1jpg', 8, NULL, '2022-11-01 10:44:54', '2022-11-01 10:44:54'),
(30, '1667303094.2jpg', 8, NULL, '2022-11-01 10:44:55', '2022-11-01 10:44:55'),
(31, '1667303095.3jpg', 8, NULL, '2022-11-01 10:44:55', '2022-11-01 10:44:55'),
(32, '1667303105.0jpg', 9, NULL, '2022-11-01 10:45:05', '2022-11-01 10:45:05'),
(33, '1667303106.1jpg', 9, NULL, '2022-11-01 10:45:06', '2022-11-01 10:45:06'),
(34, '1667303107.2jpg', 9, NULL, '2022-11-01 10:45:07', '2022-11-01 10:45:07'),
(35, '1667303107.3jpg', 9, NULL, '2022-11-01 10:45:07', '2022-11-01 10:45:07'),
(36, '1667303636.0webp', 10, '2022-11-01 10:55:58', '2022-11-01 10:53:56', '2022-11-01 10:55:58'),
(37, '1667303636.1webp', 10, NULL, '2022-11-01 10:53:56', '2022-11-01 10:53:56'),
(38, '1667303636.2webp', 10, NULL, '2022-11-01 10:53:56', '2022-11-01 10:53:56'),
(39, '1667303636.3webp', 10, NULL, '2022-11-01 10:53:56', '2022-11-01 10:53:56'),
(40, '1667303636.4webp', 10, NULL, '2022-11-01 10:53:56', '2022-11-01 10:53:56'),
(41, '1667304424.0jpg', 11, NULL, '2022-11-01 11:07:04', '2022-11-01 11:07:04'),
(42, '1667304425.1jpg', 11, NULL, '2022-11-01 11:07:05', '2022-11-01 11:07:05'),
(43, '1667304425.2jpg', 11, NULL, '2022-11-01 11:07:05', '2022-11-01 11:07:05'),
(44, '1667304425.3jpg', 11, NULL, '2022-11-01 11:07:05', '2022-11-01 11:07:05'),
(45, '1667304611.0webp', 12, NULL, '2022-11-01 11:10:11', '2022-11-01 11:10:11'),
(46, '1667304611.1webp', 12, NULL, '2022-11-01 11:10:11', '2022-11-01 11:10:11'),
(47, '1667304611.2webp', 12, NULL, '2022-11-01 11:10:11', '2022-11-01 11:10:11'),
(48, '1667304611.3webp', 12, NULL, '2022-11-01 11:10:11', '2022-11-01 11:10:11'),
(49, '1667305044.0webp', 13, '2022-11-01 11:19:21', '2022-11-01 11:17:24', '2022-11-01 11:19:21'),
(50, '1667305044.1webp', 13, NULL, '2022-11-01 11:17:24', '2022-11-01 11:17:24'),
(51, '1667305045.2webp', 13, NULL, '2022-11-01 11:17:25', '2022-11-01 11:17:25'),
(52, '1667305045.3webp', 13, NULL, '2022-11-01 11:17:25', '2022-11-01 11:17:25'),
(53, '1667305045.4webp', 13, NULL, '2022-11-01 11:17:25', '2022-11-01 11:17:25'),
(54, '1667305474.0jpg', 14, NULL, '2022-11-01 11:24:34', '2022-11-01 11:24:34'),
(55, '1667305474.1webp', 14, NULL, '2022-11-01 11:24:34', '2022-11-01 11:24:34'),
(56, '1667305475.2webp', 14, NULL, '2022-11-01 11:24:35', '2022-11-01 11:24:35'),
(57, '1667305475.3webp', 14, NULL, '2022-11-01 11:24:35', '2022-11-01 11:24:35'),
(58, '1667305476.4webp', 14, NULL, '2022-11-01 11:24:36', '2022-11-01 11:24:36'),
(59, '1667305476.5webp', 14, NULL, '2022-11-01 11:24:36', '2022-11-01 11:24:36'),
(60, '1667305831.0jpg', 15, NULL, '2022-11-01 11:30:31', '2022-11-01 11:30:31'),
(61, '1667305831.1webp', 15, NULL, '2022-11-01 11:30:31', '2022-11-01 11:30:31'),
(62, '1667305831.2jpg', 15, NULL, '2022-11-01 11:30:31', '2022-11-01 11:30:31'),
(63, '1667305831.3webp', 15, NULL, '2022-11-01 11:30:31', '2022-11-01 11:30:31'),
(64, '1667305832.4jpg', 15, NULL, '2022-11-01 11:30:32', '2022-11-01 11:30:32'),
(65, '1667306355.0jpg', 16, NULL, '2022-11-01 11:39:15', '2022-11-01 11:39:15'),
(66, '1667306355.1jpg', 16, NULL, '2022-11-01 11:39:15', '2022-11-01 11:39:15'),
(67, '1667306355.2jpg', 16, NULL, '2022-11-01 11:39:15', '2022-11-01 11:39:15'),
(68, '1667306355.3jpg', 16, NULL, '2022-11-01 11:39:15', '2022-11-01 11:39:15'),
(69, '1667306478.0jpg', 17, NULL, '2022-11-01 11:41:18', '2022-11-01 11:41:18'),
(70, '1667306478.1jpg', 17, NULL, '2022-11-01 11:41:18', '2022-11-01 11:41:18'),
(71, '1667306478.2jpg', 17, NULL, '2022-11-01 11:41:18', '2022-11-01 11:41:18'),
(72, '1667306478.3jpg', 17, NULL, '2022-11-01 11:41:18', '2022-11-01 11:41:18'),
(73, '1667306986.0jpg', 18, NULL, '2022-11-01 11:49:46', '2022-11-01 11:49:46'),
(74, '1667306987.1jpg', 18, NULL, '2022-11-01 11:49:47', '2022-11-01 11:49:47'),
(75, '1667306987.2jpg', 18, NULL, '2022-11-01 11:49:47', '2022-11-01 11:49:47'),
(76, '1667306987.3jpg', 18, NULL, '2022-11-01 11:49:47', '2022-11-01 11:49:47'),
(77, '1667307090.0jpg', 19, NULL, '2022-11-01 11:51:30', '2022-11-01 11:51:30'),
(78, '1667307090.1jpg', 19, NULL, '2022-11-01 11:51:30', '2022-11-01 11:51:30'),
(79, '1667307090.2jpg', 19, NULL, '2022-11-01 11:51:30', '2022-11-01 11:51:30'),
(80, '1667307090.3jpg', 19, NULL, '2022-11-01 11:51:30', '2022-11-01 11:51:30'),
(81, '1667307165.0jpg', 20, NULL, '2022-11-01 11:52:45', '2022-11-01 11:52:45'),
(82, '1667307165.1jpg', 20, NULL, '2022-11-01 11:52:45', '2022-11-01 11:52:45'),
(83, '1667307165.2jpg', 20, NULL, '2022-11-01 11:52:45', '2022-11-01 11:52:45'),
(84, '1667307165.3jpg', 20, NULL, '2022-11-01 11:52:45', '2022-11-01 11:52:45'),
(85, '1667307381.0jpg', 21, NULL, '2022-11-01 11:56:21', '2022-11-01 11:56:21'),
(86, '1667307381.1jpg', 21, NULL, '2022-11-01 11:56:21', '2022-11-01 11:56:21'),
(87, '1667307381.2jpg', 21, NULL, '2022-11-01 11:56:21', '2022-11-01 11:56:21'),
(88, '1667307382.3jpg', 21, NULL, '2022-11-01 11:56:22', '2022-11-01 11:56:22'),
(89, '1667307382.4jpg', 21, NULL, '2022-11-01 11:56:22', '2022-11-01 11:56:22'),
(90, '1667307750.0jpg', 22, NULL, '2022-11-01 12:02:30', '2022-11-01 12:02:30'),
(91, '1667307750.1jpg', 22, NULL, '2022-11-01 12:02:30', '2022-11-01 12:02:30'),
(92, '1667307750.2jpg', 22, NULL, '2022-11-01 12:02:30', '2022-11-01 12:02:30'),
(93, '1667307750.3jpg', 22, NULL, '2022-11-01 12:02:30', '2022-11-01 12:02:30'),
(94, '1667307870.0jpg', 23, NULL, '2022-11-01 12:04:30', '2022-11-01 12:04:30'),
(95, '1667307870.1jpg', 23, NULL, '2022-11-01 12:04:30', '2022-11-01 12:04:30'),
(96, '1667307870.2jpg', 23, NULL, '2022-11-01 12:04:30', '2022-11-01 12:04:30'),
(97, '1667307870.3jpg', 23, NULL, '2022-11-01 12:04:31', '2022-11-01 12:04:31'),
(98, '1667307871.4webp', 23, NULL, '2022-11-01 12:04:31', '2022-11-01 12:04:31');

-- --------------------------------------------------------

--
-- Structure de la table `like2s`
--

CREATE TABLE `like2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `like2s`
--

INSERT INTO `like2s` (`id`, `id_user`, `id_produit`, `deleted_at`, `created_at`, `updated_at`) VALUES
(76, 7, 18, NULL, '2022-11-07 22:06:36', '2022-11-07 22:06:36'),
(77, 7, 18, NULL, '2022-11-07 22:07:46', '2022-11-07 22:07:46'),
(78, 7, 11, NULL, '2022-11-07 22:16:24', '2022-11-07 22:16:24'),
(79, 17, 11, NULL, '2022-11-08 01:03:35', '2022-11-08 01:03:35'),
(80, 17, 14, NULL, '2022-11-08 01:05:51', '2022-11-08 01:05:51'),
(81, 17, 15, NULL, '2022-11-08 01:06:27', '2022-11-08 01:06:27'),
(82, 17, 19, NULL, '2022-11-08 01:08:24', '2022-11-08 01:08:24'),
(83, 7, 19, NULL, '2022-11-13 03:36:21', '2022-11-13 03:36:21'),
(84, 7, 21, NULL, '2022-11-13 03:37:23', '2022-11-13 03:37:23'),
(85, 7, 20, NULL, '2022-12-01 14:37:18', '2022-12-01 14:37:18'),
(86, 7, 16, NULL, '2023-01-09 20:00:02', '2023-01-09 20:00:02'),
(87, 7, 7, NULL, '2023-01-09 20:19:57', '2023-01-09 20:19:57'),
(88, 7, 20, NULL, '2023-01-10 03:15:42', '2023-01-10 03:15:42'),
(89, 7, 20, NULL, '2023-01-30 19:43:34', '2023-01-30 19:43:34'),
(90, 7, 21, NULL, '2023-02-24 01:58:15', '2023-02-24 01:58:15');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`id`, `id_user`, `id_produit`, `deleted_at`, `created_at`, `updated_at`) VALUES
(42, 7, 16, NULL, '2022-11-07 22:05:59', '2022-11-07 22:05:59'),
(43, 7, 18, NULL, '2022-11-07 22:08:05', '2022-11-07 22:08:05'),
(44, 7, 21, NULL, '2022-11-07 22:10:47', '2022-11-07 22:10:47'),
(45, 17, 18, NULL, '2022-11-08 01:04:17', '2022-11-08 01:04:17'),
(46, 17, 15, NULL, '2022-11-08 01:06:53', '2022-11-08 01:06:53'),
(47, 17, 20, NULL, '2022-11-08 01:08:46', '2022-11-08 01:08:46'),
(48, 17, 7, NULL, '2022-11-13 03:52:14', '2022-11-13 03:52:14'),
(49, 17, 11, NULL, '2022-11-13 05:06:21', '2022-11-13 05:06:21'),
(50, 7, 20, NULL, '2022-12-01 14:36:08', '2022-12-01 14:36:08'),
(51, 7, 7, NULL, '2023-01-09 20:20:26', '2023-01-09 20:20:26');

-- --------------------------------------------------------

--
-- Structure de la table `list_commandes`
--

CREATE TABLE `list_commandes` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_produit` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `qt_list` int(11) NOT NULL,
  `total_list` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `list_commandes`
--

INSERT INTO `list_commandes` (`id`, `id_produit`, `id_commande`, `id_user`, `qt_list`, `total_list`, `deleted_at`, `created_at`, `updated_at`) VALUES
(125, 20, 98, 7, 3, 1470, NULL, '2022-11-07 22:18:01', '2022-11-07 22:18:01'),
(126, 7, 98, 7, 1, 1470, NULL, '2022-11-07 22:18:01', '2022-11-07 22:18:01'),
(127, 11, 99, 7, 1, 120, NULL, '2022-11-07 22:42:30', '2022-11-07 22:42:30'),
(128, 23, 100, 17, 1, 1425, NULL, '2022-11-08 01:12:24', '2022-11-08 01:12:24'),
(129, 20, 100, 17, 1, 1425, NULL, '2022-11-08 01:12:24', '2022-11-08 01:12:24'),
(130, 16, 100, 17, 2, 1425, NULL, '2022-11-08 01:12:24', '2022-11-08 01:12:24'),
(131, 11, 101, 18, 3, 760, NULL, '2022-11-08 05:15:02', '2022-11-08 05:15:02'),
(132, 17, 101, 18, 1, 760, NULL, '2022-11-08 05:15:02', '2022-11-08 05:15:02'),
(133, 13, 102, 18, 1, 1300, NULL, '2022-11-08 05:30:23', '2022-11-08 05:30:23'),
(134, 13, 102, 18, 1, 1300, NULL, '2022-11-08 05:30:23', '2022-11-08 05:30:23'),
(135, 17, 103, 7, 2, 1140, NULL, '2022-11-11 00:38:50', '2022-11-11 00:38:50'),
(136, 19, 103, 7, 1, 1140, NULL, '2022-11-11 00:38:50', '2022-11-11 00:38:50'),
(137, 16, 104, 7, 1, 520, NULL, '2022-11-12 21:28:55', '2022-11-12 21:28:55'),
(138, 18, 105, 7, 2, 640, NULL, '2022-11-12 21:47:13', '2022-11-12 21:47:13'),
(139, 13, 106, 17, 2, 1300, NULL, '2022-11-13 03:53:30', '2022-11-13 03:53:30'),
(140, 14, 107, 17, 1, 250, NULL, '2022-11-13 05:07:56', '2022-11-13 05:07:56'),
(141, 14, 108, 20, 3, 870, NULL, '2022-11-14 15:29:25', '2022-11-14 15:29:25'),
(142, 11, 108, 20, 1, 870, NULL, '2022-11-14 15:29:25', '2022-11-14 15:29:25'),
(143, 7, 109, 7, 2, 900, NULL, '2022-12-01 14:43:06', '2022-12-01 14:43:06'),
(144, 11, 110, 7, 2, 690, NULL, '2023-01-09 20:24:18', '2023-01-09 20:24:18'),
(145, 7, 110, 7, 1, 690, NULL, '2023-01-09 20:24:18', '2023-01-09 20:24:18'),
(146, 19, 111, 7, 2, 1580, NULL, '2023-01-10 03:08:51', '2023-01-10 03:08:51'),
(147, 7, 111, 7, 2, 1580, NULL, '2023-01-10 03:08:51', '2023-01-10 03:08:51'),
(148, 20, 112, 7, 1, 340, NULL, '2023-01-10 03:16:59', '2023-01-10 03:16:59'),
(149, 20, 113, 7, 2, 930, NULL, '2023-01-24 23:23:56', '2023-01-24 23:23:56'),
(150, 14, 113, 7, 1, 930, NULL, '2023-01-24 23:23:56', '2023-01-24 23:23:56'),
(151, 18, 114, 7, 2, 640, NULL, '2023-02-24 02:01:07', '2023-02-24 02:01:07');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_05_120026_create_categories_table', 1),
(6, '2022_10_06_063001_create_produits_table', 2),
(7, '2022_10_06_064348_create_image_produits_table', 2),
(8, '2022_10_07_130124_create_users_table', 3),
(9, '2022_10_08_094621_create_paniers_table', 4),
(10, '2022_10_10_115741_create_list_commandes_table', 5),
(11, '2022_10_10_120346_create_commandes_table', 5),
(12, '2022_10_10_191057_create_pagamentos_table', 6),
(13, '2022_10_10_223510_create_commandes_table', 6),
(14, '2022_10_10_223558_create_list_commandes_table', 6),
(15, '2022_10_23_183017_create_pagamentos_table', 7),
(16, '2022_10_24_110855_create_likes_table', 8),
(17, '2022_10_24_130507_create_like2s_table', 9);

-- --------------------------------------------------------

--
-- Structure de la table `pagamentos`
--

CREATE TABLE `pagamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ddd` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nacimento` date NOT NULL,
  `firstname` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomecartao` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ncredito` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ncvv` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesexp` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anoexp` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bandeira` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nparcela` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalfinal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalparcela` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalapagar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalfinaliz` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `id_list_com` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pagamentos`
--

INSERT INTO `pagamentos` (`id`, `email`, `cpf`, `ddd`, `tel`, `nacimento`, `firstname`, `nomecartao`, `ncredito`, `ncvv`, `mesexp`, `anoexp`, `bandeira`, `nparcela`, `totalfinal`, `totalparcela`, `totalapagar`, `totalfinaliz`, `statut`, `id_list_com`, `id_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(17, 'antonia@gmail.com', '718.344.134-27', '85', '999928818', '1992-04-02', 'Alceleina', 'Antonia', '4111111111111111', '123', '12', '2030', 'visa', '6', '1470', '271.26', '1627.58', '1470', '1', 98, 7, NULL, '2022-11-07 22:22:49', '2022-11-07 22:22:49'),
(18, 'antonia@gmail.com', '718.344.134-27', '84', '999928818', '1998-01-12', 'Nina', 'Antonia', '4111111111111111', '123', '12', '2030', 'visa', '2', '120', '62.71', '125.41', '120', '1', 99, 7, NULL, '2022-11-07 22:44:59', '2022-11-07 22:44:59'),
(19, 'minaj@gmail.com', '718.344.074-51', '84', '998087249', '1982-10-07', 'NICKI MINAJ', 'MINAJ NICKI', '4111111111111111', '123', '12', '2030', 'visa', '7', '1300', '208.58', '1460.03', '1300', '1', 102, 18, NULL, '2022-11-08 05:34:35', '2022-11-08 05:34:35'),
(20, 'antonia@gmail.com', '718.344.134-27', '84', '999928818', '1993-04-02', 'Nina', 'Manu', '4111111111111111', '123', '12', '2030', 'visa', '4', '900', '242.08', '968.31', '900', '1', 109, 7, NULL, '2022-12-01 14:46:55', '2022-12-01 14:46:55'),
(21, 'antonia@gmail.com', '718.344.134-27', '84', '999928818', '1993-04-02', 'Nina', 'Manu', '4111111111111111', '123', '12', '2030', 'visa', '4', '900', '242.08', '968.31', '900', '1', 109, 7, NULL, '2022-12-01 14:47:15', '2022-12-01 14:47:15');

-- --------------------------------------------------------

--
-- Structure de la table `paniers`
--

CREATE TABLE `paniers` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_produit` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `qt` int(11) NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `paniers`
--

INSERT INTO `paniers` (`id`, `id_produit`, `id_user`, `qt`, `color`, `deleted_at`, `created_at`, `updated_at`) VALUES
(258, 18, 7, 2, 'Blue', '2022-11-12 21:47:13', '2022-11-12 21:33:44', '2022-11-12 21:47:13'),
(259, 20, 7, 1, NULL, '2022-11-13 03:38:24', '2022-11-13 03:36:33', '2022-11-13 03:38:24'),
(260, 19, 7, 1, NULL, '2022-11-13 03:38:21', '2022-11-13 03:37:06', '2022-11-13 03:38:21'),
(261, 18, 7, 1, NULL, '2022-11-13 03:42:22', '2022-11-13 03:37:13', '2022-11-13 03:42:22'),
(262, 19, 7, 1, 'Blue', '2022-11-13 03:47:49', '2022-11-13 03:37:49', '2022-11-13 03:47:49'),
(263, 16, 7, 2, 'Blue', '2022-11-13 03:43:08', '2022-11-13 03:42:06', '2022-11-13 03:43:08'),
(264, 7, 7, 2, NULL, '2022-12-01 14:43:06', '2022-11-13 03:44:03', '2022-12-01 14:43:06'),
(265, 13, 17, 2, NULL, '2022-11-13 03:53:30', '2022-11-13 03:52:27', '2022-11-13 03:53:30'),
(266, 18, 17, 2, NULL, '2022-11-13 05:03:35', '2022-11-13 04:59:20', '2022-11-13 05:03:35'),
(267, 14, 17, 1, 'Noir', '2022-11-13 05:07:56', '2022-11-13 05:01:22', '2022-11-13 05:07:56'),
(268, 14, 20, 3, 'Noir', '2022-11-14 15:29:25', '2022-11-14 15:23:20', '2022-11-14 15:29:25'),
(269, 11, 20, 1, 'Rouge', '2022-11-14 15:29:25', '2022-11-14 15:24:28', '2022-11-14 15:29:25'),
(270, 17, 7, 2, NULL, '2022-12-01 14:42:23', '2022-12-01 14:34:44', '2022-12-01 14:42:23'),
(271, 20, 7, 1, 'Blue', '2022-12-01 14:42:35', '2022-12-01 14:35:50', '2022-12-01 14:42:35'),
(272, 21, 7, 1, 'Rouge', '2022-12-01 14:40:00', '2022-12-01 14:37:36', '2022-12-01 14:40:00'),
(273, 14, 7, 2, 'Noir', '2023-01-09 20:21:51', '2023-01-09 19:57:38', '2023-01-09 20:21:51'),
(274, 11, 7, 1, 'Rose', '2023-01-09 20:11:27', '2023-01-09 20:09:24', '2023-01-09 20:11:27'),
(275, 19, 7, 2, NULL, '2023-01-09 20:22:01', '2023-01-09 20:09:50', '2023-01-09 20:22:01'),
(276, 11, 7, 2, NULL, '2023-01-09 20:24:18', '2023-01-09 20:18:47', '2023-01-09 20:24:18'),
(277, 7, 7, 1, 'Noir', '2023-01-09 20:24:18', '2023-01-09 20:21:13', '2023-01-09 20:24:18'),
(278, 19, 7, 2, NULL, '2023-01-10 03:08:51', '2023-01-10 03:04:17', '2023-01-10 03:08:51'),
(279, 7, 7, 2, NULL, '2023-01-10 03:08:51', '2023-01-10 03:06:53', '2023-01-10 03:08:51'),
(280, 20, 7, 1, 'Rouge', '2023-01-10 03:16:59', '2023-01-10 03:15:50', '2023-01-10 03:16:59'),
(281, 20, 7, 2, 'Violet', '2023-01-24 23:23:56', '2023-01-24 23:17:43', '2023-01-24 23:23:56'),
(282, 19, 7, 1, NULL, '2023-01-24 23:22:49', '2023-01-24 23:22:26', '2023-01-24 23:22:49'),
(283, 14, 7, 1, NULL, '2023-01-24 23:23:56', '2023-01-24 23:23:26', '2023-01-24 23:23:56'),
(284, 21, 7, 1, NULL, '2023-02-03 18:41:17', '2023-01-30 19:42:54', '2023-02-03 18:41:17'),
(285, 22, 7, 1, NULL, '2023-01-30 19:48:45', '2023-01-30 19:48:04', '2023-01-30 19:48:45'),
(286, 7, 7, 1, NULL, '2023-02-03 18:41:02', '2023-02-03 18:39:14', '2023-02-03 18:41:02'),
(287, 14, 7, 1, 'Blue', '2023-02-24 01:59:44', '2023-02-03 18:40:22', '2023-02-24 01:59:44'),
(288, 20, 7, 1, NULL, '2023-02-24 02:00:28', '2023-02-24 01:59:14', '2023-02-24 02:00:28'),
(289, 18, 7, 2, 'Rouge', '2023-02-24 02:01:07', '2023-02-24 01:59:20', '2023-02-24 02:01:07');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom_pro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_pro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_pro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix_pro` int(11) NOT NULL,
  `desconte_pro` int(11) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `statut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `popularite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_categorie` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom_pro`, `ref_pro`, `description_pro`, `prix_pro`, `desconte_pro`, `stock`, `statut`, `popularite`, `photo`, `id_categorie`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, 'YEEZY BOOST 700', 'The adidas Yeezy Boost 700 “Inertia” is the fourth colorway released of the popular chunky sneaker by Kanye West and adidas.', 'The adidas Yeezy Boost 700 “Inertia” is the fourth colorway released of the popular chunky sneaker by Kanye West and adidas. The decidedly soft color palette features multiple shades of grey across the premium leather, suede, and mesh upper with light pink accents on the oval-shaped details of the midsole and reflective silver accents throughout. A cream white rubber outsole finishes off the clean look for the Yeezy “dad shoe” silhouette. Another essential drop in the adidas Yeezy sneaker line, the limited edition adidas Yeezy Boost 700 “Inertia” released in spring 2019.', 450, 12, 100, '1', '1', '1667303041.png', 8, NULL, '2022-11-01 10:44:01', '2022-11-01 10:44:01'),
(8, 'YEEZY BOOST 700', 'The adidas Yeezy Boost 700 “Inertia” is the fourth colorway released of the popular chunky sneaker by Kanye West and adidas.', 'The adidas Yeezy Boost 700 “Inertia” is the fourth colorway released of the popular chunky sneaker by Kanye West and adidas. The decidedly soft color palette features multiple shades of grey across the premium leather, suede, and mesh upper with light pink accents on the oval-shaped details of the midsole and reflective silver accents throughout. A cream white rubber outsole finishes off the clean look for the Yeezy “dad shoe” silhouette. Another essential drop in the adidas Yeezy sneaker line, the limited edition adidas Yeezy Boost 700', 450, 12, 100, '1', '1', '1667303093.png', 8, '2022-11-01 10:48:35', '2022-11-01 10:44:54', '2022-11-01 10:48:35'),
(9, 'YEEZY BOOST 700', 'The adidas Yeezy Boost 700 “Inertia” is the fourth colorway released of the popular chunky sneaker by Kanye West and adidas.', 'The adidas Yeezy Boost 700 “Inertia” is the fourth colorway released of the popular chunky sneaker by Kanye West and adidas. The decidedly soft color palette features multiple shades of grey across the premium leather, suede, and mesh upper with light pink accents on the oval-shaped details of the midsole and reflective silver accents throughout. A cream white rubber outsole finishes off the clean look for the Yeezy “dad shoe” silhouette. Another essential drop in the adidas Yeezy sneaker line, the limited edition adidas Yeezy Boost 700', 450, 12, 100, '1', '1', '1667303104.png', 8, '2022-11-01 10:48:28', '2022-11-01 10:45:04', '2022-11-01 10:48:28'),
(10, 'YEEZY BOOST 700', 'The adidas Yeezy Boost 700 “Inertia” is the fourth colorway released of the popular chunky sneaker by Kanye West and adidas.', 'jkgbkvkvk', 22155, 20, 45, '1', '1', '1667303635.jpg', 8, '2022-11-01 10:56:02', '2022-11-01 10:53:55', '2022-11-01 10:56:02'),
(11, 'YEEZY BOOST 451', 'Adidas Yeezy 451 White Blue Black For Sale', 'It comes constructed with a mesh upper, unique lacing system and sits atop a very aggressive White sole that grips the shoe. Details that it won’t feature are Boost or adiPRENE cushioning, which will be the first for a non-boot Yeezy.', 120, 5, 100, '1', '1', '1667304424.jpg', 8, NULL, '2022-11-01 11:07:04', '2022-11-01 11:07:04'),
(12, 'YEEZY BOOST 451', 'Adidas Yeezy 451 White Blue Black For Sale', 'It comes constructed with a mesh upper, unique lacing system and sits atop a very aggressive White sole that grips the shoe. Details that it won’t feature are Boost or adiPRENE cushioning, which will be the first for a non-boot Yeezy.', 120, 5, 100, '1', '1', '1667304611.jpg', 8, '2022-11-01 11:15:14', '2022-11-01 11:10:11', '2022-11-01 11:15:14'),
(13, 'Balmain.', 'Unicorn sneakers, Balmain. Made in leather', 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing. Sed lectus.', 650, 14, 100, '0', '1', '1667305044.webp', 8, NULL, '2022-11-01 11:17:24', '2022-11-01 11:17:24'),
(14, 'YEEZY BOOST 450', 'Sizing: Slightly large, take half a size below your usual size.', 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing. Sed lectus.', 250, 15, 100, '1', '0', '1667305473.jpg', 8, NULL, '2022-11-01 11:24:34', '2022-11-01 11:24:34'),
(15, 'YEEZY BOOST 350', 'Adidas Yeezy Boost 350 V2 Carbon', 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing. Sed lectus.', 410, 10, 100, '0', '1', '1667305831.jpg', 8, NULL, '2022-11-01 11:30:31', '2022-11-01 11:30:31'),
(16, 'Mackay jacket', 'Canada Goose Double-sided quilted Mackay jacket', 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing. Sed lectus.', 520, 8, 100, '1', '0', '1667306355.jpg', 10, NULL, '2022-11-01 11:39:15', '2022-11-01 11:39:15'),
(17, 'Mackay jacket', 'Canada Goose Double-sided quilted Mackay jacket', 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing. Sed lectus.', 400, 8, 100, '1', '1', '1667306478.jpg', 10, NULL, '2022-11-01 11:41:18', '2022-11-01 11:41:18'),
(18, 'Women\'s Dress Adult', 'Canada Goose Double-sided quilted Mackay jacket', 'ed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing. Sed lectus.', 320, 12, 100, '1', '0', '1667306986.jpg', 11, NULL, '2022-11-01 11:49:46', '2022-11-01 11:49:46'),
(19, 'Women\'s Dress Adult', 'Canada Goose Double-sided quilted Mackay jacket', 'ed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing. Sed lectus.', 340, 20, 100, '0', '1', '1667307090.jpg', 11, NULL, '2022-11-01 11:51:30', '2022-11-01 11:51:30'),
(20, 'Women\'s Dress Adult', 'Canada Goose Double-sided quilted Mackay jacket', 'ed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing. Sed lectus.', 340, 20, 100, '0', '1', '1667307165.jpg', 11, NULL, '2022-11-01 11:52:45', '2022-11-01 11:52:45'),
(21, 'Women\'s Dress', 'Canada Goose Double-sided quilted Mackay jacket', 'ed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing. Sed lectus.', 200, 30, 100, '1', '1', '1667307381.jpg', 11, NULL, '2022-11-01 11:56:21', '2022-11-01 11:56:21'),
(22, 'Boy\'s breeches', 'Boy\'s breeches', 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing. Sed lectus.', 45, 42, 100, '1', '0', '1667307750.jpg', 12, NULL, '2022-11-01 12:02:30', '2022-11-01 12:02:30'),
(23, 'Boy\'s breeches', 'Boy\'s breeches', 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing. Sed lectus.', 45, 42, 100, '1', '0', '1667307870.jpg', 12, NULL, '2022-11-01 12:04:30', '2022-11-01 12:04:30');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dist` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_apto` int(11) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `ddd` int(11) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `name`, `email`, `cpf`, `email_verified_at`, `password`, `country`, `state`, `city`, `dist`, `street`, `n_apto`, `zipcode`, `ddd`, `tel`, `profile`, `statut`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Alceilena', 'Antonia', 'antonia@gmail.com', '71834413427', NULL, '4141', 'Brasil', 'SAO PAULO', 'Sao Paulo', 'SP', 'Travessa Raimundo Maciel Pereira, Nossa Senhora de Fátima', 19, 62900000, 11, 99928818, '1666730499.jpg', '0', NULL, '2022-10-25 19:41:39', '2022-10-25 19:45:42'),
(17, 'Mahouvi', 'manu', 'manu@gmail.com', '71834413427', NULL, '4141', 'Brasil', 'Ceará', 'Russas', 'CE', 'Rua travers sa raiumundo  perreira', 524, 62900000, 88, 999928818, '1667851366.jpeg', '0', NULL, '2022-11-08 01:02:49', '2022-11-08 01:12:24'),
(18, 'AMBROISE', 'ZOUNMENOU', 'ambroisefzounmenou@gmail.com', '71834407451', NULL, 'ambroise', 'Brésil', 'RIO GRANDE DO NORTE', 'PIRANGI DO NORTE', 'RN', 'AVENIDA DEPUTADO MARCIO MARINHO', 99, 59161250, 84, 998087249, '1667866145.jpg', '0', NULL, '2022-11-08 05:09:05', '2022-11-08 05:15:02'),
(19, NULL, 'Antonia', 'helena@gmail.com', NULL, NULL, 'anarita123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1667871418.jpg', '0', NULL, '2022-11-08 06:36:58', '2022-11-08 06:36:58'),
(20, 'araujo', 'nego', 'nego@gmail.com', '71834413724', NULL, '4141', 'Brasil', 'ceara', 'fortaleza', 'CE', 'rua arlindo braga negrelli', 454, 62900000, 85, 999928818, '1668421315.jpg', '0', NULL, '2022-11-14 15:21:55', '2022-11-14 15:29:25'),
(21, NULL, 'NegocururuFidaTucanoEdoManu', 'NegocururuFidaTucanoEdoManu@gmail.com', NULL, NULL, 'NegocururuFidaTucanoEdoManu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1668426147.jpg', '0', NULL, '2022-11-14 16:42:27', '2022-11-14 16:42:27');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commandes_id_user_foreign` (`id_user`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `image_produits`
--
ALTER TABLE `image_produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_produits_id_produit_foreign` (`id_produit`);

--
-- Index pour la table `like2s`
--
ALTER TABLE `like2s`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `list_commandes`
--
ALTER TABLE `list_commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `list_commandes_id_user_foreign` (`id_user`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `paniers`
--
ALTER TABLE `paniers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produits_id_categorie_foreign` (`id_categorie`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `image_produits`
--
ALTER TABLE `image_produits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT pour la table `like2s`
--
ALTER TABLE `like2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `list_commandes`
--
ALTER TABLE `list_commandes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `paniers`
--
ALTER TABLE `paniers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=290;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `image_produits`
--
ALTER TABLE `image_produits`
  ADD CONSTRAINT `image_produits_id_produit_foreign` FOREIGN KEY (`id_produit`) REFERENCES `produits` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `list_commandes`
--
ALTER TABLE `list_commandes`
  ADD CONSTRAINT `list_commandes_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_id_categorie_foreign` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
