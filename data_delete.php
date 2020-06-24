<?php
$conn= mysqli_connect("localhost","root","", "car_rental");
if(isset($_POST['submit']))
{
	$id = $_POST['delete_id'];
	$query= "DELETE FROM `product` WHERE id='$id' ";
	$query_run = mysqli_query($conn,$query);

	if($query_run)
	{
		echo "Your Data is Deleted";
	}
	else
	{
		echo "Your Data is Not Deleted";
	}
}
?>