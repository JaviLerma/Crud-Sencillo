CREATE DATABASE crud;
USE crud;

CREATE TABLE personas(
	id int(11) NOT NULL AUTO_INCREMENT,
    nombre varchar(50) NOT NULL,
	apellido varchar(59) NOT NULL,
    PRIMARY KEY(id)
)engine=InnoDB;

INSERT INTO personas VALUES (null, 'Javier', 'Lerma');
