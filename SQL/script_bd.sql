-- Table des questions
CREATE TABLE question (
    id_qst CHAR(5) PRIMARY KEY,
    intitule TEXT NOT NULL
);

-- Table des réponses
CREATE TABLE reponse (
    id_rep CHAR(6) PRIMARY KEY,
    cle_qst CHAR(5) NOT NULL,
    intitule TEXT NOT NULL,
    bonneRep BOOLEAN NOT NULL,
    FOREIGN KEY (cle_qst) REFERENCES question(id_qst)
);
