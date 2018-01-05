<style type="text/css">
body {
	background-color: #0FF;
}
</style>

<?php
$Name= $_POST['Name'];
$ISBN = $_POST['ISBN'];
$Subject = $_POST['Subject'];

$con = mysqli_connect('localhost','root','','library');
$query = "DELETE FROM `book` WHERE Name='$Name'AND ISBN=$ISBN";
$run = mysqli_query($con,$query);
if($run==TRUE)
{
echo "book deleted<a href='deletebook.php'>click here to go back</a>";
}
else
{
	echo "Error !";
}
?>
