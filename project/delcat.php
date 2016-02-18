<?php
$cid=$_GET["catid"];
  $conn=mysqli_connect("localhost","shopdbuser","123","shopdb") or die(mysqli_connect_error());
	$qu="delete from addcat where categoryid=$cid";
	mysqli_query($conn,$qu) or die(mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
    header("location:gridview.php");



?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>