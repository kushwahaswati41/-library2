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
<form action="deletebook2.php" method="post">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong><u style="font-size: xx-large">DELETE BOOK:</u></strong></p>
<table width="150" border="1">
  <tr>
    <td width="140">BookName:
    <input type="text" name="Name" id="textfield"></td>
  </tr>
  <tr>
    <td><p>ISBN:
      <input type="text" name="ISBN" id="textfield2">
    </p></td>
  </tr>
  <tr>
    <td>Subject:
    <input type="text" name="Subject" id="textfield3"></td>
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