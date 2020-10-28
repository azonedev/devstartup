-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 04:19 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devstartup`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(350) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `btn` varchar(100) DEFAULT NULL,
  `link` varchar(350) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`, `img`, `btn`, `link`, `status`) VALUES
(1, '#', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus architecto similique nulla quis tempore repellendus voluptatibus saepe quidem laboriosam excepturi rerum eveniet modi sint magni id, nihil. Saepe, veritatis, debitis.', 'assets/app-images/1603711852.svg', 'Get In Touch', '#', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(350) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `btn` varchar(100) DEFAULT NULL,
  `link` varchar(350) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `title`, `description`, `img`, `btn`, `link`, `status`) VALUES
(1, 'Developement .', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus architecto similique nulla quis tempore repellendus voluptatibus saepe quidem laboriosam excepturi rerum eveniet modi sint magni id, nihil. Saepe, veritatis, debitis.', 'assets/app-images/1603711812.svg', 'Get In Touch', '#', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(350) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `btn` varchar(100) DEFAULT NULL,
  `link` varchar(350) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `img`, `btn`, `link`, `status`) VALUES
(2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quasi?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi unde in labore, perspiciatis quidem libero laudantium sed assumenda esse magnam ullam quibusdam, ipsa veritatis et quae porro excepturi hic magni?', 'assets/app-images/1603696590.svg', 'Get In Touch', 'https://mamurjor.com', 'active'),
(3, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quasi .. 50%', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi unde in labore, perspiciatis quidem libero laudantium sed assumenda esse magnam ullam quibusdam, ipsa veritatis et quae porro excepturi hic magni? 230', 'assets/app-images/1603707120.svg', 'Get In Touch', 'https://mamurjor.com/', 'archrived');

-- --------------------------------------------------------

--
-- Table structure for table `solution`
--

CREATE TABLE `solution` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  `blog_img` varchar(100) NOT NULL,
  `blog_title` varchar(350) DEFAULT NULL,
  `blog` text NOT NULL,
  `btn` varchar(150) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solution`
--

INSERT INTO `solution` (`id`, `name`, `img`, `blog_img`, `blog_title`, `blog`, `btn`, `status`) VALUES
(3, 'ERP', 'assets/app-images/1603779864.svg', 'assets/app-images/1603779864.svg', 'ERP Solution', '<p>#</p>', 'Call : +012 34 56 780', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `title` varchar(200) NOT NULL,
  `img` varchar(150) NOT NULL,
  `facebook` varchar(150) NOT NULL,
  `linkedin` varchar(150) NOT NULL,
  `twitter` varchar(150) NOT NULL,
  `contact` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `title`, `img`, `facebook`, `linkedin`, `twitter`, `contact`, `status`) VALUES
(1, 'Md. Niamat Ullah Atif', 'CEO of Mamujor', 'assets/app-images/1603798164.jpg', '#', '#', '#', 'call :', 'active'),
(2, 'Hadi Jamman', 'Founder & Chairman of Mamujor', 'assets/app-images/1603800198.jpg', 'https;//facebook.com/hadijaman', '#', '#', '01746686868', 'active'),
(3, 'Abdullah Al Mamun', 'Full Stack Developer ( Laravel PHP)', 'assets/app-images/1603800318.jpg', 'https://facebook.com/abdullah.me.info', 'https://www.linkedin.com/in/abdullah18/', 'https://twitter.com/ceo_of_azonedev', '#', 'active'),
(4, 'ASM ROFI UDDIN', 'Wordpress Developer', 'assets/app-images/1603800364.jpg', '#', '#', '#', '#', 'active'),
(5, 'SHARFUZZMAN RASEL', 'Laravel Developer', 'assets/app-images/1603800413.jpg', '#', '#', '#', '#', 'active'),
(6, 'KAZI ALAM', 'Web Developer', 'assets/app-images/1603800483.jpg', '#', '#', '#', '#', 'active'),
(7, 'Najir Ahamed', 'Wordpress Developer', 'assets/app-images/1603800544.jpg', 'https://www.facebook.com/najir.ahamed.71', '#', '#', '#', 'active'),
(8, 'Amir Hamja', 'Graphic Designer & Web Developer', 'assets/app-images/1603800581.jpg', '#', '#', '#', '#', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `technology`
--

CREATE TABLE `technology` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `img` varchar(150) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technology`
--

INSERT INTO `technology` (`id`, `name`, `img`, `status`) VALUES
(1, 'PHP', 'assets/app-images/1603801890.png', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solution`
--
ALTER TABLE `solution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technology`
--
ALTER TABLE `technology`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `solution`
--
ALTER TABLE `solution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `technology`
--
ALTER TABLE `technology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
