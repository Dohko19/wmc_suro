-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para wmc_suro
CREATE DATABASE IF NOT EXISTS `wmc_suro` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `wmc_suro`;

-- Volcando estructura para tabla wmc_suro.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `nss` varchar(20) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `sucursal_id` int(11) DEFAULT NULL,
  `marca_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `FK_clientes_marca` (`marca_id`),
  KEY `FK_clientes_sucursal` (`sucursal_id`),
  CONSTRAINT `FK_clientes_marca` FOREIGN KEY (`marca_id`) REFERENCES `marca` (`id`),
  CONSTRAINT `FK_clientes_sucursal` FOREIGN KEY (`sucursal_id`) REFERENCES `sucursal` (`id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 COMMENT='Clientes tabla no puedes acceder al wmc, solo mostraran sus datos de quien sea :V';

-- Volcando datos para la tabla wmc_suro.clientes: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
REPLACE INTO `clientes` (`id`, `nombre`, `nss`, `user_id`, `sucursal_id`, `marca_id`, `created_at`) VALUES
	(1, 'Prueba', '74238910252', 1, 1, 1, NULL),
	(17, 'cdf', 'sd', 1, 1, 1, '2020-05-08 11:06:40'),
	(18, 'ajkdsjakjs', '3456789', 1, 1, 1, '2020-05-08 12:06:06');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Volcando estructura para tabla wmc_suro.emaeva
CREATE TABLE IF NOT EXISTS `emaeva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mes` varchar(50) NOT NULL DEFAULT '0',
  `anio` varchar(50) NOT NULL DEFAULT '0',
  `smgv` varchar(50) NOT NULL DEFAULT '0',
  `uma` varchar(50) NOT NULL DEFAULT '0',
  `cotizaciones` varchar(50) NOT NULL DEFAULT '0',
  `pdf` varchar(50) NOT NULL DEFAULT '0',
  `tipo` varchar(50) NOT NULL DEFAULT '0',
  `desde` varchar(50) NOT NULL DEFAULT '0',
  `hasta` varchar(50) NOT NULL DEFAULT '0',
  `cliente_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cliente_id` (`cliente_id`),
  CONSTRAINT `FK_emaeva_clientes` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='EVA y EMA reportes';

-- Volcando datos para la tabla wmc_suro.emaeva: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `emaeva` DISABLE KEYS */;
/*!40000 ALTER TABLE `emaeva` ENABLE KEYS */;

-- Volcando estructura para tabla wmc_suro.expediente_electronico
CREATE TABLE IF NOT EXISTS `expediente_electronico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `ap_paterno` varchar(50) DEFAULT NULL,
  `ap_materno` varchar(50) DEFAULT NULL,
  `centro` varchar(50) DEFAULT NULL,
  `nss` varchar(50) DEFAULT NULL,
  `calle` varchar(50) DEFAULT NULL,
  `numinterior` int(11) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `colonia` varchar(100) DEFAULT NULL,
  `delmun` varchar(100) DEFAULT NULL,
  `cp` int(11) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `expediente` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla wmc_suro.expediente_electronico: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `expediente_electronico` DISABLE KEYS */;
/*!40000 ALTER TABLE `expediente_electronico` ENABLE KEYS */;

-- Volcando estructura para tabla wmc_suro.marca
CREATE TABLE IF NOT EXISTS `marca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `descripcion` text,
  `created_at` varchar(50) DEFAULT NULL,
  `mes` varchar(50) DEFAULT NULL,
  `anio` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='Tabla de marcas listado de marcas para clientes y o usuarios';

-- Volcando datos para la tabla wmc_suro.marca: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `marca` DISABLE KEYS */;
REPLACE INTO `marca` (`id`, `nombre`, `imagen`, `descripcion`, `created_at`, `mes`, `anio`) VALUES
	(1, 'Marca', 'nada.jph', 'test de marca', '2020-05-08 11:06:09', '', ''),
	(2, 'adsasd', NULL, 'asdasd', '2020-05-08 14:04:16', '5', '5');
/*!40000 ALTER TABLE `marca` ENABLE KEYS */;

-- Volcando estructura para tabla wmc_suro.sucursal
CREATE TABLE IF NOT EXISTS `sucursal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL DEFAULT '0',
  `imagen` varchar(255) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `anio` varchar(50) DEFAULT '0',
  `mes` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='sucursalesss';

-- Volcando datos para la tabla wmc_suro.sucursal: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `sucursal` DISABLE KEYS */;
REPLACE INTO `sucursal` (`id`, `nombre`, `imagen`, `created_at`, `anio`, `mes`) VALUES
	(1, 'Suc 1', 'algo.png', '2020-05-08 11:27:12', '9', '9'),
	(2, 'asdsad', '0', '2020-05-08 15:35:03', '2020', '5'),
	(3, 'asdsad', '0', '2020-05-08 15:35:18', '2020', '5'),
	(4, 'asdasdq', '0', '2020-05-08 16:05:45', '2020', '5'),
	(5, 'asdasdq', '0', '2020-05-08 16:09:27', '2020', '5'),
	(6, 'asdasd', '0', '2020-05-08 16:25:34', '2020', '5');
/*!40000 ALTER TABLE `sucursal` ENABLE KEYS */;

-- Volcando estructura para tabla wmc_suro.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `permisos` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla wmc_suro.usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
REPLACE INTO `usuarios` (`id`, `nombre`, `username`, `password`, `avatar`, `permisos`, `created_at`) VALUES
	(1, 'Daniel', 'daniel.trejo', '2564f7b12d9d0583981820debea54242', NULL, 1, NULL),
	(7, 'asasd', 'asdads', 'a8f5f167f44f4964e6c998dee827110c', NULL, 1, NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
