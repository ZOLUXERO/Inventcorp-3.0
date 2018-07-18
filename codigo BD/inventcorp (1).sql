CREATE DATABASE inventcorp;

use inventcorp;

CREATE TABLE usuarios(
documento INT(11) NOT NULL,
email_usuario VARCHAR(50) NOT NULL,
primer_nombre VARCHAR(50) NOT NULL,
segundo_nombre VARCHAR(50) NOT NULL,
primer_apellido VARCHAR(50) NOT NULL,
segundo_apellido VARCHAR(50) NOT NULL,
contrasena VARCHAR(255) NOT NULL,
telefono INT(20) NOT NULL,
estado_usuario BOOLEAN NOT NULL,
tipo_documento VARCHAR(2)NOT NULL,
id_rol INT(11) NOT NULL
)ENGINE= INNODB;

CREATE TABLE rol(
id_rol INT(11) NOT NULL,
desc_rol VARCHAR(50) NOT NULL
)ENGINE= INNODB;

CREATE TABLE rol_para_listar(
id_rol_listar INT(11)NOT NULL,
desc_rol_listar VARCHAR(50)NOT NULL
)ENGINE= INNODB;

CREATE TABLE categorias(
id_categoria INT(11) NOT NULL,
nombre_categoria VARCHAR(50) NOT NULL,
estado_categoria BOOLEAN NOT NULL
)ENGINE= INNODB;

CREATE TABLE stock(
cantidad_ingreso INT(11) NOT NULL,
cantidad_salida INT(11) NOT NULL,
fecha DATE NOT NULL,
codigo_producto VARCHAR(50) NOT NULL
)ENGINE= INNODB;

CREATE TABLE tipo_de_documento(
tipo_documento VARCHAR(2) NOT NULL,
desc_documento VARCHAR(50) NOT NULL
)ENGINE= INNODB;

CREATE TABLE productos(
codigo_producto VARCHAR(50) NOT NULL,
nombre_producto VARCHAR(50) NOT NULL,
desc_producto VARCHAR(50) NOT NULL,
precio_entrada VARCHAR(50) NOT NULL,
precio_salida VARCHAR(50) NOT NULL,
fecha_ingreso DATE NOT NULL,
estado_producto BOOLEAN NOT NULL,
id_categoria INT(11)
)ENGINE= INNODB;

CREATE TABLE listar_clientes_proveedores(
codigo_proveedor_cliente VARCHAR(50) NOT NULL,
primer_nombre_provee_clie VARCHAR(50) NOT NULL,
segundo_nombre_provee_clie VARCHAR(50) NOT NULL,
primer_apellido_provee_clie VARCHAR(50) NOT NULL,
segundo_apellido_provee_clie VARCHAR(50) NOT NULL,
email_proveedor_cliente VARCHAR(50) NOT NULL,
telefono_proveedor_cliente VARCHAR(50) NOT NULL,
estado_proveedor_cliente BOOLEAN NOT NULL,
id_rol_listar int(11) NOT NULL
)ENGINE= INNODB;


CREATE TABLE observaciones(
id_observacion INT(11) NOT NULL,
usuario_observacion VARCHAR(50) NOT NULL,
desc_obeservacion TEXT NOT NULL,
fecha_observacion DATE NOT NULL
)ENGINE= INNODB;



ALTER TABLE usuarios ADD PRIMARY KEY(documento); 
ALTER TABLE rol ADD PRIMARY KEY(id_rol); 
ALTER TABLE rol_para_listar ADD PRIMARY KEY(id_rol_listar); 
ALTER TABLE categorias ADD PRIMARY KEY(id_categoria); 
ALTER TABLE tipo_de_documento ADD PRIMARY KEY(tipo_documento); 
ALTER TABLE productos ADD PRIMARY KEY(codigo_producto); 
ALTER TABLE listar_clientes_proveedores ADD PRIMARY KEY(codigo_proveedor_cliente); 
ALTER TABLE observaciones ADD PRIMARY KEY(id_observacion); 


ALTER TABLE observaciones MODIFY COLUMN id_observacion INT NOT NULL AUTO_INCREMENT;




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
	FOREIGN KEY (id_rol_listar) 
	REFERENCES rol_para_listar(id_rol_listar)
 	ON DELETE CASCADE 
 	ON UPDATE CASCADE;