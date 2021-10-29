CREATE DATABASE diars;
diarsUSE diars;

/*tabla de usuarios*/

CREATE TABLE roles(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	rname VARCHAR (20) NOT NULL 
)ENGINE INNODB ;

INSERT INTO roles (rname) VALUES ('administardor');
INSERT INTO roles (rname) VALUES ('tienda');
INSERT INTO roles (rname) VALUES ('almacen');
INSERT INTO roles (rname) VALUES ('proveedor');

SELECT *FROM roles;

CREATE TABLE usuarios(
id INT NOT NULL AUTO_INCREMENT,
username VARCHAR(20) NOT NULL ,
upassword VARCHAR(12) NOT NULL,
fk_rol INT NOT NULL  ,
CONSTRAINT  PRIMARY KEY (id),
CONSTRAINT fk_rol FOREIGN KEY (fk_rol) REFERENCES roles (id)
)ENGINE INNODB ;

INSERT INTO usuarios(username,upassword,fk_rol) VALUES ('administrador','123456',1);
INSERT INTO usuarios(username,upassword,fk_rol) VALUES ('tienda','123456',2);
INSERT INTO usuarios(username,upassword,fk_rol) VALUES ('almacen','123456',3);
INSERT INTO usuarios(username,upassword,fk_rol) VALUES ('proveedor','123456',4);
INSERT INTO usuarios(username,upassword,fk_rol) VALUES ('75388728','75388728',1);

SELECT * FROM usuarios;

SELECT * FROM usuarios WHERE username='administrador' AND upassword ='123456' AND fk_rol = 1;

SELECT u.*,r.rname AS 'rol' FROM usuarios u LEFT JOIN  roles r ON u.fk_rol = r.id; 
/*---------------------------------*/

CREATE TABLE categorias(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre_categoria VARCHAR(20) NOT NULL  
)ENGINE INNODB ;

INSERT INTO categorias (nombre_categoria) VALUES ('Panaderia');
INSERT INTO categorias (nombre_categoria) VALUES ('Belleza e higiene');
INSERT INTO categorias (nombre_categoria) VALUES ('Snacks');
INSERT INTO categorias (nombre_categoria) VALUES ('Productos de bebe');
INSERT INTO categorias (nombre_categoria) VALUES ('Bebidas');
INSERT INTO categorias (nombre_categoria) VALUES ('Conservas');
INSERT INTO categorias (nombre_categoria) VALUES ('Aceites');
INSERT INTO categorias (nombre_categoria) VALUES ('Salsas');
INSERT INTO categorias (nombre_categoria) VALUES ('Bebidas Alcoholicas');
INSERT INTO categorias (nombre_categoria) VALUES ('Productos limpieza');

SELECT * FROM categorias;

CREATE TABLE locales(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre_local VARCHAR(20) NOT NULL,
	direccion VARCHAR(100) NOT NULL 
)ENGINE INNODB ;

INSERT INTO locales (nombre_local , direccion) VALUES ('Comas','Av. Túpac Amaru 3860')

SELECT * FROM locales ;

CREATE TABLE metodos_pago(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre_metodo VARCHAR (20) NOT NULL 
)ENGINE INNODB ;

INSERT INTO metodos_pago (nombre_metodo) VALUES ('Efectivo');
INSERT INTO metodos_pago (nombre_metodo) VALUES ('Tarjeta Debito');
INSERT INTO metodos_pago (nombre_metodo) VALUES ('Tarjeta Credito');

SELECT * FROM metodos_pago;

CREATE TABLE productos(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	nombre_producto VARCHAR(20) NOT NULL,
	marca VARCHAR (20) NOT NULL ,
	lote VARCHAR (10) NOT NULL ,
	cantidad INT NOT NULL ,
	fecha_vencimiento VARCHAR(20) NOT NULL ,
	fecha_registro VARCHAR(20) NOT NULL ,
	fk_categoria INT NOT NULL ,
	CONSTRAINT fk_categoria FOREIGN KEY (fk_categoria) REFERENCES categorias(id)
)ENGINE INNODB ;

INSERT INTO productos (nombre_producto,marca,lote,cantidad,fecha_vencimiento,fecha_registro,fk_categoria) 
VALUES ('Gaseosa','Coca Cola','L0001',20,'18-10-2021',CURDATE(),4);

INSERT INTO productos (nombre_producto,marca,lote,cantidad,fecha_vencimiento,fecha_registro,fk_categoria) 
VALUES ('Leche','Gloria','L0012',20,'28-10-2021',CURDATE(),2);

INSERT INTO productos (nombre_producto,marca,lote,cantidad,fecha_vencimiento,fecha_registro,fk_categoria) 
VALUES ('Galletas','ChocoSoda','L0021',20,'30-10-2021',CURDATE(),1);

INSERT INTO productos (nombre_producto,marca,lote,cantidad,fecha_vencimiento,fecha_registro,fk_categoria) 
VALUES ('Pan','Bimbo','L0025',10,'10-11-2021',CURDATE(),5);

SELECT * FROM productos

/*UPDATE productos set fecha_vencimiento = '18-10-2021' WHERE id = 1 ;*/

SELECT * FROM productos p INNER JOIN categorias c ON p.fk_categoria = c.id

SELECT p.*,c.nombre_categoria AS 'categoria' FROM productos p INNER JOIN categorias c 
ON p.fk_categoria = c.id

/*---------------------------------*/

SHOW TABLES 
DESCRIBE roles