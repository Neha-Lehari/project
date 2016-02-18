<?php 
session_start();

{
	$cid=$_GET["catid"];
	
	
	$conn=mysqli_connect("localhost","shopdbuser","123","shopdb") or die(mysqli_connect_error());
	$q="select * from addcat where categoryid='$cid'";
	
	$res=mysqli_query($conn,$q) or die(mysqli_error($conn));
	$x=mysqli_fetch_array($res);
	
	//$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	//if($cnt==1)
	//{
	//	print $msg="category added successfully";
	//}
	//else 
	//{
	//	$msg="not added";
	//}



if(isset($_POST["submit"]))
{
	$conn=mysqli_connect("localhost","shopdbuser","123","shopdb") or die(mysqli_connect_error());
	
	
	$cname=$_POST["catname"];
    $err=$_FILES["catpic"]["error"];
	if($err==4)
	{
		$cpic=$x[2];
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
	
	$q="update addcat set categoryname='$cname' ,categorypic='$cpic'
	where categoryid='$cid'";
	
	mysqli_query($conn,$q) or die(mysqli_error($conn));
	//$x=mysqli_fetch_array($res);
	
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
	{
		header("location:gridview.php");
	}
	else 
	{
		$msg="not updated";
	}
	if(isset($_POST["submit2"]))
{
	header("location:gridview.php");
	
}
	
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
      <td width="34%">update CATEGORY</td>
      <td width="66%">&nbsp;</td>
    </tr>
    <tr>
      <td>CATEGORY NAME</td>
      <td><label for="catname"></label>
      <input type="text" name="catname" id="catname" value="
      <?php
	  print $x[1];
	  
	  
	  ?>
      
      " /></td>
    </tr>
    <tr>
      <td>CATEGORY PIC</td>
      <td><p>
        <label for="catpic"></label>
      </p>
        <p><?php
        print "<img src='adminpics/$x[2]' height=50>";
		
		?>
		</p>
      <p>
        <input type="file" name="catpic" id="catpic" />
      </p></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="ADD CATEGORY" />
      <input type="submit" name="submit2" id="submit2" value="back" /></td>
    </tr>
  </table>
</form>
</body>
</html>