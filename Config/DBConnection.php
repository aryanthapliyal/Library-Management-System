<?php
define('DB_SERVER', 'localhost:3306');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'books'); 
$db = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
?>