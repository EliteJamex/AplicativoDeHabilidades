<?php
    class Respuestas
    {
        private $id_respuesta;
        private $Respuesta_Pregunta;
        private $idpregunta;
        private $numero;

        public function __construct($numero,$id_respuesta,$Respuesta_Pregunta,$idpregunta)
        {
            $this->id_respuesta = $id_respuesta;
            $this->Respuesta_Pregunta = $Respuesta_Pregunta;
            $this->idpregunta = $idpregunta;
            $this->numero = $numero;

        }

        public static function InsertarComentario($Comentario,$numerousu,$id_pregunta)
        {
            $respuesta = EjecucionQuery("INSERT INTO respuesta_pregunta_materia (Respuesta_Pregunta,numero,id_pregunta) VALUES ('$Comentario','$numerousu',$id_pregunta)");
        }

        public static function ConsultarRespuesta($id_pregunta)
        {
            $respuesta = EjecucionQuery("SELECT * FROM respuesta_pregunta_materia where id_pregunta = $id_pregunta");
            return $respuesta;
        }

        public static function ConsultarUsuarioPorIdRespuesta($idrespuesta)
        {
            $respuesta = EjecucionQuery("SELECT R.usuario as 'registro' FROM registro R JOIN respuesta_pregunta_materia RPM on RPM.numero = R.numero where RPM.id_respuesta = $idrespuesta");
            return $respuesta;
        }
    }

    
?>