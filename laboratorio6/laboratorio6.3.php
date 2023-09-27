<?php
// herencia y modificadores de acceso
class soporte{
    public $titulo;
    protected $numero;
    private $precio;

    function __construct($tit,$num,$precio)
    {
        $this->titulo = $tit;
        $this->numero = $num;
        $this->precio = $precio;
        echo"hola";
    }

    public function dame_precio_sin_itbm(){
        return $this->precio;
    }

    public function dame_precio_con_itbm(){
        return $this->precio*0.07;
    }
    public function numero_identificacion(){
        return $this->numero;
    }
    public function imprime_caracteristicas(){
        echo "<br>".$this->titulo;
        echo "<br>".$this->precio. "(ITBM no incluido)";
    }

}

?>