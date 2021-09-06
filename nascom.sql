CREATE DATABASE nascom;

USE nascom;

CREATE TABLE jobs (
	id int AUTO_INCREMENT,
    naam varchar(255),
    voornaam varchar(255),
    functie varchar(255),
    motivatie varchar(255),
    cv varchar(255),
    PRIMARY KEY (id)
);

CREATE TABLE users (
	id int AUTO_INCREMENT,
    login varchar(255),
    wachtwoord varchar(255),
    PRIMARY KEY (id)
);

INSERT INTO jobs (naam, voornaam, functie, motivatie, cv) VALUES ("swerts", "wouter", "PHP developer", "ik doe het graag", "cv.pdf");

INSERT INTO users (login, wachtwoord) VALUES ("swerts", "wouter");