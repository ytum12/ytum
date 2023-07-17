-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 22 2023 г., 21:17
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `1-database`
--

-- --------------------------------------------------------

--
-- Структура таблицы `buildings`
--

CREATE TABLE `buildings` (
  `pid` bigint(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `buildings`
--

INSERT INTO `buildings` (`pid`, `name`, `image`, `price`) VALUES
(1, 'Кирпичный дом', '1626943624_18-almode_ru-p-sovremennie-kirpichnie-doma-20.jpg', '500000.00'),
(2, 'Черный кирпичный дом', '1633901924_100-p-doma-iz-chernogo-kirpicha-foto-104.jpg', '800000.00'),
(3, 'Кирпичный дом в стиле лофт', '1632889037_114-p-odnoetazhnii-dom-v-stile-loft-foto-116.jpg', '1200000.00'),
(4, 'Кирпичный дом в стиле модерн', '1626597303_56-almode_ru-p-fasadi-domov-v-sovremennom-stile-57.jpg', '700000.00');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `pid` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`pid`, `name`, `image`, `price`) VALUES
(1, 'Керамический блок 2,1НФ поризованный М150-200', 'kirpich_dvoynoy_porizovan_rif_kashira.jpg', '24.00'),
(2, 'Керамический блок Гжель 6,8НФ  М150-200', 'gjel-9nf.jpg', '85.00'),
(3, 'Керамический блок Гжель 10,7НФ 38 блок М150', '95f077a612f85ef04e550b2873758d10.jpg', '107.00'),
(4, 'Керамический блок Гжель 10,7НФ 25 блок М150', '95f077a612f85ef04e550b2873758d10.jpg', '133.00'),
(5, 'Керамический блок LUX 10,7НФ 38 М150-175', 'Inked63061036617194eeb91a53b40d33f4a4.jpg', '147.00'),
(6, 'Керамический блок Гжель 51 14,3 НФ М150', 'gjel-143nf.jpg', '168.00');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(355) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES
(22, 'lol', 'lol', '', '9cdfb439c7876e703e307864c9167a15', 'uploads/1685363641'),
(23, 'klo', 'klo', '', '642b921dce80b8405b7f32f9974c5a40', 'uploads/1685905379'),
(24, 'Дмитрий', 'Dima', '', '827ccb0eea8a706c4c34a16891f84e7b', 'uploads/1687199945'),
(25, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'uploads/1687453783'),
(26, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'uploads/1687453819'),
(27, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'uploads/1687453849'),
(28, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'uploads/1687453867'),
(29, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'uploads/1687453883'),
(30, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'uploads/1687453904');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`pid`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `buildings`
--
ALTER TABLE `buildings`
  MODIFY `pid` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
