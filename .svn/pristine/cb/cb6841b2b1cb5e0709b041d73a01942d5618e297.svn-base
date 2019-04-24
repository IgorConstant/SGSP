-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28-Nov-2017 às 19:06
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgsp_mobile`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `PRONTUARIO` char(7) NOT NULL COMMENT 'A coluna corresponde ao prontuario do aluno relatado pelo professor. Esta coluna  corresponde a uma Primary key.',
  `NOME` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL COMMENT 'A coluna corresponde ao nome do aluno relatado pelo professor.',
  `DATA_CADASTRO` datetime NOT NULL COMMENT 'O SGSP_MOBILE mobile não utiliza dessa coluna.',
  `ID_CURSO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `ID_CURSO` int(11) NOT NULL COMMENT 'A Coluna corresponde ao codigo criado para ser a chave primaria (PK).',
  `NOME` varchar(50) NOT NULL COMMENT 'A coluna corresponde ao curso do Aluno relatado.',
  `PERIODO` varchar(10) NOT NULL COMMENT 'A Coluna corresponde ao codigo criado para ser a chave primaria (PK).',
  `NIVEL` varchar(45) DEFAULT NULL COMMENT 'A coluna corresponde ao nivel do curso do aluno relatado, que podem ser: Integrado, Técnico ou Superior.',
  `DATA_CADASTRO` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'A coluna corresponde a data de cadastro do aluno.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `PRONTUARIO` char(7) NOT NULL COMMENT 'A coluna corresponde o numero do prontuario do funcionário.',
  `SENHA` varchar(20) CHARACTER SET latin2 NOT NULL COMMENT 'A Coluna corresponde a senha para acesso a plataforma.',
  `STATUS` varchar(10) NOT NULL COMMENT 'A coluna corresponde ao armazenamento do status de login, que podem ser:\nLogado\n\n',
  `PERFIL` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'Esta coluna armazena o perfil que será logado: Professor.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`PRONTUARIO`, `SENHA`, `STATUS`, `PERFIL`) VALUES
('123456', 'admin', 'online', 'professor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relato`
--

CREATE TABLE `relato` (
  `ID_RELATO` int(11) UNSIGNED NOT NULL,
  `PRONTUARIO_ALUNO` char(7) DEFAULT NULL,
  `PRONTUARIO_FUNCIONARIO` char(7) DEFAULT NULL,
  `MENSAGEM` varchar(6000) DEFAULT NULL,
  `AREA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `relato`
--

INSERT INTO `relato` (`ID_RELATO`, `PRONTUARIO_ALUNO`, `PRONTUARIO_FUNCIONARIO`, `MENSAGEM`, `AREA`) VALUES
(1, '123456', '1641883', 'O aluno esta com excesso de faltas.', 'Aberto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `v_busca_mobile`
--

CREATE TABLE `v_busca_mobile` (
  `PRONTUARIO` char(7) DEFAULT NULL,
  `N_A` varchar(50) DEFAULT NULL,
  `N_C` varchar(50) DEFAULT NULL,
  `DATA_CADASTRO` datetime DEFAULT NULL,
  `NIVEL` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`PRONTUARIO`),
  ADD KEY `fk_ALUNO_CURSO1_idx` (`ID_CURSO`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`ID_CURSO`);

--
-- Indexes for table `relato`
--
ALTER TABLE `relato`
  ADD PRIMARY KEY (`ID_RELATO`),
  ADD UNIQUE KEY `ID_RELATO` (`ID_RELATO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `ID_CURSO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'A Coluna corresponde ao codigo criado para ser a chave primaria (PK).', AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `relato`
--
ALTER TABLE `relato`
  MODIFY `ID_RELATO` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
