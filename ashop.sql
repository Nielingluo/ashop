-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 01 月 06 日 14:22
-- 服务器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ashop`
--

-- --------------------------------------------------------

--
-- 表的结构 `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `intro` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `city`
--

INSERT INTO `city` (`id`, `name`, `intro`) VALUES
(1, 'sh', '上海有个东方明珠'),
(2, 'bj', '北京市首都哦'),
(3, 'gz', '广州在地图右下方');

-- --------------------------------------------------------

--
-- 表的结构 `tp_article`
--

CREATE TABLE IF NOT EXISTS `tp_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `tp_article`
--

INSERT INTO `tp_article` (`id`, `title`, `content`) VALUES
(1, '5 things you need to know Tuesday', 'Obama to announce executive actions on gun control\r\n\r\nPresident Obama will propose a series of executive actions to curb gun violence Tuesday, focusing on businesses that buy and sell guns at gun shows, flea markets and online without a license — allowing buyers to evade a background check required at brick-and-mortar gun stores. Calling the issue of gun violence "one piece of unfinished business" as he enters the last full year of his presidency, Obama said he gets too many letters "to sit around and do nothing." But anything Obama does by executive action is likely to be undone if a Republican moves into the White House in 2017.'),
(2, 'Chicago lawyers', 'er a 2011 fatal shooting by Chicago Police officers on Monday after determining that a city of Chicago lawyer deliberately withheld critical evidence from the attorney representing the slain man''s family.'),
(3, 'Chicago lawyers', 'er a 2011 fatal shooting by Chicago Police officers on Monday after determining that a city of Chicago lawyer deliberately withheld critical evidence from the attorney representing the slain man''s family.'),
(4, 'Coaching carousel', 'They have a winning history, patient ownership, a franchise quarterback with good years left and one of the game’s most unique weapons in Odell Beckham Jr. Top candidates who wouldn’t consider other vacancies will consider this one.'),
(5, '倪敬美', '电话快点死暗示可是的能力');

-- --------------------------------------------------------

--
-- 表的结构 `tp_user`
--

CREATE TABLE IF NOT EXISTS `tp_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `password` char(32) NOT NULL,
  `sex` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- 转存表中的数据 `tp_user`
--

INSERT INTO `tp_user` (`id`, `name`, `password`, `sex`) VALUES
(8, '王伟', '', 1),
(36, '我I倪敬美', '', 1),
(10, '李每周', '', 1),
(12, '占山', '', 0),
(13, '占山', '', 0),
(14, '将一名', '', 0),
(27, '哦哦', '', 1),
(16, '占山', '', 0),
(17, '占山', '', 0),
(18, '占山', '', 0),
(19, '是那个无色', '', 0),
(20, '占山', '', 0),
(21, '李梅', '', 1),
(23, '李梅', '', 0),
(24, '占山', '', 0),
(28, '9999999999999999', '', 0),
(29, '美景', '', 0),
(30, 'ff', '', 1),
(31, 'ztz3', '', 1),
(32, 'njm', '', 1),
(33, 'njm', '', 1),
(34, 'nj00m', '', 1),
(35, 'homelee', '', 1),
(37, 'tom love', '123', 0),
(38, 'admin', 'admin', 1),
(39, 'meimei zuim8', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
