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
-- Dumping structure for table wmc_suro.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `permisos` int(11) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;



-- La exportación de datos fue deseleccionada.

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
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Tabla de marcas listado de marcas para clientes y o usuarios';

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla wmc_suro.nom035
CREATE TABLE IF NOT EXISTS `nom035` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `centro` varchar(50) DEFAULT NULL,
  `mes` varchar(50) DEFAULT NULL,
  `anio` varchar(50) DEFAULT NULL,
  `gr1` varchar(200) DEFAULT NULL,
  `gr3` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla wmc_suro.pagos_provisionales
CREATE TABLE IF NOT EXISTS `pagos_provisionales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `periodo` int(11) DEFAULT NULL,
  `anio` int(11) DEFAULT NULL,
  `pago_provisional` varchar(255) DEFAULT NULL,
  `cumplimiento_oficial` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla wmc_suro.recibos_nomina
CREATE TABLE IF NOT EXISTS `recibos_nomina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nss` varchar(50) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `centro` varchar(100) DEFAULT NULL,
  `tienda` varchar(100) DEFAULT NULL,
  `recibo` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla wmc_suro.sua
CREATE TABLE IF NOT EXISTS `sua` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomes` int(11) DEFAULT NULL,
  `mes` varchar(50) DEFAULT NULL,
  `anio` int(11) DEFAULT NULL,
  `ced_det_cuota` varchar(255) DEFAULT NULL,
  `resumen_liquidacion` varchar(255) DEFAULT NULL,
  `pago_sua` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='SUA TABLE';

-- La exportación de datos fue deseleccionada.

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

-- La exportación de datos fue deseleccionada.
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

-- La exportación de datos fue deseleccionada.
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
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
