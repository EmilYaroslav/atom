
<?php
/*
$user_name = "moretode_emil" ;
$password = "emilisawesome";
$database = "moretode_emil";
$server = "localhost";
*/
?>

<?php

$user_name = "root" ;
$password = "root";
$database = "hackathon";
$server = "localhost:8889";

?>
<?php
$con = mysql_connect($server, $user_name, $password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_found = mysql_select_db($database);

/*if ($db_found) {
print "Database Found <br />";
}
else {
print "Database NOT Found";
}
*/
?>