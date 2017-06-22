-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31-Maio-2017 às 11:43
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `criatorio_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `passaros`
--

CREATE TABLE `passaros` (
  `ci` int(11) NOT NULL,
  `gefau` varchar(10) NOT NULL,
  `dt_nascto` varchar(30) NOT NULL,
  `especie` varchar(100) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `coloracao` varchar(50) NOT NULL,
  `pai` varchar(30) NOT NULL,
  `mae` varchar(30) NOT NULL,
  `anilha` varchar(100) NOT NULL,
  `microchip` varchar(100) NOT NULL,
  `dt_ident` varchar(30) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nf` varchar(10) NOT NULL,
  `nome_comprador` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` varchar(3) NOT NULL,
  `cpf` varchar(30) NOT NULL,
  `rg` varchar(30) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `email` varchar(80) NOT NULL,
  `dt_venda` varchar(30) NOT NULL,
  `gta` varchar(20) NOT NULL,
  `valor` varchar(30) NOT NULL,
  `origem` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `passaros`
--

INSERT INTO `passaros` (`ci`, `gefau`, `dt_nascto`, `especie`, `sexo`, `coloracao`, `pai`, `mae`, `anilha`, `microchip`, `dt_ident`, `nome`, `nf`, `nome_comprador`, `endereco`, `bairro`, `cep`, `cidade`, `uf`, `cpf`, `rg`, `telefone`, `email`, `dt_venda`, `gta`, `valor`, `origem`) VALUES
(1, 'SF77147', '2014-12-13', 'Amazona aestiva', 'FÃªmea', 'Verde com amarelo', 'PET3291', 'PET3289', 'N/C', '950100000102495', '2015-01-10', 'Maddona', '20', 'Helson Silva Terra', 'Rua Monte Branco, 233', 'Tijuco Preto', '06730-000', 'V.G.Paulista', 'SP', '099.711.238-78', '22.151.098-9', '11 941211972', 'hterra@icloud.com', '2015-05-05', '0', '0', '0'),
(4, '554457', '2017-05-02', 'Tucano', 'Macho', 'Tucano', 'PET3291', 'PET3289', 'N/C', '950100000102495', '2017-05-03', 'Tuquinho', '20', 'Helson Silva Terra', 'Rua Monte Branco, 233', 'Tijuco Preto', '06730-000', 'V.G.Paulista', 'SP', '099.711.238-78', '22.151.098-9', '11941211972', 'hterra@icloud.com', '2017-05-30', '0', '0', '0'),
(10, 'SF77147', '2017-05-02', 'Tucano', 'S', 'Verde com amarelo', 'PET3291', 'PET3289', 'N/C', '950100000102495', '2017-05-17', 'Ligeiro', '20', 'Helson Silva Terra', 'Rua Monte Branco, 233', 'Tijuco Preto', '06730-000', 'V.G.Paulista', 'SP', '099.711.238-78', '22.151.098-9', '11941211972', 'hterra@icloud.com', '2017-05-24', '0', '0', 'V.G.Paulista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `telefone`, `email`, `login`, `senha`) VALUES
(4, 'JosÃ© Guilherme', '(11)23345654', 'screamo.sp@gmail.com', 'jgsorio', '031bde3d5400c43ccc42d5d10a9845a6');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id_venda` int(11) NOT NULL,
  `passaro` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id_venda`, `passaro`, `status`) VALUES
(1, 'arara', 'vendido'),
(2, 'arara macao', 'vendido'),
(3, 'periquito', 'vendido'),
(4, 'tucano', 'vendido'),
(5, 'arara', 'vendido');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passaros`
--
ALTER TABLE `passaros`
  ADD PRIMARY KEY (`ci`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id_venda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
