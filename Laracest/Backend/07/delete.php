<?php
require('connect.php');
$ud=$_GET['id'];
$query="DELETE FROM customer WHERE id=$id";
$result=mysql_query