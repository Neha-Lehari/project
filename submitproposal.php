<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="js/jquery-2.2.1.js"></script>
<script src="js/jquery-ui.min.js"></script>
<link href="js/jquery-ui.theme.min.css" rel="stylesheet" />
<script src="tinymce/jquery.tinymce.min.js"></script>
<script src="tinymce/tinymce.min.js"></script>
<script src="tinymce/plugins/anchor/plugin.min.js"></script>
 <script>tinymce.init({ selector:'textarea' });</script>
</head>

<body>
<form action="#" method="post" name="form1">
<table width="100%" border="0" cellspacing="0" cellspacing="0">
  <tr>
  <td>Job Posting</td>
    <td><?php
	include_once("vars.php");
	$projectid=$_GET["pid"]; 
	
	try{
		$conn=new PDO("mysql:host=$servername;dbname=$db",$username,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$stmt=$conn->prepare("select * from studentproject where projectid=$projectid");
		$stmt->execute();
		$conn=null;
		$rows=$stmt->rowCount();
		if($rows>0)
		{
			print "<table width='80%'>";
			
		while($x=$stmt->fetch(PDO::FETCH_BOTH))
		{
			
		print "<tr>";
			
		print "<td>
		<h3>$x[2]</h3>
	     Fixed Price- $x[11]</br>
		 Desciption:$x[13]</br>
		 Document Type:$x[5]</br>
		 Citation Style:$x[6]</br>
		 Due By:$x[7]</br>
		 Sources:$x[8]</br>
		 Pages:$x[9]</br>
		 Words:$x[10]</br>
		 Attachments:$x[14]</br>
		 Proposals</br> 
		 <td>About the client:</br> $x[1]</br> Subject Area:$x[3] </br>Academic Level:$x[4]</td>
		 </td>";
		
		
		}
		print "</table>";
		}
		else
		{
		print "<option>no description available</option>";
		}
	}
	catch(PDOException $e)
	{
		print "Error occured :".$e->getMessage();
	}
	?></td>
  </tr>
  <tr>&nbsp;</tr>
  <tr>
    <td>Propose Terms</td>
    
    <td>Bid $
      <input name="bid" type="text" value="" />
      </br> You'll Earn   $
      <input name="earn" type="text" value="" /></td>
    
  </tr>
  <tr>
  <td>Cover Letter </td>
  <td><textarea name="description" id="description"></textarea></td></tr>
  <tr>
  <tr>&nbsp;</tr>
  <td>Attachment(optional)</td>
  <td><input name="att" type="file" /></td>
  </tr>
  <tr>
  <td><input name="submit" type="submit" value="Accept And Submit Proposal" /></td></tr>
</table>
</form>
</body>
</html>