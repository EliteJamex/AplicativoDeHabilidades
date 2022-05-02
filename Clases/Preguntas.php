<?php
include_once("Conexion/conexion.php");
    class Preguntas
    {
        private $id_pregunta;
        private $Pregunta_materia;
        private $id_usu;
        private $id_materias;
        public function __construct($id_pregunta,$Pregunta_materia,$id_usu,$id_materias)
        {
            $this->id_pregunta = $id_pregunta;
            $this->Pregunta_materia = $Pregunta_materia;
            $this->id_usu = $id_usu;
            $this->id_materias = $id_materias;
        }
        public static function SelectPreguntas($id_materias)
        {
            $respuesta = EjecucionQuery("SELECT * FROM pregunta_materia where id_materias = $id_materias");
            return $respuesta;
        }
    }
?>