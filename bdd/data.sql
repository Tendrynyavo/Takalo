INSERT INTO categorie(nom) VALUES
('Akanjo'),
('Boky'),
('Kilalao'),
('Non-catégorisé');

INSERT INTO user(nom, prenom, email, mdp, etat) VALUES
('Ilohity', 'assets/img/logo.png', 'timmypablojamon@gmail.com', '1928', 10),
('Tendry', '', 'tendrynyavo@gmail.com', '2070', 10),
('Mpiahy', '', 'mpiahysoa@gmail.com', '2036', 10),
('Bob', 'Stone', 'bob@gmail.com', '1234', 0);

INSERT INTO objet(idUser, nom, idCategorie, descr, prix) VALUES
(1, 'Le Docteur Amoureux', 2, 'Un petit Molière', 2000.00),
(4, 'Nike', 4, 'Un petit Molière', 200.00),
(4, 'Devil May Cry 5', 4, 'Ts mandeha fa tsara boîte', 25000.00),
(4, 'Converses', 4, 'Noires', 150.00),
(3, 'T-shirt Spider-Man', 3, 'Il pu', 2000.00),
(3, 'Huawei nova 2', 4, 'Bon état', 325000.00),
(4, 'Souris Gamer', 4, 'Noire et verte, sans néons', 12000.00),
(2, 'Shining', 4, 'Un livre de Stephen King', 2000.00),
(4, 'Doctor Sleep', 4, 'Shining, la suite', 2300.00),
(4, 'GTA V', 4, 'PS3', 15000.00);

INSERT INTO photo(photo, idObjet) VALUES
('assets/img/le_docteur_amoureux.jpg', 1),
('assets/img/nike1.jpg',2),
('assets/img/nike2.jpeg',2),
('assets/img/dmc51.jpg',3),
('assets/img/dmc52.jpg',3),
('assets/img/dmc53.jpg',3),
('assets/img/converse1.png',4),
('assets/img/converse2.jpg',4),
('assets/img/t-shirt_spiderman.jpg', 5),
('assets/img/huawei_nova21.jpg',6),
('assets/img/huawei_nova22.jpg',6),
('assets/img/souris1.jpg',7),
('assets/img/souris2.jpg',7),
('assets/img/souris3.jpg',7),
('assets/img/souris4.jpg',7),
('assets/img/shining.jpeg', 8),
('assets/img/doctor_sleep1.jpg', 9),
('assets/img/doctor_sleep2.jpg', 9),
('assets/img/GTA_V1.jpg', 10),
('assets/img/GTA_V2.jpg', 10),
('assets/img/GTA_V3.jpg', 10),