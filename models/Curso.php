<?php
	
	require_once 'tratar-dados.php';
	require_once 'Query.php';
	class Curso extends Query {
		private $curso;
		private $conteudo;
		private $duracao;
		private $status;
		private $idprof;
	   
	   public function __construct($curso, $conteudo, $duracao, $status, $idprof) {
	        $this->curso = tratarNome($curso);
	        $this->conteudo = $conteudo;
	        $this->duracao = $duracao;
	        $this->status = $status;
	        $this->idprof = $idprof;
	    }

    public function getCurso(){
        return $this->curso;
    }

    public function setCurso($curso){
        $this->curso = $curso;
    }

    public function getConteudo() {
        return $this->conteudo;
    }

    public function setConteudo($conteudo) {
        $this->conteudo = $conteudo;
    }
    
    public function getDuracao(){
        return $this->duracao;
    }

    public function setDuracao($duracao) {
        $this->duracao = $duracao;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }
    public function getIdprof(){
        return $this->idprof;
    }

    public function setIdprof($idprof){
        $this->idprof = $idprof;
    }
    public function getQueryInclusao() {
        return $this->queryinclusao;
    }
    public function setQueryInclusao() {
    	$this->queryinclusao = "INSERT INTO cursos values ('default', '".$this->getCurso()."', '".$this->getConteudo()."', '".$this->getDuracao()."', '".$this->getStatus()."', '".$this->getIdprof()."')";
    }
    public function getQueryAlteracao() {
        return $this->queryalteracao;
    }
    public function setQueryAlteracao($id) {
    	$this->queryalteracao = "UPDATE cursos SET nome_curso ='".$this->getCurso()."', conteudo='".$this->getConteudo()."', duracao_meses='".$this->getDuracao()."', status_curso='".$this->getStatus()."', professor='".$this->getIdprof()."' WHERE id_curso='".$id."'";
    }
    public function getQueryVerificacao() {
        return $this->queryverificacao;
    }
    public function setQueryVerificacao() {
        $this->queryverificacao = "SELECT * FROM cursos WHERE nome_curso = '".$this->getCurso()."'";
    }
    public function getQueryleitura(){
        return $this->queryleitura;
    }

    public function setQueryleitura(){
        $this->queryleitura = "";
    }
}

?>