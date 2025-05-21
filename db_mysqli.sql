-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Nov-2022 às 15:46
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_mysqli`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE IF NOT EXISTS `cadastro` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `senha` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `senhadenovo` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `email`, `senha`, `senhadenovo`) VALUES
(1, 'Felipe', 'felipemoises3000@gmail.com', '99999', 'feling'),
(2, 'Felipe1', 'felipemoises13000@gmail.com', '77777', 'NY'),
(3, 'Felipe', 'felipemoises3000@gmail.com', '11', '11'),
(4, 'Felipe2', 'felipemoises13000@gmail.com', '22', '22'),
(5, 'Felipe', 'felipemoises3000@gmail.com', '90', '90'),
(6, 'Felipe', 'felipemoises3000@gmail.com', '77', '77'),
(7, 'Felipe', 'felipemoises3000@gmail.com', '00', '00'),
(8, 'Felipe', 'felipemoises3000@gmail.com', '11', '11'),
(9, 'Felipe', 'felipemoises3000@gmail.com', '55', '55'),
(10, 'Felipe', 'felipemoises3000@gmail.com', '22', '22'),
(11, 'Felipe', 'felipemoises3000@gmail.com', '77', '77'),
(12, 'Felipe', 'felipemoises3000@gmail.com', '99', '99'),
(13, 'Felipe', 'felipemoises3000@gmail.com', '88', '88'),
(14, 'Feling', 'felipemoises3000@gmail.com', '29', ''),
(15, '', 'felipemoises3000@gmail.com', '99', ''),
(16, 'Felipe', 'felipemoises3000@gmail.com', '77', ''),
(17, '', 'felipemoises9000@gmail.com', '9', '9'),
(18, '', 'felipemoises3000@gmail.com', '55', '55'),
(19, '', 'felipemoises3000@gmail.com', '88', ''),
(20, '', 'felipemoises3000@gmail.com', '33', ''),
(21, '', 'felipemoises3000@gmail.com', '0', ''),
(22, '', 'felipemoises3000@gmail.com', '8', ''),
(23, '', 'felipemoises3000@gmail.com', 'root', ''),
(24, '', 'felipemoises3000@gmail.com', 'root', ''),
(25, '', 'felipemoises3000@gmail.com', 'root', ''),
(26, '', 'felipemoises3000@gmail.com', 'root', ''),
(27, '', 'felipemoises3000@gmail.com', '5', ''),
(28, '', 'felipemoises3000@gmail.com', 'h', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
