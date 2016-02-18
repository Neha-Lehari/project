<?php 
session_start();
if(isset($_POST["submit"]))
{
	$conn=mysqli_connect("localhost","shopdbuser","123","shopdb") or die(mysqli_connect_error());
	$scname=$_POST["subcatname"];
	$cid=$_POST["cat"];
    $err=$_FILES["subcatpic"]["error"];
	if($err==4)
	{
		$cpic="nopic.gif";
	}
	else
	{
		$cpic=$_FILES["subcatpic"]["name"];
		$tname=$_FILES["subcatpic"]["tmp_name"];
		$dt=date_create();
		$tstamp=date_timestamp_get($dt);
		$fn=$_FILES["subcatpic"]["name"];
		$cpic=$tstamp.$fn;

	move_uploaded_file($tname,"adminpics/$cpic");
	}
	$conn=mysqli_connect("localhost","shopdbuser","123","shopdb") or die(mysqli_connect_error());
	$q="insert into addsubcat(catid,subcatname,subcatpic) values ('$cid','$scname','$cpic')";
	
	mysqli_query($conn,$q) or die(mysqli_error($conn));

	
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
      <td width="25%">add subcategory</td>
      <td width="75%">&nbsp;</td>
    </tr>
    <tr>
      <td>choose main category</td>
      <td><label for="cat"></label>
        <select name="cat" id="cat">
          <option>select</option>


<?php
		  $conn=mysqli_connect("localhost","shopdbuser","123","shopdb") or die(mysqli_connect_error());
	$q="select * from addcat";
	
	$res=mysqli_query($conn,$q) or die(mysqli_error($conn));
	$x=mysqli_fetch_array($res);
	
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt>0)
	while($x=mysqli_fetch_array($res))
	{
		
    
		print "<option value='$x[0]'>$x[1]</option>";
	}
	else 
	{
	print "<option>no category selected</option>";
	}
	?>

      </select></td>
    </tr>
    <tr>
      <td>subcat name</td>
      <td><label for="subcatname"></label>
      <input type="text" name="subcatname" id="subcatname" /></td>
    </tr>
    <tr>
      <td>subcat pic</td>
      <td><label for="subcatpic"></label>
        <label for="subcatpic2"></label>
      <input type="file" name="subcatpic" id="subcatpic2" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="addsubcat" /></td>
    </tr>
  </table>
</form>
</body>
</html>