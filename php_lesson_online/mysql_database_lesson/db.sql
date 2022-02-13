// create database;
// use db;

create database school;

// create table;
create table students(
    id int primary key auto_increment,
    name varchar(225) not null,
    join_date DATE,
    bio Text
    room_id int,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);