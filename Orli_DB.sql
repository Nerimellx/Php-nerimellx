-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 21 2018 г., 18:03
-- Версия сервера: 5.7.16-log
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Orli_DB`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Admin`
--

CREATE TABLE `Admin` (
  `id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Admin`
--

INSERT INTO `Admin` (`id`, `Email`, `password`) VALUES
(1, 'kirill43030', '$2y$10$5ntulVUuWkxKHd.VtE1gSeLc4EW9nJaZCE98I.yD99E8vAEfK8fie');

-- --------------------------------------------------------

--
-- Структура таблицы `buy_products`
--

CREATE TABLE `buy_products` (
  `buy_id` int(11) NOT NULL,
  `buy_id_order` int(11) NOT NULL,
  `buy_id_product` int(11) NOT NULL,
  `buy_count_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `buy_products`
--

INSERT INTO `buy_products` (`buy_id`, `buy_id_order`, `buy_id_product`, `buy_count_product`) VALUES
(5, 31, 2, 6),
(6, 32, 6, 4),
(7, 32, 15, 5),
(8, 33, 2, 1),
(9, 34, 2, 1),
(10, 35, 2, 1),
(11, 37, 4, 1),
(12, 38, 15, 1),
(13, 39, 7, 1),
(14, 40, 4, 1),
(15, 41, 2, 6),
(16, 42, 15, 59);

-- --------------------------------------------------------

--
-- Структура таблицы `Cart`
--

CREATE TABLE `Cart` (
  `cart_id` int(11) NOT NULL,
  `cart_id_product` int(11) NOT NULL,
  `cart_price` int(11) NOT NULL,
  `cart_count` int(11) NOT NULL,
  `cart_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cart_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Categories`
--

CREATE TABLE `Categories` (
  `id` int(11) NOT NULL,
  `Categor` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Categories`
--

INSERT INTO `Categories` (`id`, `Categor`, `Type`) VALUES
(1, 'Пижамы', 'Else'),
(2, 'Халаты', 'Else'),
(3, 'Комплекты', 'Else'),
(4, 'Кружевное', 'Cloth'),
(5, 'Обычное', 'Cloth'),
(6, 'Дешевое', 'Cloth'),
(7, 'Портмоне', 'Else'),
(8, 'Куртки', ''),
(9, 'Куртки', 'Else'),
(10, 'Cумки', 'Else');

-- --------------------------------------------------------

--
-- Структура таблицы `coment`
--

CREATE TABLE `coment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `text` varchar(500) DEFAULT NULL,
  `confirmed` int(11) NOT NULL,
  `pubdates` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `coment`
--

INSERT INTO `coment` (`id`, `name`, `text`, `confirmed`, `pubdates`) VALUES
(1, 'Кирилл', 'Отличный магазин,всем рекомендую!', 1, '2017-12-03 14:58:40'),
(3, 'Данил', 'Купил,не пожалел!', 0, '2017-12-03 15:01:03'),
(5, 'Roman', 'Отлично,не пожалел!', 0, '2017-12-03 15:04:16'),
(6, 'Елизавета', 'Красивущее белье,буду покупать еще!', 0, '2017-12-03 15:17:50'),
(7, 'Наташа', 'Моему парню очень нравится)', 0, '2017-12-03 15:17:50'),
(8, 'Daniel', 'Лучший сайт по продаже пижам!', 0, '2017-12-04 18:59:19');

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `number`, `instagram`, `email`) VALUES
(1, '+380 99 204 68 77', 'pizhamka_orli', 'kirill1206200072@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_confirm` varchar(10) NOT NULL,
  `order_dostavka` varchar(255) NOT NULL,
  `order_pay` varchar(50) NOT NULL,
  `order_typepay` varchar(100) NOT NULL,
  `order_fio` text NOT NULL,
  `order_city` text NOT NULL,
  `order_warehouse` text NOT NULL,
  `order_phone` varchar(50) NOT NULL,
  `order_note` text NOT NULL,
  `order_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `order_datetime`, `order_confirm`, `order_dostavka`, `order_pay`, `order_typepay`, `order_fio`, `order_city`, `order_warehouse`, `order_phone`, `order_note`, `order_email`) VALUES
(31, '2018-01-16 14:58:22', '', 'Нова Пошта', '', 'Наложенный платеж', 'Предтеченский Кирилл Дмитриевич', 'db5c88e0-391c-11dd-90d9-001a92567626', '8ccb38e0-9c9d-11e4-acce-0050568002cf', '0507029502', 'Отправьте завтра пожалауйста!', 'kirill12062000@gmail.com'),
(32, '2018-01-16 16:44:12', '', 'Нова Пошта', '', 'Наложенный платеж', 'Предтеченский Кирилл Дмитриевич', 'db5c88e0-391c-11dd-90d9-001a92567626', '8ccb38e0-9c9d-11e4-acce-0050568002cf', '0507029502', 'Быстрее пожалуйста!', 'kirill12062000@gmail.com'),
(33, '2018-01-16 17:49:27', '', 'Нова Пошта', '', 'Наложенный платеж', 'Предтеченский Кирилл Дмитриевич', 'Харьков', '', '0507029502', '', 'kirill12062000@gmail.com'),
(34, '2018-01-16 17:56:48', '', 'Нова Пошта', '', 'Безналичный рассчет', 'Предтеченский Кирилл Дмитриевич', '2b4f7c98-c984-11e4-a77a-005056887b8d', 'Отделение № 1: ул. Соборная, 2', '0507029502', '', 'kirill12062000@gmail.com'),
(35, '2018-01-16 18:31:52', '', 'Нова Пошта', '', 'Наложенный платеж', 'Предтеченский Кирилл Дмитриевич', '2d776f0f-f138-11e3-8c4a-0050568002cf', 'Отделение №1: ул. Мира, 17', '0507029502', '', 'kirill12062000@gmail.com'),
(36, '2018-01-16 18:32:50', '', 'Нова Пошта', '', 'Наложенный платеж', 'Предтеченский Кирилл Дмитриевич', '2d776f0f-f138-11e3-8c4a-0050568002cf', 'Отделение №1: ул. Мира, 17', '0507029502', '', 'kirill12062000@gmail.com'),
(37, '2018-01-16 18:33:39', '', 'Нова Пошта', '', 'Безналичный рассчет', 'Предтеченский Кирилл Дмитриевич', '41934c38-40f4-11e5-8d8d-005056887b8d', 'Отделение №1: ул. Соборна, 2а', '0507029502', '', 'kirill12062000@gmail.com'),
(38, '2018-01-16 18:35:01', '', 'Новаjdf', '', 'Наложенный платеж', 'Предтеченский Кирилл Дмитриевич', '06f87968-4079-11de-b509-001d92f78698', 'Почтомат ', '0507029502', '', 'kirill12062000@gmail.com'),
(39, '2018-01-16 18:35:51', '', 'sdsdda', '', 'Безналичный рассчет', 'Предтеченский Кирилл Дмитриевич', '06f87968-4079-11de-b509-001d92f78698', 'Почтомат ', '0507029502', '', 'kirill12062000@gmail.com'),
(40, '2018-01-16 18:41:24', '', 'Почтоматы ПриватБанка', '', 'Безналичный рассчет', 'Предтеченский Кирилл Дмитриевич', '06f87968-4079-11de-b509-001d92f78698', 'Отделение: ул. Ломоносова, 24а - ', '0507029502', '', 'kirill12062000@gmail.com'),
(41, '2018-02-21 14:01:52', '', 'Почтоматы ПриватБанка', '', 'Наложенный платеж', 'Предтеченский Кирилл Дмитриевич', 'db5c88e0-391c-11dd-90d9-001a92567626', '8ccb38e0-9c9d-11e4-acce-0050568002cf', '0507029502', 'Хочу что бы все было быстро и качественно!', 'kirill12062000@gmail.com'),
(42, '2018-02-21 16:59:24', '', 'Новая почта', '', 'Наложенный платеж', 'Предтеченский Кирилл Дмитриевич', 'db5c88e0-391c-11dd-90d9-001a92567626', '8ccb38e0-9c9d-11e4-acce-0050568002cf', '0507029502', '', 'kirill12062000@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `text` varchar(500) DEFAULT NULL,
  `cost` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `visible` int(11) NOT NULL,
  `top` int(11) DEFAULT NULL,
  `categories_ip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `text`, `cost`, `type`, `visible`, `top`, `categories_ip`) VALUES
(2, 'ХАЛАТ \"РОЗОВОЕ ВИНО\"', 'halat_1.jpg', 'Изделие высшего качества,подобрано со вкусом!', '399', 'Else', 1, 1, 1),
(3, 'ПЕНЬЮАР \"КРУЖЕВНОЙ\"', 'peniuar_1.jpg', 'Изделие высшего качества,подобрано со вкусом!', '299', 'Else', 1, 1, 1),
(4, 'ПЕНЬЮАР \"КРУЖЕВНОЙ\"', 'peniuar_1.jpg', 'Изделие высшего качества,подобрано со вкусом!', '359', 'Else', 1, 0, 1),
(6, 'ПЕНЬЮАР \"КРУЖЕВНОЙ\"', 'peniuar_1.jpg', 'Изделие высшего качества,подобрано со вкусом!', '359', 'Cloth', 1, 0, 1),
(7, 'ХАЛАТ \"РОЗОВОЕ ВИНО\"', 'halat_1.jpg', 'Изделие высшего качества,подобрано со вкусом!', '399', 'Cloth', 1, 0, 1),
(15, 'Комплект \"Луна\"', 'complect_1.jpg', 'Лучшее наше изделие!', '540', 'Cloth', 1, 1, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `Slider`
--

CREATE TABLE `Slider` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Slider`
--

INSERT INTO `Slider` (`id`, `image`, `name`, `text`) VALUES
(1, 'slide-img-1.png', 'Лучшие условия<br>для оптовой закупки', 'Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Рукописи безопасную рот текстов мир агенство взгляд напоивший прямо.'),
(2, 'slide-img-2.png', 'Лучшие условия<br>для оптовой закупки', 'Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Рукописи безопасную рот текстов мир агенство взгляд напоивший прямо.'),
(3, 'slide-img-3.png', 'Лучшие условия<br>для оптовой закупки', 'Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Рукописи безопасную рот текстов мир агенство взгляд напоивший прямо.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `buy_products`
--
ALTER TABLE `buy_products`
  ADD PRIMARY KEY (`buy_id`);

--
-- Индексы таблицы `Cart`
--
ALTER TABLE `Cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Индексы таблицы `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Slider`
--
ALTER TABLE `Slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `buy_products`
--
ALTER TABLE `buy_products`
  MODIFY `buy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `Cart`
--
ALTER TABLE `Cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `Categories`
--
ALTER TABLE `Categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `coment`
--
ALTER TABLE `coment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `Slider`
--
ALTER TABLE `Slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
