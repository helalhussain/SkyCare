<?php 
include("db.php");
session_start();

$email =$_SESSION['email'];
$delete_patient_id = $_GET['id'];


$delete_query ="DELETE FROM patient WHERE id='$delete_patient_id'";

$delete =mysqli_query($conn,$delete_query);

if($delete){
	?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/skycare/admin_panel/admin/patients_list_admin.php">

	<?php
}else{

}






 ?>