(function(){
 
var app = angular.module("library",[]);

app.controller("BookController", [ "$http", function($http)
                                  {
                                      var storage = this;
                                      
                                      $http.get("http://localhost/webapp/library.php/books").success(function(data)
                                                                                                   {
                                          
                                          storage.info = data;
                                          console.log(storage.info);
                                      });
                                  }]);

})();
