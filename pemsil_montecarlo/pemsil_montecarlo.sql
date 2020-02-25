-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.3.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for pemsil_montecarlo
CREATE DATABASE IF NOT EXISTS `pemsil_montecarlo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pemsil_montecarlo`;

-- Dumping structure for table pemsil_montecarlo.pemsil_tabel
CREATE TABLE IF NOT EXISTS `pemsil_tabel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `minggu` int(11) NOT NULL DEFAULT 0,
  `frekuensi` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table pemsil_montecarlo.pemsil_tabel: ~0 rows (approximately)
DELETE FROM `pemsil_tabel`;
/*!40000 ALTER TABLE `pemsil_tabel` DISABLE KEYS */;
INSERT INTO `pemsil_tabel` (`id`, `minggu`, `frekuensi`) VALUES
	(1, 1, 123),
	(2, 2, 321);
/*!40000 ALTER TABLE `pemsil_tabel` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
