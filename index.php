<!DOCTYPE html>
<html ng-app="myApp">
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="angular.min.js"></script>
	<script type="text/javascript" src="controlador.js"></script>
	<script type="text/javascript" src="angular-local-storage.min.js"></script>
	
	<title>Angular</title>
</head>
<body ng-controller="controlador">
	
	<ul>
		<li ng-repeat="todos in todo">
			{{todos.descripcion}} - {{todos.fecha | date: 'short'}}
		</li>
	</ul>
	<form ng-submit="addActividad()">
		Descripcion:<input type="text" ng-model="newActiv.descripcion">
		<br>
		Fecha: <input type="datetime-local" ng-model="newActiv.fecha">
		<br>
		<input type="submit" value="Ingresar Actividad" >
	</form>
	<button ng-click="clean()">Limpiar</button>
</body>
</html>