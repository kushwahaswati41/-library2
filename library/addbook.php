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
<form action="addbook2.php" method="POST">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong style="font-size: xx-large"><u> ADD BOOK:</u></strong></p>

<table width="307" border="1">
  <tr>
    <td width="147">BookName:&nbsp;&nbsp;&nbsp;
    <input type="text" name="Name" id="textfield"></td>
    <td width="144">Subject:
    <input type="text" name="Subject" id="textfield2"></td>
  </tr>
  <tr>
    <td>ISBN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="ISBN" id="textfield3"></td>
    <td>Author:
    <input type="text" name="Author" id="textfield4"></td>
  </tr>
  <tr>
    <td>Publication:
    <input type="text" name="Publication" id="textfield5"></td>
    <td>Cost:&nbsp;&nbsp;&nbsp;
    <input type="text" name="Cost" id="textfield6"></td>
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