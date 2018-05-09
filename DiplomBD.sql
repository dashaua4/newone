-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 09 2018 г., 13:24
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `DiplomBD`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Tables`
--

CREATE TABLE `Tables` (
  `Id_table` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Tables`
--

INSERT INTO `Tables` (`Id_table`, `name`, `price`) VALUES
(25, 'Модульна система Офис (ofіs)', 13991),
(26, 'Модульна система Офис (ofіs), стелаж 4х дверный', 1994),
(27, 'Модульна система Офис (ofіs), стелаж 3х дверный', 1929),
(28, 'Модульна система Офис (ofіs), стелаж 2х дверный', 1697),
(29, 'Модульна система Офис (ofіs), стол 160', 3231),
(30, 'Модульна система Офис (ofіs), стол угловой', 658),
(31, 'Модульна система Офис (ofіs), стол боковой', 1008),
(32, 'Модульна система Офис (ofіs), шкаф угловой', 1941),
(33, 'Модульна система Офис (ofіs), пенал для одежды 50', 1323),
(34, 'Модульна система Офис (ofіs), шкаф для одежды 60', 1367),
(35, 'Модульна система Офис (ofіs), угловое окончания', 835),
(36, 'Модульна система Офис (ofіs), стол 120', 1965);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Tables`
--
ALTER TABLE `Tables`
  ADD PRIMARY KEY (`Id_table`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Tables`
--
ALTER TABLE `Tables`
  MODIFY `Id_table` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
