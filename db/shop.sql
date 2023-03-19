-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 20 2023 г., 01:21
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
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `number` varchar(50) NOT NULL,
  `skok_prod` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `fullName`, `number`, `skok_prod`, `name`) VALUES
(1, 'qwerty', '+111', 2, ''),
(2, 'qwerty', '+1112', 5, ''),
(3, 'qwerty', '+1112', 5, ''),
(4, 'qwerty', '+1112', 5, ''),
(5, '1212', '999', 1, ''),
(6, '1212', '999', 1, ''),
(7, '111', '111', 1, ''),
(8, 'qwerty', '+111', 1, ''),
(9, 'qwerty', '+111', 1, '');

-- --------------------------------------------------------

--
-- Структура таблицы `orders_gost`
--

CREATE TABLE `orders_gost` (
  `id` int NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `number` int NOT NULL,
  `skok_prod` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `orders_gost`
--

INSERT INTO `orders_gost` (`id`, `fullName`, `number`, `skok_prod`, `name`) VALUES
(1, 'qwerty', 1112, 1, ''),
(2, 'qwerty', 1112, 2, '');

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

-- --------------------------------------------------------

--
-- Структура таблицы `product_gost`
--

CREATE TABLE `product_gost` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `discription` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `price` int NOT NULL,
  `pthoto` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `product_gost`
--

INSERT INTO `product_gost` (`id`, `title`, `discription`, `price`, `pthoto`) VALUES
(1, 'Бейсболка Nike', 'Стандарт сделана из хлопковой саржи с начесом. Кепка мягкая на ощупь, 5-ти панельная модель. Для регулировки размера используется липучка. Премиум сделана из плотно хлопка. Бархатистая поверхность,– на ощупь. Кепка 6-ти панельная. Латунная пряжка на тыльной стороне кепки используется для регулировки размера.', 750, 'кепка'),
(2, 'Спортивная сумка Nike\r\n', 'удобный аксессуар, необходимый каждому спортсмену. В отличие от обычных аксессуаров на каждый день, к спортивным сумкам предъявляется немало требований, например: -высокая прочность и износостойкость -материала; -функциональность; -легкость; -вместительность; -стильный внешний вид в сочетании с -комфортом.', 1190, 'сумка'),
(3, 'Кросовки Nike', 'Технологический теплоизоляционный материал. - Почти невесома, поскольку имеет структуру очень низкой плотности: ее объем состоит преимущественно из воздуха. - Удерживаемый таким образом воздух является высокоэффективным изолятором и аккумулятором тепла.', 1490, 'форсы');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `fullName`, `email`, `password`) VALUES
(1, 'qwerty', '1@d.com', 'feb84f3ea54935d61a45120c8ee0bb9a'),
(3, 'qqq', 'q@a.com', '698d51a19d8a121ce581499d7b701668'),
(4, '', '', ''),
(5, '', '', ''),
(6, 'kola Y', 'qwerty@gmail.com', '698d51a19d8a121ce581499d7b701668'),
(7, 'Олег ФФ', '1@d.com', '698d51a19d8a121ce581499d7b701668');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`name`);

--
-- Индексы таблицы `orders_gost`
--
ALTER TABLE `orders_gost`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_gost`
--
ALTER TABLE `product_gost`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `orders_gost`
--
ALTER TABLE `orders_gost`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `product_gost`
--
ALTER TABLE `product_gost`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
