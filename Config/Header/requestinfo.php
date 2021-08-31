<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
    <center><h2>Insert books Library Management System</h2></center>
    <br>
 
    <?php
        include("DBConnection.php");
        $libid=$_POST["libid"];
        $fname=$_POST["fname"];
        $isbn=$_POST["isbn"];
        $title=$_POST["title"];
        $author=$_POST["author"];
        $edition=$_POST["edition"];
        $publication=$_POST["publication"];
 
        $query = "insert into books_request(libid,fname,isbn,title,author,edition,publication) values('$libid','$fname','$isbn','$title','$author','$edition','$publication')"; //Insert query to add book details into the book_info table
        $result = mysqli_query($db,$query);
    ?>
    <h3> request is sent successfully </h3>
 
 
</body>
</html>