<?php
include("connect_db.php");
mysql_select_db($database);
$id=$_GET['id'];
$result = mysql_query("SELECT * FROM makerspace WHERE id=$id"); //selects the row(s) from the table and stores it in a resource. The id of the resource is stored in the variabl "result"
$row=mysql_fetch_array($result); //fetces the row which is stored in the resource
echo $row['name'];

mysql_close();
?>