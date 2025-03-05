-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2025 at 07:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anonymous_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_name`, `content`, `created_at`) VALUES
(1, 'John Doe', 'Just finished reading an amazing book on JavaScript closures! Highly recommend it for anyone looking to improve their coding skills.', '2025-03-05 18:08:52'),
(2, 'Jane Smith', 'Spent the day experimenting with Next.js. It\'s an amazing framework! Can\'t wait to build some projects with it.', '2025-03-05 18:08:52'),
(3, 'Alice Johnson', 'Database design is crucial for building scalable applications. Make sure to focus on normalization and indexing!', '2025-03-05 18:08:52'),
(4, 'Bob Lee', 'Trying out Tailwind CSS for the first time and I\'m loving how quickly I can prototype UI components.', '2025-03-05 18:08:52'),
(5, 'Emily Brown', 'Just deployed my first React app with Firebase backend. So excited about this new project!', '2025-03-05 18:08:52'),
(6, 'Charlie Davis', 'If you haven\'t tried working with PostgreSQL yet, I highly recommend it. Powerful and fast database management system!', '2025-03-25 18:08:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
