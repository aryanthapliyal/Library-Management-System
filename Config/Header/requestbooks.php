<!DOCTYPE HTML>
<html>
<body bgcolor="pink">
    <center><h2>Request new books from Library</h2></center>
    
    <form action="requestinfo.php" method="post">
 
        <table border="2" align="center" cellpadding="5" cellspacing="5">
        <tr>
            <td>Library ID:</td>
            <td> <input type="text" name="libid" size="48" required> </td>
            </tr>
        <tr>
            <td> Your Full Name :</td>
            <td> <input type="text" name="fname" size="48"  required> </td>
            </tr>
            <tr>
            <td> Enter ISBN :</td>
            <td> <input type="text" name="isbn" size="48" maxlength = "13" required> </td>
            </tr>
            <tr>
            <td> Enter Title :</td>
            <td> <input type="text" name="title" size="48"  required> </td>
            </tr>
            <tr>
            <td> Enter Author :</td>
            <td> <input type="text" name="author" size="48"  required> </td>
            </tr>
            <tr>
            <td> Enter Edition :</td>
            <td> <input type="text" name="edition" size="48"  required> </td>
            </tr>
            <tr>
            <td> Enter Publication: </td>
            <td> <input type="text" name="publication" size="48"  required> </td>
            </tr>
            <tr>
            <td></td>
            <td>
            <input type="submit" value="submit">
            <input type="reset" value="Reset">
            </td>
            </tr>
        </table>
    </form>
</body>
</html>
