SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `onlineexam` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `onlineexam`;

-- -----------------------------------------------------
-- Table `onlineexam`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `onlineexam`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(45) NOT NULL ,
  `password` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `first_name` VARCHAR(45) NOT NULL ,
  `mid_name` VARCHAR(45) NULL ,
  `last_name` VARCHAR(45) NOT NULL ,
  `phone` VARCHAR(45) NOT NULL ,
  `address` VARCHAR(45) NOT NULL ,
  `website` VARCHAR(45) NULL ,
  `created_at` INT NOT NULL ,
  `user_type` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `onlineexam`.`user_type`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `onlineexam`.`user_type` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `slug` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `onlineexam`.`courses`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `onlineexam`.`courses` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `description` VARCHAR(200) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `onlineexam`.`questions`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `onlineexam`.`questions` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `exam_id` INT NOT NULL ,
  `questiontype_id` INT NOT NULL ,
  `remark` VARCHAR(200) NULL ,
  `marks` INT NOT NULL ,
  `answer` VARCHAR(200) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `onlineexam`.`answers`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `onlineexam`.`answers` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `question_id` INT NOT NULL ,
  `user_id` INT NOT NULL ,
  `marksobtained` INT NOT NULL ,
  `answer` VARCHAR(200) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `onlineexam`.`exam`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `onlineexam`.`exam` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `description` VARCHAR(200) NULL ,
  `full_marks` INT NOT NULL ,
  `pass_marks` INT NOT NULL ,
  `start_time` INT NOT NULL ,
  `end_time` INT NOT NULL ,
  `date` INT NULL ,
  `created_at` INT NULL ,
  `course_id` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `onlineexam`.`question_type`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `onlineexam`.`question_type` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `slug` VARCHAR(100) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
