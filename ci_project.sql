-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 04:02 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(120) NOT NULL,
  `post_content` text NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_content`, `post_date`) VALUES
(6, 'Students', 'Hello , Students.', '2022-03-15 08:20:48'),
(7, 'Drag queen story hour: tales of acceptance and dreams', '<![CDATA[In full costume and make-up, drag queen Madame Bonjour JohnJ, is teaching children that it’s ok to be different, during storytelling sessions in their native Tokyo.]]>', '2022-03-15 08:23:38'),
(8, 'Women building a sustainable future: India’s rural energy pioneers', '<![CDATA[A UN project, in association with one of India’s leading clean energy companies, is training women salt farmers in the Indian state of Gujarat to work in the solar power industry, and build a better life.]]>', '2022-03-15 08:24:10'),
(9, 'Sri Lanka: UN rights chief welcomes reform but concerns remain', '<![CDATA[Sri Lanka has taken steps towards legal, institutional and security sector reforms, but more action is still needed, according to a report issued on Friday by the UN human rights office, OHCHR, which examines developments over the past year. ]]>', '2022-03-15 08:24:45'),
(10, 'Ensuring safety and inclusive elections in Timor-Leste: A UN Resident Coordinator blog ', '<![CDATA[As Timor-Leste prepares to choose a new president in March, Roy Trivedy, the senior UN official in the country, explains the Organization’s role in securing the vote for all citizens across the small island nation, which gained independence from Indonesia in 2002, and expresses his hopes for safe, inclusive, and transparent elections.]]>', '2022-03-15 08:27:02'),
(12, 'Burma is a new rising IT market in SEA Region.', 'blah blah.', '2022-03-15 08:33:00'),
(14, 'Private University are becoming a choice for Burmese Students.', 'idfjhrepiqjfmlew jf[pe', '2022-03-15 08:41:32'),
(15, 'Students', 'ff', '2022-03-15 08:47:02'),
(16, 'Students', 'ff', '2022-03-15 09:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `posts_log`
--

CREATE TABLE `posts_log` (
  `posts_log_id` int(11) NOT NULL,
  `latest_modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts_log`
--

INSERT INTO `posts_log` (`posts_log_id`, `latest_modified_date`) VALUES
(2, '2022-03-15 08:20:48'),
(3, '2022-03-15 08:23:38'),
(4, '2022-03-15 08:24:10'),
(5, '2022-03-15 08:24:45'),
(6, '2022-03-15 08:27:02'),
(7, '2022-03-15 08:27:12'),
(8, '2022-03-15 08:33:00'),
(9, '2022-03-15 08:38:07'),
(10, '2022-03-15 08:41:32'),
(11, '2022-03-15 08:47:02'),
(12, '2022-03-15 09:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `age`, `address`) VALUES
(12, 'Ah Sae', 15, 'Myenigon'),
(13, 'Ming Ming', 12, 'Mayangon'),
(14, 'Ming Htak', 15, 'Mayangon'),
(16, 'Kaung Htak', 12, 'Lhaing'),
(17, 'Thuka', 12, 'Thukagon'),
(18, 'Ming Thuka', 12, 'Thukagon'),
(20, 'Ling Lak', 12, 'Thukagon'),
(21, 'Ming Thukha', 15, 'Thukagon'),
(23, 'Ling Ling', 12, 'Pakhukku'),
(24, 'Mying Mying', 15, 'Moulmein'),
(25, 'Pyae Sone', 12, 'Phayalam'),
(27, 'Pyae San', 12, 'Mandalay');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `posts_log`
--
ALTER TABLE `posts_log`
  ADD PRIMARY KEY (`posts_log_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `posts_log`
--
ALTER TABLE `posts_log`
  MODIFY `posts_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
