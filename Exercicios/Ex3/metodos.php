<?php
    Class ContaBanco{
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function __construct(){
            $this->setSaldo(0);
            $this->setStatus(false);
        }
        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true);
            if($t == "CC"){
                $this->setSaldo(50);
            }
            else if($t == "CP"){
                $this->setSaldo(150);
            }
            else{
                echo "informe corretamente";
            }

        }
        public function fecharConta(){
            if($this->getSaldo() > 0){
                echo "retirar o dinheiro na conta primeiro";
            }
            else if($this->getSaldo() < 0){
                echo "quite sua divida antes de fechar a conta";
            }
            else{
                echo "conta fechada";
                $this->setStatus(false);
            }
        }   
        public function deposito($d){
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo() + $d);
            }
            else{
                echo "Imposivel efetuar o deposito";
            }
        }
        public function sacar($s){
            if($this->getStatus()){
                if($this->getSaldo >= $s){
                    $this->setSaldo($this->getSaldo() - $s);
                }
                else{
                    echo"Não possui esse dinheiro na conta";
                }
            }else{
                echo"conta não encontrada";
            }
        }
        public function pagarMensal(){

            $valor = 0;
            if($this->getTipo() == "CC"){
                $valor = 12;
            }
            elseif($this->getTipo() == "CP"){
                $valor = 20;
            }
            if($this->getStatus()){
                if($this->getSaldo() >= $valor){
                    $this->setSaldo($this->getSaldo() - $valor);
                }
                else{
                    echo"Saldo insuficiente";
                }
            }
            else{
                echo"saldo insuficiente";
            }
        }
        
        public function setNumConta($n){
            $this->numConta = $n;
        }
        public function getNumConta(){
            return $this->numConta;
        }
        
        public function setTipo($t){
            $this->tipo = $t;
        }
        public function getTipo(){
            return $this->tipo;
        }

        
        public function setDono($d){
            $this->dono = $d;
        }
        public function getDono(){
            return $this->dono;
        }

        
        public function setSaldo($s){
            $this->saldo = $s; 
        }
        public function getSaldo(){
            return $this->saldo;
         }

        
        public function setStatus($st){
            $this->status = $st;
        }
        public function getStatus(){
            return $this->status;
        }
}
?>
