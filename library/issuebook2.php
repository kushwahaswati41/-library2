<style type="text/css">
body {
	background-color: #0FF;
}
</style>

<?php
$Name= $_POST['Name'];
$bName = $_POST['bName'];
$Id = $_POST['Id'];
$ISBN = $_POST['ISBN'];
$DateOfIssue = $_POST['DateOfIssue'];
$DateOfReturn = $_POST['DateOfReturn'];
$Author = $_POST['Author'];
$Cost = $_POST['Cost'];

$con = mysqli_connect('localhost','root','','library');
$query = "INSERT INTO IssueBook(Name,BookName,ISBN,DateOfIssue,DateOfReturn,Author,Cost,Id) VALUES ('$Name','$bName',$ISBN,'$DateOfIssue','$DateOfReturn','$Author',$Cost,$Id)";
	$run = mysqli_query($con,$query);
	if($run==TRUE)
	{
echo "Book is Issued<a href='issuebook.php'>click here issue more</a>";
	}
	else
	{
		echo "Error !";
	}
?>
