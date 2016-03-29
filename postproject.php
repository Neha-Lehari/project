<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
</head>

<body>
<form name="form" id="form">
</form>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" >
    <tr>
      <td width="33%">POST A PROJECT</td>
      <td width="67%">&nbsp;</td>
    </tr>
    <tr>
      <td>USERNAME</td>
      <td><label for="username"></label>
      <input type="text" name="username" id="username" /></td>
    </tr>
    <tr>
      <td>PROJECT TITLE</td>
      <td><label for="project"></label>
      <input type="text" name="project" id="project" /></td>
    </tr>
    <tr>
      <td>SUBJECT AREA</td>
      <td><label for="subjectarea"></label>
        <select name="subjectarea" id="subjectarea">
          <option>select</option>
          <option>accounting</option>
          <option>advertising</option>
          <option>art</option>
          <option>bio</option>
      </select></td>
    </tr>
    <tr>
      <td>ACADEMIC LEVEL</td>
      <td><label for="academic"></label>
        <select name="academic" id="academic">
          <option>select</option>
          <option>university</option>
          <option>master</option>
          <option>phd</option>
          <option>high school</option>
      </select></td>
    </tr>
    <tr>
      <td height="26">DOCUMENT TYPE</td>
      <td><label for="document"></label>
        <select name="document" id="document">
          <option>select</option>
          <option>article</option>
          <option>essay</option>
      </select></td>
    </tr>
    <tr>
      <td>CITATION STYLE</td>
      <td><label for="citation"></label>
        <select name="citation" id="citation">
          <option>select</option>
          <option>footnotes</option>
          <option>headnotes</option>
      </select></td>
    </tr>
    <tr>
      <td>I NEED THIS PAPER BY</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>NUMBER OF SOURCES</td>
      <td><select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
        <option>1 </option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
      </select></td>
    </tr>
    <tr>
      <td>NUMBER OF PAGES</td>
      <td><select name="jumpMenu2" id="jumpMenu2" onchange="MM_jumpMenu('parent',this,0)">
        <option>1 </option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
      </select></td>
    </tr>
    <tr>
      <td>INVITE A PROF</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>DESCRIBE YOUR PROJECT IN FULL DETAIL</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>ADD 1 OR MORE ATTACHMENTS</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
    </tr>
  </table>
</form>
</body>
</html>