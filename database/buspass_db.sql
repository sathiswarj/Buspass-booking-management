-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 05:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buspass_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `username`, `password`) VALUES
(1, 'sathis', 'sathis');

-- --------------------------------------------------------

--
-- Table structure for table `buspass_settings_tbl`
--

CREATE TABLE `buspass_settings_tbl` (
  `id` int(100) NOT NULL,
  `from_stop` varchar(255) NOT NULL,
  `to_stop` varchar(255) NOT NULL,
  `bus_pass_rate` varchar(500) NOT NULL,
  `note` longtext NOT NULL,
  `validate_days` varchar(200) NOT NULL,
  `status` int(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buspass_settings_tbl`
--

INSERT INTO `buspass_settings_tbl` (`id`, `from_stop`, `to_stop`, `bus_pass_rate`, `note`, `validate_days`, `status`) VALUES
(151, 'sathis', 'lap1', '1000', 'hi', '28', 0),
(184, 'goripalayam', 'sellur', '1000', 'hi', '28', 1),
(191, 'laptop', 'lap1', '1000', '', '100', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment_tbl`
--

CREATE TABLE `payment_tbl` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `card_number` varchar(200) NOT NULL,
  `exp_date` int(11) NOT NULL,
  `cvv_number` int(11) NOT NULL,
  `card_holder` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_tbl`
--

INSERT INTO `payment_tbl` (`id`, `user_id`, `card_number`, `exp_date`, `cvv_number`, `card_holder`, `created_at`) VALUES
(60, '', 'Cathleen Cortez', 0, 0, 'Simon Rosal', '2023-04-18 07:31:12'),
(61, '', 'Fredericka Richmond', 0, 0, 'Martina Bat', '2023-04-18 09:04:38'),
(64, '', 'Leslie Lang', 0, 0, 'Myles Greer', '2023-04-18 09:09:15'),
(78, '', 'Abra Newton', 0, 0, 'Latifah Mat', '2023-04-25 17:08:23'),
(83, '', 'Faith Saunders', 0, 0, 'Priscilla F', '2023-04-26 04:31:37'),
(84, '', 'Hashim Wong', 0, 0, 'Eugenia Bur', '2023-04-26 13:28:14'),
(85, '', 'Eaton Bush', 0, 0, 'Preston Far', '2023-04-26 15:45:11'),
(91, '', 'Erin Clayton', 0, 0, 'Amir Gilles', '2023-04-28 14:13:07'),
(92, '', '55555', 12, 1111, 'Wynter Shar', '2023-04-29 02:53:06'),
(93, '', '', 0, 0, '', '2023-04-29 03:17:40'),
(94, '', '', 0, 0, '', '2023-04-29 03:17:50'),
(95, '', '', 0, 0, '', '2023-04-29 03:19:59'),
(96, '', 'Ivan Hensley', 0, 0, 'Iris Fowler', '2023-04-29 04:59:25'),
(97, '', '', 0, 0, '', '2023-04-29 05:05:30'),
(98, '', 'Matthew Carson', 0, 0, 'Alana Ashle', '2023-04-29 06:11:54'),
(99, '', 'Shea Mejia', 0, 0, 'Cameron Hes', '2023-04-29 06:50:48'),
(100, '', 'Sandra Chan', 0, 0, 'Tara Willia', '2023-04-29 07:33:41'),
(101, '', 'Asher Peters', 0, 0, 'Zenaida Cla', '2023-04-29 10:21:26'),
(102, '', 'Hakeem Head', 0, 0, 'Barrett Gre', '2023-04-30 05:34:09'),
(103, '', 'Indigo Shelton', 0, 0, 'Nero Kirk', '2023-04-30 17:06:13'),
(104, '', 'Galena Bernard', 0, 0, 'Boris Delan', '2023-05-02 10:10:42'),
(105, '', 'Raya Cross', 0, 0, 'Kiara Faulk', '2023-05-05 07:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(200) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `clg_name` varchar(100) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_dob` date NOT NULL,
  `user_age` int(50) NOT NULL,
  `user_add` varchar(500) NOT NULL,
  `user_no` varchar(100) NOT NULL,
  `from_stop` varchar(100) NOT NULL,
  `to_stop` varchar(100) NOT NULL,
  `user_proof` varchar(50) NOT NULL,
  `user_passport` varchar(50) NOT NULL,
  `user_aadhar_img` varchar(50) NOT NULL,
  `payment_proof` varchar(100) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_gmail` varchar(500) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `bus_pass_status` int(5) NOT NULL DEFAULT 1,
  `amount` int(100) NOT NULL DEFAULT 1000,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `user_name`, `user_type`, `clg_name`, `user_gender`, `user_dob`, `user_age`, `user_add`, `user_no`, `from_stop`, `to_stop`, `user_proof`, `user_passport`, `user_aadhar_img`, `payment_proof`, `user_password`, `user_gmail`, `date_from`, `date_to`, `bus_pass_status`, `amount`, `created_at`) VALUES
(799, 'muthu kumar M', 'school student', '', '', '0000-00-00', 0, '', '753951', 'solangurunie', 'periyar', 'img-5.png', 'about-img.png', 'pngimg.com - mario_PNG125.png', '', 'mk', 'muthukumar@gmail.com', '0000-00-00', '0000-00-00', 1, 1000, '2023-04-27 18:21:34'),
(800, 'jeyakrishnan', 'school student', '', '', '2023-03-23', 0, '', '357951', '', '', 'pngimg.com - mario_PNG125.png', 'news-img.png', 'about-img.png', '', 'jeya', 'jeya@gmail.com', '0000-00-00', '0000-00-00', 2, 1000, '2023-04-25 17:37:35'),
(887, 'vasanth', 'college student', 'slcs', '', '2023-03-28', 18, '', '8529637410', 'dffsd', '2222', 'about-img.png', 'client-img.png', 'about-img.png', '', 'vasanth', 'vasanth@gmail.com', '0000-00-00', '0000-00-00', 1, 1000, '2023-04-05 09:33:26'),
(900, 'kavi', 'college student', 'slcs', '', '0000-00-00', 0, '', '789456', 'mdu', 'rmd', 'Screenshot (1).png', 'Screenshot (5).png', '', '', 'kavi', 'kavi@gmail.com', '0000-00-00', '0000-00-00', 1, 1000, '2023-04-03 10:05:07'),
(909, 'qezygyvih', 'school student', 'Winters Hurst Plc', 'male', '2002-06-15', 15, 'Qui aliqua Optio s', '13', 'Amet voluptatibus e', 'Nihil aperiam archit', '', '', '', '', 'Pa$$w0rd!', 'Laudantium aperiam ', '0000-00-00', '0000-00-00', 1, 1000, '2023-04-16 18:35:01'),
(910, 'cipikareqe', 'school student', 'Cobb Silva LLC', '', '1980-12-05', 82, '', '70', 'Harum assumenda est ', 'Nesciunt sit commod', '', '', '', '', 'Pa$$w0rd!', 'Aut officiis enim ex', '0000-00-00', '0000-00-00', 2, 1000, '2023-04-25 17:50:40'),
(911, 'lulaja', 'school student', 'Ray and Lowe Associates', 'male', '2017-05-16', 12, 'Quia doloremque sit', '48', 'Repellendus Veritat', 'Enim laborum aut mag', '', '', '', '', 'Pa$$w0rd!', 'Natus reprehenderit', '0000-00-00', '0000-00-00', 1, 1000, '2023-04-16 18:37:46'),
(912, 'bozenaz', 'school student', 'Whitfield Mcbride Traders', '', '2013-07-08', 32, '', '80', 'Ea aspernatur ea qui', 'In incididunt non ex', '', '', '', '', 'Pa$$w0rd!', 'Ab sunt animi duis ', '0000-00-00', '0000-00-00', 2, 1000, '2023-04-25 17:37:02'),
(913, 'sasyno', 'school student', 'Chen Whitehead Co', '', '1977-04-25', 52, '', '9', 'Sequi voluptas volup', 'Ea aperiam amet imp', '', '', '', '', 'Pa$$w0rd!', 'Qui magni magnam rep', '2023-04-06', '2023-04-19', 2, 1000, '2023-04-17 10:53:53'),
(916, 'jylacega', 'school student', 'Chavez and Flowers Inc', '', '2016-10-11', 11, '', '79', 'Harum dolor officia ', 'Occaecat sit obcaec', '', '', '', '', 'Pa$$w0rd!', 'Esse corporis quo et', '0000-00-00', '0000-00-00', 2, 1000, '2023-04-18 09:10:39'),
(928, 'joy', 'college student', 'Mcneil and Mcdowell Co', '', '2021-06-11', 37, '', '51', 'Velit amet nostrum', 'Dolorem magni offici', '1943050.jpg', 'client-img.png', 'buspass-boy.webp', '', '12345', 'Qui non quidem dolor', '0000-00-00', '0000-00-00', 2, 1000, '2023-04-19 04:58:05'),
(941, 'muthu', 'college student', 'Franklin and Mcconnell Traders', '', '0000-00-00', 0, '', '', 'Solankuruni', 'Tallakulam ', '', 'clg2.jfif', '', '', '', '', '0000-00-00', '0000-00-00', 2, 1000, '2023-04-19 09:03:26'),
(946, 'menazi', 'working employee', 'Schultz and Jensen Plc', 'male', '2013-04-03', 13, 'Enim elit labore re', '95', 'Exercitationem qui a', 'Cillum sunt in natus', 'buspass-boy.webp', 'buspass-boy.webp', '1943050.jpg', '', 'Pa$$w0rd!', 'Ad veniam est adipi', '0000-00-00', '0000-00-00', 1, 1000, '2023-04-19 10:23:50'),
(947, 'tebeco', 'senior citizen', 'Nguyen and Griffith Traders', 'male', '1985-08-18', 14, 'Non iste quae magna ', '92', 'Voluptatem in omnis ', 'Vel Nam hic nulla vo', 'about.jpg', 'feature-1.jpg', 'about.jpg', '', 'Pa$$w0rd!', 'Mollitia fugiat vit', '0000-00-00', '0000-00-00', 1, 1000, '2023-04-21 15:25:57'),
(948, 'hocurykete', 'physically challenged', 'Melton and Lloyd Trading', 'male', '1993-03-12', 3, 'Distinctio Beatae l', '41', 'Velit unde anim et ', 'Corporis esse ut co', 'about.jpg', 'feature-1.jpg', 'about.jpg', '', 'Pa$$w0rd!', 'Ea iusto laborum Au', '0000-00-00', '0000-00-00', 1, 1000, '2023-04-21 15:26:53'),
(949, 'hoqutakaw', 'working employee', 'Moreno and Weiss Co', '', '1996-04-27', 38, '', '97', 'Et exercitation dolo', 'Quos vel eius autem ', 'module_table_bottom.png', 'module_table_top.png', 'module_table_top.png', '', 'Pa$$w0rd!', 'Pariatur Accusamus ', '0000-00-00', '0000-00-00', 2, 1000, '2023-04-25 17:21:56'),
(950, 'zeqyx', 'school student', 'Holman and Hutchinson Plc', '', '2003-02-21', 61, '', '16', 'Quod corrupti tenet', 'Voluptate est non Na', '', '', '', '', 'Pa$$w0rd!', 'Sit eum nihil elit ', '2023-04-08', '2023-04-22', 2, 1000, '2023-04-25 17:22:15'),
(951, 'gotejig', 'school student', 'Hewitt and Pickett Co', '', '1994-12-15', 47, '', '100', 'Officiis dolores rep', 'Culpa non fuga Reic', '', '', '', '', 'Pa$$w0rd!', 'Odio qui perspiciati', '0000-00-00', '0000-00-00', 1, 1000, '2023-04-25 17:48:53'),
(952, 'bupan k', 'school student', 'Ellison Crawford Plc', '', '1987-05-17', 71, '', '44444', 'Est iure dolorum om', 'Qui quo laborum dolo', '', '', '', '', 'Pa$$w0rd!', 'Est quas inventore o', '2023-04-14', '2023-04-30', 2, 1000, '2023-04-25 18:09:05'),
(953, 'bofyde', 'physically challenged', 'Rivera and Rogers Associates', '', '1997-09-02', 56, '', '66884', 'Nisi exercitation ar', 'Eaque atque totam ar', '', '', '', '', 'Pa$$w0rd!', 'Ut modi officiis aut', '2023-04-30', '2023-04-23', 2, 1000, '2023-04-25 18:18:22'),
(954, 'kogatyxag', 'school student', 'Hickman Witt LLC', '', '2000-07-23', 78, '', '24', 'Ipsum eligendi exce', 'Molestias vel sapien', 'buspass-boy.webp', 'buspass-boy.webp', 'buspass-boy.webp', '', 'kogatyxag', 'Minima quis quo ut s', '0000-00-00', '0000-00-00', 1, 1000, '2023-04-26 02:43:18'),
(955, 'byqyqobo', 'senior citizen', 'Jarvis Mccarthy LLC', '', '1989-12-25', 47, '', '1574', 'Dicta qui voluptatem', 'Qui dolor architecto', '', '', '', '', 'Pa$$w0rd!', 'Excepturi debitis ir', '2023-04-26', '2023-05-26', 2, 1000, '2023-04-26 04:33:28'),
(956, 'kupec', 'senior citizen', 'Walters Stout Traders', '', '2019-05-07', 85, '', '44555', 'Harum similique irur', 'Officia assumenda re', '', '', '', '', 'Pa$$w0rd!', 'Accusamus lorem null', '0000-00-00', '0000-00-00', 2, 1000, '2023-04-26 13:29:11'),
(957, 'fumas', 'working employee', 'Sanford Pierce Co', '', '1995-10-24', 44, '', '3223', 'Aut saepe voluptas q', 'Quia nobis nihil tot', '', '', '', '', 'Pa$$w0rd!', 'Vero id asperiores s', '2023-04-01', '2023-04-30', 2, 1000, '2023-04-26 15:47:14'),
(958, 'pimocy', 'school student', 'Beasley Cox Trading', 'male', '2023-03-28', 47, 'Dolores commodi mole', '52', 'Fuga Ut quasi sint ', 'Tempora mollitia max', '', '', '', '', 'Pa$$w0rd!', 'Sed alias at dolor a', '0000-00-00', '0000-00-00', 1, 1000, '2023-04-27 02:39:46'),
(959, 'xexakilo', 'school student', 'Gilbert and May LLC', '', '1987-11-03', 80, '', '66', 'Dolore in minus quib', 'Sunt veritatis offic', '', 'buspass-boy.webp', '', '', 'Pa$$w0rd!', 'Architecto est volup', '0000-00-00', '0000-00-00', 1, 1000, '2023-04-27 07:03:10'),
(960, 'geqih', 'school student', 'Rosales Dickerson Inc', '', '2001-10-12', 3, '', '28', 'Totam accusantium do', 'Optio sunt exercitvhbjnk', '', '', '', '', 'Pa$$w0rd!', 'Aut iusto perspiciat', '0000-00-00', '0000-00-00', 2, 1000, '2023-04-27 10:39:59'),
(961, 'njnncfvghbjn', 'senior citizen', 'xrtcvbhjnkml', '', '2023-04-30', 45, '', '77', 'Nagamalaipudukottai (CT)', 'Jothimanickam  ', '', '', '', '', 'xcfgbjnk', 'xhcfgvhbjk', '0000-00-00', '0000-00-00', 2, 1000, '2023-04-27 18:01:14'),
(962, 'sddxfcgvh', 'working employee', 'rrzrxcvbnm,;', '', '2023-04-21', 546, '', '13', 'Thenpalanji', 'Harveypatti (TP)', '', '', '', '', 'cfghbjnk', '565', '0000-00-00', '0000-00-00', 2, 1000, '2023-04-27 18:20:59'),
(963, 'nogafekifo', 'senior citizen', 'Willis and Ball LLC', 'male', '1985-12-03', 45, 'Dolor aut sed ut bla', '80', 'Accusamus ad aperiam', 'Enim aute vero magna', '', '', '', '', 'Pa$$w0rd!', 'Reprehenderit sit do', '0000-00-00', '0000-00-00', 1, 1000, '2023-04-28 02:59:41'),
(964, 'temusuda', 'senior citizen', 'Fischer Hurley Traders', '', '2003-09-28', 8, '', '8484', 'Incididunt perferend', 'Reprehenderit sed eu', '', 'bus1.jfif', '', '', 'Pa$$w0rd!', 'Similique voluptate ', '0000-00-00', '0000-00-00', 2, 1000, '2023-04-28 14:14:37'),
(965, 'tubitiqe', 'senior citizen', 'Douglas Maldonado Inc', '', '2004-10-01', 10, '', '82', 'Consectetur culpa a', 'Nostrum ratione impe', '', '', '', '', 'Pa$$w0rd!', 'Delectus incididunt', '2023-04-15', '2023-04-30', 2, 1000, '2023-04-29 02:55:04'),
(966, 'piryf', 'school student', 'Romero Ayala Traders', '', '1979-11-03', 92, '', '3', 'Totam nihil mollitia', 'Earum sit sint offi', '', '', '', '', 'Pa$$w0rd!', 'Vitae non eligendi q', '0000-00-00', '0000-00-00', 1, 1000, '2023-04-29 02:58:10'),
(967, 'kyfyregaw', 'school student', 'Clayton and Bell Trading', '', '1999-05-14', 57, '', '2828', 'Ut sint totam dolori', 'Fugit quia ad cupid', '', 'buspass-boy.webp', '', '', 'Pa$$w0rd!', 'Ipsum perferendis u', '0000-00-00', '0000-00-00', 1, 1000, '2023-04-29 05:08:18'),
(968, 'qucyfuzi', 'school student', 'Fitzpatrick Gomez Traders', 'male', '1974-12-06', 66, 'Est aut ratione vel', '63', 'Repudiandae est exce', 'Dolores voluptas Nam', '', '', '', '', 'Pa$$w0rd!', 'Possimus illo magna', '0000-00-00', '0000-00-00', 1, 1000, '2023-04-29 04:59:14'),
(969, 'nimaryz', 'school student', 'May and Williams Associates', '', '1972-03-11', 78, '', '4', 'Quos sit id ea sed', 'Enim qui esse ad vo', '', '', '', '', '111', 'Qui ipsam eos ea qu', '0000-00-00', '0000-00-00', 2, 1000, '2023-04-30 06:13:08'),
(970, 'wafibo', 'school student', 'Conner Franklin Trading', '', '2003-02-11', 84, '', '100', 'Sunt nisi qui fuga ', 'Et molestiae ab et c', '', '', '', '', 'Pa$$w0rd!', 'Commodi et qui dolor', '0000-00-00', '0000-00-00', 2, 1000, '2023-04-29 06:51:17'),
(971, 'karupu', 'college student', 'Vasquez Noble Co', 'male', '1993-08-18', 85, 'Eaque tempora ullam ', '74', 'Elit est laudantiu', 'Optio ad corrupti ', '', '', '', '', 'Pa$$w0rd!', 'Odit aperiam aut qua', '0000-00-00', '0000-00-00', 1, 1000, '2023-04-29 06:50:42'),
(972, 'webecotyb', 'school student', 'Valenzuela and Harmon Associates', 'male', '1971-02-07', 11, 'Maxime nulla adipisc', '38', 'Sit est nihil sit ', 'Alias et proident e', '', '', '', '', 'Pa$$w0rd!', 'Iste anim repudianda', '0000-00-00', '0000-00-00', 1, 1000, '2023-04-29 07:33:33'),
(973, 'kisuziv', 'school student', 'Nichols Mooney Associates', 'male', '2015-08-03', 18, 'Excepturi earum sunt', '75', 'Aut architecto eos l', 'Rem harum repellendu', '', '', '', '', 'Pa$$w0rd!', 'Rerum suscipit molli', '0000-00-00', '0000-00-00', 1, 1000, '2023-04-29 10:21:16'),
(974, 'tizatog', 'school student', 'Cameron and Durham Plc', '', '2012-09-19', 59, '', '69', 'Quis non dolor ea fu', 'Quidem magni eum id', '', '', '', '', 'Pa$$w0rd!', 'Dolor ea dignissimos', '0000-00-00', '0000-00-00', 1, 1000, '2023-04-30 05:35:24'),
(975, 'tawymytu', 'school student', 'Hester and Hood Associates', '', '1998-12-23', 61, '', '3535', 'Aut earum illo maxim', 'Voluptatem voluptati', '', '', '', '', 'Pa$$w0rd!', 'Non blanditiis deser', '0000-00-00', '0000-00-00', 1, 1000, '2023-04-30 17:09:01'),
(976, 'vasanth', 'school student', 'Travis Hickman LLC', '', '1978-12-07', 67, '', '14', 'Asperiores ducimus ', 'Enim temporibus dolo', '', '', '', '', 'Pa$$w0rd!', 'Tenetur incidunt au', '0000-00-00', '0000-00-00', 2, 1000, '2023-05-02 10:11:55'),
(977, 'dazute', 'school student', 'Hahn Bolton Trading', '', '2009-04-25', 73, '', '225', 'Culpa nisi assumenda', 'Nulla labore volupta', '', '', '', '', 'Pa$$w0rd!', 'Quod aliquip volupta', '0000-00-00', '0000-00-00', 2, 1000, '2023-05-05 07:45:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buspass_settings_tbl`
--
ALTER TABLE `buspass_settings_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buspass_settings_tbl`
--
ALTER TABLE `buspass_settings_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=978;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
