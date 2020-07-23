-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Iul 2017 la 12:33
-- Versiune server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(19, 'uhj', 0, 'laura', '2017-07-28 08:33:55'),
(20, 'uhj', 0, 'laura', '2017-07-28 08:34:18'),
(21, 'Coama ma ajuta', 52, 'laura', '2017-07-28 08:53:27'),
(22, 'Ma numesc VLad', 0, 'laura', '2017-07-28 09:20:24'),
(23, 'Ma numesc VLad', 0, 'laura', '2017-07-28 09:21:05'),
(24, 'Ma numesc VLad', 52, 'laura', '2017-07-28 09:21:44'),
(25, 's', 52, 'laura', '2017-07-28 09:21:47'),
(26, 's', 52, 'laura', '2017-07-28 09:23:58'),
(27, 's', 52, 'laura', '2017-07-28 09:30:22'),
(28, 's', 52, 'laura', '2017-07-28 09:30:33'),
(29, 's', 52, 'laura', '2017-07-28 09:31:14'),
(30, 's', 52, 'laura', '2017-07-28 09:31:25'),
(31, 's', 52, 'laura', '2017-07-28 09:31:42'),
(32, 's', 52, 'laura', '2017-07-28 09:31:51'),
(33, 'vlad', 52, 'laura', '2017-07-28 09:33:01'),
(34, 'vlad', 52, 'laura', '2017-07-28 09:33:05'),
(35, 'vlad', 52, 'laura', '2017-07-28 09:33:24'),
(36, 'vlad', 52, 'laura', '2017-07-28 09:38:23'),
(37, 'hello', 52, 'laura', '2017-07-28 09:48:20'),
(38, 'hhyjy', 52, 'laura', '2017-07-28 09:48:39'),
(39, 'ujgjr', 52, 'laura', '2017-07-28 09:48:48'),
(40, 'aiurea', 52, 'laura', '2017-07-28 09:49:10'),
(41, 'tyhd', 52, 'laura', '2017-07-28 09:50:02'),
(42, 'yutube', 52, 'laura', '2017-07-28 09:54:02'),
(43, 'hhh', 52, 'laura', '2017-07-28 09:59:39'),
(44, 'yyhd', 52, 'laura', '2017-07-28 10:00:31'),
(45, 'hello', 52, 'laura', '2017-07-28 10:31:11'),
(46, 'SALUT', 48, 'Laura2003', '2017-07-28 10:32:28'),
(47, 'Buna', 54, 'VLad', '2017-07-28 10:32:51');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `users`
--

CREATE TABLE `users` (
  `user` varchar(50) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `users`
--

INSERT INTO `users` (`user`, `id`) VALUES
('CoCo', 1),
('miniu', 2),
('miniu', 3),
('miniu', 4),
('miniu', 5),
('miniu', 6),
('miniu', 7),
('miniu', 8),
('miniu', 9),
('miniu', 10),
('miniu', 11),
('miniu', 12),
('miniu', 13),
('miniu', 14),
('miniu', 15),
('miniu', 16),
('miniu', 17),
('miniu', 18),
('miniu', 19),
('miniu', 20),
('miniu', 21),
('miniu', 22),
('miniu', 23),
('miniu', 24),
('miniu', 25),
('miniu', 26),
('miniu', 27),
('Miau', 28),
('tati', 29),
('tati2', 30),
('CocoJambo', 31),
('sd', 32),
('sd', 33),
('ssssss', 34),
('bunicabate', 35),
('mamaie', 36),
('Lau2003', 37),
('ceva', 38),
('fnfgnn', 39),
('njhgfubifnd', 40),
('fdsgfret', 41),
('DFSF', 42),
('DFSF', 43),
('mm', 44),
('fvdsf', 45),
('fdgfdfgrttgtrbh', 46),
('fdsfdgtrt', 47),
('Laura2003', 48),
('Laura2003', 49),
('fdgfdghtrf', 50),
('bfdhgfgtdx', 51),
('laura', 52),
('Laura2003', 53),
('VLad', 54);

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
  MODIFY `text_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
