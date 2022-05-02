USE desarrollo;
CREATE TABLE materias(
    id_materias int AUTO_INCREMENT UNIQUE,
    nom_materias varchar(20) NULL,
    cant_estudiantes_materia int NULL,
    PRIMARY KEY(id_materias)
);
CREATE TABLE pregunta_materia(
    id_pregunta int AUTO_INCREMENT UNIQUE,
    Pregunta_materia varchar(200) NULL,
    PRIMARY KEY(id_pregunta)
);
CREATE TABLE respuesta_pregunta_materia(
    id_respuesta int AUTO_INCREMENT UNIQUE,
    Respuesta_Pregunta varchar(200) NULL,
    PRIMARY KEY(id_respuesta)
);

ALTER TABLE pregunta_materia ADD id_materias int NOT NULL;
ALTER TABLE pregunta_materia ADD CONSTRAINT fk_MateriaPregun FOREIGN KEY(id_materias) 
REFERENCES materias(id_materias);

ALTER TABLE respuesta_pregunta_materia ADD id_pregunta int NOT NULL;
ALTER TABLE respuesta_pregunta_materia ADD CONSTRAINT fk_PregunRespue FOREIGN KEY(id_pregunta) 
REFERENCES pregunta_materia(id_pregunta);

CREATE TABLE usuario (
    id_usu int UNIQUE AUTO_INCREMENT,
    tipo_docu varchar(30),
    documen_usu int,
    nom_usu varchar (30) NULL,
    ape_usu varchar (30) NULL,
    tele_usu int NULL,
    email_usu varchar(50),
    PRIMARY KEY(id_usu)
);

ALTER TABLE pregunta_materia ADD id_usu int NOT NULL;
ALTER TABLE pregunta_materia ADD CONSTRAINT fk_usuariopregunta FOREIGN KEY(id_usu) 
REFERENCES usuario(id_usu);

ALTER TABLE respuesta_pregunta_materia ADD id_usu int NOT NULL;
ALTER TABLE respuesta_pregunta_materia ADD CONSTRAINT fk_usuariorespuesta FOREIGN KEY(id_usu) 
REFERENCES usuario(id_usu);


-- Usuarios de prueba
INSERT INTO usuario (tipo_docu, documen_usu, nom_usu,ape_usu,tele_usu,email_usu)
VALUES ('CC',1001203380,'Kenner','Ruiz',3208343970,'asddsa@sdaf.com');

INSERT into materias(nom_materias,cant_estudiantes_materia)VALUES('Matematicas','39');

INSERT INTO pregunta_materia(Pregunta_materia,id_usu,id_materia)VALUES('Hola que hacen',1,1);

INSERT into respuesta_pregunta_materia(Respuesta_Pregunta,id_pregunta,id_usu)VALUES('Bien y tu',1,1);