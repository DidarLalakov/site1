<?php
// database connection code
if(isset($_POST['txtAdy']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records

$txtAdy = $_POST['txtAdy'];
$txtFamiliyasy = $_POST['txtFamiliyasy'];

//database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldAdy`, `fldFamiliyasy`) VALUES ('0', '$txtAdy', '$txtFamiliyasy')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>