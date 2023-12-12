CREATE USER 'mstudent1'@'localhost' IDENTIFIED BY 'pass';

CREATE DATABASE IF NOT EXISTS baseball_01;

GRANT ALL PRIVILEGES ON * . * TO 'mstudent1'@'localhost';

USE baseball_01;

CREATE TABLE baseball_teams (
    team_id INT AUTO_INCREMENT PRIMARY KEY,
    team_name VARCHAR(50) NOT NULL,
    city VARCHAR(50) NOT NULL,
    founded_year INT,
    coach_name VARCHAR(50)
);

INSERT INTO baseball_teams (team_name, city, founded_year, coach_name)
    VALUES
           ('Seattle Mariners', 'Seattle', 1977, 'Scott Servais'),
           ('Los Angeles Dodgers', 'Los Angeles', 1883, 'Dave Roberts'),
           ('Colorado Rockies', 'Denver', 1993, 'Bud Black');


