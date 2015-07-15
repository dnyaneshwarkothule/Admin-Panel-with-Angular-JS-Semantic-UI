	// create the module and name it scotchApp
	var scotchApp = angular.module('scotchApp', ['ngRoute']);

	// configure our routes
	scotchApp.config(function($routeProvider) {
		$routeProvider

			// route for the home page
			.when('/home', {
				templateUrl : 'home.html',
				controller  : 'mainController'
			})

			// route for the about page
			.when('/topics', {
				templateUrl : 'topics.html',
				controller  : 'topicsController'
			})

			// route for the contact page
			.when('/friends', {
				templateUrl : 'friends.html',
				controller  : 'friendsController'
			})
			
			// route for the history page
			.when('/history', {
				templateUrl : 'history.html',
				controller  : 'historyController'
			})

			// route for the message page
			.when('/message', {
				templateUrl : 'message.html',
				controller  : 'messageController'
			})
			
			// route for the discussion page
			.when('/discussion', {
				templateUrl : 'discussion.html',
				controller  : 'discussionController'
			})

			// route for the achievement page
			.when('/achievement', {
				templateUrl : 'achievement.html',
				controller  : 'achievementController'
			})

			// route for the store page
			.when('/store', {
				templateUrl : 'store.html',
				controller  : 'storeController'
			})
			
			// route for the setting page
			.when('/setting', {
				templateUrl : 'setting.html',
				controller  : 'settingController'
			});
	});

	// create the controller and inject Angular's $scope
	scotchApp.controller('mainController', function($scope) {
		// create a message to display in our view
		$scope.message = 'Everyone come and see how good I look!';
	});

	scotchApp.controller('topicsController', function($scope) {
		$scope.message = 'Look! I am an topic page.';
	});

	scotchApp.controller('friendsController', function($scope) {
		$scope.message = 'Look! I am an friend page.';
	});
	
	scotchApp.controller('historyController', function($scope) {
		// create a message to display in our view
		$scope.message = 'Look! I am an history page.';
	});

	scotchApp.controller('messageController', function($scope) {
		$scope.message = 'Look! I am an message page.';
	});

	scotchApp.controller('discussionController', function($scope) {
		$scope.message = 'Look! I am an discussion page.';
	});
	
	scotchApp.controller('achievementController', function($scope) {
		// create a message to display in our view
		$scope.message = 'Look! I am an achievement page.';
	});

	scotchApp.controller('storeController', function($scope) {
		$scope.message = 'Look! I am an store page.';
	});

	scotchApp.controller('settingController', function($scope) {
		$scope.message = 'Look! I am an setting page.';
	});