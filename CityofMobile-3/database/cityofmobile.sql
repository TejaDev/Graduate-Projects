-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 11:35 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cityofmobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `cal_dates`
--

CREATE TABLE `cal_dates` (
  `date_id` int(12) NOT NULL,
  `date` date DEFAULT NULL,
  `event` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cal_dates`
--

INSERT INTO `cal_dates` (`date_id`, `date`, `event`) VALUES
(209549, '2017-03-29', 61),
(209548, '2017-03-27', 60),
(209550, '2017-03-31', 62),
(209547, '2017-03-27', 59),
(209546, '2017-03-27', 58),
(209545, '2017-03-27', 57),
(209544, '2017-03-26', 56),
(209543, '2017-04-30', 55),
(209542, '2017-04-08', 54),
(209541, '2017-04-25', 53),
(209540, '2017-03-29', 52),
(209539, '2017-04-29', 51),
(209538, '2017-03-22', 50),
(209537, '2017-04-16', 49),
(209551, '2017-03-09', 63),
(209555, '2017-03-22', 67),
(209554, '2017-03-11', 66),
(209556, '2017-03-03', 68),
(209557, '2017-03-18', 69),
(209558, '2017-03-07', 70);

-- --------------------------------------------------------

--
-- Table structure for table `cal_events`
--

CREATE TABLE `cal_events` (
  `event_id` int(12) NOT NULL,
  `categories` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `contact` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `approve` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cal_events`
--

INSERT INTO `cal_events` (`event_id`, `categories`, `description`, `title`, `contact`, `address`, `approve`) VALUES
(57, 'Arts and Culture', 'Ms. Rhonda Lucas', 'Art and Culture', 'Ms. Rhonda Lucas', 'Shelby Hall, Room 2121', 0),
(61, 'Arts and Culture', 'michon trent', 'ArtWalk ', '', 'down town', 0),
(58, 'Business Events', 'Ms. Rhonda Lucas', 'Business Events', 'Ms. Rhonda Lucas', 'Shelby Hall, Room 2121', 0),
(59, 'Sporting Events', 'Ms. Rhonda Lucas', 'Sports Event', 'Ms. Rhonda Lucas', 'Shelby Hall, Room 2121', 0),
(60, 'City Special Events', 'Ms. Rhonda Lucas', 'City Special Events', 'Ms. Rhonda Lucas', 'Shelby Hall, Room 2121', 0),
(54, 'Arts and Culture', 'Mr. Dylan ', 'Explosions in the sky', 'Mr. Dylan ', 'Soul kitchen music hall, mobile', 0),
(56, 'City Special Events', 'Mr. Kevin Peterson', 'Festival of flowers', 'Mr. Kevin Peterson', '6801 Airport boulevard, mobile ', 0),
(55, 'Sporting Events', 'Mr. Ryan', 'SIAC round up â€“ Tennis tournament', 'Mr. Ryan', 'Mobile tennis center, mobile ', 0),
(53, 'Business Events', 'Ms. Eleonore Verfaillie', 'Content marketing made possible', 'Ms. Eleonore Verfaillie', 'Old 27 grill, Fairhope', 0),
(52, 'Business Events', 'Ms. Brenda Rembert', 'Small Business and Innovation Conference', 'Ms. Brenda Rembert', 'Mobile area chamber.', 0),
(51, 'Sporting Events', 'Mr. Michael Brown', 'Mobile bike and snorkel', 'Mr. Michael Brown', 'Bike ride: bike trails on the campus of USF.\r\nSnorkeling near the reefs on the beach.\r\n', 0),
(49, 'Arts and Culture', 'Mr. John doe', 'Easter Sunday', 'Mr. John doe', 'Downtown, mobile', 0),
(50, 'City Special Events', 'Mr. Ben Raines', 'Earth day', 'Mr. Ben Raines', 'Fairhope pier park, Fairhope', 0),
(62, 'Arts and Culture', 'vdsadv', 'ArtWalk ', 'dvsavsvs', 'ddsavdas', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cal_dates`
--
ALTER TABLE `cal_dates`
  ADD PRIMARY KEY (`date_id`),
  ADD KEY `event` (`event`);

--
-- Indexes for table `cal_events`
--
ALTER TABLE `cal_events`
  ADD PRIMARY KEY (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cal_dates`
--
ALTER TABLE `cal_dates`
  MODIFY `date_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209559;
--
-- AUTO_INCREMENT for table `cal_events`
--
ALTER TABLE `cal_events`
  MODIFY `event_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
