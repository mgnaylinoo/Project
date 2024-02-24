-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 06:16 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travels`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Title 1', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\nWhat is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '65d1c1f1898519-97054_christmas-santa-sleigh-png-transparent-png.jpg', '2024-02-18 08:38:09', '2024-02-18 08:38:09'),
(5, 'Title 2', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '65d1c203852a00-7461_christmas-wreath-png-clipart-image-christmas-wreath-png.png', '2024-02-18 08:38:27', '2024-02-18 08:38:27'),
(6, 'Title 3', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '65d1c220823f5502-5021598_dear-santa-christmas-stockings-christmas-hats-dear-transparent.png', '2024-02-18 08:38:56', '2024-02-18 08:38:56'),
(7, 'Tiltle 4', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '65d1c22fd392b5847d828cef1014c0b5e4808.png', '2024-02-18 08:39:11', '2024-02-18 08:39:11'),
(8, 'Tiltle 5', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '65d1c26fc3b89564-5649861_transparent-background-santa-claus-png-png-download.png', '2024-02-18 08:40:15', '2024-02-18 08:40:15'),
(9, 'Tiltle 6', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '65d1c27f91778AU-Australia-Flag-icon.png', '2024-02-18 08:40:31', '2024-02-18 08:40:31'),
(10, 'Tiltle 7', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '65d1c2908124117164c2c18a41378d38894002c8ebe37.jpg', '2024-02-18 08:40:48', '2024-02-18 08:40:48'),
(11, 'Tiltle 8', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '65d1c29d8c32e5847d828cef1014c0b5e4808.png', '2024-02-18 08:41:01', '2024-02-18 08:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(5, 'ghfgfgy', 'fhfhfh@mail.com', 'hjjkhjg', '2024-02-18 08:35:33', '2024-02-18 08:35:33'),
(6, 'min', 'min@gmail.com', '1234', '2024-02-19 09:26:04', '2024-02-19 09:26:04'),
(7, 'dooo', 'dp@gmail.com', '$2y$10$MAf4TRdgYDqSFgIJ3VLO5uDO2nB6BvTNNfvRLDKCeB6mWpf9jpGXW', '2024-02-20 09:12:57', '2024-02-20 09:12:57'),
(8, 'min', 'minmin@gmail.com', '$2y$10$pGhOgK9iZFq0amU5L0ZxvOskDDU1gp4ZcWcZHcgvU0GE3HLdu6syS', '2024-02-20 09:18:52', '2024-02-20 09:18:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
