<?php
    require_once('modelo.php');
    class noticia extends modelsCredentials{
        protected $titulo;
        protected $texto;
        protected $fecha;
        protected $categoria;
        protected $imagen;

        public function __construct()
        {
            parent::__construct();
        }

        public function consultar_noticias(){
            $instruccion = "CALL sp_listar_noticias()";
            $consulta=$this->_db->query($instruccion);
            $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

            if(!$resultado){
                echo "Fallo al consultar noticias";
            }
            else{
                return $resultado;
                $consulta->close();
                $this->_db->close();

            }
        }
    }

?>