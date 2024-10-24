-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for portfoliofreyadb
CREATE DATABASE IF NOT EXISTS `portfoliofreyadb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `portfoliofreyadb`;

-- Dumping structure for table portfoliofreyadb.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table portfoliofreyadb.contact: ~2 rows (approximately)
DELETE FROM `contact`;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
	(1, 'freya', 'aaa@gmail.com', 'aaa', 'aaaaaa', '2024-10-23 12:23:17'),
	(2, 'aaa', 'asdad@gmail.com', 'mmmm', 'ssssssssssss', '2024-10-23 12:26:43');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Dumping structure for table portfoliofreyadb.footer_info
CREATE TABLE IF NOT EXISTS `footer_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table portfoliofreyadb.footer_info: ~1 rows (approximately)
DELETE FROM `footer_info`;
/*!40000 ALTER TABLE `footer_info` DISABLE KEYS */;
INSERT INTO `footer_info` (`id`, `name`, `address`, `phone`, `email`) VALUES
	(1, 'Freyadiva', 'Apartement Emerald, Ciputat, Tangsel', '+62 87818573366', 'hanikafreyadiva@gmail.com');
/*!40000 ALTER TABLE `footer_info` ENABLE KEYS */;

-- Dumping structure for table portfoliofreyadb.hobbies
CREATE TABLE IF NOT EXISTS `hobbies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon_class` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `delay` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table portfoliofreyadb.hobbies: ~6 rows (approximately)
DELETE FROM `hobbies`;
/*!40000 ALTER TABLE `hobbies` DISABLE KEYS */;
INSERT INTO `hobbies` (`id`, `icon_class`, `title`, `description`, `delay`) VALUES
	(1, 'fa-language', 'Learning Language', 'Besides Indonesian, I can speak 5 more languages.', '0.0s'),
	(2, 'fa-film', 'Watching Movie', 'Watching movie lets me know about other cultures, perspectives, and opinions.', '0.2s'),
	(3, 'fa-gamepad', 'Playing Games', 'To overcome my stress, I play a variety of games.', '0.4s'),
	(4, 'fa-paint-brush', 'Drawing', 'I love to draw the surroundings, including people and things.', '0.6s'),
	(5, 'fa-edit', 'Writing', 'I love to make journals about my day, and I also write short stories.', '0.6s'),
	(6, 'fa-music', 'Listening Music', 'I\'m open to all genres, music makes my heart calm.', '0.6s');
/*!40000 ALTER TABLE `hobbies` ENABLE KEYS */;

-- Dumping structure for table portfoliofreyadb.portfolio
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `filter_class` varchar(50) NOT NULL,
  `delay` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table portfoliofreyadb.portfolio: ~8 rows (approximately)
DELETE FROM `portfolio`;
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;
INSERT INTO `portfolio` (`id`, `category`, `title`, `image_path`, `description`, `filter_class`, `delay`) VALUES
	(1, 'Editing', 'YouTube Project', 'img/gambar porto/youtube project.png', 'Video Editing for YouTube Content.', 'filter-1', '0.0s'),
	(2, 'Editing', 'High School Project', 'img/gambar porto/sma pro.jpeg', 'Video Editing for High School Presentation.', 'filter-1', '0.2s'),
	(3, 'UI/UX', 'UI/UX Design', 'img/gambar porto/ui-ux.png', 'UI/UX Design for mobile application project. I\'ve contributed to two projects, Peluk and Jay-U', 'filter-2', '0.4s'),
	(4, 'UI/UX', 'Pengabdian Masyarakat', 'img/gambar porto/letris.JPG', 'Community Service Project focused on computational thinking for Pembangunan Berkelanjutan subject.', 'filter-2', '0.6s'),
	(5, 'UI/UX', 'Content Writer JSC', 'img/gambar porto/jsc.jpeg', 'Content Writer for Jaya Stock Club.', 'filter-2', '0.8s'),
	(6, 'Programming', 'C Programming', 'img/gambar porto/c lang.jpeg', 'C Programming Project while I\'m on my 1st semester for Computation Introduction subject.', 'filter-3', '1.0s'),
	(7, 'Programming', 'Python Project', 'img/gambar porto/python lang.png', 'Python Project while I\'m on my 3rd semester for Design and Analysis Algorithm subject.', 'filter-3', '1.2s'),
	(8, 'Programming', 'Web Project', 'img/gambar porto/html css.jpg', 'HTML and CSS project for a responsive website for Web Based Programing subject.', 'filter-3', '1.4s');
/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;

-- Dumping structure for table portfoliofreyadb.skills
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(255) NOT NULL,
  `percentage` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table portfoliofreyadb.skills: ~4 rows (approximately)
DELETE FROM `skills`;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` (`id`, `skill_name`, `percentage`) VALUES
	(1, 'Photo Editing', 85),
	(2, 'Language Skill', 95),
	(3, 'Video Editing', 90),
	(4, 'Programming', 85);
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;

-- Dumping structure for table portfoliofreyadb.social_links
CREATE TABLE IF NOT EXISTS `social_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `platform` varchar(50) NOT NULL,
  `icon_class` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table portfoliofreyadb.social_links: ~5 rows (approximately)
DELETE FROM `social_links`;
/*!40000 ALTER TABLE `social_links` DISABLE KEYS */;
INSERT INTO `social_links` (`id`, `platform`, `icon_class`, `link`) VALUES
	(1, 'Twitter', 'fab fa-twitter', '#'),
	(2, 'Facebook', 'fab fa-facebook-f', '#'),
	(3, 'YouTube', 'fab fa-youtube', '#'),
	(4, 'Instagram', 'fab fa-instagram', '#'),
	(5, 'LinkedIn', 'fab fa-linkedin-in', '#');
/*!40000 ALTER TABLE `social_links` ENABLE KEYS */;

-- Dumping structure for table portfoliofreyadb.timeline
CREATE TABLE IF NOT EXISTS `timeline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_range` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `position` enum('left','right') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table portfoliofreyadb.timeline: ~4 rows (approximately)
DELETE FROM `timeline`;
/*!40000 ALTER TABLE `timeline` DISABLE KEYS */;
INSERT INTO `timeline` (`id`, `date_range`, `institution`, `location`, `description`, `position`) VALUES
	(1, '2017 - 2020', 'SMPN 48 Jakarta', 'Kebayoran Lama, Jakarta Selatan', 'Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.', 'left'),
	(2, '2020 - 2023', 'SMAN 10 Jakarta', 'Sawah Besar, Jakarta Pusat', 'Jurusan MIPA', 'right'),
	(3, '2023 - Now', 'Universitas Pembangunan Jaya', 'Sawah Baru, Tangerang Selatan', 'Jurusan Informatika', 'left'),
	(4, 'Future', 'Women in STEM Industry', 'Worldwide', 'Kedepannya saya ingin bekerja di bidang Informatika.', 'right');
/*!40000 ALTER TABLE `timeline` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
