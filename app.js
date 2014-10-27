'use strict';

// Declare app level module which depends on questions, and components
angular.module('mySpeech', [
    'ngRoute',
    'myspeech.videoContent'    
])

.config(['$routeProvider', function($routeProvider) {
    $routeProvider.otherwise({redirectTo: '/video-content'});
}]);
