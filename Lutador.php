<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lutador
 *
 * @author Família Muniz
 */
class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    
    function Lutador($no, $na, $id, $al, $pe, $vi, $de , $em){
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
   
    function ganharLuta(){
        $this->vitorias = $this->getVitorias() + 1;
    }
    function perderLuta(){
        $this->derrotas = $this->getDerrotas() + 1;
    }
    function empatarLuta(){
        $this->empates = $this->getEmpates() + 1;
    }
    
    
    //getter e setter
    function getNome(){
        return $this->nome;
    }
    function setNome($n){
        $this->nome = $n;
    }
    function getNacionalidade(){
        return $this->nacionalidade;
    }
    function setNacionalidade($nac){
        $this->nacionalidade = $nac;
    }
    function getIdade(){
        return $this->idade;
    }
    function setIdade($i){
        $this->idade = $i;
    }
    function getAltura(){
        return $this->altura;
    }
    function setAltura($a){
        $this->altura = $a;
    }
    function getPeso(){
        return $this->peso;
    }
    
    function getCategoria(){
        return $this->categoria;
    }
    function setCategoria(){
        if($this->getPeso() < 52.2) {           
            $this->categoria = "inválido";
            }
        elseif ($this->getPeso() <= 70.3){
            
            $this->categoria = "Peso leve";
        }
        elseif ($this->getPeso() <= 83.9){
           
            $this->categoria = "Peso médio";
        }
        elseif ($this->getPeso() < 120.3){
            
            $this->categoria = "Peso pesado";
        }
        else{  
            $this->categoria = "Inválido";
        
        }
    }
    function setPeso($p){
        $this->peso = $p;
        $this->setCategoria();
    }
    function getVitorias(){
        return $this->vitorias;
    }
    function setVitorias($v){
        $this->vitorias = $v;
    }
    function getDerrotas(){
        return $this->derrotas;
    }
    function setDerrotas($d){
        $this->derrotas = $d;
    }
    function getEmpates(){
        return $this->empates;
    }
    function setEmpates($e){
        $this->empates = $e;
    }
    function apresentar(){
        echo "<p>--------------------------------------------------------------------------------------------------------</p>";
        echo "Ele é de ", $this->nacionalidade, ", ele tem ", $this->peso, " kg, ", $this->vitorias," vitórias, ", $this->derrotas, " derrotas e ", $this->empates, " empates, ele éééééé... ", $this->nome,"!!!!!";
    }
    function status() {
        echo "O lutador é o ", $this->getNome(),", Ele tem ", $this->getVitorias()," vitórias, ", $this->getDerrotas()," derrotas e ", $this->getEmpates()," empates,";
        echo "ele é da nacionalidade ", $this->getNacionalidade(), " e é um ", $this->getCategoria();
    }
    

    }
    
