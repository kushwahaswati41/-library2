<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #3FF;
}
</style>
</head>

<body>
<form action="deletemember2.php" method="POST">
<p style="font-size: xx-large">&nbsp;</p>
<p style="font-size: xx-large">&nbsp;</p>
<p style="font-size: xx-large"><strong><u>DELETE MEMBER:</u></strong></p>
<table width="150" border="1">
  <tr>
    <td width="140">Name:
    <input type="text" name="Name" id="textfield"></td>
  </tr>
  <tr>
    <td><p>Id:
  <input type="text" name="Id" id="textfield2">
    </p></td>
  </tr>
  <tr>
     <td>Branch:&nbsp;
      <select name="Branch" id="select">
        <option>M.C.A</option>
      <option>CS</option>
      <option>IT</option>
      <option>PAINT TECHNOLOGY</option>
      <option>OIL TECHNOLOGY</option>
      <option>MACHANICAL</option>
      <option>ELECTRONICS</option>
      <option>ELECTRICAL</option>
      <option>CHEMICAL</option>
      <option>M.TECH</option>
      <option>OTHERS</option>
      <option>BIO-TECHNOLOGY</option>
</select></textarea></td>
  </tr>
</table>
<p>
  <input type="submit" name="submit" id="submit" value="Submit">
  <a href="home.php">
  <input type="button" name="button" id="button" value="Home"></a>
</p>

</form>
</body>
</html>