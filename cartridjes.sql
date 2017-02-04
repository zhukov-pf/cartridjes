-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 04 2017 г., 17:06
-- Версия сервера: 5.5.53
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cartridjes`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cartridjes`
--

CREATE TABLE `cartridjes` (
  `id` int(11) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cartridjes`
--

INSERT INTO `cartridjes` (`id`, `manufacturer`, `model_name`, `balance`) VALUES
(1, 'HP', '85A', 18),
(2, 'HP', '35A', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `points`
--

CREATE TABLE `points` (
  `id` int(11) NOT NULL,
  `point_name` varchar(255) NOT NULL,
  `view` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `points`
--

INSERT INTO `points` (`id`, `point_name`, `view`) VALUES
(1, 'Бескудниково', 1),
(2, 'Митино', 1),
(3, 'Коломенское', 0),
(4, 'Крылатское', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `printers`
--

CREATE TABLE `printers` (
  `id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `cartridjes_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `printers`
--

INSERT INTO `printers` (`id`, `model`, `cartridjes_name`) VALUES
(1, 'HP LaserJet Pro P1102', '85A'),
(2, 'Принтер HP LaserJet P1005', '35A');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `f_name`, `l_name`) VALUES
(1, 'admin', 'frdfyfdn', 'Администратор', ''),
(2, 'zhukov', 'dtytwbz250', 'Вадим', 'Жуков');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cartridjes`
--
ALTER TABLE `cartridjes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `model_name` (`model_name`);

--
-- Индексы таблицы `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `printers`
--
ALTER TABLE `printers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cartridjes_name` (`cartridjes_name`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cartridjes`
--
ALTER TABLE `cartridjes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `points`
--
ALTER TABLE `points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `printers`
--
ALTER TABLE `printers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `printers`
--
ALTER TABLE `printers`
  ADD CONSTRAINT `cartridjes_name` FOREIGN KEY (`cartridjes_name`) REFERENCES `cartridjes` (`model_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
