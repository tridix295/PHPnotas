drop table usuarios; 


CREATE TABLE usuarios(
    id int(10) not null auto_increment,
    nombres varchar(100) not null,
    apellidos varchar(255) not null,
    correo varchar(255) default 'correo electronico',
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);

DROP TABLE user_rename;
desc user_rename;
/*
*Cambiar el nombre de una tabla
*/
ALTER TABLE usuarios RENAME TO user_rename;

/*Cambiar el nombre de una columna*/
ALTER TABLE user_rename CHANGE apellidos apellidos_raname varchar(255) null;

/*Modificar una columna sin cambiarle el nombre*/
ALTER TABLE user_rename MODIFY apellidos_raname char(40) not null;

/*Agregar una columna en la tabla*/
ALTER TABLE user_rename ADD website varchar(100) null;

/*Añadir restriccion a una columna*/
ALTER TABLE user_rename ADD CONSTRAINT uq_correo UNIQUE(correo);

/*Borrar una columna de una tabla*/
ALTER TABLE user_rename DROP website;

CREATE TABLE Usuarios(
    Id          int(10) NOT NULL auto_increment,
    Nombres     varchar(100) NOT NULL,
    Apellidos   varchar(255) NOT NULL,
    Email       varchar(255) NOT NULL,
    Contrasena  varchar(100) NOT NULL,
    Fecha       date NOT NULL,
    CONSTRAINT  pk_Usuarios PRIMARY KEY(Id),
    CONSTRAINT uq_email UNIQUE(Email)
) ENGINE=InnoDb;

CREATE TABLE Categorias(
    Id         int(10) NOT NULL auto_increment,
    Nombre     varchar(255) NOT NULL,
    CONSTRAINT pk_Categorias PRIMARY KEY(Id)
)ENGINE=InnoDb;
/*
*FOREIGN KEY(Usuarios_id) => Registro de la tabla que se va a registrar como llave foranea
*REFERENCES Categorias(id)=> Se hace referencia al la tabla donde apunta esa llave foranea, y el campo con el cual esta relacionado User_ID --> Usuarios(id)
*Ejemplo:CONSTRAINT fk_Etradas_Categorias FOREIGN KEY(Categorias_id) REFERENCES Categorias(id)
*/
CREATE TABLE Entradas(
    Id             int(10) NOT NULL auto_increment,
    Usuarios_id    int(10),
    Categorias_id  int(10),
    Titulo         char(50) NOT NULL,
    Descripcion    MEDIUMTEXT NULL,
    Fecha          DATE NOT NULL,
    CONSTRAINT pk_Entradas PRIMARY KEY(Id),
    CONSTRAINT fk_Etradas_Usuarios FOREIGN KEY(Usuarios_id) REFERENCES Usuarios(id),
    CONSTRAINT fk_Etradas_Categorias FOREIGN KEY(Categorias_id) REFERENCES Categorias(id)
)ENGINE=InnoDb;

/*Insertar datos en una Tabla
*Los campos dntro del parentesis corresponden a cada fila.
*/
INSERT INTO Usuarios VALUES(NULL,'jessica','perez','inh@gmail.com','root123',CURDATE());

#Insertar filas solo en ciertas columnas#
INSERT INTO Usuarios(Nombre,Apellidos) VALUES('Sebastian','Diaz Polo');

#Mostrar los registros/filas de una tabla en concreto
SELECT Nombre, Apellidos, Email FROM Usuarios;

#Mostar todos los campos de la taba
SELECT * FROM Usuarios

#Colocar una Alias
#AS NOMBRE_COLUMNA 
#Operadores Aritmeticos
SELECT Email, 7+7 as Operacion FROM Usuarios;

#OPERACIONES MATEMATICAS
#Valor absoluto ABS(7) AS OPERACION FROM  Usuarios;

