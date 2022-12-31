-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-12-30 16:00:54
-- 伺服器版本： 10.4.27-MariaDB
-- PHP 版本： 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `lccnet`
--

-- --------------------------------------------------------

--
-- 資料表結構 `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(10) NOT NULL,
  `slug` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, '科技', 'tech', '2022-12-29 18:55:20', '0000-00-00 00:00:00'),
(2, '生活', 'life', '2022-12-29 19:06:31', '2022-12-29 19:06:31'),
(4, '運動', 'exercise', '2022-12-29 20:24:43', '2022-12-29 20:24:43');

-- --------------------------------------------------------

--
-- 資料表結構 `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `gallery_name` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `galleries`
--

INSERT INTO `galleries` (`id`, `gallery_name`, `name`, `created_at`) VALUES
(2, '632c223ba582599cc2219122dcb14f4e.jpg', '2-300x300.jpg', '2022-12-21 16:01:19'),
(3, '4299da13c8e79994ada8a640d8767e55.jpg', 'tree-736885__480.jpg', '2022-12-21 16:05:37'),
(4, 'c8bb5c094659ada79c79f1e322ccb87e.jpg', 'france-in-pictures-beautiful-places-to-photograph-eiffel-tower.jpg', '2022-12-21 16:50:33');

-- --------------------------------------------------------

--
-- 資料表結構 `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(2, '測試文章標題', '測試文章內容321', 1, 1, '2022-12-22 19:25:43', '2022-12-29 00:22:31'),
(3, '像蔬菜又不是蔬菜？這些「偽蔬菜」其實是澱粉類，熱量逼近一碗白', '常聽到要多吃蔬菜，尤其長期外食容易造成營養不均衡，但你確定你吃的食物是「真」蔬菜嗎？有沒有可能像蔬菜的又並非蔬菜呢？\r\n\r\n就像三色豆的青豆仁、玉米、紅蘿蔔中，青豆仁跟玉米都不屬於蔬菜類，而是屬於「全穀雜糧類」，其碳水化合物的比例相當高。發現了嗎？明明是便當配菜卻有兩種全榖雜糧類的食材，若搭配主食攝取，就要小心澱粉與熱量攝取過多。', 1, 1, '2022-12-22 19:36:04', '2022-12-22 19:36:04'),
(4, '中國BF.7變異株在台爆發？ 黃立民：明年防疫最大挑戰', '中國大陸新冠疫情爆發，又值農曆新年即將到來，指揮中心今宣布明年1月1日至31日，針對中國入境者於機場、港埠進行唾液PCR檢驗。專家預估，大陸此波疫情會延續至明年3至4月，僅有1個月加嚴檢疫措施是否足夠？感染科權威、台大兒童醫院兒童感染科主治醫師黃立民說，邊境加嚴篩檢措施要維持多久「這是很難決定的問題」，但中國防疫愈來愈放鬆，兩岸頻繁往來，國內能否守住現在中國正在流行的BF.7變異株，將是更大的挑戰。', 1, 1, '2022-12-28 23:06:42', '2022-12-28 23:06:42'),
(5, '商總賴正鎰籲義務役延長為6個月 省下預算購置精銳武器', '蔡總統宣布恢復義務役1年役期，為「國安備戰」。中華民國商業總會主席賴正鎰今天指出，國家領導人應設法止戰而非一昧加強備戰，百姓不希望看到戰爭，也都抗拒戰爭，若為維持正常國防需求，他主張役期6個月即可，省下的義務役薪水就可用來購置精銳武器。', 1, 1, '2022-12-28 23:31:38', '2022-12-28 23:31:38'),
(6, '宋逸民教會爭議！前核心理事發聲了', '「藝起發光」教會理事長宋逸民，日前以「私生活有極大狀況」逐出小甜甜，進而引發一連串爭議。對此，曾連續3屆擔任藝起發光核心理事的藝人何戎，則對宋逸民喊話，希望對方把話說清楚。\r\n\r\n據《CTWANT》報導，何戎提到藝起發光的起源，是來自2009年的地方教會復活節活動，才漸漸有越來越多藝人參與，甚至還在小巨蛋辦過活動，也就是「愛在四月天」，目的是希望藉由不同教會的藝人合作表演，才孕育出「藝起發光協會」。\r\n\r\n不過，何戎卻不知道為何自己不再是「核心理事」，也不清楚為何從「協會」變「教會」，同時也勸現任理事長宋逸民，應該要把話說清楚。', 1, 1, '2022-12-28 23:47:52', '2022-12-28 23:47:52'),
(7, '123123', 'dsffsafsafsafsaf', 1, 1, '2022-12-29 19:37:24', '2022-12-29 19:37:24'),
(8, '342', '234423423', 1, 2, '2022-12-29 19:39:19', '2022-12-29 19:39:19'),
(9, '123321', 'abcdeedcba', 1, 4, '2022-12-29 20:25:03', '2022-12-29 20:25:03'),
(10, 'testtesttest', 'texttexttexttexttext', 4, 2, '2022-12-30 21:39:37', '2022-12-30 21:39:37'),
(11, 'afsdfasdffasdfsfasdfasd', 'safdafdsafdssdff bq34t egtrwegearggre', 3, 4, '2022-12-30 22:26:16', '2022-12-30 22:26:16');

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` int(6) NOT NULL,
  `description` text NOT NULL,
  `sale` varchar(1) NOT NULL,
  `quantity` int(5) NOT NULL,
  `discount` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `sale`, `quantity`, `discount`) VALUES
(1, 'puipui', 999, '', '0', 999, '0.7'),
(2, 'test', 123, '', '0', 1, '0.9'),
(4, 'test4', 240, '', '1', 32, '1');

-- --------------------------------------------------------

--
-- 資料表結構 `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(10) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `edu` varchar(5) NOT NULL,
  `interest` varchar(10) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `students`
--

INSERT INTO `students` (`id`, `name`, `mail`, `phone`, `gender`, `edu`, `interest`, `content`) VALUES
(1, '天竺鼠車車', 'asdf@gmail.com', '0987654321', '女', '國小', '吃', 'abc123'),
(3, '罩門炭治郎', 'asdf@gmail.com', '0987654321', '女', '高中職', '吃', 'ewafwaefawwaf'),
(4, '虎杖優人', 'asdf@gmail.com', '0987654321', '男', '研究所以上', '吃,樂', 'lorem a in the text picsum.'),
(5, '流川楓', 'asdf@gmail.com', '0987654321', '女', '國中', '吃', ''),
(6, '阿爾斯', 'asdf@gmail.com', '0987654321', '男', '國小', '玩', ''),
(7, '流柳新', 'asdf@gmail.com', '0987654321', '女', '研究所以上', '吃', ''),
(12, '234113', '32423', '42324214', '女', '高中職', '喝,玩', '32r23rq2');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `role` int(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `user`, `pw`, `role`, `created_at`) VALUES
(1, 'admin', 'admin', 0, '2022-12-21 08:49:30'),
(2, 'banana', 'banana', 0, '2022-12-21 21:33:24'),
(3, 'apple', 'apple', 1, '2022-12-21 21:50:24'),
(4, 'peterchen', 'peterchen', 1, '2022-12-30 21:17:28');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
