-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-05-17 08:23:19
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
  `PointRecords` datetime(6) NOT NULL,
  `level` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `account`
--

INSERT INTO `account` (`ID`, `Name`, `Password`, `phone`, `Email`, `Points`, `PointRecords`, `level`) VALUES
('abc', 'allen', '123', '0972328166', 'max911114@gmail.com', 0, '0000-00-00 00:00:00.000000', ''),
('ccccc', '王曉明', '123', '0972328166', 'max911114@gmail.com', 0, '0000-00-00 00:00:00.000000', ''),
('nmsl8787', '林寶', 'nmsl5269', '5487878787', '306785269@gmail.com', 0, '0000-00-00 00:00:00.000000', '');

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
