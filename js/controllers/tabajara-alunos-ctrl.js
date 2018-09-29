angular.module('tabajara').controller('TabajaraAlunosCtrl', function ($scope, $http) {

	$scope.alunos =[];
		var carregarAlunos = function (){
			$http.get("http://localhost/tabajara-cursos/controllers/AlunosCtrl.php").then(function(response){
				$scope.alunos=response.data;
			});
		};
	$scope.alunos.push();
	carregarAlunos();

});
