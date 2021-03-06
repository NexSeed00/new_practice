-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2021 年 4 月 22 日 14:33
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `Japan`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `prefecture`
--

CREATE TABLE `prefecture` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `region_id` tinyint(3) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_kana` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `prefecture`
--

INSERT INTO `prefecture` (`id`, `region_id`, `name`, `name_kana`) VALUES
(1, 1, '北海道', 'ホッカイドウ'),
(2, 2, '青森県', 'アオモリケン'),
(3, 2, '岩手県', 'イワテケン'),
(4, 2, '宮城県', 'ミヤギケン'),
(5, 2, '秋田県', 'アキタケン'),
(6, 2, '山形県', 'ヤマガタケン'),
(7, 2, '福島県', 'フクシマケン'),
(8, 3, '茨城県', 'イバラキケン'),
(9, 3, '栃木県', 'トチギケン'),
(10, 3, '群馬県', 'グンマケン'),
(11, 3, '埼玉県', 'サイタマケン'),
(12, 3, '千葉県', 'チバケン'),
(13, 3, '東京都', 'トウキョウト'),
(14, 3, '神奈川県', 'カナガワケン'),
(15, 4, '新潟県', 'ニイガタケン'),
(16, 4, '富山県', 'トヤマケン'),
(17, 4, '石川県', 'イシカワケン'),
(18, 4, '福井県', 'フクイケン'),
(19, 4, '山梨県', 'ヤマナシケン'),
(20, 4, '長野県', 'ナガノケン'),
(21, 4, '岐阜県', 'ギフケン'),
(22, 4, '静岡県', 'シズオカケン'),
(23, 4, '愛知県', 'アイチケン'),
(24, 5, '三重県', 'ミエケン'),
(25, 5, '滋賀県', 'シガケン'),
(26, 5, '京都府', 'キョウトフ'),
(27, 5, '大阪府', 'オオサカフ'),
(28, 5, '兵庫県', 'ヒョウゴケン'),
(29, 5, '奈良県', 'ナラケン'),
(30, 5, '和歌山県', 'ワカヤマケン'),
(31, 6, '鳥取県', 'トットリケン'),
(32, 6, '島根県', 'シマネケン'),
(33, 6, '岡山県', 'オカヤマケン'),
(34, 6, '広島県', 'ヒロシマケン'),
(35, 6, '山口県', 'ヤマグチケン'),
(36, 7, '徳島県', 'トクシマケン'),
(37, 7, '香川県', 'カガワケン'),
(38, 7, '愛媛県', 'エヒメケン'),
(39, 7, '高知県', 'コウチケン'),
(40, 8, '福岡県', 'フクオカケン'),
(41, 8, '佐賀県', 'サガケン'),
(42, 8, '長崎県', 'ナガサキケン'),
(43, 8, '熊本県', 'クマモトケン'),
(44, 8, '大分県', 'オオイタケン'),
(45, 8, '宮崎県', 'ミヤザキケン'),
(46, 8, '鹿児島県', 'カゴシマケン'),
(47, 8, '沖縄県', 'オキナワケン');

-- --------------------------------------------------------

--
-- テーブルの構造 `region`
--

CREATE TABLE `region` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_kana` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `region`
--

INSERT INTO `region` (`id`, `name`, `name_kana`) VALUES
(1, '北海道地方', 'ホッカイドウ'),
(2, '東北地方', 'トウホクチホウ'),
(3, '関東地方', 'カントウチホウ'),
(4, '中部地方', 'チュウブチホウ'),
(5, '近畿地方', 'キンキチホウ'),
(6, '中国地方', 'チュウゴクチホウ'),
(7, '四国地方', 'シコクチホウ'),
(8, '九州地方', 'キュウシュウチホウ');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `prefecture`
--
ALTER TABLE `prefecture`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
