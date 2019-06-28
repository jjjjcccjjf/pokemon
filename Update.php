<form  method="POST">
	<input type="text" name="uname" placeholder="Change the name">
	<input type="text" name="utype" placeholder="Change the type">
	<input type="submit" name="update" value="Update">
</form>
<?php
include('../GG/Connect.php');
$uid= $_POST['update'];
if(isset($_POST['filename'],$_POST['utype'])){
   $uname=$_POST['uname'];
   $utype=$_POST['utype'];
}
$sqlupdate="UPDATE pokedex SET Name='$uname' ,Type = '$utype' WHERE id = $uid ";
mysqli_query($conn,$sqlupdate);

?> 	
