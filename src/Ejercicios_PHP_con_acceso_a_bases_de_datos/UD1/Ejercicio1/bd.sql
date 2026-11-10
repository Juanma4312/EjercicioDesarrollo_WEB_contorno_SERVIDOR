//ASI ES COMO LO HARIA EL 

CREATE DATABASE ejercicio3_1;
USE ejercicio3_1;

CREAE TABLE usuario(){
    id INT AUTO_INCREMENT PRIMARY KEY,
    nic varchar(30) not null UNIQUE,
    email varchar(320) not null unique,
    nombre varchar(60) not null,
    apellido1 varchar(100) not null,
    apellido2 varchar(100),
    contraseña TEXT(256) not null/*Esto es importate, yo no lo hice asi*/
}