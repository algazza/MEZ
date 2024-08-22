-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 05:26 PM
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
-- Database: `mathequatezone`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `class` enum('10','11','12') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `class`) VALUES
(1, 'raihan@gmail.com', 'iyan', '$2y$10$AmssJxdO6GIY.8oPixpX3.WoXnBlaP6vLeVsfywddNyHzmzWDOPau', '10'),
(2, 'mingyu@gmail.com', 'gyuu', '$2y$10$.ePTu2EF449O6O47P3v1nuyncK6FF9rnMTAFf/X5WyVwSJeFcc5SC', '12'),
(3, 'mez@gmail.com', 'mezz', '$2y$10$x3oGliy1./x/i8nh4IjQ1.lnQhgolvj8WPh0SMV.itCZK/ZXbj1ve', '11'),
(4, 'ok@gmail.com', 'ok', '$2y$10$1X.nzt/FB90QC9q5mzUmTeRTCiHfe8Uk6pNaNUkVIiD37nUQ/6mSS', '10'),
(5, 'dhyn@gmail.com', 'dahyunn', '$2y$10$sQafPZu2bB6hRkaz1dX8Pehiwznfj2ud40..ELrZEZgaOY0dCtj02', '10'),
(6, 'raihan1@gmail.com', 'Raihan Muhammad ', '$2y$10$Bnx4yBuupBgpXE6AdL9zIuOtn3khLwL4GXwBLmO.lsYexP9xoSMFa', ''),
(7, 'raihan1@gmail.com', 'Raihan Muhammad ', '$2y$10$UdmGVgxNfyOcsJjc/1RGEu5rIt4o7tv5tkMMSZfhshmLcOfz/cib6', ''),
(8, 'raihann1@gmail.com', 'Raihan M', '$2y$10$ICWUGdqKXPKTPpuyDWnQQezONlxv6zvJFjzvnxSZdrXyV2eizlxtG', '10'),
(9, 'jake@gmail.com', 'Jake', '$2y$10$3l5feDEtl4MaoVCvAoWi8.Gxfk8svZSY.3SV62ixW0zM4AH7OCdAC', '10'),
(11, 'Raihan1@gmail.com', 'dahyunn', '$2y$10$trOkNq/cfUksoDVKisO23OGzwhYM/hjoOq6IozY24fSyDXcxZElvq', '10'),
(12, 'ps@gmail.com', 'pss', '$2y$10$/NqKQR7IG6ip6KFG7353fetjKw9x4IJquBeapwGrdR1QLyH8xTVam', '10'),
(13, 'bilpuk@gmail.com', 'bilpuk', '$2y$10$5dgihB4ogvJcRroPPmqYnulLbgk5h0S4vP5h5glbAhW4zCMvhy6RG', '10'),
(14, 'hia@gmail.com', 'pe', '$2y$10$wmu0dtr0I34P/GfxlxqKUutOtUbJhKuIdD4A/gXvYVbAEZfjzTbk6', '10'),
(15, 'bilpuk1@gmail.com', 'bilapuki', '$2y$10$AOdHo/t0TeeG.oTaRCyfwOhlRaQsY7np4.2l2v9avOrxGHuelbDRe', '10'),
(16, 'kl@gmail.com', 'oo', '$2y$10$1d0Nz0FMH733G9djnrIZxebv3FeevHoDKuFCpPWjB/TmZsTOEhpmS', '10'),
(17, 'hai@gmail.com', 'hi', '$2y$10$eg76BAeq8zeG3hIpDflR2eWEK11fzCknHnSogMUIUwhv1tej34cRy', '11'),
(18, 'p0@gmail.com', 'p0', '$2y$10$5D04vV3/GRvS4OEndX8NA.b13/pho5GhiIeXqT6vr33RhaLUn5K7m', '10'),
(19, 'raihan1@gmail.com', 'Raihan Muhammad ', '$2y$10$Syb0ynq29YjRHf9Bo.DMQOrNCgeT/sKGSyy0VGHVUjtH0lJqWIJpO', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
