-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Jul-2021 às 18:56
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tp_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_`
--

CREATE TABLE `user_` (
  `id` int(11) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password_` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user_`
--

INSERT INTO `user_` (`id`, `first_name`, `last_name`, `email`, `login`, `password_`) VALUES
(1, 'usuario', 'teste', 'teste@teste.com', 'login_teste', '12356'),
(2, 'usuario2', 'teste2', 'teste2@teste.com', 'login_teste2', '123456'),
(3, 'usuario3', 'teste3', 'teste3@teste.com', 'login_teste3', '123456'),
(4, 'usuario4', 'teste4', 'teste4@teste.com', 'login_teste4', '123456'),
(5, 'usuario5', 'teste5', 'teste5@teste.com', 'login_teste5', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `user_`
--
ALTER TABLE `user_`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `user_`
--
ALTER TABLE `user_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
