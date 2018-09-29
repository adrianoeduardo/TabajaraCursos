<?php
	
	require_once 'CadastroAluno.php';

	$postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $metodo = $_SERVER['REQUEST_METHOD'];
    @$id=$request->id;
	@$nome=$request->nome;
	@$sexo=$request->sexo;
	@$cpf=$request->cpf;
	@$rg=$request->rg;
	@$p=$request->profissao;
	@$telefone=$request->telefone;

    switch ($metodo) {
    	case "POST":
			$novoaluno = new CadastroAluno;
			$response = $novoaluno->incluirAluno($nome, $sexo, $cpf, $rg, $p, $telefone);
			echo $response;	
    		break;
    	case "PUT":
    		$editaraluno = new CadastroAluno;
    		$response = $editaraluno->alterarAluno($id, $nome, $sexo, $cpf, $rg, $p, $telefone);
    		echo $response;
    		break;
    	case "GET":
    		$leraluno = new CadastroAluno;
    		$response = $leraluno->lerAluno($id);
    		header('Content-Type: application/json; charset=utf-8');
			echo json_encode($response);



    }
    
				
?>