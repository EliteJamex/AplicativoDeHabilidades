-- Base de datos: `desarrollo`

	CREATE DATABASE desarrollo;
--
USE desarrollo;
--
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--
CREATE TABLE documento (
  id_tipo int AUTO_INCREMENT NOT NULL PRIMARY KEY,
  descripcion varchar(20) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE registro (
  id_tipo int NOT NULL,
  numero varchar(20) PRIMARY KEY NOT NULL,
  usuario varchar(20) NOT NULL,
  apellido varchar(20) NOT NULL,
  id_semestre int NOT NULL,
  telefono varchar(20) NOT NULL,
  correo varchar(30) NOT NULL,
  password varchar(20) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--
CREATE TABLE semestre (
  id_semestre int AUTO_INCREMENT NOT NULL PRIMARY KEY,
  descripcion varchar(20) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE materias(
    id_materias int AUTO_INCREMENT UNIQUE,
    nom_materias varchar(20) NULL,
    cant_estudiantes_materia int NULL,
    PRIMARY KEY(id_materias)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE pregunta_materia(
    id_pregunta int AUTO_INCREMENT UNIQUE,
    Pregunta_materia varchar(200) NULL,
    PRIMARY KEY(id_pregunta)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE respuesta_pregunta_materia(
    id_respuesta int AUTO_INCREMENT UNIQUE,
    Respuesta_Pregunta varchar(200) NULL,
    PRIMARY KEY(id_respuesta)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `registro` ADD CONSTRAINT fk_registrodocumento FOREIGN KEY(id_tipo) 
REFERENCES `documento`(id_tipo);

ALTER TABLE `registro` ADD CONSTRAINT fk_registrosemestre FOREIGN KEY(id_semestre) 
REFERENCES `semestre`(id_semestre);

ALTER TABLE pregunta_materia ADD id_materias int NOT NULL;
ALTER TABLE pregunta_materia ADD CONSTRAINT fk_MateriaPregun FOREIGN KEY(id_materias) 
REFERENCES materias(id_materias);

ALTER TABLE respuesta_pregunta_materia ADD id_pregunta int NOT NULL;
ALTER TABLE respuesta_pregunta_materia ADD CONSTRAINT fk_PregunRespue FOREIGN KEY(id_pregunta) 
REFERENCES pregunta_materia(id_pregunta);

ALTER TABLE pregunta_materia ADD numero varchar(20) NOT NULL;
ALTER TABLE pregunta_materia ADD CONSTRAINT fk_registropregunta FOREIGN KEY(numero) 
REFERENCES registro(numero);

ALTER TABLE respuesta_pregunta_materia ADD numero varchar(20) NOT NULL;
ALTER TABLE respuesta_pregunta_materia ADD CONSTRAINT fk_usuariorespuesta FOREIGN KEY(numero) 
REFERENCES registro(numero);


INSERT INTO `documento` (`descripcion`) VALUES
('Cedula'),
('Pasaporte'),
('Tarjeta de Identidad');
--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_tipo`, `numero`, `usuario`, `apellido`, `id_semestre`, `telefono`, `correo`, `password`) VALUES
(1, '0', 'Administrador', 'UCC', 1, '5895968', 'administrador@ucc.com.co', 'administradorucc'),
(3, '1997896452', 'Mariana Alejandra', 'Pinzon Restrepo', 2, '3125986741', 'mariana.pinzon@ucc.com', '12345'),
(2, 'ZAB00524', 'Juan Carlos', 'Perez Cardozo', 10, '3115986778', 'carlos.p@ucc.com.co', '47474');

--
-- Volcado de datos para la tabla `semestre`
--

INSERT INTO `semestre` (`descripcion`) VALUES
('Primero'),
('Segundo'),
('Tercero'),
('Cuarto'),
('Quinto'),
('Sexto'),
('Septimo'),
('Octavo'),
('Noveno'),
('Decimo');

INSERT INTO materias (nom_materias,cant_estudiantes_materia) VALUES
('Español',21);

INSERT INTO pregunta_materia (Pregunta_materia,id_materias,numero) VALUES
('Pregunta 1',1,'1997896452');

INSERT INTO respuesta_pregunta_materia(Respuesta_Pregunta,id_pregunta,numero) VALUES
('Respuesta 1',1,'1997896452'),
('Respuesta 2',1,'ZAB00524');