<html ng-app="ionicApp">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    
    <title>Toggles</title>

    <link href="https://code.ionicframework.com/1.0.0-beta.6/css/ionic.css" rel="stylesheet">
    <script src="https://code.ionicframework.com/1.0.0-beta.6/js/ionic.bundle.js"></script>
  </head>

  <body ng-controller="PlaylistsCtrl">
    
    <ion-content>
    <button ng-click="showPopup()" class="button icon ion-edit">Show Popup</button>
     <script>
     showPopup();
     </script>
    </ion-content>
    <script>
    

angular.module('ionicApp', ['ionic'])

.controller('PlaylistsCtrl', function($scope, $ionicPopup, $timeout) {
  $scope.data = {}
  
  // Triggered on a button click, or some other target
  $scope.showPopup = function() {
    var alertPopup = $ionicPopup.alert({
      title: 'Dont eat that!',
      template: 'It might taste good'
    });
    alertPopup.then(function(res) {
      console.log('Thank you for not eating my delicious ice cream cone');
      window.open('index.php','_self');
    });
  };
});
  </script>
  </body>
  
</html>