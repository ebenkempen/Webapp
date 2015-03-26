<!DOCTYPE html>

<html lang="en" ng-app="library">

    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library</title>
     
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.pageslide.css"/>
        <link rel="stylesheet" type="text/css" href="css/jquery.pageslide_right.css"/>
        <link rel="stylesheet/less" type="text/css" href="css/style.less">  
        <script type="text/javascript" src="js/less.js"></script>
        <script type="text/javascript" src="js/angular.min.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
        <!--<script src="js/stickynav.js"></script>-->

  </head>
    <body>
        <div id="container">
            <div id="placeholder"></div>
            <div id="header-wrap">
            <div id="header">
                <ul>
                    <li id="menu"><a href="menu.php" class="first"><img src="images/menu.png" width="19px"></a></li>
                    <li id="title"><p>Books</p></li>
                    <li id="search"><img src="images/search.png" width="19px"></li>
                </ul>
            </div>
            </div>
            <div id="maincontent">
                <div ng-controller="BookController as library">
                <a href="book.php" class="right"><div class="book" ng-repeat="book in library.info.books">
                    <div class="book_image">{{book.image}} 
                        <h4 class="book_title">{{book.title}}</h4>
                        <p class="book_genre">{{book.genre}}</p>
                        <p class="book_writer">{{book.writer}}</p>
                    </div>
                    <div class="book_description">
                        <p>{{book.description}}</p>
                    </div>
                    </div></a>
                </div>
            </div>
        </div>
        
        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.pageslide.min.js"></script>
        <script src="js/jquery.pageslide_right.min.js"></script>
        <script src="js/nav_slide.js"></script>
	<script type="text/javascript">
		$("a.first").pageslide();
		</script>
        <script type="text/javascript">
		$("a.right").pageslide_R();
		</script>
        <!--

         IE10 viewport hack for Surface/desktop Windows 8 …

        -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>

</html>
