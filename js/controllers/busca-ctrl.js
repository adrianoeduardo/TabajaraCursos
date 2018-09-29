angular.module('tabajara').controller('buscaCtrl', function ($scope){
	$scope.ordenarPor = function (campo){
		$scope.ordenacao = campo;
		$scope.direcao = !$scope.direcao;
	};
});