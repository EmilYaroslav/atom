<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sparkling Science</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>
	<?php 
	include("scripts/navigation.php");
	include("scripts/functions.php");
	include ('scripts/connect_db.php'); 
//	$sparkUrl = $_GET['sparkUrl'];
	$id = '1';
	$query = $conn->query("SELECT * FROM users WHERE id='$id'"); //selects the row(s) from the table and stores it in a resource. The id of the resource is stored in the variabl "result"
	
	$row = $query->fetch_object(); //fetces the row which is stored in the resource
	print_r($query);
	$id= $row->id;
	$firstName= $row->name;
	$slastName =$row->lastName;
	$email= $row->email;
	$password= $row->password;
	$memberOf= $row->memberOf;
	$adminOfMs= $row->adminOfMs;
	$adminOfMt= $row->adminOfMt;
	$follows= $row->follows;
	
	$profileUrl= "\"".$id."jpg\"";
	?>
	<div class="container">
		<div class="row-fluid">
			
		</div>
	</div>
    
<?php include("scripts/footer.php");?>

</body>
</html>
