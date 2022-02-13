// create database;
// use db;

create database php;

// create table
  create table studets(
    id int auto_increment primary key,
    name varchar(225) not null,
    join_date DATE;
    bio Text,
    room_id int,
    created_at timestamp DEFAULT CURRENT_TIMESTAMP);

    ## insert data
    insert into students(name, join_date, bio, room_id)
    values('john', '2020-01-01', 'I am a student' , 1);
