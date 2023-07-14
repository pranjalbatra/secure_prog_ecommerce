CREATE DATABASE IF NOT EXISTS sche_1;
USE sche_1;

CREATE TABLE IF NOT EXISTS first_table (
    user_id INT AUTO_INCREMENT,
    user_name VARCHAR(255) NOT NULL,
    user_email VARCHAR(255) NOT NULL,
    PRIMARY KEY (user_id)
);
