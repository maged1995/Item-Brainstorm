create database Item_Brainstorm;

create table Users(
  id int NOT NULL AUTO_INCREMENT, email varchar(254),
  username varchar(24), passwordHash varchar(32),
  constraint chk_email check (email like '%_@__%.__%'),
  primary key(id));

create table Items(id int NOT NULL AUTO_INCREMENT, name varchar(24) not null, imageFol text);
