<?php
include '../GG/Connect.php';
$query= "SELECT * FROM pokedex WHERE 1";
$result= mysqli_query($conn,$query);
$data =mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($data); die();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Server</title>
		<style type="text/css">
			td{
				border: 1px solid black}
		</style>
	</head>
	<body>
		<table>
			<tbody>
				<?php foreach($data as $row): ?>
				<tr>
					<td><?php echo $row['ID'] ?></td>
					<td><?php echo $row['Name'] ?></td>
					<td><?php echo $row['Type'] ?></td>
				</tr>
				<?php endforeach;?>
				
			</tbody>
		</table>


		<form action="../GG/Create.php" method="post">
			Name : <input type="text" name="name" placeholder="Pokemon Name"><br>
			Type  :  <input type="text" name="type" placeholder="Pokemon Type"><br>
			<input type="submit" name="register" value="Add to pokedex"><br>
		</form>
		<p><br><br></p>



		<form action="../GG/Delete.php" method="post">
		<select name="id">
			<?php foreach($data as $row): ?>
				<option value="<?php echo $row['ID'] ?>"> 
				<?php echo $row['Name'] ?> 
				</option>
			<?php endforeach;?>	
		<!-- <form action="../GG/Update.php" method="post"> -->	
		</select>
			<input type="submit" name="delete" value="Delete">
		</form>




		<form action="../GG/Data.php" method="post">
			<input type="submit" name="data" value="Show Database">
		</form>
			<p><br><br></p>
			<form action="../GG/Update.php">
		<select name="update">
			<?php foreach($data as $row): ?>
				<option value="<?php echo $row['ID'] ?>"> 
				<?php echo $row['Name'] ?> 
				</option>
			<?php endforeach;?>		
		</select>
			<input type="submit" name="next" value="Update">
		</form>



	</body>
</html>
