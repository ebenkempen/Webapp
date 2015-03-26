<?php
    header("Access-Contro-Allow-Origin: *");

//new book
    class Book{
        public $id;
        public $title;
        public $description;
        public $genre;
        public $writer;
        public $acontent;
        public $image;
    }

    class Books{
        public $books;
    }

    require 'Slim/Slim.php';
    \Slim\Slim::registerAutoloader();

    $app = new \Slim\Slim();
   // $app -> get('/books/:id', function($id){
    $app -> get('/books/', function(){

//set username
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "library";

// create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    //echo "Connected successfully"; 

    $sql = "SELECT * FROM books;";
    $result = $conn -> query($sql);

    
    $rows = mysqli_num_rows($result);

    $books = new Books;
    $books->books = array();
        
    while($row = $result -> fetch_array()){
        $book1 =  new Book;
        $book1 -> id = $row["id"];
        $book1 -> title = $row["title"];
        $book1 -> description = $row["description"];
        $book1 -> genre = $row["genre"];
        $book1 -> writer = $row["writer"];
        $book1 -> content = $row["content"];
        $book1 -> image = $row["image"];
        array_push($books -> books, $book1);
    }

        //echo json_encode($book1);
        
        echo json_encode($books);
    });


    $app -> run();

?>
