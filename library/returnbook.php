<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #0FF;
}
</style>
</head>

<body>
<form action="returnbook2.php" method="POST">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong style="font-size: xx-large"><u>RETURN BOOK:</u></strong></p>
<table width="150" border="1">
  <tr>
    <td width="140">BookName:
    <input type="text" name="bName" id="textfield"></td>
  </tr>
  <tr>
    <td>ISBN:
    <input type="text" name="ISBN" id="textfield2"></td>
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