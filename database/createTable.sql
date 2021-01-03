DROP TABLE IF EXISTS crepe;
create table crepe(
    id int NOT NULL AUTO_INCREMENT primary key,
    img varchar(64),
    name varchar(64),
    type int,
    price int null,
    desc text
);
alter table crepe
	add

alter table crepe
	add `desc` text ;
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
DROP TABLE IF EXISTS commandes;
create table commandes
(
	id int not null auto_increment primary key,
	crepe int,
	facture int
);

DROP TABLE IF EXISTS facture;
create table facture
(
	id int not null auto_increment primary key,
	user int,
	prix float,
	date date
);
DROP TABLE IF EXISTS ingrediants;
create table ingrediants
(
	id int not null auto_increment primary key ,
	nom int,
	price int
);

DROP TABLE IF EXISTS ingCrepe;
create table ingCrepe
(
	id int not null auto_increment primary key ,
	crepe int,
	facture int
);

