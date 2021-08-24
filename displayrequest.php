<!DOCTYPE HTML>
<html>
    <body bgcolor="87ceeb">
    <center><h2>Display requested books</h2></center>
    <br>
    <?php
    include("DBConnection.php");
 
    
 
    $query = "select libid,fname,isbn,title,author,edition,publication from books_request  "; //search with a book name in the table book_info
    $result = mysqli_query($db,$query);
 
    if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)
 
    {
 
    
    
    ?>
 
    <table border="2" align="center" cellpadding="5" cellspacing="5">
        <tr>
            <th> Library ID </th>
            <th> Name of requester </th>
            <th> ISBN </th>
            <th> Title </th>
            <th> Author </th>
            <th> Edition </th>
            <th> Publication </th>
        </tr>
 
        <?php while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
        <td><?php echo $row["libid"];?> </td>
        <td><?php echo $row["fname"];?> </td>
            <td><?php echo $row["isbn"];?> </td>
            <td><?php echo $row["title"];?> </td>
            <td><?php echo $row["author"];?> </td>
            <td><?php echo $row["edition"];?> </td>
            <td><?php echo $row["publication"];?> </td>
        </tr>
        <?php
        }
        
      
    }
        ?>   
    </table>
    </body>
</html>