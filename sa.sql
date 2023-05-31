-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-05-31 08:12:35
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
  `Points` int(50) NOT NULL,
  `PointRecords` date NOT NULL,
  `level` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `account`
--

INSERT INTO `account` (`ID`, `Name`, `Password`, `phone`, `Email`, `Points`, `PointRecords`, `level`) VALUES
('5555', 'admin', '123', '1111', '22222', 0, '0000-00-00', '1'),
('6543', 'aaaaa', 'sssss', '00000', '306785269@gmail.com', 0, '0000-00-00', ''),
('abc', 'allen', '123', '0972328166', 'max911114@gmail.com', 0, '0000-00-00', ''),
('admin', '管理者', '', '', '', 0, '0000-00-00', '1'),
('ccccc', '王曉明', '123', '0972328166', 'max911114@gmail.com', 0, '0000-00-00', ''),
('nmsl8787', '林寶', 'nmsl5269', '5487878787', '306785269@gmail.com', 1, '0000-00-00', ''),
('shshsh', 'shishi', 'sssss', '0909900999', 'maccc9114@gmail.com', 0, '0000-00-00', ''),
('ssss', 'SSS', '11111', '0909090909', '77777@gmail.com', 0, '0000-00-00', '');

-- --------------------------------------------------------

--
-- 資料表結構 `acttivity`
--

CREATE TABLE `acttivity` (
  `Name` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `People` int(3) NOT NULL,
  `requirement` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
('ssss', 'SSS', '2023-05-19', '開車', 4.12);

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
('6543', '2023-05-31');

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
-- 資料表索引 `history`
--
ALTER TABLE `history`
  ADD KEY `ID` (`ID`);

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
