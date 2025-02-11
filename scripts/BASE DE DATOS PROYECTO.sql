CREATE DATABASE IF NOT EXISTS tienda 
    CHARACTER SET utf8mb4 
    COLLATE utf8mb4_spanish_ci;

USE tienda;

CREATE TABLE clientes (
    id int AUTO_INCREMENT PRIMARY KEY,
    nombre  VARCHAR(50) NOT NULL, 
    apellido1 VARCHAR(50) NOT NULL, 
    apellido2 VARCHAR(50),
    telefono VARCHAR(12) NOT NULL,
    email VARCHAR (50),
    registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
) ENGINE=InnoDB;

CREATE TABLE inventario (
    id int AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(25) NOT NULL
    descripcion VARCHAR(255) NOT NULL,
    MARCA VARCHAR (50) NOT NULL,  
    MODELO VARCHAR(50) NOT NULL,  
    precio decimal(10,2) NOT NULL,
    in_stock int NOT NULL,
); ENGINE=InnoDB;

CREATE TABLE ventas ( 
    id int AUTO_INCREMENT PRIMARY KEY,
    id_cliente int NOT NULL,
    id_articulo int NOT NULL, 
    Unidades INT NOT NULL
    total decimal (10,2) NOT NULL,  
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_cliente) REFERENCES clientes (id),
    FOREIGN KEY (id_articulo) REFERENCES inventario (id)
) ENGINE=InnoDB;

-- Insertar registros en clientes
INSERT INTO clientes (nombre, apellido1, apellido2, telefono, email) VALUES
('Juan', 'Pérez', 'González', '123456789', 'juanperez@email.com'),
('Ana', 'Gómez', 'Ruiz', '987654321', 'anagomez@email.com'),
('Carlos', 'Martínez', 'Sánchez', '555123456', 'carlosm@email.com'),
('Lucía', 'López', 'Vázquez', '666987654', 'lucialopez@email.com'),
('Miguel', 'Díaz', 'Fernández', '777654321', 'migueldiaz@email.com'),
('Laura', 'Sánchez', 'Moreno', '888321654', 'laurasanchez@email.com'),
('Pedro', 'Hernández', 'Jiménez', '999123789', 'pedrohernandez@email.com'),
('Raquel', 'García', 'Fernández', '444987654', 'raquelgarcia@email.com'),
('Javier', 'Rodríguez', 'Torres', '555789123', 'javierrodriguez@email.com'),
('Marta', 'Vega', 'Serrano', '222345678', 'martavega@email.com');

-- Insertar registros en inventario
INSERT INTO inventario (nombre, descripcion, marca, modelo, precio, in_stock) VALUES
('Laptop', 'Laptop de 15 pulgadas con 8GB de RAM', 'Dell', 'Inspiron 15', 799.99, 20),
('Celular', 'Smartphone con cámara de 12MP', 'Samsung', 'Galaxy S21', 999.99, 50),
('Televisor', 'Televisor LED 55 pulgadas', 'LG', 'OLED55CX', 1499.99, 10),
('Audífonos', 'Audífonos inalámbricos', 'Sony', 'WH-1000XM4', 349.99, 30),
('Tablet', 'Tablet de 10 pulgadas', 'Apple', 'iPad Air', 599.99, 15),
('Smartwatch', 'Reloj inteligente con monitoreo de salud', 'Garmin', 'Forerunner 45', 199.99, 25),
('Teclado', 'Teclado mecánico RGB', 'Razer', 'BlackWidow V3', 129.99, 40),
('Mouse', 'Mouse ergonómico inalámbrico', 'Logitech', 'MX Master 3', 99.99, 35),
('Cámara', 'Cámara digital 4K', 'Canon', 'EOS M50', 749.99, 5),
('Router', 'Router WiFi 6 de alta velocidad', 'TP-Link', 'Archer AX6000', 219.99, 12);

-- Insertar registros en ventas
INSERT INTO ventas (id_cliente, id_articulo, unidades, total) VALUES
(1, 1, 1, 799.99),
(2, 2, 2, 1999.98),
(3, 3, 1, 1499.99),
(4, 4, 3, 1049.97),
(5, 5, 1, 599.99),
(6, 6, 1, 199.99),
(7, 7, 2, 259.98),
(8, 8, 1, 99.99),
(9, 9, 1, 749.99),
(10, 10, 1, 219.99);

-- Eliminar un cliente con id = 1
DELETE FROM clientes WHERE id = 1;

-- Eliminar un producto del inventario con id = 2
DELETE FROM inventario WHERE id = 2;

-- Actualizar el teléfono de un cliente con id = 2
UPDATE clientes 
SET telefono = '123123123' 
WHERE id = 2;

-- Actualizar el precio de un producto con id = 3
UPDATE inventario 
SET precio = 1399.99 
WHERE id = 3;

-- Obtener la cantidad vendida de prendas por fecha y filtrada con una fecha específica
SELECT 
    v.id_articulo, 
    SUM(v.unidades) AS cantidad_vendida 
FROM ventas v
WHERE DATE(v.fecha) = '2025-02-01'
GROUP BY v.id_articulo;

-- Obtener la lista de todas las marcas que tienen al menos una venta
SELECT DISTINCT i.marca 
FROM ventas v
JOIN inventario i ON v.id_articulo = i.id;


