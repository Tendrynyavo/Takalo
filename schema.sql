CREATE DATABASE takalo;
USE takalo;

CREATE TABLE user(
    id int AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL,
    mdp VARCHAR(30) NOT NULL,
    estAdmin int NOT NULL
);

CREATE TABLE objet(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idUser int REFERENCES user(id),
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

INSERT INTO bool (value) VALUES
('true'),
('false');

INSERT INTO user(email, mdp, estAdmin) VALUES
('timmypablojamon@gmail.com', '1928', 1),
('tendrynyavo@gmail.com', '2070', 1),
('mpiahysoa@gmail.com', '2036', 1),
('bob@gmail.com', '1234', 2);

