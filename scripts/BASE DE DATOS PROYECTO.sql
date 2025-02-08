CREATE DATABASE Tienda;  
USE Tienda; 

CREATE TABLE clientes (
id_cliente int AUTO_INCREMENT PRIMARY KEY,
nombre  VARCHAR(50) NOT NULL, 
apellido VARCHAR(50) NOT NULL, 
numero_telefono int NOT NULL, 
correo_electronico VARCHAR (50)
);  


CREATE TABLE inventario(
id_articulo int AUTO_INCREMENT PRIMARY KEY,
descripcion_articulo VARCHAR(100) NOT NULL,
MARCA VARCHAR (50) NOT NULL,  
MODELO VARCHAR(50) NOT NULL,  
UNIDADES INT NOT NULL
); 

CREATE TABLE ventas ( 
consecutivo int AUTO_INCREMENT PRIMARY KEY,
id_cliente int NOT NULL,
id_articulo int NOT NULL,  
monto decimal (10,2) NOT NULL,  
fecha DATE NOT NULL, 
FOREIGN KEY (id_cliente) REFERENCES clientes (id_cliente),
FOREIGN KEY (id_articulo) REFERENCES inventario (id_articulo)
);   