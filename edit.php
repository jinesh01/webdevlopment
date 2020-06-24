<!-- Admin -->
<?php
if(isset($_POST['submit']))
{
	$id = $_POST['edit_id'];
	$query = "select *from product where id = '$id' ";
	$query_run = mysqli_query($conn, $query); 
	 
}
?>
<form>
	<div>
	<label>Product Name</label>
	<input type="text" name="" placeholder="Car Name">
</div>
<div>
	<label>Product Prize</label>
	<input type="text" name="" placeholder="Rent Per Day">
	<label>Capcity</label>
	<input type="text" name="" placeholder="Capcity">
	</form>
	
