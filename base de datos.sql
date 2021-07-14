Create database crud_2019; 

Create database login_2019;



EN EL LOGIN:

create table usuarios (

id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
usuario varchar(50),
password varchar(20),
NombreNegocio varchar (50));


EN EL CRUD:


create table personas (

id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombre varchar(20),
pais varchar(255),
edad bigint);

create table images_tabla (
id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
imagenes longblob,
creado date);