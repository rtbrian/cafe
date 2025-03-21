-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2025 at 07:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fooddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `category` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image_url`, `category`) VALUES
(1, 'Burger', 'A delicious beef burger with cheese, lettuce, and our special sauce.', 8.99, 'https://drive.google.com/uc?export=view&id=1t8pAsSQ56WWIRjMBKG2-ZboL8RFUf_jc', 'Fast Food'),
(2, 'Pizza', 'Cheesy pepperoni pizza with a crispy crust and fresh ingredients.', 12.50, 'https://drive.google.com/uc?export=view&id=101ypgBxU9s98gGvU3RBCi_eVHQHh7snP', 'Italian'),
(3, 'Sushi', 'Fresh sushi platter with assorted fish and vegetables.', 15.00, 'https://drive.google.com/uc?export=view&id=1B04noqA7kU883MojIVrfcgoR55vFo6yI', 'Japanese'),
(4, 'Salad', 'Healthy mixed green salad with a tangy vinaigrette dressing.', 7.50, 'https://drive.google.com/uc?export=view&id=1VL3SdOD2AYSh7kfoM9r9YEgvBHddVdT7\nhttps://drive.google.com/uc?export=view&id=1VL3SdOD2AYSh7kfoM9r9YEgvBHddVdT7\nhttps://drive.google.com/uc?export=view&id=1VL3SdOD2AYSh7kfoM9r9YEgvBHddVdT7', 'Healthy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
