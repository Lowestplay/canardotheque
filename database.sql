CREATE TABLE Etudiant(
   Identifiants INT,
   Nom VARCHAR(50) NOT NULL,
   Prenom VARCHAR(50) NOT NULL,
   Adresse_Mail VARCHAR(50) NOT NULL,
   PRIMARY KEY(Identifiants)
);

CREATE TABLE Canard(
   Nom_C VARCHAR(50),
   Type INT NOT NULL,
   etat ENUM('Dans la mare', 'En vadrouille', 'En nettoyage') NOT NULL DEFAULT 'Dans la mare',
   PRIMARY KEY(Nom_C)
);

CREATE TABLE Emprunter(
   Nom_C VARCHAR(50),
   date_du_pret VARCHAR(50) NOT NULL,
   date_du_retour VARCHAR(50) NOT NULL,
   Identifiants INT NOT NULL,
   PRIMARY KEY(Nom_C),
   FOREIGN KEY(Nom_C) REFERENCES Canard(Nom_C),
   FOREIGN KEY(Identifiants) REFERENCES Etudiant(Identifiants)
);
