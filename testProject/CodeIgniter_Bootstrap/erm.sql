SET SESSION FOREIGN_KEY_CHECKS=0;


/* Create Tables */

CREATE TABLE authority
(
	user_id int NOT NULL,
	category_id int NOT NULL,
	-- 0 　権限なし
	-- 1    実行権限権限のみ
	-- 2    実行権限と編集権限
	auth_level int NOT NULL COMMENT '0 　権限なし
1    実行権限権限のみ
2    実行権限と編集権限',
	auth_type varchar(30) NOT NULL,
	PRIMARY KEY (user_id, category_id)
) ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;


CREATE TABLE category
(
	category_id int NOT NULL AUTO_INCREMENT,
	category_name varchar(30) NOT NULL UNIQUE,
	PRIMARY KEY (category_id)
);


CREATE TABLE ci_sessions
(
	session_id varchar(40) DEFAULT '0' NOT NULL,
	ip_address varchar(16) DEFAULT '0' NOT NULL,
	user_agent varchar(150) NOT NULL,
	last_activity int DEFAULT 0 NOT NULL,
	user_data text NOT NULL,
	PRIMARY KEY (session_id)
);


CREATE TABLE db_info
(
	-- データベースID。DB情報を一位に決定するもの
	db_id int NOT NULL AUTO_INCREMENT COMMENT 'データベースID。DB情報を一位に決定するもの',
	category_id int NOT NULL,
	display_name varchar(30) NOT NULL UNIQUE,
	description text NOT NULL,
	-- DB製品名（mysql/mssql)
	dbms varchar(30) NOT NULL COMMENT 'DB製品名（mysql/mssql)',
	-- データベースのホスト名 or IP
	db_host varchar(30) NOT NULL COMMENT 'データベースのホスト名 or IP',
	-- DB接続用ユーザー
	db_user varchar(30) NOT NULL COMMENT 'DB接続用ユーザー',
	-- DB接続用のパスワード
	db_passwd varchar(30) NOT NULL COMMENT 'DB接続用のパスワード',
	db_name varchar(30) NOT NULL,
	PRIMARY KEY (db_id)
) ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;


CREATE TABLE db_sql_relation
(
	-- データベースID。DB情報を一位に決定するもの
	db_id int NOT NULL COMMENT 'データベースID。DB情報を一位に決定するもの',
	sql_id int NOT NULL
) ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;


CREATE TABLE login_attempts
(
	id int NOT NULL AUTO_INCREMENT,
	ip_address varchar(40) NOT NULL,
	login varchar(50) NOT NULL,
	time timestamp DEFAULT CURRENT_TIMESTAMP NOT NULL,
	PRIMARY KEY (id)
);


CREATE TABLE sql_info
(
	sql_id int NOT NULL AUTO_INCREMENT,
	category_id int NOT NULL,
	-- SQLの名前
	display_name varchar(200) NOT NULL COMMENT 'SQLの名前',
	-- SQLの説明
	description text NOT NULL COMMENT 'SQLの説明',
	sql_text text NOT NULL,
	conditions varchar(200),
	PRIMARY KEY (sql_id)
) ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;


CREATE TABLE users
(
	id int NOT NULL AUTO_INCREMENT,
	username varchar(50) NOT NULL,
	password varchar(255) NOT NULL,
	email varchar(100) NOT NULL,
	activated boolean DEFAULT '49' NOT NULL,
	banned boolean DEFAULT '48' NOT NULL,
	ban_reason varchar(255),
	new_password_key varchar(50),
	new_password_requested datetime,
	new_email varchar(100),
	new_email_key varchar(50),
	last_ip varchar(40) NOT NULL,
	last_login datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
	created datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
	modified timestamp DEFAULT CURRENT_TIMESTAMP NOT NULL,
	admin binary DEFAULT '0' NOT NULL,
	role varchar(20) DEFAULT 'user' NOT NULL,
	PRIMARY KEY (id)
) ENGINE = InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;


CREATE TABLE user_autologin
(
	key_id char(32) NOT NULL,
	user_id int DEFAULT 0 NOT NULL,
	user_agent varchar(150) NOT NULL,
	last_ip varchar(40) NOT NULL,
	last_login timestamp DEFAULT CURRENT_TIMESTAMP NOT NULL,
	PRIMARY KEY (key_id, user_id)
);


CREATE TABLE user_profiles
(
	id int NOT NULL AUTO_INCREMENT,
	user_id int NOT NULL,
	country varchar(20),
	website varchar(255),
	PRIMARY KEY (id)
);



/* Create Foreign Keys */

ALTER TABLE authority
	ADD FOREIGN KEY (category_id)
	REFERENCES category (category_id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE db_info
	ADD FOREIGN KEY (category_id)
	REFERENCES category (category_id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE sql_info
	ADD FOREIGN KEY (category_id)
	REFERENCES category (category_id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE db_sql_relation
	ADD FOREIGN KEY (db_id)
	REFERENCES db_info (db_id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE db_sql_relation
	ADD FOREIGN KEY (sql_id)
	REFERENCES sql_info (sql_id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;



