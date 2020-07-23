-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Iul 2017 la 16:24
-- Versiune server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mirc`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `chat`
--

CREATE TABLE `chat` (
  `text_id` int(11) NOT NULL,
  `text` longtext NOT NULL,
  `user_id` int(11) NOT NULL,
  `user` varchar(15) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `chat`
--

INSERT INTO `chat` (`text_id`, `text`, `user_id`, `user`, `date_added`) VALUES
(34, 's', 58, 'dffd', '2017-07-28 12:31:21'),
(35, 's', 58, 'dffd', '2017-07-28 12:31:35'),
(36, 's', 58, 'dffd', '2017-07-28 12:32:54'),
(37, 's', 58, 'dffd', '2017-07-28 12:33:09'),
(38, 's', 58, 'dffd', '2017-07-28 12:56:21'),
(39, 's', 58, 'dffd', '2017-07-28 12:56:26'),
(40, 'UATAFAC', 58, 'dffd', '2017-07-28 12:56:35'),
(41, 'UATAFAC', 58, 'dffd', '2017-07-28 12:56:40'),
(42, 'UATAFAC', 58, 'dffd', '2017-07-28 12:57:42'),
(43, 'sunt prost', 58, 'dffd', '2017-07-28 12:57:49'),
(44, 'sunt prost', 58, 'dffd', '2017-07-28 12:57:53'),
(45, 'sunt prost', 58, 'dffd', '2017-07-28 12:58:02'),
(46, 'sunt prost', 58, 'dffd', '2017-07-28 12:58:06'),
(47, 'sunt prost', 58, 'dffd', '2017-07-28 12:58:24'),
(48, 'k', 59, 'min', '2017-07-28 13:01:09'),
(49, 'k', 59, 'min', '2017-07-28 13:01:14'),
(50, 'k', 59, 'min', '2017-07-28 13:01:37'),
(51, 'k', 59, 'min', '2017-07-28 13:02:20'),
(52, 'k', 59, 'min', '2017-07-28 13:02:44'),
(53, 'k', 59, 'min', '2017-07-28 13:04:32'),
(54, 'k', 59, 'min', '2017-07-28 13:07:29'),
(55, 'k', 59, 'min', '2017-07-28 13:07:49'),
(56, 'k', 59, 'min', '2017-07-28 13:07:55'),
(57, 'k', 59, 'min', '2017-07-28 13:08:59'),
(58, 'buna boss', 59, 'min', '2017-07-28 13:09:08'),
(59, 'buna boss', 59, 'min', '2017-07-28 13:09:12'),
(60, 'Assss', 59, 'min', '2017-07-28 13:10:02'),
(61, 'buna sunt vlad si am rezolvat dataaaaaaaaaaaaaaaaaaaaaa', 59, 'min', '2017-07-28 13:19:36'),
(62, 'buna', 60, 'VladS', '2017-07-28 14:05:18'),
(63, 'Luca e prost', 60, 'VladS', '2017-07-28 14:09:40');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `users`
--

CREATE TABLE `users` (
  `user` varchar(50) NOT NULL,
  `id` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `users`
--

INSERT INTO `users` (`user`, `id`, `timestamp`) VALUES
('Vlad[]', 54, '2017-07-28 11:37:29'),
('Bogdan', 55, '2017-07-28 11:46:18'),
('vlkjh', 56, '2017-07-28 11:58:15'),
('s', 57, '2017-07-28 12:05:22'),
('dffd', 58, '2017-07-28 12:06:28'),
('min', 59, '2017-07-28 13:00:37'),
('VladS', 60, '2017-07-28 14:05:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`text_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `text_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
