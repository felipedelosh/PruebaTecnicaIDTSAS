create database empresa;

CREATE TABLE usuarios(
 id int unsigned not null primary key auto_increment,
 nombre varchar(50),
 correo varchar(50), 
 timeStampCreate varchar(50),
 timeStampUpdate varchar(50)
);

insert into usuarios (nombre, correo, timeStampCreate, timeStampUpdate) values ('pepito perez', 'correo@falso.com', '2023-07-07', '2023-07-07');
insert into usuarios (nombre, correo, timeStampCreate, timeStampUpdate) values ('trevor phillips', 'trevor@tpi.com', '2023-07-07', '2023-07-07');

COMMIT;