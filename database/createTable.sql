DROP TABLE IF EXISTS crepe;
create table crepe(
    id int NOT NULL AUTO_INCREMENT primary key,
    img varchar(64),
    name varchar(64),
    type int     
);

DROP TABLE IF EXISTS user;
create table user(
    id int NOT NULL AUTO_INCREMENT primary key,
    username varchar(64),
    password varchar(64),
    mail varchar(64),
    img varchar(64),
    commandes varchar(64)
);