drop database if exists mail;
create database mail;

use mail;

create table users(
	id int auto_increment unique primary key,
    email varchar(50),
    userName varchar(50),
    pass varchar(120)
);

create table mess(
	id int auto_increment unique primary key,
    subj varchar(50),
    today date,
    message text,
    de varchar(50),
    para varchar(50)
);
select * from users;
insert into users values (null, 'abdiel.martinez@gmail.com', 'AbdielMartinez', 'a1s2d3f4.a');
insert into users values (null, 'jorge.sidgo@gmail.com', 'JorgeSidgo', 'a1s2d3f4.a');

insert into mess values (null, 'Prueba de los Papus', curdate(), 'Este es un mensaje de prueba probando 1..2..3', 'jorge.sidgo@gmail.com', 'abdiel.martinez@gmail.com');