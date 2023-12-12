-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 06:41 PM
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
-- Database: `socialnetwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `specialization` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `isDoctor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Id`, `firstName`, `lastName`, `username`, `password`, `specialization`, `gender`, `Image`, `cover`, `isDoctor`) VALUES
(0, 'test', 'test', 'test1', '098f6bcd4621d373cade4e832627b4f6', 0, 0, 'users/userFemale.jpg', 'cover/Professor.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postId` int(11) NOT NULL,
  `publisher` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `PDF` int(255) NOT NULL,
  `date` date NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postId`, `publisher`, `content`, `PDF`, `date`, `course`) VALUES
(1, 0, 'test test testest ets tes tes teste st estest', 0, '2023-12-12', ''),
(2, 0, 'test 2 from Ramez', 0, '2023-12-12', ''),
(3, 0, 'test3 from Ramez Istanbouli', 0, '2023-12-12', ' 2023'),
(4, 0, 'test3 from Ramez Istanbouli', 0, '2023-12-12', ' 2023'),
(5, 0, 'test 2 from Ramez', 0, '2023-12-12', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(6) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `motherName` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `specialization` int(11) NOT NULL,
  `studyYear` int(11) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `firstName`, `lastName`, `middleName`, `motherName`, `username`, `password`, `specialization`, `studyYear`, `dateOfBirth`, `gender`, `Image`, `cover`, `email`) VALUES
(123001, 'test', 'test', 'test', 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 0, 3, '1996-04-04', 0, 'users/userMale.jpg', 'cover/engineering.jpg', 'test@test.test'),
(223001, 'ramez', 'Istanbouli', 'test', 'test', 'ramez', '81dc9bdb52d04dc20036dbd8313ed055', 0, 5, '1999-06-17', 0, 'users/userMale.jpg', 'cover/Dentist.jpg', 'ramziist96@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postId`),
  ADD KEY `doctorID` (`publisher`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `doctorID` FOREIGN KEY (`publisher`) REFERENCES `doctor` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
