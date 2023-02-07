CREATE DATABASE takalo;
USE takalo;

CREATE TABLE categorie(
    id int AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50)
);

CREATE TABLE user(
    id int AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) DEFAULT NULL,
    prenom VARCHAR(50) DEFAULT NULL,
    email VARCHAR(50) NOT NULL,
    mdp VARCHAR(30) NOT NULL,
    etat int NOT NULL
);

CREATE TABLE objet(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idUser int REFERENCES user(id),
    nom VARCHAR(50),
    idCategorie int REFERENCES categorie(id),
    descr TEXT NOT NULL,
    prix DOUBLE PRECISION
);

CREATE TABLE photo(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    photo VARCHAR(100) NOT NULL,
    idObjet int NOT NULL REFERENCES objet(id)
);

CREATE TABLE echange(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idObjet1 int NOT NULL REFERENCES objet(id),
    idObjet2 int NOT NULL REFERENCES objet(id),
    etat int NOT NULL
);
