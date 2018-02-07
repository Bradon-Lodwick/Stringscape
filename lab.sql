-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2016 at 02:04 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `realname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `profession` varchar(128) NOT NULL,
  `how_you_heard` tinyint(11) NOT NULL,
  `sex` int(11) NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `realname`, `email`, `password`, `profession`, `how_you_heard`, `sex`, `bio`) VALUES
(1, 'CoolJon420', 'Jon', 'jon@test.com', '$2y$10$Wzg62R7vZ9CZGcmPfenDB.f9E8VEZkqngucMgM0kpObTmNeTqZMEm', 'Option 1', 0, 2, 'This is a sample message.'),
(20, 'TestUser123', 'Testing McTester', 'notatest@gmail.com', '$2y$10$yArfHIVaCgcJV2wTujCRmu5MqTuczRVLh/KzKeyjaIISS6c2xP.bG', 'Student', 1, 0, 'this is a test bio'),
(21, 'testestsdfas', 'gfdkgladk', 'emailsdf@gmail.com', '$2y$10$Op2lBg.hn6F29GXVHbK.ae9E4VbBzZ.pLWSJK/Gge5gP2idMeA1xy', 'Engineer', 1, 0, 'sdf'),
(22, 'asfadsg', 'goartkgasdfk', 'kadfksfldks@okay.com', '$2y$10$LlYZ6LK8AG25HTTbRu1U1OxqVEAeyFxt3N31twuC1Go.5j5pKpVtK', 'Engineer', 0, 0, 'sdfs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
