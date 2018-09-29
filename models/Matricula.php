<?php  
	require_once 'Query.php';
	class Matricula extends Query{
	    private $situacao;
	    private $aluno;
	    private $curso;
	    private $queryverificastatus;
	    private $queryverificamatricula;

	    public function __construct($situacao) {
	        $this->situacao = $situacao;
	    }
	    public function getSituacao() {
	        return $this->situacao;
	    }

	    public function setSituacao($situacao){
	        $this->situacao = $situacao;
	    }

	    public function getAluno() {
	        return $this->aluno;
	    }

	    public function setAluno($aluno) {
	        $this->aluno = $aluno;
	    }

	    public function getCurso(){
	        return $this->curso;
	    }

	    public function setCurso($curso) {
	        $this->curso = $curso;

	    }
		public function getQueryInclusao() {
	        return $this->queryinclusao;
	    }
	    public function setQueryInclusao() {
	    	$this->queryinclusao = "INSERT INTO matriculas VALUES ('default', '".$this->getSituacao()."', '".$this->getAluno()."', '".$this->getCurso()."')";
	    }
	    public function getQueryAlteracao(){
	    	return $this->queryalteracao;
	    }
	    public function setQueryAlteracao($id){
	    	$this->queryalteracao = "UPDATE matriculas SET status_matricula ='".$this->getSituacao()."' WHERE matricula = '".$id."'";
	    }
	    public function getQueryVerificacao(){
	    	return $this->queryverificacao;
	    }
	    public function setQueryVerificacao(){
	    	$this->queryverificacao = "SELECT * FROM matriculas where codaluno = '".$this->getAluno()."' and codcurso = '".$this->getCurso()."'";
	    }
	    public function getQueryVerificaStatus(){
	        return $this->queryverificastatus;
	    }
	    public function setQueryVerificaStatus() {
	        $this->queryverificastatus = "SELECT status_curso FROM cursos WHERE id_curso = '".$this->getCurso()."'";
	    }
	    public function getQueryVerificaMatricula(){
	        return $this->queryverificamatricula;
	    }
	    public function setQueryVerificaMatricula($id) {
	        $this->queryverificamatricula = "SELECT status_matricula FROM matriculas WHERE matricula = '".$id."'";
	    } 
	    public function getQueryleitura(){
        	return $this->queryleitura;
    	}
    	public function setQueryleitura(){
        	$this->queryleitura = "";
    	}

}

?>

