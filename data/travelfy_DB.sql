-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_travelfy
CREATE DATABASE IF NOT EXISTS `db_travelfy` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_travelfy`;

-- Dumping structure for table db_travelfy.addetto
CREATE TABLE IF NOT EXISTS `addetto` (
  `id_addetto` int(11) NOT NULL,
  `username` char(50) NOT NULL DEFAULT '',
  `nome` char(50) NOT NULL DEFAULT '',
  `cognome` char(50) NOT NULL DEFAULT '',
  `password` char(50) NOT NULL DEFAULT '',
  `email` char(50) NOT NULL DEFAULT '',
  `contatto_telefonico` int(11) DEFAULT 0,
  `comune_residenza` char(50) NOT NULL DEFAULT '0',
  `indirizzo` char(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_addetto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_travelfy.addetto: ~0 rows (approximately)

-- Dumping structure for table db_travelfy.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` varchar(50) NOT NULL DEFAULT '',
  `username` char(50) NOT NULL DEFAULT '',
  `nome` char(50) NOT NULL DEFAULT '',
  `cognome` char(50) NOT NULL DEFAULT '',
  `indirizzo` char(50) DEFAULT NULL,
  `comune_residenza` char(50) DEFAULT NULL,
  `contatto_telefonico` int(11) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_travelfy.cliente: ~5 rows (approximately)
REPLACE INTO `cliente` (`id_cliente`, `username`, `nome`, `cognome`, `indirizzo`, `comune_residenza`, `contatto_telefonico`, `password`) VALUES
	('A1', 'pippo', 'pippo', 'gio', NULL, NULL, NULL, NULL),
	('A2', 'Distix32', 'Distaso', 'Angela', 'via Giuseppe Mazzini 33', 'Lissone', 2147483647, NULL),
	('A3', 'Telesty89', 'Telemaco', 'Zanzi', '', NULL, NULL, NULL),
	('A4', '', 'Michelletto', 'Filangieri', NULL, NULL, NULL, NULL),
	('A5', 'Erry47', 'Letizia', 'Errigo', NULL, NULL, NULL, NULL);

-- Dumping structure for table db_travelfy.destinazione
CREATE TABLE IF NOT EXISTS `destinazione` (
  `codice_destinazione` varchar(50) NOT NULL DEFAULT '',
  `Nome` char(50) DEFAULT NULL,
  `Stato` char(50) DEFAULT NULL,
  `Regione` char(50) DEFAULT NULL,
  `Citta` char(50) DEFAULT NULL,
  PRIMARY KEY (`codice_destinazione`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_travelfy.destinazione: ~8 rows (approximately)
REPLACE INTO `destinazione` (`codice_destinazione`, `Nome`, `Stato`, `Regione`, `Citta`) VALUES
	('akf8', 'Lago Braies', 'Italia', 'Trentino Alto Adige', 'Braies'),
	('asiooia6', 'Castel Sant\'Angelo', 'Italia', 'Lazio', 'Roma'),
	('bb8', 'Pura Ulun Danu Bratan', 'Indonesia', 'Java', 'Bali'),
	('c3po', 'chiesa di Madeira', 'portogallo', 'Madera', 'Madeira'),
	('djfwrj8', 'chiesa di Santa Sofia', 'Turchia', 'istanbul', 'Istanbul'),
	('fn2187', 'chiesa di Santorini', 'Grecia', 'Isole dell\'Egeo', 'Santorini'),
	('r2d2', 'Linate', 'Italia', 'Lombardia', 'Milano'),
	('sidjid9', 'casetta', 'Francia', 'dipartimento esterno', 'Papeete');

-- Dumping structure for table db_travelfy.prenotazione
CREATE TABLE IF NOT EXISTS `prenotazione` (
  `codice` int(11) NOT NULL,
  `data_arrivo` date DEFAULT NULL,
  `data_partenza` date DEFAULT NULL,
  `id_cliente` varchar(50) NOT NULL DEFAULT '',
  `codice_destinazione` varchar(50) NOT NULL,
  PRIMARY KEY (`codice`),
  KEY `id_cliente` (`id_cliente`),
  KEY `codice_destinazione` (`codice_destinazione`),
  CONSTRAINT `FK_prenotazione_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON UPDATE CASCADE,
  CONSTRAINT `FK_prenotazione_destinazione` FOREIGN KEY (`codice_destinazione`) REFERENCES `destinazione` (`codice_destinazione`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_travelfy.prenotazione: ~1 rows (approximately)
REPLACE INTO `prenotazione` (`codice`, `data_arrivo`, `data_partenza`, `id_cliente`, `codice_destinazione`) VALUES
	(0, '0000-00-00', NULL, 'A1', 'r2d2');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
