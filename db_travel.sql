-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 15, 2020 at 04:10 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14298333_db_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentId` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `commentedDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentId`, `comment`, `user_id`, `place_id`, `commentedDate`) VALUES
(1, 'beautiful city', 4, 25, '2020-04-29 16:04:02'),
(2, 'hello yangon', 2, 25, '2020-04-29 16:17:16'),
(3, 'hi', 6, 25, '2020-04-29 17:27:11'),
(4, 'hello', 6, 23, '2020-04-29 17:27:34'),
(5, 'afas', 6, 23, '2020-07-02 11:34:30'),
(6, 'sfga', 6, 23, '2020-07-02 14:57:52'),
(7, 'saa', 6, 23, '2020-07-02 14:57:59'),
(8, 'zzq', 6, 23, '2020-07-02 14:58:04'),
(9, 'pp', 6, 23, '2020-07-02 14:58:17'),
(10, 'lll', 6, 23, '2020-07-02 14:58:25'),
(11, 'ooo', 6, 23, '2020-07-02 14:59:09'),
(12, 'dsfas', 6, 23, '2020-07-02 14:59:13'),
(13, 'dfg', 6, 23, '2020-07-02 17:33:34'),
(14, 'a', 6, 26, '2020-07-02 17:37:18'),
(15, 'b', 6, 26, '2020-07-02 17:37:22'),
(16, 'c', 6, 26, '2020-07-02 17:37:25'),
(17, 'd', 6, 26, '2020-07-02 17:37:30'),
(18, 'e', 6, 26, '2020-07-02 17:37:33'),
(19, 'f', 6, 26, '2020-07-02 17:37:37'),
(20, 'f', 6, 26, '2020-07-02 17:38:43'),
(21, 'f', 6, 26, '2020-07-02 17:39:13'),
(22, 's', 6, 26, '2020-07-02 17:39:21'),
(23, 's', 6, 26, '2020-07-02 17:41:55'),
(24, 's', 6, 26, '2020-07-02 17:42:23'),
(25, 's', 6, 26, '2020-07-02 17:44:45'),
(26, 's', 6, 23, '2020-07-02 17:49:07'),
(27, 'hello', 6, 30, '2020-07-08 12:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `regionID` int(11) NOT NULL,
  `state_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`regionID`, `state_name`) VALUES
(1, 'Yangon'),
(2, 'Mandalay'),
(3, 'Mawlamyine'),
(4, 'Pyin Oo Lwin'),
(5, 'Taunggyi ');

-- --------------------------------------------------------

--
-- Table structure for table `travelplaces`
--

CREATE TABLE `travelplaces` (
  `placeID` int(11) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `regionID` int(11) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `travelplaces`
--

INSERT INTO `travelplaces` (`placeID`, `photo`, `title`, `description`, `regionID`, `createDate`) VALUES
(1, 'yangon.jpg', 'Kandawgyi Park', 'The Karaweik Hall, also known as Karaweik Palace is one of Yangonâ€™s many landmarks. From a distance the Karaweik Hall looks like a huge golden barge floating on Kandawgyi Lake, glittering in the sun.After dark the Karaweik barge is lit up in spotlights, the golden stupa reflecting in the water of Lake Kandawgyi.', 1, '2020-04-06 10:37:04'),
(2, 'mandalay.jpg', 'Mandalay', 'Mandalay Hill, northeast of the cantonment near the river, is the location of relatively recent monasteries, pagodas, and monuments.The city was named after the Mandalay Hill, which is situated at the northeast corner of the present city. The hill has for long been a holy mount and it is believed that Lord Buddha prophesied that a great city, metropolis of Buddhism, would be founded at its foot. It was King Mindon who fulfilled the prophecy. ', 2, '2020-04-06 10:38:09'),
(3, 'mm.jpg', 'Mawlamyine', 'Mawlamyine (or Moulmein )is the capital of the Mon State in the Union of Myanmar. It is also the third largest city in the country. after Yangon and Mandalay. It has a population of about 240.000. Mawlamyine is an ancient Mon town. ', 3, '2020-04-06 10:37:04'),
(23, 'bagan.jpg', 'Bagan', 'The site of an old capital city of Myanmar. Pagan is a pilgrimage centre and contains ancient Buddhist shrines that have been restored and redecorated and are in current use. Ruins of other shrines and pagodas cover a wide area.', 2, '2020-04-23 04:52:39'),
(25, 'Yangon Town.jpg', 'Yangon ', 'Yangon is the largest city in Myanmar and the industrial and commercial centre of the country. The Shwe Dagon Pagoda has been a place of pilgrimage for many centuries, and Yangon grew out of a settlement around the temple that eventually became known as Dagon. ', 1, '2020-04-24 04:05:34'),
(26, 'bagan1.jpg', 'Bagan', 'The main tourist destination in Myanmar is Bagan. capital of the first Myanmar Empire; one of the richest archaeological sites in South-east Asia.The Magic of Bagan has inspired visitors to Myanmar for nearly 1000 years. Bagan covers an area of 42sq.km containing over 2000 well-preserved pagodas and temples of the 11th-13th century.', 2, '2020-04-24 07:52:12'),
(27, 'Pyin-Oo-Lwin.jpg', 'May-town', 'Pyin Oo Lwin was originally called Maymyo (â€˜May-townâ€™), after Colonel May of the 5th Bengal Infantry, and was designed as a place to escape the Mandalay heat.More recently, Pyin Oo Lwin has become famous for its fruit, jams and fruit wines. ', 4, '2020-05-19 15:52:58'),
(28, 'Pwe-Kauk-Waterfall.jpg', 'Peik Chin Myaung Cave', 'The land of Pyin Oo Lwin does not lack the enigmatic and surprising caves for you to explore. And, Peik Chin Myaung Cave is the limestone address whose age can be between 230 million and 310 million years. Once getting through the entrance to enter the long cave, you meet lots of Buddha images in the different sizes. ', 4, '2020-05-19 15:57:16'),
(30, 'taunggyi.jpg', 'Taunggyi', 'Being famous for its pleasant weather and impressive landscapes, Taunggyi is a place you should visit at least once.Being the capital of Shan State, Myanmar, this beautiful city is a popular tourist attraction in southern Myanmar.Taunggyi establishes a reputation for its pleasant, cool weather.', 5, '2020-05-21 04:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `userName`, `password`, `email`, `mobile`, `address`, `role_id`) VALUES
(2, 'moeset', '1234', 'moeset@gmail.com', '9452345213', 'ygn', 2),
(3, 'hein', '345', 'hein@gmail.com', '9452345212', 'ygn', 2),
(4, 'kiki', '098', 'kiki@gmail.com', '9452345211', 'ygn', 2),
(5, 'Heinhtet', '123', 'heinh@gmail.com', '9452345211', 'ygn', 2),
(6, 'Htet', '1234', 'htet23@gmail.com', '09792345821', 'mdy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentId`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`regionID`);

--
-- Indexes for table `travelplaces`
--
ALTER TABLE `travelplaces`
  ADD PRIMARY KEY (`placeID`),
  ADD KEY `region_fk` (`regionID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `fk_role_id` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `regionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `travelplaces`
--
ALTER TABLE `travelplaces`
  MODIFY `placeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `travelplaces`
--
ALTER TABLE `travelplaces`
  ADD CONSTRAINT `region_fk` FOREIGN KEY (`regionID`) REFERENCES `region` (`regionID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_role_id` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
