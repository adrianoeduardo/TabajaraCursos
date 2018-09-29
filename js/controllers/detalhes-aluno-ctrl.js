angular.module('tabajara').controller('detalhesAlunoCtrl', function ($scope, $http, $routeParams) {
	$scope.titulo1 = "Detalhes do Aluno";
	$scope.titulo2 = "Histórico de Matrículas";
	$scope.detalhes = {};
	if($routeParams.alunoId){
		$http.get("http://localhost/tabajara-cursos/models/MostrarDetalhesAluno.php?id=" + $routeParams.alunoId).then(function(response){
			$scope.detalhes=response.data;	
			console.log($scope.detalhes)
		})
	}
});