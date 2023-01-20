-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-01-12 22:48:55
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db_1224`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `1224_r_table`
--

CREATE TABLE `1224_r_table` (
  `id` int(12) NOT NULL,
  `rmail` varchar(64) NOT NULL,
  `rps` varchar(64) NOT NULL,
  `rname` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `1224_r_table`
--

INSERT INTO `1224_r_table` (`id`, `rmail`, `rps`, `rname`) VALUES
(1, 'test1@test', 'test1', 'rrr'),
(2, 'test2@test', 'test2', 'mmm');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `1224_r_table`
--
ALTER TABLE `1224_r_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `1224_r_table`
--
ALTER TABLE `1224_r_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
