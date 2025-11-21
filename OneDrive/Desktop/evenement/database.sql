
CREATE DATABASE IF NOT EXISTS evenement;
USE evenement;

CREATE TABLE Evenement (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Titre VARCHAR(255),
    Description TEXT,
    DateEvent DATE,
    Lieu VARCHAR(255)
);
