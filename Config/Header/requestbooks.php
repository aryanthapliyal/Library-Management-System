<!DOCTYPE HTML>
<body oncontextmenu="return false;">
<script>
document.onekeydown=function(e)
{
    if(event.keycode==123)
    {return false;}
    if(e.ctrlKey && e.shiftkey && e.keycode == 'I'.charCodeAt(0))
       {return false;}
       if(e.ctrlKey && e.shiftkey && e.keycode == 'J'.charCodeAt(0))
       {return false;}
}
    </script>
<html>
<body bgcolor="pink">
    <center><h2>Request new books from Library</h2></center>
    
    <form action="requestinfo.php" method="post">
 
        <table border="2" align="center" cellpadding="5" cellspacing="5">
        <tr>
            <td>Library ID:</td>
            <td> <input type="text" name="libid" size="48" minlength="1"required> </td>
            </tr>
        <tr>
            <td> Your Full Name :</td>
            <td> <input type="text" name="fname" size="48"  required> </td>
            </tr>
            <tr>
            <td> Enter ISBN :</td>
            <td> <input type="number" name="isbn" size="48" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"   maxlength = "13"  placeholder="enter 13 digits only!"required> </td>
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
</body>
<style>
    table
{
    position:relative;        
}
td
{    
    height:100px;
    width:100px;
    background-color:light blue;          
}
span
{
    top:5px;
    right:5px;
    position:absolute;
    height:100px;
    width:100px;
    background-color:red;    
}
    </style>
