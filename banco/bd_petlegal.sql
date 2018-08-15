-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Ago-2018 às 00:51
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_petlegal`
--
CREATE DATABASE IF NOT EXISTS `bd_petlegal` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bd_petlegal`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nome` char(30) NOT NULL,
  `usuario` char(20) NOT NULL,
  `senha` char(20) NOT NULL,
  `status` enum('ativo','inativo') NOT NULL DEFAULT 'ativo',
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id_admin`, `nome`, `usuario`, `senha`, `status`) VALUES
(1, 'Felipe', 'Felipe', '1234', 'ativo'),
(2, 'Daniel', 'Daniel', '1234', 'ativo'),
(3, 'Matheus', 'Matheus', '1234', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigo`
--

DROP TABLE IF EXISTS `artigo`;
CREATE TABLE IF NOT EXISTS `artigo` (
  `id_artigo` int(11) NOT NULL AUTO_INCREMENT,
  `foto` char(255) NOT NULL,
  `categoria` char(30) NOT NULL,
  `titulo` char(30) NOT NULL,
  `resumo` char(200) NOT NULL,
  `data` datetime NOT NULL,
  `autor` char(50) NOT NULL,
  `conteudo` longtext NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_artigo`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='informacoes para o admin inserir no site';

--
-- Extraindo dados da tabela `artigo`
--

INSERT INTO `artigo` (`id_artigo`, `foto`, `categoria`, `titulo`, `resumo`, `data`, `autor`, `conteudo`, `status`) VALUES
(11, '15338542955b6cc25763bfa.jpg', 'Animal', 'Vida selvagem', 'Vida de animal Ã© o bicho!!!', '2018-08-14 19:26:00', 'Felipe GonÃ§alves', 'fayukhkgrgierÃ§ihrilhbr', '1'),
(12, '15338545915b6cc37f35579.jpg', 'Flor', 'Flor', 'agrjtykuljgkfejkgkefgelgvoeighwoehiweguegkweguowgeulihgtglkgdugkegkrugr', '2018-08-14 19:26:00', 'Felipe GonÃ§alves', 'kljlgrwrglige', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

DROP TABLE IF EXISTS `contato`;
CREATE TABLE IF NOT EXISTS `contato` (
  `id_contato` int(11) NOT NULL AUTO_INCREMENT,
  `nome_contato` varchar(50) NOT NULL,
  `email_contato` varchar(50) NOT NULL,
  `ass_contato` varchar(50) NOT NULL,
  `text_contato` varchar(360) NOT NULL,
  PRIMARY KEY (`id_contato`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Tabela do form contato';

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id_contato`, `nome_contato`, `email_contato`, `ass_contato`, `text_contato`) VALUES
(1, 'ufjruj', 'jgkrht', 'lihhtk', ''),
(2, 'sb;khldb', 'khlhfbfblih', 'lkjpÃ§fjberbhi', 'hifbrebroihb'),
(3, 'Felipe GonÃ§alves', 'felipe.goncalves.171819@gmail.com', 'Fala ae', 'Fala ae');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
