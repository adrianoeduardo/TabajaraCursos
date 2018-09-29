angular.module('tabajara').controller('TabajaraCursosCtrl', function ($scope, $http) {

	$scope.cursos =[];
		var carregarCursos = function (){
			$http.get("http://localhost/tabajara-cursos/models/ListarCursos.php").then(function(response){
				$scope.cursos=response.data;
			});
		};
	$scope.cursos.push();
	carregarCursos();

});
