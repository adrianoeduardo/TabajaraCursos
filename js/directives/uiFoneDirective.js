angular.module("minhasDiretivas").directive("uiFone", function (){
	return {
		require: "ngModel",
		link: function (scope, element, attrs, ctrl){
			var _formatFone = function (telefone){
				telefone = telefone.replace(/[^0-9]+/g, "");
				if(telefone.length > 2){
					telefone = "(" + telefone.substring(0,2) + ") " + telefone.substring(2,11);
				}
				return telefone;
			}

			element.bind("keyup", function(){
				ctrl.$setViewValue(_formatFone(ctrl.$viewValue));
				ctrl.$render();
			});
		}
	};
});