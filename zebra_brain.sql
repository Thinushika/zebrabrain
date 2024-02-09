-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 08, 2024 at 04:34 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zebra_brain`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

DROP TABLE IF EXISTS `customer_details`;
CREATE TABLE IF NOT EXISTS `customer_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `first_name` mediumtext COLLATE utf8mb3_unicode_ci,
  `last_name` mediumtext COLLATE utf8mb3_unicode_ci,
  `phone_number` mediumtext COLLATE utf8mb3_unicode_ci,
  `country` mediumtext COLLATE utf8mb3_unicode_ci,
  `address` mediumtext COLLATE utf8mb3_unicode_ci,
  `postal_code` mediumtext COLLATE utf8mb3_unicode_ci,
  `city` mediumtext COLLATE utf8mb3_unicode_ci,
  `profile_picture` mediumtext COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `user_id`, `first_name`, `last_name`, `phone_number`, `country`, `address`, `postal_code`, `city`, `profile_picture`, `created_at`, `updated_at`) VALUES
(1, 1, 'Madushan', 'Nayanajith', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-04 05:19:26', '2024-01-04 05:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `answer_1` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `answer_2` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `answer_3` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `answer_4` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer_1`, `answer_2`, `answer_3`, `answer_4`, `created_at`, `updated_at`) VALUES
(1, 'What is the capital of Australia?', 'Sydney', 'Melbourne', 'Canberra', 'Brisbane', '2024-01-04 04:36:01', '2024-01-04 04:36:01'),
(2, 'Which planet is known as the \"Red Planet\"?', 'Venus', 'Mars', 'Jupiter', 'Saturn', '2024-01-04 04:36:01', '2024-01-04 04:36:01'),
(4, 'In which year did World War II end?', '1943', '1945', '1947', '1950', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(5, 'Who wrote the play \"Romeo and Juliet\"?', 'William Wordsworth', 'William Shakespeare', 'Jane Austen', ' Charles Dickens', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(6, 'What is the largest mammal on Earth?', 'Elephant', ' Blue Whale', 'Giraffe', 'Hippopotamus', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(7, 'Which country is known as the \"Land of the Rising Sun\"?', 'China', 'Japan', 'South Korea', 'Vietnam', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(8, 'What is the chemical symbol for gold?', 'Au', 'Ag', 'Fe', 'Hg', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(9, 'Who painted the Mona Lisa?', 'Vincent van Gogh', 'Leonardo da Vinci', 'Pablo Picasso', 'Michelangelo', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(10, 'What is the currency of Brazil?', 'Euro', 'Peso', 'Real', 'Yen', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(11, 'Which gas do plants absorb during photosynthesis?', 'Oxygen', 'Nitrogen', 'Carbon Dioxide', 'Hydrogen', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(12, 'Who is the author of \"To Kill a Mockingbird\"?', 'J.K. Rowling', 'Harper Lee', 'George Orwell', 'Ernest Hemingway', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(13, 'What is the largest ocean on Earth?', ' Indian Ocean', 'Atlantic Ocean', 'Arctic Ocean', ' Pacific Ocean', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(14, 'Which element has the chemical symbol \"H\"?', 'Helium', 'Hydrogen', 'Hafnium', 'Holmium', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(15, 'What is the tallest mountain in the world?', 'Mount Kilimanjaro', 'Mount McKinley', 'Mount Everest', 'Mount Fuji', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(16, 'Who discovered penicillin?', 'Alexander Fleming', 'Marie Curie', 'Louis Pasteur', 'Joseph Lister', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(17, 'Which city is known as the \"City of Love\"?', 'Paris', 'Rome', 'Venice', 'Barcelona', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(18, 'What is the main ingredient in guacamole?', 'Tomatoes', 'Avocado', 'Onions', 'Peppers', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(19, 'Who is the current President of the United States (as of 2024)?', 'Joe Biden', 'Donald Trump', 'Kamala Harris', 'Barack Obama', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(20, 'What is the speed of light?', '300,000 km/s', '150,000 km/s', '500,000 km/s', ' 1,000,000 km/s', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(21, 'Which classical composer wrote the \"Moonlight Sonata\"?', ' Ludwig van Beethoven', 'Wolfgang Amadeus Mozart', 'Johann Sebastian Bach', 'Franz Schubert', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(22, 'What is the largest desert in the world?', 'Sahara Desert', 'Gobi Desert', 'Antarctica', ' Arctic Desert', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(23, 'Who wrote the play \"Hamlet\"?', 'Christopher Marlowe', 'William Shakespeare', 'Jane Austen', 'Charles Dickens', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(24, 'What is the largest bird in the world?', ' Penguin', 'Ostrich', ' Bald Eagle', 'Albatross', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(25, 'Which country is known as the \"Land of the Rising Sun\"?', 'China', 'Japan', 'South Korea', 'Vietnam', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(26, 'What is the currency of South Africa?', 'Rand', 'Peso', 'Baht', 'Won', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(27, 'Who wrote the novel \"1984\"?', 'George Orwell', 'Aldous Huxley', 'Ray Bradbury', 'J.R.R. Tolkien', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(28, 'Which gas makes up the majority of Earth\'s atmosphere?', 'Oxygen', 'Nitrogen', 'Carbon Dioxide', 'Hydrogen', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(29, 'What is the capital of Canada?', 'Toronto', 'Vancouver', 'Montreal', 'Ottawa', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(30, 'Who was the first woman to win a Nobel Prize?', 'Marie Curie', 'Mother Teresa', 'Rosa Parks', 'Jane Goodall', '2024-01-04 05:10:44', '2024-01-04 05:10:44'),
(31, 'In which year did the Titanic sink?', '1910', '1912', '1915', '1920', '2024-01-04 05:10:44', '2024-01-04 05:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `question_answers`
--

DROP TABLE IF EXISTS `question_answers`;
CREATE TABLE IF NOT EXISTS `question_answers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `answer_main_id` int NOT NULL,
  `question_no` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `question_id` int NOT NULL,
  `first_answer` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `second_answer` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `third_answer` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `forth_answer` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `question_answers`
--

INSERT INTO `question_answers` (`id`, `answer_main_id`, `question_no`, `question_id`, `first_answer`, `second_answer`, `third_answer`, `forth_answer`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 1, 'Sydney', 'Melbourne', 'Canberra', 'Brisbane', '2024-01-04 05:33:09', '2024-01-04 05:33:09'),
(2, 1, '2', 2, 'Mars', 'Venus', 'Jupiter', 'Saturn', '2024-01-04 05:33:20', '2024-01-04 05:33:20'),
(3, 1, '3', 4, '1950', '1947', '1945', '1943', '2024-01-04 05:33:23', '2024-01-04 05:33:23'),
(4, 1, '4', 5, 'William Wordsworth', 'William Shakespeare', 'Jane Austen', 'Charles Dickens', '2024-01-04 05:33:24', '2024-01-04 05:33:24'),
(5, 1, '5', 6, 'Elephant', 'Blue Whale', 'Giraffe', 'Hippopotamus', '2024-01-04 05:33:26', '2024-01-04 05:33:26'),
(6, 1, '6', 7, 'China', 'Japan', 'South Korea', 'Vietnam', '2024-01-04 05:33:30', '2024-01-04 05:33:30'),
(7, 1, '7', 8, 'Au', 'Ag', 'Fe', 'Hg', '2024-01-04 05:33:32', '2024-01-04 05:33:32'),
(8, 1, '8', 9, 'Leonardo da Vinci', 'Pablo Picasso', 'Michelangelo', 'Vincent van Gogh', '2024-01-04 05:33:34', '2024-01-04 05:33:34'),
(9, 1, '9', 10, 'Peso', 'Euro', 'Real', 'Yen', '2024-01-04 05:33:36', '2024-01-04 05:33:36'),
(10, 1, '10', 11, 'Nitrogen', 'Oxygen', 'Carbon Dioxide', 'Hydrogen', '2024-01-04 05:33:39', '2024-01-04 05:33:39'),
(11, 1, '11', 12, 'Harper Lee', 'J.K. Rowling', 'George Orwell', 'Ernest Hemingway', '2024-01-04 05:33:45', '2024-01-04 05:33:45'),
(12, 1, '12', 13, 'Atlantic Ocean', 'Indian Ocean', 'Pacific Ocean', 'Arctic Ocean', '2024-01-04 05:33:48', '2024-01-04 05:33:48'),
(13, 1, '13', 14, 'Hydrogen', 'Helium', 'Hafnium', 'Holmium', '2024-01-04 05:33:51', '2024-01-04 05:33:51'),
(14, 1, '14', 15, 'Mount McKinley', 'Mount Kilimanjaro', 'Mount Everest', 'Mount Fuji', '2024-01-04 05:33:53', '2024-01-04 05:33:53'),
(15, 1, '15', 16, 'Louis Pasteur', 'Marie Curie', 'Alexander Fleming', 'Joseph Lister', '2024-01-04 05:33:54', '2024-01-04 05:33:54'),
(16, 1, '16', 17, 'Venice', 'Rome', 'Paris', 'Venice', '2024-01-04 05:33:58', '2024-01-04 05:33:58'),
(17, 1, '17', 18, 'Onions', 'Avocado', 'Tomatoes', 'Peppers', '2024-01-04 05:34:00', '2024-01-04 05:34:00'),
(18, 1, '18', 19, 'Donald Trump', 'Barack Obama', 'Kamala Harris', 'Joe Biden', '2024-01-04 05:34:04', '2024-01-04 05:34:04'),
(19, 1, '19', 20, '150,000 km/s', '300,000 km/s', '500,000 km/s', '1,000,000 km/s', '2024-01-04 05:34:06', '2024-01-04 05:34:06'),
(20, 1, '20', 21, 'Johann Sebastian Bach', 'Wolfgang Amadeus Mozart', 'Ludwig van Beethoven', 'Franz Schubert', '2024-01-04 05:34:09', '2024-01-04 05:34:09'),
(21, 1, '21', 22, 'Sahara Desert', 'Gobi Desert', 'Antarctica', 'Arctic Desert', '2024-01-04 05:34:12', '2024-01-04 05:34:12'),
(22, 1, '22', 23, 'Charles Dickens', 'Jane Austen', 'William Shakespeare', 'Christopher Marlowe', '2024-01-04 05:34:18', '2024-01-04 05:34:18'),
(23, 1, '23', 24, 'Bald Eagle', 'Ostrich', 'Penguin', 'Albatross', '2024-01-04 05:34:20', '2024-01-04 05:34:20'),
(24, 1, '24', 25, 'China', 'Japan', 'South Korea', 'Vietnam', '2024-01-04 05:34:23', '2024-01-04 05:34:23'),
(25, 1, '25', 26, 'Peso', 'Rand', 'Baht', 'Won', '2024-01-04 05:34:26', '2024-01-04 05:34:26'),
(26, 1, '26', 27, 'Aldous Huxley', 'George Orwell', 'Ray Bradbury', 'J.R.R. Tolkien', '2024-01-04 05:34:29', '2024-01-04 05:34:29'),
(27, 1, '27', 28, 'Hydrogen', 'Carbon Dioxide', 'Nitrogen', 'Oxygen', '2024-01-04 05:34:31', '2024-01-04 05:34:31'),
(28, 1, '28', 29, 'Montreal', 'Vancouver', 'Toronto', 'Ottawa', '2024-01-04 05:34:34', '2024-01-04 05:34:34'),
(29, 1, '29', 30, 'Rosa Parks', 'Mother Teresa', 'Marie Curie', 'Jane Goodall', '2024-01-04 05:34:39', '2024-01-04 05:34:39'),
(30, 1, '30', 31, '1912', '1910', '1915', '1920', '2024-01-04 05:34:42', '2024-01-04 05:35:28'),
(31, 2, '1', 1, 'Brisbane', 'Canberra', 'Melbourne', 'Sydney', '2024-01-04 05:44:26', '2024-01-04 05:44:26'),
(32, 2, '2', 2, 'Saturn', 'Jupiter', 'Mars', 'Venus', '2024-01-04 05:44:41', '2024-01-04 05:44:41'),
(33, 2, '3', 4, '1943', '1945', '1947', '1950', '2024-01-04 05:44:44', '2024-01-04 05:44:44'),
(34, 2, '4', 5, 'William Shakespeare', 'William Wordsworth', 'Jane Austen', 'Charles Dickens', '2024-01-04 05:44:48', '2024-01-04 05:44:48'),
(35, 2, '5', 6, 'Blue Whale', 'Elephant', 'Giraffe', 'Hippopotamus', '2024-01-04 05:44:51', '2024-01-04 05:44:51'),
(36, 2, '6', 7, 'Japan', 'South Korea', 'Vietnam', 'China', '2024-01-04 05:44:55', '2024-01-04 05:44:55'),
(37, 2, '7', 8, 'Fe', 'Ag', 'Au', 'Hg', '2024-01-04 05:44:58', '2024-01-04 05:44:58'),
(38, 2, '8', 9, 'Vincent van Gogh', 'Leonardo da Vinci', 'Michelangelo', 'Pablo Picasso', '2024-01-04 05:45:01', '2024-01-04 05:45:01'),
(39, 2, '9', 10, 'Real', 'Peso', 'Euro', 'Yen', '2024-01-04 05:45:04', '2024-01-04 05:45:04'),
(40, 2, '10', 11, 'Carbon Dioxide', 'Nitrogen', 'Oxygen', 'Hydrogen', '2024-01-04 05:45:06', '2024-01-04 05:45:06'),
(41, 2, '11', 12, 'J.K. Rowling', 'Harper Lee', 'Ernest Hemingway', 'George Orwell', '2024-01-04 05:45:11', '2024-01-04 05:45:11'),
(42, 2, '12', 13, 'Atlantic Ocean', 'Indian Ocean', 'Arctic Ocean', 'Pacific Ocean', '2024-01-04 05:45:13', '2024-01-04 05:45:13'),
(43, 2, '13', 14, 'Hydrogen', 'Helium', 'Hafnium', 'Holmium', '2024-01-04 05:45:16', '2024-01-04 05:45:16'),
(44, 2, '14', 15, 'Mount Kilimanjaro', 'Mount McKinley', 'Mount Everest', 'Mount Fuji', '2024-01-04 05:45:20', '2024-01-04 05:45:20'),
(45, 2, '15', 16, 'Louis Pasteur', 'Marie Curie', 'Alexander Fleming', 'Joseph Lister', '2024-01-04 05:45:23', '2024-01-04 05:45:23'),
(46, 2, '16', 17, 'Rome', 'Paris', 'Venice', 'Barcelona', '2024-01-04 05:45:27', '2024-01-04 05:45:27'),
(47, 2, '17', 18, 'Onions', 'Avocado', 'Tomatoes', 'Peppers', '2024-01-04 05:45:30', '2024-01-04 05:45:30'),
(48, 2, '18', 19, 'Kamala Harris', 'Donald Trump', 'Joe Biden', 'Barack Obama', '2024-01-04 05:45:33', '2024-01-04 05:45:33'),
(49, 2, '19', 20, '150,000 km/s', '300,000 km/s', '500,000 km/s', '1,000,000 km/s', '2024-01-04 05:45:36', '2024-01-04 05:45:36'),
(50, 2, '20', 21, 'Wolfgang Amadeus Mozart', 'Ludwig van Beethoven', 'Johann Sebastian Bach', 'Franz Schubert', '2024-01-04 05:45:39', '2024-01-04 05:45:39'),
(51, 2, '21', 22, 'Gobi Desert', 'Sahara Desert', 'Antarctica', 'Arctic Desert', '2024-01-04 05:45:43', '2024-01-04 05:45:43'),
(52, 2, '22', 23, 'Jane Austen', 'William Shakespeare', 'Christopher Marlowe', 'Charles Dickens', '2024-01-04 05:45:46', '2024-01-04 05:45:46'),
(53, 2, '23', 24, 'Bald Eagle', 'Ostrich', 'Penguin', 'Albatross', '2024-01-04 05:45:49', '2024-01-04 05:45:49'),
(54, 2, '24', 25, 'Japan', 'China', 'South Korea', 'Vietnam', '2024-01-04 05:45:52', '2024-01-04 05:45:52'),
(55, 2, '25', 26, 'Won', 'Baht', 'Peso', 'Rand', '2024-01-04 05:45:55', '2024-01-04 05:45:55'),
(56, 2, '26', 27, 'Ray Bradbury', 'Aldous Huxley', 'George Orwell', 'J.R.R. Tolkien', '2024-01-04 05:45:59', '2024-01-04 05:45:59'),
(57, 2, '27', 28, 'Carbon Dioxide', 'Carbon Dioxide', 'Nitrogen', 'Oxygen', '2024-01-04 05:46:02', '2024-01-04 05:46:02'),
(58, 2, '28', 29, 'Vancouver', 'Toronto', 'Montreal', 'Ottawa', '2024-01-04 05:46:06', '2024-01-04 05:46:06'),
(59, 2, '29', 30, 'Jane Goodall', 'Rosa Parks', 'Mother Teresa', 'Marie Curie', '2024-01-04 05:46:08', '2024-01-04 05:46:08'),
(60, 2, '30', 31, '1912', '1910', '1915', '1920', '2024-01-04 05:46:11', '2024-01-04 05:46:11');

-- --------------------------------------------------------

--
-- Table structure for table `question_answers_main`
--

DROP TABLE IF EXISTS `question_answers_main`;
CREATE TABLE IF NOT EXISTS `question_answers_main` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `question_answers_main`
--

INSERT INTO `question_answers_main` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-01-04 05:33:09', '2024-01-04 05:36:42'),
(2, 1, '2024-01-04 05:44:26', '2024-01-04 05:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_role` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT '1 - Admin, 2- User',
  `package` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `activated_date` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `status` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `user_role`, `package`, `activated_date`, `status`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'customer1@gmail.com', '$2y$12$aAmcse9.q4oomMZDydNwz.rVEKMoA1jKMGMWQEZVZ1E0/tGAwWSdu', '2', 'annual', '2024-01-09', 'active', NULL, NULL, '2024-01-04 05:19:26', '2024-01-09 05:28:07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
