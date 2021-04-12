<?php
Class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;


    public function __construct($no, $na, $i, $a,$pe,$v,$d,$e){
        $nome = $no;
        $nacionalidade = $na;
        $idade = $i;
        $altura = $a;
        $this->setPeso($pe);
        $vitorias = $v;
        $derrotas = $d;
        $empates = $e;
    }
    public function apresentar(){
        echo"Lutador: " . $this->getNome();
        echo"<br> Origem: " . $this->getNacionalidade();
        echo"<br>". $this->getIdade() . " anos";
        echo"<br>" . $this->getAltura() . "m de altura";
        echo"<br> Pesando:" . $this->getPeso(). "Kg";
        echo"<br> Ganhou:" . $this->getVitorias();
        echo"<br> Perdeu:" . $this->getDerrotas();
        echo"<br> Empatou:" . $this->getEmpates();
    }
    public function Status(){
        echo $this->getNome();
        echo "<br>é um peso ". $this->getCategoria();
        echo "<br>". $this->getVitorias() . " vitorias <br>";
        echo $this->getDerrotas() . " derrotas <br>";
        echo $this->getEmpates() . " empates";
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
    public function getNome(){   
        return $this->Nome;
    }   
    public function setNome($no){
        $this->Nome = $no;
    }
    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    public function setNacionalidade($na){
        $this->nacionalidade = $na;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($i){
        $this->idade = $i;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($a){
        $this->altura = $a;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($p){
        $this->peso = $p;
        $this->setCategoria();
    }
    public function getCategoria(){
        return $this->categoria;
    }
    private function setCategoria(){
        if($this->getPeso() < 52.2){
            $this->categoria = "invalido";
        }elseif($this->getPeso() <= 70.3){
            $this->categoria = "Leve";
        }elseif($this->getPeso() <= 83.9){
            $this->categoria = "Médio";
        }elseif($this->getPeso() <=120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "invaliddo";
        }
    }
    public function getVitorias(){
        return $this->vitorias;
    }
    public function setVitorias($v){
        $this->vitorias = $v;
    }
    public function getDerrotas(){
        return $this->derrotas;
    }
    public function setDerrotas($d){
        $this->derrotas = $d;
    }
    public function getEmpates(){
        return $this->empates;
    }
    public function setEmpates($e){
        $this->empates = $e;
    }

}



?>