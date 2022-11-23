/* Creación de base datos**/

create database empleados1N;

use empleados1N;

/** Forma 1 ***/

CREATE TABLE departamento
(cod_dpto      VARCHAR(4),
 nombre_dpto   VARCHAR(40));


CREATE TABLE empleado
(dni 		VARCHAR(9),
 nombre 	VARCHAR(40),
 apellidos 	VARCHAR(40),
 fecha_nac	DATE,
 salario	DOUBLE,
 cod_dpto	VARCHAR(4)); 
 

ALTER TABLE departamento ADD CONSTRAINT pk_departamento 
PRIMARY KEY (cod_dpto);

ALTER TABLE empleado ADD CONSTRAINT pk_empleado 
PRIMARY KEY (dni);

ALTER TABLE empleado ADD CONSTRAINT fk_empleado
FOREIGN KEY (cod_dpto) REFERENCES departamento(cod_dpto);

