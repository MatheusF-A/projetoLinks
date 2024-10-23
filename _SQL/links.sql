-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/10/2024 às 23:34
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `urlfatec`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `links`
--

CREATE TABLE `links` (
  `idURL` int(11) NOT NULL,
  `link` text NOT NULL,
  `descricaoURL` text NOT NULL,
  `foto` varchar(200) NOT NULL,
  `categoriaURL` varchar(50) NOT NULL,
  `dataCadastroURL` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `links`
--

INSERT INTO `links` (`idURL`, `link`, `descricaoURL`, `foto`, `categoriaURL`, `dataCadastroURL`) VALUES
(1, 'https://www.google.com.br/', 'Mecanismo de Pesquisa - Google', '64341079767127c8503c92-baixados.png', 'Buscador', '2024-10-18'),
(2, 'https://www.youtube.com/', 'Ver vídeos', '92983392467127cd55f8b4-360_F_474059464_qldYuzxaUWEwNTtYBJ44VN89ARuFktHW.jpg', 'Entretenimento', '2024-10-18'),
(3, 'http://www.fatecaracatuba.edu.br/', 'Site da Fatec Araçatuba', '23296845367127d39823e6-fatec.jpg', 'Educação', '2024-10-18'),
(4, 'https://siga.cps.sp.gov.br/', 'Sistema Acadêmico', '174354232667127daf98c0b-Captura de tela 2024-10-18 122405.png', 'Educação', '2024-10-18'),
(5, 'https://teams.microsoft.com/v2/', 'Pior plataforma de Todas', '99866444267127e09ad8d9-baixados (1).png', 'Educação', '2024-10-18'),
(6, 'https://music.youtube.com/', 'Melhor serviço de streaming de músicas', '2006503763671280bd7fd7f-opgoojki.png', 'Entretenimento', '2024-10-18'),
(8, 'https://drive.google.com/', 'Armazenamento em Nuvem do Google', '131445322671414c335ae6-images.png', 'Armazenamento', '2024-10-19'),
(9, 'https://store.steampowered.com/?l=portuguese', 'Plataforma de distribuição de jogos digitais', '84450923867141cf0bbd12-Steam_icon_logo.svg.png', 'Jogos', '2024-10-19'),
(10, 'https://github.com/MatheusF-A', 'Meu Perfil no GITHUB', '8483258196716e9695ed99-25231.png', 'Trabalho', '2024-10-21');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`idURL`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `links`
--
ALTER TABLE `links`
  MODIFY `idURL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
