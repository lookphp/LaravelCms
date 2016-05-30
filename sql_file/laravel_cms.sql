-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-05-30 17:20:45
-- 服务器版本： 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_cms`
--

-- --------------------------------------------------------

--
-- 表的结构 `cms_articles`
--

CREATE TABLE `cms_articles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `intro` varchar(500) DEFAULT '' COMMENT '简介',
  `thumb` varchar(255) DEFAULT '' COMMENT '缩略图',
  `like_count` int(11) DEFAULT NULL COMMENT '喜欢数',
  `comment_count` int(11) DEFAULT NULL COMMENT '评论数',
  `status` tinyint(1) DEFAULT '1' COMMENT '文章状态，默认为1正常，0为删除',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '添加时间',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `cms_articles`
--

INSERT INTO `cms_articles` (`id`, `user_id`, `title`, `intro`, `thumb`, `like_count`, `comment_count`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, '1221', '213', '', NULL, NULL, 1, '2016-05-29 00:42:31', '2016-05-29 00:42:31'),
(2, 0, '1221', '213', '', NULL, NULL, 1, '2016-05-29 00:43:51', '2016-05-29 00:43:51'),
(3, 0, '12213', '213', '', NULL, NULL, 1, '2016-05-29 00:44:04', '2016-05-29 00:44:04'),
(4, 0, '122131', '213', '', NULL, NULL, 1, '2016-05-29 00:44:12', '2016-05-29 00:44:12'),
(5, 0, '122131', '213', '', NULL, NULL, 1, '2016-05-29 00:44:19', '2016-05-29 00:44:19'),
(6, 0, '122131', '213', '', NULL, NULL, 1, '2016-05-29 00:44:25', '2016-05-29 00:44:25');

-- --------------------------------------------------------

--
-- 表的结构 `cms_article_categories`
--

