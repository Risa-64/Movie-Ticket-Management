-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2020 at 08:01 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmovie`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(100) DEFAULT NULL,
  `a_email` varchar(100) DEFAULT NULL,
  `a_password` text DEFAULT NULL,
  `a_phone` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`a_id`, `a_name`, `a_email`, `a_password`, `a_phone`) VALUES
(1, 'Admin', 'admin@email.com', '21232f297a57a5a743894a0e4a801fc3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `cat_id` int(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`cat_id`, `cat_name`) VALUES
(1, 'Horror'),
(2, 'Action'),
(3, 'Dramatic'),
(4, 'Animation'),
(14, 'ABC'),
(15, 'adsdasd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_movie`
--

CREATE TABLE `tb_movie` (
  `category_id` int(255) NOT NULL,
  `m_id` int(11) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `m_details` mediumtext NOT NULL,
  `m_price` float(11,2) NOT NULL,
  `m_photo` varchar(255) DEFAULT NULL,
  `m_status` int(11) NOT NULL,
  `m_cast` varchar(255) NOT NULL,
  `m_director` varchar(255) NOT NULL,
  `m_tailor` varchar(255) NOT NULL,
  `m_duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_movie`
--

INSERT INTO `tb_movie` (`category_id`, `m_id`, `m_name`, `m_details`, `m_price`, `m_photo`, `m_status`, `m_cast`, `m_director`, `m_tailor`, `m_duration`) VALUES
(0, 22, 'Kid King', 'English', 500.00, '4db829de4cc0fd43e1d13d4494da10d1e349b7b9adf8c79b0aa4019f3fb09a4087b4c63d280e8f8e2d4acda7a2a393f8Kid KId_image.jpg', 1, 'Louis Ashbourne Serkis and  Rebecca Ferguson.', 'Joe Cornish', 'https://www.youtube.com/results?search_query=kid+king+full+movie', '1hr 20mint'),
(0, 23, 'Angaar', 'Bangla Movie', 400.00, '6a7437d477ca1305d95af1be691df70458c1f897988a6b0be685b975fa58bdabAngaar_image.jpg', 1, 'Om and Falguni Rahman Jolly', 'Nehal Dutta, Wajed Ali Sumon', 'https://www.youtube.com/results?search_query=angaar+2019+trailer', '1hr 30mint'),
(0, 27, 'Ali Movie', 'English', 400.00, '2bfc03762f34c26f3d6fdf1502dbd5a0f0df4e5813052c4ed819be9ce2111525alimovie_image.jpg', 1, ' Will Smith as Cassius Clay Jr. / Cassius X / Muhammad Ali', 'Michael Mann', 'https://www.youtube.com/watch?v=STuHQ5HpmEE', '1hr 30mint'),
(1, 32, 'Mulan', 'English', 500.00, '4e50332bf6cc1b864d5e5f9265bfbedf56f65a359c7d95163ad8c9c5d0ff0276mulan.jpg', 1, ' Will Smith as Cassius Clay Jr. / Cassius X / Muhammad Ali', 'Michael Mann', 'https://www.youtube.com/watch?v=STuHQ5HpmEE', '1hr 30mint'),
(4, 33, 'Avaiter', 'English', 500.00, '5e5e5c5c8010c8200531265fd080be2a1a6dfda14fe5e79b10d370afb6911bdecf0f81d0e345f6f1dd77d7f578d3f3c0MV5BMTYzY2U0NjctNDJkNS00MmE3LWFiZGQtZjllZTIzYTQ4ODJkXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg', 1, 'CHLOE BENNET', 'Michael Mann', 'https://www.youtube.com/watch?v=Cg-h8TwQCgs', '1hr 20mint'),
(6, 34, 'Ajab prem ki gajab kahini', 'Hindi', 400.00, '7ee3a8e03550722b421d8ac5829a09d3hindi-comedy-movies-free-download-1.jpg', 1, 'Ranbir Kapur and katrina Kaif', 'Rajkumar Santoshi', 'https://www.youtube.com/watch?v=-Yd6UH5HbLA', '2 hr 24mint'),
(1, 35, 'Annabelli 2', 'English', 500.00, 'da61dfc20dc80dc7aa02e8fffbf5b309268x0w.jpg', 1, 'Stephanie Sigman as Sister Charlotte. Talitha Bateman as Janice.', 'David Sandberg', 'https://www.youtube.com/watch?v=EMa-KFfatT0', '1 hr 18mint');

-- --------------------------------------------------------

--
-- Table structure for table `tb_place`
--

CREATE TABLE `tb_place` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(10000) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `p_location` varchar(255) NOT NULL,
  `p_email` varchar(255) NOT NULL,
  `p_phone` int(100) NOT NULL,
  `p_day` varchar(255) NOT NULL,
  `p_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_place`
--

INSERT INTO `tb_place` (`p_id`, `p_name`, `p_address`, `p_location`, `p_email`, `p_phone`, `p_day`, `p_status`) VALUES
(3, 'John Doe', 'John Doe', 'uttara', 'user@example.com', 2147483647, 'wednesday', 1),
(4, 'Star cineplex', 'John Doe', 'uttara', 'user@example.com', 2147483647, 'wednesday', 1),
(5, 'Star cineplex', 'John Doe', 'Dhaka', 'user@example.com', 8801256, 'wednesday', 1),
(6, 'Blockbaster', 'Bashundhora racidensial area', 'Bashundhora jamuna future park', 'blockbaster@gmail.com', 880125609, '2020-W12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_seat`
--

CREATE TABLE `tb_seat` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_seat`
--

INSERT INTO `tb_seat` (`s_id`, `s_name`, `s_price`) VALUES
(5, '1A', '360'),
(6, '1B', '120'),
(7, '1C', '450'),
(8, '1D', '450'),
(9, '1E', '550'),
(10, '1F', '220');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ticket`
--

CREATE TABLE `tb_ticket` (
  `t_id` int(11) NOT NULL,
  `t_number` varchar(100) DEFAULT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `time_id` int(11) DEFAULT NULL,
  `t_phone` varchar(100) DEFAULT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `booking_date` date DEFAULT NULL,
  `booking_time` varchar(100) DEFAULT NULL,
  `t_payment_info` text DEFAULT NULL,
  `t_amount` varchar(20) DEFAULT NULL,
  `t_status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_ticket`
--

INSERT INTO `tb_ticket` (`t_id`, `t_number`, `movie_id`, `time_id`, `t_phone`, `user_id`, `booking_date`, `booking_time`, `t_payment_info`, `t_amount`, `t_status`) VALUES
(1, '5444', 22, 8, '5444', '1', '2020-06-26', '11:50am', 'bHHFGv22DBJNB', '620', 1),
(2, '4504513132161', 27, 13, '4504513132161', '1', '2020-06-26', '11:57am', 'tt5hgfhgd2h1', '1470', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ticket_seat`
--

CREATE TABLE `tb_ticket_seat` (
  `ts_id` int(11) NOT NULL,
  `ticket_id` int(11) DEFAULT NULL,
  `seat_id` int(11) DEFAULT NULL,
  `time_id` int(11) DEFAULT NULL,
  `movie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_ticket_seat`
--

INSERT INTO `tb_ticket_seat` (`ts_id`, `ticket_id`, `seat_id`, `time_id`, `movie_id`) VALUES
(1, 1, 6, 8, 22),
(2, 2, 7, 13, 27),
(3, 2, 10, 13, 27);

-- --------------------------------------------------------

--
-- Table structure for table `tb_time`
--

CREATE TABLE `tb_time` (
  `ti_id` int(10) NOT NULL,
  `movieid` int(10) NOT NULL,
  `ti_date` varchar(100) NOT NULL,
  `ti_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_time`
--

INSERT INTO `tb_time` (`ti_id`, `movieid`, `ti_date`, `ti_time`) VALUES
(1, 8, '2020-02-27', '03:00'),
(2, 11, '2020-02-28', '16:00'),
(3, 15, '2020-02-28', '12:00'),
(4, 8, '2020-02-29', '13:30'),
(5, 20, '2020-02-28', '19:00'),
(6, 23, '2020-03-01', '16:00'),
(7, 21, '2020-03-03', '12:00'),
(8, 22, '2020-03-04', '01:30'),
(9, 23, '2020-03-05', '16:00'),
(10, 24, '2020-03-02', '19:30'),
(11, 20, '2020-03-10', '12:00'),
(12, 26, '2020-03-10', '01:00'),
(13, 27, '2020-03-11', '13:00'),
(14, 29, '2020-03-11', '14:00'),
(15, 30, '2020-03-12', '15:00'),
(16, 33, '2020-03-10', '13:00'),
(17, 34, '2020-03-09', '14:00'),
(18, 35, '2020-03-12', '12:00'),
(19, 35, '2020-03-09', '13:00'),
(20, 27, '2020-04-22', '00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(200) DEFAULT NULL,
  `u_password` text DEFAULT NULL,
  `u_email` varchar(100) DEFAULT NULL,
  `u_phone` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`u_id`, `u_name`, `u_password`, `u_email`, `u_phone`) VALUES
(1, 'User', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@email.com', '01824168996');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tb_movie`
--
ALTER TABLE `tb_movie`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tb_place`
--
ALTER TABLE `tb_place`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tb_seat`
--
ALTER TABLE `tb_seat`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tb_ticket`
--
ALTER TABLE `tb_ticket`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `tb_ticket_seat`
--
ALTER TABLE `tb_ticket_seat`
  ADD PRIMARY KEY (`ts_id`);

--
-- Indexes for table `tb_time`
--
ALTER TABLE `tb_time`
  ADD PRIMARY KEY (`ti_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_movie`
--
ALTER TABLE `tb_movie`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_place`
--
ALTER TABLE `tb_place`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_seat`
--
ALTER TABLE `tb_seat`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_ticket`
--
ALTER TABLE `tb_ticket`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_ticket_seat`
--
ALTER TABLE `tb_ticket_seat`
  MODIFY `ts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_time`
--
ALTER TABLE `tb_time`
  MODIFY `ti_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
