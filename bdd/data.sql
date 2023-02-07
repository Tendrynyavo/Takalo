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
(1, 'Le Docteur Amoureux', 2, 'Un petit Molière', 2000.00);