-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 10:25 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inuneko`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `District` varchar(30) NOT NULL,
  `Province` varchar(30) NOT NULL,
  `Tel` varchar(10) NOT NULL,
  `Line_ID` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`UserID`, `Username`, `Email`, `Password`, `Gender`, `District`, `Province`, `Tel`, `Line_ID`) VALUES
(17, 'domelaz2556', 'domelaz2556@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', 'male', 'เมืองศรีสะเกษ', 'ศรีสะเกษ', '0956956149', 'domelaz'),
(18, 'admin', 'admin@inuneko.com', '21232f297a57a5a743894a0e4a801fc3', 'male', 'เมืองขอนแก่น', 'ขอนแก่น', '0956956149', 'domelaz'),
(25, 'domelaz', 'phongphanit.se@kkumail.com', '670b14728ad9902aecba32e22fa4f6bd', 'male', 'Khukhan', 'Sisaket', '0956956149', 'domelaz'),
(26, 'io112', 'arat.ch@kkumail.com', '25d55ad283aa400af464c76d713c07ad', 'male', 'chumphae', 'khonkaen', '0969658583', 'io112');

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `Animal_ID` int(1) NOT NULL,
  `Animal_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`Animal_ID`, `Animal_name`) VALUES
(1, 'Dog'),
(2, 'Cat'),
(3, 'Bird'),
(4, 'Aquatic'),
(5, 'Exotic');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `UserID` varchar(11) NOT NULL,
  `Post_ID` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`UserID`, `Post_ID`) VALUES
('26', '11'),
('26', '9');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `Post_ID` int(7) NOT NULL,
  `UserID` int(11) NOT NULL,
  `P_head` varchar(100) NOT NULL,
  `P_name` varchar(100) DEFAULT NULL,
  `Animal_ID` int(1) NOT NULL,
  `P_sex` varchar(10) NOT NULL,
  `P_age` int(3) NOT NULL,
  `P_breed` varchar(50) DEFAULT NULL,
  `P_district` varchar(100) NOT NULL,
  `P_province` varchar(100) NOT NULL,
  `P_detail` varchar(500) NOT NULL,
  `P_date` varchar(50) NOT NULL,
  `P_img1` varchar(100) NOT NULL,
  `P_img2` varchar(100) DEFAULT NULL,
  `P_img3` varchar(100) DEFAULT NULL,
  `FavCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`Post_ID`, `UserID`, `P_head`, `P_name`, `Animal_ID`, `P_sex`, `P_age`, `P_breed`, `P_district`, `P_province`, `P_detail`, `P_date`, `P_img1`, `P_img2`, `P_img3`, `FavCount`) VALUES
(9, 17, 'test', 'ยังไม่ตั้งชื่อ', 3, 'male', 3, 'พันไรดี', 'asd', 'asd', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex corporis enim aspernatur ab asperiores in officiis quae similique facere tempore consequuntur adipisci non, ut magnam sunt, at sint quos necessitatibus sapiente beatae facilis error molestiae. Placeat deserunt veritatis officiis labore repudiandae excepturi eveniet a id aperiam voluptatibus quis magnam dolorem, numquam laboriosam consequuntur? Ipsum vitae doloremque quaerat commodi! Nobis magnam sit, dolore, assumenda quibusdam adipisc', '07-March-2021', '../images/155096013_1399577893710849_1020011008392814772_o.jpg', '../images/156409094_1893204580862444_6318321953445997265_n.jpg', '../images/155478409_154700596491310_1960483066576255514_o.jpg', 1),
(11, 25, 'นนหลงทา', 'นน', 5, 'male', 50, 'ก', 'ฟหก', 'ฟหก', 'ฟไกฟหกฟหก', '12-March-2021', '../images/158749037_257809622620759_975154017018986_n.jpg', '../images/158287175_158450339449669_5760804713652007175_o.jpg', '../images/157669331_2117420148395005_2131376919131243272_o.jpg', 1),
(12, 25, 'นนหลงทาasd', 'asd', 2, 'male', 2, 'ก', 'asd', 'asd', 'asd', '12-March-2021', '../images/157027890_158450366116333_6665620950028649060_o.jpg', '../images/158312193_3902527033143874_7564477019721594897_o.jpg', '../images/158842389_157881702839866_5098496606228589892_o.jpg', 0),
(13, 25, 'หลงทางไปก็ไม่เจอ', 'ยังไม่ตั้งชื่อ', 1, 'male', 2, 'asd', 'asd', 'asd', 'asd', '12-March-2021', '../images/158312193_3902527033143874_7564477019721594897_o.jpg', '../images/158842389_157881702839866_5098496606228589892_o.jpg', '../images/155096013_1399577893710849_1020011008392814772_o.jpg', 0),
(14, 25, 'หลงทางไปก็ไม่เจอแล้ว', 'อิอิ', 2, 'male', 3433, 'หก', 'ads', 'asdasd', 'asdasd', '13-March-2021', '../images/87871521_1720228664785318_5487618545174970368_o.jpg', '../images/158312193_3902527033143874_7564477019721594897_o.jpg', '../images/104218458_1192951584373482_1346845843446321215_o.jpg', 0),
(15, 25, 'ออิอิอิอิ', 'หกหฟก', 2, 'male', 231, 'ลำ', 'asd', 'ศรีสะเกษ', 'ฟไหกฟฆกดหัีกะเุึฟหถกึะฟูฆฏํ๖ฤ฿ฆ๊ฏ๖ฯฤ๕ฆฏฏ', '13-March-2021', '../images/158663566_157385942889442_3300120600106332995_o.jpg', '../images/104218458_1192951584373482_1346845843446321215_o.jpg', '../images/', 0),
(16, 25, 'ทดสอบโพสต์', 'หมาแมว', 2, 'male', 90, 'ลำ', 'ขุขันธ์', 'ศรีสะเกษ', 'SDassdsssssssssssssssssssssssssssss', '17-March-2021', '../images/156349044_3532685013624308_5271592188530966616_o.jpg', '../images/157252859_253283483105509_2426850921652021911_o.jpg', '../images/154935287_2114333332037020_6387093342987448828_o.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`UserID`,`Post_ID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`Post_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `Post_ID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
