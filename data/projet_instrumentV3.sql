-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema projet_instrument
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema projet_instrument
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `projet_instrument` DEFAULT CHARACTER SET utf8mb4 ;
USE `projet_instrument` ;

-- -----------------------------------------------------
-- Table `projet_instrument`.`categorie`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `projet_instrument`.`categorie` ;

CREATE TABLE IF NOT EXISTS `projet_instrument`.`categorie` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_categorie` VARCHAR(255) NOT NULL,
  `description_categorie` TEXT(500) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projet_instrument`.`instruments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `projet_instrument`.`instruments` ;

CREATE TABLE IF NOT EXISTS `projet_instrument`.`instruments` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(255) NOT NULL,
  `resume` VARCHAR(500) NOT NULL,
  `url` VARCHAR(255) NOT NULL,
  `description` TEXT NOT NULL,
  `son` VARCHAR(255) NULL,
  `categorie_id` INT UNSIGNED NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_instruments_categorie1`
    FOREIGN KEY (`categorie_id`)
    REFERENCES `projet_instrument`.`categorie` (`id`)
    ON DELETE SET NULL
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_instruments_categorie1_idx` ON `projet_instrument`.`instruments` (`categorie_id` ASC) ;


-- -----------------------------------------------------
-- Table `projet_instrument`.`musiciens`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `projet_instrument`.`musiciens` ;

CREATE TABLE IF NOT EXISTS `projet_instrument`.`musiciens` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_musicien` VARCHAR(255) NOT NULL,
  `prenom_musicien` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projet_instrument`.`image`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `projet_instrument`.`image` ;

CREATE TABLE IF NOT EXISTS `projet_instrument`.`image` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `img_url` VARCHAR(500) NOT NULL,
  `instruments_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_image_instruments1`
    FOREIGN KEY (`instruments_id`)
    REFERENCES `projet_instrument`.`instruments` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_image_instruments1_idx` ON `projet_instrument`.`image` (`instruments_id` ASC);


-- -----------------------------------------------------
-- Table `projet_instrument`.`musiciens_has_instruments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `projet_instrument`.`musiciens_has_instruments` ;

CREATE TABLE IF NOT EXISTS `projet_instrument`.`musiciens_has_instruments` (
  `musiciens_id` INT UNSIGNED NOT NULL,
  `instruments_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`musiciens_id`, `instruments_id`),
  CONSTRAINT `fk_musiciens_has_instruments_musiciens1`
    FOREIGN KEY (`musiciens_id`)
    REFERENCES `projet_instrument`.`musiciens` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_musiciens_has_instruments_instruments1`
    FOREIGN KEY (`instruments_id`)
    REFERENCES `projet_instrument`.`instruments` (`id`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_musiciens_has_instruments_instruments1_idx` ON `projet_instrument`.`musiciens_has_instruments` (`instruments_id` ASC) ;

CREATE INDEX `fk_musiciens_has_instruments_musiciens1_idx` ON `projet_instrument`.`musiciens_has_instruments` (`musiciens_id` ASC) ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
