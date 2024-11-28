-- Database Creation
CREATE DATABASE IF NOT EXISTS `company_employees`;
USE `company_employees`;

-- Table Creation
CREATE TABLE IF NOT EXISTS `employees` (
    `employee_id` int AUTO_INCREMENT,
    `name` varchar(20) NOT NULL,
    `departement` varchar(30),
    `experience` int,
    PRIMARY KEY (`employee_id`)
);

-- Removing Old Data
DELETE FROM `employees`;

-- Data Insertion
INSERT INTO `employees` (`name`, `departement`, `experience`) 
VALUES 
('Alice', 'IT', 5),
('Maxime', 'Finance', 2),
('Antoine', 'RH', 4);