-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2016 at 06:18 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `snbdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `avatar_dtl`
--

CREATE TABLE IF NOT EXISTS `avatar_dtl` (
  `userId` varchar(10) DEFAULT NULL,
  `avatar_name` varchar(45) DEFAULT NULL,
  `avatar_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `avatar_dtl`
--

INSERT INTO `avatar_dtl` (`userId`, `avatar_name`, `avatar_id`) VALUES
('568b3cdff0', '5403568bef6687a0c.png', 'pi568b3cdf'),
('568bf05c94', '1.png', 'pi568bf05c'),
('568bf0ed3a', '1.png', 'pi568bf0ed'),
('568bf13b8f', '1.png', 'pi568bf13b');

-- --------------------------------------------------------

--
-- Table structure for table `badge_dtl`
--

CREATE TABLE IF NOT EXISTS `badge_dtl` (
  `userId` varchar(10) DEFAULT NULL,
  `fromUserId` varchar(10) DEFAULT NULL,
  `voteBadge` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment_dtl`
--

CREATE TABLE IF NOT EXISTS `comment_dtl` (
  `commentContent` varchar(100) DEFAULT NULL,
  `commentDate` datetime DEFAULT NULL,
  `commentType` varchar(1) DEFAULT NULL,
  `postId` varchar(10) NOT NULL,
  `userId` varchar(10) NOT NULL,
  `commentId` varchar(10) DEFAULT NULL,
  `disallowed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_dtl`
--

INSERT INTO `comment_dtl` (`commentContent`, `commentDate`, `commentType`, `postId`, `userId`, `commentId`, `disallowed`) VALUES
('this a sample shit comment', '2016-01-08 17:57:48', '1', '568b40e982', '568b3cdff0', '568fea8c9b', 1),
('normal comment', '2016-01-08 18:00:15', '1', '568b40e982', '568b3cdff0', '568feb1f94', 0),
('fucking asshole you brainless! better shut up', '2016-01-08 18:08:42', '1', '568b40e982', '568b3cdff0', '568fed1a2f', 1),
('The world comes to life and everything''s right from beginning to end when you have a friend by your ', '2016-01-08 18:14:20', '1', '568b40e982', '568b3cdff0', '568fee6c50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company_dtl`
--

CREATE TABLE IF NOT EXISTS `company_dtl` (
  `userId` varchar(10) DEFAULT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `company_businessType` varchar(20) DEFAULT NULL,
  `company_yearFounded` year(4) DEFAULT NULL,
  `company_lName` varchar(30) DEFAULT NULL,
  `company_fName` varchar(30) DEFAULT NULL,
  `company_midInit` varchar(2) DEFAULT NULL,
  `company_about` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_dtl`
--

INSERT INTO `company_dtl` (`userId`, `company_name`, `company_businessType`, `company_yearFounded`, `company_lName`, `company_fName`, `company_midInit`, `company_about`) VALUES
('568bf0ed3a', 'Teradyne', 'Semi conductor test', 1965, 'Jagella', 'Mark', '', 'We measure quality');

-- --------------------------------------------------------

--
-- Table structure for table `conference_dtl`
--

CREATE TABLE IF NOT EXISTS `conference_dtl` (
  `msgId` varchar(10) DEFAULT NULL,
  `dateSent` datetime DEFAULT NULL,
  `userId` varchar(10) DEFAULT NULL,
  `msgContent` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conference_dtl`
--

INSERT INTO `conference_dtl` (`msgId`, `dateSent`, `userId`, `msgContent`) VALUES
('gi568be0ae', '2016-01-05 16:58:28', '568b3cdff0', 'hi'),
('gi568be0ae', '2016-01-05 19:24:46', '568bf0ed3a', 'hello every one..');

-- --------------------------------------------------------

--
-- Table structure for table `conference_ext`
--

CREATE TABLE IF NOT EXISTS `conference_ext` (
  `conExtId` varchar(10) NOT NULL,
  `timeStarted` datetime DEFAULT NULL,
  `timeEnded` datetime DEFAULT NULL,
  `conId` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_ext`
--

CREATE TABLE IF NOT EXISTS `group_ext` (
  `groupId` varchar(10) NOT NULL,
  `userId` varchar(10) DEFAULT NULL,
  `addedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_ext`
--

INSERT INTO `group_ext` (`groupId`, `userId`, `addedDate`) VALUES
('gi568be0ae', '568b3cdff0', '0000-00-00 00:00:00'),
('gi568be0ae', '568bf0ed3a', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_md`
--

CREATE TABLE IF NOT EXISTS `group_md` (
  `groupId` varchar(10) NOT NULL,
  `groupname` varchar(30) DEFAULT NULL,
  `groupdescription` varchar(255) DEFAULT NULL,
  `groupCoverPic` varchar(45) DEFAULT NULL,
  `userId` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_md`
--

INSERT INTO `group_md` (`groupId`, `groupname`, `groupdescription`, `groupCoverPic`, `userId`) VALUES
('gi568be0ae', 'introverts', 'wala lang hehehe', 'defaultcover.png', '568b3cdff0');

-- --------------------------------------------------------

--
-- Table structure for table `investor_dtl`
--

CREATE TABLE IF NOT EXISTS `investor_dtl` (
  `investorId` varchar(10) NOT NULL,
  `postId` varchar(10) DEFAULT NULL,
  `userId` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investor_dtl`
--

INSERT INTO `investor_dtl` (`investorId`, `postId`, `userId`) VALUES
('', 'pr568c070f', '568bf05c94');

-- --------------------------------------------------------

--
-- Table structure for table `location_dtl`
--

CREATE TABLE IF NOT EXISTS `location_dtl` (
  `locationId` varchar(10) NOT NULL,
  `userId` varchar(10) DEFAULT NULL,
  `location_address1` varchar(255) DEFAULT NULL,
  `location_address2` varchar(255) DEFAULT NULL,
  `location_city` varchar(30) DEFAULT NULL,
  `location_prov` varchar(45) DEFAULT NULL,
  `location_zipcode` varchar(10) DEFAULT NULL,
  `location_country` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location_dtl`
--

INSERT INTO `location_dtl` (`locationId`, `userId`, `location_address1`, `location_address2`, `location_city`, `location_prov`, `location_zipcode`, `location_country`) VALUES
('li568b3cdf', '568b3cdff0', 'Looc, Mandaue City', '', 'Cebu', 'VII', '6014', 'Philippines'),
('li568bf05c', '568bf05c94', 'Silicon Valley', '', 'Los Angeles', 'LA', '1024', 'United States'),
('li568bf13b', '568bf13b8f', 'Labogon', '', 'Mandaue', 'VII', '6014', 'Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `msg_dtl`
--

CREATE TABLE IF NOT EXISTS `msg_dtl` (
  `msgId` varchar(10) NOT NULL,
  `userId` varchar(10) DEFAULT NULL,
  `msg_fromUserId` varchar(10) DEFAULT NULL,
  `msg_Content` varchar(255) DEFAULT NULL,
  `msg_Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report_dtl`
--

CREATE TABLE IF NOT EXISTS `report_dtl` (
  `reportId` varchar(10) NOT NULL,
  `userId` varchar(10) DEFAULT NULL,
  `fromUserId` varchar(10) DEFAULT NULL,
  `reportContent` varchar(255) DEFAULT NULL,
  `reportDate` datetime DEFAULT NULL,
  `reportStat` varchar(1) DEFAULT NULL,
  `reportType` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upvote_dtl`
--

CREATE TABLE IF NOT EXISTS `upvote_dtl` (
  `voteStat` varchar(1) NOT NULL,
  `voteType` varchar(1) DEFAULT NULL,
  `postId` varchar(10) NOT NULL,
  `userId` varchar(10) NOT NULL,
  `voteId` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userpost`
--

CREATE TABLE IF NOT EXISTS `userpost` (
  `postId` varchar(10) NOT NULL,
  `postContent` varchar(255) DEFAULT NULL,
  `postDate` datetime DEFAULT NULL,
  `postType` varchar(10) DEFAULT NULL,
  `postTitle` varchar(45) DEFAULT NULL,
  `userId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userpost`
--

INSERT INTO `userpost` (`postId`, `postContent`, `postDate`, `postType`, `postTitle`, `userId`) VALUES
('568b401f74', '“You''re going to meet many people with domineering personalities: the loud, the obnoxious, those that noisily stake their claims in your territory and everywhere else they set foot on. This is the blueprint of a predator. Predators prey on gentleness, pea', '2016-01-05 05:01:35', '1', 'You are silk', '568b3cdff0'),
('568b40e982', 'It is a wish that you make all alone. It''s easy to feel like you don''t need help but it''s harder to walk on your own.', '2016-01-05 05:04:57', '1', 'Dream', '568b3cdff0'),
('pr568c070f', 'Start & Boost lang', NULL, 'gi568be0ae', 'Start&Boost Project', '568b3cdff0');

-- --------------------------------------------------------

--
-- Table structure for table `userpost_ext`
--

CREATE TABLE IF NOT EXISTS `userpost_ext` (
  `extId` varchar(10) NOT NULL,
  `extContent` varchar(255) DEFAULT NULL,
  `extType` varchar(1) DEFAULT NULL,
  `postId` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_dtl`
--

CREATE TABLE IF NOT EXISTS `user_dtl` (
  `userId` varchar(10) DEFAULT NULL,
  `user_lName` varchar(30) DEFAULT NULL,
  `user_fName` varchar(30) DEFAULT NULL,
  `user_midInit` varchar(2) DEFAULT NULL,
  `user_age` varchar(3) DEFAULT NULL,
  `user_gender` varchar(1) DEFAULT NULL,
  `user_shortSelfDescription` varchar(100) DEFAULT NULL,
  `user_nameOfBusiness` varchar(45) DEFAULT NULL,
  `user_businessType` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_dtl`
--

INSERT INTO `user_dtl` (`userId`, `user_lName`, `user_fName`, `user_midInit`, `user_age`, `user_gender`, `user_shortSelfDescription`, `user_nameOfBusiness`, `user_businessType`) VALUES
('568b3cdff0', 'Cutamora', 'Lyneth', 'C', '19', 'F', 'Hinata &lt;3 Naruto-kun', NULL, NULL),
('568bf05c94', 'Jobs', 'Steve', 'C', '23', 'M', 'Think Differently', 'Apple', 'Technology'),
('568bf13b8f', 'Albaracin', 'Edelito', 'D', '20', 'M', 'I am James Red', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_md`
--

CREATE TABLE IF NOT EXISTS `user_md` (
  `userId` varchar(10) NOT NULL,
  `user_Type` varchar(8) DEFAULT NULL,
  `user_dateRegistered` datetime DEFAULT NULL,
  `user_emailAdd` varchar(50) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_profilePicId` varchar(10) DEFAULT NULL,
  `user_status` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_md`
--

INSERT INTO `user_md` (`userId`, `user_Type`, `user_dateRegistered`, `user_emailAdd`, `user_password`, `user_profilePicId`, `user_status`) VALUES
('568b3cdff0', 'Ideator', '2016-01-05 04:47:43', 'lyneth.cutamora@gmail.com', '18e709a19ff1a1c600aa268af2206327', 'pi568b3cdf', '0'),
('568bf05c94', 'Investor', '2016-01-05 17:33:32', 'stevejobs@gmail.com', '9f6290f4436e5a2351f12e03b6433c3c', 'pi568bf05c', '0'),
('568bf0ed3a', 'Company', '2016-01-05 17:35:57', 'hr@teradyne.com', 'b36b23a3aa8afa1c84b4c45c1fdf168b', 'pi568bf0ed', '0'),
('568bf13b8f', 'Ideator', '2016-01-05 17:37:15', 'edelitoalbaracin@gmail.com', 'a47843f9e650c40fbb27e57c61cf8d23', 'pi568bf13b', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avatar_dtl`
--
ALTER TABLE `avatar_dtl`
 ADD PRIMARY KEY (`avatar_id`), ADD KEY `fk_picture_dtl_User_MD1_idx` (`userId`);

--
-- Indexes for table `badge_dtl`
--
ALTER TABLE `badge_dtl`
 ADD KEY `fk_badge_dtl_User_MD1_idx` (`userId`), ADD KEY `fk_badge_dtl_User_MD2_idx` (`fromUserId`);

--
-- Indexes for table `comment_dtl`
--
ALTER TABLE `comment_dtl`
 ADD KEY `fk_comment_dtl_User_MD1_idx` (`userId`), ADD KEY `fk_comment_dtl_userpost1` (`postId`);

--
-- Indexes for table `company_dtl`
--
ALTER TABLE `company_dtl`
 ADD KEY `fk_Company_dtl_User_MD_idx` (`userId`);

--
-- Indexes for table `conference_dtl`
--
ALTER TABLE `conference_dtl`
 ADD KEY `fk_conference_dtl_User_MD1_idx` (`userId`);

--
-- Indexes for table `conference_ext`
--
ALTER TABLE `conference_ext`
 ADD PRIMARY KEY (`conExtId`), ADD KEY `fk_conference_ext_group_md1_idx` (`conId`);

--
-- Indexes for table `group_ext`
--
ALTER TABLE `group_ext`
 ADD KEY `fk_group_ext_group_md1_idx` (`groupId`), ADD KEY `fk_group_ext_User_MD1_idx` (`userId`);

--
-- Indexes for table `group_md`
--
ALTER TABLE `group_md`
 ADD PRIMARY KEY (`groupId`), ADD KEY `fk_group_md_User_MD1_idx` (`userId`);

--
-- Indexes for table `investor_dtl`
--
ALTER TABLE `investor_dtl`
 ADD PRIMARY KEY (`investorId`), ADD KEY `fk_investor_dtl_userpost1_idx` (`postId`), ADD KEY `fk_investor_dtl_User_MD1_idx` (`userId`);

--
-- Indexes for table `location_dtl`
--
ALTER TABLE `location_dtl`
 ADD PRIMARY KEY (`locationId`), ADD KEY `fk_location_dtl_User_MD1_idx` (`userId`);

--
-- Indexes for table `msg_dtl`
--
ALTER TABLE `msg_dtl`
 ADD PRIMARY KEY (`msgId`), ADD KEY `fk_msg_dtl_User_MD1_idx` (`userId`), ADD KEY `fk_msg_dtl_User_MD2_idx` (`msg_fromUserId`);

--
-- Indexes for table `report_dtl`
--
ALTER TABLE `report_dtl`
 ADD PRIMARY KEY (`reportId`), ADD KEY `fk_report_dtl_User_MD1_idx` (`userId`), ADD KEY `fk_report_dtl_User_MD2_idx` (`fromUserId`);

--
-- Indexes for table `upvote_dtl`
--
ALTER TABLE `upvote_dtl`
 ADD PRIMARY KEY (`voteId`), ADD KEY `fk_upvote_dtl_userpost1_idx` (`postId`), ADD KEY `fk_upvote_dtl_User_MD1_idx` (`userId`);

--
-- Indexes for table `userpost`
--
ALTER TABLE `userpost`
 ADD PRIMARY KEY (`postId`), ADD KEY `fk_userpost_User_MD1_idx` (`userId`);

--
-- Indexes for table `userpost_ext`
--
ALTER TABLE `userpost_ext`
 ADD PRIMARY KEY (`extId`), ADD KEY `fk_userpost_ext_userpost1_idx` (`postId`);

--
-- Indexes for table `user_dtl`
--
ALTER TABLE `user_dtl`
 ADD KEY `fk_User_dtl_User_MD1` (`userId`);

--
-- Indexes for table `user_md`
--
ALTER TABLE `user_md`
 ADD PRIMARY KEY (`userId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `avatar_dtl`
--
ALTER TABLE `avatar_dtl`
ADD CONSTRAINT `fk_picture_dtl_User_MD1` FOREIGN KEY (`userId`) REFERENCES `user_md` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `badge_dtl`
--
ALTER TABLE `badge_dtl`
ADD CONSTRAINT `fk_badge_dtl_User_MD1` FOREIGN KEY (`userId`) REFERENCES `user_md` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_badge_dtl_User_MD2` FOREIGN KEY (`fromUserId`) REFERENCES `user_md` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comment_dtl`
--
ALTER TABLE `comment_dtl`
ADD CONSTRAINT `fk_comment_dtl_User_MD1` FOREIGN KEY (`userId`) REFERENCES `user_md` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_comment_dtl_userpost1` FOREIGN KEY (`postId`) REFERENCES `userpost` (`postId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `company_dtl`
--
ALTER TABLE `company_dtl`
ADD CONSTRAINT `fk_Company_dtl_User_MD` FOREIGN KEY (`userId`) REFERENCES `user_md` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `conference_dtl`
--
ALTER TABLE `conference_dtl`
ADD CONSTRAINT `fk_conference_dtl_User_MD1` FOREIGN KEY (`userId`) REFERENCES `user_md` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `conference_ext`
--
ALTER TABLE `conference_ext`
ADD CONSTRAINT `fk_conference_ext_group_md1` FOREIGN KEY (`conId`) REFERENCES `group_md` (`groupId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `group_ext`
--
ALTER TABLE `group_ext`
ADD CONSTRAINT `fk_group_ext_User_MD1` FOREIGN KEY (`userId`) REFERENCES `user_md` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_group_ext_group_md1` FOREIGN KEY (`groupId`) REFERENCES `group_md` (`groupId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `group_md`
--
ALTER TABLE `group_md`
ADD CONSTRAINT `fk_group_md_User_MD1` FOREIGN KEY (`userId`) REFERENCES `user_md` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `investor_dtl`
--
ALTER TABLE `investor_dtl`
ADD CONSTRAINT `fk_investor_dtl_User_MD1` FOREIGN KEY (`userId`) REFERENCES `user_md` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_investor_dtl_userpost1` FOREIGN KEY (`postId`) REFERENCES `userpost` (`postId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `location_dtl`
--
ALTER TABLE `location_dtl`
ADD CONSTRAINT `fk_location_dtl_User_MD1` FOREIGN KEY (`userId`) REFERENCES `user_md` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `msg_dtl`
--
ALTER TABLE `msg_dtl`
ADD CONSTRAINT `fk_msg_dtl_User_MD1` FOREIGN KEY (`userId`) REFERENCES `user_md` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_msg_dtl_User_MD2` FOREIGN KEY (`msg_fromUserId`) REFERENCES `user_md` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `report_dtl`
--
ALTER TABLE `report_dtl`
ADD CONSTRAINT `fk_report_dtl_User_MD1` FOREIGN KEY (`userId`) REFERENCES `user_md` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_report_dtl_User_MD2` FOREIGN KEY (`fromUserId`) REFERENCES `user_md` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `upvote_dtl`
--
ALTER TABLE `upvote_dtl`
ADD CONSTRAINT `fk_upvote_dtl_User_MD1` FOREIGN KEY (`userId`) REFERENCES `user_md` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_upvote_dtl_userpost1` FOREIGN KEY (`postId`) REFERENCES `userpost` (`postId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `userpost`
--
ALTER TABLE `userpost`
ADD CONSTRAINT `fk_userpost_User_MD1` FOREIGN KEY (`userId`) REFERENCES `user_md` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `userpost_ext`
--
ALTER TABLE `userpost_ext`
ADD CONSTRAINT `fk_userpost_ext_userpost1` FOREIGN KEY (`postId`) REFERENCES `userpost` (`postId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_dtl`
--
ALTER TABLE `user_dtl`
ADD CONSTRAINT `fk_User_dtl_User_MD1` FOREIGN KEY (`userId`) REFERENCES `user_md` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
