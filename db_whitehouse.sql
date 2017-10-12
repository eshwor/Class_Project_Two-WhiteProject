-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 11, 2010 at 07:18 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `db_whitehouse`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_adminuser`
-- 

CREATE TABLE `tbl_adminuser` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

-- 
-- Dumping data for table `tbl_adminuser`
-- 

INSERT INTO `tbl_adminuser` (`id`, `username`, `password`, `fullname`) VALUES 
(3, 'kiran', 'a2lyYW4=', 'kiran upreti'),
(21, 'ram', 'cmFt', 'ram'),
(22, 'nirajan', 'bmlyYWphbg==', 'nirajan'),
(25, 'ram', 'cmFt', 'ram');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_banner`
-- 

CREATE TABLE `tbl_banner` (
  `id` int(11) NOT NULL auto_increment,
  `banner_name` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `static_id` int(11) NOT NULL,
  `status` binary(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `tbl_banner`
-- 

INSERT INTO `tbl_banner` (`id`, `banner_name`, `banner_image`, `static_id`, `status`) VALUES 
(1, 'home banner', 'whiteImage_8885498_headder.jpg', 1, 0x31),
(2, 'contact us banners', 'b.jpg', 3, 0x31),
(3, 'Services', 'whiteImage_7911682_header.jpg', 4, 0x31),
(4, 'Feedback', 'whiteImage_3532104_head45er.jpg', 6, 0x31),
(5, 'About', 'whiteImage_9239501_headder.jpg', 5, 0x31),
(6, 'Home', 'whiteImage_8566894_headder.jpg', 1, 0x31);

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_config`
-- 

CREATE TABLE `tbl_config` (
  `id` int(11) NOT NULL auto_increment,
  `config_name` varchar(255) NOT NULL,
  `config_desc` text NOT NULL,
  `config_value` varchar(255) NOT NULL,
  `status` binary(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `tbl_config`
-- 

INSERT INTO `tbl_config` (`id`, `config_name`, `config_desc`, `config_value`, `status`) VALUES 
(1, 'primary_email', 'This is the website owner email address', 'kiran1@gmail.com', 0x31);

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_news`
-- 

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL auto_increment,
  `news_title` varchar(255) NOT NULL,
  `news_description` text NOT NULL,
  `news_date` date NOT NULL,
  `news_author` varchar(255) NOT NULL,
  `status` binary(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `tbl_news`
-- 

INSERT INTO `tbl_news` (`id`, `news_title`, `news_description`, `news_date`, `news_author`, `status`) VALUES 
(1, 'white house php gorup', 'We are in front end part of the php project', '2010-04-25', 'naresh', 0x31),
(2, 'Php practise', 'we have to practise hard to learn php\r\nwe have to practise hard to learn php\r\nwe have to practise hard to learn php\r\nwe have to practise hard to learn php\r\nwe have to practise hard to learn php\r\nwe have to practise hard to learn php\r\nwe have to practise hard to learn php', '2010-04-29', 'naresh', 0x31),
(3, 'test news', 'This website template is released under a Creative Commons Attribution 2.5 License\r\n\r\nWe request you retain the full copyright notice below including the link to www.metamorphozis.com.\r\nThis not only gives respect to the large amount of time given freely by the developers but also helps build interest, traffic and use of our free and paid designs. If you cannot (for good reason) retain the full copyright we request you at least leave in place the Website Templates line, with Website Templates linked to www.metamorphozis.com. If you refuse to include even this then support may be affected.\r\n\r\nYou are allowed to use this design only if you agree to the following conditions:\r\n- You cannot remove copyright notice from this design without our permission.\r\n- If you modify this design it still should contain copyright because it is based on our work.\r\n- You may copy, distribute, modify, etc. this template as long as link to our website remains untouched.', '2010-04-29', 'kiran', 0x31),
(4, 'my new news', 'my new news\r\nmy new news\r\nmy new news\r\nmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new newsmy new news', '2010-05-10', 'dfdf', 0x31),
(5, 'sdf', 'sdfdsfd', '2010-05-26', 'dsfsf', 0x31);

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_static`
-- 

CREATE TABLE `tbl_static` (
  `id` int(11) NOT NULL auto_increment,
  `pagename` varchar(255) NOT NULL,
  `pagetitle` varchar(255) NOT NULL,
  `pagedesc` text NOT NULL,
  `metaname` varchar(255) NOT NULL,
  `metadesc` text NOT NULL,
  `metakeyword` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `tbl_static`
-- 

INSERT INTO `tbl_static` (`id`, `pagename`, `pagetitle`, `pagedesc`, `metaname`, `metadesc`, `metakeyword`) VALUES 
(1, 'home page', 'home', '&lt;p&gt;This is the white house home page&lt;/p&gt;\r\n&lt;p&gt;This is the white house home page&lt;/p&gt;\r\n&lt;p&gt;This is the white house home pageThis is the white house home page&lt;/p&gt;\r\n&lt;p&gt;This is the white house home page&lt;/p&gt;\r\n&lt;p&gt;&lt;img height=&quot;259&quot; width=&quot;400&quot; alt=&quot;&quot; src=&quot;/userfiles/image/back_all.gif&quot; /&gt;&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'home', 'php training,it institute,\r\nThis not only gives respect to the large amount of time given freely by the developers but also helps build interest, traffic and use of our free and paid designs. If you cannot (for good reason) retain the full copyright we request you at least leave in place the Website Templates line, with Website Templates linked to www.metamorphozis.com. If you refuse to include even this then support may be affected.', 'php,java,Joomla,kdfdsk ,dsfdsf,dfdskfdskf'),
(3, 'contac us', 'contac us', '&lt;h3&gt;&lt;b&gt;&lt;span style=&quot;color: rgb(255, 0, 0);&quot;&gt;Super&lt;/span&gt;&lt;/b&gt; &lt;span style=&quot;color: rgb(51, 153, 102);&quot;&gt;Brain Web Technology&lt;/span&gt;&lt;/h3&gt;\r\n&lt;h3&gt;&lt;b&gt;&lt;span style=&quot;color: rgb(255, 0, 0);&quot;&gt;Super&lt;/span&gt;&lt;/b&gt; &lt;span style=&quot;color: rgb(51, 153, 102);&quot;&gt;Brain Web Technology&lt;/span&gt;&lt;/h3&gt;\r\n&lt;p&gt;9841042954,New Banershwor&lt;/p&gt;\r\n&lt;p&gt;Professional IT Insittues of Nepal&lt;/p&gt;', 'contac us', '9841042954,New Banershwor\r\n\r\nProfessional IT Insittues of Nepal\r\nSuper', '9841042954,New Banershwor\r\n\r\nProfessional IT Insittues of Nepal\r\n,\r\nsuper'),
(4, 'Services', 'Whitehouse -', '&lt;p&gt;&lt;span style=&quot;color: rgb(255, 0, 0);&quot;&gt;This website template is released under  a Creative Commons Attribution 2.5 License&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;color: rgb(255, 0, 0);&quot;&gt; 			    We request you retain the full copyright notice below including the link to www.metamorphozis.com.&lt;br /&gt;\r\nThis not only gives respect to the large amount of time given freely by the developers  			      but also helps build interest, traffic and use of our free and paid designs. If you cannot (for good  			      reason) retain the full copyright we request you at least leave in place the  			      Website Templates line, with Website Templates  linked to www.metamorphozis.com. If you refuse  			      to include even this then support may be affected.&lt;br /&gt;\r\n&lt;br /&gt;\r\nYou are allowed to use this design only if you agree to the following conditions:&lt;br /&gt;\r\n- You cannot remove copyright notice from this design without our permission.&lt;br /&gt;\r\n- If you modify this design it still should contain copyright because it is based on our work.&lt;br /&gt;\r\n- You may copy, distribute, modify, etc. this template as long as link to our website remains untouched.&lt;/span&gt;&lt;/p&gt;', 'servicesservicess', 'sdffdsf,dsfdsfdsfds', 'sdfdsfs,php,java'),
(5, 'About', 'About', '&lt;p&gt;This is the about us section&lt;/p&gt;\r\n&lt;p&gt;This is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us sectionThis is the about us section&lt;/p&gt;', 'About', 'About', 'About'),
(6, 'Feedback', 'Feedback', '&lt;p&gt;Feedback&lt;/p&gt;', 'Feedback', 'Feedback', 'Feedback');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_user_desc`
-- 

CREATE TABLE `tbl_user_desc` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `tbl_user_desc`
-- 

INSERT INTO `tbl_user_desc` (`id`, `user_id`, `phone`, `location`) VALUES 
(1, 11, '5644444664', 'bkt'),
(2, 12, '5644444664', 'bkt'),
(3, 13, '5644444664', 'bkt'),
(4, 14, '5644444664', 'bkt'),
(5, 15, '454564', 'baneshwor'),
(6, 16, '454564', 'baneshwor'),
(7, 17, '454564', 'baneshwor'),
(8, 18, '21321321', 'kedar'),
(9, 19, 'sdfdsf', 'dsfsdfs'),
(10, 20, '53456456', 'dsfdsf'),
(11, 0, '345345', 'sdfdsfsd'),
(12, 0, '5656', 'dfdsfds');
