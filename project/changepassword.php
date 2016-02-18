<?php
session_start();
if(isset($_POST["submit"]))
{
	
	$un=$_SESSION["n"];
	$oldp=$_POST["cpassword"];
	$newp=$_POST["npassword"];
	$cnewp=$_POST["cnpassword"];
	if($newp==$cnewp)
	{
$conn=mysqli_connect("localhost","shopdbuser","123","shopdb") or die(mysqli_connect_error());
	$q="update signup set password ='$newp' where name='$un' and
	password='$oldp'";
	mysqli_query($conn,$q) or die(mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt>0)
	{
		print $msg="password changed";
	}
	else 
	{
		print $msg="current password doesn't match";
	}
	}
	else 
	print $msg="passwords doesn't match";
}






?>











<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="40%">CHANGE PASSWORD</td>
      <td width="60%">&nbsp;</td>
    </tr>
    <tr>
      <td>CURRENT PASSWORD</td>
      <td><label for="cpassword"></label>
      <input type="text" name="cpassword" id="cpassword" /></td>
    </tr>
    <tr>
      <td>NEW PASSWORD</td>
      <td><label for="npassword"></label>
      <input type="text" name="npassword" id="npassword" /></td>
    </tr>
    <tr>
      <td>CONFIRM NEW PASSWORD</td>
      <td><label for="cnpassword"></label>
      <input type="text" name="cnpassword" id="cnpassword" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="CHANGE PASSWORD" /></td>
    </tr>
  </table>
</form>
</body>
</html>