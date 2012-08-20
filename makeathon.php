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
<style type="text/css">
.navbar .nav > li > a{
	padding:15px 10px;
}

.navbar .btn-group .btn {
	margin-top:6px;
}

body {
	background: url(img/grid-18px-masked.png) repeat-x;
	padding-top: 50px;
	padding-bottom: 40px;
}

.container{
	margin-top: 50px;
}

.hero-unit{
	background:rgb(179, 234, 255) url(img/grid-18px-masked.png) repeat-x;
}

.jA{
/*	background:#8ED9FF;
*/}

.jAAttending > img{
	margin:3px auto auto 3px;
	height:32px;
	border:3px solid #CCC;
	width:auto;
	cursor:pointer;
}

footer{
	padding:20px;
}

.well{
	background: rgb(239, 250, 255);
}

.mat{
	
}

.matinfo{
	background: white;
	padding:10px;
}

.location{
	margin-top:10px;
}

.bigbox{
	background: #aaa;
}

.leftbox,
.rightbox{
	background:white;
}

.span4,
.span8{
	border-radius: 4px;
}

</style>
<link href="css/bootstrap-responsive.css" rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
	<?php include("./navigation.php"); ?>
	<?php include ('connect_db.php'); ?>
	<div class="container">
		
		<div class="row-fluid">
			<div class="span12 hero-unit">
				<div class="row-fluid">
					<div class="span12 head">
						<h1 style="">Welcome to Mobile Health Hack</h1>
					</div>
					<div class="row-fluid mat">
						<div class="span4 matinfo">
							<a class="btn btn-info btn-large" href="#" >Attend this make-a-thon!</a>
							<div class="clearfix"></div><br><br>
							<span class="span4" style="font-size:54px;">214</span>
							<p style="margin: -20px auto auto 20px;" class="span6">people attending</p>
							<div class="clearfix"></div><br>
							<img src="./img/marker.png" style="height:30px; width:auto;" class="span4"/>
							<p class="span8">Vasastan. Stockholm, Sweden</p>
						</div>
						<span class="span8 matlogo" style="background:black;">

						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row-fluid well bigbox">
			<div class="span4 leftbox">
				<div>
					<div class="well">
						<h3>Organizers</h3>
					</div>
					<div class="well">
						<h3>Partners</h3>
					</div>
					<div class="well">
						<h3>Attendees</h3>
					</div>
				</div>
			</div>
			<div class="span8 well rightbox">
				<form action="post_comment.php" method="post">
					<table>
						<tr><td>Leave a comment below</td><td><input type="hidden" name="comment_on" size=40 readonly="readonly" value="<?php print md5($_SERVER['PHP_SELF']); ?>" /></td></tr>
 
						<tr><td>Comment: </td><td><textarea name="comment" cols=30></textarea></td></tr>
 
						<tr><td>Comment By: </td><td><input type="text" size=40 name="comment_by" /></td></tr>
 
						<tr><td></td><td><input type="submit" value="Submit" /></td></tr>
					</table>
				</form>
				<?php
				$no_of_comments="10";
				mysql_select_db($database);
				$pagename=md5($_SERVER['PHP_SELF']);
				$query=mysql_query("SELECT * FROM comments WHERE comment_on='$pagename' ORDER BY id DESC LIMIT 0, $no_of_comments");
				echo "<br />";
 
				echo "<h3>Latest Comments</h3>";
				while($fetch=mysql_fetch_array($query)) {
					echo "<p>".$fetch['comment']."<br/><sub><b>Comment by: </b>".$fetch['comment_by']."</sub><hr /><p>";
				}
				mysql_close();
				?>
			</div>
		</div>
	</div>
</body>
</html>
