-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 08:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Вэб'),
(2, 'Апп'),
(3, 'Төсөл');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'Ану-Үжин', 'ujin@gmail.com', 'asd', 'asd'),
(3, 'Ану-Үжин', 'ujin@gmail.com', 'ss', 'sss'),
(4, 'vbvc', 'cvbvc@gmail.com', 'asdasd', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `pre` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `icon`, `pre`, `post`, `title`) VALUES
(1, 'bi bi-emoji-smile', 0, 23, 'Үйлчлүүлэгчид'),
(2, 'bi bi-emoji-smile', 500, 35, 'Оюутнууд'),
(3, 'bi bi-emoji-smile', 0, 2, 'Байгууллагууд'),
(4, 'bi bi-emoji-smile', 0, 50, 'Захиалга'),
(5, 'bi bi-emoji-smile', 0, 3, 'Ангиуд'),
(6, 'bi bi-emoji-smile', 0, 36, 'Үйлчлүүлэгчид'),
(7, 'bi bi-emoji-smile', 500, 24, 'Оюутнууд'),
(8, 'bi bi-emoji-smile', 0, 2, 'Байгууллагууд'),
(9, 'bi bi-emoji-smile', 0, 36, 'Захиалга'),
(10, 'bi bi-emoji-smile', 0, 12, 'Ангиуд');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `project_date` date NOT NULL,
  `url` varchar(255) NOT NULL,
  `text` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `category`, `client`, `project_date`, `url`, `text`, `image`) VALUES
(1, 'Төсөл 1', '1', 'Ану-Үжин', '2024-04-15', '#', 'Дууссан төсөл', 'assets/img/portfolio/ff1.png'),
(2, 'Төсөл 2', '2', 'Ану-Үжин', '2024-05-01', '#', 'Дууссан төсөл', 'assets/img/portfolio/gg1.png'),
(3, 'Төсөл 3', '3', 'Мөөнөө', '2022-05-15', '#', 'Дууссан төсөл', 'assets/img/portfolio/aa1.png');

-- --------------------------------------------------------

--
-- Table structure for table `quets`
--

CREATE TABLE `quets` (
  `id` int(11) NOT NULL,
  `quet` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quets`
--

INSERT INTO `quets` (`id`, `quet`, `name`, `title`) VALUES
(1, 'Сэтгэл ханамж 100%', 'Тэгшээ', 'Оюутан'),
(2, 'Хамтарч ажилхад итгэл даах, ур чадвартай оюутан.', 'Мөөнөө', 'Fractal Tech'),
(3, 'Дахин хамтарч ажилмаар байна.', 'Ану', 'Үйлчлүүлэгч');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `title`, `icon`, `color`) VALUES
(1, 'HTML,CSS,Javasript,PHP,Mysql\r\n', 'ri-store-line', 'ffbb2c'),
(2, 'Төслийн менежмент\r\n', 'ri-bar-chart-box-line', '4CEB95'),
(3, 'Маркетинг', 'ri-bar-chart-box-line', 'E75C54'),
(4, 'Апп хөгжүүлэлт', 'ri-bar-chart-box-line', 'ffbb2c');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `youtube` text NOT NULL,
  `linkedin` text NOT NULL,
  `github` text NOT NULL,
  `slogan` text NOT NULL,
  `birthday` date NOT NULL,
  `website` text NOT NULL,
  `phone` text NOT NULL,
  `city` text NOT NULL,
  `age` text NOT NULL,
  `degree` text NOT NULL,
  `freelance` int(11) NOT NULL,
  `certification` text NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `title`, `place`, `facebook`, `twitter`, `instagram`, `youtube`, `linkedin`, `github`, `slogan`, `birthday`, `website`, `phone`, `city`, `age`, `degree`, `freelance`, `certification`, `address`) VALUES
(1, 'Ану-Үжин', 'Ану-Үжин', 'ujin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Программ хангамж', 'оюутан.', '#', '#', '#', '#', '#', '', 'КПХ-ын 3-р курсийн оюутан', '2003-06-26', 'ИХ ЗАСАГ ҮНДЭСНИЙ ИНЖЕНЕР ТЕХНОЛОГИЙН СУРГУУЛЬ', '94108686', 'Улаанбаатар', '20', 'HTML,CSS,JavaScript,PHP,Mysql', 1, 'Дунд', 'Ulaanbaatar,Mongolia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quets`
--
ALTER TABLE `quets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quets`
--
ALTER TABLE `quets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
