var home = angular.module('Home', ['ngRoute']);

home.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider){
	$routeProvider
	.when('/',
	{
		title: 'Ceeq Mobile Application - Device Security & Backup',
		templateUrl: 'public/js/angular/home-app/views/home.htm',
		controller: 'HomeController'
	})
	.when('/about',
	{	
		title: 'About us',
		templateUrl: 'public/js/angular/home-app/views/about.htm',
		controller: 'AboutController'
	})
	.when('/password',
	{	
		title: 'Forgot Password',
		templateUrl: 'public/js/angular/home-app/views/password.htm',
		controller: 'LoginController'
	})
	.when('/privacy',
	{	
		title: 'Data privacy &amp; Policy',
		templateUrl: 'public/js/angular/home-app/views/privacy.htm',
		controller: 'AboutController'
	})
	.when('/faqs',
	{	
		title: 'Frequenty asked questions',
		templateUrl: 'public/js/angular/home-app/views/faqs.htm',
		controller: 'AboutController'
	})
	.when('/support',
	{	
		title: 'Support & Contact',
		templateUrl: 'public/js/angular/home-app/views/support.htm',
		controller: 'SupportController'
	})
	.when('/terms',
	{	
		title: 'Terms &amp; Conditions',
		templateUrl: 'public/js/angular/home-app/views/terms.htm',
		controller: 'AboutController'
	})
	.when('/download',
	{	
		title: 'Download',
		templateUrl: 'public/js/angular/home-app/views/dwonload.htm',
		controller: 'AboutController'
	})
	.when('/donate',
	{	
		title: 'Sponsor us',
		templateUrl: 'public/js/angular/home-app/views/donate.htm',
		controller: 'AboutController'
	})
	.when('/not-found',
	{	
		title: 'Not found',
		templateUrl: 'public/js/angular/common/views/not-found.htm',
		controller: 'AboutController'
	})
	.otherwise({
		redirectTo: '/not-found'
	});

	//$locationProvider.html5Mode(true);
}]);

home.constant('SESSION_EVENTS', {
	sessionSuccess : 'session-create-success',
	sessionFailure : 'session-create-failed',
	sessionDestroy : 'session-destroy-success'
}).constant('GLOBAL_EVENTS', {
	feedbackSuccess : 'feedback-create-success',
	feedbackFailure : 'feedback-create-failed',
});

home.run(['$location', '$rootScope', function($location, $rootScope) {
    $rootScope.$on('$routeChangeSuccess', function (event, current, previous) {

     	if (current.$route) {
        	$rootScope.title = current.$route.title;
      	}
    });
}]);

home.factory('UserSessionService', [function($scope){
	
	return {
		isON : false,
		name : ""
	}

}]);

home.factory('SessionService', ['$http', 'UserSessionService', function(http, User){
	
	return {

    create: function (user) {
      return http.post('session/create', user);
    },

    destroy: function (user) {
      return http.post('session/destroy', user);
    },

    isCreated: function () {
      return User.isON;
    },
  }
}]);

home.controller('HomeController', function($scope){
});

home.controller('AboutController', function($scope){

});

home.controller('SupportController', ['$scope', '$rootScope', 'ApiService', 
	function(scope, rootScope, Api) {
	
		scope.feedback = {
			name 	 : '',
			email 	 : '',
			message  : ''
		}

		scope.feedback = function(feedback) {
			Api.createFeedback(user).then(function(){
				rootScope.$broadcast(GLOBAL_EVENTS.feedbackSuccess);
			}, 
			function(){
				rootScope.$broadcast(GLOBAL_EVENTS.feedbackFailure);
			});
		}
	}
]);


home.controller('LoginController', ['$scope', '$rootScope', 'SessionService', 
	function(scope, rootScope, Session) {
	
		scope.user = {
			username : '',
			password : ''
		}

		scope.login = function(user) {
			Session.create(user).then(function(){
				// yo, redirecting from server
			}, 
			function(){
				rootScope.$broadcast(SESSION_EVENTS.sessionFailure);
			});
		}
	}
]);