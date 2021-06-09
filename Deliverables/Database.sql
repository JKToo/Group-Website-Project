create database mydb2; use mydb2;

create table accounts (
    Apartment varchar(3),
    Username varchar(40),
    Password varchar(40),
    Admin boolean,
    primary key(`Apartment`)
);


create table tenantinformation(
    id MEDIUMINT NOT NULL AUTO_INCREMENT, 
    Name varchar(40), 
    Apartment varchar(3), 
    Phone varchar(12), 
    Email varchar(50),
    primary key(id),
    foreign key(`Apartment`) references accounts(`Apartment`)
);


create table timeslots(
    Day varchar(10),
    Time varchar(5),
    Name varchar(40),
    Apartment varchar(3),
    Phone varchar(12),
    Comments varchar(100),
    Occupied boolean,
    foreign key(`Apartment`) references accounts(`Apartment`)
);
