angular.module('tabajara').controller('matriculasCtrl', function ($scope, $http, $routeParams) {
	$scope.situacao = [
		{op:"Ativa"},
		{op:"Trancada"},
		{op:"Cancelada"},
		{op:"Curso Concluído"}
	];
	$scope.cursos =[];
		var carregarCursos = function (){
			$http.get("http://localhost/tabajara-cursos/models/ListarCursosMatrAbertas.php").then(function(response){
				$scope.cursos=response.data;
			});
		};
	$scope.cursos.push();
	carregarCursos();
	$scope.matricula = {};
	if($routeParams.matricula){
		$http.get("http://localhost/tabajara-cursos/models/Listarmatricula.php?id=" + $routeParams.matricula).then(function(response){
			$scope.matricula=response.data[0];	
		});
	}
	if($routeParams.alunoId){
		$scope.matricula.codaluno = $routeParams.alunoId;
	}
	$scope.verificar = function (){
		if ($scope.matricula.status_matricula == 'Curso Concluído'){
			$("#myModal").modal('show');
		}
		else{
			$scope.enviar() = true;
		}
	}
	$scope.enviar = function (){
		$http.post("http://localhost/tabajara-cursos/controllers/MatriculasCtrl.php", $scope.matricula)
		.then(function (response){
			$scope.msg = response.data;
		})
		.catch (function (erro){
			$scope.erro = "Não foi possível efetuar o cadastro ("+erro+")";
		});
		console.log($scope.matricula);
		
	};
});