-- Create acme database for this project

CREATE DATABASE acme;

-- Create a table artist within the database

CREATE TABLE IF NOT EXISTS `artist` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `artist_name` char(100) NOT NULL,
    `lifespan` char(50) NOT NULL,
      `nationality` char(50) NOT NULL,
	        `portrait` MEDIUMBLOB NOT NULL
) 


-- Create a table painting within the database

CREATE TABLE IF NOT EXISTS `painting` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `title` char(100) NOT NULL,
  `finished` char(50) NOT NULL,
  `media` char(50) NOT NULL,
  `artist` char(100) NOT NULL,
  `style` char(50) NOT NULL,
  `image` MEDIUMBLOB NOT NULL,	
   FOREIGN KEY (`artist`) REFERENCES `artist`(`artist_name`)
) 



