<?php
require_once('modelo.php');

class votos extends  modeloCredencialesBD{
    
    public function __construct(){
        parent::__construct();
    }

    public function listar_votos_candidatos(){
        $instruccion = "CALL sp_listar_votos()";

        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if(!$resultado){
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
        
    }
    public function actualizar_votos($voto1,$votos2){
        $instruccion = "CALL sp_actualizar_votos_candidatos('".$voto1."','".$votos2."')";
        $actualizar  = $this->_db->query($instruccion);

        if(!$actualizar){
            return $actualizar;
            $actualizar->close();
            $this->_db->close();
        }
        
    }

}

?>