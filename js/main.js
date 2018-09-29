angular.module('tabajara', ['minhasDiretivas', 'ngRoute', 'ngMessages']).config(function($routeProvider) {
	$routeProvider.when('/alunos', {
		templateUrl: 'views/alunos.html',
		controller: 'TabajaraAlunosCtrl'
	});
	$routeProvider.when('/alunos/new', {
		templateUrl: 'views/novo-aluno.html',
		controller: 'alunosCtrl'
	});
	$routeProvider.when('/alunos/edit/:alunoId', {
		templateUrl: 'views/novo-aluno.html',
		controller: 'alunosCtrl'
	});
	$routeProvider.when('/professores', {
		templateUrl: 'views/professores.html',
		controller: 'TabajaraProfessoresCtrl'
	});
	$routeProvider.when('/professores/new', {
		templateUrl: 'views/novo-professor.html',
		controller: 'professoresCtrl'
	});
	$routeProvider.when('/professores/edit/:profId', {
		templateUrl: 'views/novo-professor.html',
		controller: 'professoresCtrl'
	});
	$routeProvider.when('/cursos', {
		templateUrl: 'views/cursos.html',
		controller: 'TabajaraCursosCtrl'
	});
	$routeProvider.when('/cursos/new', {
		templateUrl: 'views/novo-curso.html',
		controller: 'cursosCtrl'
	});
	$routeProvider.when('/cursos/edit/:cursoId', {
		templateUrl: 'views/novo-curso.html',
		controller: 'cursosCtrl'
	});
	$routeProvider.when('/matriculas', {
		templateUrl: 'views/matriculas.html',
		controller: 'TabajaraMatriculasCtrl'
	});
	$routeProvider.when('/matriculas/edit/:matricula', {
		templateUrl: 'views/editar-matricula.html',
		controller: 'matriculasCtrl'
	});
	$routeProvider.when('/matriculas/new/:alunoId', {
		templateUrl: 'views/nova-matricula.html',
		controller: 'matriculasCtrl'
	});
	$routeProvider.when('/detalhes/:alunoId', {
		templateUrl: 'views/detalhar-aluno.html',
		controller: 'detalhesAlunoCtrl'
	});
	$routeProvider.when('/detalhes-curso/:cursoId', {
		templateUrl: 'views/detalhar-curso.html',
		controller: 'detalhesCursoCtrl'
	});

	$routeProvider.otherwise({
		redirectTo: '/alunos'
	});

});