<script>
 function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #9FF;
}
</style>
</head>

<body>
<form action="addmember4.php" method="POST" >
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><u><strong style="font-size: xx-large">ADD MEMBER</strong></u>:</p>

<table width="314" border="1">
  <tr>
    <td width="145">Name:   &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
      <label for="textfield"></label>
    <input type="text" name="Name" id="textfield"></td>
    <td width="153">Id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label for="textfield2"></label>
    <input type="text" name="Id" id="textfield2"></td>
    
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
    <td>Address:
    <input type="text" name="Address" id="textfield4"></td>
   
  </tr>
  <tr>
    <td height="26"><p>ContactNo.:
      <input type="Phone" placeholder="9899***" name="ContactNo" onkeypress="return isNumberKey(event)">
    [*Enter only(0-9)]</p>
      </td>
    <td>EmailId:
    <input type="email" name="EmailId" id="email"></td>
    
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