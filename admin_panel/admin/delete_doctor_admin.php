<?php 
include("db.php");
session_start();

$email =$_SESSION['email'];
$delete_doctor_id = $_GET['id'];


$delete_query ="DELETE FROM doctor WHERE id='$delete_doctor_id'";

$delete =mysqli_query($conn,$delete_query);

if($delete){
	?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/skycare/admin_panel/admin/doctors_list_admin.php">

	<?php
}else{

}






 ?>