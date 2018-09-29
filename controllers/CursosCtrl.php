<?php
	require_once '../class/Curso.php';
	require_once '../models/Banco.php';

	$postdata = file_get_contents("php://input");
    $request = json_decode($postdata);

    @$id=$request->id_curso;
	@$curso=$request->nome_curso;
	@$conteudo=$request->conteudo;
	@$duracao=$request->duracao_meses;
	@$status=$request->status_curso;
	@$idprof=$request->professor;
	
	$banco = new Banco;
	$curso = new Curso ($curso, $conteudo, $duracao, $status, $idprof);
	if ($id == ""){
		$curso->setQueryVerificacao();
		$response = $banco->verificaExistente($curso->getQueryVerificacao());
		if ($response == 0){
			$curso->setQueryInclusao();	
			$resposta = $banco->addDados($curso->getQueryInclusao(), "cursos");
			echo $resposta;
		}else {
			$resposta = "Erro de duplicidade: Esse curso já está cadastrado!";
			echo $resposta;
		}
	}else{
		$curso->setQueryAlteracao($id);
		$resposta = $banco->addDados($curso->getQueryAlteracao(), "cursos");
		echo $resposta;
	}