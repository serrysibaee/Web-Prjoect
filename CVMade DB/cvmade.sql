-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 29, 2022 at 11:41 AM
-- Server version: 8.0.27
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvmade`
--
CREATE DATABASE IF NOT EXISTS `cvmade` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `cvmade`;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `user_id` int NOT NULL,
  `address_line` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'Address line 1',
  `city` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'Riyadh',
  `postal_code` int DEFAULT '12152',
  `country` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'Saudi Arabia',
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`user_id`, `address_line`, `city`, `postal_code`, `country`) VALUES
(0, 'Address line 1', 'Riyadh', 12152, 'Saudi Arabia'),
(28, 'A108 Adam Street', 'New York, NY', 53502, 'United States'),
(30, '223 High St.', 'Riyadh', 12123, 'Saudi Arabia');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE IF NOT EXISTS `education` (
  `user_id` int NOT NULL,
  `edu1_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'University Name',
  `edu1_start` year NOT NULL DEFAULT '2018',
  `edu1_end` year NOT NULL DEFAULT '2022',
  `edu1_loc` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `edu1_desc` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Add your education description',
  `edu2_name` varchar(200) DEFAULT NULL,
  `edu2_start` year DEFAULT NULL,
  `edu2_end` year DEFAULT NULL,
  `edu2_loc` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `edu2_desc` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`user_id`, `edu1_name`, `edu1_start`, `edu1_end`, `edu1_loc`, `edu1_desc`, `edu2_name`, `edu2_start`, `edu2_end`, `edu2_loc`, `edu2_desc`) VALUES
(0, 'University Name', 2018, 2022, NULL, 'Add your education description', NULL, NULL, NULL, NULL, NULL),
(28, 'MASTER OF FINE ARTS & GRAPHIC DESIGN', 2015, 2016, 'Rochester Institute of Technology, Rochester, NY', 'Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend', 'BACHELOR OF FINE ARTS & GRAPHIC DESIGN', 2015, 2016, 'Rochester Institute of Technology, Rochester, NY', 'Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend'),
(30, 'Southern College', 1978, 1982, 'Boston, United States', 'On behalf of the University College (UC), I am excited to have you join the Jaguar Nation! Your first Southern experience starts at JAG 365 New Student Orientation and continues through First & Second-Year programming coupled with robust Student Success initiatives. The UC staff collaborates with the Division of Student Affairs and other campus departments to guide you through the Welcome Ceremony and your first year.', 'MASTER OF FINE ARTS & GRAPHIC DESIGN', 2010, 2014, 'Boston, United States', 'On behalf of the University College (UC), I am excited to have you join the Jaguar Nation! Your first Southern experience starts at JAG 365 New Student Orientation and continues through First & Second-Year programming coupled with robust Student Success initiatives. The UC staff collaborates with the Division of Student Affairs and other campus departments to guide you through the Welcome Ceremony and your first year.');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

DROP TABLE IF EXISTS `experience`;
CREATE TABLE IF NOT EXISTS `experience` (
  `user_id` int NOT NULL,
  `cv_summary` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `exp1_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Professional Experience 1',
  `exp1_start` year NOT NULL DEFAULT '2015',
  `exp1_end` year NOT NULL DEFAULT '2020',
  `exp1_loc` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `exp1_desc` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Add description to your experience',
  `exp2_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `exp2_start` year DEFAULT NULL,
  `exp2_end` year DEFAULT NULL,
  `exp2_loc` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `exp2_desc` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`user_id`, `cv_summary`, `exp1_name`, `exp1_start`, `exp1_end`, `exp1_loc`, `exp1_desc`, `exp2_name`, `exp2_start`, `exp2_end`, `exp2_loc`, `exp2_desc`) VALUES
(0, 'bla bla bla.', 'Professional Experience 1', 2015, 2020, NULL, 'Add description to your experience', NULL, NULL, NULL, NULL, NULL),
(28, 'Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.\r\n\r\n- Portland par 127,Orlando, FL\r\n- (123) 456-7891\r\n- alice.barkley@example.com', 'SENIOR GRAPHIC DESIGN SPECIALIST', 2019, 2022, 'Experion, New York, NY', '- Lead in the design, development, and implementation of the graphic, layout, and production communication materials\r\n- Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project.\r\n- Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design\r\n- Oversee the efficient use of production project budgets ranging from $2,000 - $25,000', 'GRAPHIC DESIGN SPECIALIST', 2017, 2018, 'Stepping Stone Advertising, New York, NY', '- Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).\r\n- Managed up to 5 projects or tasks at a given time while under pressure\r\n- Recommended and consulted with clients on the most appropriate graphic design\r\n- Created 4+ design presentations and proposals a month for clients and account managers'),
(30, 'I am a talented, ambitious and hardworking individual, with broad skills and experience in digital and printed marketing, social media and leading projects.\r\nFurthermore, I am adept at handling multiple tasks on a daily basis competently and at working well under pressure.', 'Actor', 2015, 2020, 'LA, United States', 'The actor performs \"in the flesh\" in the traditional medium of the theatre or in modern media such as film, radio, and television.', 'GRAPHIC DESIGN SPECIALIST', 2014, 2015, 'Riyadh, Saudi Arabia', 'he development of the theatre and opportunities for acting ceased when Puritan opposition to the stage banned the performance of all plays within London. Puritans viewed the theatre as immoral. The re-opening of the theatres in 1660 signaled a renaissance of English drama.');

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

