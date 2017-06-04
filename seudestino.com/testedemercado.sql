-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 04/06/2017 às 14:50
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
(2, 'HAVAI', 0, '2017-06-12', '2018-06-24', 'NAVE', 'o', '6 Estrelas', '123,00'),
(3, 'Paris', 0, '1999-02-12', '0012-12-23', 'NAVIO', '', '3 Estrelas', '131231'),
(4, 'HAVAI', 0, '2000-12-12', '2000-12-12', 'AVIAO', 'o', '1 Estrela', '123'),
(5, 'HAVAI', 0, '2000-12-12', '2000-12-12', 'AVIAO', 'o', '1 Estrela', ''),
(6, 'HAVAI', 0, '2000-12-12', '2000-12-12', 'AVIAO', 'o', '1 Estrela', ''),
(7, 'HAVAI', 0, '2000-12-12', '2000-12-12', 'AVIAO', 'o', '1 Estrela', ''),
(8, 'HAVAI', 0, '2000-12-12', '2000-12-12', 'AVIAO', 'o', '1 Estrela', ''),
(9, 'HAVAI', 0, '2000-12-12', '2000-12-12', 'AVIAO', 'o', '1 Estrela', ''),
(10, 'HAVAI', 0, '2000-12-12', '2000-12-12', 'AVIAO', 'o', '1 Estrela', ''),
(11, 'HAVAI', 0, '2000-12-12', '2000-12-12', 'AVIAO', 'o', '1 Estrela', ''),
(12, 'HAVAI', 0, '2000-12-12', '2000-12-12', 'AVIAO', 'o', '1 Estrela', ''),
(13, 'HAVAI', 0, '2000-12-12', '2000-12-12', 'AVIAO', 'o', '1 Estrela', ''),
(14, 'HAVAI', 0, '2000-12-12', '2000-12-12', 'AVIAO', 'o', '1 Estrela', ''),
(15, 'HAVAI', 0, '2000-12-12', '2000-12-12', 'AVIAO', 'o', '1 Estrela', ''),
(16, 'HAVAI', 0, '2000-12-12', '2000-12-12', 'AVIAO', 'o', '1 Estrela', ''),
(17, 'HAVAI', 0, '2000-12-12', '2000-12-12', 'AVIAO', 'o', '1 Estrela', ''),
(18, 'HAVAI', 0, '2000-12-12', '2000-12-12', 'AVIAO', 'o', '1 Estrela', ''),
(19, 'HAVAI', 0, '2000-12-12', '2000-12-12', 'AVIAO', 'o', '1 Estrela', ''),
(20, 'HAVAI', 0, '2000-12-12', '2000-12-12', 'AVIAO', 'o', '1 Estrela', ''),
(21, 'HAVAI', 0, '2000-12-12', '2000-12-12', 'AVIAO', 'o', '1 Estrela', ''),
(22, 'HAVAI', 0, '2000-12-12', '2000-12-12', 'AVIAO', 'o', '1 Estrela', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `foto_perfil`
--

CREATE TABLE `foto_perfil` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `conteudo` mediumblob NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `tamanho` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(46, 'opt/lampp/htdocs/teste-de-mercado/images/66bedf80ea969615c6943e888ddb3dd0.jpg', 'Plutao', 'Barros', '0000-00-00', 'rua', '083987735701', 0, 2147483647, 'mercurio', 'asd'),
(47, 'opt/lampp/htdocs/teste-de-mercado/images/db3a9a34cb830d06bf5cdd370be65659.jpg', '12312', '143bsdvhjmb', '1231-03-12', ',LQWKM', '12341232987', 0, 0, 'kjhbasd', 'jaskdnb');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `destino`
--
ALTER TABLE `destino`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `foto_perfil`
--
ALTER TABLE `foto_perfil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de tabela `foto_perfil`
--
ALTER TABLE `foto_perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `foto_perfil`
--
ALTER TABLE `foto_perfil`
  ADD CONSTRAINT `foto_perfil_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
