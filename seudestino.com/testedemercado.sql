-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: ********
-- Versão do servidor: 10.1.21-MariaDB
-- Versão do PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `testedemercado`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `destino`
--

CREATE TABLE `destino` (
  `id` int(11) NOT NULL,
  `destino` varchar(255) CHARACTER SET utf16 NOT NULL,
  `diarias` int(11) NOT NULL,
  `data_entrada` date NOT NULL,
  `data_saida` date NOT NULL,
  `tipoTransporte` varchar(255) NOT NULL,
  `translado` char(1) NOT NULL,
  `hospedagem` varchar(255) NOT NULL,
  `custo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `destino`
--

INSERT INTO `destino` (`id`, `destino`, `diarias`, `data_entrada`, `data_saida`, `tipoTransporte`, `translado`, `hospedagem`, `custo`) VALUES
(1, 'HAVAI', 0, '2017-06-12', '2018-06-24', 'NAVE', 'o', '5 Estrelas', '100'),
(2, 'PARIS', 0, '2017-02-12', '2018-12-23', 'NAVIO', 'o', '3 Estrelas', '100');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `data_nascimento` date NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` varchar(18) NOT NULL,
  `rg` int(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`id`, `foto`, `nome`, `sobrenome`, `data_nascimento`, `endereco`, `telefone`, `rg`, `cpf`, `login`, `senha`) VALUES
(50, 'images/9d30007408aa70e65030d7d50d720c44.jpg', 'Luciano', 'Barros', '1989-08-24', 'Rua C. Severino', '083987735701', 123123, 2147483647, 'admin', '123');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `destino`
--
ALTER TABLE `destino`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `destino`
--
ALTER TABLE `destino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;