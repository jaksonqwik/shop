-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 20 2023 г., 01:19
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `discription` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `price` int NOT NULL,
  `pthoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `title`, `discription`, `price`, `pthoto`) VALUES
(1, 'Бейсболка Nike', 'Стандарт сделана из хлопковой саржи с начесом. Кепка мягкая на ощупь, 5-ти панельная модель. Для регулировки размера используется липучка.\r\nПремиум сделана из плотно хлопка. Бархатистая поверхность,– на ощупь. Кепка 6-ти панельная. Латунная пряжка на тыльной стороне кепки используется для регулировки размера.', 550, 'кепка'),
(2, 'Спортивная сумка Nike', ' удобный аксессуар, необходимый каждому спортсмену. В отличие от обычных аксессуаров на каждый день, к спортивным сумкам предъявляется немало требований, например:\r\n\r\n-высокая прочность и износостойкость -материала;\r\n-функциональность;\r\n-легкость;\r\n-вместительность;\r\n-стильный внешний вид в сочетании с -комфортом.', 990, 'сумка'),
(3, 'Кросовки Nike', 'Технологический теплоизоляционный материал. - Почти невесома, поскольку имеет структуру очень низкой плотности: ее объем состоит преимущественно из воздуха. - Удерживаемый таким образом воздух является высокоэффективным изолятором и аккумулятором тепла.', 1290, 'форсы');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
