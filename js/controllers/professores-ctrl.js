angular.module('tabajara').controller('professoresCtrl', function ($scope, $http, $routeParams) {
	$scope.titulo = "Cadastro de Professores";
	$scope.prof = {};
	if($routeParams.profId){
		$http.get("http://localhost/tabajara-cursos/models/ListarProfessor.php?id=" + $routeParams.profId).then(function(response){
			$scope.prof=response.data[0];	
		})
	}
	$scope.enviar = function () {
		$http.post("http://localhost/tabajara-cursos/controllers/ProfessoresCtrl.php", $scope.prof)
		.then(function (response){
			console.log($scope.prof);
			$scope.msg = response.data;
		})
		.catch (function (erro){
			$scope.msg = "Não foi possível efetuar o cadastro ("+erro+")";
		});
	}

});