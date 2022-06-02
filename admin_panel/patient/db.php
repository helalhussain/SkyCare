<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "skycare";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die(" Database connection faild !!".mysqli_connect_error());

    }else{
        //echo "<script>alert('connected to Db')</script>";
    }
    


?>