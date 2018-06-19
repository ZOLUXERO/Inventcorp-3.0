CREATE DATABASE inventcorp;

use inventcorp;

CREATE TABLE usuarios(
cedula INT(11) NOT NULL,
email_usuario VARCHAR(50) NOT NULL,
nombre_usuario VARCHAR(50) NOT NULL,
contrasena VARCHAR(255) NOT NULL,
telefono INT(20) NOT NULL,
estado_usuario BOOLEAN NOT NULL,
id_rol INT(11) NOT NULL
)ENGINE= INNODB;

CREATE TABLE rol(
id_rol INT(11) NOT NULL,
desc_rol VARCHAR(50) NOT NULL
)ENGINE= INNODB;

CREATE TABLE categorias(
id_categoria INT(11) NOT NULL,
nombre_categoria VARCHAR(50) NOT NULL,
estado_categoria BOOLEAN NOT NULL
)ENGINE= INNODB;



CREATE TABLE productos(
id_producto INT(11) NOT NULL,
nombre_producto VARCHAR(50) NOT NULL,
desc_producto VARCHAR(50) NOT NULL,
cantidad INT(11) NOT NULL,
precio_entrada VARCHAR(50) NOT NULL,
precio_salida VARCHAR(50) NOT NULL,
fecha_ingreso DATE NOT NULL,
estado_producto BOOLEAN NOT NULL,
id_categoria INT(11)
)ENGINE= INNODB;

CREATE TABLE listar_clientes_proveedores(
id_proveedor_cliente INT(11) NOT NULL,
nombre_proveedor_cliente VARCHAR(50) NOT NULL,
email_proveedor_cliente VARCHAR(50) NOT NULL,
telefono_proveedor_cliente VARCHAR(50) NOT NULL,
estado_proveedor_cliente BOOLEAN NOT NULL,
id_rol_proveedor_cliente int(11) NOT NULL
)ENGINE= INNODB;


CREATE TABLE observaciones(
id_observacion INT(11) NOT NULL,
usuario_observacion VARCHAR(50) NOT NULL,
desc_obeservacion TEXT NOT NULL,
fecha_observacion DATE NOT NULL
)ENGINE= INNODB;

ALTER TABLE usuarios ADD PRIMARY KEY(cedula); 
ALTER TABLE rol ADD PRIMARY KEY(id_rol); 
ALTER TABLE categorias ADD PRIMARY KEY(id_categoria); 
ALTER TABLE productos ADD PRIMARY KEY(id_producto); 
ALTER TABLE listar_clientes_proveedores ADD PRIMARY KEY(id_proveedor_cliente); 
ALTER TABLE observaciones ADD PRIMARY KEY(id_observacion); 


ALTER TABLE observaciones MODIFY COLUMN id_observacion INT NOT NULL AUTO_INCREMENT;
ALTER TABLE categorias MODIFY COLUMN id_categoria INT NOT NULL AUTO_INCREMENT;
ALTER TABLE listar_clientes_proveedores MODIFY COLUMN id_proveedor_cliente INT NOT NULL AUTO_INCREMENT;
ALTER TABLE usuarios MODIFY COLUMN cedula INT NOT NULL AUTO_INCREMENT;
ALTER TABLE productos MODIFY COLUMN id_producto INT NOT NULL AUTO_INCREMENT;


ALTER TABLE usuarios
ADD CONSTRAINT fk_clientes_rol
	FOREIGN KEY (id_rol) 
	REFERENCES rol(id_rol)
 	ON DELETE CASCADE 
 	ON UPDATE CASCADE;

ALTER TABLE productos
ADD CONSTRAINT fk_idcategoria
	FOREIGN KEY (id_categoria) 
	REFERENCES categorias(id_categoria)
 	ON DELETE CASCADE 
 	ON UPDATE CASCADE;

ALTER TABLE listar_clientes_proveedores
ADD CONSTRAINT fk_clientes_rol_listar
	FOREIGN KEY (id_rol_proveedor_cliente) 
	REFERENCES rol(id_rol)
 	ON DELETE CASCADE 
 	ON UPDATE CASCADE;