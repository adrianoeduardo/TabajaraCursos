angular.module('minhasDiretivas', [])
.directive('spanForm', function (){
	var ddo={};

	ddo.restrict = "E";
	
	ddo.transclude = true;

	ddo.template = '<div class="input-group-prepend"><span class="input-group-text" ng-transclude></span></div>';

	return ddo;
})
.directive('meuGrupo', function(){
	var ddo = {};

	ddo.restrict = "E";

	ddo.transclude = true;

	ddo.template = '<div class="input-group mb-3" ng-transclude> </div>';

	return ddo;

}).directive('minhaModal', function (){
	var ddo = {};

	ddo.restrict = "AE";

	ddo.transclude = true;

	ddo.scope = {
		nome: '@'
	};

	ddo.templateUrl = 'js/directives/modal.html';

	return ddo;

}).directive('tituloModal', function(){
	var ddo = {};

	ddo.restrict = "AE";

	ddo.scope = {
		titulo: '@'
	};

	ddo.templateUrl = 'js/directives/titulo-modal.html';

	return ddo;
}).directive('pModal', function(){
	var ddo = {};

	ddo.restrict = "E";

	ddo.transclude = true;

	ddo.template = '<div class="modal-body" ng-transclude> </div>';

	return ddo;

}).directive('botaoModal', function (){
	var ddo = {};

	ddo.restrict = "E";

	ddo.transclude = true;

	ddo.template = '<div class="modal-footer" ng-transclude> </div>';

	return ddo;
});