create database contacto;
use contacto;

create table contactos (email varchar(120) primary key not null, nombre varchar(120) not null, 
sexo char(1), nacimiento date, telefono varchar(13), pais varchar(50) not null, imagen varchar(50),
FULLTEXT key buscador (email, nombre, sexo, telefono, pais));

create table paises (idPais int, pais varchar(50) primary key not null)

insert into paises values (0,'México'),(0,'Estados Unidos'),(0,'Francia'),(0,'Cuba'), (0,'Canada');