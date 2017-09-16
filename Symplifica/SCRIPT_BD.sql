CREATE DATABASE SYMPLIFICA;
USE SYMPLIFICA;

CREATE TABLE EMPLEADORES(
	Nombre varchar(40),
	Sexo varchar(1),
	Cedula bigint PRIMARY KEY,
	Telefono bigint,
	Direccion varchar(50),
	Fecha_nacimiento date
)

CREATE TABLE EMPLEADOS(
	Nombre varchar(40),
	Sexo varchar(1),
	Cedula bigint PRIMARY KEY,
	Telefono bigint,
	Tipo_contrato varchar(18)
)

CREATE TABLE DATALLE_EMPLEADOS(
	ID int(8) Primary key AUTO_INCREMENT,
	Id_empleador bigint,
	Id_Empleado bigint,
	Foreign key (Id_empleador) references EMPLEADORES(Cedula),
	Foreign key (Id_empleado) references EMPLEADOS(Cedula)
)