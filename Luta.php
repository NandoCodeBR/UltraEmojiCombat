<?php

require_once 'Lutador.php';
class Luta {
    private $rounds;
    private $desafiado;
    private $desafiante;
    private $aprovado;
    
    
    //métodos
    public function marcarLuta($l1, $l2){
        if (($l1->getCategoria() === $l2->getCategoria()) && ($l1 != $l2)){
            $this->aprovada = true;
            $this->desafiado = $l1;      
            $this->desafiante = $l2;
            echo "luta aprovada!";
        }else{
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
            echo "luta não pode acontecer";
        }
    }
    public function lutar(){
        if ($this->aprovada == true){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            
            $vencedor = random_int(0, 2);
            
            switch ($vencedor){
                case 0: // desafiado venceu
                    echo "<p> O lutador " , $this->desafiado->getNome() , " venceu! </p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 1: // desafiante venceu
                    echo "<p> O lutador ", $this->desafiante->getNome(), " venceu! </p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
                case 2: // empatou
                    echo "<p> Luta terminou em um empate! </p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
            }
        }
    }
    
    //métodos especiais
    public function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }
    public function getDesafiado(){
        return $this->desafiado;
    }
    public function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }
    public function getDesafiante(){
        return $this->desafiante;
    }
    
}
