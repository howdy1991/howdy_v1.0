-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 21, 2016 at 04:05 AM
-- Server version: 5.5.52-cll-lve
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `findfriends`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_title` varchar(32) NOT NULL,
  `album_description` text NOT NULL,
  `created_by` varchar(32) NOT NULL,
  `date_created` date NOT NULL,
  `uid` varchar(32) NOT NULL,
  `removed` varchar(3) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `album_title`, `album_description`, `created_by`, `date_created`, `uid`, `removed`) VALUES
(1, 'This is a test album', 'Testing description', 'drisha', '2016-04-25', 'test', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `friend_requests`
--

CREATE TABLE IF NOT EXISTS `friend_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_from` varchar(255) NOT NULL,
  `user_to` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(32) NOT NULL,
  `user_liked` varchar(50) NOT NULL,
  `total_likes` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `uid`, `user_liked`, `total_likes`) VALUES
(1, 'drishatest', 'drisha', 4),
(2, '', '-1', 2147483647),
(3, '2d4282570daa6d2534771d5a9f905438', '', -1),
(4, '2a92d3d42ad3d1b04ac8663967c56526', 'drisha', -1),
(5, 'b70b104b261788f9414a4fb52dcb1293', 'drisha', -1),
(6, 'b0393fa128c849421f664ce7b1b03a04', 'drisha', -1),
(7, 'drisha', 'drisha', -1),
(8, '', '', -1),
(9, 'anjali', 'anjali', -1),
(10, 'Test', 'Test', -1);

-- --------------------------------------------------------

--
-- Table structure for table `like_buttons`
--

CREATE TABLE IF NOT EXISTS `like_buttons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `page_url` text NOT NULL,
  `date_added` date NOT NULL,
  `uid` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `like_buttons`
--

INSERT INTO `like_buttons` (`id`, `username`, `page_url`, `date_added`, `uid`) VALUES
(1, '', 'http://www.google.com', '0000-00-00', 'a53f03776b19f284e9a872394d82525b'),
(2, '', 'http://www.google.com', '0000-00-00', 'cff9b53d662decf14b394a8c25707eb5'),
(3, '', 'http://www.tcs.com', '0000-00-00', '55f6524b9b0b12464c76f5d791fdb8fe'),
(4, '', 'http://www.tcs.com', '2016-04-24', '04b2283b817c6acca27d54257847db26'),
(5, '', 'http://www.tcs.com', '2016-04-24', 'f7a0cbc890914b368a37f1f529e14978'),
(8, '', 'http://http://www.tcs.com', '2016-04-24', 'f8c6b36c4fd2c3b7ef265fbce90fba61'),
(9, '', 'http://youtube.com', '2016-04-24', '896e9b9082766bddf3592570796bafd8'),
(10, '', 'http://youtube.com', '2016-04-24', '2d4282570daa6d2534771d5a9f905438'),
(11, 'drisha', 'http://youtube.com', '2016-04-24', '2a92d3d42ad3d1b04ac8663967c56526'),
(12, 'drisha', 'http://google.com', '2016-04-24', 'b70b104b261788f9414a4fb52dcb1293'),
(13, 'drisha', 'http://torrentz.com', '2016-04-24', 'b0393fa128c849421f664ce7b1b03a04'),
(14, 'drisha', 'http://localhost81:/social_network/findfriends/drisha', '2016-04-25', 'drisha'),
(15, '', 'http://localhost81:/social_network/findfriends/', '2016-04-25', ''),
(16, 'anjali', 'http://localhost81:/social_network/findfriends/anjali', '2016-04-25', 'anjali'),
(17, 'Test', 'http://localhost81:/social_network/findfriends/Test', '2016-05-06', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `date_posted` date NOT NULL,
  `description` text NOT NULL,
  `image_url` text NOT NULL,
  `removed` varchar(3) NOT NULL DEFAULT 'no',
  `img_id` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `uid`, `username`, `date_posted`, `description`, `image_url`, `removed`, `img_id`) VALUES
