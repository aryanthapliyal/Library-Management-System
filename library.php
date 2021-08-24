<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
    <center><h2> Library Management System</h2></center>
    <!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
    <form action="InsertBooks.php" method="post" enctype="multipart/form-data">
 
        <table border="3" align="center" cellpadding="5" cellspacing="5">
            <tr>
            <td> Enter ISBN :</td>
            <td> <input type="text" name="isbn" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Title :</td>
            <td> <input type="text" name="title" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Author :</td>
            <td> <input type="text" name="author" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Edition :</td>
            <td> <input type="text" name="edition" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Publication: </td>
            <td> <input type="text" name="publication" size="48"> </td>
            </tr>
            <tr>
            </tr>
            <tr>
            <td></td>
            <td>
            <input type="submit" value="submit" name="submit">
            <input type="reset" value="Reset">
            </td>
            </tr>
        </table>
    </form>
    <table border= 3 align="center" >
	<tr>	<td> 
<form method="POST" action="" enctype="multipart/form-data">
<label> upload it </label>	
<input type="file"	name="image"	value="" /> 
			<div>
          
			</div>
<label> book name </label>
<div>
<input type ="text" name ="name" value="">
</div>
<div>
<input type='submit' name='upload' value='upload' >
</div>	
</form> 
    <?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'photos');
    
    if(isset($_POST['upload']))
    {
   $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
     $name = $_POST['name'];
     
     $query = "INSERT INTO `imager`(`image`,`name`) VALUES('$file','$name')"; 
      $query_run = mysqli_query($connection,$query);

        if($query_run)
        {
          echo '<script type = "text/javascript"> alert("Image Uploaded")</script>';
        }
        else{
          echo '<script type = "text/javascript"> alert("Image not Uploaded")</script>';
        }
     
    }

    ?>
		
	</div>
</td>
</tr>
</table>
</body>
</html>
	

