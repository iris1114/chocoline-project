-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 建立日期: Nov 20, 2012, 12:06 PM
-- 伺服器版本: 5.5.25
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 資料庫: `books`
--
CREATE DATABASE `choco` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `books`;

-- --------------------------------------------------------

--
-- 資料表格式： `bookorder`
--


CREATE TABLE IF NOT EXISTS `order_master` (
  `order_no` int(11) NOT NULL,
  `mem_no` smallint(6) NOT NULL DEFAULT '0',
   `credit_card_no` char(16) NOT NULL DEFAULT '0',
  `order_time` datetime DEFAULT NULL,
  `order_amount` int(11) NOT NULL DEFAULT '0',
   `shipping_status` char(1) NOT NULL DEFAULT '',
  `payment_status` char(1) NOT NULL DEFAULT '',
    PRIMARY KEY (`order_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;


--
-- 列出以下資料庫的數據： `bookorder`
--



INSERT INTO `order_master` (`order_no`, `mem_no`, `credit_card_no`, `order_time`,`order_amount`,`shipping_status`, `payment_status`) VALUES
(1, 1, '4111330044451234','2008-10-20 00:00:00', '300', '1','0');

-- --------------------------------------------------------

--
-- 資料表格式： `discuss`
--

CREATE TABLE IF NOT EXISTS `discuss` (
  `discussNo` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `content` mediumtext NOT NULL,
  `memNo` int(10) NOT NULL,
  `issueDate` datetime NOT NULL,
  `replyCount` int(11) DEFAULT NULL,
  `lastReplyTime` datetime DEFAULT NULL,
  PRIMARY KEY (`discussNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 列出以下資料庫的數據： `discuss`
--

INSERT INTO `discuss` (`discussNo`, `title`, `content`, `memNo`, `issueDate`, `replyCount`, `lastReplyTime`) VALUES
(1, '請大家踴躍發表', '請大家踴躍發表', 1, '2006-11-25 22:29:52', 2, '2008-12-01 11:16:33'),
(2, '雁子的啟示', '讓我感受到與朋友互助的重要性', 2, '2006-11-27 02:11:39', 2, '2008-12-01 11:23:48');

-- --------------------------------------------------------

--
-- 資料表格式： `member`
--

CREATE TABLE IF NOT EXISTS `test_member` (
  `mem_no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mem_name` varchar(10) DEFAULT NULL,
  `mem_id` varchar(8) DEFAULT NULL,
  `mem_psw` varchar(8) DEFAULT NULL,
  `mem_email` varchar(50) DEFAULT NULL,
  `mem_birth` date DEFAULT NULL,
  `mem_tel` varchar(10) DEFAULT NULL,
  `mem_credit` char (16) NOT NULL DEFAULT '0',
  `mem_address` varchar(30) DEFAULT NULL,
  `mem_headshot`varchar(20) DEFAULT NULL,
  `mem_status` char(1) NOT NULL DEFAULT '',
  `mem_point` int(11) DEFAULT NULL,



  PRIMARY KEY (`mem_no`),
  UNIQUE KEY `mem_id` (`mem_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 列出以下資料庫的數據： `member`
--

INSERT INTO `test_member` (`mem_no`, `mem_name`, `mem_id`, `mem_psw`, `mem_email`, `mem_birth`, `mem_tel`,  `mem_credit`,`mem_address`,`mem_headshot`,  `mem_status`,  `mem_point`) VALUES
(1, 'penny', 'penny', '111', 'i750307@iii.org.tw',  '1960-08-08', '03-4257383','0111111111','taipei','8.gif','1','10'),
(2, 'iris', 'iris', '111', 'amy@nctu.edu.tw',  '1998-01-01', '03-4257387','0111111112','taipei','5.gif','1','20'),
(3, '帥帥', 'Handsome', '111', 'handsome@gmail.com', '1960-01-01', '0933168168','0111111113','taipei','6.gif','1','30');

-- --------------------------------------------------------

--
-- 資料表格式： `orderitems`
--

CREATE TABLE IF NOT EXISTS `order_list` (
  `order_list_no` int(11) NOT NULL DEFAULT '0',
  `order_no` int(11) NOT NULL DEFAULT '0',
  `customized_product_no` smallint(6) NOT NULL DEFAULT '0',
  `classic_product_no` smallint(6) NOT NULL DEFAULT '0',
  `product_qty` smallint(6) NOT NULL DEFAULT '0',
  `product_price` int(11) NOT NULL DEFAULT '0'


) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 列出以下資料庫的數據： `orderitems`
--

INSERT INTO `order_list` (`order_list_no`, `order_no`, `customized_product_no`,`classic_product_no`,`product_qty`,`product_price`) VALUES
(1, 2, 1,3,12,350),
(2, 4, 1,4,13,360),
(3, 3, 2,5,14,370),
(4, 6, 3,6,15,380);


-- --------------------------------------------------------

--
-- 資料表格式： `products`
--

CREATE TABLE IF NOT EXISTS `classic_products` (
  `classic_product_no` int(11) NOT NULL AUTO_INCREMENT,
  `classic_product_name` varchar(30) NOT NULL DEFAULT '',
  `product_price` int(11) DEFAULT NULL,
  `product_img_src` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`classic_product_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 列出以下資料庫的數據： `products`
--

INSERT INTO `products` (`classic_product_no`, `classic_product_name`, `product_price`,  `product_img_src`) VALUES
(1, 'choco1', 110, '1.gif'  ),
(2, 'choco2', 600,'2.gif' ),
(3, 'choco3', 510, '3.gif' ),
(4, 'choco4', 200, '4.gif' ),
(5, 'choco5', 600,'5.gif' ),


-- --------------------------------------------------------

--
-- 資料表格式： `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `discussNo` int(11) NOT NULL,
  `replyNo` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `content` mediumtext NOT NULL,
  `memNo` int(10) NOT NULL,
  `issueDate` datetime NOT NULL,
  PRIMARY KEY (`replyNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 列出以下資料庫的數據： `reply`
--

INSERT INTO `reply` (`discussNo`, `replyNo`, `title`, `content`, `memNo`, `issueDate`) VALUES
(1, 1, 'Re-請大家踴躍發言', '這真是個快樂園地', 2, '2006-11-27 08:42:42'),
(1, 2, 'Re-請大家踴躍發表', '彼此鼓勵,共同分享', 1, '2008-12-01 11:16:33'),
(2, 3, 'Re-雁子的啟示', '成功不必在我', 1, '2008-12-01 11:19:22'),
(2, 4, 'Re-雁子的啟示', '盡人事聽天命', 1, '2008-12-01 11:23:48');
