DROP TABLE IF EXISTS crepe;
create table crepe(
    id int NOT NULL AUTO_INCREMENT primary key,
    img varchar(64),
    name varchar(64),
    type int     
);