#OPERACCIONES CON CARACTERES
#UPPER(name_columna) FROM Name_Table => Trae como resultado los campos en la columna 'Nombres' que esten mayuscula
SELECT UPPER(Nombres) FROM Usuarios;

#CONCAT(Name_column1,Name_column2) => Concatena un campo con otro
SELECT CONCAT(Nombre,'',Apellidos) FROM Usuarios;

#Muestra la candtidad de carcateres de la cadena
SELECT LENGHT(CONCAT(Nombre,'',Apellidos)) FROM Usuarios;

#-#-#-#-#-#WHERE-#-#-#-#-#-#
/*  Operadores de comparacion
*Igual          =
*Distinto       !=
*Menor          <
*Mayor          >
*Menor o igual  <=
*Mayor o igual  >=
*Entre          BETWEEN A AND B
*En             in
*Es nulo        is null
*Es no nullo    is not null
*No es como     not like
*Como           like
*DAYOFWEEK()    Hace referencia a los dias de la semanas, empieza desd el domingo con el valor #1

OPERADORES LOGICOS
O  => OR
Y  => AND
NO => NOT

COMODINES
CUALQUIER CANTIDAD DE CARACTERES => %
un caracter desconocido, si tenemos una palabra pero hay letras
que desconocemos => _
*/
#Reazila una accion mientras la condicion dada se cumpla
#Si queremos mostras los Nombres y Apeliidos de la tabla usuarios registrados en 2019
#La fecha registrada en la tabla fecha puede tener mas datos ademas del año como 2013-05-31, por lo tanto se usa la funcion
#YEAR la cual devuelve el año
SELECT Nombres, Apellidos FROM Usuarios WHERE YEAR(fecha) = 2019

#Si queremos mostras los Nombres y Apeliidos de la tabla usuarios no se registraron en 2019
SELECT Nombres, Apellidos FROM Usuarios WHERE YEAR(fecha) != 2019 OR ISNULL(fecha);

#Mostar el email en el que su contenido contenga almenos una a y que su contraseña sea 1234
SELECT email FROM Usuarios WHERE apellidos LIKE '%a%' AND Contraseña = 123

#-#-#-#BORRAR Y ACTUALIZAR REGISTROS-#-#-#-#-#-#-#
#SIEMPRE COLOCAR ASEGURARSE DE COLOCAR UN WHERE, SI NO SE COLOCA
#SE ACTUALIZAN O SE LE ELIMINAN TODOS LOS DATOS DE LA BD

#Actualizar una columna
UPDATE Usuarios SET Fechas=CURDATE() WHERE id=4

#Eliminar una fila
DELETE FROM Usuarios WHERE email = 'admin@admin.co';

#-#-#-#-#-#AGRUPAMIENTO DE TABLAS-#-#-#-#-#-#
/*
Al rellenar una tabla con datos, en la cual tienes llaves foraneas se debe hacer referencia al id del dato registrada en la tabla que corresponde
*/

Tabla Usuarios
+------------+--------------+------+-----+---------+----------------+
| Field      | Type         | Null | Key | Default | Extra          |
+------------+--------------+------+-----+---------+----------------+
| Id         | int(10)      | NO   | PRI | NULL    | auto_increment |
| Nombres    | varchar(100) | NO   |     | NULL    |                |
| Apellidos  | varchar(255) | NO   |     | NULL    |                |
| Email      | varchar(255) | NO   | UNI | NULL    |                |
| Contrasena | varchar(100) | NO   |     | NULL    |                |
| Fecha      | date         | NO   |     | NULL    |                |
+------------+--------------+------+-----+---------+----------------+

Tabla Categorias
+--------+--------------+------+-----+---------+----------------+
| Field  | Type         | Null | Key | Default | Extra          |
+--------+--------------+------+-----+---------+----------------+
| Id     | int(10)      | NO   | PRI | NULL    | auto_increment |
| Nombre | varchar(255) | NO   |     | NULL    |                |
+--------+--------------+------+-----+---------+----------------+

