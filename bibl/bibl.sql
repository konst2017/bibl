-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 07 2021 г., 16:33
-- Версия сервера: 5.6.40-log
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bibl`
--

-- --------------------------------------------------------

--
-- Структура таблицы `kat`
--

CREATE TABLE `kat` (
  `num` int(11) NOT NULL,
  `naim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `kat`
--

INSERT INTO `kat` (`num`, `naim`) VALUES
(1, 'Деловые/Бизнес-процессы'),
(2, 'Деловые/Найм'),
(3, 'Деловые/Реклама'),
(4, 'Деловые/Управление бизнесом'),
(5, 'Деловые/Управление людьми'),
(6, 'Деловые/Управление проектами'),
(7, 'Детские/Воспитание'),
(8, 'Дизайн/Общее'),
(9, 'Дизайн/Logo'),
(10, 'Дизайн/Web дизайн'),
(11, 'Разработка/PHP'),
(12, 'Разработка/HTML и CSS'),
(13, 'Разработка/Проектирование');

-- --------------------------------------------------------

--
-- Структура таблицы `mater`
--

CREATE TABLE `mater` (
  `num` int(11) NOT NULL,
  `naim` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `awtor` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `tip` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `kat` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `teg` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `mater`
--

INSERT INTO `mater` (`num`, `naim`, `awtor`, `tip`, `kat`, `content`, `teg`) VALUES
(2, 'Путь джедая', ' 	Максим Дорофеев', 'книга', 'Саморазвитие / Личная эффективность', '<p>Очень интерстно!!!</p>\r\n', 'Продуктивность '),
(3, 'Полное руководство по Yii 2.0', 'Александр Макаров', 'книга', 'Разработка / PHP', '', 'Продуктивность ');

-- --------------------------------------------------------

--
-- Структура таблицы `ssilki`
--

CREATE TABLE `ssilki` (
  `num` int(11) NOT NULL,
  `naim` varchar(240) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ssilki`
--

INSERT INTO `ssilki` (`num`, `naim`) VALUES
(1, 'Электронная версия на lites '),
(2, 'Электронная версия на pites ');

-- --------------------------------------------------------

--
-- Структура таблицы `ssilkiid`
--

CREATE TABLE `ssilkiid` (
  `num` int(11) NOT NULL,
  `naim` varchar(255) DEFAULT NULL,
  `id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `ssilkiid`
--

INSERT INTO `ssilkiid` (`num`, `naim`, `id`) VALUES
(1, 'https://yandex.by/search/?text', '2'),
(2, 'https://yandex.by/search/?text=%D0%BA%D0%B0%D0%BD%D0%B0%D0%BB%20%D0%B1%D0%B5%D0%BB%D1%81%D0%B0%D1%82&lr=154&clid=2277453-327&src=suggest_B', '2'),
(3, 'https://yandex.by/search/?text', '2');

-- --------------------------------------------------------

--
-- Структура таблицы `teg`
--

CREATE TABLE `teg` (
  `num` int(11) NOT NULL,
  `naim` varchar(240) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `teg`
--

INSERT INTO `teg` (`num`, `naim`) VALUES
(2, 'Личная эффективность '),
(3, 'Продуктивность');

-- --------------------------------------------------------

--
-- Структура таблицы `tegid`
--

CREATE TABLE `tegid` (
  `num` int(11) NOT NULL,
  `naim` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `tegid`
--

INSERT INTO `tegid` (`num`, `naim`, `id`) VALUES
(20, 'Продуктивность ', 2),
(21, 'Личная эффективность ', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `tip`
--

CREATE TABLE `tip` (
  `num` int(11) NOT NULL,
  `naim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tip`
--

INSERT INTO `tip` (`num`, `naim`) VALUES
(1, 'книга'),
(2, 'Статья'),
(3, 'Видео'),
(4, 'Сайт/Блог'),
(5, 'Подборка'),
(6, 'Ключевые идеи книги');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `kat`
--
ALTER TABLE `kat`
  ADD PRIMARY KEY (`num`);

--
-- Индексы таблицы `mater`
--
ALTER TABLE `mater`
  ADD PRIMARY KEY (`num`);

--
-- Индексы таблицы `ssilki`
--
ALTER TABLE `ssilki`
  ADD PRIMARY KEY (`num`);

--
-- Индексы таблицы `ssilkiid`
--
ALTER TABLE `ssilkiid`
  ADD PRIMARY KEY (`num`);

--
-- Индексы таблицы `teg`
--
ALTER TABLE `teg`
  ADD PRIMARY KEY (`num`);

--
-- Индексы таблицы `tegid`
--
ALTER TABLE `tegid`
  ADD PRIMARY KEY (`num`);

--
-- Индексы таблицы `tip`
--
ALTER TABLE `tip`
  ADD PRIMARY KEY (`num`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `kat`
--
ALTER TABLE `kat`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `mater`
--
ALTER TABLE `mater`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `ssilki`
--
ALTER TABLE `ssilki`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `ssilkiid`
--
ALTER TABLE `ssilkiid`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `teg`
--
ALTER TABLE `teg`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `tegid`
--
ALTER TABLE `tegid`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `tip`
--
ALTER TABLE `tip`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
