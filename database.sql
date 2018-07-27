create database Item_Brainstorm;

create table users(
  id int not null auto_increment, email varchar(254) not null,
  username varchar(24), passwordHash varchar(32) not null,
  birthDate date, unique(email), unique(username),
  constraint chk_email check(email like '%_@__%.__%'),
  primary key(id)
);

create table items(
  id int not null auto_increment, user int not null,
  name varchar(24) not null, imageFol varchar(255) not null,
  applied boolean, dateCreated date, description text,
  FOREIGN KEY (user) REFERENCES users(id),
  unique(imageFol), primary key(id)
);

create table types(
  id int not null auto_increment, name varchar(30) not null,
  unique(name), primary key(id)
);

create table genres(
  id int not null auto_increment, name varchar(30) not null,
  unique(name), primary key(id)
);

create table groups(
  id int not null auto_increment, name varchar(30),
  description text, primary key(id)
);

create table posts(
  id int not null auto_increment, post text not null,
  groupID int, user int not null,
  FOREIGN KEY (user) REFERENCES users(id),
  FOREIGN KEY (groupID) REFERENCES groups(id), primary key(id)
);

create table itemRequests(
  id int not null auto_increment, requestDesc text not null,
  groupID int, user int not null,
  FOREIGN KEY (user) REFERENCES users(id),
  FOREIGN KEY (groupID) REFERENCES groups(id), primary key(id)
);

create table posts_votes(
  post int not null, vote bit not null,
  user int not null, FOREIGN KEY (post) REFERENCES posts(id),
  FOREIGN KEY (user) REFERENCES users(id)
);

create table items_votes(
  item int not null, vote bit not null,
  user int not null, FOREIGN KEY (item) REFERENCES items(id),
  FOREIGN KEY (user) REFERENCES users(id)
);

create table types_items(
  type int not null, item int not null,
  FOREIGN KEY (type) REFERENCES types(id),
  FOREIGN KEY (item) REFERENCES items(id)
);

create table users_genres(
  user int not null, genre int not null,
  FOREIGN KEY (user) REFERENCES users(id),
  FOREIGN KEY (genre) REFERENCES genres(id)
);

create table items_genres(
  item int not null, genre int not null,
  FOREIGN KEY (item) REFERENCES items(id),
  FOREIGN KEY (genre) REFERENCES genres(id)
);

create table groups_genres(
  groupID int not null, genre int not null,
  FOREIGN KEY (groupID) REFERENCES groups(id),
  FOREIGN KEY (genre) REFERENCES genres(id)
);

create table users_groups(
  groupID int not null, user int not null, accepted boolean not null,
  FOREIGN KEY (groupID) REFERENCES groups(id),
  FOREIGN KEY (user) REFERENCES users(id)
);

create table groups_admins(
  groupID int not null, adminUser int not null,
  FOREIGN KEY (groupID) REFERENCES groups(id),
  FOREIGN KEY (adminUser) REFERENCES users(id)
);

create table item_requests(
  item int not null, request int not null,
  FOREIGN KEY (item) REFERENCES items(id),
  FOREIGN KEY (request) REFERENCES itemRequests(id)
);
