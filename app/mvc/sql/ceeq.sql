CREATE TABLE IF NOT EXISTS users (
	id integer(10) PRIMARY KEY AUTO_INCREMENT,
	name varchar(32) NULL,
	username varchar(32) NULL,
	password varchar(32) NOT NULL,
	email varchar(32) NOT NULL,
	number varchar(32) NOT NULL,
	device_count integer(10) NOT NULL,
	registration_on Datetime,
	last_ip varchar(48) NOT NULL,
	last_seen Datetime,
	is_beta boolean NOT NULL,
	google_auth_token varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS devices (
	id integer(10) PRIMARY KEY AUTO_INCREMENT,
	user_id integer(10) NOT NULL,
	name varchar(32) NULL,
	imeiNumber_number varchar(24) NOT NULL,
	type varchar(24) NULL,
	model_name varchar(24) NOT NULL,
	code_name varchar(24) NULL,
	manufacturer_name varchar(24) NOT NULL,
	tablet boolean NOT NULL,
	rooted boolean NOT NULL,
	device_admin_allowed boolean NOT NULL,
	current_sim_number varchar(24) NULL,
	current_imsi_number varchar(24) NULL,
	current_operator_name varchar(24) NULL,
	current_gcm_id varchar(64) NOT NULL,
	last_location_id integer(10) NULL,
	last_seen Datetime NOT NULL,
	FOREIGN KEY (user_id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS locations (
	id integer(10) PRIMARY KEY AUTO_INCREMENT,
	device_id integer(10) NOT NULL,
	latitude varchar(32) NOT NULL,
	longitude varchar(32) NOT NULL,
	battery_level integer(10) NOT NULL,
	is_moving boolean NULL,
	is_precise boolean NOT NULL,
	last_seen Datetime NOT NULL,
    FOREIGN KEY (device_id) REFERENCES devices(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
