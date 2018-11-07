var app = angular.module('admin',[]);
app.controller('AdminController', function($scope,$http){
	$scope.name="heloo";
	function get_prs(){
		$http.get('http://localhost/codehoplongtech/api/product').then(function(res){
			$scope.prs = res.data;
		})
	}
	get_prs();

})