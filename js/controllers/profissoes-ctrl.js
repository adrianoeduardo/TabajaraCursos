angular.module('tabajara').controller('profissoesCtrl', function ($scope, $http) {
	$scope.profissoes = [];
	var carregarProfissoes = function (){
		$http.get("http://localhost/tabajara-cursos/models/ListaProfissoes.php").then(function(response){
			$scope.profissoes=response.data;
			console.log($scope.profissoes)
		});
	};
	carregarProfissoes();

});