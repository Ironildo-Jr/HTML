create database jornada;

use jornada;

create table Usuarios(
    id integer primary key auto_increment,
    nome varchar[50],
    email varchar[50],
    cell integer,
    curso varchar[30],
    turno varchar[15]
);

select * from Usuarios;