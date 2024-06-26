-- MySQL Script generated by MySQL Workbench
-- Thu Aug 31 19:20:43 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`table1`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`table1` ;

CREATE TABLE IF NOT EXISTS `mydb`.`table1` (
  `idtable1` INT NOT NULL,
  PRIMARY KEY (`idtable1`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Persona`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Persona` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Persona` (
  `id_Persona` INT NOT NULL,
  `Nombre` VARCHAR(45) NOT NULL,
  `Fecha_De_Nacimineto` DATETIME NOT NULL,
  `Cedula` INT NOT NULL,
  `E-mail` VARCHAR(45) NOT NULL,
  `Telefono` INT NOT NULL,
  PRIMARY KEY (`id_Persona`),
  UNIQUE INDEX `Cedula_UNIQUE` (`Cedula` ASC) VISIBLE,
  UNIQUE INDEX `E-mail_UNIQUE` (`E-mail` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Computadora`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Computadora` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Computadora` (
  `id_Computadora` INT NOT NULL,
  `id_Cliente` INT NOT NULL,
  `Modelo` VARCHAR(45) NOT NULL,
  `Estado` VARCHAR(45) NOT NULL,
  `Marca` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_Computadora`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Tecnico`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Tecnico` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Tecnico` (
  `id_Tecnico` INT NOT NULL,
  `Persona_id_Persona` INT NOT NULL,
  `Entrega_Servcio` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_Tecnico`),
  INDEX `fk_Tecnico_Persona1_idx` (`Persona_id_Persona` ASC) VISIBLE,
  CONSTRAINT `fk_Tecnico_Persona1`
    FOREIGN KEY (`Persona_id_Persona`)
    REFERENCES `mydb`.`Persona` (`id_Persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Pago`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Pago` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Pago` (
  `id_Pago` INT NOT NULL,
  `id_Orden_de_Servicio` INT NOT NULL,
  `id_Servcio` INT NOT NULL,
  `Valor` INT NOT NULL,
  `Fecha` DATETIME NOT NULL,
  `Pago` INT NOT NULL,
  PRIMARY KEY (`id_Pago`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Orden_de_Servicio`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Orden_de_Servicio` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Orden_de_Servicio` (
  `id_Orden_de_Servicio` INT NOT NULL,
  `id_Tecnico` INT NOT NULL,
  `Cuncluir_ Mante` VARCHAR(45) NOT NULL,
  `Pago_id_Pago` INT NOT NULL,
  PRIMARY KEY (`id_Orden_de_Servicio`),
  INDEX `fk_Orden_de_Servicio_Pago1_idx` (`Pago_id_Pago` ASC) VISIBLE,
  CONSTRAINT `fk_Orden_de_Servicio_Pago1`
    FOREIGN KEY (`Pago_id_Pago`)
    REFERENCES `mydb`.`Pago` (`id_Pago`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Servcio`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Servcio` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Servcio` (
  `id_Servcio` INT NOT NULL,
  `id_Solicitud` INT NOT NULL,
  `Tipo` VARCHAR(45) NOT NULL,
  `Valor` INT NOT NULL,
  `Tecnico_id_Tecnico` INT NOT NULL,
  `Orden_de_Servicio_id_Orden_de_Servicio` INT NOT NULL,
  PRIMARY KEY (`id_Servcio`),
  INDEX `fk_Servcio_Tecnico1_idx` (`Tecnico_id_Tecnico` ASC) VISIBLE,
  INDEX `fk_Servcio_Orden_de_Servicio1_idx` (`Orden_de_Servicio_id_Orden_de_Servicio` ASC) VISIBLE,
  CONSTRAINT `fk_Servcio_Tecnico1`
    FOREIGN KEY (`Tecnico_id_Tecnico`)
    REFERENCES `mydb`.`Tecnico` (`id_Tecnico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Servcio_Orden_de_Servicio1`
    FOREIGN KEY (`Orden_de_Servicio_id_Orden_de_Servicio`)
    REFERENCES `mydb`.`Orden_de_Servicio` (`id_Orden_de_Servicio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Solicitud`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Solicitud` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Solicitud` (
  `id_Solicitud` INT NOT NULL,
  `id_Cliente` INT NOT NULL,
  `id_Computadora` INT NOT NULL,
  `Fecha` DATETIME NOT NULL,
  `Computadora_id_Computadora` INT NOT NULL,
  `Servcio_id_Servcio` INT NOT NULL,
  PRIMARY KEY (`id_Solicitud`),
  INDEX `fk_Solicitud_Computadora1_idx` (`Computadora_id_Computadora` ASC) VISIBLE,
  INDEX `fk_Solicitud_Servcio1_idx` (`Servcio_id_Servcio` ASC) VISIBLE,
  CONSTRAINT `fk_Solicitud_Computadora1`
    FOREIGN KEY (`Computadora_id_Computadora`)
    REFERENCES `mydb`.`Computadora` (`id_Computadora`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Solicitud_Servcio1`
    FOREIGN KEY (`Servcio_id_Servcio`)
    REFERENCES `mydb`.`Servcio` (`id_Servcio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Cliente` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Cliente` (
  `id_Cliente` INT NOT NULL,
  `Persona_id_Persona` INT NOT NULL,
  `Computadora_id_Computadora` INT NOT NULL,
  `Solicitud_id_Solicitud` INT NOT NULL,
  `Cliente_id_Cliente` INT NOT NULL,
  `Pago_id_Pago` INT NOT NULL,
  PRIMARY KEY (`id_Cliente`),
  INDEX `fk_Cliente_Persona1_idx` (`Persona_id_Persona` ASC) VISIBLE,
  INDEX `fk_Cliente_Computadora1_idx` (`Computadora_id_Computadora` ASC) VISIBLE,
  INDEX `fk_Cliente_Solicitud1_idx` (`Solicitud_id_Solicitud` ASC) VISIBLE,
  INDEX `fk_Cliente_Cliente1_idx` (`Cliente_id_Cliente` ASC) VISIBLE,
  INDEX `fk_Cliente_Pago1_idx` (`Pago_id_Pago` ASC) VISIBLE,
  CONSTRAINT `fk_Cliente_Persona1`
    FOREIGN KEY (`Persona_id_Persona`)
    REFERENCES `mydb`.`Persona` (`id_Persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Cliente_Computadora1`
    FOREIGN KEY (`Computadora_id_Computadora`)
    REFERENCES `mydb`.`Computadora` (`id_Computadora`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Cliente_Solicitud1`
    FOREIGN KEY (`Solicitud_id_Solicitud`)
    REFERENCES `mydb`.`Solicitud` (`id_Solicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Cliente_Cliente1`
    FOREIGN KEY (`Cliente_id_Cliente`)
    REFERENCES `mydb`.`Cliente` (`id_Cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Cliente_Pago1`
    FOREIGN KEY (`Pago_id_Pago`)
    REFERENCES `mydb`.`Pago` (`id_Pago`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

show databases;
