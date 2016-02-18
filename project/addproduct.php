<?php 
session_start();
if(isset($_POST["submit"]))
{
	$conn=mysqli_connect("localhost","shopdbuser","123","shopdb") or die(mysqli_connect_error());
	$pname=$_POST["productname"];
	$rate=$_POST["rate"];
	$discount=$_POST["discount"];
	$description=$_POST["description"];
	$cid=$_POST["choosecat"];
	$scid=$_POST["choosecat2"];
    $bcid=$_POST["choosecat3"];
	$pname=mysqli_real_escape_string($conn,$pname);
    $err=$_FILES["productpic"]["error"];
	if($err==4)
	{
		$cpic="nopic.gif";
	}
	else
	{
		$cpic=$_FILES["productpic"]["name"];
		$tname=$_FILES["productpic"]["tmp_name"];
		$dt=date_create();
		$tstamp=date_timestamp_get($dt);
		$fn=$_FILES["productpic"]["name"];
		$cpic=$tstamp.$fn;

	move_uploaded_file($tname,"adminpics/$cpic");
	}
	$conn=mysqli_connect("localhost","shopdbuser","123","shopdb") or die(mysqli_connect_error());
	$q="insert into addproduct(categoryid,subcatid,brandid,productname,rate,discount,description,productpic) values ('$cid','$scid','$bcid','$pname','$rate','$discount','$description','$cpic')";
	
	mysqli_query($conn,$q) or die(mysqli_error($conn));

	
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
	{
	print $msg="product added successfully";
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
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="24%">add product</td>
      <td width="76%">&nbsp;</td>
    </tr>
    <tr>
      <td>choose category</td>
      <td><label for="choosecat">
        <select name="choosecat" id="choosecat">
        
        
        
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
        </select>
        
        
        
        
        <input type="submit" name="viewsubcat" id="viewsubcat" value="go" />
      </label></td>
    </tr>
    <tr>
      <td>choose subcategory</td>
      <td><select name="choosecat2" id="choosecat2">
      <?php
		if(isset($_POST["viewsubcat"]))
		{
			$cid=$_POST["choosecat"];
		  $conn=mysqli_connect("localhost","shopdbuser","123","shopdb") or die(mysqli_connect_error());
	$q="select * from addsubcat where catid=$cid";
	
	$res=mysqli_query($conn,$q) or die(mysqli_error($conn));
	$x=mysqli_fetch_array($res);
	
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt>0)
	while($x=mysqli_fetch_array($res))
	{
		
    
		print "<option value='$x[0]'>$x[2]</option>";
	}
	else 
	{
	print "<option>no category selected</option>";
	}
		}
	?>
      
      
      
      
      </select></td>
    </tr>
    <tr>
      <td>choose brand</td>
      <td><select name="choosecat3" id="choosecat3">
      <?php
		
			
		  $conn=mysqli_connect("localhost","shopdbuser","123","shopdb") or die(mysqli_connect_error());
	$q="select * from brand";
	
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
      
      
      
      
      </select>
      </td>
    </tr>
    <tr>
      <td>productname</td>
      <td><label for="productname"></label>
      <input type="text" name="productname" id="productname" /></td>
    </tr>
    <tr>
      <td>rate</td>
      <td><label for="rate"></label>
      <input type="text" name="rate" id="rate" /></td>
    </tr>
    <tr>
      <td>discount</td>
      <td><label for="discount"></label>
      <input type="text" name="discount" id="discount" /></td>
    </tr>
    <tr>
      <td>description</td>
      <td><label for="description"></label>
      <input type="text" name="description" id="description" /></td>
    </tr>
    <tr>
      <td>productpicture</td>
      <td><label for="productpic"></label>
      <input type="file" name="productpic" id="productpic" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="add product" /></td>
    </tr>
  </table>
</form>
</body>
</html>