<?php 
	require_once '../models/Aluno.php';
	require_once '../models/Banco.php';	
	class CadastroAluno {
		
	    public function incluirAluno($nome, $sexo, $cpf, $rg, $p, $telefone){
	    	$banco = new Banco;
			$aluno = new Aluno;
			$aluno->definirDados($nome, $sexo, $cpf, $rg, $p, $telefone);
			$aluno->setQueryVerificacao();
			$response = $banco->verificaExistente($aluno->getQueryVerificacao());
			if ($response == 0){
				$aluno->setQueryInclusao();	
				$resposta = $banco->addDados($aluno->getQueryInclusao(), "alunos");
				return $resposta;
			}else {
				$resposta = "Erro de duplicidade: O CPF desse aluno já está cadastrado!";
				return $resposta;
			}
		}
		public function alterarAluno($id, $nome, $sexo, $cpf, $rg, $p, $telefone){
			$banco = new Banco;
			$aluno = new Aluno;
			$aluno->definirDados($nome, $sexo, $cpf, $rg, $p, $telefone);
			$aluno->setQueryAlteracao($id);
			$resposta = $banco->addDados($aluno->getQueryAlteracao(), "alunos");
			echo $resposta;	
		}
		public function lerAluno ($id){
			$banco = new Banco;
			$aluno = new Aluno;
			$aluno->setQueryleitura($id);
			$consulta = $aluno->getQueryleitura();
			$dados = $banco->criarJson($consulta);
			return $dados;
			
		}
	}
 
?>
