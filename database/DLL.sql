
/* ============ Create Tables ============= */

CREATE TABLE admin (
    admin_id INT(2) NOT NULL,
    admin_username VARCHAR(25) NOT NULL,
    admin_email VARCHAR(30) NOT NULL,
    admin_pass VARCHAR(8) NOT NULL,
    users_id VARCHAR(6) NOT NULL,
    class_id VARCHAR(6) NOT NULL,
    PRIMARY KEY (admin_id)
);

CREATE TABLE users (
    users_id VARCHAR(6) NOT NULL,
    users_username VARCHAR(25) NOT NULL,
    users_email VARCHAR(30) NOT NULL,
    users_pass VARCHAR(8) NOT NULL,
    users_regtime DATETIME NOT NULL,
    users_premuim ENUM('0', '1'),
    users_answer_id INT(6) NOT NULL,
	scores_id VARCHAR(6) NOT NULL,
	subjects_id VARCHAR(6) NOT NULL,
    PRIMARY KEY (users_id)
);

CREATE TABLE users_answer (
    users_answer_id INT(6) NOT NULL AUTO_INCREMENT,
    users_answer_choice VARCHAR(5) NOT NULL,
    PRIMARY KEY (users_answer_id)
);

CREATE TABLE class (
    class_id VARCHAR(6) NOT NULL,
    class_level VARCHAR(3) NOT NULL,
	users_id VARCHAR(6) NOT NULL,
	subjects_id VARCHAR(6) NOT NULL,
    PRIMARY KEY (class_id)
);

CREATE TABLE scores (
    scores_id VARCHAR(6) NOT NULL,
    scores_total INT(3) NOT NULL,
    PRIMARY KEY (scores_id)
);

CREATE TABLE subjects (
    subjects_id VARCHAR(6) NOT NULL,
    subjects_name VARCHAR(30) NOT NULL,
    PRIMARY KEY (subjects_id)
);

CREATE TABLE question (
    question_id VARCHAR(6) NOT NULL,
    questio_content VARCHAR(500) NOT NULL,
    question_active ENUM('0', '1'),
    question_choice_id VARCHAR(6) NOT NULL,
    PRIMARY KEY (question_id)
);

CREATE TABLE question_choice (
    question_choice_id VARCHAR(6) NOT NULL,
    question_choice_content VARCHAR(200),
    question_choice_explain TEXT,
    question_choice_right ENUM('0','1'),
    PRIMARY KEY (question_choice_id)
);

/* ============ Alter Table ============= */
/* ============ Table Users ============= */
ALTER TABLE `nogoblog`.`users` 
ADD COLUMN `users_answer_id` INT(6) NOT NULL AFTER `users_premuim`;

ALTER TABLE `nogoblog`.`users` 
ADD COLUMN `scores_id` VARCHAR(6) NOT NULL;

ALTER TABLE `nogoblog`.`users` 
ADD COLUMN `subject_id` VARCHAR(6) NOT NULL;

/* ============ Table Users_ Answer ============= */
ALTER TABLE `nogoblog`.`users_answer` 
ADD COLUMN `quest_choice_id` VARCHAR(6) NOT NULL,
ADD COLUMN `question_id` VARCHAR(6) NOT NULL AFTER `users_answer_choice`;

/* Table Class */
ALTER TABLE `nogoblog`.`class` 
ADD COLUMN `users_id` VARCHAR(6) AFTER `class_level`;

ALTER TABLE `nogoblog`.`class` 
ADD COLUMN `subject_id` VARCHAR(6) NOT NULL;

ALTER TABLE `nogoblog`.`class` 
CHANGE COLUMN `subject_id` `subjects_id` VARCHAR(6) NOT NULL;


/* ============ Table Question ============= */
ALTER TABLE `nogoblog`.`question` 
ADD COLUMN `question_choice_id` VARCHAR(6) NOT NULL;

/* ============ Table Question Choice ============= */
ALTER TABLE `nogoblog`.`question_choice` 
ADD COLUMN `question_choice_right` ENUM('0','1');

/* ============ Create Foreign Key ============= */
/* ================ FK Admin ================== */
ALTER TABLE admin ADD CONSTRAINT admin_users_fk
FOREIGN KEY (users_id) REFERENCES users(users_id);

ALTER TABLE admin ADD CONSTRAINT admin_class_fk
FOREIGN KEY (class_id) REFERENCES class(class_id);

/* ================ FK Users ================== */
ALTER TABLE users ADD CONSTRAINT users_users_answer_fk
FOREIGN KEY (users_answer_id) REFERENCES users_answer(users_answer_id);

ALTER TABLE users ADD CONSTRAINT users_scores_fk
FOREIGN KEY (scores_id) REFERENCES scores(scores_id);

ALTER TABLE users ADD CONSTRAINT users_subjects_fk
FOREIGN KEY (subjects_id) REFERENCES subjects(subjects_id);

/* =============== FK Users Answer ============== */
ALTER TABLE users_answer ADD CONSTRAINT uas_question_choice_fk
FOREIGN KEY (quest_choice_id) REFERENCES question_choice(question_choice_id);

ALTER TABLE users_answer ADD CONSTRAINT question_choice_fk
FOREIGN KEY (question_id) REFERENCES question(question_id);

/* ================ FK Class ================== */
ALTER TABLE class ADD CONSTRAINT class_users_fk
FOREIGN KEY (users_id) REFERENCES users(users_id);

ALTER TABLE class ADD CONSTRAINT class_subjects_fk
FOREIGN KEY (subjects_id) REFERENCES subjects(subjects_id);


/* =============== FK Question =============== */
ALTER TABLE question ADD CONSTRAINT question_question_choice_fk
FOREIGN KEY (question_choice_id) REFERENCES question_choice(question_choice_id)	;