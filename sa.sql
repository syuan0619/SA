-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-06-06 20:10:49
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
  `ID` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Summery` varchar(20) NOT NULL,
  `Date` datetime(6) NOT NULL,
  `startdate` date NOT NULL,
  `endDate` date NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Organiser` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Note` varchar(20) NOT NULL,
  `people` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `event`
--

INSERT INTO `event` (`ID`, `Name`, `Summery`, `Date`, `startdate`, `endDate`, `Location`, `Organiser`, `Email`, `Phone`, `Note`, `people`) VALUES
(1, '海洋保育講座', '了解更多海洋保育相關知識', '2023-07-07 10:00:00.000000', '2023-05-29', '2023-07-05', '輔大國璽樓11樓', '黃傑瑞', 'maccc9114@gmail.com', '0972328166', '無', 50);

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
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
