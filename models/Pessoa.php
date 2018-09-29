<?php 
	require_once 'Query.php';
	class Pessoa extends Query {
	   protected $nome;
	   protected $telefone;
	   protected $sexo;
       protected $cpf;


    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }    
    public function setTelefone(){
        $this->telefone = $telefone;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    } 
    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }  
    
}


 ?>