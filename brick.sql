-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 24 2024 г., 10:41
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `brick`
--
CREATE DATABASE IF NOT EXISTS `brick` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `brick`;

-- --------------------------------------------------------

--
-- Структура таблицы `favorites`
--

CREATE TABLE `favorites` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `flat_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `flats`
--

CREATE TABLE `flats` (
  `id` int NOT NULL,
  `plan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `overall_size` float NOT NULL,
  `property_type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `frame` float NOT NULL,
  `section` int NOT NULL,
  `floor` varchar(8) COLLATE utf8mb4_general_ci NOT NULL,
  `room_number` int NOT NULL,
  `hallway_size` float NOT NULL,
  `kitchen_size` float NOT NULL,
  `living_room_1_size` float NOT NULL,
  `living_room_2_size` float DEFAULT NULL,
  `bathroom_size` float NOT NULL,
  `dressing_room_size` float DEFAULT NULL,
  `project` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(15) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `flats`
--

INSERT INTO `flats` (`id`, `plan`, `type`, `overall_size`, `property_type`, `frame`, `section`, `floor`, `room_number`, `hallway_size`, `kitchen_size`, `living_room_1_size`, `living_room_2_size`, `bathroom_size`, `dressing_room_size`, `project`, `price`) VALUES
(1, 'plans/a.svg', 'Студия', 21.7, 'Квартира', 6.1, 5, '8 из 17', 636, 3.9, 3.8, 10.8, NULL, 3.1, NULL, 'Томилино Парк', '5 420 182'),
(2, 'plans/b.svg', 'Студия', 21.7, 'Квартира', 6.1, 3, '11 из 17', 447, 3.9, 3.8, 10.8, NULL, 3.1, NULL, 'Томилино Парк', '5 512 334'),
(3, 'plans/b.svg', 'Студия', 21.7, 'Квартира', 6.1, 2, '15 из 17', 373, 3.9, 3.8, 10.8, NULL, 3.1, NULL, 'Томилино Парк', '5 629 414'),
(4, 'plans/c.svg', '1-комнатная', 32.2, 'Квартира', 6.3, 1, '8 из 17', 80, 3.9, 2.3, 12.7, 9.5, 3.9, NULL, 'Томилино Парк', '7 037 131'),
(5, 'plans/d.svg', '1-комнатная', 32.6, 'Квартира', 6.3, 1, '8 из 17', 84, 3.8, 2.6, 12.9, 9.4, 3.9, NULL, 'Томилино Парк', '7 155 173'),
(6, 'plans/e.svg', 'Студия', 22.2, 'Квартира', 10.2, 1, '10 из 12', 94, 3.9, 2.9, 12.3, NULL, 3, NULL, 'Прибрежный Парк', '5 217 149'),
(7, 'plans/f.svg', '1-комнатная', 34.6, 'Квартира', 7.2, 1, '2 из 12', 10, 4.8, 4.2, 12.4, 9.2, 3.9, NULL, 'Прибрежный Парк', '6 210 068'),
(8, 'plans/g.svg', '1-комнатная', 38.2, 'Квартира', 7.2, 2, '2 из 12', 182, 4.6, 4.3, 15, 10.5, 3.9, NULL, 'Прибрежный Парк', '6 709 025'),
(9, 'plans/h.svg', 'Студия', 21.3, 'Квартира', 6, 4, '14 из 22', 831, 4, 4.5, 9.8, NULL, 3, NULL, 'Новоград Павлино', '5 550 227'),
(10, 'plans/i.svg', '1-комнатная', 33.9, 'Квартира', 6, 4, '18 из 22', 880, 4.8, 3.5, 7.3, 13, 3.7, 1.6, 'Новоград Павлино', '6 205 377'),
(11, 'plans/j.svg', '1-комнатная', 33.9, 'Квартира', 7, 1, '9 из 22', 88, 4.8, 3.5, 7.6, 12.7, 3.7, 1.6, 'Новоград Павлино', '6 335 621');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `flats`
--
ALTER TABLE `flats`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT для таблицы `flats`
--
ALTER TABLE `flats`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
