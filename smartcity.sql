-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 10:04 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartcity`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `total_population` (OUT `total_population` INT)  NO SQL
SELECT sum(population) into total_population from area$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `pin_code` varchar(10) NOT NULL,
  `a_name` varchar(20) NOT NULL,
  `population` int(10) NOT NULL,
  `city_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`pin_code`, `a_name`, `population`, `city_code`) VALUES
('', '', 0, ''),
('572101', 'sapthagiri', 5000, '1'),
('572102', 'shivajinagar', 6000, '1'),
('572103', 'maralur', 10000, '1'),
('572104', 'ph colony', 3000, '1');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_code` varchar(10) NOT NULL,
  `city_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_code`, `city_name`) VALUES
('', ''),
('1', 'tumkur'),
('11', 'we'),
('111', 'tmk'),
('1111r', 'tmk'),
('1111rd', 'tmk'),
('121', 'sd'),
('1211', 'tumkur'),
('1221', 'tr'),
('2', 's'),
('2222', '123'),
('433', 'rr'),
('54', 'sadsa'),
('7', 's'),
('7777', 'qdqd'),
('aaa', 'dddd'),
('das', 'as'),
('e', 'ss'),
('fdf', 'df'),
('fdfr', 'dff'),
('gwwq6wd', 'uasga'),
('kjj', 'lkk'),
('sas', 'dsa'),
('sasa', 'sdsds'),
('ujgf', 'tfty');

-- --------------------------------------------------------

--
-- Table structure for table `collage`
--

CREATE TABLE `collage` (
  `c_code` varchar(10) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_address` varchar(30) NOT NULL,
  `no_of_dept` int(10) NOT NULL,
  `city_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collage`
--

INSERT INTO `collage` (`c_code`, `c_name`, `c_address`, `no_of_dept`, `city_code`) VALUES
('11', 'GPT ', 'bh road,tumkur', 5, '1'),
('12', 'SPT', 'batwadi', 6, '1'),
('1223', 'CIT', 'gubbi', 6, '1211'),
('13', 'CIT', 'gubbi', 8, '1'),
('14', 'SIT', 'bh road', 8, '1'),
('15', 'SIDDAGANGA', 'townhall', 4, '1');

--
-- Triggers `collage`
--
DELIMITER $$
CREATE TRIGGER `uppercase` BEFORE INSERT ON `collage` FOR EACH ROW set new.c_name=upper(new.c_name)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `h_code` varchar(10) NOT NULL,
  `h_name` varchar(20) NOT NULL,
  `h_address` varchar(30) NOT NULL,
  `ratings` int(11) NOT NULL,
  `city_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`h_code`, `h_name`, `h_address`, `ratings`, `city_code`) VALUES
('11', 'govt', 'caltex', 4, '1'),
('2', 'adithya', 's.circle', 3, '1'),
('3', 'shridevi', 'mg road', 5, '1'),
('4', 'ths', 'bh road', 5, '1'),
('5', 'seva', 'banashankari', 2, '1');

-- --------------------------------------------------------

--
-- Table structure for table `h_place`
--

CREATE TABLE `h_place` (
  `pin_code` varchar(10) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_address` varchar(30) NOT NULL,
  `f_for` varchar(40) NOT NULL,
  `city_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `h_place`
--

INSERT INTO `h_place` (`pin_code`, `p_name`, `p_address`, `f_for`, `city_code`) VALUES
('572101', 'siddaganga', 'kyathasandra', 'temple', '1'),
('572102', 'amanikere', 'sira road', 'park', '1'),
('572103', 'lalbhag', 'banglore', 'whether', '1'),
('572104', 'kabbanpark', 'banglore', 'flowers', '1');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`email`, `password`) VALUES
('', 'dssdfre'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', 'tet'),
('', ''),
('', ''),
('', 'df'),
('aa', 'bb'),
('s', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `t_id` varchar(10) NOT NULL,
  `t_name` varchar(20) NOT NULL,
  `t_address` varchar(30) NOT NULL,
  `review` varchar(40) NOT NULL,
  `city_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`t_id`, `t_name`, `t_address`, `review`, `city_code`) VALUES
('1', 'gayathri', 'bh road', 'good', '1'),
('2', 'prashanth', 'ashoka road', 'bad', '1'),
('3', 'jai bharath', 'santhepet', 'very good', '1'),
('5', 'maruthi', 'gubbi gate', 'super', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`pin_code`),
  ADD KEY `city_code` (`city_code`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_code`);

--
-- Indexes for table `collage`
--
ALTER TABLE `collage`
  ADD PRIMARY KEY (`c_code`),
  ADD KEY `city_code` (`city_code`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`h_code`),
  ADD KEY `city_code` (`city_code`);

--
-- Indexes for table `h_place`
--
ALTER TABLE `h_place`
  ADD PRIMARY KEY (`pin_code`),
  ADD KEY `city_code` (`city_code`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `city_code` (`city_code`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`city_code`) REFERENCES `city` (`city_code`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `collage`
--
ALTER TABLE `collage`
  ADD CONSTRAINT `collage_ibfk_1` FOREIGN KEY (`city_code`) REFERENCES `city` (`city_code`) ON DELETE CASCADE;

--
-- Constraints for table `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `hospital_ibfk_1` FOREIGN KEY (`city_code`) REFERENCES `city` (`city_code`) ON DELETE CASCADE;

--
-- Constraints for table `h_place`
--
ALTER TABLE `h_place`
  ADD CONSTRAINT `h_place_ibfk_1` FOREIGN KEY (`city_code`) REFERENCES `city` (`city_code`) ON DELETE CASCADE,
  ADD CONSTRAINT `h_place_ibfk_2` FOREIGN KEY (`pin_code`) REFERENCES `area` (`pin_code`) ON DELETE CASCADE;

--
-- Constraints for table `theatre`
--
ALTER TABLE `theatre`
  ADD CONSTRAINT `theatre_ibfk_1` FOREIGN KEY (`city_code`) REFERENCES `city` (`city_code`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
