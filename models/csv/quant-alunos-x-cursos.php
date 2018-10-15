<?php 

require_once '../Banco.php';
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=alunosporcurso.csv');

$consulta = "SELECT c.nome_curso, count(m.codaluno) AS n_alunos FROM cursos c JOIN matriculas m ON c.id_curso = m.codcurso 
GROUP BY c.nome_curso;";
$con = new Banco;
$res = $con->gerarCSV($consulta);
echo $res;
?>