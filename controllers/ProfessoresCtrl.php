<?php
	require_once '../class/Professor.php';
	require_once '../models/Banco.php';

	$postdata = file_get_contents("php://input");
    $request = json_decode($postdata);

    @$id=$request->id_professor;
	@$nome=$request->nome_professor;
	@$sexo=$request->sexo;
	@$telefone=$request->telefone;
	@$formacoes=$request->formacoes;
	@$cpf=$request->cpf_professor;


	$banco = new Banco;
	$professor = new Professor ($nome, $sexo, $telefone, $formacoes, $cpf); 
	if ($id == ""){
		$professor->setQueryVerificacao();
		$response = $banco->verificaExistente($professor->getQueryVerificacao());
		if ($response == 0){
			$professor->setQueryInclusao();	
			$resposta = $banco->addDados($professor->getQueryInclusao(), "professores");
			echo $resposta;
		}else {
			$resposta = "Erro de duplicidade: O CPF desse professor já está cadastrado!";
			echo $resposta;
		}
	}else{
		$professor->setQueryAlteracao($id);
		$resposta = $banco->addDados($professor->getQueryAlteracao(), "professores");
		echo $resposta;
	}

	

?>