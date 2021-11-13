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

/*DELETE FROM productos WHERE id=11*/

/*UPDATE productos SET cantidad = cantidad + 1 WHERE id = 1*/

SELECT * FROM productos

/*UPDATE productos set fecha_vencimiento = '18-10-2021' WHERE id = 1 ;*/

SELECT * FROM productos p INNER JOIN categorias c ON p.fk_categoria = c.id

SELECT p.*,c.nombre_categoria AS 'categoria' FROM productos p INNER JOIN categorias c 
ON p.fk_categoria = c.id ORDER BY p.cantidad ASC

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
INNER JOIN productos p ON dv.fk_productos = p.id INNER JOIN ventas v ON  dv.fk_ventas = v.id WHERE v.id =3

/*Actualizacion de estock despues de venta*/
UPDATE productos p INNER JOIN detalle_ventas dv ON dv.fk_productos = p.id 
SET p.cantidad = p.cantidad - dv.cantidad WHERE dv.fk_ventas = 6 ; 

/*sub total*/
SELECT SUM(p.precio*dv.cantidad) AS 'subtotal' FROM productos p INNER JOIN detalle_ventas dv ON p.id = dv.fk_productos 
WHERE dv.fk_ventas = 4

/*total*/
SELECT SUM(p.precio*dv.cantidad)+(SUM(p.precio*dv.cantidad)*0.18) as 'total' FROM productos p INNER JOIN detalle_ventas dv ON p.id = dv.fk_productos 
WHERE dv.fk_ventas = 4

/*vista detallada de precios y productos*/
SELECT p.precio,dv.cantidad FROM productos p INNER JOIN detalle_ventas dv ON p.id = dv.fk_productos 
WHERE dv.fk_ventas = 4

SELECT SUM(precio) FROM productos

