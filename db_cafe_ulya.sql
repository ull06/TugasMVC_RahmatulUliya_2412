-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.4.3 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for menu_coffee_db
CREATE DATABASE IF NOT EXISTS `menu_coffee_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `menu_coffee_db`;

-- Dumping data for table menu_coffee_db.menu: ~10 rows (approximately)
INSERT INTO `menu` (`id`, `nama_menu`, `kategori`, `harga`, `gambar`) VALUES
	(1, 'Americano', 'Iced Coffee', 25000, 'americano.png'),
	(2, 'Cafe Latte', 'Iced Coffee', 55000, 'latte.png'),
	(4, 'Matcha', 'Milky Series', 69000, 'matcha.png'),
	(5, 'Berry Matcha', 'Milky Series', 79000, 'berry.png'),
	(6, 'Kentang Goreng', 'Food', 25000, 'kentang.png'),
	(7, 'Roti Bakar', 'Food', 20000, 'roti.png'),
	(8, 'Club Sandwich', 'Food', 35000, 'sandwich.png'),
	(9, 'Dimsum Ayam', 'Snacks', 15000, 'dimsum.png'),
	(12, 'Risol Mayo', 'Snacks', 20000, 'risol.png');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
