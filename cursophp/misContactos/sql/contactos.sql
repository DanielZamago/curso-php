create database contactos;
use contactos;

create table contactos (email varchar(120) primary key not null, nombre varchar(120) not null, 
sexo char(1), nacimiento date, telefono varchar(13), pais varchar(50) not null, imagen varchar(50),
FULLTEXT key buscador (email, nombre, sexo, telefono, pais)) ENGINE=MyISAM DEFAULT CHARSET=latin1;

create table paises (idPais int auto_increment primary key, pais varchar(50) not null) ENGINE=MyISAM DEFAULT CHARSET=latin1;

insert into paises values (0,'México'),(0,'Estados Unidos'),(0,'Francia'),(0,'Cuba'), (0,'Canada');