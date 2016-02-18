
<?php 
session_start();
if(isset($_POST["submit"]))
{
	$conn=mysqli_connect("localhost","shopdbuser","123","shopdb") or die(mysqli_connect_error());
	$size=$_POST["size"];
	$stock=$_POST["stock"];

	
	$color=$_POST["choosecolor"];
	$pid=$_POST["chooseprod"];
	
    
	$q="insert into addsize(size,stock) values ('$size','$stock')";
	
	mysqli_query($conn,$q) or die(mysqli_error($conn));

	
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt==1)
	{
	print $msg="size added successfully";
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
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="22%">add size</td>
      <td width="78%">&nbsp;</td>
    </tr>
    <tr>
      <td>choose category</td>
      <td><label for="choosecat"></label>
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
      <input type="submit" name="submit1" id="submit1" value="go" /></td>
    </tr>
    <tr>
      <td>choose subcat</td>
      <td><select name="choosesubcat" id="choosesubcat">
     <?php
		if(isset($_POST["submit1"]))
		{
			$cid=$_POST["choosecat"];
			$scid=$_POST["choosesubcat"];
			
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
      
      
      
      </select>
      <input type="submit" name="submit2" id="submit2" value="go" /></td>
    </tr>
    <tr>
      <td>choose product</td>
      <td><select name="chooseprod" id="chooseprod">
      <?php
		if(isset($_POST["submit2"]))
		{$scid=$_POST["choosesubcat"];
			
		  $conn=mysqli_connect("localhost","shopdbuser","123","shopdb") or die(mysqli_connect_error());
	$q="select * from addproduct where subcatid=$scid";
	
	$res=mysqli_query($conn,$q) or die(mysqli_error($conn));
	$x=mysqli_fetch_array($res);
	
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt>0)
	while($x=mysqli_fetch_array($res))
	{
		
    
		print "<option value='$x[0]'>$x[4]</option>";
	}
	else 
	{
	print "<option>no product selected</option>";
	}
		}
	?>
         
      
      </select></td>
    </tr>
    <tr>
      <td>color</td>
      <td><select name="choosecolor" id="choosecolor">
      <?php
			
		  $conn=mysqli_connect("localhost","shopdbuser","123","shopdb") or die(mysqli_connect_error());
	$q="select * from addcolor";
	
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
	print "<option>no color selected</option>";
			}
	?>
      </select></td>
    </tr>
    <tr>
      <td>size</td>
      <td><label for="size"></label>
      <input type="text" name="size" id="size" /></td>
    </tr>
    <tr>
      <td>stock</td>
      <td><label for="stock"></label>
      <input type="text" name="stock" id="stock" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="add size" /></td>
    </tr>
  </table>
</form>
</body>
</html>