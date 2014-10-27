(function() {
    'use strict';

    angular.module('mySpeech.videoContent', ['ngRoute'])

    .config(['$routeProvider', function($routeProvider) {
      $routeProvider.when('/video-content', {
        templateUrl: 'video-content/video-content.html',
        controller: 'videoContentCtrl'
      });
    }])

    .controller('videoContentCtrl', ['$scope', function($scope) {
        $scope.test = "test";
    }]);
}());