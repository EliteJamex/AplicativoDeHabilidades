<?php
    class Respuestas
    {
        private $id_respuesta;
        private $Respuesta_Pregunta;
        private $idpregunta;

        public function __construct($id_respuesta,$Respuesta_Pregunta,$idpregunta)
        {
            $this->id_respuesta = $id_respuesta;
            $this->Respuesta_Pregunta = $Respuesta_Pregunta;
            $this->idpregunta = $idpregunta;
        }

        public static function ConsultarRespuesta($id_pregunta)
        {
            $respuesta = EjecucionQuery("SELECT * FROM respuesta_pregunta_materia where id_pregunta = $id_pregunta");
            return $respuesta;
        }

        public static function ConsultarUsuarioPorIdRespuesta($id_usu)
        {
            $respuesta = EjecucionQuery("SELECT U.nom_usu as 'Usuario' FROM usuario U JOIN respuesta_pregunta_materia RPM on RPM.id_usu = U.id_usu where U.id_usu = $id_usu");
            return $respuesta;
        }
    }

    
?>