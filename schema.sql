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
    estAdmin int NOT NULL
);

CREATE TABLE objet(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idUser int REFERENCES user(id),
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
    submitted int NOT NULL
);

INSERT INTO categorie(nom) VALUES
('Akanjo'),
('Boky'),
('Kilalao');

INSERT INTO user(nom, prenom, email, mdp, estAdmin) VALUES
('Ilohity', '', 'timmypablojamon@gmail.com', '1928', 1),
('Tendry', '', 'tendrynyavo@gmail.com', '2070', 1),
('Mpiahy', '', 'mpiahysoa@gmail.com', '2036', 1),
('Bob', 'Stone', 'bob@gmail.com', '1234', 2);

