CREATE DATABASE IF NOT EXISTS `login_system`;
USE `login_system`;

CREATE TABLE IF NOT EXISTS `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- username: Istine 
-- pass: bsit3103
INSERT INTO `users` (`username`, `password`) 
VALUES ('Istine', '$2y$10$224Uu999O22xS727G7A64.X8v/Y0aH8qD9bZ6u3mP/1/7W99Jg1GG')
ON DUPLICATE KEY UPDATE `password` = VALUES(`password`);