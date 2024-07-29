-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2024 at 07:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balaji11`
--

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `userId`, `email`, `phone`, `pass`) VALUES
(2, 'Sarvesh', 'SHUBHAM', 'shubhamaman1157@gmail.com', '8887888067', 'b1b198cd5081b1c36e4912029674b3b7');

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `description`) VALUES
(1, 'BCA', '      IT                                                                                        '),
(3, 'MCA', 'Master in Computer Application                                '),
(7, 'BBA', 'IT');

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `create_date`, `notice_masg`, `stutus`) VALUES
(2, 'wdw', '2024-07-22', '2d3', 1),
(3, 'wdw', '2024-07-22', '2d3', 1),
(4, 'wdw', '2024-07-22', '2d3', 1),
(5, 'Exam', '2024-07-22', 'Today', 0),
(6, 'Exam', '2024-07-22', 'Today', 0);

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `fname`, `mname`, `dob`, `gender`, `email`, `course`, `phone`, `tenth`, `twelth`, `adhar`, `address`, `regDate`, `enrollement`, `image`) VALUES
(4, 'Ankush', 'qa', 'we', '2024-07-19', 'Male', 'ak@gmail.com', 3, '8887888012', 54, 67, '898923345678', 'DHUKUNATH POST- SHANKARPUR GORAKHPUR\r\ndhukunath post- shankarpur\r\ngorakhpur', '2024-07-19', 'BJAG07074928', 'ankit.jpeg'),
(6, 'Anuj', 'XYZ', 'ABC', '2024-07-22', 'Male', 'ankush@gmail.com', 1, '8887888123', 54, 67, '123456789019', 'DHUKUNATH POST- SHANKARPUR GORAKHPUR\r\ndhukunath post- shankarpur\r\ngorakhpur', '2024-07-22', 'BJAG07062903', 'amit.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
