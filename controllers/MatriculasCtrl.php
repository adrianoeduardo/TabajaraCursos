<?php 
	require_once '../class/Matricula.php';
	require_once '../models/Banco.php';

	$postdata = file_get_contents("php://input");
    $request = json_decode($postdata);

    @$id=$request->matricula;
	@$ra=$request->codaluno;
	@$curso=$request->codcurso;
	@$status=$request->status_matricula;

	$banco = new Banco;
	if ($id == ""){
		$status = "Ativa";
		$matricula = new Matricula ($status);
		$matricula->setCurso($curso);
		$matricula->setAluno($ra);
		$matricula->setQueryVerificacao();
		$response = $banco->verificaExistente($matricula->getQueryVerificacao());
		if ($response == 0){
			$matricula->setQueryInclusao();
			$resposta = $banco->addDados($matricula->getQueryInclusao(), "matriculas");
			echo $resposta;
		}else {
			$resposta = "Erro de duplicidade: Este aluno já está matriculado neste curso!";
			echo $resposta;
		}
	} else{
		$matricula = new Matricula ($status);
		$matricula->setCurso($curso);
		$matricula->setQueryVerificaMatricula($id);
		$consulta = $banco->verificaStatusMatricula($matricula->getQueryVerificaMatricula());
		if (($consulta == 'Trancada' || $consulta == 'Cancelada') && ($status =='Curso Concluído')){
			$resposta = "Não é possível concluir um curso que a matícula está $consulta";
			echo $resposta;						
		}else{
			$matricula->setQueryVerificaStatus();
			$response = $banco->verificaStatusCurso($matricula->getQueryVerificaStatus());
			if ($response == 'Cancelado' || $response == 'Concluído'){
				$resposta = "Não é possível mudar status de matrícula deste curso, pois ele está $response";
			}
			else{
				$matricula->setQueryAlteracao($id);
				$resposta = $banco->addDados($matricula->getQueryAlteracao(), "matriculas");
			}
			echo $resposta;
		} 
		
	}
?> 