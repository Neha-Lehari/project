<?php
session_start();
if(isset($_POST["submit"]))
{
	$conn=mysqli_connect("localhost","shopdbuser","123","shopdb") or die(mysqli_connect_error());
	$bname=$_POST["brandname"];
	
    
	$q="insert into brand(brandname) values ('$bname')";
	
	mysqli_query($conn,$q) or die(mysqli_error($conn));

	
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
	{
	print $msg="brand added successfully";
	}
	else 
	{
		$msg="not added";
	}


}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="14%">add brand</td>
      <td width="86%">&nbsp;</td>
    </tr>
    <tr>
      <td>brandname</td>
      <td><label for="brandname"></label>
      <input type="text" name="brandname" id="brandname" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="add brand" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>