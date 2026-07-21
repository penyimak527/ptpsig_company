USE `piramidsoft_profile`;

ALTER TABLE `admin`
	MODIFY `last_login` VARCHAR(19) NULL,
	MODIFY `created_at` VARCHAR(19) NULL,
	MODIFY `updated_at` VARCHAR(19) NULL;
UPDATE `admin` SET
	`last_login` = CASE WHEN `last_login` REGEXP '^[0-9]{4}-' THEN DATE_FORMAT(STR_TO_DATE(`last_login`, '%Y-%m-%d %H:%i:%s'), '%d:%m:%Y') ELSE `last_login` END,
	`created_at` = CASE WHEN `created_at` REGEXP '^[0-9]{4}-' THEN DATE_FORMAT(STR_TO_DATE(`created_at`, '%Y-%m-%d %H:%i:%s'), '%d:%m:%Y') ELSE `created_at` END,
	`updated_at` = CASE WHEN `updated_at` REGEXP '^[0-9]{4}-' THEN DATE_FORMAT(STR_TO_DATE(`updated_at`, '%Y-%m-%d %H:%i:%s'), '%d:%m:%Y') ELSE `updated_at` END;
ALTER TABLE `admin`
	MODIFY `last_login` VARCHAR(10) NULL,
	MODIFY `created_at` VARCHAR(10) NOT NULL,
	MODIFY `updated_at` VARCHAR(10) NULL;

ALTER TABLE `kegiatan`
	MODIFY `tanggal` VARCHAR(19) NULL,
	MODIFY `created_at` VARCHAR(19) NULL,
	MODIFY `updated_at` VARCHAR(19) NULL;
UPDATE `kegiatan` SET
	`tanggal` = CASE WHEN `tanggal` REGEXP '^[0-9]{4}-' THEN DATE_FORMAT(STR_TO_DATE(LEFT(`tanggal`, 10), '%Y-%m-%d'), '%d:%m:%Y') ELSE `tanggal` END,
	`created_at` = CASE WHEN `created_at` REGEXP '^[0-9]{4}-' THEN DATE_FORMAT(STR_TO_DATE(`created_at`, '%Y-%m-%d %H:%i:%s'), '%d:%m:%Y') ELSE `created_at` END,
	`updated_at` = CASE WHEN `updated_at` REGEXP '^[0-9]{4}-' THEN DATE_FORMAT(STR_TO_DATE(`updated_at`, '%Y-%m-%d %H:%i:%s'), '%d:%m:%Y') ELSE `updated_at` END;
ALTER TABLE `kegiatan`
	MODIFY `tanggal` VARCHAR(10) NULL,
	MODIFY `created_at` VARCHAR(10) NOT NULL,
	MODIFY `updated_at` VARCHAR(10) NULL;

ALTER TABLE `struktur_organisasi`
	MODIFY `created_at` VARCHAR(19) NULL,
	MODIFY `updated_at` VARCHAR(19) NULL;
UPDATE `struktur_organisasi` SET
	`created_at` = CASE WHEN `created_at` REGEXP '^[0-9]{4}-' THEN DATE_FORMAT(STR_TO_DATE(`created_at`, '%Y-%m-%d %H:%i:%s'), '%d:%m:%Y') ELSE `created_at` END,
	`updated_at` = CASE WHEN `updated_at` REGEXP '^[0-9]{4}-' THEN DATE_FORMAT(STR_TO_DATE(`updated_at`, '%Y-%m-%d %H:%i:%s'), '%d:%m:%Y') ELSE `updated_at` END;
ALTER TABLE `struktur_organisasi`
	MODIFY `created_at` VARCHAR(10) NOT NULL,
	MODIFY `updated_at` VARCHAR(10) NULL;

ALTER TABLE `visi_misi`
	MODIFY `created_at` VARCHAR(19) NULL,
	MODIFY `updated_at` VARCHAR(19) NULL;
UPDATE `visi_misi` SET
	`created_at` = CASE WHEN `created_at` REGEXP '^[0-9]{4}-' THEN DATE_FORMAT(STR_TO_DATE(`created_at`, '%Y-%m-%d %H:%i:%s'), '%d:%m:%Y') ELSE `created_at` END,
	`updated_at` = CASE WHEN `updated_at` REGEXP '^[0-9]{4}-' THEN DATE_FORMAT(STR_TO_DATE(`updated_at`, '%Y-%m-%d %H:%i:%s'), '%d:%m:%Y') ELSE `updated_at` END;
ALTER TABLE `visi_misi`
	MODIFY `created_at` VARCHAR(10) NOT NULL,
	MODIFY `updated_at` VARCHAR(10) NULL;

ALTER TABLE `sejarah`
	MODIFY `created_at` VARCHAR(19) NULL,
	MODIFY `updated_at` VARCHAR(19) NULL;
UPDATE `sejarah` SET
	`created_at` = CASE WHEN `created_at` REGEXP '^[0-9]{4}-' THEN DATE_FORMAT(STR_TO_DATE(`created_at`, '%Y-%m-%d %H:%i:%s'), '%d:%m:%Y') ELSE `created_at` END,
	`updated_at` = CASE WHEN `updated_at` REGEXP '^[0-9]{4}-' THEN DATE_FORMAT(STR_TO_DATE(`updated_at`, '%Y-%m-%d %H:%i:%s'), '%d:%m:%Y') ELSE `updated_at` END;
ALTER TABLE `sejarah`
	MODIFY `created_at` VARCHAR(10) NOT NULL,
	MODIFY `updated_at` VARCHAR(10) NULL;

ALTER TABLE `team`
	MODIFY `created_at` VARCHAR(19) NULL,
	MODIFY `updated_at` VARCHAR(19) NULL;
UPDATE `team` SET
	`created_at` = CASE WHEN `created_at` REGEXP '^[0-9]{4}-' THEN DATE_FORMAT(STR_TO_DATE(`created_at`, '%Y-%m-%d %H:%i:%s'), '%d:%m:%Y') ELSE `created_at` END,
	`updated_at` = CASE WHEN `updated_at` REGEXP '^[0-9]{4}-' THEN DATE_FORMAT(STR_TO_DATE(`updated_at`, '%Y-%m-%d %H:%i:%s'), '%d:%m:%Y') ELSE `updated_at` END;
ALTER TABLE `team`
	MODIFY `created_at` VARCHAR(10) NOT NULL,
	MODIFY `updated_at` VARCHAR(10) NULL;
