<?php
$conn= mysqli_connect("localhost","root","", "car_rental");
if(isset($_POST['submit']))
{
	$id = $_POST['edit_id'];
	$query = "select *from product where id = '$id' ";
	$query_run = mysqli_query($conn, $query);
	foreach ($query_run as $row)
	 {
	 	?>
<form action="update.php" method="POST">
	<input type="text" name="id" value="<?php echo $row['id']?>">
	<br>
	<label>Car Name</label><br>
	<input type="text" name="edit_car_name" value="<?php echo $row['car_name']?>" placeholder="Car Name">
<div>
	<label>Rent Per Day</label><br>
	<input type="text" name="edit_rent_per_day"  value="<?php echo $row['rent_per_day']?>" placeholder="Rent Per Day">
	<br>
	<label>Capacity</label><br>
	<input type="text" name="edit_capacity"  value="<?php echo $row['capacity']?>" placeholder="Capacity">
	<br>
	<a href="delete.php">Cancel</a>
	<button type="submit" name="updatebutn">Update</button>
	</form>
	<?php
	}
}
?>