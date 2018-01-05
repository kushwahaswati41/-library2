<style type="text/css">
body {
	background-color: #0FF;
}
</style>

<?php
$Name= $_POST['Name'];
$Subject = $_POST['Subject'];
$ISBN = $_POST['ISBN'];
$Author = $_POST['Author'];
$Publication = $_POST['Publication'];
$Cost = $_POST['Cost'];
$con = mysqli_connect('localhost','root','','library');
$query = "INSERT INTO book (Name,ISBN,Author,Publication,Cost,Subject) 
          VALUES ('$Name',$ISBN,'$Author','$Publication',$Cost,'$Subject')";
	$run = mysqli_query($con,$query);
	if($run==TRUE)
	{
echo "Book Inserted<a href='addbook.php'>click here insert more</a>";
	}
	else
	{
		echo "Error !";
	}
?>
