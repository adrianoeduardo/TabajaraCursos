angular.module('tabajara').controller('alunosCtrl', function ($scope, $http, $routeParams) {
	$scope.titulo = "Cadastro de Alunos";
	$scope.aluno = {};
	if($routeParams.alunoId){
		$http.get("http://localhost/tabajara-cursos/controllers/AlunosCtrl.php?id=" + $routeParams.alunoId).then(function(response){
			$scope.aluno=response.data[0];	
			console.log($scope.aluno);
		})
	}
	$scope.enviar = function (){
		if ($scope.aluno.id){
			$http.put("http://localhost/tabajara-cursos/controllers/AlunosCtrl.php", $scope.aluno)
			.then(function (response){
				$scope.msg = response.data;
			})
			.catch (function (erro){
				$scope.msg = "Não foi possível efetuar o cadastro ("+erro+")";
			});
		} else{
			$http.post("http://localhost/tabajara-cursos/controllers/AlunosCtrl.php", $scope.aluno)
			.then(function (response){
				$scope.msg = response.data;
			})
			.catch (function (erro){
				$scope.msg = "Não foi possível efetuar o cadastro ("+erro+")";
			});
		}
		
		// console.log($scope.aluno);
		
	};
});