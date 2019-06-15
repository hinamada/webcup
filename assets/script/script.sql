create table categorie(
    id integer PRIMARY KEY AUTO_increment,
    nom varchar(50)
);
create table actualite(
    id integer primary key auto_increment,
    titre varchar(200),
    description  text,
    contenu text,
    datePublication DATETIME,
    idCategorie integer,
    urlVideo varchar(200),
    imageCouverture varchar(200),
    FOREIGN KEY(idCategorie) references categorie(id)
);
create table imageActus(
    id integer primary key auto_increment,
    idActualite integer,
    urlImage varchar(200),
    FOREIGN KEY(idActualite) REFERENCES actualite(id)
);