Tabla Entradas
+---------------+------------+------+-----+---------+----------------+
| Field         | Type       | Null | Key | Default | Extra          |
+---------------+------------+------+-----+---------+----------------+
| Id            | int(10)    | NO   | PRI | NULL    | auto_increment |
| Usuarios_id   | int(10)    | YES  | MUL | NULL    |                |
| Categorias_id | int(10)    | YES  | MUL | NULL    |                |
| Titulo        | char(50)   | NO   |     | NULL    |                |
| Descripcion   | mediumtext | YES  |     | NULL    |                |
| Fecha         | date       | NO   |     | NULL    |                |
+---------------+------------+------+-----+---------+----------------+

#Cada Tabla tiene un id el cual identifica un dato en concreto, las cuales se les puede hacer referencia en otras tablas con en la tabla Entradas
#Al estar referenciadas se le debe colocar el mismo id del registro al que pertenece

#Para este caso el primer campo es nulo, ya ques es llave primaria y se auto incrementa. EL segundo y tercer campo como son llaves foraneas se hace
#referencia al id de registro de la tabla correpondien, que seria 1->rol 2->accion 3->deportes los cuales se encuentran en la tabla categorias
INSERT INTO Entradas VALUES (NULL, "2","1","EL mapa del mundo de zelda","reviw del zelda", CURDATE());
INSERT INTO Entradas VALUES (NULL, "2","2","compras en LORDS MOBILE","reviw de Lords Mobile", CURDATE());

#CONSULTAS DE AGRUPAMIENTO#
#GROUP BY -> Sirve para agrupar sengun una carectiristica unica, Por ejemplo tego los usuarios; Pedro, Sameul, y Antonio ect.. Quiero
#saber que usuarios comienzan por la letra 'A'... por lo que se puede usar para este caso el GRUOP BY

#Para este caso se cuenta el numero de registros en el campo 'Titulo' y se muestra segun el id del usuario que lo publico, ese decir, si el usuario 1
#hizo 4 publicaciones las muestra
SELECT COUNT(Titulo) AS 'Numero de publicaciones', categorias_id FROM Entradas GROUP BY Categorias_id;

#CONDICIONES EN CONSULTAS DE AGRUPAMIENTO
#Para las consultas de agrupamiento no se puede utilizar el where, por lo tanto se hace uso del having, el cual tiene una funcionalidad parecida

'#Muestra una consulta igual a la anterior con la codicion de mostrar solamente los registros en la columna Titulo mayores a 2
SELECT COUNT(Titulo) AS 'Numero de publicaciones', categorias_id FROM Entradas GROUP BY Categorias_id HAVING count(Titulo) > 2;

#-#-#-#-#-SUBCONSULTAS-#-#-#-#-#-#-#
/*
*Son consultas que se ejecutan dentro de otras
*Se refiere a las llaves foranea y consiste en utilizar los resultados de la sub consulta, para operar con la consulta principal
*/
'

#Para este ejemplo se realiza como consulta principal en la tabla de los usuarios, donde el id de ese usuario
#exista en la tabla de entradas en el cual el campo debe tener como minimo la palabra 'mundo'
SELECT Nombres, Apellidos  FROM Usuarios WHERE Id IN (SELECT Usuarios_id FROM Entradas  WHERE Titulo LIKE "%mundo%");

#SUBCONSULTAS AVANZADAS#
#ejem -> Sacar todas las entradas de la categoria accion usando su nombre
SELECT Titulo FROM Entradas WHEN Categorias_id IN (SELECT Id,Nombre FROM Categorias WHERE Nombre = "accion");

#En este ejemplo se nos piden mostras el nombre de las categorias que han tenido mas de 3 entradas
#Primero se realiza la ccnsulta sobre la tabla principal, y luego la subconsulta
SELECT Nombre FROM Categorias WHERE Id IN (SELECT Categorias_id FROM Entradas GROUP BY Categorias_id HAVING COUNT(Categorias_id) >=3);

