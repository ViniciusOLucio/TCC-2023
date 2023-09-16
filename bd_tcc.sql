-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.27-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.3.0.6589
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
DROP DATABASE IF EXISTS `forsakendogs`;
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

-- Copiando dados para a tabela forsakendogs.detalhe_venda: ~6 rows (aproximadamente)
INSERT INTO `detalhe_venda` (`fk_venda_id`, `fk_produto_id`, `valor`) VALUES
	(1, 1, 360.00),
	(1, 2, 360.00),
	(2, 4, 400.00),
	(3, 1, 400.00),
	(4, 1, 360.00),
	(4, 2, 380.00);

-- Copiando estrutura para tabela forsakendogs.produto
CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bairro` varchar(60) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `foto` text DEFAULT '',
  `descricao` text DEFAULT NULL,
  `tipo` char(1) DEFAULT NULL COMMENT 'A-Alimentador | R-Ração',
  `pago` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela forsakendogs.produto: ~3 rows (aproximadamente)
INSERT INTO `produto` (`id`, `bairro`, `valor`, `foto`, `descricao`, `tipo`, `pago`) VALUES
	(1, 'Jardim das Rosas', 400.00, '<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d923.5729611218364!2d-46.756782417816645!3d-22.19101260613934!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1691721157366!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', NULL, 'A', 'S'),
	(2, 'Jardim das Flores', 400.00, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d923.5636187693464!2d-46.757963371468435!3d-22.192433398730003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c9ade5f7120897%3A0xa0b0dd96d589ea1!2sPizzaria%20Fratello!5e0!3m2!1spt-BR!2sbr!4v1692484820171!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', NULL, 'A', 'S'),
	(4, 'Jardim Helio Vergueiro Leite', 400.00, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d461.7797096631046!2d-46.75209722417552!3d-22.193072025334597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c9ade121984137%3A0x8968f8141b5817e!2sAuto%20Mec%C3%A2nica%20Global!5e0!3m2!1spt-BR!2sbr!4v1692484890614!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', NULL, 'A', 'N');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela forsakendogs.usuario: ~5 rows (aproximadamente)
INSERT INTO `usuario` (`id`, `nome_razao`, `nivel`, `nome_fantasia`, `email`, `senha`, `telefone`, `cpf_cnpj`, `endereco`, `cidade`, `logo`, `divulgar`, `ativo`, `data`, `descricao`) VALUES
	(1, 'Jose Eduardo', 'P', 'Pizzaria Fratello', 'fratello@gmail.com', '123', '(19) 9 9384-3063', '996-369-948-76', 'R. Dr. Pascoal Brando, 25 - Jardim das RosaJardim das Rosass', 'Espirito Santo do  Pinhal', 'fratelo.png', 'S', 'S', '2023-06-28 00:00:00', 'AS MELHORES PIZZAS DE PINHAL AJUDANDO OS CÃES'),
	(2, 'Vinicius', 'A', NULL, 'admin@admin', '123', '', '000-000-000-00', NULL, NULL, NULL, 'N', 'S', '2023-06-28 00:00:00', ''),
	(3, 'Kauane', 'A', NULL, 'kauane@kauane', '123', '', '000-000-000-01', NULL, NULL, NULL, 'N', 'P', '2023-06-28 00:00:00', ''),
	(4, 'Admilson', 'P', 'Vanila Ice', 'vanilaice@gmail.com', '123', '(19) 9 9494-0021', '86.273.483/000', 'R. Floriano Peixoto, 699 - Centro', 'Espírito Santo do Pinhal', 'vanilaice.jpeg', 'S', 'S', '2023-06-28 00:00:00', 'A SORVETERIA QUE VOCÊ AMA, AGORA AJUDANDO CÃES !!!!!'),
	(5, 'Marcos', 'U', NULL, '', '', '', NULL, NULL, NULL, NULL, 'S', 'S', '2023-09-12 10:54:50', '');

-- Copiando estrutura para tabela forsakendogs.venda
CREATE TABLE IF NOT EXISTS `venda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_usuario_id` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE,
  KEY `FK_venda_usuario` (`fk_usuario_id`),
  CONSTRAINT `FK_venda_usuario` FOREIGN KEY (`fk_usuario_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='venda';

-- Copiando dados para a tabela forsakendogs.venda: ~4 rows (aproximadamente)
INSERT INTO `venda` (`id`, `fk_usuario_id`, `data`) VALUES
	(1, 3, '2023-09-05 10:38:21'),
	(2, 1, '2023-09-06 10:38:29'),
	(3, 2, '2023-09-07 10:38:37'),
	(4, 4, '2023-09-12 10:38:43');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
