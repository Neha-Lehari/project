<?php
  $conn=mysqli_connect("localhost","shopdbuser","123","shopdb") or die(mysqli_connect_error());
	$qu="select * from signup";
	$res=mysqli_query($conn,$qu) or die(mysqli_error($conn));
	$cnt=mysqli_affected_rows($conn);
	mysqli_close($conn);
	if($cnt>0)
	{
		
		print "<table width='100%' cellspacing='0' cellpadding='0'>
				<tr bgcolor='#4E8FFC'>
			<th>Picture</th>
			<th>Name</th>
			<th>age</th>
			<th>Gender</th>
			<th>country</th>
			
		</tr>
		"
		;
		while($x=mysqli_fetch_array($res))
		{
			print "
			
			
			
			
			<tr bgcolor='#89CFFA'>
					<td><img src='useruploads/$x[7]' height='75'></td>
					<td>$x[0]</td>
					<td>$x[1]</td>
					
					
					<td>$x[4]</td>
					<td>$x[5]</td>
					
				</tr>";
		}
		print "</table>";
	}
	else
	{
		print "No members found";
	}
	?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>