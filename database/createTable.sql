DROP TABLE IF EXISTS crepe;
create table crepe
(
    id     int auto_increment
        primary key,
    img    varchar(64) null,
    name   varchar(64) null,
    type   int         null,
    price  int         null,
    `desc` text        null,
    constraint crepe_name_uindex
        unique (name)
);

DROP TABLE IF EXISTS produits;
create table produits(
    id int NOT NULL AUTO_INCREMENT primary key,
    name varchar(64),
    createDate date,
    category int,
    foreign key(category) REFERENCES category(id)
);

DROP TABLE IF EXISTS commandes;
create table commandes
(
    id      int auto_increment
        primary key,
    crepe   varchar(64) null,
    facture int         null
);



DROP TABLE IF EXISTS facture;
-- auto-generated definition
create table facture
(
    id    int auto_increment
        primary key,
    user  varchar(64) null,
    price float       null,
    date  date        null
);


DROP TABLE IF EXISTS ingrediants;
-- auto-generated definition
create table ingrediants
(
    id    int auto_increment
        primary key,
    name  varchar(64) null,
    price varchar(64) null,
    constraint ingrediants_name_uindex
        unique (name)
);



DROP TABLE IF EXISTS ingCrepe;
-- auto-generated definition
create table ingCrepe
(
    id         int auto_increment
        primary key,
    crepe      varchar(64) null,
    ingredient varchar(64) null
);


-- auto-generated definition
create table user
(
    id       int auto_increment
        primary key,
    username varchar(64) null,
    password varchar(64) null,
    mail     varchar(64) null,
    img      varchar(64) null,
    role     varchar(64) null,
    constraint user_mail_uindex
        unique (mail)
);

