angular.module('tabajara').controller('TabajaraMatriculasCtrl', function ($scope, $http) {
	$scope.matriculas =[];
		var carregarMatriculas = function (){
			$http.get("http://localhost/tabajara-cursos/models/ListarMatriculas.php").then(function(response){
				$scope.matriculas=response.data;
			});
		};
	
	$scope.matriculas.push();
	carregarMatriculas();
});