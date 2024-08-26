-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.27-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para forsakendogs
CREATE DATABASE IF NOT EXISTS `forsakendogs` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `forsakendogs`;

-- Copiando estrutura para tabela forsakendogs.detalhe_venda
CREATE TABLE IF NOT EXISTS `detalhe_venda` (
  `fk_venda_id` int(11) NOT NULL,
  `fk_produto_id` int(11) NOT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`fk_venda_id`,`fk_produto_id`) USING BTREE,
  KEY `FK_detalhe_venda_produto` (`fk_produto_id`),
  CONSTRAINT `FK_detalhe_venda_produto` FOREIGN KEY (`fk_produto_id`) REFERENCES `produto` (`id`),
  CONSTRAINT `FK_detalhe_venda_venda` FOREIGN KEY (`fk_venda_id`) REFERENCES `venda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela forsakendogs.detalhe_venda: ~8 rows (aproximadamente)
INSERT INTO `detalhe_venda` (`fk_venda_id`, `fk_produto_id`, `valor`) VALUES
	(1, 4, 400.00),
	(2, 1, 400.00),
	(3, 2, 400.00),
	(4, 2, 400.00),
	(5, 2, 400.00),
	(6, 4, 400.00),
	(7, 1, 400.00),
	(8, 1, 400.00);

-- Copiando estrutura para tabela forsakendogs.produto
CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bairro` varchar(60) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `foto` text DEFAULT '',
  `descricao` text DEFAULT NULL,
  `tipo` char(1) DEFAULT NULL COMMENT 'A-Alimentador | R-Ração',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela forsakendogs.produto: ~3 rows (aproximadamente)
INSERT INTO `produto` (`id`, `bairro`, `valor`, `foto`, `descricao`, `tipo`) VALUES
	(1, 'Jardim das Rosas', 400.00, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d923.5636187693464!2d-46.757963371468435!3d-22.192433398730003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c9ade5f7120897%3A0xa0b0dd96d589ea1!2sPizzaria%20Fratello!5e0!3m2!1spt-BR!2sbr!4v1692484820171!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', NULL, 'A'),
	(2, 'Jardim das Flores', 400.00, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3694.3911479089275!2d-46.737683849999996!3d-22.18723665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c9ae120e4ff69f%3A0x8074e820cb4b9ae4!2sJardim%20das%20Flores%2C%20Esp%C3%ADrito%20Santo%20do%20Pinhal%20-%20SP%2C%2013990-000!5e0!3m2!1spt-BR!2sbr!4v1700774569385!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>\n', NULL, 'A'),
	(4, 'Jardim Helio Vergueiro Leite', 400.00, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d461.7797096631046!2d-46.75209722417552!3d-22.193072025334597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c9ade121984137%3A0x8968f8141b5817e!2sAuto%20Mec%C3%A2nica%20Global!5e0!3m2!1spt-BR!2sbr!4v1692484890614!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', NULL, 'A');

-- Copiando estrutura para tabela forsakendogs.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_razao` varchar(100) NOT NULL DEFAULT '',
  `nivel` char(1) DEFAULT 'U',
  `nome_fantasia` varchar(60) DEFAULT NULL,
  `email` varchar(60) NOT NULL DEFAULT '',
  `senha` varchar(128) NOT NULL DEFAULT '',
  `telefone` varchar(20) DEFAULT '',
  `cpf_cnpj` varchar(14) DEFAULT NULL,
  `endereco` varchar(60) DEFAULT NULL,
  `cidade` varchar(60) DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `divulgar` char(1) NOT NULL DEFAULT 'S',
  `ativo` char(1) NOT NULL DEFAULT 'S',
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `descricao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela forsakendogs.usuario: ~6 rows (aproximadamente)
INSERT INTO `usuario` (`id`, `nome_razao`, `nivel`, `nome_fantasia`, `email`, `senha`, `telefone`, `cpf_cnpj`, `endereco`, `cidade`, `logo`, `divulgar`, `ativo`, `data`, `descricao`) VALUES
	(2, 'Vinicius', 'A', NULL, 'admin@admin', '123', '', '000-000-000-00', NULL, NULL, NULL, 'N', 'S', '2023-06-28 00:00:00', ''),
	(6, 'Eduardo Koetz', 'P', 'ADV BOX', 'relacionamento@advbox.com.br', '123', '', '30.750.260/000', 'Square Corporate Center - SC 401, 50015, Sala 226', 'Florianópolis/SC', 'advbox-logo.svg', 'S', 'S', '2023-11-20 15:48:07', 'Software Jurídico ADVBOX é o mais completo do mercado. É um programa especializado na gestão de tarefas, pessoas e processos integrados com tribunais.'),
	(7, 'Ygor Combi', 'P', 'Studio Modus', 'contato@studiomodus.com.br', '123', '53 99990-2079', '32.242.942/000', NULL, 'Poços de Caldas - MG', 'modus.svg', 'S', 'S', '2023-11-20 15:52:26', 'Mostre a credibilidade do seu escritório com uma identidade visual feita sob medida'),
	(8, 'Eduardo Koetz', 'P', 'Koetz Advocacia', 'eduardo@koetzadvocacia.com.br', '123', '35 9 9483-3894', '32.928.986/000', NULL, NULL, 'logo-koetz.svg', 'S', 'S', '2023-11-20 15:56:28', 'SOLUÇÕES SIMPLES E INTELIGENTES PARA QUESTÕES COMPLEXAS.'),
	(9, 'Harturo Bessa', 'P', 'Harturo Bessa', 'contato@harturobessa.com.br', '123', '(85) 98711-6562', '00000000000000', NULL, NULL, 'harturo-bessa.svg', 'S', 'S', '2023-11-22 17:51:05', 'palestrante juridico'),
	(11, 'Vinicius Lucio', 'U', NULL, 'vinicius@gmail.com', '123', '', '44636994876', NULL, NULL, NULL, 'S', 'S', '2023-11-23 18:04:47', '');

-- Copiando estrutura para tabela forsakendogs.venda
CREATE TABLE IF NOT EXISTS `venda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_usuario_id` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE,
  KEY `FK_venda_usuario` (`fk_usuario_id`),
  CONSTRAINT `FK_venda_usuario` FOREIGN KEY (`fk_usuario_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='venda';

-- Copiando dados para a tabela forsakendogs.venda: ~8 rows (aproximadamente)
INSERT INTO `venda` (`id`, `fk_usuario_id`, `data`) VALUES
	(1, 7, '2023-11-22 21:22:59'),
	(2, 7, '2023-10-22 21:23:57'),
	(3, 6, '2023-10-22 21:24:53'),
	(4, 7, '2023-09-22 21:24:43'),
	(5, 6, '2023-11-22 21:21:36'),
	(6, 9, '2023-11-22 21:25:52'),
	(7, 8, '2023-05-10 00:00:00'),
	(8, 8, '2023-09-10 00:00:00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
