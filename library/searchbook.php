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
<form action="searchbook2.php" method="POST">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong style="font-size: xx-large"><u>SEARCH BOOK:</u></strong></p>
<table width="200" border="1">
  <tr>
    <td>BookName:
    <input type="text" name="bName" id="textfield"></td>
    <td>Author:
    <input type="text" name="Author" id="textfield2"></td>
  </tr>
  <tr>
    <td>Publication:
    <input type="text" name="Publication" id="textfield3"></td>
    <td>Subject:
    <input type="text" name="Subject" id="textfield4"></td>
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