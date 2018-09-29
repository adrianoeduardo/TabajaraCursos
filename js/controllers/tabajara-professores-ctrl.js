angular.module('tabajara').controller('TabajaraProfessoresCtrl', function ($scope, $http) {
	$scope.professores =[];
		var carregarProfessores = function (){
			$http.get("http://localhost/tabajara-cursos/models/ListarProfessores.php").then(function(response){
				$scope.professores=response.data;
			});
		};
	$scope.professores.push();
	carregarProfessores();
}); 