#Para este ejemplo se nos pide mostra los usuarios que crearon una entrada en determinada fecha.
SELECT Nombres,Apellidos FROM Usuarios WHERE Id IN (
        SELECT Usuarios_id FROM Entradas WHERE YEAR(Fecha)=2019);

#Determinar que usuario agrego mas registros
SELECT CONCAT(Nombres,' ',Apellidos) AS Usuarios FROM Usuarios INNER JOIN
    (SELECT Usuarios_id  FROM Entradas GROUP BY Usuarios_id ORDER BY id ASC LIMIT 1)
    Entradas ON Usuarios.Id = Entradas.Usuarios_id;

#Para ver las categorias registradas en la tabla de entradas
SELECT * fROM Categorias INNER JOIN ( SELECT Categorias_id FROM Entradas GROUP BY Categorias_id)
Entradas ON Categorias.Id = Entradas.Categorias_id;

#Segunda forma
SELECT * FROM Categorias WHERE Id IN (SELECT Categorias_id FROM Entradas);

/*
CONSULTAS MULTITABLA

En resumen sirven para consultar varias tablas en una sola sentencia
*/

/*Para este caso se le asigna un alias a las tablas por ejemplo Usuarios Usr, Categorias Ctg... y se le hace referencia al momento de hacer la consulta
->SELECT Ctg.Usuarios_id, Ctg.Categorias_id -> Se hace referencia al id del usuario registrado en la tabla Categorias
Como parametro en el WHERE se realiza de la misma manera en donde se compara los registros de la tabla A con los de la tabla B
Ejemp -> Etr.Usuarios_id = Usr.Id -> Aqui se compara el usuario id registrado en la tabla Entradas con el id de los usuarios registrados en la
*/tabla usuarios
SELECT Etr.Usuarios_id, Usr.Nombres, Ctg.Nombre AS Categoria, COUNT(Etr.Titulo) AS '# Numero de publicaciones'
    FROM Usuarios Usr, Categorias Ctg, Entradas Etr
        WHERE Etr.Usuarios_id = Usr.Id AND Etr.Categorias_id = Ctg.Id GROUP BY Usuarios_id;

/*
Usando el mismo ejemplo anterior hacemos el mismo ejercicio con INNER JOIN
pasa que con el ejemplo anterior se recorren todas las tablas lo cual reduce el rendimiento,
En cambio con el inner join el consiste en combinaciones internas el cual devuelve registros que tengan similitudes en dos tablas*/
SELECT Etr.Usuarios_id, Usr.Nombres, Ctg.Nombre AS Categoria, COUNT(Etr.Titulo) AS '# Numero de publicaciones'
    FROM Entradas Etr
        INNER JOIN Usuarios Usr ON Etr.Usuarios_id = Usr.Id
        INNER JOIN Categorias Ctg ON Etr.Categorias_id = Ctg.Id
        GROUP BY Usuarios_id;

/*LEFT JOIN
Muestra los registros sin importar si existen referencias a ese id en otra tabla
*/
SELECT Ctg.Nombre, COUNT(Categorias_id) FROM Entradas Etr LEFT JOIN Categorias Ctg ON Ctg.Id = Etr.Categorias_id GROUP BY Etr.Categorias_id;
#Para este caso al ejecutar el query muestra una tabla adicional el cual no tiene registros refenrenciados en la otra tabla y atua sobre la tabla


#Es el mismo funcionamiento que el left join, solo que para este caso actua sobre la tabla que esta a la derecha, es decir sobre la tabla categorias
SELECT Ctg.Nombre, COUNT(Etr.Categorias_id) FROM Entradas Etr RIGHT  JOIN Categorias Ctg ON Ctg.Id = Etr.Categorias_id GROUP BY Etr.Categorias_id;
a la izquierda, es decir sobre la tabla entradas
