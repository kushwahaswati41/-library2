<style type="text/css">
body {
	background-color: #0FF;
}
</style>

<?php
$Name= $_POST['Name'];
$Branch = $_POST['Branch'];
$Id = $_POST['Id'];

$con = mysqli_connect('localhost','root','','library');
if(!$con)
{
echo "database is not connected";
}
else
{
mysqli_query($con,"DELETE FROM `member` WHERE Name='$Name'And Id=$Id");
if(mysqli_affected_rows($con)>0)
{
echo "member deleted<a href='deletemember.php'>click here to go back</a>";
}
}
?>
