<?php
include("connect_db.php");
mysql_select_db($database);
$formData=$_POST['data'];
//print_r($formData);
$data = json_decode($formData);
//print_r($data);
$name= $data->name;
$description= $data->description;
$location= $data->location;
$fee= $data->fee;

$query="INSERT INTO makerspace (name,description,location,fee)
VALUES ('$name','$description','$location','$fee')";

$response=mysql_query($query);
if($response){
	echo "success";
};
mysql_close();
?>