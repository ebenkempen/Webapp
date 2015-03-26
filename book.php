<!doctype html>
<html lang="en" ng-app="bookID">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
     
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.pageslide.css"/>
        <link rel="stylesheet" type="text/css" href="css/jquery.pageslide_right.css"/>
        <link rel="stylesheet/less" type="text/css" href="css/style.less">  
        <script type="text/javascript" src="js/less.js"></script>
        <script type="text/javascript" src="js/angular.min.js"></script>
        <script type="text/javascript" src="js/book_app.js"></script>


    
</head>
<body>  
    <div id="maincontent">
                <div ng-controller="BookIDController as bookID">
                <div class="book_large" ng-echo="book in bookID.info.books">
                    <div class="book_large_image">
                        <h4 class="book_large_title">{{book.title}}</h4>
                        <p class="book_large_genre">{{book.genre}}</p>
                        <p class="book_large_writer">{{book.writer}}</p>
                    </div>
                    <div class="book_large_content">
                        <p>{{book.about}}</p>
                    </div>
                    </div>
                </div>
            </div>
</body>
