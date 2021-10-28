CREATE DATABASE diars;
USE diars;

/*tabla de usuarios y roles  de inicia de sesion*/

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
CREATE TABLE productos(
id INT(3) NOT NULL AUTO_INCREMENT PRIMARY,
pdescripcion VARCHAR(100) NOT NULL,

)ENGINE INNODB ;

CREATE TABLE ventas(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	fk_productos INT 
) ENGINE INNODB ;

SHOW TABLES 
DESCRIBE roles