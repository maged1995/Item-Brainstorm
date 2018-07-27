create database Item_Brainstorm;

create table users(
  id int not null auto_increment, email varchar(254),
  username varchar(24), passwordHash varchar(32),
  birthDate date,
  constraint chk_email check (email like '%_@__%.__%'),
  primary key(id)
);

create table items(
  id int not null auto_increment,
  name varchar(24) not null, imageFol text not null,
  applied boolean, dateCreated date, description text,
  primary key(id)
);

create table types(
  id int not null auto_increment, name varchar(30),
  primary key(id)
);

create table genres(
  id int not null auto_increment, name varchar(30),
  primary key(id)
);

create table groups(
  id int not null auto_increment, name varchar(30),
  description text, primary key(id)
);

create table posts(
  id int not null auto_increment, post text not null,
  group int, primary key(id)
);

create table itemRequests(
  id int not null auto_increment, requestDesc text not null,
  group int, primary key(id)
);

create table posts_votes(
  post int not null, vote bit not null,
  user int not null
);

create table items_votes(
  item int not null, vote bit not null,
  user int not null
);

create table types_items(
  type int not null, item int not null
);

create table users_genres(
  user int not null, genre int not null
);

create table items_genres(
  item int not null, genre int not null
);

create table groups_genres(
  group int not null, genre int not null
);

create table users_groups(
  group int not null, user int not null, accepted boolean not null
);

create table groups_admins(
  group int not null, adminUser int not null
);

create table item_requests(
  item int not null, request int not null
);
