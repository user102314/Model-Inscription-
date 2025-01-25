CREATE DATABASE inscription;

USE inscription;

CREATE TABLE personnes (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    age INT(3),
    classe VARCHAR(50),
    email VARCHAR(100),
    numero VARCHAR(15),
    skills VARCHAR(255)
);
