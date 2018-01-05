<style type="text/css">
body {
	background-color: #0FF;
}
</style>

<?php
$bName= $_POST['bName'];
$ISBN = $_POST['ISBN'];
$con = mysqli_connect('localhost','root','','library');
$query = "DELETE FROM `issuebook` WHERE BookName='$bName' AND ISBN=$ISBN";
$run = mysqli_query($con,$query);
if($run==TRUE)
{
echo "book is returned<a href='returnbook.php'>click here to go back</a>";
}
else
{
	echo "Error !";
}
?>
