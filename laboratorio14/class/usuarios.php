<?php

    require_once('./db_models.php');

    class usuarios extends modelsCredentials{
        public function __construct()
        {
            parent::__construct();
        }
        public function validar_usuario($usr,$pwd){
            $instruccion = "CALL sp_validar_usuario ('".$usr."'m'".$pwd."')";

            $consulta = $this->_db->query($instruccion);
            $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

            if($resultado){
                return $resultado;
                $consulta->close();
                $this->_db->close();
            }

        }
    }
?>