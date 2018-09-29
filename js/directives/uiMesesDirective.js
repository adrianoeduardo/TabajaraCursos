angular.module("minhasDiretivas").directive("uiMeses", function (){
	return {
		require: "ngModel",
		link: function (scope, element, attrs, ctrl){
			var _formatMeses = function (duracao){
				duracao = duracao.replace(/[^0-9]+/g, "");
				if(duracao.length > 2){
					duracao = duracao.substring(0,2);
				}
				return duracao;
			}

			element.bind("keyup", function(){
				ctrl.$setViewValue(_formatMeses(ctrl.$viewValue));
				ctrl.$render();
			});
		}
	}

});