<?php
include_once("../Conexion/conexionK.php");
    class Preguntas
    {
        private $id_pregunta;
        private $Pregunta_materia;
        private $numero;
        private $id_materias;
        public function __construct($id_pregunta,$Pregunta_materia,$numero,$id_materias)
        {
            $this->id_pregunta = $id_pregunta;
            $this->Pregunta_materia = $Pregunta_materia;
            $this->numero = $numero;
            $this->id_materias = $id_materias;
        }
        public static function SelectPreguntas($id_materias)
        {
            $respuesta = EjecucionQuery("SELECT * FROM pregunta_materia where id_materias = $id_materias");
            return $respuesta;
        }
        public static function SelectTodasPreguntas()
        {
            $respuesta = EjecucionQuery("SELECT * FROM pregunta_materia");
            return $respuesta;
        }
    }
?>