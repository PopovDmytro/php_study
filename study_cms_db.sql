-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 20, 2018 at 10:45 PM
-- Server version: 5.6.38
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
-- Database: `cms`
--
CREATE DATABASE IF NOT EXISTS `cms` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cms`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Bootstrap'),
(2, 'JavaScript'),
(5, 'PHP'),
(12, 'Python'),
(13, 'Java'),
(14, 'Woof woof !!!');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_post_id` int(11) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(18, 5, 'I am terminator', 'com@terminator.com', 'Lorem porem', 'approved', '2018-02-18'),
(19, 2, 'mm', 'mm@mm.co', 'toooo ooo ooo', 'unapproved', '2018-02-20'),
(20, 2, 'asd', 'asd@asd', 'asd', 'unapproved', '2018-02-20'),
(21, 2, 'asda', 'asd@asda', 'sd', 'unapproved', '2018-02-20'),
(22, 6, '123', '123@asd', '123', 'unapproved', '2018-02-20'),
(23, 6, 'sdf', 'sdf@asdf', 'sdf', 'unapproved', '2018-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_views_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`, `post_views_count`) VALUES
(2, 2, '1', 'i Do NOt now who', '2016-10-12', 'juno-jupiter-15.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.', 'second, php', 2, 'published', 10),
(5, 12, 'asd', 'asd', '2018-02-14', 'headerBanner.jpg', '        asfs fasf asdf asf', 'sgadsg', 1, 'published', 1),
(6, 1, 'Title lorem', 'NEw author', '2018-02-14', 'диван-габариты.jpg', 'Lorem 10001', 'new file', 0, 'published', 13),
(11, 1, 'First Post', 'I am authorher sfgdsfgdgfdf', '2018-02-19', 'CMS_Creative_453010393_NeonShapes.jpg', '<p>L<strong>orem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicab</strong>o libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.</p>', 'php, code, first', 0, 'published', 0),
(12, 2, '2', 'i Do NOt now who', '2018-02-19', 'juno-jupiter-15.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.', 'second, php', 0, 'published', 0),
(13, 1, 'First Post', 'I am authorher sfgdsfgdgfdf', '2018-02-19', 'CMS_Creative_453010393_NeonShapes.jpg', '<p>L<strong>orem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicab</strong>o libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.</p>', 'php, code, first', 0, 'published', 0),
(14, 2, 'Second', 'i Do NOt now who', '2018-02-19', 'juno-jupiter-15.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.', 'second, php', 0, 'published', 0),
(15, 2, 'Second', 'i Do NOt now who', '2018-02-20', 'juno-jupiter-15.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.', 'second, php', 0, 'published', 0),
(16, 1, '3', 'I am authorher sfgdsfgdgfdf', '2018-02-20', 'CMS_Creative_453010393_NeonShapes.jpg', '<p>L<strong>orem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicab</strong>o libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.</p>', 'php, code, first', 0, 'published', 0),
(17, 2, 'Second', 'i Do NOt now who', '2018-02-20', 'juno-jupiter-15.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.', 'second, php', 0, 'published', 0),
(18, 1, 'First Post', 'I am authorher sfgdsfgdgfdf', '2018-02-20', 'CMS_Creative_453010393_NeonShapes.jpg', '<p>L<strong>orem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicab</strong>o libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.</p>', 'php, code, first', 0, 'published', 0),
(19, 1, 'Title lorem', 'NEw author', '2018-02-20', 'диван-габариты.jpg', 'Lorem 10001', 'new file', 0, 'published', 0),
(20, 12, '4', 'asd', '2018-02-20', 'headerBanner.jpg', '        asfs fasf asdf asf', 'sgadsg', 0, 'published', 0),
(21, 2, 'Second', 'i Do NOt now who', '2018-02-20', 'juno-jupiter-15.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.', 'second, php', 0, 'published', 0),
(22, 2, 'Second', 'i Do NOt now who', '2018-02-20', 'juno-jupiter-15.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.', 'second, php', 0, 'published', 0),
(23, 12, 'asd', 'asd', '2018-02-20', 'headerBanner.jpg', '        asfs fasf asdf asf', 'sgadsg', 0, 'published', 0),
(24, 1, 'Title lorem', 'NEw author', '2018-02-20', 'диван-габариты.jpg', 'Lorem 10001', 'new file', 0, 'published', 0),
(25, 1, 'First Post', 'I am authorher sfgdsfgdgfdf', '2018-02-20', 'CMS_Creative_453010393_NeonShapes.jpg', '<p>L<strong>orem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicab</strong>o libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.</p>', 'php, code, first', 0, 'published', 0),
(26, 2, '5', 'i Do NOt now who', '2018-02-20', 'juno-jupiter-15.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.', 'second, php', 0, 'published', 0),
(27, 1, 'First Post', 'I am authorher sfgdsfgdgfdf', '2018-02-20', 'CMS_Creative_453010393_NeonShapes.jpg', '<p>L<strong>orem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicab</strong>o libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.</p>', 'php, code, first', 0, 'published', 0),
(28, 2, 'Second', 'i Do NOt now who', '2018-02-20', 'juno-jupiter-15.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.', 'second, php', 0, 'published', 0),
(29, 2, 'Second', 'i Do NOt now who', '2018-02-20', 'juno-jupiter-15.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.', 'second, php', 0, 'published', 0),
(30, 1, 'First Post', 'I am authorher sfgdsfgdgfdf', '2018-02-20', 'CMS_Creative_453010393_NeonShapes.jpg', '<p>L<strong>orem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicab</strong>o libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.</p>', 'php, code, first', 0, 'published', 0),
(31, 2, 'Second', 'i Do NOt now who', '2018-02-20', 'juno-jupiter-15.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicabo libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.', 'second, php', 0, 'published', 0),
(32, 1, 'First Post', 'I am authorher sfgdsfgdgfdf', '2018-02-20', 'CMS_Creative_453010393_NeonShapes.jpg', '<p>L<strong>orem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid explicab</strong>o libero maiores pariatur quasi suscipit ullam. A aperiam consequatur distinctio dolorem doloremque, illum iste, laborum, molestiae obcaecati rerum veniam vero.</p>', 'php, code, first', 0, 'published', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2$10$asdfghjklqewrettdgcgd1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(1, 'Ravno', '$1$iyqdaqPn$Msb4bvuUk6J28PqH1Sr9K/', 'Rico', 'Suave', 'rico@co.com', 'kings_of_the_realm_by_grafit_art-d7pwk0f.jpg', 'subscriber', ''),
(5, 'Name', '123', 'Name', 'nama', 'mao@mao.ju', 'switzerland_alps_mountains_night_beautiful_landscape_99817_3840x2160.jpg', 'subscriber', ''),
(6, 'FI', 'pas', 'woo', 'woo', 'woo@woo.sdfl', 'soldier_complete_by_duster132-d5rw7n9.jpg', 'subscriber', ''),
(7, 'Oc', '123', 'N', 'P', 'g@g.d', 'viking-1.jpg', 'admin', ''),
(14, 'One', '$1$8e/3I705$t0Oh6lT2j8ETdZzBZyZ2r/', 'one', 'one', 'one@one.com', '', 'admin', '$2$10$asdfghjklqewrettdgcgd1'),
(16, 'goo', '$2y$12$CnOOzv75vGN4SClSqqJuM.3UESrQq4EWWnTT5PY47TNhcWIcH.J8C', '', '', 'goo@goog.com', '', 'admin', '$2$10$asdfghjklqewrettdgcgd1'),
(18, 'qwe', '$2y$05$ZutvHGeMkoFYLj0fRkQskeehLvFhEFWyP6DACaJRyosfnAbkAtDui', '', '', 'qwe@qwe', '', 'admin', '$2$10$asdfghjklqewrettdgcgd1');

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE `users_online` (
  `id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_online`
--

INSERT INTO `users_online` (`id`, `session`, `time`) VALUES
(1, 'cglf4ovqhimf2f8vhlslh8srikjh85gf', 1519143592),
(2, 'cb3h4i2lp039j1rqs8s047jiogo1oj46', 1519121663),
(3, 'h9rtb942ppoddg9cjoeuudkmb77qempd', 1519121792),
(4, '6pva26p0g3r576sku5p30ddqi2qlrrao', 1519130250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_online`
--
ALTER TABLE `users_online`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=484;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users_online`
--
ALTER TABLE `users_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