CREATE TABLE `cms_article_categories` (
  `id` int(11) NOT NULL,
  `article_id` int(11) DEFAULT '0' COMMENT '文章ID',
  `category_id` int(11) NOT NULL DEFAULT '0' COMMENT '分类ID',
  `status` tinyint(1) DEFAULT '1' COMMENT '1为正常 0为删除',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `cms_article_categories`
--

INSERT INTO `cms_article_categories` (`id`, `article_id`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, '2016-05-29 00:42:31', '2016-05-29 00:42:31'),
(2, 2, 3, 1, '2016-05-29 00:43:51', '2016-05-29 00:43:51'),
(3, 3, 3, 1, '2016-05-29 00:44:04', '2016-05-29 00:44:04'),
(4, 4, 3, 1, '2016-05-29 00:44:12', '2016-05-29 00:44:12'),
(5, 5, 3, 1, '2016-05-29 00:44:19', '2016-05-29 00:44:19'),
(6, 6, 3, 1, '2016-05-29 00:44:25', '2016-05-29 00:44:25');

-- --------------------------------------------------------

--
-- 表的结构 `cms_article_contents`
--

CREATE TABLE `cms_article_contents` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL DEFAULT '0' COMMENT '文章ID',
  `content` text NOT NULL COMMENT '正文内容',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '文章状态，默认为1正常，0为删除',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `cms_article_contents`
--

INSERT INTO `cms_article_contents` (`id`, `article_id`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '123', 1, '2016-05-29 00:42:31', '2016-05-29 00:42:31'),
(2, 2, '123', 1, '2016-05-29 00:43:51', '2016-05-29 00:43:51'),
(3, 3, '123', 1, '2016-05-29 00:44:04', '2016-05-29 00:44:04'),
(4, 4, '123', 1, '2016-05-29 00:44:12', '2016-05-29 00:44:12'),
(5, 5, '12313', 1, '2016-05-29 00:44:19', '2016-05-29 00:44:19'),
(6, 6, '12313qe', 1, '2016-05-29 00:44:25', '2016-05-29 00:44:25');

-- --------------------------------------------------------

--
-- 表的结构 `cms_article_imgs`
--

CREATE TABLE `cms_article_imgs` (
  `id` int(11) NOT NULL,
  `article_id` int(11) DEFAULT NULL COMMENT '文章ID',
  `thumb` varchar(255) NOT NULL COMMENT '缩略图地址',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '图片状态，默认为1正常，0为删除',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `cms_categorys`
--

CREATE TABLE `cms_categorys` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(20) DEFAULT NULL COMMENT '分类名称',
  `parent_id` int(11) DEFAULT '0' COMMENT '父id',
  `created_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
  `create_user` int(11) DEFAULT '0' COMMENT '创建用户(0：管理员)',
  `update_user` int(11) DEFAULT '0' COMMENT '修改用户',
  `sort` int(11) DEFAULT '0' COMMENT '排序',
  `status` tinyint(1) DEFAULT '1' COMMENT '分类状态（1：正常，0删除）'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章分类表';

--
-- 转存表中的数据 `cms_categorys`
--

INSERT INTO `cms_categorys` (`id`, `name`, `parent_id`, `created_at`, `updated_at`, `create_user`, `update_user`, `sort`, `status`) VALUES
(1, '新闻', 0, '2016-05-28 09:19:10', NULL, 0, 0, 0, NULL),
(2, '美容', 0, NULL, NULL, 0, 0, 0, NULL),
(3, '服饰', 0, NULL, NULL, 0, 0, 0, NULL),
(4, '美食', 0, NULL, NULL, 0, 0, 0, NULL),
(5, '旅行', 0, NULL, NULL, 0, 0, 0, NULL),
(6, '体育新闻', 1, NULL, NULL, 0, 0, 0, NULL),
(7, '娱乐新闻', 1, NULL, NULL, 0, 0, 0, NULL),
(8, '社会新闻', 1, NULL, NULL, 0, 0, 0, NULL),
(9, '完美肌肤', 2, NULL, NULL, 0, 0, 0, NULL),
(10, '风尚彩妆', 2, NULL, NULL, 0, 0, 0, NULL),
(11, '香水物语', 2, NULL, NULL, 0, 0, 0, NULL),
(12, '服饰搭配', 3, NULL, NULL, 0, 0, 0, NULL),
(13, '流行配饰', 3, NULL, NULL, 0, 0, 0, NULL),
(14, '早餐', 4, NULL, NULL, 0, 0, 0, NULL),
(15, '海鲜', 4, NULL, NULL, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `cms_comments`
--

CREATE TABLE `cms_comments` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '主键',
  `article_id` int(11) NOT NULL COMMENT '文章id',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `content` varchar(500) CHARACTER SET latin1 NOT NULL COMMENT '评论内容',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `cms_replies`
--

CREATE TABLE `cms_replies` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '主键',
  `article_id` int(11) NOT NULL COMMENT '文章id',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `content` varchar(500) NOT NULL COMMENT '回复内容',
  `comment_id` int(11) NOT NULL COMMENT '主评论id',
  `p_id` int(11) NOT NULL COMMENT '父id',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `cms_user`
--

CREATE TABLE `cms_user` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `login_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `login_ip` varchar(20) NOT NULL DEFAULT '0',
  `login_count` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `cms_user`
--

INSERT INTO `cms_user` (`id`, `name`, `psw`, `email`, `created_at`, `login_time`, `updated_at`, `login_ip`, `login_count`, `status`) VALUES
(9, '存', 'e10adc3949ba59abbe56e057f20f883e', '都是分散', '2016-05-28 22:12:03', '0000-00-00 00:00:00', '2016-05-28 22:12:03', '0', 0, 1),
(10, '等等', 'e10adc3949ba59abbe56e057f20f883e', '381033012@qq.com', '2016-05-28 22:18:35', '0000-00-00 00:00:00', '2016-05-28 22:18:35', '0', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms_articles`
--
ALTER TABLE `cms_articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_article_categories`
--
ALTER TABLE `cms_article_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_article_contents`
--
ALTER TABLE `cms_article_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_article_imgs`
--
ALTER TABLE `cms_article_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_categorys`
--
ALTER TABLE `cms_categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_comments`
--
ALTER TABLE `cms_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_replies`
--
ALTER TABLE `cms_replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_user`
--
ALTER TABLE `cms_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `cms_articles`
--
ALTER TABLE `cms_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `cms_article_categories`
--
ALTER TABLE `cms_article_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `cms_article_contents`
--
ALTER TABLE `cms_article_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `cms_article_imgs`
--
ALTER TABLE `cms_article_imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `cms_categorys`
--
ALTER TABLE `cms_categorys`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- 使用表AUTO_INCREMENT `cms_comments`
--
ALTER TABLE `cms_comments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=13;
--
-- 使用表AUTO_INCREMENT `cms_replies`
--
ALTER TABLE `cms_replies`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=10008;
--
-- 使用表AUTO_INCREMENT `cms_user`
--
ALTER TABLE `cms_user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
