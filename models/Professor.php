<?php 
	require_once 'Pessoa.php';
	require_once 'tratar-dados.php';
	
	class Professor extends Pessoa {
		private $formacoes;

	public function __construct($nome, $sexo, $telefone, $formacoes, $cpf)	{
		$this->nome = tratarNome($nome);
		$this->sexo = $sexo;
		$this->telefone = $telefone;
		$this->formacoes = $formacoes;
        $this->cpf = $cpf;
	}

	
   
    public function getFormacoes(){
        return $this->formacoes;
    }
    public function setFormacoes($formacoes) {
        $this->formacoes = $formacoes;
    }
    public function setQueryInclusao() {
    	 $this->queryinclusao = "INSERT INTO professores values ('default', '".$this->getNome()."', '".$this->getSexo()."', '".$this->getTelefone()."', '".$this->getFormacoes()."', '".$this->getCpf()."')";
    }
    public function getQueryInclusao(){
    	return $this->queryinclusao;
    }
    public function setQueryAlteracao($id) {
    	 $this->queryalteracao = "UPDATE professores SET nome_professor ='".$this->getNome()."', sexo ='".$this->getSexo()."', telefone = '".$this->getTelefone()."', formacoes = '".$this->getFormacoes()."', cpf_professor = '".$this->getCpf()."' WHERE id_professor = '".$id."'";
    }
    public function getQueryAlteracao(){
    	return $this->queryalteracao;
    }
    public function getQueryVerificacao(){
        return $this->queryverificacao;
    }
    public function setQueryVerificacao(){
        $this->queryverificacao = "SELECT * FROM professores where cpf_professor = '".$this->getCpf()."'";
    }
    public function getQueryleitura(){
        return $this->queryleitura;
    }

    public function setQueryleitura(){
        $this->queryleitura = "";
    }
    
}

	



