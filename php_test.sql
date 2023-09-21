-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2023 at 12:23 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Skirt'),
(2, 'Knit'),
(3, 'Blouse');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_category` int NOT NULL,
  `price` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `id_category`, `price`, `image`, `content`) VALUES
(1, 'Getting Romantic Layered Mesh Skirt', 1, 499000, '84773962partydress.gif', 'Fabric : Polyester 100%(General); Color: Black, Beige'),
(2, 'Vintage Floral Long Skirt', 1, 329000, '48longskirt.gif', 'Fabric : Cotton 98%(General), Spandex 2%(General); Color: Black'),
(4, 'I Am Ready To Know Ribbed Knit Top', 2, 229000, '14knit.gif', 'Fabric : Acrylic 100%(General); Color : Black, Brown, Ivory'),
(6, 'Flower Blouse', 2, 350000, '71sweatshirt.gif', 'Fabric : Polyester 100%(General); Color : Navy, Yellow'),
(8, 'Pizza Hero Loose Fit Shirt', 1, 764123, '1252999shirt.gif', 'Fabric : Cotton 100%(General); Color : Deep Khaki, Light Khaki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
