<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library</title>
    <link href="" rel="stylesheet">
    <link rel="stylesheet" href="style.css">    
    <link rel="javascript" href="pg.js">    
</head>
<body>
    <header>
    <div class="wrapper">
        <div class="logo">
            <img src="" alt="">
        </div>
<ul class="nav-area">
<li><a href="mainpage.php">About us</a></li>
<li><a href="dsplybks.php">Read books available</a></li>
<li><a href="requestbooks.php">Request new books</a></li>
<li><a href="library.php">Register new books</a></li>
<li><a href="upload&fetchimg.php">Preview images of books </a></li>
<li><a href="displayrequest.php">Requested Books</a></li>
</ul>
</div>
<div class="welcome-text">
        <h1>
		GET <span>READING!</span></h1>
<a href="SearchBooks.php">Search the book for you</a>
    </div>
</header>

</body>
</html>
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
