-- Base de datos: proteccion_animal

CREATE TABLE usuario (
  nickname VARCHAR(30) NOT NULL,
  password INT NOT NULL,
  nombre VARCHAR(30) NOT NULL,
  direccion VARCHAR(30) NOT NULL,
  telefono VARCHAR(10) NOT NULL,
  ciudad VARCHAR(30) NOT NULL,
  tipoUsuario VARCHAR(30) NOT NULL,
  PRIMARY KEY(nickname)
);

CREATE TABLE animal (
  tipoAnimal INT NOT NULL AUTO_INCREMENT,
  descripcion VARCHAR(100) NOT NULL,
  PRIMARY KEY(tipoAnimal)
);

CREATE TABLE adopcion (
  idAdopcion INT NOT NULL AUTO_INCREMENT,
  tipoAnimal INT NOT NULL,
  nombre VARCHAR(50) NOT NULL,  
  genero VARCHAR(10) NOT NULL,
  color VARCHAR(15) NOT NULL,
  raza VARCHAR(30) NOT NULL,
  tamano VARCHAR(10) NOT NULL,
  edad VARCHAR (20) NOT NULL,
  descripcion VARCHAR(140) NOT NULL,
  contacto VARCHAR(50) NOT NULL,
  foto MEDIUMBLOB NOT NULL,
  PRIMARY KEY(idAdopcion),
  FOREIGN KEY(tipoAnimal) REFERENCES animal(tipoAnimal)
);

CREATE TABLE extraviado (
  idExtraviado INT NOT NULL AUTO_INCREMENT,
  tipoAnimal INT NOT NULL,
  lugarExtraviado VARCHAR(50) NOT NULL,
  nombre VARCHAR(50) NOT NULL,  
  genero VARCHAR(10) NOT NULL,
  color VARCHAR(15) NOT NULL,
  raza VARCHAR(30) NOT NULL,
  tamano VARCHAR(10) NOT NULL,
  edad VARCHAR (20) NOT NULL,
  descripcion VARCHAR(140) NOT NULL,
  contacto VARCHAR(50) NOT NULL,
  foto MEDIUMBLOB NOT NULL,
  PRIMARY KEY(idExtraviado),
  FOREIGN KEY(tipoAnimal) REFERENCES animal(tipoAnimal)
);

CREATE TABLE denuncia(
  idDenuncia INT NOT NULL AUTO_INCREMENT,
  idUsuario VARCHAR(30) NOT NULL,
  ubicacion VARCHAR(60) NOT NULL,
  descripcion VARCHAR(250) NOT NULL,
  anexo VARCHAR(100) NOT NULL,
  PRIMARY KEY(idDenuncia),
  FOREIGN KEY(idUsuario) REFERENCES usuario(nickname)
);

CREATE TABLE anuncio(
  idAnuncio INT NOT NULL AUTO_INCREMENT,
  idUsuario VARCHAR(30) NOT NULL,
  titulo VARCHAR(50) NOT NULL,
  descripcion VARCHAR(250) NOT NULL,
  fechaEvento DATE NOT NULL,
  foto MEDIUMBLOB NOT NULL,
  PRIMARY KEY(idAnuncio),
  FOREIGN KEY(idUsuario) REFERENCES usuario(nickname)
);

INSERT INTO animal
  VALUES (NULL, 'Canino'),
         (NULL, 'Felino'),
         (NULL, 'Equino'),
         (NULL, 'Ave'),
         (NULL, 'Roedor'),
         (NULL, 'Reptil');