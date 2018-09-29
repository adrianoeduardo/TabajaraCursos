<?php
require_once 'Banco.php';
$consulta = "SELECT  alunos.nome, matriculas.matricula, status_matricula, matriculas.codaluno, matriculas.codcurso, 
				cursos.nome_curso, cursos.status_curso, cursos.professor,
				professores.nome_professor  FROM alunos 
				JOIN matriculas ON alunos.id = matriculas.codaluno
				JOIN cursos ON matriculas.codcurso = cursos.id_curso
				JOIN professores ON cursos.professor = professores.id_professor
				ORDER BY matriculas.matricula";
$con = new Banco;
$dados = $con->criarJson($consulta);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($dados);

?>