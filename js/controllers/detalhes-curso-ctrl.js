angular.module('tabajara').controller('detalhesCursoCtrl', function ($scope, $http, $routeParams) {
	$scope.titulo1 = "Detalhes do Curso";
	$scope.titulo2 = "Alunos";
	$scope.detalhes = {};
	if($routeParams.cursoId){
		$http.get("http://localhost/tabajara-cursos/models/MostrarDetalhesCurso.php?id=" + $routeParams.cursoId).then(function(response){
			$scope.detalhes=response.data;	
		});
		$http.get("http://localhost/tabajara-cursos/models/NomeProfessor.php?id=" + $routeParams.cursoId).then(function(response){
			$scope.prof=response.data[0];
		});
	}
});