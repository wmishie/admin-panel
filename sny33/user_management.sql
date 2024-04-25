-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2024 at 06:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Database: `user_management`

-- Table structure for table `users`
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table `users`
INSERT INTO `users` (`id`, `name`, `email`, `student_id`, `created_at`) VALUES
(1, 'Vickie ', 'vickiewangosh@gmail.com', '555', '2024-04-11 19:58:31'),
(2, 'Victor', 'veickiewangosh@gmail.com', '222', '2024-04-11 20:23:08'),
(3, 'payingdepts', 'avickiewangosh@gmail.com', '333', '2024-04-11 20:32:27'),
(4, 'Bot', 'sunn@gmail.com', '666', '2024-04-11 20:44:37'),
(5, 'Wangai', 'uvickiewangosh@gmail.com', '8888', '2024-04-11 20:52:01'),
(6, 'sunny', 'sunny@gmail.com', 'eerr', '2024-04-11 20:54:51'),
(7, 'sny', 'wwwvickiewangosh@gmail.com', '1234', '2024-04-11 23:41:01'),
(8, 'snyyy', 'sunnyy@gmail.com', '6666', '2024-04-11 23:43:27'),
(9, 'Bot', 'hvickiewangosh@gmail.com', '1111', '2024-04-11 23:54:59'),
(10, 'Vickiee ', 'jvickiewangosh@gmail.com', 'bbbb', '2024-04-11 23:59:20'),
(11, 'Victore', 'lvickiewangosh@gmail.com', '777', '2024-04-12 21:36:14');

-- Indexes for table `users`
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `student_id` (`student_id`);

-- AUTO_INCREMENT for table `users`
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

-- Table structure for table `admins`
CREATE TABLE `admins` (
    admin_id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) UNIQUE,
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (admin_id),
    INDEX idx_username (username),
    INDEX idx_email (email)
);

-- Dumping data for table `admins`
INSERT INTO `admins` (username, email, password, first_name, last_name) VALUES
('admin1', 'admin1@example.com', 'password1', 'John', 'Doe'),
('admin2', 'admin2@example.com', 'password2', 'Jane', 'Smith'),
('admin3', 'admin3@example.com', 'password3', 'Emily', 'Johnson'),
('admin4', 'admin4@example.com', 'password4', 'Michael', 'Williams');

-- Table structure for table `user_logs`
CREATE TABLE user_logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    action VARCHAR(255),
    user_id INT,
    login_time DATETIME,
    registration_time DATETIME,
    ip_address VARCHAR(255)
);

-- Dumping data for table `user_logs`
INSERT INTO user_logs (action, user_id, login_time, registration_time, ip_address) VALUES
('Login', 1, '2024-04-16 10:00:00', '2024-04-15 09:30:00', '192.168.1.1'),
('Register', 2, '2024-04-15 11:00:00', '2024-04-15 11:30:00', '192.168.1.2'),
('Login', 3, '2024-04-14 12:00:00', '2024-04-14 10:30:00', '192.168.1.3'),
('Register', 4, '2024-04-13 13:00:00', '2024-04-13 12:30:00', '192.168.1.4');

-- Indexes for table `user_logs`
ALTER TABLE user_logs ADD INDEX idx_user_id (user_id);
ALTER TABLE user_logs ADD INDEX idx_login_time (login_time);
ALTER TABLE user_logs ADD INDEX idx_registration_time (registration_time);

-- Table structure for table `admin_logs`
CREATE TABLE `admin_logs` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    admin_id INT,
    action VARCHAR(255),
    log_time DATETIME,
    details TEXT,
    INDEX idx_admin_id (admin_id),
    INDEX idx_action (action),
    INDEX idx_log_time (log_time)
);

-- Dumping data for table `admin_logs`
INSERT INTO admin_logs (admin_id, action, log_time, details) VALUES
(1, 'Login', '2024-04-16 10:00:00', 'Admin logged in successfully'),
(2, 'Logout', '2024-04-15 09:30:00', 'Admin logged out'),
(3, 'Update', '2024-04-14 12:00:00', 'Updated user profile'),
(4, 'Delete', '2024-04-13 13:00:00', 'Deleted user account');

-- Indexes for table `admin_logs`
ALTER TABLE admin_logs ADD INDEX idx_admin_id (admin_id);
ALTER TABLE admin_logs ADD INDEX idx_action (action);
ALTER TABLE admin_logs ADD INDEX idx_log_time (log_time);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
