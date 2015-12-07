-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2015 at 03:03 AM
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
('565fcbb98d', '1.png', 'pi565fcbb9'),
('56647c75a7', '1.png', 'pi56647c75'),
('56647db35f', '1.png', 'pi56647db3');

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
  `commentId` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_dtl`
--

INSERT INTO `comment_dtl` (`commentContent`, `commentDate`, `commentType`, `postId`, `userId`, `commentId`) VALUES
('sample', '2015-12-05 14:29:20', '1', '5662e69ca7', '565fcbb98d', '5662e69ceb'),
('smaple', '2015-12-05 14:29:28', '2', '5662e69ca7', '565fcbb98d', '5662e69ceb'),
('sample', '2015-12-05 14:29:55', '1', '5662e69ca7', '565fcbb98d', '5662e6cc8b'),
('sample2', '2015-12-05 14:30:04', '2', '5662e69ca7', '565fcbb98d', '5662e6cc8b'),
('k', '2015-12-05 14:34:18', '1', '5662e69ca7', '565fcbb98d', '5662e7c16f');

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

-- --------------------------------------------------------

--
-- Table structure for table `conference_dtl`
--

CREATE TABLE IF NOT EXISTS `conference_dtl` (
  `msgId` varchar(10) NOT NULL,
  `dateSent` datetime DEFAULT NULL,
  `userId` varchar(10) DEFAULT NULL,
  `msgContent` varchar(255) DEFAULT NULL,
  `groupId` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `group_dtl`
--

CREATE TABLE IF NOT EXISTS `group_dtl` (
  `groupId` varchar(10) NOT NULL,
  `membersid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_dtl`
--

INSERT INTO `group_dtl` (`groupId`, `membersid`) VALUES
('gi56644ab5', '565fcbb98d');

-- --------------------------------------------------------

--
-- Table structure for table `group_md`
--

CREATE TABLE IF NOT EXISTS `group_md` (
  `groupId` varchar(10) NOT NULL,
  `groupname` varchar(30) DEFAULT NULL,
  `groupdescription` varchar(255) DEFAULT NULL,
  `groupCoverPic` varchar(45) DEFAULT NULL,
  `userId` varchar(10) DEFAULT NULL,
  `projectid` varchar(10) NOT NULL,
  `projectname` varchar(30) NOT NULL,
  `projectdescription` varchar(255) NOT NULL,
  `investorid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_md`
--

INSERT INTO `group_md` (`groupId`, `groupname`, `groupdescription`, `groupCoverPic`, `userId`, `projectid`, `projectname`, `projectdescription`, `investorid`) VALUES
('gi56644ab5', 'Lyneth''s Group', 'This is my group &lt;3', 'defaultcover.png', '565fcbb98d', 'pr566483c6', 'Sample', 'Sample', '');

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
('li565fcbb9', '565fcbb98d', 'Looc, Mandaue City', '', 'Cebu', 'VII', '6014', 'Philippines'),
('li56647c75', '56647c75a7', 'Silicon Valley', 'Apple', 'Los Angeles', 'LA', '1024', 'United States'),
('li56647db3', '56647db35f', 'Subangdaku', '', 'Mandaue', 'VII', '6015', 'Philippines');

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
  `postType` varchar(1) DEFAULT NULL,
  `postTitle` varchar(45) DEFAULT NULL,
  `userId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userpost`
--

INSERT INTO `userpost` (`postId`, `postContent`, `postDate`, `postType`, `postTitle`, `userId`) VALUES
('5662e69ca7', 'this is a sample post', '2015-12-05 14:29:00', '1', 'Start&Boost', '565fcbb98d'),
('5662e8158d', 'oohh yeah HAHAHAHA', '2015-12-05 14:35:17', '1', 'GWAPA KO', '565fcbb98d'),
('56647ccf5e', 'Im gonna build my own company', '2015-12-06 19:22:07', '1', 'Dream', '56647c75a7');

-- --------------------------------------------------------

--
-- Table structure for table `userpost_ext`
--

CREATE TABLE IF NOT EXISTS `userpost_ext` (
  `extId` varchar(10) NOT NULL,
  `extContent` varchar(255) DEFAULT NULL,
  `extType` varchar(1) DEFAULT NULL,
  `postId` varchar(10) NOT NULL
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
('565fcbb98d', 'Cutamora', 'Lyneth', 'C', '19', 'F', 'Cute and beautiful wahaha palag ron :P', NULL, NULL),
('56647c75a7', 'Jobs', 'Steve', '', '25', 'M', 'Stay Hungry, Stay Foolish', 'Apple', 'Technology'),
('56647db35f', 'Tradio', 'Paul Spencer', 'M', '20', 'M', 'Im made my life interesting trough my arts', NULL, NULL);

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
('565fcbb98d', 'Ideator', '2015-12-03 05:57:29', 'lyneth.cutamora@gmail.com', 'a812ab857f34f28adfe183adf23d42fc', 'pi565fcbb9', '0'),
('56647c75a7', 'Investor', '2015-12-06 19:20:37', 'stevejobs@gmail.com', '9f6290f4436e5a2351f12e03b6433c3c', 'pi56647c75', '0'),
('56647db35f', 'Ideator', '2015-12-06 19:25:55', 'fpxzy@yahoo.com', '627a1f8f3e1f8a2a0cbb9aedc33ade8c', 'pi56647db3', '0');

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
 ADD PRIMARY KEY (`msgId`), ADD KEY `fk_conference_dtl_group_md1_idx` (`groupId`), ADD KEY `fk_conference_dtl_User_MD1_idx` (`userId`);

--
-- Indexes for table `conference_ext`
--
ALTER TABLE `conference_ext`
 ADD PRIMARY KEY (`conExtId`), ADD KEY `fk_conference_ext_group_md1_idx` (`conId`);

--
-- Indexes for table `group_md`
--
ALTER TABLE `group_md`
 ADD PRIMARY KEY (`groupId`), ADD KEY `fk_group_md_User_MD1_idx` (`userId`);

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
ADD CONSTRAINT `fk_conference_dtl_User_MD1` FOREIGN KEY (`userId`) REFERENCES `user_md` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_conference_dtl_group_md1` FOREIGN KEY (`groupId`) REFERENCES `group_md` (`groupId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `conference_ext`
--
ALTER TABLE `conference_ext`
ADD CONSTRAINT `fk_conference_ext_group_md1` FOREIGN KEY (`conId`) REFERENCES `group_md` (`groupId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `group_md`
--
ALTER TABLE `group_md`
ADD CONSTRAINT `fk_group_md_User_MD1` FOREIGN KEY (`userId`) REFERENCES `user_md` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
