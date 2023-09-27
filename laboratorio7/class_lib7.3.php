<?php
// 7.1
class MiClase{
    const constante = "valor constante";
    function mostrarConstante(){
        echo self::constante ."\n";
    }
}
// 7.2
abstract class ClaseAbstracta{
    abstract protected function tomarValor();
    abstract protected function prefixValor($prefix);

    public function printOut(){
        print $this->tomarValor(). "<br>";
    }
}

class ClaseConcreta1 extends ClaseAbstracta{
    
    protected function tomarValor(){
        return "ClaseConcreta1";
    }

    protected function prefixValor($prefix){
        return "($prefix)ClaseConcreta1";
    }

}
// 7.2.1
class ClaseConcreta2 extends ClaseAbstracta{
    protected function tomarValor(){
        return "ClaseConcreta2";
    }
    public function prefixValor($prefix){
        return "($prefix)ClaseConcreta2";
    }
}

// 7.3
interface iTemplate{
    public function ponerVariable($nombre, $var);
    public function verHtml($template);
}

class Template implements iTemplate{
    private $vars = array();

    public function ponerVariable($nombre,$var){
        $this->vars[$nombre] = $var;
    }
    public function verHtml($Template){
        foreach($this->vars as $nombre  =>$value){
            $template = str_replace('{'.$nombre.'}', $value, $template);
        }
        return $template;
    }
}

?>