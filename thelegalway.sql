-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2018 at 03:12 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thelegalway`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(40) NOT NULL,
  `image` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `image`) VALUES
(1, 'heena', 'heena.dania7@gmail.com', 'aA==', './../images/avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(5) NOT NULL,
  `name` varchar(800) NOT NULL,
  `email` varchar(800) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `lawyer` varchar(900) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `date`, `time`, `lawyer`, `message`) VALUES
(1, 'Heena', 'heena.dania7@gmail.com', '2017-12-26', '10:00:00', 'Mike Snowflake', 'This is my first Appointment with you.'),
(2, 'Jaspreet', 'jaspreet.sapraj@gmail.com', '2017-12-27', '12:00:00', 'Camila Mentol', 'This is my first Appointment with you.'),
(3, 'Heena', 'heena.dania7@gmail.com', '2017-12-27', '12:35:00', 'Mike Snowflake', 'I want to discuss with you about my problem.'),
(4, 'Preeti Thakur', 'thakur.preetirana@gmail.com', '2017-12-29', '09:33:00', 'Camila Mentol', 'Not getting job yet'),
(5, 'Heena', 'heena.dania7@gmail.com', '2018-01-10', '20:00:00', 'Camila Mentol', 'I want to discuss with you about my employment issue.'),
(6, 'Heena', 'heena@gmail.com', '2017-12-21', '14:10:00', 'Mike Snowflake', 'hgd');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(5) NOT NULL,
  `name` varchar(80) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `fbAcc` varchar(200) NOT NULL,
  `twAcc` varchar(200) NOT NULL,
  `liAcc` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `designation`, `fbAcc`, `twAcc`, `liAcc`, `image`) VALUES
(1, 'Paula Whinston', 'Criminal Lawyer', 'https://www.facebook.com', 'https://twitter.com/login', 'https://in.linkedin.com', './../images/team1.jpg'),
(2, 'Mike Snowflake', 'Family Lawyer', 'https://www.facebook.com', 'https://twitter.com/login', 'https://in.linkedin.com', './../images/team2.jpg'),
(3, 'Camila Mentol', 'Employment Lawyer', 'https://www.facebook.com', 'https://twitter.com/login', 'https://in.linkedin.com', './../images/team3.jpg'),
(4, 'Robert Donataws', 'Financial Lawyer', 'https://www.facebook.com', 'https://twitter.com/login', 'https://in.linkedin.com', './../images/team4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `description` mediumtext NOT NULL,
  `image1` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `description`, `image1`) VALUES
(1, 'Linking of Aadhaar: Supreme Court denies ', '2017-12-15', 'On Friday, the Supreme Court denied on passing of an interim order staying the linking of Aadhaar with mobile numbers and bank accounts. The apex court said that this matter will be decided by the Constitution bench towards the end of this month.  \r\n\r\nThe Supreme Court warned Centre mobile network and bank companies for upsurging panic by periodically sending customers message that they must immediately link their number and accounts with Aadhaar, otherwise their accounts will be deactivated if they don''t link them to Aadhaar.\r\n\r\nThe Centre denies sending of such messages. Justice AK Sikri stated that he has also received such messages, threatening deactivation for not linking one''s account or mobile number with Aadhaar.\r\n\r\nConsidering this grim situation, the apex court asked these companies to stop scaring people in any manner until the Constitution bench decides on the validity of the Aadhaar.\r\n\r\nIn the last week of November, a constitution bench will be hearing the bunch of petitions challenging the constitutional validity  \r\n\r\nThis came to the light when on Thursday, the Centre directed that for opening of new bank accounts showing a proof of Aadhaar was mandatory. Aadhaar has also been made mandatory for availing of welfare schemes. ', './../images/news1.jpg'),
(2, 'Not be allowed to buy a car unless..', '2017-11-30', 'Noida''s Regional Transport Office (RTO) may deny the registration for new car buyers in case if they fail to provide a requisite proof of owning a parking space. Noida''s RTO is willing to take this move in order to resolve the problem of parking space in Noida.\r\n\r\nIn case if this order is issued this would imply that a person who does not have a parking space will not be allotted registration certificate. The Noida Authority chairman CEO Alok Tandon has visited various areas and highlighted that there is a major crunch of parking space in Noida. Despite this, the authority is also appointing a fresh agency to manage surface parking areas across the city.\r\n\r\nThe union urban development minister has also hinted about a similar move that is to be taken at a national level. Registration of vehicles is likely to depend on the availability of parking space.\r\n\r\nSandip Chandra, senior project manager of Noida Authority said, at present, the authority has allowed parking on roadsides in 41 locations. These contracts will be over by the end of November. We will give new 60 parking lot contracts to new agencies through an e-tender in October. Our objective is to take steps to reduce traffic congestion.', './../images/news2.jpg'),
(3, 'Possessing old currency', '2017-11-22', 'The centre told the Supreme Court that those who were unable to deposit old currency notes by December 31 last year will not be prosecuted. The centre clarified that the petitioners will not be prosecuted for possessing scrapped currency upto the amount mentioned in their petitions.  \r\n\r\nRelated Post: Centre to SC- Giving more time to deposit old notes will defeat the purpose of demonetisation \r\n\r\nOn November, last year the government banned old Rs. 1,000 and Rs, 500 notes. Presently, the apex court have asked these petitioners to merge their claims with the petition challenging the validity of demonetisation. The matter is currently pending before a five judge bench.\r\n\r\nRelated Post:  Demonetisation- New window to deposit old notes: SC suggests to Centre\r\n\r\nFurther, the Apex court said that the outcome of these five judge bench will determine if these petitioners will be allowed to exchange the old currency notes or not. The court also added that the petitioner will not be prosecuted for any amount mentioned in the petition.', './../images/news3.jpg'),
(4, 'No Correspondence Technical education ', '2017-12-19', 'The Supreme Court while rejecting the Odisha high court verdict which allowed technical education in subjects like engineering cannot be provided through correspondence courses. On Friday, the top court ruled that technical education in the distance education mode.\r\n\r\nWhile adjudicating on this matter, the apex court affirmed the findings of the Punjab and Haryana High court on the same issue. Punjab and Haryana High Court also ruled two years ago that a degree in "computer science" cannot be considered equal to a degree obtained through attending regular classes.\r\n\r\nThe Supreme Court aimed at restricting educational institutions from providing technical education courses like engineering through distance education process.', './../images/news4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `feedback` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `feedback`) VALUES
(1, 'Matthew Owl', './../images/testimonials1.png', 'Very Professional and personable. Would highly recommend to anyone needing legal services. Thank you!'),
(2, 'Joe Winston', './../images/testimonials2.png', 'I wanted to thank you The Legal Way for all your help in setting up our case. We are very pleased with your work.'),
(3, 'Steve Davidson', './../images/testimonials3.png', 'This is to extend my sincere gratitude to all TLW Team Members. TLW has exceeded far beyond my expectations.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
