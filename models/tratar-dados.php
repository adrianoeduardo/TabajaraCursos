<?php 
	require_once 'Banco.php';

	function tratarNome ($n){
		$con = new Banco;
		$con->protegerBD($n);
		$nome="";
		$n=trim($n);
		$n=mb_strtolower($n, 'UTF-8');
		$n=explode(" ", $n);
		for ($i=0; $i < count($n); $i++){
			if($n[$i] == "de" || $n[$i] == "da" || $n[$i] == "dos" || $n[$i] == "das" || $n[$i] == "la" || $n[$i] == "los" || $n[$i] == "las" || $n[$i] == "e" || $n[$i] == "do" || $n[$i] == "em"){
				$nome.=$n[$i]." ";
			} else{
				$nome.=ucfirst($n[$i])." ";
			}
		}
		return $nome;
	}
	function tratarDocumentos ($doc) {
		$con = new Banco;
		$con->protegerBD($doc);
		$doc = trim($doc);
		$doc = str_replace(",", "", $doc);
		$doc = str_replace(".", "", $doc);
		$doc = str_replace("/", "", $doc);
		$doc = str_replace("-", "", $doc);
		$doc = str_replace("_", "", $doc);
		$doc = str_replace("+", "", $doc);
		$doc = str_replace("=", "", $doc);
		$doc = str_replace(" ", "", $doc);
		return $doc;
	}

	function tratarNumeros ($num){
		$con = new Banco;
		$con->protegerBD($num);
		$num = preg_replace("/[^0-9]/", "", $num);
		return $num;
	}

 ?>