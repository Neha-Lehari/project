
<table width="1000" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right" bgcolor="#B4E6FD">welcome 
    
    <?php
	if(isset($_SESSION["n"]))
	{
		print $_SESSION["n"];
		print "<a href ='signout.php'>SIGNOUT </a>";
		print "<a href ='changepassword.php'>CHANGE PASSWORD </a>";
	}
	else 
	{
		print "GUEST";
	print "<a href ='login.php'>LOGIN </a>";
	print "<a href ='website.php'>SIGNUP </a>";
	
	}
	?>
    
    
    
  </td>
  </tr>
  <tr>
    <td align="right"><img src="images/index.jpg" width="1000" height="126" alt="header image" /></td>
  </tr>
  <tr>
    <td align="right"><table width="1000" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td bgcolor="#B4E6FD">home</td>
        <td bgcolor="#B4E6FD">about us</td>
        <td bgcolor="#B4E6FD">contact</td>
        <td bgcolor="#B4E6FD">feedback</td>
        <td bgcolor="#B4E6FD">search</td>
      </tr>
    </table></td>
  </tr>
</table>
