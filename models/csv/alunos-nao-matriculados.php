<?php 

require_once '../Banco.php';
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=alunosnaomatriculados.csv');

$consulta = "SELECT  a.id, a.nome, a.telefone, a.profissao FROM alunos a WHERE NOT EXISTS (SELECT m.matricula FROM matriculas m WHERE m.codaluno = a.id)";
$con = new Banco;
$res = $con->gerarCSV($consulta);
echo $res;