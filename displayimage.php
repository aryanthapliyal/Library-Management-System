<html>
<head>
<title>Display image</title>
<style>
    body{
        background-color: lightblue;
    }
    </style>
</head>
<center>
<form action = "" method="POST" enctype="multipart/form-data">
<table width= "50%" border="1" cellpadding="5" cellspacing="5">
<thead>
<tr>
<th>  image </th>
<th>  name </th>
</tr>
</thead>
<?php
$connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'photos');
    
$query = "SELECT * FROM `imager`";
$query_run = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($query_run))
{
 ?>
 <tr>
      <td> <?php 	echo "<img src='imager/".$row['image']."' >";  ?></td>
      <td> <?php echo $row['name']; ?></td>
 </tr>
 <?php
}


?>
</table>
</form>
</center>
</html>