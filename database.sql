create database Item_Brainstorm;

create table Users(
  id int not null auto_increment, email varchar(254),
  username varchar(24), passwordHash varchar(32),
  birthDate date,
  constraint chk_email check (email like '%_@__%.__%'),
  primary key(id));

create table Items(
  id int not null auto_increment,
  name varchar(24) not null, imageFol text not null,
  applied boolean, dateCreated date);

create table type(
  id int not null auto_increment, name varchar(30));

create table Users_Items(
  type int not null, item int not null);
