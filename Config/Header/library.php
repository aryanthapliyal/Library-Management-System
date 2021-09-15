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
        <header> </header>
        <head> </head>
<body bgcolor="87ceeb">
    <center><h2> Library Management System</h2></center>
    <!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
    <form action="InsertBooks.php" method="post" enctype="multipart/form-data">
 
        <table border="3" align="center" cellpadding="5" cellspacing="5" >
            <tr>
            <td> Enter ISBN :</td>
            <td> <input type="number" name="isbn" size="48" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"   maxlength = "13"  placeholder="enter 13 digits only!" required> </td>
            </tr>
            <tr>
            <td> Enter Title :</td>
            <td> <input type="text" name="title" size="48"  required> </td>
            </tr>
            <tr>
            <td> Enter Author :</td>
            <td> <input type="text" name="author" size="48" required> </td>
            </tr>
            <tr>
            <td> Enter Edition :</td>
            <td> <input type="text" name="edition" size="48" required> </td>
            </tr>
            <tr>
            <td> Enter Publication: </td>
            <td> <input type="text" name="publication" size="48" required> </td>
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
    </form>
  </body>
</html>
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
