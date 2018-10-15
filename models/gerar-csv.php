<?php 
require_once 'Banco.php';
	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename=matriculas.csv');


$consulta = "SELECT  alunos.nome, matriculas.matricula, status_matricula, matriculas.codaluno, matriculas.codcurso, 
				cursos.nome_curso, cursos.status_curso, cursos.professor,
				professores.nome_professor  FROM alunos 
				JOIN matriculas ON alunos.id = matriculas.codaluno
				JOIN cursos ON matriculas.codcurso = cursos.id_curso
				JOIN professores ON cursos.professor = professores.id_professor
				ORDER BY matriculas.matricula";
$con = new Banco;
$dados = $con->criarJson($consulta);

$topo = [];

foreach ($dados[0] as $key => $value) {
	array_push($topo, $key);
	
}

$file = fopen("matriculas.csv", "w+");
fwrite($file, implode(",", $topo)."\r\n");


foreach ($dados as $row) {
	$data = [];

	foreach ($row as $key => $value) {
		array_push($data, $value);
		
	}
	fwrite($file, implode(",", $data)."\r\n");
}