(5, 'test', 'drisha', '0000-00-00', '', 'http://localhost:81/social_network/findfriends/userdata/user_photos/JzfvUisOPrxMqoY/signup-page-images.jpg', 'yes', '9dd90b6d29dbea53283a137da64867e5'),
(6, 'test', 'drisha', '0000-00-00', '', 'http://localhost:81/social_network/findfriends/userdata/user_photos/AykB3U9T2j6axZs/13.jpg', 'yes', '42c8e7dfa4d9a721685997e835bb260e'),
(7, 'test', 'drisha', '0000-00-00', '', 'http://localhost:81/social_network/findfriends/userdata/user_photos/Fl2PIgqOcMWudvj/2.jpg', 'yes', 'e5d729d1f8f84382a7c0d62b197e09e4'),
(8, 'test', 'drisha', '0000-00-00', '', 'http://localhost:81/social_network/findfriends/userdata/user_photos/6LdXJY4bjc2PNFw/1.jpg', 'yes', '6a3e523a5226bfade4e72a7f6e5b1e14');

-- --------------------------------------------------------

--
-- Table structure for table `pokes`
--

CREATE TABLE IF NOT EXISTS `pokes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_from` varchar(255) NOT NULL,
  `user_to` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `pokes`
--

INSERT INTO `pokes` (`id`, `user_from`, `user_to`) VALUES
(10, 'drisha', 'drisha'),
(12, 'anjali', ''),
(13, 'anjali', ''),
(14, 'anjali', ''),
(15, 'anjali', ''),
(16, 'anjali', ''),
(17, 'anjali', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` text NOT NULL,
  `date_added` date NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `user_posted_to` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `date_added`, `added_by`, `user_posted_to`) VALUES
(10, 'time', '2016-03-04', 'drisha', 'test'),
(11, 'jjjjj', '2016-03-04', 'drisha', 'test'),
(12, 'llll', '2016-03-04', 'drisha', 'test'),
(13, 'jgjgjgjhjgjghgj', '2016-03-05', 'drisha', 'test'),
(14, 'hi\n\n', '2016-03-10', 'drisha', 'test'),
(15, 'i am drisha\n', '2016-03-12', 'drisha', 'test'),
(16, 'i am a developer', '2016-03-12', 'test', 'test'),
(17, 'hello testing\n', '2016-03-13', 'drisha', 'test'),
(18, 'hey', '2016-03-13', 'test', 'Test'),
(19, 'hey', '2016-03-13', 'test', 'drisha'),
(20, 'clr?', '2016-03-13', 'test', 'Test'),
(21, 'Hi I am checking the post ', '2016-04-02', 'drisha', 'drisha'),
(22, 'I am posting to anjali I am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjaliI am posting to anjali', '2016-04-02', 'drisha', 'drisha'),
(23, 'Hi I m Kalpana', '2016-08-20', 'kalpana', 'kalpana'),
(24, 'hey bro what are you doing?', '2016-08-25', 'test', 'Test'),
(25, 'hi', '2016-08-25', 'test', 'Test'),
(26, 'hi\r\n', '2016-10-12', 'test123', 'test123');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE IF NOT EXISTS `post_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_body` text NOT NULL,
  `posted_by` varchar(255) NOT NULL,
  `posted_to` varchar(255) NOT NULL,
  `post_removed` tinyint(1) NOT NULL DEFAULT '0',
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `post_body`, `posted_by`, `posted_to`, `post_removed`, `post_id`) VALUES
(1, 'checking the post in while loop', 'test', 'drisha', 0, 22),
(7, 'Hi hello bye', 'drisha', 'Dilip', 0, 22),
(8, 'Hi self test', 'drisha', 'drisha', 0, 22);

-- --------------------------------------------------------

--
-- Table structure for table `pvt_messages`
--

CREATE TABLE IF NOT EXISTS `pvt_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_from` varchar(255) NOT NULL,
  `user_to` varchar(255) NOT NULL,
  `msg_title` varchar(255) NOT NULL,
  `msg_body` text NOT NULL,
  `date` date NOT NULL,
  `opened` varchar(255) NOT NULL,
  `deleted` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `pvt_messages`
--

INSERT INTO `pvt_messages` (`id`, `user_from`, `user_to`, `msg_title`, `msg_body`, `date`, `opened`, `deleted`) VALUES
(35, 'drisha', 'anjali', 'Check second title', 'Hi Checking sec msg title', '2016-03-26', 'yes', 'no'),
(36, 'drisha', 'anjali', 'Checking update', 'Just trying to check whether the table has been updated', '2016-03-27', 'yes', 'no'),
(37, 'drisha', 'anjali', 'check deleted', 'trying to check the column deleted', '2016-03-27', 'yes', 'no'),
(38, 'drisha', 'anjali', 'check1', 'checkinh the unread msg', '2016-03-27', 'yes', 'no'),
(39, 'drisha', 'anjali', 'checking after sumons update', 'I am checking sumons update', '2016-04-01', 'yes', 'no'),
(40, 'drisha', 'anjali', 'I am Drisha', 'This is Drisha', '2016-04-01', 'yes', 'no'),
(41, 'anjali', 'drisha', 'Introductory Reply', 'Hi Drisha I am checking whether reply is OK', '2016-04-01', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `sign_up_date` date NOT NULL,
  `activated` enum('0','1') NOT NULL,
  `bio` text NOT NULL,
  `profile_pic` text NOT NULL,
  `friend_array` text NOT NULL,
  `closed` varchar(3) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `sign_up_date`, `activated`, `bio`, `profile_pic`, `friend_array`, `closed`) VALUES
(8, 'test', 'Sumon', 'Sen', 'test@test.com', '123456', '2016-02-13', '0', 'I am a developer of Howdy, its a social networking website.', 'qGmnWjui5ez0Ufx/matthew.png', 'drisha', 'no'),
(9, 'drisha', 'Drisha', 'Chaudhuri', 'drisha.chaudhuri@123.com', '9723fbd989ab68e3938b15b1c65e6bcb', '2016-02-19', '0', '', 'KdWjkLNPmi7lRbu/Home.gif', 'anjali,Test', 'no'),
(10, 'anjali', 'Anjali', 'Chaudhuri', 'anjali.chaudhuri@123.com', '9723fbd989ab68e3938b15b1c65e6bcb', '2016-02-20', '0', 'Write something about yourself.', 'bG9Kjx85wQLYpBZ/6694.jpg', 'drisha', 'no'),
(11, 'Nayan', 'Dilip', 'Chaudhuri', 'dilip.chaudhuri@123.com', '9723fbd989ab68e3938b15b1c65e6bcb', '2016-03-19', '0', 'Write something about yourself.', 'RFJyUzgYf7WHhSC/6689.jpg', '', 'no'),
(12, 'ranjit', 'Ranjit ', 'Sen', 'ranjit.sen@123.com', '9723fbd989ab68e3938b15b1c65e6bcb', '2016-03-19', '0', 'Write something about yourself.', '', '', 'no'),
(13, 'kalpana', 'Kalpana', 'Sen', 'kalpana.sen@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2016-08-20', '0', 'Write something about yourself.', 'sfaLtICh9kymZRU/bg17.jpg', '', 'no'),
(14, 'infomaxlloyd@gmail.com', 'hello', 'world', 'infomaxlloyd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2016-10-09', '0', 'Write something about yourself.', '', '', 'no'),
(15, 'test123', 'sumon', 'sen', '123@456.com', 'e10adc3949ba59abbe56e057f20f883e', '2016-10-09', '0', '', 'ZDOYCc3hmMINERP/matthew.png', '', 'no'),
(16, 'wasdwasd', 'wasd', 'wasd', '789654123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2016-10-09', '0', 'Write something about yourself.', 'xB6JXba9otyUNLI/andrew.png', '', 'no'),
(17, 'sumonsentest', 'sumon', 'sen', '123@345.com', 'e10adc3949ba59abbe56e057f20f883e', '2016-10-10', '0', 'Write something about yourself.', '', '', 'no'),
(18, 'jhinuk', 'Jhinuk', 'Chaudhuri', 'jhinuk.chaudhuri@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2016-10-11', '0', 'Write something about yourself.', '', '', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `user_likes`
--

CREATE TABLE IF NOT EXISTS `user_likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `uid` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_likes`
--

INSERT INTO `user_likes` (`id`, `username`, `uid`) VALUES
(3, '', 'drishatest'),
(4, '', 'drishatest');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
