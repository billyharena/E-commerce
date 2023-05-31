CREATE TABLE categorie(
    idcategorie SERIAL PRIMARY KEY,
    categorie VARCHAR(100)
);

CREATE TABLE type(
    idtype SERIAL PRIMARY KEY,
    type VARCHAR(100)
);

CREATE TABLE produit(
    idproduit SERIAL PRIMARY KEY,
    nom VARCHAR(100),
    idtype INT NOT NULL,
    masse DECIMAL(10, 2) NOT NULL ,
    prix DECIMAL(10, 2),
    FOREIGN KEY(idtype) REFERENCES type(idtype)
);

CREATE TABLE produitCategorie(
    idproduit INT NOT NULL,
    idcategorie INT NOT NULL,
    FOREIGN KEY(idproduit) REFERENCES produit(idproduit),
    FOREIGN KEY(idcategorie) REFERENCES categorie(idcategorie)
);

CREATE TABLE produitPeremption(
    idproduitPeremption SERIAL PRIMARY KEY,
    idproduit INT NOT NULL,
    dateDeb DATE NOT NULL,
    dateFin DATE NOT NULL,
    FOREIGN KEY(idproduit) REFERENCES produit(idproduit)
);

CREATE TABLE stock(
    idproduitPeremption INT NOT NULL,
    quantite INT NOT NULL,
    dateEntree DATE NOT NULL,
    FOREIGN KEY(idproduitPeremption) REFERENCES produitPeremption(idproduitPeremption)
);

CREATE TABLE prixVenteProduit(
    idprixVenteProduit SERIAL PRIMARY KEY,
    idproduit INT NOT NULL,
    prixVente DECIMAL(10, 2) NOT NULL,
    datePrix DATE,
    FOREIGN KEY(idproduit) REFERENCES produit(idproduit)
);

CREATE TABLE promotionProduit(
    idpromotionProduit SERIAL NOT NULL,
    idproduit INT NOT NULL,
    promotion DECIMAL(10, 2),
    debut DATE NOT NULL,
    fin DATE NOT NULL,
    FOREIGN KEY(idproduit) REFERENCES produit(idproduit)
);

CREATE TABLE achat(
    idachat SERIAL PRIMARY KEY,
    iduser INT NOT NULL,
    numAchat INT, 
    dateAchat DATE NOT NULL,
    FOREIGN KEY(iduser) REFERENCES users(id)
);

CREATE TABLE detailsAchat(
    idachat INT NOT NULL,
    idproduit INT NOT NULL,
    quantite INT NOT NULL,
    prix DECIMAL(10, 2),
    FOREIGN KEY(idachat) REFERENCES achat(idachat),
    FOREIGN KEY(idproduit) REFERENCES produit(idproduit)
);