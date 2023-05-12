CREATE DATABASE mascotienda;

USE mascotienda;

CREATE TABLE usuarios (
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(50) NOT NULL,
  usuario VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

CREATE TABLE clientes (
  id INT NOT NULL AUTO_INCREMENT,
  nombre_completo VARCHAR(100) NOT NULL,
  usuario VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  direccion_id INT NOT NULL,
  fecha_nacimiento DATE NOT NULL,
  creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  FOREIGN KEY (direccion_id) REFERENCES direcciones(id)
);

CREATE TABLE direcciones (
  id INT NOT NULL AUTO_INCREMENT,
  direccion VARCHAR(255) NOT NULL,
  ciudad VARCHAR(50) NOT NULL,
  pais VARCHAR(50) NOT NULL,
  creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);