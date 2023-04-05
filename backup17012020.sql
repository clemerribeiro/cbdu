-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jan-2020 às 21:53
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cbdu`
--
CREATE DATABASE IF NOT EXISTS `cbdu` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cbdu`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cotacao_hospedagem`
--

CREATE TABLE `cotacao_hospedagem` (
  `id_cotacao` int(11) NOT NULL,
  `id_requisicao` int(11) NOT NULL,
  `observacao` varchar(150) NOT NULL,
  `anexo_cotacao` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cotacao_hospedagem`
--

INSERT INTO `cotacao_hospedagem` (`id_cotacao`, `id_requisicao`, `observacao`, `anexo_cotacao`) VALUES
(2, 27, '', ''),
(8, 28, '', ''),
(9, 28, '', ''),
(149, 28, '', ''),
(150, 0, '', ''),
(151, 28, '', ''),
(152, 28, '', ''),
(153, 28, '', ''),
(154, 0, '', ''),
(155, 28, '', ''),
(156, 0, '', ''),
(157, 27, '', ''),
(158, 0, '', ''),
(159, 28, '', ''),
(160, 28, '', ''),
(161, 0, '', ''),
(162, 28, 'abc123', ''),
(221, 28, '', ''),
(242, 28, 'asdasdasd', ''),
(253, 26, 'abcdsert', ''),
(260, 28, 'asdcaddq', ''),
(261, 28, 'adawdqw', ''),
(262, 28, 'jjkhk', 0x696d6167656d2f),
(263, 28, 'ewfwfwefewf', 0x696d6167656d2f),
(264, 28, 'THTTHT', 0x696d6167656d2f),
(265, 28, 'GRRGRG', 0x696d6167656d2f),
(266, 28, 'RRRR', 0x696d6167656d2f),
(267, 28, 'rrrre', 0x696d6167656d2f),
(268, 28, 'gfhf', ''),
(269, 28, 'hyhyt', ''),
(270, 28, 'ii', ''),
(271, 28, 'rtff', 0x696d6167656d2f),
(272, 28, 'jkjj', 0x696d6167656d2f),
(273, 28, 'jjkjk', 0x696d6167656d2f),
(274, 28, 'xxcffer', 0x696d6167656d2f),
(275, 28, 'yjuyyyy', 0x696d6167656d2f),
(276, 28, 'hhhhh', 0x696d6167656d2f),
(277, 28, 'ggggg', 0x696d6167656d2f),
(278, 28, 'ggbggb', 0x696d6167656d2f),
(279, 28, 'fffrfv', 0x696d6167656d2f),
(280, 28, 'deddede', ''),
(281, 28, 'ddsddds', ''),
(282, 28, 'tr5trtttgtg', ''),
(283, 28, 'oloçlool', ''),
(284, 28, 'ssssa', ''),
(285, 28, 'ssssa', ''),
(286, 28, 'eeacc', ''),
(287, 28, 'ddd', ''),
(288, 28, 'y6y66yhyhyh', ''),
(289, 28, 'vggbgb', ''),
(290, 28, 'yyhtt', ''),
(291, 28, 'jlkhiu', ''),
(292, 28, 'fdffddf', ''),
(293, 28, 'jmjmjm', ''),
(294, 28, 'kkjkjk', ''),
(295, 28, 'grrg', ''),
(296, 27, 'ssasax', ''),
(297, 28, 'ffffdfd', ''),
(298, 24, 'ddddd', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emissao`
--

CREATE TABLE `emissao` (
  `id_emissao` int(11) NOT NULL,
  `anexo_emissao` longblob NOT NULL,
  `requisicao_id_requisicao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

CREATE TABLE `orcamento` (
  `id_orcamento` int(11) NOT NULL,
  `valor_pessoa` int(11) NOT NULL,
  `valor_adiantamento` int(11) NOT NULL,
  `valor_total` int(11) NOT NULL,
  `valor_refeicao` int(11) NOT NULL,
  `qtd_refeicao` int(11) NOT NULL,
  `cotacao_id_cotacao` int(11) NOT NULL,
  `requisicao_id_requisicao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `requisicao_hospedagem`
--

CREATE TABLE `requisicao_hospedagem` (
  `id_requisicao` int(11) NOT NULL,
  `nome_hospede` varchar(50) NOT NULL,
  `cpf_hospede` varchar(16) NOT NULL,
  `email_hospede` varchar(45) NOT NULL,
  `status_requisicao` varchar(20) NOT NULL,
  `telefone_hospede` varchar(45) NOT NULL,
  `data_requisicao` date NOT NULL,
  `motivo_hospedagem` varchar(150) NOT NULL,
  `destino` varchar(45) NOT NULL,
  `hotel` varchar(45) NOT NULL,
  `data_chegada` date NOT NULL,
  `data_saida` date NOT NULL,
  `qtd_apto` int(3) NOT NULL,
  `tipo_acomodacao` varchar(45) NOT NULL,
  `info_add` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `requisicao_hospedagem`
--

INSERT INTO `requisicao_hospedagem` (`id_requisicao`, `nome_hospede`, `cpf_hospede`, `email_hospede`, `status_requisicao`, `telefone_hospede`, `data_requisicao`, `motivo_hospedagem`, `destino`, `hotel`, `data_chegada`, `data_saida`, `qtd_apto`, `tipo_acomodacao`, `info_add`) VALUES
(1, 'Clemer Ribeiro', '2147483647', 'clemerribeiro13@gmail.com', '', '61992783982', '2019-12-26', 'teste', 'brasilia', 'windsor', '2019-12-27', '2019-12-31', 3, 'single', 'teste'),
(2, 'Joao', '654654564', 'cksdnkn@chsd.com.br', '', '3234156', '2019-12-26', 'teste2', 'bahia', 'xskk', '2019-12-27', '2019-12-30', 2, 'dcsdcd', 'test2'),
(9, 'Clemer Ribeiro Fraga', '65414.65464', 'clemer13cleminho@gmail.com', '', '61992783980', '2019-12-28', '', 'brasilisa', '', '0000-00-00', '0000-00-00', 0, '', ''),
(24, 'Joana', '00000000', 'joaondad@gmail.com', 'Aguardando Orçamento', '54654654', '2020-01-05', 'dsfffsdf', 'dfvsdf', 'sdfsdfsd', '2020-01-06', '2020-01-08', 3, 'azxcasd', 'saasfdsadfs'),
(25, 'Joana', '00000000', 'joaondad@gmail.com', 'Aguardando Orçamento', '54654654', '2020-01-05', 'dsfffsdf', 'dfvsdf', 'sdfsdfsd', '2020-01-06', '2020-01-08', 3, 'azxcasd', 'saasfdsadfs'),
(26, 'Joana', '00000000', 'joaondad@gmail.com', 'Aguardando Orçamento', '54654654', '2020-01-05', 'dsfffsdf', 'dfvsdf', 'sdfsdfsd', '2020-01-06', '2020-01-08', 3, 'azxcasd', 'saasfdsadfs'),
(27, 'Joana', '00000000', 'joaondad@gmail.com', 'Aguardando Orçamento', '54654654', '2020-01-05', 'dsfffsdf', 'dfvsdf', 'sdfsdfsd', '2020-01-06', '2020-01-08', 3, 'azxcasd', 'saasfdsadfs'),
(28, 'José Ribeiro', '0000000000', 'clemerribeiro13@gmail.com', 'Aguardando Orçamento', '31564654654', '2020-01-09', 'n gcfxb', 'Brasilia', 'Windsor', '2020-01-10', '2020-01-16', 3, 'single', 'gndfng');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(45) NOT NULL,
  `cpf_usuario` int(14) NOT NULL,
  `perfil_usuario` varchar(45) NOT NULL,
  `email_usuario` varchar(30) NOT NULL,
  `senha_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `cpf_usuario`, `perfil_usuario`, `email_usuario`, `senha_usuario`) VALUES
(1, 'Clemer ribeiro', 706565464, 'Administrador', 'clemerribeiro13@gmail.com', '123456'),
(3, 'teste', 64654464, '', 'teste@teste.com.br', 'teste'),
(9, 'Administrador do Sistema', 0, 'Administrador', 'admin@gmail.com', 'aaaa'),
(10, 'Solicitante do Sistema', 0, 'Solicitante', 'solicitante@gmail.com', 'aaaaa'),
(11, 'Autorizador do Sistema', 0, 'Autorizador', 'autorizador@gmail.com', 'aaaaaaaaa'),
(12, 'jose faansaklfb', 2564564, 'Solicitante', 'ariana@gmail.com', '12345'),
(13, 'Ana Flabvia', 456465465, 'Solicitante', 'Ana@gmail.com', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cotacao_hospedagem`
--
ALTER TABLE `cotacao_hospedagem`
  ADD PRIMARY KEY (`id_cotacao`),
  ADD KEY `fk_cotacao_requisicao1_idx` (`id_requisicao`);

--
-- Índices para tabela `emissao`
--
ALTER TABLE `emissao`
  ADD PRIMARY KEY (`id_emissao`),
  ADD KEY `fk_emisao_requisicao1_idx` (`requisicao_id_requisicao`);

--
-- Índices para tabela `orcamento`
--
ALTER TABLE `orcamento`
  ADD PRIMARY KEY (`id_orcamento`),
  ADD KEY `fk_orcamento_cotacao1_idx` (`cotacao_id_cotacao`),
  ADD KEY `fk_orcamento_requisicao1_idx` (`requisicao_id_requisicao`);

--
-- Índices para tabela `requisicao_hospedagem`
--
ALTER TABLE `requisicao_hospedagem`
  ADD PRIMARY KEY (`id_requisicao`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cotacao_hospedagem`
--
ALTER TABLE `cotacao_hospedagem`
  MODIFY `id_cotacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- AUTO_INCREMENT de tabela `emissao`
--
ALTER TABLE `emissao`
  MODIFY `id_emissao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `orcamento`
--
ALTER TABLE `orcamento`
  MODIFY `id_orcamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `requisicao_hospedagem`
--
ALTER TABLE `requisicao_hospedagem`
  MODIFY `id_requisicao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `emissao`
--
ALTER TABLE `emissao`
  ADD CONSTRAINT `fk_emisao_requisicao1` FOREIGN KEY (`requisicao_id_requisicao`) REFERENCES `requisicao_hospedagem` (`id_requisicao`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `orcamento`
--
ALTER TABLE `orcamento`
  ADD CONSTRAINT `fk_orcamento_cotacao1` FOREIGN KEY (`cotacao_id_cotacao`) REFERENCES `cotacao_hospedagem` (`id_cotacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orcamento_requisicao1` FOREIGN KEY (`requisicao_id_requisicao`) REFERENCES `requisicao_hospedagem` (`id_requisicao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `orcamento_ibfk_1` FOREIGN KEY (`id_orcamento`) REFERENCES `emissao` (`id_emissao`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
