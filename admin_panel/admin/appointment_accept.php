<?php 
include("db.php");
session_start();

$email =$_SESSION['email'];
$appoint_id = $_GET['id'];
$ac = '2';

$edit_query ="UPDATE apoinment SET accept='$ac' WHERE id='$appoint_id'";


$edit =mysqli_query($conn,$edit_query);

if($edit){
	?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/skycare/admin_panel/admin/requests_admin.php">

	<?php
}else{

}






 ?>