-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 07:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `art`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `mobile`, `email`, `password`) VALUES
(1, 'angelo murderman', 9096512709, 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(100) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `order_amount` float NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `product_qty`, `order_amount`, `order_date`, `status`) VALUES
(201, 10004, 101, 1, 1249, '2023-10-21 02:50:41', 'Confirmed'),
(202, 10001, 101, 1, 2049, '2023-10-21 02:53:40', 'Confirmed'),
(203, 10015, 101, 1, 1249, '2023-10-22 00:54:57', 'Confirmed'),
(204, 10020, 101, 1, 2449, '2023-10-23 00:44:27', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `category` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `desc` longtext NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `title`, `price`, `qty`, `desc`, `image`) VALUES
(10001, 1001, 'Unveiled', 2000, 19, 'Captivates with its daring revelation, depicting a figure emerging from veils of mystery and obscurity, representing a tremendous moment of self-discovery and personal development.\r\n', 'product_1.png'),
(10002, 1002, 'Smoke and Reflection', 1800, 25, 'Captivates viewers with its ethereal interplay of wisps of smoke and reflected surfaces, resulting in a visually exciting leap between ephemeral elements and tangible reality, asking viewers to consider the delicate balance between transience and permanence in life\'s moments.\r\n', 'product_2.png'),
(10003, 1001, 'Dual Essence', 2200, 30, 'Depicts two connected individuals exuding both harmony and contrast, indicating a thorough investigation of the complexity of human interactions.\r\n', 'product_3.png'),
(10004, 1002, 'The Joker Symphony', 1200, 14, 'A delightful yet enigmatic work in which a joker leads an emotional symphony, presenting a visual ode to the diverse nature of human experience.\r\n\r\n', 'product_4.png'),
(10005, 1002, 'Silent Echoes', 1500, 32, 'Immerses the observer in a meditative environment, with delicate details and muted tones weaving a narrative of contemplation and silent reverberations, inviting thought on the depth of unspoken emotions.\r\n', 'product_5.png'),
(10006, 1003, 'Fractured Symmetry', 2700, 16, 'Challenges established views, provoking reflection on the beauty that can emerge from unexpected arrangements and disruptions.\r\n', 'product_6.png'),
(10007, 1003, 'Dual Reflection', 1400, 36, 'Depicts a figure looking in the mirror into the complex interplay between inner and exterior identities, delivering a powerful reflection on self-perception and identity.\r\n\r\n', 'product_7.png'),
(10008, 1004, 'Blind Justice', 2200, 18, 'Speaks to the viewer with the strong visuals of a blindfolded figure holding the scales of justice, serving as a visual reflection on the impartiality and inherent complexities of the legal system.\r\n', 'product_8.png'),
(10009, 1004, 'Captive Shadows', 2400, 30, 'Traps spectators in a web of enigmatic shadows, creating a dramatic interplay of light and darkness related to the hidden forces that shape our experiences.', 'product_9.png'),
(10010, 1004, 'Fragmented Identity', 2800, 50, 'Questions traditional concepts of self, providing a broken face that symbolizes the diverse character of identity and invites reflection on the complexity of human existence.\r\n', 'product_10.png'),
(10011, 1005, 'Musclebound Resilience', 1700, 19, 'Honors the strength of the human form by depicting sinewy figures exuding a powerful sense of resilience and determination, paying homage to the human spirit\'s tenacity.\r\n', 'product_11.png'),
(10012, 1005, 'Smoke and Contemplation', 2900, 42, 'Captures its mysterious interplay of wisps of smoke and contemplative figures, creating a visually intriguing engagement between ephemeral elements and reflective moments of introspection.\r\n', 'product_12.png'),
(10013, 1006, 'Healing love', 2800, 15, 'Envelops the observer in a warm embrace, displaying characters linked in a caring and affectionate gesture, providing a visual picture of love\'s transformative power', 'product_13.png'),
(10014, 1006, 'Infinity Hugs', 2000, 32, 'Illustrates a timeless moment of gentle hug in which figures connect in an expression of enduring love, evoking a sense of eternal togetherness and unbounded compassion.\r\n\r\n', 'product_14.png'),
(10015, 1006, 'Bond Paper', 1200, 39, 'Art Materials', 'product_15.png'),
(10016, 1006, 'Compass', 2100, 35, 'Art Materials', 'product_16.png'),
(10017, 1006, 'Oil Pastel', 800, 36, 'Art Materials', 'product_17.png'),
(10018, 1006, 'Canva', 1300, 25, 'Art Materials', 'product_18.png'),
(10019, 1007, 'Brush', 2100, 26, 'Art Materials', 'product_19.png'),
(10020, 1007, 'Watercolor', 2400, 11, 'Art Materials', 'product_20.png'),
(10021, 1007, 'Color Pencil', 2600, 24, 'Art Materials', 'product_21.png'),
(10022, 1007, 'Pencils and Eraser', 900, 45, 'Art Materials', 'product_22.png'),
(10023, 1007, 'Uncharted Realms', 900, 45, 'Transports viewers to a fantasy realm of imagination and possibilities, where exotic landscapes and ethereal hues beg investigation, inspiring viewers to consider the unlimited potential of the unknown.\r\n\r\n', 'product_23.png'),
(10024, 1007, 'Soulful Affection', 1700, 50, 'Depicts a poignant moment in which an individual enjoys a profound connection, their faces and body language showing a depth of passion beyond words, evoking a sense of deep, soulful affection.\r\n', 'product_24.png'),
(10025, 1008, 'Mystique of the Muse', 1600, 38, 'Presents an enthralling tale in which the ethereal form of a muse beckons from the shadows, her presence filled with a fascinating charm, offering an insightful examination of the elusive and inspirational nature of creative inspiration.\r\n\r\n', 'product_25.png'),
(10026, 1008, 'Moonlit Reverie', 1800, 32, 'Casts an unearthly aura across a surreal environment, encouraging spectators to immerse themselves in a meditative, enchanted realm beneath the moon\'s soft caress.\r\n', 'product_26.png'),
(10027, 1008, 'Haunted Horizons', 1300, 29, 'Portrays the unsettling beauty of a barren landscape as spectral hues dance across the sky, implying a world trapped between realms. The artwork generates a sense of impending mystery, prompting viewers to consider the spectral entities that haunt this mysterious twilight panorama.\r\n', 'product_27.png'),
(10028, 1009, 'Eternal Embrace', 2200, 30, 'Depicts a timeless moment of personal connection in which figures entwine in a gesture of enduring love, their forms melting seamlessly into one another and evoking a sense of perpetual togetherness.\r\n', 'product_28.png'),
(10029, 1009, 'Dark side faces', 1800, 40, 'Dives into the human psyche\'s shadows, presenting a sequence of frightening visages wrapped in mystery and emotion. This enigmatic collection forces the observer to confront the complexity of the inner self and the darker facets that frequently lurk beneath the surface.\r\n\r\n\r\n', 'product_29.png'),
(10030, 1010, 'Chronicles of living', 2200, 32, 'It is an abundant weaving of life\'s many moments, interlaced with vibrant hues and precise details, providing a visual narrative that celebrates the beauty in everyday life.\r\n\r\n', 'product_30.png'),
(10031, 1010, 'Beneath of the weight', 2000, 45, 'Depicts a character weighed down by the weight of their emotions, conveyed through dramatic, swirling brushstrokes that communicate the palpable weight of their inner problems. The piece emanates vulnerability and resilience, allowing spectators to consider the immense fortitude required to bear such emotional loads.\r\n\r\n', 'product_31.png'),
(10032, 1010, 'Whiskers and Whispers', 2500, 35, 'Reveals a world of intimate ties, where the delicate caress of whiskers and soft murmurs of compassion amongst creatures tell a remarkable story of camaraderie and tenderness.\r\n', 'product_32.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `mobile`, `email`, `password`) VALUES
(101, 'angelo', 'murderman', 9096512709, 'angelomurderman@gmail.com', '391cf44dda3397769c7e9178ca8f618c'),
(102, 'Joshua', 'Sazon', 9198728903, 'joshua@gmail.com', 'd1133275ee2118be63a577af759fc052'),
(103, 'Arjet ', 'Millan', 9987876542, 'arjet@gmail.com', '0cc05aff6f0e99c4fdbd0aba1cbd08b0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10033;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
