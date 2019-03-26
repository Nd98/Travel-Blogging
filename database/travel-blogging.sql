-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 05:54 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel-blogging`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_photos`
--

CREATE TABLE `blog_photos` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `image_category` varchar(100) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `tags` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `creation_date` date NOT NULL,
  `excerpt` varchar(100) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `header_image` varchar(100) NOT NULL,
  `tags` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `username`, `title`, `creation_date`, `excerpt`, `content`, `header_image`, `tags`) VALUES
(13, 'nd', 'PHP', '2019-03-21', 'fjidhji', 'hridk', 'img/places/europe/4.PNG', 'oipjfehkd'),
(14, 'nd', 'PHP', '2019-03-21', 'fjidhji', 'hridk', 'img/places/europe/4.PNG', 'oipjfehkd'),
(15, 'nd', 'Manish', '2019-03-21', 'Tc-1', 'Tc-1 ka launda', 'img/places/europe/Capture10.PNG', 'maniya'),
(16, 'nd', 'hklnj', '2019-03-21', 'h', 'hkjhhhjbbnjkhbh', 'img/places/east/18.PNG', 'h'),
(17, 'nd', 'dcc', '2019-03-21', 'vfv', 'bmnh', 'img/places/east/5.PNG', 'hjg'),
(18, 'nd', 'React', '2019-03-22', 'React', 'Reatc', 'img/places/asia/adv4.PNG', 'asia'),
(19, 'nd', '', '2019-03-22', '', '', 'img/places/Choose place.../', 'Choose place...'),
(20, 'nd', 'hey', '2019-03-22', 'jhdgc', 'kjsdn,m', 'img/places/asia/14-chess-png-image.png', 'asia'),
(21, 'nd', '.kj/hj,fhm', '2019-03-22', ',m.bnvf', ',.mnbdc', 'img/places/asia/adv14.PNG', 'asia'),
(22, 'nd', 'n,hjmh', '2019-03-22', 'n,mnb', 'n,mv', 'img/places/asia/87aae516-a3e2-4184-8a43-70b1d4b9afb3.png', 'asia'),
(23, 'nd', 'lkhjkj', '2019-03-22', 'hjkg', 'jk.h,g', 'img/places/asia/87aae516-a3e2-4184-8a43-70b1d4b9afb3.png', 'asia'),
(24, 'manish', 'k;hjdhvghxc', '2019-03-22', 'kjjsdghc', 'm,hjmdvsm', 'img/places/asia/18.PNG', 'asia'),
(25, 'nd', 'k;hjgn', '2019-03-22', 'hjfgv', 'khjghfhg', 'img/places/asia/14-chess-png-image.png', 'asia'),
(26, 'sp0031', 'hja', '2019-03-22', 'asdjjsabdjsabda', 'asd', 'img/places/asia/2.PNG', 'asia'),
(27, 'bhaumik', 'Testing', '2019-03-23', 'This is sampple test case', 'qwertyuiopdfghjkl dfghjk4567890 ertyui90rfghjkvbn', 'img/places/asia/3.PNG', 'asia');

-- --------------------------------------------------------

--
-- Table structure for table `blog_videos`
--

CREATE TABLE `blog_videos` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `video_path` varchar(100) NOT NULL,
  `video_name` varchar(100) NOT NULL,
  `video_category` varchar(100) NOT NULL,
  `tags` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Nayan Dagliya', 'nayandagliya1998@gmail.com', 'hg', 'ghf');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `post_id` int(10) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `username`, `post_id`, `comment`) VALUES
(3, 'nd', 19, 'WOW'),
(4, 'nd', 20, 'OHOOO');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_of_posts` int(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `username`, `email`, `password`, `no_of_posts`) VALUES
(1, 'nd', 'bptpgt@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(2, 'manish', 'man@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(3, 'sp0031', 'soham.parekh100639@marwadiuiiversity.ac.in', 'e4dc20af52acd07a1e1ec3de921ea719', 0),
(4, 'bhaumik', 'bhaumik@gmail.com', 'daa96d9681a21445772454cbddf0cac1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_photos`
--
ALTER TABLE `blog_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_videos`
--
ALTER TABLE `blog_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_photos`
--
ALTER TABLE `blog_photos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `blog_videos`
--
ALTER TABLE `blog_videos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
