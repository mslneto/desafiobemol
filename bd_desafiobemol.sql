-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Set-2020 às 02:23
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd_desafiobemol`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(150) COLLATE utf8_german2_ci NOT NULL,
  `NOME_COMPLETO` varchar(300) COLLATE utf8_german2_ci NOT NULL,
  `CPF` varchar(11) COLLATE utf8_german2_ci NOT NULL,
  `DATA_NASCIMENTO` date DEFAULT NULL,
  `SENHA` varchar(32) COLLATE utf8_german2_ci NOT NULL,
  `VIA_EMAIL` tinyint(1) DEFAULT NULL,
  `VIA_SMS` tinyint(1) DEFAULT NULL,
  `VIA_WHATSAPP` tinyint(1) DEFAULT NULL,
  `TELEFONE` varchar(15) COLLATE utf8_german2_ci DEFAULT NULL,
  `CEP` varchar(9) COLLATE utf8_german2_ci NOT NULL,
  `UF` varchar(3) COLLATE utf8_german2_ci NOT NULL,
  `CIDADE` varchar(100) COLLATE utf8_german2_ci NOT NULL,
  `BAIRRO` varchar(100) COLLATE utf8_german2_ci NOT NULL,
  `LOGRADOURO` varchar(100) COLLATE utf8_german2_ci NOT NULL,
  `NUMERO` varchar(10) COLLATE utf8_german2_ci NOT NULL,
  `COMPLEMENTO` varchar(300) COLLATE utf8_german2_ci DEFAULT NULL,
  `DATA_CADASTRO` date NOT NULL,
  `ULTIMO_ACESSO` timestamp NOT NULL,
  `STATUS` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `EMAIL`, `NOME_COMPLETO`, `CPF`, `DATA_NASCIMENTO`, `SENHA`, `VIA_EMAIL`, `VIA_SMS`, `VIA_WHATSAPP`, `TELEFONE`, `CEP`, `UF`, `CIDADE`, `BAIRRO`, `LOGRADOURO`, `NUMERO`, `COMPLEMENTO`, `DATA_CADASTRO`, `ULTIMO_ACESSO`, `STATUS`) VALUES
(1, 'mslneto@gmail.com', 'Manoel Sarmento Lima Neto', '98438077234', '1988-10-24', '60b80c15a41353d072d18b6abf56dd09', 1, 0, 1, '(92) 99198-3323', '69077-795', 'AM', 'Manaus', 'Japiim', 'Rua JosÃ© de Alencar', '4131', 'Res. AcÃ¡cias I - Bloco 9A, apto 202', '2020-09-28', '2020-09-29 00:23:00', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
