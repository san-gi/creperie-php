DROP TABLE IF EXISTS crepe;
create table crepe(
    id int NOT NULL AUTO_INCREMENT primary key,
    img varchar(64),
    name varchar(64),
    type int     
);

DROP TABLE IF EXISTS produits;
create table produits(
    id int NOT NULL AUTO_INCREMENT primary key,
    name varchar(64),
    createDate date,
    category int,
    foreign key(category) REFERENCES category(id)
);
DROP TABLE IF EXISTS category;
create table category(
    id int NOT NULL AUTO_INCREMENT primary key,
    name varchar(64),
    flag int
);