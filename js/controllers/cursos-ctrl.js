angular.module('tabajara').controller('cursosCtrl', function ($scope, $http, $routeParams) {
	$scope.status = [
			{op:"Matrículas Abertas"},
			{op:"Matrículas Encerradas"},
			{op:"Concluído"},
			{op:"Cancelado"}
		];
	$scope.titulo = "Cadastro de Cursos";
	$scope.curso = {};
	if($routeParams.cursoId){
		$http.get("http://localhost/tabajara-cursos/models/ListarCurso.php?id=" + $routeParams.cursoId).then(function(response){
			$scope.curso=response.data[0];	
		})
	}
	$scope.enviar = function (){
		$http.post("http://localhost/tabajara-cursos/controllers/CursosCtrl.php", $scope.curso)
		.then(function (response){
			$scope.msg = response.data;
		})
		.catch (function (erro){
			$scope.msg = "Não foi possível efetuar o cadastro ("+erro+")";
		});
		console.log($scope.curso);
		
	};
});