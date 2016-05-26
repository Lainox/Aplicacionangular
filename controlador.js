var app = angular.module("myApp",["LocalStorageModule"]);

app.controller("controlador",function($scope,localStorageService){
	//verificar que no haya algo ya guardado
	if(localStorageService.get("angular-list")) {
		$scope.todo = localStorageService.get("angular-list");
	}
	else
	{
		$scope.todo = [];
	}
	

	$scope.addActividad = function(){
		$scope.todo.push($scope.newActiv);
		$scope.newActiv = {};
		//hay que ir actualizando el localstorage
		localStorageService.set("angular-list",$scope.todo);
	}
	//limpiar lista
	$scope.clean = function(){
		$scope.todo = [];
		localStorageService.set("angular-list",$scope.todo);
	}
});