CREATE DATABASE IF NOT EXISTS `basic_order_system` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `basic_order_system`;

CREATE TABLE IF NOT EXISTS `users` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(100) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
