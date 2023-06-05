-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-06-05 20:43:26
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
-- 資料庫： `sa`
--

-- --------------------------------------------------------

--
-- 資料表結構 `account`
--

CREATE TABLE `account` (
  `ID` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `level` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `account`
--

INSERT INTO `account` (`ID`, `Name`, `Password`, `phone`, `Email`, `level`) VALUES
('5555', 'admin', '123', '1111', '22222', '1'),
('6543', 'aaaaa', 'sssss', '00000', '306785269@gmail.com', ''),
('abc', 'allen', '123', '0972328166', 'max911114@gmail.com', ''),
('admin', '管理者', '', '', '', '1'),
('ccccc', '王曉明', '123', '0972328166', 'max911114@gmail.com', ''),
('nmsl8787', '林寶', 'nmsl5269', '5487878787', '306785269@gmail.com', ''),
('shshsh', 'shishi', 'sssss', '0909900999', 'maccc9114@gmail.com', ''),
('ssss', 'SSS', '11111', '0909090909', '77777@gmail.com', '');

-- --------------------------------------------------------

--
-- 資料表結構 `event`
--

CREATE TABLE `event` (
  `Name` varchar(20) NOT NULL,
  `Summery` varchar(20) NOT NULL,
  `Date` datetime(6) NOT NULL,
  `endDate` datetime(6) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `event`
--

INSERT INTO `event` (`Name`, `Summery`, `Date`, `endDate`, `Location`, `ID`) VALUES
('救救我的家-海洋保護講座', '海洋保育及環境保護', '2023-07-17 08:30:00.000000', '2023-07-16 18:30:00.000000', '', 1),
('吃素21天挑戰', '環保從體內開始!', '2023-07-01 08:00:00.000000', '2023-07-21 08:00:00.000000', '自家', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `history`
--

CREATE TABLE `history` (
  `ID` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `kind` varchar(10) NOT NULL,
  `Crecord` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `history`
--

INSERT INTO `history` (`ID`, `Name`, `Date`, `kind`, `Crecord`) VALUES
('nmsl8787', '林寶', '2023-05-17', '開車', 41.2),
('nmsl8787', '林寶', '2023-05-17', '水', 1.108),
('abc', 'allen', '2023-05-17', '公車', 6.225),
('abc', 'allen', '2023-05-17', '騎車', 6.25),
('ccccc', '王曉明', '2023-05-18', '開車', 41.2),
('ccccc', '王曉明', '2023-05-18', '搭乘公車', 4.565),
('6543', 'aaaaa', '2023-05-19', '騎車', 2.5),
('6543', 'aaaaa', '2023-05-19', '開車', 4.12),
('ssss', 'SSS', '2023-05-19', '騎車', 2.5),
('ssss', 'SSS', '2023-05-19', '開車', 4.12),
('6543', 'aaaaa', '2023-05-31', '搭乘捷運', 0.3324),
('6543', 'aaaaa', '2023-05-31', '電', 10.18);

-- --------------------------------------------------------

--
-- 資料表結構 `points`
--

CREATE TABLE `points` (
  `ID` varchar(20) NOT NULL,
  `Points` int(10) NOT NULL,
  `RecordDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `signin`
--

CREATE TABLE `signin` (
  `ID` varchar(20) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `signin`
--

INSERT INTO `signin` (`ID`, `Date`) VALUES
('nmsl8787', '2023-05-19'),
('6543', '2023-05-19'),
('ssss', '2023-05-19'),
('6543', '2023-05-21'),
('6543', '2023-05-26'),
('6543', '2023-05-31'),
('abc', '2023-05-31'),
('nmsl8787', '2023-05-31'),
('nmsl8787', '2023-06-06');

-- --------------------------------------------------------

--
-- 資料表結構 `signup`
--

CREATE TABLE `signup` (
  `Name` varchar(20) NOT NULL,
  `People` int(3) NOT NULL,
  `requirement` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `actName` varchar(20) NOT NULL,
  `Phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `signup`
--

INSERT INTO `signup` (`Name`, `People`, `requirement`, `Email`, `actName`, `Phone`) VALUES
('Syuan', 1111, '', '10730163@ms2.hssh.tp.edu.tw', '吃素21天挑戰', '1');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- 資料表索引 `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `history`
--
ALTER TABLE `history`
  ADD KEY `ID` (`ID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `event`
--
ALTER TABLE `event`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `account` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
