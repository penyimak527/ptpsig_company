USE `piramidsoft_profile`;

ALTER TABLE `admin`
	DROP INDEX `email`,
	DROP COLUMN `email`,
	DROP COLUMN `role`,
	ADD COLUMN `password_text` VARCHAR(255) NULL DEFAULT NULL AFTER `password_hash`;
