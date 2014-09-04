<!DOCTYPE html>
	<html>
		<head>
			<title>Laravel / AngularJS</title>
			<% HTML::script('assets/js/jquery-1.10.2.js') %>
			<% HTML::script('assets/js/angular.min.js') %>
			<% HTML::script('assets/js/script.js') %>
		</head>
		<body ng-app ng-controller="FuncionarioCtrl">
		<h1>{{ nome }}</h1>
		</body>
	</html>