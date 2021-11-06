CREATE DATABASE diars;
USE diars;

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
uname VARCHAR(100) NOT NULL,
fk_rol INT NOT NULL  ,
CONSTRAINT  PRIMARY KEY (id),
CONSTRAINT fk_rol FOREIGN KEY (fk_rol) REFERENCES roles (id)
)ENGINE INNODB ;

INSERT INTO usuarios(username,upassword,uname,fk_rol) VALUES ('administrador','123456','Administrador de Sistema',1);
INSERT INTO usuarios(username,upassword,uname,fk_rol) VALUES ('tienda','123456','supervisor de Tienda',2);
INSERT INTO usuarios(username,upassword,uname,fk_rol) VALUES ('almacen','123456','Encargado de Almacen',3);
INSERT INTO usuarios(username,upassword,uname,fk_rol) VALUES ('proveedor','123456','Proveedor Bacus',4);
INSERT INTO usuarios(username,upassword,uname,fk_rol) VALUES ('75388728','75388728','Wilfredo Luna',1);

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

/*---------------------------------*/
CREATE TABLE locales(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre_local VARCHAR(20) NOT NULL,
	direccion VARCHAR(100) NOT NULL 
)ENGINE INNODB ;

INSERT INTO locales (nombre_local , direccion) VALUES ('Comas','Av. Túpac Amaru 3860')

SELECT * FROM locales ;
/*---------------------------------*/
CREATE TABLE metodos_pago(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre_metodo VARCHAR (20) NOT NULL 
)ENGINE INNODB ;

INSERT INTO metodos_pago (nombre_metodo) VALUES ('Efectivo');
INSERT INTO metodos_pago (nombre_metodo) VALUES ('Tarjeta Debito');
INSERT INTO metodos_pago (nombre_metodo) VALUES ('Tarjeta Credito');

SELECT * FROM metodos_pago;
/*---------------------------------*/
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


ALTER TABLE productos ADD COLUMN precio INT NOT NULL;

DELETE FROM productos WHERE id=11

UPDATE productos SET cantidad = cantidad + 1 WHERE id = 1

SELECT * FROM productos

/*UPDATE productos set fecha_vencimiento = '18-10-2021' WHERE id = 1 ;*/

SELECT * FROM productos p INNER JOIN categorias c ON p.fk_categoria = c.id

SELECT p.*,c.nombre_categoria AS 'categoria' FROM productos p INNER JOIN categorias c 
ON p.fk_categoria = c.id

/*---------------------------------*/
CREATE TABLE pasillos(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	numero_pasillo INT(2) NOT NULL ,
	fk_categorias INT NOT NULL ,
	CONSTRAINT fk_categorias FOREIGN KEY (fk_categorias) REFERENCES categorias(id)
)ENGINE INNODB ;

INSERT INTO pasillos (numero_pasillo,fk_categorias) VALUES (1,1);
INSERT INTO pasillos (numero_pasillo,fk_categorias) VALUES (2,2);
INSERT INTO pasillos (numero_pasillo,fk_categorias) VALUES (3,3);
INSERT INTO pasillos (numero_pasillo,fk_categorias) VALUES (4,4);
INSERT INTO pasillos (numero_pasillo,fk_categorias) VALUES (5,5);
INSERT INTO pasillos (numero_pasillo,fk_categorias) VALUES (6,6);
INSERT INTO pasillos (numero_pasillo,fk_categorias) VALUES (7,7);
INSERT INTO pasillos (numero_pasillo,fk_categorias) VALUES (8,8);
INSERT INTO pasillos (numero_pasillo,fk_categorias) VALUES (9,9);
INSERT INTO pasillos (numero_pasillo,fk_categorias) VALUES (10,10);

SELECT * FROM pasillos

SELECT pa.numero_pasillo,c.nombre_categoria FROM pasillos pa INNER JOIN categorias c ON pa.fk_categorias = c.id;  

SELECT p.*,c.nombre_categoria,pa.numero_pasillo FROM productos p INNER JOIN categorias c
ON p.fk_categoria = c.id INNER JOIN pasillos pa ON p.fk_categoria = pa.id

/*---------Proceso de venta------------------------*/
CREATE TABLE ventas(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	fecha_venta VARCHAR(20)
)ENGINE INNODB;


INSERT INTO ventas (fecha_venta) VALUES (CURDATE());

SELECT * FROM ventas ORDER BY id DESC


CREATE TABLE operaciones (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	cod_comprobante VARCHAR(20) NOT NULL,  /*COP+DNI*/
	dni_cliente VARCHAR(8) NOT NULL,
	fecha_venta VARCHAR(20) NOT NULL ,
	monto_pagar INT NOT NULL ,
	fk_usuario INT NOT NULL ,
	fk_local INT NOT NULL ,
	fk_metodo_pago INT NOT NULL ,
	fk_venta INT NOT NULL,
	CONSTRAINT fk_usuario FOREIGN KEY (fk_usuario) REFERENCES usuarios(id),
	CONSTRAINT fk_local FOREIGN KEY (fk_local) REFERENCES locales(id),
	CONSTRAINT fk_metodo_pago FOREIGN KEY (fk_metodo_pago) REFERENCES metodos_pago(id),
	CONSTRAINT fk_venta FOREIGN KEY (fk_venta) REFERENCES ventas(id)
)ENGINE INNODB ;

SELECT * FROM operaciones;

INSERT INTO operaciones (dni_cliente,fecha_venta,monto_pagar,fk_usuario,fk_local,fk_metodo_pago,fk_venta) 
VALUES (75388728,CURDATE(),120,1,1,1,1)

CREATE TABLE detalle_ventas(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	cantidad INT NOT NULL ,
	fk_productos INT NOT NULL ,
	fk_ventas INT NOT NULL ,
	CONSTRAINT fk_productos FOREIGN KEY (fk_productos) REFERENCES productos(id),
	CONSTRAINT fk_ventas FOREIGN KEY (fk_ventas) REFERENCES ventas(id)
)ENGINE INNODB ;

INSERT INTO detalle_ventas (cantidad,fk_productos,fk_ventas) VALUES (2,1,1);
INSERT INTO detalle_ventas (cantidad,fk_productos,fk_ventas) VALUES (1,3,1);

SELECT *FROM detalle_ventas

SELECT p.lote,p.nombre_producto AS 'producto',p.precio,dv.cantidad,dv.id,v.* FROM detalle_ventas dv 
INNER JOIN productos p ON dv.fk_productos = p.id INNER JOIN ventas v ON  dv.fk_ventas = v.id 

/*sub total*/
SELECT SUM(p.precio) AS 'subtotal' FROM productos p INNER JOIN detalle_ventas dv ON p.id = dv.fk_productos 
WHERE dv.fk_ventas = 2

/*total*/
SELECT SUM(p.precio)+(SUM(p.precio)*0.18) FROM productos p INNER JOIN detalle_ventas dv ON p.id = dv.fk_productos 
WHERE dv.fk_ventas = 2

/*vista detallada de precios y productos*/
SELECT p.precio FROM productos p INNER JOIN detalle_ventas dv ON p.id = dv.fk_productos 
WHERE dv.fk_ventas = 2

SELECT SUM(precio) FROM productos

/*---------------------------------*/
/*tabla comprobantes para comprobantes de ventas y cambios */

SHOW TABLES 
DESCRIBE roles