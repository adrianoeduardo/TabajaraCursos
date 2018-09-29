<?php 
	require_once 'Pessoa.php';
    require_once 'tratar-dados.php';
	
	class Aluno extends Pessoa {
		private $rg;
		private $profissao;

	public function definirDados($nome, $sexo, $cpf, $rg, $profissao, $telefone)	{
		$this->nome = tratarNome($nome);
		$this->sexo = $sexo;
		$this->cpf = $cpf;
		$this->rg = tratarDocumentos($rg);
		$this->profissao = tratarNome($profissao);
		$this->telefone = $telefone;
	}

    public function getRg() {
        return $this->rg;
    }

    public function setRg($rg) {
        $this->rg = $rg;
    }

    public function getProfissao() {
        return $this->profissao;
    }

    public function setProfissao($profissao) {
        $this->profissao = $profissao;
    }
    public function getQueryInclusao() {
        return $this->queryinclusao;
    }
     public function setQueryInclusao()    {
        $this->queryinclusao = "INSERT INTO alunos values ('default', '".$this->getNome()."', '".$this->getSexo()."', '".$this->getCpf()."', '".$this->getRG()."', '".$this->getTelefone()."', '".$this->getProfissao()."')";
    } 
    public function getQueryAlteracao(){
        return $this->queryalteracao;
    }
    public function setQueryAlteracao($id){
        $this->queryalteracao = "UPDATE alunos SET nome ='".$this->getNome()."', sexo = '".$this->getSexo()."', cpf = '".$this->getCpf()."', rg = '".$this->getRG()."', telefone = '".$this->getTelefone()."', profissao = '".$this->getProfissao()."' WHERE id = '".$id."'";
    }
    public function getQueryVerificacao(){
        return $this->queryverificacao;
    }
    public function setQueryVerificacao(){
        $this->queryverificacao = "SELECT * FROM alunos where cpf = '".$this->getCpf()."'";
    }
    public function getQueryleitura(){
        return $this->queryleitura;
    }

    public function setQueryleitura($id){
        if ($id == ""){
            $this->queryleitura = "SELECT * FROM alunos";
        }else {
             $this->queryleitura = "SELECT * FROM alunos WHERE id =".$id;
        }
       
    }
} 
 ?>