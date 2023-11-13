-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Nov-2023 às 15:19
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
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Gerente', 'gerente@gmail.com', '182997e33c7bab8ca989cd12b5a13fa1');

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
(9, 'Laura Pereira', 'laura@gmail.com', '934467206', 'a3590023df66ac92ae35e3316026d17d'),
(10, 'Lais da Silva Almeida', 'laisdasilva@gmail.com', '907742917', 'e8d0be155547ab127ee0a2d2a699e070'),
(11, 'Lucas de Oliveira', 'lucasdeoliveira@gmail.com', '943325618', 'a8698009bce6d1b8c2128eddefc25aad'),
(12, 'Leticia Almeida', 'leticiaalmeida@gmail.com', '908851324', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Estrutura da tabela `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `opnioes` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `nome`, `opnioes`) VALUES
(1, 'Lirio Rosa', 'ameiii');

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
(4, 'Orquidea Roxa', '17.00', 'orqu_dea_phalaenopsis_cachepo_papelao_lilas.jpg', 2),
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
(16, 'Chandon Baby Festa 187ml', '42.00', 'Shandon.webp', 5),
(17, 'Pêndulo de Girassol Encantato', '159.00', 'PÊNDULO DE GIRASSOL ENCANTADO.webp', 15),
(18, 'Buquê Partitura Girassol', '49.00', 'BUQUÊ PARTITURA GIRASSOL.webp', 7),
(19, 'Buquê de 4 Girassóis Te Adoro', '116.00', 'BUQUÊ DE 4 GIRASSÓIS TE ADORO.webp', 10),
(20, 'Buquê de Girassol Clássico', '290.00', 'BUQUÊ DE GIRASSÓIS CLÁSSICO.webp', 6),
(21, 'Floratta de Girassóis', '390.00', 'FLORATTA DE GIRASSÓIS.webp', 0),
(22, 'Girassol Plantado no Box Grafismo', '129.00', 'GIRASSOL PLANTADO NO BOX GRAFISMO.webp', 5),
(23, 'Surpresa de Girassol no Vaso', '169.00', 'SURPRESA DE GIRASSÓIS NO VASO.webp', 5),
(24, 'Girassol no Box, Você me faz Tão Bem', '155.00', 'GIRASSOL NO BOX VOCÊ ME FAZ TÃO BEM....webp', 10),
(25, 'Luxuoso Mix de Margaridas', '179.00', 'LUXUOSO MIX DE MARGARIDAS.webp', 7),
(26, 'Luxuoso Mix de Margaridas Coloridas', '269.00', 'LUXUOSO MIX DE MARGARIDAS COLORIDAS.webp', 10),
(27, 'Margaridas Brancas e Ferrero Rocher', '109.00', 'MARGARIDINHAS BRANCAS E FERRERO ROCHER.webp', 20),
(28, 'Linda Margaridinha Plantada', '79.00', 'LINDA MARGARIDINHA PLANTADA.webp', 20),
(29, 'Mini Vaso de Margaridinhas Plantadas', '80.00', 'MINI VASO DE MARGARIDINHAS PLANTADAS.webp', 10),
(30, 'Mini Margaridinhas Brancas com Emoji de Coraçãozinho', '69.00', 'MINI MARGARIDINHAS BRANCAS COM EMOJI.webp', 7),
(31, 'Margarida e Brigadeiros no Envelope', '161.00', 'MARGARIDINHAS E BRIGADEIROS NO ENVELOPE.webp', 0),
(32, 'Kit Margaridinhas Amarelas Happy Birthday', '159.00', 'KIT DE MARGARIDINHAS AMARELAS HAPPY BIRTHDAY.webp', 5),
(33, 'Buquê de 6 Rosas Vermelhas', '109.00', 'BUQUÊ DE 6 ROSAS VERMELHAS.webp', 12),
(34, 'Rosa no Envelope Love', '230.00', 'BUQUÊ DE 6 ROSAS VERMELHAS.webp', 15),
(35, 'Passione de Rosas Vermelhas', '298.00', 'PASSIONE DE ROSAS VERMELHAS.webp', 10),
(36, 'Caixa Premium Eu Te Amo', '64.00', 'CAIXA PREMIUM EU TE AMO.webp', 20),
(37, 'Poema de 24 Rosas Vermelhas', '399.00', 'POEMA DE 24 ROSAS VERMELHAS.webp', 12),
(38, 'Arranjo 3 Lindas Rosas Vermelhas', '139.00', 'ARRANJO 3 LINDAS ROSAS VERMELHAS.webp', 10),
(39, 'Sensacional Rosa Importada Vermelha', '44.00', 'SENSACIONAL ROSA IMPORTADA VERMELHA.webp', 30),
(40, 'Buquê Magnífico de Rosas Vermelhas', '179.00', 'BUQUÊ MAGNÍFICO DE ROSAS VERMELHAS.webp', 10),
(41, 'Supresa de Lírios Coloridos', '249.00', 'SURPRESA DE LÍRIOS COLORIDOS.webp', 10),
(42, 'Supresa de Lírios Brancos', '265.00', 'SURPRESA DE LÍRIOS BRANCOS.webp', 0),
(43, 'Luxuosos Lírios Cor-de-Rosa', '389.00', 'LUXUOSOS LÍRIOS COR-DE-ROSA.webp', 20),
(44, 'Lírios Brancos Plantado', '265.00', 'LÍRIO BRANCO PLANTADO.webp', 15),
(45, 'Cesta de Margaridas e Lírios Pink', '288.00', 'CESTA DE MARGARIDAS E LÍRIOS PINK.webp', 12),
(46, 'Jardim de Lírios Amarelos', '558.00', 'JARDIM DE LÍRIOS AMARELOS.webp', 10),
(47, 'Luxuosos Lírios Cor-de-Rosa', '389.00', 'LUXUOSOS LÍRIOS COR-DE-ROSA.webp', 15),
(48, 'Supresa de Lírios Brancos', '265.00', 'LÍRIO BRANCO PLANTADO.webp', 10),
(49, 'Mini Orquídea Rara e Lindt', '149.00', 'MINI ORQUÍDEA RARA E LINDT.webp', 10),
(50, 'Mini Orquídia chuva de Ouro', '89.00', 'MINI ORQUÍDEA CHUVA DE OURO.webp', 15),
(51, 'Mini Orquídea Rara Amarela', '99.00', 'MINI ORQUÍDEA RARA AMARELA.webp', 10),
(52, 'Mini Orquídea Rara Lilás', '99.00', 'MINI ORQUÍDEA RARA LILÁS.webp', 19),
(53, 'Lindas Phalaenopsis Pink', '398.00', 'LINDAS PHALAENOPSIS PINK.webp', 10),
(54, 'Glamurosas Orquidea Amarelas', '278.00', 'GLAMUROSAS ORQUÍDEAS AMARELAS.webp', 15),
(55, 'Orquídea Azul no BOX Azulejo', '334.00', 'ORQUÍDEA AZUL NO BOX AZULEJO.webp', 10),
(56, 'Orquídea Miltonia Plantada Branca', '99.00', 'ORQUÍDEA MILTONIA PLANTADA BRANCA.webp', 12),
(57, 'Sensacional Astromélia Vermelha', '49.00', 'SENSACIONAL ASTROMÉLIA VERMELHA.webp', 5),
(58, 'Arranjo Flores e Vida Amarelo', '218.00', 'ARRANJO FLORES E VIDA AMARELO.webp', 7),
(59, 'Expressão de Amor Premium', '329.00', 'EXPRESSÃO DE AMOR PREMIUM.webp', 15),
(60, 'Declaração de Sentimentos', '149.00', 'DECLARAÇÃO DE SENTIMENTOS.webp', 5),
(61, 'Luxuosas Astromélias Coloridas Happy Birthday', '259.00', 'LUXUOSAS ASTROMÉLIAS COLORIDAS HAPPY BIRTHDAY.webp', 10),
(62, 'Delicado Box de Astromélias e Rosas Brancas', '169.00', 'DELICADO BOX DE ASTROMÉLIAS E ROSAS BRANCAS.webp', 15),
(63, 'Buquê Império com Astromélia Cor de Rosa', '79.00', 'BUQUÊ IMPÉRIO COM ASTROMÉLIAS COR DE ROSA.webp', 15),
(64, 'Astromélias Coloridas no Box, Onde For Floresça', '159.00', 'ASTROMÉLIAS COLORIDAS NO BOX.webp', 10);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `feedbacks`
--
ALTER TABLE `feedbacks`
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
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
