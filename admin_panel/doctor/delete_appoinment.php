<?php 
include("db.php");
session_start();

$email =$_SESSION['email'];
$delete_id = $_GET['id'];


$delete_query ="DELETE FROM apoinment WHERE id='$delete_id'";

$delete =mysqli_query($conn,$delete_query);

if($delete){
	?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/skycare/admin_panel/doctor/my_appointments_doctor.php">

	<?php
}else{

}






 ?>