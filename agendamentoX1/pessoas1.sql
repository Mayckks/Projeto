-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/05/2025 às 19:48
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `empresa`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pessoas1`
--

CREATE TABLE `pessoas1` (
  `cod_pessoa` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pessoas1`
--

INSERT INTO `pessoas1` (`cod_pessoa`, `nome`, `telefone`, `email`, `senha`) VALUES
(3, 'David Lucas Veloso Mendes', '38 9 95638995', 'davidlucas@gmail.com', '987654321'),
(5, 'teste', '123456789', 'teste@gmai.com', '123456789'),
(7, 'Lucas Martins de Lima', '38997386673', 'thelucastv2@gmail.com', '225522'),
(8, 'Rayssa Fernanda Silva Amaral', '38999505682', 'rayssafernanda.rfsa794@gmail.com', '12345678'),
(9, 'Gabryele Oliveira Araújo', '389973335699', 'gabryeleoaraujo@gmail.com', '123456'),
(10, 'João Vitor Kay pinto', '38988066135', 'jvvitorbeypass@gmail.com', '34405783');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pessoas1`
--
ALTER TABLE `pessoas1`
  ADD PRIMARY KEY (`cod_pessoa`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pessoas1`
--
ALTER TABLE `pessoas1`
  MODIFY `cod_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
