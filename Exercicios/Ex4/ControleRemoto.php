<?php
include_once "Controlador.php";
class ControleRemoto implements Controlador{

    private $volume;
    private $ligado;
    private $tocando;

    public function __construct(){
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);

    }
    private function getVolume(){
        return $this->volume;
    }
    private function getLigado(){
        return $this->ligado;
    }
    private function getTocando(){
        return $this->tocando;
    }
    private function setVolume($v){
        $this->volume = $v;
    }
    private function setLigado($l){
        $this->ligado = $l;
    }
    private function setTocando($t){
        $this->tocando = $t;
    }

    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);
    }
    public function abrirMenu(){
        echo "está ligado?<br>". ($this->getLigado()?"sim":"não");
        echo "<br>está tocando?<br>". ($this->getTocando()?"sim":"não");
        echo "<br>Volume:". $this->getVolume();
        echo "<br>";
        for($i = 0; $i <= $this->getVolume(); $i++){
            echo "|";
        }

    }
    public function fecharMenu(){
        echo"fechar menu <br>";
    }
    public function aumentarVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 1);
        }
    }
    public function diminuirVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 1);
        }
    }
    public function ligarMudo(){
        if($this->getLigado() and $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo(){
        if($this->getLigado() and $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }
    public function play(){
        if($this->getLigado() and !($this->getTocando())){
            $this->setTocando(true);
        }
    }
    public function pause(){
        if($this->getLigado() and $this->getTocando()){
            $this->setTocando(false);
        }
    }
}

?>