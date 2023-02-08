INSERT INTO categorie(nom) VALUES
('Akanjo'),
('Boky'),
('Kilalao'),
('Non-catégorisé');

INSERT INTO user(nom, prenom, email, mdp, etat) VALUES
('Ilohity', '', 'timmypablojamon@gmail.com', '1928', 10),
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