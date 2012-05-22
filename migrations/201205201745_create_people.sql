CREATE TABLE `people` (
	`id` INT(10) NOT NULL,
	`name` VARCHAR(50) NOT NULL,
	`sex` TINYINT(1) NOT NULL,
	`shower` TINYINT(2) NOT NULL,
	`glasses` TINYINT(1) NOT NULL,
	`hair` TINYINT(1) NOT NULL,
	`boobs` TINYINT(1) NOT NULL,
	`date` INT(10) NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;

CREATE VIEW `matches` AS SELECT p1.id AS p1_id, p2.id AS p2_id,
							SQRT(ABS(p1.shower-p2.shower)/10) AS diff_shower,
							SQRT(ABS(p1.glasses-p2.glasses)) AS diff_glasses,
							SQRT(ABS(p1.hair-p2.hair)/3) AS diff_hair,
							SQRT(ABS(p1.boobs-p2.boobs)/5) AS diff_boobs
						FROM people AS p1, people AS p2
						WHERE p1.date IS NULL AND p2.date IS NULL AND p1.sex != p2.sex;