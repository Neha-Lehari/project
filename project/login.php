<?php 
session_start();
include_once("template/header11.php");
if(isset($_POST["submit"]))
{
	$un=$_POST["username"];
    $p=$_POST["password"];

$conn=mysqli_connect("localhost","shopdbuser","123","shopdb") or die(mysqli_connect_error());
	$q="select * from signup WHERE name='$un' and password='$p'";
	
	$res=mysqli_query($conn,$q) or die(mysqli_error($conn));
	$x=mysqli_fetch_array($res);
	
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
	{
		$_SESSION["n"]=$x[0];
	
		header("location:thx.php");
	}
	else 
	{
		$msg="incorrect";
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
      <td>login</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td> username</td>
      <td><label for="username"></label>
      <input type="text" name="username" id="username" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>password</td>
      <td><label for="password"></label>
      <input type="text" name="password" id="password" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="login" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>


<?php
if(isset($_POST["submit"]))
{
print $msg;
}
?>
<?php
include_once("template/footer1.php");
?>
</body>
</html>
