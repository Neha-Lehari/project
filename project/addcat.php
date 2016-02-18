<?php 
session_start();
if(isset($_POST["submit"]))
{
	$cname=$_POST["catname"];
    $err=$_FILES["catpic"]["error"];
	if($err==4)
	{
		$cpic="nopic.gif";
	}
	else
	{
		$cpic=$_FILES["catpic"]["name"];
		$tname=$_FILES["catpic"]["tmp_name"];
		$dt=date_create();
		$tstamp=date_timestamp_get($dt);
		$fn=$_FILES["catpic"]["name"];
		$cpic=$tstamp.$fn;

	move_uploaded_file($tname,"adminpics/$cpic");
	}
	$conn=mysqli_connect("localhost","shopdbuser","123","shopdb") or die(mysqli_connect_error());
	$q="insert into addcat(categoryname,categorypic) values ('$cname','$cpic')";
	
	mysqli_query($conn,$q) or die(mysqli_error($conn));
	//$x=mysqli_fetch_array($res);
	
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
	{
		print $msg="category added successfully";
	}
	else 
	{
		$msg="not added";
	}


}




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="34%">ADD CATEGORY</td>
      <td width="66%">&nbsp;</td>
    </tr>
    <tr>
      <td>CATEGORY NAME</td>
      <td><label for="catname"></label>
      <input type="text" name="catname" id="catname" /></td>
    </tr>
    <tr>
      <td>CATEGORY PIC</td>
      <td><label for="catpic"></label>
      <input type="file" name="catpic" id="catpic" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="ADD CATEGORY" /></td>
    </tr>
  </table>
</form>
</body>
</html>