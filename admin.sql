-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-01-16 12:44:38
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db08`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` text NOT NULL,
  `pw` text NOT NULL,
  `name` varchar(10) NOT NULL,
  `sex` char(2) NOT NULL,
  `year` tinyint(4) NOT NULL DEFAULT 0,
  `month` tinyint(4) NOT NULL DEFAULT 0,
  `day` tinyint(4) NOT NULL DEFAULT 0,
  `telephone` varchar(20) NOT NULL,
  `cellphone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`, `name`, `sex`, `year`, `month`, `day`, `telephone`, `cellphone`, `address`, `email`, `url`, `comment`) VALUES
(1, 'admin', '1234', '0', '', 0, 0, 0, '', '', '', '', '', ''),
(2, 'root', '7890', '0', '', 0, 0, 0, '', '', '', '', '', ''),
(4, '222', '222', '', '', 0, 0, 0, '', '', '', '', '', ''),
(5, '555', '555', '55', '男', 55, 5, 5, '55', '55', '55', '55', 'http://55', '55'),
(6, '777', '777', '777', '男', 7, 7, 7, '77', '77', '77', '77', 'http://77', '77'),
(7, '888', '888', '888', '男', 8, 8, 8, '88', '88', '88', '88', 'http://88', '88'),
(8, '999', '999', '999', '男', 99, 9, 9, '99', '99', '99', '99', 'http://99', '99');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
