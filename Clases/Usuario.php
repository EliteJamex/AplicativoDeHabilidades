<?php
    include("Conexion/conexion.php");
    class Usuario
    {
        private $id_usu;
        private $tipo_docu;
        private $documen_usu;
        private $nom_usu;
        private $ape_usu;
        private $tele_usu;
        private $email_usu;

        public function __construct($id_usu,$tipo_docu,$email_usu,$documen_usu,$nom_usu,$ape_usu,$tele_usu)
        {
            $this->id_usu = $id_usu;
            $this->tipo_docu = $tipo_docu;
            $this->documen_usu = $documen_usu;
            $this->nom_usu = $nom_usu;
            $this->ape_usu = $ape_usu;
            $this->tele_usu = $tele_usu;
            $this->email_usu = $email_usu;
        }
        public static function a()
        {
            
        }
?>
