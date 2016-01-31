-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2016 at 06:17 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

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
('56ac1c012d', '1.png', 'pi56ac1c01'),
('56ac1ceec6', '1.png', 'pi56ac1cee'),
('56ac1e3e5d', '1.png', 'pi56ac1e3e'),
('56ac24cd6d', '1.png', 'pi56ac24cd'),
('56ac2a552e', '1.png', 'pi56ac2a55'),
('56ac46377d', '1694556ac482b5bd4e.png', 'pi56ac4637'),
('56ac497d9a', '1.png', 'pi56ac497d'),
('56ac4b9c79', '1.png', 'pi56ac4b9c');

-- --------------------------------------------------------

--
-- Table structure for table `badge_dtl`
--

CREATE TABLE IF NOT EXISTS `badge_dtl` (
  `userId` varchar(10) DEFAULT NULL,
  `fromUserId` varchar(10) DEFAULT NULL,
  `voteBadge` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `badge_dtl`
--

INSERT INTO `badge_dtl` (`userId`, `fromUserId`, `voteBadge`) VALUES
('56ac1ceec6', '56ac46377d', '1'),
('56ac24cd6d', '56ac46377d', '1'),
('56ac46377d', '56ac497d9a', '1');

-- --------------------------------------------------------

--
-- Table structure for table `bmc_dtl`
--

CREATE TABLE IF NOT EXISTS `bmc_dtl` (
  `postId` varchar(10) DEFAULT NULL,
  `key_partners` varchar(1000) DEFAULT NULL,
  `key_activities` varchar(1000) DEFAULT NULL,
  `value_proposition` varchar(1000) DEFAULT NULL,
  `customer_relationships` varchar(1000) DEFAULT NULL,
  `channels` varchar(1000) DEFAULT NULL,
  `customer_segments` varchar(1000) DEFAULT NULL,
  `cost_structure` varchar(1000) DEFAULT NULL,
  `revenue_streams` varchar(1000) DEFAULT NULL,
  `key_resources` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bmc_dtl`
--

INSERT INTO `bmc_dtl` (`postId`, `key_partners`, `key_activities`, `value_proposition`, `customer_relationships`, `channels`, `customer_segments`, `cost_structure`, `revenue_streams`, `key_resources`) VALUES
('56ac20a637', 'facebook, twitter', '', 'wala ra oie', 'friends', 'channel 3, 23, 7', '', '', 'ads', NULL),
('56ac474ca2', 'Bus company', 'sample', 'sample', 'sample', 'sample', 'sample', 'sample', 'sample', NULL),
('56ac537d97', 'facebook', 'as', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment_dtl`
--

CREATE TABLE IF NOT EXISTS `comment_dtl` (
  `commentContent` varchar(1000) DEFAULT NULL,
  `commentDate` datetime DEFAULT NULL,
  `commentType` varchar(1) DEFAULT NULL,
  `postId` varchar(10) NOT NULL,
  `userId` varchar(10) NOT NULL,
  `commentId` varchar(10) NOT NULL,
  `disallowed` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_dtl`
--

INSERT INTO `comment_dtl` (`commentContent`, `commentDate`, `commentType`, `postId`, `userId`, `commentId`, `disallowed`) VALUES
('yeas...i want to be like one punch man HAHAHAHA', '2016-01-30 06:21:18', NULL, '56ac21ac48', '56ac46377d', '56ac484e97', NULL),
('wow..this system is amazing!! congratulations :-)', '2016-01-30 06:22:06', NULL, '56ac279d62', '56ac46377d', '56ac487e70', NULL),
('This is a nice idea :-) i hope ya''ll like it :-)', '2016-01-30 06:31:36', NULL, '56ac4a448a', '56ac497d9a', '56ac4ab818', NULL),
('Great website ! :-) this will be helpful for future entrepreneurs.. Congratulations! ', '2016-01-30 06:33:12', NULL, '56ac4a2370', '56ac497d9a', '56ac4b1877', NULL),
('this is really nice.. can i team up with you? you can ping me any time :-)', '2016-01-30 06:36:05', NULL, '56ac4a448a', '56ac46377d', '56ac4bc5b1', NULL),
('nice', '2016-01-30 07:07:22', NULL, '56ac48c0c8', '56ac46377d', '56ac531a29', NULL);

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
  `msgId` varchar(10) DEFAULT NULL,
  `dateSent` datetime DEFAULT NULL,
  `userId` varchar(10) DEFAULT NULL,
  `msgContent` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conference_dtl`
--

INSERT INTO `conference_dtl` (`msgId`, `dateSent`, `userId`, `msgContent`) VALUES
('gi56ac223e', '2016-01-30 03:52:42', '56ac24cd6d', 'gwapo'),
('gi56ac223e', '2016-01-30 03:52:54', '56ac1c012d', 'ok'),
('gi56ac223e', '2016-01-30 03:53:08', '56ac1ceec6', '(y)'),
('gi56ac4ca5', '2016-01-30 06:45:18', '56ac46377d', 'hi rinesu, thanks for adding me :-)'),
('gi56ac4a8d', '2016-01-30 06:47:38', '56ac1ceec6', 'manang'),
('gi56ac4ca5', '2016-01-30 06:51:31', '56ac1ceec6', 'manang'),
('gi56ac4ca5', '2016-01-30 06:51:50', '56ac1ceec6', 'jason pisot'),
('gi56ac5234', '2016-01-30 07:05:28', '56ac46377d', 'hi'),
('gi56ac5234', '2016-01-30 07:05:32', '56ac4b9c79', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `group_ext`
--

CREATE TABLE IF NOT EXISTS `group_ext` (
  `groupId` varchar(10) NOT NULL,
  `userId` varchar(10) DEFAULT NULL,
  `addedDate` datetime DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_ext`
--

INSERT INTO `group_ext` (`groupId`, `userId`, `addedDate`, `status`) VALUES
('gi56ac223e', '56ac1ceec6', '0000-00-00 00:00:00', '0'),
('gi56ac223e', '56ac1c012d', NULL, '0'),
('gi56ac223e', '56ac24cd6d', NULL, '0'),
('gi56ac4a8d', '56ac1e3e5d', '0000-00-00 00:00:00', '0'),
('gi56ac4ca5', '56ac497d9a', '0000-00-00 00:00:00', '0'),
('gi56ac4ca5', '56ac46377d', NULL, '0'),
('gi56ac4a8d', '56ac4b9c79', NULL, '0'),
('gi56ac4a8d', '56ac1ceec6', NULL, '0'),
('gi56ac4ca5', '56ac4b9c79', NULL, '0'),
('gi56ac4ca5', '56ac2a552e', NULL, '1'),
('gi56ac4ca5', '56ac1ceec6', NULL, '0'),
('gi56ac5234', '56ac46377d', '0000-00-00 00:00:00', '0'),
('gi56ac5234', '56ac4b9c79', NULL, '0');

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
('gi56ac223e', 'heroes association', 'ONe Punch', 'defaultcover.png', '56ac1ceec6'),
('gi56ac4a8d', 'Research forum', 'Today is the day , tommorow is tommorow', 'defaultcover.png', '56ac1e3e5d'),
('gi56ac4ca5', 'CarInn', 'The Start :-)', 'defaultcover.png', '56ac497d9a'),
('gi56ac5234', 'group1', 'gwapo ra pwede', 'defaultcover.png', '56ac46377d');

-- --------------------------------------------------------

--
-- Table structure for table `investor_dtl`
--

CREATE TABLE IF NOT EXISTS `investor_dtl` (
  `investorId` varchar(10) NOT NULL,
  `postId` varchar(10) DEFAULT NULL,
  `userId` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('li56ac1c01', '56ac1c012d', 'Lapu-lapu, Sangi Road', 'Cebu', 'Cebu', '7', '6015', 'Philippines'),
('li56ac1cee', '56ac1ceec6', 'Labogon, Mandaue City', '', 'Cebu', 'Cebu', '6014', 'Philippines'),
('li56ac1e3e', '56ac1e3e5d', 'Labogon, Mandaue City', '', 'Mandaue', 'Cebu', '6014', 'Philippines'),
('li56ac24cd', '56ac24cd6d', 'sangi new road', '', 'Cebu', 'Region 7', '6015', 'Philippines'),
('li56ac2a55', '56ac2a552e', 'Silicon Valley', '', 'Los Angeles', 'LA', '1024', 'USA'),
('li56ac4637', '56ac46377d', 'looc', '', 'mandaue', 'city', '6014', 'Philippines'),
('li56ac497d', '56ac497d9a', 'Japan', '', 'Tokyo', 'VII', '3540', 'Japan'),
('li56ac4b9c', '56ac4b9c79', 'sangi new road Lapu2', '', 'cebu', 'region7', '6015', 'philippines');

-- --------------------------------------------------------

--
-- Table structure for table `msg_dtl`
--

CREATE TABLE IF NOT EXISTS `msg_dtl` (
  `msgId` varchar(10) DEFAULT NULL,
  `userId` varchar(10) DEFAULT NULL,
  `msg_fromUserId` varchar(10) DEFAULT NULL,
  `msg_Content` varchar(255) DEFAULT NULL,
  `msg_Date` datetime DEFAULT NULL,
  `msg_status` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg_dtl`
--

INSERT INTO `msg_dtl` (`msgId`, `userId`, `msg_fromUserId`, `msg_Content`, `msg_Date`, `msg_status`) VALUES
('56ac21f6dc', '56ac1ceec6', '56ac1c012d', 'hi alfie i want to be a hero', '2016-01-30 03:37:42', '0'),
('56ac2209b5', '56ac1c012d', '56ac1ceec6', 'ok', '2016-01-30 03:38:01', '0'),
('56ac221d11', '56ac1ceec6', '56ac1c012d', 'yes!!', '2016-01-30 03:38:21', '0'),
('56ac300cf1', '56ac24cd6d', '56ac2a552e', 'gwapo', '2016-01-30 04:37:48', '1'),
('56ac4b2f39', '56ac1c012d', '56ac1ceec6', 'Son', '2016-01-30 06:33:35', '0'),
('56ac4b6342', '56ac1c012d', '56ac1ceec6', 'Crush nko si Lyneth', '2016-01-30 06:34:27', '1'),
('56ac4c1541', '56ac497d9a', '56ac46377d', 'Hi Rinesu, imlyneth.. specializig in android aplication..can i team up with you? :)', '2016-01-30 06:37:25', '0'),
('56ac4c665a', '56ac46377d', '56ac497d9a', 'Hi Lyneth.. if you wish to team up with me..it''s okay :-) but first we should look for an investor', '2016-01-30 06:38:46', '0'),
('56ac4c891a', '56ac46377d', '56ac497d9a', 'I can create now our group page.. i''ll add you.', '2016-01-30 06:39:21', '0'),
('56ac526970', '56ac4b9c79', '56ac46377d', 'Hi Investor', '2016-01-30 07:04:25', '0'),
('56ac54ac54', '56ac46377d', '56ac4b9c79', 'THanks for watching!', '2016-01-30 07:14:04', '1');

-- --------------------------------------------------------

--
-- Table structure for table `report_dtl`
--

CREATE TABLE IF NOT EXISTS `report_dtl` (
  `reportId` varchar(10) NOT NULL,
  `userId` varchar(10) DEFAULT NULL,
  `fromUserId` varchar(10) DEFAULT NULL,
  `reportContent` varchar(1000) DEFAULT NULL,
  `reportDate` datetime DEFAULT NULL,
  `reportStat` varchar(1) DEFAULT NULL,
  `reportType` varchar(1) DEFAULT NULL,
  `reportName` varchar(50) DEFAULT NULL,
  `reportEmail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_dtl`
--

INSERT INTO `report_dtl` (`reportId`, `userId`, `fromUserId`, `reportContent`, `reportDate`, `reportStat`, `reportType`, `reportName`, `reportEmail`) VALUES
('56ac29a85c', NULL, NULL, 'asdsadasdasdasd', '2016-01-30 04:10:32', '1', '1', 'Jason', 'jason@gmail.com');

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

--
-- Dumping data for table `upvote_dtl`
--

INSERT INTO `upvote_dtl` (`voteStat`, `voteType`, `postId`, `userId`, `voteId`) VALUES
('1', '1', '56ac20a637', '56ac1c012d', '56ac20be6b51a'),
('1', '1', '56ac279d62', '56ac24cd6d', '56ac27a774902'),
('1', '1', '56ac21ac48', '56ac46377d', '56ac467f5904e'),
('1', '1', '56ac279d62', '56ac46377d', '56ac468abeace'),
('1', '1', '56ac46dab8', '56ac46377d', '56ac46e75df07'),
('1', '1', '56ac474ca2', '56ac46377d', '56ac4764819bb'),
('1', '1', '56ac279d62', '56ac497d9a', '56ac499a0cea7'),
('1', '1', '56ac4a448a', '56ac497d9a', '56ac4a5ee7c46'),
('1', '1', '56ac4a2370', '56ac497d9a', '56ac4a666ce19'),
('1', '1', '56ac4a2370', '56ac46377d', '56ac4b97b901e'),
('1', '1', '56ac4a448a', '56ac46377d', '56ac4b9d44b7d'),
('1', '1', '56ac4ca7b1', '56ac1e3e5d', '56ac4cab7b553'),
('1', '1', '56ac48c0c8', '56ac46377d', '56ac53009320a'),
('1', '1', '56ac4ca7b1', '56ac46377d', '56ac53ab5bce9');

-- --------------------------------------------------------

--
-- Table structure for table `userpost`
--

CREATE TABLE IF NOT EXISTS `userpost` (
  `postId` varchar(10) NOT NULL,
  `postContent` varchar(1000) DEFAULT NULL,
  `postDate` datetime DEFAULT NULL,
  `postType` varchar(10) DEFAULT NULL,
  `postTitle` varchar(45) DEFAULT NULL,
  `userId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userpost`
--

INSERT INTO `userpost` (`postId`, `postContent`, `postDate`, `postType`, `postTitle`, `userId`) VALUES
('56ac20a637', 'Nothing', '2016-01-30 03:32:06', '1', 'A reliable parallelizing system embedded in h', '56ac1c012d'),
('56ac21ac48', 'who want to be hero?', '2016-01-30 03:36:28', '4', NULL, '56ac1ceec6'),
('56ac279d62', 'Product1', '2016-01-30 04:01:49', '2', 'Product 1', '56ac24cd6d'),
('56ac3273b6', 'My work :)', '2016-01-30 04:48:03', '1', 'An integrated bioinformatic database', '56ac1e3e5d'),
('56ac46dab8', 'a solid waste management system', '2016-01-30 06:15:06', '1', 'Trashman', '56ac46377d'),
('56ac474ca2', 'android application for bus fares', '2016-01-30 06:17:00', '1', 'myBusTransFare', '56ac46377d'),
('56ac48c0c8', 'online schedule plotter', '2016-01-30 06:23:12', '1', 'PlantItUp', '56ac46377d'),
('56ac4a2370', 'Start up Of all start up', '2016-01-30 06:29:07', '2', 'Start and Boost', '56ac1e3e5d'),
('56ac4a448a', 'Online Parking area reservation system', '2016-01-30 06:29:40', '2', 'CarInn', '56ac497d9a'),
('56ac4ca7b1', 'Finding Jobs here', '2016-01-30 06:39:51', '2', 'Go Job Search', '56ac1e3e5d'),
('56ac537d97', 'nicetry', '2016-01-30 07:09:01', '1', 'Idea new', '56ac46377d'),
('56ac547b4b', 'I want new Start up ideas', '2016-01-30 07:13:15', '4', NULL, '56ac4b9c79'),
('gp56ac235a', 'gwapo', '2016-01-30 03:43:38', 'pr56ac2271', NULL, '56ac1c012d'),
('pr56ac2271', 'TIME TRAVEL', NULL, 'gi56ac223e', 'PROJECT ALMANAC', '56ac1ceec6'),
('pr56ac524f', 'time travel', NULL, 'gi56ac5234', 'Project almanac', '56ac46377d');

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

--
-- Dumping data for table `userpost_ext`
--

INSERT INTO `userpost_ext` (`extId`, `extContent`, `extType`, `postId`) VALUES
('56ac20a64a', 'androidapp', '7', '56ac20a637'),
('56ac21ac74', 'powerful', '3', '56ac21ac48'),
('56ac21ac84', '1million pesos ', '5', '56ac21ac48'),
('56ac279d72', 'androidapp', '7', '56ac279d62'),
('56ac3273e4', 'desktopapp', '7', '56ac3273b6'),
('56ac46dad0', 'website', '7', '56ac46dab8'),
('56ac46dadd', '1222756ac46dadafc4.png', '2', '56ac46dab8'),
('56ac474cbe', 'androidapp', '7', '56ac474ca2'),
('56ac474ce9', 'www.google.com', '1', '56ac474ca2'),
('56ac48c0d8', 'website', '7', '56ac48c0c8'),
('56ac48c0e7', 'www.planitup.com.ph', '1', '56ac48c0c8'),
('56ac4a2394', 'androidapp', '7', '56ac4a2370'),
('56ac4a44a0', 'Android and Web', '7', '56ac4a448a'),
('56ac4a44ce', 'www.googleplay.com/carinn', '1', '56ac4a448a'),
('56ac4a44e0', '2871356ac4a44db8a3.png', '2', '56ac4a448a'),
('56ac4ca7bd', 'website', '7', '56ac4ca7b1'),
('56ac4ca7c6', '713456ac4ca7c6267.png', '2', '56ac4ca7b1'),
('56ac537dad', 'desktopapp', '7', '56ac537d97'),
('56ac547b8e', 'Mobile', '3', '56ac547b4b'),
('56ac547b99', 'Prizes 1 million pesos', '5', '56ac547b4b');

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
  `user_businessType` varchar(15) DEFAULT NULL,
  `user_reasons` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_dtl`
--

INSERT INTO `user_dtl` (`userId`, `user_lName`, `user_fName`, `user_midInit`, `user_age`, `user_gender`, `user_shortSelfDescription`, `user_nameOfBusiness`, `user_businessType`, `user_reasons`) VALUES
('56ac1c012d', 'Pitogo', 'Jason', 'D', '20', 'M', 'Programmer sa Index5', NULL, NULL, NULL),
('56ac1ceec6', 'Dimpas', 'Alfie', 'C', '20', 'M', 'Investor ko', 'Start&Boost', 'startup', NULL),
('56ac1e3e5d', 'Dimpas', 'Jm', 'C', '19', 'F', 'I am ideator', NULL, NULL, NULL),
('56ac24cd6d', 'Isidro', 'Estose', 'C', '20', 'M', 'Master of all masters', NULL, NULL, NULL),
('56ac2a552e', 'Jobs', 'Steve', 'C', '25', 'M', 'Think Differently', 'Apple', 'Technology', NULL),
('56ac46377d', 'Cutamora', 'Lyneth', 'C', '19', 'F', 'Think Differently', NULL, NULL, NULL),
('56ac497d9a', 'Kutamura', 'Rinesu', '', '19', 'F', 'Im a princess', NULL, NULL, NULL),
('56ac4b9c79', 'Pitogo', 'Kitkat', 'D', '20', 'F', 'Im Investor', 'StartBoost', 'startup', NULL);

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
('56ac1c012d', 'Admin', '2016-01-30 03:12:17', 'jason@yahoo.com', '00bfc8c729f5d4d529a412b12c58ddd2', 'pi56ac1c01', '0'),
('56ac1ceec6', 'Investor', '2016-01-30 03:16:14', 'alfiedimpas@icloud.com', '00bfc8c729f5d4d529a412b12c58ddd2', 'pi56ac1cee', '1'),
('56ac1e3e5d', 'Ideator', '2016-01-30 03:21:50', 'jm@gmail.com', '00bfc8c729f5d4d529a412b12c58ddd2', 'pi56ac1e3e', '0'),
('56ac24cd6d', 'Ideator', '2016-01-30 03:49:49', 'estose@gmail.com', '00bfc8c729f5d4d529a412b12c58ddd2', 'pi56ac24cd', '0'),
('56ac2a552e', 'Investor', '2016-01-30 04:13:25', 'steve.jobs@gmail.com', '00bfc8c729f5d4d529a412b12c58ddd2', 'pi56ac2a55', '1'),
('56ac46377d', 'Ideator', '2016-01-30 06:12:23', 'lyneth.cutamora@gmail.com', '18e709a19ff1a1c600aa268af2206327', 'pi56ac4637', '0'),
('56ac497d9a', 'Ideator', '2016-01-30 06:26:21', 'kutamuralyn@yahoo.com', '18e709a19ff1a1c600aa268af2206327', 'pi56ac497d', '0'),
('56ac4b9c79', 'Investor', '2016-01-30 06:35:24', 'kitkat@gmail.com', '00bfc8c729f5d4d529a412b12c58ddd2', 'pi56ac4b9c', '0');

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
-- Indexes for table `bmc_dtl`
--
ALTER TABLE `bmc_dtl`
 ADD KEY `fk_bmc_dtl_userpost1_idx` (`postId`);

--
-- Indexes for table `comment_dtl`
--
ALTER TABLE `comment_dtl`
 ADD PRIMARY KEY (`commentId`), ADD KEY `fk_comment_dtl_User_MD1_idx` (`userId`), ADD KEY `fk_comment_dtl_userpost1` (`postId`);

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
 ADD KEY `fk_msg_dtl_User_MD1_idx` (`userId`), ADD KEY `fk_msg_dtl_User_MD2_idx` (`msg_fromUserId`);

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
-- Constraints for table `bmc_dtl`
--
ALTER TABLE `bmc_dtl`
ADD CONSTRAINT `fk_bmc_dtl_userpost1` FOREIGN KEY (`postId`) REFERENCES `userpost` (`postId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
