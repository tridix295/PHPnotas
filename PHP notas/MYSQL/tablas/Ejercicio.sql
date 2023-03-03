CREATE DATABASE ejercicios;

USE ejercicios;

CREATE TABLE Coches(
    Id        INT(10) NOT NULL AUTO_INCREMENT,
    Modelos   Varchar(100) NOT NULL,
    Marcas    Varchar(50) NOT NULL,
    Precios   INT(65) NOT NULL,
    Stock     INT(255) NOT NULL,
    CONSTRAINT pk_Coches PRIMARY KEY(Id)
)ENGINE=InnoDb;

CREATE TABLE Grupos(
    Id        INT(10) NOT NULL AUTO_INCREMENT,
    Nombre    Varchar(100) NOT NULL,
    Ciudad    Varchar(50) NOT NULL,

     CONSTRAINT pk_Grupos PRIMARY KEY(Id)
)ENGINE=InnoDb;

CREATE TABLE Vendedores(
    Id           INT(10) NOT NULL AUTO_INCREMENT,
    Grupo_id     INT(10) NOT NULL,
    Jefe         INT(10) NOT NULL,
    Nombres      Varchar(100) NOT NULL,
    Apellidos    Varchar(255) NOT NULL,
    Cargo        varchar(100) NOT NULL,
    Fecha_alta   DATE NOT NULL,
    Sueldo       FLOAT(20,3) NOT NULL,
    Comision     FLOAT(20,3) NOT NULL,
        CONSTRAINT pk_Vendedores PRIMARY KEY(Id),
        CONSTRAINT fk_Vendedores_Gupos FOREIGN KEY(Grupo_id) REFERENCES Grupos(Id),
        CONSTRAINT fk_Vendedores_jefe FOREIGN KEY(Jefe) REFERENCES Vendedores(Id)
)ENGINE=InnoDb;

CREATE TABLE Clientes(
    Id           INT(10) NOT NULL AUTO_INCREMENT,
    Vendedor_id  INT(10) NOT NULL,
    Nombres      Varchar(100) NOT NULL,
    Apellidos    Varchar(255) NOT NULL,
    Ciudad       DATE NOT NULL,
    Gastado      INT(100) NOT NULL,
        CONSTRAINT pk_Clientes PRIMARY KEY(Id),
        CONSTRAINT fk_Cliente_Vendedor FOREIGN KEY(Vendedor_id) REFERENCES Vendedores(Id)
)ENGINE=InnoDb;


CREATE TABLE Encargos(
    Id          INT(10) NOT NULL AUTO_INCREMENT,
    Cliente_id  INT(10) NOT NULL,
    Coche_id    INT(10) NOT NULL,
    Cantidad    INT(100) NOT NULL,
    Fecha       DATE NOT NULL,
        CONSTRAINT pk_Encargos PRIMARY KEY(Id),
        CONSTRAINT fk_Encargos_Cliente FOREIGN KEY (Cliente_id) REFERENCES Clientes(Id),
        CONSTRAINT fk_Encargos_Coche FOREIGN KEY (Coche_id) REFERENCES Coches(Id)
)ENGINE=InnoDb;

SELECT Vdr.nombre, Vdr.apellidos FROM Vendedores Vdr INNER JOIN
Grupos Grp ON Grp.id = Vdr.grupo_id ORDER BY grupo_id ASC;

SELECT Chs.modelo, Encg.cliente_id, SUM(Encg.cantidad) FROM Encargos Encg INNER JOIN Coches Chs ON Chs.id= Encg.Coche_id
INNER JOIN Clientes Cli ON Cli.id = Encg.cliente_id;

SELECT * FROM Clientes Cli INNER JOIN Vendedores Vdr ON Vdr.id = Cli.vendedor_id WHERE Vdr_id=2;