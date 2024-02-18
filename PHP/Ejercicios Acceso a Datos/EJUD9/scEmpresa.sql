DROP DATABASE IF EXISTS EMPRESA;
CREATE DATABASE EMPRESA;
USE EMPRESA;
DROP TABLE IF EXISTS CLIENTE;
CREATE TABLE CLIENTE(
	DNI VARCHAR(9) PRIMARY KEY NOT NULL,
    NOMBRE VARCHAR (255) NOT NULL,
    APELLIDOS VARCHAR (255) NOT NULL,
    DIRECCION VARCHAR (255),
    POBLACION VARCHAR(200),
    TELEFONO VARCHAR(12),
    FECHA_NAC DATE,
    CHECK (FECHA_NAC >='2002-01-01')
    );
DROP TABLE IF EXISTS PROVEEDOR; 
CREATE TABLE PROVEEDOR (
	NIF VARCHAR (9),
    NOMBRE VARCHAR (255) NOT NULL,
    DIRECCION VARCHAR (255),
    CONSTRAINT PK_PROV PRIMARY KEY(NIF)
);
DROP TABLE IF EXISTS PRODUCTO;
CREATE TABLE PRODUCTO(
	COD_PROD VARCHAR (5),
    NOMBRE VARCHAR (255),
    PROVEEDOR VARCHAR (9),
    PVP DECIMAL(6,2), 
    CHECK (PVP>=0),
    PRIMARY KEY (COD_PROD),
    CONSTRAINT FK_PRODPROV FOREIGN KEY (PROVEEDOR) REFERENCES PROVEEDOR (NIF) 
		ON DELETE RESTRICT ON UPDATE CASCADE
);
DROP TABLE IF EXISTS COMPRA;
CREATE TABLE COMPRA(
	CLIENTE VARCHAR(9),
    PRODUCTO VARCHAR(5),
    FECHA DATE ,
    UDES INT UNSIGNED DEFAULT 1,
    PRIMARY KEY (CLIENTE, PRODUCTO),
    CONSTRAINT FK_COMPRACLI FOREIGN KEY (CLIENTE) REFERENCES CLIENTE(DNI)
		ON DELETE RESTRICT ON UPDATE CASCADE,
	CONSTRAINT FK_COMPRAPROD FOREIGN KEY (PRODUCTO) REFERENCES PRODUCTO(COD_PROD)
		ON DELETE RESTRICT ON UPDATE CASCADE
);