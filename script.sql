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
    message text,
    de varchar(50),
    para varchar(50)
);

insert into users values (null, 'abdiel@gmail.com', 'AbdielMartinez', 'a1s2d3f4.a');