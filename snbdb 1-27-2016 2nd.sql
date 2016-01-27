-- MySQL Script generated by MySQL Workbench
-- 01/27/16 23:10:41
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema snbDB
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema snbDB
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `snbDB` DEFAULT CHARACTER SET utf8 ;
USE `snbDB` ;

-- -----------------------------------------------------
-- Table `snbDB`.`User_MD`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`User_MD` (
  `userId` VARCHAR(10) NOT NULL,
  `user_Type` VARCHAR(8) NULL,
  `user_dateRegistered` DATETIME NULL,
  `user_emailAdd` VARCHAR(50) NULL,
  `user_password` VARCHAR(40) NULL,
  `user_profilePicId` VARCHAR(10) NULL,
  `user_status` VARCHAR(1) NULL,
  PRIMARY KEY (`userId`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`Company_dtl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`Company_dtl` (
  `userId` VARCHAR(10) NULL,
  `company_name` VARCHAR(50) NULL,
  `company_businessType` VARCHAR(20) NULL,
  `company_yearFounded` YEAR NULL,
  `company_lName` VARCHAR(30) NULL,
  `company_fName` VARCHAR(30) NULL,
  `company_midInit` VARCHAR(2) NULL,
  `company_about` VARCHAR(255) NULL,
  INDEX `fk_Company_dtl_User_MD_idx` (`userId` ASC),
  CONSTRAINT `fk_Company_dtl_User_MD`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`userpost`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`userpost` (
  `postId` VARCHAR(10) NOT NULL,
  `postContent` VARCHAR(1000) NULL,
  `postDate` DATETIME NULL,
  `postType` VARCHAR(10) NULL,
  `postTitle` VARCHAR(45) NULL,
  `userId` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`postId`),
  INDEX `fk_userpost_User_MD1_idx` (`userId` ASC),
  CONSTRAINT `fk_userpost_User_MD1`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`comment_dtl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`comment_dtl` (
  `commentContent` VARCHAR(1000) NULL,
  `commentDate` DATETIME NULL,
  `commentType` VARCHAR(1) NULL,
  `postId` VARCHAR(10) NOT NULL,
  `userId` VARCHAR(10) NOT NULL,
  `commentId` VARCHAR(10) NOT NULL,
  `disallowed` VARCHAR(5) NULL,
  INDEX `fk_comment_dtl_User_MD1_idx` (`userId` ASC),
  PRIMARY KEY (`commentId`),
  CONSTRAINT `fk_comment_dtl_userpost1`
    FOREIGN KEY (`postId`)
    REFERENCES `snbDB`.`userpost` (`postId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comment_dtl_User_MD1`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`User_dtl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`User_dtl` (
  `userId` VARCHAR(10) NULL,
  `user_lName` VARCHAR(30) NULL,
  `user_fName` VARCHAR(30) NULL,
  `user_midInit` VARCHAR(2) NULL,
  `user_age` VARCHAR(3) NULL,
  `user_gender` VARCHAR(1) NULL,
  `user_shortSelfDescription` VARCHAR(100) NULL,
  `user_nameOfBusiness` VARCHAR(45) NULL,
  `user_businessType` VARCHAR(15) NULL,
  `user_reasons` VARCHAR(1000) NULL,
  CONSTRAINT `fk_User_dtl_User_MD1`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`userpost_ext`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`userpost_ext` (
  `extId` VARCHAR(10) NOT NULL,
  `extContent` VARCHAR(255) NULL,
  `extType` VARCHAR(1) NULL,
  `postId` VARCHAR(10) NULL,
  PRIMARY KEY (`extId`),
  INDEX `fk_userpost_ext_userpost1_idx` (`postId` ASC),
  CONSTRAINT `fk_userpost_ext_userpost1`
    FOREIGN KEY (`postId`)
    REFERENCES `snbDB`.`userpost` (`postId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`upvote_dtl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`upvote_dtl` (
  `voteStat` VARCHAR(1) NOT NULL,
  `voteType` VARCHAR(1) NULL,
  `postId` VARCHAR(10) NOT NULL,
  `userId` VARCHAR(10) NOT NULL,
  `voteId` VARCHAR(45) NOT NULL,
  INDEX `fk_upvote_dtl_userpost1_idx` (`postId` ASC),
  INDEX `fk_upvote_dtl_User_MD1_idx` (`userId` ASC),
  PRIMARY KEY (`voteId`),
  CONSTRAINT `fk_upvote_dtl_userpost1`
    FOREIGN KEY (`postId`)
    REFERENCES `snbDB`.`userpost` (`postId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_upvote_dtl_User_MD1`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`badge_dtl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`badge_dtl` (
  `userId` VARCHAR(10) NULL,
  `fromUserId` VARCHAR(10) NULL,
  `voteBadge` VARCHAR(1) NULL,
  INDEX `fk_badge_dtl_User_MD1_idx` (`userId` ASC),
  INDEX `fk_badge_dtl_User_MD2_idx` (`fromUserId` ASC),
  CONSTRAINT `fk_badge_dtl_User_MD1`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_badge_dtl_User_MD2`
    FOREIGN KEY (`fromUserId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`report_dtl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`report_dtl` (
  `reportId` VARCHAR(10) NOT NULL,
  `userId` VARCHAR(10) NULL,
  `fromUserId` VARCHAR(10) NULL,
  `reportContent` VARCHAR(1000) NULL,
  `reportDate` DATETIME NULL,
  `reportStat` VARCHAR(1) NULL,
  `reportType` VARCHAR(1) NULL,
  `reportName` VARCHAR(50) NULL,
  `reportEmail` VARCHAR(100) NULL,
  PRIMARY KEY (`reportId`),
  INDEX `fk_report_dtl_User_MD1_idx` (`userId` ASC),
  INDEX `fk_report_dtl_User_MD2_idx` (`fromUserId` ASC),
  CONSTRAINT `fk_report_dtl_User_MD1`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_report_dtl_User_MD2`
    FOREIGN KEY (`fromUserId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`conference_dtl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`conference_dtl` (
  `msgId` VARCHAR(10) NULL,
  `dateSent` DATETIME NULL,
  `userId` VARCHAR(10) NULL,
  `msgContent` VARCHAR(1000) NULL,
  INDEX `fk_conference_dtl_User_MD1_idx` (`userId` ASC),
  CONSTRAINT `fk_conference_dtl_User_MD1`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`group_md`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`group_md` (
  `groupId` VARCHAR(10) NOT NULL,
  `groupname` VARCHAR(30) NULL,
  `groupdescription` VARCHAR(255) NULL,
  `groupCoverPic` VARCHAR(45) NULL,
  `userId` VARCHAR(10) NULL,
  PRIMARY KEY (`groupId`),
  INDEX `fk_group_md_User_MD1_idx` (`userId` ASC),
  CONSTRAINT `fk_group_md_User_MD1`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`Avatar_dtl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`Avatar_dtl` (
  `userId` VARCHAR(10) NULL,
  `avatar_name` VARCHAR(45) NULL,
  `avatar_id` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`avatar_id`),
  INDEX `fk_picture_dtl_User_MD1_idx` (`userId` ASC),
  CONSTRAINT `fk_picture_dtl_User_MD1`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`msg_dtl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`msg_dtl` (
  `msgId` VARCHAR(10) NULL,
  `userId` VARCHAR(10) NULL,
  `msg_fromUserId` VARCHAR(10) NULL,
  `msg_Content` VARCHAR(255) NULL,
  `msg_Date` DATETIME NULL,
  `msg_status` VARCHAR(1) NULL,
  INDEX `fk_msg_dtl_User_MD1_idx` (`userId` ASC),
  INDEX `fk_msg_dtl_User_MD2_idx` (`msg_fromUserId` ASC),
  CONSTRAINT `fk_msg_dtl_User_MD1`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_msg_dtl_User_MD2`
    FOREIGN KEY (`msg_fromUserId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`location_dtl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`location_dtl` (
  `locationId` VARCHAR(10) NOT NULL,
  `userId` VARCHAR(10) NULL,
  `location_address1` VARCHAR(255) NULL,
  `location_address2` VARCHAR(255) NULL,
  `location_city` VARCHAR(30) NULL,
  `location_prov` VARCHAR(45) NULL,
  `location_zipcode` VARCHAR(10) NULL,
  `location_country` VARCHAR(13) NULL,
  PRIMARY KEY (`locationId`),
  INDEX `fk_location_dtl_User_MD1_idx` (`userId` ASC),
  CONSTRAINT `fk_location_dtl_User_MD1`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`group_ext`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`group_ext` (
  `groupId` VARCHAR(10) NOT NULL,
  `userId` VARCHAR(10) NULL,
  `addedDate` DATETIME NULL,
  `status` VARCHAR(1) NULL,
  INDEX `fk_group_ext_group_md1_idx` (`groupId` ASC),
  INDEX `fk_group_ext_User_MD1_idx` (`userId` ASC),
  CONSTRAINT `fk_group_ext_group_md1`
    FOREIGN KEY (`groupId`)
    REFERENCES `snbDB`.`group_md` (`groupId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_group_ext_User_MD1`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`investor_dtl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`investor_dtl` (
  `investorId` VARCHAR(10) NOT NULL,
  `postId` VARCHAR(10) NULL,
  `userId` VARCHAR(10) NULL,
  PRIMARY KEY (`investorId`),
  INDEX `fk_investor_dtl_userpost1_idx` (`postId` ASC),
  INDEX `fk_investor_dtl_User_MD1_idx` (`userId` ASC),
  CONSTRAINT `fk_investor_dtl_userpost1`
    FOREIGN KEY (`postId`)
    REFERENCES `snbDB`.`userpost` (`postId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_investor_dtl_User_MD1`
    FOREIGN KEY (`userId`)
    REFERENCES `snbDB`.`User_MD` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `snbDB`.`bmc_dtl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `snbDB`.`bmc_dtl` (
  `postId` VARCHAR(10) NULL,
  `key_partners` VARCHAR(1000) NULL,
  `key_activities` VARCHAR(1000) NULL,
  `value_proposition` VARCHAR(1000) NULL,
  `customer_relationships` VARCHAR(1000) NULL,
  `channels` VARCHAR(1000) NULL,
  `customer_segments` VARCHAR(1000) NULL,
  `cost_structure` VARCHAR(1000) NULL,
  `revenue_streams` VARCHAR(1000) NULL,
  INDEX `fk_bmc_dtl_userpost1_idx` (`postId` ASC),
  CONSTRAINT `fk_bmc_dtl_userpost1`
    FOREIGN KEY (`postId`)
    REFERENCES `snbDB`.`userpost` (`postId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
