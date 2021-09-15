<?php  include("DBConnection.php"); 
?>
<html>
<body bgcolor="87ceeb">
    <center><h2>Insert books Library Management System</h2></center>
    <br>
 
    <?php
            $isbn = $title = $author = "";
            $edition = $publication ="";
     
        
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
             if (empty($_POST["isbn"])){ 
                $isbn = "fill out all the fields";
                echo '<div style="font-size:3em">You have not filled isbn! </div>';
                exit($isbn=$_POST["isbn"]);
               }
             else { 
                $isbn=$_POST["isbn"]; 
               }    

                  if (empty($_POST["title"])){ 
                     $title = "fill out all the fields";
                     echo '<div style="font-size:3em">You have not filled title! </div>';
                     exit($title=$_POST["title"]);
                    }
                  else { 
                     $title=$_POST["title"]; 
                    }    

                    if (empty($_POST["author"])){ 
                     $author = "fill out all the fields";
                     echo '<div style="font-size:3em">You have not filled author! </div>';
                     exit($author=$_POST["author"]);
                    }
                  else { 
                     $author=$_POST["author"]; 
                    }    
                   
                    if (empty($_POST["edition"])){ 
                     $edition = "fill out all the fields";
                     echo '<div style="font-size:3em">You have not filled edition! </div>';
                     exit($edition=$_POST["edition"]);  
                  }
                  else { 
                     $edition=$_POST["edition"]; 
                    }    

                    if (empty($_POST["publication"])){ 
                     $publication = "fill out all the fields";
                     echo '<div style="font-size:3em">You have not filled publication! </div>';
                     exit($publication=$_POST["publication"]);  
                  }
                  else { 
                     $publication=$_POST["publication"]; 
                    }    
         }
       // $title=$_POST["title"];
      //  $author=$_POST["author"];
       // $edition=$_POST["edition"];
       // $publication=$_POST["publication"];
 
        $query = "insert into book_info(isbn,title,author,edition,publication) values('$isbn','$title','$author','$edition','$publication')"; //Insert query to add book details into the book_info table
        $result = mysqli_query($db,$query);
    ?>
    <h3> Use links below to navigate  </h3>
 
    <a href="SearchBooks.php"> To search for the Book information click here </a>
    <div>
    <a href="requestbooks.php"> To request for the Books click here </a>
</div>
    <a href="upload&fetchimg.php"> To upload or view picture of books click here </a>
</body>
</html>




<?php

?>
