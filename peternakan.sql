-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 05, 2024 at 03:33 PM
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
-- Database: `peternakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `namalengkap`, `email`, `password`, `alamat`) VALUES
(1, 'vero agrisanda', 'vero@root.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'kpliek'),
(2, 'Vero Agrisanda', 'geexspublic@gmail.com', '640e693971ca18e8b6974ee0518c4cfd98461241484100ebbd6d262b5cddaf64', 'Jl. sawah liek, kp olo, gunung pangilun'),
(3, 'Vero Agrisanda', 'sdfsdgublic@gmail.com', '80adc8cc78edc4a46fe03753fbbfb8031f88e79d71f2496aa991f71a4cd17c07', 'Jl. sawah liek, kp olo, gunung pangilun'),
(4, 'csdgdfg', 'erfhhd@rooot.com', 'efe3ecd3c9d5ed31c1537a75e4851fbf1c50b7ae7a932965fd60601878592dc1', 'sdwfndsjgfsehf'),
(5, 'cwesgrergh', 'weg@hhhh.vocm', 'f322947bdd0b90ba1ad3a934193674be49525bb663972f80f6c283560059c032', 'wefwef'),
(6, 'gfjffyyu', 'fxggxgfx@gmail.com', 'fbca68bd4ab0816fd096700e2f62968b343631ca8b38731192a12ea95f805f16', 'fufjtu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
