-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2015 at 05:30 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `classified`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `ad_title` varchar(255) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `website_link` varchar(255) NOT NULL,
  `is_urgent` tinyint(4) NOT NULL,
  `is_featured` tinyint(4) NOT NULL,
  `featured_plan_type_id` int(11) NOT NULL,
  `is_soptlight` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `subcategory_id` (`subcategory_id`),
  KEY `featured_plan_id` (`featured_plan_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `category_id`, `subcategory_id`, `ad_title`, `video_url`, `description`, `price`, `website_link`, `is_urgent`, `is_featured`, `featured_plan_type_id`, `is_soptlight`, `status`, `date_created`, `date_updated`) VALUES
(6, 3, 2, 'Yahama Fzs 2010 model bike for sale', 'https://www.youtube.com/watch?v=A9gEeZcHoh4', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 3200, 'www.google.com', 0, 1, 1, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 3, 2, ' Bullat standard 350 cc ', 'https://www.youtube.com/watch?v=A9gEeZcHoh4', '1994 Bullat standard model for sale only 3700 km in excilant conditin \r\n1994 Bullat standard model for sale only 3700 km in excilant conditin \r\n1994 Bullat standard model for sale only 3700 km in excilant conditin \r\n', 40000, 'www.google.com', 0, 1, 1, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 4, 4, 'Apple iPhone 4s 16gb Black color, Excellent condition, with Charger', 'https://www.youtube.com/watch?v=A9gEeZcHoh4', 'Apple iPhone 4s 16gb Black color, Excellent condition, with Charger Apple iPhone 4s 16gb Black color, Excellent condition, with Charger Apple iPhone 4s 16gb Black color, Excellent condition, with Charger Apple iPhone 4s 16gb Black color, Excellent condition, with Charger Apple iPhone 4s 16gb Black color, Excellent condition, with Charger ', 10500, 'www.google.com', 1, 1, 1, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 3, 2, 'Hyundai Verna The New 4S FLUDIC', 'https://www.youtube.com/watch?v=A9gEeZcHoh4', 'Make an impression the world admires Make an impression the world admires ', 650000, 'www.google.com', 1, 1, 1, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ads_media`
--

CREATE TABLE IF NOT EXISTS `ads_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ads_id` int(11) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ads_id` (`ads_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ad_watchers`
--

CREATE TABLE IF NOT EXISTS `ad_watchers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ad_watchers`
--

INSERT INTO `ad_watchers` (`id`, `ad_id`, `user_id`, `created`, `modified`) VALUES
(1, 6, '550fabc1-f15c-4692-8285-1c781cafb385', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 7, '550fabc1-f15c-4692-8285-1c781cafb385', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `url`, `status`) VALUES
(3, 'Vehicles', 'vehicle', 1),
(4, 'Electronics', 'electronics', 1),
(5, 'Home & Furniture', 'home-furniture', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `special_type` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `number`, `special_type`, `created`, `modified`) VALUES
(1, 'abhijeet', '555-5555-555', 'Multifield', '2015-03-24 07:19:16', '2015-03-24 07:19:16'),
(2, 'abhijeet', '555-5555-555', 'Multifield', '2015-03-24 07:19:18', '2015-03-24 07:19:18');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `status`, `created`, `modified`) VALUES
(1, 'Malesiya', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE IF NOT EXISTS `favorites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `ad_id`, `user_id`, `created`, `modified`) VALUES
(1, 6, '550fabc1-f15c-4692-8285-1c781cafb385', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 7, '550fabc1-f15c-4692-8285-1c781cafb385', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `featured_plan_types`
--

CREATE TABLE IF NOT EXISTS `featured_plan_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `featured_plan_types`
--

INSERT INTO `featured_plan_types` (`id`, `plan_name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'RIP2', 34, '2015-03-18 00:00:00', '2015-03-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(100) NOT NULL,
  `subcategory_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_name`, `subcategory_url`) VALUES
(1, 4, 'Motercycle', 'Motercycle'),
(2, 3, 'Motercycle', 'motercycle'),
(3, 3, 'hunter', 'hunter'),
(4, 4, 'Mobile', 'Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(36) NOT NULL,
  `username` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `password` varchar(128) DEFAULT NULL,
  `password_token` varchar(128) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified` tinyint(1) DEFAULT '0',
  `email_token` varchar(255) DEFAULT NULL,
  `email_token_expires` datetime DEFAULT NULL,
  `tos` tinyint(1) DEFAULT '0',
  `active` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `last_action` datetime DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT '0',
  `role` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `BY_USERNAME` (`username`),
  KEY `BY_EMAIL` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `slug`, `password`, `password_token`, `email`, `email_verified`, `email_token`, `email_token_expires`, `tos`, `active`, `last_login`, `last_action`, `is_admin`, `role`, `created`, `modified`) VALUES
('54fc055d-895c-43f0-8f19-17181cafb385', 'abhi', '', '54ad85c027e8530ca07a985e3985681d08334cfc', NULL, 'abhijeet.k.sharma87@gmail.com', 1, 'alfvs6htz8', '2015-03-09 09:16:28', 1, 1, '2015-03-08 09:26:57', NULL, 0, 'registered', '2015-03-08 09:16:29', '2015-03-08 09:26:57'),
('550faa58-ae40-4409-8a0f-1c781cafb385', 'admin', '', '66e0c72fd84ff130c2d2f1626ad88ed8ad5a956a', NULL, 'rahul_rahulkashyap@rediffmail.com', 1, 'nxq7g03t5m', '2015-03-24 06:53:27', 1, 1, '2015-03-25 16:34:09', NULL, 1, 'registered', '2015-03-23 06:53:28', '2015-03-25 16:34:09'),
('550fabc1-f15c-4692-8285-1c781cafb385', 'rahul', '', '66e0c72fd84ff130c2d2f1626ad88ed8ad5a956a', NULL, 'rahul.quibico@gmail.com', 1, 't0y3gjzm5a', '2015-03-24 06:59:28', 1, 1, '2015-03-28 12:58:03', NULL, 0, 'registered', '2015-03-23 06:59:29', '2015-03-28 12:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `id` varchar(36) NOT NULL,
  `user_id` varchar(36) NOT NULL,
  `position` float NOT NULL DEFAULT '1',
  `field` varchar(255) NOT NULL,
  `value` text,
  `input` varchar(16) NOT NULL,
  `data_type` varchar(16) NOT NULL,
  `label` varchar(128) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE_PROFILE_PROPERTY` (`field`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `ads_ibfk_2` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`),
  ADD CONSTRAINT `ads_ibfk_3` FOREIGN KEY (`featured_plan_type_id`) REFERENCES `featured_plan_types` (`id`);

--
-- Constraints for table `ads_media`
--
ALTER TABLE `ads_media`
  ADD CONSTRAINT `ads_media_ibfk_1` FOREIGN KEY (`ads_id`) REFERENCES `ads_media` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
