<?php
	$conn= mysqli_connect("localhost","root","","car_rental");
	if(isset($_POST['updatebutn']))
	{
		$id= $_POST['id'];
		$car_name = $_POST['edit_car_name'];
		$rent_per_day = $_POST['edit_rent_per_day'];
		$capacity = $_POST['edit_capacity'];

		$query = "update product set car_name='$car_name', rent_per_day = '$rent_per_day', capacity = '$capacity'  where id = '$id' ";
		$query_run= mysqli_query($conn,$query);

		if($query_run)
		{
			echo "Your Data is Updated";
		}
		else
		{
			echo "Your Data is not Updated";
		}
	}
?>