DROP TABLE IF EXISTS `main`;
CREATE TABLE IF NOT EXISTS `main` (
  `about` text NOT NULL,
  `serv_ab` text NOT NULL,
  `serv_bl1_title` text NOT NULL,
  `serv_bl1_txt` text NOT NULL,
  `serv_bl2_title` text NOT NULL,
  `serv_bl2_txt` text NOT NULL,
  `serv_bl3_title` text NOT NULL,
  `serv_bl3_txt` text NOT NULL,
  `serv_bl4_title` text NOT NULL,
  `serv_bl4_txt` text NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`about`, `serv_ab`, `serv_bl1_title`, `serv_bl1_txt`, `serv_bl2_title`, `serv_bl2_txt`, `serv_bl3_title`, `serv_bl3_txt`, `serv_bl4_title`, `serv_bl4_txt`, `id`) VALUES
('In CVMade, we strive to provide you with the best experience in building and sharing your professional life. Our ultimate goal is to abridge the gap between employees and their best-match jobs by providing them with a creative space to show their skills and capabilities while sharing them with the designated businesses. With CVMade, you no longer have to keep your CV buried on your desktop, instead, you can share it with the entire world by having your personal web page that can be created in a blink of an eye.', 'Are you looking for a new service for starting your career? Make your resume stand out with the only free online resume builder. Choose a template, then customize and share.\r\n\r\n', 'Cloud CV Services', 'We offer affordable resume writing services. Online resume writers available for hire to assist with your resume.', 'PDF CV Services', 'Our free online CV builder allows you to quickly and easily create professional looking PDF or online CVs & resumes.', 'Exclusive CV Templates', 'Choose a template to design and build your professional resume now!', 'Connecting with Companies', 'CVMade lets companies find you with professional resumes you upload!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `user_id` int NOT NULL,
  `skills_desc` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'skills description',
  `skill1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'skill',
  `skill1_perc` int NOT NULL DEFAULT '90',
  `skill2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'skill',
  `skill2_perc` int NOT NULL DEFAULT '100',
  `skill3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `skill3_perc` int DEFAULT NULL,
  `skill4` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `skill4_perc` int DEFAULT NULL,
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`user_id`, `skills_desc`, `skill1`, `skill1_perc`, `skill2`, `skill2_perc`, `skill3`, `skill3_perc`, `skill4`, `skill4_perc`) VALUES
(0, 'skills description', 'skill', 90, 'skill', 100, NULL, NULL, NULL, NULL),
(28, '<script>alert(1)</Script> Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'HTML', 90, 'PHP', 80, 'CSS', 30, 'WORDPRESS', 70),
(30, 'Michael Gary Scott is a fictional character in NBC\'s The Office, portrayed by Steve Carell. Michael is the protagonist of the series, serving as the Regional Manager of the Scranton branch of a paper merchant, known as Dunder Mifflin Inc. for the first seven seasons.', 'Acting', 100, 'Critical Thinking', 70, 'Problem Solving', 85, 'Socializing ', 97);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

DROP TABLE IF EXISTS `social_media`;
CREATE TABLE IF NOT EXISTS `social_media` (
  `user_id` int NOT NULL,
  `linkedin` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `twitter` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `facebook` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`user_id`, `linkedin`, `twitter`, `facebook`) VALUES
(0, NULL, NULL, NULL),
(28, 'https://linkedin.com', 'https://twitter.com', 'https://facebook.com'),
(30, 'https://linkedin.com', 'https://twitter.com', 'https://facebook.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(15) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `phone`, `created_at`) VALUES
(0, 'admin@admin.com', '$2y$10$M450ZyVyL8yUpyjs8qB3N.ZvOnnK3gEiZwaqucx31XfrgQPX0gkam', 'Admin', '11', '2022-04-19 08:44:49'),
(28, 'smith@gmail.com', '$2y$10$uvud88jMCmzIhx1Qxpyn1e7CafGT.W5jYXYtC9kDWBNyPoPeTrAoi', 'asmith', '+123 456 7890', '2022-04-19 20:29:04'),
(30, 'Mscott@gmail.com', '$2y$10$a6AI68qk9i6tCzJVl3clZeIJhSMhqxEewal0M3WeyqkTG5/YN8P7q', 'Mscott', '734.291.6845', '2022-05-29 11:08:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE IF NOT EXISTS `user_details` (
  `user_id` int NOT NULL,
  `cv_template` int DEFAULT NULL,
  `job` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `full_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `age` int DEFAULT NULL,
  `degree` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `about` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `photo_path` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'uploads/profile-icon-default.png',
  `bg_path` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'uploads/bg-img-default.png',
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `cv_template`, `job`, `full_name`, `age`, `degree`, `about`, `photo_path`, `bg_path`) VALUES
(0, 1, '', 'admin', NULL, NULL, NULL, 'uploads/profile-icon-default.png', 'uploads/bg-img-default.png'),
(28, 1, 'Developer, Designer, Freelancer', 'Alex Smith', 30, 'Master', 'I am flexible, reliable and possess excellent time keeping skills. I am an enthusiastic, self-motivated, reliable, responsible and hard working person. I am a mature team worker and adaptable to all challenging situations. I am able to work well both in a team environment as well as using own initiative.\r\n', 'uploads/profile-img-28-profile-img.jpg', 'uploads/bg-img-28-hero-bg.jpg'),
(30, NULL, 'Actor, Artist', 'Michael Scott', 39, 'Bachelor', 'I am a talented, ambitious and hardworking individual, with broad skills and experience in digital and printed marketing, social media and leading projects.\r\nFurthermore, I am adept at handling multiple tasks on a daily basis competently and at working well under pressure.', 'uploads/profile-img-30-ms.jpg', 'uploads/bg-img-default.png');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `edu_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `exp_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `social_media`
--
ALTER TABLE `social_media`
  ADD CONSTRAINT `sm_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `ud_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
