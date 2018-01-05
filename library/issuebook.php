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
<form action="issuebook2.php" method="POST">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p style="font-size: xx-large"><strong><u>ISSUE BOOK:</u></strong></p>
<table width="414" border="">
&nbsp;&nbsp;  <tr>
    <td width="187">MemberName:
    <input type="text" name="Name" id="textfield"></td>
    <td width="211">MemberId:
    <input type="text" name="Id" id="textfield2"></td>
  </tr>
  <tr>
    <td height="45">BookName:
    <input type="text" name="bName" id="textfield3"></td>
    <td><p>ISBN:
 
  <input type="text" name="ISBN" id="textfield4">
      </p></td>
  </tr>
  <tr>
    <td>DateOfIssue:[yyyy-mm-dd]
    <input name="DateOfIssue" type="text"></td>
    <td> DateOfReturn: [yyyy-mm-dd]
      <input name="DateOfReturn" type="text" max="3000-12-31" min="2017-01-01" autocomplete="on"></td>
  </tr>
  <tr>
    <td height="45"><p>Author:
  
  <input type="text" name="Author" id="textfield7">
      </p>
      </td>
    <td><p>Cost:
 
  <input type="text" name="Cost" id="textfield8">
      </p></td>
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