CREATE TABLE operaciones (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	comp_pago VARCHAR(20) NOT NULL,  /*comprobante de venta : CV+DNI*/
	dni_cliente VARCHAR(8) NOT NULL,
	correo_cliente VARCHAR (100) NOT NULL, /*correo de cliente de envio de boleta de pago*/
	fecha_venta VARCHAR(20) NOT NULL ,
	monto_pagar INT NOT NULL ,
	num_tarjeta VARCHAR(20) ,
	metodo VARCHAR(20) ,
	num_cuotas INT  ,
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
/*DROP TABLE operaciones*/

INSERT INTO operaciones (comp_pago,dni_cliente,correo_cliente,fecha_venta,monto_pagar,num_tarjeta,metodo,num_cuotas,fk_usuario,fk_local,fk_metodo_pago,fk_venta) 
VALUES ('CV75388728',75388728,'correo@mail.com',CURDATE(),120,0,0,0,2,1,1,1)

/*---------------------------------*/
/*Ordenes de  Devoluciones*/

CREATE TABLE devoluciones(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	num_comp VARCHAR (20) NOT NULL,
	monto_dev INT NOT NULL ,
	fecha_dev VARCHAR(20) NOT NULL ,
	motivo_dev VARCHAR (100) ,
	cod_comp_dev VARCHAR(20) NOT NULL ,
	fk_usuario_c INT NOT NULL , 
	CONSTRAINT fk_usuario_c FOREIGN KEY (fk_usuario_c) REFERENCES usuarios(id)
)ENGINE INNODB;

SELECT * FROM devoluciones

SELECT dv.*,u.uname AS 'cajero' FROM devoluciones dv INNER JOIN usuarios u ON dv.fk_usuario_c = u.id

/*vista detallada de devolucion*/
SELECT dv.*,u.uname AS 'cajero' FROM devoluciones dv INNER JOIN usuarios u ON dv.fk_usuario_c = u.id 
WHERE cod_comp_dev = 'ORD342603793'
/*----------------------------*/

INSERT INTO devoluciones (num_comp,monto_dev,fecha_dev,motivo_dev,cod_comp_dev,fk_usuario_c) 
VALUES ('ORD00001',CURDATE(),'no gusta producto','CV2127737705',1)

/*comprobantes comprobantes de ventas y cambios dentro de mismas tablas */

/*Exchange*/
CREATE TABLE if NOT EXISTS detalle_exchange(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	cantidad_c INT NOT NULL, 
	usuario VARCHAR (20) NOT NULL ,
	fk_producto_c INT NOT NULL ,
	CONSTRAINT fk_producto_c FOREIGN KEY (fk_producto_c) REFERENCES productos(id)
)ENGINE INNODB;

SELECT * FROM detalle_exchange

SELECT ex.id AS 'idcambio',ex.cantidad_c AS 'cant_cambio',ex.usuario,p.* FROM detalle_exchange ex 
INNER JOIN productos p ON ex.fk_producto_c = p.id WHERE ex.usuario = '75388728'

INSERT INTO detalle_exchange(cantidad_c,usuario,fk_producto_c)VALUES(2,'admin',3)

CREATE TABLE if NOT EXISTS generar_exchange(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	comp_v VARCHAR(20) NOT NULL ,
	comp_c VARCHAR (20) NOT NULL ,
	usuario VARCHAR (20) NOT NULL 
)ENGINE INNODB;

SELECT * FROM generar_exchange

INSERT INTO generar_exchange (comp_v,comp_c,usuario) VALUES ()

SELECT e.comp_v AS 'c_venta',comp_c AS 'c_cambio',e.usuario AS 'cajero',p.nombre_producto 
AS 'producto',d.cantidad_c AS 'cantidad_c' ,p.marca as 'marca',p.lote as 'lote',p.precio as 'precio'
 FROM generar_exchange e INNER JOIN detalle_exchange d ON e.usuario = d.usuario 
INNER JOIN productos p ON d.fk_producto_c = p.id WHERE e.comp_c = 'ODC441870183'


/*retiro producto*/
CREATE TABLE if NOT EXISTS abastecimiento(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	cantidad_r INT NOT NULL ,
	fecha_retiro VARCHAR(20)NOT NULL ,
	usuario_e INT NOT NULL ,
	estado_r VARCHAR (20) NOT NULL,
	fk_productos_r INT NOT NULL,
	CONSTRAINT fk_productos_r FOREIGN KEY (fk_productos_r) REFERENCES productos (id)
)ENGINE INNODB;

INSERT INTO abastecimiento(cantidad_r,fecha_retiro,usuario_e,estado_r,fk_productos_r)VALUES ();

SELECT * FROM abastecimiento

/*drop table abastecimiento*/

SELECT a.id AS 'idabastecimiento',a.*,p.*,c.* FROM abastecimiento a INNER JOIN productos p ON a.fk_productos_r = p.id INNER JOIN categorias c 
ON p.fk_categoria = c.id

/*------------- Resquest  -------------------*/
CREATE TABLE if NOT EXISTS codigo_request(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	codigo_rq VARCHAR(20) NOT NULL ,
	proveedor VARCHAR (50) NOT NULL ,
	fecha_rq VARCHAR (20) NOT NULL,
	estado_rq VARCHAR(20) NOT NULL 
)ENGINE INNODB;

SELECT * FROM codigo_request

CREATE TABLE if NOT EXISTS detalle_request(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	descripcion_p VARCHAR (20) NOT NULL ,
	marca_p VARCHAR (20) NOT NULL ,
	cantidad_p INT NOT NULL ,
	observaciones VARCHAR(100) NOT NULL ,
	fk_c_request INT NOT NULL ,
	CONSTRAINT fk_c_request FOREIGN KEY (fk_c_request) REFERENCES codigo_request(id)
)ENGINE INNODB;

SELECT * FROM detalle_request

CREATE TABLE if NOT EXISTS request(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	correo VARCHAR(50) NOT NULL ,
	fk_cd_request INT NOT NULL ,
	CONSTRAINT fk_cd_request FOREIGN KEY (fk_cd_request) REFERENCES codigo_request(id)
)ENGINE INNODB;


SELECT * FROM request
INSERT INTO request (correo,fk_cd_request) VALUES ('correo',1)

/*----cotizaciones-----*/
CREATE TABLE if NOT EXISTS cotizacion(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	fecha VARCHAR(20) NOT NULL ,
	provedor_c VARCHAR (20) NOT NULL,
	cod_cotizacion VARCHAR (20) NOT NULL UNIQUE  
)ENGINE INNODB;

SELECT * FROM cotizacion

CREATE TABLE if NOT EXISTS detalle_cotizacion(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	producto_c VARCHAR(20) NOT NULL ,
	marca_c VARCHAR(20) NOT NULL ,
	cantidad_c INT NOT NULL ,
	precio_c INT NOT NULL ,
	observaciones VARCHAR(50),
	fk_cotizacion INT NOT NULL ,
	CONSTRAINT fk_cotizacion FOREIGN KEY (fk_cotizacion) REFERENCES cotizacion(id) 
)ENGINE INNODB;

SELECT * FROM detalle_cotizacion

/*-------------facturas---------------*/
CREATE TABLE if NOT EXISTS facturas(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	archivo_nombre VARCHAR (200) NOT NULL ,
	archivo_ruta VARCHAR(200) NOT NULL ,
	numero_f VARCHAR(20) NOT NULL,
	fecha_pedido VARCHAR(20) NOT NULL ,
	proveedor VARCHAR(20) NOT NULL ,
	responsable VARCHAR(20) NOT NULL,
	observaciones VARCHAR(100)
)ENGINE INNODB;

SELECT * FROM facturas

SHOW TABLES 
DESCRIBE roles