-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 21-Jun-2021 às 23:45
-- Versão do servidor: 5.6.38
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Hotel`
--
CREATE DATABASE IF NOT EXISTS `Hotel` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Hotel`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Administrador`
--

CREATE TABLE `Administrador` (
  `id_administrador` int(11) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `login` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Checkin`
--

CREATE TABLE `Checkin` (
  `id_checkin` int(11) NOT NULL,
  `id_recepcionista_checkin` int(11) NOT NULL,
  `id_hospede_checkin` int(11) NOT NULL,
  `id_quarto` int(11) NOT NULL,
  `dia_registro` datetime NOT NULL,
  `fim_periodo` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Gerente`
--

CREATE TABLE `Gerente` (
  `id_gerente` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `endereco` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Hospede`
--

CREATE TABLE `Hospede` (
  `id_hospede` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `rg` varchar(15) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `horario` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Quarto`
--

CREATE TABLE `Quarto` (
  `id_quarto` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `tamanho_quarto` varchar(20) NOT NULL,
  `andar_quarto` varchar(20) NOT NULL,
  `numero_porta` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Recepcionista`
--

CREATE TABLE `Recepcionista` (
  `id_recepcionista` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `rg` varchar(15) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `horario` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `Administrador`
--
ALTER TABLE `Administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Índices para tabela `Checkin`
--
ALTER TABLE `Checkin`
  ADD PRIMARY KEY (`id_checkin`),
  ADD KEY `Checkin_id_recepcionista_checkin_Recepcionista_id_recepcionista` (`id_recepcionista_checkin`),
  ADD KEY `Checkin_id_hospede_checkin_Hospede_id_hospede` (`id_hospede_checkin`),
  ADD KEY `Checkin_id_quarto_Quarto_id_quarto` (`id_quarto`);

--
-- Índices para tabela `Gerente`
--
ALTER TABLE `Gerente`
  ADD PRIMARY KEY (`id_gerente`);

--
-- Índices para tabela `Hospede`
--
ALTER TABLE `Hospede`
  ADD PRIMARY KEY (`id_hospede`);

--
-- Índices para tabela `Quarto`
--
ALTER TABLE `Quarto`
  ADD PRIMARY KEY (`id_quarto`);

--
-- Índices para tabela `Recepcionista`
--
ALTER TABLE `Recepcionista`
  ADD PRIMARY KEY (`id_recepcionista`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Administrador`
--
ALTER TABLE `Administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `Checkin`
--
ALTER TABLE `Checkin`
  MODIFY `id_checkin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `Gerente`
--
ALTER TABLE `Gerente`
  MODIFY `id_gerente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `Hospede`
--
ALTER TABLE `Hospede`
  MODIFY `id_hospede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `Quarto`
--
ALTER TABLE `Quarto`
  MODIFY `id_quarto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `Recepcionista`
--
ALTER TABLE `Recepcionista`
  MODIFY `id_recepcionista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
