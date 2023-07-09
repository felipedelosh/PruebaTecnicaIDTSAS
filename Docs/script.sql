create database empresa;
use empresa;

CREATE TABLE usuarios(
 id int unsigned not null primary key auto_increment,
 nombre varchar(50),
 correo varchar(50), 
 timeStampCreate varchar(50),
 timeStampUpdate varchar(50)
);

insert into usuarios (nombre, correo, timeStampCreate, timeStampUpdate) values ('pepito perez', 'correo@falso.com', '2023-07-07', '2023-07-07');
insert into usuarios (nombre, correo, timeStampCreate, timeStampUpdate) values ('trevor phillips', 'trevor@tpi.com', '2023-07-07', '2023-07-07');


CREATE TABLE productos(
 id int unsigned not null primary key auto_increment,
 nombre varchar(50),
 precio int
);

CREATE TABLE ventas(
 id int unsigned not null primary key auto_increment,
 producto_id int,
 cantidad int,
 fecha varchar(50),
 FOREIGN KEY (producto_id) REFERENCES productos(id)
);


insert into productos(nombre, precio) values ('A', 1000);
insert into productos(nombre, precio) values ('B', 500);
insert into productos(nombre, precio) values ('C', 700);
insert into productos(nombre, precio) values ('D', 1100);

insert into ventas(producto_id, cantidad, fecha) values (1, 100, '2023-07-05');
insert into ventas(producto_id, cantidad, fecha) values (2, 500, '2023-07-06');
insert into ventas(producto_id, cantidad, fecha) values (3, 7, '2023-07-07');
insert into ventas(producto_id, cantidad, fecha) values (4, 1, '2023-07-08');
insert into ventas(producto_id, cantidad, fecha) values (1, 99, '2023-07-05');

COMMIT;