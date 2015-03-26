(function(){
 
var book_app = angular.module("bookID",[]);

book_app.controller("BookIDController", [ "$http", function($http)
                                  {
                                      var storage = this;
                                      
                                      $http.get("http://localhost/webapp/books.php/books/:id").success(function(data)
                                                                                                   {
                                          
                                          storage.info = data;
                                          console.log(storage.info);
                                      });
                                  }]);

})();