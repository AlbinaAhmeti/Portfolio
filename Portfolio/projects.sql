-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 12:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_description` text NOT NULL,
  `project_image` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `project_description`, `project_image`, `created_at`) VALUES
(1, 'Exam Time Management System', 'Project about the Examination Timetable Management System. This was a project on the subject of Distributed Systems.\r\nTechnologies used: Java, MySQL', '', '0000-00-00'),
(2, 'Online Store', 'Project about online phone purchases. This was a project on the Internet subject.\r\nTechnologies used: HTML, CSS, JavaScript', 'sd', '0000-00-00'),
(3, 'Database for HOSPITAL MANAGEMENT', 'Project about the data of patients, doctors, and schedules for hospital management. This was a project on the subject of Databases.\r\nTechnologies used: MySQL', 'sd', '0000-00-00'),
(5, 'Triple A Company Network Design', 'The purpose of this project is to realize and design a computer network. This was a project on the subject of Computer Networks.\r\nTechnologies used: Cisco Packet Tracer', 'sd', '2022-05-18'),
(6, 'FIEK Hotel', 'Project about the Development of the Interactive System for the management of hotel reservations. This was a project for the Human-Computer Communication subject.\r\nTechnologies used: Java, MySql', 'sd', '2022-07-18'),
(7, 'Library', 'Library management system for Lipjan city.\r\nThis project was implemented by Book Worms Devs with the benefit of a grant in cooperation with FIQ.\r\nTechniques used: HTML, CSS, JavaScript, jQuery, Bootstrap, PHP OOP, MySQL, GIT\r\nThe publication link was: http://biblotekalipjan.org/\r\nInstagram: bookwormsdevs', '', '2022-07-18'),
(8, 'FrokMotion', 'Project about shopping for refills online, about the Internet. This was a project for the Internet Programming subject.\r\nTechnologies used: PHP, HTML, CSS, JavaScript, MySQL', '', '0000-00-00'),
(10, 'SOHO infrastructure planning for the Office of the President of the Republic of Kosovo', 'Project about SOHO infrastructure planning for the Office of the President of the Republic of Kosovo. This was a project on the subject of Computer Network Practice.\r\nTechnologies used: GNS3, VM - VMware Workstation Pro', '', '2022-05-18'),
(14, 'Client-Server Design', 'Project about client-server communication. This was a project on the subject of Computer Networks.\r\nTechnologies used: Python', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
