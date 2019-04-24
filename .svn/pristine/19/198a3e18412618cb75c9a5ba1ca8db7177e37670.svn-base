-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 09-Jun-2017 às 03:05
-- Versão do servidor: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `SGSP_MOBILE`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ALUNO`
--

CREATE TABLE IF NOT EXISTS `ALUNO` (
  `PRONTUARIO` char(7) NOT NULL COMMENT 'A coluna corresponde ao prontuario do aluno relatado pelo professor. Esta coluna  corresponde a uma Primary key.',
  `NOME` varchar(50) NOT NULL COMMENT 'A coluna corresponde ao nome do aluno relatado pelo professor.',
  `DATA_CADASTRO` datetime NOT NULL COMMENT 'O SGSP_MOBILE mobile não utiliza dessa coluna.',
  `ID_CURSO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ALUNO`
--

INSERT INTO `ALUNO` (`PRONTUARIO`, `NOME`, `DATA_CADASTRO`, `ID_CURSO`) VALUES
('1641417', 'Leonardo Picanco Bottaro', '2017-06-01 00:00:00', 1),
('1641883', 'Igor Henrique Constant', '2017-06-01 16:00:00', 1),
('7654321', 'Ruan Mendes da Silveira', '2017-05-24 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `CURSO`
--

CREATE TABLE IF NOT EXISTS `CURSO` (
`ID_CURSO` int(11) NOT NULL COMMENT 'A Coluna corresponde ao codigo criado para ser a chave primaria (PK).',
  `NOME` varchar(50) NOT NULL COMMENT 'A coluna corresponde ao curso do Aluno relatado.',
  `PERIODO` varchar(10) NOT NULL COMMENT 'A Coluna corresponde ao codigo criado para ser a chave primaria (PK).',
  `NIVEL` varchar(45) DEFAULT NULL COMMENT 'A coluna corresponde ao nivel do curso do aluno relatado, que podem ser: Integrado, Técnico ou Superior.',
  `DATA_CADASTRO` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'A coluna corresponde a data de cadastro do aluno.'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `CURSO`
--

INSERT INTO `CURSO` (`ID_CURSO`, `NOME`, `PERIODO`, `NIVEL`, `DATA_CADASTRO`) VALUES
(1, 'INFORMATICA', 'NOTURNO', 'TECNICO', '2017-06-01 23:17:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `LOGIN`
--

CREATE TABLE IF NOT EXISTS `LOGIN` (
  `PRONTUARIO` varchar(7) NOT NULL COMMENT 'A coluna corresponde o numero do prontuario do funcionário.',
  `SENHA` varchar(20) NOT NULL COMMENT 'A Coluna corresponde a senha para acesso a plataforma.',
  `STATUS` varchar(10) NOT NULL COMMENT 'A coluna corresponde ao armazenamento do status de login, que podem ser:\nLogado\n\n',
  `PERFIL` varchar(50) NOT NULL COMMENT 'Esta coluna armazena o perfil que será logado: Professor.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `LOGIN`
--

INSERT INTO `LOGIN` (`PRONTUARIO`, `SENHA`, `STATUS`, `PERFIL`) VALUES
('1234567', 'admin', 'online', 'professor'),
('1641417', 'admin', 'online', 'professor'),
('1641883', 'admin', 'online', 'professor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `RELATO`
--

CREATE TABLE IF NOT EXISTS `RELATO` (
`ID_RELATO` bigint(20) unsigned NOT NULL,
  `PRONTUARIO_ALUNO` varchar(7) DEFAULT NULL,
  `PRONTUARIO_FUNCIONARIO` varchar(7) DEFAULT NULL,
  `MENSAGEM` varchar(5000) DEFAULT NULL,
  `AREA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_busca_mobile`
--
CREATE TABLE IF NOT EXISTS `v_busca_mobile` (
`PRONTUARIO` char(7)
,`N_A` varchar(50)
,`N_C` varchar(50)
,`DATA_CADASTRO` datetime
,`NIVEL` varchar(45)
);
-- --------------------------------------------------------

--
-- Structure for view `v_busca_mobile`
--
DROP TABLE IF EXISTS `v_busca_mobile`;

CREATE ALGORITHM=UNDEFINED DEFINER=`mobile`@`localhost` SQL SECURITY DEFINER VIEW `v_busca_mobile` AS select `A`.`PRONTUARIO` AS `PRONTUARIO`,`A`.`NOME` AS `N_A`,`C`.`NOME` AS `N_C`,`A`.`DATA_CADASTRO` AS `DATA_CADASTRO`,`C`.`NIVEL` AS `NIVEL` from (`ALUNO` `A` join `CURSO` `C`) where ((`A`.`PRONTUARIO` = `A`.`PRONTUARIO`) and (`C`.`ID_CURSO` = `A`.`ID_CURSO`));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ALUNO`
--
ALTER TABLE `ALUNO`
 ADD PRIMARY KEY (`PRONTUARIO`), ADD KEY `fk_ALUNO_CURSO1_idx` (`ID_CURSO`);

--
-- Indexes for table `CURSO`
--
ALTER TABLE `CURSO`
 ADD PRIMARY KEY (`ID_CURSO`);

--
-- Indexes for table `RELATO`
--
ALTER TABLE `RELATO`
 ADD PRIMARY KEY (`ID_RELATO`), ADD UNIQUE KEY `ID_RELATO` (`ID_RELATO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CURSO`
--
ALTER TABLE `CURSO`
MODIFY `ID_CURSO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'A Coluna corresponde ao codigo criado para ser a chave primaria (PK).',AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `RELATO`
--
ALTER TABLE `RELATO`
MODIFY `ID_RELATO` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
