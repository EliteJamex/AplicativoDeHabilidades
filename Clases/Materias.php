<?php
include_once("Conexion/conexion.php");
    class MateriaS
    {
        private $id_materias;
        private $NomMateria;
        private $CantEstudi;
        public function __construct($id_materias,$NomMateria,$CantEstudi)
        {
            $this->id_materias = $id_materias;
            $this->NomMateria = $NomMateria;
            $this->NomMateria = $CantEstudi;
        }
        public static function SelecMaterias()
        {
            $respuesta = EjecucionQuery("SELECT * FROM materias");
            return $respuesta;
        }
    }
?>