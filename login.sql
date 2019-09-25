-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 25-Set-2019 às 14:24
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nm_usuario` varchar(55) NOT NULL,
  `nr_senha` varchar(32) NOT NULL,
  `nm_email` varchar(55) NOT NULL,
  `nr_cartao` int(16) DEFAULT NULL,
  `nr_seg` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nm_usuario`, `nr_senha`, `nm_email`, `nr_cartao`, `nr_seg`) VALUES
(1, 'windstonp', 'c83c7783aae71fd211b4c76f49277664', 'joaor4e@gmail.com', 42208645, 32),
(2, 'kaybr16+', '25d55ad283aa400af464c76d713c07ad', 'kay@hotmail.com', 0, 989),
(8, 'gunto', '217e789a4d9025cac68602b39208f407', 'gunto@gmail.com', 42205286, 123),
(9, 'gomes', 'c83c7783aae71fd211b4c76f49277664', 'jidsjadas@gmail', 58585828, 25),
(10, 'leandrogay', 'caf1a3dfb505ffed0d024130f58c5cfa', 'eudourage@hotjhonson', 8520, 13),
(11, 'D0M0959', 'arrow15', 'estevao_camposs@gmail.com', NULL, NULL),
(12, 'estevan', '81dc9bdb52d04dc20036dbd8313ed055', 'dhsaidhasi@gmail.com', 2025151, 25),
(13, 'dougui', '217e789a4d9025cac68602b39208f407', 'vardo@gmail.com', 45461, 461),
(14, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin@admin.com', 2522222, 25);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
