-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Out-2023 às 23:50
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `belomar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `telefone`, `senha`) VALUES
(1, 'Luana', 'luana@gmail.com', '920907639', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Joaozinho', 'joaozinho@gmail.com', '920907639', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'Mariazinha', 'maria@gmail.com', '987665443', 'd6dcb896498918d2f006564303fe0c14'),
(4, 'Pedrinho', 'Pedrinho@gmail.com', '978856309', 'd6057c640358036b890ac394c46abb46'),
(5, 'Paulinha', 'Paulinha@gmail.com', '235578903', 'fda7fec6250dd710c5c05aad10184e00'),
(6, 'Claudia da Silva', 'claudiadasilva@gmail.com', '936680216', '76d90b75c6cfb51ac5f82f265b06a6d7'),
(7, 'Paulo da Silva de Carvalho', 'paulodasilva@gmail.com', '388990467', 'd69fe70acfb29c30d1a8a7735bc53b58'),
(8, 'Claudineia da Silva', 'Claudineia@gmail.com', '258869478', 'c3b5da87d877b243ebc89e51e68b4ec2'),
(9, 'Laura Pereira', 'laura@gmail.com', '934467206', 'a3590023df66ac92ae35e3316026d17d');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `qtd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `imagem`, `qtd`) VALUES
(1, 'Combo com Vinho', '29.00', 'combo com vinho.jpg', 15),
(2, 'Combo de Três Flores', '20.00', 'bag.jpg', 20),
(3, 'Orquidea + Ferrero', '40.00', 'orquideaAzul.webp', 15),
(4, 'Orquidea Roxa', '17.00', 'orqu_dea_phalaenopsis_cachepo_papelao_lilas.jpg', 0),
(5, 'Buquê de Mix Love', '23.00', '30024gg.webp', 10),
(6, 'Buquê de Bombons', '43.00', 'rs-5328-20666-0.webp', 20),
(7, 'Buquê Girassois', '35.00', 'girassois.webp', 25),
(8, 'Buquê Primavera Lilas', '19.00', 'primavera.webp', 15),
(9, 'Girassois + Presente especial', '47.00', 'presente.webp', 0),
(10, 'Buquê Nobre - Flores do campo', '33.00', 'buque-nobre.webp', 5),
(11, 'Buquê com 6 Flores azuis', '24.00', 'buque-azul.webp', 12),
(12, 'Caixa com Rosas vermelhas', '27.00', 'caixa.webp', 10),
(13, 'A Bela Rosa vermelha encantada', '34.00', 'BelaFera.webp', 2),
(14, 'Cesta de Chocolate Bauducco', '35.00', 'Bauducco.webp', 7),
(15, 'Kit Giovanna Baby Blue', '43.00', 'Baby.webp', 5),
(16, 'Chandon Baby Festa 187ml', '42.00', 'Shandon.webp', 5);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
