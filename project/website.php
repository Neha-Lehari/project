<?php
if(isset($_POST["submit"]))
{
	
	$un=$_POST["name"];

$conn=mysqli_connect("localhost","shopdbuser","123","shopdb") or die(mysqli_connect_error());
	$q="select * from signup where name='$un'";
	mysqli_query($conn,$q) or die(mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	print $cnt;
	if($cnt>0)
	{
		
  	$msg="user already exists";
	print $msg;
	}
	else 
	{
	$n=$_POST["name"];
	$age=$_POST["age"];
	$add=$_POST["address"];
	$pass=$_POST["password"];
	$gen=$_POST["gender"];
	$co=$_POST["country"];
	$dob=$_POST["day"]."/".$_POST["month"]."/".$_POST["year"];
	$upic=$_FILES["profilepic"]["name"];
	$tname=$_FILES["profilepic"]["tmp_name"];
	move_uploaded_file($tname,"images/$upic");
	$conn=mysqli_connect("localhost","shopdbuser","123","shopdb") or die(mysqli_connect_error());
	$q=" insert into signup values('$n','$age','$add','$pass','$gen','$co','$dob','$upic')";
	mysqli_query($conn,$q);
	
	
	header("location:thx.php");
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
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><?php
	include_once("template/header11.php");
    ?></td>
  </tr>
  <tr>
    <td align="center"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="23%"><strong>Name</strong></td>
            <td width="77%" align="center"><label for="name"></label>
            <input type="text" name="name" id="name" /></td>
          </tr>
          <tr>
            <td><strong>Age</strong></td>
            <td align="center"><label for="age"></label>
            <input type="text" name="age" id="age" /></td>
          </tr>
          <tr>
            <td><strong>Address</strong></td>
            <td align="center"><label for="address"></label>
            <input type="text" name="address" id="address" /></td>
          </tr>
          <tr>
            <td><strong>Password</strong></td>
            <td align="center"><label for="password">
              <input type="password" name="password" id="password" />
            </label></td>
          </tr>
          <tr>
            <td><strong>Confirm Password</strong></td>
            <td align="center"><label for="confirmpassword"></label>
            <input type="password" name="confirmpassword" id="confirmpassword" /></td>
          </tr>
          <tr>
            <td>gender</td>
            <td align="center"><input type="radio" name="gender" id="male" value="male" />
            <label for="male">male</label>              
            <label for="male">
            </label>
            <label>
              <input type="radio" name="gender" id="female" value="female" />
            female</label></td>
          </tr>
          <tr>
            <td>country </td>
            <td align="center"><label for="country"></label>
              <select name="country" id="country">
                <option>india</option>
                <option>aus</option>
                <option>china</option>
                <option>usa</option>
                <option>japan</option>
            </select></td>
          </tr>
          <tr>
            <td>date of birth</td>
            <td align="center"><label for="day"></label>
              <select name="day" id="day">
                <option>day</option>
                <?php
				for($i=1;$i<=31;$i++)
				{
					print "<option value ='$i'>$i</option>";
					
				}
				?>
                
                
                
                
              </select>
              <label for="month"></label>
              <select name="month" id="month">
                <option>month</option>
                <?php
				for($i=1;$i<=12;$i++)
				{
					print "<option value ='$i'>$i</option>";
					
				}
				?>
              </select>
              <label for="year"></label>
              <select name="year" id="year">
                <option>year</option>
                <?php
				for($i=1994;$i<=2015;$i++)
				{
					print "<option value ='$i'>$i</option>";
					
				}
				?>
              </select></td>
          </tr>
          <tr>
            <td>profile picture</td>
            <td align="center"><label for="profilepic"></label>
            <input type="file" name="profilepic" id="profilepic" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="center"><input type="submit" name="submit" id="submit" value="Sign Up" /></td>
          </tr>
        </table>
      </form>
      <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td>
    <?php
	include_once("template/footer11.php");
    ?>
    </td>
  </tr>
</table>




</body>
</html>